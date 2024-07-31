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
                                <li class="home current"><a href="/home"><span class="fa fa-home"></span></a></li>
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

<!--Start rev slider wrapper-->     
<section class="rev_slider_wrapper">
    <div id="slider1" class="rev_slider"  data-version="5.0">
        <ul>
            
            <li data-transition="slidingoverlayleft">
                <img src="images/slides/1.jpg"  alt="" width="1920" height="550" data-bgposition="top center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="1" >
                
                <div class="tp-caption  tp-resizeme" 
                    data-x="left" data-hoffset="0" 
                    data-y="top" data-voffset="130" 
                    data-transform_idle="o:1;"         
                    data-transform_in="x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;" 
                    data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
                    data-mask_in="x:[100%];y:0;s:inherit;e:inherit;" 
                    data-splitin="none" 
                    data-splitout="none"
                    data-responsive_offset="on"
                    data-start="700">
                    <div class="slide-content-box">
                        <h1>Right place to <br>begin your business </h1>
                        <p>With over 10 years of experience helping businesses to find<br>comprehensive solutions.</p>
                    </div>
                </div>
                <div class="tp-caption tp-resizeme" 
                    data-x="left" data-hoffset="0" 
                    data-y="top" data-voffset="358" 
                    data-transform_idle="o:1;"                         
                    data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                    data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"                     
                    data-splitin="none" 
                    data-splitout="none" 
                    data-responsive_offset="on"
                    data-start="2300">
                    <div class="slide-content-box">
                        <div class="button">
                            <a class="thm-btn bg-clr1" href="#">Meet Experts</a>     
                        </div>
                    </div>
                </div>
                <div class="tp-caption tp-resizeme" 
                    data-x="left" data-hoffset="182" 
                    data-y="top" data-voffset="358" 
                    data-transform_idle="o:1;"                         
                    data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                    data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"                     
                    data-splitin="none" 
                    data-splitout="none" 
                    data-responsive_offset="on"
                    data-start="2600">
                    <div class="slide-content-box">
                        <div class="button">
                            <a class="thm-btn bg-clr2" href="#">Contact Us</a>     
                        </div>
                    </div>
                </div>
            </li>
            <li data-transition="fade">
                <img src="images/slides/2.jpg" alt="" width="1920" height="550" data-bgposition="top center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="1" >
                
                <div class="tp-caption tp-resizeme"
                    data-x="center" data-hoffset="0" 
                    data-y="center" data-voffset="-47" 
                    data-transform_idle="o:1;"         
                    data-transform_in="x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;" 
                    data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
                    data-mask_in="x:[100%];y:0;s:inherit;e:inherit;" 
                    data-splitin="none" 
                    data-splitout="none"  
                    data-start="500">
                    <div class="slide-content-box middle-slide">
                        <h1>Growth doesn’t<br>come without hard work</h1>
                    </div>
                </div>
                <div class="tp-caption tp-resizeme" 
                    data-x="center" data-hoffset="0" 
                    data-y="center" data-voffset="75" 
                    data-transform_idle="o:1;"                         
                    data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                    data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"                     
                    data-splitin="none" 
                    data-splitout="none" 
                    data-responsive_offset="on"
                    data-start="2300">
                    <div class="slide-content-box middle-slide">
                        <div class="button">
                            <a href="#">Work With us today</a>     
                        </div>
                    </div>
                </div>
            </li>
            <li data-transition="slidingoverlayright">
                <img src="images/slides/3.jpg"  alt="" width="1920" height="550" data-bgposition="top center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="1" >
                
                <div class="tp-caption  tp-resizeme" 
                    data-x="left" data-hoffset="0" 
                    data-y="top" data-voffset="130" 
                    data-transform_idle="o:1;"         
                    data-transform_in="x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;" 
                    data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
                    data-mask_in="x:[100%];y:0;s:inherit;e:inherit;" 
                    data-splitin="none" 
                    data-splitout="none"
                    data-responsive_offset="on"
                    data-start="700">
                    <div class="slide-content-box">
                        <h1>We help businesses<br>innovate and grow.</h1>
                        <p>With over 10 years of experience helping businesses to find <br>comprehensive solutions.</p>
                    </div>
                </div>
                <div class="tp-caption tp-resizeme" 
                    data-x="left" data-hoffset="0" 
                    data-y="top" data-voffset="358" 
                    data-transform_idle="o:1;"                         
                    data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                    data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"                     
                    data-splitin="none" 
                    data-splitout="none" 
                    data-responsive_offset="on"
                    data-start="2300">
                    <div class="slide-content-box">
                        <div class="button">
                            <a class="thm-btn bg-clr1" href="#">Our Company</a>     
                        </div>
                    </div>
                </div>
                <div class="tp-caption tp-resizeme" 
                    data-x="left" data-hoffset="182" 
                    data-y="top" data-voffset="358" 
                    data-transform_idle="o:1;"                         
                    data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                    data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"                     
                    data-splitin="none" 
                    data-splitout="none" 
                    data-responsive_offset="on"
                    data-start="2600">
                    <div class="slide-content-box">
                        <div class="button">
                            <a class="thm-btn bg-clr2" href="#">Contact Us</a>     
                        </div>
                    </div>
                </div>
            </li>
            
        </ul>
    </div>
