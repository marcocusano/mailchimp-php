<?php

    // APIs
    $mailchimp->keys["api"]["root"] = "https://<dc>.api.mailchimp.com/3.0";
    if (!$mailchimp->config->dc) {
        $dc = explode("-", $mailchimp->config->api_key);
        if (is_array($dc)) {
            if (count($dc) == 2) {
                $mailchimp->config->dc = $dc[1];
            } else {
                die("DC array count was not initialized due to ApiKey format: " . $mailchimp->config->api_key);
            }
        } else {
            die("DC array was not initialized due to ApiKey format: " . $mailchimp->config->api_key);
        }
    }
    $mailchimp->keys["api"]["root"] = str_replace("<dc>", $mailchimp->config->dc, $mailchimp->keys["api"]["root"]);
    $mailchimp->keys["api"]["automations"] = $mailchimp->keys["api"]["root"] . "/automations";
    $mailchimp->keys["api"]["batch-operations"] = $mailchimp->keys["api"]["root"] . "/batches";
    $mailchimp->keys["api"]["batch-webhooks"] = $mailchimp->keys["api"]["root"] . "/batch-webhooks";
    $mailchimp->keys["api"]["campaign-folders"] = $mailchimp->keys["api"]["root"] . "/campaign-folders";
    $mailchimp->keys["api"]["campaigns"] = $mailchimp->keys["api"]["root"] . "/campaigns";
    $mailchimp->keys["api"]["connected-sites"] = $mailchimp->keys["api"]["root"] . "/connected-sites";
    $mailchimp->keys["api"]["conversations"] = $mailchimp->keys["api"]["root"] . "/conversations";
    $mailchimp->keys["api"]["ecommerce-stores"] = $mailchimp->keys["api"]["root"] . "/ecommerce/stores";
    $mailchimp->keys["api"]["facebook-ads"] = $mailchimp->keys["api"]["root"] . "/facebook-ads";
    $mailchimp->keys["api"]["file-manager"] = $mailchimp->keys["api"]["root"] . "/file-manager";
    $mailchimp->keys["api"]["google-ads"] = $mailchimp->keys["api"]["root"] . "/google-ads";
    $mailchimp->keys["api"]["landing-pages"] = $mailchimp->keys["api"]["root"] . "/landing-pages";
    $mailchimp->keys["api"]["lists"] = $mailchimp->keys["api"]["root"] . "/lists";
    $mailchimp->keys["api"]["ping"] = $mailchimp->keys["api"]["root"] . "/ping";
    $mailchimp->keys["api"]["reporting"] = $mailchimp->keys["api"]["root"] . "/reporting";
    $mailchimp->keys["api"]["reports"] = $mailchimp->keys["api"]["root"] . "/reports";
    $mailchimp->keys["api"]["search-campaigns"] = $mailchimp->keys["api"]["root"] . "/search-campaigns";
    $mailchimp->keys["api"]["search-members"] = $mailchimp->keys["api"]["root"] . "/search-members";
    $mailchimp->keys["api"]["template-folders"] = $mailchimp->keys["api"]["root"] . "/template-folders";
    $mailchimp->keys["api"]["templates"] = $mailchimp->keys["api"]["root"] . "/templates";
    $mailchimp->keys["api"]["verified-domains"] = $mailchimp->keys["api"]["root"] . "/verified-domains";

    // Error codes
    $mailchimp->keys["errors"][400] = "Your request could not be processed, or the action requested was not valid for this resource, or the resource submitted could not be validated, or we encountered an unspecified JSON parsing error.";
    $mailchimp->keys["errors"][401] = "Your request did not include an API key, or your API key may be invalid, or you’ve attempted to access the wrong data center.";
    $mailchimp->keys["errors"][403] = "You are not permitted to access this resource, or this account has been disabled, or the API key provided is linked to a different data center.";
    $mailchimp->keys["errors"][404] = "The requested resource could not be found.";
    $mailchimp->keys["errors"][405] = "The requested method and resource are not compatible. See the Allow header for this resource’s available methods.";
    $mailchimp->keys["errors"][414] = "The sub-resource requested is nested too deeply.";
    $mailchimp->keys["errors"][422] = "You can only use the X-HTTP-Method-Override header with the POST method, or the fields requested from this resource are invalid.";
    $mailchimp->keys["errors"][429] = "You have exceeded the limit of 10 simultaneous connections.";
    $mailchimp->keys["errors"][500] = "An unexpected internal error has occurred. Please contact Support for more information.";
    $mailchimp->keys["errors"][503] = "This method has been disabled.";



?>
