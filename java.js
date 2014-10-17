// JavaScript Document
xmlhttp2 = new XMLHttpRequest();
xmlhttp3 = new XMLHttpRequest();
xmlhttp4 = new XMLHttpRequest();
xmlhttp5 = new XMLHttpRequest();
xmlhttp6 = new XMLHttpRequest();
xmlhttp7 = new XMLHttpRequest();
xmlhttp8 = new XMLHttpRequest();
var string;
var date_id;
var se_id;
var bo_id;
function login()
{
	
	var obj=document.getElementById('Text1').value;
	var obj1=document.getElementById('Password1').value;
	var serverpage='login.php?userid='+obj+'&password='+obj1;
	xmlhttp2.open('GET',serverpage,true);
	xmlhttp2.onreadystatechange = function() {
			if (xmlhttp2.readyState == 4 && xmlhttp2.status == 200) {
				if(xmlhttp2.responseText == "yes")
				{
					window.location="Admin.html";
				}
				else if(xmlhttp2.responseText =="no")
				{
					alert("Wrong Username/Password");
				}
			}
	}
	xmlhttp2.send(null);
	xmlhttp2.close();
}
function checksession()
{
	var serverpage='checksession.php';
	xmlhttp2.open('GET',serverpage,true);
	xmlhttp2.onreadystatechange = function() {
			if (xmlhttp2.readyState == 4 && xmlhttp2.status == 200) {
				if(xmlhttp2.responseText != "yes")
				{
					window.location="index.html";
				}
			}
	}
	xmlhttp2.send(null);
	xmlhttp2.close();
}
function logout()
{
	var serverpage='logout.php';
	xmlhttp2.open('GET',serverpage,true);
	xmlhttp2.onreadystatechange = function() {
			if (xmlhttp2.readyState == 4 && xmlhttp2.status == 200) {
				
					window.location="index.html";
			}
	}
	xmlhttp2.send(null);
	xmlhttp2.close();
}

function deletedetail()
{
	var acno=document.getElementById('Text1').value;
	var serverpage='deletedetail.php?acno='+acno;
	xmlhttp2.open('GET',serverpage,true);
	xmlhttp2.onreadystatechange = function() {
			if (xmlhttp2.readyState == 4 && xmlhttp2.status == 200) {
				
					//indow.location="index.html";
					///alert('sdasd');
					//alert(xmlhttp2.responseText);
					//var a='24782504'
					//var abc=String.fromCharCode(a);
					//alert(abc);
					alert(xmlhttp2.responseText);
			}
	}
	xmlhttp2.send(null);
	xmlhttp2.close();
}

