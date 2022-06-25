<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <title>Fifty Shades of Code</title>
    <link rel="stylesheet" href="{{ asset('Frontend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('Frontend/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('Frontend/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('Frontend/css/templatemo-style.css') }}">

    <link href="{{ asset('https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700') }}" rel="stylesheet">

</head>
<body data-spy="scroll" data-target=".navbar-collapse" data-offset="50">


<!-- PRE LOADER -->

<div class="preloader">
    <div class="spinner">
        <span class="spinner-rotate"></span>
    </div>
</div>


<!-- Navigation Section -->

<div class="navbar navbar-fixed-top custom-navbar" role="navigation">
    <div class="container">

        <!-- navbar header -->
        <div class="navbar-header">
            <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon icon-bar"></span>
                <span class="icon icon-bar"></span>
                <span class="icon icon-bar"></span>
            </button>
            <a href="#" class="navbar-brand">
                <img src="{{ asset('assets/FiftyShadesofCode.png') }}" alt="Fifty Shades of Code text" />
            </a>
        </div>

        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#home" class="smoothScroll">Home</a></li>
                <li><a href="#about" class="smoothScroll">About Me</a></li>
                <li><a href="#experience" class="smoothScroll">Experiences</a></li>
                <li><a href="#skills" class="smoothScroll">Skills</a></li>
                <li><a href="#work" class="smoothScroll">Work</a></li>
                <li><a href="#contact" class="smoothScroll">Contact</a></li>
            </ul>
        </div>

    </div>
</div>


<!-- Home Section -->

<section id="home" class="parallax-section">
    <div class="container">
        <div class="row">

            <div class="col-md-6 col-sm-6">
                <div class="home-img"></div>
            </div>

            <div class="col-md-6 col-sm-6">
                <div class="home-thumb">
                    <div class="section-title">
                        <h4 class="wow fadeInUp" data-wow-delay="0.3s">welcome to Fifty Shades of Code</h4>
                        <h2 class="wow fadeInUp" data-wow-delay="0.6s">Hello, I am <strong>Philip R. McDavid</strong><br />currently based in Upstate New York.</h2>
                        <p class="wow fadeInUp" data-wow-delay="0.9s">I am a recent bootcamp graduate, making it my 8th degree/certification! I hold degrees/certifications in Floral Design, Photography, Videography, Web Design, Business, Fitness and Nutrition,<br />Graphic Design, and now Full Stack Development, or Software Engineering.</p>

                        <a href="#skills" class="wow fadeInUp smoothScroll section-btn btn btn-success" data-wow-delay="1.4s">My Skills</a>

                        <a href="#work" class="wow fadeInUp smoothScroll section-btn btn btn-success" data-wow-delay="1.4s">My Work</a>

                    </div>
                </div>
            </div>


        </div>
    </div>
</section>


<!-- About Section -->

<section id="about" class="parallax-section">
    <div class="container">
        <div class="row">

            <div class="col-md-6 col-sm-12">
                <div class="about-thumb">
                    <div class="wow fadeInUp section-title" data-wow-delay="0.4s">
                        <h1>About Me</h1>
                        <p class="color-red">In a nutshell...</p>
                    </div>
                    <div class="wow fadeInUp" data-wow-delay="0.8s">
                        <p>I have always had a creative side and explored it through different facets as I grew as a person. This has developed into a love for digital design in all forms, so much so, that I pursued degrees and careers doing so.</p>
                        <p>I love doing things that are unique and creative. I also love to learn. So if I don't know how to do something, it doesn't mean I won't take the job. It means the job will be my stepping stone to learn something new!</p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="background-image about-img"></div>
            </div>

            <div class="bg-red col-md-3 col-sm-6">
                <div class="skill-thumb">
                    <div class="wow fadeInUp section-title color-white" data-wow-delay="1.2s">
                        <p>Full Stack Development</p>
                        <p>Web Design</p>
                        <p>Floral design</p>
                        <p>Photography</p>
                        <p>Videography</p>
                        <p>Graphic Design</p>
                        <p>Business</p>
                        <p>Social Media and Digital Marketing</p>
                        <p>Fitness and Nutrition</p>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>


<!-- Service Section -->

