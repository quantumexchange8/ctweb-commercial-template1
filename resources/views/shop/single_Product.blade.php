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
		<h1>Single Product</h1>
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
                <li>Single Product</li>
            </ul>    
        </div>
        <div class="right pull-right">
            <a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i>Share</a>
        </div>  
    </div>
</section>
<!--End breadcrumb bottom area-->

<!--Start blog area-->
<section class="single-shop-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">
                <!--Start single shop content-->
                <div class="single-shop-content">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="img-holder">
                                <img src="images/shop/single-product.jpg" alt="Awesome Image" data-imagezoom="true" class="img-responsive">
                            </div>
                        </div>  
                        <div class="col-md-6">
                            <div class="content-box">
                                <h3>Win Your Friends</h3>
                                <div class="review-box">
                                    <ul>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                </div>
                                <span class="price">$29.00</span>
                                <div class="text">
                                    <p>Working from home meant we couldsnack and coffee our breaks change our desks or view, good, drink on the job, even spend the weather started getting roughday in pajamas consequences.</p>
                                </div>
                                <div class="location-box">
                                    <p>Check Delivery Option at Your Location:</p>
                                    <form action="#">
                                        <input type="text" placeholder="Pincode">
                                        <button type="submit">Check</button><br/>
                                        <span>Expected Delivery in 4-10 Days</span>
                                    </form>
                                </div>
                                <div class="addto-cart-box">
                                    <input class="quantity-spinner" type="text" value="2" name="quantity">
                                    <button class="thm-btn bg-clr1 addtocart" type="submit">Add to Cart</button>
                                </div>    
                            </div>
                        </div>
                    </div>
                </div>
                <!--End single shop content-->
                <!--Start product tab box-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="product-tab-box">
                            <ul class="nav nav-tabs tab-menu">
                                <li><a href="#desc" data-toggle="tab">Descriprion</a></li>
                                <li class="active"><a href="#review" data-toggle="tab">Reviews (2)</a></li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane" id="desc">
                                    <div class="product-details-content">
                                        <div class="desc-content-box">
                                            <p>Bluetooth device reflects the design philosophy of form following function prevalent in modernism. These designs represent the ideals of cutting excess, practicality and an absence of decoration. These forms of lamps are visually light and follow minimalist principles of design which are influenced by architectural concepts like the cantilever.</p>
                                            <p>Modern device fits best in open floor plans with clean lines that thrive in the absence of clutter. A one stop shop for home decor and furniture, Interior sells a home product every 30 seconds.</p>
                                        </div>

                                    </div>    
                                </div>
                                <div class="tab-pane active" id="review">
                                    <div class="review-box">
                                        <div class="sec-title-two">
                                            <h3>2 Reviews For Wooden Watch</h3>
                                        </div>
                                        <!--Start single review box-->
                                        <div class="single-review-box">
                                            <div class="img-holder">
                                                <img src="images/shop/review-1.jpg" alt="Awesome Image">
                                            </div>
                                            <div class="text-holder">
                                                <div class="top">
                                                    <div class="name pull-left">
                                                        <h4>Steven Rich – Sep 17, 2016:</h4>
                                                    </div>
                                                    <div class="review-box pull-right">
                                                        <ul>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="text">
                                                    <p>How all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!--End single review box-->
                                        <!--Start single review box-->
                                        <div class="single-review-box">
                                            <div class="img-holder">
                                                <img src="images/shop/review-2.jpg" alt="Awesome Image">
                                            </div>
                                            <div class="text-holder">
                                                <div class="top">
                                                    <div class="name pull-left">
                                                        <h4>William Cobus – Aug 21, 2016:</h4>
                                                    </div>
                                                    <div class="review-box pull-right">
                                                        <ul>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="text">
                                                    <p>there anyone who loves or pursues or desires to obtain pain itself, because it is pain, but because occasionally circumstances occur some great pleasure.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!--End single review box-->   
                                    </div>
                                    <div class="review-form">
                                        <div class="sec-title-two">
                                            <h3>Add Your Comments</h3>
                                        </div>
                                        <div class="add-rating-box">
                                            <div class="add-rating-title">
                                                <h4>Your Rating</h4>    
                                            </div>
                                            <ul>
                                                <li>
                                                    <a href="#">
                                                        <i class="fa fa-star"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>   
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <form id="review-form" action="#">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="field-label">
                                                        <p>First Name*</p>
                                                        <input type="text" name="fname" required="">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="field-label">
                                                        <p>Last Name*</p>
                                                        <input type="text" name="lname" required="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="field-label">
                                                        <p>Email*</p>
                                                        <input type="email" name="email" required="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="field-label">
                                                        <p>Your Comments*</p>
                                                        <textarea name="review" required=""></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <button class="thm-btn bg-clr1" type="submit">Submit Now</button>
                                                </div>
                                            </div>
                                        </form>  
                                    </div>
                                </div>
                            </div>      
                        </div>
                    </div>
                </div>
                <!--End product tab box-->
                <!--Start related product box-->
                <div class="related-product">
                    <div class="sec-title">
                        <h3>Related Products</h3>
                        <span class="border"></span>
                    </div>
                    <div class="row">
                        <!--Start single product item-->
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="single-product-item">
                                <div class="img-holder">
                                    <img src="images/shop/4.jpg" alt="Awesome Product Image">
                                    <div class="overlay-style-one">
                                        <div class="box">
                                            <div class="content">
                                                <div class="icon-holder">
                                                    <a class="thm-btn bg-clr1" href="/single_Product">Add to Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="title-holder">
                                    <div class="top clearfix">
                                        <div class="product-title pull-left">
                                            <a href="/single_Product">
                                                <h5>Good to Great</h5>
                                            </a>
                                        </div>
                                        <div class="review-box pull-right">
                                            <ul>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <h4 class="rate">$29.00</h4>
                                </div>
                            </div>
                        </div>
                        <!--End single product item-->
                        <!--Start single product item-->
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="single-product-item">
                                <div class="img-holder">
                                    <img src="images/shop/5.jpg" alt="Awesome Product Image">
                                    <div class="overlay-style-one">
                                        <div class="box">
                                            <div class="content">
                                                <div class="icon-holder">
                                                    <a class="thm-btn bg-clr1" href="/single_Product">Add to Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="title-holder">
                                    <div class="top clearfix">
                                        <div class="product-title pull-left">
                                            <a href="/single_Product">
                                                <h5>Built to Last</h5>
                                            </a>
                                        </div>
                                        <div class="review-box pull-right">
                                            <ul>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <h4 class="rate">$24.99</h4>
                                </div>
                            </div>
                        </div>
                        <!--End single product item-->
                        <!--Start single product item-->
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="single-product-item">
                                <div class="img-holder">
                                    <img src="images/shop/6.jpg" alt="Awesome Product Image">
                                    <div class="overlay-style-one">
                                        <div class="box">
                                            <div class="content">
                                                <div class="icon-holder">
                                                    <a class="thm-btn bg-clr1" href="/single_Product">Add to Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="title-holder">
                                    <div class="top clearfix">
                                        <div class="product-title pull-left">
                                            <a href="/single_Product">
                                                <h5>Art of the Start</h5>
                                            </a>
                                        </div>
                                        <div class="review-box pull-right">
                                            <ul>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <h4 class="rate">$34.99</h4>
                                </div>
                            </div>
                        </div>
                        <!--End single product item-->
                    </div>
                </div>
                <!--End related product box--> 
            </div>
            <!--Start sidebar Wrapper-->
            <div class="col-lg-3 col-md-4 col-sm-7 col-xs-12">
                <div class="sidebar-wrapper">
                    <!--Start single sidebar-->
                    <div class="single-sidebar">
                        <form class="search-form" action="#">
							<input placeholder="Search..." type="text">
							<button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
						</form>
                    </div>
                    <!--End single sidebar-->
                    <!--Start single sidebar-->
                    <div class="single-sidebar">
                        <div class="sec-title">
                            <h3>Categories</h3>
                            <span class="border"></span>
                        </div>
                        <ul class="categories clearfix">
                            <li>
                                <a href="#">
                                    Financial Services 
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Consumer Products 
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Healthcare Companies 
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Industrial Goods & Services 
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!--End single sidebar-->
                    <!--Start single sidebar--> 
                    <div class="single-sidebar">
                        <div class="sec-title">
                            <h3>Filter By Price</h3>
                            <span class="border"></span>
                        </div>
                        <div class="price-ranger">
                            <div id="slider-range"></div>
                            <div class="ranger-min-max-block">
                                <input class="thm-btn bg-clr1" type="submit" value="Filter">
                                <span>Price:</span>
                                <input type="text" readonly class="min"> 
                                <span>-</span>
                                <input type="text" readonly class="max">
                            </div>
                        </div>
                        
                    </div>
                    <!--End single sidebar-->
                    <!--Start single sidebar--> 
                    <div class="single-sidebar">
                        <div class="sec-title">
                            <h3>Latest Products</h3>
                            <span class="border"></span>
                        </div>
                        <ul class="latest-product">
                            <li>
                                <div class="img-holder">
                                    <img src="images/shop/product-thumb-1.jpg" alt="Awesome Image">
                                    <div class="overlay-style-one">
                                        <div class="box">
                                            <div class="content">
                                                <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="title-holder">
                                    <a href="#">
                                        <h4>The Innovators</h4>
                                    </a>
                                    <h5>$34.99</h5>
                                    <div class="review-box">
                                        <ul>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                    </div>
                                </div> 
                            </li>
                            <li>
                                <div class="img-holder">
                                    <img src="images/shop/product-thumb-2.jpg" alt="Awesome Image">
                                    <div class="overlay-style-one">
                                        <div class="box">
                                            <div class="content">
                                                <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="title-holder">
                                    <a href="#">
                                        <h4>Good to Great</h4>
                                    </a>
                                    <h5>$24.00</h5>
                                    <div class="review-box">
                                        <ul>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                    </div>
                                </div> 
                            </li>
                            <li>
                                <div class="img-holder">
                                    <img src="images/shop/product-thumb-3.jpg" alt="Awesome Image">
                                    <div class="overlay-style-one">
                                        <div class="box">
                                            <div class="content">
                                                <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="title-holder">
                                    <a href="#">
                                        <h4>Built to Last</h4>
                                    </a>
                                    <h5>$24.99</h5>
                                    <div class="review-box">
                                        <ul>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                    </div>
                                </div> 
                            </li>
                        </ul>
                    </div>
                    <!--End single sidebar-->
                    <!--Start single sidebar--> 
                    <div class="single-sidebar">
                        <div class="sec-title">
                            <h3>Product Tags</h3>
                            <span class="border"></span>
                        </div>
                        <ul class="product-tag">
                            <li><a href="#">Idea</a></li>    
                            <li><a href="#">Finance</a></li>    
                            <li><a href="#">Experts</a></li>    
                            <li><a href="#">Marketing</a></li>    
                            <li><a href="#">Services</a></li>    
                            <li><a href="#">Tips</a></li>    
                            <li><a href="#">Growth</a></li>    
                            <li><a href="#">Wealth</a></li>    
                        </ul>    
                    </div>
                    <!--End single sidebar--> 
                </div>    
            </div>
            <!--End Sidebar Wrapper-->  
        </div>
    </div>
</section> 
<!--End blog area-->   
@endsection