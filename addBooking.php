<?php
require_once 'classes/Booking.php';
require_once 'classes/BookingTable.php';
require_once 'classes/Connection.php';
require_once 'validateBooking.php';

$formdata = array();
$errors = array();

validateBooking(INPUT_POST, $formdata, $errors);

if (empty($errors)) {
    $FullName = $formdata['FullName'];
    $Username = $formdata['Username'];    
    $Email = $formdata['Email'];
    $Events = $formdata['Events'];
    $Venue = $formdata['Venue'];
    $EventDate = $formdata['EventDate'];
    $NoOfHeads = $formdata['NoOfHeads'];
    $Decoration = $formdata['Decoration'];
    $FoodStyle = $formdata['FoodStyle'];

    $booking = new Booking(-1, $FullName, $Username, $Email, $Events, $Venue, $EventDate, $NoOfHeads, $Decoration, $FoodStyle);

    $connection = Connection::getInstance();

    $gateway = new BookingTable($connection);

    $id = $gateway->insert($booking);

    header('Location: homeIn.php');
}
else {
    require 'addBookingForm.php';
}