<DOCTYPE! html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="author" content="Michael Du Toit" />
	<style>
		.container-block {width:30%;height:auto;margin:0 auto;background-color:#FF543E;border:0.5em solid #B21F0D;color:white;font-weight:bold;text-align:center;padding:5%;}
	</style>
</head>
<body>
	<div class="container-block"><?php
		date_default_timezone_set('Pacific/Auckland'); /*Set timezone*/
		$today_declare = date("Y-m-d H:i:s"); /*Declare today*/
		$today = strtotime($today_declare); /*Convert $today_declare to time value*/
		 
		/* Convent event date strings to time value */
		/* Enter event date and time in YYYY-MM-DD HH:MM:SS format*/
		$event1Date = strtotime("2016-01-19 18:30:00"); /*Insert Event 1 Date*/ 
		$event2Date = strtotime("2016-02-02 18:30:00"); /*Insert Event 2 Date*/
		$event3Date = strtotime("2016-02-16 18:30:00"); /*Insert Event 3 Date*/
		$event4Date = strtotime("2016-03-01 18:30:00"); /*Insert Event 4 Date*/
		$event5Date = strtotime("2016-03-15 18:30:00"); /*Insert Event 5 Date*/
		$event6Date = strtotime("2016-03-29 18:30:00"); /*Insert Event 6 Date*/

		if($today < $event1Date){
			echo "Next Event: 19 January";
			}
		elseif($today > $event1Date && $today < $event2Date){
			echo "Next Event: 2 February";
			}
		elseif($today > $event2Date && $today < $event3Date){
			echo "Next Event: 16 February";
			}
		elseif($today > $event3Date && $today < $event4Date){
			echo "Next Event: 1 March";
			}
		elseif($today > $event4Date && $today < $event5Date){
			echo "Next Event: 15 March";
			}
		elseif($today > $event5Date && $today < $event6Date){
			echo "Next Event: 29 March";
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
