<?php

require_once "Data/Subjig.php";

use Data\{Subjig, K2F, K60};

// $Subjig = new Subjig(); ERROR

$k2f = new K2F();
$k2f->name = "Speedo A";
$k2f->quantity = 4;

$k2f = new K2F();
$k2f->name = "Speedo B";
$k2f->quantity = 4;

$k60 = new K60();
$k60->name = "C.Rack";
$k60->quantity = 4;

$k60 = new K60();
$k60->name = "C.Handle Top";
$k60->quantity = 4;
