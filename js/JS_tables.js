

let arrow = document.querySelectorAll(".arrow");
for (var i = 0; i < arrow.length; i++) {
  arrow[i].addEventListener("click", (e)=>{
 let arrowParent = e.target.parentElement.parentElement;//selecting main parent of arrow
 arrowParent.classList.toggle("showMenu");
  });
}
let sidebar = document.querySelector(".sidebar");
let sidebarBtn = document.querySelector(".bx-menu");
console.log(sidebarBtn);
sidebarBtn.addEventListener("click", ()=>{
  sidebar.classList.toggle("close");
});

//window.onload = function () {
         // document.getElementById("Patient-Table").style.visibility = 'hidden';
        //}
        
        //For showing/hiding table when clicked
        function patienttoggle() {
            let patientTable = document.getElementById("Patient-Table");
             if(patientTable.style.display == "none") {
                patientTable.style.display = "block";
             }else{
             patientTable.style.display = "none";
             }
          }
          function dentaltoggle() {
            let dentalTable = document.getElementById("Dental-Table");
             if(dentalTable.style.display == "none") {
                dentalTable.style.display = "block";
             }else{
             dentalTable.style.display = "none";
             }
          }
          function immunizationtoggle() {
            let immunizationTable = document.getElementById("Immunization-Table");
             if(immunizationTable.style.display == "none") {
                immunizationTable.style.display = "block";
             }else{
             immunizationTable.style.display = "none";
             }
          }
          function Pimmunitoggle() {
            let PimmuniTable = document.getElementById("Pimmunization-Table");
             if(PimmuniTable.style.display == "none") {
                PimmuniTable.style.display = "block";
             }else{
             PimmuniTable.style.display = "none";
             }
          }
          function Pdewormingtoggle() {
            let PdewormingTable = document.getElementById("Deworming-Table");
             if(PdewormingTable.style.display == "none") {
                PdewormingTable.style.display = "block";
             }else{
             PdewormingTable.style.display = "none";
             }
          }
          function Pvitaminstoggle() {
            let PvitaminsTable = document.getElementById("Vitamins-Table");
             if(PvitaminsTable.style.display == "none") {
                PvitaminsTable.style.display = "block";
             }else{
             PvitaminsTable.style.display = "none";
             }
          }
          function tbtoggle() {
            let tbTable = document.getElementById("TB-Table");
             if(tbTable.style.display == "none") {
                tbTable.style.display = "block";
             }else{
             tbTable.style.display = "none";
             }
          }
          function prenataltoggle() {
            let prenatalTable = document.getElementById("PreNatal-Table");
             if(prenatalTable.style.display == "none") {
                prenatalTable.style.display = "block";
             }else{
             prenatalTable.style.display = "none";
             }
          }
          function postnataltoggle() {
            let postnatalTable = document.getElementById("PostNatal-Table");
             if(postnatalTable.style.display == "none") {
                postnatalTable.style.display = "block";
             }else{
             postnatalTable.style.display = "none";
             }
          }
          function familyplantoggle() {
            let familyplanTable = document.getElementById("FamilyPlanning-Table");
             if(familyplanTable.style.display == "none") {
                familyplanTable.style.display = "block";
             }else{
             familyplanTable.style.display = "none";
             }
          }
         