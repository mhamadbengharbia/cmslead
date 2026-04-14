<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/admin' => [[['_route' => 'admin_dashboard', '_controller' => 'App\\Controller\\Admin\\DashboardController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/landing-pages' => [[['_route' => 'admin_landing_page_index', '_controller' => 'App\\Controller\\Admin\\LandingPageController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/leads' => [[['_route' => 'admin_lead_index', '_controller' => 'App\\Controller\\Admin\\LeadController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/partners' => [[['_route' => 'admin_partner_index', '_controller' => 'App\\Controller\\Admin\\PartnerController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/partners/new' => [[['_route' => 'admin_partner_new', '_controller' => 'App\\Controller\\Admin\\PartnerController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/partner' => [[['_route' => 'partner_dashboard', '_controller' => 'App\\Controller\\Partner\\DashboardController::index'], null, ['GET' => 0], null, false, false, null]],
        '/partner/landing-pages' => [[['_route' => 'partner_landing_page_index', '_controller' => 'App\\Controller\\Partner\\LandingPageController::index'], null, ['GET' => 0], null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/post-login' => [[['_route' => 'app_post_login', '_controller' => 'App\\Controller\\SecurityController::postLogin'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/admin/partners/([^/]++)/(?'
                    .'|edit(*:74)'
                    .'|toggle\\-status(*:95)'
                    .'|delete(*:108)'
                .')'
                .'|/p(?'
                    .'|review/([^/]++)(*:137)'
                    .'|artner/landing\\-pages/([^/]++)/edit(*:180)'
                .')'
                .'|/([^/]++)/([^/]++)(*:207)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        74 => [[['_route' => 'admin_partner_edit', '_controller' => 'App\\Controller\\Admin\\PartnerController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        95 => [[['_route' => 'admin_partner_toggle_status', '_controller' => 'App\\Controller\\Admin\\PartnerController::toggleStatus'], ['id'], ['POST' => 0], null, false, false, null]],
        108 => [[['_route' => 'admin_partner_delete', '_controller' => 'App\\Controller\\Admin\\PartnerController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        137 => [[['_route' => 'app_template_preview', '_controller' => 'App\\Controller\\HomeController::preview'], ['code'], null, null, false, true, null]],
        180 => [[['_route' => 'partner_landing_page_edit', '_controller' => 'App\\Controller\\Partner\\LandingPageController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        207 => [
            [['_route' => 'public_landing_show', '_controller' => 'App\\Controller\\Public\\LandingPageController::show'], ['partnerSlug', 'landingSlug'], ['GET' => 0, 'POST' => 1], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
