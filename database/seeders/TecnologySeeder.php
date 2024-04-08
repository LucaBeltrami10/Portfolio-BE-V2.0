<?php

namespace Database\Seeders;

use App\Models\Tecnology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TecnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tecnologies = [
            [
                'tecnology' => 'HTML',
                'description' => 'Linguaggio di markup per la creazione di pagine web.',
                'documentation' => 'https://developer.mozilla.org/it/docs/Web/HTML',
                'image' => 'html_logo.png',
            ],
            [
                'tecnology' => 'CSS',
                'description' => 'Linguaggio per lo stile delle pagine web.',
                'documentation' => 'https://developer.mozilla.org/it/docs/Web/CSS',
                'image' => 'css_logo.png',
            ],
            [
                'tecnology' => 'JavaScript',
                'description' => 'Linguaggio di programmazione per la creazione di pagine web dinamiche.',
                'documentation' => 'https://developer.mozilla.org/it/docs/Web/JavaScript',
                'image' => 'javascript_logo.png',
            ],
            [
                'tecnology' => 'Vue.js',
                'description' => 'Framework JavaScript progressivo per la creazione di interfacce utente.',
                'documentation' => 'https://vuejs.org/',
                'image' => 'vuejs_logo.png',
            ],
            [
                'tecnology' => 'Bootstrap',
                'description' => 'Framework CSS per lo sviluppo di interfacce utente responsive e mobile-first.',
                'documentation' => 'https://getbootstrap.com/',
                'image' => 'bootstrap_logo.png',
            ],
            [
                'tecnology' => 'Vite',
                'description' => 'Build tool leggero per lo sviluppo di applicazioni web moderne.',
                'documentation' => 'https://vitejs.dev/',
                'image' => 'vite_logo.png',
            ],
            [
                'tecnology' => 'PHP',
                'description' => 'Linguaggio di scripting server-side per lo sviluppo web.',
                'documentation' => 'https://www.php.net/docs.php',
                'image' => 'php_logo.png',
            ],
            [
                'tecnology' => 'Laravel',
                'description' => 'Framework PHP per lo sviluppo di applicazioni web.',
                'documentation' => 'https://laravel.com/docs',
                'image' => 'laravel_logo.png',
            ],
            [
                'tecnology' => 'SQL',
                'description' => 'Linguaggio per la gestione di basi di dati relazionali.',
                'documentation' => 'https://dev.mysql.com/doc/sql-ref.html',
                'image' => 'sql_logo.png',
            ],
            [
                'tecnology' => 'PhpMyAdmin',
                'description' => 'Interfaccia web per la gestione di database MySQL.',
                'documentation' => 'https://www.phpmyadmin.net/docs/',
                'image' => 'phpmyadmin_logo.png',
            ],
            [
                'tecnology' => 'MySQL',
                'description' => 'Sistema di gestione di basi di dati relazionali open source.',
                'documentation' => 'https://dev.mysql.com/doc/',
                'image' => 'mysql_logo.png',
            ],
        ];

        foreach ($tecnologies as $tecnology) {
            Tecnology::create($tecnology);
        }
    }
}