
	<?php

	class Invoices extends \Phalcon\Mvc\Model
	{

		public function initialize()
		{
			// add relations and initialize other stuff
		}

		protected static function _createKey($conditions, $params)
		{
			// .. create a cache key based on the parameters
		}

		public function getInvoicesCustomers($conditions, $params=null)
		{
			$phql = "SELECT Invoices.*, Customers.*
			FROM Invoices JOIN Customers WHERE " . $conditions;

			$query = $this->getModelsManager()->executeQuery($phql);

			$query->setCache(array(
				"key" => self::_createKey($conditions, $params),
				"lifetime" => 300
			));

			return $query->execute($params);
		}

	}

