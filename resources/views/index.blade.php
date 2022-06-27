<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="icon" type="image/x-icon" href="{{ secure_asset('assets/Favicon.png') }}">

    <title>Fifty Shades of Code</title>
    <link rel="stylesheet" href="{{ secure_asset('Frontend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('Frontend/css/animate.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('Frontend/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('Frontend/css/templatemo-style.css') }}">

    <link href="{{ URL::asset('https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700') }}" rel="stylesheet">

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
    <div class="container" >

        <!-- navbar header -->
        <div class="navbar-header">
            <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon icon-bar"></span>
                <span class="icon icon-bar"></span>
                <span class="icon icon-bar"></span>
            </button>
            <a href="#" class="navbar-brand">
                <img src="{{ secure_asset('assets/FiftyShadesofCode.png') }}" alt="Fifty Shades of Code text" />
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
                <div class="home-img">
                    <img src="{{ secure_asset('../../assets/Logo.gif') }}" alt="Dragon with Neck Tie" />
                </div>
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
                <div class="wow fadeInUp service-thumb" data-wow-delay="0.8s">
                    <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="75" height="75" preserveAspectRatio="xMidYMid meet" viewBox="0 0 64 64"><path fill="#bfbebe" d="M39.568 47.4H24.251c.357 0 .645 3.511.645 7.836c0 4.328-.287 7.839-.645 7.839h15.317c-.356 0-.645-3.511-.645-7.839c.002-4.325.289-7.836.645-7.836"/><path fill="#aeaeae" d="M29.615 47.4h-5.363c.357 0 .645 3.511.645 7.836c0 4.328-.287 7.839-.645 7.839h5.363c.357 0 .645-3.511.645-7.839c0-4.325-.288-7.836-.645-7.836"/><path fill="#d1d2d2" d="M63.784 47.31c0 4.047-3.05 7.326-6.806 7.326H6.848c-3.76 0-6.809-3.279-6.809-7.326V10.19c0-4.04 3.049-7.321 6.809-7.321h50.13c3.756 0 6.806 3.278 6.806 7.321v37.12"/><path fill="#c6c5c5" d="M12.93 47.31V10.19c0-4.04 3.049-7.321 6.808-7.321H6.844c-3.76 0-6.809 3.278-6.809 7.321v37.12c0 4.047 3.049 7.326 6.809 7.326h12.894c-3.759 0-6.808-3.28-6.808-7.327"/><g fill="#243438"><path d="M63.784 36.941c0 4.04-3.05 7.32-6.806 7.32H6.848c-3.76 0-6.809-3.277-6.809-7.32V10.163c0-4.047 3.049-7.325 6.809-7.325h50.13c3.756 0 6.806 3.278 6.806 7.325v26.778"/><path d="M.036 35.05h63.749v11.367H.036z"/></g><path fill="#58c5e8" d="M58.75 6.244H5.069c-.443 0-.812.245-.812.54v34.891c0 .296.369.54.812.54H58.75c.241 0 .424-.051.557-.141l.02-.02s.016-.012.02-.023a.414.414 0 0 0 .223-.356V6.791c-.004-.295-.377-.54-.82-.54"/><path fill="#28a6de" d="M32.698 29.559c8.976 5.378 17.745 9.04 26.868 11.255V6.784c0-.295-.373-.54-.816-.54H9.49c5.06 9.535 13.768 17.66 23.21 23.315m.07 5.711C21.94 29.371 11.097 21.2 4.257 11.11v30.564c0 .296.369.54.812.54h43.813c-5.352-1.725-10.689-3.986-16.11-6.94"/><path fill="#d1d2d2" d="M43.721 62.727c0 .702-.338 1.273-.753 1.273h-22.11c-.419 0-.757-.571-.757-1.273c0-.703.338-1.273.757-1.273h22.11c.415-.003.753.569.753 1.273"/><path fill="#c6c5c5" d="M27.937 62.727c0-.703.338-1.273.753-1.273h-8.125c-.416 0-.753.57-.753 1.273c0 .702.338 1.273.753 1.273h8.125c-.415 0-.753-.571-.753-1.273"/><path fill="#243438" d="M34.33 48.615c-.098-.094-.241-.121-.436-.065l-1.123.287c-.35.095-.527.326-.527.698l-.004 1.201c0 .174.039.303.117.377a.335.335 0 0 0 .249.093c.06 0 .116-.013.188-.027l1.122-.286c.35-.094.528-.326.532-.703v-1.197c-.003-.177-.042-.304-.118-.378m-.596 1.367c0 .133-.062.215-.189.25l-.398.104a.436.436 0 0 1-.066.008a.138.138 0 0 1-.09-.031c-.026-.025-.043-.072-.038-.14v-.427c0-.133.062-.215.187-.249l.403-.104c.069-.016.121-.008.151.023c.03.027.043.072.043.136v.431h-.003zm-2.154-.452c0-.372-.175-.604-.528-.698l-1.122-.287c-.194-.056-.338-.026-.431.065c-.082.074-.121.201-.121.377l.004 1.195c.004.377.179.61.528.703l1.126.287c.066.02.128.027.182.027a.33.33 0 0 0 .249-.094c.078-.073.117-.201.117-.377l-.004-1.198m-.746.778c-.02.021-.05.031-.089.031c0 0-.043-.004-.066-.008l-.4-.104c-.124-.035-.19-.117-.19-.25v-.431c0-.062.016-.108.042-.136c.031-.031.082-.039.155-.023l.4.104c.124.034.19.116.19.249v.431c0 .062 0 .109-.042.137m1.535 2.301c.02 0 .039-.004.066-.013l.4-.103c.124-.029.19-.115.19-.252v-.426a.236.236 0 0 0-.039-.138c-.035-.034-.09-.038-.155-.021l-.404.103c-.124.031-.187.116-.187.252l-.004.429c0 .062.016.104.043.131c.02.026.051.038.09.038m-.913 0a.209.209 0 0 1-.07-.013l-.4-.103c-.124-.029-.187-.115-.187-.252l-.004-.426c0-.063.016-.105.043-.138c.031-.034.085-.038.151-.021l.408.103c.121.031.187.116.187.252v.429c0 .062-.016.104-.039.131a.114.114 0 0 1-.089.038"/></svg>
                    <h3>Interface Design</h3>
                    <p>Designing User Interfaces<br/>for Machines and Software, such as Computers,<br/>Home Appliances, Mobile Devices, and Other<br/>Electronic Devices, With the Focus on<br/>Maximizing Usability and the User Experience</p>
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="wow fadeInUp color-white service-thumb" data-wow-delay="1.2s">
                    <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="75" height="75" preserveAspectRatio="xMidYMid meet" viewBox="0 0 512 512"><path fill="#B9C5C6" d="M305.125 237.641L81.562 368.318l67.566-197.296c6.586-19.231 26.932-34.817 45.45-34.817h290.569c18.518 0 28.189 15.586 21.604 34.817l-67.566 197.296l-134.06-130.677z"/><path fill="#96A9B2" d="M439.388 369.591c-.088.102-.202.173-.295.272c-9.446 13.303-25.008 22.793-39.54 22.793H104.438c-1.107 0-2.043-.27-3.087-.377h-.429c-.107-.014-.176-.074-.282-.088c-6.812-.869-12.169-3.914-15.634-8.616c-.065-.088-.178-.129-.243-.217l.074-.047c-.809-1.133-1.681-2.223-2.269-3.524c-1.377-3.048-2.124-6.53-2.163-10.313c-.011-.03-.03-.052-.034-.085l.041-.027c-.023-3.769 198.015-126.246 198.015-126.246c24.57-15.234 34.783-14.997 49.217 0c0 0 114.346 122.576 111.676 126.397l.068.078z"/><path fill="#DCE2E2" d="M167.814 144.631c5.942-4.166 15.793-7.974 23.306-8.773l297.738-.011c6.984.81 13.209 0 17.315 8.783c4.106 8.783 2.92 13.753 2.92 13.753L314.09 282.712c-24.191 14.999-34.247 14.766-48.458 0L155.609 158.187s6.263-9.39 12.205-13.556z"/><path fill="#FFB636" d="M114.107 203.102H18.109c-8.008 0-14.5-6.492-14.5-14.5s6.492-14.5 14.5-14.5h95.998c8.008 0 14.5 6.492 14.5 14.5s-6.492 14.5-14.5 14.5zm-13.041 48.469c0-8.008-6.492-14.5-14.5-14.5H18.109c-8.008 0-14.5 6.492-14.5 14.5s6.492 14.5 14.5 14.5h68.457c8.009 0 14.5-6.492 14.5-14.5zm-22.205 62.97c0-8.008-6.492-14.5-14.5-14.5H18.109c-8.008 0-14.5 6.492-14.5 14.5s6.492 14.5 14.5 14.5H64.36c8.009 0 14.501-6.492 14.501-14.5z"/></svg>
                    <h3>Media Strategy</h3>
                    <p class="color-white">Used in the Advertising or Contend Delivery Industries, is Concerned with How Messages will be Delivered to the Consumer or Niche Market.</p>
                </div>
            </div>

            <div class="bg-dark col-md-3 col-sm-6">
                <div class="wow fadeInUp color-white service-thumb" data-wow-delay="1.6s">
                    <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="75" height="75" preserveAspectRatio="xMidYMid meet" viewBox="0 0 48 48"><g fill="#616161"><path d="m29.175 31.99l2.828-2.827l12.019 12.019l-2.828 2.827z"/><circle cx="20" cy="20" r="16"/></g><path fill="#37474F" d="m32.45 35.34l2.827-2.828l8.696 8.696l-2.828 2.828z"/><circle cx="20" cy="20" r="13" fill="#64B5F6"/><path fill="#BBDEFB" d="M26.9 14.2c-1.7-2-4.2-3.2-6.9-3.2s-5.2 1.2-6.9 3.2c-.4.4-.3 1.1.1 1.4c.4.4 1.1.3 1.4-.1C16 13.9 17.9 13 20 13s4 .9 5.4 2.5c.2.2.5.4.8.4c.2 0 .5-.1.6-.2c.4-.4.4-1.1.1-1.5z"/></svg>
                    <h3>SEO</h3>
                    <p class="color-white">Literally stands for 'Search Engine Optimization',<br/>it is Improving the Quality and Quantity of Website Traffic to a Website or Web Page from Search Engines, SEO Targets Unpaid Traffic Rather Than<br/>Direct Traffic or Paid Traffic.</p>
                </div>
            </div>

            <div class="bg-white col-md-3 col-sm-6">
                <div class="wow fadeInUp service-thumb" data-wow-delay="1.8s">
                    <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="75" height="75" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"><path stroke-dasharray="64" stroke-dashoffset="64" stroke-width="2" d="M13 3L19 9V21H5V3H13"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.6s" values="64;0"/></path><path stroke-dasharray="14" stroke-dashoffset="14" d="M12.5 3V8.5H19"><animate fill="freeze" attributeName="stroke-dashoffset" begin="0.7s" dur="0.2s" values="14;0"/></path><g stroke-dasharray="8" stroke-dashoffset="8" stroke-width="2"><path d="M10 13L8 15L10 17"><animate fill="freeze" attributeName="stroke-dashoffset" begin="1s" dur="0.2s" values="8;0"/></path><path d="M14 13L16 15L14 17"><animate fill="freeze" attributeName="stroke-dashoffset" begin="1.2s" dur="0.2s" values="8;0"/></path></g></g></svg>
                    <h3>Coding</h3>
                    <p>Computation Written in a Source Code,<br/>Using One or More Languages that are Intelligible<br/>to Programmers. Coding Summed Up is<br/>Providing the Software with a Set of Instructions to<br/>Operate the Machine for Which it is Programmed</p>
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
                            <p class="color-white"><a href="https://www.bloomtech.com/" target="_blank">Bloom Institute of Technology</a> </p>
                        </div>
                    </div>

                    <div class="wow fadeInUp color-white media" data-wow-delay="1.6s">
                        <div class="media-object media-left">
                            <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="65" height="65" preserveAspectRatio="xMidYMid meet" viewBox="0 0 128 128"><path fill="#B7D5E5" d="M106 24.79H22.15c-1.92 0-3.48 1.56-3.48 3.48v57.59c0 1.92 1.56 3.48 3.48 3.48H106c1.92 0 3.48-1.56 3.48-3.48V28.27c0-1.92-1.55-3.48-3.48-3.48z"/><radialGradient id="svgIDa" cx="48.408" cy="13.024" r="75.465" gradientTransform="matrix(1 0 0 1.0843 0 -10.19)" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#2F7889"/><stop offset="1" stop-color="#424242"/></radialGradient><path fill="url(#svgIDa)" d="M104.75 83.2H23.4l.96-52.27h79.43z"/><path fill="#2F7889" d="M121.09 123.82H7.59c-.43 0-.83-.03-1.2-.09c-2.88-.44-4.21-4.18-2.5-6.74l.39-.59h119.59l.4.6c1.86 2.78.12 6.76-3.04 6.81c-.04.01-.09.01-.14.01z"/><path fill="#EEE" d="M106.84 90.41H20.6c-1.27 0-2.54.77-3.25 1.99l-14 25.48c-.59.88-.01 2.12.99 2.12H123.8c1 0 1.58-1.24.99-2.12l-14.71-25.63c-.7-1.08-1.97-1.84-3.24-1.84z"/><path fill="#B7D5E5" d="M86.36 115.52H41.8l2.85-7.98h39.07z"/><path fill="#69A1BA" d="m72.69 94.84l-.27-2.2h-3.44l.13 2.2zm-5.55 0l-.14-2.2h-3.45v2.2zm26.47 0l-.81-2.2h-3.26l.68 2.2zm-5.25 0l-.68-2.2h-3.32l.54 2.2zm-5.18 0l-.54-2.2h-3.37l.41 2.2zm18.93 0l-.95-2.2h-6.71l.82 2.2zm-24.5 0l-.41-2.2h-3.41l.28 2.2zm-43.85 0l.68-2.2h-3.26l-.81 2.2zm16.75 0l.27-2.2h-3.41l-.4 2.2zm-11.16 0l.54-2.2h-3.32l-.67 2.2zm-11.18 0l.81-2.2H25.8l-.95 2.2zm16.76 0l.41-2.2h-3.37l-.54 2.2zm11.15 0l.14-2.2h-3.44l-.27 2.2zm5.57 0v-2.2H58.2l-.14 2.2zm22.13 8.89H44.36l-.75 2.2h41.08zm18.37 2.2l-1.21-2.2h6.54l.95 2.2zm-15.4 0l-.83-2.2h6.29l.96 2.2zm8.64 0l-.96-2.2h4.31l1.1 2.2zm-69.72 0l1.21-2.2h-6.54l-.95 2.2zm15.4 0l.83-2.2h-6.29l-.96 2.2zm-8.65 0l.97-2.2h-4.31l-1.11 2.2zm-2.71-7.42l.82-2.19h-6.67l-.95 2.19zm68.24 0l-.81-2.19h6.66l.95 2.19zm-1.7 0l-.96-2.19h-3.85l.82 2.19zm-10.02 0l-.65-2.19h3.85l.78 2.19zm-6.04 0l-.47-2.19h3.85l.6 2.19zm-6.04 0l-.28-2.19h3.84l.43 2.19zm-6.03 0l-.11-2.19h3.85l.24 2.19zm-6.04 0l.07-2.19H66l.06 2.19zm-6.04 0l.25-2.19h3.85l-.11 2.19zm-6.03 0l.42-2.19h3.85l-.29 2.19zm-6.04 0l.6-2.19h3.85l-.47 2.19zm-6.04 0l.78-2.19h3.85l-.64 2.19zm-6.03 0l.95-2.19h3.85l-.82 2.19zm-2.2 3.71l.81-2.2h-8.75l-.95 2.2zm66.17 0l-.77-2.2h-4.17l.64 2.2zm-10.94 0l-.48-2.2h4.16l.62 2.2zm-6.65 0l-.32-2.2h4.17l.45 2.2zm-6.64 0l-.17-2.2h4.17l.3 2.2zm-6.64 0l-.01-2.2h4.16l.15 2.2zm-6.64 0l.14-2.2h4.17l-.01 2.2zm-6.65 0l.3-2.2h4.17l-.17 2.2zm-6.64 0l.46-2.2h4.16l-.32 2.2zm-6.64 0l.61-2.2h4.17l-.48 2.2zm-6.65 0l.77-2.2h4.17l-.63 2.2zm65.69 0l-.82-2.2h8.75l.95 2.2z" opacity=".57"/><path fill="#B7D5E5" d="M124.73 117.88L110.39 92.4c-.71-1.07-1.98-1.84-3.25-1.84c0 0 1.22 1.1 1.59 1.63l12.59 23.59c.56 1.02-.18 2.26-1.34 2.26H7.96c-1.15 0-1.89-1.23-1.35-2.24l11.95-23.18c.35-.6 1.88-1.99 1.88-1.99h-.45c-1.27 0-2.54.77-3.25 1.99L3.28 117.88c-.59.88-.01 2.12.99 2.12h119.46c1.01 0 1.59-1.24 1-2.12z"/><path fill="none" stroke="#EEE" stroke-linecap="round" stroke-miterlimit="10" stroke-width="2.936" d="M25.97 28.02h13.21"/><path fill="#75A7BC" d="M109.37 30.11c0-1.04-1.01-1.12-1.01.11v55.8c0 1.34-1.09 2.43-2.43 2.43H22.08c-1.34 0-2.43-1.09-2.43-2.43v-55.8c0-1.23-1.01-1.15-1.01-.11l-.95 55.91c0 2.42 1.24 4.39 4.39 4.39h83.85c2.73 0 4.39-1.97 4.39-4.39l-.95-55.91z"/></svg>
                        </div>
                        <div class="media-body mb-50">
                            <h3 class="media-heading">Floral Design, Photography, Videography,<br />Web Design,  Graphic Design,<br />Business, and Fitness and Nutrition - <small>2018 - 2021 </small></h3>
                            <p class="color-white"><a href="https://www.shawacademy.com/en-us/" target="_blank">Shaw Academy</a> </p>
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-md-6 col-sm-6">
                <div class="background-image education-img"></div>
            </div>

        </div>
    </div>
