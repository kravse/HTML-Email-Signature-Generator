
function firstFunction()
{
	var x=document.getElementById("first");
	x.value=x.value.toUpperCase();
}

function lastFunction()
{
	var x=document.getElementById("last");
	x.value=x.value.toUpperCase();
}

function posFunction()
{
	var x=document.getElementById("position");
	x.value=x.value.toUpperCase();
}

function workFunction()
{
	var x=document.getElementById("work");
	if(x.value != ""){
		var res = x.value.split('');
		var clean = new Array();

		for(var i=0;i<res.length;i++){
			if(/^\d$/.test(res[i]) || res[i]=='e' || res[i]=='x'){
				clean.push(res[i]);
			}
		}

		if((clean.length>10) && (clean[0]==1)){

			clean.splice(0, 1);
		}

		clean.splice(3, 0, " ");
		clean.splice(7, 0, " ");

		x.value=clean.join('');
	}
}

function cellFunction()
{
	var x=document.getElementById("cell");
	if(x.value != ""){
		var res = x.value.split('');
		var clean = new Array();
		for(var i=0;i<res.length;i++){
			if(/^\d$/.test(res[i])){
				clean.push(res[i]);
			}
		}

		if((clean.length>10) && (clean[0]==1)){

			clean.splice(0, 1);
		}

		clean.splice(3, 0, " ");
		clean.splice(7, 0, " ");

		x.value=clean.join('');
	}
}

function httpFunction(id)
{
	var x=document.getElementById(id);
	x.value=x.value.toLowerCase();
	if(x.value != ""){
		if((x.value.substring(0,7)!="http://")&&(x.value.substring(0,8)!="https://")){
			x.value="http://"+x.value; 
		}
	}
}

