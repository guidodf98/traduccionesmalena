@extends('master')

@section('content')

  <header class="container-m hero">
    <video src="{{ asset('images/video-fondo.mp4') }}" autoplay loop muted></video>
    <div class="container-s hero-content">
      <div class="hero-text-1">
        <h1>@lang('home.hero.text1')</h1>
        <h1>@lang('home.hero.text2')</h1>
      </div>
      <div class="hero-text-2">
        <h2>@lang('home.hero.text3')</h2>
        <h2>@lang('home.hero.text4')</h2>
      </div>
    </div>
  </header>
  <div class="container-m about-me" id="sobre-mi">
    <div class="container-s about-me-content">
      <div class="col col-1">
        <img id="about-me-logo" src="{{ @asset('images/logo texto derecha.png') }}"
          alt="Logo Traducciones Malena Ingles Español">
        <img id="about-me-foto-perfil" src="{{ @asset('images/foto-perfil.jpg') }}"
          alt="Traductora Ingles Español Malena Callejo">
      </div>
      <div class="col col-2">
        <div class="col-2-content">
          <div class="col-2-content-title">
            <h2>@lang('home.about_me.title')</h2>
            <hr class="hr-subtitulo">
            <h5>@lang('home.about_me.subtitle')</h5>
          </div>
          <p>@lang('home.about_me.p1')</p>
          <br>
          <p>@lang('home.about_me.p2')</p>
          <br>
          <p>@lang('home.about_me.p3')</p>
          <br>
          <p><b>@lang('home.about_me.p4')</b></p>
        </div>
      </div>
    </div>
  </div>
  <div class="container-m servicios" id="servicios">
    <h1 class="titulo-seccion">@lang('home.services.title')</h1>
    <hr class="hr-subtitulo">
    <div class="container-s servicios-etiquetas">
      <div class="servicios-etiquetas-etiqueta ">
        <div class="etiqueta-img">
          <img src="{{ asset('images/servicios/traduccion.png') }}" alt="Malena Traducciones Traduccion">
        </div>
        <div class="etiqueta-titulo">
          <h3>@lang('home.services.serv1.title')</h3>
        </div>
        <div class="etiqueta-texto">
          <p>@lang('home.services.serv1.p1')</p>
          <p>@lang('home.services.serv1.p2')</p>
        </div>
        <a href="{{ url('contacto') }}" class="btn btn-rosa">@lang('home.services.serv1.btn')</a>
      </div>
      <div class="servicios-etiquetas-etiqueta">
        <div class="etiqueta-img">
          <img src="{{ asset('images/servicios/revision.png') }}" alt="Malena Traducciones Revision">
        </div>
        <div class="etiqueta-titulo">
          <h3>@lang('home.services.serv2.title')</h3>
        </div>
        <div class="etiqueta-texto">
          <p>@lang('home.services.serv2.p1')</p>
          <p>@lang('home.services.serv2.p2')</p>
        </div>
        <a href="{{ url('contacto') }}" class="btn btn-rosa">@lang('home.services.serv2.btn')</a>
      </div>
      <div class="servicios-etiquetas-etiqueta">
        <div class="etiqueta-img">
          <img src="{{ asset('images/servicios/subtitulado.png') }}">
        </div>
        <div class="etiqueta-titulo">
          <h3>@lang('home.services.serv3.title')</h3>
        </div>
        <div class="etiqueta-texto">
          <p>@lang('home.services.serv3.p1')</p>
          <p>@lang('home.services.serv3.p2')</p>
        </div>
        <a href="{{ url('contacto') }}" class="btn btn-rosa">@lang('home.services.serv3.btn')</a>
      </div>
      <div class="servicios-etiquetas-etiqueta">
        <div class="etiqueta-img">
          <img src="{{asset('images/servicios/otros.png')}}">
        </div>
        <div class="etiqueta-titulo">
          <h3>@lang('home.services.serv4.title')</h3>
        </div>
        <div class="etiqueta-texto">
          <p>@lang('home.services.serv4.p1')</p>
        </div>
        <a href="{{ url('contacto') }}" class="btn btn-rosa">@lang('home.services.serv4.btn')</a>
      </div>
    </div>
  </div>
  <div class="container-m especializaciones" id="especializaciones">
    <h1 class="titulo-seccion">@lang('home.especializations.title')</h1>
    <hr class="hr-subtitulo">
    <div class="container-s especializaciones-etiquetas">
      <a href="{{ url('/esp/tg') }}">
        <div class="especializaciones-etiqueta especializacion-1">
          <img src="{{ @asset('images/tg/tg-b.svg') }}">
          <h4>@lang('home.especializations.esp1')</h4>
        </div>
      </a>
      <a href="{{ url('/esp/tt') }}">
        <div class="especializaciones-etiqueta especializacion-2">
          <img src="{{ @asset('images/tt/tt-b.svg') }}">
          <h4>@lang('home.especializations.esp2')</h4>
        </div>
      </a>
      <a href="{{ url('/esp/lt') }}">
        <div class="especializaciones-etiqueta especializacion-3">
          <img src="{{ @asset('images/lt/lt-b.svg') }}">
          <h4>@lang('home.especializations.esp3')</h4>
        </div>
      </a>
    </div>
  </div>
  <div class="container-m testimonios">
    <i class="icon-me icon-left-open icon-testimonio" onclick=testimonioAnterior()>&#xe802;</i>
    <div class="testimonio">
      <div id="testimonio-1" class="etiqueta-testimonio ">
        <p class="etiqueta-testimonio-texto"> @lang('home.testimonials.test1.text') </p><br>
        <p class="etiqueta-testimonio-nombre"> @lang('home.testimonials.test1.name') </p>
        <p class="etiqueta-testimonio-ciudad"> @lang('home.testimonials.test1.business') </p>
        <p class="etiqueta-testimonio-traducido"> @lang('home.testimonials.translated_to') </p>
      </div>
      <div id="testimonio-2" class="etiqueta-testimonio hide">
        <p class="etiqueta-testimonio-texto"> @lang('home.testimonials.test2.text') </p><br>
        <p class="etiqueta-testimonio-nombre"> @lang('home.testimonials.test2.name') </p>
        <p class="etiqueta-testimonio-ciudad"> @lang('home.testimonials.test2.business') </p>
        <p class="etiqueta-testimonio-traducido"> @lang('home.testimonials.translated_to') </p>
      </div>
      <div id="testimonio-3" class="etiqueta-testimonio hide">
        <p class="etiqueta-testimonio-texto">@lang('home.testimonials.test3.text')</p><br>
        <p class="etiqueta-testimonio-nombre">@lang('home.testimonials.test3.name')</p>
        <p class="etiqueta-testimonio-ciudad">@lang('home.testimonials.test3.business')</p>
        <p class="etiqueta-testimonio-traducido">@lang('home.testimonials.translated_to')</p>
      </div>
    </div>
    <i class="icon-me right-open icon-testimonio" onclick=testimonioSiguiente()>&#xe803;</i>
  </div>
  @include('layouts.contactHome')
  <script src="{{ asset('js/') }}/slider.js" defer></script>

@endsection