</section>
<!--End rev slider wrapper--> 
    
<!--Start call to action area-->
<section class="call-to-action-area">
    <div class="container">
        <div class="title text-center">
            <h3>We are the leading provider of client solutions with over 10 years of experience helping businesses to find comprehensive solutions and high growth.</h3>
            <p>Assurance is right choice for all type of business, See our services</p>
        </div>
        <div class="row">
            <!--Start single item-->
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="single-item hvr-shadow text-center">
                    <div class="img-holder">
                        <img src="images/callto-action/1.jpg" alt="Awesome Image">
                        <div class="overlay-style-one">
                            <div class="box">
                                <div class="content">
                                    <a href="/business_Planning"><i class="fa fa-link" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-holder">
                        <h3>Business Planning</h3>
                        <p>The process of improving measure of an enterpprise's success. Business growth can be a achieved.</p>
                    </div>
                </div>
            </div>
            <!--End single item-->
            <!--Start single item-->
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="single-item hvr-shadow text-center">
                    <div class="img-holder">
                        <img src="images/callto-action/2.jpg" alt="Awesome Image">
                        <div class="overlay-style-one">
                            <div class="box">
                                <div class="content">
                                    <a href="/audit_N_Assurance"><i class="fa fa-link" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-holder">
                        <h3>Audit & Assurance</h3>
                        <p>Sustainability is a priority interest for many of organizations, when it comes to sustainability & corporate.</p>
                    </div>
                </div>
            </div>
            <!--End single item-->
            <!--Start single item-->
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="single-item hvr-shadow text-center">
                    <div class="img-holder">
                        <img src="images/callto-action/3.jpg" alt="Awesome Image">
                        <div class="overlay-style-one">
                            <div class="box">
                                <div class="content">
                                    <a href="/trades_N_Stocks"><i class="fa fa-link" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-holder">
                        <h3>Trades & Stocks</h3>
                        <p>The process of improving measure of an enterpprise's success. Business growth can be a achieved.</p>
                    </div>
                </div>
            </div>
            <!--End single item-->
            <!--Start single item-->
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="single-item hvr-shadow text-center">
                    <div class="img-holder">
                        <img src="images/callto-action/4.jpg" alt="Awesome Image">
                        <div class="overlay-style-one">
                            <div class="box">
                                <div class="content">
                                    <a href="/investment_Plan"><i class="fa fa-link" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-holder">
                        <h3>Investment Plan</h3>
                        <p>The process of improving measure of an enterpprise's success. Business growth can be a achieved.</p>
                    </div>
                </div>
            </div>
            <!--End single item-->
        </div>
    </div>
</section>
<!--End call to action area-->

<!--Start smart approach area-->
<section class="smart-approach-area">
    <div class="container">
        <div class="sec-title text-center">
            <h1>Our Smart Approach</h1>
            <span class="border"></span>
        </div>
        <div class="row">
            <!--Start single item-->
            <div class="col-md-4 col-sm-12 col-xs-12">
                <div class="single-item text-center">
                    <div class="icon-box">
                        <span class="icon-mathematics"></span>
                    </div>
                    <div class="text-box">
                        <h3>Financial Service</h3>
                        <p>Our financial experts help analyze financial data, to create steady financial foundation.</p>
                    </div>
                </div>
            </div>
            <!--End single item-->
            <!--Start single item-->
            <div class="col-md-4 col-sm-12 col-xs-12">
                <div class="single-item text-center">
                    <div class="icon-box">
                        <span class="icon-science"></span>
                    </div>
                    <div class="text-box">
                        <h3>Manufacturing</h3>
                        <p>Electronic Materials has servd the semicondctor industry as a leading-edge materials.</p>
                    </div>
                </div>
            </div>
            <!--End single item-->
            <!--Start single item-->
            <div class="col-md-4 col-sm-12 col-xs-12">
                <div class="single-item text-center">
                    <div class="icon-box">
                        <span class="icon-science-1"></span>
                    </div>
                    <div class="text-box">
                        <h3>Medical & Health Care</h3>
                        <p>Electronic Materials has served semiconductor a leading-edge materials.</p>
                    </div>
                </div>
            </div>
            <!--End single item-->
        </div>
    </div>