function nameconvert()
{
	//var acno=document.getElementById('Text1').value;
	//alert('kikn');
	var namee=document.getElementById('Text2').value;
	//alert(namee);
	var nameb=document.getElementById('Text3');
	var hid=document.getElementById('hid');
	var serverpage='convert.php?namee='+namee;
	xmlhttp2.open('GET',serverpage,true);
	xmlhttp2.onreadystatechange = function() {
			if (xmlhttp2.readyState == 4 && xmlhttp2.status == 200) {
				
					//indow.location="index.html";
					///alert('sdasd');
					//alert(xmlhttp2.responseText);
					//var a='24782504'
					//var abc=String.fromCharCode(a);
					//alert(abc);
					hid.value=xmlhttp2.responseText;
					nameb.innerHTML=xmlhttp2.responseText;
			}
	}
	xmlhttp2.send(null);
	xmlhttp2.close();
}
function showrate()
{
	//alert();
	var hid=document.getElementById('Text1');
	var serverpage='showrate.php';
	xmlhttp2.open('GET',serverpage,true);
	xmlhttp2.onreadystatechange = function() {
			//alert('asda');
			if (xmlhttp2.readyState == 4 && xmlhttp2.status == 200) {
				
				if(xmlhttp2.responseText== "no")
				{
					window.location="index.html";
				}
				else
				{
					//indow.location="index.html";
					///alert('sdasd');
					//alert(xmlhttp2.responseText);
					//var a='24782504'
					//var abc=String.fromCharCode(a);
					//alert(abc);
					hid.value=xmlhttp2.responseText;
				}
					//nameb.innerHTML=xmlhttp2.responseText;
			}
	}
	xmlhttp2.send(null);
	xmlhttp2.close();
}
function insertnewrate()
{
	alert('asda');
	var newrate=document.getElementById('Text2').value;
	var dt=document.getElementById('dt').value;
	var serverpage='insertnewrate.php?newrate='+newrate+'&dt='+dt;
	xmlhttp2.open('GET',serverpage,true);
	xmlhttp2.onreadystatechange = function() {
			//alert('asda');
			if (xmlhttp2.readyState == 4 && xmlhttp2.status == 200) {
				
					//indow.location="index.html";
					///alert('sdasd');
					//alert(xmlhttp2.responseText);
					//var a='24782504'
					//var abc=String.fromCharCode(a);
					//alert(abc);
					alert(xmlhttp2.responseText);
				
					//nameb.innerHTML=xmlhttp2.responseText;
			}
	}
	xmlhttp2.send(null);
	xmlhttp2.close();

}
function dateid(th)
{
	//alert("asdas");
	date_id=th.id;
	//alert(date_id);
}
function seid(th)
{
	se_id=th.id;
	//alert(se_id);
}
function boid(th)
{
	bo_id=th.id;
	//alert(bo_id);
}
function fatchacdeatil()
{
	
	var bojan=document.getElementById('bojan');
	var bofeb=document.getElementById('bofeb');
	var bomar=document.getElementById('bomar');
	var boap=document.getElementById('boap');
	var bomay=document.getElementById('bomay');
	var bojune=document.getElementById('bojune');
	var bojuly=document.getElementById('bojuly');
	var boaug=document.getElementById('boaug');
	var bosep=document.getElementById('bosep');
	var booct=document.getElementById('booct');
	var bonov=document.getElementById('bonov');
	var bodec=document.getElementById('bodec');
	
	var sejan=document.getElementById('sejan');
	var sefeb=document.getElementById('sefeb');
	var semar=document.getElementById('semar');
	var seap=document.getElementById('seap');
	var semay=document.getElementById('semay');
	var sejune=document.getElementById('sejune');
	var sejuly=document.getElementById('sejuly');
	var seaug=document.getElementById('seaug');
	var sesep=document.getElementById('sesep');
	var seoct=document.getElementById('seoct');
	var senov=document.getElementById('senov');
	var sedec=document.getElementById('sedec');
	
	var dtjan=document.getElementById('dtjan');
	var dtfeb=document.getElementById('dtfeb');
	var dtmar=document.getElementById('dtmar');
	var dtap=document.getElementById('dtap');
	var dtmay=document.getElementById('dtmay');
	var dtjune=document.getElementById('dtjune');
	var dtjuly=document.getElementById('dtjuly');
	var dtaug=document.getElementById('dtaug');
	var dtsep=document.getElementById('dtsep');
	var dtoct=document.getElementById('dtoct');
	var dtnov=document.getElementById('dtnov');
	var dtdec=document.getElementById('dtdec');
	
	var amjan=document.getElementById('amjan');
	var amfeb=document.getElementById('amfeb');
	var ammar=document.getElementById('ammar');
	var amap=document.getElementById('amap');
	var ammay=document.getElementById('ammay');
	var amjune=document.getElementById('amjune');
	var amjuly=document.getElementById('amjuly');
	var amaug=document.getElementById('amaug');
	var amsep=document.getElementById('amsep');
	var amoct=document.getElementById('amoct');
	var amnov=document.getElementById('amnov');
	var amdec=document.getElementById('amdec');
	
	
	var year=document.getElementById('year').value;
	
	var account=document.getElementById('txtacno1').value
	var a=account;
	var serverpage='fatchacdeatil.php?acno='+a+'&year='+year;
	
	xmlhttp2.open('GET',serverpage,true);
	xmlhttp2.onreadystatechange = function() {
			//alert('asda');
			if (xmlhttp2.readyState == 4 && xmlhttp2.status == 200) {
				//alert('asdas');
				//alert(xmlhttp2.responseText);
				var contant=eval("("+xmlhttp2.responseText+")");
				//alert(contant.bojan);
				bojuly.value=contant.bojuly;
				//alert(xmlhttp2.responseText);
			
			}
	}
	xmlhttp2.send(null);
	xmlhttp2.close();
}
function test()
{
	var serverpage='fatchacdeatil.php';
	xmlhttp2.open('GET',serverpage,true);
	xmlhttp2.onreadystatechange = function() {
			//alert('asda');
			if (xmlhttp2.readyState == 4 && xmlhttp2.status == 200) {
				
				var contant=eval("("+xmlhttp2.responseText+")");
				alert(contant.roll);
			
			}
	}
	xmlhttp2.send(null);
	xmlhttp2.close();
	
}

