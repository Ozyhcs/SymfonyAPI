<?php

namespace App\Manager;

use App\Entity\Image;

use Symfony\Component\HttpFoundation\ResponseHeaderBag;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ImageManager extends Controller
{
    private $targetDir;

    public function __construct($targetDir) 
    {
        $this->targetDir = $targetDir;
    }

    public function upload($id)
    {
        $image = new Image;

        $file = $image->getImage();
        $id = md5(uniqid()).'.'.$file->guessExtension();
        $file->move($this->targetDir, $id);

        return $this->redirect($this->generateUrl('download', array('id' => $id)));
    }

    public function download($id)
    {        
        if (is_file($this->targetDir . $id)) {
            $response = new BinaryFileResponse($this->targetDir . $id);
            $response->setContentDisposition(ResponseHeaderBag::DISPOSITION_ATTACHMENT);
            
            return $response;
        }

        return false;
    }

    public function delete($id)
    {
        if (is_file($this->targetDir . $id)) {
            unlink($this->targetDir . $id);
            return true;
        }

        return false;
    }
}