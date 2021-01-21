<?php
$siteTitle = "yrong_blog";

// 5번

$article6 = [];
$article6["id"] = 6;
$article6["title"] = "Swiper_루프 적용";
$article6["regDate"] = "2020-01-14 02:00";
$article6["writerName"] = "송유리";
$article6["writerAvatar"] = '<svg viewBox="0 0 264 280"><use xlink:href="#avatar-1"></use></svg>';
$article6["body"] = <<<EOT
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
$article5["body"] = <<<EOT
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
$article4["body"] = <<<EOT
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
$article3["body"] = <<<EOT
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
$article2["body"] = <<<EOT
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
$article1["body"] = <<<EOT
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

if ( isset($articleId) ) {
  $articleVarName = "article" . $articleId;
  $selectedArticle = $$articleVarName;
}