function savedata()
{
	alert('kjnnjnjn');
	var obj=document.getElementById(date_id).value;
	var obj1=document.getElementById(se_id).value;
	var obj2=document.getElementById(bo_id).value;
	var obj3=document.getElementById('txtacno1').value;
	if(obj3 != "")
	{
		var serverpage='savedata.php?date='+obj+'&se='+se_id+'&bo='+obj2+'&ac_no='+obj3;
		xmlhttp2.open('GET',serverpage,true);
		xmlhttp2.onreadystatechange = function() {
				//alert('asda');
				if (xmlhttp2.readyState == 4 && xmlhttp2.status == 200) {
					
						alert(xmlhttp2.responseText);
						
				}
		}
		xmlhttp2.send(null);
		xmlhttp2.close();
	}
	else
	{
		alert('pls enter account no');
	}
}
function printdata()
{
	var loop=document.getElementById('txtfirst').value;
	var obj1=document.getElementById('txtnext').value;
	//var obj1=document.getElementById('txtnext').value;
	var count;
	var flag=0;
	var month=document.getElementById('month').value;
	var year=document.getElementById('year').value;
	var serverpage='rowcount.php?month='+month+'&year='+year;
	xmlhttp2.open('GET',serverpage,true);
		xmlhttp2.onreadystatechange = function() {
				//alert('asda');
				if (xmlhttp2.readyState == 4 && xmlhttp2.status == 200) {
					
						count=xmlhttp2.responseText;
												
				}
		}
	xmlhttp2.send(null);
	xmlhttp2.close;
	

	if(loop <= count)
	{
		if(flag > 0)
		{
			var serverpage='printdata.php?start='+obj1+'&month='+month+'&year='+year;
			xmlhttp2.open('GET',serverpage,true);
			xmlhttp2.onreadystatechange = function() {
				//alert('asda');
				if (xmlhttp2.readyState == 4 && xmlhttp2.status == 200) {
					
					var win=window.open("","Print","width=500,height=500");
					win.document.write(xmlhttp2.responseText);
					win.print();
					flag++;
					loop=loop+obj1;
					printdata();
				}
			}
			xmlhttp2.send(null);
			xmlhttp2.close;
			
		}
		else
		{
			var serverpage='printdata.php?start='+obj1+'&month='+month+'&year='+year;
			xmlhttp2.open('GET',serverpage,true);
			xmlhttp2.onreadystatechange = function() {
				//alert('asda');
				if (xmlhttp2.readyState == 4 && xmlhttp2.status == 200) {
					
					var win=window.open("","","width=500,height=500");
					win.document.write(xmlhttp2.responseText);
					win.print();
					loop=loop+obj1;
					printdata();
				}
			}
			xmlhttp2.send(null);
			xmlhttp2.close;
		}
	}
	else
	{
		if(flag > 0)
		{
			var serverpage='printdata.php?start='+obj1+'&month='+month+'&year='+year;
			xmlhttp2.open('GET',serverpage,true);
			xmlhttp2.onreadystatechange = function() {
				//alert('asda');
				if (xmlhttp2.readyState == 4 && xmlhttp2.status == 200) {
					
					var win=window.open("","Print","width=500,height=500");
					win.document.write(xmlhttp2.responseText);
					win.print();
					flag++;
				}
			}
			xmlhttp2.send(null);
			xmlhttp2.close;
			
		}
		else
		{
			var serverpage='printdata.php?start='+obj1+'&month='+month+'&year='+year;
			xmlhttp2.open('GET',serverpage,true);
			xmlhttp2.onreadystatechange = function() {
				//alert('asda');
				if (xmlhttp2.readyState == 4 && xmlhttp2.status == 200) {
					
					var win=window.open("","Print","width=500,height=500");
					win.document.write(xmlhttp2.responseText);
					win.print();
				}
			}
			xmlhttp2.send(null);
			xmlhttp2.close;
		}
	}
	/*var flag=0;
	var obj=document.getElementById('txtfirst').value;
	var obj1=document.getElementById('txtnext').value;
	if(flag > 1)
	{
		var serverpage='savedata.php?start='+obj1;
		xmlhttp2.open('GET',serverpage,true);
		xmlhttp2.onreadystatechange = function() {
				//alert('asda');
				if (xmlhttp2.readyState == 4 && xmlhttp2.status == 200) {
					
						alert(xmlhttp2.responseText);
						
				}
		}
		xmlhttp2.send(null);
		xmlhttp2.close();
	}
	else
	{
		var serverpage='savedata.php?start='+obj;
		xmlhttp2.open('GET',serverpage,true);
		xmlhttp2.onreadystatechange = function() {
				//alert('asda');
				if (xmlhttp2.readyState == 4 && xmlhttp2.status == 200) {
					
						alert(xmlhttp2.responseText);
						
				}
		}
		xmlhttp2.send(null);
		xmlhttp2.close();
	}
	//alert('jbjbb');
/*	var win=window.open('','print_data','left=100,top=100,width=40,height=40');
	win.print();*/
}