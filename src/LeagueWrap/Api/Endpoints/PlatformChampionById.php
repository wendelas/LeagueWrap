<?php

namespace LeagueWrap\Api\Endpoints;

use LeagueWrap\Api\BaseEndpoint;
use LeagueWrap\Api\Dto;

class PlatformChampionById extends BaseEndpoint {
    protected $urlTemplate = '/lol/platform/v3/champions/{id}';
    
    protected $isRateLimited = true;
    
    protected $dtoClass = Dto\ChampionDto::class;
    
    protected $returnsDtoArray = false;
}
