<?php 
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

class BlogController extends AbstractController
{
    /**
     * @Route("/blog", name="blog_list", methods={"POST","GET"})
     */
    public function list()
    {
         $response = new JsonResponse();
         return $response->setData(['data' => "file is a virus!"]);
    }
}