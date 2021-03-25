<?php
require_once "data.php";
require_once "head.php";

$articles = &getArticles();
?>
<link rel="stylesheet" href="css/common.css">
<link rel="stylesheet" href="css/index.css">

<script src="js/common.js" defer></script>
<script src="js/index.js"></script>

// 주소 뒤에 / 를 붙여주는 코드
  // 오직 index.html, index.html 에도 추가해주세요.
  <script>
  if (location.href.indexOf('index.html') === -1 && location.href.indexOf('index.html') === -1 &&
    location.href.substr(-1, 1) !== '/') {
    location.replace(location.href + '/');
  }
</script>

<section class="section-title con-min-width">
  <h1 class="con">
    <span>
      <i class="far fa-check-square"></i>
    </span>
    <span>
      NEW ARTICLES
    </span>
  </h1>
</section>

<section class="section-latest-articles con-min-width">
  <div class="con">
    <div class="article-list-box">
      <ul>
        <?php foreach ( $articles as $article ) { ?>
        <li>
          <h1 class="article-list-box__title"><a href="<?=getArticleLink($article["id"])?>"><?=$article["title"]?></a></h1>
          <div class="article-list-box__reg-date"><?=$article["regDate"]?></div>
          <div class="article-list-box__writer">
            <span><?=$article["writerName"]?></span>
            <span><?=$article["writerAvatar"]?></span>
          </div>
          <div class="article-list-box__tags">
            <?=getArticleTagsHtml($article["id"])?>
          </div>
          <div class="article-list-box__body">
            <script type="text/x-template"><?=$article['body']?></script>
            <div class="toast-ui-viewer"></div>
          </div>
        </li>
        <?php } ?>
      </ul>
    </div>
  </div>
</section>

<?php
require_once "foot.php";
?>