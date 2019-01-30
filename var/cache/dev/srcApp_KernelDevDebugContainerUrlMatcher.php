<?php

use Symfony\Component\Routing\Matcher\Dumper\PhpMatcherTrait;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcApp_KernelDevDebugContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    use PhpMatcherTrait;

    public function __construct(RequestContext $context)
    {
        $this->context = $context;
        $this->staticRoutes = array(
            '/login' => array(array(array('_route' => 'account_login', '_controller' => 'App\\Controller\\AccountController::login'), null, null, null, false, false, null)),
            '/logout' => array(array(array('_route' => 'account_logout', '_controller' => 'App\\Controller\\AccountController::logout'), null, null, null, false, false, null)),
            '/register' => array(array(array('_route' => 'account_register', '_controller' => 'App\\Controller\\AccountController::register'), null, null, null, false, false, null)),
            '/account/profile' => array(array(array('_route' => 'account_profile', '_controller' => 'App\\Controller\\AccountController::profile'), null, null, null, false, false, null)),
            '/account/password-update' => array(array(array('_route' => 'account_password', '_controller' => 'App\\Controller\\AccountController::updatePassword'), null, null, null, false, false, null)),
            '/account' => array(array(array('_route' => 'account_index', '_controller' => 'App\\Controller\\AccountController::myAccount'), null, null, null, false, false, null)),
            '/account/bookings' => array(array(array('_route' => 'account_bookings', '_controller' => 'App\\Controller\\AccountController::bookings'), null, null, null, false, false, null)),
            '/ads' => array(array(array('_route' => 'ads_index', '_controller' => 'App\\Controller\\AdController::index'), null, null, null, false, false, null)),
            '/ads/new' => array(array(array('_route' => 'ads_create', '_controller' => 'App\\Controller\\AdController::create'), null, null, null, false, false, null)),
            '/admin/login' => array(array(array('_route' => 'admin_account_login', '_controller' => 'App\\Controller\\AdminAccountController::login'), null, null, null, false, false, null)),
            '/admin/logout' => array(array(array('_route' => 'admin_account_logout', '_controller' => 'App\\Controller\\AdminAccountController::logout'), null, null, null, false, false, null)),
            '/admin' => array(array(array('_route' => 'admin_dashboard', '_controller' => 'App\\Controller\\AdminDashboardController::index'), null, null, null, false, false, null)),
            '/' => array(array(array('_route' => 'homepage', '_controller' => 'App\\Controller\\HomeController::home'), null, null, null, false, false, null)),
            '/_profiler' => array(array(array('_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'), null, null, null, true, false, null)),
            '/_profiler/search' => array(array(array('_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'), null, null, null, false, false, null)),
            '/_profiler/search_bar' => array(array(array('_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'), null, null, null, false, false, null)),
            '/_profiler/phpinfo' => array(array(array('_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'), null, null, null, false, false, null)),
            '/_profiler/open' => array(array(array('_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'), null, null, null, false, false, null)),
        );
        $this->regexpList = array(
            0 => '{^(?'
                    .'|/ad(?'
                        .'|s/([^/]++)(?'
                            .'|/(?'
                                .'|edit(*:34)'
                                .'|delete(*:47)'
                                .'|book(*:58)'
                            .')'
                            .'|(*:66)'
                        .')'
                        .'|min/(?'
                            .'|ads(?'
                                .'|(?:/(\\d+))?(*:98)'
                                .'|/([^/]++)/(?'
                                    .'|edit(*:122)'
                                    .'|delete(*:136)'
                                .')'
                            .')'
                            .'|bookings(?'
                                .'|(?:/(\\d+))?(*:168)'
                                .'|/([^/]++)/(?'
                                    .'|edit(*:193)'
                                    .'|delete(*:207)'
                                .')'
                            .')'
                            .'|comments(?'
                                .'|(?:/(\\d+))?(*:239)'
                                .'|/([^/]++)/(?'
                                    .'|edit(*:264)'
                                    .'|delete(*:278)'
                                .')'
                            .')'
                        .')'
                    .')'
                    .'|/booking/([^/]++)(*:307)'
                    .'|/user/([^/]++)(*:329)'
                    .'|/_(?'
                        .'|error/(\\d+)(?:\\.([^/]++))?(*:368)'
                        .'|wdt/([^/]++)(*:388)'
                        .'|profiler/([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:434)'
                                .'|router(*:448)'
                                .'|exception(?'
                                    .'|(*:468)'
                                    .'|\\.css(*:481)'
                                .')'
                            .')'
                            .'|(*:491)'
                        .')'
                    .')'
                .')/?$}sDu',
        );
        $this->dynamicRoutes = array(
            34 => array(array(array('_route' => 'ads_edit', '_controller' => 'App\\Controller\\AdController::edit'), array('slug'), null, null, false, false, null)),
            47 => array(array(array('_route' => 'ads_delete', '_controller' => 'App\\Controller\\AdController::delete'), array('slug'), null, null, false, false, null)),
            58 => array(array(array('_route' => 'booking_create', '_controller' => 'App\\Controller\\BookingController::book'), array('slug'), null, null, false, false, null)),
            66 => array(array(array('_route' => 'ads_show', '_controller' => 'App\\Controller\\AdController::show'), array('slug'), null, null, false, true, null)),
            98 => array(array(array('_route' => 'admin_ads_index', 'page' => '1', '_controller' => 'App\\Controller\\AdminAdController::index'), array('page'), null, null, false, true, null)),
            122 => array(array(array('_route' => 'admin_ads_edit', '_controller' => 'App\\Controller\\AdminAdController::edit'), array('id'), null, null, false, false, null)),
            136 => array(array(array('_route' => 'admin_ads_delete', '_controller' => 'App\\Controller\\AdminAdController::delete'), array('id'), null, null, false, false, null)),
            168 => array(array(array('_route' => 'admin_bookings_index', 'page' => '1', '_controller' => 'App\\Controller\\AdminBookingController::index'), array('page'), null, null, false, true, null)),
            193 => array(array(array('_route' => 'admin_bookings_edit', '_controller' => 'App\\Controller\\AdminBookingController::edit'), array('id'), null, null, false, false, null)),
            207 => array(array(array('_route' => 'admin_bookings_delete', '_controller' => 'App\\Controller\\AdminBookingController::delete'), array('id'), null, null, false, false, null)),
            239 => array(array(array('_route' => 'admin_comments_index', 'page' => '1', '_controller' => 'App\\Controller\\AdminCommentController::index'), array('page'), null, null, false, true, null)),
            264 => array(array(array('_route' => 'admin_comments_edit', '_controller' => 'App\\Controller\\AdminCommentController::edit'), array('id'), null, null, false, false, null)),
            278 => array(array(array('_route' => 'admin_comments_delete', '_controller' => 'App\\Controller\\AdminCommentController::delete'), array('id'), null, null, false, false, null)),
            307 => array(array(array('_route' => 'booking_show', '_controller' => 'App\\Controller\\BookingController::show'), array('id'), null, null, false, true, null)),
            329 => array(array(array('_route' => 'user_show', '_controller' => 'App\\Controller\\UserController::index'), array('slug'), null, null, false, true, null)),
            368 => array(array(array('_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'), array('code', '_format'), null, null, false, true, null)),
            388 => array(array(array('_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'), array('token'), null, null, false, true, null)),
            434 => array(array(array('_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'), array('token'), null, null, false, false, null)),
            448 => array(array(array('_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'), array('token'), null, null, false, false, null)),
            468 => array(array(array('_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception::showAction'), array('token'), null, null, false, false, null)),
            481 => array(array(array('_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception::cssAction'), array('token'), null, null, false, false, null)),
            491 => array(array(array('_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'), array('token'), null, null, false, true, null)),
        );
    }
}
