$(".clear-input-button > div").click(({target}) =>
  $(target)
    .parent()
    .prev("input")
    .val("")
    .change()
)
