
	<?php

	class Robots extends Phalcon\Mvc\Model
	{
		public static function find($parameters=null)
		{

			if (!is_array($parameters)) {
				$parameters = array($parameters);
			}

			$builder = new CustomQueryBuilder($parameters);
			$builder->from(get_called_class())

			if (isset($parameters['bind'])) {
				return $builder->getQuery()->execute($parameters['bind']);
			} else {
				return $builder->getQuery()->execute();
			}

		}
	}
