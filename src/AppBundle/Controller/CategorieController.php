<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Categorie;
use AppBundle\Form\CategorieType;

use Symfony\Component\HttpFoundation\Response;

class CategorieController extends Controller
{
    /**
     * @Route("/listCategorie", name="listCategorie")
     */
    public function listAction(Request $request)
    {
      $em = $this->getDoctrine()->getRepository('AppBundle:Categorie');
 $categories = $em->findAll();
return $this->render('categorie/listCategorie.html.twig',array('categories'=>$categories));

    }
    /**
     * @Route("/addCategorie", name="addCategorie")
     */
    public function addAction(Request $request)
    {
$categorie=new Categorie();
$form=$this->CreateForm(CategorieType::class,$categorie);
$form->handleRequest($request);
if($form->isSubmitted() && $form->isValid())
{
    $em = $this->get('doctrine')->getManager();

    $em->persist($categorie);
    $em->flush();
    return $this->redirectToRoute("listCategorie");
}
$formView=$form->CreateView();
return $this->render('categorie/addCategorie.html.twig',array('form'=>$formView));
}
   /**
   *@Route("/modifCategorie/{id}",name="modifCategorie")
   **@return \Symfony\Component\HttpFoundation\Response
   */ 
   public function modifAction(Request $request,Categorie $categorie)
{

  $form=$this->CreateForm(CategorieType::class,$categorie);
$form->handleRequest($request);
if($form->isSubmitted() && $form->isValid())
{
    $em = $this->get('doctrine')->getManager();
    $em->flush();
return $this->redirectToRoute("listCategorie");
}
$formView=$form->CreateView();
return $this->render('categorie/addCategorie.html.twig',array('form'=>$formView));

}
 /**
   *@Route("/suppCategorie/{id}",name="suppCategorie")
   *
 *@return \Symfony\Component\HttpFoundation\Response
     */
    public function suppAction(Categorie $categorie)
    {
$em = $this->getDoctrine()->getManager();
$em->remove($categorie);
$em->flush();


return $this->redirectToRoute("listCategorie");

    }


}
