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

    {{-- main --}}
    <div role="main" class="main">

        <section class="section custom-circles-container section-angled bg-dark border-0 m-0 overlay overlay-op-7"
            style="background-image: url({{ Voyager::image(setting('site.imagem-banner-home')) }}); background-size: cover; background-position: center;">
            <span class="custom-circle custom-circle-1 bg-color-light custom-circle-blur appear-animation"
                data-appear-animation="fadeInRightShorter" data-appear-animation-delay="100"
                data-plugin-options="{'forceAnimation': true}"></span>
            <span class="custom-circle custom-circle-2 bg-color-primary appear-animation" data-appear-animation="zoomIn"
                data-appear-animation-delay="200" data-plugin-options="{'forceAnimation': true}"></span>
            <span class="custom-circle custom-circle-3 bg-color-primary appear-animation" data-appear-animation="zoomIn"
                data-appear-animation-delay="300" data-plugin-options="{'forceAnimation': true}"></span>
            <span class="custom-circle custom-circle-1 bg-color-light custom-circle-blur appear-animation"
                data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="400"
                data-plugin-options="{'forceAnimation': true}"></span>
            <span class="custom-circle custom-circle-2 bg-color-primary appear-animation" data-appear-animation="zoomIn"
                data-appear-animation-delay="500" data-plugin-options="{'forceAnimation': true}"></span>
            <span class="custom-circle custom-circle-3 bg-color-primary appear-animation" data-appear-animation="zoomIn"
                data-appear-animation-delay="600" data-plugin-options="{'forceAnimation': true}"></span>
            <div class="section-angled-layer-bottom section-angled-layer-increase-angle"></div>
            <div class="section-angled-content h-100">
                <div class="container pt-md-5 pb-lg-4 mt-5 mb-lg-5">
                    <div class="row pb-lg-5 mt-5 mb-lg-5">
                        {{-- banner --}}
                        {!! setting('site.banner_home') !!}
                        {{-- banner --}}
                    </div>
                    <div class="spacer py-5 mt-lg-5 mb-md-5"></div>
                </div>
            </div>
        </section>

        <section class="custom-cards p-relative mb-5 pb-5 z-index-2">
            <div class="container">
                <div class="row">
                    {{-- destaques home --}}
                        {!! setting('site.destaques_home') !!}
                    {{-- destaques home --}}
                </div>
            </div>
        </section>

        <section class="our-approach py-5 mb-4 mb-xl-5 mt-4 mt-xl-0 p-relative z-index-1" id="intro">
            <div class="container">

                <div class="row">

                    {{-- missao home --}}
                        {!! setting('site.missao_home') !!}
                    {{-- missao home --}}

                </div>
            </div>
        </section>

        <section class="our-work overflow-hidden" id="ourWork">
            <div class="container-fluid">
                <div class="row bg-color-dark">
                    <div class="col-xl-9 px-0">
                        <div class="sort-destination w-100" data-sort-id="portfolio">


                            <div class="row w-100 m-0">
                                @forelse ($works as $work)
                                    <div class="col-sm-6 m-0 p-0 isotope-item {{ $work->workcategory->slug }}">
                                        <div class="custom-our-work overlay overlay-op-4 overlay-show p-0">
                                            <a href="{{ url('/portifolio/' . $work->slug) }}" class="d-block">
                                                <img src='{{ Voyager::image($work->img_thumb) }}' class="w-100">
                                                <div
                                                    class="w-100 custom-our-work-text p-5 d-flex align-items-end p-absolute bottom-0">
                                                    <div class="text-start p-relative z-index-2 mb-3">
                                                        <h4
                                                            class="text-color-light custom-text-9 font-weight-bold text-decoration-none mb-2">
                                                            {{ $work->title }}
                                                        </h4>
                                                        {{-- <p
                                                        class="text-uppercase custom-text-4 text-color-quaternary text-decoration-none mb-3">
                                                        {{$work->description}}</p> --}}
                                                        <span
                                                            class="custom-text-4 font-weight-semibold m-0 p-0 text-color-light custom-btn-with-arrow custom-btn-with-arrow-primary text-decoration-none">Ver
                                                            Detalhes</span>
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
                    <div class="col-xl-3 bg-color-dark px-xl-0 sticky-container position-relative">
                        <div id="sidebar" class="side-menu-our-work sidebar position-relative">
                            <div data-plugin-sticky
                                data-plugin-options="{'minWidth': 991, 'containerSelector': '.sticky-container', 'padding': {'top': 100}}">
                                <div class="py-5 my-2 ps-5 pe-0">
                                    <h4
                                        class="text-color-light custom-text-10 font-weight-bold custom-title-with-icon custom-title-with-icon-primary">
                                        Portfolio</h4>
                                    <ul class="list-unstyled sort-source" data-sort-id="portfolio" data-option-key="filter">

                                        <li class="nav-item active" data-option-value="*">
                                            <a href="#ourWork" data-hash data-hash-offset="100"
                                                class="text-color-quaternary text-color-hover-light text-decoration-none mb-2 py-0 d-block">Ver
                                                Todos</a>
                                        </li>
                                        @forelse ($categorieswork as $catwork )
                                            <li class="nav-item" data-option-value=".{{ $catwork->slug }}">
                                                <a href="#ourWork" data-hash data-hash-offset="100"
                                                    class="text-color-quaternary text-color-hover-light text-decoration-none mb-2 py-0 d-block">
                                                    {{ $catwork->name }}</a>
                                            </li>
                                        @empty
                                            <p>Nenhuma categoria cadastrada</p>
                                        @endforelse

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="our-services p-relative py-5 my-5">
            <span class="custom-circle custom-circle-2 bg-color-quaternary appear-animation" data-appear-animation="zoomIn"
                data-appear-animation-delay="100"></span>
            <div class="container">
                <div class="row justify-content-center">
                    <h4 class="text-color-light custom-text-10 font-weight-bold text-center custom-title-with-icon-center custom-title-with-icon custom-title-with-icon-primary pb-5 mb-4 appear-animation"
                        data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">Nossos Serviços:</h4>
                </div>
                <div class="row">

                    @foreach ($services as $service)
                        <div class="col-md-4 appear-animation" data-appear-animation="fadeInRightShorter"
                            data-appear-animation-delay="200">
                            <a href="{{ url('/service/' . $service->slug) }}" class="text-decoration-none">
                                <div
                                    class="service-card mb-4 bg-color-dark bg-color-hover-primary w-100 font-weight-semibold custom-text-6 line-height-6 text-color-light p-relative">
                                    {{$service->title}}
                                </div>
                            </a>
                        </div>
                    @endforeach

                </div>

            </div>
        </section>

        <section class="our-insights bg-color-secondary p-relative py-5">
            <span class="custom-circle custom-circle-2 bg-color-primary appear-animation" data-appear-animation="zoomIn"
                data-appear-animation-delay="100"></span>
            <span class="custom-circle custom-circle-3 bg-color-primary appear-animation" data-appear-animation="zoomIn"
                data-appear-animation-delay="100"></span>
            <div class="container py-5">
                <div class="row">
                    <div class="col">
                        <h4 class="text-color-light custom-text-10 font-weight-bold text-center custom-title-with-icon-center custom-title-with-icon custom-title-with-icon-primary pb-5 mb-5 appear-animation"
                            data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">Blog</h4>
                    </div>
                </div>
                <div class="row">

                    @forelse ($posts as $post )

                        <div class="col-md-4">
                            <article class="post post-medium border-0 pb-0 mb-5">
                                <div class="post-image">
                                    <a href="{{ url('/post/' . $post->slug) }}">
                                        <img src="{{ Voyager::image($post->image) }}"
                                            class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt="" />
                                    </a>
                                </div>

                                <div class="post-content">

                                    <h2 class="font-weight-semibold text-5 line-height-6 mt-3 mb-2"><a
                                            href="{{ url('/post/' . $post->slug) }}">{{ $post->title }}</a></h2>
                                    <p>{{ $post->excerpt }}</p>

                                    <div class="post-meta">
                                        <span><i class="far fa-user"></i> <a href="#">{{ $post->created_at }}</a> </span>
                                        <span class="d-block mt-2"><a href="{{ url('/post/' . $post->slug) }}"
                                                class="btn btn-xs btn-light text-1 text-uppercase">Leia Mais</a></span>
                                    </div>

                                </div>
                            </article>
                        </div>

                    @empty
                </div>
                <p>Nada encontrado</p>
                @endforelse

                <div class="row">
                    <div class="col">
                        <a href="{{ url('/posts')}}"
                            class="btn btn-outline custom-btn-outline btn-primary rounded-0 text-color-light custom-text-4 bg-color-hover-transparent text-color-hover-light font-weight-semibold custom-btn-with-arrow px-4 py-3 appear-animation"
                            data-appear-animation="fadeInRightShorter" data-appear-animation-delay="400">Todos</a>
                    </div>
                </div>

            </div>
        </section>

        <section
            class="get-in-touch bg-color-after-secondary overlay overlay-color-primary overlay-show p-relative overflow-hidden"
            style="background-image: url({{ url('assets/img/demos/digital-agency-2/bg/bg-contato.jpg') }}); background-size: cover; background-position: center;">
            <span class="custom-circle custom-circle-1 bg-color-light appear-animation" data-appear-animation="zoomIn"
                data-appear-animation-delay="100"></span>
            <span class="custom-circle custom-circle-2 bg-color-light appear-animation" data-appear-animation="zoomIn"
                data-appear-animation-delay="100"></span>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <p class="mb-2 text-color-tertiary custom-text-7 custom-title-with-icon custom-title-with-icon-light appear-animation"
                            data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">Vamos entrar em
                            contato
                        </p>
                        <h4 class="text-color-light font-weight-bold custom-text-10 appear-animation"
                            data-appear-animation="fadeInRightShorter" data-appear-animation-delay="400">
                            Estamos interessados em conversar<br>
                            sobre o seu negócio.
                        </h4>
                    </div>
                    <div
                        class="col-lg-4 d-flex align-items-center justify-content-start justify-content-lg-end mt-5 mt-lg-0">
                        <a herf="#"
                            class="btn btn-outline custom-btn-outline btn-light border-white rounded-0 px-4 py-3 text-color-light text-color-hover-dark bg-color-hover-light custom-text-6 line-height-6 font-weight-semibold custom-btn-with-arrow appear-animation"
                            data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="600">Vamos lá!</a>
                    </div>
                </div>
            </div>
        </section>

    </div>

    {{-- header --}}
    @include('template.footer.footer')

@endsection
