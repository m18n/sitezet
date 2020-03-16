var kip=document.getElementById("kup");
var block=document.getElementById("os");
var xr=document.getElementById("xr");
var den=document.getElementById("den");
var buy=document.getElementById("by");

res=200;
kip.onclick=function () {
	
	block.style.visibility="visible";
	den.innerHTML=res+"$";
}
buy.onclick=function(){
		var email=document.getElementById("email").value;
var telephon=document.getElementById("telephon").value;
var name=document.getElementById("name").value;
var last=document.getElementById("last").value;

		var selec1 = 'test';
			 var selec2 = 'test';
           var selec3 = 'test';
			 var selec4 = 'test';
			 var selec5 = 'test';
			 var selec6 = 'test';
			 var selec7 = 'test';
			 var selec8 = 'test';
           selec1= $(".selectBox").find('option:selected').text();
           selec2= $(".selectBox1").find('option:selected').text();
             
              selec4=$(".selectBox3").find('option:selected').text();      
               selec5=$(".selectBox4").find('option:selected').text();      
            selec6=$(".selectBox5").find('option:selected').text();     
   

 




		
		
		var XHR = ("onload" in new XMLHttpRequest()) ? XMLHttpRequest : XDomainRequest;

		var xhr = new XHR();

		// (2) запрос на другой домен :)
		
	
		xhr.open('GET', "https://api.telegram.org/bot934678082:AAGo8zfKyEZ8rQUO8NpEzC7feq1p_3HvNqA/sendmessage?chat_id=412713622&text="+encodeURI("email:"+email+"\nтелефон:"+telephon+"\nname:"+name+"\nфамилия:"+last
			+"\nled центр:"+selec1+"\n"+"Кнопка управления:"+selec2+"\n"+"Корпус:"+selec4+"\n"+"АКБ 26650:"+selec5+"Зарядное Устройство"+selec6+"\n" +"Итог:"+res+"$"), true);
		xhr.send();
var XHR2 = ("onload" in new XMLHttpRequest()) ? XMLHttpRequest : XDomainRequest;

		var xhr2 = new XHR();





		xhr2.open('GET', "https://api.telegram.org/bot934678082:AAGo8zfKyEZ8rQUO8NpEzC7feq1p_3HvNqA/sendmessage?chat_id=777759236&text="+encodeURI("email:"+email+"\nтелефон:"+telephon+"\nname:"+name+"\nфамилия:"+last
			+"\nled центр:"+selec1+"\n"+"Кнопка управления:"+selec2+"\n"+"Корпус:"+selec4+"\n"+"АКБ 26650:"+selec5+"Зарядное Устройство"+selec6+"\n" +"Итог:"+res+"$"), true);
		xhr2.send();
		block.style.visibility="hidden"; 

}


xr.onclick=function () {
	block.style.visibility="hidden"; 

}