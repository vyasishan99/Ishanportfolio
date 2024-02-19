<?php
/*

Rules of taking variables in php ?
 
=>A variable never start with underscore
=>A variable never accept white space
=>A variable never start with identifier
=>A variable never start with dash
=>A variable always start with $ sign
=>A variable never start with numeric or number

*/


// $a=10; //right

// 7$a=10; //wrong


// $name="Brijesh";
// echo $name;

   $name="Brijesh";
   $$name="Pandey";

   echo $name."<br>".$$name;



?>