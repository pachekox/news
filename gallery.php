<?php 
include('connection.php');
include('header.php');
include('head-seo.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Photo of the Week</title>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet"> <!-- https://fonts.google.com/ -->
    <link rel="stylesheet" href="fontawesome/css/all.min.css"> <!-- https://fontawesome.com/ -->
    <link rel="stylesheet" href="css/magnific-popup.css"> 
    <link rel="stylesheet" href="css/gallery.css"> 
<!--
    
TemplateMo 554 Ocean Vibes

https://templatemo.com/tm-554-ocean-vibes

-->
</head>
<body style="background-color: #e8e8e8;">
    <header class="tm-site-header">
        <img src="https://img.icons8.com/external-flatart-icons-solid-flatarticons/40/fa314a/external-award-digital-marketing-flatart-icons-solid-flatarticons.png"/><i><small style="color: #ee002d;font-family: sans-serif; font-size: 14px;"><span style="color:black;">#</span> Photo of the week</small></i>
    </header>

    <!-- Video banner 400 px height -->
    <div id="tm-video-container">
        <video autoplay muted loop id="tm-video">
            <source src="video/ocean-sea-wave-video.mp4" type="video/mp4">
        </video>  
        <i id="tm-video-control-button" class="fas fa-pause"></i>
    </div>
    <div class="tm-container">
        <nav class="tm-main-nav">
            <ul id="inline-popups">
                 <li class="tm-nav-item">
                    <a href="#about" data-effect="mfp-move-from-top" class="tm-nav-link">
                        About the image
                        <img src="https://img.icons8.com/external-wanicon-lineal-wanicon/64/fa314a/external-photograph-university-courses-wanicon-lineal-wanicon.png"/>
                    </a>
                </li>
                <li class="tm-nav-item">
                    <a href="#intro" data-effect="mfp-move-from-top" class="tm-nav-link">
                        Related images
                        <img src="https://img.icons8.com/external-wanicon-lineal-wanicon/64/fa314a/external-photography-art-and-design-wanicon-lineal-wanicon.png"/>
                    </a>                
                </li>
                <li class="tm-nav-item">
                    <a href="#testimonials" data-effect="mfp-move-from-top" class="tm-nav-link">
                        Photographer
                        <img src="https://img.icons8.com/external-ddara-lineal-ddara/64/fa314a/external-photographer-professions-ddara-lineal-ddara.png"/>
                    </a>
                </li>
                <li class="tm-nav-item">
                    <a href="#gallery" data-effect="mfp-move-from-top" class="tm-nav-link" id="tm-gallery-link">
                        Gallery
                        <img src="https://img.icons8.com/dotty/80/fa314a/gallery.png"/>
                    </a>
                </li>
                <li class="tm-nav-item">
                    <a href="#gallery" data-effect="mfp-move-from-top" class="tm-nav-link" id="tm-gallery-link">
                        Download
                        <img src="https://img.icons8.com/external-flatart-icons-solid-flatarticons/64/fa314a/external-download-web-security-flatart-icons-solid-flatarticons.png"/>
                    </a>
                </li>
            </ul>
        </nav>

        <!-- Popup itself -->
        <div id="intro" class="popup mfp-with-anim mfp-hide tm-bg-gray">
            <a href="#" class="tm-close-popup">
                Back
                <i class="fas fa-times"></i>
            </a>
            <div class="tm-row tm-intro-row">
                <img src="img/bg-img/testimonial-01.jpg" alt="Image" class="tm-intro-img">
                <div class="tm-col tm-bg-white tm-intro-pad">
                    <h2 class="tm-color-primary tm-page-title">Introducing Ocean Vibes</h2>
                    <div class="tm-row tm-content-row">
                        <div class="tm-col-6 tm-intro-col-l">
                            <p>
                                This CSS template is 100% free provided by 
                                <a rel="nofollow" href="https://templatemo.com/page/1" target="_parent">TemplateMo</a> 
                                website. You can use this template for any purpose. You can apply
                          this as a CMS theme or a custom website builder template. </p>
                            <p>
                                You can support our website by contributing 
                                <a rel="nofollow" href="http://paypal.me/templatemo" target="_parent">a little via <strong>PayPal</strong></a>
                                or spreading a word about TemplateMo to your friends.
                                If you have any question, feel free to send 
                        us a message. </p>
                            <p class="tm-mb-0">
                                <strong>Credit</strong> goes to Pexels for the video banner and images used in this template. Some images are taken from Unsplash. Both Pexels and Unsplash are great websites for free photos.
                            </p>
                        </div>
                        <div class="tm-col-6">
                            <p>
                                You are not allowed to re-distribute this
                                template as a downloadable ZIP file on
                                any template collection website.
                            </p>
                            <p>
                                Top right corner is a return home with an
                                icon that will close this pop-up page.
                            </p>
                            <p class="tm-mb-80">
                                Next Page will bring you to the gallery
                                page directly without going back to main
                                menu.
                            </p>
                            <div class="tm-text-center">
                                <a href="#" class="tm-btn tm-btn-primary mfp-prevent-close tm-btn-next">
                                    Next Page
                                </a>
                            </div>                            
                        </div>
                    </div>
                </div>                
            </div> 
        </div>

        <div id="gallery" class="popup mfp-with-anim mfp-hide tm-bg-gray">
            <a href="#" class="tm-close-popup">
            Close
                <i class="fas fa-times"></i>
            </a>
            <div class="tm-row tm-gallery-row">
                <div class="tm-gallery">
                    <div class="tm-gallery-container">                        
                        <figure class="effect-chico tm-gallery-item portrait">
                            <img src="img/bg-img/gallery/portrait-01.jpg" alt="Image"/>
                            <figcaption>
                                <p>Chico's main fear was missing the morning bus.</p>							
                            </figcaption>			
                        </figure>
                        <figure class="effect-chico tm-gallery-item nature">
                            <img src="img/bg-img/gallery/nature-01.jpg" alt="Image"/>
                            <figcaption>
                                <p>TemplateMo is the best website for free css templates.</p>							
                            </figcaption>			
                        </figure>
                        <figure class="effect-chico tm-gallery-item animal">
                            <img src="img/bg-img/gallery/animal-01.jpg" alt="Image"/>
                            <figcaption>
                                <p>Chico's main fear was missing the morning bus.</p>							
                            </figcaption>			
                        </figure>
                        <figure class="effect-chico tm-gallery-item building">
                            <img src="img/bg-img/gallery/building-01.jpg" alt="Image"/>
                            <figcaption>
                                <p>TemplateMo is the best free css website templates.</p>							
                            </figcaption>			
                        </figure>
                        <figure class="effect-chico tm-gallery-item portrait">
                            <img src="img/bg-img/gallery/portrait-02.jpg" alt="Image"/>
                            <figcaption>
                                <p>Chico's main fear was missing the morning bus.</p>							
                            </figcaption>			
                        </figure>
                        <figure class="effect-chico tm-gallery-item nature">
                            <img src="img/bg-img/gallery/nature-02.jpg" alt="Image"/>
                            <figcaption>
                                <p>Chico's main fear was missing the morning bus.</p>							
                            </figcaption>			
                        </figure>
                        <figure class="effect-chico tm-gallery-item animal">
                            <img src="img/bg-img/gallery/animal-02.jpg" alt="Image"/>
                            <figcaption>
                                <p>Chico's main fear was missing the morning bus.</p>							
                            </figcaption>			
                        </figure>
                        <figure class="effect-chico tm-gallery-item building">
                            <img src="img/bg-img/gallery/building-02.jpg" alt="Image"/>
                            <figcaption>
                                <p>Chico's main fear was missing the morning bus.</p>							
                            </figcaption>			
                        </figure>
                        <figure class="effect-chico tm-gallery-item portrait">
                            <img src="img/bg-img/gallery/portrait-03.jpg" alt="Image"/>
                            <figcaption>
                                <p>Chico's main fear was missing the morning bus.</p>							
                            </figcaption>			
                        </figure>
                        <figure class="effect-chico tm-gallery-item animal">
                            <img src="img/bg-img/gallery/animal-03.jpg" alt="Image"/>
                            <figcaption>
                                <p>Chico's main fear was missing the morning bus.</p>							
                            </figcaption>			
                        </figure>
                        <figure class="effect-chico tm-gallery-item building">
                            <img src="img/bg-img/gallery/building-03.jpg" alt="Image"/>
                            <figcaption>
                                <p>Chico's main fear was missing the morning bus.</p>							
                            </figcaption>			
                        </figure>
                        <figure class="effect-chico tm-gallery-item portrait">
                            <img src="img/bg-img/gallery/portrait-04.jpg" alt="Image"/>
                            <figcaption>
                                <p>Chico's main fear was missing the morning bus.</p>							
                            </figcaption>			
                        </figure>
                        <figure class="effect-chico tm-gallery-item animal">
                            <img src="img/gallery/animal-04.jpg" alt="Image"/>
                            <figcaption>
                                <p>Chico's main fear was missing the morning bus.</p>							
                            </figcaption>			
                        </figure>
                        <figure class="effect-chico tm-gallery-item building">
                            <img src="img/bg-img/gallery/building-04.jpg" alt="Image"/>
                            <figcaption>
                                <p>Chico's main fear was missing the morning bus.</p>							
                            </figcaption>			
                        </figure>
                        <figure class="effect-chico tm-gallery-item portrait">
                            <img src="img/gallery/portrait-05.jpg" alt="Image"/>
                            <figcaption>
                                <p>Chico's main fear was missing the morning bus.</p>							
                            </figcaption>			
                        </figure>
                        <figure class="effect-chico tm-gallery-item animal">
                            <img src="img/bg-img/gallery/animal-05.jpg" alt="Image"/>
                            <figcaption>
                                <p>Chico's main fear was missing the morning bus.</p>							
                            </figcaption>			
                        </figure>
                        <figure class="effect-chico tm-gallery-item building">
                            <img src="img/bg-img/gallery/building-05.jpg" alt="Image"/>
                            <figcaption>
                                <p>Chico's main fear was missing the morning bus.</p>							
                            </figcaption>			
                        </figure>
                        <figure class="effect-chico tm-gallery-item portrait">
                            <img src="img/bg-img/gallery/portrait-06.jpg" alt="Image"/>
                            <figcaption>
                                <p>Chico's main fear was missing the morning bus.</p>							
                            </figcaption>			
                        </figure>
                        <figure class="effect-chico tm-gallery-item animal">
                            <img src="img/bg-img/gallery/animal-06.jpg" alt="Image"/>
                            <figcaption>
                                <p>Chico's main fear was missing the morning bus.</p>							
                            </figcaption>			
                        </figure>
                        <figure class="effect-chico tm-gallery-item building">
                            <img src="img/bg-img/gallery/building-06.jpg" alt="Image"/>
                            <figcaption>
                                <p>Chico's main fear was missing the morning bus.</p>							
                            </figcaption>			
                        </figure>
                        <figure class="effect-chico tm-gallery-item portrait">
                            <img src="img/bg-img/gallery/portrait-07.jpg" alt="Image"/>
                            <figcaption>
                                <p>Chico's main fear was missing the morning bus.</p>							
                            </figcaption>			
                        </figure>
                        <figure class="effect-chico tm-gallery-item animal">
                            <img src="img/bg-img/gallery/animal-07.jpg" alt="Image"/>
                            <figcaption>
                                <p>Chico's main fear was missing the morning bus.</p>							
                            </figcaption>			
                        </figure>
                        <figure class="effect-chico tm-gallery-item building">
                            <img src="img/bg-img/gallery/building-07.jpg" alt="Image"/>
                            <figcaption>
                                <p>Chico's main fear was missing the morning bus.</p>							
                            </figcaption>			
                        </figure>
                        <figure class="effect-chico tm-gallery-item portrait">
                            <img src="img/bg-img/gallery/portrait-08.jpg" alt="Image"/>
                            <figcaption>
                                <p>Chico's main fear was missing the morning bus.</p>							
                            </figcaption>			
                        </figure>                                                
                        
                        <figure class="effect-chico tm-gallery-item nature">
                            <img src="img/bg-img/gallery/nature-03.jpg" alt="Image"/>
                            <figcaption>
                                <p>Chico's main fear was missing the morning bus.</p>							
                            </figcaption>			
                        </figure>
                        <figure class="effect-chico tm-gallery-item nature">
                            <img src="img/bg-img/gallery/nature-04.jpg" alt="Image"/>
                            <figcaption>
                                <p>Chico's main fear was missing the morning bus.</p>							
                            </figcaption>			
                        </figure>
                        <figure class="effect-chico tm-gallery-item nature">
                            <img src="img/bg-img/gallery/nature-05.jpg" alt="Image"/>
                            <figcaption>
                                <p>Chico's main fear was missing the morning bus.</p>							
                            </figcaption>			
                        </figure>
                        <figure class="effect-chico tm-gallery-item nature">
                            <img src="img/bg-img/gallery/nature-06.jpg" alt="Image"/>
                            <figcaption>
                                <p>Chico's main fear was missing the morning bus.</p>							
                            </figcaption>			
                        </figure>
                        <figure class="effect-chico tm-gallery-item nature">
                            <img src="img/gallery/nature-07.jpg" alt="Image"/>
                            <figcaption>
                                <p>Chico's main fear was missing the morning bus.</p>							
                            </figcaption>			
                        </figure>
                        <figure class="effect-chico tm-gallery-item nature">
                            <img src="img/bg-img/gallery/nature-08.jpg" alt="Image"/>
                            <figcaption>
                                <p>Chico's main fear was missing the morning bus.</p>							
                            </figcaption>			
                        </figure>                                                
                        
                        <figure class="effect-chico tm-gallery-item animal">
                            <img src="img/bg-img/gallery/animal-08.jpg" alt="Image"/>
                            <figcaption>
                                <p>Chico's main fear was missing the morning bus.</p>							
                            </figcaption>			
                        </figure>
                        <figure class="effect-chico tm-gallery-item building">
                            <img src="img/bg-img/gallery/building-08.jpg" alt="Image"/>
                            <figcaption>
                                <p>TemplateMo is the best free website for html css templates.</p>							
                            </figcaption>			
                        </figure>                
                    </div>
                </div>
                <!-- Gallery navigation and description -->
                <div class="tm-col tm-gallery-right">
                    <h2 class="tm-color-primary tm-mt-35 tm-page-title">Gallery</h2>
                    <div class="tm-gallery-right-inner">
                        <ul class="tm-gallery-links">
                            <li>
                                <a href="#" class="active tm-gallery-link" data-filter="*">
                                    <i class="fas fa-layer-group tm-gallery-link-icon"></i>
                                    All
                                </a>
                            </li>
                            <li>
                                <a href="#" class="tm-gallery-link" data-filter="portrait">
                                    <i class="fas fa-portrait tm-gallery-link-icon"></i>
                                    Portraits
                                </a>
                            </li>
                            <li>
                                <a href="#" class="tm-gallery-link" data-filter="nature">
                                    <i class="fas fa-leaf tm-gallery-link-icon"></i>
                                    Nature
                                </a>
                            </li>
                            <li>
                                <a href="#" class="tm-gallery-link" data-filter="animal">
                                    <i class="fas fa-paw tm-gallery-link-icon"></i>
                                    Animals
                                </a>
                            </li>
                            <li>
                                <a href="#" class="tm-gallery-link" data-filter="building">
                                    <i class="far fa-building tm-gallery-link-icon"></i>
                                    Buildings
                                </a>
                            </li>
                        </ul>
                        <p>
                            Use the above list of icons to filter through
                            different types of images you want to see. They are
                            arranged according to category and orientation.
                        </p>
                        <p>
                            Use the close button above to quit the pop up page
                            
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div id="testimonials" class="popup mfp-with-anim mfp-hide tm-bg-gray">
            <a href="#" class="tm-close-popup">
                Close
                <i class="fas fa-times"></i>
            </a>
            <div class="tm-testimonials-inner">
                <h2 class="tm-color-gray tm-testimonial-col tm-page-title">Testimonials</h2>
                <div class="tm-row tm-testimonial-row">                
                    <div class="tm-col tm-testimonial-col">
                        <p>
                            OCEAN vibes is free website template from 
                            <a rel="nofollow" href="https://templatemo.com" class="tm-color-primary">TemplateMo</a>
                            website. You are allowed to use
                            it for commercial purpose. You can convert this template as a CMS theme or a custom
                            website builder template.
                        </p>
                        <em class="tm-mb-30 tm-color-light-gray">
                            You may support us by telling your friends
                            about our TemplateMo site. Feel free to 
                            contact us if you have anything to ask.
                        </em>
                        <p>
                            You can make a little contribution via
                            <a rel="nofollow" href="http://paypal.me/templatemo" target="_parent"><strong>PayPal</strong></a>
                                or saying about TemplateMo to your friends. Duis egestas lorem eu nisi
                            finibus, sit amet elementum lacus pretium.
                        </p>
                        <p>
                            In tempor felis vitae nulla feugiat aliquam.
                            Vivamus vitae congue mi. Sed maximus velit
                            vestibulum nisl condimentum hendrerit.
                        </p>
                    </div>
                    <div class="tm-col tm-testimonial-col tm-testimonial-col-2">
                        <img src="img/bg-img/testimonial-01.jpg" alt="Image" class="tm-mb-30">
                        <blockquote>
                            <p>
                                "Suspendisse eu mollis diam, at ullamcorper
                                diam. Ut sit amet arcu metus. Nullam mattis
                                eros eget." by <span class="tm-color-primary">George, Chief Editor</span>
                            </p>
                        </blockquote>
                        <blockquote class="tm-mb-50">
                            <p>
                                "Quisque et lorem accumsan, sollicitudin
                                dolor vel, facilisis eros. Donec aliquet felis in
                                mollis egestas." by <span class="tm-color-primary">Mary, CEO of Web</span>
                            </p>
                        </blockquote>  
                        <div class="tm-text-center">
                            <a href="#" class="tm-btn tm-btn-primary mfp-prevent-close tm-btn-contact">
                                Contact Us
                            </a>
                        </div>                 
                    </div>
                    <div class="tm-col tm-testimonial-col tm-testimonial-col-2">
                        <p>
                            Duis sapien diam, eleifend eget vehicula sed,
                            convallis sit amet elit. Aenean condimentum
                            vulputate porta.
                        </p>
                        <p>
                            Mauris accumsan erat ante, id sagittis felis
                            gravida vitae. Sed iaculis tincidunt neque, a
                            molestie magna vehicula at.
                        </p>
                        <p>
                            Phasellus ornare magna nec nulla pharetra,
                            nec tristique elit lobortis.
                        </p>
                        <img src="img/bg-img/testimonial-02.jpg" alt="Image" class="tm-mt-35">
                    </div>
                </div>
            </div>            
        </div>

        <div id="about" class="popup mfp-with-anim mfp-hide tm-bg-gray">
            <a href="#" class="tm-close-popup">
                Close
                <i class="fas fa-times"></i>
            </a>
            <h2 class="tm-color-primary tm-about-col tm-mb-40 tm-page-title">About Ocean Vibes</h2>
            <div class="tm-row tm-about-row">
                <div class="tm-col tm-about-col tm-about-left">                    
                    <img src="img/bg-img/about.jpg" alt="Image" class="tm-mb-30">
                    <p class="tm-mb-40">
                        Suspendisse sit amet pellentesque nunc. Vivamus fringilla
                        tellus finibus lacus blandit, siet amet aliquet augue sagittis.
                        Duis nec auctor felis, nec ornare ex. In non ante ligula.
                    </p>
                    <p class="tm-mb-40">
                        Curabitur non augue dignissim est pulvibar lobortis. Nunc
                        vulputate, mi vel cursus mollis, justo mauris rutrum dui, id
                        egestas ante ligula id nunc. Interdum et malesuada fames
                        ac ante ipsum primis in faucibus.
                    </p>
                </div>
                <div class="tm-col tm-about-col">
                    <p class="tm-mb-40">
                        You are NOT allowed to re-distribute this template ZIP file
                        on any website that <span class="tm-color-primary">collects and reposts</span> free templates
                        from many different websites.
                    </p>
                    <p class="tm-mb-40">
                        Pellentesque vitae ipsum vel risus molestie cursus nec quis
                        lectus. Duis egestas lorem eu nisi finibus, sit amet
                        elementum lacus pretium. In tempor felis vitae nulla feugiat aliquam.
                    </p>
                    <p class="tm-mb-40">
                If you need a working HTML contact form, 
                please visit our <a rel="nofollow" href="https://templatemo.com/contact" target="_parent">contact page</a>. </p>
                    <a href="#" class="tm-btn tm-btn-primary mfp-prevent-close tm-btn-contact tm-mb-40">
                        Contact Us
                    </a>
                </div>               
            </div>
        </div>

        <div id="contact" class="popup mfp-with-anim mfp-hide tm-bg-gray">
            <a href="#" class="tm-close-popup">
                Close
                <i class="fas fa-times"></i>
            </a>
            <h2 class="tm-contact-col tm-color-primary tm-page-title tm-mb-40">Contact Us</h2>
            <div class="tm-row tm-contact-row">
                <div class="tm-col tm-contact-col">
                
                <!-- Do you need a working HTML contact form?
                	Please visit https://templatemo.com/contact page -->
                    
                    <form id="contact-form" action="" method="POST" class="tm-contact-form">
                        <div class="form-group">
                            <input type="text" name="name" class="form-control rounded-0" placeholder="Full Name" required />
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" class="form-control rounded-0" placeholder="Email" required />
                        </div>
                        <div class="form-group">
                            <select class="form-control" id="contact-select" name="inquiry">
                                <option value="-">Subject</option>
                                <option value="sales">Sales &amp; Marketing</option>
                                <option value="creative">Creative Design</option>
                                <option value="uiux">UI / UX</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <textarea rows="8" name="message" class="form-control rounded-0" placeholder="Message" required=></textarea>
                        </div>

                        <div class="form-group tm-text-right">
                            <button type="submit" class="tm-btn tm-btn-primary">Send it now</button>
                        </div>
                    </form>
                </div>
                <div class="tm-col tm-contact-col tm-contact-col-r">
                    <!-- Map -->
                    <div class="mapouter tm-mb-40">
                        <div class="gmap_canvas">
                            <iframe width="100%" height="520" id="gmap_canvas"
                                src="https://maps.google.com/maps?q=Av.+L%C3%BAcio+Costa,+Rio+de+Janeiro+-+RJ,+Brazil&t=&z=13&ie=UTF8&iwloc=&output=embed"
                                frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                        </div>
                    </div>

                    <!-- Address -->
                    <address class="tm-mb-40">
                        110-220 Nam vel ultricies mauris,<br>
                        Et gravida eros 10220
                    </address>

                    <!-- Links -->
                    <ul class="tm-contact-links">
                        <li>
                            <a href="tel:0100200340">
                                <i class="fas fa-phone tm-contact-link-icon"></i>
                                Tel: 010-020-0340
                            </a>
                        </li>
                        <li>
                            <a href="mailto:info@company.com">
                                <i class="fas fa-at tm-contact-link-icon"></i>
                                Email: info@company.com
                            </a>
                        </li>
                        <li>
                            <a href="https://www.company.com">
                                <i class="fas fa-link tm-contact-link-icon"></i>
                                URL: www.company.com
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-add-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="footer-add">
                        <a href="#"><img src="img/bg-img/footer-add.gif" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Footer Add Area End ##### -->

    <!-- social links section -->
    <div class="social-share" style="margin-left:50%;">
                            
                            <div class="social-links">
                                <h3>Share with friends:</h3>
                                <a><img src="https://img.icons8.com/ios-glyphs/30/fa314a/facebook-new.png"/></a>
                                <a href="#"><img src="https://img.icons8.com/ios-glyphs/30/fa314a/twitter-squared.png"/></a>
                                <a href="#"><img src="https://img.icons8.com/ios-glyphs/30/fa314a/instagram-new.png"/></a>
                                <a href="#"> <img src="https://img.icons8.com/ios-glyphs/30/fa314a/pinterest.png"/></a>
                            </div> <!-- .social-links -->
                            
                            
                        </div>

    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>    
    <script src="js/templatemo-script.js"></script>
    <footer class="footer-area">

       <?php include('footer.php'); ?>
    </footer>
    <?php include('donate.php'); ?>

    <!-- ##### Footer Area Start ##### -->

    <!-- ##### All Javascript Files ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/semantic.min.js"></script>

    <script type="text/javascript">
    $(function(){
    $("#test").click(function(){
        $(".test").modal('show');
    });
    $(".test").modal({
        closable: true
    });
});
</script>
</body>
</html>