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

///image slider function end
// counter start
    // var counter1 = document.querySelector('.count1');
    
    // var counting1 = 0;
    // setInterval(() => {
    //     counting1++;
    //     counter1.innerHTML = counting1;
    //     if(counting1 ==100){
    //         counting1 =0;
    //     }
    // }, 100);
    // var counter2 = document.querySelector('.count2');
    
    // var counting2 = 0;
    // setInterval(() => {
    //     counting2++;
    //     counter2.innerHTML = counting2;
    //     if(counting2 ==60){
    //         counting2 =0;
    //     }
    // }, 100);

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
