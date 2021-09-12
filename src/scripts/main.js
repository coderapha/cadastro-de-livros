const background = document.querySelector(".stars-bg")

window.onmousemove = (event)=> {
    background.style.left = `${- event.pageX / 20}px`
    background.style.top = `${- event.pageY / 20}px`
}