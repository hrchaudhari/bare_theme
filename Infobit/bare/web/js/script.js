jQuery(document).ready(function(){

    
    //Navigation Menu Slider
	jQuery('#nav-expander a.menu_toggle').on('click',function(e){
            e.preventDefault();
            jQuery('.page-wrapper').toggleClass('nav-expanded');
            
           
      	});
	jQuery(' nav ul.main-menu li a, nav ul.social_menu li a').on('click',function(e){
      		//e.preventDefault();
      		//jQuery('#exp').removeClass('nav-expanded');
            
      	});
    
   
	jQuery("#Mu").mouseleave(function(){
  
		jQuery('.page-wrapper').removeClass('nav-expanded');
    });
   
    
	jQuery(window).scroll(function(){
      if(jQuery(".page-wrapper").hasClass("nav-expanded"))
      {
         
    	  jQuery(".page-wrapper").removeClass("nav-expanded");
      }
       });
	jQuery(".res_togl > a").click(function(){
		jQuery(".page-wrapper").removeClass("nav-expanded");
    });

    
    
	jQuery('.spinner .btn:first-of-type').on('click', function() {
	    jQuery('.spinner input').val( parseInt(jQuery('.spinner input').val(), 10) + 1);
	  });
	  jQuery('.spinner .btn:last-of-type').on('click', function() {
	    jQuery('.spinner input').val( parseInt(jQuery('.spinner input').val(), 10) - 1);
	  });
    
    //sctipt for login open
    jQuery("#LogiN").click(function(){
    jQuery(".login_container").toggleClass("active");
    
    });
    
    
    //script for fly CART Animation
    jQuery('.add2_bag').on('click', function () {
         jQuery('.C_value').css("display","block");
        jQuery(".cart_icon").removeClass("wobble");
        //jQuery(".C_value").show().delay(2000);
        setTimeout(function(){
        jQuery(".cart_icon").addClass("wobble");
        },50);
       /* setTimeout(function() {
    jQuery('.C_value').fadeOut('fast');
}, 1000);*/
        
    });//script for fly CART Animation
    
    
    //shipping possibilities script
    jQuery(".saved_info .edit_chk_inf").click(function(){
        jQuery(".po_two").css("display","none");
        jQuery(".po_three").css("display","block");
    });
    jQuery(".add_new").click(function(){
     jQuery(".po_two").css("display","none");
        jQuery(".po_four").css("display","block");
    });
    jQuery(".g_back").click(function(){
         jQuery(".po_two").css("display","block");
        jQuery(".po_four").css("display","none");
    });
    jQuery(".c_edt").click(function(){
     jQuery(".po_two").css("display","block");
        jQuery(".po_three").css("display","none");
    });
    
    //script for add card
    jQuery(".send_card").click(function(){
        jQuery(".sel_c").css("display","block");
        jQuery(".button.gift_button").css("display","none");
    }); //script for add card over
    
    //script for checkbox
    jQuery('.input_class_checkbox').each(function(){
    jQuery(this).hide().after('<div class="class_checkbox checked" />');

});

jQuery('.class_checkbox').on('click',function(){
    jQuery(this).toggleClass('checked').prev().prop('checked',jQuery(this).is('.checked'))
}); //script for checkbox over
    
    
    
    
    
    
    //Increment Decrement Quantity
    jQuery(".ddd").on("click", function () {

    var $button = jQuery(this);
    var oldValue = $button.closest('.sp-quantity').find("input.quntity-inpu").val();

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

    $button.closest('.sp-quantity').find("input.quntity-inpu").val(newVal);

});
    //active inactive toggle for order page
    jQuery(".button.ro_btn").click(function(){
        jQuery(".button.po_btn").removeClass("active");
        jQuery(this).addClass("active");
    });
     jQuery(".button.po_btn").click(function(){
        jQuery(".button.ro_btn").removeClass("active");
        jQuery(this).addClass("active");
    });//active inactive toggle for order page OVER
    
    
     //edit toggle for order page
    jQuery(function () {
        jQuery('.edit_togl').click(function () {
           
            //jQuery(this).prev('input').toggleDisabled();
             // jQuery(this).toggleClass("s_icon"); 
            jQuery(this).siblings("span").children("input").toggleDisabled();
            jQuery(this).siblings("span").children("textarea").toggleDisabled();
                    if (jQuery(this).text() == "edit")
                    {  jQuery(this).text("save") }
                    else
                    { jQuery(this).text("edit"); }

        });
    });
    
    // script for toggle modal
   
  
    
    jQuery(".modal").on('hidden.bs.modal', function () {
            jQuery("body").css("overflow-y","scroll");
    });
     jQuery(".modal").on('shown.bs.modal', function () {
             jQuery("body").css("overflow","hidden");
    });
  jQuery(".fgt_pwd").click(function(){
    jQuery("#FP_MoDal").modal({
    shown:'true'
    });
  });
   // script for toggle modal
   
 
    //ingredient glossary
    jQuery(".igi_box").on("mouseover", function () {
    jQuery(".ig_capt").removeClass("hide");
});
     jQuery(".igi_box").on("mouseout", function () {
    //jQuery(".ig_capt").addClass("hide");
});
 
    
});

//1.0 toggle function
(function (jQuery) {
    jQuery.fn.toggleDisabled = function () {
       
        return this.each(function () {
            var $this = jQuery(this);
            if ($this.attr('disabled')) $this.removeAttr('disabled');
            else $this.attr('disabled', 'disabled');
        });
    };
})(jQuery);



(function(jQuery){
			jQuery(window).load(function(e){
				
				jQuery(".cart_height").mCustomScrollbar({
					
					theme:"dark"
				});
            });
}) (jQuery);