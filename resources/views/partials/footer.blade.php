<section class="footer_info">
    <img src="/img/dc-logo-bg.png" alt="" class="imgBg">
    <div class="container">
        <div>
            <ListLink :title="links[0].title" :urls="links[0].urls" />
            <ListLink :title="links[1].title" :urls="links[1].urls" />
        </div>
        <div>
            <ListLink :title="links[2].title" :urls="links[2].urls" />
        </div>
        <div>
            <ListLink :title="links[3].title" :urls="links[3].urls" />
        </div>
    </div>
</section>
<section class="footer_profiles">
    <div class="container">
        <div>
            <a href="" class="sing-up">SING-UP NOW!</a>
        </div>
        <div>
            <ul>
                <li><a class="follow" href="">FOLLOW US</a></li>
                <li><a href=""><img src="{{ Vite::asset('resources/img/footer-facebook.png')}}" alt=""></a></li>
                <li><a href=""><img src="{{ Vite::asset('resources/img/footer-twitter.png')}}" alt=""></a></li>
                <li><a href=""><img src="{{ Vite::asset('resources/img/footer-pinterest.png')}}" alt=""></a></li>
                <li><a href=""><img src="{{ Vite::asset('resources/img/footer-youtube.png')}}" alt=""></a></li>
                <li><a href=""><img src="{{ Vite::asset('resources/img/footer-twitter.png')}}" alt=""></a></li>
            </ul>
        </div>
    </div>
</section>