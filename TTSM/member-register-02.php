<!doctype html>
<html lang="zh-Hant">
<?php require_once('include/inc_head.php'); ?>

<body class="ttsm">
  <div class="wrapper">
    <!-- header Start -->
    <?php require_once('include/inc_header.php'); ?>
    <!-- header End -->

    <!-- main Start -->
    <div id="center" class="main innerpage tie-2021">
      <!-- inner-kv -->
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
      </div>
      <div class="container">
        <!-- <h2>主標題/h2> -->

        <!-- steps -->
        <div class="steps">
          <ul>
            <li class="Pass">
              <span>1</span>
              <p>註冊會員</p>
            </li>
            <li class="Now">
              <span>2</span>
              <p>驗證電子郵件</p>
            </li>
            <li>
              <span>3</span>
              <p>註冊完成</p>
            </li>
          </ul>
        </div>

        <form action="" class="form_grid form_vertical">

          <div class="notice_info">驗證碼已發送至你的電子郵件地址，aaaa＠gmail.com</div>

          <!-- <h2>電子信箱驗證</h2> -->
          <div class="Pre-entry">
            <!-- 7 -->
            <div class="form_grp">
              <div class="form_title">驗證碼</div>
              <div class="form_content">
                <input type="text" placeholder="請輸入驗證碼">
                <!-- <div id="name-danger" class="form-control-feedback text-sm">請填寫必填欄位</div> -->
              </div>
            </div>
            <div class="remark">驗證碼有效時間<b>14：34</b><button type="submit" class="">重送驗證碼</button></div>
          </div>
          <!-- btn -->
          <div class="btn_grp">
            <button type="submit" class="login-button">確定 / Continue</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- main End -->

  <!-- footer -->
  <?php require_once('include/inc_footer.php'); ?>

  </div>
  <!-- wrapper End -->
  <a href="javascript:;" class="scrollToTop" title="回頁首">回頁首</a>
  <?php require_once('include/inc_jq.php'); ?>
</body>

</html>