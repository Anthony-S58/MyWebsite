function timer(){
let cpt = 5;
 
    timer = setInterval(function(){


        if(cpt>0)
        {
            --cpt; // décrémente le compteur
            document.getElementById("chrono").innerHTML = "" + cpt + "...";
            if(cpt<=1){
                document.getElementById("secondes").innerHTML = " seconde..." ;
            }else{
                document.getElementById("secondes").innerHTML = " secondes..." ;
            };
        }
    }, 1000);
};
window.onload = function(){
    timer();
};

const hamburger = document.querySelector('.hamburger');
const mobile_menu = document.querySelector('.header .nav-list ul');
const links = document.querySelectorAll('.linkburger');

let menuOpen = false;
hamburger.addEventListener('click',() => {
    if (!menuOpen) {
        hamburger.classList.add('open');
        menuOpen = true;
    }else {
        hamburger.classList.remove('open');
        menuOpen = false;
    }
});

let mobileOpen = false;
hamburger.addEventListener('click',() => {
    if (!mobileOpen) {
        mobile_menu.classList.add('open');
        mobileOpen = true;
    }else {
        mobile_menu.classList.remove('open');
        mobileOpen = false;
    }
});

links.forEach(s => {
    s.addEventListener('click',() => {
        mobile_menu.classList.remove('open');
        hamburger.classList.remove('open');
        menuOpen = false;
        mobileOpen = false;
    console.log(menuOpen, mobileOpen);
                
    })
});
