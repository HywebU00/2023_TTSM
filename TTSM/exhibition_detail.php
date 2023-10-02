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
      <div class="cp2">
        <div class="innerBanner">
          <div class="pic">
            <picture>
              <source media="(min-width: 992px)" srcset="./images/demo/demo_banner.jpg">
              <source media="(min-width: 576px)" srcset="./images/demo/demo_banner.jpg">
              <source media="(max-width: 575px)" srcset="./images/demo/demo_banner.jpg">
              <img alt="" src="./images/demo/demo_banner.jpg" data-was-processed="true">
              <noscript><img src="./images/demo/demo_banner.jpg" /></noscript>
            </picture>
          </div>
        </div>
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
                <span itemprop="name">關於貿協</span>
                <meta itemprop="position" content="2">
              </li>
            </ul>
          </div>
        </div>
        <div class="contentBox">
          <div class="container">
            <div class="topInfoBox">
              <div class="picBox">
                <div class="pic">
                  <picture>
                    <source media="(min-width: 992px)" srcset="./images/demo/demo1.png">
                    <source media="(min-width: 576px)" srcset="./images/demo/demo1.png">
                    <source media="(max-width: 575px)" srcset="./images/demo/demo1.png">
                    <img alt="" src="./images/demo/demo1.png" data-was-processed="true">
                    <noscript><img src="./images/demo/demo1.png" /></noscript>
                  </picture>
                </div>
                <div class="linkBox">
                  <a href="#" class="register">Visitor Register</a>
                  <a href="#" class="Apply">Exhibitor Apply</a>
                  <a href="#" class="media">Media Request</a>
                </div>
              </div>
              <div class="infoBox">
                <button class="star" type="button"></button>
                <a class="world" href="#"></a>
                <div class="title">Taichung Int'l Tea, Coffee and Bakery Show (TCFB Taichung)</div>
                <table>
                  <tr>
                    <th>Date：</th>
                    <td>September 13-15, 2018</td>
                  </tr>
                  <tr>
                    <th>Venue：</th>
                    <td>Area D, Taipe World Trade Center (TWTC Hall 1) (5, Xinyi Rd. Sec.5, Taipei 11011, Taiwan)</td>
                  </tr>
                  <tr>
                    <th>Catogory：</th>
                    <td>Medical</td>
                  </tr>
                  <tr>
                    <th>Email：</th>
                    <td>beauty.tw@taitra.org.twal</td>
                  </tr>
                </table>
              </div>
            </div>

            <div class="detailBox">
              <div class="listTitle">Organizer：</div>
              <div class="description">
                <ul>
                  <li>Taiwan Cosmetics Industry Association (TWCIA)</li>
                  <li>Taipei Cosmetics Industry Association (TCIA)</li>
                </ul>
              </div>
              <div class="listTitle">Brief Introduction：</div>
              <div class="description">Tea、Processed Tea & Tea Products、Tea Set & Tea Processing Equipment、Coffee, Coffee Product & Equipment、Tea & Coffee Refreshment、Agricultural Products, Sea Food and Live Stock、Processed Foods、Wine and Drinks、Seasonings & Food、Bakery Products & Ingredients、Bakery Raw Materials、Bakery Equipment、Frozen and Catering Equipment.</div>
            </div>
          </div>
        </div>
      </div>
    </main>
    <?php require_once('include/inc_footer.php'); ?>
  </div>
  <!-- wrapper End -->

  <a href="javascript:;" class="scrollToTop" title="回頁首">回頁首</a>
  <?php require_once('include/inc_jq.php'); ?>
</body>

</html>