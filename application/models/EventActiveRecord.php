<?php
class EventActiveRecord extends ActiveRecord\Model
{
	
	# explicit table name since our table is not "EventActiveRecord"
	static $table_name = 'event';

}

?>