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
              <p>輸入電子信箱</p>
            </li>
            <li class="Now">
              <span>2</span>
              <p>重設密碼</p>
            </li>
            <li>
              <span>3</span>
              <p>設定成功</p>
            </li>
          </ul>
        </div>
        <!-- login表單 -->
        <form action="" class="form_grid form_vertical">
          <div class="Pre-entry form-type2 login-type">
            <h3 class="title">重設密碼 / Reset Password</h3>
            <div class="form_grp">
              <div class="form_content">
                <input type="password">
                <span class="title necessary">重設定新密碼</span>
                <!-- notic -->
                <div class="notice_normal">密碼必須包含：<span class="pass">至少八個字元</span>、<span>大寫與小寫</span>、<span>至少一個數字</span>、<span>至少一個特殊字元</span>
                </div>
              </div>
            </div>
            <div class="form_grp has-danger">
              <div class="form_content">
                <input type="password" value="1234">
                <span class="title necessary">驗證密碼</span>
                <!-- notic -->
                <div class="notice_error">驗證密碼不符</div>
              </div>
            </div>
            <!-- 驗證碼 -->
            <div class="captcha">
              <div class="col code">
                <img src="images/captcha.png" alt="">
                <a href="#">更新驗證碼</a>
              </div>
              <div class="col">
                <div class="form_grp">
                  <input type="text">
                </div>
              </div>
            </div>
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