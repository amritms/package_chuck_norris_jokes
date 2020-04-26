<?php

namespace Amritms\ChuckNorrisJokes\Console;

use Illuminate\Console\Command;
use Amritms\ChuckNorrisJokes\Facades\ChuckNorris;

class ChuckNorrisJoke extends Command
{
    protected $signature = 'chuck-norris';

    protected $description = 'Output a fun Chuck Norris joke.';

    public function handle()
    {
        $this->info(ChuckNorris::getRandomJoke());
    }
}