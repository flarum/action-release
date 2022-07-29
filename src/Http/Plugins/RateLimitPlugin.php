<?php

declare(strict_types=1);

namespace Flarum\Release\Http\Plugins;

use Http\Client\Common\Plugin;
use Http\Promise\FulfilledPromise;
use Http\Promise\Promise;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

class RateLimitPlugin implements Plugin
{
    public function handleRequest(RequestInterface $request, callable $next, callable $first): Promise
    {
        /** @var ResponseInterface|Promise $response */
        $response = $next($request);

        if ($response instanceof Promise) {
            $response = $response->wait(true);
        }

        $remaining = $response->getHeader('X-RateLimit-Remaining')[0];
        $resetAt = intval($response->getHeader('X-RateLimit-Reset')[0]);

        if ($remaining < 5) {
            sleep(max($resetAt - time(), 1));
        }

        return new FulfilledPromise($response);
    }
}