<section id="service" class="parallax-section">
    <div class="container">
        <div class="row">

            <div class="bg-red col-md-3 col-sm-6">
                <div class="wow fadeInUp color-white service-thumb" data-wow-delay="0.8s">
                    <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="75" height="75" preserveAspectRatio="xMidYMid meet" viewBox="0 0 64 64"><path fill="#bfbebe" d="M39.568 47.4H24.251c.357 0 .645 3.511.645 7.836c0 4.328-.287 7.839-.645 7.839h15.317c-.356 0-.645-3.511-.645-7.839c.002-4.325.289-7.836.645-7.836"/><path fill="#aeaeae" d="M29.615 47.4h-5.363c.357 0 .645 3.511.645 7.836c0 4.328-.287 7.839-.645 7.839h5.363c.357 0 .645-3.511.645-7.839c0-4.325-.288-7.836-.645-7.836"/><path fill="#d1d2d2" d="M63.784 47.31c0 4.047-3.05 7.326-6.806 7.326H6.848c-3.76 0-6.809-3.279-6.809-7.326V10.19c0-4.04 3.049-7.321 6.809-7.321h50.13c3.756 0 6.806 3.278 6.806 7.321v37.12"/><path fill="#c6c5c5" d="M12.93 47.31V10.19c0-4.04 3.049-7.321 6.808-7.321H6.844c-3.76 0-6.809 3.278-6.809 7.321v37.12c0 4.047 3.049 7.326 6.809 7.326h12.894c-3.759 0-6.808-3.28-6.808-7.327"/><g fill="#243438"><path d="M63.784 36.941c0 4.04-3.05 7.32-6.806 7.32H6.848c-3.76 0-6.809-3.277-6.809-7.32V10.163c0-4.047 3.049-7.325 6.809-7.325h50.13c3.756 0 6.806 3.278 6.806 7.325v26.778"/><path d="M.036 35.05h63.749v11.367H.036z"/></g><path fill="#58c5e8" d="M58.75 6.244H5.069c-.443 0-.812.245-.812.54v34.891c0 .296.369.54.812.54H58.75c.241 0 .424-.051.557-.141l.02-.02s.016-.012.02-.023a.414.414 0 0 0 .223-.356V6.791c-.004-.295-.377-.54-.82-.54"/><path fill="#28a6de" d="M32.698 29.559c8.976 5.378 17.745 9.04 26.868 11.255V6.784c0-.295-.373-.54-.816-.54H9.49c5.06 9.535 13.768 17.66 23.21 23.315m.07 5.711C21.94 29.371 11.097 21.2 4.257 11.11v30.564c0 .296.369.54.812.54h43.813c-5.352-1.725-10.689-3.986-16.11-6.94"/><path fill="#d1d2d2" d="M43.721 62.727c0 .702-.338 1.273-.753 1.273h-22.11c-.419 0-.757-.571-.757-1.273c0-.703.338-1.273.757-1.273h22.11c.415-.003.753.569.753 1.273"/><path fill="#c6c5c5" d="M27.937 62.727c0-.703.338-1.273.753-1.273h-8.125c-.416 0-.753.57-.753 1.273c0 .702.338 1.273.753 1.273h8.125c-.415 0-.753-.571-.753-1.273"/><path fill="#243438" d="M34.33 48.615c-.098-.094-.241-.121-.436-.065l-1.123.287c-.35.095-.527.326-.527.698l-.004 1.201c0 .174.039.303.117.377a.335.335 0 0 0 .249.093c.06 0 .116-.013.188-.027l1.122-.286c.35-.094.528-.326.532-.703v-1.197c-.003-.177-.042-.304-.118-.378m-.596 1.367c0 .133-.062.215-.189.25l-.398.104a.436.436 0 0 1-.066.008a.138.138 0 0 1-.09-.031c-.026-.025-.043-.072-.038-.14v-.427c0-.133.062-.215.187-.249l.403-.104c.069-.016.121-.008.151.023c.03.027.043.072.043.136v.431h-.003zm-2.154-.452c0-.372-.175-.604-.528-.698l-1.122-.287c-.194-.056-.338-.026-.431.065c-.082.074-.121.201-.121.377l.004 1.195c.004.377.179.61.528.703l1.126.287c.066.02.128.027.182.027a.33.33 0 0 0 .249-.094c.078-.073.117-.201.117-.377l-.004-1.198m-.746.778c-.02.021-.05.031-.089.031c0 0-.043-.004-.066-.008l-.4-.104c-.124-.035-.19-.117-.19-.25v-.431c0-.062.016-.108.042-.136c.031-.031.082-.039.155-.023l.4.104c.124.034.19.116.19.249v.431c0 .062 0 .109-.042.137m1.535 2.301c.02 0 .039-.004.066-.013l.4-.103c.124-.029.19-.115.19-.252v-.426a.236.236 0 0 0-.039-.138c-.035-.034-.09-.038-.155-.021l-.404.103c-.124.031-.187.116-.187.252l-.004.429c0 .062.016.104.043.131c.02.026.051.038.09.038m-.913 0a.209.209 0 0 1-.07-.013l-.4-.103c-.124-.029-.187-.115-.187-.252l-.004-.426c0-.063.016-.105.043-.138c.031-.034.085-.038.151-.021l.408.103c.121.031.187.116.187.252v.429c0 .062-.016.104-.039.131a.114.114 0 0 1-.089.038"/></svg>
                    <h3>Interface Design</h3>
                    <p class="color-white">Maximizing usability and the User Experience</p>
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="wow fadeInUp color-white service-thumb" data-wow-delay="1.2s">
                    <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="75" height="75" preserveAspectRatio="xMidYMid meet" viewBox="0 0 512 512"><path fill="#B9C5C6" d="M305.125 237.641L81.562 368.318l67.566-197.296c6.586-19.231 26.932-34.817 45.45-34.817h290.569c18.518 0 28.189 15.586 21.604 34.817l-67.566 197.296l-134.06-130.677z"/><path fill="#96A9B2" d="M439.388 369.591c-.088.102-.202.173-.295.272c-9.446 13.303-25.008 22.793-39.54 22.793H104.438c-1.107 0-2.043-.27-3.087-.377h-.429c-.107-.014-.176-.074-.282-.088c-6.812-.869-12.169-3.914-15.634-8.616c-.065-.088-.178-.129-.243-.217l.074-.047c-.809-1.133-1.681-2.223-2.269-3.524c-1.377-3.048-2.124-6.53-2.163-10.313c-.011-.03-.03-.052-.034-.085l.041-.027c-.023-3.769 198.015-126.246 198.015-126.246c24.57-15.234 34.783-14.997 49.217 0c0 0 114.346 122.576 111.676 126.397l.068.078z"/><path fill="#DCE2E2" d="M167.814 144.631c5.942-4.166 15.793-7.974 23.306-8.773l297.738-.011c6.984.81 13.209 0 17.315 8.783c4.106 8.783 2.92 13.753 2.92 13.753L314.09 282.712c-24.191 14.999-34.247 14.766-48.458 0L155.609 158.187s6.263-9.39 12.205-13.556z"/><path fill="#FFB636" d="M114.107 203.102H18.109c-8.008 0-14.5-6.492-14.5-14.5s6.492-14.5 14.5-14.5h95.998c8.008 0 14.5 6.492 14.5 14.5s-6.492 14.5-14.5 14.5zm-13.041 48.469c0-8.008-6.492-14.5-14.5-14.5H18.109c-8.008 0-14.5 6.492-14.5 14.5s6.492 14.5 14.5 14.5h68.457c8.009 0 14.5-6.492 14.5-14.5zm-22.205 62.97c0-8.008-6.492-14.5-14.5-14.5H18.109c-8.008 0-14.5 6.492-14.5 14.5s6.492 14.5 14.5 14.5H64.36c8.009 0 14.501-6.492 14.501-14.5z"/></svg>
                    <h3>Media Strategy</h3>
                    <p class="color-white">How Messages will be Delivered to the Consumer or Niche Market.</p>
                </div>
            </div>

            <div class="bg-dark col-md-3 col-sm-6">
                <div class="wow fadeInUp color-white service-thumb" data-wow-delay="1.6s">
                    <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="75" height="75" preserveAspectRatio="xMidYMid meet" viewBox="0 0 48 48"><g fill="#616161"><path d="m29.175 31.99l2.828-2.827l12.019 12.019l-2.828 2.827z"/><circle cx="20" cy="20" r="16"/></g><path fill="#37474F" d="m32.45 35.34l2.827-2.828l8.696 8.696l-2.828 2.828z"/><circle cx="20" cy="20" r="13" fill="#64B5F6"/><path fill="#BBDEFB" d="M26.9 14.2c-1.7-2-4.2-3.2-6.9-3.2s-5.2 1.2-6.9 3.2c-.4.4-.3 1.1.1 1.4c.4.4 1.1.3 1.4-.1C16 13.9 17.9 13 20 13s4 .9 5.4 2.5c.2.2.5.4.8.4c.2 0 .5-.1.6-.2c.4-.4.4-1.1.1-1.5z"/></svg>
                    <h3>SEO</h3>
                    <p class="color-white">Targeting Unpaid Traffic Rather Than Direct Traffic or Paid Traffic.</p>
                </div>
            </div>

            <div class="bg-white col-md-3 col-sm-6">
                <div class="wow fadeInUp service-thumb" data-wow-delay="1.8s">
                    <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="75" height="75" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"><path stroke-dasharray="64" stroke-dashoffset="64" stroke-width="2" d="M13 3L19 9V21H5V3H13"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.6s" values="64;0"/></path><path stroke-dasharray="14" stroke-dashoffset="14" d="M12.5 3V8.5H19"><animate fill="freeze" attributeName="stroke-dashoffset" begin="0.7s" dur="0.2s" values="14;0"/></path><g stroke-dasharray="8" stroke-dashoffset="8" stroke-width="2"><path d="M10 13L8 15L10 17"><animate fill="freeze" attributeName="stroke-dashoffset" begin="1s" dur="0.2s" values="8;0"/></path><path d="M14 13L16 15L14 17"><animate fill="freeze" attributeName="stroke-dashoffset" begin="1.2s" dur="0.2s" values="8;0"/></path></g></g></svg>
                    <h3>Coding</h3>
                    <p>Write Code/Programs that Determine How We Communicate with Computers</p>
                </div>
            </div>

        </div>
    </div>
