<?php
$e1=$_GET["e1"];
$e2=$_GET["e2"];
$e3=$_GET["e3"];
$e4=$_GET["e4"];
$e5=$_GET["e5"];
$e6=$_GET["e6"];
$avg=($e1+$e2+$e3+$e4+$e5+$e6)/6;
$marks=array($e1,$e2,$e3,$e4,$e5,$e6);
//echo $marks[5]."<br>";

//echo $avg;

	for($i=0;$i<6;$i++){		
		for($j=0;$j<6;$j++){
			if($marks[$j]>$marks[$i])	{
				$temp=$marks[$j];
				$marks[$j]=$marks[$i];
				$marks[$i]=$temp;
			}
		}
		}
//echo date("y/d/m");		
echo "Scores in ascending order are:<br>";
	foreach($marks as $x)
echo $x ."<br>";
echo "Lowest score is ".$marks[0]."<br>";
echo "Highest score is ".$marks[5]."<br>";
echo "Average score is ".$avg."<br>";
$k=0;
$c1=0;
$c2=0;
for($i=0;$i<6;$i++){
	if($marks[$i]<$avg){
		$less[$k++]=$marks[$i];
		$c1++;
	}
	else{
		$more[$k++]=$marks[$i];
	$c2++;
}}
echo "LEss than average scores are<br>";
foreach($less as $x)
echo $x ."<br>";
echo "No of people with less than avg score are ".$c1."<br>";
echo "More than average scores are<br>";
foreach($more as $x)
echo $x ."<br>";
echo "No of people with more than avg score are ".$c2;
?>