<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NoteSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('notes')->insert([
            [
                'title' => 'Configuration',
                'content' => 'The configuration for Laravel\'s database services is located in your application\'s 
                config/database.php configuration file. In this file, you may define all of your database connections, 
                as well as specify which connection should be used by default. Most of the configuration options 
                within this file are driven by the values of your application\'s environment variables. 
                Examples for most of Laravel\'s supported database systems are provided in this file.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Sneat Template',
                'content' => 'Le template Sneat est utilisé pour styliser le dashboard...',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Bibocom Digital',
                'content' => 'Projet de gestion des notes développé par Bibocom Digital...',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
