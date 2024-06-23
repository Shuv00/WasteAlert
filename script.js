// image slider

const left = document.querySelector('.left');
const right = document.querySelector('.right');
const slideimage = document.querySelector('.slider');
let count = 1;

function clickright() {
    count++;
    if (count > 3) {
        count = 1;
    }
    changeSlide();
}

function clickleft() {
    count--;
    if (count < 1) {
        count = 3;
    }
    changeSlide();
}

function changeSlide() {
    if (count === 1) {
        slideimage.style.backgroundImage = 'url("./img/slider-image_1.jpg")';
    } else if (count === 2) {
        slideimage.style.backgroundImage = 'url("./img/slider-image_2.jpg")';
    } else if (count === 3) {
        slideimage.style.backgroundImage = 'url("./img/slider-image_3.jpg")';
    }
}

//image slider function end
//counter start

    // let count1 = document.querySelector('.count1');
    // let c1 = 0;
    // if(c1==0){
    //      setTimeout(() => {
    //     let c1_int = setInterval(() => {
    //         c1++;
    //         count1.innerHTML = c1;
    //         if(c1==100){
    //             c1=0;
    //         }
    //     }, 100);
    // } ,5000)
    // }
   

    

//count end
//form validation
    function handlesubmit() 
    {

        var email = document.querySelector('.email').value;
        var name = document.querySelector('.name').value;
        var password = document.querySelector('.password').value;
        var c_password = document.querySelector('.c-password').value;
        var pass_text = document.querySelector('.pass-text');
        if(password!=c_password){
            pass_text.innerHTML = "*Password doesnot matched";
            console.log(pass_text);
            pass_text.setAttribute("style", "color:red; text-align: left; margin-left:231px; margin-top:10px" ,);
        }
        else {
            if(password.length<6){
                pass_text.innerHTML = "*Password must be contain 6 character";
            console.log(pass_text);
            pass_text.setAttribute("style", "color:red; text-align: left; margin-left:231px; margin-top:10px" ,);
            }
           
        }
       
    }
    
//end form validation
var str = "WasteAlert";
var para = document.getElementsByClassName('waste_text');
var s = "", i = 0;

setInterval(() => {
    if (i == str.length) {
        i = 0;
        s = "";
    } else {
        s = s + str[i];
        i++;
    }
    para.innerHTML = s;
    console.log(s);
}, 200);
