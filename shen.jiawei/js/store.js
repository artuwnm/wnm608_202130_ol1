function goToPage(page, offset) {
  const currentURL = new URL(location.href)
  page = parseInt(page)
  currentURL.searchParams.set(
    "page",
    offset ? (parseInt(currentURL.searchParams.get("page")) || 1) + page : page
  )
  location.href = currentURL
}

$(
  'input[form="form-search-filter-sort"][type="radio"]:checked'
).click(({target}) => removeQuery($(target).attr("name")))

$('*[form="form-search-filter-sort"]').change(() =>
  $("#form-search-filter-sort").submit()
)
