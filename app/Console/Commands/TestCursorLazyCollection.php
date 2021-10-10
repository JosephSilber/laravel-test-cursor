<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class TestCursorLazyCollection extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'test:cursor';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Tests the query builder\'s cursor() method';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        User::cursor()->each(function ($user) {
            $this->line($user->name);
        });
    }
}
