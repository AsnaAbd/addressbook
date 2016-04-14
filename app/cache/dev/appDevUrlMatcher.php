<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/css/7522666-73e5427')) {
            // _assetic_7522666
            if ($pathinfo === '/css/7522666-73e5427.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 7522666,  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_7522666',);
            }

            if (0 === strpos($pathinfo, '/css/7522666-73e5427_')) {
                // _assetic_7522666_0
                if ($pathinfo === '/css/7522666-73e5427_main_1-f226a13.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 7522666,  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_7522666_0',);
                }

                // _assetic_7522666_1
                if ($pathinfo === '/css/7522666-73e5427_font-awesome_2-f226a13.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 7522666,  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_7522666_1',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/js')) {
            // _assetic_6d32c9b
            if ($pathinfo === '/js/6d32c9b-818cbc0.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '6d32c9b',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_6d32c9b',);
            }

            // _assetic_9b851a7
            if ($pathinfo === '/js/9b851a7-63625fc.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '9b851a7',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_9b851a7',);
            }

        }

        if (0 === strpos($pathinfo, '/css/8fc72e4-e6b8b1f')) {
            // _assetic_8fc72e4
            if ($pathinfo === '/css/8fc72e4-e6b8b1f.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '8fc72e4',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_8fc72e4',);
            }

            if (0 === strpos($pathinfo, '/css/8fc72e4-e6b8b1f_')) {
                // _assetic_8fc72e4_0
                if ($pathinfo === '/css/8fc72e4-e6b8b1f_main_1-f226a13.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '8fc72e4',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_8fc72e4_0',);
                }

                // _assetic_8fc72e4_1
                if ($pathinfo === '/css/8fc72e4-e6b8b1f_font-awesome_2-f226a13.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '8fc72e4',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_8fc72e4_1',);
                }

                // _assetic_8fc72e4_2
                if ($pathinfo === '/css/8fc72e4-e6b8b1f_jquery-ui_3-b04a9bd.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '8fc72e4',  'pos' => 2,  '_format' => 'css',  '_route' => '_assetic_8fc72e4_2',);
                }

            }

        }

        // _assetic_f0ed0ec
        if ($pathinfo === '/js/f0ed0ec-815697c.js') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => 'f0ed0ec',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_f0ed0ec',);
        }

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // nelmio_js_logger_log
        if ($pathinfo === '/nelmio-js-logger/log') {
            return array (  '_controller' => 'Nelmio\\JsLoggerBundle\\Controller\\LogController::createAction',  '_route' => 'nelmio_js_logger_log',);
        }

        // front_index
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'front_index');
            }

            return array (  '_controller' => 'FrontBundle\\Controller\\FrontController::indexAction',  '_route' => 'front_index',);
        }

        if (0 === strpos($pathinfo, '/mon-compte')) {
            // front_compte_index
            if (rtrim($pathinfo, '/') === '/mon-compte') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'front_compte_index');
                }

                return array (  '_controller' => 'FrontBundle\\Controller\\CompteController::indexAction',  '_route' => 'front_compte_index',);
            }

            // front_inscription_profil
            if ($pathinfo === '/mon-compte/inscription/suivant') {
                return array (  '_controller' => 'FrontBundle\\Controller\\InscriptionController::createProfilAction',  '_route' => 'front_inscription_profil',);
            }

        }

        // front_profil_index
        if (rtrim($pathinfo, '/') === '/profil') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'front_profil_index');
            }

            return array (  '_controller' => 'FrontBundle:Profil:index',  '_route' => 'front_profil_index',);
        }

        if (0 === strpos($pathinfo, '/address')) {
            // front_address_index
            if (rtrim($pathinfo, '/') === '/address') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_front_address_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'front_address_index');
                }

                return array (  '_controller' => 'FrontBundle\\Controller\\AddressController::indexAction',  '_route' => 'front_address_index',);
            }
            not_front_address_index:

            // front_address_add
            if ($pathinfo === '/address/add') {
                return array (  '_controller' => 'FrontBundle\\Controller\\AddressController::addAction',  '_route' => 'front_address_add',);
            }

            // front_address_show
            if (preg_match('#^/address/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_front_address_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'front_address_show')), array (  '_controller' => 'FrontBundle\\Controller\\AddressController::showAction',));
            }
            not_front_address_show:

            // front_address_invite
            if (preg_match('#^/address/(?P<id>\\d+)/invite$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_front_address_invite;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'front_address_invite')), array (  '_controller' => 'FrontBundle\\Controller\\AddressController::inviteAction',));
            }
            not_front_address_invite:

            // front_address_delete
            if (preg_match('#^/address/(?P<id>\\d+)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_front_address_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'front_address_delete')), array (  '_controller' => 'FrontBundle\\Controller\\AddressController::deleteAction',));
            }
            not_front_address_delete:

            // front_address_edit
            if (preg_match('#^/address/(?P<id>\\d+)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_front_address_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'front_address_edit')), array (  '_controller' => 'FrontBundle\\Controller\\AddressController::editAction',));
            }
            not_front_address_edit:

        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_security_login;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }
                not_fos_user_security_login:

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_security_logout;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }
            not_fos_user_security_logout:

        }

        if (0 === strpos($pathinfo, '/inscription')) {
            // fos_user_registration_register
            if (rtrim($pathinfo, '/') === '/inscription') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_registration_register;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                }

                return array (  '_controller' => 'FrontBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
            }
            not_fos_user_registration_register:

            if (0 === strpos($pathinfo, '/inscription/c')) {
                // fos_user_registration_check_email
                if ($pathinfo === '/inscription/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_registration_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                }
                not_fos_user_registration_check_email:

                // fos_user_registration_confirm
                if (0 === strpos($pathinfo, '/inscription/confirm') && preg_match('#^/inscription/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_registration_confirm;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                }
                not_fos_user_registration_confirm:

            }

        }

        if (0 === strpos($pathinfo, '/resetting')) {
            // fos_user_resetting_request
            if ($pathinfo === '/resetting/request') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_resetting_request;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
            }
            not_fos_user_resetting_request:

            // fos_user_resetting_send_email
            if ($pathinfo === '/resetting/send-email') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_fos_user_resetting_send_email;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
            }
            not_fos_user_resetting_send_email:

            // fos_user_resetting_check_email
            if ($pathinfo === '/resetting/check-email') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_resetting_check_email;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
            }
            not_fos_user_resetting_check_email:

            // fos_user_resetting_reset
            if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_resetting_reset;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
            }
            not_fos_user_resetting_reset:

        }

        // fos_user_registration_confirmed
        if ($pathinfo === '/inscription/mon-profil') {
            return array (  '_controller' => 'FrontBundle\\Controller\\InscriptionController::createProfilAction',  '_route' => 'fos_user_registration_confirmed',);
        }

        // fos_js_routing_js
        if (0 === strpos($pathinfo, '/js/routing') && preg_match('#^/js/routing(?:\\.(?P<_format>js|json))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_js_routing_js')), array (  '_controller' => 'fos_js_routing.controller:indexAction',  '_format' => 'js',));
        }

        if (0 === strpos($pathinfo, '/mon-compte')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/mon-compte') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/mon-compte/edit') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_profile_edit;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }
            not_fos_user_profile_edit:

            // fos_user_change_password
            if ($pathinfo === '/mon-compte/change-password') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_change_password;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
            }
            not_fos_user_change_password:

        }

        if (0 === strpos($pathinfo, '/login')) {
            // hwi_oauth_connect
            if (rtrim($pathinfo, '/') === '/login') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'hwi_oauth_connect');
                }

                return array (  '_controller' => 'HWI\\Bundle\\OAuthBundle\\Controller\\ConnectController::connectAction',  '_route' => 'hwi_oauth_connect',);
            }

            // hwi_oauth_connect_service
            if (0 === strpos($pathinfo, '/login/service') && preg_match('#^/login/service/(?P<service>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'hwi_oauth_connect_service')), array (  '_controller' => 'HWI\\Bundle\\OAuthBundle\\Controller\\ConnectController::connectServiceAction',));
            }

            // hwi_oauth_connect_registration
            if (0 === strpos($pathinfo, '/login/registration') && preg_match('#^/login/registration/(?P<key>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'hwi_oauth_connect_registration')), array (  '_controller' => 'HWI\\Bundle\\OAuthBundle\\Controller\\ConnectController::registrationAction',));
            }

            // hwi_oauth_service_redirect
            if (preg_match('#^/login/(?P<service>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'hwi_oauth_service_redirect')), array (  '_controller' => 'HWI\\Bundle\\OAuthBundle\\Controller\\ConnectController::redirectToServiceAction',));
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
