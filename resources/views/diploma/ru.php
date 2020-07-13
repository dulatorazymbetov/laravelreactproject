<!DOCTYPE html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<style>
	@page {
		margin: 0;
	}
	body { 
        font-family: DejaVu Serif; 
        color: #000;
        font-size: 18px;
    }
	.practic-row1 {
		word-wrap: break-word; vertical-align: top; background: red; width: 285px; display: inline-block; margin-right: 22px;
	}
	.practic-row2 {
		vertical-align: top; background: red; width: 115px; display: inline-block; text-align: center; margin-right: 22px;
	}
	.practic-row3 {
		vertical-align: top; background: red; width: 92px; display: inline-block; text-align: center; margin-right: 22px;
	}
	.practic-row4 {
		vertical-align: top; background: red; width: 88px; display: inline-block; text-align: center; margin-right: 22px;
	}
	.practic-row5 {
		vertical-align: top; background: red; width: 88px; display: inline-block; text-align: center; 
	}
	.page-break {
    	page-break-after: always;
	}
</style>
<body>
	<div style="position:absolute; top: 0;left: 0; display: block"><img src="<?=public_path();?>/img/diploma/ru1.jpg" /></div>
	<div style="position:absolute; top: 95px;left: 180px"><?=$user->last_name_ru;?></div>
	<div style="position:absolute; top: 134px;left: 370px"><?=$user->first_name_ru;?></div>
	<div style="position:absolute; top: 172px;left: 70px"><?=$user->middle_name_ru;?></div>
	<div style="position:absolute; top: 213px;left: 220px"><?=$user->birthdate;?></div>
	<div style="position:absolute; top: 252px;left: 420px"><?=$user->prev_edu_doc_ru;?></div>
	<div style="position:absolute; top: 291px;left: 70px"></div>
	<div style="position:absolute; top: 330px;left: 325px"><?=$user->entrance_exam_ru;?></div>
	<div style="position:absolute; top: 370px;left: 70px"></div>
	<div style="position:absolute; top: 410px;left: 205px">Start</div>
	<div style="position:absolute; top: 449px;left: 205px">Finish</div>
	<div style="position:absolute; top: 490px;left: 580px"><?=$user->total_credits_number_ects;?></div>
	<div style="position:absolute; top: 529px;left: 445px"><?=$user->gpa;?></div>
	<div style="position:absolute; top: 700px;left: 75px">
		<div style="margin-bottom: 6px">
			<div class="practic-row1">123123123123123123123123</div><div class="practic-row2">3</div><div class="practic-row3">3</div><div class="practic-row4">3</div><div class="practic-row5">3</div>
		</div>
		<div style="margin-bottom: 6px">
			<div class="practic-row1">Middle GPA</div><div class="practic-row2">3</div><div class="practic-row3">3</div><div class="practic-row4">3</div><div class="practic-row5">3</div>
		</div>
	</div>
	<div style="position:absolute; top: 1065px;left: 75px">
		<div style="margin-bottom: 6px">
			<div class="practic-row1">123123123123123123123123</div><div class="practic-row2">3</div><div class="practic-row3">3</div><div class="practic-row4">3</div><div class="practic-row5">3</div>
		</div>
		<div style="margin-bottom: 6px">
			<div class="practic-row1">Middle GPA</div><div class="practic-row2">3</div><div class="practic-row3">3</div><div class="practic-row4">3</div><div class="practic-row5">3</div>
		</div>
	</div>
	<div style="position:absolute; top: 1420px;left: 75px">
		<div style="margin-bottom: 6px">
			<div class="practic-row1">123123123123123123123123</div><div class="practic-row2">3</div><div class="practic-row3">3</div><div class="practic-row4">3</div><div class="practic-row5">3</div>
		</div>
		<div style="margin-bottom: 6px">
			<div class="practic-row1">Middle GPA</div><div class="practic-row2">3</div><div class="practic-row3">3</div><div class="practic-row4">3</div><div class="practic-row5">3</div>
		</div>
	</div>
	<div style="position:absolute; top: 1639px;left: 645px"><?=$user->gpa;?></div>
	<div class="page-break"></div>
	<div style="position:absolute; top: 0;left: 0; display: block"><img src="<?=public_path();?>/img/diploma/ru2.jpg" /></div>
	<div style="position:absolute; top: 1195px;left: 180px"><?=$user->last_name_ru;?></div>
</body>