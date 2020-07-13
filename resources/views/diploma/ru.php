<?php 
	//dd($user);
?><meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<style>
	@page {
		margin: 0;
	}
	body { 
        font-family: DejaVu Serif; 
        color: #000;
        font-size: 16px;
    }
	.practic-row1 {
		line-height: 1; word-wrap: break-word; vertical-align: top; width: 285px; display: inline-block; margin-right: 22px;
	}
	.practic-row2 {
		vertical-align: top; width: 115px; display: inline-block; text-align: center; margin-right: 22px;
	}
	.practic-row3 {
		vertical-align: top; width: 92px; display: inline-block; text-align: center; margin-right: 22px;
	}
	.practic-row4 {
		vertical-align: top; width: 88px; display: inline-block; text-align: center; margin-right: 22px;
	}
	.practic-row5 {
		vertical-align: top;  width: 88px; display: inline-block; text-align: center; 
	}
	.page-break {
    	page-break-after: always;
	}
	.subject-row1 {
		vertical-align: top; width: 47px; display: inline-block; text-align: center; margin-right: 7px;
	}
	.subject-row2 {
		vertical-align: top; width: 98px; display: inline-block; text-align: center; margin-right: 7px;
	}
	.subject-row3 {
		line-height: 1; vertical-align: top; width: 400px; display: inline-block; margin-right: 7px;
	}
	.subject-row4 {
		vertical-align: top; width: 182px; display: inline-block; text-align: center; margin-right: 7px;
	}
	.subject-row5 {
		vertical-align: top; width: 111px; display: inline-block; text-align: center; margin-right: 7px;
	}
