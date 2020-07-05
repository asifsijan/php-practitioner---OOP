<?php



$person = [
   'First Name' => 'Asif',
    'Last Name' => 'Sijan',
    'Age' => 23
];


require 'index.view.php';

require 'function.php';

eligible($person['Age']);



?>
