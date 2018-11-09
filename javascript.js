
// Download katalog
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