</section>


<!-- Skills Section -->

<section id="skills" class="parallax-section skills row">
    <div class="overlay"></div>
    <div class="container">
        <div>
            <div class="wow fadeInUp color-white media" data-wow-delay="1.2s">
                <div>
                    <div class="wow fadeInUp section-title text" data-wow-delay="0.8s">
                        <h1>My Skills</h1>
                    </div>
                    <p class='color-white'>These are the technologies I've worked with</p>
                </div>

                <div class='wow fadeInUp thumbnails'>
                    <div class='thumbnail'>
                        <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="100" height="100" preserveAspectRatio="xMidYMid meet" viewBox="0 0 256 259.3"><path fill="#9EDCF2" d="M200.9 199.8c0 13.9-32.2 25.1-71.9 25.1s-71.9-11.3-71.9-25.1c0-13.9 32.2-25.1 71.9-25.1s71.9 11.2 71.9 25.1zm0 0"/><defs><path id="svgIDa" d="M98.1 244.8c1.6 7.5 5.5 11.9 9.4 14.5h41.1c5-3.4 10.1-9.8 10.1-21.8v-31s.6-7.7 7.7-10.2c0 0 4.1-2.9-.3-4.5c0 0-19.5-1.6-19.5 14.4v23.6s.8 8.7-3.8 12.3v-29.2s.3-9.3 5.1-12.8c0 0 3.2-5.7-3.8-4.2c0 0-13.4 1.9-14 17.6l-.3 30h-3.2l-.3-30c-.6-15.6-14-17.6-14-17.6c-7-1.6-3.8 4.2-3.8 4.2c4.8 3.5 5.1 12.8 5.1 12.8v29.5c-4.6-3.3-3.8-12.6-3.8-12.6v-23.6c0-16-19.5-14.4-19.5-14.4c-4.5 1.6-.3 4.5-.3 4.5c7 2.6 7.7 10.2 7.7 10.2v21.7l.4 16.6z"/></defs><clipPath id="svgIDb"><use href="#svgIDa"/></clipPath><path fill="#7DBCE7" d="M200.9 199.8c0 13.9-32.2 25.1-71.9 25.1s-71.9-11.3-71.9-25.1c0-13.9 32.2-25.1 71.9-25.1s71.9 11.2 71.9 25.1zm0 0" clip-path="url(#svgIDb)"/><path fill="#9EDCF2" d="m46.9 125.9l-2.1 7.2s-.5 2.6 1.9 3.1c2.6-.1 2.4-2.5 2.2-3.2l-2-7.1zm0 0"/><path fill="#010101" d="m255.8 95.6l.2-.9c-21.1-4.2-42.7-4.3-55.8-3.7c2.1-7.7 2.8-16.7 2.8-26.6c0-14.3-5.4-25.7-14-34.3c1.5-4.9 3.5-15.8-2-29.7c0 0-9.8-3.1-32.1 11.8c-8.7-2.2-18-3.3-27.3-3.3c-10.2 0-20.5 1.3-30.2 3.9C74.4-2.9 64.3.3 64.3.3c-6.6 16.5-2.5 28.8-1.3 31.8c-7.8 8.4-12.5 19.1-12.5 32.2c0 9.9 1.1 18.8 3.9 26.5c-13.2-.5-34-.3-54.4 3.8l.2.9c20.4-4.1 41.4-4.2 54.5-3.7c.6 1.6 1.3 3.2 2 4.7c-13 .4-35.1 2.1-56.3 8.1l.3.9c21.4-6 43.7-7.6 56.6-8c7.8 14.4 23 23.8 50.2 26.7c-3.9 2.6-7.8 7-9.4 14.5c-5.3 2.5-21.9 8.7-31.9-8.5c0 0-5.6-10.2-16.3-11c0 0-10.4-.2-.7 6.5c0 0 6.9 3.3 11.7 15.6c0 0 6.3 21 36.4 14.2V177s-.6 7.7-7.7 10.2c0 0-4.2 2.9.3 4.5c0 0 19.5 1.6 19.5-14.4v-23.6s-.8-9.4 3.8-12.6v38.8s-.3 9.3-5.1 12.8c0 0-3.2 5.7 3.8 4.2c0 0 13.4-1.9 14-17.6l.3-39.3h3.2l.3 39.3c.6 15.6 14 17.6 14 17.6c7 1.6 3.8-4.2 3.8-4.2c-4.8-3.5-5.1-12.8-5.1-12.8v-38.5c4.6 3.6 3.8 12.3 3.8 12.3v23.6c0 16 19.5 14.4 19.5 14.4c4.5-1.6.3-4.5.3-4.5c-7-2.6-7.7-10.2-7.7-10.2v-31c0-12.1-5.1-18.5-10.1-21.8c29-2.9 42.9-12.2 49.3-26.8c12.7.3 35.6 1.9 57.4 8.1l.3-.9c-21.7-6.1-44.4-7.7-57.3-8.1c.6-1.5 1.1-3 1.6-4.6c13.4-.5 35.1-.5 56.3 3.7zm0 0"/><path fill="#F5CCB3" d="M174.6 63.7c6.2 5.7 9.9 12.5 9.9 19.8c0 34.4-25.6 35.3-57.2 35.3S70.1 114 70.1 83.5c0-7.3 3.6-14.1 9.8-19.7c10.3-9.4 27.7-4.4 47.4-4.4s37-5.1 47.3 4.3zm0 0"/><path fill="#FFF" d="M108.3 85.3c0 9.5-5.3 17.1-11.9 17.1c-6.6 0-11.9-7.7-11.9-17.1c0-9.5 5.3-17.1 11.9-17.1c6.6-.1 11.9 7.6 11.9 17.1zm0 0"/><path fill="#AF5C51" d="M104.5 85.5c0 6.3-3.6 11.4-7.9 11.4c-4.4 0-7.9-5.1-7.9-11.4c0-6.3 3.6-11.4 7.9-11.4c4.3 0 7.9 5.1 7.9 11.4zm0 0"/><path fill="#FFF" d="M172.2 85.3c0 9.5-5.3 17.1-11.9 17.1c-6.6 0-11.9-7.7-11.9-17.1c0-9.5 5.3-17.1 11.9-17.1c6.5-.1 11.9 7.6 11.9 17.1zm0 0"/><path fill="#AF5C51" d="M168.3 85.5c0 6.3-3.6 11.4-7.9 11.4c-4.4 0-7.9-5.1-7.9-11.4c0-6.3 3.6-11.4 7.9-11.4c4.4 0 7.9 5.1 7.9 11.4zm-37.8 15c0 1.6-1.3 3-3 3c-1.6 0-3-1.3-3-3s1.3-3 3-3c1.6 0 3 1.3 3 3zm-9.9 7.5c-.2-.5.1-1 .6-1.2c.5-.2 1 .1 1.2.6c.8 2.2 2.8 3.6 5.1 3.6s4.3-1.5 5.1-3.6c.2-.5.7-.8 1.2-.6c.5.2.8.7.6 1.2c-1 2.9-3.8 4.9-6.9 4.9c-3.1 0-5.9-2-6.9-4.9zm0 0"/><path fill="#C4E5D9" d="M54.5 121.6c0 .8-.9 1.4-2.1 1.4c-1.1 0-2.1-.6-2.1-1.4c0-.8.9-1.4 2.1-1.4c1.2 0 2.1.6 2.1 1.4zm5.8 3.2c0 .8-.9 1.4-2.1 1.4c-1.1 0-2.1-.6-2.1-1.4c0-.8.9-1.4 2.1-1.4c1.2 0 2.1.6 2.1 1.4zm3.5 4.2c0 .8-.9 1.4-2.1 1.4c-1.1 0-2.1-.6-2.1-1.4c0-.8.9-1.4 2.1-1.4c1.2-.1 2.1.6 2.1 1.4zm3.2 4.8c0 .8-.9 1.4-2.1 1.4c-1.1 0-2.1-.6-2.1-1.4c0-.8.9-1.4 2.1-1.4c1.2-.1 2.1.6 2.1 1.4zm3.5 4.4c0 .8-.9 1.4-2.1 1.4c-1.1 0-2.1-.6-2.1-1.4c0-.8.9-1.4 2.1-1.4c1.2 0 2.1.6 2.1 1.4zm4.8 3.9c0 .8-.9 1.4-2.1 1.4c-1.1 0-2.1-.6-2.1-1.4c0-.8.9-1.4 2.1-1.4c1.2-.1 2.1.6 2.1 1.4zm6.7 2.5c0 .8-.9 1.4-2.1 1.4c-1.1 0-2.1-.6-2.1-1.4c0-.8.9-1.4 2.1-1.4c1.2 0 2.1.6 2.1 1.4zm6.7 0c0 .8-.9 1.4-2.1 1.4c-1.1 0-2.1-.6-2.1-1.4c0-.8.9-1.4 2.1-1.4c1.2 0 2.1.6 2.1 1.4zm6.8-1.1c0 .8-.9 1.4-2.1 1.4c-1.1 0-2.1-.6-2.1-1.4c0-.8.9-1.4 2.1-1.4c1.1 0 2.1.6 2.1 1.4zm0 0"/></svg>
                        <p>GITHUB</p>
                    </div>
                    <div class='thumbnail'>
                        <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="100" height="100" preserveAspectRatio="xMidYMid meet" viewBox="0 0 32 32"><path fill="#e44f26" d="M5.902 27.201L3.655 2h24.69l-2.25 25.197L15.985 30L5.902 27.201z"/><path fill="#f1662a" d="m16 27.858l8.17-2.265l1.922-21.532H16v23.797z"/><path fill="#ebebeb" d="M16 13.407h-4.09l-.282-3.165H16V7.151H8.25l.074.83l.759 8.517H16v-3.091zm0 8.027l-.014.004l-3.442-.929l-.22-2.465H9.221l.433 4.852l6.332 1.758l.014-.004v-3.216z"/><path fill="#fff" d="M15.989 13.407v3.091h3.806l-.358 4.009l-3.448.93v3.216l6.337-1.757l.046-.522l.726-8.137l.076-.83h-7.185zm0-6.256v3.091h7.466l.062-.694l.141-1.567l.074-.83h-7.743z"/></svg>
                        <p>HTML</p>
                    </div>
                    <div class='thumbnail'>
                        <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="100" height="100" preserveAspectRatio="xMidYMid meet" viewBox="0 0 32 32"><path fill="#1572b6" d="M5.902 27.201L3.656 2h24.688l-2.249 25.197L15.985 30L5.902 27.201z"/><path fill="#33a9dc" d="m16 27.858l8.17-2.265l1.922-21.532H16v23.797z"/><path fill="#fff" d="M16 13.191h4.09l.282-3.165H16V6.935h7.75l-.074.829l-.759 8.518H16v-3.091z"/><path fill="#ebebeb" d="m16.019 21.218l-.014.004l-3.442-.93l-.22-2.465H9.24l.433 4.853l6.331 1.758l.015-.004v-3.216z"/><path fill="#fff" d="m19.827 16.151l-.372 4.139l-3.447.93v3.216l6.336-1.756l.047-.522l.537-6.007h-3.101z"/><path fill="#ebebeb" d="M16.011 6.935v3.091H8.545l-.062-.695l-.141-1.567l-.074-.829h7.743zM16 13.191v3.091h-3.399l-.062-.695l-.14-1.567l-.074-.829H16z"/></svg>
                        <p>CSS</p>
                    </div>
                    <div class='thumbnail'>
                        <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="100" height="100" preserveAspectRatio="xMidYMid meet" viewBox="0 0 32 32"><path fill="#44a8b3" d="M9 13.7q1.4-5.6 7-5.6c5.6 0 6.3 4.2 9.1 4.9q2.8.7 4.9-2.1q-1.4 5.6-7 5.6c-5.6 0-6.3-4.2-9.1-4.9q-2.8-.7-4.9 2.1Zm-7 8.4q1.4-5.6 7-5.6c5.6 0 6.3 4.2 9.1 4.9q2.8.7 4.9-2.1q-1.4 5.6-7 5.6c-5.6 0-6.3-4.2-9.1-4.9q-2.8-.7-4.9 2.1Z"/></svg>
                        <p>TAILWINDCSS</p>
                    </div>
                    <div class='thumbnail'>
                        <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="100" height="100" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><path d="m20 4l-2 14.5l-6 2l-6-2L4 4z"/><path d="M7.5 8h3v8l-2-1m8-7H14a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h1.423a.5.5 0 0 1 .495.57L15.5 15.5l-2 .5"/></g></svg>
                        <p>JAVASCRIPT</p>
                    </div>
                    <div class='thumbnail'>
                        <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="100" height="100" preserveAspectRatio="xMidYMid meet" viewBox="0 0 512 314"><defs><linearGradient id="svgIDb" x1="68.188%" x2="27.823%" y1="17.487%" y2="89.755%"><stop offset="0%" stop-color="#41873F"/><stop offset="32.88%" stop-color="#418B3D"/><stop offset="63.52%" stop-color="#419637"/><stop offset="93.19%" stop-color="#3FA92D"/><stop offset="100%" stop-color="#3FAE2A"/></linearGradient><linearGradient id="svgIDd" x1="43.277%" x2="159.245%" y1="55.169%" y2="-18.306%"><stop offset="13.76%" stop-color="#41873F"/><stop offset="40.32%" stop-color="#54A044"/><stop offset="71.36%" stop-color="#66B848"/><stop offset="90.81%" stop-color="#6CC04A"/></linearGradient><linearGradient id="svgIDe" x1="-4413.77%" x2="5327.93%" y1="13.43%" y2="13.43%"><stop offset="9.192%" stop-color="#6CC04A"/><stop offset="28.64%" stop-color="#66B848"/><stop offset="59.68%" stop-color="#54A044"/><stop offset="86.24%" stop-color="#41873F"/></linearGradient><linearGradient id="svgIDf" x1="-4.389%" x2="101.499%" y1="49.997%" y2="49.997%"><stop offset="9.192%" stop-color="#6CC04A"/><stop offset="28.64%" stop-color="#66B848"/><stop offset="59.68%" stop-color="#54A044"/><stop offset="86.24%" stop-color="#41873F"/></linearGradient><linearGradient id="svgIDg" x1="-9713.77%" x2="27.93%" y1="36.21%" y2="36.21%"><stop offset="9.192%" stop-color="#6CC04A"/><stop offset="28.64%" stop-color="#66B848"/><stop offset="59.68%" stop-color="#54A044"/><stop offset="86.24%" stop-color="#41873F"/></linearGradient><linearGradient id="svgIDh" x1="-103.861%" x2="100.797%" y1="50.275%" y2="50.275%"><stop offset="9.192%" stop-color="#6CC04A"/><stop offset="28.64%" stop-color="#66B848"/><stop offset="59.68%" stop-color="#54A044"/><stop offset="86.24%" stop-color="#41873F"/></linearGradient><linearGradient id="svgIDi" x1="130.613%" x2="4.393%" y1="-211.069%" y2="201.605%"><stop offset="0%" stop-color="#41873F"/><stop offset="32.88%" stop-color="#418B3D"/><stop offset="63.52%" stop-color="#419637"/><stop offset="93.19%" stop-color="#3FA92D"/><stop offset="100%" stop-color="#3FAE2A"/></linearGradient><path id="svgIDa" d="M57.903 1.85a5.957 5.957 0 0 0-5.894 0L3.352 29.933c-1.85 1.04-2.89 3.005-2.89 5.085v56.286c0 2.08 1.156 4.045 2.89 5.085l48.657 28.085a5.957 5.957 0 0 0 5.894 0l48.658-28.085c1.849-1.04 2.89-3.005 2.89-5.085V35.019c0-2.08-1.157-4.045-2.89-5.085L57.903 1.85Z"/></defs><g fill="none"><path fill="#539E43" d="M253.11 313.094c-1.733 0-3.351-.462-4.854-1.271l-15.371-9.13c-2.312-1.272-1.156-1.734-.462-1.965c3.12-1.04 3.698-1.272 6.934-3.12c.347-.232.81-.116 1.156.115l11.789 7.05c.462.231 1.04.231 1.386 0l46.115-26.698c.462-.231.694-.694.694-1.271v-53.28c0-.579-.232-1.04-.694-1.272l-46.115-26.582c-.462-.232-1.04-.232-1.386 0l-46.115 26.582c-.462.231-.694.809-.694 1.271v53.28c0 .463.232 1.04.694 1.272l12.598 7.281c6.819 3.467 11.095-.578 11.095-4.623v-52.587c0-.693.578-1.387 1.387-1.387h5.894c.694 0 1.387.578 1.387 1.387v52.587c0 9.13-4.97 14.447-13.638 14.447c-2.658 0-4.738 0-10.633-2.89l-12.135-6.934c-3.005-1.733-4.854-4.97-4.854-8.437v-53.28c0-3.467 1.849-6.704 4.854-8.437l46.114-26.698c2.89-1.618 6.82-1.618 9.709 0l46.114 26.698c3.005 1.733 4.855 4.97 4.855 8.437v53.28c0 3.467-1.85 6.704-4.855 8.437l-46.114 26.698c-1.503.694-3.236 1.04-4.854 1.04Zm14.216-36.637c-20.225 0-24.386-9.246-24.386-17.105c0-.694.578-1.387 1.387-1.387h6.01c.693 0 1.271.462 1.271 1.156c.925 6.125 3.583 9.13 15.834 9.13c9.708 0 13.87-2.196 13.87-7.397c0-3.005-1.157-5.2-16.297-6.703c-12.598-1.272-20.457-4.045-20.457-14.1c0-9.362 7.86-14.91 21.035-14.91c14.793 0 22.075 5.086 23 16.18c0 .348-.116.694-.347 1.041c-.232.231-.578.462-.925.462h-6.01c-.578 0-1.156-.462-1.271-1.04c-1.387-6.356-4.97-8.437-14.447-8.437c-10.633 0-11.905 3.699-11.905 6.472c0 3.352 1.503 4.392 15.834 6.241c14.216 1.85 20.92 4.508 20.92 14.447c-.116 10.171-8.437 15.95-23.116 15.95Z"/><path fill="#333" d="M110.028 104.712c0-2.08-1.156-4.046-3.005-5.086l-49.004-28.2c-.81-.463-1.734-.694-2.658-.81h-.463c-.924 0-1.849.347-2.658.81l-49.004 28.2c-1.85 1.04-3.005 3.005-3.005 5.086l.116 75.817c0 1.04.578 2.08 1.502 2.543c.925.578 2.08.578 2.89 0l29.125-16.643c1.849-1.04 3.005-3.005 3.005-5.085v-35.482c0-2.08 1.155-4.045 3.005-5.085l12.366-7.166c.925-.578 1.965-.81 3.005-.81c1.04 0 2.08.232 2.89.81l12.366 7.166c1.85 1.04 3.005 3.004 3.005 5.085v35.482c0 2.08 1.156 4.045 3.005 5.085l29.125 16.643a2.82 2.82 0 0 0 3.005 0c.925-.463 1.503-1.503 1.503-2.543l-.116-75.817ZM345.571.347c-.924-.463-2.08-.463-2.89 0c-.924.578-1.502 1.502-1.502 2.542v75.125c0 .693-.346 1.386-1.04 1.849c-.693.346-1.387.346-2.08 0l-12.251-7.05a5.957 5.957 0 0 0-5.895 0l-49.004 28.316c-1.849 1.04-3.005 3.005-3.005 5.085v56.516c0 2.08 1.156 4.046 3.005 5.086l49.004 28.316a5.957 5.957 0 0 0 5.895 0l49.004-28.316c1.849-1.04 3.005-3.005 3.005-5.086V21.844c0-2.196-1.156-4.16-3.005-5.201L345.572.347Zm-4.507 143.776c0 .578-.231 1.04-.694 1.271l-16.758 9.708a1.714 1.714 0 0 1-1.503 0l-16.758-9.708c-.463-.231-.694-.809-.694-1.271v-19.417c0-.578.231-1.04.694-1.271l16.758-9.709a1.714 1.714 0 0 1 1.503 0l16.758 9.709c.463.23.694.809.694 1.271v19.417Zm167.584-19.879c1.85-1.04 2.89-3.005 2.89-5.086v-13.753c0-2.08-1.156-4.045-2.89-5.085l-48.657-28.2a5.957 5.957 0 0 0-5.895 0l-49.004 28.315c-1.85 1.04-3.005 3.005-3.005 5.085v56.517c0 2.08 1.156 4.045 3.005 5.085l48.657 27.738c1.85 1.04 4.046 1.04 5.78 0L489 178.45c.925-.463 1.503-1.503 1.503-2.543c0-1.04-.578-2.08-1.503-2.543l-49.235-28.316c-.925-.578-1.503-1.502-1.503-2.542v-17.683c0-1.04.578-2.08 1.503-2.543l15.371-8.784a2.821 2.821 0 0 1 3.005 0l15.372 8.784c.925.578 1.502 1.502 1.502 2.543v13.869c0 1.04.578 2.08 1.503 2.542a2.82 2.82 0 0 0 3.005 0l29.125-16.99Z"/><path fill="#539E43" d="M456.292 121.585a1.05 1.05 0 0 1 1.156 0l9.362 5.432c.346.232.577.578.577 1.04v10.865c0 .462-.23.809-.577 1.04l-9.362 5.432a1.05 1.05 0 0 1-1.156 0l-9.361-5.432c-.347-.231-.578-.578-.578-1.04v-10.864c0-.463.23-.81.578-1.04l9.361-5.433Z"/><g transform="translate(134.068 70.501)"><mask id="svgIDc" fill="#fff"><use href="#svgIDa"/></mask><use fill="url(#svgIDb)" href="#svgIDa"/><g mask="url(#svgIDc)"><path d="M51.893 1.85L3.121 29.933C1.27 30.974 0 32.94 0 35.02v56.286c0 1.387.578 2.658 1.502 3.698L56.285 1.156c-1.387-.231-3.005-.116-4.392.693Zm4.739 123.203c.462-.116.925-.347 1.387-.578l48.773-28.085c1.85-1.04 3.005-3.005 3.005-5.085V35.019c0-1.502-.694-3.005-1.734-4.045l-51.43 94.079Z"/><path fill="url(#svgIDd)" d="M106.676 29.934L57.788 1.85a8.025 8.025 0 0 0-1.503-.578L1.502 95.12a6.082 6.082 0 0 0 1.619 1.387l48.888 28.085c1.387.809 3.005 1.04 4.507.577l51.432-94.078c-.347-.462-.81-.81-1.272-1.156Z"/></g><g mask="url(#svgIDc)"><path d="M109.797 91.305V35.019c0-2.08-1.271-4.045-3.12-5.085L57.786 1.85a5.106 5.106 0 0 0-1.848-.693l53.511 91.42c.231-.347.347-.809.347-1.271ZM3.12 29.934C1.272 30.974 0 32.94 0 35.02v56.286c0 2.08 1.387 4.045 3.12 5.085l48.889 28.085c1.156.693 2.427.925 3.814.693L3.467 29.818l-.346.116Z"/><path fill="url(#svgIDe)" fill-rule="evenodd" d="m50.391.809l-.693.347h.924l-.231-.347Z" transform="translate(0 -9.246)"/><path fill="url(#svgIDf)" fill-rule="evenodd" d="M106.792 105.636c1.387-.809 2.427-2.196 2.89-3.698L56.053 10.402c-1.387-.231-2.89-.116-4.16.693L3.351 39.065l52.355 95.465a8.057 8.057 0 0 0 2.196-.693l48.889-28.2Z" transform="translate(0 -9.246)"/><path fill="url(#svgIDg)" fill-rule="evenodd" d="m111.3 104.712l-.347-.578v.809l.346-.231Z" transform="translate(0 -9.246)"/><path fill="url(#svgIDh)" fill-rule="evenodd" d="m106.792 105.636l-48.773 28.085a6.973 6.973 0 0 1-2.196.693l.925 1.734l54.089-31.32v-.694l-1.387-2.312c-.231 1.618-1.271 3.005-2.658 3.814Z" transform="translate(0 -9.246)"/><path fill="url(#svgIDi)" fill-rule="evenodd" d="m106.792 105.636l-48.773 28.085a6.973 6.973 0 0 1-2.196.693l.925 1.734l54.089-31.32v-.694l-1.387-2.312c-.231 1.618-1.271 3.005-2.658 3.814Z" transform="translate(0 -9.246)"/></g></g></g></svg>
                        <p>NODEJS</p>
                    </div>
                    <div class='thumbnail'>
                        <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="100" height="100" preserveAspectRatio="xMidYMid meet" viewBox="0 0 32 32"><circle cx="16" cy="15.974" r="2.5" fill="#00d8ff"/><path fill="#00d8ff" d="M16 21.706a28.385 28.385 0 0 1-8.88-1.2a11.3 11.3 0 0 1-3.657-1.958A3.543 3.543 0 0 1 2 15.974c0-1.653 1.816-3.273 4.858-4.333A28.755 28.755 0 0 1 16 10.293a28.674 28.674 0 0 1 9.022 1.324a11.376 11.376 0 0 1 3.538 1.866A3.391 3.391 0 0 1 30 15.974c0 1.718-2.03 3.459-5.3 4.541a28.8 28.8 0 0 1-8.7 1.191Zm0-10.217a27.948 27.948 0 0 0-8.749 1.282c-2.8.977-4.055 2.313-4.055 3.2c0 .928 1.349 2.387 4.311 3.4A27.21 27.21 0 0 0 16 20.51a27.6 27.6 0 0 0 8.325-1.13C27.4 18.361 28.8 16.9 28.8 15.974a2.327 2.327 0 0 0-1.01-1.573a10.194 10.194 0 0 0-3.161-1.654A27.462 27.462 0 0 0 16 11.489Z"/><path fill="#00d8ff" d="M10.32 28.443a2.639 2.639 0 0 1-1.336-.328c-1.432-.826-1.928-3.208-1.327-6.373a28.755 28.755 0 0 1 3.4-8.593a28.676 28.676 0 0 1 5.653-7.154a11.376 11.376 0 0 1 3.384-2.133a3.391 3.391 0 0 1 2.878 0c1.489.858 1.982 3.486 1.287 6.859a28.806 28.806 0 0 1-3.316 8.133a28.385 28.385 0 0 1-5.476 7.093a11.3 11.3 0 0 1-3.523 2.189a4.926 4.926 0 0 1-1.624.307Zm1.773-14.7a27.948 27.948 0 0 0-3.26 8.219c-.553 2.915-.022 4.668.75 5.114c.8.463 2.742.024 5.1-2.036a27.209 27.209 0 0 0 5.227-6.79a27.6 27.6 0 0 0 3.181-7.776c.654-3.175.089-5.119-.713-5.581a2.327 2.327 0 0 0-1.868.089A10.194 10.194 0 0 0 17.5 6.9a27.464 27.464 0 0 0-5.4 6.849Z"/><path fill="#00d8ff" d="M21.677 28.456c-1.355 0-3.076-.82-4.868-2.361a28.756 28.756 0 0 1-5.747-7.237a28.676 28.676 0 0 1-3.374-8.471a11.376 11.376 0 0 1-.158-4A3.391 3.391 0 0 1 8.964 3.9c1.487-.861 4.01.024 6.585 2.31a28.8 28.8 0 0 1 5.39 6.934a28.384 28.384 0 0 1 3.41 8.287a11.3 11.3 0 0 1 .137 4.146a3.543 3.543 0 0 1-1.494 2.555a2.59 2.59 0 0 1-1.315.324Zm-9.58-10.2a27.949 27.949 0 0 0 5.492 6.929c2.249 1.935 4.033 2.351 4.8 1.9c.8-.465 1.39-2.363.782-5.434A27.212 27.212 0 0 0 19.9 13.74a27.6 27.6 0 0 0-5.145-6.64c-2.424-2.152-4.39-2.633-5.191-2.169a2.327 2.327 0 0 0-.855 1.662a10.194 10.194 0 0 0 .153 3.565a27.465 27.465 0 0 0 3.236 8.1Z"/></svg>
                        <p>REACTJS</p>
                    </div>
                    <div class='thumbnail'>
                        <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="100" height="100" preserveAspectRatio="xMidYMid meet" viewBox="0 0 256 256"><path d="M119.617.069c-.55.05-2.302.225-3.879.35c-36.36 3.278-70.419 22.894-91.99 53.044c-12.012 16.764-19.694 35.78-22.597 55.922C.125 116.415 0 118.492 0 128.025c0 9.533.125 11.61 1.151 18.64c6.957 48.065 41.165 88.449 87.56 103.411c8.309 2.678 17.067 4.504 27.027 5.605c3.879.425 20.645.425 24.524 0c17.192-1.902 31.756-6.155 46.12-13.486c2.202-1.126 2.628-1.426 2.327-1.677c-.2-.15-9.584-12.735-20.845-27.948l-20.47-27.648l-25.65-37.956c-14.114-20.868-25.725-37.932-25.825-37.932c-.1-.025-.2 16.84-.25 37.431c-.076 36.055-.1 37.506-.551 38.357c-.65 1.226-1.151 1.727-2.202 2.277c-.801.4-1.502.475-5.28.475h-4.33l-1.15-.725a4.679 4.679 0 0 1-1.677-1.827l-.526-1.126l.05-50.166l.075-50.192l.776-.976c.4-.525 1.251-1.2 1.852-1.526c1.026-.5 1.426-.55 5.755-.55c5.105 0 5.956.2 7.282 1.651c.376.4 14.264 21.318 30.88 46.514c16.617 25.195 39.34 59.599 50.5 76.488l20.27 30.7l1.026-.675c9.084-5.905 18.693-14.312 26.3-23.07c16.191-18.59 26.626-41.258 30.13-65.428c1.026-7.031 1.151-9.108 1.151-18.64c0-9.534-.125-11.61-1.151-18.641c-6.957-48.065-41.165-88.449-87.56-103.411c-8.184-2.652-16.892-4.479-26.652-5.58c-2.402-.25-18.943-.525-21.02-.325Zm52.401 77.414c1.201.6 2.177 1.752 2.527 2.953c.2.65.25 14.562.2 45.913l-.074 44.987l-7.933-12.16l-7.958-12.16v-32.702c0-21.143.1-33.028.25-33.603c.4-1.401 1.277-2.502 2.478-3.153c1.026-.525 1.401-.575 5.33-.575c3.704 0 4.354.05 5.18.5Z"/></svg>
                        <p>NEXTJS</p>
                    </div>
                    <div class='thumbnail'>
                        <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="100" height="100" preserveAspectRatio="xMidYMid meet" viewBox="0 0 256 221"><path fill="#41B883" d="M204.8 0H256L128 220.8L0 0h97.92L128 51.2L157.44 0h47.36Z"/><path fill="#41B883" d="m0 0l128 220.8L256 0h-51.2L128 132.48L50.56 0H0Z"/><path fill="#35495E" d="M50.56 0L128 133.12L204.8 0h-47.36L128 51.2L97.92 0H50.56Z"/></svg>
                        <p>VUEJS</p>
                    </div>
                    <div class='thumbnail'>
                        <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="100" height="100" preserveAspectRatio="xMidYMid meet" viewBox="0 0 256 257"><defs><linearGradient id="svgIDa" x1="-.828%" x2="57.636%" y1="7.652%" y2="78.411%"><stop offset="0%" stop-color="#41D1FF"/><stop offset="100%" stop-color="#BD34FE"/></linearGradient><linearGradient id="svgIDb" x1="43.376%" x2="50.316%" y1="2.242%" y2="89.03%"><stop offset="0%" stop-color="#FFEA83"/><stop offset="8.333%" stop-color="#FFDD35"/><stop offset="100%" stop-color="#FFA800"/></linearGradient></defs><path fill="url(#svgIDa)" d="M255.153 37.938L134.897 252.976c-2.483 4.44-8.862 4.466-11.382.048L.875 37.958c-2.746-4.814 1.371-10.646 6.827-9.67l120.385 21.517a6.537 6.537 0 0 0 2.322-.004l117.867-21.483c5.438-.991 9.574 4.796 6.877 9.62Z"/><path fill="url(#svgIDb)" d="M185.432.063L96.44 17.501a3.268 3.268 0 0 0-2.634 3.014l-5.474 92.456a3.268 3.268 0 0 0 3.997 3.378l24.777-5.718c2.318-.535 4.413 1.507 3.936 3.838l-7.361 36.047c-.495 2.426 1.782 4.5 4.151 3.78l15.304-4.649c2.372-.72 4.652 1.36 4.15 3.788l-11.698 56.621c-.732 3.542 3.979 5.473 5.943 2.437l1.313-2.028l72.516-144.72c1.215-2.423-.88-5.186-3.54-4.672l-25.505 4.922c-2.396.462-4.435-1.77-3.759-4.114l16.646-57.705c.677-2.35-1.37-4.583-3.769-4.113Z"/></svg>
                        <p>VITEJS</p>
                    </div>
                    <div class='thumbnail'>
                        <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="100" height="100" preserveAspectRatio="xMidYMid meet" viewBox="0 0 15 15"><path fill="currentColor" fill-rule="evenodd" d="M0 7.5a7.5 7.5 0 1 1 15 0a7.5 7.5 0 0 1-15 0Zm3.305-1.631a4.502 4.502 0 0 1 7.409-1.519l.714-.7a5.502 5.502 0 0 0-9.176 2.2l-.09.29l6.699 6.699l.289-.09a5.504 5.504 0 0 0 3.823-4.7l.054-.549H9v1h2.889a4.51 4.51 0 0 1-2.758 3.195L3.305 5.87Zm2.841 6.985l-4-4l.708-.708l4 4l-.708.708Z" clip-rule="evenodd"/></svg>
                        <p>GATSBYJS</p>
                    </div>
                    <div class='thumbnail'>
                        <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="100" height="100" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="currentColor" d="M17.193 9.555c-1.264-5.58-4.252-7.414-4.573-8.115c-.28-.394-.53-.954-.735-1.44c-.036.495-.055.685-.523 1.184c-.723.566-4.438 3.682-4.74 10.02c-.282 5.912 4.27 9.435 4.888 9.884l.07.05A73.49 73.49 0 0 1 11.91 24h.481a28.48 28.48 0 0 1 .51-3.07c.417-.296.604-.463.85-.693a11.342 11.342 0 0 0 3.639-8.464c.01-.814-.103-1.662-.197-2.218zm-5.336 8.195s0-8.291.275-8.29c.213 0 .49 10.695.49 10.695c-.381-.045-.765-1.76-.765-2.405z"/></svg>
                        <p>MONGODB</p>
                    </div>
                    <div class='thumbnail'>
                        <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="100" height="100" preserveAspectRatio="xMidYMid meet" viewBox="0 0 256 351"><defs><filter id="svgIDb" width="200%" height="200%" x="-50%" y="-50%" filterUnits="objectBoundingBox"><feGaussianBlur in="SourceAlpha" result="shadowBlurInner1" stdDeviation="17.5"/><feOffset in="shadowBlurInner1" result="shadowOffsetInner1"/><feComposite in="shadowOffsetInner1" in2="SourceAlpha" k2="-1" k3="1" operator="arithmetic" result="shadowInnerInner1"/><feColorMatrix in="shadowInnerInner1" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.06 0"/></filter><filter id="svgIDd" width="200%" height="200%" x="-50%" y="-50%" filterUnits="objectBoundingBox"><feGaussianBlur in="SourceAlpha" result="shadowBlurInner1" stdDeviation="3.5"/><feOffset dx="1" dy="-9" in="shadowBlurInner1" result="shadowOffsetInner1"/><feComposite in="shadowOffsetInner1" in2="SourceAlpha" k2="-1" k3="1" operator="arithmetic" result="shadowInnerInner1"/><feColorMatrix in="shadowInnerInner1" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.09 0"/></filter><path id="svgIDa" d="m1.253 280.732l1.605-3.131l99.353-188.518l-44.15-83.475C54.392-1.283 45.074.474 43.87 8.188L1.253 280.732Z"/><path id="svgIDc" d="m134.417 148.974l32.039-32.812l-32.039-61.007c-3.042-5.791-10.433-6.398-13.443-.59l-17.705 34.109l-.53 1.744l31.678 58.556Z"/></defs><path fill="#FFC24A" d="m0 282.998l2.123-2.972L102.527 89.512l.212-2.017L58.48 4.358C54.77-2.606 44.33-.845 43.114 6.951L0 282.998Z"/><use fill="#FFA712" fill-rule="evenodd" href="#svgIDa"/><use filter="url(#svgIDb)" href="#svgIDa"/><path fill="#F4BD62" d="m135.005 150.38l32.955-33.75l-32.965-62.93c-3.129-5.957-11.866-5.975-14.962 0L102.42 87.287v2.86l32.584 60.233Z"/><use fill="#FFA50E" fill-rule="evenodd" href="#svgIDc"/><use filter="url(#svgIDd)" href="#svgIDc"/><path fill="#F6820C" d="m0 282.998l.962-.968l3.496-1.42l128.477-128l1.628-4.431l-32.05-61.074z"/><path fill="#FDE068" d="m139.121 347.551l116.275-64.847l-33.204-204.495c-1.039-6.398-8.888-8.927-13.468-4.34L0 282.998l115.608 64.548a24.126 24.126 0 0 0 23.513.005"/><path fill="#FCCA3F" d="M254.354 282.16L221.402 79.218c-1.03-6.35-7.558-8.977-12.103-4.424L1.29 282.6l114.339 63.908a23.943 23.943 0 0 0 23.334.006l115.392-64.355Z"/><path fill="#EEAB37" d="M139.12 345.64a24.126 24.126 0 0 1-23.512-.005L.931 282.015l-.93.983l115.607 64.548a24.126 24.126 0 0 0 23.513.005l116.275-64.847l-.285-1.752l-115.99 64.689Z"/></svg>
                        <p>FIREBASE</p>
                    </div>
                    <div class='thumbnail'>
                        <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="100" height="100" preserveAspectRatio="xMidYMid meet" viewBox="0 0 512 512"><path fill="#0080FF" d="M87 481.8h73.7v-73.6H87zM25.4 346.6v61.6H87v-61.6zm466.2-169.7c-23-74.2-82.4-133.3-156.6-156.6C164.9-32.8 8 93.7 8 255.9h95.8c0-101.8 101-180.5 208.1-141.7c39.7 14.3 71.5 46.1 85.8 85.7c39.1 107-39.7 207.8-141.4 208v.3h-.3V504c162.6 0 288.8-156.8 235.6-327.1zm-235.3 231v-95.3h-95.6v95.6H256v-.3z"/></svg>
                        <p>DIGITAL OCEAN</p>
                    </div>
                    <div class='thumbnail'>
                        <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="100" height="100" preserveAspectRatio="xMidYMid meet" viewBox="0 0 32 32"><path fill="#ffda44" d="M8.562 15.256A21.159 21.159 0 0 0 16 16.449a21.159 21.159 0 0 0 7.438-1.194c1.864-.727 2.525-1.535 2.525-2V9.7a10.357 10.357 0 0 1-2.084 1.076A22.293 22.293 0 0 1 16 12.078a22.36 22.36 0 0 1-7.879-1.3A10.28 10.28 0 0 1 6.037 9.7v3.55c0 .474.663 1.278 2.525 2.006Zm0 6.705a15.611 15.611 0 0 0 2.6.741a24.9 24.9 0 0 0 4.838.453a24.9 24.9 0 0 0 4.838-.452a15.614 15.614 0 0 0 2.6-.741c1.864-.727 2.525-1.535 2.525-2v-3.39a10.706 10.706 0 0 1-1.692.825A23.49 23.49 0 0 1 16 18.74a23.49 23.49 0 0 1-8.271-1.348a10.829 10.829 0 0 1-1.692-.825v3.393c0 .466.663 1.271 2.525 2.001ZM16 30c5.5 0 9.963-1.744 9.963-3.894v-2.837a10.5 10.5 0 0 1-1.535.762l-.157.063A23.487 23.487 0 0 1 16 25.445a23.422 23.422 0 0 1-8.271-1.351c-.054-.02-.106-.043-.157-.063a10.5 10.5 0 0 1-1.535-.762v2.837C6.037 28.256 10.5 30 16 30Z"/><ellipse cx="16" cy="5.894" fill="#ffda44" rx="9.963" ry="3.894"/></svg>
                        <p>SQL</p>
                    </div>
                    <div class='thumbnail'>
                        <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="100" height="100" preserveAspectRatio="xMidYMid meet" viewBox="0 0 256 264"><path d="M255.008 158.086c-1.535-4.649-5.556-7.887-10.756-8.664c-2.452-.366-5.26-.21-8.583.475c-5.792 1.195-10.089 1.65-13.225 1.738c11.837-19.985 21.462-42.775 27.003-64.228c8.96-34.689 4.172-50.492-1.423-57.64C233.217 10.847 211.614.683 185.552.372c-13.903-.17-26.108 2.575-32.475 4.549c-5.928-1.046-12.302-1.63-18.99-1.738c-12.537-.2-23.614 2.533-33.079 8.15c-5.24-1.772-13.65-4.27-23.362-5.864c-22.842-3.75-41.252-.828-54.718 8.685C6.622 25.672-.937 45.684.461 73.634c.444 8.874 5.408 35.874 13.224 61.48c4.492 14.718 9.282 26.94 14.237 36.33c7.027 13.315 14.546 21.156 22.987 23.972c4.731 1.576 13.327 2.68 22.368-4.85c1.146 1.388 2.675 2.767 4.704 4.048c2.577 1.625 5.728 2.953 8.875 3.74c11.341 2.835 21.964 2.126 31.027-1.848c.056 1.612.099 3.152.135 4.482c.06 2.157.12 4.272.199 6.25c.537 13.374 1.447 23.773 4.143 31.049c.148.4.347 1.01.557 1.657c1.345 4.118 3.594 11.012 9.316 16.411c5.925 5.593 13.092 7.308 19.656 7.308c3.292 0 6.433-.432 9.188-1.022c9.82-2.105 20.973-5.311 29.041-16.799c7.628-10.86 11.336-27.217 12.007-52.99c.087-.729.167-1.425.244-2.088l.16-1.362l1.797.158l.463.031c10.002.456 22.232-1.665 29.743-5.154c5.935-2.754 24.954-12.795 20.476-26.351"/><path fill="#336791" d="M237.906 160.722c-29.74 6.135-31.785-3.934-31.785-3.934c31.4-46.593 44.527-105.736 33.2-120.211c-30.904-39.485-84.399-20.811-85.292-20.327l-.287.052c-5.876-1.22-12.451-1.946-19.842-2.067c-13.456-.22-23.664 3.528-31.41 9.402c0 0-95.43-39.314-90.991 49.444c.944 18.882 27.064 142.873 58.218 105.422c11.387-13.695 22.39-25.274 22.39-25.274c5.464 3.63 12.006 5.482 18.864 4.817l.533-.452c-.166 1.7-.09 3.363.213 5.332c-8.026 8.967-5.667 10.541-21.711 13.844c-16.235 3.346-6.698 9.302-.471 10.86c7.549 1.887 25.013 4.561 36.813-11.958l-.47 1.885c3.144 2.519 5.352 16.383 4.982 28.952c-.37 12.568-.617 21.197 1.86 27.937c2.479 6.74 4.948 21.905 26.04 17.386c17.623-3.777 26.756-13.564 28.027-29.89c.901-11.606 2.942-9.89 3.07-20.267l1.637-4.912c1.887-15.733.3-20.809 11.157-18.448l2.64.232c7.99.363 18.45-1.286 24.589-4.139c13.218-6.134 21.058-16.377 8.024-13.686h.002"/><path fill="#FFF" d="M108.076 81.525c-2.68-.373-5.107-.028-6.335.902c-.69.523-.904 1.129-.962 1.546c-.154 1.105.62 2.327 1.096 2.957c1.346 1.784 3.312 3.01 5.258 3.28c.282.04.563.058.842.058c3.245 0 6.196-2.527 6.456-4.392c.325-2.336-3.066-3.893-6.355-4.35m88.784.073c-.256-1.831-3.514-2.353-6.606-1.923c-3.088.43-6.082 1.824-5.832 3.659c.2 1.427 2.777 3.863 5.827 3.863c.258 0 .518-.017.78-.054c2.036-.282 3.53-1.575 4.24-2.32c1.08-1.136 1.706-2.402 1.591-3.225"/><path fill="#FFF" d="M247.802 160.025c-1.134-3.429-4.784-4.532-10.848-3.28c-18.005 3.716-24.453 1.142-26.57-.417c13.995-21.32 25.508-47.092 31.719-71.137c2.942-11.39 4.567-21.968 4.7-30.59c.147-9.463-1.465-16.417-4.789-20.665c-13.402-17.125-33.072-26.311-56.882-26.563c-16.369-.184-30.199 4.005-32.88 5.183c-5.646-1.404-11.801-2.266-18.502-2.376c-12.288-.199-22.91 2.743-31.704 8.74c-3.82-1.422-13.692-4.811-25.765-6.756c-20.872-3.36-37.458-.814-49.294 7.571c-14.123 10.006-20.643 27.892-19.38 53.16c.425 8.501 5.269 34.653 12.913 59.698c10.062 32.964 21 51.625 32.508 55.464c1.347.449 2.9.763 4.613.763c4.198 0 9.345-1.892 14.7-8.33a529.832 529.832 0 0 1 20.261-22.926c4.524 2.428 9.494 3.784 14.577 3.92c.01.133.023.266.035.398a117.66 117.66 0 0 0-2.57 3.175c-3.522 4.471-4.255 5.402-15.592 7.736c-3.225.666-11.79 2.431-11.916 8.435c-.136 6.56 10.125 9.315 11.294 9.607c4.074 1.02 7.999 1.523 11.742 1.523c9.103 0 17.114-2.992 23.516-8.781c-.197 23.386.778 46.43 3.586 53.451c2.3 5.748 7.918 19.795 25.664 19.794c2.604 0 5.47-.303 8.623-.979c18.521-3.97 26.564-12.156 29.675-30.203c1.665-9.645 4.522-32.676 5.866-45.03c2.836.885 6.487 1.29 10.434 1.289c8.232 0 17.731-1.749 23.688-4.514c6.692-3.108 18.768-10.734 16.578-17.36Zm-44.106-83.48c-.061 3.647-.563 6.958-1.095 10.414c-.573 3.717-1.165 7.56-1.314 12.225c-.147 4.54.42 9.26.968 13.825c1.108 9.22 2.245 18.712-2.156 28.078a36.508 36.508 0 0 1-1.95-4.009c-.547-1.326-1.735-3.456-3.38-6.404c-6.399-11.476-21.384-38.35-13.713-49.316c2.285-3.264 8.084-6.62 22.64-4.813Zm-17.644-61.787c21.334.471 38.21 8.452 50.158 23.72c9.164 11.711-.927 64.998-30.14 110.969a171.33 171.33 0 0 0-.886-1.117l-.37-.462c7.549-12.467 6.073-24.802 4.759-35.738c-.54-4.488-1.05-8.727-.92-12.709c.134-4.22.692-7.84 1.232-11.34c.663-4.313 1.338-8.776 1.152-14.037c.139-.552.195-1.204.122-1.978c-.475-5.045-6.235-20.144-17.975-33.81c-6.422-7.475-15.787-15.84-28.574-21.482c5.5-1.14 13.021-2.203 21.442-2.016ZM66.674 175.778c-5.9 7.094-9.974 5.734-11.314 5.288c-8.73-2.912-18.86-21.364-27.791-50.624c-7.728-25.318-12.244-50.777-12.602-57.916c-1.128-22.578 4.345-38.313 16.268-46.769c19.404-13.76 51.306-5.524 64.125-1.347c-.184.182-.376.352-.558.537c-21.036 21.244-20.537 57.54-20.485 59.759c-.002.856.07 2.068.168 3.735c.362 6.105 1.036 17.467-.764 30.334c-1.672 11.957 2.014 23.66 10.111 32.109a36.275 36.275 0 0 0 2.617 2.468c-3.604 3.86-11.437 12.396-19.775 22.426Zm22.479-29.993c-6.526-6.81-9.49-16.282-8.133-25.99c1.9-13.592 1.199-25.43.822-31.79c-.053-.89-.1-1.67-.127-2.285c3.073-2.725 17.314-10.355 27.47-8.028c4.634 1.061 7.458 4.217 8.632 9.645c6.076 28.103.804 39.816-3.432 49.229c-.873 1.939-1.698 3.772-2.402 5.668l-.546 1.466c-1.382 3.706-2.668 7.152-3.465 10.424c-6.938-.02-13.687-2.984-18.819-8.34Zm1.065 37.9c-2.026-.506-3.848-1.385-4.917-2.114c.893-.42 2.482-.992 5.238-1.56c13.337-2.745 15.397-4.683 19.895-10.394c1.031-1.31 2.2-2.794 3.819-4.602l.002-.002c2.411-2.7 3.514-2.242 5.514-1.412c1.621.67 3.2 2.702 3.84 4.938c.303 1.056.643 3.06-.47 4.62c-9.396 13.156-23.088 12.987-32.921 10.526Zm69.799 64.952c-16.316 3.496-22.093-4.829-25.9-14.346c-2.457-6.144-3.665-33.85-2.808-64.447c.011-.407-.047-.8-.159-1.17a15.444 15.444 0 0 0-.456-2.162c-1.274-4.452-4.379-8.176-8.104-9.72c-1.48-.613-4.196-1.738-7.46-.903c.696-2.868 1.903-6.107 3.212-9.614l.549-1.475c.618-1.663 1.394-3.386 2.214-5.21c4.433-9.848 10.504-23.337 3.915-53.81c-2.468-11.414-10.71-16.988-23.204-15.693c-7.49.775-14.343 3.797-17.761 5.53c-.735.372-1.407.732-2.035 1.082c.954-11.5 4.558-32.992 18.04-46.59c8.489-8.56 19.794-12.788 33.568-12.56c27.14.444 44.544 14.372 54.366 25.979c8.464 10.001 13.047 20.076 14.876 25.51c-13.755-1.399-23.11 1.316-27.852 8.096c-10.317 14.748 5.644 43.372 13.315 57.129c1.407 2.521 2.621 4.7 3.003 5.626c2.498 6.054 5.732 10.096 8.093 13.046c.724.904 1.426 1.781 1.96 2.547c-4.166 1.201-11.649 3.976-10.967 17.847c-.55 6.96-4.461 39.546-6.448 51.059c-2.623 15.21-8.22 20.875-23.957 24.25Zm68.104-77.936c-4.26 1.977-11.389 3.46-18.161 3.779c-7.48.35-11.288-.838-12.184-1.569c-.42-8.644 2.797-9.547 6.202-10.503c.535-.15 1.057-.297 1.561-.473c.313.255.656.508 1.032.756c6.012 3.968 16.735 4.396 31.874 1.271l.166-.033c-2.042 1.909-5.536 4.471-10.49 6.772Z"/></svg>
                        <p>POSTGRESQL</p>
                    </div>
                    <div class='thumbnail'>
                        <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="100" height="100" preserveAspectRatio="xMidYMid meet" viewBox="0 0 256 252"><path fill="#00546B" d="M235.648 194.212c-13.918-.347-24.705 1.045-33.752 4.872c-2.61 1.043-6.786 1.044-7.134 4.35c1.392 1.392 1.566 3.654 2.784 5.567c2.09 3.479 5.741 8.177 9.047 10.614c3.653 2.783 7.308 5.566 11.134 8.002c6.786 4.176 14.442 6.611 21.053 10.787c3.829 2.434 7.654 5.568 11.482 8.177c1.914 1.39 3.131 3.654 5.568 4.523v-.521c-1.219-1.567-1.567-3.828-2.784-5.568c-1.738-1.74-3.48-3.306-5.22-5.046c-5.045-6.784-11.308-12.7-18.093-17.571c-5.567-3.828-17.747-9.047-20.008-15.485c0 0-.175-.173-.348-.347c3.827-.348 8.35-1.74 12.005-2.784c5.915-1.567 11.308-1.218 17.398-2.784c2.783-.696 5.567-1.566 8.35-2.436v-1.565c-3.13-3.132-5.392-7.307-8.698-10.265c-8.873-7.657-18.617-15.137-28.707-21.4c-5.394-3.48-12.354-5.742-18.095-8.699c-2.086-1.045-5.567-1.566-6.784-3.306c-3.133-3.827-4.873-8.872-7.134-13.396c-5.044-9.57-9.917-20.182-14.267-30.272c-3.13-6.786-5.044-13.572-8.872-19.834c-17.92-29.577-37.406-47.497-67.33-65.07c-6.438-3.653-14.093-5.219-22.27-7.132c-4.348-.175-8.699-.522-13.048-.697c-2.784-1.218-5.568-4.523-8.004-6.089C34.006 4.573 8.429-8.996 1.122 8.924c-4.698 11.308 6.96 22.442 10.96 28.185c2.96 4.001 6.786 8.524 8.874 13.048c1.218 2.956 1.565 6.09 2.783 9.221c2.785 7.653 5.393 16.18 9.048 23.314c1.914 3.653 4.001 7.48 6.437 10.786c1.392 1.913 3.827 2.784 4.35 5.915c-2.435 3.48-2.61 8.7-4.003 13.049c-6.263 19.66-3.826 44.017 5.046 58.457c2.783 4.348 9.395 13.92 18.268 10.265c7.83-3.131 6.09-13.048 8.35-21.747c.524-2.09.176-3.48 1.219-4.872v.349c2.436 4.87 4.871 9.569 7.133 14.44c5.394 8.524 14.788 17.398 22.617 23.314c4.177 3.13 7.482 8.524 12.702 10.438v-.523h-.349c-1.044-1.566-2.61-2.261-4.001-3.48c-3.131-3.13-6.612-6.958-9.047-10.438c-7.306-9.744-13.745-20.53-19.486-31.665c-2.783-5.392-5.22-11.308-7.481-16.701c-1.045-2.09-1.045-5.22-2.784-6.263c-2.61 3.827-6.437 7.133-8.351 11.83c-3.304 7.481-3.653 16.702-4.871 26.27c-.696.176-.349 0-.697.35c-5.566-1.394-7.48-7.134-9.569-12.006c-5.22-12.352-6.09-32.186-1.565-46.452c1.218-3.654 6.438-15.136 4.35-18.616c-1.044-3.306-4.525-5.22-6.438-7.829c-2.261-3.306-4.698-7.48-6.263-11.135c-4.176-9.743-6.264-20.53-10.787-30.273c-2.088-4.524-5.74-9.22-8.699-13.396c-3.305-4.697-6.959-8.004-9.569-13.571c-.869-1.913-2.088-5.045-.696-7.133c.348-1.392 1.043-1.913 2.436-2.261c2.262-1.915 8.7.521 10.96 1.565c6.438 2.608 11.831 5.046 17.225 8.699c2.435 1.74 5.045 5.046 8.176 5.916h3.654c5.568 1.217 11.83.348 17.05 1.913c9.222 2.957 17.572 7.307 25.054 12.005c22.792 14.44 41.58 34.97 54.282 59.501c2.088 4 2.957 7.656 4.871 11.83c3.655 8.526 8.178 17.225 11.83 25.576c3.654 8.176 7.133 16.528 12.353 23.314c2.61 3.652 13.048 5.567 17.746 7.481c3.48 1.565 8.874 2.958 12.005 4.871c5.915 3.652 11.83 7.83 17.398 11.83c2.784 2.088 11.482 6.438 12.005 9.917Z"/><path fill="#00546B" d="M58.186 43.022c-2.957 0-5.044.35-7.132.871v.348h.348c1.393 2.784 3.827 4.698 5.566 7.133c1.393 2.783 2.61 5.568 4.003 8.352c.173-.175.347-.348.347-.348c2.437-1.741 3.654-4.524 3.654-8.7c-1.044-1.217-1.218-2.435-2.088-3.653c-1.043-1.741-3.306-2.61-4.698-4.003Z"/></svg>
                        <p>MYSQL</p>
                    </div>
                    <div class='thumbnail'>
                        <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="100" height="100" preserveAspectRatio="xMidYMid meet" viewBox="0 0 256 135"><defs><radialGradient id="svgIDa" cx=".837" cy="-125.811" r="363.057" gradientTransform="matrix(.463 0 0 .463 76.464 81.918)" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#FFF"/><stop offset=".5" stop-color="#4C6B97"/><stop offset="1" stop-color="#231F20"/></radialGradient></defs><ellipse cx="128" cy="67.3" fill="url(#svgIDa)" rx="128" ry="67.3"/><ellipse cx="128" cy="67.3" fill="#6181B6" rx="123" ry="62.3"/><path fill="#FFF" d="m152.9 87.5l6.1-31.4c1.4-7.1.2-12.4-3.4-15.7c-3.5-3.2-9.5-4.8-18.3-4.8h-10.6l3-15.6c.1-.6 0-1.2-.4-1.7s-.9-.7-1.5-.7h-14.6c-1 0-1.8.7-2 1.6l-6.5 33.3c-.6-3.8-2-7-4.4-9.6c-4.3-4.9-11-7.4-20.1-7.4H52.1c-1 0-1.8.7-2 1.6L37 104.7c-.1.6 0 1.2.4 1.7s.9.7 1.5.7h14.7c1 0 1.8-.7 2-1.6l3.2-16.3h10.9c5.7 0 10.6-.6 14.3-1.8c3.9-1.3 7.4-3.4 10.5-6.3c2.5-2.3 4.6-4.9 6.2-7.7l-2.6 13.5c-.1.6 0 1.2.4 1.7s.9.7 1.5.7h14.6c1 0 1.8-.7 2-1.6l7.2-37h10c4.3 0 5.5.8 5.9 1.2c.3.3.9 1.5.2 5.2L134.1 87c-.1.6 0 1.2.4 1.7s.9.7 1.5.7h15c.9-.3 1.7-1 1.9-1.9zm-67.6-26c-.9 4.7-2.6 8.1-5.1 10c-2.5 1.9-6.6 2.9-12 2.9h-6.5l4.7-24.2h8.4c6.2 0 8.7 1.3 9.7 2.4c1.3 1.6 1.6 4.7.8 8.9zm130-18.6c-4.3-4.9-11-7.4-20.1-7.4h-28.3c-1 0-1.8.7-2 1.6l-13.1 67.5c-.1.6 0 1.2.4 1.7s.9.7 1.5.7h14.7c1 0 1.8-.7 2-1.6l3.2-16.3h10.9c5.7 0 10.6-.6 14.3-1.8c3.9-1.3 7.4-3.4 10.5-6.3c2.6-2.4 4.8-5.1 6.4-8c1.6-2.9 2.8-6.1 3.5-9.6c1.7-8.7.4-15.5-3.9-20.5zM200 61.5c-.9 4.7-2.6 8.1-5.1 10c-2.5 1.9-6.6 2.9-12 2.9h-6.5l4.7-24.2h8.4c6.2 0 8.7 1.3 9.7 2.4c1.4 1.6 1.7 4.7.8 8.9z"/><path fill="#000004" d="M74.8 48.2c5.6 0 9.3 1 11.2 3.1c1.9 2.1 2.3 5.6 1.3 10.6c-1 5.2-3 9-5.9 11.2c-2.9 2.2-7.3 3.3-13.2 3.3h-8.9l5.5-28.2h10zM39 105h14.7l3.5-17.9h12.6c5.6 0 10.1-.6 13.7-1.8c3.6-1.2 6.8-3.1 9.8-5.9c2.5-2.3 4.5-4.8 6-7.5s2.6-5.7 3.2-9c1.6-8 .4-14.2-3.5-18.7s-10.1-6.7-18.6-6.7H52.1L39 105zm74.3-85.4h14.6l-3.5 17.9h13c8.2 0 13.8 1.4 16.9 4.3c3.1 2.9 4 7.5 2.8 13.9L151 87.1h-14.8l5.8-29.9c.7-3.4.4-5.7-.7-6.9c-1.1-1.2-3.6-1.9-7.3-1.9h-11.7l-7.5 38.7h-14.6l13.1-67.5zm76.2 28.6c5.6 0 9.3 1 11.2 3.1c1.9 2.1 2.3 5.6 1.3 10.6c-1 5.2-3 9-5.9 11.2c-2.9 2.2-7.3 3.3-13.2 3.3H174l5.5-28.2h10zM153.7 105h14.7l3.5-17.9h12.6c5.6 0 10.1-.6 13.7-1.8c3.6-1.2 6.8-3.1 9.8-5.9c2.5-2.3 4.5-4.8 6-7.5s2.6-5.7 3.2-9c1.6-8 .4-14.2-3.5-18.7s-10.1-6.7-18.6-6.7h-28.3L153.7 105z"/></svg>
                        <p>PHP</p>
                    </div>
                    <div class='thumbnail'>
                        <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="100" height="100" preserveAspectRatio="xMidYMid meet" viewBox="0 0 256 264"><path fill="#FF2D20" d="M255.856 59.62c.095.351.144.713.144 1.077v56.568c0 1.478-.79 2.843-2.073 3.578L206.45 148.18v54.18a4.135 4.135 0 0 1-2.062 3.579l-99.108 57.053c-.227.128-.474.21-.722.299c-.093.03-.18.087-.278.113a4.15 4.15 0 0 1-2.114 0c-.114-.03-.217-.093-.325-.134c-.227-.083-.464-.155-.68-.278L2.073 205.938A4.128 4.128 0 0 1 0 202.36V32.656c0-.372.052-.733.144-1.083c.031-.119.103-.227.145-.346c.077-.216.15-.438.263-.639c.077-.134.19-.242.283-.366c.119-.165.227-.335.366-.48c.119-.118.274-.206.408-.309c.15-.124.283-.258.453-.356h.005L51.613.551a4.135 4.135 0 0 1 4.125 0l49.546 28.526h.01c.165.104.305.232.454.351c.134.103.284.196.402.31c.145.149.248.32.371.484c.088.124.207.232.279.366c.118.206.185.423.268.64c.041.118.113.226.144.35c.095.351.144.714.145 1.078V138.65l41.286-23.773V60.692c0-.36.052-.727.145-1.072c.036-.124.103-.232.144-.35c.083-.217.155-.44.268-.64c.077-.134.19-.242.279-.366c.123-.165.226-.335.37-.48c.12-.118.269-.206.403-.309c.155-.124.289-.258.454-.356h.005l49.551-28.526a4.13 4.13 0 0 1 4.125 0l49.546 28.526c.175.103.309.232.464.35c.128.104.278.197.397.31c.144.15.247.32.37.485c.094.124.207.232.28.366c.118.2.185.423.267.64c.047.118.114.226.145.35Zm-8.115 55.258v-47.04l-17.339 9.981l-23.953 13.792v47.04l41.297-23.773h-.005Zm-49.546 85.095V152.9l-23.562 13.457l-67.281 38.4v47.514l90.843-52.3ZM8.259 39.796v160.177l90.833 52.294v-47.505L51.64 177.906l-.015-.01l-.02-.01c-.16-.093-.295-.227-.444-.34c-.13-.104-.279-.186-.392-.3l-.01-.015c-.134-.129-.227-.289-.34-.433c-.104-.14-.227-.258-.31-.402l-.005-.016c-.093-.154-.15-.34-.217-.515c-.067-.155-.154-.3-.196-.464v-.005c-.051-.196-.061-.403-.082-.604c-.02-.154-.062-.309-.062-.464V63.57L25.598 49.772l-17.339-9.97v-.006ZM53.681 8.893L12.399 32.656l41.272 23.762L94.947 32.65L53.671 8.893h.01Zm21.468 148.298l23.948-13.786V39.796L81.76 49.778L57.805 63.569v103.608l17.344-9.986ZM202.324 36.935l-41.276 23.762l41.276 23.763l41.271-23.768l-41.27-23.757Zm-4.13 54.676l-23.953-13.792l-17.338-9.981v47.04l23.948 13.787l17.344 9.986v-47.04Zm-94.977 106.006l60.543-34.564l30.264-17.272l-41.246-23.747l-47.489 27.34l-43.282 24.918l41.21 23.325Z"/></svg>
                        <p>LARAVEL</p>
                    </div>
                    <div class='thumbnail'>
                        <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="100" height="100" preserveAspectRatio="xMidYMid meet" viewBox="0 0 32 32"><path fill="currentColor" d="M32 15.464v1.073l-.031.172c-.052.469-.089.938-.161 1.396a11.616 11.616 0 0 1-1.568 4.193a11.807 11.807 0 0 1-4.865 4.484a11.233 11.233 0 0 1-3.745 1.12c-.292.036-.583.068-.87.099H9.515c-.057-.01-.109-.026-.167-.031a9.444 9.444 0 0 1-3.266-.797c-2.266-1.01-3.953-2.641-5.057-4.885a9.888 9.888 0 0 1-.932-3.161l-.094-.802v-1.042c.01-.057.026-.115.031-.172c.057-.995.26-1.969.615-2.901c.953-2.505 2.62-4.365 4.984-5.573A9.594 9.594 0 0 1 9.53 7.611c.672-.031 1.344 0 2.005.094a.243.243 0 0 0 .193-.063a11.857 11.857 0 0 1 3.276-2.411a11.323 11.323 0 0 1 3.766-1.13c.313-.036.625-.068.932-.099h.958c.063.01.13.021.188.026c.479.057.953.094 1.427.177c1.453.25 2.849.786 4.094 1.578a11.861 11.861 0 0 1 4.427 4.953c.583 1.198.958 2.49 1.109 3.813l.094.917zM14.104 8.531c.021.026.026.042.036.042c.656.333 1.286.719 1.88 1.156c.036.026.13.016.177-.01c1.625-1.052 3.396-1.411 5.292-1.073c1.859.339 3.375 1.281 4.531 2.792c1.307 1.708 1.807 3.641 1.448 5.786c-.245 1.438-.813 2.734-1.776 3.813c-1.76 1.974-3.964 2.792-6.557 2.448c-1.594-.214-2.974-.917-4.115-2.089c-1.464-1.5-2.938-2.995-4.406-4.495c-.198-.203-.411-.359-.693-.396a1.101 1.101 0 0 0-1.156.641c-.188.396-.161.849.25 1.26c1.635 1.635 3.255 3.286 4.891 4.922c.281.281.583.542.901.776c1.193.88 2.542 1.37 4 1.568c1.146.151 2.281.12 3.406-.141c2.151-.49 3.932-1.604 5.333-3.328a9.598 9.598 0 0 0 2.099-4.891a9.692 9.692 0 0 0-.083-3.151c-.328-1.693-1.031-3.208-2.161-4.5c-2.156-2.464-4.87-3.563-8.099-3.318A8.928 8.928 0 0 0 15.781 7.4a9.126 9.126 0 0 0-1.672 1.13zm-.786 17.188c-.047-.042-.089-.083-.135-.125c-.667-.641-1.339-1.281-2-1.932a.552.552 0 0 0-.427-.182c-.672.016-1.339.021-2-.13c-3.281-.755-5.188-4.385-3.979-7.578c.953-2.516 3.594-4.047 6.198-3.578c1.167.214 2.193.719 3.036 1.599c1.026 1.078 2.078 2.12 3.12 3.188c.234.24.505.354.833.307c.417-.063.755-.266.906-.688c.151-.417.078-.807-.229-1.125c-1.089-1.12-2.151-2.271-3.281-3.344c-2.198-2.083-4.786-2.703-7.651-1.818c-3.849 1.193-6.104 5.234-5.224 9.224c.802 3.641 3.932 6.188 7.589 6.193h3.068c.047 0 .099-.005.177-.01z"/></svg>
                        <p>ADOBE CREATIVE SUITE</p>
                    </div>
                    <div class='thumbnail'>
                        <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="100" height="100" preserveAspectRatio="xMidYMid meet" viewBox="0 0 32 32"><path fill="currentColor" d="M0 .401v31.197h32V.401zm1.333 1.334h29.333v28.531H1.333zm7.531 20.432c-.156 0-.197-.068-.197-.197V7.646c0-.115.041-.176.156-.176h2.109c.115 0 .136.047.136.161v12.343h5.5c.109 0 .14.048.12.157l-.333 1.891c-.021.109-.089.156-.199.156H8.864zm9.871-8.636c0-.161 0-.552-.068-1.301c0-.109.027-.136.115-.177c.812-.328 2.74-.921 4.896-.921c.109 0 .151.02.151.135v1.932c0 .115-.041.136-.156.136c-.833-.041-2.084.068-2.547.265v8.412c0 .109-.043.151-.152.151h-2.093c-.109 0-.151-.041-.151-.151v-8.48z"/></svg>
                        <p>LIGHTROOM</p>
                    </div>
                    <div class='thumbnail'>
                        <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="100" height="100" preserveAspectRatio="xMidYMid meet" viewBox="0 0 32 32"><path fill="currentColor" d="M0 .401v31.198h32V.401zm1.333 1.333h29.333v28.531H1.333zm6.401 5.974c0-.089.188-.156.297-.156a76.42 76.42 0 0 1 3.438-.068c3.698 0 5.135 2.026 5.135 4.62c0 3.391-2.458 4.844-5.469 4.844c-.51 0-.682-.026-1.036-.026v5.125c0 .109-.042.156-.151.156H7.885c-.109 0-.151-.042-.151-.151zm2.365 7.084c.307.021.552.021 1.083.021c1.557 0 3.026-.552 3.026-2.661c0-1.693-1.052-2.552-2.833-2.552c-.526 0-1.031.021-1.276.042zm11.479-1.589c-1.057 0-1.411.531-1.411.969c0 .484.24.813 1.651 1.542c2.089 1.016 2.75 1.979 2.75 3.411c0 2.13-1.63 3.276-3.828 3.276c-1.167 0-2.161-.245-2.734-.573c-.083-.042-.104-.109-.104-.219v-1.958c0-.13.063-.177.151-.109a4.9 4.9 0 0 0 2.682.792c1.057 0 1.495-.438 1.495-1.036c0-.484-.307-.901-1.646-1.604c-1.896-.906-2.688-1.828-2.688-3.37c0-1.719 1.344-3.146 3.672-3.146c1.146 0 1.953.177 2.396.37c.109.068.13.177.13.266v1.828c0 .109-.068.177-.198.13c-.594-.349-1.469-.573-2.323-.573z"/></svg>
                        <p>PHOTOSHOP</p>
                    </div>
                    <div class='thumbnail'>
                        <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="100" height="100" preserveAspectRatio="xMidYMid meet" viewBox="0 0 32 32"><path fill="currentColor" d="M0 .401v31.198h32V.401zm1.333 1.333h29.333v28.531H1.333zm9.766 16.334l-1.057 3.995c-.021.115-.063.135-.193.135H7.891c-.135 0-.156-.042-.135-.193l3.786-13.26c.068-.24.109-.453.13-1.115c0-.089.047-.13.115-.13h2.792c.089 0 .135.021.156.13l4.245 14.396c.026.109 0 .172-.109.172h-2.198c-.115 0-.177-.026-.198-.115l-1.104-4.016h-4.276zm3.719-2.167c-.375-1.474-1.255-4.703-1.583-6.266h-.026c-.281 1.557-.99 4.198-1.536 6.266zm6-7.411c0-.859.594-1.365 1.365-1.365c.813 0 1.365.552 1.365 1.365c0 .88-.573 1.365-1.391 1.365c-.797 0-1.344-.484-1.344-1.365zm.151 3.031c0-.104.042-.146.151-.146h2.094c.12 0 .161.042.161.156v10.526c0 .109-.021.151-.156.151h-2.063c-.135 0-.177-.063-.177-.172V11.52z"/></svg>
                        <p>ILLUSTRATOR</p>
                    </div>
                    <div class='thumbnail'>
                        <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="100" height="100" preserveAspectRatio="xMidYMid meet" viewBox="0 0 32 32"><path fill="currentColor" d="M0 .401v31.197h32V.401zm1.333 1.334h29.333v28.531H1.333zm10.364 20.292c0 .129-.02.171-.171.171H9.473c-.129 0-.171-.061-.171-.171V7.708c0-.129.061-.177.171-.177h2.073c.109 0 .151.048.151.157zm2.366-5.167c0-3.188 2.099-5.672 5.468-5.672c.281 0 .439 0 .704.015V7.667a.13.13 0 0 1 .129-.136h2.167c.115 0 .136.048.136.115v12.475c0 .369 0 .833.068 1.339c0 .088-.027.109-.115.156a8.163 8.163 0 0 1-3.5.792c-2.953 0-5.063-1.828-5.063-5.547zm6.172-3.496c-.199-.088-.464-.135-.792-.135c-1.713 0-2.916 1.317-2.916 3.52c0 2.511 1.223 3.521 2.765 3.521c.328 0 .681-.041.943-.156z"/></svg>
                        <p>INDESIGN</p>
                    </div>
                    <div class='thumbnail'>
                        <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="100" height="100" preserveAspectRatio="xMidYMid meet" viewBox="0 0 32 32"><path fill="currentColor" d="M0 .401v31.198h32V.401zm1.333 1.333h29.333v28.531H1.333zm7.714 16.334L7.99 22.047c-.021.109-.068.151-.198.151H5.834c-.13 0-.151-.047-.13-.198L9.49 8.755c.063-.24.109-.432.13-1.094c0-.089.042-.135.109-.135h2.797c.089 0 .13.026.151.135l4.245 14.359c.021.109 0 .172-.109.172h-2.198c-.109 0-.177-.036-.198-.125l-1.099-4.005H9.047zm3.739-2.167c-.375-1.474-1.281-4.708-1.609-6.266h-.021c-.286 1.557-1.005 4.198-1.557 6.266zm7.146 1.365c.026 1.807.88 3.016 2.906 3.016c.792 0 1.469-.104 2.172-.417c.089-.042.156-.016.156.094v1.672c0 .13-.042.198-.135.266c-.703.349-1.578.505-2.677.505c-3.521 0-4.839-2.594-4.839-5.5c0-3.146 1.625-5.719 4.49-5.719c2.901 0 3.911 2.443 3.911 4.422c0 .641-.047 1.167-.109 1.411c-.026.109-.068.146-.177.167c-.266.047-1.057.089-2.224.089h-3.474zm2.709-1.834c.682 0 .922 0 .99-.021c0-.089.021-.167.021-.229c0-.729-.354-2.063-1.74-2.063c-1.276 0-1.828 1.125-1.958 2.313z"/></svg>
                        <p>AFTER EFFECTS</p>
                    </div>
                    <div class='thumbnail'>
                        <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="100" height="100" preserveAspectRatio="xMidYMid meet" viewBox="0 0 32 32"><path fill="currentColor" d="M0 .401v31.198h32V.401zm1.333 1.333h29.333v28.531H1.333zm7.063 5.969c0-.089.021-.156.135-.156a76.727 76.727 0 0 1 3.427-.063c3.698 0 5.302 2.026 5.302 4.62c0 3.385-2.448 4.839-5.464 4.839c-.505 0-.682-.021-1.036-.021v5.125c0 .109-.042.151-.151.151H8.552c-.115 0-.156-.042-.156-.151zm2.364 7.083c.313.021.552.021 1.083.021c1.557 0 3.021-.547 3.021-2.661c0-1.693-1.042-2.552-2.828-2.552c-.526 0-1.031.026-1.276.047zm8.537-1.208c0-.156 0-.552-.068-1.297c0-.109.016-.135.104-.177a13.829 13.829 0 0 1 4.875-.922c.109 0 .156.021.156.13v1.938c0 .109-.036.13-.146.13a7.604 7.604 0 0 0-2.521.266v8.401c0 .109-.047.151-.156.151h-2.094c-.109 0-.151-.042-.151-.151z"/></svg>
                        <p>PREMIERE PRO</p>
                    </div>
                    <div class='thumbnail'>
                        <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="100" height="100" preserveAspectRatio="xMidYMid meet" viewBox="0 0 512 512"><path fill="currentColor" d="M488.877 52.447H302.306V5.92h-34.779L0 52.563v406.99l265.957 46.527h36.349v-46.353h174.59c9.887-.465 20.879.291 29.37-5.757c6.804-10.41 5.06-23.438 5.641-35.186V75.012c1.221-13.26-9.77-23.903-23.03-22.565zm-294.862 282.59c-9.712 5.06-24.252-.233-35.767.581c-7.735-38.5-16.75-76.768-23.67-115.443c-6.805 37.57-15.645 74.79-23.438 112.128c-11.166-.581-22.39-1.28-33.615-2.035c-9.655-51.18-20.995-102.01-30.01-153.305c9.945-.465 19.948-.872 29.893-1.221c5.99 37.047 12.795 73.919 18.03 111.024c8.2-38.036 16.574-76.071 24.717-114.106c11.05-.64 22.1-1.105 33.15-1.687c7.735 39.257 15.644 78.455 24.019 117.537c6.572-40.361 13.841-80.607 20.879-120.91c11.631-.407 23.263-1.047 34.836-1.745c-13.143 56.355-24.659 113.176-39.024 169.182zm290.212 97.069H302.306v-36.527h151.21v-23.263h-151.21v-29.079h151.21v-23.263h-151.21v-29.08h151.21v-23.262h-151.21v-29.08h151.21V215.29h-151.21v-29.08h151.21v-23.263h-151.21v-29.079h151.21v-23.263h-151.21v-30.71h181.921v352.21z"/></svg>
                        <p>MICROSOFT WORD</p>
                    </div>
                    <div class='thumbnail'>
                        <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="100" height="100" preserveAspectRatio="xMidYMid meet" viewBox="0 0 512 512"><path fill="currentColor" d="M453.547 273.449H372.12v-40.714h81.427v40.714zm0 23.264H372.12v40.714h81.427v-40.714zm0-191.934H372.12v40.713h81.427V104.78zm0 63.978H372.12v40.713h81.427v-40.713zm0 191.934H372.12v40.714h81.427V360.69zm56.242 80.264c-2.326 12.098-16.867 12.388-26.58 12.796H302.326v52.345h-36.119L0 459.566V52.492L267.778 5.904h34.548v46.355h174.66c9.83.407 20.648-.291 29.197 5.583c5.991 8.608 5.41 19.543 5.817 29.43l-.233 302.791c-.29 16.925 1.57 34.2-1.978 50.892zm-296.51-91.256c-16.052-32.57-32.395-64.909-48.39-97.48c15.82-31.698 31.408-63.512 46.937-95.327c-13.203.64-26.406 1.454-39.55 2.385c-9.83 23.904-21.288 47.169-28.965 71.888c-7.154-23.323-16.634-45.774-25.3-68.515c-12.796.698-25.592 1.454-38.387 2.21c13.493 29.78 27.86 59.15 40.946 89.104c-15.413 29.081-29.837 58.57-44.785 87.825c12.737.523 25.475 1.047 38.212 1.221c9.074-23.148 20.357-45.424 28.267-69.038c7.096 25.359 19.135 48.798 29.023 73.051c14.017.99 27.976 1.862 41.993 2.676zM484.26 79.882H302.326v24.897h46.53v40.713h-46.53v23.265h46.53v40.713h-46.53v23.265h46.53v40.714h-46.53v23.264h46.53v40.714h-46.53v23.264h46.53v40.714h-46.53v26.897H484.26V79.882z"/></svg>
                        <p>MICROSOFT EXCEL</p>
                    </div>
                    <div class='thumbnail'>
                        <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="100" height="100" preserveAspectRatio="xMidYMid meet" viewBox="0 0 512 512"><path fill="currentColor" d="M511.873 384.332V115.975c1.978-24.2-20.303-40.024-40.605-46.946c-53.928-19.081-112.683-19.605-168.88-12.45V5.852h-34.787L0 52.507V459.61l266.146 46.54h36.243v-62.654c56.021 7.97 114.137 5.817 168.122-12.1c20.536-6.865 43.398-22.572 41.362-47.063zm-335.431-35.719l-11.17-43.572l-53.52-1.513l-10.471 41.246l-34.09-2.444l51.542-183.539l40.664-2.967l57.243 195.872l-40.198-3.083zM302.389 74.264c51.949-7.155 106.05-6.922 156.546 8.494c13.903 5.177 32.52 11.402 35.66 27.981c-2.327 13.555-16.463 19.663-27.632 24.55c-52.764 17.801-109.833 19.488-164.574 11.227V74.264zm0 183.83c39.616 5.061 79.872 4.945 119.489-.29c25.538-3.782 52.066-9.308 72.66-25.888c-1.164 24.957 1.803 50.146-1.63 74.928c-10.18 12.45-26.701 16.87-41.536 21.117c-48.691 11.577-99.536 11.868-148.983 5.585v-75.452zM492.792 400.04c-16.463 17.917-42.583 21.233-65.213 25.83c-41.478 6.34-83.887 6.456-125.423.465l.233-75.161c39.558 5.06 79.698 4.945 119.256-.291c25.597-3.723 52.182-9.308 72.892-25.888c-1.221 24.957 1.92 50.263-1.745 75.045zm0-186.099c-10.413 12.391-26.934 16.812-41.827 21.06c-48.575 11.46-99.245 11.75-148.576 5.41v-75.394c39.5 5.003 79.64 4.945 119.14-.233c25.597-3.781 52.298-9.308 73.008-25.946c-1.28 25.015 1.978 50.321-1.745 75.103zm-373.768 58.174s14.602-53.81 18.5-81.443c5.235 27.574 13.321 54.45 19.953 81.676l-38.453-.233z"/></svg>
                        <p>MICROSOFT ACCESS</p>
                    </div>
                    <div class='thumbnail'>
                        <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="100" height="100" preserveAspectRatio="xMidYMid meet" viewBox="0 0 512 512"><path fill="currentColor" d="M488.698 58.311H302.231V5.981h-32.968L0 52.614v406.89l266.066 46.515h36.165v-58.144h174.49c9.942-.465 20.99.524 29.478-5.64c6.745-10.407 5.11-23.432 5.692-35.177V81.104c1.337-13.373-9.82-24.072-23.193-22.793zM170.535 275.304c-13.198 6.744-28.316 5.814-42.677 5.349l-.058 68.202l-34.596-2.907l.058-186.35c31.573 1.511 69.831-12.501 95.996 11.163c25.06 30.41 18.431 86.344-18.723 104.543zm313.572 145.13H302.231v-36.518h139.545V360.66H302.231v-29.072h139.545V308.33H302.289s-.058-22.792-.116-34.188c23.025 7.151 49.248 6.977 69.83-6.861c22.27-13.199 33.898-38.375 35.817-63.493h-76.517v-75.936l-29.072 5.873V85.752h181.876v334.681zm-141.18-304.735c40.41 1.86 74.429 36.021 76.58 76.315h-76.58v-76.315zM127.8 191.053c11.454-.523 25.641-2.616 33.374 8.14c6.629 11.397 6.28 26.398.756 38.143c-6.628 11.977-21.63 10.815-33.2 12.21c-1.22-19.478-1.105-38.956-.93-58.493z"/></svg>
                        <p>MICROSOFT POWERPOINT</p>
                    </div>
                    <div class='thumbnail'>
                        <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="100" height="100" preserveAspectRatio="xMidYMid meet" viewBox="0 0 48 48"><path fill="#FFC107" d="M43.611 20.083H42V20H24v8h11.303c-1.649 4.657-6.08 8-11.303 8c-6.627 0-12-5.373-12-12s5.373-12 12-12c3.059 0 5.842 1.154 7.961 3.039l5.657-5.657C34.046 6.053 29.268 4 24 4C12.955 4 4 12.955 4 24s8.955 20 20 20s20-8.955 20-20c0-1.341-.138-2.65-.389-3.917z"/><path fill="#FF3D00" d="m6.306 14.691l6.571 4.819C14.655 15.108 18.961 12 24 12c3.059 0 5.842 1.154 7.961 3.039l5.657-5.657C34.046 6.053 29.268 4 24 4C16.318 4 9.656 8.337 6.306 14.691z"/><path fill="#4CAF50" d="M24 44c5.166 0 9.86-1.977 13.409-5.192l-6.19-5.238A11.91 11.91 0 0 1 24 36c-5.202 0-9.619-3.317-11.283-7.946l-6.522 5.025C9.505 39.556 16.227 44 24 44z"/><path fill="#1976D2" d="M43.611 20.083H42V20H24v8h11.303a12.04 12.04 0 0 1-4.087 5.571l.003-.002l6.19 5.238C36.971 39.205 44 34 44 24c0-1.341-.138-2.65-.389-3.917z"/></svg>
                        <p>GOOGLE RESEARCH</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




