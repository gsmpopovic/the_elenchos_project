<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class createAdmins extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'create:admins';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $admin_emails = config("admin.emails");

        foreach ($admin_emails as $email) {

            $this->info("Creating admin for " . $email);
            $this->call('voyager:admin', [
                'email' => $email,
                '--create' => 1,
            ]);
        }

    }
}
