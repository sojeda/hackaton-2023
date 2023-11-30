<?php

declare(strict_types=1);

namespace Database\Seeders;

use Database\Factories\UserFactory;
use Domain\Users\Models\User;
use Illuminate\Database\Seeder;

class AdminUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        UserFactory::new()->createMany([[
            'name' => 'Caro Kurin',
            'email' => 'carolina.kurin@lightit.io'
        ], [
            'name' => 'Eze Flores',
            'email' => 'ezequiel.flores@lightit.io'
        ], [
                'name' => 'Mimo Martinicorena',
                'email' => 'guillermo.martinicorena@lightit.io'
        ], [
            'name' => 'Joaco Viera',
            'email' => 'joaquin.viera@lightit.io'
        ], [
            'name' => 'Lucas Maurojorge',
            'email' => 'lucas.maurojorge@lightit.io'
        ], [
            'name' => 'Sergio Ojeda',
            'email' => 'sergio@lightit.io'
        ], [
            'name' => 'Sol Lipanovich',
            'email' => 'sol.lipanovich@lightit.io'
        ],
        ]);

        $this->command->info('Users created');
    }
}
