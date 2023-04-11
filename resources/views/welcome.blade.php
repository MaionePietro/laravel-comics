
@extends('layout.app')
@section('content')
<section class="main_cards">
    <ul class="container cards">
        <li>
            <a href="">
                <img src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png')}}" alt="">
                <span>DIGITAL COMICS</span>
            </a>
        </li>
        <li>
            <a href="">
                <img src="{{ Vite::asset('resources/img/buy-comics-merchandise.png')}}" alt="">
                <span>DC MERCHANDISE</span>
            </a>
        </li>
        <li>
            <a href="">
                <img src="{{ Vite::asset('resources/img/buy-comics-subscriptions.png')}}" alt="">
                <span>SUBSCRIPTION</span>
            </a>
        </li>
        <li>
            <a href="">
                <img src="{{ Vite::asset('resources/img/buy-comics-shop-locator.png')}}" alt="" class="img">
                <span>COMIC SHOP LOCATOR</span>
            </a>
        </li>
        <li>
            <a href="">
                <img src="{{ Vite::asset('resources/img/buy-dc-power-visa.svg')}}" alt="">
                <span>DC POWER VISA</span>
            </a>
        </li>
    </ul>
</section>

@endsection