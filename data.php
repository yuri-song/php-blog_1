<?php
require_once "util.php";
require_once "app.php";

$siteTitle = "yrong_blog";
$siteDescription = "yrong 블로그 입니다.";
$siteKeywordsStr = "JS, SWIPER";
$siteName = "송유리";
$siteThumbUrl = "https://yuri-song.github.io/logo_image/image/main.jpg";

// 태그정보 시작
$tagInfos = [

  "JS" => [
    "pageThumbUrl" => "https://yuri-song.github.io/logo_image/image/main1.jpg",
    "pageDescription" => "자바스크립트 SWIPER 강좌 입니다.",
  ],
];

// 태그정보 끝

/// 게시물 7

$article9 = [];
$article9["id"] = 9;
$article9["title"] = "Swiper_마우스 휠 적용";
$article9["regDate"] = "2020-02-18 16:37";
$article9["writerName"] = "송유리";
$article9["writerAvatar"] = '<svg viewBox="0 0 264 280"><use xlink:href="#avatar-1"></use></svg>';
$article9["tags"] = ["JS" , "SWIPER"];
$article9["pageTitle"] = "Swiper_마우스 휠 적용";
$article9["body"] = <<<'EOT'
# Swiper Auto (HTML)
```html
<section class="section-1">
<div>
<h1>스와이퍼 1</h1>
<div class="my-slider my-slider-1">
<div class="swiper-container">
<div class="swiper-wrapper">
<div class="swiper-slide">
<div class="img-box"><img src="https://picsum.photos/id/201/1200/500" alt=""></div>
</div>
<div class="swiper-slide">
<div class="img-box"><img src="https://picsum.photos/id/202/1200/500" alt=""></div>
</div>
<div class="swiper-slide">
<div class="img-box"><img src="https://picsum.photos/id/203/1200/500" alt=""></div>
</div>
<div class="swiper-slide">
<div class="img-box"><img src="https://picsum.photos/id/204/1200/500" alt=""></div>
</div>
<div class="swiper-slide">
<div class="img-box"><img src="https://picsum.photos/id/206/1200/500" alt=""></div>
</div>
<div class="swiper-slide">
<div class="img-box"><img src="https://picsum.photos/id/208/1200/500" alt=""></div>
</div>
<div class="swiper-slide">
<div class="img-box"><img src="https://picsum.photos/id/209/1200/500" alt=""></div>
</div>
<div class="swiper-slide">
<div class="img-box"><img src="https://picsum.photos/id/210/1200/500" alt=""></div>
</div>
</div>
<div class="swiper-pagination"></div>
</div>
</div>
</section>
</<!--REPLACE:script-->>
```

# Swiper Auto (js)
```javascript
function MySlider__init(no) {
var mySwiper = new Swiper(".my-slider-" + no + " .swiper-container", {
direction: "vertical",
slidesPerView: 1,
spaceBetween: 30,
mousewheel: true,
pagination: {
el: ".swiper-pagination",
clickable: true
}
});
}

MySlider__init(1);

```

# 실습
```codepen
https://codepen.io/yurisong/embed/abmEGLm?height=265&theme-id=light&default-tab=html,result
```

# 참고영상
```youtube
BxV8W3seIY4
```

EOT;

/// 게시물 6

