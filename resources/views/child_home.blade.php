@extends('home')
	
@section('title','home')
        @section('sidebar')
        <div class="tm-header-wrapper">
            <button class="navbar-toggler" type="button" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <div class="tm-site-header">
                <div class="mb-3 mx-auto tm-site-logo"><i class="fas fa-times fa-2x"></i></div>            
                <h1 class="text-center">My Blog</h1>
            </div>
            <nav class="tm-nav" id="tm-nav">            
                <ul>
                    <li class="tm-nav-item active"><a href="http://127.0.0.1:8000/home" class="tm-nav-link">
                        <i class="fas fa-home"></i>
                        Blog Home
                    
                    </a></li>
                    <li class="tm-nav-item"><a href="http://127.0.0.1:8000/profil" class="tm-nav-link">
                        <i class="fas fa-users"></i>
                        About Me      
                    </a></li>
                </ul>
            </nav>
            <div class="tm-mb-65">
                <a rel="nofollow" href="https://fb.com/templatemo" class="tm-social-link">
                    <i class="fab fa-facebook tm-social-icon"></i>
                </a>
                <a href="https://twitter.com" class="tm-social-link">
                    <i class="fab fa-twitter tm-social-icon"></i>
                </a>
                <a href="https://instagram.com" class="tm-social-link">
                    <i class="fab fa-instagram tm-social-icon"></i>
                </a>
                <a href="https://linkedin.com" class="tm-social-link">
                    <i class="fab fa-linkedin tm-social-icon"></i>
                </a>
            </div>
            <p class="tm-mb-80 pr-5 text-white">
                a sticky menu bar. Right side content will scroll up and down.
            </p>
        </div>
    </header>
    @endsection

    @section('header')
    <div class="container-fluid">
        <main class="tm-main">
            <!-- Search form -->
            <div class="row tm-row">
                <div class="col-12">
                    <form method="GET" class="form-inline tm-mb-80 tm-search-form">                
                        <input class="form-control tm-search-input" name="query" type="text" placeholder="Search..." aria-label="Search">
                        <button class="tm-search-button" type="submit">
                            <i class="fas fa-search tm-search-icon" aria-hidden="true"></i>
                        </button>                                
                    </form>
                </div>                
            </div>
            @endsection

            @section('content')            
            <div class="row tm-row">
                <article class="col-12 col-md-6 tm-post">
                    <hr class="tm-hr-primary">
                    <a href="{{ asset('blog/post.html') }}" class="effect-lily tm-post-link tm-pt-60">
                        <div class="tm-post-link-inner">
                            <img src="{{ asset('blog/img/img-01.jpg') }}" alt="Image" class="img-fluid">                            
                        </div>
                        <span class="position-absolute tm-new-badge">New</span>
                        <h2 class="tm-pt-30 tm-color-primary tm-post-title">Beach</h2>
                    </a>                    
                    <p class="tm-pt-30">
                       Dunia fotografi tidak lepas dari keindahan.<br>
                       Pantai adalah salah satu objek yang indah<br>
                       untuk diabadikan 
                    </p>
                    <div class="d-flex justify-content-between tm-pt-45">
                        <span class="tm-color-primary">Travel . Events</span>
                        <span class="tm-color-primary">June 24, 2021</span>
                    </div>
                    <hr>
                    <div class="d-flex justify-content-between">
                        <span>36 comments</span>
                        <span>by me</span>
                    </div>
                </article>
                <article class="col-12 col-md-6 tm-post">
                    <hr class="tm-hr-primary">
                    <a href="{{ asset('blog/post.html') }}" class="effect-lily tm-post-link tm-pt-60">
                        <div class=" tm-post-link-inner">
                            <img src="{{ asset('blog/img/img-02.jpg') }}" alt="Image" class="img-fluid">                            
                        </div>
                        <span class="position-absolute tm-new-badge">New</span>
                        <h2 class="tm-pt-30 tm-color-primary tm-post-title">Fruit</h2>
                    </a>                    
                    <p class="tm-pt-30">
                        <a rel="nofollow" href="https://templatemo.com/tm-553-xtra-blog" target="_blank"></a>
                        Objek fotografi juga tidak hanya memandang keindahan. tekstur dari suatu objek juga sangat dibutuhkan
                    </p>
                    <div class="d-flex justify-content-between tm-pt-45">
                        <span class="tm-color-primary">Creative . Design . Fotografi</span>
                        <span class="tm-color-primary">June 16, 2021</span>
                    </div>
                    <hr>
                    <div class="d-flex justify-content-between">
                        <span>48 comments</span>
                        <span>by me</span>
                    </div>
                </article>
                <article class="col-12 col-md-6 tm-post">
                    <hr class="tm-hr-primary">
                    <a href="{{ asset('blog/post.html') }}" class="effect-lily tm-post-link tm-pt-20">
                        <div class="tm-post-link-inner">
                            <img src="{{ asset('blog/img/img-03.jpg') }}" alt="Image" class="img-fluid">
                        </div>
                        <h2 class="tm-pt-30 tm-color-primary tm-post-title">Human</h2>
                    </a>                    
                    <p class="tm-pt-30">
                        Suatu objek fotografi juga tidak jauh dari kehidupan nyata, manusia adalah salah satu objek yang dapat diabadikan
                    </p>
                    <div class="d-flex justify-content-between tm-pt-45">
                        <span class="tm-color-primary">Music . Audio</span>
                        <span class="tm-color-primary">June 11, 2021</span>
                    </div>
                    <hr>
                    <div class="d-flex justify-content-between">
                        <span>24 comments</span>
                        <span>by me</span>
                    </div>
                </article>
                <article class="col-12 col-md-6 tm-post">
                    <hr class="tm-hr-primary">
                    <a href="{{ asset('blog/post.html') }}" class="effect-lily tm-post-link tm-pt-20">
                        <div class="tm-post-link-inner">
                            <img src="{{ asset('blog/img/img-04.jpg') }}"  alt="Image" class="img-fluid">
                        </div>
                        <h2 class="tm-pt-30 tm-color-primary tm-post-title">Picture</h2>
                    </a>                    
                    <p class="tm-pt-30">
                       Selain keindahan fotografi juga mempelajari <u>aesthetic</u><br>
                       dari suatu objek
                    </p>
                    <div class="d-flex justify-content-between tm-pt-45">
                        <span class="tm-color-primary">Artworks . Design</span>
                        <span class="tm-color-primary">June 4, 2021</span>
                    </div>
                    <hr>
                    <div class="d-flex justify-content-between">
                        <span>72 comments</span>
                        <span>by me</span>
                    </div>
                </article>
                <article class="col-12 col-md-6 tm-post">
                    <hr class="tm-hr-primary">
                    <a href="{{ asset('blog/post.html') }}" class="effect-lily tm-post-link tm-pt-20">
                        <div class="tm-post-link-inner">
                            <img src="{{ asset('blog/img/img-05.jpg') }}"  alt="Image" class="img-fluid">
                        </div>
                        <h2 class="tm-pt-30 tm-color-primary tm-post-title">Videos</h2>
                    </a>                    
                    <p class="tm-pt-30">
                        Tidak hanya memandang dari suatu object gambar melainkan juga dapat berupa video yang telah diabadikan
                        <br>
                        Title #099 New #0CC <br>
                        <span class="tm-color-primary">Text #999 Line #CCC Next #0CC Prev #F0F0F0</span>
                    </p>
                    <div class="d-flex justify-content-between tm-pt-45">
                        <span class="tm-color-primary">Creative . Video . Audio</span>
                        <span class="tm-color-primary">May 31, 2021</span>
                    </div>
                    <hr>
                    <div class="d-flex justify-content-between">
                        <span>84 comments</span>
                        <span>by me</span>
                    </div>
                </article>
                <article class="col-12 col-md-6 tm-post">
                    <hr class="tm-hr-primary">
                    <a href="{{ asset('blog/post.html') }}" class="effect-lily tm-post-link tm-pt-20">
                        <div class="tm-post-link-inner">
                            <img src="{{ asset('blog/img/img-06.jpg') }}"  alt="Image" class="img-fluid">
                        </div>
                        <h2 class="tm-pt-30 tm-color-primary tm-post-title">lampion</h2>
                    </a>                    
                    <p class="tm-pt-30">
                       fotografi juga akan melihat dari sisi posisi dari hal tersebut akan tercipta karya yang indah
                    </p>
                    <div class="d-flex justify-content-between tm-pt-45">
                        <span class="tm-color-primary">Visual . Artworks</span>
                        <span class="tm-color-primary">June 16, 2021</span>
                    </div>
                    <hr>
                    <div class="d-flex justify-content-between">
                        <span>96 comments</span>
                        <span>by me</span>
                    </div>
                </article>
                @show
            </div>
            <div class="row tm-row tm-mt-100 tm-mb-75">
                <div class="tm-prev-next-wrapper">
                    <a href="#" class="mb-2 tm-btn tm-btn-primary tm-prev-next disabled tm-mr-20">Prev</a>
                    <a href="#" class="mb-2 tm-btn tm-btn-primary tm-prev-next">Next</a>
                </div>
                <div class="tm-paging-wrapper">
                    <span class="d-inline-block mr-3">Page</span>
                    <nav class="tm-paging-nav d-inline-block">
                        <ul>
                            <li class="tm-paging-item active">
                                <a href="#" class="mb-2 tm-btn tm-paging-link">1</a>
                            </li>
                            <li class="tm-paging-item">
                                <a href="#" class="mb-2 tm-btn tm-paging-link">2</a>
                            </li>
                            <li class="tm-paging-item">
                                <a href="#" class="mb-2 tm-btn tm-paging-link">3</a>
                            </li>
                            <li class="tm-paging-item">
                                <a href="#" class="mb-2 tm-btn tm-paging-link">4</a>
                            </li>
                        </ul>
                    </nav>
                </div>                
            </div>
            @endsection
            
            @section('footer')            
            <footer class="row tm-row">
                <hr class="col-12">
                <div class="col-md-6 col-12 tm-color-gray">
                    Design: <a rel="nofollow" target="_parent" href="https://templatemo.com" class="tm-external-link">TemplateMe</a>
                </div>
                <div class="col-md-6 col-12 tm-color-gray tm-copyright">
                    Copyright 2021 Blog Me.
                </div>
            </footer>
        </main>
    </div>
    @endsection
