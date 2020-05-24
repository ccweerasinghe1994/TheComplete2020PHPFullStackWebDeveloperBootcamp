<?php
class ChainMethods{

    public string $name = "cj,asdbfksdb";

    public function n1(){
        echo "This is a method".PHP_EOL;
        $this->name = "chamara";
        return $this;
    }
    public function n2(){
        echo "This is a method name:$this->name";
        return $this;
    }
}

$new = new ChainMethods();

$new->n1()->n2();