<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Role;
use AppBundle\Form\RoleType;

use Symfony\Component\HttpFoundation\Response;

class RoleController extends Controller
{
    /**
     * @Route("/listRole", name="listRole")
     */
    public function listAction(Request $request)
    {
      $em = $this->getDoctrine()->getRepository('AppBundle:Role');
 $roles = $em->findAll();
return $this->render('role/listRole.html.twig',array('roles'=>$roles));

    }
    /**
     * @Route("/addRole", name="addRole")
     */
    public function addAction(Request $request)
    {
$role=new Role();
$form=$this->CreateForm(RoleType::class,$role);
$form->handleRequest($request);
if($form->isSubmitted() && $form->isValid())
{
    $em = $this->get('doctrine')->getManager();

    $em->persist($role);
    $em->flush();
    return $this->redirectToRoute("listRole");
}
$formView=$form->CreateView();
return $this->render('role/addRole.html.twig',array('form'=>$formView));
}
    /**
     * @Route("/modifRole/{id}", name="modifRole")
     *
     *@return \Symfony\Component\HttpFoundation\Response
     */
    public function modifAction(Request $request,Role $role)
 {
    $form=$this->CreateForm(RoleType::class,$role);
$form->handleRequest($request);
if($form->isSubmitted() && $form->isValid())
{
    $em = $this->get('doctrine')->getManager();
    $em->flush();
return $this->redirectToRoute("listRole");
}
$formView=$form->CreateView();
return $this->render('role/addRole.html.twig',array('form'=>$formView));

    }
     /**
     * @Route("/suppRole/{id}", name="suppRole")
     *@return \Symfony\Component\HttpFoundation\Response
     */
    public function suppAction(Role $role)
    {
$em = $this->getDoctrine()->getManager();
$em->remove($role);
$em->flush();


return $this->redirectToRoute("listRole");

    }



}
