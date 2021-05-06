function goToPage(page, offset) {
  const currentURL = new URL(location.href)
  page = parseInt(page)
  currentURL.searchParams.set(
    "page",
    offset ? (parseInt(currentURL.searchParams.get("page")) || 1) + page : page
  )
  location.href = currentURL
}

function removeQuery(...args) {
  const currentURL = new URL(location.href)
  currentURL.searchParams.delete("page")
  args.flat(Infinity).forEach(e => {
    currentURL.searchParams.delete(e)
  })
  location.href = currentURL
}

$('*[form="form-search-filter-sort"]').change(() =>
  $("#form-search-filter-sort").submit()
)

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
const spectrumHandle = spectrum.children()
const setSpectrumHandle = event => {
  const width = spectrum.width()
  let percentage = event.originalEvent.offsetX / width - 0.1
  if (percentage < 0) percentage = 0
  if (percentage > 0.8) percentage = 0.8
  spectrumHandle.css("margin-left", percentage * 100 + "%")
  hueInput.val(percentage)
}
spectrum.mousedown(event => {
  setSpectrumHandle(event)
  spectrum
    .mousemove(setSpectrumHandle)
    .addClass("active")
    .siblings(".card")
    .removeClass("active")
  $(document.body).mouseup(event => {
    spectrum.off("mousemove")
    hueInput.change()
  })
})
