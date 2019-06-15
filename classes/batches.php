<?php

    class MAILCHIMP_BATCHES {

        // Use batch operations to complete multiple operations with a single call.
        // Manage webhooks for batch operations. Learn more about How to Use Batch Operations.

        function createOperation($params) { global $mailchimp;
            if (is_array($params)) {
                return $mailchimp->requests->POST($mailchimp->keys["api"]["batch-operations"], $params);
            } else {
                return 0;
            }
        }

        function createWebHook($params) { global $mailchimp;
            if (is_array($params)) {
                return $mailchimp->requests->POST($mailchimp->keys["api"]["batch-webhooks"], $params);
            } else {
                return 0;
            }
        }

        function deleteOperation($batch_id) { global $mailchimp;
            if (is_array($batch_id)) {
                return $mailchimp->requests->DELETE($mailchimp->keys["api"]["batch-operations"] . "/$batch_id");
            } else {
                return 0;
            }
        }

        function deleteWebHook($batch_id) { global $mailchimp;
            if (is_array($batch_id)) {
                return $mailchimp->requests->DELETE($mailchimp->keys["api"]["batch-webhooks"] . "/$batch_id");
            } else {
                return 0;
            }
        }

        function editWebHook($batch_id, $params) {
            if ($batch_id && is_array($params)) {
                return $mailchimp->requests->PATCH($mailchimp->keys["api"]["batch-webhooks"] . "/$batch_id", $params);
            } else {
                return 0;
            }
        }

        function getOperations($batch_id = null) { global $mailchimp;
            if ($batch_id) {
                return $mailchimp->requests->GET($mailchimp->keys["api"]["batch-operations"] . "/$batch_id");
            } else {
                return $mailchimp->requests->GET($mailchimp->keys["api"]["batch-operations"]);
            }
        }

        function getWebHooks($batch_id = null) { global $mailchimp;
            if ($batch_id) {
                return $mailchimp->requests->GET($mailchimp->keys["api"]["batch-webhooks"] . "/$batch_id");
            } else {
                return $mailchimp->requests->GET($mailchimp->keys["api"]["batch-webhooks"]);
            }
        }

    }

?>
