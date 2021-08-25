@extends('parts.template') @section('content')
<div class="header-banner">
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="banner-image"><img class="baner-image-item" src="images/index-banner.png"></div>
            </div>
            <div class="swiper-slide">
                <div class="banner-image"><img class="baner-image-item" src="images/index-banner.png"></div>
            </div>
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination-elemente swiper-pagination"></div>
    </div>
</div>
<div class="steps-container mobile-hidden">
    <div class="steps-element">
        <div class="steps-image-container">
            <img class="full-width steps-image" src="images/steps1.png">
        </div>
        <div class="steps-number" data-aos="fade-right">01</div>
    </div>
    <div class="steps-element">
        <div class="steps-image-container">
            <img class="full-width steps-image" src="images/steps2.png">
        </div>
        <div class="steps-number" data-aos="fade-up">02</div>
    </div>
    <div class="steps-element">
        <div class="steps-image-container">
            <img class="full-width steps-image" src="images/steps3.png">
        </div>
        <div class="steps-number" data-aos="fade-left">03</div>
    </div>
</div>
<div class="container">
    <div class="index-about">
        <div class="index-about-title">about francek prsa</div>
        <div class="index-about-subtitle">Welcome to Francek Prsa Microblaging Academy.</div>
        <div class="index-about-text">Francek Prsa opened his first beauty salon in Germany in 1996. Today, he owns and
            franchises twelve salons with over 200 employees. Also, he founded and owns the Master Academy in Germany
            where make-up artists and professional hairdressers receive their training.
            The world’s most beautiful people can not do without his professional skills and his guidance any more.
        </div>
        <a href="francek">
            <div class="see-more-btn">see more</div>
        </a>
        <div class="index-about-social-container">
            <div class="index-about-social-element"><a class="link-social-item" href=""><img
                        class="social-element-image" src="images/facebook-black.svg"></a></div>
            <div class="index-about-social-element"><a class="link-social-item" href=""><img
                        class="social-element-image" src="images/youtube-black.svg"></a></div>
            <div class="index-about-social-element"><a class="link-social-item" href=""><img
                        class="social-element-image" src="images/instagram-black.svg"></a></div>
        </div>
    </div>
</div>
<div class="marketing-container">
    <div class="container">
        <div data-aos="fade-right" class="marketing-elements-container">
            <div class="marketing-element-container">
                <div class="marketing-image"><img src="images/marketing1.svg"></div>
                <div class="marketing-text">Marketing advices from our experts</div>
            </div>
            <div class="marketing-element-container">
                <div class="marketing-image"><img src="images/marketing2.svg"></div>
                <div class="marketing-text">Delux free microblading KIT</div>
            </div>
            <div class="marketing-element-container">
                <div class="marketing-image"><img src="images/marketing3.svg"></div>
                <div class="marketing-text">6 months free support & training</div>
            </div>
            <div class="marketing-element-container">
                <div class="marketing-image"><img src="images/marketing4.svg"></div>
                <div class="marketing-text">Kraft Master free application</div>
            </div>
            <div class="marketing-element-container">
                <div class="marketing-image"><img src="images/marketing5.svg"></div>
                <div class="marketing-text">Dicount at all microblading products</div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="classes-container">
        <div class="index-about-title classes-title">Latest Classes</div>
        <div class="classes-swiper">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="class-container">
                            <a style="display:block" href="">
                                <img class="full-width" src="images/class.png">
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="class-container">
                            <a style="display:block" href="">
                                <img class="full-width" src="images/class.png">
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="class-container">
                            <a style="display:block" href="">
                                <img class="full-width" src="images/class.png">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-button-next swiper-button-black"></div>
            <div class="swiper-button-prev swiper-button-black"></div>
        </div>
    </div>
</div>
<a style="display:block; text-decoration:none;" href="">
    <div class="presentation-element"
        style="background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),  url('../images/poza-index1.png');">
        <div class="presentation-text-left" data-aos="fade-right">phibrows</div>
    </div>
</a>
<a style="display:block; text-decoration:none;" text-decoration:none; href="">
    <div class="presentation-element"
        style="background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),  url('../images/poza-index2.png');">
        <div class="presentation-text-left align-text-right" data-aos="fade-left">micropoint</div>
    </div>
</a>
<a href = "" style = "display:block; text-decoration:none;">
        <div class="presentation-element"
        style="background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),  url('../images/poza-index3.png');">
        <div class="presentation-text-left" data-aos="fade-right">phinjection</div>
    </div>
</a>
<a href = "" style = "display:block; text-decoration:none;">
        <div class="presentation-element"
        style="background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),  url('../images/poza-index4.png');">
        <div class="presentation-text-left align-text-right" data-aos="fade-left">latest classes</div>
    </div>
</a>
<a href = "" style = "display:block; text-decoration:none;">
        <div class="presentation-element"
        style="background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),  url('../images/poza-index5.png');">
        <div class="presentation-text-left" data-aos="fade-right">francek</div>
    </div>
</a>
<a href = "" style = "display:block; text-decoration:none;">
        <div class="presentation-element"
        style="background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),  url('../images/poza-index6.png');">
        <div class="presentation-text-left align-text-right" data-aos="fade-left">testimonials</div>
    </div>
</a>

<div class="container">
    <div class="testimonials-container">
        <div class="index-about-title index-testimonials-title">Testimonials</div>
        <div class="testimonials-swiper">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <div class="testimonial-text">Extremly hard worker, professional, teaches with passion and
                                loves what he does! His love for Phibrows is contagious. The best!</div>
                            <div class="testimonial-person">Georgeta Juncu Worzella</div>
                        </div>
                    </div>
                </div>
                <!-- Add Arrows -->
                <div class="swiper-pagination"></div>
            </div>
        </div>
        <div class="swiper-button-next swiper-button-black testimonial-next-button"></div>
        <div class="swiper-button-prev swiper-button-black testimonial-prev-button"></div>
    </div>
</div>

@endsection
@push('scripts')
<script>
    AOS.init();
</script>
@endpush