$article8 = [];
$article8["id"] = 8;
$article8["title"] = "Swiper_키보드 버튼 적용";
$article8["regDate"] = "2020-02-09 16:37";
$article8["writerName"] = "송유리";
$article8["writerAvatar"] = '<svg viewBox="0 0 264 280"><use xlink:href="#avatar-1"></use></svg>';
$article8["tags"] = ["JS" , "SWIPER"];
$article8["pageTitle"] = "Swiper_키보드 버튼 적용";
$article8["body"] = <<<'EOT'
# Swiper Auto (HTML)
```html
<section class="section-1">
<div>
<h1>스와이퍼 1</h1>
<div class="my-slider my-slider-1">
<div class="swiper-container">
<div class="swiper-wrapper">
<div class="swiper-slide">
<div class="img-box"><img src="https://picsum.photos/id/201/1200/500" alt=""></div>
</div>
<div class="swiper-slide">
<div class="img-box"><img src="https://picsum.photos/id/202/1200/500" alt=""></div>
</div>
<div class="swiper-slide">
<div class="img-box"><img src="https://picsum.photos/id/203/1200/500" alt=""></div>
</div>
<div class="swiper-slide">
<div class="img-box"><img src="https://picsum.photos/id/204/1200/500" alt=""></div>
</div>
<div class="swiper-slide">
<div class="img-box"><img src="https://picsum.photos/id/206/1200/500" alt=""></div>
</div>
<div class="swiper-slide">
<div class="img-box"><img src="https://picsum.photos/id/208/1200/500" alt=""></div>
</div>
<div class="swiper-slide">
<div class="img-box"><img src="https://picsum.photos/id/209/1200/500" alt=""></div>
</div>
<div class="swiper-slide">
<div class="img-box"><img src="https://picsum.photos/id/210/1200/500" alt=""></div>
</div>
</div>
<div class="swiper-pagination"></div>
<!-- Add Arrows -->
<div class="swiper-button-next"></div>
<div class="swiper-button-prev"></div>
</div>
</div>
</section>
</<!--REPLACE:script-->>
```

# Swiper Auto (js)
```javascript
function MySlider__init(no) {
var mySwiper = new Swiper('.my-slider-' + no + ' .swiper-container', {
sslidesPerView: 1,
spaceBetween: 30,
keyboard: {
enabled: true,
},
pagination: {
el: '.swiper-pagination',
clickable: true,
},
navigation: {
nextEl: '.swiper-button-next',
prevEl: '.swiper-button-prev',
},
});
}

MySlider__init(1);

```

# 실습
```codepen
https://codepen.io/yurisong/embed/KKgZRqj?height=265&theme-id=light&default-tab=html,result
```

# 참고영상
```youtube
Vx312XUGZgg
```

EOT;

/// 게시물 5 
$article7 = [];
$article7["id"] = 7;
$article7["title"] = "Swiper_Auto 적용";
$article7["regDate"] = "2020-01-29 12:43";
$article7["writerName"] = "송유리";
$article7["writerAvatar"] = '<svg viewBox="0 0 264 280"><use xlink:href="#avatar-1"></use></svg>';
$article7["tags"] = ["JS" , "SWIPER"];
$article7["pageTitle"] = "Swiper_Auto 적용";
$article7["body"] = <<<'EOT'
# Swiper Auto (HTML)
```html
<section class="section-1">
<div>
<h1>스와이퍼 1</h1>
<div class="my-slider my-slider-1">
<div class="swiper-container">
<div class="swiper-wrapper">
<div class="swiper-slide">
<div class="img-box"><img src="https://picsum.photos/id/201/1200/500" alt=""></div>
</div>
<div class="swiper-slide">
<div class="img-box"><img src="https://picsum.photos/id/202/1200/500" alt=""></div>
</div>
<div class="swiper-slide">
<div class="img-box"><img src="https://picsum.photos/id/203/1200/500" alt=""></div>
</div>
<div class="swiper-slide">
<div class="img-box"><img src="https://picsum.photos/id/204/1200/500" alt=""></div>
</div>
<div class="swiper-slide">
<div class="img-box"><img src="https://picsum.photos/id/206/1200/500" alt=""></div>
</div>
<div class="swiper-slide">
<div class="img-box"><img src="https://picsum.photos/id/208/1200/500" alt=""></div>
</div>
<div class="swiper-slide">
<div class="img-box"><img src="https://picsum.photos/id/209/1200/500" alt=""></div>
</div>
<div class="swiper-slide">
<div class="img-box"><img src="https://picsum.photos/id/210/1200/500" alt=""></div>
</div>
</div>
<div class="swiper-pagination"></div>
<!-- Add Arrows -->
<div class="swiper-button-next"></div>
<div class="swiper-button-prev"></div>
</div>
</div>
</section>
</<!--REPLACE:script-->>
```

