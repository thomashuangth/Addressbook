<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\User;
use AppBundle\Entity\Contact;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $contacts = $this->showContacts();

        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
            'contacts' => $contacts,
        ));
    }

    /**
     * @Route("/createtask", name="create_task")
     */
    public function createContactAction()
    {
        $request = Request::createFromGlobals();
        $user = $this->getUser();

        $contact = new Contact();
        $contact->setEmail($request->request->get('email'));
        $contact->setAddress($request->request->get('address'));
        $contact->setPhone($request->request->get('phoneNumber'));
        $contact->setWebsite($request->request->get('website'));

        $contact->setFosUser($user);

        $em = $this->getDoctrine()->getManager();
        $em->persist($contact);
        $em->flush();

        $contacts = $this->showContacts();

        return $this->redirectToRoute('homepage');
    }

    public function showContacts() {
        $user = $this->getUser();

        $contacts = $user->getContacts();

        return $contacts;
    }

    /**
     * @Route("/task/{id}", name="edit_page")
     */
    public function editAction($id)
    {
        $contact = $this->getDoctrine()
            ->getRepository('AppBundle:Contact')
            ->find($id);

        if (!$contact) {
            throw $this->createNotFoundException(
                'No contact found for id '.$id
            );
        }

        return $this->render('default/edit.html.twig', array('contact' => $contact));
    }

    /**
     * @Route("/edittask/{id}", name="edit_task")
     */
    public function editContactAction($id)
    {
        $request = Request::createFromGlobals();
        $em = $this->getDoctrine()->getManager();
        $contact = $em
            ->getRepository('AppBundle:Contact')
            ->find($id);

        if (!$contact) {
            throw $this->createNotFoundException(
                'No contact found for id '.$id
            );
        }

        $contact->setEmail($request->request->get('email'));
        $contact->setAddress($request->request->get('address'));
        $contact->setPhone($request->request->get('phoneNumber'));
        $contact->setWebsite($request->request->get('website'));
        $em->flush();

        return $this->redirectToRoute('homepage');
    }
}
