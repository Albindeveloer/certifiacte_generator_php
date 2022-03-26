<?php 
if(!isset($_SESSION)) 
{ 
    session_start(); 
} 

$st_id=$_SESSION['st_id'];
$stbatch_id=$_SESSION['stbatch_id'];
$stcourse_id=$_SESSION['stcourse_id'];
include ('forms/connection.php');

$results = $conn->query("SELECT * FROM student where stud_id='$st_id'");
$results1 = $conn->query("SELECT * FROM course where course_id='$stcourse_id'");
$results2 = $conn->query("SELECT * FROM batch where batch_id='$stbatch_id'");

?>



  <?php while ($data = $results->fetch_assoc()) :?>
    <?php while ($data1 = $results1->fetch_assoc()) :?>
        <?php while ($data2 = $results2->fetch_assoc()) :?>



<html><head><script type="text/javascript"
src="../../libcommon/javascripts/jquery/jquery-1.7.1.min.js"></script>
<script type="text/javascript"
src="../../libcommon/plugins/jsrender.min.js"></script>
<script type="text/x-jsrender" id="studentTcPrintTemplate" data-jsvtmpl="jsvTmpl">
<div class='sub-page'>
<table cellspacing='0' cellpadding='0' class='
table-bordered padding-print' width='100%' style='color:black;'>
<tr>
<td style="width: 40%;">
<img style='width: 130px;'
src='{{:collegeLogoUrl}}'>
</td>
<td style="padding-left: 10px;vertical-align:
top;">
<p style="text-align: right;font-size:
16px;font-weight: bold;line-height: 1.1;margin-bottom: 5px;">
 {{:collegeName}}({{:collegeCode}})
 </p>
 <p style="text-align: right;font-size: 11px;fontweight: bold;margin: 0;" >{{:collegeAffliations}}</p>
 <p style="text-align: right;font-size: 11px;fontweight: bold;margin: 0;" >{{:collegeAddress1}} {{:collegeAddress2}}
</p>
 <p style="text-align: right;font-size: 11px;fontweight: bold;margin: 0;"> {{:collegeContact1}} {{:collegeContact2}}
</p>
 </td>
 </tr>
 <tr>
 <td colspan='2' align='center'>
<div align='center'><h2 style="font-size:
22px;margin-top:10px;line-height: 1;margin-bottom: 0px;">TRANSFER
CERTIFICATE</h2></div>
 <div align='center'><h2 style="font-size: 15px;margin-top:
11px;line-height: 0;">T.C No : {{:tcNo}} Admn No : {{:admissionNo}}
</h2></div>
<hr>
 </td>
 </tr>
 </table>
 <table cellspacing='0' cellpadding='0' class=' table-bordered
padding-print' width='100%' style='color:black;'>
 </table>
 <table cellspacing='0' cellpadding='0' class='table tablebordered padding-print' width='100%' style='color:black;'>
 <tr>
 <td style="width: 4%;">1.</td><td
style="width: 35%;" class='font'> Name of Student </td>
 <td>: </td><?php echo $data['stud_id']; ?> <td><b></b></td>
 </tr>
 <tr>
 <td >2.</td><td class='font'>Date of
Birth</td>
 <td>: </td> <td>{{:dob}}</td>
 </tr>
 <tr>
 <td >3.</td><td class='font'>Date of
Admission</td>
 <td>: </td> <td>{{:studentJoindate}}
<b>Class</b> : {{:classOfAdmission}} {{:admittedSemName}}</td>
 </tr>
 <tr>
 <td >4.</td><td class='font'>Date of
Leaving</td>
 <td>: </td> <td>{{:issueDate}} <b>Class</b> :
{{:classOfLeaving}} {{:lastSemName}}</td>
 </tr>
 <tr>
 <td >5.</td><td class='font'>Subject or
portions thereof studied</td>
 <td>: </td> <td>{{:subjectStudied}}</td>
 </tr>
 <tr>
 <td >6.</td><td class='font'> Reason for
leaving</td>
 <td>: </td> <td>{{:reasonForLeave}}</td>
 </tr>
 <tr>
 <td >7.</td><td class='font'>a) University
