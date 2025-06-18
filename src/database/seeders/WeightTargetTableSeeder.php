<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\WeightLog;
use App\Models\WeightTarget;


class WeightTargetTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
        $param = [
            'user_id' => $user->id,
            'target_weight' => '60'
        ];
        DB::table('weight_target')->insert($param);

        WeightLog::factory()->count(35)->create([
            'user_id' => $user->id,
        ]);

    }
}
