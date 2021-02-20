<?php
$a = 95;
function print_variable(){
	$a = 100;
}
print_variable();
echo $a;
//answer is 95
?>