(function(){
	var j = 0;
	for(var i = 0;i<1000000000;i++){
		j += i;
	}
	document.getElementById("demo").innerHTML += "script1 --" + j + " -- " + Date() + "<br>";
})();