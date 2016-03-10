<?php include_once ( 'include/header.php'); ?>




</div>
<!--div for menu and login box container end -->
<div class="spacer_side">
<div class="order_cover_box">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="ord_table">
                    <div role="tabpanel">

                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active">
                                <a href="#details" aria-controls="home" role="tab" data-toggle="tab">
                                    <span class="det_bx">
                                       <span class="tit">contact details</span>
                                    </span>
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="#history" aria-controls="history" role="tab" data-toggle="tab">
                                    <span class="det_bx">
                                        <span class="tit">order history</span>
                                    </span>
                                </a>
                            </li>

                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="details">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

                                        <div class="o_d_box">
                                            <span class="o_d_tt">contact details</span>
                                            <span><input type="text" value="Mrs Joyeine Jacob" disabled="" class=""></span>
                                             <span><input type="text" disabled="" class="" value="joyeinejacob@gmail.com"></span>
                                            <a href="javascript:void(0);" class="edit_togl">edit</a>
                                        </div>

                                        <div class="o_d_box">
                                            <span class="o_d_tt">address1</span>
                                            <span><textarea disabled="" class="add_ara">Ergserbse
Sebsrbtr
Sttrs
Los Angeles, CA, 11005
United States
</textarea></span>
                                            <a href="javascript:void(0);" class="edit_togl">edit</a>
                                        </div>


                                        <div class="o_d_box">
                                            <span class="o_d_tt">address2</span>
                                            <span>
                                                    <textarea disabled="" class="add_ara">Ergserbse
Sebsrbtr
Sttrs
Los Angeles, CA, 11005
United States
</textarea>
                                                </span>
                                            <a href="javascript:void(0);" class="edit_togl">edit</a>
                                        </div>
                                        
                                        <div class="o_d_box ad_nw">
                                            <a href="javascript:void(0);" class="a_d_a">add new address</a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="history">
                                
                                <div class="ro_po">
                                    <a href="javascript:void(0);" class="button ro_btn active">recent orders</a>
                                    <a href="javascript:void(0);" class="button po_btn">past orders</a>
                                </div>
                                <div class="table-responsive one_pro_table">
                                            <table class="table o_d_table o_t">
                                                
                                                <tbody>
                                                    <tr>
                                                        <td><img class=" cart_pr ïmg-responsive" src="images/product_small.jpg">
                                                        </td>
                                                        <td>
                                                            <h4>The Ambrosia Collection</h4>
                                                            <span class="sk_tp">for combination Skin</span><span class="q">(2)</span>
                                                          
                                                        </td>
                                                        <td class="vam u_p tac">$150.00</td>
                                                        <td class="vam tac">
                                                          <span class="stt_info">Delivery expected by Thu, 29th Jan’ 15</span>
                                                          <span class="stt_info">Your Order has been placed</span>
                                                        </td>
                                                        <td class="vam  tac ">
                                                           
                                                        </td>
                                                        <td class="vam tac nopadding">
                                                           <a href="order_track.php" class="button trb">track</a>
                                                            <a href="request_cancellation.php" class="button ">cancel</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><img class=" cart_pr ïmg-responsive" src="images/product_small.jpg">
                                                        </td>
                                                        <td>
                                                            <h4>The Ambrosia Collection</h4>
                                                            <span class="sk_tp2">for dry Skin</span><span class="q">(2)</span>
                                                          
                                                        </td>
                                                        <td class="vam u_p tac">$150.00</td>
                                                        <td class="vam tac">
                                                          <span class="stt_info">Delivery expected by Thu, 29th Jan’ 15</span>
                                                          <span class="stt_info">Your item is out for delivery</span>
                                                        </td>
                                                        <td class="vam tac ">
                                                           
                                                        </td>
                                                        <td class="vam tac nopadding">
                                                           <a href="javascript:void(0);" class="button ">return</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><img class=" cart_pr ïmg-responsive" src="images/product_small.jpg">
                                                        </td>
                                                        <td>
                                                            <h4>The Ambrosia Collection</h4>
                                                            <span class="sk_tp">for combination Skin</span><span class="q">(2)</span>
                                                          
                                                        </td>
                                                        <td class="vam u_p tac">$150.00</td>
                                                        <td class="vam tac">
                                                          <span class="stt_info">Delivery expected by Thu, 29th Jan’ 15</span>
                                                          <span class="stt_info">Your item is out for delivery</span>
                                                        </td>
                                                        <td class="vam tac ">
                                                           
                                                        </td>
                                                        <td class="vam tac">
                                                          
                                                        </td>
                                                    </tr>
                                                   
                                                    
                                                </tbody>
                                            </table>
                                        </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
</div>
<?php include_once ( 'include/footer.php'); ?>