<?php

    class MAILCHIMP_CONVERSATIONS {

        // Conversation tracking is a paid feature that lets you view subscribers’ replies to your campaigns in your Mailchimp account.
        // Manage messages in a specific campaign conversation.

        function createMessage($conversation_id, $params) { global $mailchimp;
            if ($conversation_id && is_array($params)) {
                return $mailchimp->requests->POST($mailchimp->keys["api"]["conversations"], $params);
            } else {
                return 0;
            }
        }

        function get($conversation_id) { global $mailchimp;
            if ($conversation_id) {
                return $mailchimp->requests->GET($mailchimp->keys["api"]["conversations"] . "/$conversation_id");
            } else {
                return $mailchimp->requests->GET($mailchimp->keys["api"]["conversations"]);
            }
        }

        function getMessages($conversation_id, $message_id = null) { global $mailchimp;
            if ($conversation_id) {
                if ($message_id) {
                    return $mailchimp->requests->GET($mailchimp->keys["api"]["conversations"] . "/$conversation_id/messages/$message_id");
                } else {
                    return $mailchimp->requests->GET($mailchimp->keys["api"]["conversations"] . "/$conversation_id/messages");
                }
            } else {
                return 0;
            }
        }

    }

?>
