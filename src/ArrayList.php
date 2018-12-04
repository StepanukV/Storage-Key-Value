<?php
/**
 * Created by PhpStorm.
 * User: rayzer
 * Date: 04.12.18
 * Time: 18:52
 */

namespace src;

use src\KeyValueStoreInterface;
abstract class ArrayList implements KeyValueStoreInterface
{
    protected $data = [];
    protected $filePath;

    public function set($key, $value)
    {
        $this->data[$key] = $value;
    }

    public function get($key, $default = null)
    {
        if($this->has($key)){
            return $this->data[$key];
        }
            return $default;

    }

    public function has($key): bool
    {
        if (array_key_exists($key, $this->data)) {
            return true;
        }
            return $key;

    }
    public function remove($key): void
    {
        unset($this->data[$key]);
    }
    public function clear(): void
    {
        $this->data = [];
    }
}