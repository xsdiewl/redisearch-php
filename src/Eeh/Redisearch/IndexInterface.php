<?php

namespace Eeh\RediSearch;

use Eeh\RediSearch\Document\BuilderInterface as DocumentBuilderInterface;
use Eeh\RediSearch\Document\Document;
use Eeh\RediSearch\Query\BuilderInterface as QueryBuilderInterface;
use Eeh\RediSearch\Redis\RedisClient;

interface IndexInterface extends DocumentBuilderInterface, QueryBuilderInterface
{
    public function create();
    public function drop();
    public function info();
    public function makeDocument($id = null): Document;
    public function getRedisClient(): RedisClient;
    public function setRedisClient(RedisClient $redisClient): IndexInterface;
    public function getIndexName(): string;
    public function setIndexName(string $indexName): IndexInterface;
    public function isNoOffsetsEnabled(): bool;
    public function setNoOffsetsEnabled(bool $noOffsetsEnabled): IndexInterface;
    public function isNoFieldsEnabled(): bool;
    public function setNoFieldsEnabled(bool $noFieldsEnabled): IndexInterface;
    public function isNoScoreIdxEnabled(): bool;
    public function setNoScoreIdxEnabled(bool $noScoreIdxEnabled): IndexInterface;
    public function addTextField(string $name, float $weight = 1.0): IndexInterface;
    public function addNumericField(string $name): IndexInterface;
    public function addGeoField(string $name): IndexInterface;
}
