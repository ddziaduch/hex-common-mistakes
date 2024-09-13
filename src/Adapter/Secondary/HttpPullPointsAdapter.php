<?php

declare(strict_types=1);

namespace ddziaduch\hexCommonMistakes\Adapter\Secondary;

use ddziaduch\hexCommonMistakes\Hexagon\Model\DriverId;
use ddziaduch\hexCommonMistakes\Hexagon\Port\Secondary\PullPointsPort;
use Psr\Http\Client\ClientInterface;
use Psr\Http\Message\RequestFactoryInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\StreamFactoryInterface;

final readonly class HttpPullPointsAdapter implements PullPointsPort
{
    public function __construct(
        private ClientInterface $httpClient,
        private RequestFactoryInterface $requestFactory,
        private StreamFactoryInterface $streamFactory,
    ) {}

    public function pull(DriverId $driverId): ResponseInterface
    {
        $request = $this->requestFactory->createRequest(
            method: 'GET',
            uri: '/penalty-points',
        )->withBody(
            $this->streamFactory->createStream(
                json_encode(['driverId' => $driverId], flags: JSON_THROW_ON_ERROR),
            ),
        );

        return $this->httpClient->sendRequest($request);
    }
}
