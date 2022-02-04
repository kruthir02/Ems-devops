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
        <title>Feedback Form</title>
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
                <h1>Feedback Form</h1><!--form title-->
                <?php 
                if (isset($errorMessage)) {
                    echo '<p>Error: ' . $errorMessage . '</p>';
                }
                ?>
                <form action="addFeedback.php" method="POST" class="form-horizontal">
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
                        <label for="Rev" class="col-md-2 control-label">Review (Rate from 1 - 5, <br>5 being the highest)</label>
                        <div class="col-md-5">
                            <input type="text" class="form-control" id="Rev" name="Rev" value="<?php echoValue($formdata, "Rev")?>" /><!--input-->
                        </div>
                        <div class="col-md-4">
                            <span id="RevError" class="error"><!--error message for invalid input-->
                                <?php echoValue($errors, 'Rev');?>
                            </span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="Comment" class="col-md-2 control-label">Comment</label>
                        <div class="col-md-5">
                            <input type="text" class="form-control" id="Comment" name="Comment" value="<?php echoValue($formdata, "Comment")?>" /><!--input-->
                        </div>
                        <div class="col-md-4">
                            <span id="CommentError" class="error"><!--error message for invalid input-->
                                <?php echoValue($errors, 'Comment');?>
                            </span>
                        </div>
                    </div>
                    
                
                <button type="submit" name="addFeedback" class="btn btn-default pull-right">Add Feedback <span class="glyphicon glyphicon-send"></span></button>
                </form>
                <a class="btn btn-default" href="viewFeedback.php"><span class="glyphicon glyphicon-circle-arrow-left"></span> Back</a><!--return/back button-->
            </div>
        </div>
        <?php require 'utils/footer.php'; ?><!--footer content. file found in utils folder-->
    </body>
</html>
