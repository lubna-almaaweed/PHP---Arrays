<?php 

// $colors = array(1,2,3,4,5,6,7,8,9);

// $cities= array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=>
// "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" =>
// "Paris", "Slovakia"=>"Bratislava"); 
// foreach($multi as $k=>$soso){
// 	//if(is_array($soso)){}
// 	//if(gettype($soso) == 'array'){}
// 	if(is_array($soso)){
// 		foreach ($soso as $key => $value) {
// 			echo $key." ".$value."<br>";
// 		}
// 	}else{
// 		echo $k." ".$soso."<br>";
// 	}
// }
$multi = array(
  array(1,"anas","IT"),
  array(2,"jinan","Kitchen"),
  array(3,"heba","sales"),
  array(4,"ahmad","HR")
);

$id    = array();
$names = array();
$dept  = array();





$multi = array(
  array(1,"anas","IT"),
  array(2,"jinan","Kitchen"),
  array(3,"heba","sales"),
  array(4,"ahmad","HR")
);

$mutli2 = array(
  array(1,2,3,4),
  array("anas","jinan","heba","ahmad"),
  array("IT","Kitchen","sales","HR"),
  
); 


$id    = array();
$names = array();
$dept  = array();

$multi will printed as multidimessional array contain employee info 
array(1,"anas","IT"),






































// <!--
// //Q1:
// echo "QUESTION (1) " . "<br>"   . "*The answer is :" . "<br>";


// $color = array('white', 'green', 'red', 'blue', 'black');
// echo "The memory of that scene for me is like a frame of film forever frozen at that moment: the $color[2] carpet, the $color[1] lawn, the $color[0] house, the leaden sky. The new president and his first lady. - Richard M. Nixon"."\n";
// echo "<br>";
// echo "<br>";

// ///////////////////////////////////////////////////////////////////////
// //Q2:
// echo "QUESTION (2) " ."<br>" . "*The answer is :" . "<br>";
// $color = array('white', 'green', 'red');
// foreach ($color as $c)
// {
// echo "$c, ";
// }
// sort($color);
// echo "<ul>";
// foreach ($color as $y)
// {
// echo "<li>$y</li>";
// }
// echo "</ul>";
// echo "<br>";

// ///////////////////////////////////////////////////////////////////////
// //Q3:
// echo "QUESTION (3) " . "<br>" . "*The answer is :" . "<br>";

// $ceu = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg",
// "Belgium"=> "Brussels", "Denmark"=>"Copenhagen",
// "Finland"=>"Helsinki", "France" => "Paris",
// "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana",
// "Germany" => "Berlin", "Greece" => "Athens",
// "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam",
// "Portugal"=>"Lisbon", "Spain"=>"Madrid",
// "Sweden"=>"Stockholm", "United Kingdom"=>"London",
// "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius",
// "Czech Republic"=>"Prague", "Estonia"=>"Tallin",
// "Hungary"=>"Budapest", "Latvia"=>"Riga","Malta"=>"Valetta",
// "Austria" => "Vienna", "Poland"=>"Warsaw") ;
// asort($ceu) ;
// foreach($ceu as $country => $capital)
// {
// echo "The capital of $country is $capital"."\n" . "<br>";
// }
// echo "<br>";

// ///////////////////////////////////////////////////////////////////////
// //Q4:
// echo "QUESTION (4) " . "<br>" . "*The answer is :" . "<br>";
// $x = array(1, 2, 3, 4, 5);
// var_dump($x);
// unset($x[3]);
// $x = array_values($x);
// echo '
// ';
// var_dump($x);
// echo "<br>";
// echo "<br>";

// ///////////////////////////////////////////////////////////////////////
// //Q5:
// echo "QUESTION (5) " . "<br>" .  "*The answer is :" . "<br>";
// $color = array(4 => 'white', 6 => 'green', 11=> 'red');
// echo reset($color)."\n";
// echo "<br>";
// echo "<br>";


// ///////////////////////////////////////////////////////////////////////
// //Q7:
// echo "QUESTION (7) " . "<br>"   . "*The answer is :" . "<br>";

// $arr= array( '1','2','3','4','5' );
// echo 'array : '."\n";
// foreach ($arr as $x) 
// {echo "$x ";}
// $inserted = '$';
// array_splice( $arr, 3, 0, $inserted ); 
// echo "<br>";
// echo " \n the edited array is : "."\n";
// foreach ($arr as $x) 
// {echo "$x ";}
// echo "\n";

