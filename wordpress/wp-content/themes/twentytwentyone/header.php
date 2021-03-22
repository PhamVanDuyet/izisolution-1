<!DOCTYPE html>
<html>

<head>

    <title></title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <script src="https://kit.fontawesome.com/ac5307c113.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lexend+Deca&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/my_custom_css.css" type="text/css" media="screen" />
    <?php wp_head(); ?>

  
<script>
onload = function()
    {
        showSlides();

    };
    
    var slideIndex = 0;
    showSlides();

    function showSlides() {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("dot");
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > slides.length) {
            slideIndex = 1
        }
        console.log(i + "b");

        for (i = 0; i < dots.length; i++) {
            console.log(i + "a");
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active";
        setTimeout(showSlides, 2000);
    }
    //Menu mobile
    function myFunction() {
        var x = document.getElementById("myLinks");
        if (x.style.display === "block") {
            x.style.display = "none";
        } else {
            x.style.display = "block";
        }
    }
</script>
<style>
    /*slideshow 2*/
    body,
a,
p,
h1,
h2,
h3,
h4,
h5,
h6 {
  font-family: 'montserrat';
}
p {
  font-family: 'montserrat';
}
@font-face {
    src:url('Montserrat-Light.ttf');
    font-family: 'montserrat';

}.examplefontl {
  font-family: 'Montserrat-Light';  
  color: black;
}
#slideshow {
    overflow: hidden;
    margin: 0 auto;
}

.slide-wrapper {
    width: 400%;
    display: flex;
    -webkit-animation: slide 14s ease infinite;
}

.slide {
    float: left;
    width: 25%;
}

@-webkit-keyframes slide {
    10% {
        margin-left: 0px;
    }
    30% {
        margin-left: -100%;
    }
    50% {
        margin-left: -100%;
    }
    70% {
        margin-left: -200%;
    }
    90% {
        margin-left: -300%;
    }
}
</style>
</head>

<body style="overflow-x: hidden;">
    <div style="position: fixed; z-index: 9999; bottom: 20px; right: 20px; display: block; width: 60px;">
        <a href="http://facebook.com">
<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 291.319 291.319" style="enable-background:new 0 0 291.319 291.319;" xml:space="preserve">
<g>
	<path style="fill:#33CC66;" d="M145.659,0c80.45,0,145.66,65.219,145.66,145.66c0,80.45-65.21,145.659-145.66,145.659
		S0,226.109,0,145.66C0,65.219,65.21,0,145.659,0z"/>
	<path style="fill:#FFFFFF;" d="M163.394,100.277h18.772v-27.73h-22.067v0.1c-26.738,0.947-32.218,15.977-32.701,31.763h-0.055
		v13.847h-18.207v27.156h18.207v72.793h27.439v-72.793h22.477l4.342-27.156h-26.81v-8.366
		C154.791,104.556,158.341,100.277,163.394,100.277z"/>
</g>
</svg>
</a>
        <a href="http://facebook.com">
            <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 512.05 512.05" style="enable-background:new 0 0 512.05 512.05;" xml:space="preserve">
<path style="fill:#33CC66;" d="M256.025,0.05C117.67-2.678,3.184,107.038,0.025,245.383c0.361,70.423,31.544,137.157,85.333,182.613
	v73.387c0,5.891,4.776,10.667,10.667,10.667c1.999,0,3.958-0.562,5.653-1.621l59.456-37.141
	c30.292,11.586,62.459,17.494,94.891,17.429c138.355,2.728,252.841-106.988,256-245.333C508.866,107.038,394.38-2.678,256.025,0.05z
	"/>
<path style="fill:#FAFAFA;" d="M424.558,174.983c-3.174-4.254-8.993-5.527-13.653-2.987l-110.933,60.48l-69.013-59.179
	c-4.232-3.628-10.544-3.387-14.485,0.555l-128,128c-4.153,4.178-4.133,10.932,0.046,15.085c3.341,3.321,8.464,4.057,12.605,1.811
	l110.933-60.48l69.077,59.2c4.232,3.628,10.544,3.387,14.485-0.555l128-128C427.35,185.148,427.75,179.215,424.558,174.983z"/>
