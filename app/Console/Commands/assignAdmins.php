<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class assignAdmins extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'define:admins';

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

        // this assumes that the users already exist

        $admin_emails = config("admin.emails");

        foreach ($admin_emails as $email) {

            $this->info("Defining admin for " . $email);

            $this->call('voyager:admin', [
                'email' => $email,
            ]);
        }

    }
}
