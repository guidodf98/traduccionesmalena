<nav class="container-m">
  <div class="container-m nav">
    <div class="nav-logo">
      <a href="./index.html">
        <img src="./images/logo texto derecha.png" alt="logo Traducciones malena">
      </a>
    </div>
    <div class="nav-menu">
      <ul>
        <li><a href="#sobre-mi">{{ __('home.navbar.about_me') }}</a></li>
        <li><a href="./es/contacto.html">@lang('home.navbar.contact')</a></li>
        <li><a href="#servicios">Servicios</a></li>
        <li><a href="#especializaciones">Especializaciones</a></li>
        <select class='selector-nav' name="Languaje" onchange="locateRedirect(value)">
          <option value="">Languaje&nbsp;</option>
          <option value="es">ES</option>
          <option value="en">EN</option>
          <option value="pr">PR</option>
        </select>
      </ul>
    </div>
  </div>
</nav>