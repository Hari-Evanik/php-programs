<html>
<body>

<?PHP
	$name = "Ram";
	
	function name_print()
	{
		
		define("a","Ram");
		echo "Name is ".a."<br/>";

		define ("Name","Surat");
		echo "Name ".Name."<br/>";

		echo "<h3> Example for __LINE__</h3>";
		echo "You are at the line ".__LINE__."<br/>";
		
		$a = "Sun";
		var_dump($a);
		
	
	}
	
	name_print();
	echo "Variable outsidde the function is ".$name;
?>

</body>
</html>