<?php
  require 'vendor/autoload.php';
  use \Mailjet\Resources;
  $mj = new \Mailjet\Client('32230d8659943bad45e3b7ed6dba803f','c4917891da7beb49f5ae35f618c9fa92',true,['version' => 'v3.1']);
  $body = [
    'Messages' => [
      [
        'From' => [
          'Email' => "do_not_reply@cpsc4910.com",
          'Name' => "Team 10"
        ],
        'To' => [
          [
            'Email' => "tbrecke@clemson.edu",
            'Name' => "Tanner Breckenridge"
          ]
        ],
        'Subject' => "New Password",
        'TextPart' => "This is a randomly generated password for you.",
        'CustomID' => "NewPassword"
      ]
    ]
  ];
  $response = $mj->post(Resources::$Email, ['body' => $body]);
  $response->success() && var_dump($response->getData());
?>
