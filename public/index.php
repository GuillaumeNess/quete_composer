<?php
namespace App\Wcs;
namespace App\Wcs\Hello;
require_once "../vendor/autoload.php";


use App\Wcs\Hello;

$hello= new Hello();
echo $hello->talk();
?>