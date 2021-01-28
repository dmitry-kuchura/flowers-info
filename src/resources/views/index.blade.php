@extends('layouts.main')

@section('title', __('seo.index.title'))
@section('description', __('seo.index.description'))
@section('keywords', __('seo.index.keywords'))

@section('content')
    <div>
        <div class="fullwidth-template">
            <div class="home-slider-banner">
                <div class="container">
                    <div class="row10">
                        @widget('slider')
                        @widget('topBanner')
                    </div>
                </div>
            </div>
            @widget('latestNews')
            @widget('bottomBanner')
        </div>
    </div>
    @widget('instagramFeed')
@endsection
