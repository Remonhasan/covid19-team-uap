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
    <title>Covid-19 | Prevention</title>
    
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
                                    <li><a href="about-1.html">About</a></li>  
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
                        		<h2 class="site-text-primary">Prevention</h2>
                            </div>
                        </div>
                        <!-- BREADCRUMB ROW -->                            
                        
                            <div>
                                <ul class="wt-breadcrumb breadcrumb-style-2">
                                    <li><a href="javascript:void(0);">Home</a></li>
                                    <li>Prevention</li>
                                </ul>
                            </div>
                        
                        <!-- BREADCRUMB ROW END -->                        
                    </div>
                </div>
            </div>
            <!-- INNER PAGE BANNER END -->

			<!-- VIRUS PREVENTION SECTION START -->
            <div class="section-full p-t80 p-b50 bg-white virus-prevention-section-outer">
            	
                <div class="container"> 
                
                    <!-- TITLE START-->
                    <div class="section-head center wt-small-separator-outer">
                        <div class="wt-small-separator site-text-primary">
                            <div class="site-bg-small-title  radius-md">Prevention Coronavirus</div>
                        </div>
                        <h2>How to Stay Safe Important Percautions</h2>
                        <p>If you are healthy, you only need to wear a mask if you are taking care of a person with suspected 2019 infection.</p>
                        
                    </div>
                    <!-- TITLE END--> 
                                                        
                    <div class="section-content">
                        <div class="row d-flex justify-content-center flex-wrap">
                        
                            <div class="col-lg-6 col-md-12 m-b30">
                            	<div class="prevention-should-do radius-lg  m-b30 shadow overflow-hidden">
                                	<div class="prevention-head site-bg-primary text-center text-white p-a30">
                                    	<h3 class="m-b0 wt-title">Things You Should Do</h3>
                                    </div>
                                    
                                    <div class="prevention-list">
                                    	<ul>
                                        	<li>
                                            	<div class="prevention-info hovericon-spin">
                                                	<div class="prevention-media">
                                                    	<div class="prevention-pic radius-bx hovericon-spin-icon">
                                                        	<img src="{{ asset('frontend/images/prvention/pic1.png')}}" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="prevention-content">
                                                    	<h4 class="wt-title">Wash Your Hands For 20 Sec</h4>
                                                        <p>Hand touch many surfaces and can pick up virus. So, hands can transfer the virus to your eyes, nose.</p>
                                                    </div>
                                                </div>
                                            </li>
                                            
                                        	<li>
                                            	<div class="prevention-info hovericon-spin">
                                                	<div class="prevention-media">
                                                    	<div class="prevention-pic radius-bx hovericon-spin-icon">
                                                        	<img src="{{ asset('frontend/images/prvention/pic2.png')}}" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="prevention-content">
                                                    	<h4 class="wt-title">Wear a Mask When go outside</h4>
                                                        <p>Regularly and thoroughly clean your hands with an alcohol-based hand rub or wash them with soap.</p>
                                                    </div>
                                                </div>
                                            </li>
                                            
                                        	<li>
                                            	<div class="prevention-info hovericon-spin">
                                                	<div class="prevention-media">
                                                    	<div class="prevention-pic radius-bx hovericon-spin-icon">
                                                        	<img src="{{ asset('frontend/images/prvention/pic3.png')}}" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="prevention-content">
                                                    	<h4 class="wt-title">Cover Nose When Sneezing</h4>
                                                        <p>Regularly and thoroughly clean your hands with an alcohol-based hand rub or wash them with soap.</p>
                                                    </div>
                                                </div>
                                            </li>
                                            
                                        	<li>
                                            	<div class="prevention-info hovericon-spin">
                                                	<div class="prevention-media">
                                                    	<div class="prevention-pic radius-bx hovericon-spin-icon">
                                                        	<img src="{{ asset('frontend/images/prvention/pic4.png')}}" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="prevention-content">
                                                    	<h4 class="wt-title">Boil Your Food Properly</h4>
                                                        <p>Maintain good respiratory hygiene as covering your mouth & nose with your bent elbow or tissue.</p>
                                                    </div>
                                                </div>
                                            </li>                                                                                                                                    
                                        </ul>
                                    </div>
                                	
                                	
                                </div>
                            </div> 
                            
                            
                            <div class="col-lg-6 col-md-12 m-b30">
                            	<div class="prevention-shouldnt-do radius-lg  m-b30 shadow overflow-hidden">
                                	<div class="prevention-head site-bg-secondry text-center text-white p-a30">
                                    	<h3 class="m-b0 wt-title">Things You Shouldn't Do</h3>
                                    </div>
                                    
                                    <div class="prevention-list">
                                    	<ul>
                                        	<li>
                                            	<div class="prevention-info hovericon-spin">
                                                	<div class="prevention-media">
                                                    	<div class="prevention-pic radius-bx hovericon-spin-icon">
                                                        	<img src="{{ asset('frontend/images/prvention/pic5.png')}}" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="prevention-content">
                                                    	<h4 class="wt-title">Don’t Eat Dangerous Animal</h4>
                                                        <p>Maintain good respiratory hygiene as covering your mouth & nose with your bent elbow or tissue.</p>
                                                    </div>
                                                </div>
                                            </li>
                                            
                                        	<li>
                                            	<div class="prevention-info hovericon-spin">
                                                	<div class="prevention-media">
                                                    	<div class="prevention-pic radius-bx hovericon-spin-icon">
                                                        	<img src="{{ asset('frontend/images/prvention/pic6.png')}}" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="prevention-content">
                                                    	<h4 class="wt-title">Avoid Contact Sick People</h4>
                                                        <p>Regularly and thoroughly clean your hands with an alcohol-based hand rub or wash them with soap.</p>
                                                    </div>
                                                </div>
                                            </li>
                                            
                                        	<li>
                                            	<div class="prevention-info hovericon-spin">
                                                	<div class="prevention-media">
                                                    	<div class="prevention-pic radius-bx hovericon-spin-icon">
                                                        	<img src="{{ asset('frontend/images/prvention/pic7.png')}}" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="prevention-content">
                                                    	<h4 class="wt-title">Don’t Touch Your Face or Nose</h4>
                                                        <p>Regularly and thoroughly clean your hands with an alcohol-based hand rub or wash them with soap.</p>
                                                    </div>
                                                </div>
                                            </li>
                                            
                                        	<li>
                                            	<div class="prevention-info hovericon-spin">
                                                	<div class="prevention-media">
                                                    	<div class="prevention-pic radius-bx hovericon-spin-icon">
                                                        	<img src="{{ asset('frontend/images/prvention/pic8.png')}}" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="prevention-content">
                                                    	<h4 class="wt-title">Avoid Crowded Places</h4>
                                                        <p>Hands touch many surfaces and can pick up viruses. So, hands can transfer the virus to your eyes, nose.</p>
                                                    </div>
                                                </div>
                                            </li>                                                                                                                                    
                                        </ul>
                                    </div>
                                	
                                	
                                </div>
                            </div>                             
                                                                                    
                                               
                        </div>
                    </div>                                        
				</div>
                
                
            </div>   
            <!-- VIRUS PREVENTION SECTION END -->     
            
            
           <!-- VIRUS Symptoms SECTION START -->
            <div class="section-full p-t80 p-b50 bg-gray virus-symptoms-section-outer">
            	
                <div class="container"> 

                    <!-- TITLE START-->
                    <div class="section-head center wt-small-separator-outer">
                        <div class="wt-small-separator site-text-primary">
                            <div class="site-bg-small-title  radius-md">What are the symptoms of COVID-19?</div>
                        </div>
                        <h2>Corona Virus Symptoms</h2>
                        <p>Coronavirus disease (COVID-19) is an infectious disease caused by a newly discovered coronavirus. Most people infected with the COVID-19 virus will experience</p>
                        
                    </div>
                    <!-- TITLE END--> 

                                                        
				<div class="section-content">
                        <div class="row d-flex justify-content-center flex-wrap">
                        
                            <div class="col-xl-6 col-lg-4 col-md-12 m-b30">
                            	<div class="virus-symptoms-media-outer">
                                    <div class="virus-symptoms-media">
                                        <img src="{{ asset('frontend/images/symptoms/pic-large.png')}}" alt="">
                                    </div>
                                	<span class="virus-symptoms-media-virus1 floating"><img src="{{ asset('frontend/images/symptoms/green-virus.png')}}" alt=""></span>
                                    <span class="virus-symptoms-media-virus2 floating-2"><img src="{{ asset('frontend/images/symptoms/green-virus.png')}}" alt=""></span>
                                    <span class="virus-symptoms-media-virus3 floating"><img src="{{ asset('frontend/images/symptoms/green-virus.png')}}" alt=""></span>
                                    <span class="virus-symptoms-media-virus4 floating-3"><img src="{{ asset('frontend/images/symptoms/green-virus.png')}}" alt=""></span>
                                </div>
                                
                            </div> 
                            
                            <div class="col-xl-6  col-lg-8 col-md-12 m-b30">
                            	<div class="virus-symptoms-box-outer">
                                
                                	<div class="row justify-content-center d-flex">
                                        <div class="col-lg-6 col-md-6 m-b30">
                                            <div class="virus-symptoms-box radius-lg bg-white text-center p-a30 hovericon-spin">
                                                <div class="virus-symptoms-box-media m-b20 bg-gray radius-bx hovericon-spin-icon"><img src="{{ asset('frontend/images/symptoms/pic1.png')}}" alt=""></div>
                                                <h4 class="wt-title m-b0">Coughing & Sneezing</h4>                                        
                                            </div>
                                        </div>
                                        
                                        <div class="col-lg-6 col-md-6 m-b30">
                                            <div class="virus-symptoms-box radius-lg bg-white text-center p-a30 hovericon-spin">
                                                <div class="virus-symptoms-box-media m-b20 bg-gray radius-bx hovericon-spin-icon"><img src="{{ asset('frontend/images/symptoms/pic2.png')}}" alt=""></div>
                                                <h4 class="wt-title m-b0">Strontg Fever</h4>                                        
                                            </div>
                                        </div>
                                        
                                        <div class="col-lg-6 col-md-6 m-b30">
                                            <div class="virus-symptoms-box radius-lg bg-white text-center p-a30 hovericon-spin">
                                                <div class="virus-symptoms-box-media m-b20 bg-gray radius-bx hovericon-spin-icon"><img src="{{ asset('frontend/images/symptoms/pic3.png')}}" alt=""></div>
                                                <h4 class="wt-title m-b0">Sore Throat</h4>                                        
                                            </div>
                                        </div>
                                        
                                        <div class="col-lg-6 col-md-6 m-b30">
                                            <div class="virus-symptoms-box radius-lg bg-white text-center p-a30 hovericon-spin">
                                                <div class="virus-symptoms-box-media m-b20 bg-gray radius-bx hovericon-spin-icon"><img src="{{ asset('frontend/images/symptoms/pic4.png')}}" alt=""></div>
                                                <h4 class="wt-title m-b0">Strong Headache</h4>                                        
                                            </div>
                                        </div>                                                                                                            
                                    </div>
                                	
                                </div>
                            	
                            </div>                             
                                                                                    
                                               
                        </div>
                                 
				</div>
               
               </div> 
                
            </div>   
            <!-- VIRUS Symptoms SECTION END --> 
            
            <!-- HAND WASH START -->
            <div class="section-full  p-t80 p-b50 bg-cover" style="background-image:url({{ asset('frontend/images/background/bg3.jpg)')}}">
            	
				<div class="container">
                
                    <!-- TITLE START-->
                    <div class="section-head center wt-small-separator-outer text-white">
                        <div class="wt-small-separator site-text-primary">
                            <div class="site-bg-small-title  radius-md">Hand Wash</div>
                        </div>
                        <h2>Follow steps to wash hands</h2>
                        <p>Coronavirus disease (COVID-19) is an infectious disease caused by a newly discovered coronavirus. Most people infected with the COVID-19 virus...</p>
                        
                    </div>
                    <!-- TITLE END-->                 
                
                    <!-- BLOG SECTION START -->
                    <div class="section-content">
                        <div class="row d-flex justify-content-center">
                            <!--Block one-->
                            <div class="col-lg-3 col-md-4 m-b30">
                                <div class="handwash-box text-center text-white hover-slider-top-down ">
                                    <div class="handwash-box-media m-b20 bg-white radius-bx hover-slider-top-down-icon"><img src="{{ asset('frontend/images/handwash/pic1.png')}}" alt=""></div>
                                    <h4 class="wt-title m-b0">Wet your hands</h4>                                        
                                </div>
                            </div>
                            
                            <!--Block two-->
                            <div class="col-lg-3 col-md-4 m-b30">
                                <div class="handwash-box text-center text-white hover-slider-top-down">
                                    <div class="handwash-box-media m-b20 bg-white radius-bx hover-slider-top-down-icon"><img src="{{ asset('frontend/images/handwash/pic2.png')}}" alt=""></div>
                                    <h4 class="wt-title m-b0">Apply soap</h4>                                        
                                </div>
                            </div>
                            
                            <!--Block three-->
                            <div class="col-lg-3 col-md-4 m-b30">
                                <div class="handwash-box text-center text-white hover-slider-top-down">
                                    <div class="handwash-box-media m-b20 bg-white radius-bx hover-slider-top-down-icon"><img src="{{ asset('frontend/images/handwash/pic3.png')}}" alt=""></div>
                                    <h4 class="wt-title m-b0">Rub hands palm to palm</h4>                                        
                                </div>
                            </div>
                            
                            <!--Block four-->
                            <div class="col-lg-3 col-md-4 m-b30">
                                <div class="handwash-box text-center text-white hover-slider-top-down">
                                    <div class="handwash-box-media m-b20 bg-white radius-bx hover-slider-top-down-icon"><img src="{{ asset('frontend/images/handwash/pic4.png')}}" alt=""></div>
                                    <h4 class="wt-title m-b0">Rub your dorsums</h4>                                        
                                </div>
                            </div>
                            
                            <!--Block five-->
                            <div class="col-lg-3 col-md-4 m-b30">
                                <div class="handwash-box text-center text-white hover-slider-top-down">
                                    <div class="handwash-box-media m-b20 bg-white radius-bx hover-slider-top-down-icon"><img src="{{ asset('frontend/images/handwash/pic5.png')}}" alt=""></div>
                                    <h4 class="wt-title m-b0">Rub between fingers</h4>                                        
                                </div>
                            </div>
                            
                            <!--Block six-->
                            <div class="col-lg-3 col-md-4 m-b30">
                                <div class="handwash-box text-center text-white hover-slider-top-down">
                                    <div class="handwash-box-media m-b20 bg-white radius-bx hover-slider-top-down-icon"><img src="{{ asset('frontend/images/handwash/pic6.png')}}" alt=""></div>
                                    <h4 class="wt-title m-b0">Rub the back of the fingers</h4>                                        
                                </div>
                            </div>
                            
                            <!--Block seven-->
                            <div class="col-lg-3 col-md-4 m-b30">
                                <div class="handwash-box text-center text-white hover-slider-top-down">
                                    <div class="handwash-box-media m-b20 bg-white radius-bx hover-slider-top-down-icon"><img src="{{ asset('frontend/images/handwash/pic7.png')}}" alt=""></div>
                                    <h4 class="wt-title m-b0">Rotation rub the thumbs</h4>                                        
                                </div>
                            </div>
                            
                            <!--Block eight-->
                            <div class="col-lg-3 col-md-4 m-b30">
                                <div class="handwash-box text-center text-white hover-slider-top-down">
                                    <div class="handwash-box-media m-b20 bg-white radius-bx hover-slider-top-down-icon"><img src="{{ asset('frontend/images/handwash/pic8.png')}}" alt=""></div>
                                    <h4 class="wt-title m-b0">Rub the tip of the fingers</h4>                                        
                                </div>
                            </div>
                            
                            <!--Block nine-->
                            <div class="col-lg-3 col-md-4 m-b30">
                                <div class="handwash-box text-center text-white hover-slider-top-down">
                                    <div class="handwash-box-media m-b20 bg-white radius-bx hover-slider-top-down-icon"><img src="{{ asset('frontend/images/handwash/pic9.png')}}" alt=""></div>
                                    <h4 class="wt-title m-b0">Rinse with water</h4>                                        
                                </div>
                            </div>
                            
                            <!--Block ten-->
                            <div class="col-lg-3 col-md-4 m-b30">
                                <div class="handwash-box text-center text-white hover-slider-top-down">
                                    <div class="handwash-box-media m-b20 bg-white radius-bx hover-slider-top-down-icon"><img src="{{ asset('frontend/images/handwash/pic10.png')}}" alt=""></div>
                                    <h4 class="wt-title m-b0">Your hands are clean</h4>                                        
                                </div>
                            </div>                                                                                                                                                                                                                                                            
                        </div>
                    </div>
                </div>
                
             </div>   
            <!-- HAND WASH END -->                         
            
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
                                  	<li><i class="flaticon-location"></i>San Francisco City Hall, San Francisco, CA</li>
                                    <li><i class="flaticon-email"></i>contact123@gmail.com</li>
                                    <li> <i class="flaticon-mobile-phone"></i>(654) 321-7654 </li>
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


<!-- Mirrored from thewebmax.com/vishanu/prevention.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 17 Apr 2020 13:59:58 GMT -->
</html>
