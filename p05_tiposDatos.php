<?php 
//Integer
$var_integer = 5;
var_dump($var_integer);
//Float
$var_float = 7.565;
var_dump($var_float);
//String
$var_string = "Chain";
var_dump($var_string);
//Booleano
$var_bool = True;
var_dump($var_bool);
//Array
$var_array = array(5, 6, 7, 9, 2, 5);
var_dump($var_array);
//Nullos
$var_null = Null;
var_dump($var_null);
//object
function PrintAll(){
	return "Obj. Function.";
}
$var_obj = PrintAll();
var_dump($var_obj);
//Constantes
define("H_WORD", "Hello Word!!");
var_dump(H_WORD);
?>