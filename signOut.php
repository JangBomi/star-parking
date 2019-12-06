//회원 탈퇴 버트을 누르면 signOut.php로 이동

<?php

$customerId=$_POST['customerId'];
$customerPassword=$_POST['customerPassword'];
$mysqli=mysqli_connect("localhost","root","1234","customer");

$check="SELECT *FROM customers WHERE customerId='$customerId'";
$result=$mysqli->query($check);
if($result->num_rows==1){
	$row=$result->fetch_array(MYSQLI_ASSOC);
	if($row['customerPassword']==$customerPassword){
		$query="DELETE FROM customers WHERE customerId='$customerId'";
		if($result2=mysqli->query($query)){
			echo "회훤 탈퇴가 정상적으로 되었습니다.";
			echo "<a href=signIn.html></a>";
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