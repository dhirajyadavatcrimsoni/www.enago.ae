//validation jscript

/*********************************** 23 Quotation Form **************************************************/
function validate_step1()
{
	if (isservice() && ispriority() && isDelDate() && isHrs())
	{
		return true;
		
	}
	else
	{
		return false;
	}
}
function validate_step2()
{
	if (isSubjectArea() && isInputfile() && isOutputfile()  &&  isLanguage() && isUseofdocu2() && isJournalName() && isTypeofdoc())
	{
		return true;
	}
	else
	{
		return false;
	}
}

function validate_step3()
{
	if (isattachfiles() && isReceipt())
	{
		return true;
	}
	else
	{
		return false;
	}
}

function validate_confirm()
{
	if (validate_step1() && validate_step2() && validate_step3() && isClientType() && isCaptcha() && isUpload() && istandc())
	{
		document.frmSubmit.action = "292_nreq.php";
		return true;
	}
	else
	{
			
		return false;
	}	
}

function isCaptcha(){
var str = document.frmSubmit.answer.value;
var num1 = document.frmSubmit.num1.value;
var num2 = document.frmSubmit.num2.value;
var total = Math.round(num1) + Math.round(num2);
	if(str == "")
	{
		alert("Please enter sum of numbers.");
		document.frmSubmit.answer.focus();
		return false;
	}
	else if(str != total)
	{
		alert("Answer the equation correctly.");
		document.frmSubmit.answer.focus();
		return false;
	}
return true;
}

function isPlandetails()
{
	if(document.frmSubmit.clienttype[0].checked == true)
		{
			return isRequest();
		}
return true;
}

function isCLtype()
{
	if(document.frmSubmit.clienttype[1].checked == true)
		{
			return isPayment();
		}
return true;
}


function isClientType()
{
	if(document.frmSubmit.clienttype[1].checked == true)
		{
			return islastname() && isfirstname() && isOrg() && isdepartment() && isDesignation() && isEmail() && isMatch() && isCountry() && isZipCode() && iscity() && isAddress() && isPhone() && isRefered();
		}
	else
	{
			return ismemberid1() && islastname() && isfirstname() && isOrg() && isEmail() && isMatch();
	}
}

function isSubjectArea()
{
	if(document.frmSubmit.subsubject.selectedIndex == 0)
	{
			alert("يُرجى اختيار مجال الموضوع");
			document.frmSubmit.subsubject.focus();
			return false;
	
	}
	else if(document.frmSubmit.specialization.selectedIndex == 0)
	{
				alert("يُرجى اختيار مجال التخصص");
				document.frmSubmit.specialization.focus();
				return false;
	}
		
	else if((document.frmSubmit.specialization.value == "Other") && (document.frmSubmit.otherspecialization.value == ""))
	{
			alert("يُرجى اختيار مجال التخصص");
			document.frmSubmit.otherspecialization.focus();
			return false;
	}
	
return true;
}

function isattachfiles() 
{
	var str = document.frmSubmit.numeditingfiles.value;
	var itr = document.frmSubmit.numreferencefiles.value;
	if (str == "")
	{
	alert("يُرجى كتابة عدد الملفات التي أرفقتها")
	document.frmSubmit.numeditingfiles.focus();
	return false;
	}
	if (itr == "")
	{
	alert("يُرجى كتابة عدد الملفات التي أرفقتها")
	document.frmSubmit.numreferencefiles.focus();
	return false;
	}
	return true;

}

function ismemberid1()
{
	var str = document.frmSubmit.membershipid.value;
	if (str == "")
	{
		alert("يُرجى إدخال هوية عضويتك")
		document.frmSubmit.membershipid.focus();
		
		return false;
	}
return true;
}

function isdepartment() 
{
	var str = document.frmSubmit.department.value;
	if (str == "")
	{
	alert("يُرجى إدخال اسم القسم / الكلية")
	document.frmSubmit.department.focus();
	return false;
	}
return true;

}

function islastname() 
{
	var str = document.frmSubmit.lname.value;
	if (str == "")
	{
	alert("يُرجى إدخال اسم العائلة")
	document.frmSubmit.lname.focus();
	return false;
	}
return true;

}

function istandc() 
{
	if(document.frmSubmit.agreeterms.checked == false)
	{
	 alert("يُرجى الموافقة على الشروط والأحكام قبل الاستمرار.");
	 document.frmSubmit.agreeterms.focus();
	 return false;
    }
return true;
}

