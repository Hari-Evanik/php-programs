<html>
<body>

<?php
	function fact($a)
	{
		if($a <=1 )
			return 1;
		else  {
			return (fact($a -1 )* $a);
		}
	}
	
	
	
		echo "Factorial is ".fact(10);
	
?>

</body>
</html>