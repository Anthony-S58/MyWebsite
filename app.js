console.log('test');

let front = document.querySelector("#front");
let back = document.querySelector("#back");
let tools = document.querySelector("#tools");


let textfront = document.querySelector("#textfront");
let textback = document.querySelector("#textback");
let texttools = document.querySelector("#texttools");

let html = document.querySelector("#html");
let css = document.querySelector("#css");
let javascript = document.querySelector("#javascript");
let php = document.querySelector("#php");
let symfony = document.querySelector("#symfony");

front.addEventListener('mouseenter', () => {
    textfront.style.display="none";
    html.style.display="flex";
    css.style.display="flex";
    javascript.style.display="flex";
});
front.addEventListener('mouseleave', () => {
    textfront.style.display="flex";
    html.style.display="none";
    css.style.display="none";
    javascript.style.display="none";
});

back.addEventListener('mouseenter', () => {
    textback.style.display="none";
    php.style.display="flex";
    symfony.style.display="flex";
});
back.addEventListener('mouseleave', () => {
    textback.style.display="flex";
    php.style.display="none";
    symfony.style.display="none";


});

tools.addEventListener('mouseenter', () => {
    texttools.style.display="none";
});
tools.addEventListener('mouseleave', () => {
    texttools.style.display="flex";
});