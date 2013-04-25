<?php
namespace Phalcon;
interface Tag
{
    public static function setDI($dependencyInjector);
    public static function getDI();
    public static function getUrlService();
    public static function getDispatcherService();
    public static function getEscaperService();
    public static function setAutoescape($autoescape);
    public static function setDefault($id, $value);
    public static function setDefaults($values);
    public static function displayTo($id, $value);
    public static function hasValue($name);
    public static function getValue($name, $params = NULL);
    public static function resetInput();
    public static function linkTo($parameters, $text = NULL);
    public static function _inputField();
    public static function textField($parameters);
    public static function passwordField($parameters);
    public static function hiddenField($parameters);
    public static function fileField($parameters);
    public static function checkField($parameters);
    public static function radioField($parameters);
    public static function imageInput($parameters);
    public static function submitButton($parameters);
    public static function selectStatic($parameters, $data = NULL);
    public static function select($parameters, $data = NULL);
    public static function textArea($parameters);
    public static function form($parameters = NULL);
    public static function endForm();
    public static function setTitle($title);
    public static function appendTitle($title);
    public static function prependTitle($title);
    public static function getTitle($tags = NULL);
    public static function stylesheetLink($parameters = NULL, $local = NULL);
    public static function javascriptInclude($parameters = NULL, $local = NULL);
    public static function image($parameters = NULL);
    public static function friendlyTitle($text, $separator = NULL, $lowercase = NULL);
    public static function setDocType($doctype);
    public static function getDocType();
}