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
              <li class="menber_sidebar_list"><a href="coupon_histoty.php" class="on">折價券紀錄</a></li>
              <li class="menber_sidebar_list"><a href="password.php">更改密碼</a></li>
            </ul>
          </div>
          <div class="col-lg-10 col-md-12 col-12 bootstrap_default">
            <!-- 折價券紀錄 -->
            <ul>
              <li class="content_title03">折價券紀錄</li>
              <li>
                <ul class="block_list_table title">
                  <li data-title="領取時間:">領取時間</li>
                  <li data-title="使用期限:">使用期限</li>
                  <li data-title="標題:">標題</li>
                  <li data-title="優惠:">優惠</li>
                  <li data-title="說明:">說明</li>
                </ul>
                <ul class="block_list_table">
                  <li data-title="領取時間:">2021-10-10</li>
                  <li data-title="使用期限:">2021-10-10</li>
                  <li data-title="標題:">週年慶週年慶週年慶週年慶週年慶</li>
                  <li data-title="優惠:">全面八折</li>
                  <li data-title="說明:">說明說明說明說明說明說明說明說明說明說明說明說</li>
                </ul>
                <ul class="block_list_table">
                  <li data-title="領取時間:">2021-10-10</li>
                  <li data-title="使用期限:">2021-10-10</li>
                  <li data-title="標題:">週年慶週年慶週年慶週年慶週年慶</li>
                  <li data-title="優惠:">全面八折</li>
                  <li data-title="說明:">說明說明說明說明說明說明說明說明說明說明說明說</li>
                </ul>
              </li>
              <!-- END 折價券紀錄 -->
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