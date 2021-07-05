var slider1 = document.getElementById("testimonio-1");
var slider2 = document.getElementById("testimonio-2");
var slider3 = document.getElementById("testimonio-3");


function testimonioSiguiente() {
  if (!slider1.classList.contains("hide")) {
    slider1.classList.add("hide")
    slider2.classList.remove("hide")
  } else if (!slider2.classList.contains("hide")) {
    slider2.classList.add("hide")
    slider3.classList.remove("hide")
  } else if (!slider3.classList.contains("hide")) {
    slider3.classList.add("hide")
    slider1.classList.remove("hide")
  }

}
function testimonioAnterior() {
  if (!slider3.classList.contains("hide")) {
    slider3.classList.add("hide")
    slider2.classList.remove("hide")
  } else if (!slider2.classList.contains("hide")) {
    slider2.classList.add("hide")
    slider1.classList.remove("hide")
  } else if (!slider1.classList.contains("hide")) {
    slider1.classList.add("hide")
    slider3.classList.remove("hide")
  }
}