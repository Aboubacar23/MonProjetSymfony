<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class HelloController extends AbstractController
{
    /**
     * @Route("/hello", name="hello")
     */
    public function index()
    {
        return $this->render('hello/index.html.twig', [
            'controller_name' => 'HelloController',
        ]);
    }


    /**
     * @Route("/hello2", name="hello2")
     */
    public function index2()
    {

        return new Response("<htmlt><head><body><h1>hello</h1></body></head></html>");
       /* return $this->render('hello/index.html.twig', [
            'controller_name' => 'HelloController',
        ]);
        */
        
    }

        /**
     * @Route("/hello3", name="hello3")
     */
    public function index3(): Response
    {
        $tab=["test1","test2","test3","test4","test5","test6",];


        return $this->render('hello/index3.html.twig',[
            'names' => $tab
        ]);
               
    }

        /**
     * @Route("/somme/{x}/{y}", name="somme")
     */
    public function somme($x, $y)
    { 
        $somme= $x + $y;
        return $this->render('hello/somme.html.twig', [
            'x' => $x,'y' => $y,'somme' => $somme
        ]);
    }
}
