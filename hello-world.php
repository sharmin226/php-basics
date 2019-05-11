<!DOCTYPE html>
<html>
<head>
	<title><?= "hello world"; ?></title>
</head>
<body>
<?php
// echo "<h1>Hello world</h1>";
// echo "Learning 'PHP' coding";
// echo "<br>";
// echo 'Learning "PHP" coding';
// echo "<br>";
// echo strrev('Learning "PHP" coding');
// echo "<br>";
// echo strtoupper('Learning "PHP" coding');
// echo "<br>";
// echo strtolower('Learning "PHP" coding');
// echo "<br>";
// // define constant value ======================
// 	define('NUM', 10);
// 	echo NUM;
// 	echo "<br>";
// 	define('name', 'sharmin');
// 	echo name;
// 	echo "<br>";
// //define an array ==================
// $shapes = array();
// $shapes[0]='cube';
// $shapes[1]='cone';
// $shapes[2]='square';
// $shapes[3]='triangle';
// echo $shapes[2];
// echo "<br>";

// $names = array('abc','cde','efg','iop');
// echo $names[2];
// echo "<br>";
// // counts element of an array===============
// echo count($names);
// echo "<br>";

// $last = array_pop($names); //array_pop: last element of an array
// echo $last;
// echo "<br>";
// $num = array(1,2,5,10,3,6);
// echo max($num); // max num of an array
// echo "<br>";

// // define function wihtout parameter ============
// function first(){
// 	echo "My first function in PHP";
// 	echo "<br>";
// 	$name = 'Chris';
// 	$posts = 12;
// 	echo "$name has $posts posts";
// }
// first();
// echo "<br>";
// //define function with parameters =============
// function multiply($a, $b){
// 	echo $a * $b;
// }
// multiply(10,20);
// echo "<br>";
// // if..else statement =================
// $login = false;
// $user = 'John';
// if ($login) {
// 	echo "welcome back,". $user;
// }
// else echo 'Try to login again';
// echo "<br>";
// echo "<br>";
// //==============================
// function condition($a, $b)
// {
// 	if ($a >= 40 && $b <= 50) {
// 	echo $a + $b;
// 	} elseif ($a > 20 || $b < 10) {
// 		echo $a * $b;
// 	} 

// }
// condition(40, 50);
// echo '<br>';
// condition(10, 5);
// echo '<br>';
// //=============== Switch statement ===========
// $favFood = 'abc';
// switch ($favFood) {
//  	case 'chinese':
//  		echo "I love chinese";
//  		break;
//  	case 'curry':
//  		echo "I love curry";
//  		break;
 	
//  	default:
//  		echo "I love everything";
//  		break;
//  } 
//  echo '<br>';
//  //============= while and do...while loop ===========
// $number = 7;
// while ( $number < 10) {
// 	echo "$number is less than 10<br>";
// 	$number++;
// }
// $a = 17;
// do{
// 	echo "$a<br>";
// 	$a++;
// } while($a<20)

//======== for loop =========
// for ($number=0; $number < 6; $number++) { 
// 	echo $number."<br>";
// }
//======= for each===========
$courses = array('math','bangla','english','physics');
foreach ($courses as $new) {
	echo "$new<br>";
}
?>

</body>
</html>