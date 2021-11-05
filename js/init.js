// BTN_TOP
function btn_top(){
    $("#btn_top02").click(function() {
        $("html,body").animate({scrollTop:0},1000);
    });
}

// 購物車 input 數量加減
function number(){
    $('.inc.button').on('click', function(e){ 
        var $input_product_numbers = $(this).siblings('input'); 
        var product_nums = parseInt($input_product_numbers.val(),10) + 1;
        product_nums = product_nums > 9999? 9999:product_nums;
        $input_product_numbers.val(product_nums);}
    );
    $('.dec.button').on('click', function(e){ 
        var $input_product_numbers = $(this).siblings('input'); 
        var product_nums = parseInt($input_product_numbers.val(),10) - 1;
        product_nums = 1 > product_nums? 1:product_nums;
        $input_product_numbers.val(product_nums)}
    );
}

// 星星功能
function rating(){
    $('.menber_star span').hover(
        function(){
            $(this).find('img').attr("src", "images/star.png");
                var $preAll_start_obj = $($(this)).prevAll();
                var $nextAll_start_obj = $($(this)).nextAll();
                $preAll_start_obj.each(function( i, obj ) {
                    $($(obj).find('img')).attr("src", "images/star.png");
                });
                $nextAll_start_obj.each(function( i, obj ) {
                    $($(obj).find('img')).attr("src", "images/star05.png");
            });
        }
    )
}

// 星星功能
function cal(){
    $("#birthday2_datepicker,#birthday_datepicker").datepicker(
        {
            //uiLibrary: 'bootstrap4',
            format: 'yyyy/mm/dd',
            startDate: '-3d',
            language: 'zh-TW'
        }
    );
}

$(document).ready(function(){
	  btn_top();
      number();
      rating();
      cal();
});
