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
                                <li class="dropdown current"><a href="/services">Our Services</a>
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
		<h1>Risk Management</h1>
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
                <li><a href="/services">Services</a></li>
                <li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                <li>Risk Management</li>
            </ul>    
        </div>
        <div class="right pull-right">
            <a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i>Share</a>
        </div>  
    </div>
</section>
<!--End breadcrumb bottom area-->

<!--Start Risk Management area-->
<section id="single-service-area" class="risk-management-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12 pull-right">
                <div class="content-box">
                    <!--Start top content-->
                    <div class="row">
                        <div class="top-content">
                            <div class="col-lg-5 col-md-12">
                                <div class="text-holder">
                                    <p>We work closely with Employers across the industry sectors to ensures their internal Human Resources of systems and processes align to uts their business on requirements of our “Best Practices” strategies thats all HR processes ut are ut directly aligned legislative obligattions works closely with Employers across all industry sectors to ensure seds their internal human Resource systems and processes.</p>
                                    <ul>
                                        <li>Smart way to work and get good results</li>
                                        <li>To create value and make a diffrence</li>
                                        <li>Be a great place to work people inspired</li>
                                        <li>Inspire moments of optimism & Happiness</li>
                                    </ul>
                                </div>    
                            </div>
                            <div class="col-lg-7 col-md-12">
                                <div class="img-holder">
                                    <img src="images/services/service-single/risk-management.jpg" alt="Awesome Image">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End top content-->
                    <!--Start border-->
                    <div class="row">
                        <div class="col-md-12">
                            <span class="border1px"></span>
                        </div>
                    </div>
                    <!--End border-->
                    <!--Start middle content -->
                    <div class="row">
                        <div class="middle-content">
                            <!--Start single item-->
                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                <div class="single-item">
                                    <div class="icon-holder">
                                        <span class="icon-hexagon"></span>    
                                    </div>
                                    <div class="text-holder">
                                        <h3>Why We Consulting</h3>
                                        <p>We have over 25 years experience in Consulting Service.</p>
                                    </div>    
                                </div>
                            </div>
                            <!--End single item-->
                            <!--Start single item-->
                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                <div class="single-item">
                                    <div class="icon-holder">
                                        <span class="icon-tool"></span>    
                                    </div>
                                    <div class="text-holder">
                                        <h3>Pay for Success</h3>
                                        <p>We present you the various topics of business consultations</p>
                                    </div>    
                                </div>
                            </div>
                            <!--End single item-->
                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                <div class="single-item">
                                    <div class="icon-holder">
                                        <span class="icon-business"></span>    
                                    </div>
                                    <div class="text-holder">
                                        <h3>Tailor-Made Solutions</h3>
                                        <p>Always work with premium community development impact investors.</p>
                                    </div>    
                                </div>
                            </div>
                            <!--End single item-->
                            <!--End single item-->
                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                <div class="single-item">
                                    <div class="icon-holder">
                                        <span class="icon-people "></span>    
                                    </div>
                                    <div class="text-holder">
                                        <h3>Segregated Accounts</h3>
                                        <p>Raising business development, and the involvement of partners.</p>
                                    </div>    
                                </div>
                            </div>
                            <!--End single item-->
                        </div>
                    </div>
                    <!--End middle content -->      
                    <!--Start profit-improvement-content-->
                    <div class="row">
                        <div class="profit-improvement-content">
                            <div class="col-md-12">
                                <div class="sec-title">
                                    <h2>Profit Improvement</h2>
                                    <span class="border"></span>
                                </div>
                                <div class="row">
                                    <div class="col-lg-7 col-md-12">
                                        <div class="text-holder">
                                            <p>We assist organizations that are underperforming or seeking us profit as well as those in transition those or in the midst get our significant whatever the situation.</p> 
                                            <ul>
                                                <li>Cost-reduction opportunity analysis</li>
                                                <li class="yellow">Revenue and margin improvement strategies</li>
                                                <li class="green">Lean, Six Sigma and continuous improvement</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-12">
                                        <div class="profit-improvement">
                                            <img src="images/services/service-single/chart-1.png" alt="Chart">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End profit-improvement-content-->
                    <!--Start accordion box-->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="accordion-box">
                                <!--Start single accordion box-->
                                <div class="accordion accordion-block">
                                    <div class="accord-btn">
                                        <h4>Assurance Consulting have a unique way of working</h4>
                                    </div>
                                    <div class="accord-content">
                                        <p>Supported by a robust sales force and tight cost controls, Pharm Ltd. experienced sustained double-digit growth over a number of years, only too find that their supply chains struggled to keep seds pace. In particulars, the initial state off the company’s sales denouncings pleasure and praisings pain was born and I will give you a complete </p>
                                    </div>
                                </div>
                                <!--End single accordion box--> 
                                <!--Start single accordion box-->
                                <div class="accordion accordion-block">
                                    <div class="accord-btn active">
                                        <h4>We bring together the best people to the world</h4>
                                    </div>
                                    <div class="accord-content collapsed">
                                        <p>Supported by a robust sales force and tight cost controls, Pharm Ltd. experienced sustained double-digit growth over a number of years, only too find that their supply chains struggled to keep seds pace. In particulars, the initial state off the company’s sales denouncings pleasure and praisings pain was born and I will give you a complete </p>
                                    </div>
                                </div>
                                <!--End single accordion box-->
                                <!--Start single accordion box-->
                                <div class="accordion accordion-block">
                                    <div class="accord-btn">
                                        <h4>How do I submit a sponsorship request?</h4>
                                    </div>
                                    <div class="accord-content">
                                        <p>Supported by a robust sales force and tight cost controls, Pharm Ltd. experienced sustained double-digit growth over a number of years, only too find that their supply chains struggled to keep seds pace. In particulars, the initial state off the company’s sales denouncings pleasure and praisings pain was born and I will give you a complete </p>
                                    </div>
                                </div>
                                <!--End single accordion box-->       
                            </div>
                        </div>
                    </div>
                    <!--End accordion box-->
                    <!--Start stratergy-development-content-->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="stratergy-development-content">
                                <div class="sec-title">
                                    <h2>Stratergy Development</h2>
                                    <span class="border"></span>
                                </div>
                                <div class="text-holder">
                                    <p>How all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete accounts of the system, and expounds the actual teachings of the great explorer seds of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure sed itself, because it is pleasure, but because those who do not know how to pleasure rationally encounter consequences that are extremely.</p>
                                </div>
                                <div class="chart-holder">
                                    <img src="images/services/service-single/chart-2.jpg" alt="Chart">
                                </div>
                            </div>    
                        </div>
                    </div>
                    <!--End stratergy-development-content-->
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-7 col-xs-12 pull-left">
                <div class="left-sidebar">
                    <!--Start single sidebar-->
                    <div class="single-sidebar">
                        <ul class="page-link">
                            <li>
                                <a href="/business_Planning">
                                    Business Planning
                                    <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li>
                                <a href="/audit_N_Assurance">
                                    Audit & Assurance
                                    <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li>
                                <a href="/trades_N_Stocks">
                                    Trades & Stocks
                                    <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li>
                                <a href="/investment_Plan">
                                    Investment Plan
                                    <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li>
                                <a href="/succession_Planning">
                                    Succession Planning
                                    <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li>
                                <a class="active" href="/risk_Management">
                                    Risk Management
                                    <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li>
                                <a href="/strategic_Planning">
                                    Strategic Planning
                                    <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                                </a>
                            </li>  
                            <li>
                                <a href="/financial_Projections">
                                    Financial Projections
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
<!--End Risk Management area-->
@endsection