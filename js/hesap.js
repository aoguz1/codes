
    var yaz = document.getElementById("tuslar").getElementsByTagName("button");
    var lcd =document.getElementById("lcdPanel");
    var lcdSonuc=document.getElementById("lcdSonuc");
    var sayilar=new Array();
for (let key = 0; key < yaz.length; key++) {

    yaz[key].addEventListener("click", function (){
        
        lcd.innerHTML+=yaz[key].innerText;

    console.log(yaz[key].innerText);
       
             });

}
function sil(){
   /* var lcd =document.getElementById("lcdPanel");*/
   var delWriter=lcd.innerHTML.length;
    lcd.innerHTML=lcd.innerHTML.substring(0,--delWriter);
    
    lcdSonuc.innerHTML="";

}

var islemTus = document.getElementById("operatorTus").getElementsByTagName("button");
for (let i = 0; i < islemTus.length; i++) {
   islemTus[i].addEventListener("click",function(){


var sonuc =+ eval(lcd.innerHTML);
        
  document.getElementById("lcdSonuc").innerHTML= sonuc;
        


   });
    
}









    



   



   
  
