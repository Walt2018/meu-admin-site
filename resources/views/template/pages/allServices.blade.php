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

</div>

  {{-- header --}}
  @include('template.footer.footer')

 @endsection
