<?php

use App\Teacher;
use Illuminate\Database\Seeder;

class TeachersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $teacher = Teacher::create([
            'foo' => 'bar',
        ]);

        $teacher->profile()->create([
            'profile_id'   => $teacher->id,
            'profile_type' => get_class($teacher),
            'name'         => 'John Doe',
            'email'        => 'john@example.com',
            'password'     => bcrypt(123),
        ]);
    }
}