// echo "<br>";
// echo "<br>";

// ///////////////////////////////////////////////////////////////////////
// echo "QUESTION (8) " . "<br>"   . "*The answer is :" . "<br>";

// echo "
// *Associative array : Ascending order sort by value
// ";
// echo "<br>";
// $array2=array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40"); asort($array2);
// foreach($array2 as $y=>$y_value)
// {
// echo "Age of ".$y." is : ".$y_value."
// ";
// }
// echo "
// *Associative array : Ascending order sort by Key
// ";
// echo "<br>";
// $array3=array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40"); ksort($array3);
// foreach($array3 as $y=>$y_value)
// {
// echo "Age of ".$y." is : ".$y_value."
// ";
// echo "<br>";

// }
// echo "
// *Associative array : Descending order sorting by Value
// ";
// $age=array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");
// arsort($age);
// foreach($age as $y=>$y_value)
// {
// echo "Age of ".$y." is : ".$y_value."
// ";
// }
// echo "<br>";
// echo "
// *Associative array : Descending order sorting by Key
// ";
// $array4=array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40"); krsort($array4);
// foreach($array4 as $y=>$y_value)
// {
// echo "Age of ".$y." is : ".$y_value."
// ";
// } 

// echo "<br>";
// echo "<br>";

// ///////////////////////////////////////////////////////////////////////
// echo "QUESTION (9) " . "<br>"   . "*The answer is :" . "<br>";

// $month_temp = "78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 81, 76, 73,
// 68, 72, 73, 75, 65, 74, 63, 67, 65, 64, 68, 73, 75, 79, 73";
// $temp_array = explode(',', $month_temp);
// $tot_temp = 0;
// $temp_array_length = count($temp_array);
// foreach($temp_array as $temp)
// {
//  $tot_temp += $temp;
// }
//  $avg_high_temp = $tot_temp/$temp_array_length;
//  echo "Average Temperature is : ".$avg_high_temp."
// "; 
// sort($temp_array);
// echo " List of five lowest temperatures :";
// for ($i=0; $i< 5; $i++)
// { 
// echo $temp_array[$i].", ";
// }
// echo "List of five highest temperatures :";
// for ($i=($temp_array_length-5); $i< ($temp_array_length); $i++)
// {
// echo $temp_array[$i].", ";
// }


// echo "<br>";
// echo "<br>";

// ///////////////////////////////////////////////////////////////////////
// echo "QUESTION (11) " . "<br>"   . "*The answer is :" . "<br>";

// $array1 = array(array(70,40), array(25, 45));
// $array2 = array("example", "com");
// function newArray($x, $y)
// {
// $temp = array(); $temp[] = $x; if(is_scalar($y))
// {
// $temp[] = $y;
// }
// else
// {
// foreach($y as $k => $v)
// {
// $temp[] = $v;
// }
// }
// return $temp;
// }
// echo '<pre>'; print_r(array_map('newArray',$array2, $array1));

// echo "<br>";
// echo "<br>";

// ///////////////////////////////////////////////////////////////////////
// echo "QUESTION (12) " . "<br>"   . "*The answer is :" . "<br>";

// function array_change_value_case($input, $ucase)
// {
// $case = $ucase;
// $narray = array();
// if (!is_array($input))
// {
// return $narray;
// }
// foreach ($input as $key => $value)
// {
// if (is_array($value))
// {
// $narray[$key] = array_change_value_case($value, $case);
//  continue;
// }
// $narray[$key] = ($case == CASE_UPPER ? strtoupper($value) : strtolower($value));
// }
// return $narray;
// }
// $Color = array('A' => 'Blue', 'B' => 'Green', 'c' => 'Red');
// echo 'Actual array ';
// print_r($Color);
// echo 'Values are in lower case.';
// $myColor = array_change_value_case($Color,CASE_LOWER);
// print_r($myColor);
// echo 'Values are in upper case.';
// $myColor = array_change_value_case($Color,CASE_UPPER);
// print_r($myColor);

// echo "<br>";
// echo "<br>";

// ///////////////////////////////////////////////////////////////////////
// echo "QUESTION (13) " . "<br>"   . "*The answer is :" . "<br>";

// echo implode(",",range(200,250,4))."\n";

