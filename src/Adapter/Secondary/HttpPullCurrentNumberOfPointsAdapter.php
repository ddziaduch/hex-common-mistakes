<?php

declare(strict_types=1);

namespace ddziaduch\hexCommonMistakes\Adapter\Secondary;

use ddziaduch\hexCommonMistakes\Hexagon\Model\DriverId;
use ddziaduch\hexCommonMistakes\Hexagon\Model\UnableToPullCurrentNumberOfPointsException;
use ddziaduch\hexCommonMistakes\Hexagon\Port\Secondary\PullCurrentNumberOfPointsPort;
use Psr\Http\Client\ClientExceptionInterface;
use Psr\Http\Client\ClientInterface;
use Psr\Http\Message\RequestFactoryInterface;
use Psr\Http\Message\StreamFactoryInterface;

final readonly class HttpPullCurrentNumberOfPointsAdapter implements PullCurrentNumberOfPointsPort
{
    public function __construct(
        private ClientInterface $httpClient,
        private RequestFactoryInterface $requestFactory,
        private StreamFactoryInterface $streamFactory,
    ) {}

    public function pull(DriverId $driverId): int
    {
        $request = $this->requestFactory->createRequest(
            method: 'GET',
            uri: '/penalty-points',
        )->withBody(
            $this->streamFactory->createStream(
                json_encode(['driverId' => $driverId], flags: JSON_THROW_ON_ERROR),
            ),
        );

        try {
            $response = $this->httpClient->sendRequest($request);
        } catch (ClientExceptionInterface $exception) {
            throw new UnableToPullCurrentNumberOfPointsException(previous: $exception);
        }

        $statusCode = $response->getStatusCode();

        if ($statusCode !== 200) {
            throw new UnableToPullCurrentNumberOfPointsException(
                previous: new \RuntimeException(
                    sprintf('Wrong status code, expected 200, but got %s', $statusCode),
                )
            );
        }

        return (int) json_decode((string) $response->getBody(), flags: JSON_THROW_ON_ERROR);
    }
}
