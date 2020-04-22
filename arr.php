<?php
/*
    // If you want to remove a particular array element use this method
    $my_array = array("key1"=>"value 1", "key2"=>"value 2", "key3"=>"value 3");

    print_r($my_array);
    if (array_key_exists("key1", $my_array)) {
        unset($my_array['key1']);
        print_r($my_array);
    }
    else {
        echo "Key does not exist";
    }
*/
 
    /* //To remove first array element
    $my_array = array("key1"=>"value 1", "key2"=>"value 2", "key3"=>"value 3");
    echo "<pre>";
    print_r($my_array);
    echo "<pre>";
    $new_array = array_slice($my_array, 1,2);
    print_r($new_array);

*/


    
    // To remove first array element to length
    // starts from first and remove two element
    $my_array = array("key1"=>"value 1", "key2"=>"value 2", "key3"=>"value 3");
    echo "<pre>";
    print_r($my_array);
    echo "</pre>";
    $new_array = array_slice($my_array, 1, 2);
    print_r($new_array);
    