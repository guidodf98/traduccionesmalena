function languajeChange(lang) {
  var url = new URL(location.href)

  switch (lang) {
    case 'es':
      url.searchParams.set('lang', 'es')
      break;
    case 'en':
      url.searchParams.set('lang', 'en')
      break;
    case 'pr':
      url.searchParams.set('lang', 'pr')
      break;
    default:
      window.location.href = 'http://localhost/traducciones-testeo/index.php?lang=es';
      break;
  }
  
  var modifiedUrl = url.toString();
  window.location.href = modifiedUrl;
}