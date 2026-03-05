function Random() {
 const relement = document.getElementsByTagName("tr") ;
 for(var i = 0; i < relement.length ; i++) {
var random1 = Math.round(Math.random() * 256)
var random2 = Math.round(Math.random() * 256)
var random3 = Math.round(Math.random() * 256)
var brightness = (random1 * 0.299) + (random2 * 0.587) + (random3 * 0.114);
if (brightness < 128) {
relement[i].style.color = "white"; 
}
 relement[i].style.backgroundColor = "rgb(" + random1 + "," + random2 + "," + random3 + ")";
 }
}
function aRandom() {
 const aelement = document.getElementsByTagName("a") ;
 for(var i = 0; i < aelement.length ; i++) {
var random4 = Math.round(Math.random() * 256)
var random5 = Math.round(Math.random() * 256)
var random6 = Math.round(Math.random() * 256)
var brightness2 = (random4 * 0.299) + (random5 * 0.587) + (random6 * 0.114);
if (brightness2 > 128) {
aelement[i].style.color = "black"; 
}
 aelement[i].style.backgroundColor = "rgb(" + random4 + "," + random5 + "," + random6 + ")";
 }
}
function bRandom() {
 const belement = document.getElementsByTagName("button") ;
 for(var i = 0; i < belement.length ; i++) {
var random7 = Math.round(Math.random() * 256)
var random8 = Math.round(Math.random() * 256)
var random9 = Math.round(Math.random() * 256)
var brightness = (random7 * 0.299) + (random8 * 0.587) + (random9 * 0.114);
if (brightness > 128) {
belement[i].style.color = "black"; 
}
 belement[i].style.backgroundColor = "rgb(" + random7 + "," + random8 + "," + random9 + ")";
 }
}

window.addEventListener('load', Random, false);
window.addEventListener('load', aRandom, false);
window.addEventListener('load', bRandom, false);