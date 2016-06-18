<?php
namespace jks\Log;

class MyLogger implements LoggerInterface
{
    public $stream;

    function __construct($outputstream)
    {
        $this->stream = $outputstream;
    }

    function emergency($message, array $context = array())
    {
      Echo "Emergency!";
    }

    function alert($message, array $context = array())
    {
      Echo "Alert!";
    }

    function critical($message, array $context = array())
    {
      Echo "Critical!";
    }

    function error($message, array $context = array())
    {
      Echo "Error!";
    }

    function warning($message, array $context = array())
    {
      Echo "Warning!";
    }

    function notice($message, array $context = array())
    {
      Echo "Notice";
    }

    function info($message, array $context = array())
    {
      Echo "Info";
    }

    function debug($message, array $context = array())
    {
      Echo "Debug";
    }

    function log($level, $message, array $context = array())
    {
      Echo "Log";
    }
}
