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
              <li class="menber_sidebar_list"><a href="order_histoty.php" class="on">訂單查詢</a></li>
              <li class="menber_sidebar_list"><a href="money_histoty.php">購物金紀錄</a></li>
              <li class="menber_sidebar_list"><a href="coupon_histoty.php">折價券紀錄</a></li>
              <li class="menber_sidebar_list"><a href="password.php">更改密碼</a></li>
            </ul>
          </div>
          <div class="col-lg-10 col-md-12 col-12 bootstrap_default">
            <!-- 訂單查詢 -->
            <ul>
              <li class="content_title03">訂單查詢</li>
              <li>
                <ul class="block_list_table title">
                  <li data-title="訂購時間:">訂購時間</li>
                  <li data-title="訂單編號:">訂單編號</li>
                  <li data-title="付款方式:">付款方式</li>
                  <li data-title="訂單金額:">訂單金額</li>
                  <li data-title="訂單狀態:">訂單狀態</li>
                </ul>
                <ul class="block_list_table">
                  <li data-title="訂購時間:">2021-10-10</li>
                  <li data-title="訂單編號:"><a href="order_detail.php" class="red"><img src="images/icons/zoom.png" alt="">202110100008</a></li>
                  <li data-title="付款方式:">線上刷卡付款</li>
                  <li data-title="訂單金額:">999,999</li>
                  <li data-title="訂單狀態:">尚未付款</li>
                </ul>
                <ul class="block_list_table">
                  <li data-title="訂購時間:">2021-10-10</li>
                  <li data-title="訂單編號:"><a href="order_detail.php" class="red"><img src="images/icons/zoom.png" alt="">202110100008</a></li>
                  <li data-title="付款方式:">線上刷卡付款</li>
                  <li data-title="訂單金額:">999,999</li>
                  <li data-title="訂單狀態:">尚未付款</li>
                </ul>
              </li>
              <!--pagenum-->
              <div >
                <ul class="pagenum">
                  <li class="btnleft">
                    <a href="javascript:;"></i></a>
                  </li>
                  <li class="center">
                    <a class="on" title="第1頁">1</a>
                    <a href="#" title="第2頁">2</a>
                    <a href="#" title="第3頁">3</a>
                    <a href="#" title="第4頁">4</a>
                    <a href="#" title="第5頁">5</a>
                  </li>
                  <li class="btnright">
                    <a href="javascript:;"></i></a>
                  </li>
                </ul>
              </div>
              <!--END pagenum-->
            </ul>
            <!-- END 會員資料 -->
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