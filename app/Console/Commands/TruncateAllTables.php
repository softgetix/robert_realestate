<?php
namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;

class TruncateAllTables extends Command
{
    protected $signature = 'truncate:tables';
    protected $description = 'Truncate all tables in the database';

    public function handle()
    {
        if (App::environment('local')) {
            DB::statement('SET FOREIGN_KEY_CHECKS=0');
            if ($this->confirm('Do you really want to truncate all tables? This action cannot be undone.')) {
                $this->truncateTables();
            } else {
                $this->info('Operation aborted.');
            }
            

        } else {
            $this->info('This command can only be executed in the local environment.');
        }
    }

    protected function truncateTables()
    {
        $tables = DB::select('SHOW TABLES');

        foreach ($tables as $table) {
            $tableName = reset($table);
            DB::table($tableName)->truncate();
        }
        DB::statement('SET FOREIGN_KEY_CHECKS=1');
        $this->info('All tables have been truncated.');
    }
}
