//
// // Download katalog
// const download = document.querySelector('.download');
//
// console.log(download);
// download.addEventListener('click', (event) => {
//   console.log(download);
//   const confirm = window.confirm('Vill du ladda ner?');
//   if (confirm) {
//     window.alert('Downloading');
//   }
//   else {
//     window.alert('hejdå');
//   }
// });


// (function() {
//     let section = document.querySelectorAll(".section");
//     let sections = {};
//     let i = 0;
//     Array.prototype.forEach.call(section, function(e) {
//         sections[e.id] = e.offsetTop;
//     });
//     const active = document.querySelector('.active')
//     window.onscroll = function() {
//         let scrollPosition = document.documentElement.scrollTop || document.body.scrollTop;
//         for (i in sections) {
//             if (sections[i] <= scrollPosition) {
//                 active.setAttribute('class', ' ');
//                 document.querySelector('a[href*=' + i + ']').setAttribute('class', 'active');
//             }
//         }
//     };
// })();


(function() {
  if (screen.width > 600) {

    let section = document.querySelectorAll(".section");
    let sections = {};
    let i = 0;
    Array.prototype.forEach.call(section, function(e) {
        sections[e.id] = e.offsetTop;
    });
    window.onscroll = function() {
        let scrollPosition = document.documentElement.scrollTop || document.body.scrollTop;
        for (i in sections) {
            if (sections[i] <= scrollPosition) {
                document.querySelector('.active').setAttribute('class', ' ');
                document.querySelector('a[href*=' + i + ']').setAttribute('class', 'active');
            }
        }
    };
  }
})();


function openSlideMenu(){
  document.getElementById('side-menu').style.width = '250px';
}
function closeSlideMenu(){
  document.getElementById('side-menu').style.width = '0';
}




const emailRight = document.querySelectorAll('.email-white');

const signUpError = document.querySelectorAll('.email-red');
const signUp = document.querySelectorAll('.sign-up');

for(let i = 0; i < signUp.length; i++){
  signUp[i].addEventListener('click', () => {
    event.preventDefault()
    console.log(emailRight[i])
    console.log(emailRight[i].value)

    if(ValidateEmail(emailRight[i].value)){
      signUpError[i].style.display = 'none'
      window.open('pdf/FastSecurity0.0.pdf', '_blank')
    }else{
      signUpError[i].style.display = 'initial'
    }



  })
}

const emailRightMobile = document.querySelectorAll('.email-white-mobile');

//const signUpErrorMobile = document.querySelectorAll('.email-red-mobile');
const signUpMobile = document.querySelectorAll('.signup-button');

for(let i = 0; i < signUpMobile.length; i++){
  signUpMobile[i].addEventListener('click', () => {
    event.preventDefault()
    console.log(emailRightMobile[i])
    console.log(emailRightMobile[i].value)

    if(ValidateEmail(emailRightMobile[i].value)){
      //signUpErrorMobile[i].style.display = 'none'
      window.open('pdf/FastSecurity0.0.pdf', '_blank')
    }else{
      //signUpErrorMobile[i].style.display = 'initial'
    }



  })
}

function ValidateEmail(mail)
{
 if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(mail))
  {
    return (true)
  }
    return (false)
}
