<?php

class Excercise
{

    public $fileHandler;
    public string $fileName;
    public $fileSize;
    public string $content;
    public bool $fileFound;


    public function __construct($file_name)
    {
        $this->fileHandler = null;
        $this->fileFound = false;
// check weather a file exists
        if (file_exists($file_name)) {
//            check weather it is a file
            if (is_file($file_name)) {
                $this->fileFound = true;
            }
        }
        if ($this->fileFound) {
            $this->fileHandler = fopen($file_name, 'r');
            $this->fileSize = filesize($file_name);
        }
    }

    function getConetnt()
    {
        if ($this->fileFound) {
            $this->content = fread($this->fileHandler, $this->fileSize);
            return $this->content;
        } else {
            return "No File Found";
        }
    }

    public function __destruct()
    {
        if ($this->fileFound) {
            fclose($this->fileHandler);
            echo "File is closed from Destructure";
        }
    }

}

$newFile = new Excercise('test.txt');
echo $newFile->getConetnt();