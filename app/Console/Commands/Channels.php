<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Swoole\Coroutine\Channel;
use Symfony\Component\Console\Command\Command as SymfonyCommand;
use function Co\run;


class Channels extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'channels:run';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $startTime = microtime(true);

        run(function () {
            $chan = new Channel(1);

            for ($i = 0; $i < 100000; $i++) {
                go(fn() => $this->runAsync($i, $chan));
            }

            while (!$chan->isEmpty()) {
                $chan->pop();
            }
        });

//        for ($i = 0; $i < 12100; $i++) {
//            $this->runSync($i);
//        }

        $endTime = microtime(true);

        $execTime = $endTime - $startTime;
        $execMemoryB = memory_get_peak_usage(1);
        $execMemoryK = $execMemoryB / 1024;
        $execMemoryM = $execMemoryK / 1024;

        $this->info('exec time is ' . $execTime);
        $this->info("exec memory is {$execMemoryM}M");

        return SymfonyCommand::SUCCESS;
    }

    private function runSync($i): array
    {
        return [
            'index' => "$i",
            'time' => microtime(true),
        ];
    }

    private function runAsync(int $i, Channel $chan)
    {
        $chan->push([
            'index' => "$i",
            'time' => time(),
        ]);
    }
}
