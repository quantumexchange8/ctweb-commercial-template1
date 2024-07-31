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
                                <li class="dropdown current"><a href="/projects_GalleryStyle">Projects</a>
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
		<h1>Grid With Text</h1>
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
                <li>Grid With Text</li>
            </ul>    
        </div>
        <div class="right pull-right">
            <a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i>Share</a>
        </div>  
    </div>
</section>
<!--End breadcrumb bottom area-->

<!--Start Project grid with text area-->
<section id="project-area" class="latest-project-area grid-with-text">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul class="project-filter post-filter text-center">
                    <li class="active" data-filter=".filter-item"><span>All Projects</span></li>
                    <li data-filter=".financial"><span>Financial Service</span></li>
                    <li data-filter=".industrial"><span>Industrial Goods</span></li>
                    <li data-filter=".consultation"><span>Consultation</span></li>
                    <li data-filter=".transportation"><span>Transportation</span></li>
                </ul>
            </div>
        </div>
        <div class="row project-content masonary-layout filter-layout">
            <!--Start single project-->
            <div class="col-md-4 col-sm-12 col-xs-12 filter-item industrial financial transportation">
                <div class="single-project text-center">
                    <div class="outer-img-box">
                        <div class="img-holder">
                            <img src="images/project/v3-1.jpg" alt="Awesome Image">
                            <div class="overlay-style-one">
                                <div class="box">
                                    <div class="content">
                                        <ul>
                                            <li>
                                                <a href="/projects_SinglePost"><i class="fa fa-link"></i></a>
                                            </li>
                                            <li>
                                                <a href="images/project/v3-1.jpg" data-rel="prettyPhoto" title="Assurance Project"><i class="fa fa-search-plus"></i></a>
                                            </li>
                                        </ul>
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
            <div class="col-md-4 col-sm-12 col-xs-12 filter-item consultation consultation">
                <div class="single-project text-center">
                    <div class="outer-img-box">
                        <div class="img-holder">
                            <img src="images/project/v3-2.jpg" alt="Awesome Image">
                            <div class="overlay-style-one">
                                <div class="box">
                                    <div class="content">
                                        <ul>
                                            <li>
                                                <a href="/projects_SinglePost"><i class="fa fa-link"></i></a>
                                            </li>
                                            <li>
                                                <a href="images/project/v3-2.jpg" data-rel="prettyPhoto" title="Assurance Project"><i class="fa fa-search-plus"></i></a>
                                            </li>
                                        </ul>
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
            <div class="col-md-4 col-sm-12 col-xs-12 filter-item industrial consultation transportation">
                <div class="single-project text-center">
                    <div class="outer-img-box">
                        <div class="img-holder">
                            <img src="images/project/v3-3.jpg" alt="Awesome Image">
                            <div class="overlay-style-one">
                                <div class="box">
                                    <div class="content">
                                        <ul>
                                            <li>
                                                <a href="/projects_SinglePost"><i class="fa fa-link"></i></a>
                                            </li>
                                            <li>
                                                <a href="images/project/v3-3.jpg" data-rel="prettyPhoto" title="Assurance Project"><i class="fa fa-search-plus"></i></a>
                                            </li>
                                        </ul>
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
            <div class="col-md-4 col-sm-12 col-xs-12 filter-item industrial financial">
                <div class="single-project text-center">
                    <div class="outer-img-box">
                        <div class="img-holder">
                            <img src="images/project/v3-4.jpg" alt="Awesome Image">
                            <div class="overlay-style-one">
                                <div class="box">
                                    <div class="content">
                                        <ul>
                                            <li>
                                                <a href="/projects_SinglePost"><i class="fa fa-link"></i></a>
                                            </li>
                                            <li>
                                                <a href="images/project/v3-4.jpg" data-rel="prettyPhoto" title="Assurance Project"><i class="fa fa-search-plus"></i></a>
                                            </li>
                                        </ul>
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
            <div class="col-md-4 col-sm-12 col-xs-12 filter-item financial transportation consultation">
                <div class="single-project text-center">
                    <div class="outer-img-box">
                        <div class="img-holder">
                            <img src="images/project/v3-5.jpg" alt="Awesome Image">
                            <div class="overlay-style-one">
                                <div class="box">
                                    <div class="content">
                                        <ul>
                                            <li>
                                                <a href="/projects_SinglePost"><i class="fa fa-link"></i></a>
                                            </li>
                                            <li>
                                                <a href="images/project/v3-5.jpg" data-rel="prettyPhoto" title="Assurance Project"><i class="fa fa-search-plus"></i></a>
                                            </li>
                                        </ul>
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
            <div class="col-md-4 col-sm-12 col-xs-12 filter-item consulting consultation">
                <div class="single-project text-center">
                    <div class="outer-img-box">
                        <div class="img-holder">
                            <img src="images/project/v3-6.jpg" alt="Awesome Image">
                            <div class="overlay-style-one">
                                <div class="box">
                                    <div class="content">
                                        <ul>
                                            <li>
                                                <a href="/projects_SinglePost"><i class="fa fa-link"></i></a>
                                            </li>
                                            <li>
                                                <a href="images/project/v3-6.jpg" data-rel="prettyPhoto" title="Assurance Project"><i class="fa fa-search-plus"></i></a>
                                            </li>
                                        </ul>
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
            <!--Start single project-->
            <div class="col-md-4 col-sm-12 col-xs-12 filter-item consulting transportation">
                <div class="single-project text-center">
                    <div class="outer-img-box">
                        <div class="img-holder">
                            <img src="images/project/v3-7.jpg" alt="Awesome Image">
                            <div class="overlay-style-one">
                                <div class="box">
                                    <div class="content">
                                        <ul>
                                            <li>
                                                <a href="/projects_SinglePost"><i class="fa fa-link"></i></a>
                                            </li>
                                            <li>
                                                <a href="images/project/v3-7.jpg" data-rel="prettyPhoto" title="Assurance Project"><i class="fa fa-search-plus"></i></a>
                                            </li>
                                        </ul>
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
            <div class="col-md-4 col-sm-12 col-xs-12 filter-item consulting industrial">
                <div class="single-project text-center">
                    <div class="outer-img-box">
                        <div class="img-holder">
                            <img src="images/project/v3-8.jpg" alt="Awesome Image">
                            <div class="overlay-style-one">
                                <div class="box">
                                    <div class="content">
                                        <ul>
                                            <li>
                                                <a href="/projects_SinglePost"><i class="fa fa-link"></i></a>
                                            </li>
                                            <li>
                                                <a href="images/project/v3-8.jpg" data-rel="prettyPhoto" title="Assurance Project"><i class="fa fa-search-plus"></i></a>
                                            </li>
                                        </ul>
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
            <div class="col-md-4 col-sm-12 col-xs-12 filter-item consulting industrial transportation">
                <div class="single-project text-center">
                    <div class="outer-img-box">
                        <div class="img-holder">
                            <img src="images/project/v3-9.jpg" alt="Awesome Image">
                            <div class="overlay-style-one">
                                <div class="box">
                                    <div class="content">
                                        <ul>
                                            <li>
                                                <a href="/projects_SinglePost"><i class="fa fa-link"></i></a>
                                            </li>
                                            <li>
                                                <a href="images/project/v3-9.jpg" data-rel="prettyPhoto" title="Assurance Project"><i class="fa fa-search-plus"></i></a>
                                            </li>
                                        </ul>
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
    </div>
</section>
<!--End Project grid with text area-->
@endsection