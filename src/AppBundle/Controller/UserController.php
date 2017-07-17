<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\User;
use AppBundle\Form\UserType;
use Symfony\Component\HttpFoundation\File\File;

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



/** @var Symfony\Component\HttpFoundation\File\UploadedFile $file */
            $file = $user->getAvatar();

            // Generate a unique name for the file before saving it
            $fileName = md5(uniqid()).'.'.$file->guessExtension();

            // Move the file to the directory where brochures are stored
            $file->move(
                $this->getParameter('avatars'),
                $fileName
            );

            // Update the 'brochure' property to store the PDF file name
            // instead of its contents
            $user->setAvatar($fileName);



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
 $file1=new File($this->getParameter('avatars').'/'.$user->getAvatar());
 $form=$this->CreateForm(UserType::class,$user,array('listRole'=>$listRole));
    
$form->handleRequest($request);
if($form->isSubmitted() && $form->isValid())
{ 
  
    //$user->setAvatar(new File($this->getParameter('avatars').'/'.$user->getAvatar()));

/** @var Symfony\Component\HttpFoundation\File\UploadedFile $file */
            $file = $user->getAvatar();
                
            // Generate a unique name for the file before saving it
            $fileName = md5(uniqid()).'.'.$file->guessExtension();

            // Move the file to the directory where brochures are stored
            $file->move(
                $this->getParameter('avatars'),
                $fileName
            );

            // Update the 'brochure' property to store the PDF file name
            // instead of its contents
            $user->setAvatar($fileName);
           
          


    $em = $this->get('doctrine')->getManager();
    $em->flush();
   if($file!=$file1)
    unlink($file1);
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
 //remove picture aflter deleting user 
 $file1=new File($this->getParameter('avatars').'/'.$user->getAvatar());
    unlink($file1);
return $this->redirectToRoute("listUser");
}
   
    }