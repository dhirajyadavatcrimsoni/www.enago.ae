<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="rtl" lang="ar">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>شهادات- خدمات ™Enago لتحرير المخطوطات وخدمات التدقيق اللغوي</title>
<meta name="description" content="قدمت Enago خدماتها لأكثر من 20000 عميلا، يشملون الجامعات عريقة السمعة من اليابان والصين والولايات المتحدة وتايوان وإيران وألمانيا وغيرها وهي شركة خدمات التحرير باللغة الإنجليزية الوحيدة في العالم التي تفوز بجوائزRed Herring Asia والجوائز العالمية عن الممارسات الإبداعية."/>
<meta name="keywords" content="شهادات , خدمة التحرير بالغة الإنجليزية , تصحيح التجارب المطبعية خدمة , بالإنجليزية تصحيح , بالإنجليزية تحرير ,  الفئة الفنية بالإنجليزية تحرير ,  خدمات التحرير الأكاديمي"/>
<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" title="شهادات , خدمة التحرير بالغة الإنجليزية , تصحيح التجارب المطبعية خدمة , بالإنجليزية تصحيح"/>
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
<!-- for tabs -->
<link href="SpryAssets/SpryTabbedPanels-clientlist.css" rel="stylesheet" type="text/css" />
<script src="SpryAssets/SpryTabbedPanels.js" type="text/javascript"></script>  
<!-- for tabs end -->   

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
<li><a class="active" href="quality.htm?loc=tn">نظام الجودة في Enago</a></li> 
<li><a href="106.htm?loc=tn">أتعاب التحرير والوقت المستغرق</a></li> 
<li><a href="23.htm?loc=tn">نموذج التسعير</a></li> 
<li class="first"><a href="60.htm?loc=tn">من نحن</a></li> <div class="cleaner"></div>
</ul>
</div>
</div>
<!--main-navigation ends-->

<!--breadcrum start-->

<div class="breadcrumbwrap">
<div id="breadcrumb"><span><a class="prev" href="index.htm">الصفحة الرئيسية</a>&nbsp;&nbsp;&gt;&gt;&nbsp;&nbsp;<a href="quality.htm">نظام الجودة في Enago</a>&nbsp;&nbsp;&gt;&gt;&nbsp;&nbsp;<a href="114.htm">عملائنا</a></span></div></div>

<!--breadcrum ends-->

<!--left-container start-->

<div id="bodyContainer">

<!--left-container starts-->

<div id="left-x">
<div class="subnav">
<h2>نظام الجودة في Enago</h2>
<ul id="menu2" class="submenu collapsible">
  <li><a href="quality.htm">نظام الجودة في Enago</a></li>
  <li><a href="accepted-papers.php"> الأوراق المنشورة</a></li>
  <li><a class="active-sub" href="113.php">شهادات العملاء</a></li>
</ul>

</div>
<?php include("inc_left-bottom.htm"); ?>


</div>

<!--left-container ends-->

<!--right-container starts-->
<div id="right-x">
<h1>شهادات</h1>
<div  class="content">

<?php

// Begining of the code added by Sanjay

include('conn.php');

//$limit=25;

$CountryName="Saudi Arabia";

$MyQuery = "select * from accepted_papers where Permission_to_Publish_Testimonial=\"Yes\"  And `testimonial_English` !='' order by field(country, \"Saudi Arabia\", \"Global\", \"Europe\", \"Taiwan\", \"Japan\") ASC, Country DESC, Image_path DESC";

$numresults=mysql_query($MyQuery);
$numrows=mysql_num_rows($numresults);

if($numrows==0)
{
	echo "<H4>Results</H4>";
	echo "<P>Sorry, no records found</P>";
	
}


//$MyQuery.= " limit $s,$limit";

//echo $MyQuery;
//exit;


$result = mysql_query($MyQuery) or die("Couldn't execute query");

$i=0;
$PrevMem_Id="";
$z=0;

