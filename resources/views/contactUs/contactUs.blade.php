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
                                <li class="dropdown"><a href="/shop_Products">Shop</a>
                                    <ul>
                                        <li><a href="/shop_Products">Shop Products</a></li>
                                        <li><a href="/single_Product">Single Product</a></li>
                                        <li><a href="/shoppingCart">Shopping Cart</a></li>
                                        <li><a href="/checkOut">Checkout</a></li>
                                        <li><a href="/myAccount">My Account</a></li>
                                    </ul>
                                </li>
                                <li class="current"><a href="/contactUs">Contact Us</a></li>
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
		<h1>Contact Us</h1>
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
                <li>Contact Us</li>
            </ul>    
        </div>
        <div class="right pull-right">
            <a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i>Share</a>
        </div>  
    </div>
</section>
<!--End breadcrumb bottom area-->

<!--Start contact area-->
<section class="get-touch-area">
    <div class="container">
        <div class="sec-title text-center">
            <h1>Get Touch With Us</h1>
            <span class="border"></span>
            <p>We recently helped a small business grow from break-even to over $1m profit in less than 2 years.
            Please find below contact details and contact us today!</p>
        </div>
        <div class="row">
            <!--Start single item-->
            <div class="col-md-4">
                <div class="single-item hvr-grow-shadow text-center">
                    <div class="icon-holder">
                        <span class="icon-magnifying-glass"></span>    
                    </div> 
                    <div class="text-holder">
                        <h3>Visit Our Place</h3>
                        <span class="border"></span>
                        <p>241/84 Theme Name Discover Street<br> New York, NY 10012, USA</p>
                    </div>  
                </div>
            </div>
            <!--End single item-->
            <!--Start single item-->
            <div class="col-md-4">
                <div class="single-item hvr-grow-shadow text-center">
                    <div class="icon-holder">
                        <span class="icon-clock-1"></span>    
                    </div> 
                    <div class="text-holder">
                        <h3>Office Schedule</h3>
                        <span class="border"></span>
                        <p>Monday to Saturday: 09.00am to 18.00pm<br> Sunday: <a href="#">Closed</a></p>
                    </div>  
                </div>
            </div>
            <!--End single item-->
            <!--Start single item-->
            <div class="col-md-4">
                <div class="single-item hvr-grow-shadow text-center">
                    <div class="icon-holder">
                        <span class="icon-telephone"></span>    
                    </div> 
                    <div class="text-holder">
                        <h3>Quick Contact</h3>
                        <span class="border"></span>
                        <p>Ph: +321 456 78 9012<br> Email: Info@Wesupportyou.com</p>
                    </div>  
                </div>
            </div>
            <!--End single item-->           
        </div>
    </div>
</section>
<!--End contact area-->

<!--Start contact form area-->
<section class="contact-form-area">
    <div class="container">
        <div class="row">
           
            <div class="col-md-8">
                <div class="contact-form">
                    <form id="contact-form" name="contact_form" class="default-form" action="inc/sendmail.php" method="post">
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" name="form_name" value="" placeholder="Your Name*" required="">
                            </div>
                            <div class="col-md-6">
                                <input type="email" name="form_email" value="" placeholder="Your Mail*" required="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" name="form_phone" value="" placeholder="Phone">
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="form_subject" value="" placeholder="Subject">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <textarea name="form_message" placeholder="Your Message.." required=""></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="">
                                <button class="thm-btn bg-clr1" type="submit" data-loading-text="Please wait...">send message</button>
                            </div>
                        </div>
                    </form>  
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="form-right-box text-center">
                    <div class="img-box">
                        <img src="images/resources/contact-form-right.png" alt="Awesome Image">
                    </div>
                    <h4>Brown Angelino</h4>
                    <span>Hr Manager</span>
                    <p>Who loves or pursues or desires obtain pain<br> its because circumstances occur.</p>
                    <div class="border"></div>
                    <ul class="social-links">
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                    </ul>   
                </div>    
            </div>
                
        </div>
    </div>
</section>
<!--End contact form area-->

<!--Start Google map area-->
<section class="google-map-area">
    <div 
        class="google-map" 
        id="contact-google-map" 
        data-map-lat="22.845641" 
        data-map-lng="89.540328" 
        data-icon-path="images/resources/map-marker.png" 
        data-map-title="Brooklyn, New York, United Kingdom" 
        data-map-zoom="12" 
        data-markers='{
            "marker-1": [22.845641, 89.540328, "<h4>Head Office</h4><p>44/108 Khulna, Bangladesh</p>"],
            "marker-2": [22.702921, 90.346597, "<h4>Branch Office</h4><p>44/108 Borisal, Bangladesh</p>"],
            "marker-3": [23.163401, 89.218166, "<h4>Branch Office</h4><p>77/99 Jessore Bangladesh</p>","images/resources/map-marker.png"]
        }'>

    </div>
</section>
<!--End Google map area-->     
@endsection