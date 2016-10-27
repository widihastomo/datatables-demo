<?php

use Illuminate\Database\Seeder;

class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert(
        	[
        		[
        			'title'			=> '7 Keajaiban Rezeki',
        			'author'		=> 'Ippho Santosa',
        			'publisher'		=> 'Elex Media Komputindo'
        		],
        		[
        			'title'			=> 'Khilafah',
        			'author'		=> 'Felix S Shiauw',
        			'publisher'		=> 'Al Fatih Press'
        		],
        		[
        			'title'			=> 'Do',
        			'author'		=> 'Handoko Hendroyono',
        			'publisher'		=> 'Gramedia'
        		],
        		[
        			'title'			=> 'Ketika Mozard Kecil Memainkan Jemarinya',
        			'author'		=> 'It Pin Arifin',
        			'publisher'		=> 'Gramedia'
        		]
        	]
        );
    }
}
