<?php
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$answer = $_POST['answer'];
$trackcode = $_POST['trackcode'];

$answer2 = $num1 + $num2;

if($trackcode == "crimson" && $answer == $answer2){
// end function validate_email
$originallname=$lname;
$originalfname=$fname;
$specialcode=strtoupper($specialcode);
include "common.php";
include "uploadconfig.php";
putenv('TZ=Asia/Calcutta');
$date=date('d F Y'); //Output: Wednesday, 07 September 2005 02:22 AM
$nowDay=date("m/d/Y");
$nowHour = getdate(mktime(date("H")));
$nowMin = date("i");
$nowSec = date("s");
$nowClock = $nowHour["hours"].":".$nowMin.":".$nowSec;
$ip=@$REMOTE_ADDR; 
//****************************************************************************

function getBrowser()
{
    $u_agent = $_SERVER['HTTP_USER_AGENT'];
    $bname = 'Unknown';
    $platform = 'Unknown';
    $version= "";

    //First get the platform?
    if (preg_match('/linux/i', $u_agent)) {
        $platform = 'linux';
    }
    elseif (preg_match('/macintosh|mac os x/i', $u_agent)) {
        $platform = 'mac';
    }
    elseif (preg_match('/windows|win32/i', $u_agent)) {
        $platform = 'windows';
    }
   
    // Next get the name of the useragent yes seperately and for good reason
    if(preg_match('/MSIE/i',$u_agent) && !preg_match('/Opera/i',$u_agent))
    {
        $bname = 'Internet Explorer';
        $ub = "MSIE";
    }
	elseif(preg_match('/Trident\/7.0; rv:11.0/',$u_agent))
    {
        $bname = 'Internet Explorer';
    }
	
    elseif(preg_match('/Firefox/i',$u_agent))
    {
        $bname = 'Mozilla Firefox';
        $ub = "Firefox";
    }
    elseif(preg_match('/Chrome/i',$u_agent))
    {
        $bname = 'Google Chrome';
        $ub = "Chrome";
    }
    elseif(preg_match('/Safari/i',$u_agent))
    {
        $bname = 'Apple Safari';
        $ub = "Safari";
    }
    elseif(preg_match('/Opera/i',$u_agent))
    {
        $bname = 'Opera';
        $ub = "Opera";
    }
    elseif(preg_match('/Netscape/i',$u_agent))
    {
        $bname = 'Netscape';
        $ub = "Netscape";
    }
   
    // finally get the correct version number
    $known = array('Version', $ub, 'other');
    $pattern = '#(?<browser>' . join('|', $known) .
    ')[/ ]+(?<version>[0-9.|a-zA-Z.]*)#';
    if (!preg_match_all($pattern, $u_agent, $matches)) {
        // we have no matching number just continue
    }
   
    // see how many we have
    $i = count($matches['browser']);
    if ($i != 1) {
        //we will have two since we are not using 'other' argument yet
        //see if version is before or after the name
        if (strripos($u_agent,"Version") < strripos($u_agent,$ub)){
            $version= $matches['version'][0];
        }
        else {
            $version= $matches['version'][1];
        }
    }
    else {
        $version= $matches['version'][0];
    }
   
    // check if we have a number
    if ($version==null || $version=="") {$version="11";}
   
    return array(
        'userAgent' => $u_agent,
        'name'      => $bname,
        'version'   => $version,
        'platform'  => $platform,
        'pattern'    => $pattern
    );
}

// now try it
$ua=getBrowser();

$browser = $ua['name'];
$version = $ua['version'];
$platform = $ua['userAgent'];

//****************************************************************************
//alerts

if($clienttype == "New Client")
{

	if($format!="No, do not format" && $journalurl=="")
		{$alert1="\n1. No Journal URL. ASK CLIENT URL.";}
		
	if($format!="No, do not format")
		{ 
		if($inputfile=="PDF" || $inputfile=="TeX")
			{
				$alert2="\n2. No formatting possible for TeX or PDF. UNCHECK FORMATTING IN SHEET";
			}
		if($priority=="Super Express" || $priority=="Last Minute")
				{
		$alert3="\n3. No formatting for Super Express and Last Minute.  UNCHECK FORMATTING IN SHEET";
				}	
		}
	if($numreferencefiles>0 || $numeditingfiles>1)
		{ 
			$alert4="\n4. Check the number of editing and reference files"; 
		}
	
				
	//NEW CLIENT FEATURES
	if($email2=="")
		{ 
			$alert7="\n7. Only one email address-Be careful"; 
		}
		
	if($country!="UAE")
		{ 
			$alert8="\n8. Check Country and address client accordingly."; 
		}
	if($service =="Advance Editing")
		{ 
			$alert14="\n14. A new client has chosen Advance Editing, enter ٪10 new client discount."; 
		}
	
	if($mrc!="" && $priority=="Economy")
		{ 
			$alert10="\n10. Client has chosed ECONOMY and wants MRC. This is not possible."; 
		}
	
	if($service=="Advance Editing" && $outputfile!="MS Word")
		{ 
			$alert11="\n11. Output format for ADVANCE editing should be MSWORD."; 
		}
	if($specialcode == "RE-EDIT" || $specialcode == "re-edit")
		{ 
			$alert12="\n12. Re-edting assignment, enter the ٪30 re-editing discount."; 
		}
	
	if($inputfile=="TeX" && $outputfile=="TeX")
		{
		$alert13="\n13. TeX to TeX editing, enter the ٪30 TeX premium."; 
		}
	if($inputfile=="PPT/XLS")
		{
		$alert15="\n15. PPT. Excel file for editing, enter premuim accordingly."; 
		}
	

	if($specialcode == "FTS0607")
		{
		$alert17="\n17. 1. Client has chosen formatting service only.\n
	2. Intimate the client that his document will be formatted only and no English language check  will be done."; 
		}
	if($deadlinestrict == "NO STRICT DEADLINE")
		{
		$alert19="\n19. Take extra days to calculate TAT."; 
		}
	if($R1 == "Others" && $txtRef == "")
		{
		$alert27="\n27. Please ask the name of the reference person from the client."; 
		}
	if($membershipid=="HISKI")
		{ 
			$alert30="\n30. Please inform EC to format document for linguistic style related changes only irrespectve of output file format."; 
		}
	
	//ALERT BOX
	if ($alert1=="" && $alert2=="" && $alert3=="" && $alert4=="" && $alert5=="" && $alert6=="" && $alert9=="" && $alert10=="" && $alert11==""  && $alert12==""  && $alert13==""  && $alert14==""  && $alert15==""  && $alert16==""  && $alert17==""  && $alert18==""  && $alert19==""  && $alert20=="" && $alert27=="" && $alert30=="")
	{ $finalalert="";}
	else
	{
	 $finalalert="ALERTS//////////////////////////
	$alert1 $alert2 $alert3 $alert4 $alert5 $alert6 $alert9 $alert10 $alert11  $alert12 $alert13 $alert14 $alert15 $alert16 $alert17 $alert18 $alert19 $alert20 $alert27 $alert30
	//////////////////////////////////////////////////// ";
	}
	
}
if($clienttype == "Exiting Client"){
	
	if($format!="No, do not format" && $journalurl=="")
	{$alert1="\n1. No Journal URL. ASK CLIENT URL.";}

if($format!="No, do not format")
	{ 
		if($inputfile=="PDF" || $inputfile=="TeX") 
			{
				$alert2="\n2. No formatting possible for TeX or PDF. UNCHECK FORMATTING IN SHEET";
			}
		if($priority=="Super Express" || $priority=="Last Minute") 
			{
				$alert3="\n3. No formatting for Super Express and Last Minute.  UNCHECK FORMATTING IN SHEET";
			}	
			
	}

if($numreferencefiles>0 || $numeditingfiles>1)
	{ 
		$alert4="\n4. Check the number of editing and reference files"; 
	}

if($membershipid=="RYOIN")
	{ 
		$alert7="\n7. Please calculate the word count of this client carefully.\n Do not include page number in header and footer."; 
	}
if($membershipid=="SEKMI")
	{
		$alert8="\n8. Inform EC to send both the file with track changes as well without the track changes."; 
	}
if($membershipid=="HISKI")
	{ 
		$alert30="\n30. Please inform EC to format document for linguistic style related changes only irrespectve of output file format."; 
	}
if($membershipid=="MASKU")
	{ 
		$alert31="\n31. Please password protect the final files for delivery. Kindly consult EC for password."; 
	}
	
//MRC alert
if($mrc!="" && $priority=="Economy")
	{ 
		$alert10="\n10. Client has chosed ECONOMY and wants MRC. This is not possible."; 
	}

if($service=="Advance Editing" && $outputfile!="MS Word")
	{ 
		$alert11="\n11. Output format for ADVANCE editing should be MSWORD."; 
	}
if($specialcode == "RE-EDIT" || $specialcode == "re-edit")
	{ 
		$alert12="\n12. Re-edting assignment, enter the ٪30 re-editing discount."; 
	}

if($inputfile=="TeX" && $outputfile=="TeX")
	{
	$alert13="\n13. TeX to TeX editing, enter the ٪30 TeX premium."; 
	}
if($inputfile=="PPT/XLS")
	{
	$alert15="\n15. PPT. Excel file for editing, enter premuim accordingly."; 
	}

if($specialcode == "FTS0607")
	{
	$alert17="\n17. 1. Client has chosen formatting service only.\n
2. Intimate the client that his document will be formatted only and no English language check  will be done."; 
	}
if($deadlinestrict == "NO STRICT DEADLINE")
	{
	$alert19="\n19. Take extra days to calculate TAT."; 
	}
if($specialcode == "Pharma" && $membershipid == "TNRDS")
	{
	$alert24="\n24. Please check the special code is as 'Pharma'. \n Provide Instructions to editors accordingly."; 
	}
if($membershipid == "TAKAS")
	{
	$alert25="\n25. Please inform the client that payment documents were sent in advance for an amount of 142,995 Yen. In case the fee for his assignment is less or more, inform the client and CC: payments@enago.com  about the new fee."; 
	}
if($membershipid == "HIRIS")
	{
	$alert26="\n26. Please enter special discount of ٪5 in additon to regular discounts for this client."; 
	}
if($membershipid=="JSPFR")
	{ 
		$alert27="\n27.  Please do not edit figures and references. The guidelines for editor is saved in the following location: //Crimson-2/assignments/EnagoAssignments/Pending/GUIDELINES. Please refer to all the instructions carefully.";
	}
	
	
//ALERT BOX
if ($alert1=="" && $alert2=="" && $alert3=="" && $alert4=="" && $alert5=="" && $alert6=="" && $alert7=="" && $alert8=="" && $alert9=="" && $alert10=="" && $alert11==""  && $alert12==""  && $alert13==""  && $alert15==""  && $alert16==""  && $alert17==""  && $alert18==""  && $alert19==""  && $alert20=="" && $alert24=="" && $alert25=="" && $alert26=="" && $alert27=="" && $alert30=="" && $alert30=="")
{ $finalalert="";}
else
{
 $finalalert="ALERTS//////////////////////////
$alert1 $alert2 $alert3 $alert4 $alert5 $alert6 $alert7 $alert8 $alert9 $alert10 $alert11  $alert12 $alert13 $alert15 $alert16 $alert17 $alert18 $alert19 $alert20 $alert24 $alert25 $alert26 $alert27 $alert30 $alert31
//////////////////////////////////////////////////// ";
}
	
}

///ALERT END

$firstchar = substr($subsubject, 0, 3);

//
if($firstchar == "Med")
{
	$mainsubject = "Medical/Clinical Sciences";
}
if($firstchar == "Lif")
{
	$mainsubject = "Life Sciences";
}
if($firstchar == "Phy")
{
	$mainsubject = "Physical Sciences and Engineering";
}
if($firstchar == "Eco")
{
	$mainsubject = "Economics and Business";
}
if($firstchar == "Art")
{
	$mainsubject = "The Arts, Humanities, and Social Sciences";
}
//


$subsubject_a = substr($subsubject, 4);


$specialization_a = $specialization;

if($specialization == "Other")
{
	$specialization_a = $otherspecialization;
}

if ($superdat_name == "")
{
$autoresponse="نأسف ولكن الملف الخاص بك لا يمكن رفعه نظرا لبعض الأخطاء. يُرجى إرسال الملفات عبر البريد الإلكتروني إلى request-arabic@enago.com";
$crimsonemailtext="Client did not upload the file";
$thankyoupagetext="<br />
نأسف ولكن الملف الخاص بك لا يمكن رفعه نظرا لبعض الأخطاء. يُرجى إرسال الملفات عبر البريد الإلكتروني إلى <a href=\"mailto:request-arabic@enago.com\" class=\"text-link\">request-arabic@enago.com</a>";
}

else if (($size_limit == "yes") && ($limit_size < $superdat_size))
{
$superdat_name=$fname."_".$lname."_".$date."_".$nowClock."_".$superdat_name;
$autoresponse="نأسف ولكن الملف الخاص بك لا يمكن رفعه وذلك لأن الملف أكبر من 8 ميجابايت. يُرجى إرسال الملفات عبر البريد الإلكتروني إلى request-arabic@enago.com";
$crimsonemailtext="FILE SIZE MORE THAN 8 MB, so cannot upload through website";
$thankyoupagetext="<br />
نأسف ولكن الملف الخاص بك لا يمكن رفعه وذلك لأن الملف أكبر من 8 ميجابايت. يُرجى إرسال الملفات عبر البريد الإلكتروني إلى <a href=\"mailto:request-arabic@enago.com\" class=\"text-link\">request-arabic@enago.com</a>";
}
else
{
if (file_exists("$absolute_path/$superdat_name"))
	{
	$superdat_name=$fname."_".$lname."_".$date."_".$nowClock."_".$superdat_name;
	}
	else {$superdat_name=$fname."_".$lname."_".$date."_".$nowClock."_".$superdat_name;}
@copy($superdat, "$absolute_path/$superdat_name");
$autoresponse="الملف الذي تم تحميله بنجاح";
$crimsonemailtext="FILE UPLOADED";
$thankyoupagetext="الملف الذي تم تحميله بنجاح";
};

$to = $tod;
if ($typeofdoc == "Abstract")
	{
$subjecttypeofdoc="{ABS}";
	}
if ($specialcode == "FTS0607")
	{
	$serviceprimary=$service;
	$service="FORMATTING SERVICE";
	}
	elseif ($specialcode == "POSTER")
	{
	$serviceprimary=$service;
	$service="POSTER SERVICE";
	}
	elseif ($specialcode == "RE-EDIT" || $specialcode == "re-edit")
	{
	$re="RE-EDITING ";
	}

if($specialcode=="ULATUS" && $service=="Advance Editing")
	{
	$re= "٪5 DISCOUNT";
	}

if($inputfile=="TeX" && $outputfile=="TeX")
{
$formatser="|TeX Editing";
}

//

if($typeofdoc == "Others")
{
	$typeofdoc = $other_typeofdoc;
}

//

if($specialcode=="8257")
	{
	$re= "٪5 DISCOUNT";
	}
	
if($specialcode=="MASTER")
	{
	$re= "٪10 Discount Master Thesis";
	}
if($specialcode=="WRCONLY")
	{
	$re= "[WORD COUNT REDUCTION]";
	}
	
//
if($specialcode!=""){
	$spcode = "Channel Partner Client. Please check Special Code - ".$specialcode;
}
else{
	$spcode = "";
}
//
if($isrequest == "Yes")
{
	$specialcode = "RE-EDIT";
	$re = "[RE-EDITING]";
}

//
if($clienttype == "New Client")
{
$msgrequest = "New Client Request Form

** $spcode **

$finalalert

REQUEST CAME IN AT INDIA TIME:$nowClock

PERSONAL DETAILS:
*****************************
Name: $fname $lname
Organization:  $organisation
Department: $department
Designation: $designation
Email:  $email 
Email2:  $email2 
Country: $country 
Zip Code: $zipcode 
City: $city 
Address:  $mailingaddress1 
Phone: $phone  $extno
Fax: $fax
Website: $website
Reference: $R1 (Details: $txtRef)
*****************************

SERVICE: $service $serviceprimary
Coverletter: $coverletter
MRC: $mrc

LANGUAGE DETAILS:
*****************************
Subject area: $mainsubject 
Subsubject: $subsubject_a
Specialization: $specialization
Other Specialization: $otherspecialization
Language: $language
Use of document: $useofdoc
Type of document: $typeofdoc
Journal name: $journalname
Format: $format
INPUT FILE: $inputfile
OUTPUT FILE: $outputfile
*****************************

TAT:
*****************************
Priority: $priority
Delivery Date: $delDay  $delMonth  $delYear 
Delivery Time:  $delHrs : $delMin ARABIC time
Deadline strictness: $deadlinestrict
Details: $deadlinedetails
*****************************

PAYMENT: 
*****************************
Invoice type: $invoicetype
Invoice date: $invoicedate
Payer Name: $payername
Other Info: $otherinfo
*****************************

*****************************
Specialcode: $specialcode
File uploaded: $crimsonemailtext $superdat_name
Files for editing: $numeditingfiles
Files for reerence: $numreferencefiles
Comments: $sInstructions

$tandc

*****************************
IP: $ip
Browser:$browser

$date|$fname|$lname|$kanjinamegiven|$kanjinamefamily|$organisation|$organisation|$email|$email2|$country|$state|$city|$mailingaddress1|$zipcode|$phone|$fax,$cellno,$cellemailid|$website||$txtRef||$R1|$ePayment|$department|$designation|ARABIC

$service|$priority|$lname|$date|$nowClock||||$lastlinemif|||$oldeditor($asneditor)|$deadlinestrict|$shouldwestart|$formatsub||$coverletter|$mrc||$mainsubject|$subsubject_a|$useofdoc|$journalname|$typeofdoc|$format|$journalurl|$language|$oldeditor|$inputfile|$outputfile|$numeditingfiles|$numreferencefiles|$superdat_name|$file_size|$specialcode|NON-SECURE|$ip|$browser|NEW|$specialization_a||$email;$email2|$ePublicEx|$publicExText|$payer|||";

	$msgvcs = "
PLEASE REPLY TO: $replyvcs

REQUEST CAME IN AT INDIA TIME:$nowClock

PERSONAL DETAILS:(TRANSLATE IF ANYTHING BELOW IS IN ARABIC)
*****************************
Name: $fname $lname
Reference: $txtRef
*****************************

MANUSCRIPT DETAILS:
*****************************
Other Specialization: $otherspecialization
Journal name: $journalname
*****************************

TAT:
*****************************
Details: $deadlinedetails
*****************************

*****************************
Comments: $sInstructions

*****************************";

	$subjectline = "[$nowClock][ARABIC] $subjecttypeofdoc $re | $service $formatser $addition | $fname $lname | $shouldwestart | $priority | $delDay $delMonth $deadlinestrict";
	
}
else
{
$msgrequest = "Existing Client Request Form

** $spcode **

$finalalert

REQUEST CAME IN AT INDIA TIME:$nowClock

PERSONAL DETAILS:
*****************************
Membership ID: $membershipid
Name: $fname $lname
Organization:  $organisation
Email:  $email
Email2:  $email2 
*****************************

SERVICE: $service  $serviceprimary
Coverletter: $coverletter
MRC: $mrc

LANGUAGE DETAILS:
*****************************
Subject area: $mainsubject 
Subsubject: $subsubject_a
Specialization: $specialization
Other Specialization: $otherspecialization
Language: $language
Use of document: $useofdoc
Type of document: $typeofdoc
Journal name: $journalname
Format: $format
INPUT FILE: $inputfile
OUTPUT FILE: $outputfile
*****************************

TAT:
*****************************
SHOULD WE START EDITING: $shouldwestart
Priority: $priority
Delivery Date: $delDay  $delMonth  $delYear 
Delivery Time:  $delHrs : $delMin ARABIC time
Deadline strictness: $deadlinestrict
Details: $deadlinedetails
*****************************

PAYMENT: 
*****************************
Invoice type: $invoicetype
Invoice date: $invoicedate
Payer Name: $payername
Other Info: $otherinfo
*****************************

*****************************
Specialcode: $specialcode 
File uploaded: $crimsonemailtext $superdat_name
Files for editing: $numeditingfiles
Files for reerence: $numreferencefiles
Comments: $sInstructions

$tandc

*****************************
IP: $ip
Browser:$browser

$service|$priority|$lname|$date|$nowClock||||$lastlinemif|||$oldeditor($asneditor)|$deadlinestrict|$shouldwestart|$formatsub||$coverletter|$mrc||$mainsubject|$subsubject_a|$useofdoc|$journalname|$typeofdoc|$format|$journalurl|$language|$oldeditor|$inputfile|$outputfile|$numeditingfiles|$numreferencefiles|$superdat_name|$file_size|$specialcode|NON-SECURE|$ip|$browser|EXISTING|$specialization_a||$email;$email2|$ePublicEx|$publicExText|$payer|$membershipid||";

	$msgvcs = "
PLEASE REPLY TO: $replyvcs

REQUEST CAME IN AT INDIA TIME:$nowClock

PERSONAL DETAILS:(TRANSLATE IF ANYTHING BELOW IS IN ARABIC)
*****************************
Membership ID: $membershipid
Name: $title $profession $fname $lname
*****************************

MANUSCRIPT DETAILS:
*****************************
Other Specialization: $otherspecialization
Journal name: $journalname
*****************************


TAT:
*****************************
Details: $deadlinedetails
*****************************

*****************************
Comments: $sInstructions
*****************************";

	$subjectline = "[$nowClock][ARABIC] $subjecttypeofdoc $re | $service $formatser $addition | $membershipid | $shouldwestart | $priority | $delDay $delMonth $deadlinestrict";

}

//
$file_size=$superdat_size/1024;
$lname=ucwords(strtolower($lname));
$fname=ucwords(strtolower($fname));
$tandc="$agreeterms, I have agreed the terms & conditions. ";


$message = $msgrequest;

$myemail = strpbrk($email, '@');
$fname=ucwords(strtolower($fname));
$lname=ucwords(strtolower($lname));
if($fname =="Crimson" || $lname =="Crimson" || $fname =="Test" || $lname =="Test" || $myemail == "@crimsoni.com" || $myemail == "@enago.com" || $myemail == "@ulatus.com" || $myemail == "@voxtab.com")
	{ 
		$to = $testmail.", ".$email; 
		$tovcs = $testmail.", ".$email; 
		$subalert="[FORM TESTING]";
		$testalert="FORM TESTING >>>>>>> FORM TESTING >>>>>>> FORM TESTING >>>>>>> FORM TESTING >>>>>>> FORM TESTING >>>>>>> FORM TESTING";
	}

mail("$to", "$subjectline".$subalert, $testalert.$message,
              "From: Uploads-ENAGO<$fromAdd>\r\n" .
				"Content-type: text/plain; charset=utf-8");

//

$messagevcs = $msgvcs;


mail("$tovcs", "$subjectline".$subalert, $testalert.$messagevcs,  
              "From: Uploads-ENAGO<$fromAdd>\r\n" .
				"Content-type: text/plain; charset=utf-8");

//AUTORESPONSE

$sub="[خدمات التحرير باللغة الإنجليزية] نشكرك على استفسارك (الرد التلقائي) ";
$message1 = "عزيزي السيد $originallname،

$autoresponse

نشكرك على تقديم طلبك.

============================================================
تفضلوا بقبول وافر التحية،
خدمة العملاء
Enago لخدمات التحرير باللغة الإنجليزية
Crimson Interactive Pvt Ltd";

mail("$email", "$sub", $message1,    
                "From: CRIMSON (DO_NOT_REPLY-ENAGO)<$clientfromAdd>\r\n" . 
				"Content-type: text/plain; charset=utf-8");
?> 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="rtl" lang="ar">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>خدمات التحرير باللغة الإنجليزية والتحرير العلمي باللغة الإنجليزية وخدمة التدقيق اللغوي باللغة الإنجليزية</title>
<meta name="description" content=": تقدم Enago خدمات التحرير الأكاديمي باللغة الإنجليزية بأسعار معقولة. خبرة في تحرير أكثر من 140،000 كلمة. محررون بالإنجليزية فقط من أبناء اللغة من الولايات المتحدة والمملكة المتحدة. يحمل المحررون مؤهلات الماجستير والدكتوراه. "/>
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
<script type="text/javascript" src="js/validation.js"></script>
<script type="text/javascript" src="js/subjectarea.js"></script>
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
<div id="breadcrumb"><span><a class="prev" href="index.htm">الصفحة الرئيسية</a>&nbsp;&nbsp;&gt;&gt;&nbsp;&nbsp;<a href="23.htm">نشكرك على تقديم طلبك!</a></span></div></div>

<!--breadcrum ends-->

<!--left-container start-->

<div id="bodyContainer">

<!--right-container starts-->
<div id="right-x" class="quote-width">
<h1>نشكرك على تقديم طلبك!</h1>
<div class="content">
<p>نشكرك على استفسارك.</p>
<p>سوف يتصل موظفو خدمة العملاء لدينا بك في غضون ساعة عمل لإبلاغك بالتسعير <a href="23.htm" class="text-link">الدقيق</a> .</p>  

<p><?php echo $thankyoupagetext ?></p>


<p>هل تبحث عن مساعدة أخرى لنشر المخطوطة الخاصة بك؟
تقدم Enago خدمات الدعم التالية للباحثين لنشر أوراقهم الأكاديمية. من أجل الاستفادة من أي خدمة من هذه الخدمات، يُرجى طلب نموذج التسعير أو مراسلتنا على البريد الإلكتروني عبر <a href="mailto:request-arabic@enago.com" class="text-link">request-arabic@enago.com</a></p>
<ul class="ulbasic1">
<li>خدمة اختيار المجلات العلمية</li>
<li>خدمة تحرير الأوراق البحثية المنقحة / المرفوضة</li>
<li>التحقق من إرشادات النشر للمؤلف للمجلة العلمية الخاصة بك</li>
<li>كتابة الرسائل المفسرة للتقدم بالطلبات إلى المجلات العلمية</li>
<li>تحرير المواد الفنية داخل المخطوطات</li>
<li>خدمة مراجعة الأقران قبل تقديم المخطوطات</li>
<li>خدمة تقديم المخطوطات</li>
</ul>

<p>من أجل الاستفادة من أي خدمة من هذه الخدمات، يُرجى طلب نموذج التسعير أو مراسلتنا على البريد الإلكتروني عبر <a href="mailto:request-arabic@enago.com" class="text-link">request-arabic@enago.com</a> سيعود موظفو خدمة العملاء إليك لموافاتك بالمبلغ الإجمالي.</p>

<p><strong>عرض خاص!</strong><br />
إذا كنت تستخدم أي خدمة من هذه الخدمات بالإضافة إلى خدمة التحرير باللغة الإنجليزية، يمكنك الحصول على<br />
خصم إضافي ٪5 على تسعير خدمة التحرير باللغة الإنجليزية. ويُرجى طلب الخصم عن طريق إرسال بريد <br />
إلكتروني إلينا على عنوان البريد الإلكتروني المذكور أعلاه. </p>

<p><strong>عرض للعملاء الجدد!</strong><br />
إذا كنت تستخدم خدماتنا لأول مرة، فأنت تستحق الحصول على خصم ٪10 على الأسعار المذكورة في صفحتنا <br />
<a href="106.htm" class="text-link">تسعير خدمات التحرير.</a></p>

</div>

</div>
<div class="cleaner"></div>
</div>


<!--right-container ends-->


<div class="cleaner"></div>


<!-- footer code start here -->

<?php include("inc_footer_thanku.htm"); ?> 
<!-- Google Code for EnagoArabic Conversion Page -->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 980682862;
var google_conversion_language = "en";
var google_conversion_format = "2";
var google_conversion_color = "ffffff";
var google_conversion_label = "3yA3CLKD7QkQ7pDQ0wM";
var google_remarketing_only = false;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/980682862/?label=3yA3CLKD7QkQ7pDQ0wM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>
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