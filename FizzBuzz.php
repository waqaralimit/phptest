<?php 
class FizzBuzz{
	var $n;
	var $atvalue1;
	function __construct($n,$atvalue1)
	{
		$this->n=$n;
		$this->atvalue1=$atvalue1;
	}
	//For the multiples of five print Buzz instead of the number
	function printatmultiples(){
			for($i=1; $i<=$this->n; $i++){
				if($i%$this->atvalue1==0)
					echo "Buzz</br>";
				else
					echo $i."</br>";
					
			}
				
	}
	
}

$obj=new FizzBuzz(20,5);
$obj->printatmultiples();