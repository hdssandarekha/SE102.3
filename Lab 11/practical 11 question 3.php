<html>
	<head>
		<title>practical 11 question 1</title>
	</head>
	<body>
		<?php
			$bill;
			$unit=200;
			
			if($unit>0 && $unit<=50)
				{
					$bill=3.50*$unit;
				}
			if($unit>50 && $unit<=100)
				{
					$bill=4*$unit;
				}
			if($unit>100 && $unit<=150)
				{
					$bill=5.20*$unit;
				}
			else
				{
					$bill=6.50*$unit;
				}
			echo("Electricity bill is :$bill");
		?>
	</body>
</html>
