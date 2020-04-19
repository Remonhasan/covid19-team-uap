<!DOCTYPE html>

<html lang="en">


<head>

    <!-- META -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <meta name="robots" content="" />    
    <meta name="description" content="" />
    
    <!-- FAVICONS ICON -->
    <link rel="icon" href="{{ asset('frontend/images/favicon.ico')}}" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend/images/favicon.png')}}" />
    
    <!-- PAGE TITLE HERE -->
    <title>Covid-19 | Shop </title>
    
    <!-- MOBILE SPECIFIC -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- BOOTSTRAP STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/bootstrap.min.css')}}">
    <!-- FONTAWESOME STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/fontawesome/css/font-awesome.min.css')}}" />

    <!-- OWL CAROUSEL STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/owl.carousel.min.css')}}">
    <!-- BOOTSTRAP SLECT BOX STYLE SHEET  -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/bootstrap-select.min.css')}}">    
    <!-- MAGNIFIC POPUP STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/magnific-popup.min.css')}}">
   
    <!-- MAIN STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/style.css')}}">
        <!-- FLATICON STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/flaticon.min.css')}}">   
    
  
 
     <!-- REVOLUTION SLIDER CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/plugins/revolution/revolution/css/settings.css')}}">
    <!-- REVOLUTION NAVIGATION STYLE -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/plugins/revolution/revolution/css/navigation.css')}}">
        
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300;400;700;900&amp;display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">       
 
</head>