function isfirstname() 
{
	var str = document.frmSubmit.fname.value;
	if (str == "")
	{
	alert("يُرجى إدخال اسمك الأول")
	document.frmSubmit.fname.focus();
	return false;
	}
	return true;
}

function isReceipt()
{
	var pub = false;
		for(var i=0;i<=1;i++)
		{
			if(document.frmSubmit.invoicetype[i].checked)
			{
				pub = true;
			}
		}
		if(pub == false)
		{
			alert("يُرجى تحديد نوع الفاتورة");
			document.frmSubmit.invoicetype[0].focus();
			return false;
		}
		if(document.frmSubmit.invoicetype[1].checked)
			{
				if(document.frmSubmit.invoicedate.value == ""){
					alert("يُرجى كتابة التاريخ الذي ترغب في وضعه على الفاتورة");
					document.frmSubmit.invoicedate.focus();
					return false;
				}
				if(document.frmSubmit.payername.value == ""){
					alert("يُرجى كتابة اسم القائم بالدفع");
					document.frmSubmit.payername.focus();
					return false;
				}
			}
return true;
}

function isTypeofdoc()
{
	if (document.frmSubmit.typeofdoc.selectedIndex == 0)
	{
		alert("يُرجى اختيار نوع المخطوطة");
		document.frmSubmit.typeofdoc.focus();
		return false;
	}
return true;
}


function isInputfile()
{
	if(document.frmSubmit.inputfile.selectedIndex == 0)
	{
		alert("يُرجى اختيار تنسيق الملف");
		document.frmSubmit.inputfile.focus();
		return false;
	}
return true;
}

function isOutputfile()
{
	if(document.frmSubmit.outputfile.selectedIndex == 0)
	{
		alert("يُرجى اختيار تنسيق الملف.");
		document.frmSubmit.outputfile.focus();
		return false;
	}
return true;
}

function isservice()
{
	var pub = false;
		for(var i=0;i<=2;i++)
		{
			if(document.frmSubmit.service[i].checked)
			{
				pub = true;
			}
		}
		if(pub == false)
		{
			alert("يُرجى اختيار أحد الخدمات");
			document.frmSubmit.service[0].focus();
			return false;
		}
return true;
}

function ispriority(){
	if (document.frmSubmit.priority.selectedIndex == 0)
	{
		alert("يُرجى اختيار خطة");
		document.frmSubmit.priority.focus();
		return false;
	}
return true;
}

function isLanguage()
{
	if(document.frmSubmit.language.selectedIndex == 0)
	{
		alert("يُرجى اختيار أسلوب اللغة الإنجليزي");
		document.frmSubmit.language.focus();
		return false;
	}
return true;
}

function isFormat3()
{
	if(document.frmSubmit.service[0].checked){	
	 return true;
	}
	else{
		var pub = false;
			for(var i=0;i<=1;i++){
				if(document.frmSubmit.format[i].checked)
				{
					pub = true;
				}
			}
			if(pub == false)
			{
				alert("الحقول الإلزامية: التنسيق وفقا للمبادئ التوجيهية للمجلة العلمية");
				document.frmSubmit.format[0].focus();
				return false;
			}
	}
return true;
}

function isOrg() 
{
	var str = document.frmSubmit.organisation.value;
	if (str == "")
	{
	alert("يُرجى إدخال اسم المنظمة")
	document.frmSubmit.organisation.focus();
	return false;
	}
return true;
}


function isEmail() 
{
	validateObject = new Object();
	validateObject.val = document.frmSubmit.email.value;

	if((validateObject.val.indexOf("@") == -1) || (validateObject.val.charAt(0) == ".") || (validateObject.val.charAt(0) == "@") ||(validateObject.len < 6) || (validateObject.val.indexOf(".") == -1) || (validateObject.val.charAt(validateObject.val.indexOf("@")+1) == ".") || (validateObject.val.charAt(validateObject.val.indexOf("@")-1) == "."))
	{
		alert("يُرجى إدخال عنوان البريد الإلكتروني");
		document.frmSubmit.email.focus();
		return false;
	}
return true;
}

function isMatch()
{
	var email=document.frmSubmit.email.value;
	var cemail=document.frmSubmit.emailconfirm.value;
	
	if(email!==cemail)
	{
		alert("نطلب عنوان البريد الإلكتروني مرتين لمجرد التأكيد. لم تقم بإدخاله مرة ثانية.");
		document.frmSubmit.emailconfirm.focus();
		return false;
	}
return true;
}

