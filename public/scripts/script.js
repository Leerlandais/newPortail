// stuff

const portalWindow = document.querySelectorAll(".portalWindow");
for (let i=0; i<portalWindow.length; i++) {
    portalWindow[i].addEventListener("mouseenter", showDesc);
}

console.log(portalWindow.length);

function showDesc () {
   let desc = this.childNodes;
   // console.log(desc);
   // console.log(desc[2].style);
   desc[2].style.opacity = 1;
        setTimeout(() => {
           desc[2].style.opacity = 0;
          }, 3000);
                               
}
