<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Shop;
use AppBundle\Form\ShopType;
use Symfony\Component\HttpFoundation\JsonResponse;

use Symfony\Component\HttpFoundation\Response;

class ShopController extends Controller
{
    /**
     * @Route("/listShop", name="listShop")
     */
    public function listAction(Request $request)
    {
      $em = $this->getDoctrine()->getRepository('AppBundle:Shop');
 $shops = $em->findAll();
return $this->render('shop/listShop.html.twig',array('shops'=>$shops));
    }

      /**
     * @Route("/nosBoutique", name="nosBoutique")
     */
    public  function nosBoutiqueAction(Request $request){

  $em = $this->getDoctrine()->getManager();
    $query = $em->createQuery(
        'SELECT s.lattitude as lat ,s.longitude as lng
        FROM AppBundle:Shop s'
    );
    $shopsMap = $query->getArrayResult();

  //return $response;
return $this->render('shop/nosBoutique.html.twig',array('shops'=>$shopsMap));

    }
 /**
     * @Route("/BoutiqueA", name="BoutiqueA")
     */
    public  function BoutiqueAddressAction(Request $request){
return $this->render('shop/shopAutoC.html.twig');
    }


      /**
     * @Route("/addShop", name="addShop")
     */
    public function addAction(Request $request)
    {
 $em=$this->getDoctrine()->getRepository('AppBundle:User');
 $listUser=$em->findAll();
$shop=new Shop();
$form=$this->CreateForm(ShopType::class,$shop,array('listUser'=>$listUser));
$form->handleRequest($request);
if($form->isSubmitted() && $form->isValid())
{
    $em = $this->get('doctrine')->getManager();
    $em->persist($shop);
    $em->flush();
    return $this->redirectToRoute("nosBoutique");
}
$formView=$form->CreateView();
return $this->render('shop/addShop.html.twig',array('form'=>$formView));


    }


     /**
     * @Route("/affichShop/{id}", name="affichShop")
     */
    public function afficheAction(Request $request,Shop $shop)
    {
$em = $this->getDoctrine()->getRepository('AppBundle:Shop');
 $unshop = $em->find($shop);
 return $this->render('shop/detailShop.html.twig',array('unshop'=>$unshop));
    }

     /**
     * @Route("/modifShop/{id}", name="modifShop")
      *@return \Symfony\Component\HttpFoundation\Response
     */
 
      public function modifAction(Request $request,Shop $shop)
    {
$em=$this->getDoctrine()->getRepository('AppBundle:User');
 $listUser=$em->findAll();
 $form=$this->CreateForm(ShopType::class,$shop,array('listUser'=>$listUser));
    
$form->handleRequest($request);
if($form->isSubmitted() && $form->isValid())
{ 
    $em = $this->get('doctrine')->getManager();
    $em->flush();
return $this->redirectToRoute("listShop");
}
$formView=$form->CreateView();
return $this->render('shop/addShop.html.twig',array('form'=>$formView));

    }
    
     /**
     * @Route("/suppShop/{id}", name="suppShop")
    *@return \Symfony\Component\HttpFoundation\Response
     */
    public function suppAction(Request $request,Shop $shop)
    {
$em = $this->getDoctrine()->getManager();
$em->remove($shop);
$em->flush();


return $this->redirectToRoute("listShop");
    }


    
    }