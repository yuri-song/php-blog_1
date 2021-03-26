<?php
require_once "data.odor.php";
?>

<!--주소 뒤에 / 를 붙여주는 코드//
// 오직 index.html, index.html 에도 추가해주세요.//-->
<script>
  if (location.href.indexOf('index.html') === -1 && location.href.indexOf('index.html') === -1 &&
    location.href.substr(-1, 1) !== '/') {
    location.replace(location.href + '/');
  }
</script>

<link rel="stylesheet" href="odor.css">
<script src="odor.js" defer></script>

<!-- 제이쿼리 불러오기 -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- gsap 불러오기 -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/ScrollTrigger.min.js"></script>


