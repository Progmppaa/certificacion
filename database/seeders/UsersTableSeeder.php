<?php
namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'Pedro Alvarez', 
            'email' => 'admin@rdev.com',
            'password' => bcrypt('123456')
        ]);
        $role = Role::create(['name' => 'Root']);
        
        $permissions = Permission::pluck('id','id')->all();
        $role->syncPermissions($permissions);
        $user->assignRole([$role->id]);

        $roles = [
            'Admin',
            'Gerente',
            'User'
        ];
        foreach ($roles as $r) {
            Role::create(['name' => $r]);
        }
        $user = User::create([
            'name' => 'Prueba', 
            'email' => 'prueba@minaguas.gob.ve',
            'password' => bcrypt('123456')
        ])->assignRole('User');;
    }
}
