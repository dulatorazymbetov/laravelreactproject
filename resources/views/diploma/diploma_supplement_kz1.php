<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    
	<style type="text/css">
	#main_canvas {
		position: absolute;
		left: 50px;
		top: 62px;
		
	}
	div {
		margin: 0px 0px 0px 0px;
	}
	
	.norm_text1 {
    font-family: 'Times New Roman', Times, serif; 
    font-size: 14pt;
	position: absolute;
	border: solid  1px;
   } 
	.sm_text1 {
    font-family: 'Times New Roman', Times, serif; 
    font-size: 10pt;
	position: absolute;
	border: solid  1px;
   } 
	.sm_text2 {
    font-family: 'Times New Roman', Times, serif; 
    font-size: 10pt;
	position: absolute;
	text-align: center;
	border: solid  1px;
	width: 102px; 
	height: 30px;
	
   } 
	.practice_block
	{
		display: block;
		position: absolute;
	}
	.fin_att_block
	{
		display: block;
		position: absolute;
	}
	.defense_block
	{
		display: block;
		position: absolute;
	}
	.def_type_text {
    font-family: 'Times New Roman', Times, serif; 
    font-size: 12pt;
	position: absolute;
	text-align: center;
	border: solid  1px;
	top: 1246px; 
	left: 36px; 
	width: 570px
	
   } 
   .compliance_text {
    font-family: 'Times New Roman', Times, serif; 
    font-size: 12pt;
	position: absolute;
	text-align: center;
	border: solid  1px;	
	top: 1600px; 
	left: 438px; 
	width: 670px;
   } 
   .uname_text {
    font-family: 'Times New Roman', Times, serif; 
    font-size: 14pt;
	position: absolute;
	text-align: center;
	border: solid  1px;
	top: 240px; 
	left: 830px; 
	width: 286px;
	height: 200px;
   } 
   .right_block_text {
    font-family: 'Times New Roman', Times, serif; 
    font-size: 14pt;
	position: absolute;
	text-align: center;
	border: solid  1px;
	
	left: 830px; 
	width: 286px;
   } 
   
	
}
	
    </style>
  <body>
  <div style="position: absolute;">
  <img src="bg/kz1.jpg"/>
  </div>
  <div id="main_canvas">
  
	  <div style="top: 64px; left: 140px; " class="norm_text1">
	  $lastname
	  </div>
	  <div style="top: 102px; left: 350px; " class="norm_text1">
	  $firstname_patrinymic
	  </div>
	  <div style="top: 182px; left: 270px;" class="norm_text1">
	  $birthdate
	  </div>
	  <div style="top: 218px; left: 10px; width: 790px" class="norm_text1">
	  <p style="text-indent: 290px;vertical-align: top; margin: 0px; padding: 0px; line-height: 32px;">
	  $prev_educ</p>
	  </div>
	  <div style="top: 300px; left: 180px;" class="norm_text1">
	  $entr_exam
	  </div>
	  <div style="top: 378px; left: 100px;" class="norm_text1">
	  $enrolled
	  </div>
	  <div style="top: 418px; left: 110px;" class="norm_text1">
	  $graduated
	  </div>
	  <div style="top: 458px; left: 560px;" class="norm_text1">
	  $total_cred
	  </div>
	  <div style="top: 498px; left: 410px;" class="norm_text1">
	  $gpa
	  </div>

	  <!-- Practice 1 -->
		<div id="practice1" class="practice_block"  style="top: 660px">
			<div style="left: 20px; width: 300px; height: 30px" class="sm_text1">
			$pract_name1
			</div>
			<div style="left: 340px;" class="sm_text2">
			$pract_ects1
			</div>
			<div style="left: 466px;" class="sm_text2">
			$pract_mark_letter1
			</div>
			<div style="left: 578px;" class="sm_text2">
			$pract_mark_num1
			</div>
			<div style="left: 690px; " class="sm_text2">
			$pract_mark_trad1
			</div>
		</div>	
	  <!-- Practice 2 -->
		<div id="practice2" class="practice_block" style="top: 696px">
			<div style="left: 20px; width: 300px; height: 30px" class="sm_text1">
			$pract_name2
			</div>
			<div style="left: 340px;" class="sm_text2">
			$pract_ects2
			</div>
			<div style="left: 466px;" class="sm_text2">
			$pract_mark_letter2
			</div>
			<div style="left: 578px;" class="sm_text2">
			$pract_mark_num2
			</div>
			<div style="left: 690px; " class="sm_text2">
			$pract_mark_trad2
			</div>
		</div>	
	  <!-- Practice 3 -->
		<div id="practice3" class="practice_block" style="top: 732px">
			<div style="left: 20px; width: 300px; height: 30px" class="sm_text1">
			$pract_name3
			</div>
			<div style="left: 340px;" class="sm_text2">
			$pract_ects3
			</div>
			<div style="left: 466px;" class="sm_text2">
			$pract_mark_letter3
			</div>
			<div style="left: 578px;" class="sm_text2">
			$pract_mark_num3
			</div>
			<div style="left: 690px; " class="sm_text2">
			$pract_mark_trad3
			</div>
		</div>	
	  <!-- Practice 4 -->
		<div id="practice4" class="practice_block"  style="top: 768px">
			<div style="left: 20px; width: 300px; height: 30px" class="sm_text1">
			$pract_name4
			</div>
			<div style="left: 340px;" class="sm_text2">
			$pract_ects4
			</div>
			<div style="left: 466px;" class="sm_text2">
			$pract_mark_letter4
			</div>
			<div style="left: 578px;" class="sm_text2">
			$pract_mark_num4
			</div>
			<div style="left: 690px; " class="sm_text2">
			$pract_mark_trad4
			</div>
		</div>	
	  <!-- Practice 5 -->
		<div id="practice5" class="practice_block" style="top: 804px;">
			<div style="left: 20px; width: 300px; height: 30px" class="sm_text1">
			$pract_name5
			</div>
			<div style="left: 340px;" class="sm_text2">
			$pract_ects5
			</div>
			<div style="left: 466px;" class="sm_text2">
			$pract_mark_letter5
			</div>
			<div style="left: 578px;" class="sm_text2">
			$pract_mark_num5
			</div>
			<div style="left: 690px; " class="sm_text2">
			$pract_mark_trad5
			</div>
		</div>	
	  
	  <!-- Final attestation 1 -->
		<div id="fin_att1" class="fin_att_block" style="top: 1020px">
			<div style="left: 20px; width: 300px; height: 30px" class="sm_text1">
			$fin_att_name1 
			</div>
			<div style="left: 340px;" class="sm_text2">
			$fin_att_ects1
			</div>
			<div style="left: 466px;" class="sm_text2">
			$fin_att_mark_letter1
			</div>
			<div style="left: 578px;" class="sm_text2">
			$fin_att_mark_num1
			</div>
			<div style="left: 690px; " class="sm_text2">
			$fin_att_mark_trad1
			</div>
		</div>	
	  <!-- Final attestation 2 -->
		<div id="fin_att2" class="fin_att_block" style="top: 1056px;">
			<div style="left: 20px; width: 300px; height: 30px" class="sm_text1">
			$fin_att_name2 		
			</div>
			<div style="left: 340px;" class="sm_text2">
			$fin_att_ects2
			</div>
			<div style="left: 466px;" class="sm_text2">
			$fin_att_mark_letter2
			</div>
			<div style="left: 578px;" class="sm_text2">
			$fin_att_mark_num2
			</div>
			<div style="left: 690px; " class="sm_text2">
			$fin_att_mark_trad2
			</div>
		</div>	
	  <!-- Final attestation 3 -->
		<div id="fin_att3" class="fin_att_block" style="top: 1092px;">
			<div style="left: 20px; width: 300px; height: 30px" class="sm_text1">
			$fin_att_name3 
			</div>
			<div style="left: 340px;" class="sm_text2">
			$fin_att_ects3
			</div>
			<div style="left: 466px;" class="sm_text2">
			$fin_att_mark_letter3
			</div>
			<div style="left: 578px;" class="sm_text2">
			$fin_att_mark_num3
			</div>
			<div style="left: 690px; " class="sm_text2">
			$fin_att_mark_trad3
			</div>
		</div>	
	  <!-- Final attestation 4 -->
		<div id="fin_att4" class="fin_att_block" style="top: 1128px;">
			<div style="left: 20px; width: 300px; height: 30px" class="sm_text1">
			$fin_att_name4 
			</div>
			<div style="left: 340px;" class="sm_text2">
			$fin_att_ects4
			</div>
			<div style="left: 466px;" class="sm_text2">
			$fin_att_mark_letter4
			</div>
			<div style="left: 578px;" class="sm_text2">
			$fin_att_mark_num4
			</div>
			<div style="left: 690px; " class="sm_text2">
			$fin_att_mark_trad4
			</div>
		</div>	
	  <!-- Final attestation 5 -->
		<div id="fin_att5" class="fin_att_block" style="top: 1164px;">
			<div style="left: 20px; width: 300px; height: 30px" class="sm_text1">
			$fin_att_name5 
			</div>
			<div style="left: 340px;" class="sm_text2">
			$fin_att_ects5
			</div>
			<div style="left: 466px;" class="sm_text2">
			$fin_att_mark_letter5
			</div>
			<div style="left: 578px;" class="sm_text2">
			$fin_att_mark_num5
			</div>
			<div style="left: 690px; " class="sm_text2">
			$fin_att_mark_trad5
			</div>
		</div>	
	  
	  <!-- Defense 1 -->
		<div id="defense1" class="defense_block" style="top: 1380px;">
			<div style="left: 20px; width: 300px; height: 100px" class="sm_text1">
			$dip_theme_name 
			</div>
			<div style="left: 340px;" class="sm_text2">
			$dip_ects
			</div>
			<div style="left: 466px;" class="sm_text2">
			$dip_mark_letter
			</div>
			<div style="left: 578px;" class="sm_text2">
			$dip_mark_num
			</div>
			<div style="left: 690px; " class="sm_text2">
			$dip_mark_trad
			</div>
		</div>	
		<!-- Defense type -->
		<div style="" class="def_type_text">
		$defense_type
		</div>
		
		<div style="" class="compliance_text">
		$compliance_level
		</div>
		<div class="uname_text">
		<p style="vertical-align: top; margin: 0px; padding: 0px; line-height: 54px;">
		$university_name</p>
		
		</div>
		<div class="right_block_text" style="top: 474px; ">
		$city
		</div>
		<div class="right_block_text" style="top: 710px; ">
		$diplom_number
		</div>
		<div class="right_block_text" style="top: 780px; ">
		$diplom_date
		</div>
		<div class="right_block_text" style="top: 852px; ">
		$diplom_reg_number
		</div>

	</div>
  
  
  </body>
</html>