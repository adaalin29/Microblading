@extends('parts.template') @section('content')
<div class="header-small"></div>
<div class="container">
    <div class="actual-page">
        <div class="actual-page-item"><a href="" class="actual-page-link">Homepage</a></div>
        <div class="actial-page-dunga">|</div>
        <div class="actual-page-item"><a href="" class="actual-page-link">Phinjection</a></div>
        <div class="actial-page-dunga">|</div>
        <div class="actual-page-item"><a href="" class="actual-page-link">Gallery</a></div>
    </div>
    <div class = "categories-container gallery-categories-container">
        <div class = "categories-item">Micropoint</div>
        <div class = "categories-item">phibrows</div>
        <div class = "categories-item-selected">phinjection</div>
    </div>
    <div class = "gallery-container">
        <a class="fancybox-width fancy-picture" data-fancybox="gallery" href="images/gallery-item.png">
            <div class="gallery-item"><img class="gallery-image" src="images/gallery-item.png"></div>
        </a>
        <a class="fancybox-width fancy-picture" data-fancybox="gallery" href="images/gallery-item.png">
            <div class="gallery-item"><img class="gallery-image" src="images/gallery-item.png"></div>
        </a>
        <a class="fancybox-width fancy-picture" data-fancybox="gallery" href="images/gallery-item.png">
            <div class="gallery-item"><img class="gallery-image" src="images/gallery-item.png"></div>
        </a>
        <a class="fancybox-width fancy-picture" data-fancybox="gallery" href="images/gallery-item.png">
            <div class="gallery-item"><img class="gallery-image" src="images/gallery-item.png"></div>
        </a>
        <a class="fancybox-width fancy-picture" data-fancybox="gallery" href="images/gallery-item.png">
            <div class="gallery-item"><img class="gallery-image" src="images/gallery-item.png"></div>
        </a>
        <a class="fancybox-width fancy-picture" data-fancybox="gallery" href="images/gallery-item.png">
            <div class="gallery-item"><img class="gallery-image" src="images/gallery-item.png"></div>
        </a>
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