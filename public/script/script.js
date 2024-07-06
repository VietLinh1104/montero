const banner = document.getElementById('banner');
const navbar = document.getElementById('navbar-home');
const textBanner = document.getElementById('text-banner');
const navItemAboutUs = document.getElementById('nav-item-aboutus');
const viewAboutUs = document.getElementById('view-aboutus');

const bannerHeight = banner.offsetHeight;

function getOffsetTop(element) {
    let offsetTop = 0;
    while (element) {
      offsetTop += element.offsetTop;
      element = element.offsetParent;
    }
    return offsetTop;
}

textBannerOffsetTop = getOffsetTop(textBanner);

console.log('bannerHeight: ',bannerHeight);

window.addEventListener('scroll',function(){
    if (this.window.scrollY >= textBannerOffsetTop){
        navbar.classList.add('bg-black');
    }else{
        navbar.classList.remove('bg-black');
    }
});

navItemAboutUs.addEventListener('click',function(event){
    event.preventDefault();
    viewAboutUs.scrollIntoView({
        behavior: 'smooth', // Smooth scrolling
        block: 'start'
    });


});