</style>
<body>
	<!--
	<div style="position:absolute; top: 0;left: 0; display: block"><img src="<?=public_path();?>/img/diploma/ru1.jpg" /></div>
	-->
	<div style="position:absolute; top: 302px;left: 880px; width: 283px; text-align:center">АО Международный</div>
	<div style="position:absolute; top: 354px;left: 880px; width: 283px; text-align:center">университет</div>
	<div style="position:absolute; top: 408px;left: 880px; width: 283px; text-align:center">информационных</div>
	<div style="position:absolute; top: 462px;left: 880px; width: 283px; text-align:center">технологий</div>
	<div style="position:absolute; top: 518px;left: 880px; width: 283px; text-align:center">Алматы</div>
	<div style="position:absolute; top: 718px;left: 960px; width: 283px;"><?=$user->diploma_number;?></div>
	<div style="position:absolute; top: 794px;left: 880px; width: 283px; text-align:center"><?=$user->issue_date;?></div>
	<div style="position:absolute; top: 864px;left: 880px; width: 283px; text-align:center"><?=$user->registration_number;?></div>


	<div style="position:absolute; top: 95px;left: 180px"><?=$user->last_name_ru;?></div>
	<div style="position:absolute; top: 134px;left: 370px"><?=$user->first_name_ru;?></div>
	<div style="position:absolute; top: 172px;left: 70px"><?=$user->middle_name_ru;?></div>
	<div style="position:absolute; top: 213px;left: 220px"><?=$user->birthdate;?></div>
	<div style="position:absolute; top: 252px;left: 420px"><?=$user->prev_edu_doc_ru;?></div>
	<div style="position:absolute; top: 291px;left: 70px"></div>
	<div style="position:absolute; top: 330px;left: 325px"><?=$user->entrance_exam_ru;?></div>
	<div style="position:absolute; top: 370px;left: 70px"></div>
	<div style="position:absolute; top: 410px;left: 205px"><?=$user->entered_univ_name_ru;?></div>
	<div style="position:absolute; top: 449px;left: 205px"><?=$user->graduated_univ_name_ru;?></div>
	<div style="position:absolute; top: 490px;left: 580px"><?=$user->total_credits_number_ects;?></div>
	<div style="position:absolute; top: 529px;left: 445px"><?=$user->gpa;?></div>
	<div style="position:absolute; top: 700px;left: 75px">
		<?php foreach($user->internships as $key => $value){ ?>
			<div style="margin-bottom: 8px">
				<div class="practic-row1"><?=$value->discipline_name_ru;?></div><div class="practic-row2"><?=$value->discipline_ects_credits;?></div><div class="practic-row3"><?=$value->alpha_mark;?></div><div class="practic-row4"><?=$value->final_grade;?></div><div class="practic-row5"><?=$value->traditional_mark;?></div>
			</div>
		<?php } ?>
	</div>
	<div style="position:absolute; top: 1065px;left: 75px">
		<?php foreach($user->attestations as $key => $value){ ?>
			<div style="margin-bottom: 8px">
				<div class="practic-row1"><?=$value->discipline_name_ru;?></div><div class="practic-row2"><?=$value->discipline_ects_credits;?></div><div class="practic-row3"><?=$value->alpha_mark;?></div><div class="practic-row4"><?=$value->final_grade;?></div><div class="practic-row5"><?=$value->traditional_mark;?></div>
			</div>
		<?php } ?>
	</div>
	<div style="position:absolute; top: 1284px;left: 296px">Дипломный проект</div>
	<div style="position:absolute; top: 1420px;left: 75px">
		<?php foreach($user->themes as $key => $value){ ?>
			<div style="margin-bottom: 8px">
				<div class="practic-row1"><?=$value->diploma_name_ru;?></div><div class="practic-row2"><?=$value->discipline_ects_credits;?></div><div class="practic-row3"><?=$value->alpha_mark;?></div><div class="practic-row4"><?=$value->final_grade;?></div><div class="practic-row5"><?=$value->traditional_mark;?></div>
			</div>
		<?php } ?>
	</div>
	<div style="position:absolute; top: 1639px;left: 645px"><?=$user->nqf_level;?></div>
	<div class="page-break"></div>
	<!--
	<div style="position:absolute; top: 0;left: 0; display: block"><img src="<?=public_path();?>/img/diploma/ru2.jpg" /></div>
	-->
	<div style="position:absolute; top: 191px;left: 65px; font-size: 14px">
		<?php foreach($user->subjects as $key => $value){ if($key < 39){ ?>
			<div style="margin-bottom: 6px">
			<div class="subject-row1"><?=$key+1; ?></div><div class="subject-row2"><?=$value->discipline_code;?></div><div class="subject-row3"><?=$value->discipline_name_ru;?></div><div class="subject-row4"><?=$value->discipline_ects_credits;?></div><div class="subject-row5"><?=$value->alpha_mark;?></div><div class="subject-row5"><?=$value->final_grade;?></div><div class="subject-row5"><?=$value->traditional_mark;?></div>
			</div>
		<?php }} ?>
	</div>
	<div style="position:absolute; top: 1477px;left: 775px;"><?=$user->theoretical_credits_number_ects; ?></div>
	<div style="position:absolute; top: 1509px;left: 975px;"><?=$user->sac_protocol_number; ?></div>
	<div style="position:absolute; top: 1547px;left: 83px;"><?=explode('-', $user->sac_protocol_date)[2]; ?></div>
	<div style="position:absolute; top: 1547px;left: 183px;"><?=explode('-', $user->sac_protocol_date)[1]; ?></div>
	<div style="position:absolute; top: 1547px;left: 303px;"><?=substr(explode('-', $user->sac_protocol_date)[0], -2); ?></div>
	<div style="position:absolute; top: 1570px;left: 305px;"><?=$user->qualification_ru; ?></div>
	<div style="position:absolute; top: 1650px;left: 75px;"><?=$user->specialty_ru; ?></div>
	<?php if(count($user->subjects) >= 38){ ?>
		<div class="page-break"></div>
		<!--
		<div style="position:absolute; top: 0;left: 0; display: block"><img src="<?=public_path();?>/img/diploma/ru2.jpg" /></div>
		-->
		<div style="position:absolute; top: 191px;left: 65px; font-size: 14px">
			<?php foreach($user->subjects as $key => $value){ if($key >= 39){ ?>
				<div style="margin-bottom: 6px">
				<div class="subject-row1"><?=$key+1; ?></div><div class="subject-row2"><?=$value->discipline_code;?></div><div class="subject-row3"><?=$value->discipline_name_ru;?></div><div class="subject-row4"><?=$value->discipline_ects_credits;?></div><div class="subject-row5"><?=$value->alpha_mark;?></div><div class="subject-row5"><?=$value->final_grade;?></div><div class="subject-row5"><?=$value->traditional_mark;?></div>
				</div>
			<?php }} ?>
		</div>
		<div style="position:absolute; top: 1477px;left: 775px;"><?=$user->theoretical_credits_number_ects; ?></div>
	<div style="position:absolute; top: 1509px;left: 975px;"><?=$user->sac_protocol_number; ?></div>
	<div style="position:absolute; top: 1547px;left: 83px;"><?=explode('-', $user->sac_protocol_date)[2]; ?></div>
	<div style="position:absolute; top: 1547px;left: 183px;"><?=explode('-', $user->sac_protocol_date)[1]; ?></div>
	<div style="position:absolute; top: 1547px;left: 303px;"><?=substr(explode('-', $user->sac_protocol_date)[0], -2); ?></div>
	<div style="position:absolute; top: 1570px;left: 305px;"><?=$user->qualification_ru; ?></div>
	<div style="position:absolute; top: 1650px;left: 75px;"><?=$user->specialty_ru; ?></div>
	<?php } ?>
</body>