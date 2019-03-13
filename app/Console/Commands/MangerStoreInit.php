<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;
use Jackiedo\DotenvEditor\Facades\DotenvEditor;
use Exception;

class MangerStoreInit extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'manager:store';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Setup project';

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
        $this->comment('Attempting to install or upgrade Spend.');
        $this->comment('Remember, you can always install/upgrade manually following the guide here:');

        if (!config('app.key')) {
            $this->info('Generating app key');
            Artisan::call('key:generate');
        } else {
            $this->comment('App key exists -- skipping');
        }

        $dbSetUp = false;
        while (!$dbSetUp) {
            try {
                // Make sure the config cache is cleared before another attempt.
                Artisan::call('config:clear');
                DB::reconnect()->getPdo();
                $dbSetUp = true;
            } catch (Exception $e) {
                $this->error($e->getMessage());
                $this->warn(PHP_EOL.'Store cannot connect to the database. Let\'s set it up.');
                $this->setUpDatabase();
            }
        }

        $this->info('Migrating database');
        Artisan::call('migrate', ['--force' => true]);

        $this->info('Public link file');
        Artisan::call('storage:link');

        if (!User::count()) {
//            $this->setUpAdminAccount();
            $this->info('Seeding initial data');
            Artisan::call('db:seed', ['--force' => true]);
        } else {
            $this->comment('Data seeded -- skipping');
        }

        $this->info('Setup queue');
        $this->setUpQueue();

        $this->info('Setup mail');
        $this->setUpMail();


//        $this->info('Compiling front-end stuff');
//        system('npm install');
//        system('npm run dev');

        $this->comment(PHP_EOL.'🎆  Success! Spend can now be run from localhost with `php artisan serve`.');
//        if (Setting::get('media_path')) {
//            $this->comment('You can also scan for media with `php artisan koel:sync`.');
//        }


        $this->comment('open the .env file in the root installation folder.');
        $this->comment('Thanks for using Spend. You rock!');
    }

    /**
     * Prompt user for valid database credentials and set up the database.
     */
    private function setUpDatabase()
    {
        $config = [
            'DB_CONNECTION' => '',
            'DB_HOST' => '',
            'DB_PORT' => '',
            'DB_DATABASE' => '',
            'DB_USERNAME' => '',
            'DB_PASSWORD' => '',
        ];

        $config['DB_CONNECTION'] = $this->choice(
            'Your DB driver of choice',
            [
                'mysql' => 'MySQL/MariaDB',
                'pqsql' => 'PostgreSQL',
                'sqlsrv' => 'SQL Server',
                'sqlite-e2e' => 'SQLite',
            ],
            'mysql'
        );
        if ($config['DB_CONNECTION'] === 'sqlite-e2e') {
            $config['DB_DATABASE'] = $this->ask('Absolute path to the DB file');
        } else {
            $config['DB_HOST'] = $this->anticipate('DB host', ['127.0.0.1', 'localhost']);
            $config['DB_PORT'] = (string) $this->ask('DB port (leave empty for default)', false);
            $config['DB_DATABASE'] = $this->anticipate('DB name', ['sales']);
            $config['DB_USERNAME'] = $this->anticipate('DB user', ['root']);
            $config['DB_PASSWORD'] = (string) $this->ask('DB password', false);
        }

        foreach ($config as $key => $value) {
            DotenvEditor::setKey($key, $value);
        }
        DotenvEditor::save();

        // Set the config so that the next DB attempt uses refreshed credentials
        config([
            'database.default' => $config['DB_CONNECTION'],
            "database.connections.{$config['DB_CONNECTION']}.host" => $config['DB_HOST'],
            "database.connections.{$config['DB_CONNECTION']}.port" => $config['DB_PORT'],
            "database.connections.{$config['DB_CONNECTION']}.database" => $config['DB_DATABASE'],
            "database.connections.{$config['DB_CONNECTION']}.username" => $config['DB_USERNAME'],
            "database.connections.{$config['DB_CONNECTION']}.password" => $config['DB_PASSWORD'],
        ]);
    }

    private function setUpQueue()
    {
        $config = [
            'QUEUE_DRIVER' => ''
        ];

        $config['QUEUE_DRIVER'] = $this->choice(
            'Your queue driver of choice',
            [
                'redis' => 'redis',
                'database' => 'database'
            ],
            'database'
        );

        foreach ($config as $key => $value) {
            DotenvEditor::setKey($key, $value);
        }
        DotenvEditor::save();

    }

    private function setUpMail()
    {

        $config = [
            'MAIL_DRIVER' => '',
            'MAIL_HOST'   => '',
            'MAIL_PORT'   => '',
            'MAIL_USERNAME'=> '',
            'MAIL_PASSWORD' =>'',
            'MAIL_ENCRYPTION' => '',
            'MAIL_FROM_ADDRESS' => '',
            'MAIL_FROM_NAME' => '',
        ];

        $config['MAIL_DRIVER'] = $this->ask('Mail driver', 'smtp');
        $config['MAIL_HOST'] = $this->ask('Mail Host', 'smtp.gmail.com');
        $config['MAIL_PORT'] = $this->ask('Mail Port', '587');
        $config['MAIL_USERNAME'] = $this->ask('Mail username', 'lib.utt.ht22@gmail.com');
        $config['MAIL_PASSWORD'] = $this->ask('Mail password', 'lib@2018');
        $config['MAIL_ENCRYPTION'] = $this->ask('Mail encryption', 'tls');
        $config['MAIL_FROM_ADDRESS'] = $this->ask('Mail from', 'lib.utt.ht22@gmail.com');
        $config['MAIL_FROM_NAME'] = $this->ask('Mail name', 'Dutch');
        foreach ($config as $key => $value) {
            DotenvEditor::setKey($key, $value);
        }
        DotenvEditor::save();

        // Set the config so that the next Mail attempt uses refreshed credentials
        config([
            'mail.driver' => $config['MAIL_DRIVER'],
            'mail.host' => $config['MAIL_HOST'],
            'mail.port' => $config['MAIL_PORT'],
            'mail.username' => $config['MAIL_USERNAME'],
            'mail.password' => $config['MAIL_PASSWORD'],
            'mail.encryption' => $config['MAIL_ENCRYPTION'],
            'mail.from.address' => $config['MAIL_FROM_ADDRESS'],
            'mail.from.name' => $config['MAIL_FROM_NAME']
        ]);
    }
}
