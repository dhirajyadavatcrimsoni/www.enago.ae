<?php
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$answer = $_POST['answer'];
$trackcode = $_POST['trackcode'];

$answer2 = $num1 + $num2;

if($trackcode == "crimson" && $answer == $answer2){
	
session_register ("$Order_Id");
session_register("$formatedtimeinv");
date_default_timezone_set('UTC'); 
$timeinv = time();
/*$formatedtimeinv = Date("MdYHis",$timeinv);*/
$formatedtimeinv = Date("Y-m-d H:i:s",$timeinv);
$Order_Id1 = "ENAGO-PP" .$formatedtimeinv .$member ;
$Order_Id=urlencode("$Order_Id1");
$ip=@$REMOTE_ADDR; 

$mailheaders = "From: ccpayment@enago.com\n";
$to = "payments@enago.com";

// some mail funda used for amount calculation

$message = "
Membership ID: $member
IP address: $ip
Amount= INR Rs. $amount1
Invoiceid : $Order_Id

";
mail("$to", "$member/$amount1", $message, $mailheaders);
$amount = "$amountfinal"; //your script should substitute the amount here in the quotes provided here
if ($amount1 > 100000) 
{ include ('morethan100000.htm');
	exit;
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="rtl" lang="ar">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>طرق دفع محلية وسهلة ومريحة لتحرير ورقتك باللغة الإنجليزية</title>
<meta name="description" content="تقدم Enago وسائل الدفع المحلية لك لسداد المدفوعات بشكل ملائم عندما تقوم بالتحرير الأكاديمي لأوراقك باللغة الإنجليزية من جانبنا. قم بتقديم مخطوطتك والاستفادة من الأسعار المخفضة على التحرير باللغة الإنجليزية. السعر على أساس كل كلمة."/>
<meta name="keywords" content=""/>
<link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon" title=""/>
<link href="../css/enago-ar.css" rel="stylesheet" type="text/css" />
<!--counrty dropdown starts-->
<script type="text/javascript" src="../js/anylinkcssmenu.js"></script>
<script type="text/javascript">
anylinkcssmenu.init("anchorclass")
</script>
<!--counrty dropdown ends-->


<!--sidebar starts-->
<link href="../css/sidebar-nav.css" rel="stylesheet" type="text/css" />
<script src="../js/jquery-1.2.1.min.js" type="text/javascript"></script>
<script src="../js/menu.js" type="text/javascript"></script>

<!--[if lt IE 8]>
   <style type="text/css">
   li a {display:inline-block;}
   li a {display:block;}
   </style>
   <![endif]-->
<!--sidebar ends-->


</head>
<body>
<?php include("../includes/inc_header.htm"); ?>
<!--main-navigation start-->
<div id="navigation">
<div class="menu">
<ul>
<li><a href="../editing-services.htm?loc=tn">خدمات التحرير</a></li>
<li><a href="../101.htm?loc=tn">مجالات التخصص</a></li> 
<li><a href="../103.htm?loc=tn">محررونا </a></li> 
<li><a href="../quality.htm?loc=tn">نظام الجودة في Enago</a></li> 
<li><a href="../106.htm?loc=tn">أتعاب التحرير والوقت المستغرق</a></li> 
<li><a href="../23.htm?loc=tn">نموذج التسعير</a></li> 
<li class="first"><a href="../60.htm?loc=tn">من نحن</a></li> <div class="cleaner"></div>
</ul>
</div>
</div>
<!--main-navigation ends-->

<!--breadcrum start-->

<div class="breadcrumbwrap">
<div id="breadcrumb"><span><a class="prev" href="../index.htm">الصفحة الرئيسية</a>&nbsp;&nbsp;&gt;&gt;&nbsp;&nbsp;<a href="../32.php">ادفع الآن</a></span></div></div>

<!--breadcrum ends-->

<!--left-container start-->

<div id="bodyContainer">

<!--left-container starts-->

<div id="left-x">
<div class="subnav">
<h2>أتعاب التحرير والوقت المستغرق</h2>
<ul id="menu2" class="submenu collapsible">
  <li><a href="../106.htm">أتعاب التحرير والوقت المستغرق</a></li>
  <li><a href="../27.htm">الخصومات / العروض</a></li>
  <li><a class="active-sub" href="../34.htm">طريقة الدفع</a></li>
  <li><a href="../payment-faq.htm">أسئلة وإجابات متكررة بشأن الدفع</a></li>
</ul>

</div>
<?php include("../includes/inc_left-bottom.htm"); ?>


</div>

<!--left-container ends-->

<!--right-container starts-->
<div id="right-x">
<h1>ادفع الآن</h1>
<div class="content">
<p>يرجى النقر على الزر أدناه للوصول إلى Paypal للقيام بالدفع. إذا لم يكن لديك حسابا Paypal، يُرجى النقر على "هل لديك حساب Paypal؟"في الصفحة التالية</p>

<form name="form" action="https://www.paypal.com/cgi-bin/webscr" style="margin:15px auto;" method="post">
  <div align="left">
  <INPUT type="hidden" value="_xclick" name="cmd"> 
  <INPUT type="hidden" value="Enago-Editing Services" name="item_name"> 
  <INPUT type="hidden" value="paypalusd@enago.com" name="business"> 
  <input type="hidden" name="country" value="UAE">
  <INPUT type="hidden" value="http://www.enago.com.br/images/logo_enago.gif" name="image_url"> 
  <INPUT type="hidden" value="http://www.enago.com.br/secure/success.htm"  name="return">
  <INPUT type="hidden" value="http://www.enago.com.br/secure/failure.htm"  name="cancel_return"> 
  <input type="hidden" value="<?php echo $member; ?>" name="custom">
  <INPUT type="hidden" name="amount" value="<?php echo $amount1; ?>"> 
  <INPUT type="hidden" value="1" name="rm"> 
  <INPUT type="hidden" value="USD" name="currency_code"> 
  <input type="hidden" value="<?php echo $Order_Id; ?>" name="invoice">
  <INPUT type="hidden" value="Return To Enago" name="cbt">
		  <!-- (end) CUSTOMERS SHIPPING DETAILS -->
		  <!--
        Including a note with payment. If set to "1," your customer will
        not be prompted to include a note. This is optional; if omitted or
        set to "0," your customer will be prompted to include a note
        -->
		  <INPUT type="hidden" value="1" name="no_shipping"> 
          <INPUT type="hidden" value="1" name="no_note">
		  <input type="hidden" name="charset" value="utf-8">
          <input type="image" style="border:none;" src="../img/quotation/paynow.gif" name="frmsubmit"/>
          
	</div>
</form>


</div>

</div>
<!--right-container ends-->


<div class="cleaner"></div>
</div>

<!-- footer code start here -->

<?php include("../includes/inc_footer.htm"); ?>

</body>
</html>
<?php 
} 
else
{
	echo "Incorrect data";
	return false;
}
?>