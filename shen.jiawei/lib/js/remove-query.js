function removeQuery(...args) {
  const currentURL = new URL(location.href)
  currentURL.searchParams.delete("page")
  args.flat(Infinity).forEach(e => {
    currentURL.searchParams.delete(e)
  })
  location.href = currentURL
}