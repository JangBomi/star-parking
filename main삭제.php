<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
<meta name="description" content=""/>
<title>별별주차장</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link href="./main.css" rel="stylesheet"/>
<script src="./main.js" type="text/javascript"></script>

</head>
<body>
<!---상단 navigation--->
<div class="slide" id="slide5" data-slide="5" data-stellar-background-ratio="0.5">
   <div class="container clearfix">
      <div class="content grid_2 contactype active" id="contact-mapClick">
         <div class="icon-map">
         </div>
         <p>
            메인
         </p>
      </div>
      <div class="content grid_2 contactype" id="contact-carClick">
         <div class="icon-car">
         </div>
         <p>
            리뷰등록
         </p>
      </div>
      <div class="content grid_2 contactype" id="contact-busClick">
         <div class="icon-bus">
         </div>
         <p>
            근처 주차장
         </p>
      </div>
      <div class="content grid_2 contactype" id="contact-bikeClick">
         <div class="icon-bike-2">
         </div>
         <p>
            로그인
         </p>
      </div>
      <div class="content grid_2 contactype" id="contact-phoneClick">
         <div class="icon-phone">
         </div>
         <p>
            회원가입
         </p>
      </div>
      <div class="content grid_2 contactype omega" id="contact-mailClick">
         <div class="icon-mail">
         </div>
         <p>
            문의사항
         </p>
      </div>
      <div class="content grid_12 contactmap" id="contact-map">
         <div class="grid_4">
            <h2>별별주차장</h2>
            <p class="information">
               <span class="icon-location"> 원하는 주차장의 별점을 확인해 보세요</span>
               <p class="information">
                  <span class="icon-phone-2"></span> 현재위치가 지도에 표시됩니다
               </p>
               <a class="btn" href="https://goo.gl/maps/8GlbZ" target="_blank">지도로 이동하기</a>
               <div class="clear">
               </div>
            </div>
            <div class="grid_8 omega">
               <div id="map" style="width:100%; height:100%;"></div>
                    <script>
