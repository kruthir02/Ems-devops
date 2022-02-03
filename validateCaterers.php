<?php

function validateCaterers($input_method, &$formdata, &$errors) {
    $formdata['FoodStyle'] = filter_input($input_method, "FoodStyle", FILTER_SANITIZE_STRING);
    $formdata['CateringCost'] = filter_input($input_method, "CateringCost", FILTER_SANITIZE_STRING);
    $formdata['CateringName'] = filter_input($input_method, "CateringName", FILTER_SANITIZE_STRING);
    $formdata['sType'] = filter_input($input_method, "sType", FILTER_SANITIZE_STRING, FILTER_REQUIRE_ARRAY);

    if ($formdata['FoodStyle'] === NULL ||
                    $formdata['FoodStyle'] === FALSE ||
                    $formdata['FoodStyle'] === "")
    {
        $errors['FoodStyle'] = "FoodStyle required";
    }
    
    if ($formdata['CateringCost'] === NULL ||
                    $formdata['CateringCost'] === FALSE ||
                    $formdata['CateringCost'] === "")
    {
        $errors['CateringCost'] = "CateringCost required";
    }   
    
    if ($formdata['CateringName'] === NULL ||
                    $formdata['CateringName'] === FALSE ||
                    $formdata['CateringName'] === "")
    {
        $errors['CateringName'] = "CateringName required";
    }

    
    if ($formdata['sType'] !== NULL &&
                    $formdata['sType'] !== FALSE &&
                    $formdata['sType'] !== "")
    {
        $type = array("Silver", "American", "Buffet", "French", "Russian", "TrayService", "SelfService");
        if(!in_array($formdata['sType'], $type)){
            $errors['sType'] = "invalid type";
        }
    }
    
    
}