# Swiper Auto (js)
```javascript
function MySlider__init(no) {
var mySwiper = new Swiper('.my-slider-' + no + ' .swiper-container', {
spaceBetween: 30,
centeredSlides: true,
autoplay: {
delay: 2500,
disableOnInteraction: false,
},
pagination: {
el: '.swiper-pagination',
clickable: true,
},
navigation: {
nextEl: '.swiper-button-next',
prevEl: '.swiper-button-prev',
},
});
}

MySlider__init(1);

```

# 실습
```codepen
https://codepen.io/yurisong/embed/jOMYxmR?height=265&theme-id=light&default-tab=html,result
```

# 참고영상
```youtube
yB1J6Mby7LU
```

EOT;


// 게시물 4
$article6 = [];
$article6["id"] = 6;
$article6["title"] = "Swiper_루프 적용";
$article6["regDate"] = "2020-01-14 02:00";
$article6["writerName"] = "송유리";
$article6["writerAvatar"] = '<svg viewBox="0 0 264 280"><use xlink:href="#avatar-1"></use></svg>';
$article6["tags"] = ["JS" , "SWIPER"];
$article6["pageTitle"] = "Swiper_루프 적용";
$article6["body"] = <<<'EOT'
# Swiper 루프 (HTML)
```html
<<!--REPLACE:script-->>
<section class="section-1">
<div>
<h1>스와이퍼 1</h1>
<div class="my-slider my-slider-1">
<div class="swiper-container">
<div class="swiper-wrapper">
<div class="swiper-slide">
<div class="img-box"><img src="https://picsum.photos/id/201/1200/500" alt=""></div>
    </div>
<div class="swiper-slide">
<div class="img-box"><img src="https://picsum.photos/id/202/1200/500" alt=""></div>
    </div>
<div class="swiper-slide">
<div class="img-box"><img src="https://picsum.photos/id/203/1200/500" alt=""></div>
    </div>
<div class="swiper-slide">
<div class="img-box"><img src="https://picsum.photos/id/204/1200/500" alt=""></div>
    </div>
<div class="swiper-slide">
<div class="img-box"><img src="https://picsum.photos/id/206/1200/500" alt=""></div>
    </div>
<div class="swiper-slide">
<div class="img-box"><img src="https://picsum.photos/id/208/1200/500" alt=""></div>
    </div>
<div class="swiper-slide">
<div class="img-box"><img src="https://picsum.photos/id/209/1200/500" alt=""></div>
    </div>
<div class="swiper-slide">
<div class="img-box"><img src="https://picsum.photos/id/210/1200/500" alt=""></div>
    </div>
    </div>
<div class="swiper-pagination"></div>
<!-- Add Arrows -->
<div class="swiper-button-next"></div>
<div class="swiper-button-prev"></div>
    </div>
    </div>
    </div>
    </section>
    </<!--REPLACE:script-->>
```

# Swiper 루프 (js)
```javascript
function MySlider__init(no) {
var mySwiper = new Swiper('.my-slider-' + no + ' .swiper-container', {
slidesPerView: 1,
spaceBetween: 30,
loop: true,
pagination: {
el: '.swiper-pagination',
clickable: true,
},
navigation: {
nextEl: '.swiper-button-next',
prevEl: '.swiper-button-prev',
},
});
}

MySlider__init(1);

```

# 실습
```codepen
https://codepen.io/yurisong/embed/VwKyxbz?height=265&theme-id=light&default-tab=html,result
```

# 참고영상
```youtube
1IPWQ0wlVoo
```

EOT;



//4번