<body>

    <div class="page-wraper"> 
    
        <!-- HEADER START -->
        <header class="site-header header-style-4 mobile-sider-drawer-menu">
                       
           <div class="sticky-header main-bar-wraper  navbar-expand-lg">
                <div class="main-bar">                       
                       <div class="container clearfix"> 
                       
                            <div class="logo-header">
                                <div class="logo-header-inner logo-header-one">
                                    <a href="index-2.html">
                                    <img src="{{ asset('frontend/images/favicon.png')}}" alt="" />
                                    </a>
                                </div>
                            </div>  
                            
                            <!-- NAV Toggle Button -->
                            <button id="mobile-side-drawer" data-target=".header-nav" data-toggle="collapse" type="button" class="navbar-toggler collapsed">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar icon-bar-first"></span>
                                <span class="icon-bar icon-bar-two"></span>
                                <span class="icon-bar icon-bar-three"></span>
                            </button> 
                                                       
                             
                            <div class="extra-nav header-2-nav">
                                <div class="extra-cell">
                              
                                    <div class="header-nav-request">
                                        <a href="{{ route('login')}}" class="contact-slide-show site-button-secondry-outline button-sm">login</a>
                                    </div>
                                
                                </div>
                                 
                             </div>  


                            <div class="extra-nav header-2-nav">
                                <div class="extra-cell">
                              
                                    <div class="header-nav-request">
                                        <a href="{{ route('register')}}" class="contact-slide-show site-button-secondry-outline button-sm">register</a>
                                    </div>
                                
                                </div>
                                 
                             </div>                                                                                                                                   

                             
                            <!-- MAIN Vav -->
                            <div class="nav-animation header-nav navbar-collapse collapse d-flex justify-content-center">
                        
                                <ul class=" nav navbar-nav">
                                    <li><a href="{{ route('welcome')}}">Home</a></li>  
                                    <li><a href="https://corona.gov.bd/">Govt. Help Services</a></li>  
                                                                             
                                    <li><a href="prevention.html">Prevention</a></li> 
                                    <li><a href="javascript:;">Shop</a>
                                        <ul class="sub-menu">
                                            <li><a href="{{ route('product')}}">Shop</a></li>                                        
                                            <li><a href="product-detail.html">Shop Detail</a></li>
                                            <li><a href="shopping-cart.html">Shopping Cart</a></li>
                                            <li><a href="checkout.html">Checkut</a></li>
                                            <li><a href="wish-list.html">Wishlist</a></li>                                            
                                        </ul>                                
                                   </li>                                   
                                    <li><a href="javascript:;">Blog</a>
                                        <ul class="sub-menu">
                                            <li><a href="blog-grid.html">Blog Grid</a></li>                                        
                                            <li><a href="blog-list-sidebar.html">Blog List</a></li>
                                            <li><a href="blog-post-right-sidebar.html">Blog Post</a></li>
                                        </ul>                                
                                    </li>                                                                

                               
                                </ul>
    
                            </div>
                            
                        </div>    
                    </div>
                    
            </div>
            
        </header>
        <!-- HEADER END -->
        
        <!-- CONTENT START -->
        <div class="page-content">
        
            <!-- INNER PAGE BANNER -->
            <div class="wt-bnr-inr bg-center bg-gray" style="background-image:url({{ asset('frontend/images/banner/1.jpg);')}}">
                <div class="container">
                    <div class="wt-bnr-inr-entry">
                    	<div class="banner-title-outer">
                        	<div class="banner-title-name">
                        		<h2 class="site-text-primary">Shop</h2>
                            </div>
                        </div>
                        <!-- BREADCRUMB ROW -->                            
                        
                            <div>
                                <ul class="wt-breadcrumb breadcrumb-style-2">
                                    <li><a href="javascript:void(0);">Home</a></li>
                                    <li>Shop</li>
                                </ul>
                            </div>
                        
                        <!-- BREADCRUMB ROW END -->                        
                    </div>
                </div>
            </div>
            <!-- INNER PAGE BANNER END -->
            
            <!-- SECTION CONTENT START -->
            <div class="section-full p-t80 p-b50">
                <div class="container">
                    <div class="section-content">

                        <div class="row d-flex justify-content-center">
                        
                            <!-- SIDE BAR START -->
                            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 rightSidebar  m-b30">
                            
                                <aside  class="side-bar">
                                    
                                       <!-- SEARCH -->
                                       <div class="widget p-a20  radius-lg shadow">
                                            <div class="search-bx">
                                                <form role="search" method="post">
                                                    <div class="input-group">
                                                        <input name="news-letter" type="text" class="form-control" placeholder="Write your text">
                                                        <span class="input-group-btn">
                                                            <button type="submit" class="btn"><i class="fa fa-search"></i></button>
                                                        </span>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>

                                        
                                       <!-- Archives -->   
                                       <div class="widget widget_archives p-a20  radius-lg shadow">
                                            <div class="text-left m-b30">
                                                <h4 class="widget-title">Archives</h4>
                                            </div>
                                            <ul>
                                                <li><a href="javascript:void(0);">December 2019</a></li>
                                                <li><a href="javascript:void(0);">May 2019</a></li>
                                                <li><a href="javascript:void(0);">March 2019</a></li>
                                                <li><a href="javascript:void(0);"> February 2019</a></li>
                                                <li><a href="javascript:void(0);">January 2019</a></li>
                                                                                             
                                            </ul>
                                        </div>  
                                        
                                        
                                       <!-- RECENT POSTS -->
                                       <div class="widget recent-posts-entry p-a20 radius-lg shadow">
                                            <div class="text-left m-b30">
                                                <h4 class="widget-title">Recent Posts</h4>
                                            </div>                                    
                                            <div class="section-content">
                                                <div class="widget-post-bx">
                                                    <div class="widget-post clearfix">
                                                        <div class="wt-post-media">
                                                            <img src="{{ asset('frontend/images/blog/recent-blog/pic1.jpg')}}" alt="">
                                                        </div>
                                                        <div class="wt-post-info">
                                                            <div class="wt-post-header">
                                                                <h6 class="post-title"> <a href="#">Loft Office With Vintage Decor For Working</a></h6>
                                                            </div>                                                    
                                                            <div class="wt-post-meta">
                                                                <ul>
                                                                    <li class="post-author">26 Feb</li>
                                                                    <li class="post-comment">58 Comment</li>
                                                                </ul>
                                                            </div>                                            
                                                        </div>
                                                    </div>
                                                    <div class="widget-post clearfix">
                                                        <div class="wt-post-media">
                                                            <img src="{{ asset('frontend/images/blog/recent-blog/pic2.jpg')}}" alt="">
                                                        </div>
                                                        <div class="wt-post-info">
                                                            <div class="wt-post-header">
                                                                <h6 class="post-title"><a href="#">South African farmers play chicken with tariffs</a></h6>
                                                            </div>                                                    
                                                            <div class="wt-post-meta">
                                                                <ul>
                                                                    <li class="post-author">18 Feb</li>
                                                                    <li class="post-comment"> 35 Comment</li>
                                                                </ul>
                                                            </div>                                            
                                                        </div>
                                                    </div>
                                                    <div class="widget-post clearfix">
                                                        <div class="wt-post-media">
                                                            <img src="{{ asset('frontend/images/blog/recent-blog/pic3.jpg')}}" alt="">
                                                        </div>
                                                        <div class="wt-post-info">
                                                            <div class="wt-post-header">
                                                                <h6 class="post-title"> <a href="#">Australia’s provider of industry-based research</a> </h6>
                                                            </div>                                                    
                                                            <div class="wt-post-meta">
                                                                <ul>
                                                                    <li class="post-author">14 Feb</li>
                                                                    <li class="post-comment"> 46 Comment</li>
                                                                </ul>
                                                            </div>                                            
                                                        </div>
                                                    </div>                                                  
                                                </div>
                                            </div>
                                        </div>                                                                                 
                                        
                                       <!-- CATEGORY -->   
                                       <div class="widget widget_services p-a20  radius-lg shadow">
                                            <div class="text-left m-b30">
                                                <h4 class="widget-title">Categories</h4>
                                                
                                            </div>
                                            <ul>
                                                <li><a href="javascript:void(0);">Applin</a><span class="badge">28</span></li>
                                                <li><a href="javascript:void(0);">Makeup</a><span class="badge">05</span></li>
                                                <li><a href="javascript:void(0);">Business</a><span class="badge">24</span></li>
                                                <li><a href="javascript:void(0);">Government</a><span class="badge">15</span></li>
                                                <li><a href="javascript:void(0);">Investment</a><span class="badge">20</span></li>
                                            </ul>
                                        </div>                                               
                                                                                
                                       <!-- TAGS -->
                                       

                                                                                 
                                  
                                   </aside>
        
                            </div>
                            <!-- SIDE BAR END -->                          
                        
                            <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 m-b30">                       
                            
                                <div class="row">
                                    <!-- COLUMNS 1 -->
                                    <div class="col-lg-4 col-md-6 m-b30">
                                        <div class="wt-box wt-product-box block-shadow  overflow-hide radius-lg">
                                            <div class="wt-thum-bx wt-img-overlay1 wt-img-effect zoom">
                                                <img src="{{ asset('frontend/images/products/pic-1.jpg')}}" alt="">
                                                <div class="overlay-bx">
                                                    <div class="overlay-icon">
                                                        <a href="javascript:void(0);">
                                                            <i class="fa fa-cart-plus wt-icon-box-xs"></i>
                                                        </a>
                                                        <a class="mfp-link" href="javascript:void(0);">
                                                            <i class="fa fa-heart wt-icon-box-xs"></i>
                                                        </a>
                                                  </div>
                                                </div>
                                            </div>
                                            <div class="wt-info  text-center">
                                                 <div class="p-a20 bg-white">
                                                    <h4 class="wt-title">
                                                        <a href="product-detail.html">Medical Mask</a>
                                                    </h4>
                                                    <span class="price">
                                                        <ins>
                                                            <span><span class="Price-currencySymbol">$ </span>49.00</span>
                                                        </ins>
                                                    </span>
        

                                                 </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <!-- COLUMNS 2 -->
                                    <div class="col-lg-4 col-md-6 m-b30">
                                        <div class="wt-box wt-product-box block-shadow  overflow-hide  radius-lg">
                                            <div class="wt-thum-bx wt-img-overlay1 wt-img-effect zoom">
                                                <img src="{{ asset('frontend/images/products/pic-2.jpg')}}" alt="">
                                                <div class="overlay-bx">
                                                    <div class="overlay-icon">
                                                        <a href="javascript:void(0);">
                                                            <i class="fa fa-cart-plus wt-icon-box-xs"></i>
                                                        </a>
                                                        <a class="mfp-link" href="javascript:void(0);">
                                                            <i class="fa fa-heart wt-icon-box-xs"></i>
                                                        </a>
                                                  </div>
                                                </div>
                                            </div>
                                            <div class="wt-info  text-center">
                                                 <div class="p-a20 bg-white">
                                                    <h4 class="wt-title">
                                                        <a href="product-detail.html">Hand Sanitizer </a>
                                                    </h4>
                                                    <span class="price">                                                
                                                        <ins>
                                                            <span><span class="Price-currencySymbol">$ </span>99.00</span>
                                                        </ins>
                                                    </span>

                                                 </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <!-- COLUMNS 3 -->
                                    <div class="col-lg-4 col-md-6 m-b30">
                                        <div class="wt-box wt-product-box block-shadow  overflow-hide  radius-lg">
                                            <div class="wt-thum-bx wt-img-overlay1 wt-img-effect zoom">
                                                <img src="{{ asset('frontend/images/products/pic-3.jpg')}}" alt="">
                                                <div class="overlay-bx">
                                                    <div class="overlay-icon">
                                                        <a href="javascript:void(0);">
                                                            <i class="fa fa-cart-plus wt-icon-box-xs"></i>
                                                        </a>
                                                        <a class="mfp-link" href="javascript:void(0);">
                                                            <i class="fa fa-heart wt-icon-box-xs"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="wt-info  text-center">
                                                 <div class="p-a20 bg-white">
                                                    <h4 class="wt-title">
                                                        <a href="product-detail.html">Hand Wash</a>
                                                    </h4>
                                                    <span class="price">                                                
                                                        <ins>
                                                            <span><span class="Price-currencySymbol">$ </span>99.00</span>
                                                        </ins>
                                                    </span>

                                                 </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <!-- COLUMNS 4 -->
                                    <div class="col-lg-4 col-md-6 m-b30">
                                        <div class="wt-box wt-product-box block-shadow  overflow-hide  radius-lg">
                                            <div class="wt-thum-bx wt-img-overlay1 wt-img-effect zoom">
                                                <img src="{{ asset('frontend/images/products/pic-4.jpg')}}" alt="">
                                                <div class="overlay-bx">
                                                    <div class="overlay-icon">
                                                        <a href="javascript:void(0);">
                                                            <i class="fa fa-cart-plus wt-icon-box-xs"></i>
                                                        </a>
                                                        <a class="mfp-link" href="javascript:void(0);">
                                                            <i class="fa fa-heart wt-icon-box-xs"></i>
                                                        </a>
                                                  </div>
                                                </div>
                                            </div>
                                            <div class="wt-info  text-center">
                                                 <div class="p-a20 bg-white">
                                                    <h4 class="wt-title">
                                                        <a href="product-detail.html">Bath Soap</a>
                                                    </h4>
                                                    <span class="price">                                                
                                                        <ins>
                                                            <span><span class="Price-currencySymbol">$ </span>199.00</span>
                                                        </ins>
                                                    </span>

                                                 </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <!-- COLUMNS 5 -->
                                    <div class="col-lg-4 col-md-6 m-b30">
                                        <div class="wt-box wt-product-box block-shadow  overflow-hide  radius-lg">
                                            <div class="wt-thum-bx wt-img-overlay1 wt-img-effect zoom">
                                                <img src="{{ asset('frontend/images/products/pic-5.jpg')}}" alt="">
                                                <div class="overlay-bx">
                                                    <div class="overlay-icon">
                                                        <a href="javascript:void(0);">
                                                            <i class="fa fa-cart-plus wt-icon-box-xs"></i>
                                                        </a>
                                                        <a class="mfp-link" href="javascript:void(0);">
                                                            <i class="fa fa-heart wt-icon-box-xs"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="wt-info  text-center">
                                                 <div class="p-a20 bg-white">
                                                    <h4 class="wt-title">
                                                        <a href="product-detail.html">Medical Mask</a>
                                                    </h4>
                                                    <span class="price">                                               
                                                         <ins>
                                                            <span><span class="Price-currencySymbol">$ </span>139.00</span>
                                                        </ins>
                                                    </span>

                                                 </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <!-- COLUMNS 6 -->
                                    <div class="col-lg-4 col-md-6 m-b30">
                                        <div class="wt-box wt-product-box block-shadow  overflow-hide  radius-lg">
                                            <div class="wt-thum-bx wt-img-overlay1 wt-img-effect zoom">
                                                <img src="{{ asset('frontend/images/products/pic-6.jpg')}}" alt="">
                                                <div class="overlay-bx">
                                                    <div class="overlay-icon">
                                                        <a href="javascript:void(0);">
                                                            <i class="fa fa-cart-plus wt-icon-box-xs"></i>
                                                        </a>
                                                        <a class="mfp-link" href="javascript:void(0);">
                                                            <i class="fa fa-heart wt-icon-box-xs"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="wt-info  text-center">
                                                <div class="p-a20 bg-white">
                                                    <h4 class="wt-title">
                                                        <a href="product-detail.html">Hand Wash</a>
                                                    </h4>
                                                    <span class="price">                                                
                                                        <ins>
                                                            <span><span class="Price-currencySymbol">$ </span>26.00</span>
                                                        </ins>
                                                    </span>

                                                 </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <!-- COLUMNS 7 -->
                                    <div class="col-lg-4 col-md-6 m-b30">
                                        <div class="wt-box wt-product-box block-shadow  overflow-hide  radius-lg">
                                            <div class="wt-thum-bx wt-img-overlay1 wt-img-effect zoom">
                                                <img src="{{ asset('frontend/images/products/pic-7.jpg')}}" alt="">
                                                <div class="overlay-bx">
                                                    <div class="overlay-icon">
                                                        <a href="javascript:void(0);">
                                                            <i class="fa fa-cart-plus wt-icon-box-xs"></i>
                                                        </a>
                                                        <a class="mfp-link" href="javascript:void(0);">
                                                            <i class="fa fa-heart wt-icon-box-xs"></i>
                                                        </a>
                                                  </div>
                                                </div>
                                            </div>
                                            <div class="wt-info  text-center">
                                                 <div class="p-a20 bg-white">
                                                    <h4 class="wt-title">
                                                        <a href="product-detail.html">Hand gloves</a>
                                                    </h4>
                                                    <span class="price">                                                
                                                        <ins>
                                                            <span><span class="Price-currencySymbol">$ </span>86.00</span>
                                                        </ins>
                                                    </span>

                                                 </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <!-- COLUMNS 8 -->
                                    <div class="col-lg-4 col-md-6 m-b30">
                                        <div class="wt-box wt-product-box block-shadow  overflow-hide  radius-lg">
                                            <div class="wt-thum-bx wt-img-overlay1 wt-img-effect zoom">
                                                <img src="{{ asset('frontend/images/products/pic-8.jpg')}}" alt="">
                                                <div class="overlay-bx">
                                                    <div class="overlay-icon">
                                                        <a href="javascript:void(0);">
                                                            <i class="fa fa-cart-plus wt-icon-box-xs"></i>
                                                        </a>
                                                        <a class="mfp-link" href="javascript:void(0);">
                                                            <i class="fa fa-heart wt-icon-box-xs"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="wt-info  text-center">
                                                 <div class="p-a20 bg-white">
                                                    <h4 class="wt-title">
                                                        <a href="product-detail.html">Medical Mask</a>
                                                    </h4>
                                                    <span class="price">                                                
                                                        <ins>
                                                            <span><span class="Price-currencySymbol">$ </span>56.00</span>
                                                        </ins>
                                                    </span>

                                                 </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <!-- COLUMNS 9 -->
                                    <div class="col-lg-4 col-md-6 m-b30">
                                        <div class="wt-box wt-product-box block-shadow  overflow-hide  radius-lg">
                                            <div class="wt-thum-bx wt-img-overlay1 wt-img-effect zoom">
                                                <img src="{{ asset('frontend/images/products/pic-9.jpg')}}" alt="">
                                                <div class="overlay-bx">
                                                    <div class="overlay-icon">
                                                        <a href="javascript:void(0);">
                                                            <i class="fa fa-cart-plus wt-icon-box-xs"></i>
                                                        </a>
                                                        <a class="mfp-link" href="javascript:void(0);">
                                                            <i class="fa fa-heart wt-icon-box-xs"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="wt-info  text-center">
                                                 <div class="p-a20 bg-white">
                                                    <h4 class="wt-title">
                                                        <a href="product-detail.html">Medical Mask</a>
                                                    </h4>
                                                    <span class="price">                                                
                                                        <ins>
                                                            <span><span class="Price-currencySymbol">$ </span>99.00</span>
                                                        </ins>
                                                    </span>

                                                 </div>
                                            </div>
                                        </div>
                                    </div>  
                                                                      
                                </div>
                            
                            </div>
                            
                       
						</div>
                    </div>
                </div>
            </div>
             <!-- SECTION CONTENT END -->
        
        </div>
        <!-- CONTENT END -->
        
        <!-- FOOTER START -->
        <footer class="site-footer footer-large footer-light text-white">
            
            <!-- FOOTER BLOCKES START -->  
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                    
                        <div class="col-lg-3 col-md-6 col-sm-12">  
                            <div class="widget widget_about">
                                <div class="logo-footer clearfix p-b15">
                                    <a href="index-2.html"><img src="{{ asset('frontend/images/favicon.png')}}" alt="" ></a>
                                </div>
                                <p>website is for health information and advice about coronavirus (COVID-19), how to prevent and protect yourself from disease.</p>
                                <div class="widget_social_inks">
                                    <ul class="social-icons social-square social-darkest">
                                        <li><a href="javascript:void(0);" class="fa fa-facebook"></a></li>
                                        <li><a href="javascript:void(0);" class="fa fa-twitter"></a></li>
                                        <li><a href="javascript:void(0);" class="fa fa-linkedin"></a></li>
                                        <li><a href="javascript:void(0);" class="fa fa-rss"></a></li>
                                        <li><a href="javascript:void(0);" class="fa fa-youtube"></a></li>
                                        <li><a href="javascript:void(0);" class="fa fa-instagram"></a></li>
                                    </ul>
                                </div> 
                            </div>
                        </div> 

						<div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="widget widget_services">
                                <h4 class="widget-title">Useful links</h4>
							    <ul>
                                    <li><a href="javascript:;">Situation Reports</a></li>
                                    <li><a href="javascript:;">Advice For Public</a></li>
                                    <li><a href="javascript:;">Prevention</a></li>
                                    <li><a href="javascript:;">Coronavirus Symptoms</a></li>
                                    <li><a href="javascript:;">Donor & Partners</a></li>
                                </ul>
                            </div>
                        </div> 
                        
						<div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="widget widget_services">
                                <h4 class="widget-title">Privacy & Tos</h4>
							    <ul>
                                    <li><a href="javascript:;">Advertiser agreement</a></li>
                                    <li><a href="javascript:;">Developer agreement</a></li>
                                    <li><a href="javascript:;">Privacy Policy</a></li>
                                    <li><a href="javascript:;">Technology Privacy</a></li>
                                    <li><a href="javascript:;">Acceptable user policy</a></li>
                                </ul>
                            </div>
                        </div>                         

                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="widget recent-posts-entry">
                                <h4 class="widget-title">Contact Us</h4>
                                  <ul class="widget_address"> 
                                  	<li><i class="flaticon-location"></i>67/f Green Road, Dhaka-1205 Bangladesh</li>
                                    <li><i class="flaticon-email"></i>remon.welcome@gmail.com</li>
                                    <li> <i class="flaticon-mobile-phone"></i>+8801902025951</li>
                                </ul>  
                            </div>           
                        </div>
						                         
                    </div>
                </div>
            </div>
            <!-- FOOTER COPYRIGHT -->
            
            <div class="footer-bottom">
              <div class="container">
                <div class="wt-footer-bot-left d-flex justify-content-between">
                    <span class="copyrights-text">Copyright © 2020 Md. Remon Hasan Apu </span>
                    <ul class="copyrights-nav"> 
                        <li><a href="javascript:void(0);">Terms  &amp; Condition</a></li>
                        <li><a href="javascript:void(0);">Privacy Policy</a></li>
                        <li><a href="contact-1.html">Contact Us</a></li>
                    </ul>     
                </div>
              </div>   
            </div>   


        </footer>
        <!-- FOOTER END -->
        

        
        <!-- BUTTON TOP START -->
		<button class="scroltop"><span class="fa fa-angle-up  relative" id="btn-vibrate"></span></button>
        
    </div>

