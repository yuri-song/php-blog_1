<?php
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


<div class="main">
    <div class="con">
        <div class="main_seaction1">
            <img src="https://cdn.jsdelivr.net/gh/yuri-song/logo_image/mobile1/1.png" alt="">
        </div>
        <div class="main_seaction2"><img src="https://cdn.jsdelivr.net/gh/yuri-song/logo_image/mobile1/2.png" alt="">
            <img src="https://cdn.jsdelivr.net/gh/yuri-song/logo_image/mobile1/2-1.png" alt=""></div>
        <div class="main_seaction3">
            <img src="https://cdn.jsdelivr.net/gh/yuri-song/logo_image/mobile1/3.png" alt="">
            <img src="https://cdn.jsdelivr.net/gh/yuri-song/logo_image/mobile1/4-1.png" alt="">
            <img src="https://cdn.jsdelivr.net/gh/yuri-song/logo_image/mobile1/4-2.png" alt="">
            <img src="https://cdn.jsdelivr.net/gh/yuri-song/logo_image/mobile1/4-3.png" alt="">
        </div>
        <div class="main_seaction4"><img src="https://cdn.jsdelivr.net/gh/yuri-song/logo_image/mobile1/5.png" alt="">
            <img src="https://cdn.jsdelivr.net/gh/yuri-song/logo_image/mobile1/5-1.png" alt="">
        </div>
        <div class="main_seaction5"><img src="https://cdn.jsdelivr.net/gh/yuri-song/logo_image/mobile1/6.png" alt=""></div>
        <div class="main_seaction6">
            <img src="https://cdn.jsdelivr.net/gh/yuri-song/logo_image/mobile1/7.png" alt="">
        </div>
        <div class="main_seaction7">
            <img src="https://cdn.jsdelivr.net/gh/yuri-song/logo_image/mobile1/8.png" alt="">
            <img src="https://cdn.jsdelivr.net/gh/yuri-song/logo_image/mobile1/9.png" alt="">
        </div>
        <div class="main_seaction8">
            <img src="https://github.com/yuri-song/logo_image/blob/master/mobile1/10.png?raw=true" alt="">
        </div>
        <div class="main_seaction9">
            <img src="https://cdn.jsdelivr.net/gh/yuri-song/logo_image/mobile1/11.png" alt="">
        </div>
        <div class="main_seaction10">
            <img src="https://cdn.jsdelivr.net/gh/yuri-song/logo_image/mobile1/12.png" alt="">
        </div>
    </div>
</div>

<?php
require_once "foot.php";
?>