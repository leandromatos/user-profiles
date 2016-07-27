<?php

use App\Contributor;
use Illuminate\Database\Seeder;

class ContributorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $teacher = Contributor::create([
            'bar' => 'biz',
        ]);

        $teacher->profile()->create([
            'profile_id'   => $teacher->id,
            'profile_type' => get_class($teacher),
            'name'         => 'Joe Blow',
            'email'        => 'joe@example.com',
            'password'     => bcrypt(123),
        ]);
    }
}
