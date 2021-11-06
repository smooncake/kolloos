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
              <li class="content_title03">會員資料<span class="btn btn_secondary_outline"></li>
              <li class="block">
                <ul>
                  <li class="block_list">
                    <div class="block_list_title">姓名</div>
                    <div class="block_list_content"><input type="text" name="" placeholder="請輸入姓名"><span class="red">錯誤訊息</span></div>
                  </li>
                  <li class="block_list">
                    <div class="block_list_title">性別</div>
                    <div class="block_list_content">
                      <input type="radio" id="" name="" value=""><label for="">先生</label>
                      <input type="radio" id="" name="" value=""><label for="">小姐</label>
                    </div>
                  </li>
                  <li class="block_list">
                    <div class="block_list_title">電子信箱</div>
                    <div class="block_list_content"><input type="text" name="" placeholder="請輸入電子信箱"><span class="red">錯誤訊息</span></div>
                  </li>
                  <li class="block_list">
                    <div class="block_list_title">生日</div>
                    <div class="block_list_content cal">
                      <input type="text" name="" placeholder="年 / 月 /日" id="birthday2_datepicker">
                      <span><a href="javascript::"><img src="images/icons/cal.png" alt=""></a>
                      </span>
                    </div>
                  </li>
                  <li class="block_list">
                    <div class="block_list_title">手機號碼</div>
                    <div class="block_list_content"><input type="text" name="" placeholder="請輸手機號碼"><span class="red">錯誤訊息</span></div>
                  </li>
                  <li class="block_list">
                    <div class="block_list_title">訂單備註</div>
                    <div class="block_list_content"><textarea name="textarea" rows="3"></textarea><span class="red">錯誤訊息</span></div>
                  </li>
                  <li class="row btn_product">
                    <span class="col-lg-3 col-md-6 col-6 bootstrap_default btn btn_primary m-0"><a href="menber.php">儲存</a></span>
                  </li>
                </ul>
              </li>
            </ul>
            <!-- END 會員資料 -->
            <!-- 常用收件地址 -->
            <ul>
              <li class="content_title03">常用收件地址<span class="btn btn_secondary_outline"></li>
              <li class="block">
                <ul>
                  <li class="block_list">
                    <div class="block_list_title">寄送地址</div>
                    <div class="block_list_content">台南市北區成德里38鄰北成路442號</div>
                  </li>
                  <li class="block_list">
                    <div class="block_list_title">常用門市</div>
                    <div class="block_list_content">
                      <!-- 超商A -->
                      全家
                      <ul class="block_list_table title">
                        <li data-title="門市名稱:">門市名稱</li>
                        <li data-title="地址:">地址</li>
                        <li data-title="移除:">移除</li>
                      </ul>
                      <ul class="block_list_table">
                        <li data-title="門市名稱:">鄭子寮門市</li>
                        <li data-title="地址:">台南市北區成德里38鄰北成路442號</li>
                        <li data-title="移除:"><a href="javascript:;"><img src="images/icons/delete.png" alt=""></a></li>
                      </ul>
                      <ul class="block_list_table">
                        <li data-title="門市名稱:">六工門市</li>
                        <li data-title="地址:">基隆市七堵區工建路1之22號1之23號1樓</li>
                        <li data-title="移除:"><a href="javascript:;"><img src="images/icons/delete.png" alt=""></a></li>
                      </ul>
                      <div class="btn btn_primary_outline m-0 mt-2 mb-4"><a href="#">新增全家常用門市</a></div>
                      <!-- 超商B -->
                      <br/>7 ELEVEN
                      <ul class="block_list_table title">
                        <li data-title="門市名稱:">門市名稱</li>
                        <li data-title="地址:">地址</li>
                        <li data-title="移除:">移除</li>
                      </ul>
                      <ul class="block_list_table">
                        <li data-title="門市名稱:">三重美慈店</li>
                        <li data-title="地址:">(02)89783174 新北市三重區仁美街96巷1號</li>
                        <li data-title="移除:"><a href="javascript:;"><img src="images/icons/delete.png" alt=""></a></li>
                      </ul>
                      <ul class="block_list_table">
                        <li data-title="門市名稱:">北市國醫店</li>
                        <li data-title="地址:">(02)87925579 台北市內湖區民權東路六段123巷30、32號</li>
                        <li data-title="移除:"><a href="javascript:;"><img src="images/icons/delete.png" alt=""></a></li>
                      </ul>
                      <div class="btn btn_primary_outline m-0 mt-2 mb-4"><a href="#">新增全家常用門市</a></div>
                      <!-- 超商C -->
                      <br/>萊爾富
                      <ul class="block_list_table title">
                        <li data-title="門市名稱:">門市名稱</li>
                        <li data-title="地址:">地址</li>
                        <li data-title="移除:">移除</li>
                      </ul>
                      <div class="btn btn_primary_outline m-0 mt-2 mb-4"><a href="#">新增全家常用門市</a></div>
                    </div>
                  </li>
                  <li class="row btn_product">
                    <span class="col-lg-3 col-md-6 col-6 bootstrap_default btn btn_primary m-0"><a href="menber.php">儲存</a></span>
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