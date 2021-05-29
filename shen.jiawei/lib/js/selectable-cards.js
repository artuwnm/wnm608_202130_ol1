function selCards(selector, callback, multi) {
  const cards = Array.from(
    document.querySelectorAll(selector + " .card.selectable")
  )
  if (multi) {
    const selected = document.querySelectorAll(
      selector + " .card.selectable.selected"
    )
    cards.forEach(card =>
      card.addEventListener("click", ({target}) => {
        target.classList.toggle("selected")
        callback(target, selected)
      })
    )
  } else {
    cards.forEach(card =>
      card.addEventListener("click", ({target}) => {
        cards.forEach(c => {
          c.classList.remove("selected")
        })
        target.classList.add("selected")
        callback(target)
      })
    )
  }
}