<!-- LOADING AREA START ===== -->
<div class="loading-area">
    <div class="loading-box"></div>
    <div class="loading-pic">
    	<div class="loader-animation-outer">
        	<div class="rotate-center">
                    <div class="scale-up-center">
                        <i class="flaticon-coronavirus-2"></i>
                    </span>
                </div>
             </div>
        </div>
    </div>
</div>
<!-- LOADING AREA  END ====== -->

<!-- JAVASCRIPT  FILES ========================================= --> 
<script  src="{{ asset('frontend/js/jquery-2.2.0.min.js')}}"></script><!-- JQUERY.MIN JS -->
<script  src="{{ asset('frontend/js/popper.min.js')}}"></script><!-- POPPER.MIN JS -->
<script  src="{{ asset('frontend/js/bootstrap.min.js')}}"></script><!-- BOOTSTRAP.MIN JS -->
<script  src="{{ asset('frontend/js/bootstrap-select.min.js')}}"></script><!-- Form js -->
<script  src="{{ asset('frontend/js/magnific-popup.min.js')}}"></script><!-- MAGNIFIC-POPUP JS -->
<script  src="{{ asset('frontend/js/waypoints.min.js')}}"></script><!-- WAYPOINTS JS -->
<script  src="{{ asset('frontend/js/counterup.min.js')}}"></script><!-- COUNTERUP JS -->
<script  src="{{ asset('frontend/js/waypoints-sticky.min.js')}}"></script><!-- STICKY HEADER -->
<script  src="{{ asset('frontend/js/isotope.pkgd.min.js')}}"></script><!-- MASONRY  -->
<script  src="{{ asset('frontend/js/owl.carousel.min.js')}}"></script><!-- OWL  SLIDER  -->
<script  src="{{ asset('frontend/js/stellar.min.js')}}"></script><!-- PARALLAX BG IMAGE   -->
<script  src="{{ asset('frontend/js/theia-sticky-sidebar.js')}}"></script><!-- STICKY SIDEBAR  -->
<script  src="{{ asset('frontend/js/jquery.bootstrap-touchspin.js')}}"></script><!-- FORM JS -->
<script  src="{{ asset('frontend/js/custom.js')}}"></script><!-- CUSTOM FUCTIONS  -->







</body>


</html>