// echo "<br>";
// echo "<br>";

// ///////////////////////////////////////////////////////////////////////
// echo "QUESTION (14) " . "<br>"   . "*The answer is :" . "<br>";

// $my_array = array("abcd","abc","de","hjjj","g","wer");
// $new_array = array_map('strlen', $my_array);
// echo "The shortest array length is " . min($new_array) .
// ". The longest array length is " . max($new_array).'.';

// echo "<br>";
// echo "<br>";

// ///////////////////////////////////////////////////////////////////////
// echo "QUESTION (15) " . "<br>"   . "*The answer is :" . "<br>";

// $n=range(11,20);
// shuffle($n);
// for ($x=0; $x< 10; $x++)
// {
// echo $n[$x].' ';
// }
// echo "\n";

// echo "<br>";
// echo "<br>";

// ///////////////////////////////////////////////////////////////////////
// echo "QUESTION (16) " . "<br>"   . "*The answer is :" . "<br>";

// $names = array("lubna"=>"fbis","ahmed"=>"nursing","alaa"=>"full stack developer");
// $mkey = max( array_keys( $names) ); 
// echo $mkey."\n";
// echo "<br>";
// echo "<br>";

// ///////////////////////////////////////////////////////////////////////
// echo "QUESTION (17) " . "<br>"   . "*The answer is :" . "<br>";

// function minvalues(Array $values) 
// {
// return min(array_diff(array_map('intval', $values), array(0)));
// }
// print_r(minvalues(array(-1,0,1,12,-10,1))."\n");

// echo "<br>";
// echo "<br>";

// ///////////////////////////////////////////////////////////////////////
// echo "QUESTION (18) " . "<br>"   . "*The answer is :" . "<br>";

// function floorDec($number, $precision, $separator)
// {
// $number_part=explode($separator, $number);
// $number_part[1]=substr_replace($number_part[1],$separator,$precision,0);
// if($number_part[0]>=0)
// {$number_part[1]=floor($number_part[1]);}
// else
// {$number_part[1]=ceil($number_part[1]);}

// $ceil_number= array($number_part[0],$number_part[1]);
// return implode($separator,$ceil_number);
// }
// print_r(floorDec(1.155, 2, ".")."\n");
// print_r(floorDec(100.25781, 4, ".")."\n");
// print_r(floorDec(-2.9636, 3, ".")."\n");

// echo "<br>";
// echo "<br>";

// ///////////////////////////////////////////////////////////////////////
// echo "QUESTION (19) " . "<br>"   . "*The answer is :" . "<br>";

// $color = array ( "color" => array ( "a" => "Red", "b" => "Green", "c" => "White"),
// "numbers" => array ( 1, 2, 3, 4, 5, 6 ),
// "holes" => array ( "First", 5 => "Second", "Third"));
// echo $color["holes"][5]."\n"; 
// echo $color["color"]["a"]."\n"; 

// echo "<br>";
// echo "<br>";

// ///////////////////////////////////////////////////////////////////////
// echo "QUESTION (20) " . "<br>"   . "*The answer is :" . "<br>";

// function arr($a, $b) 
// { 
//   global $order; 

//   foreach($order as $key => $value) 
//     { 
//       if($a==$value) 
//         { 
//           return 0; 
//           break; 
//         } 

//       if($b==$value) 
//         { 
//           return 1; 
//           break; 
//         } 
//     } 
// } 

// $order[0] = 1;
// $order[1] = 3; 
// $order[2] = 4; 
// $order[3] = 2; 

// $array[0] = 2;
// $array[1] = 1; 
// $array[2] = 3; 
// $array[3] = 4; 
// $array[4] = 2; 
// $array[5] = 1; 
// $array[6] = 2; 

// usort($array, "arr"); 

// print_r($array); 

// echo "<br>";
// echo "<br>";

// ///////////////////////////////////////////////////////////////////////
// echo "QUESTION (24) " . "<br>"   . "*The answer is :" . "<br>";

// $colors = array(
//     "color1", "color20", "color3", "color2"
// );
// sort($colors, SORT_NATURAL | SORT_FLAG_CASE);
// foreach ($colors as $key => $val) {
//     echo "Colors[" . $key . "] = " . $val . "\n";
// }

// echo "<br>";
// echo "<br>"; -->

///////////////////////////////////////////////////////////////////////

?>