<?
session_start();
include "common.php";
$ip=@$REMOTE_ADDR; 
$domain = GetHostByName($ip); 
putenv('TZ=Asia/Calcutta');
$date=date('l, d F Y '); //Output: Wednesday, 07 September 2005 02:22 AM
$nowDay=date("m/d/Y");
$nowHour = getdate(mktime(date("H")));
$nowMin = date("i");
$nowSec = date("s");
$nowClock = $nowHour["hours"].":".$nowMin;
$times = $nq+1;
$x = 1;
while ($x < $times) {
$formfield="سؤال $x<br /><textarea name=$x cols=50 rows=5 id=$x></textarea> <br /><br />";
$allforms= $allforms . $formfield;
++$x;
}

reset ($HTTP_POST_VARS);
while (list ($key, $val) = each ($HTTP_POST_VARS)) {
$str=$str . " " . $key ." = " . $val . "\n";
   }


$message ="Date: $date

Name: $name
Email: $email
Assignment Number: $assignnumber
Number of questions: $nq

$str
*******************
IP: $ip
";

mail("$toq", "[QnA] ASN: $assignnumber Q:$nq", "$message",
      "From: CRIMSON (Enago-Request)<$fromAdd>\r\n" . 
      "Content-type: text/plain; charset=utf-8");

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="rtl" lang="ar">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>أسئلة وإجابات مجانية مع محرري Enago، خدمات التحرير العلمي باللغة الإنجليزية من Enago.</title>
<meta name="description" content="توظف Enago العلماء في مجال تخصص دراستك لتحرير الوثائق الخاصة بك. ومحررو Enago أنفسهم يتمتعون بمتوسط خبرة 19.4 عاما. إن ميزة الأسئلة والإجابات المجانية تسمح لك بطرح أسئلة غير محدودة على المحرر الذي يقوم بتحرير مخطوطتك!"/>
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
<div id="breadcrumb"><span><a class="prev" href="index.htm">الصفحة الرئيسية</a>&nbsp;&nbsp;&gt;&gt;&nbsp;&nbsp;<a href="editing-services.htm">خدمات التحرير</a>&nbsp;&nbsp;&gt;&gt;&nbsp;&nbsp;<a href="free-sevices.htm">المزايا المجانية / الخدمات ذات القيمة المضافة</a>&nbsp;&nbsp;&gt;&gt;&nbsp;&nbsp;<a href="110.htm">أسئلة وإجابات مجانية</a>&nbsp;&nbsp;&gt;&gt;&nbsp;&nbsp;<a class="current">نشكرك على تقديم طلبك</a></span></div></div>

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
<h1>نشكرك على تقديم طلبك</h1>
<div  class="content">

<p>نشكرك على تقديم أسئلتك. سيقوم محررونا بالعودة إليكم بالرد في وقت قريب.</p>

</div>


</div>
</div>


<!--right-container ends-->


<div class="cleaner"></div>


<!-- footer code start here -->

<?php include("inc_footer.htm"); ?> 


</body>
</html>
