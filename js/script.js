function changeSrc(name) {
  document.getElementById("myframe").src = name;
}

function openNav() {
  document.getElementById("mySidebar").style.width = "20%";
  
   document.getElementById("main").style.marginLeft = "20%";
 
   document.getElementById("sidebtn").innerHTML="☰ Inchide";
   document.getElementById("sidebtn").setAttribute('onclick', 'closeNav()');
   
/*
   document.getElementById("sidebtn").style.display="none";
    

    document.getElementById("b1").style.display="none";
    document.getElementById("b2").style.display="none";

    */
  document.getElementById("sidebtn").style.marginLeft="-50%";
     document.getElementById("b1").style.marginLeft="-150%";
    document.getElementById("b2").style.marginLeft="-150%";

}

function closeNav() {
  document.getElementById("mySidebar").style.width = "0";
  
  document.getElementById("main").style.marginLeft= "0";
   document.getElementById("sidebtn").innerHTML="☰ Deschide Meniul";
    document.getElementById("sidebtn").setAttribute('onclick', 'openNav()');
   

   /* document.getElementById("sidebtn").style.display="block";
    document.getElementById("b1").style.display="block";
    document.getElementById("b2").style.display="block";

*/

 document.getElementById("sidebtn").style.marginLeft="0";
     document.getElementById("b1").style.marginLeft="0";
    document.getElementById("b2").style.marginLeft="0";
}