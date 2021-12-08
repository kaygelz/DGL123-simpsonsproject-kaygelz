<?php

$BART = $_POST['bart'];
$HOMER = $_POST['homer'];
$MARGE = $_POST['marge'];
$LISA = $_POST['lisa'];
$MAGGIE = $_POST['maggie'];
$MOE = $_POST['moe'];


//create character cards
$homer = [
    'first_name' => 'Homer',
    'last_name' => 'Simpson',
    'age' => '40',
    'occupation' => 'Nuclear Safety Inspector',
    'voiced_by' => 'Dan Castellaneta',
    'image' => 'images/homer.png'
];

$marge = [
    'first_name' => 'Marge',
    'last_name' => 'Simpson',
    'age' => '40',
    'occupation' => 'Homemaker',
    'voiced_by' => 'Julie Kavner',
    'image' => 'images/marge.png'
];

 $bart = [
    'first_name' => 'Bart',
    'last_name' => 'Simpson',
    'age' => '10',
    'occupation' => 'Student',
    'voiced_by' => 'Nancy Cartwright',
    'image' => 'images/bart.png'
 ];

    $lisa = [
    'first_name' => 'Lisa',
    'last_name' => 'Simpson',
    'age' => '8',
    'occupation' => 'Student',
    'voiced_by' => 'Yeardley Smith',
    'image' => 'images/lisa.png'
    ];

    $maggie = [
    'first_name' => 'Maggie',
    'last_name' => 'Simpson',
    'age' => '8',
    'image' => 'images/maggie.png'
    ];

    $moe = [
    'first_name' => 'Moe',
    'last_name' => 'Szyslak',
    'age' => '55',
    'occupation' => 'Bartender',
    'voiced_by' => '',
    'image' => 'images/moe.png'
    ];

    ///create multidimensional array
    $characters = [
        'Bart' => $bart,
        'Homer' => $homer,
        'Marge' => $marge,
        'Lisa' => $lisa,
        'Maggie' => $maggie, 
        'moe' => $moe
    ];



    if(isset($_POST) AND is_array($_POST)) {
        foreach ($_POST as $characters) {
            print "$characters";
        }
}



?>



