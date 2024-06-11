<?php

use App\Models\Admin;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    public function run()
    {
        $admin = Admin::where('username', 'superadmin')->first();

        if (is_null($admin)) {
            $admin           = new Admin();
            $admin->name     = "Pak Camat";
            $admin->nip      = '321231234421';
            $admin->email    = "superadmin@example.com";
            $admin->username = "superadmin";
            $admin->description = 'Tugas pelayanan kecamatan meliputi berbagai aspek yang bertujuan untuk memberikan layanan administratif dan publik kepada masyarakat di tingkat kecamatan';
            $admin->password = Hash::make('123123');
            $admin->save();
        }
    }
}
