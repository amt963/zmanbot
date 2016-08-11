<?php

$challenge = $_REQUEST['hub.challenge'];
$verify_token = $_REQUEST['hub.verify.token'];

if ($verify_token === 'my.token.code') {
echo $challenge;
}
