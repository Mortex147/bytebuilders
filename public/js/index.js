function onToggleMenu(x) {
    const navlinks = document.querySelector('.nav-links')
    x.name = x.name === 'menu' ? 'close' : 'menu'
    navlinks.classList.toggle('top-[0%]')

}

const faqs = document.querySelectorAll(".faq");

faqs.forEach(faqs => {
    faqs.addEventListener("click",()=>{
        faqs.classList.toggle("active");
    })
})