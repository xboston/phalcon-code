
	<?php

	public static function find($parameters=null)
	{

		//Create an unique key based on the parameters
		$key = self::_createKey($parameters);

		if (!isset(self::$_cache[$key])) {

			//We're using APC as second cache
			if (apc_exists($key)) {

				$data = apc_fetch($key);

				//Store the result in the memory cache
				self::$_cache[$key] = $data;

				return $data;
			}

			//There are no memory or apc cache
			$data = parent::find($parameters);

			//Store the result in the memory cache
			self::$_cache[$key] = $data;

			//Store the result in APC
			apc_store($key, $data);

			return $data;
		}

		//Return the result in the cache
		return self::$_cache[$key];
	}

