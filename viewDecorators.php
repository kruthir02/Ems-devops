<?php
require_once 'utils/functions.php';
require_once 'classes/User.php';
require_once 'classes/Event.php';
require_once 'classes/EventTableGateway.php';
require_once 'classes/Decorator.php';
require_once 'classes/DecoratorTable.php';
require_once 'classes/Connection.php';


$connection = Connection::getInstance();
$gateway = new DecoratorTable($connection);

$statement = $gateway->getDecorators();

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
                            <th>Decorator ID</th>
                            <th>Theme</th>
                            <th>Cost</th>                    
                            <th>Decorator Name</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $row = $statement->fetch(PDO::FETCH_ASSOC);
                        while ($row) {
                            echo '<tr>';
                            echo '<td>' . $row['DecoratorID'] . '</td>';
                            echo '<td>' . $row['DecorTheme'] . '</td>';
                            echo '<td>' . $row['DecorCost'] . '</td>';                    
                            echo '<td>' . $row['DecoratorName'] . '</td>';
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
