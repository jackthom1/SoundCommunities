
let navBar = true;




function navAppear(){
    if (navBar){
        document.getElementById("itemContainer").style.display = "flex"
        document.getElementsByClassName("nav--mobileBtn")[0].style.display = "none"
        document.getElementsByClassName("nav--mobileBtn")[1].style.display = "block"
        document.getElementById("nav--list").style.height = "450px"
        document.getElementsByClassName("nav--image")[0].style.display = "none"
        navBar = false
    } else{
        navBar = true;
        document.getElementById("itemContainer").style.display = "none"
        document.getElementsByClassName("nav--mobileBtn")[0].style.display = "flex"
        document.getElementsByClassName("nav--mobileBtn")[1].style.display = "none"
        document.getElementById("nav--list").style.height = "var(--nav-height)"
        document.getElementsByClassName("nav--image")[0].style.display = "block"
    }
}


function openModal(modal){
    document.getElementById(modal).style.display = "flex";
}


function closeModal(modal){
    document.getElementById(modal).style.display = "none";

}

function scrollDown(page){
    let section = document.getElementById(page);
    let offset = -115
    let y = section.getBoundingClientRect().top + offset
    window.scrollTo({top: y})
}


function playAnimation(){
    setTimeout(() => {
        document.getElementById("loading").style.display = "none"
        document.getElementById("animation--container").style.display = "flex"
        // FIRST Section of animations 
        let tl = gsap.timeline({defaults: {ease: 'power1.out'}})
        tl.fromTo(".animation--title",{y: "100%"}, {y: "0%", duration: .5});
        tl.fromTo(".a, .b, .c", {opacity: "0", y:"10%"}, {opacity: "1",y:"0", duration: .8, stagger: .8});
        tl.fromTo(".d", {x: "150%"}, {x: "0%", duration: .3});
        // on next button click start the second part of animation
        document.getElementById("animationButton1").addEventListener("click", () => {
            tl.to("#animation1", {y: "-100%", display: "none", duration: .3})
            tl.fromTo("#animation2",{y: "100%"} ,{y: "0%", display: "block", duration: .8})
            tl.fromTo(".e, .f, .g", {y: "100", opacity: "0"}, {y: "0", opacity: "1", duration: .8, stagger: .8, delay: .5});
            tl.fromTo(".d", {x: "150%"}, {x: "0%", duration: .8});
        })
        // on next button start section 3 of animation
        document.getElementById("animationButton2").addEventListener("click", () => {
            tl.to("#animation2", {y: "-100%", display: "none", duration: .3})
            tl.fromTo("#animation3",{y: "100%"} ,{y: "0", display: "block", duration: .8})
            tl.fromTo(".h, .i", {x: "-100%"}, {x: "0", duration: .8, stagger: .8, delay: .5});
            tl.fromTo(".d", {x: "150%"}, {x: "0%", duration: .8});
        })
        // on next button start section 4 of animation
        document.getElementById("animationButton3").addEventListener("click", () => {
            tl.to("#animation3", {y: "-100%", display: "none", duration: .3})
            tl.fromTo("#animation4",{y: "100%"} ,{y: "0", display: "block", duration: .4})
            tl.fromTo(".j, .k, .l", {x: "-150%"}, {x: "0", duration: .8, stagger: .8, delay: .5});
            tl.fromTo(".d", {x: "150%"}, {x: "0%", duration: .8});
        })

        // tl.delay(2);

    }, 1000);
    document.getElementById("animation--header").style.display = "none"
    document.getElementById("loading").style.display = "inline"
}