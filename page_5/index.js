var slider = document.getElementById("year-slider");
var selectedYear = document.getElementById("selected-year");

slider.addEventListener("input", function() {
  selectedYear.innerHTML = slider.value;
});