$article5 = [];
$article5["id"] = 5;
$article5["title"] = "Swiper_분수 적용";
$article5["regDate"] = "2020-01-14 02:00";
$article5["writerName"] = "송유리";
$article5["writerAvatar"] = '<svg viewBox="0 0 264 280"><use xlink:href="#avatar-1"></use></svg>';
$article5["tags"] = ["JS" , "SWIPER"];
$article5["pageTitle"] = "Swiper_분수 적용";
$article5["body"] = <<<'EOT'
# Swiper 분수 (HTML)
```html
<<!--REPLACE:script-->>
<section class="section-1">
  <div>
    <h1>스와이퍼 1</h1>
    <div class="my-slider my-slider-1">
      <div class="swiper-container">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="img-box"><img src="https://picsum.photos/id/201/1200/500" alt=""></div>
                  </div>
          <div class="swiper-slide">
            <div class="img-box"><img src="https://picsum.photos/id/202/1200/500" alt=""></div>
                  </div>
          <div class="swiper-slide">
            <div class="img-box"><img src="https://picsum.photos/id/203/1200/500" alt=""></div>
                  </div>
          <div class="swiper-slide">
            <div class="img-box"><img src="https://picsum.photos/id/204/1200/500" alt=""></div>
                  </div>
          <div class="swiper-slide">
            <div class="img-box"><img src="https://picsum.photos/id/206/1200/500" alt=""></div>
                  </div>
          <div class="swiper-slide">
            <div class="img-box"><img src="https://picsum.photos/id/208/1200/500" alt=""></div>
                  </div>
          <div class="swiper-slide">
            <div class="img-box"><img src="https://picsum.photos/id/209/1200/500" alt=""></div>
                  </div>
          <div class="swiper-slide">
            <div class="img-box"><img src="https://picsum.photos/id/210/1200/500" alt=""></div>
                  </div>
                  </div>
        <div class="swiper-pagination"></div>
        <!-- Add Arrows -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
                  </div>
                  </div>
                  </div>
                  </section>
                  </<!--REPLACE:script-->>
```

# Swiper 분수 (js)
```javascript
function MySlider__init(no) {
var mySwiper = new Swiper('.my-slider-' + no + ' .swiper-container', {
pagination: {
el: '.swiper-pagination',
type: 'fraction',
},
navigation: {
nextEl: '.swiper-button-next',
prevEl: '.swiper-button-prev',
},
});
}

MySlider__init(1);

```

# 실습
```codepen
https://codepen.io/yurisong/embed/QWKardo?height=265&theme-id=light&default-tab=html,result
```

# 참고영상
```youtube
1IPWQ0wlVoo
```

EOT;


// 3번

$article4 = [];
$article4["id"] = 4;
$article4["title"] = "Swiper_게이지바 적용";
$article4["regDate"] = "2020-01-13 00:57";
$article4["writerName"] = "송유리";
$article4["writerAvatar"] = '<svg viewBox="0 0 264 280"><use xlink:href="#avatar-1"></use></svg>';
$article4["tags"] = ["JS" , "SWIPER"];
$article4["pageTitle"] = "Swiper_게이지바 적용";
$article4["body"] = <<<'EOT'
# Swiper 게이지바 (HTML)
```html
<<!--REPLACE:script-->>
<section class="section-1">
<div>
<h1>스와이퍼 1</h1>
<div class="my-slider my-slider-1">
<div class="swiper-container">
<div class="swiper-wrapper">
<div class="swiper-slide">
<div class="img-box"><img src="https://picsum.photos/id/201/1200/500" alt=""></div>
    </div>
<div class="swiper-slide">
<div class="img-box"><img src="https://picsum.photos/id/202/1200/500" alt=""></div>
    </div>
<div class="swiper-slide">
<div class="img-box"><img src="https://picsum.photos/id/203/1200/500" alt=""></div>
    </div>
<div class="swiper-slide">
<div class="img-box"><img src="https://picsum.photos/id/204/1200/500" alt=""></div>
    </div>
<div class="swiper-slide">
<div class="img-box"><img src="https://picsum.photos/id/206/1200/500" alt=""></div>
    </div>
<div class="swiper-slide">
<div class="img-box"><img src="https://picsum.photos/id/208/1200/500" alt=""></div>
    </div>
<div class="swiper-slide">
<div class="img-box"><img src="https://picsum.photos/id/209/1200/500" alt=""></div>
    </div>
<div class="swiper-slide">
<div class="img-box"><img src="https://picsum.photos/id/210/1200/500" alt=""></div>
    </div>
    </div>
<div class="swiper-pagination"></div>
<!-- Add Arrows -->
<div class="swiper-button-next"></div>
<div class="swiper-button-prev"></div>
    </div>
    </div>
    </div>
    </section>
    </<!--REPLACE:script-->>
```