function isCountry()
{
if (document.frmSubmit.country.selectedIndex == 0)
	{
		alert("إلزامية المجالات : اسم البلد");
		document.frmSubmit.country.focus();
		return false;
	}
return true;
}

function isZipCode() 
{

	var str = document.frmSubmit.zipcode.value;
	if (str == "")
	{
	alert("يُرجى إدخال الرمز البريدي لعنوانك")
	document.frmSubmit.zipcode.focus();
	return false;
	}
return true;
}

function iscity() 
{
	var str = document.frmSubmit.city.value;
	if (str == "")
	{
	alert("يُرجى إدخال مدينتك")
	document.frmSubmit.city.focus();
	return false;
	}
return true;
}

function isAddress() 
{
		var str = document.frmSubmit.mailingaddress1.value; 
		if (str == "")
		{
		alert("إلزامية المجالات :سطر العنوان 1")
		document.frmSubmit.mailingaddress1.focus();
		return false;
}
return true;
}

function isPhone()
	{
		var no=document.frmSubmit.phone.value;
		if (no.length==0)
		{
			alert("يُرجى إدخال رقم للهاتف حيث يتسنى لنا الاتصال بك فيما لو ظهرت أمورا ملحّة");
			document.frmSubmit.phone.focus();
			document.frmSubmit.phone.select();
			return false;
		} 
		for(var i=1;i<no.length;i++)
		{
			var strpno=(no.substring(i,i+1));
			if((strpno > 'a' && strpno < 'z') || (strpno > 'A' && strpno < 'Z'))
			{
				alert("يُرجى إدخال رقم للهاتف حيث يتسنى لنا الاتصال بك فيما لو ظهرت أمورا ملحّة");
				document.frmSubmit.phone.focus();
				document.frmSubmit.phone.select();
				return false;
			}
		}
	return true;	
}	

function isRefered()
{
	var menuSel = document.frmSubmit.R1.selectedIndex;
	var menuSell = document.frmSubmit.R2.selectedIndex;
	if(menuSel==0)
		{
			alert("نعتذر عن أي إزعاج ولكن هل يمكن إحاطتنا علما بكيفية العثور علينا");
			document.frmSubmit.R1.focus();
			return false;
		}
		
	if(menuSel==1 || menuSel==2)
		{
			if(menuSell==0)
			{
				alert("نعتذر عن أي إزعاج ولكن هل يمكن إحاطتنا علما بكيفية العثور علينا");
				document.frmSubmit.R2.focus();
				return false;
				
			}
		}
	if(menuSel==6 || menuSel==7)
	{
		return true;
	}
	if(menuSel==1 || menuSel==2 || menuSel==3 || menuSel==4 || menuSel==5 || menuSel==8)
		{
			if(document.frmSubmit.txtRef.value=="" || document.frmSubmit.txtRef.value==null)
				{
					alert("نعتذر عن أي إزعاج ولكن هل يمكن إحاطتنا علما بكيفية العثور علينا");
					document.frmSubmit.txtRef.focus();				
					return false;
				}
			else{
					return true;
				}
		}
return true;
}
/*
function isRefered()
{
	var menuSel = document.frmSubmit.R1.selectedIndex;
	if(menuSel==0)
		{
			alert("نعتذر عن أي إزعاج ولكن هل يمكن إحاطتنا علما بكيفية العثور علينا");
			document.frmSubmit.R1.focus();
			return false;
		}
	if(menuSel==6 || menuSel==7)
		{
			if(document.frmSubmit.txtRef.value=="" || document.frmSubmit.txtRef.value==null)
				{
					alert("نعتذر عن أي إزعاج ولكن هل يمكن إحاطتنا علما بكيفية العثور علينا");
					document.frmSubmit.txtRef.focus();
					return false;
				}
			else{
					return true;
				}
		}
return true;
}
*/
function isCheck()
{
if(document.frmSubmit.deadlinestrict.checked==true)
    {document.frmSubmit.delMonth.disabled=true;
    document.frmSubmit.delDay.disabled=true;
    document.frmSubmit.delYear.disabled=true;
	document.frmSubmit.delHrs.disabled=true;
    document.frmSubmit.delMin.disabled=true;
	document.frmSubmit.delDay.selectedIndex = 0;
	document.frmSubmit.delMonth.selectedIndex = 0;
	document.frmSubmit.delYear.selectedIndex = 0;
	document.frmSubmit.delHrs.selectedIndex = 0
	document.frmSubmit.delMin.selectedIndex = 0;
	}
	
if(document.frmSubmit.deadlinestrict.checked==false)
    {document.frmSubmit.delMonth.disabled=false;
    document.frmSubmit.delDay.disabled=false;
    document.frmSubmit.delYear.disabled=false;
	document.frmSubmit.delHrs.disabled=false;
    document.frmSubmit.delMin.disabled=false;}
}

