<?php
// fahrenheit naar celsius
$fahrenheit = 74;
$celsius = ($fahrenheit-32)/1.8;
echo "{$fahrenheit} graden Fahrenheit = {$celsius} graden Celsius. <br/>";

// celsius naar fahrenheit
$celsius2 = 20;
$fahrenheit2 = ($celsius2*1.8)+32;
echo "{$celsius2} graden Celcius = $fahrenheit2 graden Fahrenheit. <br/>";

//celsius naar kelvin
$celsius3 = 20;
$kelvin = $celsius3-273;
echo "{$celsius3} graden Celcius = {$kelvin} graden kelvin";

//kelvin naar celsius
$kelvin2 = -253;
$celsius4 = $kelvin2 + 273;
echo "{$kelvin2} graden kelvin = {$celsius4} graden celsius";