</section>


<!-- Experience Section -->

<section id="experience" class="parallax-section">
    <div class="container">
        <div class="row">

            <div class="col-md-6 col-sm-6">
                <div class="background-image experience-img"></div>
            </div>

            <div class="col-md-6 col-sm-6">
                <div class="color-white experience-thumb">
                    <div class="wow fadeInUp section-title" data-wow-delay="0.8s">
                        <h1>My Experiences</h1>
                        <p class="color-white">Previous companies and my tasks</p>
                    </div>

                    <div class="wow fadeInUp color-white media" data-wow-delay="1.2s">
                        <div class="media-object media-left">
                            <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="50" height="50" preserveAspectRatio="xMidYMid meet" viewBox="0 0 128 128"><path fill="#B7D5E5" d="M106 24.79H22.15c-1.92 0-3.48 1.56-3.48 3.48v57.59c0 1.92 1.56 3.48 3.48 3.48H106c1.92 0 3.48-1.56 3.48-3.48V28.27c0-1.92-1.55-3.48-3.48-3.48z"/><radialGradient id="svgIDa" cx="48.408" cy="13.024" r="75.465" gradientTransform="matrix(1 0 0 1.0843 0 -10.19)" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#2F7889"/><stop offset="1" stop-color="#424242"/></radialGradient><path fill="url(#svgIDa)" d="M104.75 83.2H23.4l.96-52.27h79.43z"/><path fill="#2F7889" d="M121.09 123.82H7.59c-.43 0-.83-.03-1.2-.09c-2.88-.44-4.21-4.18-2.5-6.74l.39-.59h119.59l.4.6c1.86 2.78.12 6.76-3.04 6.81c-.04.01-.09.01-.14.01z"/><path fill="#EEE" d="M106.84 90.41H20.6c-1.27 0-2.54.77-3.25 1.99l-14 25.48c-.59.88-.01 2.12.99 2.12H123.8c1 0 1.58-1.24.99-2.12l-14.71-25.63c-.7-1.08-1.97-1.84-3.24-1.84z"/><path fill="#B7D5E5" d="M86.36 115.52H41.8l2.85-7.98h39.07z"/><path fill="#69A1BA" d="m72.69 94.84l-.27-2.2h-3.44l.13 2.2zm-5.55 0l-.14-2.2h-3.45v2.2zm26.47 0l-.81-2.2h-3.26l.68 2.2zm-5.25 0l-.68-2.2h-3.32l.54 2.2zm-5.18 0l-.54-2.2h-3.37l.41 2.2zm18.93 0l-.95-2.2h-6.71l.82 2.2zm-24.5 0l-.41-2.2h-3.41l.28 2.2zm-43.85 0l.68-2.2h-3.26l-.81 2.2zm16.75 0l.27-2.2h-3.41l-.4 2.2zm-11.16 0l.54-2.2h-3.32l-.67 2.2zm-11.18 0l.81-2.2H25.8l-.95 2.2zm16.76 0l.41-2.2h-3.37l-.54 2.2zm11.15 0l.14-2.2h-3.44l-.27 2.2zm5.57 0v-2.2H58.2l-.14 2.2zm22.13 8.89H44.36l-.75 2.2h41.08zm18.37 2.2l-1.21-2.2h6.54l.95 2.2zm-15.4 0l-.83-2.2h6.29l.96 2.2zm8.64 0l-.96-2.2h4.31l1.1 2.2zm-69.72 0l1.21-2.2h-6.54l-.95 2.2zm15.4 0l.83-2.2h-6.29l-.96 2.2zm-8.65 0l.97-2.2h-4.31l-1.11 2.2zm-2.71-7.42l.82-2.19h-6.67l-.95 2.19zm68.24 0l-.81-2.19h6.66l.95 2.19zm-1.7 0l-.96-2.19h-3.85l.82 2.19zm-10.02 0l-.65-2.19h3.85l.78 2.19zm-6.04 0l-.47-2.19h3.85l.6 2.19zm-6.04 0l-.28-2.19h3.84l.43 2.19zm-6.03 0l-.11-2.19h3.85l.24 2.19zm-6.04 0l.07-2.19H66l.06 2.19zm-6.04 0l.25-2.19h3.85l-.11 2.19zm-6.03 0l.42-2.19h3.85l-.29 2.19zm-6.04 0l.6-2.19h3.85l-.47 2.19zm-6.04 0l.78-2.19h3.85l-.64 2.19zm-6.03 0l.95-2.19h3.85l-.82 2.19zm-2.2 3.71l.81-2.2h-8.75l-.95 2.2zm66.17 0l-.77-2.2h-4.17l.64 2.2zm-10.94 0l-.48-2.2h4.16l.62 2.2zm-6.65 0l-.32-2.2h4.17l.45 2.2zm-6.64 0l-.17-2.2h4.17l.3 2.2zm-6.64 0l-.01-2.2h4.16l.15 2.2zm-6.64 0l.14-2.2h4.17l-.01 2.2zm-6.65 0l.3-2.2h4.17l-.17 2.2zm-6.64 0l.46-2.2h4.16l-.32 2.2zm-6.64 0l.61-2.2h4.17l-.48 2.2zm-6.65 0l.77-2.2h4.17l-.63 2.2zm65.69 0l-.82-2.2h8.75l.95 2.2z" opacity=".57"/><path fill="#B7D5E5" d="M124.73 117.88L110.39 92.4c-.71-1.07-1.98-1.84-3.25-1.84c0 0 1.22 1.1 1.59 1.63l12.59 23.59c.56 1.02-.18 2.26-1.34 2.26H7.96c-1.15 0-1.89-1.23-1.35-2.24l11.95-23.18c.35-.6 1.88-1.99 1.88-1.99h-.45c-1.27 0-2.54.77-3.25 1.99L3.28 117.88c-.59.88-.01 2.12.99 2.12h119.46c1.01 0 1.59-1.24 1-2.12z"/><path fill="none" stroke="#EEE" stroke-linecap="round" stroke-miterlimit="10" stroke-width="2.936" d="M25.97 28.02h13.21"/><path fill="#75A7BC" d="M109.37 30.11c0-1.04-1.01-1.12-1.01.11v55.8c0 1.34-1.09 2.43-2.43 2.43H22.08c-1.34 0-2.43-1.09-2.43-2.43v-55.8c0-1.23-1.01-1.15-1.01-.11l-.95 55.91c0 2.42 1.24 4.39 4.39 4.39h83.85c2.73 0 4.39-1.97 4.39-4.39l-.95-55.91z"/></svg>
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Web Design Specialist with<br /> <a href="https://www.positivemasculinitynow.org" target="_blank">Positive Masculinity</a> - <small>2022 Feb - present</small></h3>
                            <p class="color-white">Created SEO strategy and implemented new features to pre-existing website for this wonderful Non-Profit</p>
                        </div>
                    </div>

                    <div class="wow fadeInUp color-white media" data-wow-delay="1.6s">
                        <div class="media-object media-left">
                            <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="50" height="50" preserveAspectRatio="xMidYMid meet" viewBox="0 0 128 128"><path fill="#B7D5E5" d="M106 24.79H22.15c-1.92 0-3.48 1.56-3.48 3.48v57.59c0 1.92 1.56 3.48 3.48 3.48H106c1.92 0 3.48-1.56 3.48-3.48V28.27c0-1.92-1.55-3.48-3.48-3.48z"/><radialGradient id="svgIDa" cx="48.408" cy="13.024" r="75.465" gradientTransform="matrix(1 0 0 1.0843 0 -10.19)" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#2F7889"/><stop offset="1" stop-color="#424242"/></radialGradient><path fill="url(#svgIDa)" d="M104.75 83.2H23.4l.96-52.27h79.43z"/><path fill="#2F7889" d="M121.09 123.82H7.59c-.43 0-.83-.03-1.2-.09c-2.88-.44-4.21-4.18-2.5-6.74l.39-.59h119.59l.4.6c1.86 2.78.12 6.76-3.04 6.81c-.04.01-.09.01-.14.01z"/><path fill="#EEE" d="M106.84 90.41H20.6c-1.27 0-2.54.77-3.25 1.99l-14 25.48c-.59.88-.01 2.12.99 2.12H123.8c1 0 1.58-1.24.99-2.12l-14.71-25.63c-.7-1.08-1.97-1.84-3.24-1.84z"/><path fill="#B7D5E5" d="M86.36 115.52H41.8l2.85-7.98h39.07z"/><path fill="#69A1BA" d="m72.69 94.84l-.27-2.2h-3.44l.13 2.2zm-5.55 0l-.14-2.2h-3.45v2.2zm26.47 0l-.81-2.2h-3.26l.68 2.2zm-5.25 0l-.68-2.2h-3.32l.54 2.2zm-5.18 0l-.54-2.2h-3.37l.41 2.2zm18.93 0l-.95-2.2h-6.71l.82 2.2zm-24.5 0l-.41-2.2h-3.41l.28 2.2zm-43.85 0l.68-2.2h-3.26l-.81 2.2zm16.75 0l.27-2.2h-3.41l-.4 2.2zm-11.16 0l.54-2.2h-3.32l-.67 2.2zm-11.18 0l.81-2.2H25.8l-.95 2.2zm16.76 0l.41-2.2h-3.37l-.54 2.2zm11.15 0l.14-2.2h-3.44l-.27 2.2zm5.57 0v-2.2H58.2l-.14 2.2zm22.13 8.89H44.36l-.75 2.2h41.08zm18.37 2.2l-1.21-2.2h6.54l.95 2.2zm-15.4 0l-.83-2.2h6.29l.96 2.2zm8.64 0l-.96-2.2h4.31l1.1 2.2zm-69.72 0l1.21-2.2h-6.54l-.95 2.2zm15.4 0l.83-2.2h-6.29l-.96 2.2zm-8.65 0l.97-2.2h-4.31l-1.11 2.2zm-2.71-7.42l.82-2.19h-6.67l-.95 2.19zm68.24 0l-.81-2.19h6.66l.95 2.19zm-1.7 0l-.96-2.19h-3.85l.82 2.19zm-10.02 0l-.65-2.19h3.85l.78 2.19zm-6.04 0l-.47-2.19h3.85l.6 2.19zm-6.04 0l-.28-2.19h3.84l.43 2.19zm-6.03 0l-.11-2.19h3.85l.24 2.19zm-6.04 0l.07-2.19H66l.06 2.19zm-6.04 0l.25-2.19h3.85l-.11 2.19zm-6.03 0l.42-2.19h3.85l-.29 2.19zm-6.04 0l.6-2.19h3.85l-.47 2.19zm-6.04 0l.78-2.19h3.85l-.64 2.19zm-6.03 0l.95-2.19h3.85l-.82 2.19zm-2.2 3.71l.81-2.2h-8.75l-.95 2.2zm66.17 0l-.77-2.2h-4.17l.64 2.2zm-10.94 0l-.48-2.2h4.16l.62 2.2zm-6.65 0l-.32-2.2h4.17l.45 2.2zm-6.64 0l-.17-2.2h4.17l.3 2.2zm-6.64 0l-.01-2.2h4.16l.15 2.2zm-6.64 0l.14-2.2h4.17l-.01 2.2zm-6.65 0l.3-2.2h4.17l-.17 2.2zm-6.64 0l.46-2.2h4.16l-.32 2.2zm-6.64 0l.61-2.2h4.17l-.48 2.2zm-6.65 0l.77-2.2h4.17l-.63 2.2zm65.69 0l-.82-2.2h8.75l.95 2.2z" opacity=".57"/><path fill="#B7D5E5" d="M124.73 117.88L110.39 92.4c-.71-1.07-1.98-1.84-3.25-1.84c0 0 1.22 1.1 1.59 1.63l12.59 23.59c.56 1.02-.18 2.26-1.34 2.26H7.96c-1.15 0-1.89-1.23-1.35-2.24l11.95-23.18c.35-.6 1.88-1.99 1.88-1.99h-.45c-1.27 0-2.54.77-3.25 1.99L3.28 117.88c-.59.88-.01 2.12.99 2.12h119.46c1.01 0 1.59-1.24 1-2.12z"/><path fill="none" stroke="#EEE" stroke-linecap="round" stroke-miterlimit="10" stroke-width="2.936" d="M25.97 28.02h13.21"/><path fill="#75A7BC" d="M109.37 30.11c0-1.04-1.01-1.12-1.01.11v55.8c0 1.34-1.09 2.43-2.43 2.43H22.08c-1.34 0-2.43-1.09-2.43-2.43v-55.8c0-1.23-1.01-1.15-1.01-.11l-.95 55.91c0 2.42 1.24 4.39 4.39 4.39h83.85c2.73 0 4.39-1.97 4.39-4.39l-.95-55.91z"/></svg>
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Full Stack Developer with<br /><a href="https://www.fiftyshadesofcode.com" target="_blank">Fifty Shades of Code</a> - <small>2017 Aug - present</small></h3>
                            <p class="color-white">Founded my own company for Full Stack Web Development to bring fully accessible and usable Web Applications and Web Sites to those who need them</p>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>


