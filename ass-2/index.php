<html>
<head>
	<title>
		190104054 Assignment 02
	</title>
	<link rel="stylesheet" href="main.css">
</head>
<body>
	<h2 class="heading-section">Prime #0-50</h2>
	<div class="main">
	<?php
		$range = 50;
		$counter = 1;
		
		echo "<table border=\"0\">";
		echo "<tr><th>Count</th>";
		echo "<th>Primes</th></tr>";

		for($i=0; $i<$range; $i++)
		{
			//1 not prime
			if($i == 1) continue;
    		if($i == 2) {goto prnt;}

    		//even numbers not prime
		    if($i % 2 == 0) continue;

	    	//all other numbers
		    $ceil = ceil(sqrt($i));
		    for($j = 3; $j <= $ceil; $j+=2) {
		        if($i % $j == 0) {
		        	goto cont;
		        }
		    }

		prnt:
		    echo "<tr><td>";
			echo $counter;
			echo "</td><td>";
			echo $i;
			echo "</td></tr>";
			$counter++;

		cont:
			continue;

		}

		echo "</table>";
	?>


	</div>

</body>
</html>
