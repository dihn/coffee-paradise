<?php
/**
 * Created by PhpStorm.
 * User: dihn
 * Date: 30/03/2018
 * Time: 03:36
 */

namespace App\Security;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing\Router;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\SecurityContext;
use Symfony\Component\Security\Http\Authentication\AuthenticationSuccessHandlerInterface;


class LoginSuccessHandler implements AuthenticationSuccessHandlerInterface {
    protected $router, $security;

    public function __construct(Router $router, SecurityContext $security) {
        $this->router = $router;
        $this->security = $security;
    }

    public function onAuthenticationSuccess(Request $request, TokenInterface $token) {
        // default url for everyone
        $url = 'homepage';

        if ($this->security->isGranted('ROLE_MEMBER')) {
            $url = 'homepage';
        } elseif ($this->security->isGranted('ROLE_ADMIN')) {
            $url = 'admin_homepage';
        }
    }
}