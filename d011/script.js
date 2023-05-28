let rangeInput = document.getElementById('reajuste');
let rangeValue = document.getElementById('valor');
rangeValue.textContent = rangeInput.value;
rangeInput.addEventListener('input', function() {
  rangeValue.textContent = rangeInput.value;
});
