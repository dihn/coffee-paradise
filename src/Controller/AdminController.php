<?php
/**
 * Created by PhpStorm.
 * User: dihn
 * Date: 24/03/2018
 * Time: 03:00
 */

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

/**
 * Class AdminController
 * @package App\Controller
 */
class AdminController extends Controller {

    /**
     * Creates index for admin
     * @Route("/admin", name="admin_homepage")
     */
    public function index() {
        $coffees = $this->getDoctrine()
            ->getRepository(Coffee::class)
            ->findAll();

        return $this->render('admin/index.html.twig', ['coffees' => $coffees]);
    }

    /**
     * Creates admin panel
     * @Route("/admin/admin_panel", name="admin_panel")
     * @Security("has_role('ROLE_ADMIN')")
     */

    public function indexAction() {
        $template = 'admin/admin_panel.html.twig';
        $args = [];
        return $this->render($template, $args);
    }

    /**
     * @Route("/admin/coffees", name="coffee_status_review")
     */

    public function listActionCoffees() {
        $coffeeRepo = $this->getDoctrine()->getRepository('App:Coffee');
        $coffees = $coffeeRepo->findAll();

        $template = 'admin/coffee_status_list';
        $args = [
            'coffees' => $coffees,
        ];

        return $this->render($template . '.html.twig', $args);
    }// end listAction()

    /**
     * @Route("/admin/reviews", name="review_status_review")
     */

    public function listActionReviews() {
        $reviewRepo = $this->getDoctrine()->getRepository('App:Review');
        $reviews = $reviewRepo->findAll();

        $template = 'admin/review_status_list';
        $args = [
            'reviews' => $reviews,
        ];

        return $this->render($template . '.html.twig', $args);
    }// end listAction()
}