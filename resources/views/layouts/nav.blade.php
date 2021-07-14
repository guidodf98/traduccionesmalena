<nav class="container-m">
  <div class="container-m nav">
    <div class="nav-logo">
      <a href="{{ url('/') }}">
        <img src="{{ @asset('images/logo texto derecha.png') }}" alt="logo Traducciones malena">
      </a>
    </div>
    <div class="nav-menu">
      <ul>
        <li><a href="{{ url('/#sobre-mi') }}">@lang('home.navbar.about_me')</a></li>
        <li><a href="{{ url('contacto') }}">@lang('home.navbar.contact')</a></li>
        <li><a href="{{ url('/#servicios') }}">@lang('home.navbar.services')</a></li>
        <li><a href="{{ url('/#especializaciones') }}">@lang('home.navbar.especializations')</a></li>
        <select class='selector-nav' name="Languaje" onchange="locateRedirect(value)">
          <option value="">@lang('home.navbar.languaje')&nbsp;</option>
          <option value="es">ES</option>
          <option value="en">EN</option>
          <option value="pr">PR</option>
        </select>
      </ul>
    </div>
  </div>
</nav>
