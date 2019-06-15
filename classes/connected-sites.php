<?php

    class MAILCHIMP_CONNECTED_SITES {

        // Manage sites you’ve connected to your Mailchimp account.

        function create($params) { global $mailchimp;
            if (is_array($params)) {
                return $mailchimp->requests->POST($mailchimp->keys["api"]["connected-sites"], $params);
            } else {
                return 0;
            }
        }

        function delete($site_id) { global $mailchimp;
            if ($site_id) {
                return $mailchimp->requests->DELETE($mailchimp->keys["api"]["connected-sites"] . "/$site_id");
            } else {
                return 0;
            }
        }

        function edit($site_id, $params) { global $mailchimp;
            if ($site_id && is_array($params)) {
                return $mailchimp->requests->PATCH($mailchimp->keys["api"]["connected-sites"] . "/$site_id", $params);
            } else {
                return 0;
            }
        }

        function get($site_id = null) { global $mailchimp;
            if ($site_id) {
                return $mailchimp->requests->GET($mailchimp->keys["api"]["connected-sites"] . "/$site_id");
            } else {
                return $mailchimp->requests->GET($mailchimp->keys["api"]["connected-sites"]);
            }
        }

    }

?>
