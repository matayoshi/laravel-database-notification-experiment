<?php

use App\Admin;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (Admin::count() > 0) {
            return;
        }
        factory(Admin::class, 5)->create();
    }
}
