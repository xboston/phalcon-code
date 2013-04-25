<?php
namespace Phalcon{
    class Escaper implements \Phalcon\EscaperInterface
    {
        public function setEncoding($encoding){}
        public function getEncoding(){}
        public function setHtmlQuoteType($quoteType){}
        public function detectEncoding($str){}
        public function normalizeEncoding($str){}
        public function escapeHtml($text){}
        public function escapeHtmlAttr($attribute){}
        public function escapeCss($css){}
        public function escapeJs($js){}
        public function escapeUrl($url){}
    }
}