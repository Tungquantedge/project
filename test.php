<?php 
	// @session_destroy();
	// session_start();
	// if( isset($_SESSION['username']) && isset($_SESSION['password'])) {
	// 	header('Location: index.php');
	// }else{
	// 	header('Location: test.php');
	// }
?>
	<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title></title>
		<link rel="stylesheet" href="">
	</head>
	<body>
		<?php 
			// if($_SERVER['REQUEST_METHOD'] == 'POST'){
			if(isset($_POST['name']) && isset($_POST['pass'])) {
				$user =  $_POST['name'];
				$pass = $_POST['pass'];
				$_SESSION['username'] =  $_POST['name'];
				$_SESSION['password'] =  $_POST['pass'];
			}
		 ?>
		<form action="" method="post">
			<input type="text" name="name" minlength="3" placeholder="Name" required="required">
			<input type="password" name="pass" minlength="3" placeholder="Pass" required="required">
			<input type="submit" value="Submit">
		</form>
	</body>
	</html>	
	<!-- submit -->
	<!-- <?php 
		// if($_SERVER['REQUEST_METHOD'] == 'POST'){
		// 	if (mail('h@gmail.com', 'new', $_POST['message'])) {
		// 		$status = "thank you";
		// 	}
		// }
	?>
	<form action="" method="post" accept-charset="utf-8">
		<input type="text" name="name" value="">
		<input type="email" name="name" value="">
		
		<button type="submit">ok</button>
		
		<label for="message"><textarea name="message"></textarea></label>
	</form>
	<span><?php //if(isset($status)) echo $status; ?></span> -->
<?php 
	//like C ===================================
	// $name = 'Joe';
	// $age = 35;
	// printf("My name is %s and I'm %d", $name, $age);
	
	//capture 
	// $res = sscanf("July 7th, 2017", "%s %s");
	// $res = sscanf("July 7th, 2017", "%s %[^,], %d");
	// print_r($res);
	// list($name, $age) = array('John',25);echo $name;
	// sscanf("July 7th, 2017", "%s %[^,], %d", $day, $moth, $year);echo $day;
	
	//array ===================================
	// function pp($value)
	//  {
	//  	echo '<pre>';print_r($value);echo '</pre>';
	//  } 
	//  $arr = array('name'=>'joe', 'age'=>25,'occ'=>'teacher');
	//  pp($arr); 
	
	// function array_pluck($toPluck, $arr)
	// {
	// 	return array_map(function($item) use ($toPluck) //ke thua bien
	// 	{
	// 		return $item[$toPluck];
	// 	}, $arr);
		// return array_map(function($item)
		// {
		// 	$item['name'] = 'changed';
		// 	return $item;
		// }, $arr);
	// }
	// $peo = array(
	// 	array('name'=>'joe', 'age'=>25, 'occ'=>'love'),
	// 	array('name'=>'mark', 'age'=>29, 'occ'=>'like'),
	// 	array('name'=>'jesse', 'age'=>21, 'occ'=>'hat')
	// );
	// echo '<pre>';print_r(array_pluck('name', $peo));echo '</pre>';
	 
	//OOP ===================================
	// class Person
	// {
	// 	public $name;
	// 	public $job;
	// 	public function __construct($name, $job)
	// 	{
	// 		$this->name = $name;
	// 		$this->job = $job;
	// 	}
	// 	public function com($style = 'voice')
	// 	{
	// 		return 'hello '.$style;
	// 	}
	// }
	// $p = new Person('John', 'tech');
	// echo $p->com('hgjgjhghjg');
	
	// echo gettype(5);
	//sprintf
	// $p = array(
	// 	'au' => 'jey', 
	// 	'title' => 'My Awe', 
	// 	'body' => 'here is the body', 
	// 	'push' => '26-12-2017',
	// );
	// extract($p);
	// echo $au;
?>