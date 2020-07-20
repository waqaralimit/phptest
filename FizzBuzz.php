<?php 
class FizzBuzz{
	var $n;
	function __construct($n)
	{
		$this->n=$n;
	}
//Write a program called FizzBuzz that prints one line for each number from 1 to 20
	function printnumbers(){
			for($i=1; $i<=$this->n; $i++)
				echo $i."</br>";
	}
	
}

$obj=new FizzBuzz(20);
$obj->printnumbers();