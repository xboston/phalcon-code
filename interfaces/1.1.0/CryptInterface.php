<?php
namespace Phalcon{

    interface CryptInterface
    {
        public function setCipher($cipher);
        public function getCipher();
        public function setMode($mode);
        public function getMode();
        public function setKey($key);
        public function getKey();
        public function encrypt($text, $key = NULL);
        public function decrypt($text, $key = NULL);
        public function encryptBase64($text, $key = NULL);
        public function decryptBase64($text, $key = NULL);
        public function getAvailableCiphers();
        public function getAvailableModes();
    }
}