//로그아웃 버튼을 누르면 실행

<?php
session_start();
$res=session_destroy();
if($res){
	header('Location: ./signIn.php);	
}


?>