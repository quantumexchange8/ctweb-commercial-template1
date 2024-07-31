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
		<h1>Meet Our Team</h1>
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
                <li>Meet Our Team</li>
            </ul>    
        </div>
        <div class="right pull-right">
            <a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i>Share</a>
        </div>  
    </div>
</section>
<!--End breadcrumb bottom area-->
 
<!--Start team area-->
<section class="team-page-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12 pull-right">
                <div class="row">
                    <!--Start single team member-->
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="single-team-member hvr-shadow">
                            <div class="img-holder">
                                <img src="images/team/1.jpg" alt="Awesome Image">
                                <div class="overlay-style-two">
                                    <div class="box">
                                        <div class="content">
                                            <ul>
                                                <li>
                                                    <a href="#">
                                                        <i class="fa fa-facebook" aria-hidden="true"></i> 
                                                    </a>
                                                    <a href="#">
                                                        <i class="fa fa-twitter" aria-hidden="true"></i>
                                                    </a>
                                                    <a href="#">
                                                        <i class="fa fa-skype" aria-hidden="true"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-holder">
                                <a href="#">
                                    <h3>David Vigo Michel</h3>
                                </a>
                                <span>Founder & CEO</span>
                                <p>The MD of Assuarnce Consulting, he has been the captain of his team. </p>
                            </div>
                        </div>
                    </div>
                    <!--End single team member-->
                    <!--Start single team member-->
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="single-team-member hvr-shadow">
                            <div class="img-holder">
                                <img src="images/team/2.jpg" alt="Awesome Image">
                                <div class="overlay-style-two">
                                    <div class="box">
                                        <div class="content">
                                            <ul>
                                                <li>
                                                    <a href="#">
                                                        <i class="fa fa-facebook" aria-hidden="true"></i> 
                                                    </a>
                                                    <a href="#">
                                                        <i class="fa fa-twitter" aria-hidden="true"></i>
                                                    </a>
                                                    <a href="#">
                                                        <i class="fa fa-skype" aria-hidden="true"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-holder">
                                <a href="#">
                                    <h3>Rebecca Garza</h3>
                                </a>
                                <span>Administrator</span>
                                <p>She is an Assurance Consulting first technical adviser & developer.</p>
                            </div>
                        </div>
                    </div>
                    <!--End single team member-->
                    <!--Start single team member-->
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="single-team-member hvr-shadow">
                            <div class="img-holder">
                                <img src="images/team/3.jpg" alt="Awesome Image">
                                <div class="overlay-style-two">
                                    <div class="box">
                                        <div class="content">
                                            <ul>
                                                <li>
                                                    <a href="#">
                                                        <i class="fa fa-facebook" aria-hidden="true"></i> 
                                                    </a>
                                                    <a href="#">
                                                        <i class="fa fa-twitter" aria-hidden="true"></i>
                                                    </a>
                                                    <a href="#">
                                                        <i class="fa fa-skype" aria-hidden="true"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-holder">
                                <a href="#">
                                    <h3>Stepthen Adams</h3>
                                </a>
                                <span>Chief Finance Officer</span>
                                <p>He managed to bring the company as well as our Consulting.</p>
                            </div>
                        </div>
                    </div>
                    <!--End single team member-->
                </div>
                <div class="row">
                    <!--Start single team member-->
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="single-team-member hvr-shadow">
                            <div class="img-holder">
                                <img src="images/team/4.jpg" alt="Awesome Image">
                                <div class="overlay-style-two">
                                    <div class="box">
                                        <div class="content">
                                            <ul>
                                                <li>
                                                    <a href="#">
                                                        <i class="fa fa-facebook" aria-hidden="true"></i> 
                                                    </a>
                                                    <a href="#">
                                                        <i class="fa fa-twitter" aria-hidden="true"></i>
                                                    </a>
                                                    <a href="#">
                                                        <i class="fa fa-skype" aria-hidden="true"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-holder">
                                <a href="#">
                                    <h3>Robert Thiam</h3>
                                </a>
                                <span>Team Leader</span>
                                <p>The MD of Our Consulting, he has been the captain of his team.</p>
                            </div>
                        </div>
                    </div>
                    <!--End single team member-->
                    <!--Start single team member-->
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="single-team-member hvr-shadow">
                            <div class="img-holder">
                                <img src="images/team/5.jpg" alt="Awesome Image">
                                <div class="overlay-style-two">
                                    <div class="box">
                                        <div class="content">
                                            <ul>
                                                <li>
                                                    <a href="#">
                                                        <i class="fa fa-facebook" aria-hidden="true"></i> 
                                                    </a>
                                                    <a href="#">
                                                        <i class="fa fa-twitter" aria-hidden="true"></i>
                                                    </a>
                                                    <a href="#">
                                                        <i class="fa fa-skype" aria-hidden="true"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-holder">
                                <a href="#">
                                    <h3>Giana Fernando</h3>
                                </a>
                                <span>VP Marketing</span>
                                <p>He is an Assurance Vice president for marketing department.</p>
                            </div>
                        </div>
                    </div>
                    <!--End single team member-->
                    <!--Start single team member-->
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="single-team-member hvr-shadow">
                            <div class="img-holder">
                                <img src="images/team/6.jpg" alt="Awesome Image">
                                <div class="overlay-style-two">
                                    <div class="box">
                                        <div class="content">
                                            <ul>
                                                <li>
                                                    <a href="#">
                                                        <i class="fa fa-facebook" aria-hidden="true"></i> 
                                                    </a>
                                                    <a href="#">
                                                        <i class="fa fa-twitter" aria-hidden="true"></i>
                                                    </a>
                                                    <a href="#">
                                                        <i class="fa fa-skype" aria-hidden="true"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-holder">
                                <a href="#">
                                    <h3>Marry William</h3>
                                </a>
                                <span>Chief Marketing Officer</span>
                                <p>Community Head and has worked tire lessly to help the needy.</p>
                            </div>
                        </div>
                    </div>
                    <!--End single team member-->
                </div>
                <div class="row">
                    <!--Start single team member-->
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="single-team-member hvr-shadow">
                            <div class="img-holder">
                                <img src="images/team/7.jpg" alt="Awesome Image">
                                <div class="overlay-style-two">
                                    <div class="box">
                                        <div class="content">
                                            <ul>
                                                <li>
                                                    <a href="#">
                                                        <i class="fa fa-facebook" aria-hidden="true"></i> 
                                                    </a>
                                                    <a href="#">
                                                        <i class="fa fa-twitter" aria-hidden="true"></i>
                                                    </a>
                                                    <a href="#">
                                                        <i class="fa fa-skype" aria-hidden="true"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-holder">
                                <a href="#">
                                    <h3>Lilly Rogerio</h3>
                                </a>
                                <span>Accountant</span>
                                <p>The Accountant of Assurance She has very unique talents like.</p>
                            </div>
                        </div>
                    </div>
                    <!--End single team member-->
                    <!--Start single team member-->
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="single-team-member hvr-shadow">
                            <div class="img-holder">
                                <img src="images/team/8.jpg" alt="Awesome Image">
                                <div class="overlay-style-two">
                                    <div class="box">
                                        <div class="content">
                                            <ul>
                                                <li>
                                                    <a href="#">
                                                        <i class="fa fa-facebook" aria-hidden="true"></i> 
                                                    </a>
                                                    <a href="#">
                                                        <i class="fa fa-twitter" aria-hidden="true"></i>
                                                    </a>
                                                    <a href="#">
                                                        <i class="fa fa-skype" aria-hidden="true"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-holder">
                                <a href="#">
                                    <h3>Jacob Serina</h3>
                                </a>
                                <span>HR Manager</span>
                                <p>She is an Assurance Consulting  HR Manager and shedeveloping.</p>
                            </div>
                        </div>
                    </div>
                    <!--End single team member-->
                    <!--Start single team member-->
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="single-team-member hvr-shadow">
                            <div class="img-holder">
                                <img src="images/team/9.jpg" alt="Awesome Image">
                                <div class="overlay-style-two">
                                    <div class="box">
                                        <div class="content">
                                            <ul>
                                                <li>
                                                    <a href="#">
                                                        <i class="fa fa-facebook" aria-hidden="true"></i> 
                                                    </a>
                                                    <a href="#">
                                                        <i class="fa fa-twitter" aria-hidden="true"></i>
                                                    </a>
                                                    <a href="#">
                                                        <i class="fa fa-skype" aria-hidden="true"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-holder">
                                <a href="#">
                                    <h3>Mark Antony</h3>
                                </a>
                                <span>Team Leader</span>
                                <p>Community Head and has worked tire lessly to help the needy. </p>
                            </div>
                        </div>
                    </div>
                    <!--End single team member-->
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
                                <a class="active" href="/ourTeam">
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
<!--End team area-->
@endsection