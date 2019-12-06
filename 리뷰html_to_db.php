<?php

$mysqli=mysqli_connect("localhost","root","1234","customers");

if(isset($_POST['save']))
{
	$parkingReview=$_POST['parkingReview'];
	$parkingDifficulty=$_POST['parkingDifficulty'];
	$parkingCleanliness=$_POST['parkingCleanliness'];
	$parkingCostSati=$_POST['parkingCostSati'];
	$IDkey=$_POST['IDKey'];
	$parkingID=$_POST['parkingID'];

	$query="INSERT INTO parking_review(parkingReview,parkingDifficulty,parkingCleanliness,parkingCostSati,IDKey,parkingID) VALUES($parkingReview,$parkingDifficulty,$parkingCleanliness,$parkingCostSati,$IDKey,$parkingID);
	
	$stmt=$mysqli->prepare($query);
	$stmt->execute();
	if($query)
	{
		echo "리뷰가 등록되었습니다.";
	}
}

$avgparkingReviewquery="SELECT AVG(parkingReview) from "

$tmp_query="SELECT AVG(), AVG(),  from parkingreview where parkingID = 19"

//groupby //사용자가 주차장 이름을 선택하면(들어가면?) 그것에 key값을 찾아내서 query연결하고 값들을 select avg 하거나 print해서 자바스트립트에 전달

//키 값에 따라 총 평점을 계산 + 아이디 ->메인(버튼에다가 연결) -> 키 값에 해당하는 정보 출력
?>