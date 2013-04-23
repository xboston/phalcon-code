
	<?php

	class Robots extends Phalcon\Mvc\Model
	{

		protected static function _createKey($parameters)
		{
			// .. create a cache key based on the parameters
		}

		public static function find($parameters=null)
		{

			//Convert the parameters to an array
			if (!is_array($parameters))) {
				$parameters = array($parameters);
			}

			//Check if a cache key wasn't passed
			//and create the cache parameters
			if (!isset($parameters['cache'])) {
				$parameters['cache'] = array(
					"key" => self::_createKey($parameters),
					"lifetime" => 300
				);
			}

			return parent::find($parameters);
		}

		public static function findFirst($parameters=null)
		{
			//...
		}

	}

