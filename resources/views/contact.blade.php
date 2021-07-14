@extends('master')

@section('content')
  <div class="container-m contacto">
    <h1 class="titulo-seccion">@lang('home.contact.title')</h1>
    <hr class="hr-subtitulo">
    <div class="container-s contacto-content">
      <div class="col col-1">
        <h2>@lang('home.contact.subtitle')</h2><br><br>
        <p>@lang('home.contact.text')</p>
        <h3>@lang('home.contact.phone')</h3>
        <h3>@lang('home.contact.mail')</h3>
      </div>
      <div class="col col-2">
        <div class="formulario">
          <p class="obligatorio"><b>@lang('contact.required')</b></p>
          <form name="form-contacto" id="form-contacto" onsubmit=validacionForm()>
            <input class="form-field" type="text" id="nombre" name="nombre" placeholder="@lang('contact.name')"><br>

            <input class="form-field" type="text" id="apellido" name="apellido" placeholder="@lang('contact.surname')"><br>

            <input class="form-field" type="email" id="email" name="email" placeholder="@lang('contact.email')"><br>

            <select class="form-field" id="pais" name="pais">
              <option value="">@lang('contact.coutry.choose')</option>
              <option value="argentina">@lang('contact.coutry.op1')</option>
              <option value="australia">@lang('contact.coutry.op2')</option>
              <option value="canada">@lang('contact.coutry.op3')</option>
              <option value="chile">@lang('contact.coutry.op4')</option>
              <option value="estados uidos">@lang('contact.coutry.op5')</option>
              <option value="nueva zelanda">@lang('contact.coutry.op6')</option>
              <option value="uruguay">@lang('contact.coutry.op7')</option>
              <option value="otro">@lang('contact.coutry.op8')</option>
            </select><br>

            <div class="form-field">
              <label>@lang('contact.documents')</label><br><br>
              <label for="doc-si">@lang('contact.yes')</label><br>
              <input type="radio" onclick=documentosOnchange() id="doc-si" name="tieneDocumentos" value="Si">
              <label for="doc-no">@lang('contact.no')</label><br>
              <input type="radio" onclick=documentosOnchange() id="doc-no" name="tieneDocumentos" value="No">
            </div>

            <input class="form-field hide" type="number" id="documentos" name="documentos"
              placeholder="@lang('contact.count')">

            <div class="form-field">
              <label>@lang('contact.meeting')</label><br><br>
              <label for="reunion-si">@lang('contact.yes')</label><br>
              <input type="radio" onclick=reunionOnchange() id="reunion-si" name="quiereReunion" value="Si">
              <label for="reunion-no">@lang('contact.no')</label><br>
              <input type="radio" onclick=reunionOnchange() id="reunion-no" name="quiereReunion" value="No">
            </div>

            <input class="form-field hide" type="date" id="fechaReunion" name="fechaReunion">

            <textarea class="form-field" id="consulta" name="consulta" placeholder="@lang('contact.question')"
              style="height:200px"></textarea><br>

            <input class="btn btn-rosa" type="submit" value="@lang('contact.btn')">
          </form>
        </div>
      </div>
    </div>
  </div>
  <script src="{{asset('js/scripts.js')}}"></script>
@endsection