examination for which the student has been last presented from the
college</td>
 <td></td> <td>{{:lastExamName}}</td>
 </tr>
 <tr>
 <td ></td><td class='font'></td>
 <td></td> <td>Year : {{:monthOfExamination}}
{{:yearOfExamination}}</td>
 </tr>
 <tr>
 <td ></td><td class='font'></td>
 <td></td> <td>Reg No : {{:regNo}}</td>
 </tr>
 <tr>
 <td >b)</td><td class='font'>Whether the
student has appeared for the examination</td>
 <td>: </td> <td>{{:hasAppearedForExam}}</td>
 </tr>
 <tr>
 <td >8.</td><td class='font'>Whether the
student has cleared all the dues to the college</td>
 <td>: </td> <td>{{:feesPaid}}</td>
 </tr>
 <tr>
 <td >9.</td><td class='font'>Remarks</td>
 <td>: </td> <td>{{:remarks}}</td>
 </tr>
 </table>
 <table cellspacing='0' cellpadding='0' class=' table-bordered
padding-print' width='100%' style='color:black;margin-top:7%;'>
 <tr>
 <td style="font-size: 13px;">Date: {{:today}}</td>
 <td style="font-size: 13px;font-weight: bold;text-align:
right;">Principal</td></tr>
 </table>
