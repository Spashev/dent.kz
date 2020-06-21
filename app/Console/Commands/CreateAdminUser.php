<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class CreateAdminUser extends Command
{
    protected $name;
    protected $email;
    protected $password;

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'create:superuser';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This command created super user';

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
     * @return mixed
     */
    public function handle()
    {
        $this->name = $this->ask('What is your name?');
        $this->email = $this->ask('What is your email?');
        $this->password = $this->ask('Create password?');
    }
}
