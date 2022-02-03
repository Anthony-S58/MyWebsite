console.log('test');

let front = document.querySelector("#front");
let back = document.querySelector("#back");
let tools = document.querySelector("#tools");


let textfront = document.querySelector("#textfront");
let textback = document.querySelector("#textback");
let texttools = document.querySelector("#texttools");

front.addEventListener('mouseenter', () => {
    textfront.style.display="none";
});
front.addEventListener('mouseleave', () => {
    textfront.style.display="flex";
});

back.addEventListener('mouseenter', () => {
    textback.style.display="none";
});
back.addEventListener('mouseleave', () => {
    textback.style.display="flex";
});

tools.addEventListener('mouseenter', () => {
    texttools.style.display="none";
});
tools.addEventListener('mouseleave', () => {
    texttools.style.display="flex";
});