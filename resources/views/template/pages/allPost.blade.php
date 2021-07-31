@extends('template.main')

@section('tile_front')
    {{ setting('site.title') }} - {{ $title }}
@endsection

@section('head_front')
    <meta name="keywords" content="Escalavel" />
    <meta name="description" content="Crescimento Acelerado">
@endsection

@section('content')

 {{-- header --}}
 @include('template.header.header1')


 <div role="main" class="main">

    <section class="page-header page-header-modern overlay overlay-op-5 page-header-background bg-color-dark p-relative z-index-1 lazyload" data-bg-src="">
        <span class="custom-circle custom-circle-1 bg-color-light custom-circle-blur appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="400"></span>
        <span class="custom-circle custom-circle-2 bg-color-primary appear-animation" data-appear-animation="zoomIn" data-appear-animation-delay="500"></span>
        <span class="custom-circle custom-circle-3 bg-color-primary appear-animation" data-appear-animation="zoomIn" data-appear-animation-delay="600"></span>
        <div class="container">
            <div class="row mt-5">
                <div class="col">
                    <ul class="breadcrumb breadcrumb-light custom-title-with-icon-primary d-block">
                        <li><a href="/">Home</a></li>
                        <li class="active">{{ $title }}</li>
                    </ul>
                    <h1 class="custom-text-10 font-weight-bold">{{ $title }}</h1>
                </div>
            </div>
        </div>
    </section>



        <div class="container py-2">

            <div class="row mt-5">
                <div class="col">
                    <div class="blog-posts">

                        <div class="row">

                         @forelse ($posts as $post)
                            @php
                                $categoria = App\Models\Front\Category::find($post->category_id);
                                if($categoria){
                                    $categoria = $categoria->name;
                                }else {
                                    $categoria = "Sem categoria";
                                }
                            @endphp


                            <div class="col-md-4 col-lg-3">
                                <article class="post post-medium border-0 pb-0 mb-5">
                                    <div class="post-image">
                                        <a href="{{ url('/post/' . $post->slug) }}">
                                            <img src="{{url('assets/img/blog/medium/blog-1.jpg')}}" class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt="" />
                                        </a>
                                    </div>

                                    <div class="post-content">

                                        <h2 class="font-weight-semibold text-5 line-height-6 mt-3 mb-2"><a href="{{ url('/post/' . $post->slug) }}">{{$post->title}}</a></h2>
                                        <p>Euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>

                                        <div class="post-meta">
                                            <span><i class="far fa-user"></i> Por <a href="#">Bob Doe</a> </span>
                                            <span><i class="far fa-folder"></i> <a href="#">{{$categoria}}</a> </span>
                                            <span class="d-block mt-2"><a href="{{ url('/post/' . $post->slug) }}" class="btn btn-xs btn-light text-1 text-uppercase">Leia Mais</a></span>
                                        </div>

                                    </div>
                                </article>
                            </div>
                        @empty
                            <p>Nenhum post cadastrado.</p>
                        @endforelse

                        </div>
                        {!! $posts->links() !!}

                    </div>
                </div>

            </div>

        </div>



</div>

  {{-- header --}}
  @include('template.footer.footer')

 @endsection
