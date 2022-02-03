<?php
require_once 'utils/functions.php';
require_once 'classes/User.php';
require_once 'classes/Event.php';
require_once 'classes/EventTableGateway.php';
require_once 'classes/Caterer.php';
require_once 'classes/CatererTable.php';
require_once 'classes/Connection.php';


$connection = Connection::getInstance();
$gateway = new CatererTable($connection);

$statement = $gateway->getCaterers();

start_session();

if (!is_logged_in()) {
    header("Location: login_form.php");
}

$admin = $_SESSION['user'];
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
                            <th>Caterer ID</th>
                            <th>Food Style</th>
                            <th>Cost</th>                    
                            <th>Catering Name</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $row = $statement->fetch(PDO::FETCH_ASSOC);
                        while ($row) {
                            echo '<tr>';
                            echo '<td>' . $row['CatererID'] . '</td>';
                            echo '<td>' . $row['FoodStyle'] . '</td>';
                            echo '<td>' . $row['CateringCost'] . '</td>';                    
                            echo '<td>' . $row['CateringName'] . '</td>';
                            echo '</tr>';  

                            $row = $statement->fetch(PDO::FETCH_ASSOC);
                        }
                        ?>
                    </tbody>
                </table>
                
                
            </div>
        </div>
        
        <?php require 'utils/footer.php'; ?>
    </body>
</html>