</div>
</script>
 <script type="text/javascript">
 function CallPrint(strid)
 {
 var prtContent = document.getElementById(strid);
 var WinPrint =

window.open('','','letf=0,top=0,toolbar=0,scrollbars=0,status=0,width=
2500,height=1500');
 WinPrint.document.write(prtContent.innerHTML);
 console.log(prtContent.innerHTML);
 WinPrint.document.close();
 setTimeout(function()
 {
 WinPrint.focus();
 WinPrint.print();
 }, 2000);
 }
 function showHideDuplicate(obj)
 {
 if($(obj).is(':checked'))
 {
 $('.show-dup').removeClass('hidden');
 }
 else
 {
 $('.show-dup').addClass('hidden');
 }
 }
 </script>
</head><body><div class="row" style="text-align:right;width:
21cm;margin: 1cm auto;">
<input type="button" class="btn btn-primary btn-sm" value="Print Form"
onclick="javascript:CallPrint('printForm');">
</div>
<div id="printForm">
<style>
body {
 margin: 0;
 padding: 0;
 background-color: #FAFAFA;
 font: 12pt "Tahoma";
 }
 * {
 box-sizing: border-box;
 -moz-box-sizing: border-box;
 }
 .page-hr {
 height: 21cm;
 width: 29.6cm;
 padding: 1cm;
 margin: 1cm auto;
 border: 1px #D3D3D3 solid;
 border-radius: 5px;
 background: white;
 box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
 }
.page {
 width: 21cm;
 height: 29.6cm;
 padding: 1.5cm;
 margin: 1cm auto;
 border: 1px #D3D3D3 solid;
 border-radius: 5px;
 background: white;
 box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
 }
.page-p-1cm {
 width: 21cm;
 height: 29.6cm;
 padding: 1cm;
 margin: 1cm auto;
 border: 1px #D3D3D3 solid;
 border-radius: 5px;
 background: white;
 box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
display:flex;
 }
.green-legal{
height: 21.5cm;
 width: 34.5cm;
 padding: 1cm;
 margin: 1cm auto;
 border: 1px #D3D3D3 solid;
 border-radius: 5px;
 background: white;
 box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
}
.green-legal .sub-page{
height: -webkit-fill-available;
}
.green-legal .sub-page table td{
vertical-align: sub !important;
}
 .table
 {
 color:black;
 }
 .hidden{
 display:none;
 }
 .table-padding tr td
 {
 padding-bottom:11px !important;
 }
.table tr td, .table tr th
{
padding: 9px;
line-height: 1;
}
 .table-bordered > thead > tr > th, .table-bordered > tbody >
tr > th
 {
 background: #dedede;
 }
 .logo-align
{
display: inline-block;
vertical-align: middle;
float: left;
}
.header-align {
display: inline-block;
vertical-align: middle;
}
 .subpage {
 padding: 1cm;
 border: 5px red solid;
 height: 256mm;
 outline: 2cm #FFEAEA solid;
 }
 .bottom-footer{
}
.water-mark{
opacity : 0.14;
z-index: 1010;
position: absolute;
text-align: center;
margin-left:auto;
margin-right:auto;
left:0;
right:0;
top:50%;
}
 .font
 {
 font-weight: bold;
 }
 .fontsize
 {
 font-size: 14px;
 }
 .fontFormat29 tr td,.fontFormat29 tr th,.fontFormat30 tr
td,.fontFormat30 tr th{
font: 8pt 'Verdana';
padding : 0px 4px;
line-height: 1cm;
}
.fontFormat31 tr td,.fontFormat31 tr td{
font : 15px 'Times New Roman';
}
.fontFormat32 tr td,.fontFormat32 tr td{
font : 13.5px 'Century';
line-height : 1.5;
}
.fontFormat33 tr td,.fontFormat33 tr td{
font : 11pt 'Times New Roman';
line-height : 1.5;
padding: 0px;
padding-top: 3px;
vertical-align: sub;
}
 @page {
 margin: 0;
 }
 @media print {
 .page,.green-legal,.page-hr,.page-p-1cm {
 margin: 0;
 border: initial;
 border-radius: initial;
 width: initial;
 height: initial;
 box-shadow: initial;
 background: white;
 page-break-after: always;
 }
.page-p-1cm{
display:flex;
}
 .table tr td, .table tr th
 {
 padding: 1px;
 line-height: 1;
 }
.printForm18 tr td, .printForm18 tr th{
line-height:.8rem !important;
padding:4px !important;
vertical-align: sub;
font-size:small;
}
.printForm19 tr td, .printForm19 tr th,
.printForm20 tr td, .printForm20 tr th{
vertical-align: sub;
}
.printForm20 tr td {
padding: 0px;
padding-top: 3px;
font-size:13px !important;
}
.fontFormat29 tr td,.fontFormat29 tr
th,.fontFormat30 tr td,.fontFormat30 tr th{
font: 8pt 'Verdana';
padding : 0px 4px;
line-height: 1cm;
}
.fontFormat31 tr td,.fontFormat31 tr td{
font : 15px 'Times New Roman';
padding : 10px;
vertical-align : text-top;
}
.fontFormat32 tr td,.fontFormat32 tr td{
font : 13.5px 'Century';
line-height : 1.5;
}
.fontFormat33 tr td,.fontFormat33 tr td{
font : 11pt 'Times New Roman';
line-height : 1.5;
padding: 0px;
padding-top: 3px;
vertical-align: sub;
}
.bottom-footer{
position: fixed;
bottom: 0px;
margin-left: -1.5cm;
}
.water-mark{
top:35%;
}
 }
 @media print
 {
 .padding-print tr td
 {
 padding: 5px;
 }
.content-data{
top:320 !important;
}
 }
 div,td,tr {
 font: 13px/17px 'Arial', 'Liberation Sans', 'Helvetica
Neue', 'sans-serif', 'Times New Roman';
 }
 .template-9 td{
 font: 14px/20px 'book antiqua';
 line-height:20px;
 padding:15px 10px;
 }

 .template-10 td{
 font: 14px/18px 'Arial', 'Liberation Sans', 'Helvetica
Neue', 'sans-serif', 'Times New Roman';
 line-height:20px;
 padding:12px;
 }
 @media print
 {
 .template-10 tr td{
 padding: 12px;
 }
 .template-10{
 margin: 0;
 }
 }
.printForm17 td
{
line-height:.9rem !important;
padding:4px !important;
vertical-align: sub;
}
.set-sub-page-border-landscape {
border: 1px solid black;
min-height: 18.8cm;
padding: 5px;
}
table.internal-table td
{
padding: 0px 3px 5px 0px;
vertical-align: top;
}
td.add-padding-to-left {
padding-left: 1cm;
}
.add-border-to-left {
padding-left: 1cm;
}
.border-left-solid1{
border-left: 1px solid black;
}
.border-left-dotted1{
border-left: 1px dotted black;
}
.printForm18 td
{
line-height:.8rem !important;
padding:4px !important;
vertical-align: sub;
font-size:small;
}
.printForm19 td
{
vertical-align: sub;
}
.printForm20 tr td {
padding: 0px;
padding-top: 10px;
vertical-align: sub;
font-size:12px !important;
}
.inner-table tr td{
padding:0px;
}
.m-t-10{
margin-top:10px;
}
.p-l-50{
padding-left:50px;
}
.studentTCPrintFormat20{
padding-left:50px;
}
.studentTCPrintFormat19{
padding-left:3cm;
}
.printForm22-border{
border:2px solid black;
}
.printForm22 td
{
line-height:21px !important;
font-size:15px;
padding: 5px !important;
}
.printForm21-head tr td,.printForm21 tr td{
font: 18px 'Times New Roman';
padding:10px;
font-size: 18px;
line-height:1.3;
}
.printForm21 tr td{
padding:15px 10px;
text-align: justify;
font-size: 19px;
}
.background-content{
backgroundimage:url('../../libcommon/images/college/NIMIT/logo.png');
background-position: center;
background-repeat: no-repeat;
background-size: 12cm;
height:500px;
opacity: .14;
}
.content-data{
position: absolute;
top: 400px;
width: 18cm;
}
.first-letter-caps{
text-transform: lowercase;
}
.first-letter-caps::first-letter {
text-transform: uppercase;
}
.printForm23 tr td{
padding:15px 10px;
}
</style>
<style>
p
{
margin-block-start: 0em;
}
</style>
<div class="page-hr">
<div class="sub-page studentTCPrintFormat16">
<table style="height: -webkit-fill-available;">
<tbody><tr>
<td id="page" style="border-right: 1px solid black;padding-right:
10px;vertical-align: top;">
<div class="sub-page">
<table cellspacing="0" cellpadding="0" class="
table-bordered padding-print" width="100%" style="color:black;">
<tbody><tr>
<td style="width: 40%;">
<img style="width: 130px;"
src="uploads/student/<?php echo $data['s_avatar'];?>">
</td>
<td style="padding-left: 10px;vertical-align:
top;">
<p style="text-align: right;font-size:
16px;font-weight: bold;line-height: 1.1;margin-bottom: 5px;">
 Naipunnya Institute of Management and Information
Technology(NIMIT)
 </p>
 <p style="text-align: right;font-size: 11px;fontweight: bold;margin: 0;">Affiliated to University of Calicut <br>
Accredited by NAAC with B++ grade <br> A Project of Archdiocese of
Ernakulam-Angamaly</p>
 <p style="text-align: right;font-size: 11px;fontweight: bold;margin: 0;">Pongam, Koratty East, Thrissur District,
Kerala State, INDIA. Pin - 680308</p>
 <p style="text-align: right;font-size: 11px;fontweight: bold;margin: 0;"> 0480 2733573 , 2730341
Email:mail@naipunnya.ac.in</p>
 </td>
 </tr>
 <tr>
 <td colspan="2" align="center">
<div align="center"><h2 style="font-size:
22px;margin-top:10px;line-height: 1;margin-bottom: 0px;">TRANSFER
CERTIFICATE</h2></div>
 <div align="center"><h2 style="font-size: 15px;margin-top:
11px;line-height: 0;">T.C No : 47/2020 Admn No : 3178</h2></div>
<hr>
 </td>
 </tr>
 </tbody></table>
 <table cellspacing="0" cellpadding="0" class=" table-bordered
padding-print" width="100%" style="color:black;">
 </table>
 <table cellspacing="0" cellpadding="0" class="table tablebordered padding-print" width="100%" style="color:black;">
 <tbody><tr>
 <td style="width: 4%;">1.</td><td
style="width: 35%;" class="font"> Name of Student </td>
 <td>: </td> <td><b><?php echo $data['studname']; ?></b></td>
 </tr>
 <tr>
 <td>2.</td><td class="font">Date of Birth</td>
 <td>: </td> <td><?php echo $data['studdob']; ?></td>
 </tr>
 <tr>
 <td>3.</td><td class="font">Date of
Admission</td>
 <td>: </td> <td><?php echo $data2['Sdate']; ?> <b>Class</b> :
 <?php echo $data1['course']; ?></td>
 </tr>
 <tr>
 <td>4.</td><td class="font">Date of
Leaving</td>
 <td>: </td> <td>31-03-2020 <b>Class</b> :
 <?php echo $data1['course']; ?></td>
 </tr>
 <tr>
 <td>5.</td><td class="font">Subject or
portions thereof studied</td>
 <td>: </td> <td><?php echo $data1['course']; ?></td>
 </tr>
 <tr>
 <td>6.</td><td class="font"> Reason for
leaving</td>
 <td>: </td> <td>Course completed</td>
 </tr>
 <tr>
 <td>7.</td><td class="font">a) University
