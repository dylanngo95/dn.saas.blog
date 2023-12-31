<?php

namespace Dn\Saas\Admin\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractController
{
    #[Route('/admin/dashboard', name: 'admin_dashboard')]
    public function index(): Response
    {
        return $this->render('@Admin/dashboard/index.html.twig', [
            'controller_name' => 'Admin Dashboard Controller',
        ]);
    }
}