</section>
<!--End smart approach area-->

<!--Start fact counter area-->
<section class="fact-counter-area" style="background-image:url(images/resources/fact-counter-bg.jpg);">
    <div class="container">
        <div class="row">
            <!--Start single item-->
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="single-item text-center">
                    <h1><span class="timer" data-from="1" data-to="2456" data-speed="5000" data-refresh-interval="50">2456</span></h1>
                    <span class="border"></span>
                    <h3>Projects Completed</h3>
                </div>
            </div>
            <!--End single item-->
            <!--Start single item-->
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="single-item text-center">
                    <h1><span class="timer" data-from="1" data-to="146" data-speed="5000" data-refresh-interval="50">146</span><i class="fa fa-plus" aria-hidden="true"></i></h1>
                    <span class="border"></span>
                    <h3>Expert Technicians</h3>
                </div>
            </div>
            <!--End single item-->
            <!--Start single item-->
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="single-item text-center">
                    <h1><span class="timer" data-from="1" data-to="853" data-speed="5000" data-refresh-interval="50">853</span><i class="fa fa-plus" aria-hidden="true"></i></h1>
                    <span class="border"></span>
                    <h3>Happy Customers</h3>
                </div>
            </div>
            <!--End single item-->
            <!--Start single item-->
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="single-item text-center">
                    <h1><span class="timer" data-from="1" data-to="2381" data-speed="5000" data-refresh-interval="50">2381</span></h1>
                    <span class="border"></span>
                    <h3>Cups of Coffee</h3>
                </div>
            </div>
            <!--End single item-->
            
        </div>
    </div>
</section>
<!--End fact counter area-->

