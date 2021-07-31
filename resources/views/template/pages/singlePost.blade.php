@extends('template.main')

@section('tile_front')
    {{ setting('site.title') }} - {{ $post->title }}
@endsection

@section('head_front')
    <meta name="keywords" content="Escalavel" />
    <meta name="description" content="Crescimento Acelerado">
@endsection

@section('content')

 {{-- header --}}
 @include('template.header.header1')


 <div role="main" class="main">

    <section class="page-header page-header-modern overlay overlay-op-5 page-header-background bg-color-dark p-relative z-index-1 lazyload" data-bg-src="{{ Voyager::image($post->image) }}">
        <span class="custom-circle custom-circle-1 bg-color-light custom-circle-blur appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="400"></span>
        <span class="custom-circle custom-circle-2 bg-color-primary appear-animation" data-appear-animation="zoomIn" data-appear-animation-delay="500"></span>
        <span class="custom-circle custom-circle-3 bg-color-primary appear-animation" data-appear-animation="zoomIn" data-appear-animation-delay="600"></span>
        <div class="container">
            <div class="row mt-5">
                <div class="col">
                    <ul class="breadcrumb breadcrumb-light custom-title-with-icon-primary d-block">
                        <li><a href="/">Home</a></li>
                        <li class="active">{{ $post->title }}</li>
                    </ul>
                    <h1 class="custom-text-10 font-weight-bold">{{ $post->title }}</h1>
                </div>
            </div>
        </div>
    </section>

    <div class="container py-5 p-relative z-index-2">
        <div class="row">
            <div class="col-lg-9 pb-5">
                <article>

                    <p class="text-uppercase text-1 mb-3 text-color-default"><time pubdate datetime="2021-01-10">10 Jan 2021</time> <span class="opacity-3 d-inline-block px-2">|</span> John Doe</p>

                    {!! $post->body !!}

                    <!-- AddThis Button BEGIN -->
                    <div class="addthis_toolbox addthis_default_style ">
                        <a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
                        <a class="addthis_button_tweet"></a>
                        <a class="addthis_button_pinterest_pinit"></a>
                        <a class="addthis_counter addthis_pill_style"></a>
                    </div>
                    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=xa-50faf75173aadc53"></script>
                    <!-- AddThis Button END -->

                    <hr class="my-5">

                    <div class="post-block post-author">
                        <h3 class="text-color-light text-capitalize font-weight-bold text-5 m-0 mb-3">Autor</h3>
                        <div class="img-thumbnail img-thumbnail-no-borders d-block pb-3">
                            <a href="#">
                                <img src="img/avatars/avatar.jpg" class="rounded-circle" alt="">
                            </a>
                        </div>
                        <p><strong class="name"><a href="#" class="text-4 text-light pb-2 pt-2 d-block">John Doe</a></strong></p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Sed dui lorem, adipiscing in adipiscing et, interdum nec metus.</p>
                    </div>

                    <hr class="my-5">

                </article>
            </div>
            <div class="col-lg-3 pt-4 pt-lg-0">
                <aside class="sidebar">
                    {{-- <div class="px-3 mb-4">
                        <h3 class="text-color-light text-capitalize font-weight-bold text-5 m-0 mb-3">About The Blog</h3>
                        <p class="m-0">Lorem ipsum dolor sit amet, conse elit porta. Vestibulum ante justo, volutpat quis porta diam.</p>
                    </div>
                    <div class="py-1 clearfix">
                        <hr class="my-2">
                    </div>--}}
                    <div class="px-3 mt-4">
                        <form action="page-search-results.html" method="get">
                            <div class="input-group mb-3 pb-1">
                                <input class="form-control box-shadow-none text-1 border-0 bg-color-grey" placeholder="Pesquisar..." name="s" id="s" type="text">
                                <button type="submit" class="btn bg-color-grey text-1 p-2"><i class="fas fa-search m-2"></i></button>
                            </div>
                        </form>
                    </div>
                    <div class="py-1 clearfix">
                        <hr class="my-2">
                    </div>
                    <div class="px-3 mt-4">
                        <h3 class="text-color-light text-capitalize font-weight-bold text-5 m-0 mb-3">Posts Recentes</h3>
                        <div class="pb-2 mb-1">

                            @forelse ($recentsPosts as $rposts)
                            <a href="#" class="text-color-default text-uppercase text-1 mb-0 d-block text-decoration-none">10 Jan 2021 <span class="opacity-3 d-inline-block px-2">|</span> John Doe</a>
                            <a href="{{url('/post/'.$rposts->slug)}}" class="text-color-light text-hover-primary font-weight-bold text-3 d-block pb-3 line-height-4">{{$rposts->title}}</a>
                            @empty
                                <p>Nenhum post</p>
                            @endforelse

                        </div>
                    </div>
                    <div class="py-1 clearfix">
                        <hr class="my-2">
                    </div>

                    <div class="px-3 mt-4">
                        <h3 class="text-color-light text-capitalize font-weight-bold text-5 m-0">Categorias</h3>
                        <ul class="nav nav-list flex-column mt-2 mb-0 p-relative right-9">
                            @foreach ($categoriesPost as $category)
                                 <li class="nav-item"><a class="nav-link bg-transparent border-0" href="#">{{$category->name}}</a></li>
                            @endforeach

                        </ul>
                    </div>
                </aside>
            </div>
        </div>
    </div>

</div>

  {{-- header --}}
  @include('template.footer.footer')

 @endsection
