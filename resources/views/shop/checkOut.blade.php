@extends('layout.master')

@section('content')
    <!--Start mainmenu area-->
<section class="mainmenu-area stricky">
    <div class="container">
        <div class="mainmenu-bg">
            <div class="row">
                <div class="col-md-10 col-sm-12 col-xs-12">
                    <!--Start mainmenu-->
                    <nav class="main-menu">
                        <div class="navbar-header">   	
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="navbar-collapse collapse clearfix">
                            <ul class="navigation clearfix">
                                <li class="home"><a href="/home"><span class="fa fa-home"></span></a></li>
                                <li class="dropdown"><a href="/about">About us</a>
                                    <ul>
                                        <li><a href="/company_Overviews">Company Overview</a></li>
                                        <li><a href="/company_History">Company History</a></li>
                                        <li><a href="/ourTeam">Our Team</a></li>
                                        <li><a href="/ourPartners">Our Partner</a></li>
                                        <li><a href="/faqs">FAQ's</a></li>
                                        <li><a href="/client_Feedback">Client Feedback</a></li>
                                        <li><a href="/404_Pages">404 Page</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="/services">Our Services</a>
                                    <ul>
                                        <li><a href="/business_Planning">Business Planning</a></li>
                                        <li><a href="/audit_N_Assurance">Audit & Assurance</a></li>
                                        <li><a href="/trades_N_Stocks">Trades & Stocks</a></li>
                                        <li><a href="/investment_Plan">Investment Plan</a></li>
                                        <li><a href="/risk_Management">Risk Management</a></li>
                                        <li><a href="/succession_Planning">Succession Planning</a></li>
                                        <li><a href="/strategic_Planning">Strategic Planning</a></li>
                                        <li><a href="/financial_Projections">Financial Projections</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="/blog_Default">Latest News</a>
                                    <ul>
                                        <li><a href="/blog_Default">Blog Default</a></li>
                                        <li><a href="/blog_GridView">Blog Grid View</a></li>
                                        <li><a href="/blog_ListView">Blog List View</a></li>
                                        <li><a href="/blog_SinglePost">Blog Single Post</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="/projects_GalleryStyle">Projects</a>
                                    <ul>
                                        <li><a href="/projects_GridView">Grid View</a></li>
                                        <li><a href="/grid_withText">Grid With Text</a></li>
                                        <li><a href="/projects_GalleryStyle">Projects Gallery Style</a></li>
                                        <li><a href="/projects_SinglePost">Projects Single Post</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown current"><a href="/shop_Products">Shop</a>
                                    <ul>
                                        <li><a href="/shop_Products">Shop Products</a></li>
                                        <li><a href="/single_Product">Single Product</a></li>
                                        <li><a href="/shoppingCart">Shopping Cart</a></li>
                                        <li><a href="/checkOut">Checkout</a></li>
                                        <li><a href="/myAccount">My Account</a></li>
                                    </ul>
                                </li>
                                <li><a href="/contactUs">Contact Us</a></li>
                            </ul>
                        </div>
                    </nav>
                    <!--End mainmenu-->
                    <!--Start search box-->
                    <div class="outer-search-box">
                    	<div class="seach-toggle"><i class="fa fa-search"></i></div>
                        <ul class="search-box">
                            <li>
                                <form method="post" action="/home">
                                    <div class="form-group">
                                        <input type="search" name="search" placeholder="Search Here" required>
                                        <button type="submit"><i class="fa fa-search"></i></button>
                                    </div>
                                </form>
                            </li>
                        </ul>
                    </div>
                    <!--End search box-->
                </div>
                <div class="col-md-2 col-sm-12 col-xs-12">
                    <div class="free-consulation-button pull-right">
                        <a class="thm-btn bg-clr1" href="#">free Consultation</a>    
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</section>
<!--End mainmenu area--> 
 
<!--Start breadcrumb area-->     
<section class="breadcrumb-area" style="background-image: url(images/resources/breadcrumb-bg.jpg);">
	<div class="container text-center">
		<h1>Checkout</h1>
	</div>
</section>
<!--End breadcrumb area-->

<!--Start breadcrumb bottom area-->
<section class="breadcrumb-botton-area">
    <div class="container">
        <div class="left pull-left">
            <ul>
                <li><a href="/home">Home</a></li>
                <li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                <li><a href="/shop_Products">Shop</a></li>
                <li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                <li>Checkout</li>
            </ul>    
        </div>
        <div class="right pull-right">
            <a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i>Share</a>
        </div>  
    </div>
</section>
<!--End breadcrumb bottom area-->

