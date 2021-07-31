@extends('template.main')

@section('tile_front')
    {{ setting('site.title') }} - {{ $page->title }}
@endsection

@section('head_front')
    <meta name="keywords" content="Escalavel" />
    <meta name="description" content="Crescimento Acelerado">
@endsection

@section('content')

 {{-- header --}}
 @include('template.header.header1')

 <div role="main" class="main">

    <section class="page-header page-header-modern overlay overlay-op-5 page-header-background bg-color-dark p-relative z-index-1 lazyload" data-bg-src="{{ Voyager::image($page->image) }}">
        <span class="custom-circle custom-circle-1 bg-color-light custom-circle-blur appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="400"></span>
        <span class="custom-circle custom-circle-2 bg-color-primary appear-animation" data-appear-animation="zoomIn" data-appear-animation-delay="500"></span>
        <span class="custom-circle custom-circle-3 bg-color-primary appear-animation" data-appear-animation="zoomIn" data-appear-animation-delay="600"></span>
        <div class="container">
            <div class="row mt-5">
                <div class="col">
                    <ul class="breadcrumb breadcrumb-light custom-title-with-icon-primary d-block">
                        <li><a href="/">Home</a></li>
                        <li class="active">{{ $page->title }}</li>
                    </ul>
                    <h1 class="custom-text-10 font-weight-bold">{{ $page->title }}</h1>
                </div>
            </div>
        </div>
    </section>

    {!! $page->body !!}


@if (Request::path()=='pagina/contate-nos')
        {{-- contato --}}
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h4
                class="text-color-light custom-text-10 font-weight-bold text-center custom-title-with-icon-center custom-title-with-icon custom-title-with-icon-primary pt-5 mt-5 mb-5">
                Envie-nos uma mensagem</h4>
            <form id="contactFormAdvanced" action="{{url('/enviar/contato')}}" method="POST">
                <input type="hidden" name="_method" value="POST">
                @csrf
                <div class="contact-form-success alert alert-success d-none mt-4"><strong>Sucesso!</strong> Mensagem
                    enviada com sucesso.</div>
                <div class="contact-form-error alert alert-danger d-none mt-4"><strong>Error!</strong> Houve um erro
                    ao enviar sua mensagem.</div>
                <div class="row">
                    <div class="form-group col-lg-6"><input id="name" name="name" value="" type="text"
                            class="form-control py-4 px-4 rounded-0 text-color-quaternary bg-color-tertiary border-0 appear-animation"
                            required="" placeholder="Nome" data-msg-required="Por favor, digite seu nome."
                            data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200" /></div>
                    <div class="form-group col-lg-6"><input id="phone" name="phone" value="" type="text"
                            class="form-control py-4 px-4 rounded-0 text-color-quaternary bg-color-tertiary border-0 appear-animation"
                            required="" placeholder="Celular"
                            data-msg-required="Por favor, digite seu número de telefone."
                            data-appear-animation="fadeInRightShorter" data-appear-animation-delay="400" /></div>
                </div>
                <div class="row">
                    <div class="form-group col-lg-6"><input id="email" name="email" value="" type="text"
                            class="form-control py-4 px-4 rounded-0 text-color-quaternary bg-color-tertiary border-0 appear-animation"
                            required="" placeholder="E-mail" data-msg-required="Por favor, digite seu email."
                            data-msg-email="Please enter a valid email." data-appear-animation="fadeInRightShorter"
                            data-appear-animation-delay="200" /></div>
                    <div class="form-group col-lg-6"><input id="subject" name="subject" value="" type="text"
                            class="form-control py-4 px-4 rounded-0 text-color-quaternary bg-color-tertiary border-0 appear-animation"
                            required="" placeholder="Assunto" data-msg-required="Por favor, digite o assunto."
                            data-appear-animation="fadeInRightShorter" data-appear-animation-delay="400" /></div>
                </div>
                <div class="row">
                    <div class="form-group col"><textarea id="message"
                            class="form-control py-4 px-4 rounded-0 text-color-quaternary bg-color-tertiary border-0 appear-animation"
                            maxlength="5000" name="message" required="" rows="8" placeholder="Mensagem"
                            data-msg-required="Por favor, digite a mensagem."
                            data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200"></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col"><button
                            class="btn btn-outline custom-btn-outline btn-primary rounded-0 text-color-light custom-text-4 bg-color-hover-transparent text-color-hover-light font-weight-semibold custom-button-with-arrow px-4 py-3 appear-animation"
                            type="submit" data-loading-text="Enviando..." data-appear-animation="fadeInRightShorter"
                            data-appear-animation-delay="600">Enviar</button></div>
                </div>
            </form>
        </div>
    </div>
</div>
@endif



</div>


  {{-- footer --}}
  @include('template.footer.footer')

@endsection
