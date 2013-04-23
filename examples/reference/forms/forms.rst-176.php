
	<?php

	$robot = Robots::findFirst();

	$form = new Form($robot);

	$form->add(new Text("name"));

	$form->add(new Text("year"));

