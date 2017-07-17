<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Dress;
use AppBundle\Form\DressType;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\Response;

class DressController extends Controller
{
     /**
     * @Route("/listDress", name="listDress")
     */
    public function listAction(Request $request)
    {
      $em = $this->getDoctrine()->getRepository('AppBundle:Dress');
 $dresses = $em->findAll();
return $this->render('dress/listDress.html.twig',array('dresses'=>$dresses));

    }

     /**
     * @Route("/addDress", name="addDress")
     */
    public function addAction(Request $request)
    {


 $em=$this->getDoctrine()->getRepository('AppBundle:Categorie');
 $listCategorie=$em->findAll();
 $em=$this->getDoctrine()->getRepository('AppBundle:Shop');
 $listShop=$em->findAll();
$dress=new Dress();
$form=$this->CreateForm(DressType::class,$dress,array('listShop'=>$listShop,'listCategorie'=>$listCategorie));
$form->handleRequest($request);
if($form->isSubmitted() && $form->isValid())
{



/** @var Symfony\Component\HttpFoundation\File\UploadedFile $file */
            $file = $dress->getImage();

            // Generate a unique name for the file before saving it
            $fileName = md5(uniqid()).'.'.$file->guessExtension();

            // Move the file to the directory where brochures are stored
            $file->move(
                $this->getParameter('dresses'),
                $fileName
            );
            

            // Update the 'brochure' property to store the PDF file name
            // instead of its contents
            $dress->setimage($fileName);



    $em = $this->get('doctrine')->getManager();
    $em->persist($dress);
    $em->flush();
    return $this->redirectToRoute("listDress");
}
$formView=$form->CreateView();
return $this->render('dress/addDress.html.twig',array('form'=>$formView));


    }

    /**
    *@Route("modifDress/{id}",name="modifDress")
    */
  public function modifAction(Request $request,Dress $dress)
{
 $em=$this->getDoctrine()->getRepository('AppBundle:Categorie');
 $listCategorie=$em->findAll();
 $em=$this->getDoctrine()->getRepository('AppBundle:Shop');
 $listShop=$em->findAll();

 $file1=new File($this->getParameter('dresses').'/'.$dress->getImage());
 $form=$this->CreateForm(DressType::class,$dress,array('listShop'=>$listShop,'listCategorie'=>$listCategorie));
    
$form->handleRequest($request);
if($form->isSubmitted() && $form->isValid())
{ 
  
   
/** @var Symfony\Component\HttpFoundation\File\UploadedFile $file */
            $file = $dress->getImage();
                
            // Generate a unique name for the file before saving it
            $fileName = md5(uniqid()).'.'.$file->guessExtension();

            // Move the file to the directory where brochures are stored
            $file->move(
                $this->getParameter('dresses'),
                $fileName
            );

            // Update the 'brochure' property to store the PDF file name
            // instead of its contents
            $dress->setImage($fileName);
           
          


    $em = $this->get('doctrine')->getManager();
    $em->flush();
   if($file!=$file1)
    unlink($file1);
return $this->redirectToRoute("listDress");
}
$formView=$form->CreateView();
return $this->render('dress/addDress.html.twig',array('form'=>$formView));

    }
    /**
    *@Route("suppDress/{id}",name="suppDress")
    *
    */

public function suppAction(Dress $dress){

$em = $this->getDoctrine()->getManager();
$em->remove($dress);
$em->flush();
 //remove picture aflter deleting dress 
 $file1=new File($this->getParameter('dresses').'/'.$dress->getImage());
    unlink($file1);
return $this->redirectToRoute("listDress");
}
   

    }