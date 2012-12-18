<?php
session_start();
session_register("$formatedtimeinv");
date_default_timezone_set('Asia/Calcutta');
$timeinv = time();
$formatedtimeinv = Date("M-d-Y-H-i-s",$timeinv);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="rtl" lang="ar">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> طرق الدفع المحلية السهلة والمريحة للتحرير باللغة الإنجليزية لورقتك</title>
<meta name="description" content="تقدم Enago طرق الدفع المحلية لك للقيام بالدفع حسب راحتك عندما تحصل على أوراقك الأكاديمية المحررة باللغة الإنجليزية من خلالنا. قم بتقديم مخطوطتك، واستفد من الأسعار المخفضة على التحرير باللغة الإنجليزية. السعر على أساس كل كلمة."/>
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
<script type="text/javascript" language="javascript">
<!--

function validate()
{
	if (ismember() && isAmount())
	{
	return true;
	}
	else
	{
	return false;
	}	
}

function ismember() 
{
	var str = document.frmSubmit.member.value;
	if (str == "")
	{
	alert("Lütfen İş Numarası girin.")
	document.frmSubmit.member.focus();
	return false;
	}
	return true;
}


function isAmount()
{
	var no=document.frmSubmit.amount1.value;
	if (no.length==0)
	{
	alert("Lütfen Ödeme girin.");
	document.frmSubmit.amount1.focus();
	document.frmSubmit.amount1.select();
	return false;
	} 
	
	for(var i=1;i<no.length;i++)
	
	{
		var strpno=(no.substring(i,i+1));

		if((strpno > 'a' && strpno < 'z') || (strpno > 'A' && strpno < 'Z'))

		{

			alert("Lütfen Ödeme girin.");
			document.frmSubmit.amount1.focus();
			document.frmSubmit.amount1.select();
			return false;

		}
	}
	
	
	return true;        
}
//-->
</script>
<!--[if lt IE 8]>
   <style type="text/css">
   li a {display:inline-block;}
   li a {display:block;}
   </style>
   <![endif]-->
<!--sidebar ends-->


</head>
<body>
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
<div id="breadcrumb"><span><a class="prev" href="index.htm">الصفحة الرئيسية</a>&nbsp;&nbsp;&gt;&gt;&nbsp;&nbsp;<a href="34.htm">طرق الدفع</a></span></div></div>

<!--breadcrum ends-->

<!--left-container start-->

<div id="bodyContainer">

<!--left-container starts-->

<div id="left-x">
<div class="subnav">
<h2>أتعاب التحرير والوقت المستغرق</h2>
<ul id="menu2" class="submenu collapsible">
  <li><a href="106.htm">أتعاب التحرير والوقت المستغرق</a></li>
  <li><a href="27.htm">الخصومات / العروض</a></li>
  <li><a class="active-sub" href="34.htm">طريقة الدفع</a></li>
  <li><a href="payment-faq.htm">أسئلة وإجابات متكررة بشأن الدفع</a></li>
</ul>

</div>
<?php include("inc_left-bottom.htm"); ?>


</div>

<!--left-container ends-->

<!--right-container starts-->
<div id="right-x">
<h1>طرق الدفع</h1>
<div class="content">


<form action="secure/checkout2.php" method="post" enctype="multipart/form-data" name="frmSubmit" id="frmSubmit" onsubmit="return validate(this);">
  
  <p><span class="mandatory">*</span> الحقول المعلمة إجبارية</p>
<div id="process1" class="heading_formsection" style="padding-bottom:0px;">الدفع عن طريق بطاقة الائتمان</div>  
<table><tr><td>
يرجى ملء التفاصيل التالية إذا كنت ترغب في الدفع عن طريق بطاقة الائتمان</td>
</tr></table>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="table_form">
         <tr>
           <td class="col1">تكليف رقم</td>
           <td class="col2 mandatory">*</td>
           <td class="col3"><input name="member" type="text" class="textfield" id="member" /> (على سبيل المثال: OGANE-1)</td>
         </tr>
        <tr>
          <td class="col1">لدفع</td>
          <td class="col2 mandatory">*</td>
          <td class="col3"><div><input name="amount1" id="amount1" size="26" class="textfield"> العملة <label>
               <select size="1" name="currency" >
                 <option value="USD" selected>USD</option>
               </select>
            </label></div></td>
        </tr>
        <tr>
          <td class="col1">&nbsp;</td>
          <td class="col2 mandatory">&nbsp;</td>
          <td class="col3"><span class="mandatory">*</span> ملاحظة: يُرجى إدخال المبلغ بدون فواصل<br />
صحيح: 2345
<br />
غير صحيح: 2,345</td>
        </tr>
         </table> 
          
      <div style="text-align:center; padding-top:10px;">
            <input type="submit" class="submit-but" value="" name="frmsubmit" />
        <!--<input type="image" style="border:none;" src="images/quotation/paynow.gif" name="frmsubmit"/> -->
      </div>
</form>



</div>

</div>
<!--right-container ends-->


<div class="cleaner"></div>
</div>

<!-- footer code start here -->

<?php include("inc_footer.htm"); ?> 


</body>
</html>
