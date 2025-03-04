<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            LanguageSeeder::class,
            RegionSeeder::class,
            PermissionSeeder::class,
            RoleSeeder::class,
            UserSeeder::class,
            PosSeeder::class,
            PollSeeder::class,
            StuffSeeder::class,
            ParticipantSeeder::class,
            QuestionThemeSeeder::class,
            QuestionSeeder::class,
            QuestionTranslationSeeder::class,
            OptionSeeder::class,
            OptionTranslationSeeder::class,
            PollQuestionSeeder::class,
        ]);
    }
}
