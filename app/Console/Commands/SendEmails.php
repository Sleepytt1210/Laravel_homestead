<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class SendEmails extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'email:send {user}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send an email to a specified user';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $userId = $this->argument('user');
        dd($userId);
    }
}
