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
              <li class="menber_sidebar_list"><a href="menber.php" class="on">會員資料設定</a></li>
              <li class="menber_sidebar_list"><a href="order_histoty.php">訂單查詢</a></li>
              <li class="menber_sidebar_list"><a href="money_histoty.php">購物金紀錄</a></li>
              <li class="menber_sidebar_list"><a href="coupon_histoty.php">折價券紀錄</a></li>
              <li class="menber_sidebar_list"><a href="password.php">更改密碼</a></li>
            </ul>
          </div>
          <div class="col-lg-10 col-md-12 col-12 bootstrap_default">
            <!-- 會員資料 -->
            <ul>
              <li class="content_title03">會員資料<span class="btn btn_secondary_small_outline"><a href="menber_edit.php">編輯</a></span></li>
              <li class="block">
                <ul>
                  <li class="block_list">
                    <div class="block_list_title">姓名</div>
                    <div class="block_list_content">錢仲一</div>
                  </li>
                  <li class="block_list">
                    <div class="block_list_title">性別</div>
                    <div class="block_list_content">小姐</div>
                  </li>
                  <li class="block_list">
                    <div class="block_list_title">電子信箱</div>
                    <div class="block_list_content">pim79979@gmail.com</div>
                  </li>
                  <li class="block_list">
                    <div class="block_list_title">生日</div>
                    <div class="block_list_content">1989-05-23</div>
                  </li>
                  <li class="block_list">
                    <div class="block_list_title">手機號碼</div>
                    <div class="block_list_content">0929487921</div>
                  </li>
                  <li class="block_list">
                    <div class="block_list_title">訂單備註</div>
                    <div class="block_list_content">訂單備註訂單備註訂單備註訂單備註訂單備註訂單備註訂單備註訂單備註訂單備註訂單備註訂單備註訂單備註訂單備註訂單備註訂單備註訂單備註訂單備註訂單備註訂單備註訂單備註訂單備註訂單備註訂單備註訂單備註</div>
                  </li>
                </ul>
              </li>
            </ul>
            <!-- END 會員資料 -->
            <!-- 常用收件地址 -->
            <ul>
              <li class="content_title03">常用收件地址<span class="btn btn_secondary_small_outline"><a href="menber_edit.php">編輯</a></span></li>
              <li class="block">
                <ul>
                  <li class="block_list">
                    <div class="block_list_title">寄送地址</div>
                    <div class="block_list_content">台南市北區成德里38鄰北成路442號</div>
                  </li>
                  <li class="block_list">
                    <div class="block_list_title">常用門市</div>
                    <div class="block_list_content">
                      全家
                      <ul class="block_list_table title">
                        <li data-title="門市名稱:">門市名稱</li>
                        <li data-title="地址:">地址</li>
                      </ul>
                      <ul class="block_list_table">
                        <li data-title="門市名稱:">鄭子寮門市</li>
                        <li data-title="地址:">台南市北區成德里38鄰北成路442號</li>
                      </ul>
                      <ul class="block_list_table">
                        <li data-title="門市名稱:">六工門市</li>
                        <li data-title="地址:">基隆市七堵區工建路1之22號1之23號1樓</li>
                      </ul>
                      <br/>7 ELEVEN
                      <ul class="block_list_table title">
                        <li data-title="門市名稱:">門市名稱</li>
                        <li data-title="地址:">地址</li>
                      </ul>
                      <ul class="block_list_table">
                        <li data-title="門市名稱:">三重美慈店</li>
                        <li data-title="地址:">(02)89783174 新北市三重區仁美街96巷1號</li>
                      </ul>
                      <ul class="block_list_table">
                        <li data-title="門市名稱:">北市國醫店</li>
                        <li data-title="地址:">(02)87925579 台北市內湖區民權東路六段123巷30、32號</li>
                      </ul>
                      <br/>萊爾富
                      <ul class="block_list_table title">
                        <li data-title="門市名稱:">門市名稱</li>
                        <li data-title="地址:">地址</li>
                      </ul>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
            <!-- END 常用收件地址 -->
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