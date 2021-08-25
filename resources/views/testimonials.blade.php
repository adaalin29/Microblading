@extends('parts.template') @section('content')
<div class="header-small"></div>
<div class="container">
    <div class="actual-page">
        <div class="actual-page-item"><a href="" class="actual-page-link">Homepage</a></div>
        <div class="actial-page-dunga">|</div>
        <div class="actual-page-item"><a href="" class="actual-page-link">Testimonials</a></div>
    </div>
    <div class="page-content">
        <div class="page-title">Testimonials</div>
        <div class="page-text testimonials-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
            laboris nisi ut aliquip ex ea commodo consequat.<br><br>
        </div>
        <div class="testimonials-videos-container">
            <div class="testimonial-video-item">
                <a style="width:100%;display:block;" data-fancybox href="https://vimeo.com/191947042">
                    <div class="testimonial-video">
                        <div class="overlay">
                        </div>
                        <div class="testimonials-btn-position"><img class="testimonial-play-btn"
                                src="images/play-button.png"></div>
                        <img class="full-width testimonials-image" src="images/video-image.png">
                    </div>
                </a>
            </div>
            <div class="testimonial-video-item">
                <a style="width:100%;display:block;" data-fancybox href="https://vimeo.com/191947042">
                    <div class="testimonial-video">
                        <div class="overlay">
                        </div>
                        <div class="testimonials-btn-position"><img class="testimonial-play-btn"
                                src="images/play-button.png"></div>
                        <img class="full-width testimonials-image" src="images/video-image.png">
                    </div>
                </a>
            </div>
            <div class="testimonial-video-item">
                <a style="width:100%;display:block;" data-fancybox href="https://vimeo.com/191947042">
                    <div class="testimonial-video">
                        <div class="overlay">
                        </div>
                        <div class="testimonials-btn-position"><img class="testimonial-play-btn"
                                src="images/play-button.png"></div>
                        <img class="full-width testimonials-image" src="images/video-image.png">
                    </div>
                </a>
            </div>
            <div class="testimonial-video-item">
                <a style="width:100%;display:block;" data-fancybox href="https://vimeo.com/191947042">
                    <div class="testimonial-video">
                        <div class="overlay">
                        </div>
                        <div class="testimonials-btn-position"><img class="testimonial-play-btn"
                                src="images/play-button.png"></div>
                        <img class="full-width testimonials-image" src="images/video-image.png">
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div class="grid">
        <div class="grid-item">
            <div class = "testimonial-item-container">
                <a class="fancybox-width fancy-picture" data-fancybox="gallery" href="images/testimonial1.jpg">
                    <img class = "mason-image" src = "images/testimonial1.jpg">
                </a>
            </div>
        </div>
        <div class="grid-item">
            <div class = "testimonial-item-container">
                <a class="fancybox-width fancy-picture" data-fancybox="gallery" href="images/testimonial1.jpg">
                    <img class = "mason-image" src = "images/testimonial2.jpg">
                </a>
            </div>
        </div>
        <div class="grid-item">
            <div class = "testimonial-item-container">
                <a class="fancybox-width fancy-picture" data-fancybox="gallery" href="images/testimonial1.jpg">
                    <img class = "mason-image" src = "images/testimonial3.jpg">
                </a>
            </div>
        </div>
        <div class="grid-item">
            <div class = "testimonial-item-container">
                <a class="fancybox-width fancy-picture" data-fancybox="gallery" href="images/testimonial1.jpg">
                    <img class = "mason-image" src = "images/testimonial4.jpg">
                </a>
            </div>
        </div>
        <div class="grid-item">
            <div class = "testimonial-item-container">
                <a class="fancybox-width fancy-picture" data-fancybox="gallery" href="images/testimonial1.jpg">
                    <img class = "mason-image" src = "images/testimonial5.jpg">
                </a>
            </div>
        </div>
      </div>
</div>
<div class="steps-container">
        <div class="steps-element">
            <div class="steps-image-container">
                <img class="full-width steps-image" src="images/steps1.png">
            </div>
            <div class="steps-number aos-init aos-animate" data-aos="fade-right">01
                <div class="steps-text desktop-hidden">phibrows</div>
            </div>
        </div>
        <div class="steps-element">
            <div class="steps-image-container">
                <img class="full-width steps-image" src="images/steps2.png">
            </div>
            <div class="steps-number aos-init aos-animate" data-aos="fade-up">02
                <div class="steps-text desktop-hidden">micropoint</div>
            </div>
        </div>
        <div class="steps-element">
            <div class="steps-image-container">
                <img class="full-width steps-image" src="images/steps3.png">
            </div>
            <div class="steps-number aos-init aos-animate" data-aos="fade-left">03
                <div class="steps-text desktop-hidden">phinjection</div>
            </div>
            
        </div>
    </div>
@endsection
@push('scripts')
<script>
        AOS.init();
      </script>
@endpush