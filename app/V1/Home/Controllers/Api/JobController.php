<?php

namespace App\V1\Home\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Jobs\OutputLogJob;
use Illuminate\Http\Request;
use Redis;
use Log;


class JobController extends Controller
{
    public function addJobs(Request $request)
    {
        $start = $request->get('start', 0);
        $job = new OutputLogJob($start);
        $outputLogJob = $job->onQueue('output_log');
        $this->dispatch($outputLogJob);
        return 'success!';
    }

    public function redisTest(Request $request)
    {
        Log::info('-------------info');
        Log::error('-------------error');
        Log::warning('-------------warning');
        Log::debug('-------------debug');
        $arr = [
            'url' => $request->url(),
            'fullUrl' => $request->fullUrl(),
            'root' => $request->root(),
            'getHost' => $request->getHost(),
            'replace' => str_replace($request->root(), '', $request->fullUrl()),
        ];

        $md5Url = md5($arr['replace']);

        $value = json_encode(['name' => 'chenleieeeeeeee']);

        Redis::setex($md5Url, 60, $value);

        return Redis::get($md5Url);
    }
}