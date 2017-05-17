<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Log;

class OutputLogJob implements ShouldQueue
{
    use InteractsWithQueue, Queueable, SerializesModels;

    private $start;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($start)
    {
        $this->start = $start;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        Log::info('================开始啦222!================');
        $times = 0;
        $count = $this->start;
        while ($times < 100) {
            Log::info('------------------------------------   ' . $count);
            $times++;
            $count++;
            sleep(1);
        }
        $this->delete();
    }
}
