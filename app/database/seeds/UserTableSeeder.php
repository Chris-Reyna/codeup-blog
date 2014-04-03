<?php
class UserTableSeeder extends DatabaseSeeder{

	public function run()
	{
		DB::table('users')->delete();

		$user = new User();
		$user->email = 'admin@codeup.com';
        $user->password = 'adminPass123!';
        $user->firstname = 'Christopher';
        $user->lastname = 'Reyna';
        $user->role_id = 1;
        $user->save();
	}
}