<?php

namespace App\Console\Commands;

use App\Models\Book;
use App\Models\Category;
use App\Models\Day;
use App\Models\Media;
use App\Models\User;
use Illuminate\Console\Command;

class AddDataCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:data';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Creates data when first running';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {

        //users

        $users = [
            ['name' => 'Rijad Morina', 'email' => 'rijadmorinax8@gmail.com','password' => bcrypt('12345678')],
        ];


        if (User::all()->count() > 0) {
            $this->error('FAILED - Data already exists inside users table');
        } else {
            User::insert($users);
            $this->info('Successfully created users');
        }

        //days

        $days = [
            ['name' => 'E hënë'],
            ['name' => 'E martë'],
            ['name' => 'E merkure'],
            ['name' => 'E enjte'],
            ['name' => 'E premte'],
            ['name' => 'E shtune'],
            ['name' => 'E diel'],
        ];


        if (Day::all()->count() > 0) {
            $this->error('FAILED - Data already exists inside days table');
        } else {
            Day::insert($days);
            $this->info('Successfully created days');
        }

        //medias

        $medias = [
            ['telegram' => 0,'instagram'=>0,'facebook'=>0,'youtube'=>0],

        ];

        if (Media::all()->count() > 0) {
            $this->error('FAILED - Data already exists inside medias table');
        } else {
            Media::insert($medias);
            $this->info('Successfully created medias');
        }

        //category

        $categories = [
            ['id' => '1','name' => 'Mburoja e Muslimanit','slug' => 'mburoja-e-muslimanit'],
        ];


        if (Category::all()->count() > 0) {
            $this->error('FAILED - Data already exists inside categories table');
        } else {
            Category::insert($categories);
            $this->info('Successfully categories books');
        }

        //books

        $books = [
            ['name' => 'Mëngjes dhe mbrëmje','slug' => 'mëngjes-dhe-mbrëmje', 'category_id' => '1'],
            ['name' => 'Shtëpia dhe familja','slug' => 'shtëpia-dhe-familja', 'category_id' => '1'],
            ['name' => 'Udhëtim','slug' => 'udhëtim', 'category_id' => '1'],
            ['name' => 'Ushqim dhe pije','slug' => 'ushqim-dhe-pije', 'category_id' => '1'],
            ['name' => 'Namazi','slug' => 'namazi', 'category_id' => '1'],
            ['name' => 'Falënderimi ndaj Allahut','slug' => 'falënderimi-ndaj-Allahut', 'category_id' => '1'],
            ['name' => 'Mirësjellja','slug' => 'mirësjellja', 'category_id' => '1'],
            ['name' => 'Haxh dhe Umre','slug' => 'haxh-dhe-umre', 'category_id' => '1'],
            ['name' => 'Natyra','slug' => 'natyra', 'category_id' => '1'],
            ['name' => 'Sëmundja dhe vdekja','slug' => 'sëmundja-dhe-vdekja', 'category_id' => '1'],
            ['name' => 'Gëzim dhe shqetësim','slug' => 'gëzim-dhe-shqetësim', 'category_id' => '1'],

        ];


        if (Book::all()->count() > 0) {
            $this->error('FAILED - Data already exists inside books table');
        } else {
            Book::insert($books);
            $this->info('Successfully created books');
        }


        

        return 0;
    }
}
