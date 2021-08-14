<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jobs\PracticeJob;

class JobQueuePracticeController extends Controller
{
    public function __invoke()
    {
        $successText = "1分後に出ていれば成功です";

        PracticeJob::dispatch($successText)
            ->delay(now()->addMinutes(1));
    }
}
