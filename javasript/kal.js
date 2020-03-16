
function changeFunc() {
    var selectBox = document.getElementById("selectBox");
    var selectBox1 = document.getElementById("selectBox1");
    
    var selectBox3 = document.getElementById("selectBox3");
    var selectBox4 = document.getElementById("selectBox4");
    var selectBox5 = document.getElementById("selectBox5");
    
    
    var selectedValue = parseInt(selectBox.options[selectBox.selectedIndex].value);
    var selectedValue1 = parseInt(selectBox1.options[selectBox1.selectedIndex].value);
   
    var selectedValue3 = parseInt(selectBox3.options[selectBox3.selectedIndex].value);
    var selectedValue4 = parseInt(selectBox4.options[selectBox4.selectedIndex].value);
    var selectedValue5 = parseInt(selectBox5.options[selectBox5.selectedIndex].value);
   
 	var result=selectedValue+selectedValue1+selectedValue3+selectedValue4+selectedValue5+200;
 	var restext=document.getElementById("res");
    window['res'] = result;

 	restext.innerHTML = result+"$";

 	


   
   }
