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
                        <div class="col-lg-8 silider-wrapp">
                            <div class="home-slider">
                                <div class="slider-owl owl-slick equal-container nav-center"
                                     data-slick='{"autoplay":true, "autoplaySpeed":9000, "arrows":false, "dots":true, "infinite":true, "speed":1000, "rows":1}'
                                     data-responsive='[{"breakpoint":"2000","settings":{"slidesToShow":1}}]'>
                                    <div class="slider-item style7">
                                        <div class="slider-inner equal-element">
                                            <div class="slider-infor">
                                                <h5 class="title-small">
                                                    Sale up to 40% off!
                                                </h5>
                                                <h3 class="title-big">
                                                    Plants For Health
                                                </h3>
                                                <div class="price">
                                                    New Price:
                                                    <span class="number-price">
														$270.00
													</span>
                                                </div>
                                                <a href="#" class="button btn-shop-the-look bgroud-style">Shop now</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slider-item style8">
                                        <div class="slider-inner equal-element">
                                            <div class="slider-infor">
                                                <h5 class="title-small">
                                                    Take A Plant
                                                </h5>
                                                <h3 class="title-big">
                                                    Get 20% off order now
                                                </h3>
                                                <div class="price">
                                                    Save Price:
                                                    <span class="number-price">
														$170.00
													</span>
                                                </div>
                                                <a href="#" class="button btn-shop-product">Shop now</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slider-item style9">
                                        <div class="slider-inner equal-element">
                                            <div class="slider-infor">
                                                <h5 class="title-small">
                                                    Teamo Best Collection
                                                </h5>
                                                <h3 class="title-big">
                                                    inspiration Plants
                                                </h3>
                                                <div class="price">
                                                    New Price:
                                                    <span class="number-price">
														$250.00
													</span>
                                                </div>
                                                <a href="#" class="button btn-chekout">Shop now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 banner-wrapp">
                            <div class="banner">
                                <div class="item-banner style7">
                                    <div class="inner">
                                        <div class="banner-content">
                                            <h3 class="title">Hanging <br/>Plants</h3>
                                            <div class="description">
                                                Adipiscing elit curabitur senectus sem
                                            </div>
                                            <a href="#" class="button btn-lets-do-it">Shop now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="banner">
                                <div class="item-banner style8">
                                    <div class="inner">
                                        <div class="banner-content">
                                            <h3 class="title">Grow <br/> Orchid</h3>
                                            <div class="description">
                                                Cras pulvinar lorem ipsum dolor conse
                                            </div>
                                            <span class="price">$379.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="teamo-blog-wraap default">
                <div class="container">
                    <h3 class="custommenu-title-blog">
                        Our Latest News
                    </h3>
                    <div class="teamo-blog default">
                        <div class="owl-slick equal-container nav-center"
                             data-slick='{"autoplay":false, "autoplaySpeed":1000, "arrows":false, "dots":true, "infinite":true, "speed":800, "rows":1}'
                             data-responsive='[{"breakpoint":"2000","settings":{"slidesToShow":3}},{"breakpoint":"1200","settings":{"slidesToShow":3}},{"breakpoint":"992","settings":{"slidesToShow":2}},{"breakpoint":"768","settings":{"slidesToShow":2}},{"breakpoint":"481","settings":{"slidesToShow":1}}]'>
                            <div class="teamo-blog-item equal-element layout1">
                                <div class="post-thumb">
                                    <a href="#">
                                        <img src="/images/slider-blog-thumb-1.jpg" alt="img">
                                    </a>
                                    <div class="category-blog">
                                        <ul class="list-category">
                                            <li class="category-item">
                                                <a href="#">Skincare</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="post-item-share">
                                        <a href="#" class="icon">
                                            <i class="fa fa-share-alt" aria-hidden="true"></i>
                                        </a>
                                        <div class="box-content">
                                            <a href="#">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                            <a href="#">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                            <a href="#">
                                                <i class="fa fa-google-plus"></i>
                                            </a>
                                            <a href="#">
                                                <i class="fa fa-pinterest"></i>
                                            </a>
                                            <a href="#">
                                                <i class="fa fa-linkedin"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="blog-info">
                                    <div class="blog-meta">
                                        <div class="post-date">
                                            Agust 17, 09:14 am
                                        </div>
                                        <span class="view">
											<i class="icon fa fa-eye" aria-hidden="true"></i>
											631
										</span>
                                        <span class="comment">
											<i class="icon fa fa-commenting" aria-hidden="true"></i>
											84
										</span>
                                    </div>
                                    <h2 class="blog-title">
                                        <a href="#">We bring you the best </a>
                                    </h2>
                                    <div class="main-info-post">
                                        <p class="des">
                                            Phasellus condimentum nulla a arcu lacinia, a venenatis ex congue.
                                            Mauris nec ante magna.
                                        </p>
                                        <a class="readmore" href="#">Read more</a>
                                    </div>
                                </div>
                            </div>
                            <div class="teamo-blog-item equal-element layout1">
                                <div class="post-thumb">
                                    <a href="#">
                                        <img src="/images/slider-blog-thumb-2.jpg" alt="img">
                                    </a>
                                    <div class="category-blog">
                                        <ul class="list-category">
                                            <li class="category-item">
                                                <a href="#">HOW TO</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="post-item-share">
                                        <a href="#" class="icon">
                                            <i class="fa fa-share-alt" aria-hidden="true"></i>
                                        </a>
                                        <div class="box-content">
                                            <a href="#">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                            <a href="#">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                            <a href="#">
                                                <i class="fa fa-google-plus"></i>
                                            </a>
                                            <a href="#">
                                                <i class="fa fa-pinterest"></i>
                                            </a>
                                            <a href="#">
                                                <i class="fa fa-linkedin"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="blog-info">
                                    <div class="blog-meta">
                                        <div class="post-date">
                                            Agust 17, 09:14 am
                                        </div>
                                        <span class="view">
											<i class="icon fa fa-eye" aria-hidden="true"></i>
											631
										</span>
                                        <span class="comment">
											<i class="icon fa fa-commenting" aria-hidden="true"></i>
											84
										</span>
                                    </div>
                                    <h2 class="blog-title">
                                        <a href="#">We know that buying Cars</a>
                                    </h2>
                                    <div class="main-info-post">
                                        <p class="des">
                                            Using Lorem Ipsum allows designers to put together layouts
                                            and the form content
                                        </p>
                                        <a class="readmore" href="#">Read more</a>
                                    </div>
                                </div>
                            </div>
                            <div class="teamo-blog-item equal-element layout1">
                                <div class="post-thumb">
                                    <div class="video-teamo-blog">
                                        <figure>
                                            <img src="/images/slider-blog-thumb-3.jpg" alt="img" width="370"
                                                 height="280">
                                        </figure>
                                        <a class="quick-install" href="#" data-videosite="vimeo"
                                           data-videoid="134060140"></a>
                                    </div>
                                    <div class="category-blog">
                                        <ul class="list-category">
                                            <li class="category-item">
                                                <a href="#">VIDEO</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="post-item-share">
                                        <a href="#" class="icon">
                                            <i class="fa fa-share-alt" aria-hidden="true"></i>
                                        </a>
                                        <div class="box-content">
                                            <a href="#">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                            <a href="#">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                            <a href="#">
                                                <i class="fa fa-google-plus"></i>
                                            </a>
                                            <a href="#">
                                                <i class="fa fa-pinterest"></i>
                                            </a>
                                            <a href="#">
                                                <i class="fa fa-linkedin"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="blog-info">
                                    <div class="blog-meta">
                                        <div class="post-date">
                                            Agust 17, 09:14 am
                                        </div>
                                        <span class="view">
											<i class="icon fa fa-eye" aria-hidden="true"></i>
											631
										</span>
                                        <span class="comment">
											<i class="icon fa fa-commenting" aria-hidden="true"></i>
											84
										</span>
                                    </div>
                                    <h2 class="blog-title">
                                        <a href="#">We design functional Cars</a>
                                    </h2>
                                    <div class="main-info-post">
                                        <p class="des">
                                            Risus non porta suscipit lobortis habitasse felis, aptent
                                            interdum pretium ut.
                                        </p>
                                        <a class="readmore" href="#">Read more</a>
                                    </div>
                                </div>
                            </div>
                            <div class="teamo-blog-item equal-element layout1">
                                <div class="post-thumb">
                                    <a href="#">
                                        <img src="/images/slider-blog-thumb-4.jpg" alt="img">
                                    </a>
                                    <div class="category-blog">
                                        <ul class="list-category">
                                            <li class="category-item">
                                                <a href="#">Skincare</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="post-item-share">
                                        <a href="#" class="icon">
                                            <i class="fa fa-share-alt" aria-hidden="true"></i>
                                        </a>
                                        <div class="box-content">
                                            <a href="#">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                            <a href="#">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                            <a href="#">
                                                <i class="fa fa-google-plus"></i>
                                            </a>
                                            <a href="#">
                                                <i class="fa fa-pinterest"></i>
                                            </a>
                                            <a href="#">
                                                <i class="fa fa-linkedin"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="blog-info">
                                    <div class="blog-meta">
                                        <div class="post-date">
                                            Agust 17, 09:14 am
                                        </div>
                                        <span class="view">
											<i class="icon fa fa-eye" aria-hidden="true"></i>
											631
										</span>
                                        <span class="comment">
											<i class="icon fa fa-commenting" aria-hidden="true"></i>
											84
										</span>
                                    </div>
                                    <h2 class="blog-title">
                                        <a href="#">We know that buying Cars</a>
                                    </h2>
                                    <div class="main-info-post">
                                        <p class="des">
                                            Class integer tellus praesent at torquent cras, potenti erat fames
                                            volutpat etiam.
                                        </p>
                                        <a class="readmore" href="#">Read more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="banner-wrapp">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="banner">
                                <div class="item-banner style4">
                                    <div class="inner">
                                        <div class="banner-content">
                                            <h4 class="teamo-subtitle">TOP STAFF PICK</h4>
                                            <h3 class="title">Shop Cactus</h3>
                                            <div class="description">
                                                Proin interdum magna primis id consequat dictum
                                            </div>
                                            <a href="#" class="button btn-shop-now">Shop now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="banner">
                                <div class="item-banner style5">
                                    <div class="inner">
                                        <div class="banner-content">
                                            <h3 class="title">Indoor Life<br/>Plants</h3>
                                            <span class="code">
												Use code:
												<span>
													TEAMO
												</span>
												Get 25% Off for all Accessories items!
											</span>
                                            <a href="#" class="button btn-shop-now">Shop now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
