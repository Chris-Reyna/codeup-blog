<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends BaseModel implements UserInterface, RemindableInterface {

	const ROLE_ADMIN = 1;
	const ROLE_AUTH = 2;

	public static $roles =array(
		array('id' => 1, 'name' => 'Admin'),
		array('id' => 2, 'name' => 'Auth')
	);

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password');
	
	/**
	*Relationship for many posts
	*/
	public function posts()
	{
		return $this->hasMany('Post');
	}
	/**
	 * Get the unique identifier for the user.
	 *
	 * @return mixed
	 */
	public function getAuthIdentifier()
	{
		return $this->getKey();
	}

	/**
	 * Get the password for the user.
	 *
	 * @return string
	 */
	public function getAuthPassword()
	{
		return $this->password;
	}

	/**
	 * Get the e-mail address where password reminders are sent.
	 *
	 * @return string
	 */
	public function getReminderEmail()
	{
		return $this->email;
	}

	public function isAdmin()
	{
		return $this->role_id == self::ROLE_ADMIN;
	}

	public function canManagePost($post)
	{
		
		return $this->isAdmin() || $this->id == $post->user_id; 
	}

}