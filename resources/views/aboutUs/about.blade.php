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
                                <li class="dropdown current"><a href="/about">About us</a>
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
		<h1>About</h1>
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
                <li>About Us</li>
            </ul>    
        </div>
        <div class="right pull-right">
            <a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i>Share</a>
        </div>  
    </div>
</section>
<!--End breadcrumb bottom area-->
 
<!--Start company overview area-->
<section class="company-overview-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12 pull-right">
                <div class="row">
                    <div class="col-md-12">
                        <div class="top-img-box">
                            <img src="images/company-overview/top-image.jpg" alt="Awesome Image">
                        </div>
                    </div>
                </div>
                <div class="row overview-content-pdbottom">
                    <div class="col-md-7">
                        <div class="overview-content">
                            <div class="sec-title">
                                <h1>Overview</h1>
                                <span class="border"></span>
                            </div>
                            <div class="text">
                                <p>We have over 20 years of experience we’ll ensure you always get the best guidance. serve clients at every level of their organizations, seds in whatever capacity we can be sed most useful, whether as a trusted advisor to top management sed ut or ours hands-on coach for front line employees.</p>
                                <p>For more  every engagement, we assemble team with the most appropriated experience and more expertis Our goal is too optimises our customers business seds uts relationships.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="progress-br">
                            <div class="pgrs-bar-wrapper">
                                <div class="inner-box">
                                    <ul class="pgrs-bar">
                                        <li>
                                            <h5>Consulting</h5>
                                            <div class="box">
                                                <div class="inner wow fadeInLeft" data-wow-duration="2s" data-wow-delay="0s" data-wow-offset="0" style="width: 90%;">
                                                    <span>90%</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <h5>Finance</h5>
                                            <div class="box">
                                                <div class="inner wow fadeInLeft" data-wow-duration="2s" data-wow-delay=".5s" data-wow-offset="0" style="width: 65%;">
                                                    <span>65%</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <h5>Marketing</h5>
                                            <div class="box">
                                                <div class="inner wow fadeInLeft" data-wow-duration="2s" data-wow-delay=".5s" data-wow-offset="0" style="width: 80%;">
                                                    <span>80%</span>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>  
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-7">
                        <div class="mission-content">
                            <div class="sec-title">
                                <h3>Our Mission</h3>
                                <span class="border"></span>
                            </div> 
                            <ul>
                                <li>
                                    <div class="icon-holder">
                                        <span class="icon-gesture"></span>    
                                    </div>
                                    <div class="text-holder">
                                        <h4>Vision to Plan</h4>
                                        <p>The process of improving measure of  enterpprise's success Business growth can be a achieved.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon-holder">
                                        <span class="icon-luxury"></span>    
                                    </div>
                                    <div class="text-holder">
                                        <h4>Plan to Market</h4>
                                        <p>Plan Market is a priority interest for many of organizations, when it comes to sustainability & corporate.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon-holder">
                                        <span class="icon-writing"></span>    
                                    </div>
                                    <div class="text-holder">
                                        <h4>Market to Growth</h4>
                                        <p>Who loves or pursues or desires to obtain pain of sed itself, because pain, but because occasionally.</p>
                                    </div>
                                </li>
                                
                            </ul>   
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="mission-video-gallery">
                            <div class="video-holder">
                                <img src="images/company-overview/mission-video-gallery.jpg" alt="Awesome Video Gallery">
                                <div class="overlay-gallery">
                                    <div class="icon-holder">
                                        <div class="icon">
                                            <a class="html5lightbox" title="Assurance Video Gallery" href="https://www.youtube.com/watch?v=XOv7RmXi7VE"><img src="images/icon/play-btn-1.png" alt="Play Button"></a>   
                                        </div>
                                    </div>    
                                </div>
                            </div>
                        </div>    
                    </div>
                </div> 
                <div class="row">
                    <div class="col-md-12">
                        <div class="growth-statistics-content">
                            <div class="sec-title">
                                <h3>Growth Statistics</h3>
                                <span class="border"></span>
                            </div>
                            <div class="text">
                                <p>Assurance Consulting is 20 years in IT Security consulting business, started by two enthusiasts it grew to team of 20 high-skilled IT Security consulting specialists. Here is how we started. Whether as a trusted advisors to top managements or as a hands-on coaches for front line employees. </p>
                            </div>
                            <div class="chart">
                                <img src="images/company-overview/chart.jpg" alt="Awesome Image">
                            </div>     
                        </div>
                    </div>
                </div> 
                  
               
            </div>
            <div class="col-lg-3 col-md-4 col-sm-7 col-xs-12 pull-left">
                <div class="left-sidebar">
                    <!--Start single sidebar-->
                    <div class="single-sidebar">
                        <ul class="page-link">
                            <li>
                                <a class="active" href="/company_Overviews">
                                    Company Overview
                                    <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li>
                                <a href="/company_History">
                                    Company History
                                    <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li>
                                <a href="/ourTeam">
                                    Our Team
                                    <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li>
                                <a href="/faqs">
                                    FAQ’s
                                    <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li>
                                <a href="/ourPartners">
                                    Our Partner
                                    <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li>
                                <a href="/client_Feedback">
                                    Client Feedback
                                    <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                                </a>
                            </li>            
                        </ul>
                    </div>
                    <!--End single sidebar-->
                    <!--Start single sidebar-->
                    <div class="single-sidebar">
                        <ul class="download-link">
                            <li>
                                <a href="#">
                                    <div class="icon-holder">
                                        <span class="icon-pdf"></span>    
                                    </div>
                                    <div class="title-holder">
                                        <h5>Our Presentation.PDF</h5>    
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="icon-holder">
                                        <span class="icon-word-document"></span>    
                                    </div>
                                    <div class="title-holder">
                                        <h5>Financial Report.DOC</h5>    
                                    </div>
                                </a>
                            </li>
                        </ul> 
                    </div>
                    <!--End single sidebar-->
                    <!--Start single sidebar-->
                    <div class="single-sidebar">
                        <div class="sidebar-testimonial">
                            <div class="text-box">
                                <p>They have got my project on time with competition well organized and very experienced team of professional engineers and good leaders.</p>
                            </div>
                            <div class="client-info">
                                <div class="img-box">
                                    <img src="images/testimonial/sidebar-testimonial.png" alt="Client Photo">
                                </div>
                                <div class="title-box">
                                    <h4>Mark Vilton <span>- Villo Ceo</span></h4>
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
                            </div>
                        </div>    
                    </div>
                    <!--End single sidebar-->
                    <!--Start single sidebar-->
                    <div class="single-sidebar">
                        <div class="business-enquiry">
                            <h4>For Business Enquiry</h4>
                            <p>
                                You can also send us an <a href="#">email</a> and we’ll get in touch shortly, or You can call to our toll free number<br> 
                                <a href="#">(+91) 1800-700-6202.</a>
                            </p>    
                        </div>  
                    </div>
                    <!--End single sidebar-->
                </div>
            </div>
            
        </div>
    </div>
</section> 
<!--End company overview area-->
@endsection