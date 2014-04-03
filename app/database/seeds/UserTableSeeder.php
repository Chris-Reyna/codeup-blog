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

        $user2 = new User();
	$user2->email = 'auth@codeup.com';
        $user2->password = 'authPass123!';
        $user2->firstname = 'Brandon';
        $user2->lastname = 'Beidel';
        $user2->role_id = 2;
        $user2->save();
	}
}