<?php

class Posts
{
    public function __construct()
    {
        echo "This is a Contructor";
    }

    public function __destruct()
    {
        echo "This is the destructure method";
    }
}

$post = new Posts();