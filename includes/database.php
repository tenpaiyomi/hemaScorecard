<?php
/*******************************************************************************
	Database connection constants for mysql

*******************************************************************************/

	define("PRIMARY_DATABASE","ScorecardV5");
	define("DATABASE_HOST","db");
	define("DATABASE_USER", $_ENV['MYSQL_USER']);
	define("DATABASE_PASSWORD", $_ENV['MYSQL_PASSWORD']);
	define("DEPLOYMENT", $_ENV['DEPLOYMENT'] ?? DEPLOYMENT_UNKNOWN);

	define("HEMA_RATINGS_TOKEN","");
	define("HEMA_RATINGS_BY_NAME","");
	define("HEMA_RATINGS_BY_ID","");

// END OF FILE /////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////
