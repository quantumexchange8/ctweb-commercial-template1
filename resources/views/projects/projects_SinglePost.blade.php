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
		<h1>Projects Single</h1>
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
                <li><a href="/projects_GalleryStyle">Project</a></li>
                <li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                <li>Projects Single</li>
            </ul>    
        </div>
        <div class="right pull-right">
            <a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i>Share</a>
        </div>  
    </div>
</section>
<!--End breadcrumb bottom area-->

<!--Start Project grid with text area-->
<section id="project-area" class="project-single-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="single-project-img-box">
                    <img src="images/project/project-single.jpg" alt="Awesome Image">
                </div>    
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="project-info">
                    <ul>
                        <li><b>Customer</b>:<span>John Doe</span></li>
                        <li><b>Live demo</b>:<span>www.livedemo.com</span></li>
                        <li><b>Category</b>:<span>Finance & Legal</span></li>
                        <li><b>Date</b>:<span>21 August, 2016</span></li>
                        <li><b>Tags</b>:<span>Financial Services</span></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-8">
                <div class="legal-work-content">
                    <h3>Finance and legal work</h3>
                    <span>Financial Services</span>
                    <p>The challenge is to bring company seds whose web presence is boring up to date. The challenge sed is to ensure that when a ut client visits your websites they feel positive about your company projects. Anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. </p>
                    <a class="thm-btn bg-clr1" href="#">Launch Project</a>
                </div>
            </div>
        </div>
        <div class="row project-analysis">
            <div class="col-md-4">
                <div class="sec-title">
                    <h2>Project Analysis</h2>
                    <span class="border"></span>
                </div>
            </div>
            <div class="col-md-8">
                <div class="text-holder">
                    <p>The project analyst providers critical data support to technical Research and analysis functions may include sed budget tracking financial sed forecasting projects evaluation and monitoring, maintanence compliance regulations and performing establisheed fact that a readers. Project it is a long establisheed fact that a readers will be ut distracted by that readable content of ut sed page when looking at its layout the point of using seds labour normal will be ut distracted by that readable.</p>
                    <p>Projects evaluation and monitoring, maintanence compliance regulations and performing establisheed fact that a readers. Project it is a long establisheed fact that a readers will be ut distracted by that readable content of ut sed page when looking at its layout the point of usingl will be ut distracted by that readable.</p>
                </div>
                <div class="chart-box">
                    <img src="images/project/chart-1.jpg" alt="Project Analysis">
                </div>
            </div>
        </div>
        <div class="row project-result">
            <div class="col-md-4">
                <div class="sec-title">
                    <h2>Project Result</h2>
                    <span class="border"></span>
                </div>
            </div>
            <div class="col-md-8">
                <div class="text-holder">
                    <p>This mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself,because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful.</p>
                    
                    <ul>
                        <li>Which toil and pain can procure him some great pleasure.</li>
                        <li>Any right to find fault with a man who annoying.</li>
                        <li>Consequences, or one who avoids a pain that produces.</li>
                        <li>Denouncing pleasure praising was born and I will give a complete. </li>
                        <li>expound the actual teachings of the great explorer of the truth.</li>
                        <li>Pleasure rationally encounter consequences that extremely.</li>
                    </ul>
                    
                </div>
                <div class="chart-box">
                    <img src="images/project/chart-2.jpg" alt="Project Result">
                </div>
            </div>
        </div>
        <div class="row bottom">
            <div class="col-md-4 col-sm-4 col-xs-4">
                <div class="button prev pull-left">
                    <a href="#"><i class="fa fa-angle-left" aria-hidden="true"></i>Prev</a>    
                </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-4">
                <div class="icon-holder text-center">
                    <a href="#">
                        <i class="fa fa-th" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-4">
                <div class="button next pull-right">
                    <a href="#">Next<i class="fa fa-angle-right" aria-hidden="true"></i></a>    
                </div>
            </div>
        </div>    
        
    </div>
</section>
<!--End Project grid with text area-->
@endsection