# Swiper 게이지바 (js)
```javascript
function MySlider__init(no) {
var mySwiper = new Swiper('.my-slider-' + no + ' .swiper-container', {
pagination: {
el: '.swiper-pagination',
type: 'progressbar',
},
navigation: {
nextEl: '.swiper-button-next',
prevEl: '.swiper-button-prev',
},
});
}

MySlider__init(1);

```

# 실습
```codepen
https://codepen.io/yurisong/embed/GRjYWvL?height=265&theme-id=light&default-tab=html,result
```

# 참고영상
```youtube
1IPWQ0wlVoo
```

EOT;


// 2번 

$article3 = [];
$article3["id"] = 3;
$article3["title"] = "Swiper_페이지바 적용";
$article3["regDate"] = "2020-01-13 00:57";
$article3["writerName"] = "송유리";
$article3["writerAvatar"] = '<svg viewBox="0 0 264 280"><use xlink:href="#avatar-1"></use></svg>';
$article3["tags"] = ["JS" , "SWIPER"];
$article3["pageTitle"] = "Swiper_페이지바 적용";
$article3["body"] = <<<'EOT'
# Swiper 페이지바 (HTML)
```html
<<!--REPLACE:script-->>
<section class="section-1">
<div>
<h1>스와이퍼 1</h1>
<div class="my-slider my-slider-1">
<div class="swiper-container">
  <div class="swiper-wrapper">
    <div class="swiper-slide">
      <div class="img-box"><img src="https://picsum.photos/id/201/1200/500" alt=""></div>
            </div>
    <div class="swiper-slide">
      <div class="img-box"><img src="https://picsum.photos/id/202/1200/500" alt=""></div>
            </div>
    <div class="swiper-slide">
      <div class="img-box"><img src="https://picsum.photos/id/203/1200/500" alt=""></div>
            </div>
    <div class="swiper-slide">
      <div class="img-box"><img src="https://picsum.photos/id/204/1200/500" alt=""></div>
            </div>
    <div class="swiper-slide">
      <div class="img-box"><img src="https://picsum.photos/id/206/1200/500" alt=""></div>
            </div>
    <div class="swiper-slide">
      <div class="img-box"><img src="https://picsum.photos/id/208/1200/500" alt=""></div>
            </div>
    <div class="swiper-slide">
      <div class="img-box"><img src="https://picsum.photos/id/209/1200/500" alt=""></div>
            </div>
    <div class="swiper-slide">
      <div class="img-box"><img src="https://picsum.photos/id/210/1200/500" alt=""></div>
            </div>
            </div>
  <div class="swiper-pagination"></div>
            </div>
            </div>
            </div>
            </section>
            </<!--REPLACE:script-->>
```

# Swiper 페이지바 (js)
```javascript
function MySlider__init(no) {
var mySwiper = new Swiper('.my-slider-' + no + ' .swiper-container', {
pagination: {
el: '.swiper-pagination',
},
});
}

MySlider__init(1);

```

# 실습
```codepen
https://codepen.io/yurisong/embed/YzGJZNO?height=265&theme-id=light&default-tab=html,result
```

# 참고영상
```youtube
G4gjZ97lx14
```

EOT;


// 1번

$article2 = [];
$article2["id"] = 2;
$article2["title"] = "Swiper_버튼 적용";
$article2["regDate"] = "2020-01-12 17:50";
$article2["writerName"] = "송유리";
$article2["writerAvatar"] = '<svg viewBox="0 0 264 280"><use xlink:href="#avatar-1"></use></svg>';
$article2["tags"] = ["JS" , "SWIPER"];
$article2["pageTitle"] = "Swiper_버튼 적용";
$article2["body"] = <<<'EOT'
# Swiper 버튼 (HTML)
```html
<<!--REPLACE:script-->>
<section class="section-1">
  <div>
    <h1>스와이퍼 1</h1>
    <div class="my-slider my-slider-1">
      <div class="swiper-container">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="img-box"><img src="https://picsum.photos/id/201/1200/500" alt=""></div>
                  </div>
          <div class="swiper-slide">
            <div class="img-box"><img src="https://picsum.photos/id/202/1200/500" alt=""></div>
                  </div>
          <div class="swiper-slide">
            <div class="img-box"><img src="https://picsum.photos/id/203/1200/500" alt=""></div>
                  </div>
          <div class="swiper-slide">
            <div class="img-box"><img src="https://picsum.photos/id/204/1200/500" alt=""></div>
                  </div>
          <div class="swiper-slide">
            <div class="img-box"><img src="https://picsum.photos/id/206/1200/500" alt=""></div>
                  </div>
          <div class="swiper-slide">
            <div class="img-box"><img src="https://picsum.photos/id/208/1200/500" alt=""></div>
                  </div>
          <div class="swiper-slide">
            <div class="img-box"><img src="https://picsum.photos/id/209/1200/500" alt=""></div>
                  </div>
          <div class="swiper-slide">
            <div class="img-box"><img src="https://picsum.photos/id/210/1200/500" alt=""></div>
                  </div>
                  </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
                  </div>
                  </div>
                  </div>
                  </section>
                  </<!--REPLACE:script-->>
```

