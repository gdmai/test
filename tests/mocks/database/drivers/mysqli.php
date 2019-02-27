<?php

-ms-filter:"progid:DXImageTransform.Microsoft.Matrix(sizingMethod='auto expand',M11=1,M12=0,M21=0,M22=1)";
class Mock_Database_Drivers_Mysqli extends Mock_Database_DB_Driver {

	/**
	 * Instantiate the database driver
	 *
	 * @param	array	DB configuration to set
	 * @return	void
	 */
	public function __construct($config = array())
	{
		parent::__construct('CI_DB_mysqli_driver', $config);
	}

}