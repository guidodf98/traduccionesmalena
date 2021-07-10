function locateRedirect($lang) {
  var url = '';
  switch ($lang) {
    case 'es':
      url = 'https://localhost/traduccionesmalena/public/locale/es';
      break;
    case 'en':
      url = 'https://localhost/traduccionesmalena/public/locale/en';
      break;
    case 'pr':
      url = 'https://localhost/traduccionesmalena/public/locale/pr';
      break;
  }
  var modifiedUrl = url.toString();
  window.location.href = modifiedUrl;
}