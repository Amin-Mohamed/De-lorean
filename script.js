
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

(function(){
  $('#fullpage').fullpage({
    sectionSelector: '.section',
    scrollOverflow: true
  });
});


function openSlideMenu(){
  document.getElementById('side-menu').style.width = '250px';
}
function closeSlideMenu(){
  document.getElementById('side-menu').style.width = '0';
}



// document.querySelectorAll('a[href^="#"]').forEach(anchor => {
//    anchor.addEventListener('click', function (e) {
//        e.preventDefault();
//
//        document.querySelector(this.getAttribute('href')).scrollIntoView({
//            behavior: 'smooth'
//        });
//    });
// });

// Download katalog
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




  // $('.nav-link').on('click', function() {
  // 	$('.active-link').removeClass('active-link');
  // 	$(this).addClass('active-link');
  // });
  // var header = document.getElementsByClassName("navbar-nav");
  // var links = header.getElementsByClassName("nav-link");
  // for (var i = 0; i < links.length; i++) {
  //   links[i].addEventListener("click", function() {
  //   var current = document.getElementsByClassName("active");
  //   current[0].className = current[0].className.replace(" active", "");
  //   document.className += " active";
  //
  // });
