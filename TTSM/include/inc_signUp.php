<!DOCTYPE html>
<html lang="">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link type="images/ico" rel="icon" href="images/favicon.ico" />
  <title>Taiwan International Tradeshows</title>
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

  <link rel="stylesheet" href="../css/tts.css">
  <link rel="stylesheet" href="../vendor/slick/slick.css">
  <link rel="stylesheet" href="../vendor/slick/slick-theme.css">
  <!-- jQuery -->
  <script src="../js/jquery-3.3.1.min.js"></script>
  <script src="../vendor/slick/slick.min.js"></script>
  <script src="../vendor/slick/slick-lightbox.js "></script>
  <script src="../js/hyui.js"></script>
  <script src="../js/customize.js"></script>
</head>

<body class="ttsm">
  <!-- modal content -->

  <div class="modal">
    <h2>TTS Member</h2>
    <div class="modalBox modalSignup">
      <h3>Log In</h3>
      <form action="" class="form_grid form_vertical">
        <div class="form_grp has-danger">
          <label for="mustSameAsId" class="form_title">EMAIL</label>
          <div class="form_content form-control-danger">
            <input type="text" placeholder="tim@hyweb.com.tw">
          </div>
        </div>
        <div class="form_grp has-danger">
          <label for="mustSameAsId" class="form_title">密碼</label>
          <div class="form_content form-control-danger">
            <input type="password" id="password" name="password" placeholder="密碼" style="box-shadow: 0 0px 0px 1px #f00 inset !important;" aria-invalid="true" aria-describedby="password-error">
            <div id="password-error" class="form-control-feedback">必須填寫</div>
          </div>
        </div>
        <!-- Google reCAPTCHA 放置區/Start-->
        <div class="form_grp">
          <input type="hidden" id="recaptchaToken" name="recaptchaToken" value="">
          <div id="g-recaptcha">
            <div style="width: 304px; height: 78px;">
              <div><iframe src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6Lc-vj8UAAAAAPw1oI6x-n1rGgD_6K-4LDASQUpd&amp;co=aHR0cHM6Ly93d3cudGFpd2FuZmlzaGVyeS5jb206NDQz&amp;hl=en&amp;v=v1541614764654&amp;theme=light&amp;size=normal&amp;cb=canp0ubk3mya" width="304" height="78" role="presentation" name="a-okx7m3ybsesr" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox"></iframe></div><textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea>
            </div>
          </div>
        </div>

        <!-- Google reCAPTCHA 放置區/End-->
        <div class="form_grp">
          <span class="text-left">
            <input id="checkbox-signup" type="checkbox">
            <label for="checkbox-signup">Remember me</label>
          </span>
          <span class="text-right">
            <a href="javascript:void(0)" id="to-recover" class="text-muted"><span class="icon-help-1"></span>Forgot password?</a>
          </span>
        </div>
        <div class="btn_grp">
          <button type="submit" class="login-button">LOG IN</button>
        </div>
      </form>
    </div>
    <p>New to Taiwan Trade Shows?<a href="#">Sing Up an Account</a></p>




  </div>

</body>

</html>