function isDelDate() 
{
	if(document.frmSubmit.deadlinestrict.checked==true)
	{
	return true;
	}
	
	if(document.frmSubmit.deadlinestrict.checked==false)
	{
		var str = document.frmSubmit.delMonth.selectedIndex; 
		if (str == 0)
		{
		alert("يُرجى تحديد موعد تسليم مناسب")
		document.frmSubmit.delMonth.focus();
		return false;
		}

		var str = document.frmSubmit.delDay.selectedIndex; 
		if (str == 0)
		{
		alert("يُرجى تحديد موعد تسليم مناسب")
		document.frmSubmit.delDay.focus();
		return false;
		}
		
		var str = document.frmSubmit.delYear.selectedIndex; 
		if (str == 0)
		{
		alert("يُرجى تحديد موعد تسليم مناسب")
		document.frmSubmit.delYear.focus();
		return false;
		}
		
		var intMonth = document.frmSubmit.delMonth.selectedIndex;
		var intMonth = document.frmSubmit.delMonth.selectedIndex;
		var intDay = document.frmSubmit.delDay.selectedIndex;
		if ((intMonth == 4 || intMonth == 6 || intMonth == 9 || intMonth == 11) && intDay == 31) {
		alert("يُرجى تحديد موعد تسليم مناسب");
		document.frmSubmit.delMonth.focus();
		return false;
		}
		
		var intYear=document.frmSubmit.delYear.selectedIndex;
		var intYearvalue = document.frmSubmit.delYear[intYear].value;
		if(intYearvalue!=2012){
		if((intMonth==2&&(intDay==29||intDay==30||intDay==31)))
			{
			alert("يُرجى تحديد موعد تسليم مناسب");
			document.frmSubmit.delDay.focus();
			return false;
			}
	}
				
//		var today = new Date();
//		var intMonth1 = getMonth(today);
//		var intDay1 = getDate(today);
//		var intYear1 = getYear(today);
//		if (document.frmSubmit.delYear.selectedIndex.value > intYear1) {
//			alert ("Date greater then current date.");
//			document.frmSubmit.delYear.focus();
//			return false;
//		}
		return true;
	}
}

function isUpload()
{
	if(document.frmSubmit.superdat.value == "")
	{
		var confirmAns = confirm("لم تُرفق أي ملفات. من أجل الحصول على تسعير دقيق، يُرجى إرفاق الملفات. مت أجل الاستمرار، يُرجى النقر فوق \"موافقة\" أو \"إلغاء\" لإرفاق الملف.");
		if(confirmAns)
		{
			return true;
		}
		else
		{
			document.frmSubmit.superdat.focus();
			return false;
		}
	return false;	
	}
return true;
} 

function isUseofdocu2()
{
	if(document.frmSubmit.useofdoc.selectedIndex == 0)
	{		alert("يُرجى اختيار غرض المستند الخاص بك");
		document.frmSubmit.useofdoc.focus();
		return false;
	}

return true;
}	

function isHrs()
{
	if(document.frmSubmit.deadlinestrict.checked==true)
	{
	return true;
	}
	
	if(document.frmSubmit.deadlinestrict.checked==false)
	{

	if (document.frmSubmit.delHrs.selectedIndex == 0)
			{
				alert("يُرجى تحديد موعد تسليم مناسب");
				document.frmSubmit.delHrs.focus();
				return false;
			}
	return true;
	}
}

function showalert(){
	if(document.frmSubmit.inputfile.value == "TeX")
	{
		alert("الرجاء ارسال هذا الملف تكس في شكل قوات الدفاع الشعبي إلrequest-arabic@enago.com");
	}
}

function showHide()
{
	if(document.frmSubmit.typeofdoc.value == "Others")
	{
		document.getElementById("doctype").style.display			= "block";
		document.getElementById("doctype").style.visibility		= "visible";
	}
	else
	{
		document.getElementById("doctype").style.display			= "none";
		document.getElementById("doctype").style.visibility		= "hidden";
	}
}


function singlecheck(){
	document.getElementById("dmrc").style.visibility = "hidden";
	document.getElementById("dmrc").style.display = "none";
	document.getElementById("dcertificate").style.visibility = "hidden";
	document.getElementById("dcertificate").style.display = "none";
	document.getElementById("dcoverletter").style.visibility = "hidden";
	document.getElementById("dcoverletter").style.display = "none";
	
	document.getElementById("dadvancemrc").style.visibility = "hidden";
	document.getElementById("dadvancemrc").style.display = "none";
	document.frmSubmit.priority.selectedIndex = 0;
}

