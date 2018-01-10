<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * @Route("/video", name="video_")
 */
class VideoController extends Controller
{
    /**
     * @Route("/", name="list")
     */
    public function listAction()
    {
        return $this->render('video/list.html.twig');
    }

    /**
     * @Route("/create", name="create")
     */
    public function createAction()
    {
        return $this->render('video/create.html.twig');
    }

    /**
     * @Route("/update/{id}", name="update")
     */
    public function updateAction()
    {
        return $this->render('video/create.html.twig');
    }

    /**
     * @Route(
     *     "/{id}",
     *     requirements={"id": "\d+"},
     *     name="show",
     *     methods={"GET"},
     *     schemes={"http"}
     * )
     */
    public function showAction()
    {
        return $this->render('video/show.html.twig');
    }
}