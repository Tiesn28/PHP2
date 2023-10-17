<?php
namespace Core;
use eftec\bladeone\BladeOne;

$view = './src/Views';
$cache = './blade/cache';

$blade = new BladeOne($view,$cache);