function doublecheck(){
	
	document.getElementById("dmrc").style.visibility = "visible";
	document.getElementById("dmrc").style.display = "block";
	document.getElementById("dcertificate").style.visibility = "visible";
	document.getElementById("dcertificate").style.display = "block";
	document.getElementById("dcoverletter").style.visibility = "hidden";
	document.getElementById("dcoverletter").style.display = "none";
	
	document.getElementById("dadvancemrc").style.visibility = "hidden";
	document.getElementById("dadvancemrc").style.display = "none";
	document.frmSubmit.priority.selectedIndex = 0;
}

function advanceediting(){
	
	document.getElementById("dadvancemrc").style.visibility = "visible";
	document.getElementById("dadvancemrc").style.display = "block";
	document.getElementById("dcertificate").style.visibility = "visible";
	document.getElementById("dcertificate").style.display = "block";
	document.getElementById("dcoverletter").style.visibility = "visible";
	document.getElementById("dcoverletter").style.display = "block";
	
	document.getElementById("dmrc").style.visibility = "hidden";
	document.getElementById("dmrc").style.display = "none";
	document.frmSubmit.priority.selectedIndex = 0;
}


function showdoformat(){
	document.getElementById("doformat").style.visibility = "visible";
	document.getElementById("doformat").style.display = "block";
}

function hidedoformat(){
	document.getElementById("doformat").style.visibility = "hidden";
	document.getElementById("doformat").style.display = "none";
	document.frmSubmit.format[0].checked=false;
	document.frmSubmit.format[1].checked=false;
}

function receiptshow()
{
	document.getElementById("receiptchoice").style.visibility = "visible";
	document.getElementById("receiptchoice").style.display = "block";
}
function receipthide()
{
	document.getElementById("receiptchoice").style.visibility = "hidden";
	document.getElementById("receiptchoice").style.display = "none";
	document.frmSubmit.invoicedate.value = "";
	document.frmSubmit.payername.value = "";
	document.frmSubmit.otherinfo.value = "";
}

function forexisting()
{
	document.getElementById("editorref").style.visibility = "visible";
	document.getElementById("editorref").style.display = "block";
	document.getElementById("epay").style.visibility = "visible";
	document.getElementById("epay").style.display = "block";
	document.getElementById("pd1").style.visibility = "visible";
	document.getElementById("pd1").style.display = "block";
	document.getElementById("pd2").style.visibility = "visible";
	document.getElementById("pd2").style.display = "block";
	document.getElementById("pd3").style.visibility = "hidden";
	document.getElementById("pd3").style.display = "none";
	document.getElementById("pd4").style.visibility = "visible";
	document.getElementById("pd4").style.display = "block";
	document.getElementById("pd5").style.visibility = "hidden";
	document.getElementById("pd5").style.display = "none";
	document.getElementById("pd7").style.visibility = "visible";
	document.getElementById("pd7").style.display = "block";
	document.frmSubmit.department.value = "";
	document.frmSubmit.designation.selectedIndex = 0;
	document.frmSubmit.zipcode.value = "";
	document.frmSubmit.city.value = "";
	document.frmSubmit.mailingaddress1.value = "";
	document.frmSubmit.phone.value = "";
	document.frmSubmit.extno.value = "";
	document.frmSubmit.fax.value = "";
	document.frmSubmit.website.value = "";
	document.frmSubmit.phone.value = "";
	document.frmSubmit.R1.selectedIndex = 0;
	document.frmSubmit.txtRef.value = "";
	document.frmSubmit.ePayment[0].checked = false;
	document.frmSubmit.ePayment[1].checked = false;
}
function fornew()
{
	document.getElementById("editorref").style.visibility = "hidden";
	document.getElementById("editorref").style.display = "none";
	document.getElementById("epay").style.visibility = "visible";
	document.getElementById("epay").style.display = "block";
	document.getElementById("pd1").style.visibility = "hidden";
	document.getElementById("pd1").style.display = "none";
	document.getElementById("pd2").style.visibility = "visible";
	document.getElementById("pd2").style.display = "block";
	document.getElementById("pd3").style.visibility = "visible";
	document.getElementById("pd3").style.display = "block";
	document.getElementById("pd4").style.visibility = "visible";
	document.getElementById("pd4").style.display = "block";
	document.getElementById("pd5").style.visibility = "visible";
	document.getElementById("pd5").style.display = "block";
	document.getElementById("pd7").style.visibility = "visible";
	document.getElementById("pd7").style.display = "block";
	document.frmSubmit.membershipid.value = "";
	document.frmSubmit.asneditor.value = "";
	document.frmSubmit.oldeditor[0].checked = false;
	document.frmSubmit.oldeditor[1].checked = false;
	document.frmSubmit.oldeditor[2].checked = false;

}

