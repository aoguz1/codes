var xhttps = new XMLHttpRequest();
console.log(xhttps);


xhttps.open("GET","isim.json",true);
xhttps.send();
xhttps.onreadystatechange = function(){

if (xhttps.readyState==4 && xhttps.status==200) {
    
var veri = JSON.parse(xhttps.responseText);
var cikti = document.getElementById("getir");
for (const key in veri) {
   cikti.innerHTML += veri[key].name+"  e mail="+veri[key].email+"<br>";
}

}
}
