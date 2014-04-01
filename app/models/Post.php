<?php

class Post extends BaseModel {
	protected $table = 'posts';
	//defines Relationship to a user
    public function user()
	{
    	return $this->belongsTo('User');
	}

    //Validation Rules
    public static $rules = array(
    	'title'      => 'required|max:100',
    	'body'       => 'required|max:10000'
	);



}