function reasnshow()
{
	document.getElementById("reasnedit").style.visibility = "visible";
	document.getElementById("reasnedit").style.display = "block";
}
function reasnhide()
{
	document.getElementById("reasnedit").style.visibility = "hidden";
	document.getElementById("reasnedit").style.display = "none";
	document.frmSubmit.reeditasn.value = "";
	
}

function showHidepriority()
{
	if(document.frmSubmit.service[2].checked != true){
			if(document.forms[0].priority.value=="Economy")	
			{
				document.getElementById("dmrc").style.display			= "none";
				document.getElementById("dmrc").style.visibility		= "hidden";
			}
			else
			{
				document.getElementById("dmrc").style.display			= "block";
				document.getElementById("dmrc").style.visibility		= "visible";
			}
		}
}
/*
function setOptions2(chosen)
{
if ((chosen == "Other Search Engine") || (chosen == "Referred by organization") || (chosen == "Referred by a Friend/colleague") || (chosen == "Referred by a journal") || (chosen == "Other website link") || (chosen == "Academic conference") || (chosen == "Advertisements")) {
document.frmSubmit.txtRef.disabled = false;
document.getElementById("txtref").style.display			= "block";
document.getElementById("txtref").style.visibility		= "visible";
document.getElementById('labelref').innerHTML = "غيرها من محرك البحث";
}
else if (chosen == "Referred by organization") {
document.frmSubmit.txtRef.disabled = false;
document.getElementById("txtref").style.display			= "block";
document.getElementById("txtref").style.visibility		= "visible";
document.getElementById('labelref').innerHTML = "اسم المنظمة";
}
else if (chosen == "Referred by a Friend/colleague"){
document.frmSubmit.txtRef.disabled = false;
document.getElementById("txtref").style.display			= "block";
document.getElementById("txtref").style.visibility		= "visible";
document.getElementById('labelref').innerHTML = "اسم الصديق / الزميل";
}
else if (chosen == "Referred by a journal"){
document.frmSubmit.txtRef.disabled = false;
document.getElementById("txtref").style.display			= "block";
document.getElementById("txtref").style.visibility		= "visible";
document.getElementById('labelref').innerHTML = "اسم المجلة العلمية";
}
else if (chosen == "Other website link"){
document.frmSubmit.txtRef.disabled = false;
document.getElementById("txtref").style.display			= "block";
document.getElementById("txtref").style.visibility		= "visible";
document.getElementById('labelref').innerHTML = "عنوان الموقع الإلكتروني";
}
else if (chosen == "Academic conference"){
document.frmSubmit.txtRef.disabled = false;
document.getElementById("txtref").style.display			= "block";
document.getElementById("txtref").style.visibility		= "visible";
document.getElementById('labelref').innerHTML = "اسم المؤتمر";
}
else if (chosen == "Advertisements") {
document.frmSubmit.txtRef.disabled = false;
document.getElementById("txtref").style.display			= "block";
document.getElementById("txtref").style.visibility		= "visible";
document.getElementById('labelref').innerHTML = "الاسم / عنوان الانترنت";
}
else if (chosen == "Others") {
document.frmSubmit.txtRef.disabled = false;
document.getElementById("txtref").style.display			= "block";
document.getElementById("txtref").style.visibility		= "visible";
document.getElementById('labelref').innerHTML = "أخرى";
}
else{
document.frmSubmit.txtRef.disabled = true;
document.frmSubmit.txtRef.value = "";
document.getElementById("txtref").style.display			= "none";
document.getElementById("txtref").style.visibility		= "hidden";
document.getElementById('labelref').innerHTML = "";
}
}
*/
function showonlyone(thechosenone) {
      var newboxes = document.getElementsByTagName("div");
            for(var x=0; x<newboxes.length; x++) {
                  name = newboxes[x].getAttribute("name");
                  if (name == 'newboxes') {
                        if (newboxes[x].id == thechosenone) {
                        newboxes[x].style.display = 'block';
                  }
                  else {
                        newboxes[x].style.display = 'none';
                  }
            }
      }
}

