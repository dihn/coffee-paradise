<?php

namespace App\Controller;

use App\Entity\Member;
use App\Entity\Coffee;
use App\Form\MemberType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Repository\MemberRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;


class MemberController extends Controller
{
    /**
     * @Route("/member", name="member_index")
     *
     * @return Response
     */
    public function index()
    {
        $members = $this->getDoctrine()
            ->getRepository(Member::class)
            ->findAll();

        return $this->render('member/index.html.twig', ['members' => $members]);
    }

    /**
     * @Route("/member/member_panel", name="member_panel")
     * @Security("has_role('ROLE_MEMBER')")
     */

    public function indexAction() {
        $template = 'member/member_panel.html.twig';
        $args = [];
        return $this->render($template, $args);
    }

    /**
     * @Route("/member", name="member_list")
     */

    public function listAction($highlightId = -1) {
        $memberRepo = $this->getDoctrine()->getRepository('App:Member');
        $members = $memberRepo->findAll();

        $template = 'member/list';
        $args = [
            'members' => $members,
            'highlightId' => $highlightId,
        ];

        return $this->render($template . '.html.twig', $args);
    }// end listAction()

    /**
     * @Route("/member/coffees", name="member_coffee_list")
     */

    public function listActionCoffees() {
        $coffeeRepo = $this->getDoctrine()->getRepository('App:Coffee');
        $coffees = $coffeeRepo->findAll();

        $template = 'member/member_coffee_list';
        $args = [
            'coffees' => $coffees,
        ];

        return $this->render($template . '.html.twig', $args);
    }// end listAction()

    /**
     * @Route("/member/reviews", name="member_review_list")
     */

    public function listActionReviews() {
        $reviewRepo = $this->getDoctrine()->getRepository('App:Review');
        $reviews = $reviewRepo->findAll();

        $template = 'member/member_review_list';
        $args = [
            'reviews' => $reviews,
        ];

        return $this->render($template . '.html.twig', $args);
    }// end listAction()

    /**
     * @Route("/member/new", name="member_new")
     * @Method({"GET", "POST"})
     */
    public function new(Request $request)
    {
        $member = new Member();
        $form = $this->createForm(MemberType::class, $member);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($member);
            $em->flush();

            return $this->redirectToRoute('member_edit', ['id' => $member->getId()]);
        }

        return $this->render('member/new.html.twig', [
            'member' => $member,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/member/{id}", name="member_show")
     * @Method("GET")
     */
    public function show(Member $member)
    {
        return $this->render('member/show.html.twig', [
            'member' => $member,
        ]);
    }

    /**
     * @Route("/member/{id}/edit", name="member_edit")
     * @Method({"GET", "POST"})
     */
    public function edit(Request $request, Member $member)
    {
        $form = $this->createForm(MemberType::class, $member);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('member_edit', ['id' => $member->getId()]);
        }

        return $this->render('member/edit.html.twig', [
            'member' => $member,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/member/{id}", name="member_delete")
     * @Method("DELETE")
     */
    public function delete(Request $request, Member $member)
    {
        if (!$this->isCsrfTokenValid('delete'.$member->getId(), $request->request->get('_token'))) {
            return $this->redirectToRoute('member_index');
        }

        $em = $this->getDoctrine()->getManager();
        $em->remove($member);
        $em->flush();

        return $this->redirectToRoute('member_index');
    }

}