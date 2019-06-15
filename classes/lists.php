<?php

    class MAILCHIMP_LISTS_AND_AUDIENCES {

        function create($params) { global $mailchimp;
            if (is_array($params)) {
                return $mailchimp->requests->POST($mailchimp->keys["api"]["lists"], $params);
            } else {
                return 0;
            }
        }

        function createMember($list_id, $params) { global $mailchimp;
            if ($list_id && is_array($params)) {
                return $mailchimp->requests->POST($mailchimp->keys["api"]["lists"] . "/$list_id/members", $params);
            } else {
                return 0;
            }
        } function subscribe($list_id, $params) { global $mailchimp; return $mailchimp->lists->createMember($list_id, $params); }

        function createMemberNote($list_id, $subscriber_hash, $params) { global $mailchimp;
            if ($list_id && $subscriber_hash && is_array($params)) {
                return $mailchimp->requests->POST($mailchimp->keys["api"]["lists"] . "/$list_id/members/$subscriber_hash/notes", $params);
            } else {
                return 0;
            }
        }

        function createMemberTag($list_id, $subscriber_hash, $params) { global $mailchimp;
            if ($list_id && $subscriber_hash && is_array($params)) {
                return $mailchimp->requests->POST($mailchimp->keys["api"]["lists"] . "/$list_id/members/$subscriber_hash/tags", $params);
            } else {
                return 0;
            }
        }

        function createMergeField($list_id, $params) { global $mailchimp;
            if ($list_id && is_array($params)) {
                return $mailchimp->requests->POST($mailchimp->keys["api"]["lists"] . "/$list_id/merge-fields", $params);
            } else {
                return 0;
            }
        }

        function createSegment($list_id, $params) { global $mailchimp;
            if ($list_id && is_array($params)) {
                return $mailchimp->requests->POST($mailchimp->keys["api"]["lists"] . "/$list_id/segments", $params);
            } else {
                return 0;
            }
        }

        function createSignup($list_id, $params) { global $mailchimp;
            if ($list_id && is_array($params)) {
                return $mailchimp->requests->POST($mailchimp->keys["api"]["lists"] . "/$list_id/signup-forms", $params);
            } else {
                return 0;
            }
        }

        function delete($list_id) { global $mailchimp;
            if ($list_id) {
                return $mailchimp->requests->DELETE($mailchimp->keys["api"]["lists"] . "/$list_id");
            } else {
                return 0;
            }
        }

        function deleteMember($list_id, $subscriber_hash, $perma = false) { global $mailchimp;
            if ($list_id) {
                if ($perma) {
                    return $mailchimp->requests->POST($mailchimp->keys["api"]["lists"] . "/$list_id/members/$subscriber_hash/actions/delete-permanent");
                } else {
                    return $mailchimp->requests->DELETE($mailchimp->keys["api"]["lists"] . "/$list_id/members/$subscriber_hash");
                }
            } else {
                return 0;
            }
        } function unsubscribe($l, $s, $p = false) { global $mailchimp; return $mailchimp->lists->deleteMember($l, $s, $p); }

        function deleteMemberNote($list_id, $subscriber_hash, $note_id) { global $mailchimp;
            if ($list_id && $subscriber_hash && $note_id) {
                return $mailchimp->requests->DELETE($mailchimp->keys["api"]["lists"] . "/$list_id/members/$subscriber_hash/notes/$note_id");
            } else {
                return 0;
            }
        }

        function deleteMemberPermanently($list_id, $subscriber_hash) { global $mailchimp; return $mailchimp->lists->deleteMember($list_id, $subscriber_hash, true); }

        function deleteMergeField($list_id, $field_id) { global $mailchimp;
            if ($list_id && $field_id) {
                return $mailchimp->requests->DELETE($mailchimp->keys["api"]["lists"] . "/$list_id/merge-fields/$field_id");
            } else {
                return 0;
            }
        }

        function deleteSegment($list_id, $segment_id) { global $mailchimp;
            if ($list_id && $field_id) {
                return $mailchimp->requests->DELETE($mailchimp->keys["api"]["lists"] . "/$list_id/segments/$segment_id");
            } else {
                return 0;
            }
        }

        function edit($list_id, $params) { global $mailchimp;
            if ($list_id && is_array($params)) {
                return $mailchimp->requests->PATCH($mailchimp->keys["api"]["lists"] . "/$list_id", $params);
            } else {
                return 0;
            }
        }

        function editMember($list_id, $subscriber_hash, $params) { global $mailchimp;
            if ($list_id && $subscriber_hash && is_array($params)) {
                return $mailchimp->requests->PATCH($mailchimp->keys["api"]["lists"] . "/$list_id/members/$subscriber_hash", $params);
            } else {
                return 0;
            }
        }

        function editMemberNote($list_id, $subscriber_hash, $note_id, $params) { global $mailchimp;
            if ($list_id && $subscriber_hash && $note_id && is_array($params)) {
                return $mailchimp->requests->PATCH($mailchimp->keys["api"]["lists"] . "/$list_id/members/$subscriber_hash/notes/$note_id", $params);
            } else {
                return 0;
            }
        }

        function editMemberTag($list_id, $subscriber_hash, $tag_id, $params) { global $mailchimp;
            if ($list_id && $subscriber_hash && $tag_id && is_array($params)) {
                return $mailchimp->requests->PATCH($mailchimp->keys["api"]["lists"] . "/$list_id/members/$subscriber_hash/tags/$tag_id", $params);
            } else {
                return 0;
            }
        }

        function editMergeField($list_id, $field_id, $params) { global $mailchimp;
            if ($list_id && $field_id && is_array($params)) {
                return $mailchimp->requests->PATCH($mailchimp->keys["api"]["lists"] . "/$list_id/merge-fields/$field_id", $params);
            } else {
                return 0;
            }
        }

        function editSegment($list_id, $segment_id, $params) { global $mailchimp;
            if ($list_id && $segment_id && is_array($params)) {
                return $mailchimp->requests->PATCH($mailchimp->keys["api"]["lists"] . "/$list_id/segments/$segment_id", $params);
            } else {
                return 0;
            }
        }

        function get($list_id = null) { global $mailchimp;
            if ($list_id) {
                return $mailchimp->requests->GET($mailchimp->keys["api"]["lists"] . "/$list_id");
            } else {
                return $mailchimp->requests->GET($mailchimp->keys["api"]["lists"]);
            }
        }

        function getAbuse($list_id, $report_id = null) { global $mailchimp;
            if ($list_id) {
                if ($report_id) {
                    return $mailchimp->requests->GET($mailchimp->keys["api"]["lists"] . "/$list_id/abuse-reports/$report_id");
                } else {
                    return $mailchimp->requests->GET($mailchimp->keys["api"]["lists"] . "/$list_id/abuse-reports");
                }
            } else {
                return 0;
            }
        }

        function getActivity($list_id) { global $mailchimp;
            if ($list_id) {
                return $mailchimp->requests->GET($mailchimp->keys["api"]["lists"] . "/$list_id/activity");
            } else {
                return 0;
            }
        }

        function getClients($list_id) { global $mailchimp;
            if ($list_id) {
                return $mailchimp->requests->GET($mailchimp->keys["api"]["lists"] . "/$list_id/clients");
            } else {
                return 0;
            }
        }

        function getGrowthHistory($list_id, $month = null) { global $mailchimp;
            if ($list_id) {
                if ($month) {
                    return $mailchimp->requests->GET($mailchimp->keys["api"]["lists"] . "/$list_id/growth-history/$month");
                } else {
                    return $mailchimp->requests->GET($mailchimp->keys["api"]["lists"] . "/$list_id/growth-history");
                }
            } else {
                return 0;
            }
        }

        function getLocations($list_id) { global $mailchimp;
            if ($list_id) {
                return $mailchimp->requests->GET($mailchimp->keys["api"]["lists"] . "/$list_id/locations");
            } else {
                return 0;
            }
        }

        function getMembers($list_id, $subscriber_hash = null, $type = null) { global $mailchimp;
            if ($list_id) {
                if ($subscriber_hash) {
                    if ($type == "activity" || $type == "goals" || $type == "notes" || $type == "tags") {
                        return $mailchimp->requests->GET($mailchimp->keys["lists"] . "/$list_id/members/$subscriber_hash/$type");
                    } else {
                        return $mailchimp->requests->GET($mailchimp->keys["lists"] . "/$list_id/members/$subscriber_hash");
                    }
                } else {
                    return $mailchimp->requests->GET($mailchimp->keys["lists"] . "/$list_id/members");
                }
            } else {
                return 0;
            }
        }

        function getMemberNotes($list_id, $subscriber_hash, $note_id = null) {
            if ($list_id && $subscriber_hash) {
                if ($note_id) {
                    return $mailchimp->requests->GET($mailchimp->keys["api"]["lists"] . "/$list_id/members/$subscriber_hash/notes/$note_id");
                } else {
                    return $mailchimp->requests->GET($mailchimp->keys["api"]["lists"] . "/$list_id/members/$subscriber_hash/notes");
                }
            } else {
                return 0;
            }
        }

        function getMemberTags($list_id, $subscriber_hash, $tags_id = null) {
            if ($list_id && $subscriber_hash) {
                if ($tag_id) {
                    return $mailchimp->requests->GET($mailchimp->keys["api"]["lists"] . "/$list_id/members/$subscriber_hash/tags/$tag_id");
                } else {
                    return $mailchimp->requests->GET($mailchimp->keys["api"]["lists"] . "/$list_id/members/$subscriber_hash/tags");
                }
            } else {
                return 0;
            }
        }

        function getMergeField($list_id, $field_id = null) {
            if ($list_id) {
                if ($field_id) {
                    return $mailchimp->requests->GET($mailchimp->keys["api"]["lists"] . "/$list_id/merge-fields/$field_id");
                } else {
                    return $mailchimp->requests->GET($mailchimp->keys["api"]["lists"] . "/$list_id/merge-fields");
                }
            } else {
                return 0;
            }
        }

        function getSegments($list_id, $segment_id = null) {
            if ($list_id) {
                if ($segment_id) {
                    return $mailchimp->requests->GET($mailchimp->keys["api"]["lists"] . "/$list_id/segments/segment_id");
                } else {
                    return $mailchimp->requests->GET($mailchimp->keys["api"]["lists"] . "/$list_id/segments");
                }
            } else {
                return 0;
            }
        }

        function getSignup($list_id) {
            if ($list_id) {
                return $mailchimp->requests->GET($mailchimp->keys["api"]["lists"] . "/$list_id/signup-forms");
            } else {
                return 0;
            }
        }

    }

?>
