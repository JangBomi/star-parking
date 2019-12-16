<html>
<head>

  </head>
  <body>
<?php session_start();

  $mysqli=mysqli_connect("localhost","root","1234","customers");

  $id=$_POST['id'];
  $pw=$_POST['pw'];

  $check =" SELECT *FROM customers WHERE customerId='$id'";
  $result = $mysqli->query($check);

  if(mysqli_num_rows($result)==1) {
    $row=$result->fetch_array(MYSQLI_ASSOC);
    if($row['customerPassword']==$pw){
        $_SESSION['id']=$id;
        if(isset($_SESSION['id'])){
                echo "<script> alert(\"로그인 되었습니다.\");</script>";
                header("Location:./main삭제.php");

        }
        else{
          echo "session fail";
        }
    }
    else {

        echo "<script> alert(\"아이디 혹은 비밀번호가 잘못되었습니다.\");</script>";

        header("Location:./signIn.php");
      }
    }

  else{

    echo "<script> alert(\"아이디 혹은 비밀번호가 잘못되었습니다.\");</script>";

    header("Location:./signIn.php");
    }
?>
<meta http-equiv="refresh" content="0;url=main삭제.php" />

</body>
</html>
