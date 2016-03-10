$(document).ready(function(){

    
    //Navigation Menu Slider
        $('#nav-expander a.menu_toggle').on('click',function(e){
            e.preventDefault();
      		$('#exp').toggleClass('nav-expanded');
            
           
      	});
      	$(' nav ul.main-menu li a, nav ul.social_menu li a').on('click',function(e){
      		//e.preventDefault();
      		//$('#exp').removeClass('nav-expanded');
            
      	});
    
   
      $("#Mu").mouseleave(function(){
  
          $('#exp').removeClass('nav-expanded');
    });
   
    
       $(window).scroll(function(){
      if($("#exp").hasClass("nav-expanded"))
      {
         
           $("#exp").removeClass("nav-expanded");
      }
       });
    $(".res_togl > a").click(function(){
     $("#exp").removeClass("nav-expanded");
    });

    
    
   
    
    //sctipt for login open
    $("#LogiN").click(function(){
    $(".login_container").toggleClass("active");
    
    });
    
    
    //script for fly CART Animation
    $('.add2_bag').on('click', function () {
         $('.C_value').css("display","block");
        $(".cart_icon").removeClass("wobble");
        //$(".C_value").show().delay(2000);
        setTimeout(function(){
        $(".cart_icon").addClass("wobble");
        },50);
       /* setTimeout(function() {
    $('.C_value').fadeOut('fast');
}, 1000);*/
        
    });//script for fly CART Animation
    
    
    //shipping possibilities script
    $(".saved_info .edit_chk_inf").click(function(){
        $(".po_two").css("display","none");
        $(".po_three").css("display","block");
    });
    $(".add_new").click(function(){
     $(".po_two").css("display","none");
        $(".po_four").css("display","block");
    });
    $(".g_back").click(function(){
         $(".po_two").css("display","block");
        $(".po_four").css("display","none");
    });
    $(".c_edt").click(function(){
     $(".po_two").css("display","block");
        $(".po_three").css("display","none");
    });
    
    //script for add card
    $(".send_card").click(function(){
        $(".sel_c").css("display","block");
        $(".button.gift_button").css("display","none");
    }); //script for add card over
    
    //script for checkbox
    $('.input_class_checkbox').each(function(){
    $(this).hide().after('<div class="class_checkbox checked" />');

});

$('.class_checkbox').on('click',function(){
    $(this).toggleClass('checked').prev().prop('checked',$(this).is('.checked'))
}); //script for checkbox over
    
    
    
    
    
    
    //Increment Decrement Quantity
    $(".ddd").on("click", function () {

    var $button = $(this);
    var oldValue = $button.closest('.sp-quantity').find("input.quntity-input").val();

    if ($button.text() == "+") {
        var newVal = parseFloat(oldValue) + 1;
    } else {
        // Don't allow decrementing below zero
        if (oldValue > 0) {
            var newVal = parseFloat(oldValue) - 1;
        } else {
            newVal = 0;
        }
    }

    $button.closest('.sp-quantity').find("input.quntity-input").val(newVal);

});
    //active inactive toggle for order page
    $(".button.ro_btn").click(function(){
        $(".button.po_btn").removeClass("active");
        $(this).addClass("active");
    });
     $(".button.po_btn").click(function(){
        $(".button.ro_btn").removeClass("active");
        $(this).addClass("active");
    });//active inactive toggle for order page OVER
    
    
     //edit toggle for order page
    $(function () {
        $('.edit_togl').click(function () {
           
            //$(this).prev('input').toggleDisabled();
             // $(this).toggleClass("s_icon"); 
            $(this).siblings("span").children("input").toggleDisabled();
            $(this).siblings("span").children("textarea").toggleDisabled();
                    if ($(this).text() == "edit")
                    {  $(this).text("save") }
                    else
                    { $(this).text("edit"); }

        });
    });
    
    // script for toggle modal
   
  
    
    $(".modal").on('hidden.bs.modal', function () {
            $("body").css("overflow-y","scroll");
    });
     $(".modal").on('shown.bs.modal', function () {
             $("body").css("overflow","hidden");
    });
  $(".fgt_pwd").click(function(){
    $("#FP_MoDal").modal({
    shown:'true'
    });
  });
   // script for toggle modal
   
 
    //ingredient glossary
    $(".igi_box").on("mouseover", function () {
    $(".ig_capt").removeClass("hide");
});
     $(".igi_box").on("mouseout", function () {
    //$(".ig_capt").addClass("hide");
});
 
    
});

//1.0 toggle function
(function ($) {
    $.fn.toggleDisabled = function () {
       
        return this.each(function () {
            var $this = $(this);
            if ($this.attr('disabled')) $this.removeAttr('disabled');
            else $this.attr('disabled', 'disabled');
        });
    };
})(jQuery);

//2.0 input spinner
(function ($) {
  $('.spinner .btn:first-of-type').on('click', function() {
    $('.spinner input').val( parseInt($('.spinner input').val(), 10) + 1);
  });
  $('.spinner .btn:last-of-type').on('click', function() {
    $('.spinner input').val( parseInt($('.spinner input').val(), 10) - 1);
  });
})(jQuery);

(function($){
			$(window).load(function(e){
				
				$(".cart_height").mCustomScrollbar({
					
					theme:"dark"
				});
            });
}) (jQuery);