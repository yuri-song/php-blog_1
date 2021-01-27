<!DOCTYPE html>
<html lang="ko">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?=$siteTitle?></title>

  <!-- 반응형 -->
  <meta name="viewport" content="width=device-width, user-scalable=no" />

  <!-- 폰트 어썸 불러오기 -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
  <!-- 폰트 어썸 끝 -->

  <!-- 제이쿼리 불러오기 -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <!-- 제이쿼리 끝 -->

  <!-- 토스트 ui 불러오기 -->
  <!-- 하이라이트 라이브러리 추가, 토스트 UI 에디터에서 사용됨 -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/10.4.1/highlight.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/10.4.1/styles/default.min.css">

  <!-- 토스트 UI 에디터, 자바스크립트 코어 -->
  <script src="https://uicdn.toast.com/editor/latest/toastui-editor-all.min.js" defer></script>

  <!-- 코드 미러 라이브러리 추가, 토스트 UI 에디터에서 사용됨 -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.58.3/codemirror.min.css" />
  <!-- 토스트 UI 에디터, CSS 코어 -->
  <link rel="stylesheet" href="https://uicdn.toast.com/editor/latest/toastui-editor.min.css" />

  <!-- 토스트 UI 에디터, 신택스 하이라이트 플러그인 추가 -->
  <script
    src="https://uicdn.toast.com/editor-plugin-code-syntax-highlight/latest/toastui-editor-plugin-code-syntax-highlight.min.js"
    defer>
  </script>
  <!-- 토스트 ui 끝 -->


  <link rel="stylesheet" href="/css/common.css">
  <link rel="stylesheet" href="/css/index.css">

  <script src="/js/common.js"></script>
  <script src="/js/index.js" defer></script>


  <script id="dsq-count-scr" src="//phpblog-5.disqus.com/count.js" async></script>

</head>

<div class="body-content">

  <!-- 탑바 시작 -->
  <header class="top-bar con-min-width visible-md-up">
    <div class="con height-100p flex flex-jc-sb">
      <a href="index.ssghtml.php" class="logo">
        <span>💙</span>
        <span>yrong_blog</span>
      </a>
      <nav class="top-bar__menu-box-1 height-100p">
        <ul class="flex height-100p">
          <li>
            <a href="index.ssghtml.php" class="flex flex-jc-c flex-ai-c height-100p">
              <span><i class="fas fa-home"></i></span>
              <span>HOME</span>
            </a>
          </li>
          <li>
            <a href="about.ssghtml.php" class="flex flex-jc-c flex-ai-c height-100p">
              <span><i class="fas fa-user"></i></span>
              <span>ABOUT</span>
            </a>
          </li>
          <li>
            <a href="pf.ssghtml.php" class="flex flex-jc-c flex-ai-c height-100p">
              <span><i class="fas fa-book"></i></span>
              <span>PORTFOLIO</span>
            </a>
          </li>
          <li>
            <a href="#" class="flex flex-jc-c flex-ai-c height-100p">
              <span><i class="far fa-list-alt"></i></span>
              <span>ARTICLES</span>
            </a>
          </li>
        </ul>
      </nav>
    </div>
  </header>
  <!-- 탑바 끝 -->

  <!-- 모바일 탑바 시작 -->
  <div class="mobile-top-bar-padding visible-sm-down"></div>

  <header class="mobile-top-bar con-min-width visible-sm-down flex">
    <div class="flex-1-0-0 flex">
      <div class="mobile-top-bar__btn-toggle-side-bar flex-as-c">
        <div></div>
        <div></div>
        <div></div>
      </div>
    </div>
    <div>
      <a href="index.ssghtml.php" class="logo height-100p">
        <span>💙</span>
        <span>yrong_blog</span>
      </a>
    </div>
    <div class="flex-1-0-0"></div>
  </header>
  <!-- 모바일 탑바 끝 -->

  <!-- 모바일 사이드 바 시작 -->
  <aside class="mobile-side-bar visible-sm-down">

    <nav class="mobile-side-bar__menu-box-1">
      <ul>
        <li>
          <a href="index.ssghtml.php" class="block">
            <span><i class="fas fa-home"></i></span>
            <span>HOME</span>
          </a>
        </li>
        <li>
          <a href="about.ssghtml.php" class="block">
            <span><i class="far fa-user"></i></span>
            <span>ABOUT</span>
          </a>
        </li>
        <li>
          <a href="pf.ssghtml.php" class="block">
            <span><i class="fas fa-book"></i></span>
            <span>PORTFOLIO</span>
          </a>
        </li>
        <li>
          <a href="#" class="block">
            <span><i class="far fa-list-alt"></i></i></span>
          <span>ARTICLES</span>
        </a>
      </li>
    </ul>
  </nav>

</aside>
<!-- 모바일 사이드 바 끝 -->

<main>