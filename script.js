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


(function() {
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
})();

function openSlideMenu(){
  document.getElementById('side-menu').style.width = '250px';
}
function closeSlideMenu(){
  document.getElementById('side-menu').style.width = '0';
}

const emailRight = document.querySelector('input[type=email]');
console.log(emailRight);
const signUpError = document.querySelector('.email-red');
const signUp = document.querySelector('.sign-up');
signUp.addEventListener('click', (event) => {
  // event.preventDefault(); //hindrar det som skulle skett by default, typ följa länken
  if (!emailRight) {
    signUpError.style.visibility = "visible";
  }

});
