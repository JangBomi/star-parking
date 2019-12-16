<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" sype="text/css" href="stylesheet2.css">
</head>
    <body>

            <?php

            $con=mysqli_connect("localhost","root","1234","customers");
            if(!$con){
            echo "<p>에러 : 데이터베이스를 찾을 수 없습니다. 다시 시도해주세요. </p>";
            exit();
            }
            $abcd=$_POST["plz"];
            $result=mysqli_query($con,"SELECT name,location, parkingID, parkingAverage FROM parking_information WHERE location LIKE '%$abcd%'");

            
            if(mysqli_num_rows($result)==0){
                echo "<tr> 등록된 글이 없습니다.</tr>";
            }
            $resultArray=array();
            $resultArray2=array();
            $resultArray3=array();
            $resultArray4=array();

            while($row=mysqli_fetch_assoc($result)){
                $resultArray[]=$row["name"];
                $resultArray2[]=$row["location"];
                $resultArray3[]=$row["parkingAverage"];
                $resultArray4[]=$row["parkingID"];
            }
            


           $num=count($resultArray);
            for($i=0;$i<$num;$i++){
                ?>
                <div class="container">;
                    <div class="inner">;
                        <form action="showstar.php" method="post">
                        "주차장 이름 : <?php echo $resultArray[$i] ?> 위치 : <?php echo $resultArray2[$i] ?> 평점 : <?php echo $resultArray3[$i] ?> <input name="parkingID_give" value=<?php echo "$resultArray4[$i]" ?> > <input type="submit" value="Click!">"<br> ;
                        </form>  
                    </div>
                </div>
                    
                <?php                   
            }
            

            mysqli_close($con);
            echo "<br><a href='main.html'>메인 화면으로</a>";

            ?>
    </body>
</html>
