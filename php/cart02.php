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
         <section id="cart">
            <ul class="cart_step">
               <li class="active">
                  <span>1</span>
                  <p>款項確認中</p>
               </li>
               <li class="active">
                  <span>2</span>
                  <p>付款與運送方式</p>
               </li>
               <li>
                  <span>3</span>
                  <p>完成訂購</p>
               </li>
            </ul>
            <div class="row content">
               <div class="col-lg-9 col-md-12 col-12 bootstrap_default cart_content">
                  <!-- 訂購人資訊 -->
                  <ul>
                    <li class="content_title04">訂購人資訊<span class="btn btn_secondary_outline"></li>
                    <li class="block">
                      <ul>
                        <li class="block_list">
                          <div class="block_list_title">姓名</div>
                          <div class="block_list_content"><input type="text" name="" placeholder="請輸入姓名"><span class="red">錯誤訊息</span></div>
                        </li>
                        <li class="block_list">
                          <div class="block_list_title">電子信箱</div>
                          <div class="block_list_content"><input type="text" name="" placeholder="請輸入電子信箱"><span class="red">錯誤訊息</span></div>
                        </li>
                        <li class="block_list">
                          <div class="block_list_title">手機號碼</div>
                          <div class="block_list_content"><input type="text" name="" placeholder="請輸手機號碼"><span class="red">錯誤訊息</span></div>
                        </li>
                        <li class="block_list">
                          <div class="block_list_title">訂單備註</div>
                          <div class="block_list_content"><textarea name="textarea" rows="3"></textarea><span class="red">錯誤訊息</span></div>
                        </li>
                      </ul>
                    </li>
                  </ul>
                  <!-- END 訂購人資訊 -->
                  <!-- 請選擇付款方式 -->
                  <ul>
                    <li class="content_title04">請選擇付款方式<span class="btn btn_secondary_outline"></li>
                    <li class="">
                      <ul>
                        <li class="block_list">
                          <div class="block_list_content">
                              <input type="radio" id="" name="" value=""><label for="">線上刷卡付款(VISA、Mastercard、JCB)</label>
                          </div>
                        </li>
                        <li class="block_list">
                          <div class="block_list_content">
                              <input type="radio" id="" name="" value=""><label for="">貨到付款</label>
                          </div>
                        </li>
                        <li class="block_list">
                          <div class="block_list_content">
                              <input type="radio" id="" name="" value=""><label for="">虛擬帳號付款(ATM轉帳)</label>
                          </div>
                        </li>
                        <li class="block_list">
                          <div class="block_list_content">
                              <input type="radio" id="" name="" value=""><label for="">超商代碼付款(ibon、FamiPort、Life-ET)</label>
                          </div>
                        </li>
                        <li class="message message_yellow">請注意：因應宅配物流下午5點後、國定假日與星期日無配送服務，恕無法指定到貨日期及時間，請留週一至週六白天可收件的地址。</li>
                      </ul>
                    </li>
                  </ul>
                  <!-- END 請選擇付款方式 -->
                  <!-- 發票資訊 -->
                  <ul>
                    <li class="content_title04">發票資訊<span class="btn btn_secondary_outline"></li>
                    <li class="block">
                      <ul>
                        <li class="block_list">
                          <div class="block_list_title"></div>
                          <div class="block_list_content red">※本公司為響應環保全面採用電子發票</div>
                        </li>
                        <li class="block_list">
                          <div class="block_list_title">發票樣式</div>
                          <div class="block_list_content">
                              <input type="radio" id="" name="" value=""><label for="">電子載具</label>
                              <input type="radio" id="" name="" value=""><label for="">公司發票</label>
                          </div>
                        </li>
                        <li class="block_list">
                          <div class="block_list_title">電子載具</div>
                          <div class="block_list_content">
                              <input type="radio" id="" name="" value=""><label for="">會員載具</label>
                              <br>
                              <input type="radio" id="" name="" value=""><label for="">
                                 手機條碼載具
                                 <input type="text" name="" placeholder="EX:/ABCDEFG，載具條碼須為/開頭的8碼英數字符號">
                              </label>
                              <input type="radio" id="" name="" value=""><label for="">
                                 自然人憑證載具
                                 <input type="text" name="" placeholder="總長度為16碼字元，前兩碼為大寫英文，後14碼為數字">
                              </label>
                          </div>
                        </li>
                        <li class="block_list">
                          <div class="block_list_title">公司名稱</div>
                          <div class="block_list_content"><input type="text" name="" placeholder="請輸公司名稱"><span class="red">錯誤訊息</span></div>
                        </li>
                        <li class="block_list">
                          <div class="block_list_title">統一編號</div>
                          <div class="block_list_content"><input type="text" name="" placeholder="請輸統一編號"><span class="red">錯誤訊息</span></div>
                        </li>
                      </ul>
                    </li>
                  </ul>
                  <!-- END 發票資訊 -->

               </div>
               <ul class="col-lg-3 col-md-12 col-12 bootstrap_default cart_sidebar">
                  <div class="cart_sidebar_block">
                     <li class="cart_sidebar_list">
                        <div class="cart_sidebar_title">共5件商品</div>
                        <div class="cart_sidebar_content">NT$ 5,450</div>
                     </li>
                     <li class="cart_sidebar_list">
                        <div class="cart_sidebar_title">折扣碼折抵</div>
                        <div class="cart_sidebar_content">-NT$<span>200</span></div>
                     </li>
                     <li class="cart_sidebar_list">
                        <div class="cart_sidebar_title">購物金折抵</div>
                        <div class="cart_sidebar_content">-NT$<span>0</span></div>
                     </li>
                     <li class="cart_sidebar_list">
                        <div class="cart_sidebar_title">折價券折抵</div>
                        <div class="cart_sidebar_content">-NT$<span>0</span></div>
                     </li>
                     <li class="cart_sidebar_list">
                        <div class="cart_sidebar_title">運費</div>
                        <div class="cart_sidebar_content">-NT$<span>0</span></div>
                     </li>
                     <li><hr></li>
                     <li class="cart_sidebar_list">
                        <div class="cart_sidebar_title">應付金額</div>
                        <div class="cart_sidebar_content">NT$<span>5,450</span></div>
                     </li>
                     <li class="btn btn_primary mt-4"><a href="cart03.php">送出訂單</a></li>
                     <li class="btn btn_secondary_outline mt-2"><a href="cart02.php">返回購物明細</a></li>
                  </div>
               </ul>
            </div>
         </section>
      </div>
      <!--END WRAPPER-->
      <!-- FOOTER -->
      <?php include_once("include/footer.php");?>
      <!--END FOOTER-->
   </body>
</html>