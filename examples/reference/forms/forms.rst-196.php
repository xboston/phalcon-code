	
	<?php

	$form->bind($_POST, $robot);

	// Проверка правильности введённых данных формы
	if ($form->isValid()) {

		// Сохранение сущности
		$robot->save();
	}

