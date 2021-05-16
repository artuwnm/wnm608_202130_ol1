hueInput_change_immediately = true
const indicator = $("h4:contains('Color')").siblings()
const updateIndicator = () => {
  const hue = parseFloat(hueInput.val())
  indicator.css("background-color", 
    hue == -2
    ? "white"
    : hue == -1
    ? "black"
    : `hsl(${hue * 360}, 100%, 50%)`
  )
}
updateIndicator()
hueInput.change(updateIndicator)

function fullPrice() {
  $('input[name="current_price"]').val($('input[name="price"]').val())
}

$("form input").change(() => $("button:contains('Save')").removeAttr("disabled"))