<!--Start Checkout area-->
<section class="checkout-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="exisitng-customer">
                    <h5>Exisitng Customer?<a href="#">Click here to login</a></h5>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="coupon">
                    <h5>Have a Coupon?  <a href="#">Click here to enter your code</a></h5>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="form billing-info">
                    <div class="sec-title">
                        <h2>Billing Address</h2>
                        <span class="border"></span>
                    </div>
                    <form method="post" action="/checkOut">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="field-label">Country*</div>
                                <div class="field-input">
                                    <input type="text" name="country" placeholder="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="field-label">First Name*</div>
                                <div class="field-input">
                                    <input type="text" name="fname" placeholder="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="field-label">Last Name *</div>
                                <div class="field-input">
                                    <input type="text" name="lname" placeholder="">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="field-label">Address *</div>
                                <div class="field-input">
                                    <input type="text" name="address" placeholder="">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="field-input">
                                    <input type="text" name="address" placeholder="">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="field-label">Town / City *</div>
                                <div class="field-input">
                                    <input type="text" name="town-city" placeholder="">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="field-label">Contact Info *</div>
                                <div class="field-input">
                                    <input type="text" name="email" placeholder="Email Address">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="field-input">
                                    <input type="text" name="phone" placeholder="Phone Number">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="create-acc">
							        <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="ship-same-address">
                                            <span>Create an Account</span>
                                        </label>
                                    </div>  
							    </div>
						    </div>
                       
                        </div>    
                    </form>
                </div>    
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="form shipping-info">
                    <div class="sec-title">
                        <h2>Shipping Address<input type="checkbox"></h2>
                        <span class="border"></span>
                    </div>
                    <form method="post" action="/checkOut">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="field-label">Country*</div>
                                <div class="field-input">
                                    <input type="text" name="country" placeholder="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="field-label">First Name*</div>
                                <div class="field-input">
                                    <input type="text" name="fname" placeholder="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="field-label">Last Name *</div>
                                <div class="field-input">
                                    <input type="text" name="lname" placeholder="">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="field-label">Address *</div>
                                <div class="field-input">
                                    <input type="text" name="address" placeholder="">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="field-input">
                                    <input type="text" name="address" placeholder="">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="field-label">Town / City *</div>
                                <div class="field-input">
                                    <input type="text" name="town-city" placeholder="">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="field-label">Other Notes</div>
                                <div class="field-input">
                                    <textarea name="other-notes" placeholder=""></textarea>
                                </div>
                            </div>
                            
                        </div>    
                    </form>
                </div>    
            </div>  
        </div>
        
        <div class="row bottom">
            <div class="col-lg-6 col-md-6">
                <div class="table">
                    <div class="sec-title">
                        <h2>Order Summary</h2>
                        <span class="border"></span>
                    </div>
                    <table class="cart-table">
                        <thead class="cart-header">
                            <tr>
                                <th class="product-column">Products</th>
                                <th>&nbsp;</th>
                                <th>Quantity</th>
                                <th class="price">Total</th>
                            </tr>    
                        </thead>
                        <tbody>
                            <tr>
                                <td colspan="2" class="product-column">
                                    <div class="column-box">
                                        <div class="prod-thumb">
                                            <a href="#"><img src="images/shop/product-thumb-1.jpg" alt=""></a>
                                        </div>
                                        <div class="product-title">
                                            <h3>Portable Mobile Stand</h3>
                                        </div>
                                    </div>
                                </td>
                                <td class="qty">
                                    <input class="quantity-spinner" type="text" value="1" name="quantity">
                                </td>
                                <td class="price">$69.98</td>
                            </tr>
                            <tr>
                                <td colspan="2" class="product-column">
                                    <div class="column-box">
                                        <div class="prod-thumb">
                                            <a href="#"><img src="images/shop/product-thumb-2.jpg" alt=""></a>
                                        </div>
                                        <div class="product-title">
                                            <h3>Zan Modern Speaker</h3>
                                        </div>
                                    </div>
                                </td>
                                <td class="qty">
                                    <input class="quantity-spinner" type="text" value="2" name="quantity">
                                </td>
                                <td class="price">$29.99</td>
                            </tr>
                            
                        </tbody>
                    </table>
                </div>
            </div>
            
            <div class="col-lg-6 col-md-6">
                <div class="cart-total">
                    <div class="sec-title">
                        <h2>Cart Totals</h2>
                        <span class="border"></span>
                    </div>
                    <ul class="cart-total-table">
                        <li class="clearfix">
                            <span class="col col-title">Cart Subtotal</span>
                            <span class="col">$146.00</span>    
                        </li>
                        <li class="clearfix">
                            <span class="col col-title">Shipping and Handling</span>
                            <span class="col">$40.00- <b>Calculate Shipping</b></span>    
                        </li>
                        <li class="clearfix">
                            <span class="col col-title">Order Total</span>
                            <span class="col">$146.00</span>    
                        </li>      
                    </ul>
                    
                    <div class="payment-options">
                        <div class="option-block">
                            <div class="checkbox">
                                <label>
                                    <input name="pay-us" type="checkbox">
                                    <span>Direct Bank Transfer</span>
                                </label>
                            </div>
                            <div class="text">
                                <p>Please send a check to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
                            </div>
                        </div>
                        <div class="option-block">
                            <div class="radio-block">
                                <div class="checkbox">
                                    <label>
                                        <input name="pay-us" type="checkbox">
                                        <span>Paypal <b>What is Paypal</b></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="placeorder-button text-left">
                            <button class="thm-btn bg-clr1" type="submit">Place Order</button>
                        </div>   
                    </div>          
                </div>    
            </div>
             
        </div>
    </div>
</section>         
<!--End Checkout area-->
@endsection