@extends('layouts.app')

@section('title', "$category->name")

@section('content')

    <!-- Home Introduction Banner Section -->
    <section class="home-intro-banner">
        <h2> Lorem ipsum dolor. </h2>
        <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse feugiat. </p>
        <button type="submit" class="btn btn-primary" id="openPost" style="padding: 8px 40px 8px 40px;">Post</button>

        <!-- Post Pop-Up Section  -->
        <section class="pstp-container" id="post">
            <div class="content-pop" id="popup">
                <form action="#">
                    <div class="header">
                        <h2>Post Your Confession</h2>
                        <button id="closePost"><i class="fas fa-times"></i></button>
                    </div>

                    <div class="content-row">
                        <div class="content-title">
                            <h3>Category Name</h3>
                        </div>
                        <textarea required="required" class="category"></textarea>
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
                        <button type="button" class="btn btn-primary">Post</button>
                    </div>
                </form>
            </div>
        </section>
    </section>

    <!-- Standard Search Bar Section  -->
    <section class="search-container">
        <form role="search" action="{{ url('search') }}" method="GET">
            <input type="search" placeholder="Search by Name" name="search">
            <button type="submit">
                <i class="fa-solid fa-magnifying-glass"></i>
            </button>
        </form>
    </section>

    <!-- Content Post Section  -->
    <section class="post-container">
        <div class="row">
            @foreach ($post as $postitem)
                <div class="wrapper-post">
                    <a href="{{ url('category/' . $category->name . '/' . $postitem->name) }}">
                        <div class="content-col">
                            <h3>{{ $category->created_at->format('m-d-Y') }}</h3>
                            <div class="content">
                                <p>
                                    {{ $postitem->description }}
                                </p>
                            </div>
                            <div class="actions">
                                <i class="fa-solid fa-comment"></i>
                            </div>
                            <div class="user-details">
                                <h3 class="user-name">{{ $postitem->user->name }}</h3>
                                <h3 class="category-name">{{ $category->name }}</h3>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
            <div class="paginate">
                {{ $post->links() }}
            </div>
    </section>

@endsection
