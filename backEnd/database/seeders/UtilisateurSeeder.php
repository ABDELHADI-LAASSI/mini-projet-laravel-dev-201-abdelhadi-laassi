<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UtilisateurSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Utilisateur::create([
            'nom' => 'laassi',
            'prenom' => 'abdelhadi',
            'login' => 'admin',
            'password' => Hash::make('admin'),
            'role' => 'admin',
        ]);


        \App\Models\Utilisateur::create([
            'nom' => 'smoughen',
            'prenom' => 'oussama',
            'login' => 'fadil',
            'password' => Hash::make('1111'),
            'role' => 'user',
        ]);

        \App\Models\Utilisateur::create([
            'nom' => 'diab',
            'prenom' => 'abderehman',
            'login' => 'teste',
            'password' => Hash::make('teste'),
            'role' => 'user',
        ]);

        \App\Models\Utilisateur::create([
            'nom' => 'mahboub',
            'prenom' => 'marwan',
            'login' => 'user',
            'password' => Hash::make('user'),
            'role' => 'user',
        ]);
    }
}
