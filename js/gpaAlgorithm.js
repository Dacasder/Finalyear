
var pancakes = 100.00;
var rice = 200.00;
var eggs = 50.00;
var moimoi = 100.00;

function breakfast(){




}

function checke(itsId){
	check = document.getElementById(itsId);

	itsselect = itsId + "1";
	// alert(check.checked);

	if(check.checked == true){
		//alert("checked");
		document.getElementById(itsselect).disabled = false;
	}else{
		document.getElementById(itsselect).disabled = true;
		document.getElementById(itsselect).selectedIndex= 0;
		var pan = document.getElementById('pan1');
		var moi = document.getElementById('moimoi1');
		var ri = document.getElementById('rice1');
		var egg = document.getElementById('eggs1');
		var pa = pan.options[pan.selectedIndex].text;
		var mo = moi.options[moi.selectedIndex].text;
		var ric = ri.options[ri.selectedIndex].text;
		var eg = egg.options[egg.selectedIndex].text;
		var price = 0;

		if(pa != "How many plates do you want?"){
			price += pa * pancakes;
		}
		if(ric != "How many plates do you want?"){
			price += ric * rice;
		}if(eg != "How many plates do you want?"){
			price += eg * eggs;
		}
		if(mo != "How many plates do you want?"){
			price += mo * moimoi;
		}
		document.getElementById('total').value = "₦" + price;
	}
}
function selected(){
	var pan = document.getElementById('pan1');
	var moi = document.getElementById('moimoi1');
	var ri = document.getElementById('rice1');
	var egg = document.getElementById('eggs1');
	var pa = pan.options[pan.selectedIndex].text;
	var mo = moi.options[moi.selectedIndex].text;
	var ric = ri.options[ri.selectedIndex].text;
	var eg = egg.options[egg.selectedIndex].text;
	var price = 0;

	if(pa != "How many plates do you want?"){
		price += pa * pancakes;
	}
	if(ric != "How many plates do you want?"){
		price += ric * rice;
	}if(eg != "How many plates do you want?"){
		price += eg * eggs;
	}
	if(mo != "How many plates do you want?"){
		price += mo * moimoi;
	}
	document.getElementById('total').value = "₦" + price;


}
