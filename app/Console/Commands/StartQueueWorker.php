<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class StartQueueWorker extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'queue:work-custom';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Start the queue worker for processing mail jobs';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('Starting queue worker...');
        $this->info('Press Ctrl+C to stop the worker');

        // Start the queue worker
        $this->call('queue:work', [
            '--timeout' => 60,
            '--tries' => 3,
            '--sleep' => 3,
        ]);
    }
}
