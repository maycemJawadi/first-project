<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // listCategorie
        if ($pathinfo === '/listCategorie') {
            return array (  '_controller' => 'AppBundle\\Controller\\CategorieController::listAction',  '_route' => 'listCategorie',);
        }

        // addCategorie
        if ($pathinfo === '/addCategorie') {
            return array (  '_controller' => 'AppBundle\\Controller\\CategorieController::addAction',  '_route' => 'addCategorie',);
        }

        // modifCategorie
        if (0 === strpos($pathinfo, '/modifCategorie') && preg_match('#^/modifCategorie/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'modifCategorie')), array (  '_controller' => 'AppBundle\\Controller\\CategorieController::modifAction',));
        }

        // suppCategorie
        if (0 === strpos($pathinfo, '/suppCategorie') && preg_match('#^/suppCategorie/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'suppCategorie')), array (  '_controller' => 'AppBundle\\Controller\\CategorieController::suppAction',));
        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        // listRole
        if ($pathinfo === '/listRole') {
            return array (  '_controller' => 'AppBundle\\Controller\\RoleController::listAction',  '_route' => 'listRole',);
        }

        // addRole
        if ($pathinfo === '/addRole') {
            return array (  '_controller' => 'AppBundle\\Controller\\RoleController::addAction',  '_route' => 'addRole',);
        }

        // modifRole
        if (0 === strpos($pathinfo, '/modifRole') && preg_match('#^/modifRole/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'modifRole')), array (  '_controller' => 'AppBundle\\Controller\\RoleController::modifAction',));
        }

        // suppRole
        if (0 === strpos($pathinfo, '/suppRole') && preg_match('#^/suppRole/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'suppRole')), array (  '_controller' => 'AppBundle\\Controller\\RoleController::suppAction',));
        }

        // listShop
        if ($pathinfo === '/listShop') {
            return array (  '_controller' => 'AppBundle\\Controller\\ShopController::listAction',  '_route' => 'listShop',);
        }

        // nosBoutique
        if ($pathinfo === '/nosBoutique') {
            return array (  '_controller' => 'AppBundle\\Controller\\ShopController::nosBoutiqueAction',  '_route' => 'nosBoutique',);
        }

        // BoutiqueA
        if ($pathinfo === '/BoutiqueA') {
            return array (  '_controller' => 'AppBundle\\Controller\\ShopController::BoutiqueAddressAction',  '_route' => 'BoutiqueA',);
        }

        if (0 === strpos($pathinfo, '/a')) {
            // addShop
            if ($pathinfo === '/addShop') {
                return array (  '_controller' => 'AppBundle\\Controller\\ShopController::addAction',  '_route' => 'addShop',);
            }

            // affichShop
            if (0 === strpos($pathinfo, '/affichShop') && preg_match('#^/affichShop/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'affichShop')), array (  '_controller' => 'AppBundle\\Controller\\ShopController::afficheAction',));
            }

        }

        // modifShop
        if (0 === strpos($pathinfo, '/modifShop') && preg_match('#^/modifShop/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'modifShop')), array (  '_controller' => 'AppBundle\\Controller\\ShopController::modifAction',));
        }

        // suppShop
        if (0 === strpos($pathinfo, '/suppShop') && preg_match('#^/suppShop/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'suppShop')), array (  '_controller' => 'AppBundle\\Controller\\ShopController::suppAction',));
        }

        // listUser
        if ($pathinfo === '/listUser') {
            return array (  '_controller' => 'AppBundle\\Controller\\UserController::listAction',  '_route' => 'listUser',);
        }

        // addUser
        if ($pathinfo === '/addtUser') {
            return array (  '_controller' => 'AppBundle\\Controller\\UserController::addAction',  '_route' => 'addUser',);
        }

        // modifUser
        if (0 === strpos($pathinfo, '/modifUser') && preg_match('#^/modifUser/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'modifUser')), array (  '_controller' => 'AppBundle\\Controller\\UserController::modifAction',));
        }

        // suppUser
        if (0 === strpos($pathinfo, '/suppUser') && preg_match('#^/suppUser/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'suppUser')), array (  '_controller' => 'AppBundle\\Controller\\UserController::suppAction',));
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
