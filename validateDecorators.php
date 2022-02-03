<?php

function validateDecorators($input_method, &$formdata, &$errors) {
    $formdata['DecorTheme'] = filter_input($input_method, "DecorTheme", FILTER_SANITIZE_STRING);
    $formdata['DecorCost'] = filter_input($input_method, "DecorCost", FILTER_SANITIZE_STRING);
    $formdata['DecoratorName'] = filter_input($input_method, "DecoratorName", FILTER_SANITIZE_STRING);
    $formdata['dType'] = filter_input($input_method, "dType", FILTER_SANITIZE_STRING);
    $formdata['facilities'] = filter_input($input_method, "facilities", FILTER_SANITIZE_STRING, FILTER_REQUIRE_ARRAY);
    $formdata['link'] = filter_input($input_method, "link", FILTER_SANITIZE_URL);

    if ($formdata['DecorTheme'] === NULL ||
                    $formdata['DecorTheme'] === FALSE ||
                    $formdata['DecorTheme'] === "")
    {
        $errors['DecorTheme'] = "DecorTheme required";
    }
    
    if ($formdata['DecorCost'] === NULL ||
                    $formdata['DecorCost'] === FALSE ||
                    $formdata['DecorCost'] === "")
    {
        $errors['DecorCost'] = "DecorCost required";
    }   
    
    if ($formdata['DecoratorName'] === NULL ||
                    $formdata['DecoratorName'] === FALSE ||
                    $formdata['DecoratorName'] === "")
    {
        $errors['DecoratorName'] = "DecoratorName required";
    }
    
    if ($formdata['dType'] !== NULL &&
                    $formdata['dType'] !== FALSE &&
                    $formdata['dType'] !== "")
    {
        $type = array("Simple", "Grand", "Medium");
        if(!in_array($formdata['dType'], $type)){
            $errors['dType'] = "invalid type";
        }
    }
    
    if ($formdata['link'] !== NULL &&
                    $formdata['link'] !== FALSE &&
                    $formdata['link'] !== "") {
        if (!filter_var($formdata['link'], FILTER_VALIDATE_URL)){
            $errors['link'] = "Invalid url format";
        }
    }
}