examination for which the student has been last presented from the
college</td>
 <td></td> <td><?php echo $data1['course']; ?> , <?php echo $data['Csem']; ?>-Semester</td>
 </tr>
 <tr>
 <td></td><td class="font"></td>
 <td></td> <td>Year : March 2020</td>
 </tr>
 <tr>
 <td></td><td class="font"></td>
 <td></td> <td>Reg No : NIARBCM089</td>
 </tr>
 <tr>
 <td>b)</td><td class="font">Whether the
student has appeared for the examination</td>
 <td>: </td> <td>Yes</td>
 </tr>
 <tr>
 <td>8.</td><td class="font">Whether the
student has cleared all the dues to the college</td>
 <td>: </td> <td>Yes</td>
 </tr>
 <tr>
 <td>9.</td><td class="font">Remarks</td>
 <td>: </td> <td></td>
 </tr>
 </tbody></table>
 <table cellspacing="0" cellpadding="0" class=" table-bordered
padding-print" width="100%" style="color:black;margin-top:7%;">
 <tbody><tr>
 <td style="font-size: 13px;">Date: 10-03-2022</td>
 <td style="font-size: 13px;font-weight: bold;text-align:
right;">Principal</td></tr>
 </tbody></table>
</div>
</td>
<td id="page1" style="padding-left: 10px;vertical-align: top;">
<div class="sub-page">
<table cellspacing="0" cellpadding="0" class="
table-bordered padding-print" width="100%" style="color:black;">
<tbody><tr>
<td style="width: 40%;">
<img style="width: 130px;"
src="uploads/student/<?php echo $data['s_avatar'];?>">
</td>
<td style="padding-left: 10px;vertical-align:
top;">
<p style="text-align: right;font-size:
16px;font-weight: bold;line-height: 1.1;margin-bottom: 5px;">
 Naipunnya Institute of Management and Information
