<?php

use App\Models\Admin;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = Admin::where('username', 'superadmin')->first();

        if (is_null($admin)) {
            $admin           = new Admin();
            $admin->name     = "Super Admin";
            $admin->nip      = '321231234421';
            $admin->email    = "superadmin@example.com";
            $admin->username = "superadmin";
            $admin->description = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit, obcaecati inventore. Laudantium ratione adipisci voluptate quo quod nisi ex tempore error quidem, placeat excepturi laboriosam iste quae culpa cum eaque!';
            $admin->foto = "/img/model_sementara/model1.jpeg";
            $admin->password = Hash::make('123123');
            $admin->save();
        }
    }
}
