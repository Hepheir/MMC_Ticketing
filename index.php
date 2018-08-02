<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/2014/REC-html5-20141028/">
<html>
<!-- Author information
* html, php, css, javascript
*   written by hepheir@gmail.com
*
* page designed by
*   dfc7936@naver.com - 박종운
*
* :: MAIN ::
-->
<head>
  <meta charset="utf-8">
	<meta name="author" content="hepheir">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/main.css" media="screen">
  <link rel="stylesheet" href="./css/support.css" media="screen">
  <link rel="shortcut icon" href="./favicon.ico">
  <title>티켓팅 사이트 제작 프로젝트 :: UNIT</title>
</head>
<body onresize="windowResize(3,2)">
  <img id="background" width="100%" height="100%" class="fixed" src="./asset/img/main-background.jpg" alt="" />
  <div class="LayoutWrapClearfix">
    <div class="LayoutWrap absolute">
      <div class="ContentWrap">
        <div class="Header">
          <div class="LogoWrap">
<?php

?>
            <img class="Logo" src="./asset/img/main-mmc_logo.png" alt="" />
          </div>
          <div class="topMenu">
            <div class="topMenuLeft"><a href="./ticketing/">TICKETING</a></div>
            <div class="topMenuCenter"><a href="./introduce/">INTRODUCE</a></div>
            <div class="topMenuRight"><a target="_blank" href="http://project-unit.tistory.com/">TEAM UNIT</a></div>
          </div>
        </div>
        <div class="Content absolute">
          MOVIE<br>MANUFACTURING<br>CLUB
        </div>
      </div>
    </div>
  </div>
  <script type="text/javascript">
    function windowResize(horizontal,vertical){
      if (vertical*window.innerWidth >= horizontal*window.innerHeight){
        document.getElementById('background').style.width = '100%';
        document.getElementById('background').style.height = vertical/horizontal*window.innerWidth+'px';
      }
      else{
        document.getElementById('background').style.width = horizontal/vertical*window.innerHeight+'px';
        document.getElementById('background').style.height = '100%';
      }
    }

   windowResize(3,2);
  </script>
</body>
</html>