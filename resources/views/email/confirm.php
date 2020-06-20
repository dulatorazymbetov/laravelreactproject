<div class="well col-sm-8">
    Поздравляем с регистрацией на портале newcampus.iitu.kz!<br />
	Для работы в портале необходимо подтвердить ваш email по ссылке.<br />
	<p>
		Учетная запись: <b><?=$data['login'];?></b><br/>
		Пароль: <b><?=$data['password'];?></b>
	</p>
	<p>
		<a href="https://newcampus.iitu.kz/confirm/<?=$data['confirm_token']?>">
			Подтвердить E-mail
		</a>
	</p>

	<i>C уважением, Команда МУИТ</i>
</div>