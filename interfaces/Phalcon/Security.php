<?php
namespace Phalcon;
interface Security extends \Phalcon\DI\InjectionAwareInterface
{
    public function setDI($dependencyInjector);
    public function getDI();
    public function setRandomBytes($randomBytes);
    public function getRandomBytes();
    public function setWorkFactor($workFactor);
    public function getWorkFactor();
    public function getSaltBytes();
    public function hash($password, $workFactor = NULL);
    public function checkHash($password, $passwordHash);
    public function isLegacyHash($passwordHash);
    public function getTokenKey($numberBytes = NULL);
    public function getToken($numberBytes = NULL);
    public function checkToken($tokenKey = NULL, $tokenValue = NULL);
    public function getSessionToken();
}