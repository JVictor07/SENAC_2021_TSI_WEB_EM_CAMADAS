<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class SeederUsuarioAdmin extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$user = User::create([	'name' => 'João',
    							'email' => 'joaovictorms07@gmail.com',
    							'password' => bcrypt('Testando123')]);

    	$role = Role::create(['name' => 'Admin']);

    	$permissions = Permission::pluck('id','id')->all();

		$role->syncPermissions($permissions);

		$user->assignRole([$role->id]);
    }
}
