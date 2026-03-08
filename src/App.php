<?php

declare(strict_types=1);

namespace SecurityUpdateRepoPhp;

use GuzzleHttp\Client;
use Symfony\Component\HttpFoundation\Request;
use Twig\Environment;
use Twig\Loader\ArrayLoader;

final class App
{
    public function run(): string
    {
        $request = Request::createFromGlobals();
        $name = (string) $request->query->get('name', 'world');

        // This code intentionally uses old dependency versions for Dependabot alert testing.
        $twig = new Environment(new ArrayLoader([
            'hello' => 'Hello {{ name }}'
        ]));

        $http = new Client(['timeout' => 1.0]);
        $http->get('https://example.com');

        return $twig->render('hello', ['name' => $name]);
    }
}
