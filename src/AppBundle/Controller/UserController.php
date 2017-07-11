<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\User;
use AppBundle\Form\UserType;

use Symfony\Component\HttpFoundation\Response;

class UserController extends Controller
{
    /**
     * @Route("/listUser", name="listUser")
     */
    public function listAction(Request $request)
    {
      $em = $this->getDoctrine()->getRepository('AppBundle:User');
 $users = $em->findAll();
return $this->render('user/listUser.html.twig',array('users'=>$users));

    }
     /**
     * @Route("/addtUser", name="addUser")
     */
    public function addAction(Request $request)
    {
         $em=$this->getDoctrine()->getRepository('AppBundle:Role');
 $listRole=$em->findAll();
$user=new User();
$form=$this->CreateForm(UserType::class,$user,array('listRole'=>$listRole));
$form->handleRequest($request);
if($form->isSubmitted() && $form->isValid())
{

    $em = $this->get('doctrine')->getManager();
    $em->persist($user);
    $em->flush();
    return $this->redirectToRoute("listUser");
}
$formView=$form->CreateView();
return $this->render('user/addUser.html.twig',array('form'=>$formView));


    }
    /**
    *@Route("modifUser/{id}",name="modifUser")
    *@return \Symfony\Component\HttpFoundation\Response
    */
      public function modifAction(Request $request,User $user)
    {
$em=$this->getDoctrine()->getRepository('AppBundle:Role');
 $listRole=$em->findAll();
 $form=$this->CreateForm(UserType::class,$user,array('listRole'=>$listRole));
    
$form->handleRequest($request);
if($form->isSubmitted() && $form->isValid())
{
    $em = $this->get('doctrine')->getManager();
    $em->flush();
return $this->redirectToRoute("listUser");
}
$formView=$form->CreateView();
return $this->render('user/addUser.html.twig',array('form'=>$formView));

    }
    /**
    *@Route("suppUser/{id}",name="suppUser")
    *@return \Symfony\Component\HttpFoundation\Response
    */

public function suppAction(User $user){

$em = $this->getDoctrine()->getManager();
$em->remove($user);
$em->flush();


return $this->redirectToRoute("listUser");
}
   
    }