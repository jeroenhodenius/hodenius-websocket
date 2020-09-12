<?php

namespace App\Console\Commands;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class CreateAdminUser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'admin:create-or-restore';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
        User::updateOrCreate([
            'name' => 'Jeroen Hodenius',
            'email' => 'jeroenhodenius@gmail.com'
        ],[
            'password' => Hash::make('.E]?v^2M55@snLEH'),
            'email_verified_at' => Carbon::parse('2020-09-01 00:00:00'),
            'remember_token' => Str::random(10),
        ]);

        $this->output->success('Created user Jeroen Hodenius');

        return true;
    }
}
