<?php

// include_once "NS_Autoload/activities/Climb.php"; 
// include_once "NS_Autoload/activities/run.php";

//how to use autoloader register for including all files (2) ---------------------------------------------------------------

// spl_autoload_register(function($className){
//     include_once 'NS_Autoload/activities/' . $className . '.php';    
// });

//how to use autoloader register for including all files from different folders (3)  ---------------------------------------

// spl_autoload_register(function ($className) {
//     if (file_exists('NS_Autoload/activities/'.$className.'.php')) {
//         include_once 'NS_Autoload/activities/'.$className.'.php';
//     } elseif (file_exists('NS_Autoload/animals/'.$className.'.php')) {    
//         include_once 'NS_Autoload/animals/'.$className.'.php';
//     } else {
//         include_once $className.'.php';
//     }
// });

//code with (2) and (3) (before creating 2 classes with same name)  -------------------------------------------------------

// require_once 'NS_Autoload/autoload.php';

// $climb = new Climb(true);
// echo $climb;

// echo PHP_EOL;

// $run = new Run(false);
// echo $run;

// echo PHP_EOL;

// $tiger = new Tiger(true);
// echo $tiger;

// code with autoloading using namespaces --------------------------------------------------------------------------------

// require_once 'NS_Autoload/autoload.php';

// $climb = new NS_Autoload\activities\Climb(true);
// echo $climb;

// echo PHP_EOL;

// $run = new NS_Autoload\activities\Run(false);
// echo $run;

// echo PHP_EOL;

// $tiger = new NS_Autoload\pets\Tiger(true);
// echo $tiger;

// code with autoloading using namespaces if the main(in this case test) file has a namespace itself ---------------------

namespace index;
require_once 'NS_Autoload/autoload.php';

$climb = new \NS_Autoload\activities\Climb(true);
echo $climb;

echo PHP_EOL;

$run = new \NS_Autoload\activities\Run(false);
echo $run;

echo PHP_EOL;

$tiger = new \NS_Autoload\pets\Tiger(true);
echo $tiger;
