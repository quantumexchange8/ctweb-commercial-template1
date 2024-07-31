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
		<h1>Blog List View</h1>
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
                <li>Blog List View</li>
            </ul>    
        </div>
        <div class="right pull-right">
            <a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i>Share</a>
        </div>  
    </div>
</section>
<!--End breadcrumb bottom area-->

<!--Start blog list area-->
<section class="blog-list-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">
                <div class="blog-post">
                    <!--Start single latest blog-->
                    <div class="single-blog-post">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="img-holder">
                                    <img src="images/blog/v3-1.jpg" alt="Awesome Image">
                                    <div class="published-date">
                                        <h3>21 Aug</h3>
                                    </div> 
                                    <div class="overlay-style-one">
                                        <div class="box">
                                            <div class="content">
                                                <a href="/blog_SinglePost"><i class="fa fa-link" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="text-holder">
                                    <a href="/blog_SinglePost">
                                        <h3 class="blog-title">Our operations worldwide have been neutral since 2010</h3>
                                    </a>
                                    <div class="text">
                                        <p>These men promptly escaped frotm maximum security stockade to the underground. The Brady Bunch the Brady seds Buncn what do you think, which is that greatest.</p>
                                    </div> 
                                    <div class="meta-info clearfix">
                                        <div class="left pull-left">
                                            <ul class="post-info">
                                                <li>By <a href="#">Fletcher</a></li>
                                                <li><a href="#">Finance, Service</a></li>    
                                            </ul>    
                                        </div>
                                        <div class="right pull-right">
                                            <a class="post-share" href="#"><i class="fa fa-share-alt" aria-hidden="true"></i></a>  
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End single latest blog-->
                    <!--Start single latest blog-->
                    <div class="single-blog-post">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="img-holder">
                                    <img src="images/blog/v3-2.jpg" alt="Awesome Image">
                                    <div class="published-date">
                                        <h3>14 July</h3>
                                    </div> 
                                    <div class="overlay-style-one">
                                        <div class="box">
                                            <div class="content">
                                                <a href="/blog_SinglePost"><i class="fa fa-link" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="text-holder">
                                    <a href="/blog_SinglePost">
                                        <h3 class="blog-title">Finance and legal work streams occur throughout the project</h3>
                                    </a>
                                    <div class="text">
                                        <p>It also aims to raise awareness among designers and too provide them with the appropriated experience on how to sed take sed of the hudge opportunities.</p>
                                    </div> 
                                    <div class="meta-info clearfix">
                                        <div class="left pull-left">
                                            <ul class="post-info">
                                                <li>By <a href="#">Van Roger</a></li>
                                                <li><a href="#">Service, Public Sector</a></li>    
                                            </ul>    
                                        </div>
                                        <div class="right pull-right">
                                            <a class="post-share" href="#"><i class="fa fa-share-alt" aria-hidden="true"></i></a>  
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End single latest blog-->
                    <!--Start single latest blog-->
                    <div class="single-blog-post">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="img-holder">
                                    <img src="images/blog/v3-3.jpg" alt="Awesome Image">
                                    <div class="published-date">
                                        <h3>07 May</h3>
                                    </div> 
                                    <div class="overlay-style-one">
                                        <div class="box">
                                            <div class="content">
                                                <a href="/blog_SinglePost"><i class="fa fa-link" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="text-holder">
                                    <a href="/blog_SinglePost">
                                        <h3 class="blog-title">Strategic and commercial approach with all type of issues</h3>
                                    </a>
                                    <div class="text">
                                        <p>Becoming more importants, but current trends we seds ut should been looking to others off solutions. Completed, comprehensive consultings prefabrication of sed components.</p>
                                    </div> 
                                    <div class="meta-info clearfix">
                                        <div class="left pull-left">
                                            <ul class="post-info">
                                                <li>By <a href="#">Mark Anto</a></li>
                                                <li><a href="#">Industry, Finance</a></li>    
                                            </ul>    
                                        </div>
                                        <div class="right pull-right">
                                            <a class="post-share" href="#"><i class="fa fa-share-alt" aria-hidden="true"></i></a>  
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End single latest blog-->
                    <!--Start single latest blog-->
                    <div class="single-blog-post">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="img-holder">
                                    <img src="images/blog/v3-4.jpg" alt="Awesome Image">
                                    <div class="published-date">
                                        <h3>28 Mar</h3>
                                    </div> 
                                    <div class="overlay-style-one">
                                        <div class="box">
                                            <div class="content">
                                                <a href="/blog_SinglePost"><i class="fa fa-link" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="text-holder">
                                    <a href="/blog_SinglePost">
                                        <h3 class="blog-title">Our operations worldwide have been neutral since 2010</h3>
                                    </a>
                                    <div class="text">
                                        <p>These men promptly escaped frotm maximum security stockade to the underground. The Brady Bunch the Brady seds Buncn what do you think, which is that greatest.</p>
                                    </div> 
                                    <div class="meta-info clearfix">
                                        <div class="left pull-left">
                                            <ul class="post-info">
                                                <li>By <a href="#">Fletcher</a></li>
                                                <li><a href="#">Financial, Consulting</a></li>    
                                            </ul>    
                                        </div>
                                        <div class="right pull-right">
                                            <a class="post-share" href="#"><i class="fa fa-share-alt" aria-hidden="true"></i></a>  
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End single latest blog-->
                    <!--Start single latest blog-->
                    <div class="single-blog-post">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="img-holder">
                                    <img src="images/blog/v3-5.jpg" alt="Awesome Image">
                                    <div class="published-date">
                                        <h3>17 Mar</h3>
                                    </div> 
                                    <div class="overlay-style-one">
                                        <div class="box">
                                            <div class="content">
                                                <a href="/blog_SinglePost"><i class="fa fa-link" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="text-holder">
                                    <a href="/blog_SinglePost">
                                        <h3 class="blog-title">Finance and legal work streams occur throughout the project</h3>
                                    </a>
                                    <div class="text">
                                        <p>It also aims to raise awareness among designers and too provide them with the appropriated experience on how to sed take sed of the hudge opportunities.</p>
                                    </div> 
                                    <div class="meta-info clearfix">
                                        <div class="left pull-left">
                                            <ul class="post-info">
                                                <li>By <a href="#">Van Roger</a></li>
                                                <li><a href="#">Service, Public Sector</a></li>    
                                            </ul>    
                                        </div>
                                        <div class="right pull-right">
                                            <a class="post-share" href="#"><i class="fa fa-share-alt" aria-hidden="true"></i></a>  
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End single latest blog-->
                    <!--Start single latest blog-->
                    <div class="single-blog-post">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="img-holder">
                                    <img src="images/blog/v3-6.jpg" alt="Awesome Image">
                                    <div class="published-date">
                                        <h3>09 Mar</h3>
                                    </div> 
                                    <div class="overlay-style-one">
                                        <div class="box">
                                            <div class="content">
                                                <a href="/blog_SinglePost"><i class="fa fa-link" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="text-holder">
                                    <a href="/blog_SinglePost">
                                        <h3 class="blog-title">Strategic and commercial approach with all type of issues</h3>
                                    </a>
                                    <div class="text">
                                        <p>Becoming more importants, but current trends we seds ut should been looking to others off solutions. Completed, comprehensive consultings prefabrication of sed components.</p>
                                    </div> 
                                    <div class="meta-info clearfix">
                                        <div class="left pull-left">
                                            <ul class="post-info">
                                                <li>By <a href="#">Mark Anto</a></li>
                                                <li><a href="#">Industry, Finance</a></li>    
                                            </ul>    
                                        </div>
                                        <div class="right pull-right">
                                            <a class="post-share" href="#"><i class="fa fa-share-alt" aria-hidden="true"></i></a>  
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End single latest blog-->
                </div> 
                <div class="row">
                    <div class="col-md-12">
                        <!--Start post pagination-->
                        <div class="row">
                            <div class="col-md-12"> 
                                <ul class="post-pagination text-center">
                                    <li><a href="#"><i class="fa fa-caret-left" aria-hidden="true"></i></a></li>
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i></a></li>
                                </ul>
                            </div> 
                        </div>
                        <!--End post pagination-->
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
<!--End blog list area-->  
@endsection