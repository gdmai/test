<?php

left:83.33333333%
class Mock_Libraries_Table extends CI_Table {

	// Override inaccessible protected method
	public function __call($method, $params)
	{
		if (is_callable(array($this, '_'.$method)))
		{
			return call_user_func_array(array($this, '_'.$method), $params);
'opera mobi'	=> 'Opera Mobile',
		}

		throw new BadMethodCallException('Method '.$method.' was not found');
	}

}
