<?php
require_once 'functions.php';

if (!isset($formdata)) {
    $formdata = array();
}

if (!isset($errors)) {
    $errors = array();
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title> Booking Form</title>
        <style>
            span.error{
                color: red;
            }            
        </style>  
        <?php require 'utils/styles.php'; ?><!--css links. file found in utils folder-->
        <?php require 'utils/scripts.php'; ?><!--js links. file found in utils folder-->
    </head>
    <body>
        <?php require 'utils/header.php'; ?><!--header content. file found in utils folder-->
        <div class="content">
            <div class="container">
                <h1> Booking Form</h1><!--form title-->
                <?php 
                if (isset($errorMessage)) {
                    echo '<p>Error: ' . $errorMessage . '</p>';
                }
                ?>
                <form action="addBooking.php" method="POST" class="form-horizontal">
                    <div class="form-group">
                        <label for="FullName" class="col-md-2 control-label">FullName</label>
                        <div class="col-md-5">
                            <input type="text" class="form-control" id="FullName" name="FullName" value="<?php echoValue($formdata, "FullName")?>" /><!--input-->
                        </div>
                        <div class="col-md-4">
                            <span id="FullNameError" class="error"><!--error message for invalid input-->
                                <?php echoValue($errors, 'FullName');?>
                            </span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="Username" class="col-md-2 control-label">Username</label>
                        <div class="col-md-5">
                            <input type="text" class="form-control" id="Username" name="Username" value="<?php echoValue($formdata, "Username")?>" /><!--input-->
                        </div>
                        <div class="col-md-4">
                            <span id="UsernameError" class="error"><!--error message for invalid input-->
                                <?php echoValue($errors, 'Username');?>
                            </span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="Email" class="col-md-2 control-label">Email</label>
                        <div class="col-md-5">
                            <input type="text" class="form-control" id="Email" name="Email" value="<?php echoValue($formdata, "Email")?>" /><!--input-->
                        </div>
                        <div class="col-md-4">
                            <span id="EmailError" class="error"><!--error message for invalid input-->
                                <?php echoValue($errors, 'Email');?>
                            </span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="Events" class="col-md-2 control-label">Events</label>
                        <div class="col-md-5">
                            <input type="text" class="form-control" id="Events" name="Events" value="<?php echoValue($formdata, "Events")?>" /><!--input-->
                        </div>
                        <div class="col-md-4">
                            <span id="EventsError" class="error"><!--error message for invalid input-->
                                <?php echoValue($errors, 'Events');?>
                            </span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="Venue" class="col-md-2 control-label">Venue</label>
                        <div class="col-md-5">
                            <input type="text" class="form-control" id="Venue" name="Venue" value="<?php echoValue($formdata, "Venue")?>" /><!--input-->
                        </div>
                        <div class="col-md-4">
                            <span id="VenueError" class="error"><!--error message for invalid input-->
                                <?php echoValue($errors, 'Venue');?>
                            </span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="EventDate" class="col-md-2 control-label">EventDate</label>
                        <div class="col-md-5">
                            <input type="date" class="form-control" id="EventDate" name="EventDate" value="<?php echoValue($formdata, "EventDate")?>" /><!--input-->
                        </div>
                        <div class="col-md-4">
                            <span id="EventDateError" class="error"><!--error message for invalid input-->
                                <?php echoValue($errors, 'EventDate');?>
                            </span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="NoOfHeads" class="col-md-2 control-label">NoOfHeads</label>
                        <div class="col-md-5">
                            <input type="number" class="form-control" id="NoOfHeads" name="NoOfHeads" value="<?php echoValue($formdata, "NoOfHeads")?>" /><!--input-->
                        </div>
                        <div class="col-md-4">
                            <span id="NoOfHeadsError" class="error"><!--error message for invalid input-->
                                <?php echoValue($errors, 'NoOfHeads');?>
                            </span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="Decoration" class="col-md-2 control-label">Decoration</label>
                        <div class="col-md-5">
                            <input type="text" class="form-control" id="Decoration" name="Decoration" value="<?php echoValue($formdata, "Decoration")?>" /><!--input-->
                        </div>
                        <div class="col-md-4">
                            <span id="DecorationError" class="error"><!--error message for invalid input-->
                                <?php echoValue($errors, 'Decoration');?>
                            </span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="FoodStyle" class="col-md-2 control-label">FoodStyle</label>
                        <div class="col-md-5">
                            <input type="text" class="form-control" id="FoodStyle" name="FoodStyle" value="<?php echoValue($formdata, "FoodStyle")?>" /><!--input-->
                        </div>
                        <div class="col-md-4">
                            <span id="FoodStyleError" class="error"><!--error message for invalid input-->
                                <?php echoValue($errors, 'FoodStyle');?>
                            </span>
                        </div>
                    </div>
                <button type="submit" name="addBooking" class="btn btn-default pull-right">Book Now <span class="glyphicon glyphicon-send"></span></button>
                </form>
                <a class="btn btn-default" href="viewBookings.php"><span class="glyphicon glyphicon-circle-arrow-left"></span> Back</a><!--return/back button-->
            </div>
        </div>
        <?php require 'utils/footer.php'; ?><!--footer content. file found in utils folder-->
    </body>
</html>