<!-- Education Section -->

<section id="education" class="parallax-section">
    <div class="container">
        <div class="row">

            <div class="col-md-6 col-sm-6">
                <div class="color-white education-thumb">
                    <div class="wow fadeInUp section-title" data-wow-delay="0.8s">
                        <h1>My Education</h1>
{{--                        <p class="color-white">In cursus orci non ipsum gravida dignissim</p>--}}
                    </div>

                    <div class="wow fadeInUp color-white media" data-wow-delay="1.2s">
                        <div class="media-object media-left">
                            <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="65" height="65" preserveAspectRatio="xMidYMid meet" viewBox="0 0 128 128"><path fill="#B7D5E5" d="M106 24.79H22.15c-1.92 0-3.48 1.56-3.48 3.48v57.59c0 1.92 1.56 3.48 3.48 3.48H106c1.92 0 3.48-1.56 3.48-3.48V28.27c0-1.92-1.55-3.48-3.48-3.48z"/><radialGradient id="svgIDa" cx="48.408" cy="13.024" r="75.465" gradientTransform="matrix(1 0 0 1.0843 0 -10.19)" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#2F7889"/><stop offset="1" stop-color="#424242"/></radialGradient><path fill="url(#svgIDa)" d="M104.75 83.2H23.4l.96-52.27h79.43z"/><path fill="#2F7889" d="M121.09 123.82H7.59c-.43 0-.83-.03-1.2-.09c-2.88-.44-4.21-4.18-2.5-6.74l.39-.59h119.59l.4.6c1.86 2.78.12 6.76-3.04 6.81c-.04.01-.09.01-.14.01z"/><path fill="#EEE" d="M106.84 90.41H20.6c-1.27 0-2.54.77-3.25 1.99l-14 25.48c-.59.88-.01 2.12.99 2.12H123.8c1 0 1.58-1.24.99-2.12l-14.71-25.63c-.7-1.08-1.97-1.84-3.24-1.84z"/><path fill="#B7D5E5" d="M86.36 115.52H41.8l2.85-7.98h39.07z"/><path fill="#69A1BA" d="m72.69 94.84l-.27-2.2h-3.44l.13 2.2zm-5.55 0l-.14-2.2h-3.45v2.2zm26.47 0l-.81-2.2h-3.26l.68 2.2zm-5.25 0l-.68-2.2h-3.32l.54 2.2zm-5.18 0l-.54-2.2h-3.37l.41 2.2zm18.93 0l-.95-2.2h-6.71l.82 2.2zm-24.5 0l-.41-2.2h-3.41l.28 2.2zm-43.85 0l.68-2.2h-3.26l-.81 2.2zm16.75 0l.27-2.2h-3.41l-.4 2.2zm-11.16 0l.54-2.2h-3.32l-.67 2.2zm-11.18 0l.81-2.2H25.8l-.95 2.2zm16.76 0l.41-2.2h-3.37l-.54 2.2zm11.15 0l.14-2.2h-3.44l-.27 2.2zm5.57 0v-2.2H58.2l-.14 2.2zm22.13 8.89H44.36l-.75 2.2h41.08zm18.37 2.2l-1.21-2.2h6.54l.95 2.2zm-15.4 0l-.83-2.2h6.29l.96 2.2zm8.64 0l-.96-2.2h4.31l1.1 2.2zm-69.72 0l1.21-2.2h-6.54l-.95 2.2zm15.4 0l.83-2.2h-6.29l-.96 2.2zm-8.65 0l.97-2.2h-4.31l-1.11 2.2zm-2.71-7.42l.82-2.19h-6.67l-.95 2.19zm68.24 0l-.81-2.19h6.66l.95 2.19zm-1.7 0l-.96-2.19h-3.85l.82 2.19zm-10.02 0l-.65-2.19h3.85l.78 2.19zm-6.04 0l-.47-2.19h3.85l.6 2.19zm-6.04 0l-.28-2.19h3.84l.43 2.19zm-6.03 0l-.11-2.19h3.85l.24 2.19zm-6.04 0l.07-2.19H66l.06 2.19zm-6.04 0l.25-2.19h3.85l-.11 2.19zm-6.03 0l.42-2.19h3.85l-.29 2.19zm-6.04 0l.6-2.19h3.85l-.47 2.19zm-6.04 0l.78-2.19h3.85l-.64 2.19zm-6.03 0l.95-2.19h3.85l-.82 2.19zm-2.2 3.71l.81-2.2h-8.75l-.95 2.2zm66.17 0l-.77-2.2h-4.17l.64 2.2zm-10.94 0l-.48-2.2h4.16l.62 2.2zm-6.65 0l-.32-2.2h4.17l.45 2.2zm-6.64 0l-.17-2.2h4.17l.3 2.2zm-6.64 0l-.01-2.2h4.16l.15 2.2zm-6.64 0l.14-2.2h4.17l-.01 2.2zm-6.65 0l.3-2.2h4.17l-.17 2.2zm-6.64 0l.46-2.2h4.16l-.32 2.2zm-6.64 0l.61-2.2h4.17l-.48 2.2zm-6.65 0l.77-2.2h4.17l-.63 2.2zm65.69 0l-.82-2.2h8.75l.95 2.2z" opacity=".57"/><path fill="#B7D5E5" d="M124.73 117.88L110.39 92.4c-.71-1.07-1.98-1.84-3.25-1.84c0 0 1.22 1.1 1.59 1.63l12.59 23.59c.56 1.02-.18 2.26-1.34 2.26H7.96c-1.15 0-1.89-1.23-1.35-2.24l11.95-23.18c.35-.6 1.88-1.99 1.88-1.99h-.45c-1.27 0-2.54.77-3.25 1.99L3.28 117.88c-.59.88-.01 2.12.99 2.12h119.46c1.01 0 1.59-1.24 1-2.12z"/><path fill="none" stroke="#EEE" stroke-linecap="round" stroke-miterlimit="10" stroke-width="2.936" d="M25.97 28.02h13.21"/><path fill="#75A7BC" d="M109.37 30.11c0-1.04-1.01-1.12-1.01.11v55.8c0 1.34-1.09 2.43-2.43 2.43H22.08c-1.34 0-2.43-1.09-2.43-2.43v-55.8c0-1.23-1.01-1.15-1.01-.11l-.95 55.91c0 2.42 1.24 4.39 4.39 4.39h83.85c2.73 0 4.39-1.97 4.39-4.39l-.95-55.91z"/></svg>
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Full Stack Web Development - <small>2021 Aug - 2022 June</small></h3>
                            <p class="color-white"><a href="https://www.tech.com" target="_blank">Bloom Institute of Technology</a> </p>
                        </div>
                    </div>

