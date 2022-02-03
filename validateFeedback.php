<?php

function validateFeedback($input_method, &$formdata, &$errors) {
    $formdata['Username'] = filter_input($input_method, "Username", FILTER_SANITIZE_STRING);
    $formdata['Rev'] = filter_input($input_method, "Rev", FILTER_SANITIZE_STRING);
    $formdata['Comment'] = filter_input($input_method, "Comment", FILTER_SANITIZE_STRING);
    

    if ($formdata['Username'] === NULL ||
                    $formdata['Username'] === FALSE ||
                    $formdata['Username'] === "")
    {
        $errors['Username'] = "Username required";
    }
    
    if ($formdata['Rev'] === NULL ||
                    $formdata['Rev'] === FALSE ||
                    $formdata['Rev'] === "")
    {
        $errors['Rev'] = "Rev required";
    }   
    
    if ($formdata['Comment'] === NULL ||
                    $formdata['Comment'] === FALSE ||
                    $formdata['Comment'] === "")
    {
        $errors['Comment'] = "Comment required";
    }
    
}
