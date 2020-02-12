
function changeFunc() {
    var selectBox = document.getElementById("selectBox");
    var selectBox1 = document.getElementById("selectBox1");
    var selectBox2 = document.getElementById("selectBox2");
    var selectBox3 = document.getElementById("selectBox3");
    var selectBox4 = document.getElementById("selectBox4");
    var selectBox5 = document.getElementById("selectBox5");
    var selectBox6 = document.getElementById("selectBox6");
    var selectBox7 = document.getElementById("selectBox7");
    var selectedValue = parseInt(selectBox.options[selectBox.selectedIndex].value);
    var selectedValue1 = parseInt(selectBox1.options[selectBox1.selectedIndex].value);
    var selectedValue2 = parseInt(selectBox2.options[selectBox2.selectedIndex].value);
    var selectedValue3 = parseInt(selectBox3.options[selectBox3.selectedIndex].value);
    var selectedValue4 = parseInt(selectBox4.options[selectBox4.selectedIndex].value);
    var selectedValue5 = parseInt(selectBox5.options[selectBox5.selectedIndex].value);
    var selectedValue6 = parseInt(selectBox6.options[selectBox6.selectedIndex].value);
    var selectedValue7 = parseInt(selectBox7.options[selectBox7.selectedIndex].value);
 	var result=selectedValue+selectedValue1+selectedValue2+selectedValue3+selectedValue4+selectedValue5+selectedValue6+selectedValue7+200;
 	var restext=document.getElementById("res");
    window['res'] = result;
 	restext.innerHTML = result+"$";
     	
ss
   
   }
