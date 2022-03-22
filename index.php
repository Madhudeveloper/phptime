<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Time</title>
</head>
<body>

	<center><h1>Deals Of The Day</h1></center>
	<br>
	<center><?php echo date("Y-m-d H:i:s"); ?></center> 
    <center>   
      <?php 

		    $exact_time = str_replace('/', '-', "27/02/2022 7pm");

		    $now = new DateTime();

		    $futureDate = new DateTime($exact_time);

		    $interval = $futureDate->diff($now);
		    echo $interval->format("%a Days %h Hours %i Minutes %s Seconds");
        ?>
    </center>  
    <?php 
      
      


    ?>
</body>
</html>