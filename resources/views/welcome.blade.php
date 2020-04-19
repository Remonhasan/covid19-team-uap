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
    <link rel="icon" href="{{ asset('frontend/iimages/favicon.ico')}}" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend/images/favicon.png')}}" />
    
    <!-- PAGE TITLE HERE -->
    <title>Covid-19 | Tracker & Necessaries </title>
    
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
                                    <li><a href="index-2.html">Home</a></li>  
                                     <li><a href="https://corona.gov.bd/">Govt. Help Services</a></li>  
                                                                            
                                    <li><a href="{{ route('prevention')}}">Prevention</a></li> 
                                    <li><a href="javascript:;">Shop</a>
                                        <ul class="sub-menu">
                                            <li><a href="{{ route('product')}}">Our Shop</a></li>                                        
                                            <li><a href="https://chaldal.com/">Chaldal.com</a></li>
                                            <li><a href="https://www.shwapno.com/">Shwapno.com</a></li>
                                            <li><a href="https://www.othoba.com/food-grocery">Othoba.com</a></li>
                                            <li><a href="www.google.com">Others Grocery shop</a></li>                                            
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
           <!-- SLIDER START --> 
            <div class="slider-outer">
               
                <div id="welcome_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="goodnews-header" data-source="gallery" style="background:#eeeeee;padding:0px;">
                    <div id="welcome" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.4.3.1">
                        <ul>    
                        
                            <!-- SLIDE 1 -->
                            <li data-index="rs-901" 
                            data-transition="fade" 
                            data-slotamount="default" 
                            data-hideafterloop="0" 
                            data-hideslideonmobile="off"  
                            data-easein="default" 
                            data-easeout="default" 
                            data-masterspeed="default"  
                            data-thumb="{{ asset('frontend/images/main-slider/slider1/slide1.jpg')}}"  
                            data-rotate="0"  
                            data-fstransition="fade" 
                            data-fsmasterspeed="300" 
                            data-fsslotamount="7" 
                            data-saveperformance="off"  
                            data-title="Slide Title" 
                            data-param1="Additional Text" 
                            data-param2="" 
                            data-param3="" 
                            data-param4="" 
                            data-param5="" 
                            data-param6="" 
                            data-param7="" 
                            data-param8="" 
                            data-param9="" 
                            data-param10="" 
                            data-description="">
                                <!-- MAIN IMAGE -->
                                <img src="{{ asset('frontend/images/main-slider/slider1/slide1.jpg')}}"  alt=""  data-lazyload="{{ asset('frontend/images/main-slider/slider1/slide1.jpg')}}" data-bgposition="center center" 
                                data-bgfit="cover" data-bgparallax="4" class="rev-slidebg" data-no-retina>
                                <!-- LAYERS -->
                                
                                <!-- LAYER NR. 1 [ for overlay ] -->
                                <div class="tp-caption tp-shape tp-shapewrapper " 
                                id="slide-901-layer-0" 
                                data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                                data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" 
                                data-width="full"
                                data-height="full"
                                data-whitespace="nowrap"
                                data-type="shape" 
                                data-basealign="slide" 
                                data-responsive_offset="off" 
                                data-responsive="off"
                                data-frames='[
                                {"from":"opacity:0;","speed":1000,"to":"o:1;","delay":0,"ease":"Power4.easeOut"},
                                {"delay":"wait","speed":1000,"to":"opacity:0;","ease":"Power4.easeOut"}
                                ]'
                                data-textAlign="['left','left','left','left']"
                                data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]"
                                data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"
                                
                                style="z-index: 1;background-color:rgba(0, 0, 0, 0);border-color:rgba(0, 0, 0, 0);border-width:0px;"> 
                                </div>
 
                                <!-- LAYER NR. 2 [ for title ] -->
                                <div class="tp-caption   tp-resizeme" 
                                id="slide-901-layer-2" 
                                data-x="['left','left','center','center']" data-hoffset="[100','100','0','0']" 
                                data-y="['top','top','top','top']" data-voffset="['260','250','100','80']"  
                                data-fontsize="['16','16','16','16']"
                                data-lineheight="['16','16','16','16']"
                                data-width="['600','600','96%','96%']"
                                data-height="['none','none','none','none']"
                                data-whitespace="['normal','normal','normal','normal']"
                            
                                data-type="text" 
                                data-responsive_offset="on" 
                                data-frames='[
                                {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":1000,"ease":"Power4.easeOut"},
                                {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                ]'
                                data-textAlign="['left','left','center','center']"
                                data-paddingtop="[5,5,5,5]"
                                data-paddingright="[0,0,0,0]"
                                data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"
                            
                                style="z-index: 13; 
                                white-space: normal; 
                                font-weight: 500;
                                letter-spacing:1px;
                                border-width:0px;font-family: 'Fira Sans', sans-serif;"><span class="site-text-primary site-bg-small-title  p-a15">Stay Home, Stay Safe</span></div> 
                               
                                <!-- LAYER NR. 3 [ for title ] -->
                                <div class="tp-caption   tp-resizeme site-text-primary" 
                                id="slide-901-layer-3" 
                                data-x="['left','left','center','center']" data-hoffset="[100','100','0','0']" 
                                data-y="['top','top','top','top']" data-voffset="['330','330','160','140']"  
                                data-fontsize="['40','40','28','28']"
                                data-lineheight="['50','50','38','38']"
                                data-width="['600','600','90%','96%']"
                                data-height="['none','none','none','none']"
                                data-whitespace="['normal','normal','normal','normal']"
                            
                                data-type="text" 
                                data-responsive_offset="on" 
                                data-frames='[
                                {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":1000,"ease":"Power4.easeOut"},
                                {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                ]'
                                data-textAlign="['left','left','center','center']"
                                data-paddingtop="[5,5,5,5]"
                                data-paddingright="[0,0,0,0]"
                                data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"
                            
                                style="z-index: 13; 
                                white-space: normal; 
                                font-weight: 900;
                                border-width:0px; font-family: 'Merriweather', serif;">Protect Yourself From Coronavirus (COVID-19) </div>
                            
                                <!-- LAYER NR. 4 [ for paragraph] -->
                                <div class="tp-caption  tp-resizeme" 
                                id="slide-901-layer-4" 
                                data-x="['left','left','center','center']" data-hoffset="['100','100','0','0']" 
                                data-y="['middle','middle','middle','middle']" data-voffset="['70','140','-60','-80']"  
                                data-fontsize="['16','16','16','16']"
                                data-lineheight="['30','30','30','22']"
                                data-width="['600','600','90%','90%']"
                                data-height="['none','none','none','none']"
                                data-whitespace="['normal','normal','normal','normal']"
                            
                                data-type="text" 
                                data-responsive_offset="on"
                                data-frames='[
                                {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":1500,"ease":"Power4.easeOut"},
                                {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                ]'
                                data-textAlign="['left','left','center','center']"
                                data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]"
                                data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"
                            
                                style="z-index: 13; 
                                font-weight: 500; 
                                
                                border-width:0px;font-family: 'Fira Sans', sans-serif;">
                                You can choose how you will receive and consume information about the outbreak. Another way to care for yourself
                                </div>
                            
                                <!-- LAYER NR. 5 [ Button one ] -->
                                <div class="tp-caption tp-resizeme"     
                                id="slide-901-layer-5"                      
                                data-x="['left','left','center','center']" data-hoffset="['100','100','0','0']" 
                                data-y="['middle','middle','middle','middle']" data-voffset="['160','230','30','30']"  
                                data-lineheight="['none','none','none','none']"
                                data-width="['300','300','100%','100%']"
                                data-height="['none','none','none','none']"
                                data-whitespace="['normal','normal','normal','normal']"
                                
                                data-type="text" 
                                data-responsive_offset="on"
                                data-frames='[ 
                                {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":2000,"ease":"Power4.easeOut"},
                                {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                ]'
                                data-textAlign="['left','left','center','center']"
                                data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]"
                                data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"
                                
                                style="z-index:13;">
                                <a href="javascript:;" class="site-button-secondry is-reversed button-r-padding">Protect Myself</a>
                                </div>
                                
                                <!-- LAYER NR. 7 [ Image Avtar ] -->
                                <div class="tp-caption tp-resizeme"     
                                    id="slide-901-layer-7"                      
                                    data-x="['right','right','center','center']" data-hoffset="['0','0','0','0']" 
                                    data-y="['bottom','bottom','bottom','bottom']" data-voffset="['100','100','0','0']"
                                    data-lineheight="['none','none','none','none']"
                                    data-frames='[ 
                                    {"from":"y:200px(R);opacity:0;","speed":2000,"to":"o:1;","delay":2000,"ease":"Power4.easeOut"},
                                    {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                    ]'
                                    
                                    style="z-index: 13;">
                                    <img src="{{ asset('frontend/images/main-slider/slider1/one/img-1.png')}}" alt="" data-ww="['500px','300px','200px','200px']" data-hh="['548px','329px','219px','219px']" width="500" height="548" data-no-retina>
                                </div>  
                                
                                <!-- LAYER NR. 8 [ Image Virus ] -->
                                <div class="tp-caption tp-resizeme"     
                                    id="slide-901-layer-8"                      
                                    data-x="['right','right','center','center']" data-hoffset="['0','0','0','0']" 
                                    data-y="['bottom','bottom','bottom','bottom']" data-voffset="['100','100','0','0']"
                                    
                                    data-frames='[ 
                                    {"from":"X:0px(R);opacity:0;","speed":2000,"to":"o:1;","delay":3000,"ease":"Power4.easeOut"},
                                    {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                    ]'
                                    
                                    style="z-index: 13;">
                                    <img src="{{ asset('frontend/images/main-slider/slider1/one/img-2.png')}}" alt="" class="floating" data-ww="['602px','300px','300px','300px']" data-hh="['548px','273px','273px','273px']" width="602" height="548" data-no-retina>
                                </div>  
   
                            </li>

                            <!-- SLIDE 2 -->
                            <li data-index="rs-902" 
                            data-transition="fade" 
                            data-slotamount="default" 
                            data-hideafterloop="0" 
                            data-hideslideonmobile="off"  
                            data-easein="default" 
                            data-easeout="default" 
                            data-masterspeed="default"  
                            data-thumb="{{ asset('frontend/images/main-slider/slider1/slide1.jpg')}}"  
                            data-rotate="0"  
                            data-fstransition="fade" 
                            data-fsmasterspeed="300" 
                            data-fsslotamount="7" 
                            data-saveperformance="off"  
                            data-title="Slide Title" 
                            data-param1="Additional Text" 
                            data-param2="" 
                            data-param3="" 
                            data-param4="" 
                            data-param5="" 
                            data-param6="" 
                            data-param7="" 
                            data-param8="" 
                            data-param9="" 
                            data-param10="" 
                            data-description="">
                                <!-- MAIN IMAGE -->
                                <img src="{{ asset('frontend/images/main-slider/slider1/slide1.jpg')}}"  alt=""  data-lazyload="{{ asset('frontend/images/main-slider/slider1/slide1.jpg')}}" data-bgposition="center center" 
                                data-bgfit="cover" data-bgparallax="4" class="rev-slidebg" data-no-retina>
                                <!-- LAYERS -->
                                
                                <!-- LAYER NR. 1 [ for overlay ] -->
                                <div class="tp-caption tp-shape tp-shapewrapper " 
                                id="slide-902-layer-0" 
                                data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                                data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" 
                                data-width="full"
                                data-height="full"
                                data-whitespace="nowrap"
                                data-type="shape" 
                                data-basealign="slide" 
                                data-responsive_offset="off" 
                                data-responsive="off"
                                data-frames='[
                                {"from":"opacity:0;","speed":1000,"to":"o:1;","delay":0,"ease":"Power4.easeOut"},
                                {"delay":"wait","speed":1000,"to":"opacity:0;","ease":"Power4.easeOut"}
                                ]'
                                data-textAlign="['left','left','left','left']"
                                data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]"
                                data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"
                                
                                style="z-index: 1;background-color:rgba(0, 0, 0, 0);border-color:rgba(0, 0, 0, 0);border-width:0px;"> 
                                </div>
 
                                <!-- LAYER NR. 2 [ for title ] -->
                                <div class="tp-caption   tp-resizeme" 
                                id="slide-902-layer-2" 
                                data-x="['left','left','center','center']" data-hoffset="[100','100','0','0']" 
                                data-y="['top','top','top','top']" data-voffset="['260','250','100','80']"  
                                data-fontsize="['16','16','16','16']"
                                data-lineheight="['16','16','16','16']"
                                data-width="['600','600','96%','96%']"
                                data-height="['none','none','none','none']"
                                data-whitespace="['normal','normal','normal','normal']"
                            
                                data-type="text" 
                                data-responsive_offset="on" 
                                data-frames='[
                                {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":1000,"ease":"Power4.easeOut"},
                                {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                ]'
                                data-textAlign="['left','left','center','center']"
                                data-paddingtop="[5,5,5,5]"
                                data-paddingright="[0,0,0,0]"
                                data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"
                            
                                style="z-index: 13; 
                                white-space: normal; 
                                font-weight: 500;
                                letter-spacing:1px;
                                border-width:0px;font-family: 'Fira Sans', sans-serif;"><span class="site-text-primary site-bg-small-title  p-a15">Avoid Close Contact</span></div> 
                               
                                <!-- LAYER NR. 3 [ for title ] -->
                                <div class="tp-caption   tp-resizeme site-text-primary" 
                                id="slide-902-layer-3" 
                                data-x="['left','left','center','center']" data-hoffset="[100','100','0','0']" 
                                data-y="['top','top','top','top']" data-voffset="['330','330','160','140']"  
                                data-fontsize="['40','40','28','28']"
                                data-lineheight="['50','50','38','38']"
                                data-width="['600','600','90%','96%']"
                                data-height="['none','none','none','none']"
                                data-whitespace="['normal','normal','normal','normal']"
                            
                                data-type="text" 
                                data-responsive_offset="on" 
                                data-frames='[
                                {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":1000,"ease":"Power4.easeOut"},
                                {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                ]'
                                data-textAlign="['left','left','center','center']"
                                data-paddingtop="[5,5,5,5]"
                                data-paddingright="[0,0,0,0]"
                                data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"
                            
                                style="z-index: 13; 
                                white-space: normal; 
                                font-weight: 900;
                                border-width:0px; font-family: 'Merriweather', serif;">Avoid close contact with people who are unwell</div>
                            
                                <!-- LAYER NR. 4 [ for paragraph] -->
                                <div class="tp-caption  tp-resizeme" 
                                id="slide-902-layer-4" 
                                data-x="['left','left','center','center']" data-hoffset="['100','100','0','0']" 
                                data-y="['middle','middle','middle','middle']" data-voffset="['70','140','-60','-80']"  
                                data-fontsize="['16','16','16','16']"
                                data-lineheight="['30','30','30','22']"
                                data-width="['500','500','90%','90%']"
                                data-height="['none','none','none','none']"
                                data-whitespace="['normal','normal','normal','normal']"
                            
                                data-type="text" 
                                data-responsive_offset="on"
                                data-frames='[
                                {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":1500,"ease":"Power4.easeOut"},
                                {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                ]'
                                data-textAlign="['left','left','center','center']"
                                data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]"
                                data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"
                            
                                style="z-index: 13; 
                                font-weight: 500; 
                                
                                border-width:0px;font-family: 'Fira Sans', sans-serif;">
                                You can choose how you will receive and consume information about the outbreak. Another way to care for yourself
                                </div>
                            
                                <!-- LAYER NR. 5 [ Button one ] -->
                                <div class="tp-caption tp-resizeme"     
                                id="slide-902-layer-5"                      
                                data-x="['left','left','center','center']" data-hoffset="['100','100','0','0']" 
                                data-y="['middle','middle','middle','middle']" data-voffset="['160','230','30','30']"  
                                data-lineheight="['none','none','none','none']"
                                data-width="['300','300','100%','100%']"
                                data-height="['none','none','none','none']"
                                data-whitespace="['normal','normal','normal','normal']"
                                
                                data-type="text" 
                                data-responsive_offset="on"
                                data-frames='[ 
                                {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":2000,"ease":"Power4.easeOut"},
                                {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                ]'
                                data-textAlign="['left','left','center','center']"
                                data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]"
                                data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"
                                
                                style="z-index:13;">
                                <a href="javascript:;" class="site-button-secondry is-reversed button-r-padding">About Covid-19</a>
                                </div>                                
                                
                                <!-- LAYER NR. 7 [ Image Avtar ] -->
                                <div class="tp-caption tp-resizeme"     
                                    id="slide-902-layer-7"                      
                                    data-x="['right','right','center','center']" data-hoffset="['0','0','0','0']" 
                                    data-y="['bottom','bottom','bottom','bottom']" data-voffset="['100','100','0','0']"
                                    data-lineheight="['none','none','none','none']"
                                    data-frames='[ 
                                    {"from":"y:200px(R);opacity:0;","speed":2000,"to":"o:1;","delay":1500,"ease":"Power4.easeOut"},
                                    {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                    ]'
                                    
                                    style="z-index: 13;">
                                    <img src="{{ asset('frontend/images/main-slider/slider1/two/img-3.png')}}"  alt="" data-ww="['600px','400px','300px','300px']" data-hh="['486px',324px','243px','243px']" width="600" height="486" data-no-retina>
                                </div>  
                                
                                <!-- LAYER NR. 8 [ Image Virus 1 ] -->
                                <div class="tp-caption tp-resizeme"     
                                    id="slide-902-layer-8"                      
                                    data-x="['right','right','center','center']" data-hoffset="['360','260','-60','-60']" 
                                    data-y="['middle','middle','bottom','bottom']" data-voffset="['140','140','80','80']"
                                    
                                    data-frames='[ 
                                    {"from":"y:200px(R);opacity:0;","speed":2000,"to":"o:1;","delay":2000,"ease":"Power4.easeOut"},
                                    {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                    ]'
                                    
                                   
                                    
                                    style="z-index: 13;">
                                    <img src="{{ asset('frontend/images/main-slider/slider1/two/v-2.png')}}" alt="" class="floating-2" data-ww="['84px','50px','30px','30px']" data-hh="['85px','51px','31px','31px']" width="84" height="85" data-no-retina>
                                </div>
                                
                                <!-- LAYER NR. 9 [ Image Virus 2 ] -->
                                <div class="tp-caption tp-resizeme"     
                                    id="slide-902-layer-9"                      
                                    data-x="['right','right','center','center']" data-hoffset="['260','180','0','0']" 
                                    data-y="['middle','middle','bottom','bottom']" data-voffset="['0','80','100','100']"
                                    
                                    data-frames='[ 
                                    {"from":"y:200px(R);opacity:0;","speed":2000,"to":"o:1;","delay":2500,"ease":"Power4.easeOut"},
                                    {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                    ]'
                                    
                                    style="z-index: 13;">
                                    <img src="{{ asset('frontend/images/main-slider/slider1/two/v-1.png')}}" alt="" class="scale-down-center" data-ww="['141px','84px','50px','50px']" data-hh="['141px','85px','51px','51px']" width="141" height="141" data-no-retina>
                                </div>                                   
                                                           
                                <!-- LAYER NR. 10 [ Image Virus 3 ] -->
                                <div class="tp-caption tp-resizeme"     
                                    id="slide-902-layer-10"                     
                                    data-x="['right','right','center','center']" data-hoffset="['150','100','70','70']" 
                                    data-y="['middle','middle','bottom','bottom']" data-voffset="['170','140','70','70']"
                                    
                                    data-frames='[ 
                                    {"from":"y:200px(R);opacity:0;","speed":2000,"to":"o:1;","delay":3000,"ease":"Power4.easeOut"},
                                    {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                    ]'
                                    
                                    style="z-index: 13;">
                                    <img src="{{ asset('frontend/images/main-slider/slider1/two/v-3.png')}}" alt="" class="rotate-center" data-ww="['57px','37px','25px','25px']" data-hh="['58px','38px','26px','26px']" width="57" height="58" data-no-retina>
                                </div>       
                                                                                                
   
                            </li>           
                            
                            <!-- SLIDE 3 -->
                            <li data-index="rs-903" 
                            data-transition="fade" 
                            data-slotamount="default" 
                            data-hideafterloop="0" 
                            data-hideslideonmobile="off"  
                            data-easein="default" 
                            data-easeout="default" 
                            data-masterspeed="default"  
                            data-thumb="{{ asset('frontend/images/main-slider/slider1/slide1.jpg')}}"  
                            data-rotate="0"  
                            data-fstransition="fade" 
                            data-fsmasterspeed="300" 
                            data-fsslotamount="7" 
                            data-saveperformance="off"  
                            data-title="Slide Title" 
                            data-param1="Additional Text" 
                            data-param2="" 
                            data-param3="" 
                            data-param4="" 
                            data-param5="" 
                            data-param6="" 
                            data-param7="" 
                            data-param8="" 
                            data-param9="" 
                            data-param10="" 
                            data-description="">
                                <!-- MAIN IMAGE -->
                                <img src="{{ asset('frontend/images/main-slider/slider1/slide1.jpg')}}"  alt=""  data-lazyload="{{ asset('frontend/images/main-slider/slider1/slide1.jpg')}}" data-bgposition="center center" 
                                data-bgfit="cover" data-bgparallax="4" class="rev-slidebg" data-no-retina>
                                <!-- LAYERS -->
                                
                                <!-- LAYER NR. 1 [ for overlay ] -->
                                <div class="tp-caption tp-shape tp-shapewrapper " 
                                id="slide-903-layer-0" 
                                data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                                data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" 
                                data-width="full"
                                data-height="full"
                                data-whitespace="nowrap"
                                data-type="shape" 
                                data-basealign="slide" 
                                data-responsive_offset="off" 
                                data-responsive="off"
                                data-frames='[
                                {"from":"opacity:0;","speed":1000,"to":"o:1;","delay":0,"ease":"Power4.easeOut"},
                                {"delay":"wait","speed":1000,"to":"opacity:0;","ease":"Power4.easeOut"}
                                ]'
                                data-textAlign="['left','left','left','left']"
                                data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]"
                                data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"
                                
                                style="z-index: 1;background-color:rgba(0, 0, 0, 0);border-color:rgba(0, 0, 0, 0);border-width:0px;"> 
                                </div>
 
                                <!-- LAYER NR. 2 [ for title ] -->
                                <div class="tp-caption   tp-resizeme" 
                                id="slide-903-layer-2" 
                                data-x="['left','left','center','center']" data-hoffset="[100','100','0','0']" 
                                data-y="['top','top','top','top']" data-voffset="['260','250','100','80']"  
                                data-fontsize="['16','16','16','16']"
                                data-lineheight="['16','16','16','16']"
                                data-width="['600','600','96%','96%']"
                                data-height="['none','none','none','none']"
                                data-whitespace="['normal','normal','normal','normal']"
                            
                                data-type="text" 
                                data-responsive_offset="on" 
                                data-frames='[
                                {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":1000,"ease":"Power4.easeOut"},
                                {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                ]'
                                data-textAlign="['left','left','center','center']"
                                data-paddingtop="[5,5,5,5]"
                                data-paddingright="[0,0,0,0]"
                                data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"
                            
                                style="z-index: 13; 
                                white-space: normal; 
                                font-weight: 500;
                                letter-spacing:1px;
                                border-width:0px;font-family: 'Fira Sans', sans-serif;"><span class="site-text-primary site-bg-small-title  p-a15">Avoid Close Contact</span></div> 
                               
                                <!-- LAYER NR. 3 [ for title ] -->
                                <div class="tp-caption   tp-resizeme site-text-primary" 
                                id="slide-903-layer-3" 
                                data-x="['left','left','center','center']" data-hoffset="[100','100','0','0']" 
                                data-y="['top','top','top','top']" data-voffset="['330','330','160','140']"  
                                data-fontsize="['40','40','28','28']"
                                data-lineheight="['50','50','38','38']"
                                data-width="['600','600','90%','96%']"
                                data-height="['none','none','none','none']"
                                data-whitespace="['normal','normal','normal','normal']"
                            
                                data-type="text" 
                                data-responsive_offset="on" 
                                data-frames='[
                                {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":1000,"ease":"Power4.easeOut"},
                                {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                ]'
                                data-textAlign="['left','left','center','center']"
                                data-paddingtop="[5,5,5,5]"
                                data-paddingright="[0,0,0,0]"
                                data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"
                            
                                style="z-index: 13; 
                                white-space: normal; 
                                font-weight: 900;
                                border-width:0px; font-family: 'Merriweather', serif;">Avoid close contact with people who are unwell</div>
                            
                                <!-- LAYER NR. 4 [ for paragraph] -->
                                <div class="tp-caption  tp-resizeme" 
                                id="slide-903-layer-4" 
                                data-x="['left','left','center','center']" data-hoffset="['100','100','0','0']" 
                                data-y="['middle','middle','middle','middle']" data-voffset="['70','140','-60','-80']"  
                                data-fontsize="['16','16','16','16']"
                                data-lineheight="['30','30','30','22']"
                                data-width="['500','500','90%','90%']"
                                data-height="['none','none','none','none']"
                                data-whitespace="['normal','normal','normal','normal']"
                            
                                data-type="text" 
                                data-responsive_offset="on"
                                data-frames='[
                                {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":1500,"ease":"Power4.easeOut"},
                                {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                ]'
                                data-textAlign="['left','left','center','center']"
                                data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]"
                                data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"
                            
                                style="z-index: 13; 
                                font-weight: 500; 
                                
                                border-width:0px;font-family: 'Fira Sans', sans-serif;">
                                You can choose how you will receive and consume information about the outbreak. Another way to care for yourself
                                </div>
                            
                                <!-- LAYER NR. 5 [ Button one ] -->
                                <div class="tp-caption tp-resizeme"     
                                id="slide-903-layer-5"                      
                                data-x="['left','left','center','center']" data-hoffset="['100','100','0','0']" 
                                data-y="['middle','middle','middle','middle']" data-voffset="['160','230','30','30']"  
                                data-lineheight="['none','none','none','none']"
                                data-width="['300','300','100%','100%']"
                                data-height="['none','none','none','none']"
                                data-whitespace="['normal','normal','normal','normal']"
                                
                                data-type="text" 
                                data-responsive_offset="on"
                                data-frames='[ 
                                {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":2000,"ease":"Power4.easeOut"},
                                {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                ]'
                                data-textAlign="['left','left','center','center']"
                                data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]"
                                data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"
                                
                                style="z-index:13;">
                                <a href="javascript:;" class="site-button-secondry is-reversed button-r-padding">Protect Myself</a>
                                </div>
                                
                                <!-- LAYER NR. 7 [ Image Avtar ] -->
                                <div class="tp-caption tp-resizeme"     
                                    id="slide-903-layer-7"                      
                                    data-x="['right','right','center','center']" data-hoffset="['0','0','0','0']" 
                                    data-y="['bottom','bottom','bottom','bottom']" data-voffset="['100','100','0','0']"
                                    data-lineheight="['none','none','none','none']"
                                    data-frames='[ 
                                    {"from":"y:200px(R);opacity:0;","speed":2000,"to":"o:1;","delay":2000,"ease":"Power4.easeOut"},
                                    {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                    ]'
                                    
                                    style="z-index: 13;">
                                    <img src="images/main-slider/slider1/three/img-1.png"  alt="" data-ww="['600px','400px','300px','300px']" data-hh="['517px',324px','243px','243px']" width="600" height="517" data-no-retina>
                                </div>  
                                
                                <!-- LAYER NR. 8 [ Image Virus 1 ] -->
                                <div class="tp-caption tp-resizeme"     
                                    id="slide-903-layer-8"                      
                                    data-x="['right','right','center','center']" data-hoffset="['500','350','-120','-100']" 
                                    data-y="['middle','middle','bottom','bottom']" data-voffset="['170','170','20','20']"
                                    
                                    data-frames='[ 
                                    {"from":"y:200px(R);opacity:0;","speed":2000,"to":"o:1;","delay":2500,"ease":"Power4.easeOut"},
                                    {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                    ]'
                                    
                                    style="z-index: 12;">
                                    <img src="images/main-slider/slider1/three/v1.png" alt="" class="floating-2" data-ww="['84px','50px','50px','50px']" data-hh="['85px','51px','51px','51px']" width="105" height="106" data-no-retina>
                                </div>
                                
                                <!-- LAYER NR. 9 [ Image Virus 2 ] -->
                                <div class="tp-caption tp-resizeme"     
                                    id="slide-903-layer-9"                      
                                    data-x="['right','right','center','center']" data-hoffset="['-20','10','140','140']" 
                                    data-y="['middle','middle','bottom','bottom']" data-voffset="['-100','-100','200','200']"
                                    
                                    data-frames='[ 
                                    {"from":"y:200px(R);opacity:0;","speed":2000,"to":"o:1;","delay":2500,"ease":"Power4.easeOut"},
                                    {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                    ]'
                                    
                                    style="z-index: 12;">
                                    <img src="{{ asset('frontend/images/main-slider/slider1/three/v2.png')}}" alt="" class="rotate-center" data-ww="['141px','84px','50px','50px']" data-hh="['141px','85px','51px','51px']" width="176" height="176" data-no-retina>
                                </div>                                   
                                                           
                                <!-- LAYER NR. 10 [ Image Handshake ] -->
                                <div class="tp-caption tp-resizeme"     
                                    id="slide-903-layer-10"                     
                                    data-x="['right','right','center','center']" data-hoffset="['180','120','20','20']" 
                                    data-y="['middle','middle','bottom','bottom']" data-voffset="['0','60','100','100']"
                                    
                                    data-frames='[ 
                                    {"from":"X:50px(R);opacity:0;","speed":2000,"to":"o:1;","delay":4000,"ease":"Power4.easeOut"},
                                    {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                    ]'
                                    
                                    style="z-index: 13;">
                                    <img src="{{ asset('frontend/images/main-slider/slider1/three/handshake.png')}}" alt="" class="scale-down-center" data-ww="['184px','120px','100px','100px']" data-hh="['184px','120px','100px','100px']" width="184" height="184" data-no-retina>
                                </div>
                                                                                                
   
                            </li>                    
                            
                        </ul>
                        <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div> 
                    </div>
                </div>
         
            </div>
            <!-- SLIDER END -->
            
            
            <!-- WHAT WE DO SECTION START -->
            <div class="section-full">
                
                <div class="container">
                    <div class="worldwide-tracker-section">
                        <div class="worldwide-tracker site-bg-primary shadow radius-lg">
                            <div class="row justify-content-center d-flex">
                                <div class="col-xl-5 col-lg-12 col-md-12">
                                    <div class="worldwide-tracker-info">
                                        <span class="wt-title site-text-white">Worldwide Tracker</span>
                                        <span class="wt-title-name">Coronavirus Pandemic</span>
                                    </div>
                                </div>
                                <div class="col-xl-7 col-lg-12 col-md-12">
                                    <div class="counter-outer worldwide-tracker-count">                            
                                        
                                        <div class="row justify-content-center">
                                                
                                            <div class="col-lg-4 col-md-12 ">
                                                <div class="wt-icon-box-wraper center">
                                                    <h4 class="site-text-white">Affected Country</h4>
                                                    <span class="counter">196</span>
                                                </div>
                                            </div>
                                            
                                            <div class="col-lg-4 col-md-12">
                                                <div class="wt-icon-box-wraper center">
                                                    <h4 class="site-text-white">Confirmed Cases</h4>
                                                    <span class="counter">920,047</span>
                                                </div>
                                            </div>
                                            
                                            <div class="col-lg-4 col-md-12">
                                                <div class="wt-icon-box-wraper center">
                                                    <h4 class="site-text-white">Worldwide Deaths</h4>
                                                    <span class="counter" >64,871</span>
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
            <!-- WHAT WE DO SECTION START -->                        
            
                             
            <!-- WHAT WE DO SECTION START -->
            <div class="section-full p-t80 p-b50 bg-white about-section-outer">
                
                <div class="container">                      
                    <div class="section-content">
                        <div class="row d-flex justify-content-center flex-wrap">
                            <div class="col-lg-6 col-md-12 m-b30">
                                <div class="about-section-media-section">
                                    <div class="wt-media">
                                        <img src="{{ asset('frontend/images/about/img-1.png')}}" alt="" class="floating-2">
                                    </div>
                                    <div class="recovered-patients">
                                        <div class="wt-icon-box-wraper left site-bg-primary radius-lg">
                                        
                                            <div class="icon-lg">
                                                <span class="icon-cell text-white"><i class="flaticon-coronavirus"></i></span>
                                            </div>  
                                                                                  
                                            <div class="icon-content">
                                                <h4 class="site-text-white">Recovered Patients</h4>
                                                <span class="counter2">248,850</span>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div> 
                                               
                            <div class="col-lg-6 col-md-12 m-b40">
                                <div class="about-section-media-info">
                                    <!-- TITLE START-->
                                    <div class="left wt-small-separator-outer">
                                        <div class="wt-small-separator site-text-primary">
                                            <div class="site-bg-small-title radius-md">Introduction of Coronavirus </div>
                                        </div>
                                        <h2>Know More About Corona Virus (COVID-19)</h2>
                                        <p>More than 78,191 people have contracted the virus in China. Health authorities have identified many other people with COVID-19 around the world, including in the United States. On January 31, 2020, the virus pass from one person to another in the U.S. Coronaviruses are a type of virus. There are many different kinds.</p>
                                        
                                    </div>
                                    <!-- TITLE END-->
                                    
                                    <div class="about-section-list p-t20">
                                        <h3 class="wt-title m-b20">The best way to prevent illness is to avoid being exposed to this virus.</h3>
                                        <ul class="site-list-style-one">
                                            <li>Wash your hands regularly for 20 seconds.</li>
                                            <li>Cover your nose and mouth with a disposable tissue.</li>
                                            <li>Avoid close contact (1 meter or 3 feet) with people.</li>
                                            <li>Stay home and self-isolate from others in the household.</li>
                                            <li>Protect yourself and help prevent spreading the virus.</li>                                       
                                        </ul>                                    
                                    </div>
                                    
                                                                        
                                </div>                        
                            </div> 
                        
    
                        </div>
                    </div>                                        
                </div>
                
                
            </div>   
            <!-- WHAT WE DO SECTION END -->
            
            <!-- VIRUS SPREAD SECTION START -->
            <div class="section-full p-t80 p-b50 bg-gray virus-spread-section-outer">
                
                <div class="container"> 
                
                    <!-- TITLE START-->
                    <div class="section-head center wt-small-separator-outer">
                        <div class="wt-small-separator site-text-primary">
                            <div class="site-bg-small-title  radius-md">Virus Spread</div>
                        </div>
                        <h2>How Virus Spread</h2>
                        <p>Help agencies to define their new business objectives and then create professional software.</p>
                        
                    </div>
                    <!-- TITLE END--> 
                                                        
                    <div class="section-content">
                        <div class="row d-flex justify-content-center flex-wrap">
                        
                            <div class="col-lg-4 col-md-6 m-b30">
                                <div class="box-style1 site-bg-primary radius-lg p-lr30 p-tb40 text-center">
                                
                                    <div class="box-style-1-media">
                                        <div class="box-style-1-pic radius-bx">
                                            <img src="{{ asset('frontend/images/virus-spread/pic1.png')}}" alt="">
                                        </div>
                                    </div>
                                    <div class="box-style-1-content text-white">
                                        <h4 class="box-style-1-title">Human Contact</h4>
                                        <p>Hands touch many surfaces and can pick up viruses. Once contaminated, hands can transfer the virus.</p>
                                    </div>
                                    
                                    <span class="box-style1-top-virus"><img src="{{ asset('frontend/images/virus-spread/virus-top.png')}}" class="rotate-center"  alt=""></span>
                                    <span class="box-style1-bottom-virus"><img  src="{{ asset('frontend/images/virus-spread/virus-bottom.png')}}" class="rotate-center" alt=""></span>
                                    
                                </div>
                            </div> 
                            
                            <div class="col-lg-4 col-md-6 m-b30">
                                <div class="box-style1 site-bg-primary radius-lg p-lr30 p-tb40 text-center">
                                
                                    <div class="box-style-1-media">
                                        <div class="box-style-1-pic radius-bx">
                                            <img src="{{ asset('frontend/images/virus-spread/pic2.png')}}" alt="">
                                        </div>
                                    </div>
                                    <div class="box-style-1-content text-white">
                                        <h4 class="box-style-1-title">Air Transmission</h4>
                                        <p>Hands touch many surfaces and can pick up viruses. Once contaminated, hands can transfer the virus.</p>
                                    </div>
                                    
                                    <span class="box-style1-top-virus"><img src="{{ asset('frontend/images/virus-spread/virus-top.png')}}" class="rotate-center"  alt=""></span>
                                    <span class="box-style1-bottom-virus"><img  src="{{ asset('frontend/images/virus-spread/virus-bottom.png')}}" class="rotate-center" alt=""></span>
                                    
                                </div>
                            </div>
                            
                            <div class="col-lg-4 col-md-6 m-b30">
                                <div class="box-style1 site-bg-primary radius-lg p-lr30 p-tb40 text-center">
                                
                                    <div class="box-style-1-media">
                                        <div class="box-style-1-pic radius-bx">
                                            <img src="{{ asset('frontend/images/virus-spread/pic3.png')}}" alt="">
                                        </div>
                                    </div>
                                    <div class="box-style-1-content text-white">
                                        <h4 class="box-style-1-title">Contaminated Objects</h4>
                                        <p>Hands touch many surfaces and can pick up viruses. Once contaminated, hands can transfer the virus.</p>
                                    </div>
                                    
                                    <span class="box-style1-top-virus"><img src="{{ asset('frontend/images/virus-spread/virus-top.png')}}" class="rotate-center"  alt=""></span>
                                    <span class="box-style1-bottom-virus"><img  src="{{ asset('frontend/images/virus-spread/virus-bottom.png')}}" class="rotate-center" alt=""></span>
                                    
                                </div>
                            </div>                                                        
                                               
                        </div>
                    </div>                                        
                </div>
                
                
            </div>   
            <!-- VIRUS SPREAD SECTION END --> 
            
            <!-- VIRUS PREVENTION SECTION START -->
            <div class="section-full p-t80 p-b50 bg-white virus-prevention-section-outer">
                
                <div class="container"> 
                
                    <!-- TITLE START-->
                    <div class="section-head center wt-small-separator-outer">
                        <div class="wt-small-separator site-text-primary">
                            <div class="site-bg-small-title  radius-md">Prevention Coronavirus</div>
                        </div>
                        <h2>How to Stay Safe Important Percautions</h2>
                        <p>If you are healthy, you only need to wear a mask if you are taking care of a person with suspected covid infection.</p>
                        
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
            <div class="section-full p-t80 p-b50 bg-white virus-symptoms-section-outer" style="background-image:url({{ asset('frontend/images/background/bg-2.jpg);')}}">
                
                <div class="container"> 
                    <div class="row d-flex justify-content-start flex-wrap">
                        <div class="col-lg-7 col-md-12">
                            <!-- TITLE START-->
                            <div class="section-head left wt-small-separator-outer text-white">
                                <div class="wt-small-separator site-text-primary">
                                    <div class="site-bg-small-title  radius-md">What are the symptoms of COVID-19?</div>
                                </div>
                                <h2>Corona Virus Symptoms</h2>
                                <p>Coronavirus disease (COVID-19) is an infectious disease caused by a newly discovered coronavirus. Most people infected with the COVID-19 virus will experience</p>
                                
                            </div>
                            <!-- TITLE END--> 
                        </div>
                    </div>
                                                        
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

            <!-- OUR TEAM START -->
            <div class="section-full p-t80 p-b50 bg-white team-bg-section-outer virus-bg-outer">
                <div class="container">
                    <div class="section-content">
                    
                    <!-- TITLE START-->
                    <div class="section-head center wt-small-separator-outer">
                        <div class="wt-small-separator site-text-primary">
                            <div class="site-bg-small-title  radius-md">Doctors</div>
                        </div>
                        <h2>Meet Our Best Doctors</h2>
                        <p>Coronavirus disease (COVID-19) is an infectious disease caused by a newly discovered coronavirus. Most people infected with the COVID-19 virus...</p>
                        
                    </div>
                    <!-- TITLE END--> 
                               
                    <div class="section-content">
                        <div class="row justify-content-center">
                            <div class="col-lg-4 col-md-6 col-sm-12 m-b30">
                                <div class="wt-team-1">
                                    
                                    <div class="wt-media site-bg-secondry radius-lg">
                                        <img src="{{ asset('frontend/images/team/pic1.png')}}" alt="">
                                        <div class="team-social-center radius-lg">
                                            <ul class="team-social-bar">
                                                <li><a href="javascript:void(0);"><i class="fa fa-facebook clr-facebook"></i></a></li>
                                                <li><a href="javascript:void(0);"><i class="fa fa-twitter clr-twitter"></i></a></li>
                                                <li><a href="javascript:void(0);"><i class="fa fa-instagram clr-instagram"></i></a></li>
                                                <li><a href="javascript:void(0);"><i class="fa fa-linkedin clr-linkedin"></i></a></li>
                                            </ul>
                                            
                                        </div>                                              
                                    </div>                                   

                                    <div class="wt-info p-a30 site-bg-primary  radius-lg">
                                        <div class="team-detail  text-center text-white">
                                            
                                            <h4 class="m-t0 team-name"><a href="team-single.html"  class="site-text-white">Malcolm Franzcrip</a></h4>
                                            <span class="team-position">Throat Specialist</span>
                                        </div>
                                    </div>
                            
                                </div>
                            </div>
                            
                            <div class="col-lg-4 col-md-6 col-sm-12 m-b30">
                                <div class="wt-team-1">
                                    
                                    <div class="wt-media site-bg-secondry radius-lg">
                                        <img src="{{ asset('frontend/images/team/pic2.png')}}" alt="">
                                        <div class="team-social-center radius-lg">
                                            <ul class="team-social-bar">
                                                <li><a href="javascript:void(0);"><i class="fa fa-facebook clr-facebook"></i></a></li>
                                                <li><a href="javascript:void(0);"><i class="fa fa-twitter clr-twitter"></i></a></li>
                                                <li><a href="javascript:void(0);"><i class="fa fa-instagram clr-instagram"></i></a></li>
                                                <li><a href="javascript:void(0);"><i class="fa fa-linkedin clr-linkedin"></i></a></li>
                                            </ul>
                                            
                                        </div>
                                    </div>                                   

                                    <div class="wt-info p-a30 site-bg-primary  radius-lg">
                                        <div class="team-detail  text-center  text-white">
                                            
                                            <h4 class="m-t0 team-name"><a href="team-single.html"  class="site-text-white">Froster Collings</a></h4>
                                            <span class="team-position">Senior Virus Expert</span>
                                        </div>
                                    </div>
                            
                                </div>
                            </div>
                            
                            <div class="col-lg-4 col-md-6 col-sm-12 m-b30">
                                <div class="wt-team-1">
                                    
                                    <div class="wt-media site-bg-secondry radius-lg">
                                        <img src="{{ asset('frontend/images/team/pic3.png')}}" alt="">
                                        <div class="team-social-center radius-lg">
                                            <ul class="team-social-bar">
                                                <li><a href="javascript:void(0);"><i class="fa fa-facebook clr-facebook"></i></a></li>
                                                <li><a href="javascript:void(0);"><i class="fa fa-twitter clr-twitter"></i></a></li>
                                                <li><a href="javascript:void(0);"><i class="fa fa-instagram clr-instagram"></i></a></li>
                                                <li><a href="javascript:void(0);"><i class="fa fa-linkedin clr-linkedin"></i></a></li>
                                            </ul>
                                            
                                        </div>
                                    </div>                                   

                                    <div class="wt-info p-a30 site-bg-primary radius-lg">
                                        <div class="team-detail  text-center  text-white">
                                            
                                            <h4 class="m-t0 team-name"><a href="team-single.html" class="site-text-white">Melena Marshall</a></h4>
                                            <span class="team-position">Cardiologist</span>
                                        </div>
                                    </div>
                            
                                </div>
                            </div>                                                        
                            
                        </div>
                        
                        <span class="virus-bg-virus1 floating"><img src="{{ asset('frontend/images/background/v-1.png')}}" alt=""></span>
                        <span class="virus-bg-virus2 floating-2"><img src="{{ asset('frontend/images/background/v-2.png')}}" alt=""></span>
                        <span class="virus-bg-virus3 floating-3"><img src="{{ asset('frontend/images/background/v-3.png')}}" alt=""></span>                        
                    </div>      
                        
                    </div>
                </div>
            </div>   
            <!-- OUR TEAM SECTION END --> 
            
            <!-- OUR BLOG START -->
            <div class="section-full  p-t80 p-b50  bg-gray">
                <div class="container">
                
                    <!-- TITLE START-->
                    <div class="section-head center wt-small-separator-outer">
                        <div class="wt-small-separator site-text-primary">
                            <div class="site-bg-small-title  radius-md">Latest Blog</div>
                        </div>
                        <h2>Updated Coronavirus News</h2>
                        <p>Coronavirus disease (COVID-19) is an infectious disease caused by a newly discovered coronavirus. Most people infected with the COVID-19 virus...</p>
                        
                    </div>
                    <!-- TITLE END-->                 
                
                    <!-- BLOG SECTION START -->
                    <div class="section-content">
                        <div class="row d-flex justify-content-center">
                            <div class="col-lg-4 col-md-6 col-sm-12 m-b30">
                                <!--Block one-->
                                <div class="blog-post date-style-2">
                                    <div class="wt-post-media wt-img-effect zoom-slow radius-lg">
                                        <a href="javascript:;"><img src="{{ asset('frontend/images/blog/default_3/thum1.jpg')}}" alt=""></a>
                                    </div>
                                    <div class="wt-post-info bg-white p-a25 radius-lg shadow">
                                        <div class="wt-post-meta ">
                                            <ul>
                                                <li class="post-author">By Jhondoue</li>
                                                <li class="post-comment">April 8, 2020</li>
                                            </ul>
                                        </div>                                 
                                        <div class="wt-post-title ">
                                            <h4 class="post-title">What Can I do to protect my self & prevent the spread </h4>
                                        </div>
                                        <div class="wt-post-readmore ">
                                            <a href="blog-post-right-sidebar.html" class="site-button-secondry">Read More <span></span></a>
                                        </div>                                        
                                   </div>                                
                                </div>
                            </div>
                            
                            <div class="col-lg-4 col-md-6 col-sm-12 m-b30">
                                <!--Block two-->
                                <div class="blog-post date-style-2">
                                    <div class="wt-post-media wt-img-effect zoom-slow radius-lg">
                                        <a href="javascript:;"><img src="{{ asset('frontend/images/blog/default_3/thum2.jpg')}}" alt=""></a>
                                    </div>
                                    <div class="wt-post-info bg-white p-a25 radius-lg shadow">
                                        <div class="wt-post-meta ">
                                            <ul>
                                                <li class="post-author">By Jhondoue</li>
                                                <li class="post-comment">April 8, 2020</li>                                    
                                            </ul>
                                        </div>                                  
                                        <div class="wt-post-title ">
                                            <h4 class="post-title">This factsheet provides an coronavirus situation</h4>
                                        </div>
                                        <div class="wt-post-readmore ">
                                             <a href="blog-post-right-sidebar.html" class="site-button-secondry">Read More <span></span></a>
                                        </div>                                        
                                    </div>                                
                                </div>
                            </div>
                            
                            <div class="col-lg-4 col-md-6 col-sm-12 m-b30">
                                <!--Block three-->
                                <div class="blog-post date-style-2">
                                    <div class="wt-post-media wt-img-effect zoom-slow radius-lg">
                                        <a href="javascript:;"><img src="{{ asset('frontend/images/blog/default_3/thum3.jpg')}}" alt=""></a>
                                    </div>
                                    <div class="wt-post-info bg-white p-a25 radius-lg shadow">
                                        <div class="wt-post-meta ">
                                            <ul>
                                                <li class="post-author">By Jhondoue</li>
                                                <li class="post-comment">April 8, 2020</li>
                                            </ul>
                                        </div>                                  
                                        <div class="wt-post-title ">
                                            <h4 class="post-title">What Can I do to protect my self & prevent the spread </h4>
                                        </div>
                                        <div class="wt-post-readmore ">
                                             <a href="blog-post-right-sidebar.html" class="site-button-secondry">Read More <span></span></a>
                                        </div>
                                    </div>                                
                                </div> 
                            </div>                                                        
                                                        
                        </div>
                    </div>
                </div>
                
             </div>   
            <!-- OUR BLOG END -->
            
            <!-- HAND WASH START -->
            <div class="section-full  p-t80 p-b50 bg-cover" style="background-image:url({{ asset('frontend/images/background/bg3.jpg)')}}">
                
                <div class="container">
                
                    <!-- TITLE START-->
                    <div class="section-head center wt-small-separator-outer text-white">
                        <div class="wt-small-separator site-text-primary">
                            <div class="site-bg-small-title  radius-md">Hand Wash</div>
                        </div>
                        <h2>Follow Steps to Wash Hands</h2>
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
                                    <li><i class="flaticon-location"></i>67/f,Green Road,Dhaka-1205, Bangladesh</li>
                                    <li><i class="flaticon-email"></i>remon.welcome@gmail.com</li>
                                    <li> <i class="flaticon-mobile-phone"></i>+8801902-925951 </li>
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



<!-- REVOLUTION JS FILES -->

<script  src="{{ asset('frontend/plugins/revolution/revolution/js/jquery.themepunch.tools.min.js')}}"></script>
<script  src="{{ asset('frontend/plugins/revolution/revolution/js/jquery.themepunch.revolution.min.js')}}"></script>

<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->    
<script  src="{{ asset('frontend/plugins/revolution/revolution/js/extensions/revolution-plugin.js')}}"></script>

<!-- REVOLUTION SLIDER SCRIPT FILES -->
<script  src="{{ asset('frontend/js/rev-script-1.js')}}"></script>




</body>


<!-- Mirrored from thewebmax.com/vishanu/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 17 Apr 2020 13:59:03 GMT -->
</html>
