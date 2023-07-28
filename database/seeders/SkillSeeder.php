<?php

namespace Database\Seeders;
use App\Models\Skill;
use Illuminate\Database\Seeder;
class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Skill::create([
            "skills" => "js"
        ]);
        Skill::create([
            "skills" => "css"
        ]);
        Skill::create([
            "skills" => "html"
        ]);
        Skill::create([
            "skills" => "php"
        ]);
    }
}
