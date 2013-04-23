
	<?php

	use Phalcon\Forms\Element\Text,
		Phalcon\Validation\Validator\PresenceOf,
		Phalcon\Validation\Validator\StringLength;

	$name = new Text("name");

	$name->addValidator(new PresenceOf(array(
		'message' => 'Поле Name обязательно для заполнения'
	)));

	$name->addValidator(new StringLength(array(
		'min' => 10,
		'messageMinimum' => 'Значение поля Name слишком короткое'
	)));

	$form->add($name);

