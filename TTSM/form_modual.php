<!doctype html>
<html lang="zh-Hant">
<?php require_once('include/inc_head.php'); ?>

<body class="ttsm">
  <div class="wrapper">
    <!-- header Start -->
    <?php require_once('include/inc_header.php'); ?>
    <!-- header End -->

    <!-- inner-kv -->
    <?php require_once('include/inc_inner-kv.php'); ?>

    <!-- main Start -->
    <div id="center" class="main innerpage tie-2021">
      <div class="container">
        <!-- <h2>主標題/h2> -->

        <!-- steps -->
        <div class="steps">
          <ul>
            <li class="Now">
              <span>1</span>
              <p>步驟一</p>
            </li>
            <li>
              <span>2</span>
              <p>步驟二</p>
            </li>
            <li>
              <span>3</span>
              <p>步驟三</p>
            </li>
            <li>
              <span>4</span>
              <p>步驟</p>
            </li>
          </ul>
        </div>
        <div class="steps">
          <ul>
            <li class="Pass">
              <span>1</span>
              <p>步驟一</p>
            </li>
            <li class="Now">
              <span>2</span>
              <p>步驟二</p>
            </li>
            <li>
              <span>3</span>
              <p>步驟三</p>
            </li>
            <li>
              <span>4</span>
              <p>步驟四</p>
            </li>
          </ul>
        </div>
        <div class="steps">
          <ul>
            <li class="Pass">
              <span>1</span>
              <p>步驟一</p>
            </li>
            <li class="Pass">
              <span>2</span>
              <p>步驟二</p>
            </li>
            <li class="Now">
              <span>3</span>
              <p>步驟三</p>
            </li>
            <li>
              <span>4</span>
              <p>步驟四</p>
            </li>
          </ul>
        </div>
        <div class="steps">
          <ul>
            <li class="Pass">
              <span>1</span>
              <p>步驟一</p>
            </li>
            <li class="Pass">
              <span>2</span>
              <p>步驟二</p>
            </li>
            <li class="Pass">
              <span>3</span>
              <p>步驟三</p>
            </li>
            <li class="Now">
              <span>4</span>
              <p>步驟四</p>
            </li>
          </ul>
        </div>

        <!-- form 表單 -->
        <form action="" class="form_grid form_vertical">

          <!-- <div class="notice_info">驗證碼已發送至你的電子郵件地址，aaaa＠gmail.com</div> -->

          <h2>input 樣式</h2>
          <div class="Pre-entry form-type2">
            <!-- 1-1、預設狀態 -->
            <div class="form_grp">
              <div class="form_content">
                <input type="text">
                <span class="title necessary">標題</span>
              </div>
            </div>
            <!-- 1-2、未填狀態 ：異常 -->
            <div class="form_grp has-danger">
              <div class="form_content">
                <input type="text">
                <span class="title necessary">標題</span>
                <!-- notic -->
                <div id="" class="form-control-feedback text-sm">請填寫必填欄位</div>
              </div>
            </div>
            <!-- 2、已填狀態 ：正常 -->
            <div class="form_grp">
              <div class="form_content">
                <input type="text" placeholder="placeholder狀態">
                <span class="title necessary">標題</span>
              </div>
            </div>
            <div class="form_grp">
              <div class="form_content">
                <input type="text" value="程式判斷塞value，無資料時拉掉value欄位">
                <span class="title necessary">標題</span>
              </div>
            </div>
            <!-- 3、已填狀態 ：異常。 在 form_grp 後方加 has-danger-->
            <div class="form_grp has-danger">
              <div class="form_content">
                <input type="text" value="文字文字">
                <span class="title necessary">標題</span>
                <!-- notic -->
                <div id="" class="form-control-feedback text-sm">請填寫必填欄位</div>
                <div class="notice_normal">一般灰色提示文字</div>
                <div class="notice_info">提示文字</div>
                <div class="notice_success">提示文字</div>
                <div class="notice_warning">提示文字</div>
                <div class="notice_error">提示文字</div>
              </div>
            </div>

            <hr>

            <h3>密碼</h3>
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
          </div>

          <h2>select 樣式</h2>
          <div class="Pre-entry form-type2">
            <!-- 1、預設狀態 -->
            <div class="form_grp">
              <div class="form_content">
                <span class="title necessary">標題</span>
                <select name="" id="input" required="required">
                  <option value="" selected="">請選擇項目</option>
                  <option value="">項目1</option>
                  <option value="">項目2</option>
                  <option value="">項目3</option>
                  <option value="">項目4</option>
                </select>
              </div>
            </div>
            <!-- 2、異常 -->
            <div class="form_grp has-danger">
              <div class="form_content">
                <span class="title">標題</span>
                <select name="" id="input" required="required">
                  <option value="" selected="">請選擇項目</option>
                  <option value="">項目1</option>
                  <option value="">項目2</option>
                  <option value="">項目3</option>
                  <option value="">項目4</option>
                </select>
                <!-- notic -->
                <div id="" class="form-control-feedback text-sm">請填寫必填欄位</div>
                <div class="notice_info">提示文字</div>
                <div class="notice_success">提示文字</div>
                <div class="notice_warning">提示文字</div>
                <div class="notice_error">提示文字</div>
              </div>
            </div>
          </div>

          <h2>綜合 樣式</h2>
          <div class="Pre-entry form-type2">
            <!-- 1 -->
            <div class="form_grp">
              <div class="form_content">
                <div class="form_grp">
                  <div class="col-6 input-only">
                    <div class="container">
                      <div class="col">
                        <div class="form_grp">
                          <div class="form_content">
                            <input type="text">
                            <span class="title">input標題</span>
                          </div>
                        </div>
                      </div>
                      <div class="col">
                        <div class="form_grp">
                          <div class="form_content">
                            <input type="text">
                            <span class="title">input標題</span>
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
                <div class="form_grp">
                  <div class="col-6 input-only">
                    <div class="container">
                      <div class="col">
                        <div class="form_grp">
                          <div class="form_content">
                            <input type="text">
                            <span class="title">input標題</span>
                          </div>
                        </div>
                      </div>
                      <div class="col">
                        <div class="form_grp">
                          <div class="form_content">
                            <input type="text" value="123">
                            <span class="title">input標題</span>
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
                <div class="form_grp">
                  <div class="col-6">
                    <div class="container">
                      <div class="col">
                        <div class="form_grp">
                          <div class="form_content">
                            <input type="text">
                            <span class="title">input標題</span>
                          </div>
                        </div>
                      </div>
                      <div class="col">
                        <div class="form_grp">
                          <div class="form_content">
                            <span class="title">select</span>
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
                <div class="form_grp">
                  <div class="col-6">
                    <div class="container">
                      <div class="col">
                        <div class="form_grp">
                          <div class="form_content">
                            <input type="text" value="123">
                            <span class="title">input標題</span>
                          </div>
                        </div>
                      </div>
                      <div class="col">
                        <div class="form_grp">
                          <div class="form_content">
                            <span class="title">select</span>
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
            <!-- <div class="form_grp">
                        <div class="form_content">
                            <div class="form_grp">
                                <div class="col-4-8">
                                    <div class="container">
                                        <div class="col">
                                            <div class="form_grp">
                                                <div class="form_content">
                                                    <input type="text">
                                                    <span class="title">input標題</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form_grp">
                                                <div class="form_content">
                                                    <span class="title">select</span>
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
                            <div class="form_grp">
                                <div class="col-8-4">
                                    <div class="container">
                                        <div class="col">
                                            <div class="form_grp">
                                                <div class="form_content">
                                                    <input type="text">
                                                    <span class="title">input標題</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form_grp">
                                                <div class="form_content">
                                                    <span class="title">select</span>
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
                    </div> -->
            <!-- error -->
            <div class="form_grp">
              <div class="form_content">
                <div class="form_grp">
                  <div class="col-4-8">
                    <div class="container">
                      <div class="col">
                        <div class="form_grp has-danger">
                          <div class="form_content">
                            <input type="text">
                            <span class="title">input標題</span>
                          </div>
                          <!-- notic -->
                          <div id="" class="form-control-feedback text-sm">請填寫必填欄位</div>
                        </div>
                      </div>
                      <div class="col">
                        <div class="form_grp">
                          <div class="form_content">
                            <span class="title">select</span>
                            <select name="" id="input" required="required">
                              <option value="" selected="">請選擇項目</option>
                              <option value="">項目1</option>
                              <option value="">項目2</option>
                              <option value="">項目3</option>
                              <option value="">項目4</option>
                            </select>
                          </div>
                          <!-- notic -->
                          <!-- <div id="" class="form-control-feedback text-sm">請填寫必填欄位</div> -->
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="form_grp">
              <div class="form_content">
                <div class="form_grp">
                  <div class="col-4-8">
                    <div class="container">
                      <div class="col">
                        <div class="form_grp has-danger">
                          <div class="form_content">
                            <input type="text">
                            <span class="title">input標題</span>
                          </div>
                          <!-- notic -->
                          <!-- <div id="" class="form-control-feedback text-sm">請填寫必填欄位</div> -->
                        </div>
                      </div>
                      <div class="col">
                        <div class="form_grp has-danger">
                          <div class="form_content">
                            <span class="title">select</span>
                            <select name="" id="input" required="required">
                              <option value="" selected="">請選擇項目</option>
                              <option value="">項目1</option>
                              <option value="">項目2</option>
                              <option value="">項目3</option>
                              <option value="">項目4</option>
                            </select>
                          </div>
                          <!-- notic -->
                          <div id="" class="form-control-feedback text-sm">請填寫必填欄位</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
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
                            <span class="title">input標題</span>
                          </div>
                        </div>
                      </div>
                      <div class="col">
                        <div class="form_grp has-danger">
                          <div class="form_content">
                            <span class="title">select</span>
                            <select name="" id="input" required="required">
                              <option value="" selected="">請選擇項目</option>
                              <option value="">項目1</option>
                              <option value="">項目2</option>
                              <option value="">項目3</option>
                              <option value="">項目4</option>
                            </select>
                            <!-- notic -->
                            <div id="" class="form-control-feedback text-sm">請填寫必填欄位</div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <hr>

            <!-- 2 -->
            <div class="form_grp">
              <div class="form_content">
                <div class="form_grp">
                  <div class="col-4">
                    <div class="container">
                      <div class="col">
                        <div class="form_grp">
                          <div class="form_content">
                            <span class="title">select</span>
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
                            <span class="title">select</span>
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
                            <span class="title">select</span>
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
                <div class="form_grp">
                  <div class="col-4 input-only">
                    <div class="container">
                      <div class="col">
                        <div class="form_grp">
                          <div class="form_content">
                            <input type="text">
                            <span class="title">input標題</span>
                          </div>
                        </div>
                      </div>
                      <div class="col">
                        <div class="form_grp">
                          <div class="form_content">
                            <input type="text" value="123">
                            <span class="title">input標題</span>
                          </div>
                        </div>
                      </div>
                      <div class="col">
                        <div class="form_grp">
                          <div class="form_content">
                            <input type="text">
                            <span class="title">input標題</span>
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
                <div class="form_grp">
                  <div class="col-4">
                    <div class="container">
                      <div class="col">
                        <div class="form_grp">
                          <div class="form_content">
                            <span class="title">select</span>
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
                            <span class="title">input標題</span>
                          </div>
                        </div>
                      </div>
                      <div class="col">
                        <div class="form_grp">
                          <div class="form_content">
                            <span class="title">select</span>
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
                <div class="form_grp">
                  <div class="col-4">
                    <div class="container">
                      <div class="col">
                        <div class="form_grp">
                          <div class="form_content">
                            <span class="title">select</span>
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
                            <input type="text" value="123">
                            <span class="title">input標題</span>
                            <!-- notice -->
                            <div id="" class="form-control-feedback text-sm">請填寫必填欄位</div>
                          </div>
                        </div>
                      </div>
                      <div class="col">
                        <div class="form_grp">
                          <div class="form_content">
                            <span class="title">select</span>
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
            <!-- error -->

            <hr>

            <!-- 電話 -->
            <h3>電話</h3>
            <div class="form_grp">
              <div class="form_content">
                <div class="phoneCol type-input">
                  <div class="container">
                    <div class="col">
                      <div class="form_grp">
                        <div class="form_content">
                          <input type="text">
                          <span class="title">區碼</span>
                        </div>
                      </div>
                    </div>
                    <div class="col">
                      <div class="form_grp">
                        <div class="form_content">
                          <input type="text">
                          <span class="title">電話號碼</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- <div id="" class="form-control-feedback text-sm">請填寫必填欄位</div> -->
              </div>
            </div>
            <div class="form_grp">
              <div class="form_content">
                <div class="phoneCol type-input">
                  <div class="container">
                    <div class="col">
                      <div class="form_grp">
                        <div class="form_content">
                          <input type="text" value="123">
                          <span class="title">區碼</span>
                        </div>
                      </div>
                    </div>
                    <div class="col">
                      <div class="form_grp">
                        <div class="form_content">
                          <input type="text" value="123">
                          <span class="title">電話號碼</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- <div id="" class="form-control-feedback text-sm">請填寫必填欄位</div> -->
              </div>
            </div>
            <div class="form_grp">
              <div class="form_content">
                <div class="phoneCol type-select">
                  <div class="container">
                    <div class="col">
                      <div class="form_grp">
                        <div class="form_content">
                          <span class="title">select</span>
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
                          <span class="title">電話號碼</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- <div id="" class="form-control-feedback text-sm">請填寫必填欄位</div> -->
              </div>
            </div>
            <div class="form_grp">
              <div class="form_content">
                <div class="phoneCol type-select">
                  <div class="container">
                    <div class="col">
                      <div class="form_grp">
                        <div class="form_content">
                          <span class="title">select</span>
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
                          <input type="text" value="123">
                          <span class="title">電話號碼</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- <div id="" class="form-control-feedback text-sm">請填寫必填欄位</div> -->
              </div>
            </div>
            <!-- error -->
            <div class="form_grp">
              <div class="form_content">
                <div class="phoneCol type-input">
                  <div class="container">
                    <div class="col">
                      <div class="form_grp has-danger">
                        <div class="form_content">
                          <input type="text">
                          <span class="title">區碼</span>
                          <div id="" class="form-control-feedback text-sm">請填寫必填欄位</div>
                        </div>
                      </div>
                    </div>
                    <div class="col">
                      <div class="form_grp has-danger">
                        <div class="form_content">
                          <input type="text">
                          <span class="title">電話號碼</span>
                          <!-- notice -->
                          <div id="" class="form-control-feedback text-sm">請填寫必填欄位</div>
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
                      <div class="form_grp has-danger">
                        <div class="form_content">
                          <span class="title">select</span>
                          <select name="" id="input" required="required">
                            <option value="" selected="">請選擇項目</option>
                            <option value="">項目1</option>
                            <option value="">項目2</option>
                            <option value="">項目3</option>
                            <option value="">項目4</option>
                          </select>
                          <!-- notice -->
                          <div id="" class="form-control-feedback text-sm">請填寫必填欄位</div>
                        </div>
                      </div>
                    </div>
                    <div class="col">
                      <div class="form_grp has-danger">
                        <div class="form_content">
                          <input type="text">
                          <span class="title">input標題</span>
                          <!-- notice -->
                          <div id="" class="form-control-feedback text-sm">請填寫必填欄位</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- <div id="" class="form-control-feedback text-sm">請填寫必填欄位</div> -->
              </div>
            </div>
            <div class="form_grp">
              <div class="form_content">
                <div class="phoneCol type-input">
                  <div class="container">
                    <div class="col">
                      <div class="form_grp has-danger">
                        <div class="form_content">
                          <input type="text" value="123">
                          <span class="title">區碼</span>
                          <div id="" class="form-control-feedback text-sm">請填寫必填欄位</div>
                        </div>
                      </div>
                    </div>
                    <div class="col">
                      <div class="form_grp has-danger">
                        <div class="form_content">
                          <input type="text" value="123">
                          <span class="title">電話號碼</span>
                          <!-- notice -->
                          <div id="" class="form-control-feedback text-sm">請填寫必填欄位</div>
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
                      <div class="form_grp has-danger">
                        <div class="form_content">
                          <span class="title">select</span>
                          <select name="" id="input" required="required">
                            <option value="" selected="">請選擇項目</option>
                            <option value="">項目1</option>
                            <option value="">項目2</option>
                            <option value="">項目3</option>
                            <option value="">項目4</option>
                          </select>
                          <!-- notice -->
                          <div id="" class="form-control-feedback text-sm">請填寫必填欄位</div>
                        </div>
                      </div>
                    </div>
                    <div class="col">
                      <div class="form_grp has-danger">
                        <div class="form_content">
                          <input type="text" value="123">
                          <span class="title">input標題</span>
                          <!-- notice -->
                          <div id="" class="form-control-feedback text-sm">請填寫必填欄位</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- <div id="" class="form-control-feedback text-sm">請填寫必填欄位</div> -->
              </div>
            </div>

            <!-- 地址 -->
            <h3>地址</h3>
            <div class="form_grp">
              <div class="form_content">
                <div class="address type-select">
                  <div class="container">
                    <div class="col country">
                      <div class="form_grp">
                        <div class="form_content">
                          <span class="title">select</span>
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
                          <span class="title">select</span>
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
                          <span class="title">區碼</span>
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
                          <span class="title">select</span>
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
                          <span class="title">select</span>
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
                          <input type="text" value="123">
                          <span class="title">區碼</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- error -->
            <div class="form_grp">
              <div class="form_content">
                <div class="address type-select">
                  <div class="container">
                    <div class="col country">
                      <div class="form_grp">
                        <div class="form_content">
                          <span class="title">select</span>
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
                      <div class="form_grp has-danger">
                        <div class="form_content">
                          <span class="title">select</span>
                          <select name="" id="input" required="required">
                            <option value="" selected="">請選擇項目</option>
                            <option value="">項目1</option>
                            <option value="">項目2</option>
                            <option value="">項目3</option>
                            <option value="">項目4</option>
                          </select>
                          <!-- notice -->
                          <div id="" class="form-control-feedback text-sm">請填寫必填欄位</div>
                        </div>
                      </div>
                    </div>
                    <div class="col">
                      <div class="form_grp">
                        <div class="form_content">
                          <input type="text">
                          <span class="title">區碼</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <hr>

            <!-- 驗證碼 -->
            <h3>驗證碼</h3>
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
            <!-- error -->
            <div class="captcha">
              <div class="col code">
                <img src="images/captcha.png" alt="">
                <a href="#">更新驗證碼</a>
              </div>
              <div class="col">
                <div class="form_grp has-danger">
                  <input type="text">
                  <!-- notic -->
                  <div id="" class="form-control-feedback text-sm">驗證碼錯誤</div>
                  <div class="notice_error">驗證碼錯誤</div>
                </div>
              </div>
            </div>
          </div>

          <h2>登入 樣式</h2>
          <!-- add className：login-type -->
          <div class="Pre-entry form-type2 login-type">
            <h3 class="title">AMPA參觀者預登</h3>
            <div class="inner-wrap">
              <!-- 1 -->
              <section>
                <div class="form_grp">
                  <div class="form_content need-check">
                    <input type="text">
                    <span class="title necessary">電子信箱</span>
                    <button type="submit" class="btn-check">email檢查</button>
                    <!-- notic -->
                    <div class="notice_normal">輸入您當初註冊的電子郵件地址</div>
                    <!-- <div class="notice_warning"> 此電子郵件尚未註冊。請選擇其他電子郵件地址。或是您想<a href="#">立即註冊</a></div> -->
                  </div>
                </div>
                <div class="form_grp has-danger">
                  <div class="form_content need-check">
                    <input type="text" value="server@gmail.com">
                    <span class="title necessary">電子信箱</span>
                    <button type="submit" class="btn-check">email檢查</button>
                    <!-- notic -->
                    <div class="notice_normal">輸入您當初註冊的電子郵件地址</div>
                    <div class="notice_warning">此電子郵件尚未註冊。請選擇其他電子郵件地址。或是您想<a href="#">立即註冊</a></div>
                  </div>
                </div>
              </section>
              <!-- 2 -->
              <section>
                <div class="QA">
                  <h4>會員常見問題</h4>
                  <ul>
                    <li><a href="#">登入被鎖住怎麼辨？</a></li>
                    <li><a href="#">會員註冊流程說明？</a></li>
                    <li><a href="#">忘記密碼怎麼辦?</a></li>
                  </ul>
                  <div class="btn_grp">
                    <button type="submit" class="">更多常見問題</button>
                  </div>
                </div>
                <div class="contact">
                  <h4>若有任何問題，歡迎隨時與我們連絡</h4>
                  <p>電子郵件：<a href="#">cycle@taitra.org.tw</a></p>
                </div>
              </section>
            </div>
          </div>
          <div class="Pre-entry form-type2 login-type">
            <h3 class="title">忘記密碼 / Are you having trouble signing in?</h3>
            <div class="inner-wrap">
              <!-- 1 -->
              <section>
                <div class="form_grp">
                  <div class="form_content">
                    <input type="text">
                    <span class="title necessary">電子信箱</span>
                    <!-- notic -->
                    <div class="notice_normal">輸入您當初註冊的電子郵件地址</div>
                    <div class="notice_warning"> 此電子郵件尚未註冊。請選擇其他電子郵件地址。或是您想<a href="#">立即註冊</a></div>
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
                </div>
              </section>
              <!-- 2 -->
              <section>
                <div class="function">
                  <h4>若您尚未成為我們的會員，歡迎註冊成為我們的會員</h4>
                  <div class="btn_grp">
                    <button type="submit" class="">立即註冊</button>
                  </div>
                </div>
                <hr>
                <div class="function">
                  <h4>若您已經是我們的會員，直接進行登入</h4>
                  <div class="btn_grp">
                    <button type="submit" class="">登入</button>
                  </div>
                </div>
                <hr>
                <div class="QA">
                  <h4>會員常見問題</h4>
                  <ul>
                    <li><a href="#">登入被鎖住怎麼辨？</a></li>
                    <li><a href="#">會員註冊流程說明？</a></li>
                    <li><a href="#">忘記密碼怎麼辦?</a></li>
                  </ul>
                  <div class="btn_grp">
                    <button type="submit" class="">更多常見問題</button>
                  </div>
                </div>
              </section>
            </div>
          </div>

          <h2>混合表單 樣式</h2>
          <div class="Pre-entry form-type2">
            <!-- 舊版 混 新版 -->
            <!-- 1 -->
            <div class="form_grp">
              <div class="form_title">
                <span class="number">1.</span><span class="necessary">*</span>報名類型
              </div>
              <div class="form_content">
                <div class="radio_grp form_inline">
                  <label><input name="radioSample" type="radio" value="">選項一</label>
                  <label><input name="radioSample" type="radio" value="">選項二</label>
                  <label><input name="radioSample" type="radio" value="">選項三</label>
                </div>
              </div>
            </div>
            <hr>
            <!-- 2 -->
            <div class="form_grp">
              <div class="form_title">
                <span class="number">2.</span><span class="necessary">*</span>統一編號
              </div>
              <div class="form_content">
                <input type="text" autocomplete="off">
                <span class="title">公司統編</span>
              </div>
            </div>
            <hr>
            <!-- 3 -->
            <div class="form_grp">
              <div class="form_title">
                <span class="number">3.</span><span class="necessary">*</span>選擇參展產品代碼
                <span class="tip">產品代碼最多選擇8項，超過僅以前8項計。</span>
              </div>
              <div class="form_content">
                <div class="form_grp">
                  <!-- 已選擇產品 -->
                  <!-- 2.有項目 -->
                  <div class="Checked_Item" style="display: block;">
                    <h4>已增加項目：</h4>
                    <!-- 1.無項目 -->
                    <div class="Items">
                      <h3>目前無選項</h3>
                    </div>
                    <!-- 2.有項目 -->
                    <div class="Items">
                      <input type="button" class="btn" value="610501 羊肉"><input type="button" class="btn" value="610501 羊肉"><input type="button" class="btn" value="610501 羊肉">
                      <input type="button" class="btn" value="610501 羊肉">
                      <input type="button" class="btn" value="610501 羊肉">
                      <input type="button" class="btn" value="610501 羊肉">
                      <input type="button" class="btn" value="610501 羊肉">
                    </div>
                    <div class="btn_grp">
                      <button type="button" class="btn">全部清除</button>
                    </div>
                  </div>

                  <!-- 查無產品代碼 -->
                  <div class="col-6 add_new">
                    <!-- <button type="button" class="btn switch">沒有合適的項目嗎？您可以自行新增！</button> -->
                    <h4>若查無產品代則填寫中英文產品名稱：</h4>
                    <div class="container">
                      <div class="col">
                        <div class="form_grp">
                          <div class="form_content">
                            <input type="text">
                            <span class="title necessary">中文</span>
                          </div>
                        </div>
                      </div>
                      <div class="col">
                        <div class="form_grp">
                          <div class="form_content">
                            <input type="text">
                            <span class="title necessary">英文</span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="btn_grp">
                      <button type="button" class="btn">新增</button>
                      <!-- <button type="button" class="btn">新增欄位</button>
                                        <button type="button" class="btn">刪除欄位</button> -->
                    </div>
                  </div>

                  <div class="col-6">
                    <h4>搜尋代碼：</h4>
                    <div class="container">
                      <div class="col">
                        <div class="form_grp">
                          <div class="form_content PD-code-search">
                            <input type="text">
                            <span class="title necessary">產品代碼查詢</span>
                            <button type="submit" class="btn-check">查詢</button>
                          </div>
                        </div>
                      </div>
                      <div class="col">
                        <div class="form_grp">
                          <div class="form_content">
                            <span class="title">產業類別</span>
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
                  <!-- 查詢結果 -->
                  <div class="result">
                    <label for="" class="form_title">查詢結果：</label>
                    <!-- 樣式１ -->
                    <div class="form_content check_grp form_inline">
                      <div class="col-3">
                        <div class="container">
                          <div class="col">
                            <label for="mustSameAsId"><input id="" type="checkbox">510501 豬肉</label>
                          </div>
                          <div class="col">
                            <label for="mustSameAsId"><input id="" type="checkbox">510501 豬肉</label>
                          </div>
                          <div class="col">
                            <label for="mustSameAsId"><input id="" type="checkbox">510501 豬肉</label>
                          </div>
                          <div class="col">
                            <label for="mustSameAsId"><input id="" type="checkbox">510501 豬肉</label>
                          </div>
                          <div class="col">
                            <label for="mustSameAsId"><input id="" type="checkbox">510501 豬肉</label>
                          </div>
                          <div class="col">
                            <label for="mustSameAsId"><input id="" type="checkbox">510501 豬肉</label>
                          </div>
                          <div class="col">
                            <label for="mustSameAsId"><input id="" type="checkbox">510501 豬肉</label>
                          </div>
                          <div class="col">
                            <label for="mustSameAsId"><input id="" type="checkbox">510501 豬肉</label>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- 樣式2 -->
                    <div class="form_content result-type2">
                      <div class="col">510501 豬肉</div>
                      <div class="col">510501 豬肉</div>
                      <div class="col">510501 豬肉豬肉豬肉豬肉豬肉</div>
                      <div class="col">510501 豬肉</div>
                      <div class="col">510501 豬肉</div>
                      <div class="col">510501 豬肉</div>
                      <div class="col">510501 豬肉</div>
                      <div class="col">510501 豬肉</div>
                      <div class="col">510501 豬肉</div>
                      <div class="col">510501 豬肉</div>
                    </div>
                  </div>

                </div>
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