<!--Start latest project area-->
<section class="latest-project-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul class="project-filter post-filter pull-left">
                    <li class="active" data-filter=".filter-item"><span>View All</span></li>
                    <li data-filter=".consulting"><span>Consulting</span></li>
                    <li data-filter=".finance"><span>Finance</span></li>
                    <li data-filter=".marketing"><span>Marketing</span></li>
                    <li data-filter=".growth"><span>Growth</span></li>
                </ul>
                <div class="more-project pull-right">
                    <a href="/projects_GalleryStyle">More Projects<i class="fa fa-chevron-right" aria-hidden="true"></i></a>    
                </div>
            </div>
        </div>
        <div class="row project-content masonary-layout filter-layout">
            <!--Start single project-->
            <div class="col-md-4 col-sm-4 col-xs-12 filter-item consulting growth">
                <div class="single-project text-center">
                    <div class="outer-img-box">
                        <div class="img-holder">
                            <img src="images/project/lat-pro-1.jpg" alt="Awesome Image">
                            <div class="overlay-style-one">
                                <div class="box">
                                    <div class="content">
                                        <div class="icon-holder">
                                            <a href="images/project/lat-pro-1.jpg" data-rel="prettyPhoto" title="Assurance Project"><i class="fa fa-camera"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="title-holder">
                        <a href="/projects_SinglePost">
                            <h5>Consumer Products</h5>
                        </a>
                    </div>   
                </div>
            </div>
            <!--End single project-->
            <!--Start single project-->
            <div class="col-md-4 col-sm-4 col-xs-12 filter-item growth marketing">
                <div class="single-project text-center">
                    <div class="outer-img-box">
                        <div class="img-holder">
                            <img src="images/project/lat-pro-2.jpg" alt="Awesome Image">
                            <div class="overlay-style-one">
                                <div class="box">
                                    <div class="content">
                                        <div class="icon-holder">
                                            <a href="images/project/lat-pro-2.jpg" data-rel="prettyPhoto" title="Assurance Project"><i class="fa fa-camera"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="title-holder">
                        <a href="/projects_SinglePost">
                            <h5>Financial Income</h5>
                        </a>
                    </div>   
                </div>
            </div>
            <!--End single project-->
            <!--Start single project-->
            <div class="col-md-4 col-sm-4 col-xs-12 filter-item consulting finance marketing">
                <div class="single-project text-center">
                    <div class="outer-img-box">
                        <div class="img-holder">
                            <img src="images/project/lat-pro-3.jpg" alt="Awesome Image">
                            <div class="overlay-style-one">
                                <div class="box">
                                    <div class="content">
                                        <div class="icon-holder">
                                            <a href="images/project/lat-pro-3.jpg" data-rel="prettyPhoto" title="Assurance Project"><i class="fa fa-camera"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="title-holder">
                        <a href="/projects_SinglePost">
                            <h5>Business Growth</h5>
                        </a>
                    </div>   
                </div>
            </div>
            <!--End single project-->
            <!--Start single project-->
            <div class="col-md-4 col-sm-4 col-xs-12 filter-item consulting marketing finance">
                <div class="single-project text-center">
                    <div class="outer-img-box">
                        <div class="img-holder">
                            <img src="images/project/lat-pro-4.jpg" alt="Awesome Image">
                            <div class="overlay-style-one">
                                <div class="box">
                                    <div class="content">
                                        <div class="icon-holder">
                                            <a href="images/project/lat-pro-4.jpg" data-rel="prettyPhoto" title="Assurance Project"><i class="fa fa-camera"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="title-holder">
                        <a href="/projects_SinglePost">
                            <h5>Strategy & Development</h5>
                        </a>
                    </div>   
                </div>
            </div>
            <!--End single project-->
            <!--Start single project-->
            <div class="col-md-4 col-sm-4 col-xs-12 filter-item consulting growth marketing">
                <div class="single-project text-center">
                    <div class="outer-img-box">
                        <div class="img-holder">
                            <img src="images/project/lat-pro-5.jpg" alt="Awesome Image">
                            <div class="overlay-style-one">
                                <div class="box">
                                    <div class="content">
                                        <div class="icon-holder">
                                            <a href="images/project/lat-pro-5.jpg" data-rel="prettyPhoto" title="Assurance Project"><i class="fa fa-camera"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="title-holder">
                        <a href="/projects_SinglePost">
                            <h5>International Meet</h5>
                        </a>
                    </div>   
                </div>
            </div>
            <!--End single project-->
            <!--Start single project-->
            <div class="col-md-4 col-sm-4 col-xs-12 filter-item consulting finance">
                <div class="single-project text-center">
                    <div class="outer-img-box">
                        <div class="img-holder">
                            <img src="images/project/lat-pro-6.jpg" alt="Awesome Image">
                            <div class="overlay-style-one">
                                <div class="box">
                                    <div class="content">
                                        <div class="icon-holder">
                                            <a href="images/project/lat-pro-6.jpg" data-rel="prettyPhoto" title="Assurance Project"><i class="fa fa-camera"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="title-holder">
                        <a href="/projects_SinglePost">
                            <h5>Employees Skills</h5>
                        </a>
                    </div>   
                </div>
            </div>
            <!--End single project-->
        </div> 
    </div>
</section>
<!--End latest project area-->

<!--Start team area-->
<section class="team-area">
    <div class="container">
        <div class="sec-title text-center">
            <h1>Meet Our Team</h1>
            <span class="border"></span>
        </div>
        <div class="row">
            <!--star single tema-->
            <div class="col-md-2 col-sm-4 col-xs-6">
                <div class="single-team hvr-float-shadow text-center">
                    <div class="img-holder">
                        <img src="images/team/1.jpg" alt="Awesome Image">
                    </div>
                    <div class="title-holder">
                        <h3>Brown Angelino</h3>
                        <p>President</p>
                    </div>    
                </div>    
            </div>
            <!--End single tema-->
            <!--star single tema-->
            <div class="col-md-2 col-sm-4 col-xs-6">
                <div class="single-team hvr-float-shadow text-center">
                    <div class="img-holder">
                        <img src="images/team/2.jpg" alt="Awesome Image">
                    </div>
                    <div class="title-holder">
                        <h3>Astley Fletcher</h3>
                        <p>Founder</p>
                    </div>    
                </div>    
            </div>
            <!--End single tema-->
            <!--star single tema-->
            <div class="col-md-2 col-sm-4 col-xs-6">
                <div class="single-team hvr-float-shadow text-center">
                    <div class="img-holder">
                        <img src="images/team/3.jpg" alt="Awesome Image">
                    </div>
                    <div class="title-holder">
                        <h3>Jones Antony</h3>
                        <p>Manager</p>
                    </div>    
                </div>    
            </div>
            <!--End single tema-->
            <!--star single tema-->
            <div class="col-md-2 col-sm-4 col-xs-6">
                <div class="single-team hvr-float-shadow text-center">
                    <div class="img-holder">
                        <img src="images/team/4.jpg" alt="Awesome Image">
                    </div>
                    <div class="title-holder">
                        <h3>Venanda Bond</h3>
                        <p>Designer</p>
                    </div>    
                </div>    
            </div>
            <!--End single tema-->
            <!--star single tema-->
            <div class="col-md-2 col-sm-4 col-xs-6">
                <div class="single-team hvr-float-shadow text-center">
                    <div class="img-holder">
                        <img src="images/team/5.jpg" alt="Awesome Image">
                    </div>
                    <div class="title-holder">
                        <h3>Toom Russel</h3>
                        <p>Accountant</p>
                    </div>    
                </div>    
            </div>
            <!--End single tema-->
            <!--star single tema-->
            <div class="col-md-2 col-sm-4 col-xs-6">
                <div class="single-team hvr-float-shadow text-center">
                    <div class="img-holder">
                        <img src="images/team/6.jpg" alt="Awesome Image">
                    </div>
                    <div class="title-holder">
                        <h3>Bernett Rotty</h3>
                        <p>Chairman</p>
                    </div>    
                </div>    
            </div>
            <!--End single tema-->
        </div>
    </div>
