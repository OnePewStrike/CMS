@extends('layouts.app')

@section('title', 'About')

@section('content')
    <!-- About Introduction -->
    <section class="about-container">
        <header>About Us</header>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut at urna sit amet odio <br> tincidunt euismod sit amet
            vel
            libero. Sed dignissim condimentum volutpat. <br> Vivamus sollicitudin tincidunt quam sit amet.</p>
    </section>

    <!-- Team Section  -->
    <section class="team-container">
        <header>Meet the Team</header>
        <div class="row">
            <div class="content-col">
                <img src="/images/moses.png" alt="">
                <h2>Moses Cubelo</h2>
                <p>Neque porro quisquam <br> est qui dolorem ipsum <br> quia dolor sit amet, <br> consectetur, adipisci <br>
                    velit</p>
                <h5>Back-End Developer</h5>
                <i class="fa-brands fa-facebook"></i>
            </div>
            <div class="content-col">
                <img src="/images/godwin.png" alt="">
                <h2>Godwin Duliente</h2>
                <p>Neque porro quisquam <br> est qui dolorem ipsum <br> quia dolor sit amet, <br> consectetur, adipisci <br>
                    velit</p>
                <h5>Front-End Developer</h5>
                <i class="fa-brands fa-facebook"></i>
            </div>
            <div class="content-col">
                <img src="/images/mebz.png" alt="">
                <h2>Ellyza Papas</h2>
                <p>Neque porro quisquam <br> est qui dolorem ipsum <br> quia dolor sit amet, <br> consectetur, adipisci <br>
                    velit</p>
                <h5>System Analyst</h5>
                <i class="fa-brands fa-facebook"></i>
            </div>
        </div>
    </section>

    <!-- Join Section  -->
    <section class="join">
        <header> Lorem ipsum </header>
        <h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </h4>
        <a href="#"><button class="btn btn-secondary btn-large">Get Connected</button></a>
    </section>
@endsection