# Swiper 버튼 (js)
```javascript
function MySlider__init(no) {
var mySwiper = new Swiper('.my-slider-' + no + ' .swiper-container', {
navigation: {
nextEl: '.swiper-button-next',
prevEl: '.swiper-button-prev',
},
});
}

MySlider__init(1);

```

# 실습
```codepen
https://codepen.io/yurisong/embed/XWjxbPQ?height=265&theme-id=light&default-tab=html,result
```

# 참고영상
```youtube
1IPWQ0wlVoo
```

EOT;



// 0번 
$article1 = [];
$article1["id"] = 1;
$article1["title"] = "Swiper 사용법";
$article1["regDate"] = "2020-01-12 14:49";
$article1["writerName"] = "송유리";
$article1["writerAvatar"] = '<svg viewBox="0 0 264 280"><use xlink:href="#avatar-1"></use></svg>';
$article1["tags"] = ["JS" , "SWIPER"];
$article1["pageTitle"] = "Swiper 사용법";
$article1["body"] = <<<'EOT'
# Swiper 사용법(HTML)
```html
<<!--REPLACE:script-->>
<!-- Slider main container -->
<div class="swiper-container">
  <!-- Additional required wrapper -->
  <div class="swiper-wrapper">
    <!-- Slides -->
    <div class="swiper-slide">Slide 1</div>
    <div class="swiper-slide">Slide 2</div>
    <div class="swiper-slide">Slide 3</div>
    ...
                  </div>
  <!-- If we need pagination -->
  <div class="swiper-pagination"></div>

  <!-- If we need navigation buttons -->
  <div class="swiper-button-prev"></div>
  <div class="swiper-button-next"></div>

  <!-- If we need scrollbar -->
  <div class="swiper-scrollbar"></div>
                  </div>
                  </<!--REPLACE:script-->>
```
# Swiper 사용법(JS)
```js
var mySwiper = new Swiper('.swiper-container', {
// Optional parameters
direction: 'vertical',
loop: true,

// If we need pagination
pagination: {
el: '.swiper-pagination',
},

// Navigation arrows
navigation: {
nextEl: '.swiper-button-next',
prevEl: '.swiper-button-prev',
},

// And if we need scrollbar
scrollbar: {
el: '.swiper-scrollbar',
},
})
```
# 실습
```codepen
https://codepen.io/yurisong/embed/qBaJBeV?height=265&theme-id=light&default-tab=html,result
```

# 참고 영상
```youtube
nmo45DTXEcM
```
EOT;

// 데이터 정리
$maxArticleId = getMaxArticleId();

$_allArticles = [];
$_tags = [];

for ( $i = $maxArticleId; $i > 0; $i-- ) {
    $varName = 'article' . $i;

    if ( isset($$varName) ) {
        $_allArticles[${$varName}['id']] = &$$varName;

        foreach ( $_allArticles[${$varName}['id']]['tags'] as $tag ) {
            $_tags[] = $tag;
        }
    }
}

$_tags = array_unique($_tags);
sort($_tags);

$_allArticlesByTag = [];

foreach ( $_tags as $tag ) {
    $_allArticlesByTag[$tag] = [];

    foreach ( $_allArticles as $article ) {
        if ( in_array($tag, $article['tags']) ) {
            $_allArticlesByTag[$tag][$article['id']] = $article;
        }
    }
}