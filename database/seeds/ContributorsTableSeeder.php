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
        $contributor = Contributor::create([
            'bar' => 'biz',
        ]);

        $contributor->user()->create([
            'profile_id'   => $contributor->id,
            'profile_type' => get_class($contributor),
            'name'         => 'Joe Blow',
            'email'        => 'joe@example.com',
            'password'     => bcrypt(123),
        ]);
    }
}
