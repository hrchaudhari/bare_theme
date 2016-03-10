<div id="exp" class="lm_container">
    <!-- div for menu and login box container starts (will end in startup of every page)-->
    <div class="h_container">
        <div class="header_bg">
            <div class="container-fluid">
                <div class="row header">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-3">
                        <div class="logo">
                            <a href="index.php"><img src="images/logo.png" alt="" class="img-responsive">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-9">
                        <div>
                            <nav id="Mu">
                                <div>
                                    <ul class="list-unstyled main-menu">
                                        <!--Include your navigation here-->
                                        <li><a href="product.php"><span class="mnu_icon icon1"></span><span>Products</span></a></li>
                                        <li><a href="order.php"><span class="mnu_icon icon6"></span><span>order</span></a></li>
                                        <li><a href="alchemy.php"><span class="mnu_icon icon2"></span><span>Alchemy</span></a></li>
                                        <li><a href="faq.php"><span class="mnu_icon icon3"></span><span>FAQ’s</span></a></li>
                                        <li><a id="LogiN" href="javascript:void(0);" data-toggle="modal" data-target="#L_MoDal"><span class="mnu_icon icon5"></span><span>Login</span></a>
                                            <li>
                                                <div class="res_togl">
                                                    <a href="javascript:void(0);"></a>
                                                </div>
                                            </li>
                                        </li>
                                    </ul>

                                </div>
                                <div>
                                    <ul class="list-unstyled social_menu list-inline hide">
                                        <li><a href="javascript:void(0);"><span class="social_icons twt"></span></a>
                                        </li>
                                        <li><a href="javascript:void(0);"><span class="social_icons fb"></span></a>
                                        </li>
                                        <li><a href="javascript:void(0);"><span class="social_icons gp"></span></a>
                                        </li>
                                        <li><a href="javascript:void(0);"><span class="social_icons pin"></span></a>
                                        </li>
                                        <li><a href="javascript:void(0);"><span class="social_icons ins"></span></a>
                                        </li>
                                    </ul>
                                </div>

                            </nav>
                        </div>
                        <div class="">
                            <!--Include your brand here-->
                            <div class="top_side_menu navbar-header nav-expander fixed" id="nav-expander">
                                <a class=" cart_togl dropdown-toggle" href="javascript:void(0);" aria-expanded="false" role="button" data-toggle="dropdown"> <span class="icon cart_icon animated"></span><span class="C_value">1</span> </a>
                                <div role="menu" class="cart_dropdown dropdown-menu">
                                    <span class="c_title">your cart</span>
                                    <div class="cart_height">
                                        <div class="cart_pro">
                                            <div class="pro_img"><img src="images/product_small.jpg" alt="item" class="img-responsive"></div>
                                            <div class="pro_if">
                                                <span class="pr_nm">The Ambrosia Collection</span>
                                                <span class="pr_skn_typ">for dry skin</span>
                                                <span class="pr_q">Quantity- 1</span>
                                                <span class="pr_p">$150</span>
                                            </div>
                                            <a href="javascript:void(0);" class="remove_pro">X</a>
                                        </div>
                                        <div class="cart_pro">
                                            <div class="pro_img"><img src="images/product_small.jpg" alt="item" class="img-responsive"></div>
                                            <div class="pro_if">
                                                <span class="pr_nm">The Ambrosia Collection</span>
                                                <span class="pr_skn_typ">for dry skin</span>
                                                <span class="pr_q">Quantity- 1</span>
                                                <span class="pr_p">$150</span>
                                            </div>
                                            <a href="javascript:void(0);" class="remove_pro">X</a>
                                        </div>
                                        <div class="cart_pro">
                                            <div class="pro_img"><img src="images/product_small.jpg" alt="item" class="img-responsive"></div>
                                            <div class="pro_if">
                                                <span class="pr_skn_typ">for dry skin</span>
                                                <span class="pr_nm">The Ambrosia Collection</span>
                                                <span class="pr_q">Quantity- 1</span>
                                                <span class="pr_p">$150</span>
                                            </div>
                                            <a href="javascript:void(0);" class="remove_pro">X</a>
                                        </div>
                                    </div>
                                    <span class="subtotal">Subtotal: $150</span>
                                    <a class="addto_bag" href="checkout.php">checkout</a>
                                </div>
                                <a class=" menu_toggle"> <span class="icon menu_icon"></span>
                                </a>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
<div class="modal fade login_modal" id="L_MoDal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">

                    <h4 class="modal-title">sign in</h4>
                    <a href="javascript:void(0);" class="modl_close" data-dismiss="modal"></a>
                </div>
                <div class="modal-body">
                    <div id="L_Box" class="login_container">
                        <div class="login_box">

                            <div>
                                <a href="javascript:void(0);" class="cwf">
                            connect with facebook
                            <span class="f_ico"></span>
                        </a>
                            </div>
                            <div>
                                <span class="or">or</span>
                            </div>
                            <div>
                                <input type="text" placeholder="Email">
                            </div>
                            <div>
                                <input type="password" placeholder="password">
                            </div>
                             <a id="Forgot_Modal" href="#FP_MoDal" class="links" data-target="#FP_MoDal"  data-toggle="modal"  data-dismiss="modal">forgot password</a>
                            <div>
                                <input type="submit" value="LOGIN">
                            </div>
                            <a id="Reg_Modal" href="#R_MoDal" class="links" data-target="#R_MoDal"  data-toggle="modal"  data-dismiss="modal">New User? Create new</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<div class="modal fade login_modal register" id="R_MoDal" tabindex="-2" role="dialog" aria-labelledby="myModalLabel2" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">

                    <h4 class="modal-title">new user sign up</h4>
                    <a href="javascript:void(0);" class="modl_close" data-dismiss="modal"></a>
                </div>
                <div class="modal-body">
                    <div id="L_Box" class="login_container">
                        <div class="login_box">

                            <div>
                                <a href="javascript:void(0);" class="cwf">
                            connect with facebook
                            <span class="f_ico"></span>
                        </a>
                            </div>
                            <div>
                                <span class="or">or</span>
                            </div>
                            <div>
                                <input type="text" placeholder="Your Email Address">
                            </div>
                            <div>
                                <input type="password" placeholder="Password">
                            </div>
                            <div>
                                <input type="password" placeholder="Confirm Password">
                            </div>
                            <div>
                                <input type="submit" value="Sign up">
                            </div>
                            <a id="Btl" href="#L_MoDal" class="links" data-target="#L_MoDal"  data-toggle="modal"  data-dismiss="modal">Back to Login</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<div class="modal fade login_modal forgot_pwd" id="FP_MoDal" tabindex="-3" role="dialog" aria-labelledby="myModalLabel3" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">

                    <h4 class="modal-title">forgot password</h4>
                    <a href="javascript:void(0);" class="modl_close" data-dismiss="modal"></a>
                </div>
                <div class="modal-body">
                    <div id="L_Box" class="login_container">
                        <div class="login_box">
                           <span class="fp_titl">Please enter your registered email.<br/>
We’ll send a link to reset your password on your email.
</span>
                            <div>
                                <input type="text" placeholder="Email">
                            </div>
                         
                          
                            <div>
                                <input type="submit" value="SUBMIT">
                            </div>
                            
                              <a id="Btl" href="#L_MoDal" class="links" data-target="#L_MoDal"  data-toggle="modal"  data-dismiss="modal">Back to Login</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>       
        