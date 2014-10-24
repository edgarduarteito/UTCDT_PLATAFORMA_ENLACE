<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
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

                if (0 === strpos($pathinfo, '/_profiler/i')) {
                    // _profiler_info
                    if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                    }

                    // _profiler_import
                    if ($pathinfo === '/_profiler/import') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:importAction',  '_route' => '_profiler_import',);
                    }

                }

                // _profiler_export
                if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]++)\\.txt$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_export')), array (  '_controller' => 'web_profiler.controller.profiler:exportAction',));
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

        }

        if (0 === strpos($pathinfo, '/api')) {
            // get_tipocontenido
            if (0 === strpos($pathinfo, '/api/tipocontenido') && preg_match('#^/api/tipocontenido(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_get_tipocontenido;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_tipocontenido')), array (  '_controller' => 'WebApp\\ApiBundle\\Controller\\TipoContenidoController::getTipocontenidoAction',  '_format' => NULL,));
            }
            not_get_tipocontenido:

            // get_audio
            if (0 === strpos($pathinfo, '/api/audio') && preg_match('#^/api/audio(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_get_audio;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_audio')), array (  '_controller' => 'WebApp\\ApiBundle\\Controller\\AudioController::getAudioAction',  '_format' => NULL,));
            }
            not_get_audio:

            // get_imagenes
            if (0 === strpos($pathinfo, '/api/imagenes') && preg_match('#^/api/imagenes(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_get_imagenes;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_imagenes')), array (  '_controller' => 'WebApp\\ApiBundle\\Controller\\ImagenController::getImagenesAction',  '_format' => NULL,));
            }
            not_get_imagenes:

            if (0 === strpos($pathinfo, '/api/videos')) {
                // get_videos
                if (preg_match('#^/api/videos(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_get_videos;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_videos')), array (  '_controller' => 'WebApp\\ApiBundle\\Controller\\VideoController::getVideosAction',  '_format' => NULL,));
                }
                not_get_videos:

                // get_videos_to_movil
                if (0 === strpos($pathinfo, '/api/videos/to/movil') && preg_match('#^/api/videos/to/movil(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_get_videos_to_movil;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_videos_to_movil')), array (  '_controller' => 'WebApp\\ApiBundle\\Controller\\VideoController::getVideosToMovilAction',  '_format' => NULL,));
                }
                not_get_videos_to_movil:

            }

            // nelmio_api_doc_index
            if (rtrim($pathinfo, '/') === '/api/doc') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_nelmio_api_doc_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'nelmio_api_doc_index');
                }

                return array (  '_controller' => 'Nelmio\\ApiDocBundle\\Controller\\ApiDocController::indexAction',  '_route' => 'nelmio_api_doc_index',);
            }
            not_nelmio_api_doc_index:

        }

        // web_app_frontend_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'web_app_frontend_homepage');
            }

            return array (  '_controller' => 'WebApp\\FrontendBundle\\Controller\\DefaultController::indexAction',  '_route' => 'web_app_frontend_homepage',);
        }

        // web_app_frontend_detalle_hotel
        if (0 === strpos($pathinfo, '/detalle') && preg_match('#^/detalle/(?P<slug>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'web_app_frontend_detalle_hotel')), array (  '_controller' => 'WebApp\\FrontendBundle\\Controller\\DefaultController::detalleAction',));
        }

        // web_app_frontend_registro
        if ($pathinfo === '/registro') {
            return array (  '_controller' => 'WebApp\\FrontendBundle\\Controller\\DefaultController::registroAction',  '_route' => 'web_app_frontend_registro',);
        }

        // web_app_frontend_sitemap
        if ($pathinfo === '/mapa') {
            return array (  '_controller' => 'WebApp\\FrontendBundle\\Controller\\SiteMapController::indexAction',  '_route' => 'web_app_frontend_sitemap',);
        }

        if (0 === strpos($pathinfo, '/c')) {
            // web_app_frontend_calendar
            if ($pathinfo === '/calendario') {
                return array (  '_controller' => 'WebApp\\FrontendBundle\\Controller\\DefaultController::getJsonAction',  '_route' => 'web_app_frontend_calendar',);
            }

            // web_app_frontend_contacto
            if ($pathinfo === '/contacto') {
                return array (  '_controller' => 'WebApp\\FrontendBundle\\Controller\\DefaultController::contactoAction',  '_route' => 'web_app_frontend_contacto',);
            }

        }

        // web_app_frontend_evento
        if ($pathinfo === '/evento') {
            return array (  '_controller' => 'WebApp\\FrontendBundle\\Controller\\EventoController::eventoAction',  '_route' => 'web_app_frontend_evento',);
        }

        // web_app_frontend_aula
        if ($pathinfo === '/aula') {
            return array (  '_controller' => 'WebApp\\FrontendBundle\\Controller\\AulaMusicalController::aulaAction',  '_route' => 'web_app_frontend_aula',);
        }

        if (0 === strpos($pathinfo, '/detalle')) {
            // web_app_frontend_detalle_aula
            if (0 === strpos($pathinfo, '/detalle/aula') && preg_match('#^/detalle/aula/(?P<slug>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'web_app_frontend_detalle_aula')), array (  '_controller' => 'WebApp\\FrontendBundle\\Controller\\AulaMusicalController::detalleAction',));
            }

            // web_app_frontend_detalle_evento
            if (0 === strpos($pathinfo, '/detalle/evento') && preg_match('#^/detalle/evento/(?P<slug>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'web_app_frontend_detalle_evento')), array (  '_controller' => 'WebApp\\FrontendBundle\\Controller\\EventoController::detalleEventoAction',));
            }

        }

        // web_app_frontend_slide
        if ($pathinfo === '/slide') {
            return array (  '_controller' => 'WebApp\\FrontendBundle\\Controller\\DefaultController::slideAction',  '_route' => 'web_app_frontend_slide',);
        }

        if (0 === strpos($pathinfo, '/admin')) {
            // web_app_admin_homepage
            if (rtrim($pathinfo, '/') === '/admin') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'web_app_admin_homepage');
                }

                return array (  '_controller' => 'WebApp\\AdminBundle\\Controller\\DefaultController::indexAction',  '_route' => 'web_app_admin_homepage',);
            }

            // redirect_admin
            if ($pathinfo === '/admin') {
                return array (  '_controller' => 'WebApp\\AdminBundle\\Controller\\DefaultController::redirectAdminAction',  '_route' => 'redirect_admin',);
            }

        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }

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
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
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
            if ($pathinfo === '/profile/edit') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/register/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ($pathinfo === '/register/confirmed') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        }
                        not_fos_user_registration_confirmed:

                    }

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

        }

        // fos_user_change_password
        if ($pathinfo === '/change_password/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        if (0 === strpos($pathinfo, '/admin')) {
            // sonata_admin_redirect
            if (rtrim($pathinfo, '/') === '/admin') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'sonata_admin_redirect');
                }

                return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction',  'route' => 'sonata_admin_dashboard',  'permanent' => 'true',  '_route' => 'sonata_admin_redirect',);
            }

            // sonata_admin_dashboard
            if ($pathinfo === '/admin/dashboard') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::dashboardAction',  '_route' => 'sonata_admin_dashboard',);
            }

            if (0 === strpos($pathinfo, '/admin/core')) {
                // sonata_admin_retrieve_form_element
                if ($pathinfo === '/admin/core/get-form-field-element') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:retrieveFormFieldElementAction',  '_route' => 'sonata_admin_retrieve_form_element',);
                }

                // sonata_admin_append_form_element
                if ($pathinfo === '/admin/core/append-form-field-element') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:appendFormFieldElementAction',  '_route' => 'sonata_admin_append_form_element',);
                }

                // sonata_admin_short_object_information
                if (0 === strpos($pathinfo, '/admin/core/get-short-object-description') && preg_match('#^/admin/core/get\\-short\\-object\\-description(?:\\.(?P<_format>html|json))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sonata_admin_short_object_information')), array (  '_controller' => 'sonata.admin.controller.admin:getShortObjectDescriptionAction',  '_format' => 'html',));
                }

                // sonata_admin_set_object_field_value
                if ($pathinfo === '/admin/core/set-object-field-value') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:setObjectFieldValueAction',  '_route' => 'sonata_admin_set_object_field_value',);
                }

            }

            // sonata_admin_search
            if ($pathinfo === '/admin/search') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::searchAction',  '_route' => 'sonata_admin_search',);
            }

            if (0 === strpos($pathinfo, '/admin/user')) {
                // user_list
                if ($pathinfo === '/admin/user/list') {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'user_list',  '_route' => 'user_list',);
                }

                // user_create
                if ($pathinfo === '/admin/user/create') {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'user_create',  '_route' => 'user_create',);
                }

                // user_batch
                if ($pathinfo === '/admin/user/batch') {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'user_batch',  '_route' => 'user_batch',);
                }

                // user_edit
                if (preg_match('#^/admin/user/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'user_edit',));
                }

                // user_show
                if (preg_match('#^/admin/user/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'user_show',));
                }

                // user_export
                if ($pathinfo === '/admin/user/export') {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'user_export',  '_route' => 'user_export',);
                }

                // user_ver_perfil
                if (rtrim($pathinfo, '/') === '/admin/user/ver_perfil') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'user_ver_perfil');
                    }

                    return array (  '_controller' => 'ItoSoftware\\Base\\AdminBundle\\Controller\\ItoUserAdminController::verPerfilAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'user_ver_perfil',  '_route' => 'user_ver_perfil',);
                }

                // user_editar_perfil_propietario
                if (rtrim($pathinfo, '/') === '/admin/user/editar_perfil_propietario') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'user_editar_perfil_propietario');
                    }

                    return array (  '_controller' => 'ItoSoftware\\Base\\AdminBundle\\Controller\\ItoUserAdminController::editarPerfilPropietarioAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'user_editar_perfil_propietario',  '_route' => 'user_editar_perfil_propietario',);
                }

                // user_change_password
                if (rtrim($pathinfo, '/') === '/admin/user/password') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'user_change_password');
                    }

                    return array (  '_controller' => 'ItoSoftware\\Base\\AdminBundle\\Controller\\ItoUserAdminController::changePasswordAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'user_change_password',  '_route' => 'user_change_password',);
                }

            }

            if (0 === strpos($pathinfo, '/admin/base/model')) {
                if (0 === strpos($pathinfo, '/admin/base/model/municipio')) {
                    // admin_base_model_municipio_list
                    if ($pathinfo === '/admin/base/model/municipio/list') {
                        return array (  '_controller' => 'ItoSoftware\\Base\\AdminBundle\\Controller\\MunicipioAdminController::listAction',  '_sonata_admin' => 'ito_admin.admin.municipio',  '_sonata_name' => 'admin_base_model_municipio_list',  '_route' => 'admin_base_model_municipio_list',);
                    }

                    // admin_base_model_municipio_delete
                    if (preg_match('#^/admin/base/model/municipio/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_base_model_municipio_delete')), array (  '_controller' => 'ItoSoftware\\Base\\AdminBundle\\Controller\\MunicipioAdminController::deleteAction',  '_sonata_admin' => 'ito_admin.admin.municipio',  '_sonata_name' => 'admin_base_model_municipio_delete',));
                    }

                    // admin_base_model_municipio_show
                    if (preg_match('#^/admin/base/model/municipio/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_base_model_municipio_show')), array (  '_controller' => 'ItoSoftware\\Base\\AdminBundle\\Controller\\MunicipioAdminController::showAction',  '_sonata_admin' => 'ito_admin.admin.municipio',  '_sonata_name' => 'admin_base_model_municipio_show',));
                    }

                    // admin_base_model_municipio_export
                    if ($pathinfo === '/admin/base/model/municipio/export') {
                        return array (  '_controller' => 'ItoSoftware\\Base\\AdminBundle\\Controller\\MunicipioAdminController::exportAction',  '_sonata_admin' => 'ito_admin.admin.municipio',  '_sonata_name' => 'admin_base_model_municipio_export',  '_route' => 'admin_base_model_municipio_export',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/base/model/visitas')) {
                    // admin_base_model_visitas_list
                    if ($pathinfo === '/admin/base/model/visitas/list') {
                        return array (  '_controller' => 'ItoSoftware\\Base\\AdminBundle\\Controller\\VisitasAdminController::listAction',  '_sonata_admin' => 'ito_admin.admin.visitas',  '_sonata_name' => 'admin_base_model_visitas_list',  '_route' => 'admin_base_model_visitas_list',);
                    }

                    // admin_base_model_visitas_delete
                    if (preg_match('#^/admin/base/model/visitas/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_base_model_visitas_delete')), array (  '_controller' => 'ItoSoftware\\Base\\AdminBundle\\Controller\\VisitasAdminController::deleteAction',  '_sonata_admin' => 'ito_admin.admin.visitas',  '_sonata_name' => 'admin_base_model_visitas_delete',));
                    }

                    // admin_base_model_visitas_export
                    if ($pathinfo === '/admin/base/model/visitas/export') {
                        return array (  '_controller' => 'ItoSoftware\\Base\\AdminBundle\\Controller\\VisitasAdminController::exportAction',  '_sonata_admin' => 'ito_admin.admin.visitas',  '_sonata_name' => 'admin_base_model_visitas_export',  '_route' => 'admin_base_model_visitas_export',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/base/model/evento')) {
                    // admin_base_model_evento_list
                    if ($pathinfo === '/admin/base/model/evento/list') {
                        return array (  '_controller' => 'ItoSoftware\\Base\\AdminBundle\\Controller\\EventoAdminController::listAction',  '_sonata_admin' => 'ito_admin.admin.evento',  '_sonata_name' => 'admin_base_model_evento_list',  '_route' => 'admin_base_model_evento_list',);
                    }

                    // admin_base_model_evento_create
                    if ($pathinfo === '/admin/base/model/evento/create') {
                        return array (  '_controller' => 'ItoSoftware\\Base\\AdminBundle\\Controller\\EventoAdminController::createAction',  '_sonata_admin' => 'ito_admin.admin.evento',  '_sonata_name' => 'admin_base_model_evento_create',  '_route' => 'admin_base_model_evento_create',);
                    }

                    // admin_base_model_evento_batch
                    if ($pathinfo === '/admin/base/model/evento/batch') {
                        return array (  '_controller' => 'ItoSoftware\\Base\\AdminBundle\\Controller\\EventoAdminController::batchAction',  '_sonata_admin' => 'ito_admin.admin.evento',  '_sonata_name' => 'admin_base_model_evento_batch',  '_route' => 'admin_base_model_evento_batch',);
                    }

                    // admin_base_model_evento_edit
                    if (preg_match('#^/admin/base/model/evento/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_base_model_evento_edit')), array (  '_controller' => 'ItoSoftware\\Base\\AdminBundle\\Controller\\EventoAdminController::editAction',  '_sonata_admin' => 'ito_admin.admin.evento',  '_sonata_name' => 'admin_base_model_evento_edit',));
                    }

                    // admin_base_model_evento_delete
                    if (preg_match('#^/admin/base/model/evento/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_base_model_evento_delete')), array (  '_controller' => 'ItoSoftware\\Base\\AdminBundle\\Controller\\EventoAdminController::deleteAction',  '_sonata_admin' => 'ito_admin.admin.evento',  '_sonata_name' => 'admin_base_model_evento_delete',));
                    }

                    // admin_base_model_evento_show
                    if (preg_match('#^/admin/base/model/evento/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_base_model_evento_show')), array (  '_controller' => 'ItoSoftware\\Base\\AdminBundle\\Controller\\EventoAdminController::showAction',  '_sonata_admin' => 'ito_admin.admin.evento',  '_sonata_name' => 'admin_base_model_evento_show',));
                    }

                    // admin_base_model_evento_export
                    if ($pathinfo === '/admin/base/model/evento/export') {
                        return array (  '_controller' => 'ItoSoftware\\Base\\AdminBundle\\Controller\\EventoAdminController::exportAction',  '_sonata_admin' => 'ito_admin.admin.evento',  '_sonata_name' => 'admin_base_model_evento_export',  '_route' => 'admin_base_model_evento_export',);
                    }

                    if (0 === strpos($pathinfo, '/admin/base/model/eventofoto')) {
                        // admin_base_model_eventofoto_list
                        if ($pathinfo === '/admin/base/model/eventofoto/list') {
                            return array (  '_controller' => 'ItoSoftware\\Base\\AdminBundle\\Controller\\EventoFotoAdminController::listAction',  '_sonata_admin' => 'ito_admin.admin.evento_foto',  '_sonata_name' => 'admin_base_model_eventofoto_list',  '_route' => 'admin_base_model_eventofoto_list',);
                        }

                        // admin_base_model_eventofoto_create
                        if ($pathinfo === '/admin/base/model/eventofoto/create') {
                            return array (  '_controller' => 'ItoSoftware\\Base\\AdminBundle\\Controller\\EventoFotoAdminController::createAction',  '_sonata_admin' => 'ito_admin.admin.evento_foto',  '_sonata_name' => 'admin_base_model_eventofoto_create',  '_route' => 'admin_base_model_eventofoto_create',);
                        }

                        // admin_base_model_eventofoto_batch
                        if ($pathinfo === '/admin/base/model/eventofoto/batch') {
                            return array (  '_controller' => 'ItoSoftware\\Base\\AdminBundle\\Controller\\EventoFotoAdminController::batchAction',  '_sonata_admin' => 'ito_admin.admin.evento_foto',  '_sonata_name' => 'admin_base_model_eventofoto_batch',  '_route' => 'admin_base_model_eventofoto_batch',);
                        }

                        // admin_base_model_eventofoto_edit
                        if (preg_match('#^/admin/base/model/eventofoto/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_base_model_eventofoto_edit')), array (  '_controller' => 'ItoSoftware\\Base\\AdminBundle\\Controller\\EventoFotoAdminController::editAction',  '_sonata_admin' => 'ito_admin.admin.evento_foto',  '_sonata_name' => 'admin_base_model_eventofoto_edit',));
                        }

                        // admin_base_model_eventofoto_delete
                        if (preg_match('#^/admin/base/model/eventofoto/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_base_model_eventofoto_delete')), array (  '_controller' => 'ItoSoftware\\Base\\AdminBundle\\Controller\\EventoFotoAdminController::deleteAction',  '_sonata_admin' => 'ito_admin.admin.evento_foto',  '_sonata_name' => 'admin_base_model_eventofoto_delete',));
                        }

                        // admin_base_model_eventofoto_show
                        if (preg_match('#^/admin/base/model/eventofoto/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_base_model_eventofoto_show')), array (  '_controller' => 'ItoSoftware\\Base\\AdminBundle\\Controller\\EventoFotoAdminController::showAction',  '_sonata_admin' => 'ito_admin.admin.evento_foto',  '_sonata_name' => 'admin_base_model_eventofoto_show',));
                        }

                        // admin_base_model_eventofoto_export
                        if ($pathinfo === '/admin/base/model/eventofoto/export') {
                            return array (  '_controller' => 'ItoSoftware\\Base\\AdminBundle\\Controller\\EventoFotoAdminController::exportAction',  '_sonata_admin' => 'ito_admin.admin.evento_foto',  '_sonata_name' => 'admin_base_model_eventofoto_export',  '_route' => 'admin_base_model_eventofoto_export',);
                        }

                    }

                }

                if (0 === strpos($pathinfo, '/admin/base/model/comentarioevento')) {
                    // admin_base_model_comentarioevento_list
                    if ($pathinfo === '/admin/base/model/comentarioevento/list') {
                        return array (  '_controller' => 'ItoSoftware\\Base\\AdminBundle\\Controller\\ComentarioEventoAdminController::listAction',  '_sonata_admin' => 'ito_admin.admin.comentario_evento',  '_sonata_name' => 'admin_base_model_comentarioevento_list',  '_route' => 'admin_base_model_comentarioevento_list',);
                    }

                    // admin_base_model_comentarioevento_batch
                    if ($pathinfo === '/admin/base/model/comentarioevento/batch') {
                        return array (  '_controller' => 'ItoSoftware\\Base\\AdminBundle\\Controller\\ComentarioEventoAdminController::batchAction',  '_sonata_admin' => 'ito_admin.admin.comentario_evento',  '_sonata_name' => 'admin_base_model_comentarioevento_batch',  '_route' => 'admin_base_model_comentarioevento_batch',);
                    }

                    // admin_base_model_comentarioevento_edit
                    if (preg_match('#^/admin/base/model/comentarioevento/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_base_model_comentarioevento_edit')), array (  '_controller' => 'ItoSoftware\\Base\\AdminBundle\\Controller\\ComentarioEventoAdminController::editAction',  '_sonata_admin' => 'ito_admin.admin.comentario_evento',  '_sonata_name' => 'admin_base_model_comentarioevento_edit',));
                    }

                    // admin_base_model_comentarioevento_delete
                    if (preg_match('#^/admin/base/model/comentarioevento/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_base_model_comentarioevento_delete')), array (  '_controller' => 'ItoSoftware\\Base\\AdminBundle\\Controller\\ComentarioEventoAdminController::deleteAction',  '_sonata_admin' => 'ito_admin.admin.comentario_evento',  '_sonata_name' => 'admin_base_model_comentarioevento_delete',));
                    }

                    // admin_base_model_comentarioevento_show
                    if (preg_match('#^/admin/base/model/comentarioevento/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_base_model_comentarioevento_show')), array (  '_controller' => 'ItoSoftware\\Base\\AdminBundle\\Controller\\ComentarioEventoAdminController::showAction',  '_sonata_admin' => 'ito_admin.admin.comentario_evento',  '_sonata_name' => 'admin_base_model_comentarioevento_show',));
                    }

                    // admin_base_model_comentarioevento_export
                    if ($pathinfo === '/admin/base/model/comentarioevento/export') {
                        return array (  '_controller' => 'ItoSoftware\\Base\\AdminBundle\\Controller\\ComentarioEventoAdminController::exportAction',  '_sonata_admin' => 'ito_admin.admin.comentario_evento',  '_sonata_name' => 'admin_base_model_comentarioevento_export',  '_route' => 'admin_base_model_comentarioevento_export',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/base/model/aula')) {
                    if (0 === strpos($pathinfo, '/admin/base/model/aulamusical')) {
                        // admin_base_model_aulamusical_list
                        if ($pathinfo === '/admin/base/model/aulamusical/list') {
                            return array (  '_controller' => 'ItoSoftware\\Base\\AdminBundle\\Controller\\AulaMusicalAdminController::listAction',  '_sonata_admin' => 'ito_admin.admin.aula_musical',  '_sonata_name' => 'admin_base_model_aulamusical_list',  '_route' => 'admin_base_model_aulamusical_list',);
                        }

                        // admin_base_model_aulamusical_create
                        if ($pathinfo === '/admin/base/model/aulamusical/create') {
                            return array (  '_controller' => 'ItoSoftware\\Base\\AdminBundle\\Controller\\AulaMusicalAdminController::createAction',  '_sonata_admin' => 'ito_admin.admin.aula_musical',  '_sonata_name' => 'admin_base_model_aulamusical_create',  '_route' => 'admin_base_model_aulamusical_create',);
                        }

                        // admin_base_model_aulamusical_batch
                        if ($pathinfo === '/admin/base/model/aulamusical/batch') {
                            return array (  '_controller' => 'ItoSoftware\\Base\\AdminBundle\\Controller\\AulaMusicalAdminController::batchAction',  '_sonata_admin' => 'ito_admin.admin.aula_musical',  '_sonata_name' => 'admin_base_model_aulamusical_batch',  '_route' => 'admin_base_model_aulamusical_batch',);
                        }

                        // admin_base_model_aulamusical_edit
                        if (preg_match('#^/admin/base/model/aulamusical/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_base_model_aulamusical_edit')), array (  '_controller' => 'ItoSoftware\\Base\\AdminBundle\\Controller\\AulaMusicalAdminController::editAction',  '_sonata_admin' => 'ito_admin.admin.aula_musical',  '_sonata_name' => 'admin_base_model_aulamusical_edit',));
                        }

                        // admin_base_model_aulamusical_delete
                        if (preg_match('#^/admin/base/model/aulamusical/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_base_model_aulamusical_delete')), array (  '_controller' => 'ItoSoftware\\Base\\AdminBundle\\Controller\\AulaMusicalAdminController::deleteAction',  '_sonata_admin' => 'ito_admin.admin.aula_musical',  '_sonata_name' => 'admin_base_model_aulamusical_delete',));
                        }

                        // admin_base_model_aulamusical_show
                        if (preg_match('#^/admin/base/model/aulamusical/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_base_model_aulamusical_show')), array (  '_controller' => 'ItoSoftware\\Base\\AdminBundle\\Controller\\AulaMusicalAdminController::showAction',  '_sonata_admin' => 'ito_admin.admin.aula_musical',  '_sonata_name' => 'admin_base_model_aulamusical_show',));
                        }

                        // admin_base_model_aulamusical_export
                        if ($pathinfo === '/admin/base/model/aulamusical/export') {
                            return array (  '_controller' => 'ItoSoftware\\Base\\AdminBundle\\Controller\\AulaMusicalAdminController::exportAction',  '_sonata_admin' => 'ito_admin.admin.aula_musical',  '_sonata_name' => 'admin_base_model_aulamusical_export',  '_route' => 'admin_base_model_aulamusical_export',);
                        }

                    }

                    if (0 === strpos($pathinfo, '/admin/base/model/aulafoto')) {
                        // admin_base_model_aulafoto_list
                        if ($pathinfo === '/admin/base/model/aulafoto/list') {
                            return array (  '_controller' => 'ItoSoftware\\Base\\AdminBundle\\Controller\\AulaFotoAdminController::listAction',  '_sonata_admin' => 'ito_admin.admin.aula_foto',  '_sonata_name' => 'admin_base_model_aulafoto_list',  '_route' => 'admin_base_model_aulafoto_list',);
                        }

                        // admin_base_model_aulafoto_create
                        if ($pathinfo === '/admin/base/model/aulafoto/create') {
                            return array (  '_controller' => 'ItoSoftware\\Base\\AdminBundle\\Controller\\AulaFotoAdminController::createAction',  '_sonata_admin' => 'ito_admin.admin.aula_foto',  '_sonata_name' => 'admin_base_model_aulafoto_create',  '_route' => 'admin_base_model_aulafoto_create',);
                        }

                        // admin_base_model_aulafoto_batch
                        if ($pathinfo === '/admin/base/model/aulafoto/batch') {
                            return array (  '_controller' => 'ItoSoftware\\Base\\AdminBundle\\Controller\\AulaFotoAdminController::batchAction',  '_sonata_admin' => 'ito_admin.admin.aula_foto',  '_sonata_name' => 'admin_base_model_aulafoto_batch',  '_route' => 'admin_base_model_aulafoto_batch',);
                        }

                        // admin_base_model_aulafoto_edit
                        if (preg_match('#^/admin/base/model/aulafoto/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_base_model_aulafoto_edit')), array (  '_controller' => 'ItoSoftware\\Base\\AdminBundle\\Controller\\AulaFotoAdminController::editAction',  '_sonata_admin' => 'ito_admin.admin.aula_foto',  '_sonata_name' => 'admin_base_model_aulafoto_edit',));
                        }

                        // admin_base_model_aulafoto_delete
                        if (preg_match('#^/admin/base/model/aulafoto/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_base_model_aulafoto_delete')), array (  '_controller' => 'ItoSoftware\\Base\\AdminBundle\\Controller\\AulaFotoAdminController::deleteAction',  '_sonata_admin' => 'ito_admin.admin.aula_foto',  '_sonata_name' => 'admin_base_model_aulafoto_delete',));
                        }

                        // admin_base_model_aulafoto_show
                        if (preg_match('#^/admin/base/model/aulafoto/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_base_model_aulafoto_show')), array (  '_controller' => 'ItoSoftware\\Base\\AdminBundle\\Controller\\AulaFotoAdminController::showAction',  '_sonata_admin' => 'ito_admin.admin.aula_foto',  '_sonata_name' => 'admin_base_model_aulafoto_show',));
                        }

                        // admin_base_model_aulafoto_export
                        if ($pathinfo === '/admin/base/model/aulafoto/export') {
                            return array (  '_controller' => 'ItoSoftware\\Base\\AdminBundle\\Controller\\AulaFotoAdminController::exportAction',  '_sonata_admin' => 'ito_admin.admin.aula_foto',  '_sonata_name' => 'admin_base_model_aulafoto_export',  '_route' => 'admin_base_model_aulafoto_export',);
                        }

                    }

                }

                if (0 === strpos($pathinfo, '/admin/base/model/co')) {
                    if (0 === strpos($pathinfo, '/admin/base/model/comentarioaula')) {
                        // admin_base_model_comentarioaula_list
                        if ($pathinfo === '/admin/base/model/comentarioaula/list') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'ito_admin.admin.comentario_aula',  '_sonata_name' => 'admin_base_model_comentarioaula_list',  '_route' => 'admin_base_model_comentarioaula_list',);
                        }

                        // admin_base_model_comentarioaula_batch
                        if ($pathinfo === '/admin/base/model/comentarioaula/batch') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'ito_admin.admin.comentario_aula',  '_sonata_name' => 'admin_base_model_comentarioaula_batch',  '_route' => 'admin_base_model_comentarioaula_batch',);
                        }

                        // admin_base_model_comentarioaula_edit
                        if (preg_match('#^/admin/base/model/comentarioaula/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_base_model_comentarioaula_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'ito_admin.admin.comentario_aula',  '_sonata_name' => 'admin_base_model_comentarioaula_edit',));
                        }

                        // admin_base_model_comentarioaula_delete
                        if (preg_match('#^/admin/base/model/comentarioaula/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_base_model_comentarioaula_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'ito_admin.admin.comentario_aula',  '_sonata_name' => 'admin_base_model_comentarioaula_delete',));
                        }

                        // admin_base_model_comentarioaula_show
                        if (preg_match('#^/admin/base/model/comentarioaula/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_base_model_comentarioaula_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'ito_admin.admin.comentario_aula',  '_sonata_name' => 'admin_base_model_comentarioaula_show',));
                        }

                        // admin_base_model_comentarioaula_export
                        if ($pathinfo === '/admin/base/model/comentarioaula/export') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'ito_admin.admin.comentario_aula',  '_sonata_name' => 'admin_base_model_comentarioaula_export',  '_route' => 'admin_base_model_comentarioaula_export',);
                        }

                    }

                    if (0 === strpos($pathinfo, '/admin/base/model/contacto')) {
                        // admin_base_model_contacto_list
                        if ($pathinfo === '/admin/base/model/contacto/list') {
                            return array (  '_controller' => 'ItoSoftware\\Base\\AdminBundle\\Controller\\ContactoAdminController::listAction',  '_sonata_admin' => 'ito_admin.admin.contacto',  '_sonata_name' => 'admin_base_model_contacto_list',  '_route' => 'admin_base_model_contacto_list',);
                        }

                        // admin_base_model_contacto_batch
                        if ($pathinfo === '/admin/base/model/contacto/batch') {
                            return array (  '_controller' => 'ItoSoftware\\Base\\AdminBundle\\Controller\\ContactoAdminController::batchAction',  '_sonata_admin' => 'ito_admin.admin.contacto',  '_sonata_name' => 'admin_base_model_contacto_batch',  '_route' => 'admin_base_model_contacto_batch',);
                        }

                        // admin_base_model_contacto_edit
                        if (preg_match('#^/admin/base/model/contacto/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_base_model_contacto_edit')), array (  '_controller' => 'ItoSoftware\\Base\\AdminBundle\\Controller\\ContactoAdminController::editAction',  '_sonata_admin' => 'ito_admin.admin.contacto',  '_sonata_name' => 'admin_base_model_contacto_edit',));
                        }

                        // admin_base_model_contacto_delete
                        if (preg_match('#^/admin/base/model/contacto/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_base_model_contacto_delete')), array (  '_controller' => 'ItoSoftware\\Base\\AdminBundle\\Controller\\ContactoAdminController::deleteAction',  '_sonata_admin' => 'ito_admin.admin.contacto',  '_sonata_name' => 'admin_base_model_contacto_delete',));
                        }

                        // admin_base_model_contacto_show
                        if (preg_match('#^/admin/base/model/contacto/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_base_model_contacto_show')), array (  '_controller' => 'ItoSoftware\\Base\\AdminBundle\\Controller\\ContactoAdminController::showAction',  '_sonata_admin' => 'ito_admin.admin.contacto',  '_sonata_name' => 'admin_base_model_contacto_show',));
                        }

                        // admin_base_model_contacto_export
                        if ($pathinfo === '/admin/base/model/contacto/export') {
                            return array (  '_controller' => 'ItoSoftware\\Base\\AdminBundle\\Controller\\ContactoAdminController::exportAction',  '_sonata_admin' => 'ito_admin.admin.contacto',  '_sonata_name' => 'admin_base_model_contacto_export',  '_route' => 'admin_base_model_contacto_export',);
                        }

                    }

                }

                if (0 === strpos($pathinfo, '/admin/base/model/fotoslide')) {
                    // admin_base_model_fotoslide_list
                    if ($pathinfo === '/admin/base/model/fotoslide/list') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'ito_admin.admin.foto_slide',  '_sonata_name' => 'admin_base_model_fotoslide_list',  '_route' => 'admin_base_model_fotoslide_list',);
                    }

                    // admin_base_model_fotoslide_create
                    if ($pathinfo === '/admin/base/model/fotoslide/create') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'ito_admin.admin.foto_slide',  '_sonata_name' => 'admin_base_model_fotoslide_create',  '_route' => 'admin_base_model_fotoslide_create',);
                    }

                    // admin_base_model_fotoslide_batch
                    if ($pathinfo === '/admin/base/model/fotoslide/batch') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'ito_admin.admin.foto_slide',  '_sonata_name' => 'admin_base_model_fotoslide_batch',  '_route' => 'admin_base_model_fotoslide_batch',);
                    }

                    // admin_base_model_fotoslide_edit
                    if (preg_match('#^/admin/base/model/fotoslide/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_base_model_fotoslide_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'ito_admin.admin.foto_slide',  '_sonata_name' => 'admin_base_model_fotoslide_edit',));
                    }

                    // admin_base_model_fotoslide_delete
                    if (preg_match('#^/admin/base/model/fotoslide/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_base_model_fotoslide_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'ito_admin.admin.foto_slide',  '_sonata_name' => 'admin_base_model_fotoslide_delete',));
                    }

                    // admin_base_model_fotoslide_show
                    if (preg_match('#^/admin/base/model/fotoslide/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_base_model_fotoslide_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'ito_admin.admin.foto_slide',  '_sonata_name' => 'admin_base_model_fotoslide_show',));
                    }

                    // admin_base_model_fotoslide_export
                    if ($pathinfo === '/admin/base/model/fotoslide/export') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'ito_admin.admin.foto_slide',  '_sonata_name' => 'admin_base_model_fotoslide_export',  '_route' => 'admin_base_model_fotoslide_export',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/base/model/group')) {
                    // admin_base_model_group_list
                    if ($pathinfo === '/admin/base/model/group/list') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_base_model_group_list',  '_route' => 'admin_base_model_group_list',);
                    }

                    // admin_base_model_group_create
                    if ($pathinfo === '/admin/base/model/group/create') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_base_model_group_create',  '_route' => 'admin_base_model_group_create',);
                    }

                    // admin_base_model_group_batch
                    if ($pathinfo === '/admin/base/model/group/batch') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_base_model_group_batch',  '_route' => 'admin_base_model_group_batch',);
                    }

                    // admin_base_model_group_edit
                    if (preg_match('#^/admin/base/model/group/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_base_model_group_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_base_model_group_edit',));
                    }

                    // admin_base_model_group_delete
                    if (preg_match('#^/admin/base/model/group/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_base_model_group_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_base_model_group_delete',));
                    }

                    // admin_base_model_group_show
                    if (preg_match('#^/admin/base/model/group/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_base_model_group_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_base_model_group_show',));
                    }

                    // admin_base_model_group_export
                    if ($pathinfo === '/admin/base/model/group/export') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_base_model_group_export',  '_route' => 'admin_base_model_group_export',);
                    }

                }

            }

            if (0 === strpos($pathinfo, '/admin/log')) {
                if (0 === strpos($pathinfo, '/admin/login')) {
                    // sonata_user_admin_security_login
                    if ($pathinfo === '/admin/login') {
                        return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\AdminSecurityController::loginAction',  '_route' => 'sonata_user_admin_security_login',);
                    }

                    // sonata_user_admin_security_check
                    if ($pathinfo === '/admin/login_check') {
                        return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\AdminSecurityController::checkAction',  '_route' => 'sonata_user_admin_security_check',);
                    }

                }

                // sonata_user_admin_security_logout
                if ($pathinfo === '/admin/logout') {
                    return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\AdminSecurityController::logoutAction',  '_route' => 'sonata_user_admin_security_logout',);
                }

            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
