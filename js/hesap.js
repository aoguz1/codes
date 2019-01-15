
    var yaz = document.getElementById("tuslar").getElementsByTagName("button");
    var lcd =document.getElementById("lcdPanel");
    var sayilar=new Array();
for (let key = 0; key < yaz.length; key++) {

    yaz[key].addEventListener("click", function (){
        
        lcd.innerHTML+=yaz[key].innerText;

    console.log(yaz[key].innerText);
       
             });

}
function sil(){
    var lcd =document.getElementById("lcdPanel");
   var delWriter=lcd.innerHTML.length;
    lcd.innerHTML=lcd.innerHTML.substring(0,--delWriter);
}

$( document ).ready(function() {
    console.log( "ready!" );

 setInterval( function topla(){
var arti =lcd.innerHTML.split("+");
console.log(arti);

var topla=0;
arti.forEach(element => {
    element = parseInt(element)?element:0;
    var eksi=element.split("-");
    console.log(eksi);
    topla=parseInt(element)+topla;
    
});
document.getElementById("lcdSonuc").innerHTML=topla;
},9000);

});







    



   



   
  
