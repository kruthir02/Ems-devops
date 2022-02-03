<?php
require_once 'classes/Feedback.php';
require_once 'classes/FeedbackTable.php';
require_once 'classes/Connection.php';
require_once 'validateFeedback.php';

$formdata = array();
$errors = array();

validateFeedback(INPUT_POST, $formdata, $errors);

if (empty($errors)) {
    $Username = $formdata['Username'];
    $Rev = $formdata['Rev'];    
    $Comment = $formdata['Comment'];

    $feedback = new Feedback(-1, $Username, $Rev, $Comment);

    $connection = Connection::getInstance();

    $gateway = new FeedbackTable($connection);

    $id = $gateway->insert($feedback);

    header('Location: homeIn.php');
}
else {
    require 'addFeedbackForm.php';
}