</section>
<!--End team area-->

<!--Start video gallery area-->
<section class="video-gallery-area">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="text-holder">
                    <h3>Everyboy has something important to say! assurance also.</h3>
                    <div class="text">
                        <p>We have built an enviable reputation in the consumer goods, heavy industry, high-tech, manufacturing, medical, recreational vehicle, and transportation sectors. multidisciplinary team of engineering experts.</p>
                        <p>Who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain.</p>
                        <a class="thm-btn bg-clr1" href="#">Know More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="video-holder">
                    <img src="images/resources/video-gallery.jpg" alt="Awesome Video Gallery">
                    <div class="overlay-gallery">
                        <div class="icon-holder">
                            <div class="icon">
                                <a class="html5lightbox" title="Assurance Video Gallery" href="https://www.youtube.com/watch?v=XOv7RmXi7VE"><img src="images/icon/play-btn.png" alt="Play Button"></a>   
                            </div>
                        </div>    
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>
<!--End video gallery area-->

<!--Start latest blog area-->
<section class="latest-blog-area">
    <div class="container">
        <div class="sec-title text-center">
            <h1>Latest News</h1>
            <span class="border"></span>
        </div>
        <div class="row">
            <!--Start single latest blog-->
            <div class="col-md-4">
                <div class="single-blog-post">
                    <div class="img-holder">
                        <img src="images/blog/lat-blog-1.jpg" alt="Awesome Image">
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
                    <div class="text-holder">
                        <a href="/blog_SinglePost">
                            <h3 class="blog-title">The best service ever get</h3>
                        </a>
                        <div class="text">
                            <p>These men promptly escaped from maximum security stockade to the underground. The Brady Bunch the Brady Bunch.</p>
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
            <!--End single latest blog-->
            <!--Start single latest blog-->
            <div class="col-md-4">
                <div class="single-blog-post">
                    <div class="img-holder">
                        <img src="images/blog/lat-blog-2.jpg" alt="Awesome Image">
                        <div class="published-date">
                            <h3>17 May</h3>
                        </div> 
                        <div class="overlay-style-one">
                            <div class="box">
                                <div class="content">
                                    <a href="/blog_SinglePost"><i class="fa fa-link" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-holder">
                        <a href="/blog_SinglePost">
                            <h3 class="blog-title">We never said impossible</h3>
                        </a>
                        <div class="text">
                            <p>The ship set ground on the shore uncharted desert isle all with Gilligan seds that Skipper millionaire and wife. </p>
                        </div> 
                        <div class="meta-info clearfix">
                            <div class="left pull-left">
                                <ul class="post-info">
                                    <li>By <a href="#">Robertson</a></li>
                                    <li><a href="#">Consulting, Idea</a></li>    
                                </ul>    
                            </div>
                            <div class="right pull-right">
                                <a class="post-share" href="#"><i class="fa fa-share-alt" aria-hidden="true"></i></a>  
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End single latest blog-->
            <!--Start single latest blog-->
            <div class="col-md-4">
                <div class="single-blog-post">
                    <div class="img-holder">
                        <img src="images/blog/lat-blog-3.jpg" alt="Awesome Image">
                        <div class="published-date">
                            <h3>24 Apr</h3>
                        </div> 
                        <div class="overlay-style-one">
                            <div class="box">
                                <div class="content">
                                    <a href="/blog_SinglePost"><i class="fa fa-link" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-holder">
                        <a href="/blog_SinglePost">
                            <h3 class="blog-title">Latest consulting seminar</h3>
                        </a>
                        <div class="text">
                            <p>Team like us we had it made. Those were the days. Now were up in the big leagues getting our turn at bat skipper team.</p>
                        </div> 
                        <div class="meta-info clearfix">
                            <div class="left pull-left">
                                <ul class="post-info">
                                    <li>By <a href="#">Peterson</a></li>
                                    <li><a href="#">Services, Corporate</a></li>    
                                </ul>    
                            </div>
                            <div class="right pull-right">
                                <a class="post-share" href="#"><i class="fa fa-share-alt" aria-hidden="true"></i></a>  
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End single latest blog-->
        </div>
    </div>
