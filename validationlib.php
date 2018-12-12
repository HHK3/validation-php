<?php
/**
 * Created by PhpStorm.
 * User: joelt
 * Date: 12/12/2018
 * Time: 11:42
 */
// Als de parameter aanwezig is
// stop de parameter in de array met de juiste waarde
// stop de parameter in de array met waarde NULL

function only_this_get_params($this_get_params = []) {

    $allowed_get_array = [];

    // Maak de functie af zoals getoond in de les.
    foreach ($this_get_params as $param) {
        if (isset($_GET[$param])) {
            $allowed_get_array[$param] = $_GET[$param];
        } else {
            $allowed_get_array[$param] = null;
        }
    }
    return $allowed_get_array;
}

// Heeft de parameter een waarde
function is_not_empty($value) {
    $real_value = trim($value);

    // Maak de functie af zoals getoond in de les.
    return isset($real_value) && $real_value !== "";
}

// Check alle parameters die eerder toegestaan zijn
function check_params_on_empty($check_params = []) {

    foreach ($check_params as $item) {

        if (is_not_empty($item)) {
            echo 'value: ' . $item;
        } else {
            echo 'No value';
        }
        echo "<br />";
    }

}