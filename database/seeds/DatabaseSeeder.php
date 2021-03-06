<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $this->truncateTables([
            'entidades',
            'noticias',
            'cursos',
            'expositores',
            'fotos',
            'eventos',
            'artistas',
        ]);

        $this->call(entidadesSeeder::class);
        $this->call(NoticiasSeeder::class);
        $this->call(CursosSeeder::class);
        $this->call(ExpositoresSeeder::class);
          $this->call(FotosSeeder::class);
          $this->call(EventoSeeder::class);
          $this->call(ArtistaSeeder::class);
    }

    public function truncateTables(array $tables)
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0;');

        foreach ($tables as $table) {
            DB::table($table)->truncate();
        }

        DB::statement('SET FOREIGN_KEY_CHECKS = 1;');
    }
}
