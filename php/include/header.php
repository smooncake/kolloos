<header>
   <div class="header_marquee">官網首次入會可享50元優惠官網首次入會可享50元優惠官網首次入會可享50元優惠官網首次入會可享50元優惠<span><img src="images/icons/close.png" alt=""></span></div>
   <!--NAV-->
   <nav>
      <div class="search">
         <form class="search_form" action="">
            <div class="vessel">
               <label>搜尋</label>
               <input type="text" name="" placeholder="搜尋">
               <input type="submit" value="">
            </div>
         </form>
      </div>
      <div class="nav">
         <ul class="menu">
            <div id="logo">
               <a href="index.php">
                  <h1>Kollos</h1>
               </a>
            </div>
            <li class="list">
               <a href="news.php">
                  <h2>最新消息</h2>
               </a>
            </li>
            <li class="list">
               <a href="product.php">
                  <h2>商品介紹</h2>
               </a>
            </li>
            <li class="list">
               <a href="product.php">
                  <h2>商品介紹</h2>
               </a>
            </li>
            <li class="list">
               <a href="blog.php">
                  <h2>文章介紹</h2>
               </a>
            </li>
            <li class="list">
               <a href="blog.php">
                  <h2>文章介紹</h2>
               </a>
            </li>
            <li class="list">
               <a href="javascript:;">
                  <h2>關於KOLLOS</h2>
               </a>
            </li>
            <li class="list">
               <a href="buy.php">
                  <h2>馬上購買</h2>
               </a>
            </li>
         </ul>
         <ul class="shortcut">
            <li class="list"><a href="javascript:;" data-toggle="modal" data-target="#signin"><img src="images/icons/person.png" alt=""></a></li>
            <li class="list"><a href="javascript:;"><img src="images/icons/logout.png" alt=""></a></li>
            <li class="list"><a href="#" class="dropbtn" data-toggle="modal" data-target="#addToCart"><img src="images/icons/cart.png" alt=""></a></li>
            <li class="list"><a href="store.php"><img src="images/icons/location.png" alt=""></a></li>
         </ul>
      </div>
   </nav>
   <!--END NAV-->
</header>

<!-- Modal search -->
<div class="modal fade" id="search_m" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
   <div class="modal-dialog modal-dialog-search" role="document">
      <!--       <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><img src="images/XX.png" alt=""></span></button> -->
      <div class="modal-content">
         <div class="modal-body">
            <form class="search_form" action="">
               <div class="vessel">
                  <label>找商品</label>
                  <input type="text" name="" placeholder="找商品">
                  <input type="submit" value="">
               </div>
            </form>
         </div>
      </div>
   </div>
</div>

<!-- Modal menu -->
<div class="modal right fade" id="menu" tabindex="-1" role="dialog" aria-labelledby="addToCart">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <div class="modal-title" id="addToCartTitle"><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button><b>分類</b></div>
         </div>
         <div class="modal-body" style="overflow-y: auto;">
            <div class="product_sidebar_menu">
               <ul class="product_sidebar_list">
                  <li>
                     <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">火鍋料底</a>
                     <ul class="collapse" id="homeSubmenu">
                        <li><a href="product.php">火鍋料</a></li>
                        <li><a href="product.php">魚類</a></li>
                        <li><a href="product.php">豬類</a></li>
                     </ul>
                  </li>
                  <li>
                     <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">湯底</a>
                     <ul class="collapse" id="pageSubmenu">
                        <li><a href="product.php">火鍋料</a></li>
                        <li><a href="product.php">魚類</a></li>
                        <li><a href="product.php">豬類</a></li>
                     </ul>
                  </li>
               </ul>
            </div>
         </div>
      </div>
      <!-- modal-content -->
   </div>
   <!-- modal-dialog -->
</div>

