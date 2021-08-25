@extends('parts.template') @section('content')
<div class="header-small"></div>
<div class="container">
    <div class="actual-page">
        <div class="actual-page-item"><a href="" class="actual-page-link">Homepage</a></div>
        <div class="actial-page-dunga">|</div>
        <div class="actual-page-item"><a href="" class="actual-page-link">Contact</a></div>
    </div>
    <div class = "contact-container">
        <div class = "contact-left">
            <div class = "contact-title">Do you have any question?</div>
            <div class = "contact-subtitle">Fill out this form and we will answer you as soon as possible.</div>
            <form class = "contact-form">
                <input class = "form-input" type="text" id="name" name="name" placeholder="Name">
                <input class = "form-input" type="email" id="email" name="name" placeholder="Email">
                <input class = "form-input" type="number" id="phone" name="phone" placeholder="Phone">
                <textarea name="message" placeholder="Message"></textarea>
                <div class = "termeni-container">
                    <input type="checkbox" id="accept-privacy" name="termeni" value="checkbox" style="vertical-align: middle; text-align: left; width: 20px;">
                    <div class = "termeni-text">Yes, I accept the <a href = "" class = "termeni-link">Terms & Conditions.</a></div>
                </div>
                <button class = "submit-button">send message</button>
            </form>
        </div>
        <div class = "contact-right"  data-aos="fade-right">
            <div class = "contact-right-title">You can find us on:</div>
            <div class = "contact-right-text">Email address:</div>
            <a href = "mailto:francek@phibrows.com" class = "contact-right-email" style = "margin-bottom:20px;">francek@phibrows.com</a>
            <div class = "contact-right-text">Phone numbers:</div>
            <div class= "contact-right-email">For German: <a href = "tel:0049 172 725 1225" class = "contact-right-email">0049 172 725 1225</a></div>
            <div class= "contact-right-email">For USA: <a href = "tel:0049 172 725 1225" class = "contact-right-email">0049 172 725 1225</a></div>
            <div class= "contact-right-email" style = "margin-bottom:20px;">For everyone: <a href = "tel:0049 172 725 1225" class = "contact-right-email">0049 172 725 1225</a></div>
            <div class = "contact-right-text">Social media:</div>
            <div class="contact-social-container">
                <div class="contact-social-element"><a class="link-social-item" href=""><img class="social-element-image" src="images/facebook-black.svg"></a></div>
                <div class="contact-social-element"><a class="link-social-item" href=""><img class="social-element-image" src="images/youtube-black.svg"></a></div>
                <div class="contact-social-element"><a class="link-social-item" href=""><img class="social-element-image" src="images/instagram-black.svg"></a></div>
                <div class="contact-social-element"><a class="link-social-item" href=""><img class="social-element-image" src="images/twitter-black.svg"></a></div>
                <div class="contact-social-element"><a class="link-social-item" href=""><img class="social-element-image" src="images/pinterest-black.svg"></a></div>
                <div class="contact-social-element"><a class="link-social-item" href=""><img class="social-element-image" src="images/t-black.svg"></a></div>
            </div>
        </div>
    </div>
</div>
{{-- <div class = "contact-banner">
    <a href = "" style = "display:block"><div class = "contact-banner-link">see our locations</div></a>
</div> --}}
@endsection
@push('scripts')
<script>
        AOS.init();
      </script>
@endpush