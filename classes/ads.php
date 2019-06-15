<?php

    class MAILCHIMP_ADS {

        // Facebook Ads
        // Google Ads

        function facebook($id) { global $mailchimp;
            if ($id) {
                return $mailchimp->requests->GET($mailchimp->keys["api"]["facebook-ads"] . "/$id");
            } else {
                return $mailchimp->requests->GET($mailchimp->keys["api"]["facebook-ads"]);
            }
        }

        function google($id) { global $mailchimp;
            if ($id) {
                return $mailchimp->requests->GET($mailchimp->keys["api"]["google-ads"] . "/$id");
            } else {
                return $mailchimp->requests->GET($mailchimp->keys["api"]["google-ads"]);
            }
        }

    }

?>
