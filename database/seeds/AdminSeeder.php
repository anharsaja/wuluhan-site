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
            $admin->email    = "superadmin@example.com";
            $admin->username = "superadmin";
            $admin->description = Str::random(30);
            $admin->telepon = "084084084084";
            $admin->experience = "5 Tahun";
            $admin->foto = "/img/model_sementara/model1.jpeg";
            $admin->password = Hash::make('123123');
            $admin->save();
        }
    }
}
