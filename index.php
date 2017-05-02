<?php

$input1 = array("Pitcher", "Catcher", "First Base", "Second Base", "Third Base","Short Stop","Left Field","Center Field","Right-Field");
$rand_keys = array_rand($input1, 1);


$Rows = 6; //Dynamic number for Rowss
$Cols = 6; // Dynamic number for Colsumns
echo '<table border="1">';
echo '<tr>';
foreach ($_POST['pitcher1'] as $option) {
	 
}
/*
$p=0;
foreach ($_POST['preferred1'] as $option) 
{	$prefpostion[$p] = $option;
    $p = $p+1; 

}
*/
//player 1
$a=0;
foreach ($_POST['positionsToAvoid1'] as $option) {

	$avoidposition[$a]=$option;
	$a=$a +1;
}


$k=0;
for($i=0;$i<=8;$i++)
{
if (!in_array($input1[$i], $avoidposition)) {
   
   $new[$k]=$input1[$i];
   
   $k++;
}
}

//player 2

$a=0;
foreach ($_POST['positionsToAvoid2'] as $option) {

	$avoidposition2[$a]=$option;
	$a=$a +1;
}


$k=0;
for($i=0;$i<=8;$i++)
{
if (!in_array($input1[$i], $avoidposition2)) {
   
   $new1[$k]=$input1[$i];
   
   $k++;
}
}

//player 3

$a=0;
foreach ($_POST['positionsToAvoid3'] as $option) {

	$avoidposition3[$a]=$option;
	$a=$a +1;
}


$k=0;
for($i=0;$i<=8;$i++)
{
if (!in_array($input1[$i], $avoidposition3)) {
   
   $new2[$k]=$input1[$i];
   
   $k++;
}
}

//player 4

$a=0;
foreach ($_POST['positionsToAvoid4'] as $option) {

	$avoidposition4[$a]=$option;
	$a=$a +1;
}


$k=0;
for($i=0;$i<=8;$i++)
{
if (!in_array($input1[$i], $avoidposition4)) {
   
   $new3[$k]=$input1[$i];
   
   $k++;
}
}
//player 5

$a=0;
foreach ($_POST['positionsToAvoid5'] as $option) {

	$avoidposition5[$a]=$option;
	$a=$a +1;
}


$k=0;
for($i=0;$i<=8;$i++)
{
if (!in_array($input1[$i], $avoidposition5)) {
   
   $new4[$k]=$input1[$i];
   
   $k++;
}
}

//player 6

$a=0;
foreach ($_POST['positionsToAvoid6'] as $option) {

	$avoidposition6[$a]=$option;
	$a=$a +1;
}


$k=0;
for($i=0;$i<=8;$i++)
{
if (!in_array($input1[$i], $avoidposition6)) {
   
   $new5[$k]=$input1[$i];
   
   $k++;
}
}





foreach ($new as $option1) {
//print $option1."\n";

//	$a=$a +1;
}

echo  '<th>'."playername".'</th>'; 

for($j=1;$j<=$Cols;$j++)
{ 
echo  '<th>'.$_POST["playername".$j] . '</th>'; 
}
echo '</tr>';
shuffle($new1);
shuffle($new2);
shuffle($new3);
shuffle($new4);
shuffle($new5);

for($j=1;$j<=$Cols;$j++){ 

echo '<tr>';

echo '<td>' ."inning".$j.'</td>';
echo '<td>' .$new[$j-1].'</td>';
echo '<td>' .$new1[$j-1].'</td>';
echo '<td>' .$new2[$j-1].'</td>';
echo '<td>' .$new3[$j-1].'</td>';
echo '<td>' .$new4[$j-1].'</td>';
echo '<td>' .$new5[$j-1].'</td>';

/*
for($k=0;$k<=5;$k++)
{
echo '<td>' .$new[$k].'</td>';
echo '</tr>';
}
*/

echo '</tr>';  
 }
echo '</table>'

?>

