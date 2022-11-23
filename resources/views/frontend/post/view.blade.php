@extends('layouts.app')

@section('title', 'View Post')

@section('content')

    <!-- Content Post Section  -->
    <section class="pc-container">

        <div class="row">
            <div class="content-col">
                <div class="icon">
                    <i class="fa-solid fa-user"></i>
                </div>
                <h3>{!! $post->user->name !!}</h3>
            </div>
            <div class="content-col">
                <div class="icon">
                    <i class="fa-solid fa-clock"></i>
                </div>
                <h3>{!! $post->created_at->format('m-d-Y') !!}</h3>
            </div>
            <div class="content-col">
                <div class="icon">
                    <i class="fas fa-columns"></i>
                </div>
                <h3>{{ $post->category->name }}</h3>
            </div>
        </div>

        <div class="horizontal-line"></div>

        <div class="header-details">
            <i class="fa-solid fa-quote-left"></i>
            <h1>{!! $post->name !!}.</h1>

        </div>
        <p>
            {!! $post->description !!}
        </p>

        {{-- <div class="fav-icon">
            <button>
                <div class="icon"><i class="fa-solid fa-heart"></i></div>
                <span>Add to Favorite</span>
            </button>
        </div> --}}

    </section>

    <!-- Comments Section  -->
    <section class="ms-container">
        <div class="header-details">
            <h1># Comments</h1>
            <button class="btn btn-border-md" id="openComment">Leave a Comment</button>
        </div>
        <div class="row">
            <div class="content-col"></div>
            <div class="content-col"></div>
            <div class="content-col"></div>
        </div>
        <div class="action">
            <button class="btn btn-border-md">Show More</button>
        </div>

        <!-- Post Comment Pop-Up Section  -->
        <section class="cpop-container" id="comment">
            <div class="content-cpop" id="cpopup">
                <form action="#">
                    <div class="header">
                        <h2>Leave a Comment</h2>
                        <label for="click" class="fas fa-times" id="closeComment"></label>
                    </div>

                    <div class="content-row">
                        <h3>Your Comment</h3>
                        <textarea required="required" class="box"></textarea>
                    </div>

                    <div class="content-btn">
                        <button type="button" class="btn btn-border">Post Content</button>
                    </div>
                </form>
            </div>
        </section>
    </section>
@endsection