$ClientImg = "client-defaultimage.png";

	while ($row= mysql_fetch_array($result))
	{
		
	$Mem_Id = $row["MemID"];
	$Publisher_Name = $row["Publisher_Name"]; 
	$Journal_Details = $row["Journal_Details"];
	$Impact_Factor =  $row["Impact_Factor"];
	$Revised_Paper_Title = $row["Revised_Paper_Title"];
	$Article_Link = $row["Article_Link"];
	$CanPublishAP = $row["Can_Publish_Accepted__Papers"];
	
	$Country = $row["Country"];
	
	if($Country == $CountryName)
		{
			$First_Name =  $row["FirstName_R"];
			$Last_Name = $row["LastName_R"];
		}
		else
		{
			$First_Name =  $row["FirstName_EN"];
			$Last_Name = $row["LastName_EN"];
		}

	$T = "Testimonial_".$CountryName;		
	if ($row[$T] == "")
	{
	$T = "Testimonial_English";		
	}	
	$Testimonial1 = $row[$T]; 
	
	
	$Testimonial = str_replace('""',"'",$Testimonial1);
	
	if ($row["Organization_Name"]=="Confidential")
	{
	$OrgName = "";
	}
	else{
		$OrgName = $row["Organization_Name"];
	}
	
		if ($row["Designation"]=="Anonymous")
	{
	$Desig = "";
	}
	else{
		$Desig = $row["Designation"];
	}
	


	if ($row["Image_Path"]!="")
	{
		$ClientImg=$row["Image_Path"];	
	}
	else{
		$ClientImg = "client-defaultimage.png";
	}
		
	if($Mem_Id != $PrevMem_Id)
	{

	if ($i!=0)	
	{
		echo "<span class=\"divider\">&nbsp;</span>";
	}
	echo "<div class=\"testimonialblock\"><div class=\"clientname1\">".$First_Name." ".$Last_Name.", ".$Country."</div><div class=\"image\"><img src=\"images/testimonials/".$ClientImg."\" width=\"116\" height=\"116\" alt=\"English 		Editing of Scientific Manuscripts\"/></div><div class=\"text\">".$Testimonial."<div class=\"clientname\">".$OrgName."<br />".$Desig."</div></div></div>";
	
	}

	if (($Revised_Paper_Title != "")&&($CanPublishAP == "Yes"))
	{

		echo "<div style=\"clear:all\"></div>";
		
		if($Mem_Id != $PrevMem_Id) //sanjay
		{
			echo "<h2 class=\"h2-hd\">Yayınlanan Yazılar dieses Autors</h2>";
			
		}
		
		echo "<table class=\"papertable\"><tr><td width=\"12%\">".$Publisher_Name."</td><td width=\"33%\">".$Journal_Details."</td><td width=\"50%\"><a href=".$Article_Link." target=\"_blank\">".$Revised_Paper_Title."</a></td><td  		width=\"5%\" class=\"sized1\">".$Impact_Factor."</td></tr></table>";				

	}
		
		//

	$count++;
	$i++;
	$PrevMem_Id = $Mem_Id;

	}
	


/*$currPage = (($s/$limit) + 1);
echo "<BR><div id=\"tnt_pagination\">";
if ($s>=1) 
{
	$prevs=($s-$limit);
	print "<a href='$PHP_SELF?s=$prevs'>Vorherige Seite</a>";
	
}
$pages=intval($numrows/$limit);
if ($numrows%$limit)
{
	$pages++;
}
if (!((($s+$limit)/$limit)==$pages) && $pages!=1)
{
	$news=$s+$limit;
	echo "<a href='$PHP_SELF?s=$news'>Nächste Seite</a>";

}
$a = $s + ($limit) ;
if ($a > $numrows) { $a = $numrows ; }
$b = $s + 1 ;
//echo "<P>Showing results $b to $a of $numrows</P>";
echo "</div>";
*/

// End of code added by Sanjay

?> 
  
  
</div>

</div>
<!--right-container ends-->


<div class="cleaner"></div>
</div>

<!-- footer code start here -->

<?php include("inc_footer.htm"); ?> 

</body>
</html>
