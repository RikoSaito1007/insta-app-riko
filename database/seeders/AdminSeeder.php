<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User; // this rep
use Illuminate\Support\Facades\Hash; //use for hashing a password

class AdminSeeder extends Seeder
{
    private $user;

    public function __construct(User $user){
        $this->user = $user;
    }
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->user->name = 'Administrator1212';
        $this->user->email = 'administor12212@gmail.com';
        $this->user->password = Hash::make('administor1212');
        $this->user->role_id = User::ADMIN_ROLE_ID;
        $this->user->save();
     }
}
