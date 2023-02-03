<html>
<body>
<?php
	
	function fact($a)
	{
		$value =1;
		if($a<=0)
			return 1;
		else {
			for($i =1; $i <= $a; $i++)
				$value *= $i;
			return $value;
		}

		
	}
	
	 
	echo "Facorial is ".fact(6);
	

?>

</body>
</html>