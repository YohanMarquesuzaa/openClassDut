<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class OpenclassDutController extends AbstractController
{
    /**
     * @Route("/openclass/dut", name="openclass_dut")
     */
    public function index()
    {
        return $this->render('openclass_dut/index.html.twig', [
            'controller_name' => 'OpenclassDutController',
        ]);
    }
}
