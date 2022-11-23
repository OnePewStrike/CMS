@extends('layouts.app')

@section('title', 'About')

@section('content')

    <!-- Introduction Section  -->
    <section class="intro">
        <div class="left-intro">
            <header> Introduction <br> placeholder </header>
            <p> Lorem ipsum dolor sit amet, consectetur <br> adipiscing elit. Mauris maximus, lectus auctor imperdiet
                iaculis, diam justo tempus nisi, et <br> fringilla nisi ex vitae lectus.</p>
            <a href="#"><button class="btn btn-primary btn-large">Get Started</button></a>

            <div class="lower-content">
                <h3>Follow Us</h3>
                <div class="links">
                    <div class="link-col">
                        <i class="fa-brands fa-facebook"></i>
                        <h2>Facebook</h2>
                    </div>
                    <div class="link-col">
                        <i class="fa-brands fa-instagram"></i>
                        <h2>Instagram</h2>
                    </div>
                    <div class="link-col">
                        <i class="fa-brands fa-twitter"></i>
                        <h2>Twitter</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="right-img">
            <img src="/images/knight.png" alt="#">
        </div>
    </section>

    <!-- Content Banner Section  -->
    <section class="banner-container">
        <div class="banner">
            <div class="left-content">
                <header> Engage with others <br> anonymously online </header>
                <div class="detail-row">
                    <i class="fa-sharp fa-solid fa-circle-check"></i>
                    <h3> Lorem ipsum dolor </h3>
                </div>
                <h5>Lorem ipsum dolor sit amet consectetur <br> adipisicing elit. Excepturi, hic?</h5>
                <div class="detail-row">
                    <i class="fa-sharp fa-solid fa-circle-check"></i>
                    <h3> Lorem ipsum dolor </h3>
                </div>
                <h5>Lorem ipsum dolor sit amet consectetur <br> adipisicing elit. Excepturi, hic?</h5>
                <div class="detail-row">
                    <i class="fa-sharp fa-solid fa-circle-check"></i>
                    <h3> Lorem ipsum dolor </h3>
                </div>
                <h5>Lorem ipsum dolor sit amet consectetur <br> adipisicing elit. Excepturi, hic?</h5>
            </div>
            <div class="right-content">
            </div>
        </div>
    </section>

    <!-- Content Collection Section  -->
    <section class="collection">
        <h1>Check Our Collection</h1>
        <p class="message">See all of them? <a href="categories.html">Categories</a></p>
        <div class="row">
            <div class="content-col">
                <h3>Category Name</h3>
                <p># of collection</p>
            </div>
            <div class="content-col">
                <h3>Category Name</h3>
                <p># of collection</p>
            </div>
            <div class="content-col">
                <h3>Category Name</h3>
                <p># of collection</p>
            </div>
        </div>
        <div class="row">
            <div class="content-col">
                <h3>Category Name</h3>
                <p># of collection</p>
            </div>
            <div class="content-col">
                <h3>Category Name</h3>
                <p># of collection</p>
            </div>
            <div class="content-col">
                <h3>Category Name</h3>
                <p># of collection</p>
            </div>
        </div>
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
