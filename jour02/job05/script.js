var [red, green, blue] = [255, 255, 255]
var footer = document.getElementById("scroll")

window.addEventListener('scroll', () => {
    var y = 1 + (window.scrollY || window.pageXOffset) / 150
    var [r, g, b] = [red/y, green/y, blue/y].map(Math.round)
    footer.style.backgroundColor = `rgb(${r}, ${g}, ${b})`
})