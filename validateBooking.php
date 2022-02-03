<?php

function validateBooking($input_method, &$formdata, &$errors) {
    $formdata['FullName'] = filter_input($input_method, "FullName", FILTER_SANITIZE_STRING);
    $formdata['Username'] = filter_input($input_method, "Username", FILTER_SANITIZE_STRING);
    $formdata['Email'] = filter_input($input_method, "Email", FILTER_SANITIZE_STRING);
    $formdata['Events'] = filter_input($input_method, "Events", FILTER_SANITIZE_STRING);
    $formdata['Venue'] = filter_input($input_method, "Venue", FILTER_SANITIZE_STRING);
    $formdata['Budget'] = filter_input($input_method, "Budget", FILTER_SANITIZE_URL);
    $formdata['EventDate'] = filter_input($input_method, "EventDate", FILTER_SANITIZE_URL);
    $formdata['NoOfHeads'] = filter_input($input_method, "NoOfHeads", FILTER_SANITIZE_URL);
    $formdata['Decoration'] = filter_input($input_method, "Decoration", FILTER_SANITIZE_URL);
    $formdata['FoodStyle'] = filter_input($input_method, "FoodStyle", FILTER_SANITIZE_URL);

    if ($formdata['FullName'] === NULL ||
                    $formdata['FullName'] === FALSE ||
                    $formdata['FullName'] === "")
    {
        $errors['FullName'] = "FullName required";
    }
    
    if ($formdata['Username'] === NULL ||
                    $formdata['Username'] === FALSE ||
                    $formdata['Username'] === "")
    {
        $errors['Username'] = "Username required";
    }   
    
    if ($formdata['Email'] === NULL ||
                    $formdata['Email'] === FALSE ||
                    $formdata['Email'] === "")
    {
        $errors['Email'] = "Email required";
    }
    
    if ($formdata['Events'] === NULL ||
                    $formdata['Events'] === FALSE ||
                    $formdata['Events'] === "")
    {
        $errors['Events'] = "Events required";
    }

    if ($formdata['Venue'] === NULL ||
                    $formdata['Venue'] === FALSE ||
                    $formdata['Venue'] === "")
    {
        $errors['Venue'] = "Venue required";
    }

    if ($formdata['EventDate'] === NULL ||
                    $formdata['EventDate'] === FALSE ||
                    $formdata['EventDate'] === "")
    {
        $errors['EventDate'] = "EventDate required";
    }

    if ($formdata['NoOfHeads'] === NULL ||
                    $formdata['NoOfHeads'] === FALSE ||
                    $formdata['NoOfHeads'] === "")
    {
        $errors['NoOfHeads'] = "NoOfHeads required";
    }

    if ($formdata['Decoration'] === NULL ||
                    $formdata['Decoration'] === FALSE ||
                    $formdata['Decoration'] === "")
    {
        $errors['Decoration'] = "Decoration required";
    }

    if ($formdata['FoodStyle'] === NULL ||
                    $formdata['FoodStyle'] === FALSE ||
                    $formdata['FoodStyle'] === "")
    {
        $errors['FoodStyle'] = "FoodStyle required";
    }
    
}
