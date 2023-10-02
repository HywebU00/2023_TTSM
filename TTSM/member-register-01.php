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
            <li class="Now">
              <span>1</span>
              <p>註冊會員</p>
            </li>
            <li>
              <span>2</span>
              <p>註冊完成</p>
            </li>
          </ul>
        </div>

        <form action="" class="form_grid form_vertical">

          <!-- <div class="notice_info">驗證碼已發送至你的電子郵件地址，aaaa＠gmail.com</div> -->

          <!-- <h2>電子信箱驗證</h2> -->
          <div class="Pre-entry form-type2">
            <div class="form_grp has-danger">
              <div class="form_content">
                <input type="text">
                <span class="title necessary">電子信箱</span>
                <!-- notic -->
                <div class="notice_normal">此電子信箱將成為您的登入帳號</div>
                <div class="notice_warning">已有帳號使用此電子郵件地址。請選擇其他電子郵件地址。或是您想進行<a href="#">登入</a></div>
              </div>
            </div>
            <div class="form_grp">
              <div class="form_content">
                <input type="password">
                <span class="title necessary">密碼</span>
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
            <div class="form_grp">
              <div class="form_content">
                <div class="form_grp">
                  <div class="col-8-4">
                    <div class="container">
                      <div class="col">
                        <div class="form_grp">
                          <div class="form_content">
                            <input type="text">
                            <span class="title">姓名</span>
                          </div>
                        </div>
                      </div>
                      <div class="col">
                        <div class="form_grp">
                          <div class="form_content">
                            <span class="title">稱謂</span>
                            <select name="" id="input" required="required">
                              <option value="" selected="">請選擇項目</option>
                              <option value="">項目1</option>
                              <option value="">項目2</option>
                              <option value="">項目3</option>
                              <option value="">項目4</option>
                            </select>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="form_grp">
              <div class="form_content">
                <div class="address type-select">
                  <div class="container">
                    <div class="col country">
                      <div class="form_grp">
                        <div class="form_content">
                          <span class="title">國家</span>
                          <select name="" id="input" required="required">
                            <option value="" selected="">請選擇項目</option>
                            <option value="">項目1</option>
                            <option value="">項目2</option>
                            <option value="">項目3</option>
                            <option value="">項目4</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="col zone">
                      <div class="form_grp">
                        <div class="form_content">
                          <span class="title">地區</span>
                          <select name="" id="input" required="required">
                            <option value="" selected="">請選擇項目</option>
                            <option value="">項目1</option>
                            <option value="">項目2</option>
                            <option value="">項目3</option>
                            <option value="">項目4</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="col">
                      <div class="form_grp">
                        <div class="form_content">
                          <input type="text">
                          <span class="title">地址</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="form_grp">
              <div class="form_content">
                <div class="phoneCol type-select">
                  <div class="container">
                    <div class="col">
                      <div class="form_grp">
                        <div class="form_content">
                          <span class="title">國家區碼</span>
                          <select name="" id="input" required="required">
                            <option value="" selected="">請選擇項目</option>
                            <option value="">項目1</option>
                            <option value="">項目2</option>
                            <option value="">項目3</option>
                            <option value="">項目4</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="col">
                      <div class="form_grp has-danger">
                        <div class="form_content">
                          <input type="text">
                          <span class="title">手機號碼</span>
                          <!-- notic -->
                          <div id="" class="form-control-feedback text-sm">請填寫必填欄位</div>
                          <div class="notice_success">提示文字</div>
                          <div class="notice_error">提示文字</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="form_grp">
              <div class="form_content">
                <input type="text">
                <span class="title necessary">公司名稱</span>
              </div>
            </div>
            <div class="form_grp">
              <div class="form_content">
                <input type="text">
                <span class="title">公司統編</span>
                <!-- notic -->
                <div class="notice_normal">若沒有統編可不輸入。</div>
              </div>
            </div>
            <div class="form_grp">
              <div class="form_content">
                <input type="text">
                <span class="title">職稱</span>
              </div>
            </div>
            <div class="form_grp">
              <div class="form_content">
                <span class="title">工作屬性</span>
                <select name="" id="input" required="required">
                  <option value="" selected="">請選擇項目</option>
                  <option value="">項目1</option>
                  <option value="">項目2</option>
                  <option value="">項目3</option>
                  <option value="">項目4</option>
                </select>
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