</svg>
        </a>
    </div>
    <div id="header" class="class-0000" style="margin-right: auto; margin-left: auto;">
        <section id="section-1">
            <div class="container">
                <div class="w-78 mobile-w100">
                    <div class="pd-10">
                        <div>
                            <ul class="mb-space-between">
                                <li>
                                    <a>
                                        <span class="elementor-icon-list-icon">
                                            <i aria-hidden="true" class="fas fa-envelope"></i>
                                        </span>
                                        <span class="color-525F81 mb-fz-12">info@jinjoomarketing.com</span>
                                    </a>
                                </li>
                                <li class="mg-l-30 mb-mg-l-10">
                                    <a>
                                        <span class="elementor-icon-list-icon">
                                            <i aria-hidden="true" class="fas fa-phone"></i>
                                        </span>
                                        <span class="color-525F81 mb-fz-12">(+84) 867707008</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="w-15 mb-display-none">
                    <div class="pd-10">
                        <div>
                            <ul>
                                <li>
                                    <a href="https://www.facebook.com">
                                        <span class="elementor-icon-list-icon">
                                            <i aria-hidden="true" class="fab fa-facebook-square"></i>
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://m.me/">
                                        <span class="elementor-icon-list-icon">
                                            <i aria-hidden="true" class="fab fa-facebook-messenger"></i>
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://zalo.me/">
                                        <span class="elementor-icon-list-icon">
                                            <i aria-hidden="true" class="fab fa-whatsapp-square"></i>
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="section-2" style="width: 100%">
            <div class="container flex" style="justify-content: space-between;">
                <div class="pd-10 mb-auto-w" style="width: calc(40% - 20px);">
                    <div class="elementor-image">
                        <a href="#" style="display: flex;">
                            <img class="alignnone wp-image-2736" src="img/logo100.png" height="60" alt="" data-wp-editing="1">
                            <span style="font-size: 31px; color: #000000; font-weight: 600; margin-left: 15px;">JinJoo Marketing</span>
                        </a>
                    </div>
                </div>
                <div class="flex w-60 mb-display-none" style="justify-content: flex-end; ">
                    <div style="display: flex;">
                        <div class="menu">
                            <nav>
                                <ul class="float-r pd-10">
                                    <li><a href="http://localhost/izisolution-1/wordpress">Trang Chủ</a></li>
                                    <li>
                                        <a href="http://localhost/izisolution-1/wordpress/dich-vu-thiet-ke-website/">Dịch Vụ</a>
                                        <ul class="sub-menu ">
                                            <li><a href="http://localhost/izisolution-1/wordpress/dich-vu-thiet-ke-website/">Dịch vụ thiết kế website</a></li>
                                            <li><a href="http://localhost/izisolution-1/wordpress/dich-vu-toi-uu-website/">Dịch vụ tối ưu website</a></li>
                                            <li><a href="http://localhost/izisolution-1/wordpress/dich-vu-marketing/">Dịch vụ Marketing</a></li>
                                            <li><a href="http://localhost/izisolution-1/wordpress/dich-vu-cham-soc-website/">Dịch vụ chăm sóc website</a></li>
                                            <li><a href="http://localhost/izisolution-1/wordpress/dich-vu-google-maps/">Dịch vụ Google Maps</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="http://localhost/izisolution-1/wordpress/ve-chung-toi/">Về Chúng Tôi</a></li>
                                    <li><a href="http://localhost/izisolution-1/wordpress/kien-thuc/">Kiến Thức</a></li>
                                    <li><a href="http://localhost/izisolution-1/wordpress/lien-he/">Liên Hệ</a></li>
                                </ul>
                            </nav>
                        </div>
                        <div class="elementor-widget-container pd-10">
                            <button>Tư Vấn Ngay</button>
                        </div>
                    </div>
                </div>
                <div class="mobile-container">

                <!-- Top Navigation Menu -->
                <div class="topnav">
                <div class="menu-mb-button mb-display-block" style="display: none;">
                    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                        <i class="fa fa-bars"></i>
                    </a>
                </div>
                <div id="myLinks">
                    <nav>
                        <ul class="float-r">
                            <li><a href="http://localhost/izisolution-1/wordpress">Trang Chủ</a></li>
                            <li>
                                <a href="http://localhost/izisolution-1/wordpress/dich-vu-thiet-ke-website/">Dịch Vụ</a>
                                <ul class="sub-menu ">
                                    <li><a href="http://localhost/izisolution-1/wordpress/dich-vu-thiet-ke-website/">Dịch vụ thiết kế website</a></li>
                                    <li><a href="http://localhost/izisolution-1/wordpress/dich-vu-toi-uu-website/">Dịch vụ tối ưu website</a></li>
                                    <li><a href="http://localhost/izisolution-1/wordpress/dich-vu-marketing/">Dịch vụ Marketing</a></li>
                                    <li><a href="http://localhost/izisolution-1/wordpress/dich-vu-cham-soc-website/">Dịch vụ chăm sóc website</a></li>
                                    <li><a href="http://localhost/izisolution-1/wordpress/dich-vu-google-maps/">Dịch vụ Google Maps</a></li>
                                </ul>
                            </li>
                            <li><a href="http://localhost/izisolution-1/wordpress/ve-chung-toi/">Về Chúng Tôi</a></li>
                            <li><a href="http://localhost/izisolution-1/wordpress/kien-thuc/">Kiến Thức</a></li>
                            <li><a href="http://localhost/izisolution-1/wordpress/lien-he/">Liên Hệ</a></li>
                        </ul>
                    </nav>
                </div>
                </div>
            </div>
            </div>
            
        </section>
        
        <section>

        </section>
        <section id="section-22"></section>