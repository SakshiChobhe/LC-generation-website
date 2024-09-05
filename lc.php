<!DOCTYPE html>
<html>
<head>
	<title>Table</title>
</head>
<body>

	<?php
		$q1=mysql_query("select * from pdf where student_id='".$_SESSION['user']."'",$conn);
		$row=mysql_fetch_array($q1);

		$r1=mysql_query("select * from subjects where subject_name='".$row['subject']."'",$conn);
		$r=mysql_fetch_array($r1);

?>
<form>
	<table border="5px solid black" width="70%" align="center">
		<tr>
			<td colspan="2"> 
				<img src="dte-logo.png" width="18%" align="left" ><center><b><h2>GOVERNMENT COLLEGE OF ENGINEERING, RATNAGIRI</b></h2><h4>Near Thiba Palace, Ratnagiri - 415612(Maharashtrta)<br>Tel.No : 02352-222203 / 222435<br>E-mail : principal_gpr@rediffmail.com &nbsp; &nbsp; Website : www.gpratnagiri.org</h4></center>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<center><b>Approved by : AICTE, New Delhi | DTE Code : 3009 | MSBTE Code : 0013 / 1598 | PCI Affi. Code : 17-569</b></cente>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<b><h2><u><center>LEAVING CERTIFICATE</u></h2></b><center><i>No change in any entry in this certificate shall be made except by the authority issuing it and <br>any infringement of this requirement is liable to invlove the imposition of a penalty such as that of rustication.</i></center>
			</td>
		</tr>
		<tr>
			<td>LC NO : </td>
    		<td><input type="text" id="t1"></td> 
		</tr>
		<tr>
			<td>Registration No of the Candidate : </td>
    		<td><input type="text" id="t2"></td>
		</tr>
		<tr>
			<td>Name of the Polytechnic : </td>
    		<td><input type="text" id="t3"></td>
		</tr>
		<tr>
			<td>Name of the Candidate in Full : </td>
    		<td><input type="text" id="t4"></td>
		</tr>
		<tr>
    		<td>Mother Name : </td>
    		<td><input type="text" id="t5"></td>
		</tr>
		<tr>
    			<td>Race : </td>
    			<td><input type="text" id="t6"></td>
		</tr>
		<tr>
    			<td>Cast : </td>
    			<td><input type="text" id="t7"></td>
		</tr>
		<tr>
    		<td>Sub Cast : </td>
    		<td><input type="text" id="t8"></td>
		</tr>
		<tr>
    		<td>Nationality : </td>
    		<td><input type="text" id="t9"></td>
		</tr>
		<tr>
    		<td>Place Of Birth : </td>
    		<td><input type="text" id="t10"></td>
		</tr>
		<tr>
    		<td>Date Of Birth : <br>according to the Christian year : <br>(In words and figures)</td>
    		<td><input type="text" id="t11"></td>
		</tr>
		<tr>
    		<td>Institution Last Attended :  </td>
    		<td><input type="text" id="t12"></td>
		</tr>
		<tr>
    		<td>Date Of Admission :  : </td>
    		<td><input type="text" id="t13"></td>
		</tr>
		<tr>
    		<td>Progress : </td>
    		<td><input type="text" id="t14"></td>
		</tr>
		<tr>
    		<td>Conduct :  : </td>
    		<td><input type="text" id="t15"></td>
		</tr>
		<tr>
    		<td>Date of Leaving Polytechnic :  </td>
    		<td><input type="text" id="t16"></td>
		</tr>
		<tr>
    		<td>Course and Year in which studying : </td>
    		<td><input type="text" id="t17"></td>
		</tr>
		<tr>
    		<td>Since when : </td>
    		<td><input type="text" id="t18"></td>
		</tr>
		<tr>
    		<td>Reason for leaving the Polytechnic : </td>
    		<td><input type="text" id="t19"></td>
		</tr>
		<tr>
    		<td>Enrollment No : </td>
    		<td><input type="text" id="t20"></td>
		</tr>	
		<tr>
    		<td>Remarks : </td>
    		<td><input type="text" id="t21"></td>
		</tr>
		<tr>
			<td colspan="2"><b><center>Certified that, the above information is accordance with the Institute register.</center></b><br><br>Date: 
	
			&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
			&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
			&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
			&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
			&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
		
			Principal<br>

		 	&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
		 	&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
		 	&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
		 	&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
		 	&nbsp; &nbsp; &nbsp; &nbsp; 
		
			Government Polytechnic,
		
			&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
			&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
			&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;	&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
			&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;	
			&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
			&nbsp; &nbsp;
			
			Ratnagiri.<br>
		
			
			Place :

			</td>
		</tr>
	</table>
</form>
</body>
</html>