<?php 
class FizzBuzz{
	var $n;
	var $atvalue1;
	var $atvalue2;
	function __construct($n,$atvalue1,$atvalue2)
	{
		$this->n=$n;
		$this->atvalue1=$atvalue1;
		$this->atvalue2=$atvalue2;
	}
	//For multiples of three print Fizz instead of the number
	//For the multiples of five print Buzz instead of the number
	//For numbers which are multiples of both three and five print FizzBuzz instead of the number
	function printatmultiples(){
			for($i=1; $i<=$this->n; $i++){
				if($i%$this->atvalue1==0 and $i%$this->atvalue2==0)
					echo "FizzBuzz</br>";
				elseif($i%$this->atvalue1==0)
					echo "Fizz</br>";
				elseif($i%$this->atvalue2==0)
					echo "Buzz</br>";
				else
					echo $i."</br>";
					
			}
				
	}
	
}

$obj=new FizzBuzz(20,3,5);
$obj->printatmultiples();