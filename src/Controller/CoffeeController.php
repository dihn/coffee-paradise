<?php

namespace App\Controller;

use App\Entity\Coffee;
use App\Form\CoffeeType;
use App\Repository\CoffeeRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\File\File;

use App\Entity\Review;


class CoffeeController extends Controller
{
    /**
     * @Route("/coffee", name="coffee_index")
     *
     * @return Response
     */
    public function index()
    {
        $coffees = $this->getDoctrine()
            ->getRepository(Coffee::class)
            ->findAll();
        return $this->render('coffee/index.html.twig', ['coffees' => $coffees]);
    }


    /**
     * @Route("/coffee/new", name="coffee_new")
     * @Method({"GET", "POST"})
     */
    public function new(Request $request)
    {
        $coffee = new Coffee();
        $form = $this->createForm(CoffeeType::class, $coffee);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $file = $coffee->getImage();

            $fileName = $this->generateUniqueFileName().'.'.$file->guessExtension();

            $file->move(
                $this->getParameter('images_directory'),
                $fileName
            );

            $coffee->setImage($fileName);

            $em = $this->getDoctrine()->getManager();
            $em->persist($coffee);
            $em->flush();

            return $this->redirectToRoute('coffee_edit', ['id' => $coffee->getId()]);
        }

        return $this->render('coffee/new.html.twig', [
            'coffee' => $coffee,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/coffee/{id}", name="coffee_show")
     * @Method("GET")
     */
    public function show(Coffee $coffee)
    {

        $reviews = $this->getDoctrine()
            ->getRepository(Review::class)
            ->findAll();

        return $this->render('coffee/show.html.twig', [
            'coffee' => $coffee,
            'reviews' => $reviews,
        ]);
    }

    /**
     * @Route("/coffee/{id}/edit", name="coffee_edit")
     * @Method({"GET", "POST"})
     */
    public function edit(Request $request, Coffee $coffee)
    {
        $form = $this->createForm(CoffeeType::class, $coffee);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('coffee_edit', ['id' => $coffee->getId()]);
        }

        return $this->render('coffee/edit.html.twig', [
            'coffee' => $coffee,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/coffee/delete/{id}", name="coffee_delete")
     * @Method("DELETE")
     */
    public function delete(Request $request, Coffee $coffee)
    {
        if (!$this->isCsrfTokenValid('delete'.$coffee->getId(), $request->request->get('_token'))) {
            return $this->redirectToRoute('coffee_index');
        }

        $em = $this->getDoctrine()->getManager();
        $em->remove($coffee);
        $em->flush();

        return $this->redirectToRoute('coffee_index');
    }

    /**
     * Generates unique filename for image uploaded by user
     * @return string
     *
     */
    private function generateUniqueFileName() {
        return md5(uniqid());
    }
}