<!-- Work Section -->

<section id="work" class="parallax-section row">
    <div class="container">
        <div class="overlay"></div>
        <div>
            <div class="wow fadeInUp color-white media" data-wow-delay="1.2s">
                <div>
                    <div class="wow fadeInUp section-title text" data-wow-delay="0.8s">
                        <h1>My Work</h1>
                    </div>
                    <p class='color-white'>Check out some of my recent work</p>
                </div>
            </div>

            <div class="wow fadeInUp thumbnails">
                <div class="folpd works thumbnail">
                    <div class="work works">
                        <h2 class="workText">
                            Frame of Light<br/>Designs
                        </h2>
                        <div class="work-btns">
                            <a href="https://www.frameoflightdesigns.com" target="_blank">
                                <button class=" work-btn">Site</button>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="pmnow works thumbnail">
                    <div class="work works">
                        <h2 class="workText">
                            Positive Masculinity<br/>Now
                        </h2>
                        <div class="work-btns">
                            <a href="https://www.positivemasculinitynow.org" target="_blank">
                                <button class=" work-btn">Site</button>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="nenyos works thumbnail">
                    <div class="work works">
                        <h2 class="workText">
                            North Eastern New York<br/>Orchid Society
                        </h2>
                        <div class="work-btns">
                            <a href="https://www.nenyosorchids.com" target="_blank">
                                <button class=" work-btn">Site</button>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="tahl works thumbnail">
                    <div class="work works">
                        <h2 class="workText">
                            The Awesome Hair<br/>Lab
                        </h2>
                        <div class="work-btns">
                            <a href="https://www.theawesomehairlab.com" target="_blank">
                                <button class=" work-btn">Site</button>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="gmhco works thumbnail">
                    <div class="work works">
                        <h2 class="workText">
                            Green Mountain Hash<br/>Co
                        </h2>
                        <div class="work-btns">
                            <a href="https://www.greenmountainhashco.com" target="_blank">
                                <button class=" work-btn">Site</button>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="aswm works thumbnail">
                    <div class="work works">
                        <h2 class="workText">
                            Frame of Light<br/>Designs
                        </h2>
                        <div class="work-btns">
                            <a href="https://github.com/FftyShadesofCode/ASWMechanical" target="_blank">
                                <button class=" work-btn">Code</button>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="undd works thumbnail">
                    <div class="work works">
                        <h2 class="workText">
                            Underdog Devs
                        </h2>
                        <div class="work-btns">
                            <a href="https://www.underdogdevs.com" target="_blank">
                                <button class=" work-btn">Site</button>
                            </a>
                            <a href="https://github.com/BloomTech-Labs/underdog-devs-fe-a" target="_blank">
                                <button class=" work-btn">Code</button>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="bapi works thumbnail">
                    <div class="work works">
                        <h2 class="workText">
                            Battleship API
                        </h2>
                        <div class="work-btns">
                            <a href="https://github.com/org1223" target="_blank">
                                <button class=" work-btn">Code</button>
                            </a>
                        </div>
                    </div>
                </div>

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
                        <h1 class="color-white">Contact Me</h1>
                        <p class="color-white">Use the Form Below or Email me at: <a href="mailto:philiprmcdavid@gmail.com"> philiprmcdavid@gmail.com</a></p>
                    </div>

                    <div id="contact-form">
                        <form action="mailto:philiprmcdavid@gmail.com" method="post">
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
                        <p class="color-white">Niskayuna, New York USA</p>
                    </div>

                    <div class="wow fadeInUp contact-info" data-wow-delay="0.8s">
                        <h3 class="color-white">Contact</h3>
                        <p class="color-white"><i class="fa fa-phone"></i> 518-630-4268</p>
                        <p class="color-white"><i class="fa fa-envelope-o color-white"></i> <a href="mailto:philiprmcdavid@gmail.com">philiprmcdavid@gmail.com</a></p>
                        <p class="color-white"><i class="fa fa-globe color-white"></i> <a href="https://www.fiftyshadesofcode.com" target="_blank">fiftyshadesofcode.com</a></p>
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
                    <li><a href="#" class="fa fa-github"></a></li>
                    <li><a href="#" class="fa fa-linkedin"></a></li>
                    <li><a href="#" class="fa fa-twitter"></a></li>
                    <li><a href="#" class="fa fa-instagram"></a></li>
                </ul>
            </div>

        </div>
    </div>
</footer>

<!-- SCRIPTS -->

<script src="{{ secure_asset('Frontend/js/jquery.js') }}"></script>
<script src="{{ secure_asset('Frontend/js/bootstrap.min.js') }}"></script>
<script src="{{ secure_asset('Frontend/js/jquery.parallax.js') }}"></script>
<script src="{{ secure_asset('Frontend/js/smoothscroll.js') }}"></script>
<script src="{{ secure_asset('Frontend/js/wow.min.js') }}"></script>
<script src="{{ secure_asset('Frontend/js/custom.js') }}"></script>

</body>
</html>
