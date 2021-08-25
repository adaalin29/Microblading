@extends('parts.template') @section('content')
<div class="header-small"></div>
<div class="container">
    <div class="actual-page">
        <div class="actual-page-item"><a href="" class="actual-page-link">Homepage</a></div>
        <div class="actial-page-dunga">|</div>
        <div class="actual-page-item"><a href="" class="actual-page-link">Classes</a></div>
    </div>
    <div class="page-elemente-container-modified mobile-hidden">
        <div class="page-element">
            <div class="page-element-poza">
                <img class="full-width" src="images/e1.svg">
            </div>
            <div class="page-element-text">Delux free
                microblading KIT</div>
        </div>
        <div class="page-element">
            <div class="page-element-poza">
                <img class="full-width" src="images/e2.svg">
            </div>
            <div class="page-element-text">6 months free
                support & training</div>
        </div>
        <div class="page-element">
            <div class="page-element-poza">
                <img class="full-width" src="images/e3.svg">
            </div>
            <div class="page-element-text">Kraft Master
                free application</div>
        </div>
        <div class="page-element">
            <div class="page-element-poza">
                <img class="full-width" src="images/e4.svg">
            </div>
            <div class="page-element-text">Dicount at all
                microblading products</div>
        </div>
        <div class="page-element">
            <div class="page-element-poza">
                <img class="full-width" src="images/e5.svg">
            </div>
            <div class="page-element-text">Marketing advices
                from our experts</div>
        </div>
    </div>
    <div class="elemente-swiper-container desktop-hidden">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="page-element page-element-mobil">
                        <div class="page-element-poza">
                            <img class="full-width" src="images/e1.svg">
                        </div>
                        <div class="page-element-text">Delux free
                            microblading KIT</div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="page-element page-element-mobil">
                        <div class="page-element-poza">
                            <img class="full-width" src="images/e2.svg">
                        </div>
                        <div class="page-element-text">6 months free
                            support & training</div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="page-element page-element-mobil">
                        <div class="page-element-poza">
                            <img class="full-width" src="images/e3.svg">
                        </div>
                        <div class="page-element-text">Kraft Master
                            free application</div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="page-element page-element-mobil">
                        <div class="page-element-poza">
                            <img class="full-width" src="images/e4.svg">
                        </div>
                        <div class="page-element-text">Dicount at all
                            microblading products</div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="page-element page-element-mobil">
                        <div class="page-element-poza">
                            <img class="full-width" src="images/e5.svg">
                        </div>
                        <div class="page-element-text">Marketing advices
                            from our experts</div>
                    </div>
                </div>
            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
            <!-- Add Arrows -->
            <div class="swiper-button-next swiper-button-black"></div>
            <div class="swiper-button-prev swiper-button-black"></div>
        </div>
    </div>
    <div class="page-title classes-title-modified">latest classes</div>
    <div class="categories-container classes-add-categories-container">
        <div class="categories-item">Micropoint</div>
        <div class="categories-item">phibrows</div>
        <div class="categories-item-selected">phinjection</div>
    </div>
    <div class="classes-add-container">
        <div class="page-text classes-add-page-text">Currently there are no scheduled courses. But you can register in the form below and we
            will notify you when we are in your city.</div>
        <form class="register">
            <input class="form-input" type="text" id="name" name="name" placeholder="Name">
            <input class="form-input" type="email" id="email" name="email" placeholder="Email">
            <input class="form-input" type="number" id="number" name="number" placeholder="Phone">
            <input class="form-input" type="text" id="number" name="text" placeholder="Where do you live?">
            <div class="checkbox-register">
                <input type="checkbox" id="accept-privacy" name="termeni" value="checkbox"
                    style="vertical-align: middle; text-align: left; width: 20px;">
                <div class="termeni-text">Yes, I accept the <a href="" class="termeni-link">Terms &amp; Conditions.</a>
                </div>
            </div>
            <button class="register-button">register now</button>
        </form>
    </div>
</div>
<div class="testimonials-swiper-container">
    <div class="container">
        <div class="testimonials-container">
            <div class="index-about-title index-testimonials-title">Testimonials</div>
            <div class="testimonials-swiper">
                <div class="swiper-container swiper-container-initialized swiper-container-horizontal">
                    <div class="swiper-wrapper"
                        style="transition-duration: 0ms; transform: translate3d(-1336px, 0px, 0px);">
                        <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active swiper-slide-prev"
                            data-swiper-slide-index="0" style="width: 1336px;">
                            <div class="testimonial-item">
                                <div class="testimonial-text">Extremly hard worker, professional, teaches with passion
                                    and loves what he does! His love for Phibrows is contagious. The best!</div>
                                <div class="testimonial-person">Georgeta Juncu Worzella</div>
                            </div>
                        </div>
                        <div class="swiper-slide swiper-slide-active swiper-slide-duplicate-next swiper-slide-duplicate-prev"
                            data-swiper-slide-index="0" style="width: 1336px;">
                            <div class="testimonial-item">
                                <div class="testimonial-text">Extremly hard worker, professional, teaches with passion
                                    and loves what he does! His love for Phibrows is contagious. The best!</div>
                                <div class="testimonial-person">Georgeta Juncu Worzella</div>
                            </div>
                        </div>
                        <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active swiper-slide-next"
                            data-swiper-slide-index="0" style="width: 1336px;">
                            <div class="testimonial-item">
                                <div class="testimonial-text">Extremly hard worker, professional, teaches with passion
                                    and loves what he does! His love for Phibrows is contagious. The best!</div>
                                <div class="testimonial-person">Georgeta Juncu Worzella</div>
                            </div>
                        </div>
                    </div>
                    <!-- Add Arrows -->
                    <div class="swiper-pagination swiper-pagination-bullets"><span
                        class="swiper-pagination-bullet swiper-pagination-bullet-active"></span></div>
                        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                    </div>
                </div>
            </div>
            <div class="swiper-button-next swiper-button-black testimonial-next-button" tabindex="0" role="button"
                aria-label="Next slide"></div>
            <div class="swiper-button-prev swiper-button-black testimonial-prev-button" tabindex="0" role="button"
                aria-label="Previous slide"></div>
    </div>
</div>
@endsection