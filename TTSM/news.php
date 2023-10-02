<!doctype html>
<html lang="zh-Hant">
<?php require_once('include/inc_head.php'); ?>

<body class="ttsm">
  <!-- mobile menu -->
  <div class="wrapper">
    <!-- header Start -->
    <?php require_once('include/inc_header.php'); ?>
    <!-- header End -->
    <!-- main Start -->
    <main class="main innerpage">
      <div class="innerBanner">
        <div class="pic">
          <picture>
            <source media="(min-width: 992px)" srcset="./images/demo/demo_top.jpg">
            <source media="(min-width: 576px)" srcset="./images/demo/demo_top.jpg">
            <source media="(max-width: 575px)" srcset="./images/demo/demo_top.jpg">
            <img alt="" src="./images/demo/demo_top.jpg" data-was-processed="true">
            <noscript><img src="./images/demo/demo_top.jpg" /></noscript>
          </picture>
        </div>
        <div class="pageTitle wow fadeInDown" data-wow-delay=".2s">最新消息</div>
      </div>
      <div class="lpList">
        <div class="breadcrumbBox">
          <div class="container">
            <ul class="breadcrumb" itemscope="" itemtype="https://schema.org/BreadcrumbList">
              <li itemprop="itemListElement" itemscope="" itemtype="//schema.org/ListItem">
                <a href="index.php" title="index" itemprop="item">
                  <span itemprop="name">首頁</span>
                </a>
                <meta itemprop="position" content="1">
              </li>
              <li itemprop="itemListElement" itemscope="" itemtype="//schema.org/ListItem">
                <span itemprop="name">最新消息</span>
                <meta itemprop="position" content="2">
              </li>
            </ul>
          </div>
        </div>
        <div class="contentBox">
          <div class="container">
            <div class="listBox">
              <div class="item">
                <a href="#">
                  <div class="infoBox">
                    <time class="date">May,3 2023</time>
                    <div class="title">「2023台灣國際扣件展」 緊扣全球買主 商機鼎沸</div>
                    <div class="description">全球扣件產業最具影響力的年度盛會之一 -「台灣國際扣件展」實體展今（3）日於高雄展覽館隆重回歸。本屆展覽匯聚產業最強陣容、最新扣件產品、技術和解決方案.......</div>
                  </div>
                  <div class="pic">
                    <picture>
                      <source media="(min-width: 992px)" srcset="./images/demo/news.jpg">
                      <source media="(min-width: 576px)" srcset="./images/demo/news.jpg">
                      <source media="(max-width: 575px)" srcset="./images/demo/news.jpg">
                      <img alt="" src="./images/demo/news.jpg" data-was-processed="true">
                      <noscript><img src="./images/demo/news.jpg" /></noscript>
                    </picture>
                  </div>
                </a>
              </div>
              <div class="item">
                <a href="#">
                  <div class="infoBox">
                    <time class="date">May,3 2023</time>
                    <div class="title">「2023台灣國際扣件展」 緊扣全球買主 商機鼎沸</div>
                    <div class="description">全球扣件產業最具影響力的年度盛會之一 -「台灣國際扣件展」實體展今（3）日於高雄展覽館隆重回歸。本屆展覽匯聚產業最強陣容、最新扣件產品、技術和解決方案.......</div>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="pagination">
        <ul class="page">
          <li class="first">
            <a href="#" title="第一頁">第一頁 </a>
          </li>
          <li class="prev">
            <a href="#" title="回上一頁">回上一頁 </a>
          </li>
          <li class="active"><a href="#">1</a></li>
          <li><a href="#">2</a></li>
          <li><a href="#">3</a></li>
          <li><a href="#">4</a></li>
          <li><a href="#">5</a></li>
          <li><a href="#">6</a></li>
          <li><a href="#">7</a></li>
          <li><a href="#">8</a></li>
          <li><a href="#">9</a></li>
          <li><a href="#">10</a></li>
          <li class="next">
            <a href="#" title="下一頁">下一頁 </a>
          </li>
          <li class="last">
            <a href="#" title="最後一頁">最後一頁 </a>
          </li>
        </ul>
        <div class="total">1 of 18</div>
      </div>

    </main>
    <?php require_once('include/inc_footer.php'); ?>
  </div>
  <!-- wrapper End -->

  <a href="javascript:;" class="scrollToTop" title="回頁首">回頁首</a>
  <?php require_once('include/inc_jq.php'); ?>
</body>

</html>