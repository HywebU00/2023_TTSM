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
        <div class="pageTitle wow fadeInDown" data-wow-delay=".2s">展覽檔期</div>
      </div>
      <div class="lpSwitch">
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
                <span itemprop="name">展覽檔期</span>
                <meta itemprop="position" content="2">
              </li>
            </ul>
          </div>
        </div>
        <div class="contentBox">
          <div class="container">
            <button class="sideBtn" type="button"></button>
            <div class="sideBox">
              <div class="sideMenu">
                <div class="title">搜尋條件</div>
                <form>
                  <ul>
                    <li><button>展覽類型</button>
                      <ul>
                        <li><input type="checkbox" name="check1" id="check1"><label for="check1">全部</label></li>
                      </ul>
                    </li>
                    <li><button>期間查詢</button>
                      <ul>
                        <li><input type="checkbox" name="check2" id="check2"><label for="check2">即將舉行</label></li>
                      </ul>
                    </li>
                    <li><button>產品別查詢</button>
                      <ul>
                        <li><select name="" id="">
                            <option value="">食品與農、漁業</option>
                          </select></li>
                      </ul>
                    </li>
                  </ul>
                  <button type="submit">送出</button>
                </form>
              </div>
            </div>

            <div class="content">
              <div class="sortBox">
                <button class="blockBtn" type="button"></button>
                <button class="listBtn active" type="button"></button>
              </div>
              <div class="listBox list">
                <div class="item">
                  <a href="#"></a>
                  <div class="pic">
                    <picture>
                      <source media="(min-width: 992px)" srcset="./images/demo/news.jpg">
                      <source media="(min-width: 576px)" srcset="./images/demo/news.jpg">
                      <source media="(max-width: 575px)" srcset="./images/demo/news.jpg">
                      <img alt="" src="./images/demo/news.jpg" data-was-processed="true">
                      <noscript><img src="./images/demo/news.jpg" /></noscript>
                    </picture>
                  </div>
                  <div class="infoBox">
                    <time class="date">2023/06/14-2023/06/17</time>
                    <div class="titleBox">
                      <div class="titlePic"><img src="./images/demo/news.jpg" /></div>
                      <div class="title">「2023台灣國際扣件展」 緊扣全球買主 商機鼎沸</div>
                    </div>
                    <div class="tagBox">
                      <ul>
                        <li>台北南港展覽館1館</li>
                        <li>台北南港展覽館2館</li>
                      </ul>
                    </div>
                    <button class="star" type="button"></button>
                    <button class="switchBtn" type="button"></button>
                  </div>
                  <div class="description">食品加工暨烘焙設備及其零組件、食品包裝相關設備及其零組件、食品整廠製造設備、飲用水及廢棄物處理與消毒設備、飲料酒品生產加工設備、加工技術及添加劑、食品調理烹飪及洗滌設備、食品容器及加工技術設備、農漁畜產品處理機械設備、冷凍倉儲設備、物流運輸設備、食品 & 咖啡 & 茶飲店設備及其相關配件。 生技 / 製藥加工機械及其零組件、生技 / 製藥包裝相關設備及其零組件、生物科技加工 / 製藥技術分析與檢測儀器、實驗室儀器設備、智能自動化機器人及其零組件、製藥 / 生技整廠製造設備及相關配套、醫藥加工技術及廢棄物處理與消毒設備、生技 / 製藥技術、製藥製造原料、農業科技技術及設備等。</div>
                </div>
                <div class="item">
                  <a href="#"></a>
                  <div class="pic">
                    <picture>
                      <source media="(min-width: 992px)" srcset="./images/demo/news.jpg">
                      <source media="(min-width: 576px)" srcset="./images/demo/news.jpg">
                      <source media="(max-width: 575px)" srcset="./images/demo/news.jpg">
                      <img alt="" src="./images/demo/news.jpg" data-was-processed="true">
                      <noscript><img src="./images/demo/news.jpg" /></noscript>
                    </picture>
                  </div>
                  <div class="infoBox">
                    <time class="date">2023/06/14-2023/06/17</time>
                    <div class="titleBox">
                      <div class="titlePic"><img src="./images/demo/news.jpg" /></div>
                      <div class="title">「2023台灣國際扣件展」 緊扣全球買主 商機鼎沸</div>
                    </div>
                    <div class="tagBox">
                      <ul>
                        <li>台北南港展覽館1館</li>
                        <li>台北南港展覽館2館</li>
                      </ul>
                    </div>
                    <button class="star" type="button"></button>
                    <button class="switchBtn" type="button"></button>
                  </div>
                  <div class="description">食品加工暨烘焙設備及其零組件、食品包裝相關設備及其零組件、食品整廠製造設備、飲用水及廢棄物處理與消毒設備、飲料酒品生產加工設備、加工技術及添加劑、食品調理烹飪及洗滌設備、食品容器及加工技術設備、農漁畜產品處理機械設備、冷凍倉儲設備、物流運輸設備、食品 & 咖啡 & 茶飲店設備及其相關配件。 生技 / 製藥加工機械及其零組件、生技 / 製藥包裝相關設備及其零組件、生物科技加工 / 製藥技術分析與檢測儀器、實驗室儀器設備、智能自動化機器人及其零組件、製藥 / 生技整廠製造設備及相關配套、醫藥加工技術及廢棄物處理與消毒設備、生技 / 製藥技術、製藥製造原料、農業科技技術及設備等。</div>
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
  <script type="text/javascript">
    $(function() {
      $('.sortBox button').on('click', function(e) {
        if ($(this).hasClass('blockBtn')) {
          $(this).addClass('active').siblings().removeClass('active')
          $('.content .listBox').addClass('block').removeClass('list');
        } else {
          $(this).addClass('active').siblings().removeClass('active');
          $('.content .listBox').removeClass('block').addClass('list');
        }
      });
      $('.content .switchBtn').off().on('click', function(e) {
        $(this).parents('.listBox').find('.description').not($(this).parent('.infoBox').siblings('.description')).slideUp();
        $('.content .item .switchBtn').removeClass('active');
        $(this).addClass('active');
        $(this).parent().siblings('.description').slideToggle();
      })
      $('.sideBtn').on('click', function(e) {
        $('.sideBox').slideToggle();
      })
    })
  </script>
</body>

</html>