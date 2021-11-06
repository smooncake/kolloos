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
      <div class="row content">
        <div class="col-lg-2 col-md-12 col-12 bootstrap_default menber_sidebar">
          <ul>
            <li class="menber_sidebar_list"><a href="menber.php">會員資料設定</a></li>
            <li class="menber_sidebar_list"><a href="order_histoty.php">訂單查詢</a></li>
            <li class="menber_sidebar_list"><a href="money_histoty.php">購物金紀錄</a></li>
            <li class="menber_sidebar_list"><a href="coupon_histoty.php">折價券紀錄</a></li>
            <li class="menber_sidebar_list"><a href="password.php" class="on">更改密碼</a></li>
          </ul>
        </div>
        <div class="col-lg-10 col-md-12 col-12 bootstrap_default">
          <!-- 更改密碼 -->
          <ul>
            <li class="content_title03">更改密碼<span class="btn btn_secondary_outline"></li>
            <li class="block">
              <ul>
                <li class="block_list">
                  <div class="block_list_title">舊密碼</div>
                  <div class="block_list_content"><input type="text" name="" placeholder="請輸入舊密碼"><span class="red">錯誤訊息</span></div>
                </li>
                <li class="block_list">
                  <div class="block_list_title">修改密碼</div>
                  <div class="block_list_content"><input type="password" name="" placeholder="密碼請使用8-16碼內英文或數字"><span class="red">錯誤訊息</span></div>
                </li>
                <li class="block_list">
                  <div class="block_list_title">確認密碼</div>
                  <div class="block_list_content"><input type="password" name="" placeholder="需與修改密碼一致"><span class="red">錯誤訊息</span></div>
                </li>
                <li class="row btn_product">
                  <span class="col-lg-3 col-md-6 col-6 bootstrap_default btn btn_primary m-0"><a href="menber.php">儲存</a></span>
                </li>
              </ul>
            </li>
          </ul>
          <!-- END 更改密碼 -->
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