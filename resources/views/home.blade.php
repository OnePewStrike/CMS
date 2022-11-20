@extends('layouts.app')

@section('title', 'Home')

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
                    <i class="fa-solid fa-ghost"></i>
                    <a href="#">Scary</a>
                </button>
            </div>
        </div>
        <div class="right-content">
            <div class="breadcrumbs">
                <a href="home.html">Home</a>
            </div>
        </div>
        </ul>
    </section>

    <!-- Home Introduction Banner Section -->
    <section class="home-intro-banner">
        <h2> Anonymous Confession Vault</h2>
        <p> Post your darkest secrets, your untold confessions, or your unrevealed thoughts</p>
        <button type="submit" class="btn btn-primary" id="openPost" style="padding: 8px 40px 8px 40px;">Post</button>

        <!-- Post Pop-Up Section  -->
        <section class="pstp-container" id="post">
            <div class="content-pop" id="popup">
                <form action="#">
                    <div class="header">
                        <h2>Post Your Content</h2>
                        <label for="click" class="fas fa-times" id="closePost"></label>
                    </div>

                    <div class="content-row">
                        <div class="content-title">
                            <h3>Confession Title</h3>
                        </div>
                        <textarea required="required" class="title"></textarea>
                    </div>

                    <div class="content-row">
                        <div class="content-title">
                            <h3>Confession Message</h3>
                        </div>
                        <textarea required="required" class="message"></textarea>
                    </div>
                    <div class="content-btn">
                        <button type="button" class="btn btn-border">Post Content</button>
                    </div>
                </form>
            </div>
        </section>
    </section>

    <!-- Standard Search Bar Section  -->
    <section class="search-container">
        <form action="#">
            <input type="text" placeholder="Search by Name" name="Search">
            <button type="submit">
                <i class="fa-solid fa-magnifying-glass"></i>
            </button>
        </form>
    </section>

    <!-- Content Post Section  -->
    <section class="post-container">
        <div class="wrapper-post">
            <div class="content-col">
                <h3>created_at</h3>
                <div class="content">
                    <p>
                        Lorem ipsum dolor sit amet, cosectetur adipiscing elit. Duis at tincidunt ex, nonn malesuada orci
                        Proin
                        ipsum
                        tellus, mollis quis ipsum imperdiet, scelerisque laoreet nulla...
                    </p>
                </div>
                <div class="actions">
                    <i class="fa-solid fa-heart"></i>
                    <i class="fa-solid fa-comment"></i>
                </div>
                <div class="user-details">
                    <h3 class="user-name">user_name</h3>
                    <h3 class="category-name">category_name</h3>
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

{{-- @section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('You are logged in!') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection --}}
