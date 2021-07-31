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

	<section class="py-5">
        <div class="container sticky-container">
            <div class="row justify-content-between">
                <div class="col-xl-3 position-relative">
                    <div id="sidebar" class="side-menu-our-work sidebar position-relative mb-5">
                        <div data-plugin-sticky data-plugin-options="{'minWidth': 991, 'containerSelector': '.sticky-container', 'padding': {'top': 140}}">
                            <h4 class="text-color-light custom-text-8 font-weight-bold custom-title-with-icon custom-title-with-icon-primary">Categorias:</h4>
                            <ul class="list-unstyled sort-source sort-source-light" data-sort-id="portfolio" data-option-key="filter">
                                <li class="nav-item active" data-option-value="*">
                                    <a href="#ourWork" data-hash data-hash-offset="100" class="text-color-quaternary text-color-hover-light text-decoration-none mb-2 p-0 d-block font-weight-medium">Todos</a>
                                </li>
                                @forelse ($categorieswork as $catwork )
                                <li class="nav-item" data-option-value=".{{ $catwork->slug }}">
                                    <a href="#ourWork" data-hash data-hash-offset="100"
                                        class="text-color-quaternary text-color-hover-light text-decoration-none mb-2 p-0 d-block font-weight-medium">
                                        {{ $catwork->name }}</a>
                                </li>
                            @empty
                                <p>Nenhuma categoria cadastrada</p>
                            @endforelse

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8 our-work" id="ourWork">
                    <div class="sort-destination w-100" data-sort-id="portfolio">

                        @forelse ($works as $work)

                        <div class="row w-100 mb-4 isotope-item {{ $work->workcategory->slug }}">
                            <div class="col-sm-12 custom-our-work overlay overlay-op-9 overlay-show p-0">
                                <a href="{{ url('/portifolio/' . $work->slug) }}" class="d-block h-100">
                                    <img src="{{ Voyager::image($work->img_thumb) }}" class="w-100 h-100">
                                    <div class="w-100 custom-our-work-text px-5 py-3 d-flex align-items-end p-absolute bottom-0">
                                        <div class="text-start p-relative z-index-2 mb-3">
                                            <h4 class="text-color-light custom-text-8 font-weight-bold text-decoration-none mb-2">{{ $work->title }}</h4>
                                            {{-- <p class="text-uppercase custom-text-3 text-color-quaternary text-decoration-none mb-3">brand and identity, content strategy</p> --}}
                                            <span class="custom-text-4 font-weight-semibold m-0 p-0 text-color-light custom-btn-with-arrow custom-btn-with-arrow-primary text-decoration-none">Ver Detalhes</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                    @empty
                        <p>Nenhum portfolio encontrado!</p>
                    @endforelse

                    </div>
                </div>
            </div>
        </div>
    </section>





</div>

  {{-- header --}}
  @include('template.footer.footer')

 @endsection
