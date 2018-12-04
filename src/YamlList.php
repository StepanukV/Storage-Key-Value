<?php

namespace src;


class YamlList extends ArrayList
{
    public function __construct()
    {
        $this->filePath = '../db/YamlList.yml';
        $content = file_get_contents($this->filePath);
        if ($content) {
            $this->data = yaml_parse($content);
        } else {
            $this->clear();
        }
    }
    public function dataYaml($data)
    {

        file_put_contents($this->filePath, yaml_emit($data));

    }
    public function set($key, $value)
    {
        parent::set($key, $value);
        $this->dataYaml($this->filePath);
    }
}