<?php

use Carbon\Carbon;

class BaseModel extends Eloquent{



	/**
	*Setting an accessor to change utc to cst using carbon library */
    public function getCreatedAtAttribute($value)
	{
	    $utc = Carbon::createFromFormat($this->getDateFormat(), $value);
	    return $utc->setTimezone('America/Chicago');
	}
	public function getUpdatedAtAttribute($value)
	{
	    $utc = Carbon::updateFromFormat($this->getDateFormat(), $value);
	    return $utc->setTimezone('America/Chicago');
	}


}