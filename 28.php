<?php session_start();
session_unset();

session_destroy();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="rtl" lang="ar">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>أسئلة وإجابات مجانية مع محرري Enago، اطرح أسئلتك عن تحرير مخطوطة الخاصة بك</title>
<meta name="description" content="الأسئلة والإجابات المجانية هي خدمة ذات قيمة مضافة متاحة لجميع العملاء بعد استلامهم للمخطوطة التي تم تحريرها. يتم الرد على الأسئلة من المحرر الذي قام بتحرير المخطوطة الخاصة بك، وبالتالي، نضمن دائما رضائك. اطرح أسئلة غير محدودة!"/>
<meta name="keywords" content=""/>
<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" title=""/>
<link href="css/enago-ar.css" rel="stylesheet" type="text/css" />
<!--counrty dropdown starts-->
<script type="text/javascript" src="js/anylinkcssmenu.js"></script>
<script type="text/javascript">
anylinkcssmenu.init("anchorclass")
</script>
<!--counrty dropdown ends-->


<!--sidebar starts-->
<link href="css/sidebar-nav.css" rel="stylesheet" type="text/css" />
<script src="js/jquery-1.2.1.min.js" type="text/javascript"></script>
<script src="js/menu.js" type="text/javascript"></script>

<!--[if lt IE 8]>
   <style type="text/css">
   li a {display:inline-block;}
   li a {display:block;}
   </style>
   <![endif]-->
<!--sidebar ends-->
<script type="text/javascript" src="js/switchcontent.js" ></script>
<style type="text/css">.handcursor{cursor:hand;cursor:pointer;}</style>
<script language="JavaScript" type="text/javascript">

