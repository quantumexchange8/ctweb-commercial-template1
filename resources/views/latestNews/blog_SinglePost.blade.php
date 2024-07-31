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
                                <li class="dropdown current"><a href="/blog_Default">Latest News</a>
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
		<h1>Blog Single Post</h1>
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
                <li><a href="/blog_Default">Blog</a></li>
                <li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                <li>Blog Single Post</li>
            </ul>    
        </div>
        <div class="right pull-right">
            <a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i>Share</a>
        </div>  
    </div>
</section>
<!--End breadcrumb bottom area-->

<!--Start blog area-->
<section id="blog-area" class="blog-single-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">
                <div class="blog-post">
                    <div class="single-blog-post">
                        <div class="img-holder">
                            <img src="images/blog/v1-1.jpg" alt="Awesome Image">
                        </div>
                        <div class="text-holder">
                            <h3 class="blog-title">Our operations worldwide have been neutral since 2010</h3>
                            <div class="text">
                                <p>The great explorer of the truth, the master-builder of human happiness one rejects, dislikes, avoids seds pleasure itself, because it is pleasure, but because those sedswho do not know how to pursue pleasure rationally works of encounter consequences works seds that are extremely painfull the master-builder of human seds happiness because it is pursue pleasure ationally works of encounter.</p>
                                <p>Who loves or pursues or desires to obtain pain of itself because pain because occasionally circumtance circumstances occur in which toil and pain can procure him some great pleasure. To take a which of us ever uts undertakes laborious  encounter consequences seds that are extremely ocassionaly painful.</p>
                            </div>
                            <div class="middle-content-box">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="img-holder">
                                            <img src="images/blog/caption-img.jpg" alt="Awesome Image">
                                        </div>
                                        <div class="text-box">
                                            <p>They have got my project time with competition sedswith a highly skilled, well-organized  encounter consequences seds that are extremely painful the builder of human happiness. </p>
                                            <h3>Dohn Gaskel</h3>
                                            <h5>Manager</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="bottom-content-box">
                                <p>Know how to pursue pleasure rationally encounter consequences that seds are extremely painful seds or again is there anyone who loves us or pursues or desires to obtain pain of itself, because seds our it pain, but because occasionally circumstances encounter consequences that seds are extremely painful circumstances..</p>
                            </div>
                            <div class="meta-info clearfix">
                                <div class="left pull-left">
                                    <ul class="post-info">
                                        <li>By <a href="#">Fletcher</a></li>
                                        <li><a href="#">Financial, Consulting</a></li>    
                                        <li><a href="#">22 Comments</a></li>    
                                        <li><a href="#">54 Likes</a></li>    
                                    </ul>    
                                </div>
                                <div class="right pull-right">
                                    <a class="post-share" href="#"><i class="fa fa-share-alt" aria-hidden="true"></i></a>  
                                </div>
                            </div> 
                        </div>
                    </div>
                    
                    <div class="comment-box">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="sec-title">
                                    <h3>Read Comments</h3>
                                    <span class="border"></span>
                                </div>
                                <!--Start single comment box-->
                                <div class="single-comment-box">
                                    <div class="img-holder">
                                        <img src="images/blog/comment-1.jpg" alt="Awesome Image">
                                    </div>
                                    <div class="text-holder">
                                        <div class="top">
                                            <div class="date pull-left">
                                                <h5>Steven Rich &ndash; Sep 17, 2016:</h5>
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
                                <!--End single comment box-->
                                <!--Start single comment box-->
                                <div class="single-comment-box">
                                    <div class="img-holder">
                                        <img src="images/blog/comment-2.jpg" alt="Awesome Image">
                                    </div>
                                    <div class="text-holder">
                                        <div class="top">
                                            <div class="date pull-left">
                                                <h5>William Cobus &ndash; Aug 21, 2016:</h5>
                                            </div>
                                            <div class="review-box pull-right">
                                                <ul>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star-half-o"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="text">
                                            <p>There anyone who loves or pursues or desires to obtain pain itself, because it is pain, because occasionally circumstances occur some great pleasure.</p>
                                        </div>
                                    </div>
                                </div>
                                <!--End single comment box-->
                            </div>
                        </div>
                    </div>
                    
                    <div class="add-comment-box">
                        <div class="sec-title">
                            <h3>Leave Your Reply</h3>
                            <span class="border"></span>
                        </div>
                        <div class="add-rating-box">
                            <h4>Your Rating</h4>
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
                        <form id="add-comment-form" action="#">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="field-label">Your Name*</div>
                                            <input type="text" name="form_name" value="" placeholder="" required="">
                                        </div>
                                        <div class="col-md-6">
                                            <div class="field-label">Website</div>
                                            <input type="text" name="website" value="" placeholder="">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="field-label">Your Email*</div>
                                            <input type="email" name="form_email" value="" placeholder="" required="">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="field-label">Your Comments*</div>
                                            <textarea name="comment" required></textarea>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <button class="thm-btn bg-clr1" type="submit">Post Comments</button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </form>
                    </div>
                    
                    
                </div>
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
                            <li>
                                <a href="#">
                                    Telecommunications 
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Social & Public Sector 
                                </a>
                            </li>  
                        </ul>
                    </div>
                    <!--End single sidebar-->
                    <!--Start single sidebar--> 
                    <div class="single-sidebar">
                        <div class="sec-title">
                            <h3>Recent News</h3>
                            <span class="border"></span>
                        </div>
                        <ul class="recent-post">
                            <li>
                                <div class="img-holder">
                                    <img src="images/sidebar/recent-news-1.jpg" alt="Awesome Image">
                                    <div class="overlay-style-two">
                                        <div class="box">
                                            <div class="content">
                                                <a href="#">
                                                    <i class="fa fa-link" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>   
                                </div>
                                <div class="title-holder">
                                    <a href="#">
                                        <h5 class="post-title">
                                            Finance & legal<br> throughout project.
                                        </h5>
                                    </a>
                                    <h6 class="post-date">
                                        <i class="icon-calendar-with-spring-binder-and-date-blocks"></i>
                                        Jan 08, 2017
                                    </h6>
                                </div>
                            </li>
                            <li>
                                <div class="img-holder">
                                    <img src="images/sidebar/recent-news-2.jpg" alt="Awesome Image"> 
                                    <div class="overlay-style-two">
                                        <div class="box">
                                            <div class="content">
                                                <a href="#">
                                                    <i class="fa fa-link" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>   
                                </div>
                                <div class="title-holder">
                                    <a href="#">
                                        <h5 class="post-title">
                                            What makes us best<br> in the world?
                                        </h5>
                                    </a>
                                    <h6 class="post-date">
                                        <i class="icon-calendar-with-spring-binder-and-date-blocks"></i>
                                        Dec 18, 2016
                                    </h6>
                                </div>
                            </li>
                            <li>
                                <div class="img-holder">
                                    <img src="images/sidebar/recent-news-3.jpg" alt="Awesome Image">
                                    <div class="overlay-style-two">
                                        <div class="box">
                                            <div class="content">
                                                <a href="#">
                                                    <i class="fa fa-link" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>    
                                </div>
                                <div class="title-holder">
                                    <a href="#">
                                        <h5 class="post-title">
                                            Why experts go with<br> Assurance.
                                        </h5>
                                    </a>
                                    <h6 class="post-date">
                                        <i class="icon-calendar-with-spring-binder-and-date-blocks"></i>
                                        Nov 21, 2016
                                    </h6>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!--End single sidebar-->
                    <!--Start single-sidebar-->
                    <div class="single-sidebar popular-tag">
                        <div class="sec-title">
                            <h3>Tag Cloud</h3>
                            <span class="border"></span>
                        </div>
                        <ul class="popular-tag">
                            <li><a href="#">Book</a></li>
                            <li><a href="#">Company</a></li>
                            <li><a href="#">Ideas</a></li>
                            <li><a href="#">Energy</a></li>
                            <li><a href="#">Engines</a></li>
                            <li><a href="#">Chemical</a></li>
                            <li><a href="#">Industry</a></li>
                            <li><a href="#">Research</a></li>
                        </ul>      
                    </div> 
                    <!--End single-sidebar-->
                    <!--Start single-sidebar-->
                    <div class="single-sidebar">
                        <div class="business-enquiry">
                            <h3>For Business Enquiry</h3>
                            <p>You can also send us an <a href="#">email</a> and we’ll get in touch shortly, or You can call to our toll free number<br><a href="#">(+91) 1800-700-6202.</a></p>
                        </div>
                    </div> 
                    <!--End single-sidebar-->
                </div>    
            </div>
            <!--End Sidebar Wrapper-->  
        </div>
    </div>
</section> 
<!--End blog area-->   
@endsection