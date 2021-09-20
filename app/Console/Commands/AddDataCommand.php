<?php

namespace App\Console\Commands;

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
        $days = [
            ['name' => 'E hënë'],
            ['name' => 'E martë'],
            ['name' => 'E merkure'],
            ['name' => 'E enjte'],
            ['name' => 'E premte'],
            ['name' => 'E shtune'],
            ['name' => 'E diel'],
        ];
        $medias = [
            ['telegram' => 0,'instagram'=>0,'facebook'=>0,'youtube'=>0],

        ];

        $users = [
            ['name' => 'Rijad Morina', 'email' => 'rijadmorinax8@gmail.com','password' => bcrypt('12345678')],
        ];

        if (User::all()->count() > 0) {
            $this->info('Data already exists inside users table');
        } else {
            User::insert($users);
            $this->info('Successfully created users');
        }

        if (Day::all()->count() > 0) {
            $this->info('Data already exists inside days table');
        } else {
            Day::insert($days);
            $this->info('Successfully created days');
        }

        if (Media::all()->count() > 0) {
            $this->info('Data already exists inside medias table');
        } else {
            Media::insert($medias);
            $this->info('Successfully created medias');
        }




        return 0;
    }
}
