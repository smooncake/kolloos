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
            <!-- 忘記密碼 -->
            <ul>
              <li class="content_title03">忘記密碼</li>
              <li class="block">
                <ul>
                  <li class="block_list">
                    <div class="block_list_title"></div>
                    <div class="block_list_content red">*為必填資料 *註冊後可用E-mail或手機號碼登入</div>
                  </li>
                  <li class="block_list">
                    <div class="block_list_title"><span class="red">*</span><label>電子信箱</label></div>
                    <div class="block_list_content"><input type="text" name="" placeholder="請輸入電子信箱"><span class="red">錯誤訊息</span></div>
                  </li>
                  <li class="block_list">
                    <div class="block_list_title"><span class="red">*</span><label>手機號碼</label></div>
                    <div class="block_list_content"><input type="text" name="" placeholder="範例:0910123456"><span class="red">錯誤訊息</span></div>
                  </li>
                </ul>
              </li>
            </ul>
            <div class="row btn_product mt-5">
              <span class="col-lg-4 col-md-6 col-6 bootstrap_default btn btn_primary m-auto"><a href="javascript:;">確認送出</a></span>
            </div>
            <!-- END 忘記密碼 -->
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