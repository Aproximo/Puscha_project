<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     * @Template()
     */
    public function indexAction(Request $request)
    {
        return [];
    }

    /**
     * @Route("/residence", name="residence")
     * @Template()
     */
    public function residenceAction(Request $request)
    {
        return [];
    }


    /**
     * @Route("/food", name="food")
     * @Template()
     */
    public function foodAction(Request $request)
    {
        return [];
    }

    /**
     * @Route("/contacts", name="contacts")
     * @Template()
     */
    public function contactsAction(Request $request)
    {
        return [];
    }
}
