<?php

namespace App\Controller;

use App\Entity\Image;
use App\Form\UploadType;
use App\Form\DownloadType;
use App\Form\DeleteType;
use App\Service\FileUploader;

use Doctrine\ORM\ORMException;
use Doctrine\ORM\Mapping\Annotation;

use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Controller\Annotations\Get;
use FOS\RestBundle\Controller\Annotations\Delete;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Form;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\Filesystem\Exception\IOExceptionInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;


class ImageController extends Controller
{
    public function deleteAction(int $id, Request $request)
    {
        // $delete = new Image();

        // $form = $this->createForm(DeleteType::class, $delete);
        // $form->handleRequest($request);

        // if ($form->isSubmitted()) {
        //     $files = glob('uploads/images/*'); // get all file names
        //     foreach ($files as $file) { // iterate files
        //         if (is_file($file)) {
        //             unlink($file);
        //         } // delete file
        //     }

        //     return $this->redirectToRoute('upload');
        // }

        // return $this->render('Files/delete.html.twig', array(
        //     'form' => $form->CreateView()
        // ));
    }
    
    // public function indexAction()
    // {
    //     return $this->render('base.html.twig');
    // }

    // /**
    //  * @Get('/upload}')
    //  */
    // public function uploadAction(Request $request)
    // {
    //     $image = new Image();
    //     $form = $this->createForm(UploadType::class, $image);
    //     $form->handleRequest($request);

    //     if ($form->isSubmitted() && $form->isValid()) {
    //         $em = $this->getDoctrine()->getManager();
    //         $em->persist($image);
    //         $em->flush($image);

    //         $file = $image->getImage();
    //         $fileName = md5(uniqid()).'.'.$file->guessExtension();
    //         $file->move(
    //             $this->getParameter('images_directory'),
    //             $fileName
    //         );

    //         return $this->redirect($this->generateUrl('download', array('image' => $fileName)));
    //     }

    //     return $this->render('Files/upload.html.twig', array(
    //         'image' => $image,
    //         'form' => $form->CreateView(),
    //     ));
    // }

    // /**
    //  * @Get('/images/{id}')
    //  */
    // public function downloadAction(Request $request)
    // {
    //     $file = new Image();

    //     $image = $_GET['image'];
    //     $route = "uploads/images/";

    //     $form = $this->createForm(DownloadType::class, $file);
    //     $form->handleRequest($request);

    //     if ($form->isSubmitted()) {
    //         $response = new BinaryFileResponse($route . $image);
    //         $response->setContentDisposition(ResponseHeaderBag::DISPOSITION_ATTACHMENT);
            
    //         return $response;
    //     }

    //     return $this->render('Files/download.html.twig', array(
    //         'image' => $image,
    //         'form' => $form->CreateView(),
    //     ));
    // }

    /**
     * @Delete('/images/{id}')
     */

}
