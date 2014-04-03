<?php
class RoleTableSeeder extends DatabaseSeeder {

/**
* Run the database seeds.
*
* @return void
*/
    public function run()
    {
        DB::table('roles')->delete();
        $role1 = new Role();
		$role1->name = 'Admin';
        $role1->save();

        $role2 = new Role();
		$role2->name = 'Auth';
        $role2->save();

    }
}