// Initialize and add the map
function initMap() {
  // The location of Uluru
    var uluru = {lat: 37.566459 , lng:126.948388};
  // The map, centered at Uluru
  var map = new google.maps.Map(
      document.getElementById('map'), {zoom: 15, center: uluru});
  // The marker, positioned at Uluru
  var marker = new google.maps.Marker({position: uluru, map: map});
}
                    </script>

            </div>
         </div>
         <!---리뷰등록--->
         <div class="content grid_12 contactmap dn" id="contact-car">
            <div class="grid_4">
               <h2>리뷰등록</h2>
               <p class="information">
                  <span class="icon-location"> 주차장의 리뷰를 등록해주세요
                  <p class="information">
                     <span class="icon-phone-2"></span> 당신의 리뷰는 많은사람에게 도움이 됩니다
                  </p>
                  <br>
                  <br>
                  <div class="btn">
                     <a href="http://city.hitouchsoft.com/">위도 경도 찾기</a>
                  </div>
               </div>

               <div class="grid_8 omega">
                  <div class="grid_6 omega">
                     <form class="form-review" action="새리뷰html_to_db.php" method="POST">

                           <label>주차장 이름</label><input type="text" name="name" placeholder="주차장 이름을 입력해주세요"/>
                           <labe>주소</label><input tyep="text" name ="address" placeholder="주소를 입력해주세요"/>
                           <label>위도</label><input type="text" name="locationX" placeholder="위도를 입력해주세요"/>
                           <label>경도</label><input type="text" name="locationY" placeholder="경도를 입력해주세요"/>

                     <section id="main_section">
                     <strong>주차난이도 </strong>
                     <ul class="rate-area">
                        <input type="radio" id="5-star" name="rating" value="5"/><label for="5-star" title="Amazing">5 stars</label>
                        <input type="radio" id="4-star" name="rating" value="4"/><label for="4-star" title="Good">4 stars</label>
                        <input type="radio" id="3-star" name="rating" value="3"/><label for="3-star" title="Average">3 stars</label>
                        <input type="radio" id="2-star" name="rating" value="2"/><label for="2-star" title="Not Good">2 stars</label>
                        <input type="radio" id="1-star" name="rating" value="1"/><label for="1-star" title="Bad">1 star</label>
                     </ul>
                     </section>
                     <section id="main_section">
                     <strong>주차장 위치만족도 </strong>
                     <ul class="rate-area">
                        <input type="radio" id="5-star2" name="rating2" value="5"/><label for="5-star2" title="Amazing">5 stars</label>
                        <input type="radio" id="4-star2" name="rating2" value="4"/><label for="4-star2" title="Good">4 stars</label>
                        <input type="radio" id="3-star2" name="rating2" value="3"/><label for="3-star2" title="Average">3 stars</label>
                        <input type="radio" id="2-star2" name="rating2" value="2"/><label for="2-star2" title="Not Good">2 stars</label>
                        <input type="radio" id="1-star2" name="rating2" value="1"/><label for="1-star2" title="Bad">1 star</label>
                     </ul>
                     </section>
                     <section id="main_section">
                     <strong>주차장 청결도 </strong>
                     <ul class="rate-area">
                        <input type="radio" id="5-star3" name="rating3" value="5"/><label for="5-star3" title="Amazing">5 stars</label>
                        <input type="radio" id="4-star3" name="rating3" value="4"/><label for="4-star3" title="Good">4 stars</label>
                        <input type="radio" id="3-star3" name="rating3" value="3"/><label for="3-star3" title="Average">3 stars</label>
                        <input type="radio" id="2-star3" name="rating3" value="2"/><label for="2-star3" title="Not Good">2 stars</label>
                        <input type="radio" id="1-star3" name="rating3" value="1"/><label for="1-star3" title="Bad">1 star</label>
                     </ul>
                     </section>
                     <section id="main_section">
                     <strong>주차장 요금만족도</strong>
                     <ul class="rate-area">
                        <input type="radio" id="5-star4" name="rating4" value="5"/><label for="5-star4" title="Amazing">5 stars</label>
                        <input type="radio" id="4-star4" name="rating4" value="4"/><label for="4-star4" title="Good">4 stars</label>
                        <input type="radio" id="3-star4" name="rating4" value="3"/><label for="3-star4" title="Average">3 stars</label>
                        <input type="radio" id="2-star4" name="rating4" value="2"/><label for="2-star4" title="Not Good">2 stars</label>
                        <input type="radio" id="1-star4" name="rating4" value="1"/><label for="1-star4" title="Bad">1 star</label>
                     </ul>
                     </section>
                     <section id="main_section">
                     <form style="width: auto;">
                        <input name="review" type="text" size=50 placeholder="리뷰를 작성해주세요!" style="width:100%; height: 6rem;">
                        <input type="submit" name="btn" value="작성">
                     </form>
                     </section>
                        </form>
                  </div>
               </div>

            </div>

            <div class="content grid_12 contactmap dn" id="contact-bus">
               <div class="grid_4">
                  <h2>근처 주차장 TOP20</h2>
                  <p class="information">
                     <span class="icon-location"> 근처에 있는 주차장의
                     <p class="information">
                        <span class="icon-phone-2">TOP 20까지 확인해보세요 </span>
                     </p>
                     <br>
                     <br>
                     <form action="search.php" method="post">
                        지역을 입력하세요 : <input type="text" name="plz">
                        <input type="submit" value="검색">
                     </form>
                  </div>
                  <div class="grid_8 omega">
                     <div class="grid_6 omega" id="scroll2">

                     </div>
                  </div>
               </div>
               <!---로그인--->
               <div class="content grid_12 contactmap dn" id="contact-bike">
                  <div class="grid_4">
                     <h2>로그인</h2>
                     <p class="information">
                        <span class="icon-location"> 로그인하세요<br>
                        </span>로그인하고 더 많은 혜택을 즐겨보세요!
                     </p>
                     <br>
                     <br>
                     <div class="btn">
                        <span class="icon-checkmark"></span>회원가입
                     </div>
                  </div>
                  <div class="grid_8 omega">
                     <div class="grid_6 omega">
                        <div class="wrapper">
                           <form class="form-signin" action="signIn.php" method="POST">
                              <img class="mb-4" src="./logo.svg" alt="" width="200" height="200"/>


                              <h1 class="h3 mb-3 font-weight-bold">별별주차장</h1>
                              <br/>
                              <?php
                              session_cache_expire(60);

                              @session_start();
                              include_once "signIn.php";
                              $user_id=$_SESSION['id'];


                              if(!$user_id){?>
                                  <input type="text" id="inputText" name="id" class="form-control" placeholder="ID" required autofocus/>
                              <input type="password" id="inputPassword" name="pw" class="form-control" placeholder="Password" required/>
                              <button class="btn btn-lg btn-primary btn-block" type="submit" value="login">
                              로그인 </button>
                              <?php
                              }

                              else{
                                 echo "<p>$user_id님은 이미 로그인하고 계십니다!";
                                 echo "<a href=\"logout.php\">[로그아웃]</a></p>"
                              ;}
                              ?>

                           </form>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="content grid_12 contactmap dn" id="contact-phone">
                  <div class="grid_4">
                     <h2>회원가입</h2>
                     <p class="information">
                        <span class="icon-location"> 별별주차장</span>의 회원이 되어보세요!
                     </p>
                  </div>
                  <div class="grid_8 omega">
                     <div class="col-lg-8 col-sm-10 center-block container">
                        <form id="register-form" action="signup.php" method="post">
                           <div class="col-lg-8 col-sm-10 center-block">
                              <label>아이디</label><span class="status" id="username-status"></span>
                              <input type="text" name="username" placeholder="아이디를 입력하세요" data-validation="req len:3-15 regex:username">
                              <div class="col-xs-12 no-padding">
                                 <div class="row">
                                    <div class="col-xs-12">
                                       <label>성별</label><span class="status" id="gender-status"></span>
                                    </div>
                                    <div class="col-xs-4 radio-buttons">
                                       <label>여성</label>
                                       <input type="radio" name="gender" value="female" data-validation="radio:gender">
                                    </div>
                                    <div class="col-xs-4 radio-buttons">
                                       <label>남성</label>
                                       <input type="radio" name="gender" value="male" data-validation="radio:gender">
                                    </div>
                                    <div class="col-xs-4 radio-buttons">
                                       <label>체크안함</label>
                                       <input type="radio" name="gender" value="other" data-validation="radio:gender">
                                    </div>
                                 </div>
                              </div>
                              <label>이메일</label><span class="status" id="email-status"></span>
                              <input type="email" name="email" placeholder="이메일을 입력하세요" data-validation="len:0-50 regex:email or:phone:Phone">
                              <label>나이</label><span class="status" id="phone-status"></span>
                              <input type="tel" name="phone" placeholder="나이를 입력하세요" data-validation="len:0-15 regex:phone or:email:Email"/>
                              <label>비밀번호</label><span class="status" id="password-status"></span>
                              <input type="password" name="password" placeholder="비밀번호를 입력하세요" data-validation="req len:8-25">
                              <label>비밀번호 확인</label><span class="status" id="confirmpassword-status"></span>
                              <input type="password" name="confirmpassword" placeholder="비밀번호를 다시 입력하세요" data-validation="req len:8-25 match:password">
                              <button class="submit" type="submit" id="register-submit">제출하기</button>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
               <div class="content grid_12 contactmap dn" id="contact-mail">
                  <div class="grid_4">
                     <h2>E-MAIL</h2>
                     <p class="information">
                        <span class="icon-location"> ADRESS: </span>star.parking@gmail.com
                     </p>
                  </div>
                  <div class="grid_8 omega">
                     <div style="padding: 1rem 5rem 1rem 5rem; display:flex; flex-direction:column;">
                        <p style="padding-left:0; font-size:large; font-weight: bold; color:black;">
                           Contact us!
                        </p>
                        <p style="padding-left:0; font-size:large; font-weight: bold; color:black;">
                           문의 사항은 아래 이메일 주소로 연락주세요.
                        </p>
                        <div id="map" style="width:500px;height:400px;"></div>
   <script type="text/javascript" src="//dapi.kakao.com/v2/maps/sdk.js?appkey=9bddf42ea4a4ff250059d3f386e064eb"></script>
   <script>
      var container = document.getElementById('map');
      var options = {
         center: new kakao.maps.LatLng(33.450701, 126.570667),
         level: 3
      };

      var map = new kakao.maps.Map(container, options);
   </script>
                        <div class="grid_6 omega">
                           <a href="mailto:star.parking@gmail.com?Subject=Hello" class="btn">star.parking@gmail.com</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="clear">
            </div>
            <footer class="content grid_12">
            <div class="btn2">
               &copy; Copyright 별별주차장
            </div>
            <hr/>
            </footer>
            <div class="clear">
            </div>
         </div>
      </div><script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCUDH4nV0fOKBbRG_fQ3pnM7Hx6WQeaa6Q&callback=initMap"></script>
      </body>
      <script src="./FormValidation.js"></script>
      <script>
            FormValidation(document.getElementById("register-form"));
      </script>

</html>
