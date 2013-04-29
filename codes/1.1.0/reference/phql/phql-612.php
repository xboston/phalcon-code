<?php

$builder->from('Robots')
// 'SELECT Robots.* FROM Robots'

// 'SELECT Robots.*, RobotsParts.* FROM Robots, RobotsParts'
$builder->from(array('Robots', 'RobotsParts'))

// 'SELECT * FROM Robots'
$phql = $builder->columns('*')
                ->from('Robots')

// 'SELECT id FROM Robots'
$builder->columns('id')
        ->from('Robots')

// 'SELECT id, name FROM Robots'
$builder->columns(array('id', 'name'))
        ->from('Robots')

// 'SELECT Robots.* FROM Robots WHERE Robots.name = "Voltron"'
$builder->from('Robots')
        ->where('Robots.name = "Voltron"')

// 'SELECT Robots.* FROM Robots WHERE Robots.id = 100'
$builder->from('Robots')
        ->where(100)

// 'SELECT Robots.* FROM Robots WHERE Robots.type = "virtual" AND Robots.id > 50'
$builder->from('Robots')
        ->where('type = "virtual"')
        ->andWhere('id > 50')

// 'SELECT Robots.* FROM Robots WHERE Robots.type = "virtual" OR Robots.id > 50'
$builder->from('Robots')
        ->where('type = "virtual"')
        ->orWhere('id > 50')

// 'SELECT Robots.* FROM Robots GROUP BY Robots.name'
$builder->from('Robots')
        ->groupBy('Robots.name')

// 'SELECT Robots.* FROM Robots GROUP BY Robots.name, Robots.id'
$builder->from('Robots')
        ->groupBy(array('Robots.name', 'Robots.id'))

// 'SELECT Robots.name, SUM(Robots.price) FROM Robots GROUP BY Robots.name'
$builder->columns(array('Robots.name', 'SUM(Robots.price)'))
    ->from('Robots')
    ->groupBy('Robots.name')

// 'SELECT Robots.name, SUM(Robots.price) FROM Robots
// GROUP BY Robots.name HAVING SUM(Robots.price) > 1000'
$builder->columns(array('Robots.name', 'SUM(Robots.price)'))
    ->from('Robots')
    ->groupBy('Robots.name')
    ->having('SUM(Robots.price) > 1000')

// 'SELECT Robots.* FROM Robots JOIN RobotsParts');
$builder->from('Robots')
    ->join('RobotsParts')

// 'SELECT Robots.* FROM Robots JOIN RobotsParts AS p');
$builder->from('Robots')
    ->join('RobotsParts', null, 'p')

// 'SELECT Robots.* FROM Robots JOIN RobotsParts ON Robots.id = RobotsParts.robots_id AS p');
$builder->from('Robots')
    ->join('RobotsParts', 'Robots.id = RobotsParts.robots_id', 'p')

// 'SELECT Robots.* FROM Robots
// JOIN RobotsParts ON Robots.id = RobotsParts.robots_id AS p
// JOIN Parts ON Parts.id = RobotsParts.parts_id AS t'
$builder->from('Robots')
    ->join('RobotsParts', 'Robots.id = RobotsParts.robots_id', 'p')
    ->join('Parts', 'Parts.id = RobotsParts.parts_id', 't')

// 'SELECT r.* FROM Robots AS r'
$builder->addFrom('Robots', 'r')

// 'SELECT Robots.*, p.* FROM Robots, Parts AS p'
$builder->from('Robots')
    ->addFrom('Parts', 'p')

// 'SELECT r.*, p.* FROM Robots AS r, Parts AS p'
$builder->from(array('r' => 'Robots'))
        ->addFrom('Parts', 'p')

// 'SELECT r.*, p.* FROM Robots AS r, Parts AS p');
$builder->from(array('r' => 'Robots', 'p' => 'Parts'))

// 'SELECT Robots.* FROM Robots LIMIT 10'
$builder->from('Robots')
    ->limit(10)

// 'SELECT Robots.* FROM Robots LIMIT 10 OFFSET 5'
$builder->from('Robots')
        ->limit(10, 5)

// 'SELECT Robots.* FROM Robots WHERE id BETWEEN 1 AND 100
$builder->from('Robots')
        ->betweenWhere('id', 1, 100);

// 'SELECT Robots.* FROM Robots WHERE id IN (1, 2, 3)
$builder->from('Robots')
        ->inWhere('id', array(1, 2, 3));

// 'SELECT Robots.* FROM Robots WHERE id NOT IN (1, 2, 3)
$builder->from('Robots')
        ->notInWhere('id', array(1, 2, 3));

