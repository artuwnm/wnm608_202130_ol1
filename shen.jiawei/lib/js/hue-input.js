let hueInput_change_immediately = false
const hueInput = $(".hue-input > input")
$(".hue-input > .grid.gap > .card.hue-white").click(({target}) => {
  $(target)
    .addClass("active")
    .siblings(".card")
    .removeClass("active")
  hueInput.val(-2).change()
})
$(".hue-input > .grid.gap > .card.hue-black").click(({target}) => {
  $(target)
    .addClass("active")
    .siblings(".card")
    .removeClass("active")
  hueInput.val(-1).change()
})
const spectrum = $(".hue-input > .grid.gap > .card.hue-spectrum")
const spectrumSlider = spectrum.children()
const selectRange =
  parseFloat(
    $(".hue-input")
      .css("--select-range")
      .replace("%", "")
  ) / 100 || 0.2
const selectBorder =
  parseFloat(
    $(".hue-input")
      .css("--select-border")
      .replace("px", "")
  ) || 4
const setSpectrum = event => {
  const width = spectrum.width()
  let percentage =
    event.originalEvent.offsetX / width - selectRange / 2 - selectBorder / width
  percentage = Math.max(percentage, 0)
  percentage = Math.min(percentage, 1 - selectRange)
  spectrumSlider.css("margin-left", `${percentage * 100}%`)
  hueInput.val(percentage)
  hueInput_change_immediately && hueInput.change()
}
spectrum.mousedown(event => {
  setSpectrum(event)
  spectrum
    .mousemove(setSpectrum)
    .addClass("active")
    .siblings(".card")
    .removeClass("active")
  $(document.body).mouseup(event => {
    spectrum.off("mousemove")
    hueInput.change()
  })
})
