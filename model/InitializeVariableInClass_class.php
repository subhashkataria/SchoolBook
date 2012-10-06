<?php
	
	class InitializeVariableInClass
	{
		private $num1;
		private $num2;
		private $num3;
		private $num4;
		private $num5;
		private $num6;
		private $num7;
		private $num8;
		private $num9;
		private $num10;
		private $num11;
		private $num12;
		private $num13;
		private $num14;
		private $num15;
		

				
		function __construct($n1,$n2,$n3,$n4,$n5,$n6,$n7,$n8,$n9,$n10,$n11,$n12,$n13,$n14,$n15)
		{
				$this->num1 = $n1;
				$this->num2 = $n2;
				$this->num3 = $n3;
				$this->num4 = $n4;
				$this->num5 = $n5;
				$this->num6 = $n6;
				$this->num7 = $n7;
				$this->num8 = $n8;
				$this->num9 = $n9;
				$this->num10 = $n10;
				$this->num11 = $n11;
				$this->num12 = $n12;
				$this->num13 = $n13;
				$this->num14 = $n14;
				$this->num15 = $n15;
		}		
		
		function display()
		{
			include("included_variable.php");			
			
				echo "<br>".$this->num1;
				echo "<br>".$this->num2;
				echo "<br>".$this->num3;
				echo "<br>".$this->num4;
				echo "<br>".$this->num5;
				echo "<br>".$this->num6;
				echo "<br>".$this->num7;
				echo "<br>".$this->num8;
				echo "<br>".$this->num9;
				echo "<br>".$this->num10;
				echo "<br>".$this->num11;
				echo "<br>".$this->num12;
				echo "<br>".$this->num13;
				echo "<br>".$this->num14;
				echo "<br>".$this->num15;
			
			
			
			
			
			echo "<br>".$global_var;	
		}	
	}
?>