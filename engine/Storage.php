<?php

namespace app\engine;

class Storage
{
    protected $items = [];

    public function set($key, $obj) {
        $this->items[$key] = $obj;
    }

    public function get($name) {
        if (!isset($this->items[$name])) {
            $this->items[$name] = App::call()->createComponent($name);
        }
        return $this->items[$name];
    }
}