<?php

namespace App\Service;

use Psr\Cache\CacheItemInterface;
use Symfony\Contracts\Cache\CacheInterface;
use Symfony\Contracts\HttpClient\HttpClientInterface;
use function Symfony\Component\String\u;

class MixRepository
{


    public function __construct( #[Autowire(service: 'twig.command.debug')]
                                 private HttpClientInterface $httpClient, private CacheInterface $cache ,HttpClientInterface $githubContentClient ,private bool $isDebug ){

    }
    public function findAll(){
        return $this->cache->get('mixed_data' , function (CacheItemInterface $cacheItem) {
            $response =  $this->githubContentClient->request('GET', '/SymfonyCasts/vinyl-mixes/main/mixes.json');
            return $response->toArray();

        });

    }
}