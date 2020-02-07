
 	

document.getElementById('fader').oninput = function() {
     var c=document.getElementById('volume');
     var val = this.value;
     c.value=val;
};
