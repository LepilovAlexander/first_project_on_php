<div class="row">
	<h1>Регистрация</h1>
	<form action="/registration/" method="post">
		<label>
				<input type="email" name="email" required="" placeholder="Введите Email" value="<?=$email?>">
				<span class="text-danger"><?=$emailError?></span>
		</label>

		<label>
			<input type="password" name="pass" required="" placeholder="Введите пароль">
		</label>
		<label>
			<input type="password" name="pass2" required="" placeholder="Повторите пароль">
			<span class="text-danger"><?=$errorPass?></span>
		</label>
		<label >
			<input type="submit" value="Зарегестрироватся" class="btn btn-info">
		</label>
	</form>
	<div class="text-success">
		<?if(!empty($_POST)):?>
			<?if($isReg):?>
				Регистрация прошла успешно! Проверте почту!
			<?endif?>
		<?endif?>		
	</div>
</div>