<?php
session_start();
$customerId=$_POST['customerId'];
$customerPassword=$_POST['customerPassword'];
$mysqli=mysqli_connect("localhost","root","1234","customer");

$check="SELECT *FROM customers WHERE customerId='$customerId'";
$result=$mysqli->query($check);
if($result->num_rows==1){
	$row=$result->fetch_array(MYSQLI_ASSOC);
	if($row['customerPassword']==$customerPassword){
		$_SESSION['customerId']=$customerId;
		if(isset($_SESSION['customerId'])){
			header('Location: ./main.php'); //로그인 성공 시 페이지
		}
		else{
			echo "에러 : 세션 저장 실패";
		}
	}
	else {
		echo "잘못된 아이디 혹은 비밀 번호 입니다.";
		echo "<a href=signIn.html>다시 입력하세요.</a>";
	}
}
else {
	echo "잘못된 아이디 혹은 비밀 번호 입니다.";
	echo "<a href=signIn.html>다시 입력하세요.</a>";
}

$mysqli->close();

?>