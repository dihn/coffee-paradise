<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request ?: $this->createRequest($pathinfo);
        $requestMethod = $canonicalMethod = $context->getMethod();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }

        if (0 === strpos($pathinfo, '/admin')) {
            // admin_homepage
            if ('/admin' === $pathinfo) {
                return array (  '_controller' => 'App\\Controller\\AdminController::index',  '_route' => 'admin_homepage',);
            }

            // admin_panel
            if ('/admin/admin_panel' === $pathinfo) {
                return array (  '_controller' => 'App\\Controller\\AdminController::indexAction',  '_route' => 'admin_panel',);
            }

            // coffee_status_review
            if ('/admin/coffees' === $pathinfo) {
                return array (  '_controller' => 'App\\Controller\\AdminController::listActionCoffees',  '_route' => 'coffee_status_review',);
            }

            // review_status_review
            if ('/admin/reviews' === $pathinfo) {
                return array (  '_controller' => 'App\\Controller\\AdminController::listActionReviews',  '_route' => 'review_status_review',);
            }

        }

        elseif (0 === strpos($pathinfo, '/coffee')) {
            // coffee_index
            if ('/coffee' === $pathinfo) {
                return array (  '_controller' => 'App\\Controller\\CoffeeController::index',  '_route' => 'coffee_index',);
            }

            // coffee_new
            if ('/coffee/new' === $pathinfo) {
                $ret = array (  '_controller' => 'App\\Controller\\CoffeeController::new',  '_route' => 'coffee_new',);
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_coffee_new;
                }

                return $ret;
            }
            not_coffee_new:

            // coffee_show
            if (preg_match('#^/coffee/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'coffee_show')), array (  '_controller' => 'App\\Controller\\CoffeeController::show',));
                if (!in_array($canonicalMethod, array('GET'))) {
                    $allow = array_merge($allow, array('GET'));
                    goto not_coffee_show;
                }

                return $ret;
            }
            not_coffee_show:

            // coffee_edit
            if (preg_match('#^/coffee/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'coffee_edit')), array (  '_controller' => 'App\\Controller\\CoffeeController::edit',));
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_coffee_edit;
                }

                return $ret;
            }
            not_coffee_edit:

            // coffee_delete
            if (0 === strpos($pathinfo, '/coffee/delete') && preg_match('#^/coffee/delete/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'coffee_delete')), array (  '_controller' => 'App\\Controller\\CoffeeController::delete',));
                if (!in_array($requestMethod, array('DELETE'))) {
                    $allow = array_merge($allow, array('DELETE'));
                    goto not_coffee_delete;
                }

                return $ret;
            }
            not_coffee_delete:

        }

        // homepage
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'App\\Controller\\DefaultController::index',  '_route' => 'homepage',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_homepage;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'homepage'));
            }

            return $ret;
        }
        not_homepage:

        if (0 === strpos($pathinfo, '/member')) {
            // member_index
            if ('/member' === $pathinfo) {
                return array (  '_controller' => 'App\\Controller\\MemberController::index',  '_route' => 'member_index',);
            }

            // member_panel
            if ('/member/member_panel' === $pathinfo) {
                return array (  '_controller' => 'App\\Controller\\MemberController::indexAction',  '_route' => 'member_panel',);
            }

            // member_list
            if ('/member' === $pathinfo) {
                return array (  '_controller' => 'App\\Controller\\MemberController::listAction',  '_route' => 'member_list',);
            }

            // member_coffee_list
            if ('/member/coffees' === $pathinfo) {
                return array (  '_controller' => 'App\\Controller\\MemberController::listActionCoffees',  '_route' => 'member_coffee_list',);
            }

            // member_review_list
            if ('/member/reviews' === $pathinfo) {
                return array (  '_controller' => 'App\\Controller\\MemberController::listActionReviews',  '_route' => 'member_review_list',);
            }

            // member_new
            if ('/member/new' === $pathinfo) {
                $ret = array (  '_controller' => 'App\\Controller\\MemberController::new',  '_route' => 'member_new',);
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_member_new;
                }

                return $ret;
            }
            not_member_new:

            // member_show
            if (preg_match('#^/member/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'member_show')), array (  '_controller' => 'App\\Controller\\MemberController::show',));
                if (!in_array($canonicalMethod, array('GET'))) {
                    $allow = array_merge($allow, array('GET'));
                    goto not_member_show;
                }

                return $ret;
            }
            not_member_show:

            // member_edit
            if (preg_match('#^/member/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'member_edit')), array (  '_controller' => 'App\\Controller\\MemberController::edit',));
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_member_edit;
                }

                return $ret;
            }
            not_member_edit:

            // member_delete
            if (preg_match('#^/member/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'member_delete')), array (  '_controller' => 'App\\Controller\\MemberController::delete',));
                if (!in_array($requestMethod, array('DELETE'))) {
                    $allow = array_merge($allow, array('DELETE'));
                    goto not_member_delete;
                }

                return $ret;
            }
            not_member_delete:

        }

        elseif (0 === strpos($pathinfo, '/review')) {
            // review_index
            if ('/review' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'App\\Controller\\ReviewController::index',  '_route' => 'review_index',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_review_index;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'review_index'));
                }

                return $ret;
            }
            not_review_index:

            // review_new
            if ('/review/new' === $pathinfo) {
                $ret = array (  '_controller' => 'App\\Controller\\ReviewController::new',  '_route' => 'review_new',);
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_review_new;
                }

                return $ret;
            }
            not_review_new:

            // review_show
            if (preg_match('#^/review/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'review_show')), array (  '_controller' => 'App\\Controller\\ReviewController::show',));
                if (!in_array($canonicalMethod, array('GET'))) {
                    $allow = array_merge($allow, array('GET'));
                    goto not_review_show;
                }

                return $ret;
            }
            not_review_show:

            // review_edit
            if (preg_match('#^/review/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'review_edit')), array (  '_controller' => 'App\\Controller\\ReviewController::edit',));
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_review_edit;
                }

                return $ret;
            }
            not_review_edit:

            // review_delete
            if (preg_match('#^/review/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'review_delete')), array (  '_controller' => 'App\\Controller\\ReviewController::delete',));
                if (!in_array($requestMethod, array('DELETE'))) {
                    $allow = array_merge($allow, array('DELETE'));
                    goto not_review_delete;
                }

                return $ret;
            }
            not_review_delete:

        }

        // login
        if ('/login' === $pathinfo) {
            return array (  '_controller' => 'App\\Controller\\SecurityController::login',  '_route' => 'login',);
        }

        // logout
        if ('/logout' === $pathinfo) {
            return array('_route' => 'logout');
        }

        if (0 === strpos($pathinfo, '/_')) {
            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not__profiler_home;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', '_profiler_home'));
                    }

                    return $ret;
                }
                not__profiler_home:

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ('/_profiler/search' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ('/_profiler/search_bar' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_phpinfo
                if ('/_profiler/phpinfo' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

        }

        if ('/' === $pathinfo && !$allow) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
