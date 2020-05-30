<?php
	function dbdata()
	{
		return array(
			
			//
				//"host" 			=> "127.0.0.1",
			//For Gearhost real running DB
				//"host"      	=>"den1.mysql2.gear.host",
				//"user" 		=> "easycheckdb",
			//For New Gearhost easycheckdbcopy 30-05-2020
				"host"      	=>"den1.mysql2.gear.host",
				"user" 			=> "easycheckdbcopy",

			//Password for 127.0.0.1
				//"password" 	=> "Ox61_b2xx-9z",
			//Password for gearhost
				//"password" => "Pz17-o074e~c",
			//Password for gearhost, new easycheckdbcopy 30-05-2020
				"password" => "Hg2kvg?2M8-8",

			//DB real running DB
				//"database"  	=> "easycheckdb",
			//DB New 30-05-2020 easycheckdbcopy
				"database"		=> "easycheckdbcopy",

			"driver"    	=> "mysql",
		    "charset"   	=> "utf8"
		);
	}
?>