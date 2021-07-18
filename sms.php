<?php
require_once 'vendor/autoload.php';
$messagebird = new MessageBird\Client('WX3zmDvDY7C90Jie1BzG7Zvlu]');
$message = new MessageBird\Objects\Message;
$message->originator = '+MFV';
$message->recipients = [ '+923072097077' ];
$message->body = 'Thank you! for contacting Montgomery Food Valley';
$response = $messagebird->messages->create($message);
print_r(json_encode($response));