function validate()
{
	if (isName() && isEmail() && isassign() && isCaptcha())
	{
		document.frmSubmit.action = "298_loop.php";
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

function isNumquestion(){
	if(document.frmSubmit.nq.selectedIndex == 0)
	{
		alert("يُرجى اختيار عدد الأسئلة التي تود طرحها.");
		document.frmSubmit.nq.focus();
		return false;
	}
return true;
}

function isName() 
	{
		var str = document.frmSubmit.name.value;
		if (str == "")
		{
		alert("يُرجى إدخال اسمك")
		document.frmSubmit.name.focus();
		return false;
	}
	for (var i = 1; i < str.length; i++) 
	{
		var ch = str.substring(i, i + 1);
		if ((ch < "a" && "z" < ch) || (ch < "A" && "Z" < ch)) 
		{
			alert("يُرجى إدخال اسمك");
			document.frmSubmit.name.select();
			document.frmSubmit.name.focus();
			return false;
		}
	}
return true;
}

function isassign() 
{
	var str = document.frmSubmit.assignnumber.value;
	if (str == "")
	{
	alert("يُرجى إدخال رقم التكليف المرتبط بأسئلتك")
	document.frmSubmit.assignnumber.focus();
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
		alert("يُرجى إدخال عنوان بريد إلكتروني صالح");
		document.frmSubmit.email.focus();
		return false;
	}
return true;
}

</script>
<script language="javascript1.1" type="text/javascript">
function showHide()
{
	var servicevalue = document.frmSubmit.qusasn.selectedIndex;
	var value = document.frmSubmit.qusasn[servicevalue].value;
	if(value=="Yes")	
	{
		document.getElementById("divpreasn").style.display			= "block";
		document.getElementById("divpreasn").style.visibility		= "visible";
	}
	else
	{
		document.getElementById("divpreasn").style.display			= "none";
		document.getElementById("divpreasn").style.visibility		= "hidden";
	}

}
</script>
 </head>
<body>
<?php
$num1 = rand(1, 9);
$num2 = rand(1, 9);

$question = "<label>What is sum of " . $num1 . " + " . $num2 ." ?</label>";
?>
<?php include("inc_header.htm"); ?>
<!--main-navigation start-->
<div id="navigation">
<div class="menu">
<ul>
<li><a href="editing-services.htm?loc=tn">خدمات التحرير</a></li>
<li><a href="101.htm?loc=tn">مجالات التخصص</a></li> 
<li><a href="103.htm?loc=tn">محررونا </a></li> 
<li><a href="quality.htm?loc=tn">نظام الجودة في Enago</a></li> 
<li><a href="106.htm?loc=tn">أتعاب التحرير والوقت المستغرق</a></li> 
<li><a href="23.htm?loc=tn">نموذج التسعير</a></li> 
<li class="first"><a href="60.htm?loc=tn">من نحن</a></li> 
<div class="cleaner"></div>
</ul>
</div>
</div>
<!--main-navigation ends-->

<!--breadcrum start-->

<div class="breadcrumbwrap">
<div id="breadcrumb"><span><a class="prev" href="index.htm">الصفحة الرئيسية</a>&nbsp;&nbsp;&gt;&gt;&nbsp;&nbsp;<a href="editing-services.htm">خدمات التحرير</a>&nbsp;&nbsp;&gt;&gt;&nbsp;&nbsp;<a href="free-sevices.htm">المزايا المجانية / الخدمات ذات القيمة المضافة</a>&nbsp;&nbsp;&gt;&gt;&nbsp;&nbsp;<a href="110.htm">أسئلة وإجابات مجانية</a>&nbsp;&nbsp;&gt;&gt;&nbsp;&nbsp;<a class="current">نموذج الأسئلة والإجابات المجانية</a></span></div></div>

<!--breadcrum ends-->

<!--left-container start-->

<div id="bodyContainer">

<!--left-container starts-->

<div id="left-x">
<div class="subnav">
<h2>خدمات التحرير</h2>
<ul id="menu2" class="submenu collapsible">
  <li><a href="editing-services.htm">خدمات التحرير</a></li>
  <li><a href="normal-editing.htm">التحرير العادي</a></li>
  <li><a href="advance-editing.htm">التحرير المتقدم</a></li>
  <li><a href="1001.htm">مقارنة خدمات التحرير</a></li>
  <li><a href="117.htm">عينات التحرير </a></li>
  <li><a href="107.htm">عملية الخدمات</a></li>
  <li><a  href="108.htm">تنسيق الملفات</a></li>
  <li><a href="free-sevices.htm">الخدمات المجانية / المخفضة</a>
	  <ul>  
      <li><a class="active-sub-sub" href="110.htm">أسئلة وإجابات مجانية</a></li>
      <li><a href="1002.htm">بطاقة تقييم المخطوطة (MRC)</a></li>
      <li><a href="cover-letter.htm">الرسالة المفسرة</a></li>
      <li><a href="115.htm">إعادة التحرير</a></li>
      </ul>
  </li>
  <li><a href="100.htm">لماذا خدمات Enago</a></li>
  <li><a href="journal-recommendations.htm">التوصيات باستخدام خدمات Enago</a></li>
</ul>

</div>
<?php include("inc_left-bottom.htm"); ?>


</div>

<!--left-container ends-->

<!--right-container starts-->
<div id="right-x">
<h1>نموذج الأسئلة والإجابات المجانية</h1>
<div  class="content">

<p>يُرجى تعبئة التفاصيل الخاصة بك لمساعدتنا في التعرف على المخطوطة التي نحن بصددها. في الخطوة التالية، يمكنك كتابة الأسئلة التي لديك</p>

<form action="298_loop.php" method="post" enctype="multipart/form-data" name="frmSubmit" id="frmSubmit" onsubmit="return validate(this);">
 <p><span class="mandatory">*</span> الحقول المعلمة إجبارية</p>
<div id="process1" class="heading_formsection" style="padding-bottom:0px;">يُرجى تعبئة التفاصيل</div>  
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="table_form">
         <tr>
          <td class="col1">الاسم</td>
          <td class="col2 mandatory">*</td>
          <td class="col3"><input name="name" type="text" class="textfield" id="name" /></td>
          </tr>
        <tr>
          <td class="col1">البريد الإلكتروني</td>
          <td class="col2 mandatory">*</td>
          <td class="col3"><input name="email" id="email" size="26" class="textfield"></td>
          </tr>
        <tr>
          <td class="col1">تكليف رقم</td>
          <td class="col2 mandatory">*</td>
          <td class="col3"><input name="assignnumber" type="text" id="assignnumber" class="textfield" /></td>
          </tr>
        <tr>
          <td class="col1">كم عدد الأسئلة التي تود طرحها؟</td>
          <td class="col2 mandatory">&nbsp;</td>
          <td class="col3"><select name="nq" id="nq" class="textfield">
            <option value="1" selected>1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
          </select></td>
        </tr>
        <tr>
<td class="col1"><?php echo $question ?> <span class="font11">Prove you are not a robot.</span></td>
<td class="col2 mandatory">*</td>
<td class="col3"><input name="answer" type="text" id="answer" size="10" maxlength="15" class="textfield" />
<input type="hidden" name="trackcode" value="crimson"  id="trackcode" />
<input type="hidden" name="num1"  id="num1" value="<?php echo $num1 ?>" />
<input type="hidden" name="num2" id="num2" value="<?php echo $num2 ?>" /></td>
</tr>
         </table> 
<div class="clearBoth"></div>
<div style=" text-align:center; padding-top:10px;"><input type="image" style="border:none;" src="img/quotation/submit.gif" name="frmsubmit"/></div>
<div class="clearBoth"></div>  
</form>


</div>


</div>
</div>


<!--right-container ends-->


<div class="cleaner"></div>


<!-- footer code start here -->

<?php include("inc_footer.htm"); ?> 


</body>
</html>
