<DOCTYPE! html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="author" content="Michael Du Toit" />
	<style>
		.container-block {width:30%;height:auto;margin:0 auto;background-color:#FF543E;border:0.5em solid #B21F0D;color:#fff;font-weight:bold;text-align:center;padding:5%;}
	</style>
</head>
<body>
	<div class="container-block">
		<?php
			/* Set timezone */
			date_default_timezone_set('Pacific/Auckland'); 
			/* Declare today */
			$today_declare = date("Y-m-d H:i:s");
			/* Convert $today_declare to time value */
			$today = strtotime($today_declare);
			 
			/* Convent event date strings to time value */
			/* Enter event date and time in YYYY-MM-DD HH:MM:SS format*/
			$event1Date = strtotime("2016-05-03 18:30:00"); /*Insert Event 1 Date*/ 
			$event2Date = strtotime("2016-05-17 18:30:00"); /*Insert Event 2 Date*/
			$event3Date = strtotime("2016-05-31 18:30:00"); /*Insert Event 3 Date*/
			$event4Date = strtotime("2016-06-14 18:30:00"); /*Insert Event 4 Date*/
			$event5Date = strtotime("2016-06-28 18:30:00"); /*Insert Event 5 Date*/
			$event6Date = strtotime("2016-07-12 18:30:00"); /*Insert Event 6 Date*/
			$before_date_str = "Next Event: ";
	
			if($today < $event1Date){
				echo $before_date_str . "3 May";
				}
			elseif($today > $event1Date && $today < $event2Date){
				echo $before_date_str . "17 May";
				}
			elseif($today > $event2Date && $today < $event3Date){
				echo $before_date_str . "31 May";
				}
			elseif($today > $event3Date && $today < $event4Date){
				echo $before_date_str . "14 June";
				}
			elseif($today > $event4Date && $today < $event5Date){
				echo $before_date_str . "28 June";
				}
			elseif($today > $event5Date && $today < $event6Date){
				echo $before_date_str . "12 July";
				}
			elseif($today > $event6Date){
				echo "See you again at the next Series";
				}
			else{
				echo "Error Occured";
				}
		?>
	</div>
</body>
</html>
