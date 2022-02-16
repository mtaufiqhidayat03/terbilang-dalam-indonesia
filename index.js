function terbilang(number){
	var bilangan = ['','satu','dua','tiga','empat','lima','enam','tujuh','delapan','sembilan','sepuluh','sebelas'];
    var kalimat = "";
	if(number < 12){
		kalimat = bilangan[number];
	}
	else if(number < 20){
		kalimat = bilangan[number-10] + ' belas';
	}
	else if(number< 100){
		kalimat = bilangan[parseInt(String(number/10).substr(0,1))] + ' puluh '+bilangan[number % 10];
	}
	else if(number < 200){
		kalimat = 'seratus '+ terbilang(number - 100);
	}
	else if(number < 1000){
		kalimat = bilangan[parseInt(String(number / 100).substr(0,1))] + ' ratus '+ terbilang(number % 100);
	}
	else if(number < 2000){
		kalimat = 'seribu '+ terbilang(number - 1000);
	}
	else if(number < 10000){
		var kalimat = bilangan[parseInt(String(number / 1000).substr(0,1))] + ' ribu '+ terbilang(number % 1000);
	}
	else if(number < 100000){
		kalimat = terbilang(parseInt(String(number / 100).substr(0,2))) + ' ribu '+ terbilang(number % 1000);
	}
	else if(number < 1000000){
		kalimat = terbilang(parseInt(String(number / 1000).substr(0,3))) + ' ribu '+ terbilang(number % 1000);
	}
	// 1,000,000 - 	99,999,999
	else if(number < 100000000){
		kalimat = terbilang(parseInt(String(number / 1000000).substr(0,4))) + ' juta '+ terbilang(number % 1000000);
	}
	else if(number < 1000000000){
		kalimat = terbilang(parseInt(String(number / 1000000).substr(0,4))) + ' juta '+ terbilang(number % 1000000);
	}
	else if(number < 10000000000){
		kalimat = terbilang(parseInt(String(number / 1000000000).substr(0,1))) + ' milyar '+ terbilang(number % 1000000000);
	}
	else if(number < 100000000000){
		kalimat = terbilang(parseInt(String(number / 1000000000).substr(0,2))) + ' milyar '+ terbilang(number % 1000000000);
	}
	else if(number < 1000000000000){
		kalimat = terbilang(parseInt(String(number / 1000000000).substr(0,3))) + ' milyar '+ terbilang(number % 1000000000);
	}
	else if(number < 10000000000000){
		kalimat = terbilang(parseInt(String(number / 10000000000).substr(0,1))) + ' triliun '+ terbilang(number % 10000000000);
	}
	else if(number < 100000000000000){
		kalimat = terbilang(parseInt(String(number / 1000000000000).substr(0,2))) + ' triliun '+ terbilang(number % 1000000000000);
	}
	else if(number < 1000000000000000){
		kalimat = terbilang(parseInt(String(number / 1000000000000).substr(0,3))) + ' triliun '+ terbilang(number % 1000000000000);
	}
  else if(number < 10000000000000000){
		kalimat = terbilang(parseInt(String(number / 1000000000000000).substr(0,1))) + ' kuadriliun '+ terbilang(number % 1000000000000000);
	}
	return kalimat;
}
console.log(terbilang(6321111));