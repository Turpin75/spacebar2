<?php

namespace App\Controller;

use Psr\Log\LoggerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class AccountController
 * @package App\Controller
 * @IsGranted("ROLE_USER")
 */
class AccountController extends baseController
{
    /**
     * @Route("/account", name="app_account")
     */
    public function index(LoggerInterface $logger): Response
    {
        $logger->debug('Checking account page for ' . $this->getUser()->getEmail());

        return $this->render('account/index.html.twig', [
            'controller_name' => 'AccountController',
        ]);
    }
}
