@extends('master')

@switch($esp)
  @case('tg')
    @php
      $esp2 = 'tt';
      $esp3 = 'lt';
    @endphp
  @break

  @case('tt')
    @php
      $esp2 = 'tg';
      $esp3 = 'lt';
    @endphp
  @break

  @case('lt')
    @php
      $esp2 = 'tg';
      $esp3 = 'tt';
    @endphp
  @break

  @default
    @php
    $esp2 = 'tg';
    $esp3 = 'tt';
    @endphp
@endswitch

@section('content')
  <div class="container-m esp-header h-{{ $esp }}">
  </div>
  <div class="container-m esp-titulo">
    <div class="esp-titulo-content">
      <h1 class="text-center">@lang('especializations/'.$esp.'.title')</h1>
      <hr class="hr-titulo">
    </div>
  </div>
  <div class="container-s esp-content">
    <div class="esp-content-col1 col">
      <p>@lang('especializations/'.$esp.'.p1')</p>
      <p>@lang('especializations/'.$esp.'.p2')</p>
      <p>@lang('especializations/'.$esp.'.p3')</p>
      <h3>@lang('especializations/'.$esp.'.help.title')</h3>
      <ul>
        <li>@lang('especializations/'.$esp.'.help.i1')</li>
        <li>@lang('especializations/'.$esp.'.help.i2')</li>
        <li>@lang('especializations/'.$esp.'.help.i3')</li>
        <li>@lang('especializations/'.$esp.'.help.i4')</li>
        <li>@lang('especializations/'.$esp.'.help.i5')</li>
        <li>@lang('especializations/'.$esp.'.help.i6')</li>
      </ul>
    </div>
    <div class="esp-content-col2 col imagen-esp-{{ $esp }}">
    </div>
  </div>
  <div class="container-m esp-otros">
    <h1 class="titulo-seccion">@lang('especializations/'.$esp.'.other')</h1>
    <hr class="hr-subtitulo">
    <div class="col-otros">
      <a href="{{ url('esp', [$esp2]) }}" class="col-otros-link">
        <img width="100" height="100" src="{{ @asset('images/' . $esp2 . '/' . $esp2 . '-n.svg') }}" />
        <h2 class="esp-link text-center">@lang('especializations/'.$esp2.'.title')</h2>
      </a>
    </div>
    <div class="col-otros">
      <a href="{{ url('esp', [$esp3]) }}" class="col-otros-link">
        <img width="100" height="100" src="{{ @asset('images/' . $esp3 . '/' . $esp3 . '-n.svg') }}" />
        <h2 class="esp-link text-center">@lang('especializations/'.$esp3.'.title')</h2>
      </a>
    </div>
  </div>
  @include('layouts.contactHome')

@endsection
