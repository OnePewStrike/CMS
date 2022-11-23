@extends('layouts.app')

@section('title', 'Category')

@section('content')

    <!-- Categories Section  -->
    <section class="categories">
        <header> Select a Category</header>
        <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer tempor <br> euismod elit id sodales. Quisque
            dictum blandit
            arcu, quis lobortis. </p>
        <div class="container">
            <div class="row">
                <div class="row-col">
                    <i class="fa-solid fa-heart"></i>
                    <h5>Love+Relationships</h5>
                    <a href="#"> <button class="btn btn-primary">Select</button></a>
                </div>
                <div class="row-col">
                    <i class="fa-solid fa-book-skull"></i>
                    <h5>Confession+Secrets</h5>
                    <a href="#"> <button class="btn btn-primary">Select</button></a>
                </div>
                <div class="row-col">
                    <i class="fa-solid fa-face-angry"></i>
                    <h5>Hate </h5>
                    <a href="#"> <button class="btn btn-primary">Select</button></a>
                </div>
            </div>
            <div class="row">
                <div class="row-col">
                    <i class="fa-solid fa-microphone"></i>
                    <h5>Opinion</h5>
                    <a href="#"> <button class="btn btn-primary">Select</button></a>
                </div>
                <div class="row-col">
                    <i class="fa-solid fa-landmark"></i>
                    <h5>Political</h5>
                    <a href="#"> <button class="btn btn-primary">Select</button></a>
                </div>
                <div class="row-col">
                    <i class="fa-solid fa-ghost"></i>
                    <h5>Scary</h5>
                    <a href="#"> <button class="btn btn-primary">Select</button></a>
                </div>
            </div>
        </div>
    </section>
@endsection