{{--                    <div class="wow fadeInUp color-white media" data-wow-delay="1.6s">--}}
{{--                        <div class="media-object media-left">--}}
{{--                            <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="65" height="65" preserveAspectRatio="xMidYMid meet" viewBox="0 0 128 128"><path fill="#B7D5E5" d="M106 24.79H22.15c-1.92 0-3.48 1.56-3.48 3.48v57.59c0 1.92 1.56 3.48 3.48 3.48H106c1.92 0 3.48-1.56 3.48-3.48V28.27c0-1.92-1.55-3.48-3.48-3.48z"/><radialGradient id="svgIDa" cx="48.408" cy="13.024" r="75.465" gradientTransform="matrix(1 0 0 1.0843 0 -10.19)" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#2F7889"/><stop offset="1" stop-color="#424242"/></radialGradient><path fill="url(#svgIDa)" d="M104.75 83.2H23.4l.96-52.27h79.43z"/><path fill="#2F7889" d="M121.09 123.82H7.59c-.43 0-.83-.03-1.2-.09c-2.88-.44-4.21-4.18-2.5-6.74l.39-.59h119.59l.4.6c1.86 2.78.12 6.76-3.04 6.81c-.04.01-.09.01-.14.01z"/><path fill="#EEE" d="M106.84 90.41H20.6c-1.27 0-2.54.77-3.25 1.99l-14 25.48c-.59.88-.01 2.12.99 2.12H123.8c1 0 1.58-1.24.99-2.12l-14.71-25.63c-.7-1.08-1.97-1.84-3.24-1.84z"/><path fill="#B7D5E5" d="M86.36 115.52H41.8l2.85-7.98h39.07z"/><path fill="#69A1BA" d="m72.69 94.84l-.27-2.2h-3.44l.13 2.2zm-5.55 0l-.14-2.2h-3.45v2.2zm26.47 0l-.81-2.2h-3.26l.68 2.2zm-5.25 0l-.68-2.2h-3.32l.54 2.2zm-5.18 0l-.54-2.2h-3.37l.41 2.2zm18.93 0l-.95-2.2h-6.71l.82 2.2zm-24.5 0l-.41-2.2h-3.41l.28 2.2zm-43.85 0l.68-2.2h-3.26l-.81 2.2zm16.75 0l.27-2.2h-3.41l-.4 2.2zm-11.16 0l.54-2.2h-3.32l-.67 2.2zm-11.18 0l.81-2.2H25.8l-.95 2.2zm16.76 0l.41-2.2h-3.37l-.54 2.2zm11.15 0l.14-2.2h-3.44l-.27 2.2zm5.57 0v-2.2H58.2l-.14 2.2zm22.13 8.89H44.36l-.75 2.2h41.08zm18.37 2.2l-1.21-2.2h6.54l.95 2.2zm-15.4 0l-.83-2.2h6.29l.96 2.2zm8.64 0l-.96-2.2h4.31l1.1 2.2zm-69.72 0l1.21-2.2h-6.54l-.95 2.2zm15.4 0l.83-2.2h-6.29l-.96 2.2zm-8.65 0l.97-2.2h-4.31l-1.11 2.2zm-2.71-7.42l.82-2.19h-6.67l-.95 2.19zm68.24 0l-.81-2.19h6.66l.95 2.19zm-1.7 0l-.96-2.19h-3.85l.82 2.19zm-10.02 0l-.65-2.19h3.85l.78 2.19zm-6.04 0l-.47-2.19h3.85l.6 2.19zm-6.04 0l-.28-2.19h3.84l.43 2.19zm-6.03 0l-.11-2.19h3.85l.24 2.19zm-6.04 0l.07-2.19H66l.06 2.19zm-6.04 0l.25-2.19h3.85l-.11 2.19zm-6.03 0l.42-2.19h3.85l-.29 2.19zm-6.04 0l.6-2.19h3.85l-.47 2.19zm-6.04 0l.78-2.19h3.85l-.64 2.19zm-6.03 0l.95-2.19h3.85l-.82 2.19zm-2.2 3.71l.81-2.2h-8.75l-.95 2.2zm66.17 0l-.77-2.2h-4.17l.64 2.2zm-10.94 0l-.48-2.2h4.16l.62 2.2zm-6.65 0l-.32-2.2h4.17l.45 2.2zm-6.64 0l-.17-2.2h4.17l.3 2.2zm-6.64 0l-.01-2.2h4.16l.15 2.2zm-6.64 0l.14-2.2h4.17l-.01 2.2zm-6.65 0l.3-2.2h4.17l-.17 2.2zm-6.64 0l.46-2.2h4.16l-.32 2.2zm-6.64 0l.61-2.2h4.17l-.48 2.2zm-6.65 0l.77-2.2h4.17l-.63 2.2zm65.69 0l-.82-2.2h8.75l.95 2.2z" opacity=".57"/><path fill="#B7D5E5" d="M124.73 117.88L110.39 92.4c-.71-1.07-1.98-1.84-3.25-1.84c0 0 1.22 1.1 1.59 1.63l12.59 23.59c.56 1.02-.18 2.26-1.34 2.26H7.96c-1.15 0-1.89-1.23-1.35-2.24l11.95-23.18c.35-.6 1.88-1.99 1.88-1.99h-.45c-1.27 0-2.54.77-3.25 1.99L3.28 117.88c-.59.88-.01 2.12.99 2.12h119.46c1.01 0 1.59-1.24 1-2.12z"/><path fill="none" stroke="#EEE" stroke-linecap="round" stroke-miterlimit="10" stroke-width="2.936" d="M25.97 28.02h13.21"/><path fill="#75A7BC" d="M109.37 30.11c0-1.04-1.01-1.12-1.01.11v55.8c0 1.34-1.09 2.43-2.43 2.43H22.08c-1.34 0-2.43-1.09-2.43-2.43v-55.8c0-1.23-1.01-1.15-1.01-.11l-.95 55.91c0 2.42 1.24 4.39 4.39 4.39h83.85c2.73 0 4.39-1.97 4.39-4.39l-.95-55.91z"/></svg>--}}
{{--                        </div>--}}
{{--                    </div>--}}

                </div>
            </div>

            <div class="col-md-6 col-sm-6">
                <div class="background-image education-img"></div>
            </div>

        </div>
    </div>
</section>


<!-- Skills Section -->

<section id="skills" class="parallax-section">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">

            <div class="col-md-offset-1 col-md-10 col-sm-12">
                <i class="wow fadeInUp fa fa-star" data-wow-delay="0.6s"></i>
                <h2 class="wow fadeInUp" data-wow-delay="0.8s">Proin lobortis eu diam et facilisis. Fusce nisi nibh, molestie in vestibulum quis, auctor et orci.</h2>
                <p class="wow fadeInUp" data-wow-delay="1s">Curabitur at pulvinar ante. Duis dui urna, faucibus eget felis eu, iaculis congue sem.</p>
            </div>

        </div>
    </div>
</section>




<!-- Work Section -->

<section id="work" class="parallax-section">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">

            <div class="col-md-offset-1 col-md-10 col-sm-12">
                <i class="wow fadeInUp fa fa-star" data-wow-delay="0.6s"></i>
                <h2 class="wow fadeInUp" data-wow-delay="0.8s">Proin lobortis eu diam et facilisis. Fusce nisi nibh, molestie in vestibulum quis, auctor et orci.</h2>
                <p class="wow fadeInUp" data-wow-delay="1s">Curabitur at pulvinar ante. Duis dui urna, faucibus eget felis eu, iaculis congue sem.</p>
            </div>

        </div>
    </div>
</section>


<!-- Contact Section -->

<section id="contact" class="parallax-section">
    <div class="container">
        <div class="row">

            <div class="col-md-6 col-sm-12">
                <div class="contact-form">
                    <div class="wow fadeInUp section-title" data-wow-delay="0.2s">
                        <h1 class="color-white">Say hello..</h1>
                        <p class="color-white">Integer ut consectetur est. In cursus orci non ipsum gravida dignissim.</p>
                    </div>

                    <div id="contact-form">
                        <form action="#template-mo" method="post">
                            <div class="wow fadeInUp" data-wow-delay="1s">
                                <input name="fullname" type="text" class="form-control" id="fullname" placeholder="Your Name">
                            </div>
                            <div class="wow fadeInUp" data-wow-delay="1.2s">
                                <input name="email" type="email" class="form-control" id="email" placeholder="Your Email">
                            </div>
                            <div class="wow fadeInUp" data-wow-delay="1.4s">
                                <textarea name="message" rows="5" class="form-control" id="message" placeholder="Write your message..."></textarea>
                            </div>
                            <div class="wow fadeInUp col-md-6 col-sm-8" data-wow-delay="1.6s">
                                <input name="submit" type="submit" class="form-control" id="submit" value="Send">
                            </div>
                        </form>
                    </div>

                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="background-image contact-img"></div>
            </div>

            <div class="bg-dark col-md-3 col-sm-6">
                <div class="contact-thumb">
                    <div class="wow fadeInUp contact-info" data-wow-delay="0.6s">
                        <h3 class="color-white">Located</h3>
                        <p>Niskayuna, New York USA</p>
                    </div>

                    <div class="wow fadeInUp contact-info" data-wow-delay="0.8s">
                        <h3 class="color-white">Contact.</h3>
                        <p><i class="fa fa-phone"></i> 518-630-4268</p>
                        <p><i class="fa fa-envelope-o"></i> <a href="mailto:philiprmcdavid@gmail.com">philiprmcdavid@gmail.com</a></p>
                        <p><i class="fa fa-globe"></i> <a href="#">fiftyshadesofcode.com</a></p>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>


<!-- Footer Section -->

<footer>
    <div class="container">
        <div class="row">

            <div class="col-md-12 col-sm-12">
                <div class="wow fadeInUp footer-copyright" data-wow-delay="1.8s">
                    <p>Copyright &copy; 2022 Fifty Shades of Code</p>
                </div>
                <ul class="wow fadeInUp social-icon" data-wow-delay="2s">
                    <li><a href="#" class="fa fa-facebook"></a></li>
                    <li><a href="#" class="fa fa-twitter"></a></li>
                    <li><a href="#" class="fa fa-google-plus"></a></li>
                    <li><a href="#" class="fa fa-dribbble"></a></li>
                    <li><a href="#" class="fa fa-linkedin"></a></li>
                </ul>
            </div>

        </div>
    </div>
</footer>

<!-- SCRIPTS -->

<script src="{{ asset('Frontend/js/jquery.js') }}"></script>
<script src="{{ asset('Frontend/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('Frontend/js/jquery.parallax.js') }}"></script>
<script src="{{ asset('Frontend/js/smoothscroll.js') }}"></script>
<script src="{{ asset('Frontend/js/wow.min.js') }}"></script>
<script src="{{ asset('Frontend/js/custom.js') }}"></script>

</body>
</html>
