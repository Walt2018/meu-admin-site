@extends('template.main')

@section('tile_front')
    {{ setting('site.title') }} - {{$work->title }}
@endsection

@section('head_front')
    <meta name="keywords" content="Escalavel" />
    <meta name="description" content="Crescimento Acelerado">
@endsection

@section('content')

 {{-- header --}}
 @include('template.header.header1')


 <div role="main" class="main">

    <section class="page-header page-header-modern overlay overlay-op-5 page-header-background bg-color-dark p-relative z-index-1 lazyload" data-bg-src="{{ Voyager::image($work->image) }}">
        <span class="custom-circle custom-circle-1 bg-color-light custom-circle-blur appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="400"></span>
        <span class="custom-circle custom-circle-2 bg-color-primary appear-animation" data-appear-animation="zoomIn" data-appear-animation-delay="500"></span>
        <span class="custom-circle custom-circle-3 bg-color-primary appear-animation" data-appear-animation="zoomIn" data-appear-animation-delay="600"></span>
        <div class="container">
            <div class="row mt-5">
                <div class="col">
                    <ul class="breadcrumb breadcrumb-light custom-title-with-icon-primary d-block">
                        <li><a href="/">Home</a></li>
                        <li class="active">{{$work->title }}</li>
                    </ul>
                    <h1 class="custom-text-10 font-weight-bold">{{$work->title }}</h1>
                </div>
            </div>
        </div>
    </section>
	<div role="main" class="main">

                        <div class="container py-5 mb-xl-5 p-relative z-index-2">
                            <div class="row">
                                <div class="col-xl-4 position-relative">

                                    <div id="sidebar" class="side-menu-our-work sidebar position-relative pt-5">
                                        <div data-plugin-sticky data-plugin-options="{'minWidth': 991, 'containerSelector': '.sticky-container', 'padding': {'top': 100}}">
                                            <div class="pb-4 my-2 ps-0 pe-0">
                                                <h4 class="text-color-light custom-text-8 font-weight-bold">Filtrar por Categoria:</h4>
                                                <ul class="list-unstyled sort-source sort-source-light">
                                                    <li class="nav-item" data-option-value="*">
                                                        <a href="{{url('portifolio')}}" class="text-color-quaternary text-color-hover-secondary text-decoration-none mb-2 p-0 d-block font-weight-medium">Todas</a>
                                                    </li>

                                                    @forelse ($categorieswork as $catwork )

                                                        <li class="nav-item" data-option-value=".{{ $catwork->slug }}">
                                                            <a href="{{url('portifolio#').$catwork->slug}}" class="text-color-quaternary text-color-hover-secondary text-decoration-none mb-2 p-0 d-block font-weight-medium">{{ $catwork->name }}</a>
                                                        </li>
                                                    @empty
                                                        <p>Nenhuma categoria cadastrada</p>
                                                    @endforelse

                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-8">

                                    <div class="container">

                                        {!!$work->content!!}
                                    </div>
                                    <div class="container py-4">

                                        <div class="row">
                                            <div class="col appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">

                                                <div class="owl-carousel owl-theme nav-inside nav-inside-edge nav-squared nav-with-transparency nav-dark nav-lg d-block overflow-hidden" data-plugin-options="{'items': 1, 'margin': 10, 'loop': true, 'nav': true, 'dots': false, 'autoHeight': true}" style="height: 510px;">


                                                    @foreach(json_decode($work->images) as $work_image)

                                                        <div>
                                                            <div class="img-thumbnail border-0 border-radius-0 p-0 d-block">
                                                                <img src="{{ Voyager::image( $work_image ) }}" class="img-fluid border-radius-0" alt="">
                                                            </div>
                                                        </div>

                                                    @endforeach

                                                    {{-- @foreach( $arr_images as $img_work)


                                                    @endforeach --}}

                                                </div>

                                            </div>
                                        </div>


                                    </div>
                                </div>

                            </div>
                        </div>


    </div>

</div>

  {{-- header --}}
  @include('template.footer.footer')

 @endsection
