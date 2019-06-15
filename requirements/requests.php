<?php

    class MAILCHIMP_REQUESTS {

        function custom($url, $method = "GET", $params = null, $contentType = "application/json", $idempotencyKey = null, $authType = "Bearer", $authKey = "secret_key") { global $mailchimp;
            return $mailchimp->requests->requestor($url, $method, $params, $contentType, $idempotencyKey, $authType, $authKey);
        }

        function delete($url, $params = null) { global $mailchimp;
            return $mailchimp->requests->requestor($url, "DELETE", $params);
        }

        function get($url, $params = null) { global $mailchimp;
            return $mailchimp->requests->requestor($url, "GET", $params);
        }

        function patch($url, $params = null) { global $mailchimp;
            return $mailchimp->requests->requestor($url, "PATCH", $params);
        }

        function post($url, $params = null) { global $mailchimp;
            return $mailchimp->requests->requestor($url, "POST", $params);
        }

        function put($url, $params = null) { global $mailchimp;
            return $mailchimp->requests->requestor($url, "PUT", $params);
        }

        function requestor($url, $method = "GET", $params = null, $contentType = "application/json", $authType = "user", $authKey = "api_key") { global $mailchimp;

            // Initialize requestor
            $data = New STDCLASS();
                $data->infos = array();
                $data->hsize = 0;
                $data->headers = array();
                $data->response = null;
                $data->json = New STDCLASS();
                    $data->json->error = "-1";
                    $data->json->message = "URL Request not found";
                $data->error = 0;
            if (!$url) { return $data; }
            // Get AuthKey
            $auth = null;
            if ($mailchimp->config->$authKey && $authType == "user") {
                $auth = "$authType:" . $mailchimp->config->$authKey;
            } else {
                $auth = "$authType $authKey";
            }

            // Debug Request Auth
            // die("$method $url - Authorization: $auth");

            $f = fopen('mailchimp-log.txt', 'w'); // Open/Create a Log file
                // Initialize cURL requeest
                $ch = curl_init();
                curl_setopt_array($ch, array(
                    CURLOPT_HEADER         => 1,
                    CURLOPT_RETURNTRANSFER => 1,
                    CURLOPT_FOLLOWLOCATION => 1,
                    CURLOPT_VERBOSE        => 1,
                    CURLOPT_SSL_VERIFYPEER => 0,
                    CURLOPT_STDERR         => $f,
                    CURLOPT_USERPWD => $auth
                ));
                curl_setopt($ch, CURLOPT_URL, $url);
                curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $method);

                // Set fields to post if there are
                if ($params) {
                    if ($params["isQuery"]) {
                        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($params));
                    } else {
                        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($params));
                    }
                }

                // Set request headers
                $headers = array();
                    $headers[] = "Content-Type: $contentType";
                    if ($auth) { $headers[] = "$auth"; }
                curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

                // Work with response
                $response = curl_exec($ch);
                $data = New STDCLASS();
                    $data->infos = curl_getinfo($ch);
                    $data->hsize = curl_getinfo($ch, CURLINFO_HEADER_SIZE);
                    $data->headers = substr($response, 0, $data->hsize);
                        $data->headers = explode("\n", $data->headers); $headers = array();
                        foreach($data->headers as $h) {
                            $dh = explode(": ", $h);
                            if (count($dh) == 2) { $headers[trim($dh[0])] = trim($dh[1]); }
                        }
                        if (count($headers)) { $data->headers = $headers; }
                    $data->json = substr($response, $data->hsize);
                    $data->data = json_decode($data->json);
                    $data->error = curl_errno($ch);

                curl_close ($ch);
            fclose($f); // Close/Update Debug File

            // Return response
            return $data;
        }

    }

?>
