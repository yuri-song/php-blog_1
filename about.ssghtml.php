<?php
require_once "data.php";
$pageTitle = "{$siteTitle} -  소개";
$pageDescription = "송유리에 대한 소개페이지 입니다.";

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

<link rel="stylesheet" href="common.css">
<script src="js/common.js" defer></script>

<section class="section-title con-min-width">
  <h1 class="con">
    <span>
      <i class="fas fa-fire"></i>
    </span>
    <span>
      NOTICE
    </span>
  </h1>
</section>
<?php
require_once "foot.php";
?>