Technology(NIMIT)
 </p>
 <p style="text-align: right;font-size: 11px;fontweight: bold;margin: 0;">Affiliated to University of Calicut <br>
Accredited by NAAC with B++ grade <br> A Project of Archdiocese of
Ernakulam-Angamaly</p>
 <p style="text-align: right;font-size: 11px;fontweight: bold;margin: 0;">Pongam, Koratty East, Thrissur District,
Kerala State, INDIA. Pin - 680308</p>
 <p style="text-align: right;font-size: 11px;fontweight: bold;margin: 0;"> 0480 2733573 , 2730341
Email:mail@naipunnya.ac.in</p>
 </td>
 </tr>
 <tr>
 <td colspan="2" align="center">
<div align="center"><h2 style="font-size:
22px;margin-top:10px;line-height: 1;margin-bottom: 0px;">TRANSFER
CERTIFICATE</h2></div>
 <div align="center"><h2 style="font-size: 15px;margin-top:
11px;line-height: 0;">T.C No : 47/2020 Admn No : 3178</h2></div>
<hr>
 </td>
 </tr>
 </tbody></table>
 <table cellspacing="0" cellpadding="0" class=" table-bordered
padding-print" width="100%" style="color:black;">
 </table>
 <table cellspacing="0" cellpadding="0" class="table tablebordered padding-print" width="100%" style="color:black;">
 <tbody><tr>
 <td style="width: 4%;">1.</td><td
style="width: 35%;" class="font"> Name of Student </td>
 <td>: </td> <td><b><?php echo $data['studname']; ?></b></td>
 </tr>
 <tr>
 <td>2.</td><td class="font">Date of Birth</td>
 <td>: </td> <td><?php echo $data['studdob']; ?></td>
 </tr>
 <tr>
 <td>3.</td><td class="font">Date of
Admission</td>
 <td>: </td> <td><?php echo $data2['Sdate']; ?> <b>Class</b> :
<?php echo $data1['course']; ?> S1</td>
 </tr>
 <tr>
 <td>4.</td><td class="font">Date of
Leaving</td>
 <td>: </td> <td>31-03-2020 <b>Class</b> :
<?php echo $data1['course']; ?> S<?php echo $data['Csem']; ?></td>
 </tr>
 <tr>
 <td>5.</td><td class="font">Subject or
portions thereof studied</td>
 <td>: </td> <td><?php echo $data1['course']; ?></td>
 </tr>
 <tr>
 <td>6.</td><td class="font"> Reason for
