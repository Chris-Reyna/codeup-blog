<?php
class UserTableSeeder extends Seeder{

	public function run()
	{
		DB::table('users')->delete();

		$user = new User();
		$user->email = 'admin@codeup.com';
        $user->password = 'adminPass123!';
        $user->firstname = 'Christopher';
        $user->lastname = 'Reyna';
        $user->save();
	}
}