function isMifauto()
{
	if((document.frmSubmit.delpriority[0].checked == true) || (document.frmSubmit.delpriority[1].checked == true) || (document.frmSubmit.delpriority[2].checked == true)){
	return isMifReq();
	}
return true;
}

function showHideservice()
{
	if(document.forms[0].service.value=="normal")	
	{
		document.getElementById("service_type").style.display			= "block";
		document.getElementById("service_type").style.visibility		= "visible";
		document.getElementById("service_options").style.display			= "none";
		document.getElementById("service_options").style.visibility		= "hidden";
		document.getElementById("mifoption2").style.visibility = "hiddden";
		document.getElementById("mifoption2").style.display = "none";
		document.getElementById("mifoption1").style.visibility = "hidden";
		document.getElementById("mifoption1").style.display = "none";
		document.frmSubmit.delpriority_advance[0].checked = false;
		document.frmSubmit.delpriority_advance[1].checked = false;
	}
	else if(document.forms[0].service.value=="advance")
	{
		document.getElementById("service_type").style.display			= "none";
		document.getElementById("service_type").style.visibility		= "hidden";
		document.getElementById("service_options").style.display			= "block";
		document.getElementById("service_options").style.visibility		= "visible";
		document.getElementById("mifoption2").style.visibility = "visible";
		document.getElementById("mifoption2").style.display = "block";
		document.getElementById("mifoption1").style.visibility = "hidden";
		document.getElementById("mifoption1").style.display = "none";
		document.frmSubmit.mif[0].checked = false;
		document.frmSubmit.mif[1].checked = false;
		document.frmSubmit.delpriority[0].checked = false;
		document.frmSubmit.delpriority[1].checked = false;
		document.frmSubmit.delpriority[2].checked = false;
		document.frmSubmit.delpriority[3].checked = false;
		document.frmSubmit.delpriority[4].checked = false;
	}
	else
	{
		document.getElementById("service_type").style.display			= "none";
		document.getElementById("service_type").style.visibility		= "hidden";
		document.getElementById("service_options").style.display			= "none";
		document.getElementById("service_options").style.visibility		= "hidden";
		document.getElementById("mifoption2").style.visibility = "hiddden";
		document.getElementById("mifoption2").style.display = "none";
		document.getElementById("mifoption1").style.visibility = "hidden";
		document.getElementById("mifoption1").style.display = "none";
		document.frmSubmit.mif[0].checked = false;
		document.frmSubmit.mif[1].checked = false;
		document.frmSubmit.delpriority[0].checked = false;
		document.frmSubmit.delpriority[1].checked = false;
		document.frmSubmit.delpriority[2].checked = false;
		document.frmSubmit.delpriority[3].checked = false;
		document.frmSubmit.delpriority[4].checked = false;
		document.frmSubmit.delpriority_advance[0].checked = false;
		document.frmSubmit.delpriority_advance[1].checked = false;
	}
}

function mifpay(){
	document.getElementById("mifoption1").style.visibility = "visible";
	document.getElementById("mifoption1").style.display = "block";
	document.getElementById("mifoption2").style.visibility = "hidden";
	document.getElementById("mifoption2").style.display = "none";
	
}

function miffree(){
	document.getElementById("mifoption1").style.visibility = "hidden";
	document.getElementById("mifoption1").style.display = "none";
	document.getElementById("mifoption2").style.visibility = "visible";
	document.getElementById("mifoption2").style.display = "block";
	document.frmSubmit.mif[0].checked = false;
	document.frmSubmit.mif[1].checked = false;
}

function showHideOther()
{
	if(document.frmSubmit.publishpurpose.value == "Other purpose of publishing")
	{
		document.getElementById("other_a").style.display			= "block";
		document.getElementById("other_a").style.visibility		= "visible";
	}
	else
	{
		document.getElementById("other_a").style.display			= "none";
		document.getElementById("other_a").style.visibility		= "hidden";
	}
}
function showHide1()
{
	if(document.frmSubmit.targetjournal.value == "Other journal type")
	{
		document.getElementById("other_b").style.display			= "block";
		document.getElementById("other_b").style.visibility		= "visible";
	}
	else
	{
		document.getElementById("other_b").style.display			= "none";
		document.getElementById("other_b").style.visibility		= "hidden";
	}
}

