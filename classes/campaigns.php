<?php

    class MAILCHIMP_CAMPAIGNS {

        // Campaigns are how you send emails to your Mailchimp list. Use the Campaigns API calls to manage campaigns in your Mailchimp account.
        // Manage the HTML, plain-text, and template content for your Mailchimp campaigns.
        // Post comments, reply to team feedback, and send test emails while you’re working together on a Mailchimp campaign.
        // Review the send checklist for your campaign, and resolve any issues before sending.

        function create($params) { global $mailchimp;
            if (is_array($params)) {
                return $mailchimp->requests->POST($mailchimp->keys["api"]["campaigns"], $params);
            } else {
                return 0;
            }
        }

        function createFeedback($campaign_id, $params) { global $mailchimp;
            if ($campaign_id && is_array($params)) {
                return $mailchimp->requests->POST($mailchimp->keys["api"]["campaigns"] . "/$campaign_id/feedback", $params);
            } else {
                return 0;
            }
        }

        function createFolder($params) { global $mailchimp;
            if (is_array($params)) {
                return $mailchimp->requests->POST($mailchimp->keys["api"]["campaign-folders"], $params);
            } else {
                return 0;
            }
        }

        function delete($campaign_id) { global $mailchimp;
            if ($campaign_id) {
                return $mailchimp->requests->DELETE($mailchimp->keys["api"]["campaigns"] . "/$campaign_id");
            } else {
                return 0;
            }
        }

        function deleteFeedback($campaign_id, $feedback_id) { global $mailchimp;
            if ($campaign_id && $feedback_id) {
                return $mailchimp->requests->DELETE($mailchimp->keys["api"]["campaigns"] . "/$campaign_id/feedback/$feedback_id");
            } else {
                return 0;
            }
        }

        function deleteFolder($folder_id) { global $mailchimp;
            if ($folder_id) {
                return $mailchimp->requests->DELETE($mailchimp->keys["api"]["campaign-folders"] . "/$folder_id");
            } else {
                return 0;
            }
        }

        function edit($campaign_id, $params) { global $mailchimp;
            if ($campaign_id && is_array($params)) {
                return $mailchimp->requests->PATCH($mailchimp->keys["api"]["campaigns"] . "/$campaign_id", $params);
            } else {
                return 0;
            }
        }

        function editContent($campaign_id, $params) { global $mailchimp;
            if ($campaign_id && is_array($params)) {
                return $mailchimp->requests->PATCH($mailchimp->keys["api"]["campaigns"] . "/$campaign_id/content", $params);
            } else {
                return 0;
            }
        }

        function editFeedback($campaign_id) { global $mailchimp;
            if ($campaign_id && is_array($params)) {
                return $mailchimp->requests->PATCH($mailchimp->keys["api"]["campaigns"] . "/$campaign_id/feedback", $params);
            } else {
                return 0;
            }
        }

        function editFolder($folder_id, $params) { global $mailchimp;
            if ($folder_id && is_array($params)) {
                return $mailchimp->requests->PATCH($mailchimp->keys["api"]["campaign-folders"] . "/$folder_id", $params);
            } else {
                return 0;
            }
        }

        function get($campaign_id) { global $mailchimp;
            if ($campaign_id) {
                return $mailchimp->requests->GET($mailchimp->keys["api"]["campaigns"] . "/$campaign_id");
            } else {
                return $mailchimp->requests->GET($mailchimp->keys["api"]["campaigns"]);
            }
        }

        function getContent($campaign_id) { global $mailchimp;
            if ($campaign_id) {
                return $mailchimp->requests->GET($mailchimp->keys["api"]["campaigns"] . "/$campaign_id/content");
            } else {
                return 0;
            }
        }

        function getFeedback($campaign_id) { global $mailchimp;
            if ($campaign_id) {
                return $mailchimp->requests->GET($mailchimp->keys["api"]["campaigns"] . "/$campaign_id/feedback");
            } else {
                return 0;
            }
        }

        function getFolders($folder_id = null) { global $mailchimp;
            if ($folder_id) {
                return $mailchimp->requests->GET($mailchimp->keys["api"]["campaign-folders"] . "/$folder_id");
            } else {
                return 0;
            }
        }

        function sendChecklist($campaign_id) { global $mailchimp;
            if ($campaign_id) {
                return $mailchimp->requests->GET($mailchimp->keys["api"]["campaigns"] . "/$campaign_id/send-checklist");
            } else {
                return 0;
            }
        }

    }

?>
