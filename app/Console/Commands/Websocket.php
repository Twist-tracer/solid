<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Swoole\WebSocket\Server;
use Swoole\WebSocket\Frame;
use Swoole\Http\Request;
use Symfony\Component\Console\Command\Command as SymfonyAlias;

class Websocket extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'websocket:start';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $server = $this->makeServer();

        $server->on("Start", function(Server $server)
        {
            $this->info('Swoole WebSocket Server is started at ws://127.0.0.1:3000');
        });

        $server->on('Open', function(Server $server, Request $request)
        {
            $this->info("connection open: {$request->fd}");

            $server->tick(1000, function() use ($server, $request)
            {
                $server->push($request->fd, json_encode(["hello", time()]));
            });
        });

        $server->on('Message', function(Server $server, Frame $frame)
        {
            $this->info("received message: {$frame->data}");

            $server->push($frame->fd, json_encode(["hello", time()]));
        });

        $server->on('Close', function(Server $server, int $fd)
        {
            $this->info("connection close: {$fd}");
        });

        $server->on('Disconnect', function(Server $server, int $fd)
        {
            $this->info("connection disconnect: {$fd}");
        });

        $server->start();

        return SymfonyAlias::SUCCESS;
    }

    private function makeServer(): Server
    {
        return new Server('websocket', 3000);
    }
}
