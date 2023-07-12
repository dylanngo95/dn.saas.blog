<?php

namespace Dn\Saas\Admin\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminController extends AbstractController
{
    #[Route('/admin/user', name: 'admin_user')]
    public function index(): Response
    {
        return $this->render('@Admin/user/index.html.twig', [
            'controller_name' => 'Admin Users',
        ]);
    }
}
