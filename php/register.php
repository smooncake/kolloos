<!DOCTYPE html>
<html debug="ture" lang="zh_tw">
  <head>
    <?php include_once("include/meta.php");?>
  </head>
  <body>
    <!-- HEADER -->
    <?php include_once("include/header.php");?>
    <!--END HEADER-->
    <div id="wrapper">
      <!-- MENBER -->
      <section id="menber">
        <div class="content">
          <div class="menber_content">
            <!-- 加入會員 -->
            <ul>
              <li class="content_title03">加入會員</li>
              <li class="block">
                <ul>
                  <li class="block_list">
                    <div class="block_list_title"></div>
                    <div class="block_list_content red">*為必填資料 *註冊後可用E-mail或手機號碼登入</div>
                  </li>
                  <li class="block_list">
                    <div class="block_list_title"><span class="red">*</span><label>姓名</label></div>
                    <div class="block_list_content"><input type="text" name="" placeholder="請輸入姓名"><span class="red">錯誤訊息</span></div>
                  </li>
                  <li class="block_list">
                    <div class="block_list_title"><span class="red">*</span><label>性別</label></div>
                    <div class="block_list_content">
                      <input type="radio" id="" name="" value=""><label for="">先生</label>
                      <input type="radio" id="" name="" value=""><label for="">小姐</label>
                    </div>
                  </li>
                  <li class="block_list">
                    <div class="block_list_title"><span class="red">*</span><label>電子信箱</label></div>
                    <div class="block_list_content"><input type="text" name="" placeholder="請輸入電子信箱"><span class="red">錯誤訊息</span></div>
                    <div class="block_list_note"><label><input type="checkbox" name="" value="">訂閱電子報</label></div>
                  </li>
                  <li class="block_list">
                    <div class="block_list_title"><label>生日</label></div>
                    <div class="block_list_content cal">
                      <input type="text" name="" placeholder="年 / 月 /日" id="birthday2_datepicker">
                      <span><a href="javascript::"><img src="images/icons/cal.png" alt=""></a>
                      </span>
                    </div>
                  </li>
                  <li class="block_list">
                    <div class="block_list_title"><span class="red">*</span><label>手機號碼</label></div>
                    <div class="block_list_content"><input type="text" name="" placeholder="範例:0910123456"><span class="red">錯誤訊息</span></div>
                  </li>
                  <li class="block_list">
                    <div class="block_list_title"><span class="red">*</span><label>密碼</label></div>
                    <div class="block_list_content"><input type="password" name="" placeholder="密碼請使用8-16碼內英文或數字"><span class="red">錯誤訊息</span></div>
                  </li>
                  <li class="block_list">
                    <div class="block_list_title"><span class="red">*</span><label>確認密碼</label></div>
                    <div class="block_list_content"><input type="password" name="" placeholder="請確認密碼"><span class="red">錯誤訊息</span></div>
                  </li>
                  <li class="block_list">
                    <div class="block_list_title"><span class="red">*</span><label>聯絡地址</label></div>
                    <div class="block_list_address">
                      <ul class="block_list_address_detail">
                        <li>
                          <select>
                            <option>縣市</option>
                            <option>縣市A</option>
                            <option>縣市B</option>
                            <option>縣市C</option>
                          </select>
                        </li>
                        <li>
                          <select>
                            <option>鄉鎮區</option>
                            <option>鄉鎮區A</option>
                            <option>鄉鎮區B</option>
                            <option>鄉鎮區C</option>
                          </select>
                        </li>
                        <li class="input">
                          <input type="text" name="" placeholder="請輸入地址">
                        </li>
                      </ul>
                      <div class="red">錯誤訊息</div>
                    </div>
                  </li>
                  <li class="block_list">
                    <div class="block_list_title"><span class="red">*</span><label>聯絡地址</label></div>
                    <div class="block_list_address">
                      <ul class="block_list_address_detail">
                        <li class="input">
                          <input type="text" name="" placeholder="請輸入地址">
                        </li>
                        <li><img src="images/code.jpg"></li>
                        <li><a href="javascript:;"><img src="images/refresh.png" alt=""></a></li>
                      </ul>
                      <div class="red">錯誤訊息</div>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
            <div class="mt-3"><label><input type="checkbox" name="" value="">我同意kollos客戶<a href="privacy.php" target="_blank" class="red">隱私權政策</a>與<a href="terms.php" target="_blank" class="red">客戶服務條款</a></label></div>
            <div class="row btn_product mt-5">
              <span class="col-lg-4 col-md-6 col-6 bootstrap_default btn btn_primary m-auto"><a href="menber.php">註冊會員</a></span>
            </div>
            <!-- END 加入會員 -->
          </div>
        </div>
      </section>
      <!--END MENBER-->
    </div>
    <!--END WRAPPER-->
    <!-- FOOTER -->
    <?php include_once("include/footer.php");?>
    <!--END FOOTER-->
  </body>
</html>