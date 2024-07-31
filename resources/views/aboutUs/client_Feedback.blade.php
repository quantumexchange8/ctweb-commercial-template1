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
		<h1>Client Feedback</h1>
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
                <li>Client Feedback</li>
            </ul>    
        </div>
        <div class="right pull-right">
            <a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i>Share</a>
        </div>  
    </div>
</section>
<!--End breadcrumb bottom area-->
 
<!--Start client feedback area-->
<section class="client-feedback-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12 pull-right">
                <div class="testimonial-content">
                    <div class="row">
                        <!--Start single testimonial item-->
                        <div class="col-md-6">
                            <div class="single-testimonial-item">
                                <div class="text-holder">
                                    <p>Architect Michael Gregory worked with me to seds all bring my concept from design for to reality -providing much appreciated guidance. Gregory worked with bring my concept from designing reality designs sales termsheet nich market Startup.</p>
                                </div> 
                                <div class="client-info">
                                    <div class="img-box">
                                        <img src="images/testimonial/tes-1.jpg" alt="Awesome Image">
                                    </div>
                                    <div class="title-box">
                                        <h4>James Viltones</h4>
                                        <p>Dream Theme</p>
                                    </div> 
                                </div>
                            </div>
                        </div>
                        <!--End single testimonial item-->
                        <!--Start single testimonial item-->
                        <div class="col-md-6">
                            <div class="single-testimonial-item">
                                <div class="text-holder">
                                    <p>This company is professional, creative, good & Great knowledgeable. Dwayne vat our designer was fully patient, accommodating and experienced and good Gregory worked with me bring my concept know all from design to reality designs.</p>
                                </div> 
                                <div class="client-info">
                                    <div class="img-box">
                                        <img src="images/testimonial/tes-2.jpg" alt="Awesome Image">
                                    </div>
                                    <div class="title-box">
                                        <h4>Mary Williamson</h4>
                                        <p>Newyork</p>
                                    </div> 
                                </div>
                            </div>
                        </div>
                        <!--End single testimonial item-->      
                    </div>
                    <div class="row">
                        <!--Start single testimonial item-->
                        <div class="col-md-6">
                            <div class="single-testimonial-item">
                                <div class="text-holder">
                                    <p>Assurance Consulting Company is professional, creative and knowledgeable. Dwayne our designer was great & patient, accommodating and experienced and workers Gregory worked with me bring my concept started from design to reality designs.</p>
                                </div> 
                                <div class="client-info">
                                    <div class="img-box">
                                        <img src="images/testimonial/tes-3.jpg" alt="Awesome Image">
                                    </div>
                                    <div class="title-box">
                                        <h4>Brad Johnson</h4>
                                        <p>Rex Fertilizer</p>
                                    </div> 
                                </div>
                            </div>
                        </div>
                        <!--End single testimonial item-->
                        <!--Start single testimonial item-->
                        <div class="col-md-6">
                            <div class="single-testimonial-item">
                                <div class="text-holder">
                                    <p>Architect Michael Gregory worked with me to seds all bring my concept from design for to reality -providing much appreciated guidance. Gregory worked with bring my concept from designing reality designs sales termsheet nich market Startup.</p>
                                </div> 
                                <div class="client-info">
                                    <div class="img-box">
                                        <img src="images/testimonial/tes-4.jpg" alt="Awesome Image">
                                    </div>
                                    <div class="title-box">
                                        <h4>David Fernando</h4>
                                        <p>Park Gardern</p>
                                    </div> 
                                </div>
                            </div>
                        </div>
                        <!--End single testimonial item-->      
                    </div>
                    <div class="row">
                        <!--Start single testimonial item-->
                        <div class="col-md-6">
                            <div class="single-testimonial-item">
                                <div class="text-holder">
                                    <p>This company is professional, creative, good & Great knowledgeable. Dwayne vat our designer was fully patient, accommodating and experienced and good Gregory worked with me bring my concept know all from design to reality designs.</p>
                                </div> 
                                <div class="client-info">
                                    <div class="img-box">
                                        <img src="images/testimonial/tes-5.jpg" alt="Awesome Image">
                                    </div>
                                    <div class="title-box">
                                        <h4>Mary Williamson</h4>
                                        <p>Newyork</p>
                                    </div> 
                                </div>
                            </div>
                        </div>
                        <!--End single testimonial item-->
                        <!--Start single testimonial item-->
                        <div class="col-md-6">
                            <div class="single-testimonial-item">
                                <div class="text-holder">
                                    <p>Assurance Consulting Company is professional, creative and knowledgeable. Dwayne our designer was great & patient, accommodating and experienced and workers Gregory worked with me bring my concept started from design to reality designs.</p>
                                </div> 
                                <div class="client-info">
                                    <div class="img-box">
                                        <img src="images/testimonial/tes-6.jpg" alt="Awesome Image">
                                    </div>
                                    <div class="title-box">
                                        <h4>Brad Johnson</h4>
                                        <p>Rex Fertilizer</p>
                                    </div> 
                                </div>
                            </div>
                        </div>
                        <!--End single testimonial item-->      
                    </div>
                    <div class="row">
                        <!--Start single testimonial item-->
                        <div class="col-md-6">
                            <div class="single-testimonial-item">
                                <div class="text-holder">
                                    <p>Architect Michael Gregory worked with me to seds all bring my concept from design for to reality -providing much appreciated guidance. Gregory worked with bring my concept from designing reality designs sales termsheet nich market Startup.</p>
                                </div> 
                                <div class="client-info">
                                    <div class="img-box">
                                        <img src="images/testimonial/tes-7.jpg" alt="Awesome Image">
                                    </div>
                                    <div class="title-box">
                                        <h4>James Viltones</h4>
                                        <p>Dream Theme</p>
                                    </div> 
                                </div>
                            </div>
                        </div>
                        <!--End single testimonial item-->
                        <!--Start single testimonial item-->
                        <div class="col-md-6">
                            <div class="single-testimonial-item">
                                <div class="text-holder">
                                    <p>Architect Michael Gregory worked with me to seds all bring my concept from design for to reality -providing much appreciated guidance. Gregory worked with bring my concept from designing reality designs sales termsheet nich market Startup.</p>
                                </div> 
                                <div class="client-info">
                                    <div class="img-box">
                                        <img src="images/testimonial/tes-8.jpg" alt="Awesome Image">
                                    </div>
                                    <div class="title-box">
                                        <h4>David Fernando</h4>
                                        <p>Park Gardern</p>
                                    </div> 
                                </div>
                            </div>
                        </div>
                        <!--End single testimonial item-->      
                    </div>
                    
                </div> 
            </div>
            
            <div class="col-lg-3 col-md-4 col-sm-7 col-xs-12 pull-left">
                <div class="left-sidebar">
                    <!--Start single sidebar-->
                    <div class="single-sidebar">
                        <ul class="page-link">
                            <li>
                                <a href="/company_Overviews">
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
                                <a class="active" href="/client_Feedback">
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
<!--End client feedback area--> 
@endsection