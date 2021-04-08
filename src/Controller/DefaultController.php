<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Component\Mailer\MailerInterface;



class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="default")
     */
    public function index(): Response
    {
        return $this->render('default/index.html.twig', [
            'controller_name' => 'DefaultController',
        ]);
    }

    /**
     * @Route("/mail", name="send_mail")
     */
    public function sendMail(MailerInterface $mailer)
    {
        $email = (new TemplatedEmail())
            ->to('Nal3xx4@gmail.com')
            ->from('calicot.game@gmail.com')
            ->subject('Test d un mail')
            ->htmlTemplate('mail/mail.html.twig')
            ->context([
                'prenom' => 'Alex',
                'nom' => 'Naccache',
            ]);

        $mailer->send($email);
    }
}