<!-- Modal 登入 -->
<div class="modal fade" id="signin" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
   <div class="modal-dialog modal-dialog-menber" role="document">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><img src="images/XX.png" alt=""></span></button>
      <div class="modal-content">
         <div class="modal-body">

               <div class="menber">


                        <ul class="menber_list">
                           <li class="menber_btn">
                              <div class="col-lg-6 col-md-8 col-12 bootstrap_default menber_btn_left">
                                 <a href="menber.php"><img src="images/line.jpg" alt=""></a>
                              </div>
                              <div class="col-lg-6 col-md-8 col-12 bootstrap_default menber_btn_left">
                                 <a href="menber.php"><img src="images/fb.jpg" alt=""></a>
                              </div>
                           </li>
                           <li>
                              <div><input type="text" name="" placeholder="用戶名"></div>
                           </li>
                           <!--                            <li>
                              <div class="select">
                                 <select id="standard-select">
                                    <option value="Option 1">使用E-mail登入</option>
                                    <option value="Option 2">使用手機登入</option>
                                 </select>
                              </div>
                              </li> -->
                           <li>
                              <div><input type="text" name="" placeholder="E-mail"></div>
                           </li>
                           <li>
                              <div><input type="text" name="" placeholder="手機號碼"></div>
                           </li>
                           <li>
                              <div><input type="text" name="" placeholder="密碼"></div>
                           </li>
                           <li>
                              <div class="cal">
                                 <input type="text" name="" placeholder="生日日期" id="birthday2_datepicker">
                                 <span><a href="javascript::"><img src="images/icons/cal.png" alt=""></a></span>
                              </div>
                           </li>
                           <li>
                              <p class="purchase_checkbox"><span><label><input type="checkbox" />我同意網站<a href="privacy.php" target="_blank">服務條款及隱私政策</a></label></span></p>
                           </li>
                           <li class="btn_red">
                              <a href="menber.php">立即加入</a>
                           </li>
                        </ul>

                  </div>

            </div>
         </div>
      </div>
   </div>
</div>

<!-- Modal 購物車 -->
<div class="modal right fade" id="addToCart" tabindex="-1" role="dialog" aria-labelledby="addToCart">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <div class="modal-title" id="addToCartTitle"><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><img src="images/icons/close.png" alt=""></span></button><b>購物車</b></div>
         </div>
         <div class="modal-body" style="overflow-y:auto;">
            <div class="product" id="cart">
                  <ul class="row cart_content">
                     <li class="col-lg-3 col-md-12 col-12 bootstrap_default img"><img src="images/product_003.jpg" alt=""></li>
                     <li class="col-lg-9 col-md-12 col-12 bootstrap_default">
                        <ul>
                           <li class="cart_content_tile02">洸動能女人知性氣質舒活組(女短袖+女訓練褲)買就送550元能量貼布</li>
                           <li class="cart_content_tile">洸動能短版立領機能長袖舒活衣 ( 買就送550元能量貼布 )<span>顏色: 靜謐黑 / 尺寸: XS</span></li>
                           <li class="cart_content_spec">
                              <div class="product_price">
                                 <div class="product_price_discount m-0"><span class="red">NT$ 999,999</span></div>
                              </div>
                           </li>
                           <li class="cart_content_spec">
                              <div class="product_numbers">
                                 <div class="inc button">－</div>
                                 <input type="text" name="french-hens" id="french-hens" value="3">
                                 <div class="dec button">＋</div>
                              </div>
                           </li>
                           <li class="cart_content_delete">
                              <a href="javascript:;"><img src="images/icons/delete02.png" alt=""><span class="red">刪除</span></a>
                           </li>
                        </ul>
                     </li>
                  </ul>
                  <ul class="row cart_content">
                     <li class="col-lg-3 col-md-12 col-12 bootstrap_default img"><img src="images/product_003.jpg" alt=""></li>
                     <li class="col-lg-9 col-md-12 col-12 bootstrap_default">
                        <ul>
                           <li class="cart_content_tile02">洸動能女人知性氣質舒活組(女短袖+女訓練褲)買就送550元能量貼布</li>
                           <li class="cart_content_tile">洸動能短版立領機能長袖舒活衣 ( 買就送550元能量貼布 )<span>顏色: 靜謐黑 / 尺寸: XS</span></li>
                           <li class="cart_content_spec">
                              <div class="product_price">
                                 <div class="product_price_discount m-0"><span class="red">NT$ 999,999</span></div>
                              </div>
                           </li>
                           <li class="cart_content_spec">
                              <div class="product_numbers">
                                 <div class="inc button">－</div>
                                 <input type="text" name="french-hens" id="french-hens" value="3">
                                 <div class="dec button">＋</div>
                              </div>
                           </li>
                           <li class="cart_content_delete">
                              <a href="javascript:;"><img src="images/icons/delete02.png" alt=""><span class="red">刪除</span></a>
                           </li>
                        </ul>
                     </li>
                  </ul>
            </div>
         </div>
         <div class="modal-footer">
            <div class="price">
               <p><span>總金額  NT$</span>1,024元</p>
            </div>
            <div class="btn btn_primary">
               <a href="cart01.php">前往結帳</a>
            </div>
         </div>
      </div>
      <!-- modal-content -->
   </div>
   <!-- modal-dialog -->
</div>

