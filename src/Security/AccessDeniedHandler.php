<?php
/**
 * Created by PhpStorm.
 * User: dihn
 * Date: 24/03/2018
 * Time: 00:33
 */

namespace App\Security;

use Psr\Log\LoggerInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Symfony\Component\Security\Http\Authorization\AccessDeniedHandlerInterface;

/**
 * Class AccessDeniedHandler
 * @package App\Security
 */
class AccessDeniedHandler implements AccessDeniedHandlerInterface{

    /**
     * Twig object
     * @var object
     */
    private $twig;

    /**
     * Logger interface
     * @var LoggerInterface
     */
    private $logger;

    /**
     * AccessDeniedHandler constructor.
     * @param ContainerInterface $container
     * @param LoggerInterface $logger
     */
    public function __construct(ContainerInterface $container, LoggerInterface $logger) {
        $this->twig = $container->get('twig');
        $this->logger = $logger;
    }

    /**
     * Handle
     * @param Request $request
     * @param AccessDeniedException $accessDeniedException
     * @return Response
     */
    public function handle(Request $request, AccessDeniedException $accessDeniedException) {
        $this->logger->error('access denied exception');

        $template = 'error/accessDenied.html.twig';
        $args = [];
        $html = $this->twig->render($template, $args);
        return new Response($html);
    }

}