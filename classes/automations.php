<?php

    class MAILCHIMP_AUTOMATIONS {

        // Mailchimp’s free Automation feature lets you build a series of emails that send to subscribers when triggered by a specific date, activity, or event. Use the API to manage Automation workflows, emails, and queues.

        function action($workflow_id, $action) {
            if ($workflow_id && $action) {
                return $mailchimp->requests->POST($mailchimp->keys["api"]["automations"] . "/$workflow_id/actions/$action");
            } else {
                return 0;
            }
        }

        function actionEmail($workflow_id, $email_id, $action) {
            if ($workflow_id && $email_id && $action) {
                return $mailchimp->requests->POST($mailchimp->keys["api"]["automations"] . "/$workflow_id/emails/$email_id/actions/$action");
            } else {
                return 0;
            }
        }

        function archive($workflow_id) { global $mailchimp; return $mailchimp->automations->action($workflow_id, "archive"); }

        function create($params) { global $mailchimp;
            if (is_array($params)) {
                return $mailchimp->requests->POST($mailchimp->keys["api"]["automations"], $params);
            } else {
                return 0;
            }
        }

        function createQueue($workflow_id, $email_id, $params) { global $mailchimp;
            if ($workflow_id && $email_id && is_array($params)) {
                return $mailchimp->requests->POST($mailchimp->keys["api"]["automations"] . "/$workflow_id/emails/$email_id/queue", $params);
            } else {
                return 0;
            }
        }

        function deleteEmail($workflow_id, $email_id) { global $mailchimp;
            if ($workflow_id && $email_id) {
                return $mailchimp->requests->DELETE($mailchimp->keys["api"]["automations"] . "/$workflow_id/emails/$email_id");
            } else {
                return 0;
            }
        }

        function deleteSubscriber($workflow_id, $params) { global $mailchimp;
            if ($workflow_id && $params["email_address"]) {
                return $mailchimp->requests->POST($mailchimp->keys["api"]["automations"] . "/$workflow_id/removed-subscribers", $params);
            } else {
                return 0;
            }
        }

        function edit($workflow_id, $params) { global $mailchimp;
            if ($workflow_id && is_array($params)) {
                return $mailchimp->requests->PATCH($mailchimp->keys["api"]["automations"] . "/$workflow_id", $params);
            } else {
                return 0;
            }
        }

        function editEmail($workflow_id, $email_id, $params) { global $mailchimp;
            if ($workflow_id && $email_id && is_array($params)) {
                return $mailchimp->requests->PATCH($mailchimp->keys["api"]["automations"] . "/$workflow_id/emails/$email_id", $params);
            } else {
                return 0;
            }
        }

        function get($workflow_id = null) { global $mailchimp;
            if ($workflow_id) {
                return $mailchimp->requests->GET($mailchimp->keys["api"]["automations"] . "/$workflow_id");
            } else {
                return $mailchimp->requests->GET($mailchimp->keys["api"]["automations"]);
            }
        }

        function getEmails($workflow_id, $email_id = null) { global $mailchimp;
            if ($workflow_id) {
                if ($email_id) {
                    return $mailchimp->requests->GET($mailchimp->keys["api"]["automations"] . "/$workflow_id/emails/$email_id");
                } else {
                    return $mailchimp->requests->GET($mailchimp->keys["api"]["automations"] . "/$workflow_id/emails");
                }
            } else {
                return 0;
            }
        }

        function getQueue($workflow_id, $email_id, $subscriber = null) { global $mailchimp;
            if ($workflow_id && $email_id) {
                if ($subscriber) {
                    return $mailchimp->requests->GET($mailchimp->keys["api"]["root"] . "/$workflow_id/emails/$email_id/queue/$subscriber");
                } else {
                    return $mailchimp->requests->GET($mailchimp->keys["api"]["root"] . "/$workflow_id/emails/$email_id/queue");
                }
            } else {
                return 0;
            }
        }

        function getRemovedSubscribers($workflow_id) { global $mailchimp;
            if ($workflow_id) {
                return $mailchimp->requests->GET($mailchimp->keys["api"]["automations"] . "/$workflow_id/removed-subscribers");
            } else {
                return 0;
            }
        }

        function pause($workflow_id) { global $mailchimp; return $mailchimp->automations->action($workflow_id, "pause-all-emails"); }

        function pauseEmail($workflow_id, $email_id) { global $mailchimp; return $mailchimp->automations->action($workflow_id, $email_id, "pause"); }

        function start($workflow_id) { global $mailchimp; return $mailchimp->automations->action($workflow_id, "start-all-emails"); }

        function startEmail($workflow_id, $email_id) { global $mailchimp; return $mailchimp->automations->action($workflow_id, $email_id, "start"); }

    }

?>