function isJournalName() 
{
var index = document.frmSubmit.useofdoc.selectedIndex;
var strvalue = document.frmSubmit.useofdoc[index].value;
	if(strvalue == "Journal Submission")
	{
		var str = document.frmSubmit.journalname.value;
		if (str == "")
		{
		alert("يُرجى اختيار اسم المجلة العلمية حيث ترغب في التقديم")
		document.frmSubmit.journalname.focus();
		return false;
		}
	}
return true;
}

function ques2show()
{
	document.getElementById("qus2").style.visibility = "visible";
	document.getElementById("qus2").style.display = "block";

}
function ques2hide()
{
	document.getElementById("qus2").style.visibility = "hidden";
	document.getElementById("qus2").style.display = "none";
}

function isSameAs()
{
if(document.frmSubmit.sameasabove.checked==true)
    {
	document.frmSubmit.title_a.disabled=true;
	document.frmSubmit.title_a.selectedIndex = 0;
	document.frmSubmit.profession_a.disabled=true;
	document.frmSubmit.profession_a.value = "";
	document.frmSubmit.lname_a.disabled=true;
	document.frmSubmit.lname_a.value = "";
    document.frmSubmit.fname_a.disabled=true;
    document.frmSubmit.fname_a.value = "";
    document.frmSubmit.mailingaddress1_a.disabled=true;
    document.frmSubmit.mailingaddress1_a.value = "";
	document.frmSubmit.phone_a.disabled=true;
	document.frmSubmit.phone_a.value = "";
    document.frmSubmit.extno_a.disabled=true;
    document.frmSubmit.extno_a.value="";
    document.frmSubmit.fax_a.disabled=true;
    document.frmSubmit.fax_a.value="";
    document.frmSubmit.email_a.disabled=true;
    document.frmSubmit.email_a.value="";
    document.frmSubmit.emailconfirm_a.disabled=true;
    document.frmSubmit.emailconfirm_a.value="";
    document.frmSubmit.email2_a.disabled=true;
    document.frmSubmit.email2_a.value="";
	}
	
if(document.frmSubmit.sameasabove.checked==false)
    {
	document.frmSubmit.title_a.disabled=false;
	document.frmSubmit.profession_a.disabled=false;
	document.frmSubmit.lname_a.disabled=false;
    document.frmSubmit.fname_a.disabled=false;
    document.frmSubmit.mailingaddress1_a.disabled=false;
	document.frmSubmit.phone_a.disabled=false;
    document.frmSubmit.extno_a.disabled=false;
    document.frmSubmit.fax_a.disabled=false;
    document.frmSubmit.email_a.disabled=false;
    document.frmSubmit.emailconfirm_a.disabled=false;
    document.frmSubmit.email2_a.disabled=false;
	}
}

function serviceshow1()
{
	document.getElementById("revisedpaper").style.visibility = "visible";
	document.getElementById("revisedpaper").style.display = "block";
	document.getElementById("rejectedpaper").style.visibility = "hidden";
	document.getElementById("rejectedpaper").style.display = "none";
	document.getElementById("changejournal").style.visibility = "hidden";
	document.getElementById("changejournal").style.display = "none";
	document.frmSubmit.journalname_a.value = "";
	document.frmSubmit.journalurl_a.value = "";


}
function servicehide1()
{
	document.getElementById("revisedpaper").style.visibility = "hidden";
	document.getElementById("revisedpaper").style.display = "none";
	document.getElementById("rejectedpaper").style.visibility = "visible";
	document.getElementById("rejectedpaper").style.display = "block";
	document.getElementById("changejournal").style.visibility = "visible";
	document.getElementById("changejournal").style.display = "block";

}

function isDesignation() 
{
	var str = document.frmSubmit.designation.value;
	if (str == "")
	{
	alert("يُرجى إدخال اللقب المُميِّز لك")
	document.frmSubmit.designation.focus();
	return false;
	}
return true;
}

function journalsub(){
var index = document.frmSubmit.useofdoc.selectedIndex;
var strvalue = document.frmSubmit.useofdoc[index].value;
	if(strvalue == "Journal Submission"){
		document.getElementById("nameofjournal").style.visibility = "visible";
		document.getElementById("nameofjournal").style.display = "block";
	}
	else{
		document.getElementById("nameofjournal").style.visibility = "hidden";
		document.getElementById("nameofjournal").style.display = "none";
	}
}

function commentyes()
{
	document.getElementById("reviwercomment").style.visibility = "visible";
	document.getElementById("reviwercomment").style.display = "block";
}
function commentno()
{
	document.getElementById("reviwercomment").style.visibility = "hidden";
	document.getElementById("reviwercomment").style.display = "none";
}