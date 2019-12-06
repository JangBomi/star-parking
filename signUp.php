<?php
$customerId=$_POST['customerId'];
$customerPassword=$_POST['customerPassword'];
$customerPasswordCheck=$_POST['customerPasswordCheck'];
$name=$_POST['name'];
$email=$_POST['email'];

if($customerPassword != $customerPasswordCheck){
	echo "비밀 번호와 비밀 번호 확인이 서로 다릅니다.";
	echo "<a href=singUp.html>다시 입력해주세요.</a>";
	exit();
}

if(!$customerId || !$customerPassword || !$name || !$email){
	echo "<p>정보가 충분하지 않습니다.</p>";
	echo "<a href=signUp.html>다시 입력해주세요.</a>";
	exit();
}
$mysqli=mysqli_connect("localhost","root","1234","customer");
if(mysqli_connect_errno()){
	echo "<p>에러 : 데이터베이스를 찾을 수 없습니다. 다시 시도해주세요. </p>";
	exit();
}

$check="SELECT *FROM customers WHERE customerId='$customerId'";
$Idresult=$mysqli->query($check);
if($Idresult->num_rows==1){
	echo "이미 존재하는 ID입니다.";
	echo "<a href=singUp.html>다시 입력해주세요.</a>";
	exit();
}

$query="INSERT INTO customers(customerId,customerPassword,name,email) VALUES ($customerId,$customerPassword,$name,$email)";
$stmt=$mysqli->prepare($query);
$stmt->execute();
if($query){
	echo "회원 가입이 되었습니다.";
	echo "<a href=singUp.html>로그인하세요.</a>"
}

$mysqli->close();

?>