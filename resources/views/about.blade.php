@extends('layouts.app')

@section('title', 'About')

@section('content')
    <!-- Sub-header Section  -->
    <section class="sub-header">
        <div class="left-content">
            <div class="content-col">
                <button>
                    <i class="fa-solid fa-heart"></i>
                    <a href="#">Love+Relationships</a>
                </button>
            </div>
            <div class="content-col">
                <button>
                    <i class="fa-solid fa-book-skull"></i>
                    <a href="#">Confession+Secrets</a>
                </button>
            </div>
            <div class="content-col">
                <button>
                    <i class="fa-solid fa-face-angry"></i>
                    <a href="#">Hate </a>
                </button>
            </div>
            <div class="content-col">
                <button>
                    <i class="fa-solid fa-microphone"></i>
                    <a href="#">Opinion</a>
                </button>
            </div>
            <div class="content-col">
                <button>
                    <i class="fa-solid fa-landmark"></i>
                    <a href="#">Political </a>
                </button>
            </div>
            <div class="content-col">
                <button>
                    <i class="fa-solid fa-landmark"></i>
                    <a href="#">Scary</a>
                </button>
            </div>
        </div>
        <div class="right-content">
            <div class="breadcrumbs">
                <a href="home.html">Home</a>
                <i class="fa-solid fa-angle-right"></i>
                <a href="about.html">About</a>
            </div>
        </div>
        </ul>
    </section>

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

    <!-- Chat Pop Up Section  -->
    <button class="chat-btn" id="openChat">
        <i class="fa-solid fa-comments"></i>
    </button>

    <section class="chat-container" id="chat">
        <div class="wrapper">
            <div class="chat-header">
                <i class="fa-solid fa-arrow-left" id="closeChat"></i>
                <div class="user-details">
                    <img src="/images/knight.png" alt="">
                    <h2>Username placeholder</h2>
                </div>
            </div>

            <div class="users-container">
                <div class="chat-search">
                    <form action="#">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search by Name" name="Search">
                            <div class="input-btn">
                                <button class="btn btn-no-border-md" type="submit">
                                    <i class="fa-solid fa-magnifying-glass"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="row">
                    <img src="/images/knight.png" alt="">
                    <div class="person-details">
                        <h2>name placeholder</h2>
                        <h3>last chat placeholder</h3>
                    </div>
                    <span class="circle"></span>
                </div>
                <div class="row">
                    <img src="/images/knight.png" alt="">
                    <div class="person-details">
                        <h2>name placeholder</h2>
                        <h3>last chat placeholder</h3>
                    </div>
                    <span class="circle"></span>
                </div>
                <div class="row">
                    <img src="/images/knight.png" alt="">
                    <div class="person-details">
                        <h2>name placeholder</h2>
                        <h3>last chat placeholder</h3>
                    </div>
                    <span class="circle"></span>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer Section -->
    <section class="footer">
        <div class="row">
            <div class="content-col">
                <ul>
                    <li class="title">Categories</li>
                    <li>Category Name 1</li>
                    <li>Category Name 2</li>
                    <li>Category Name 3</li>
                    <li>Category Name 4</li>
                    <li>Category Name 5</li>
                </ul>
            </div>
            <div class="content-col">
                <ul>
                    <li class="title">Link Group 1</li>
                    <li>Link Name 1</li>
                    <li>Link Name 2</li>
                    <li>Link Name 3</li>
                </ul>
            </div>
            <div class="content-col">
                <ul>
                    <li class="title">Link Group 1</li>
                    <li>Link Name 1</li>
                    <li>Link Name 2</li>
                    <li>Link Name 3</li>
                </ul>
            </div>
            <div class="content-col">
                <ul>
                    <li class="title">Contact</li>
                    <li>Address</li>
                    <li>Email</li>
                    <li>Number</li>
                </ul>
            </div>
        </div>
        <div class="horizontal-line"></div>
        <div class="footer-details">
            <div class="left-content">
                <i class="fa-regular fa-copyright"></i>
                <h5>2022 Honghong Confession Vault.</h5>
            </div>
            <div class="right-content">
                <h5>Follows Us</h5>
                <div class="icon"><i class="fa-brands fa-facebook-f"></i></div>
                <div class="icon"><i class="fa-brands fa-instagram"></i></div>
                <div class="icon"><i class="fa-brands fa-twitter"></i></div>
            </div>
        </div>
    </section>
@endsection
