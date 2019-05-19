<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
$profession = "Engineer";
switch ($profession) {
	case 'Doctor':
		echo "Hello $profession, You can serve poor people.";
		break;
	case 'Teacher':
		echo "Hello $profession, You can teach good lessons to your students.";
		break;
	case 'Doctor':
		echo "Hello $profession, You can serve poor people";
		break;
	case 'Engineer':
		echo "Hello $profession, You can solve problems of the society.";
		break;
	
	default:
		echo "Try to contribute for the society.";
		break;
}
?>

</body>
</html>