<?php

namespace App\Singleton;


class SampleSingleton
{
    private static $instance;

    private $id;    // 同一インスタンス検証用のID

    private function __construct()
    {
        $this->id = hash('sha256', time());
    }

    public static function getInstance()
    {
        if (empty(self::$instance)) {
            self::$instance = new SampleSingleton();
        }
        return self::$instance;
    }

    public function getId()
    {
        return $this->id;
    }

    public final function __clone()
    {
        throw new \Exception('This Instance is Not Clone');
    }

    public final function __wakeup()
    {
        throw new \Exception('This Instance is Not unserialize');
    }

}