leaving</td>
 <td>: </td> <td>Course completed</td>
 </tr>
 <tr>
 <td>7.</td><td class="font">a) University
examination for which the student has been last presented from the
college</td>
 <td></td> <td><?php echo $data1['course']; ?>  ,<?php echo $data['Csem']; ?>-Semester</td>
 </tr>
 <tr>
 <td></td><td class="font"></td>
 <td></td> <td>Year : March 2020</td>
 </tr>
 <tr>
 <td></td><td class="font"></td>
 <td></td> <td>Reg No : NIARBCM089</td>
 </tr>
 <tr>
 <td>b)</td><td class="font">Whether the
student has appeared for the examination</td>
 <td>: </td> <td>Yes</td>
 </tr>
 <tr>
 <td>8.</td><td class="font">Whether the
student has cleared all the dues to the college</td>
 <td>: </td> <td>Yes</td>
 </tr>
 <tr>
 <td>9.</td><td class="font">Remarks</td>
 <td>: </td> <td></td>
 </tr>
 </tbody></table>
 <table cellspacing="0" cellpadding="0" class=" table-bordered
padding-print" width="100%" style="color:black;margin-top:7%;">
 <tbody><tr>
 <td style="font-size: 13px;">Date: 10-03-2022</td>
 <td style="font-size: 13px;font-weight: bold;text-align:
right;">Principal</td></tr>
 </tbody></table>
