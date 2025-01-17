@extends('forntend copy.layouts.website')
<div id="main" class="site-main">

    <!--Banner Section Start-->
    <section id="home" class="banner-section pt-page">

        <div class="banner-slider">
            <div id="slides">
                <div class="slides-container">
                    <!--Slide 1-->
                    <img src="{{ asset('assets/website/new') }}/img/slider/img-1.jpg" alt="">
                    <!--Slide 2-->
                    <img src="{{ asset('assets/website/new') }}/img/slider/img-2.jpg" alt="">
                </div>
            </div>
        </div>

        @section('content')
        <div class="banner-content">
                <h1 class="mb-20">Philip <span>Watson</span></h1>
            </div>
            @endsection

    </section>
</div>
