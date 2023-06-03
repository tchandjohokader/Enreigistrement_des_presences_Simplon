const btn = document.getElementById("downloadBtn"); 

btn.addEventListener("click", () => {
const element = document.getElementById('dossier'); 
  var opt={
    margin: 1,
      filename: 'Liste de presence.pdf',
      image: { type: 'jpg', quality: 0.98 },
      html2canvas: { scale: 3 },
      jsPDF: { unit: 'in', format: 'letter', orientation: 'landscape' }
  }
  html2pdf(element,opt)
});