</div>
</td>
</tr>
</tbody></table>
</div>
</div>
</div>
<script type="text/javascript">
 var studentTcDetails =
{"id":"48","studentId":"224","admitedSemId":"1","lastSemId":"6","appli
cationDate":"01-01-1970","issueDate":"31-03-
2020","reasonForLeave":"Course completed","lastExamName":"B.Com
Finance VI
Semester","feesPaid":"Yes","studentCharacter":"","tcNo":"47\/2020","cr
eatedBy":"3","createdDate":"2020-05-05
10:40:31","updatedBy":"3","updatedDate":"2020-05-05
10:40:31","mediumOfInstruction":"","isqualifiedForPromotion":"No","tot
alHours":"N\/A","attendedHours":"N\/A","examStatus":"","isScholarShipG
ranted":"","leavingMonth":"","leavingYear":"2020","leavingDate":"","mo
nthOfExamination":"March","yearOfExamination":"2020","optional_subject
s":"","isFeeConcessionReceived":"No","tcPrefixId":"3","admisson_course
ID":"0","admission_deptID":"0","leaving_courseID":"0","leaving_deptID"
:"0","studied_patterndeptID":"0","studied_subsID":"0","lst_exm_status"
:"0","lst_exm_courseID":"0","lst_exm_deptID":"0","lst_exm_semID":"0","
conduct_of_student":"","remarks":"","is_deleted":"0","is_alumini":"0",
"studentPassedStatus":"0","has_appeared":"1","isPrinted":0,"classOfAdm
ission":"<?php echo $data1['course']; ?>","classOfLeaving":"B.Com
Finance","subjectStudied":"B.Com
Finance","studentName":"","admissionNo":"3178","regNo":"NIARBCM089","s
econdLangauge":"","studentJoindate":"<?php echo $data2['Sdate']; ?>","dateOfbirth":"0000-
00-
00","tcPrefix":"TC","tcBatchName":null,"tcBatchAcademicYear":null,"tcL
astClassAttendedDate":"","studentCategory":"","tc_print_date":null,"na
me":"AABCQX KNAULBEK","studentFather":"PAULSON T
K","studentBirthday":"1997-05-
05","religion":"CHRISTIAN","community":"RC","studentAccount":"17BCOMFB
01","departmentDesc":"COMMERCE","typeName":"B.COM","typeCode":"B_COM",
"rollNo":"01","studentGender":"Male","university":"Calicut","category"
:"GENERAL","semName":"Course Completed","periodOfStudy":"2017-
2020","batchID":"18","semID":"11","secondLangaugeName":null,"exitType"
:"","joiningSemId":"5","certificateStudentJoindate":"0000-00-
00","previousSchool":"(-)","studentMother":"BETTY
PAULSON","tcPrintDate":null,"nationality":null,"batchOptionName":"","s
tudentStatus":"his","cStudentStatus":"His","sonOrDaughter":"son","heOr
She":"he","cHeOrShe":"He","parentName":"Mr.PAULSON T
K","patternDesc":"B.COM","studentReservation":null,"slno":1,"courseTyp
e":"UG","isFailed":false,"generatedYear":"2020","generatedDate":"05-
05-
2020","joiningSem":"","studentJoiningYear":"2017","batchStartYear":"20
17","batchEndYear":"2020","collegeLogoUrl":"..\/..\/libcommon\/images\
/college\/NIMIT\/logo.png","collegeLogoUrl2":"..\/..\/libcommon\/image
s\/college\/NIMIT\/logo2.jpg","collegeHeaderImage":"..\/..\/libcommon\
/images\/college\/NIMIT\/collegeheader.png","collegeHeaderImage2":"..\/..\/libcommon\/images\/college\
/NIMIT\/college-headertc.jpg","principleSignature":"..\/..\/libcommon\/images\/college\/NIMI
T\/principal_signature1.jpg","tcHeader":"..\/..\/libcommon\/images\/co
llege\/NIMIT\/tcheader.png","tcFooter":"..\/..\/libcommon\/images\/college\/NIMIT\/tcfooter.png","tcLogo":"..\/..\/libcommon\/images\/college\/NIMIT\/tclogo.png","collegeHeader":"\n<div style='font-family: Times New
Roman;font-size: 28px;letter-spacing: -1px;line-height: 23px;\n
text-align: center;'>\n<b>Naipunnya Institute of Management and
Information Technology<\/b>\n<\/div><div style='font-family: Times New
Roman;text-align: center;font-size: 16px;padding-top:
11px;'>Affiliated to University of Calicut <br> Accredited by NAAC
with B++ grade <br> A Project of Archdiocese of Ernakulam-Angamaly
Pongam, Koratty East, Thrissur District, Kerala State, INDIA. Pin -
680308<\/div>","date":"10-03-2022","dob":"05-05-
1997","collegeBanner":"..\/..\/libcommon\/images\/college\/NIMIT\/coll
egeBanner.jpg","collegeName":"Naipunnya Institute of Management and
Information
Technology","autonomous":null,"collegeCode":"NIMIT","collegeAddress":"
Kerala State, INDIA. Pin - 680308","collegeAddress1":"Pongam, Koratty
East, Thrissur District,","collegeAddress2":"Kerala State, INDIA. Pin
-
680308","collegePhone":null,"collegeWebsite":null,"collegeAffliate":nu
ll,"collegeAffliations":"Affiliated to University of Calicut <br>
Accredited by NAAC with B++ grade <br> A Project of Archdiocese of
Ernakulam-Angamaly","collegeContact1":"0480 2733573 ,
2730341","collegeContact2":"Email:mail@naipunnya.ac.in","collegePlace"
:null,"certificateHeaderUrl":"..\/..\/libcommon\/images\/college\/NIMI
T\/certificateheader.png","principalSign":"..\/..\/libcommon\/images\/college\/NIMIT
\/principalSignature.jpeg","dobInWords":"Fifth of May,
\n\t\t\tNineteen Ninety-seven","dobWords":"05-05-1997 (Fifth of May,
\n\t\t\tNineteen Ninetyseven)","admittedSemName":"S1","lastSemName":"S6","today":"10-03-
2022","leavingMonthYear":"-","admittedSemester":"First semester B.COM
Degree","lastSemester":"Sixth semester B.COM
Degree","lastSemInWords":"Sixth semester","admittedClass":"
S1","leavingClass":" S6","studentJoindateWords":"24 July
2017","leavingDateWords":"","dobInWords2":"05 May
1997","issueDateInWords":"31 March
2020","hasAppearedForExam":"Yes","hasQualifiedForPromotion":"Course
completed","tcBatchStartYear":null,"tcBatchEndYear":null,"tcUniversity
Name":"Calicut"};
 $(document).ready(function (){
 $('.page').hide();
 $('.tcPrint').hide();
 var studentTcTemplatePrint =
$.templates("#studentTcPrintTemplate");
 var responseTemplate =
studentTcTemplatePrint.render(studentTcDetails);
 $('#page').html(responseTemplate);
 $('#page1').html(responseTemplate);
 $('.page').show();
 // alert(responseTemplate);

 });

 <?php endwhile;?>
 <?php endwhile;?>
 <?php endwhile;?>


 </script>
</body></html>