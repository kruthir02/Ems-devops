<?php
require_once 'utils/functions.php';
require_once 'classes/User.php';
require_once 'classes/Booking.php';
require_once 'classes/BookingTable.php';
require_once 'classes/Connection.php';


$connection = Connection::getInstance();
$gateway = new BookingTable($connection);

$statement = $gateway->getBookings();

start_session();

if (!is_logged_in()) {
    header("Location: login_form.php");
}

$user = $_SESSION['user'];
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Ven-You</title>
        <?php require 'utils/styles.php'; ?>
        <?php require 'utils/scripts.php'; ?>
    </head>
    <body>
        <?php require 'utils/header.php'; ?>
        <div class = "content">
            <div class = "container">
                <?php 
                if (isset($message)) {
                    echo '<p>'.$message.'</p>';
                }
                ?>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Booking ID</th>
                            <th>Venue </th>
                            <th>EventDate </th>
                        
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $row = $statement->fetch(PDO::FETCH_ASSOC);
                        while ($row) {
                            echo '<tr>';
                            echo '<td>' . $row['BookingID'] . '</td>';
                            echo '<td>' . $row['Venue'] . '</td>';
                            echo '<td>' . $row['EventDate'] . '</td>';
                            echo '</tr>';  

                            $row = $statement->fetch(PDO::FETCH_ASSOC);
                        }
                        ?>
                    </tbody>
                </table>
                
                <a class="btn btn-default" href = "addBooking.php">Book an Event</a><!--register button-->
            </div>
        </div>
        
        <?php require 'utils/footer.php'; ?>
    </body>
</html>
