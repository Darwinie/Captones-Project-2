//this is for calling reports
/*function loadHtml(id, filename) {
   console.log('div id: ${id}, filename: ${filename}');

   let xhttp;
   let element = document.getElementById(id);
   let file = filename;

   if (file) {
      xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
         if (this.readyState == 4) {
            if (this.status == 200) {element,innerHTML = this.responseText;}
            if (this.status == 404) {element,innerHTML = "<h1>Page not found</h1>";}
         }
      }
      xhttp.open("Get", '/$(file)', true);
      xhttp.send();
      return;
   }
}  */

function ReportToggle() {
   const nav = document.querySelector('navbar')
   fetch('/navb-navg.html')
   .then(res=>res.text())
   .then(data=>{
      nav.innerHTML=data
   })
}

//calling CMB Report
function CMBtoggle() {
    let cmbReport = document.getElementById("CMBReport");
     if(cmbReport.style.display == "none") {
        cmbReport.style.display = "block";
     }else{
     cmbReport.style.display = "none";
     }
  }
//calling ACSPS Report
function ACPStoggle() {
   let acpsReport = document.getElementById("ACPSReport");
    if(acpsReport.style.display == "none") {
       acpsReport.style.display = "block";
    }else{
    acpsReport.style.display = "none";
    }
 }
 //calling 0-71 Report
 function ZeroFivetoggle() {
   let zerofiveReport = document.getElementById("ZeroFiveReport");
    if(zerofiveReport.style.display == "none") {
       zerofiveReport.style.display = "block";
    }else{
    zerofiveReport.style.display = "none";
    }
 }

 //calling BHW Accomplishment Report
 function BHWSAReporttoggle() {
   let bhwsaReport = document.getElementById("BHWSAReport");
    if(bhwsaReport.style.display == "none") {
       bhwsaReport.style.display = "block";
    }else{
    bhwsaReport.style.display = "none";
    }
 }

 //calling POP AGE DISTRIBUTION REPORT
 function PADReporttoggle() {
   let padReport = document.getElementById("PADReport");
    if(padReport.style.display == "none") {
       padReport.style.display = "block";
    }else{
    padReport.style.display = "none";
    }
 }

  //calling PREGNANCY TRACKING COLLECTION FORM
  function PregTrackingtoggle() {
   let pregtrackReport = document.getElementById("PregTrack");
    if(pregtrackReport.style.display == "none") {
       pregtrackReport.style.display = "block";
    }else{
    pregtrackReport.style.display = "none";
    }
 }

