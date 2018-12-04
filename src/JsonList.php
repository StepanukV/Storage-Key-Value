<?php
/**
 * Created by PhpStorm.
 * User: rayzer
 * Date: 04.12.18
 * Time: 18:56
 */

namespace src;


class JsonList extends ArrayList
{
    public function __construct()
    {
        $this->filePath = '../db/JsonList.json';
        $content= file_get_contents($this->filePath);
        if ($content) {
            $this->data = json_decode($content, true);
        } else {
            $this->clear();
        }
    }
    protected function dataJson($data)
    {
        file_put_contents($this->filePath, json_encode($data));

    }
    public function set($key, $value)
    {
        parent::set($key, $value);
        $this->dataJson($this->data);
    }
}
