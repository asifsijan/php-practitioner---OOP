<?php

$person = [
   'First Name' => 'Asif',
    'Last Name' => 'Sijan',
    'Age' => 23
];
 
$person['nick name'] = 'x';

unset($person['Age']);


require 'index.view.php';

?>
