<?php

namespace Amritms\ChuckNorrisJokes;

class JokeFactory
{
    protected $jokes = [
        'Chuck Norris doesn’t read books. He stares them down until he gets the information he wants.',
        'Time waits for no man. Unless that man is Chuck Norris.',
        'If you spell Chuck Norris in Scrabble, you win. Forever.',
        'Chuck Norris breathes air … five times a day.',
        'In the Beginning there was nothing … then Chuck Norris roundhouse kicked nothing and told it to get a job.',
        'When God said, “Let there be light!” Chuck said, “Say Please.”',
        'Chuck Norris has a mug of nails instead of coffee in the morning.',
        'If Chuck Norris were to travel to an alternate dimension in which there was another Chuck Norris and they both fought, they would both win.'
    ];

    public function __construct(array $jokes = null)
    {
        if ($jokes) {
            $this->jokes = $jokes;
        }
    }

    public function getRandomJoke()
    {
        return $this->jokes[array_rand($this->jokes)];
    }
}
