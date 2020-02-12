var kip=document.getElementById("kup");
var block=document.getElementById("os");
var xr=document.getElementById("xr");
var den=document.getElementById("den");
res=200;
kip.onclick=function () {
	
	block.style.visibility="visible";
	den.innerHTML=res+"$";
}
xr.onclick=function () {
	block.style.visibility="hidden";

}