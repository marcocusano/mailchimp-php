<?php

    class MAILCHIMP_SEARCH {

        function campaigns($params) { global $mailchimp;
            if (is_array($params)) {
                $params["isQuery"] = true;
                return $mailchimp->requests->GET($mailchimp->keys["api"]["search-campaigns"], $params);
            } else {
                return 0;
            }
        }

        function members($params) { global $mailchimp;
            if (is_array($params)) {
                $params["isQuery"] = true;
                return $mailchimp->requests->GET($mailchimp->keys["api"]["search-members"], $params);
            } else {
                return 0;
            }
        }

    }

?>
