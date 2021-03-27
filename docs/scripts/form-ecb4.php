<?php

require_once('FormProcessor.php');

$form = array(
    'subject' => 'Enquiry',
    'email_message' => '',
    'success_redirect' => '',
    'sendIpAddress' => true,
    'email' => array(
    'from' => 'https:&#x2F;&#x2F;impala36.github.io&#x2F;Jun-Japanese-Online',
    'to' => 'junjapaneseonline@gmail.com'
    ),
    'fields' => array(
    'name' => array(
    'order' => 1,
    'type' => 'string',
    'label' => 'Name',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Name\' is required.'
    )
    ),
    'email' => array(
    'order' => 2,
    'type' => 'email',
    'label' => 'Email',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Email\' is required.'
    )
    ),
    'message' => array(
    'order' => 3,
    'type' => 'string',
    'label' => 'Message',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Message\' is required.'
    )
    ),
    )
    );

    $processor = new FormProcessor();
    $processor->process($form);

    ?>