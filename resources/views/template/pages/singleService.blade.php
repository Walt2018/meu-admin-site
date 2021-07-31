@extends('template.main')

@section('tile_front')
    {{ setting('site.title') }} - {{ $service->title }}
@endsection

@section('head_front')
    <meta name="keywords" content="Escalavel" />
    <meta name="description" content="Crescimento Acelerado">
@endsection

@section('content')

 {{-- header --}}
 @include('template.header.header1')


 <div role="main" class="main">

    <section class="page-header page-header-modern overlay overlay-op-5 page-header-background bg-color-dark p-relative z-index-1 lazyload" data-bg-src="{{ Voyager::image($service->image) }}">
        <span class="custom-circle custom-circle-1 bg-color-light custom-circle-blur appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="400"></span>
        <span class="custom-circle custom-circle-2 bg-color-primary appear-animation" data-appear-animation="zoomIn" data-appear-animation-delay="500"></span>
        <span class="custom-circle custom-circle-3 bg-color-primary appear-animation" data-appear-animation="zoomIn" data-appear-animation-delay="600"></span>
        <div class="container">
            <div class="row mt-5">
                <div class="col">
                    <ul class="breadcrumb breadcrumb-light custom-title-with-icon-primary d-block">
                        <li><a href="/">Home</a></li>
                        <li class="active">{{ $service->title }}</li>
                    </ul>
                    <h1 class="custom-text-10 font-weight-bold">{{ $service->title }}</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="mt-3 mt-xl-0 py-5 p-relative z-index-2">
        <div class="container">
            <div class="row">

                <div class="col-xl-12 mt-lg-12 mt-xl-0">
                    <div class="pb-5 appear-animation" style="background:url({{Voyager::image($service->img_thumb)}}) no-repeat center center;background-size:cover;height:350px; margin-bottom:15px" data-appear-animation="fadeIn" data-appear-animation-delay="800">

                    </div>

                    <div class="custom-text-4 mb-4 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="400">
                         {!! $service->content !!}
                    </div>


                </div>
            </div>
        </div>
    </section>

</div>

  {{-- header --}}
  @include('template.footer.footer')

 @endsection
