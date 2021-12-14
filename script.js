
function genratePdf(){
 const element = document.getElementById("report");
 html2pdf().from(element).save();
}