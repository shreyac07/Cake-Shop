const dayNignt = document.querySelector(".day-night");
dayNignt.addEventListener("click" , () => {
    dayNignt.querySelector("i").classList.toggle("fa-sun");
    dayNignt.querySelector("i").classList.toggle("fa-moon");
    document.body.classList.toggle("dark");
})
window.addEventListener("load" , () => {
    if(document.body.classList.contains("dark"))
    {
        dayNignt.querySelector("i").classList.add("fa-sun");
    }
    else
    {
        dayNignt.querySelector("i").classList.add("fa-moon");
    }
})