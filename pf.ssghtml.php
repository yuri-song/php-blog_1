<?php
require_once "data.php";
require_once "head.php";
?>
<!--주소 뒤에 / 를 붙여주는 코드//
// 오직 index.html, index.html 에도 추가해주세요.//-->
<script>
  if (location.href.indexOf('index.html') === -1 && location.href.indexOf('index.html') === -1 &&
    location.href.substr(-1, 1) !== '/') {
    location.replace(location.href + '/');
  }
</script>
<link rel="stylesheet" href="css/common.css">
<link rel="stylesheet" href="css/pf.ssghtml.css">
<script src="js/common.js" defer></script>

<section class="section-title con-min-width">
  <h1 class="con">
    <span>
      <i class="fas fa-book-open"></i>
    </span>
    <span>
      PORFOLIO
    </span>
  </h1>
</section>

<div class="con">
  <div class="img">
    <div class="section section-1">
      <div class="img-box">
        <a href="pf/mobile/app-mw.ssghtml.php">
          <img src="https://yuri-song.github.io/logo_image/new/section1.png" alt=""></a>
        <div>
          <span class="name">패션애플리케이션 'WM'</span>
          <div class="bar"></div>
          <a href="pf/mobile/app-mw.ssghtml.php"><button>PROCESS</button></a>
        </div>
      </div>
    </div>
    <div class="section section-2">
      <div class="img-box">
        <a href="pf/web/odor/odor1.ssghtml.php"><img src="https://yuri-song.github.io/logo_image/pro/333.png"
            alt=""></a>
        <div>
          <span class="name">오도어 리뉴얼 디자인</span>
          <div class="bar"></div>
          <a href="pf/web/odor/odor1.ssghtml.php"><button>WEBSITE</button></a>
          <a href="pf/web/odor/odor.ssghtml.php"><button>PROCESS</button></a>
        </div>
      </div>
    </div>
</div>

<div class="img">

<div class="section section-1">
      <div class="img-box">
        <a href="pf/mobile1/index.ssghtml.php">
          <img src="https://yuri-song.github.io/logo_image/mobile1/0.png" alt=""></a>
        <div>
          <span class="name">여행애플리케이션 'TT'</span>
          <div class="bar"></div>
          <a href="pf/mobile1/index.ssghtml.php"><button>PROCESS</button></a>
        </div>
      </div>
    </div>




  </div>
</div>


<?php
require_once "foot.php";
?>