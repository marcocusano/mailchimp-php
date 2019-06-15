<?php

    class MAILCHIMP_LANDING_PAGES {

        // Manage your Landing Pages, including publishing and unpublishing.
        // The HTML content for your Mailchimp landing pages.

        function create($params) { global $mailchimp;
            if (is_array($params)) {
                return $mailchimp->requests->POST($mailchimp->keys["api"]["landing-pages"], $params);
            } else {
                return 0;
            }
        }

        function delete($page_id) { global $mailchimp;
            if ($page_id) {
                return $mailchimp->requests->DELETE($mailchimp->keys["api"]["landing-pages"] . "/$page_id");
            } else {
                return 0;
            }
        }

        function edit($page_id, $params) { global $mailchimp;
            if ($page_id && is_array($params)) {
                return $mailchimp->requests->POST($mailchimp->keys["api"]["landing-pages"] . "/$page_id", $params);
            } else {
                return 0;
            }
        }

        function get($page_id = null) { global $mailchimp;
            if ($page_id) {
                return $mailchimp->requests->GET($mailchimp->keys["api"]["landing-pages"] . "/$page_id");
            } else {
                return $mailchimp->requests->GET($mailchimp->keys["api"]["landing-pages"]);
            }
        }

        function getContent($page_id) { global $mailchimp;
            if ($page_id) {
                return $mailchimp->requests->GET($mailchimp->keys["api"]["landing-pages"] . "/$page_id/content");
            } else {
                return 0;
            }
        }

        function publish($page_id) {
            if ($page_id) {
                return $mailchimp->requests->POST($mailchimp->keys["api"]["landing-pages"] . "/$page_id/actions/publish");
            } else {
                return 0;
            }
        }

        function unplublish($page_id) {
            if ($page_id) {
                return $mailchimp->requests->POST($mailchimp->keys["api"]["landing-pages"] . "/$page_id/actions/unpublish");
            } else {
                return 0;
            }
        }

    }

?>
