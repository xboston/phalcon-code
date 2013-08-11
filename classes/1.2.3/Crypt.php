<?php
namespace Phalcon{

    abstract class Crypt implements \Phalcon\CryptInterface
    {
        const PADDING_DEFAULT = 0;
        const PADDING_ANSI_X_923 = 1;
        const PADDING_PKCS7 = 2;
        const PADDING_ISO_10126 = 3;
        const PADDING_ISO_IEC_7816_4 = 4;
        const PADDING_ZERO = 5;
        const PADDING_SPACE = 6;
        public function setCipher($cipher){}
        public function getCipher(){}
        public function setMode($mode){}
        public function getMode(){}
        public function setKey($key){}
        public function getKey(){}
        public function setPadding($scheme){}
        public function getPadding(){}
        public function encrypt($text, $key = NULL){}
        public function decrypt($text, $key = NULL){}
        public function encryptBase64($text, $key = NULL){}
        public function decryptBase64($text, $key = NULL){}
        public function getAvailableCiphers(){}
        public function getAvailableModes(){}
    }
}