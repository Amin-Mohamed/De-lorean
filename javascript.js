const download = document.querySelector('.download');

console.log(download);
download.addEventListener('click', (event) => {
  console.log(download);
  const confirm = window.confirm('Vill du ladda ner?');
  if (confirm) {
    window.alert('Downloading');
  }
  else {
    window.alert('hejdå');
  }
});




  // translate.addEventListener('click', (event) => {
  //   const translateWord = event.target.textContent;
  //   event.preventDefault();
  //   const confirm = window.confirm(`Are you sure you want to translate ${translateWord}`);
  //   if (confirm) {
  //     window.location.href = event.target.href;
  //   }
  // });
