<div class="well col-sm-8">
    Поздравляем с регистрацией на портале Campus IITU!<br />
	Для работы в портале необходимо подтвердить ваш email по ссылке.<br />
	<p>
		Учетная запись: <b><?=$data['login'];?></b><br/>
		Пароль: <b><?=$data['password'];?></b>
	</p>
	<p>
        Учетная запись для входа в 365: <b><?=$data['login'];?>@admission.iitu.kz</b><br/>
        Временный пароль: <b>IITU-applicant-<?=date('Y');?></b>
    </p>
	<p>
		<a href="https://newcampus.iitu.kz/confirm/<?=$data['confirm_token']?>">
			Подтвердить E-mail
		</a>
	</p>

	<i>C уважением, Команда МУИТ</i>
</div>