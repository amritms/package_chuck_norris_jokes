<?php

namespace Amritms\ChuckNorrisJokes\Test;

use Amritms\ChuckNorrisJokes\JokeFactory;
use PHPUnit\Framework\TestCase;

class JokeFactoryTest extends TestCase
{
    /** @test **/
    public function it_returns_a_random_joke()
    {
        $jokes = new JokeFactory([
            'This is a joke',
        ]);
        $joke = $jokes->getRandomJoke();

        $this->assertSame('This is a joke', $joke);
    }

    /** @test **/
    public function it_returns_a_predefined_joke()
    {
        $chuckNorrisJokes = [
            'Chuck Norris doesn’t read books. He stares them down until he gets the information he wants.',
            'Time waits for no man. Unless that man is Chuck Norris.',
            'If you spell Chuck Norris in Scrabble, you win. Forever.',
            'Chuck Norris breathes air … five times a day.',
            'In the Beginning there was nothing … then Chuck Norris roundhouse kicked nothing and told it to get a job.',
            'When God said, “Let there be light!” Chuck said, “Say Please.”',
            'Chuck Norris has a mug of nails instead of coffee in the morning.',
            'If Chuck Norris were to travel to an alternate dimension in which there was another Chuck Norris and they both fought, they would both win.',
        ];

        $jokes = new JokeFactory();
        $joke = $jokes->getRandomJoke();

        $this->assertContains($joke, $chuckNorrisJokes);
    }
}
