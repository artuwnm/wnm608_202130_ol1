$(".stepper input").change(({target}) => {
  let v = $(target).val()
  v = v < 1 ? 1 : parseInt(v) || 1
  $(target).val(v)
  if (location.pathname == "/wnm608/shen.jiawei/cart.php") {
    const itemCard = $(target).closest(".cart-item")
    const itemTotal = parseFloat(itemCard.find(".price").text()) * v
    itemCard.find(".item-total").text(itemTotal.toFixed(2))
    updateTotal()
    loadCart()
    cart.find(item => item.i == itemCard.attr("data-id")).a = v
    saveCart()
  }
})
$(".stepper > button:first-of-type").click(({target}) =>
  $(target)
    .siblings(".material-input")
    .children("input")
    .val((i, v) => --v)
    .change()
)
$(".stepper > button:last-of-type").click(({target}) =>
  $(target)
    .siblings(".material-input")
    .children("input")
    .val((i, v) => ++v)
    .change()
)

let cart

function addToCart() {
  showPopup()
  const id = parseInt(new URL(location.href).searchParams.get("id"))
  loadCart()
  let product = cart.find(p => p.i == id)
  if (!product) {
    product = {i: id, a: 0}
    cart.push(product)
  }
  product.a += parseInt($("#amount").val())
  saveCart()
}

function deleteItemInCart(deleteButton) {
  const itemCard = $(deleteButton).closest(".cart-item")
  const id = itemCard.attr("data-id")
  loadCart()
  cart = cart.filter(item => item.i != id)
  saveCart()
  itemCard.remove()
  updateTotal()
}

function updateTotal() {
  $(".cart-total").text(
    $(".cart-item")
      .find(".item-total")
      .toArray()
      .map(e => parseFloat($(e).text()))
      .reduce((a, b) => a + b, 0)
      .toFixed(2)
  )
  $(".checkout")[0].disabled = $(".cart-item").length == 0
}

function loadCart() {
  const cartCookie = Cookies.get("cart")
  cart = cartCookie ? JSON.parse(cartCookie) : []
}

function saveCart() {
  Cookies.set("cart", JSON.stringify(cart))
}
