<?php

namespace Amritms\ChuckNorrisJokes\Http\Controllers;

use Amritms\ChuckNorrisJokes\Facades\ChuckNorris;

class ChuckNorrisController
{
    public function __invoke()
    {
        return view('chuck-norris::joke', ['joke' => ChuckNorris::getRandomJoke()]);
    }
}