</section>
<!--End latest blog area-->

<!--Start testimonial area-->
<section class="testimonial-area" style="background-image:url(images/testimonial/testimonial-bg.jpg);">
    <div class="container">
        <div class="sec-title text-center">
            <h1>What Our Customers say</h1>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="testimonial-carousel">
                    <!--Start single item-->
                    <div class="single-item text-center">
                        <div class="text-holder">
                            <p>We help clients find ways to turn everyday information into actionable insights by embedding analytics across their organization’s strategy, operations, and all working systems.</p>
                        </div>
                        <div class="client-info">
                            <div class="img-holder">
                                <img src="images/testimonial/1.png" alt="Client Photo">    
                            </div>
                            <div class="name">
                                <h3>Robert Williamson</h3>
                                <p>Newyork</p>
                            </div>
                        </div>
                    </div>
                    <!--End single item-->
                    <!--Start single item-->
                    <div class="single-item text-center">
                        <div class="text-holder">
                            <p>We help clients find ways to turn everyday information into actionable insights by embedding analytics across their organization’s strategy, operations, and all working systems.</p>
                        </div>
                        <div class="client-info">
                            <div class="img-holder">
                                <img src="images/testimonial/1.png" alt="Client Photo">    
                            </div>
                            <div class="name">
                                <h3>Robert Williamson</h3>
                                <p>Newyork</p>
                            </div>
                        </div>
                    </div>
                    <!--End single item-->
                    <!--Start single item-->
                    <div class="single-item text-center">
                        <div class="text-holder">
                            <p>We help clients find ways to turn everyday information into actionable insights by embedding analytics across their organization’s strategy, operations, and all working systems.</p>
                        </div>
                        <div class="client-info">
                            <div class="img-holder">
                                <img src="images/testimonial/1.png" alt="Client Photo">    
                            </div>
                            <div class="name">
                                <h3>Robert Williamson</h3>
                                <p>Newyork</p>
                            </div>
                        </div>
                    </div>
                    <!--End single item-->
                </div>
            </div>
        </div>
    </div>
</section>
<!--End testimonial area-->
 
<!--Start Brand area-->  
<section class="brand-area">
    <div class="container">
        <div class="sec-title">
            <h1>Our Partners</h1>
            <span class="border"></span>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="brand">
                    <!--Start single item-->
                    <a class="tool_tip" title="Media Partner" href="#">
                        <div class="single-item">
                            <img src="images/brand/1.jpg" alt="Awesome Brand Image">
                        </div>
                    </a>
                    <!--End single item-->
                    <!--Start single item-->
                    <a class="tool_tip" title="Media Partner" href="#">
                        <div class="single-item">
                           <img src="images/brand/2.jpg" alt="Awesome Brand Image">
                        </div>
                    </a>
                    <!--End single item-->
                    <!--Start single item-->
                    <a class="tool_tip" title="Media Partner" href="#">
                        <div class="single-item">
                            <img src="images/brand/3.jpg" alt="Awesome Brand Image">
                        </div>
                    </a>
                    <!--End single item-->
                    <!--Start single item-->
                    <a class="tool_tip" title="Media Partner" href="#">
                        <div class="single-item" title="Media Partner">
                            <img src="images/brand/4.jpg" alt="Awesome Brand Image">
                        </div>
                    </a>
                    <!--End single item-->
                    <!--Start single item-->
                    <a class="tool_tip" title="Media Partner" href="#">
                        <div class="single-item">
                            <img src="images/brand/5.jpg" alt="Awesome Brand Image">
                        </div>
                    </a>
                    <!--End single item-->
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Brand area-->        
@endsection