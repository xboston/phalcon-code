
	<?php

	class CustomNodeVisitor
	{

		protected $_initial = 0;

		protected $_final = 25000;

		public function visit($node)
		{
			switch ($node['type']) {

				case 'binary-op':

					$left = $this->visit($node['left']);
					$right = $this->visit($node['right']);
					if (!$left || !$right) {
						return false;
					}

					if ($left=='id') {
						if ($node['op'] == '>')	{
							$this->_initial = $right;
						}
						if ($node['op'] == '=')	{
							$this->_initial = $right;
						}
						if ($node['op'] == '>=')	{
							$this->_initial = $right;
						}
						if ($node['op'] == '<')	{
							$this->_final = $right;
						}
						if ($node['op'] == '<=')	{
							$this->_final = $right;
						}
					}
					break;

				case 'qualified':
					if ($node['name'] == 'id') {
						return 'id';
					}
					break;

				case 'literal':
					return $node['value'];

				default:
					return false;
			}
		}

		public function getInitial()
		{
			return $this->_initial;
		}

		public function getFinal()
		{
			return $this->_final;
		}
	}

