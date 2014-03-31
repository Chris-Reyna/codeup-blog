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
	    $utc = Carbon::createFromFormat($this->getDateFormat(), $value);
	    return $utc->setTimezone('America/Chicago');
	}
	/*save username as lower case string*/
	public function setUsernameAttribute($value)
	{
	    $this->attributes['username'] = strtolower($value);
	}
	/*save password as hash*/
	public function setPasswordAttribute($value)
	{
	    $this->attributes['password'] = Hash::make($value);
	}


}