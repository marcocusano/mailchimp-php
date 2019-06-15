<?php

    ////////////////////////////////////////////
    //  Mailchimp-PHP                         //
    //  v0.1 (June 2019)                      //
    //  by Marco Cusano                       //
    //  https://www.marcocusano.dev           //
    ////////////////////////////////////////////

    // Static Variables
    DEFINE("MAILCHIMP_ROOT", dirname(__FILE__));
    DEFINE("MAILCHIMP_REQUIREMENTS", MAILCHIMP_ROOT . "/requirements");
    DEFINE("MAILCHIMP_CLASSES", MAILCHIMP_ROOT . "/classes");
    DEFINE("MAILCHIMP_CUSTOM", MAILCHIMP_CUSTOM . "/custom");

    $mailchimp = New STDCLASS();

        /////////////////////////////////////////
        //                                     //
        //             REQUIREMENTS            //
        //                                     //
        /////////////////////////////////////////

        // Initialization
        $mailchimp->config = json_decode(file_get_contents("config.json"));
        $mailchimp->keys = array();
        include(MAILCHIMP_REQUIREMENTS . "/keys.php");
        require_once(MAILCHIMP_REQUIREMENTS . "/requests.php");
        $mailchimp->requests = New MAILCHIMP_REQUESTS;

        /////////////////////////////////////////
        //                                     //
        //               CLASSES               //
        //                                     //
        /////////////////////////////////////////

        // Ads (Facebook and Google)
        include_once(MAILCHIMP_CLASSES . "/ads.php");
        $mailchimp->ads = New MAILCHIMP_ADS;
        // Automations
        include_once(MAILCHIMP_CLASSES . "/automations.php");
        $mailchimp->automations = New MAILCHIMP_AUTOMATIONS;
        // Batches
        include_once(MAILCHIMP_CLASSES . "/batches.php");
        $mailchimp->batches = New MAILCHIMP_BATCHES;
        // Campaigns
        include_once(MAILCHIMP_CLASSES . "/campaigns.php");
        $mailchimp->campaigns = New MAILCHIMP_CAMPAIGNS;
        // Connected sites
        include_once(MAILCHIMP_CLASSES . "/connected-sites.php");
        $mailchimp->connected_sites = New MAILCHIMP_CONNECTED_SITES;
        // Conversations
        include_once(MAILCHIMP_CLASSES . "/conversations.php");
        $mailchimp->conversations = New MAILCHIMP_CONVERSATIONS;
        // E-Commerce ! UNDER DEVELOPMENT -> Don't remove comments
        // include_once(MAILCHIMP_CLASSES . "/e-commerce.php");
        // $mailchimp->ecommerce = New MAILCHIMP_ECOMMERCE;
        // File manager ! UNDER DEVELOPMENT -> Don't remove comments
        // include_once(MAILCHIMP_CLASSES . "/file-manager.php");
        // Landing Pages
        include_once(MAILCHIMP_CLASSES . "/landing-pages.php");
        $mailchimp->landings = New MAILCHIMP_LANDING_PAGES;
        // Lists and Audiences
        include_once(MAILCHIMP_CLASSES . "/lists.php");
        $mailchimp->lists = New MAILCHIMP_LISTS_AND_AUDIENCES;
        // Ping ! UNDER DEVELOPMENT -> Don't remove comments
        // include_once(MAILCHIMP_CLASSES . "/ping.php");
        // $mailchimp->ping = New MAILCHIMP_PING;
        // Reporting ! UNDER DEVELOPMENT -> Don't remove comments
        // include_once(MAILCHIMP_CLASSES . "/reporting.php");
        // $mailchimp->reporting = New MAILCHIMP_REPORTING;
        // Reports ! UNDER DEVELOPMENT -> Don't remove comments
        // include_once(MAILCHIMP_CLASSES . "/reports.php");
        // $mailchimp->reports = New MAILCHIMP_REPORTS;
        // Search Campaigns and Members
        include_once(MAILCHIMP_CLASSES . "/search.php");
        $mailchimp->search = New MAILCHIMP_SEARCH;
        // Templates ! UNDER DEVELOPMENT -> Don't remove comments
        // include_once(MAILCHIMP_CLASSES . "/templates.php");
        // $mailchimp->template = New MAILCHIMP_TEMPLATES;
        // Verified Domains ! UNDER DEVELOPMENT -> Don't remove comments
        // include_once(MAILCHIMP_CLASSES . "/verified-domains.php");
        // $mailchimp->verified_domains = New MAILCHIMP_VERIFIED_DOMAINS;

        // Debug
        // var_dump($mailchimp);

?>
