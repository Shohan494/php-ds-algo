<?php

namespace App;

interface QueueInterface {

    public function add(string $value);

    public function remove();

}