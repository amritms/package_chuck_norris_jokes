# Chuck Norris Jokes
> Create chuck norris jokes in your next PHP project.

## Installation

Require the package using composer:

```bash
composer require amritms/chuck-norris-jokes
```

## Usage example

```PHP
use Amritms\ChuckNorrisJokes\JokeFactory;

$jokes = new JokeFactory();

$joke = $jokes->getRandomJoke();
```

## Contributing

1. Fork it (<https://github.com/amritms/chuck-norris-jokes>)
2. Create your feature branch (`git checkout -b feature/fooBar`)
3. Commit your changes (`git commit -am 'Add some fooBar'`)
4. Push to the branch (`git push origin feature/fooBar`)
5. Create a new Pull Request

Please make sure to update tests as appropriate.

## License
[MIT](./LICENSE.md)
