<?php

/**
 * Class Files
 */
class Files
{
    public string $fileContent;

    public function readFiles(string $fileName): void
    {
        try {
            $this->fileContent = file_get_contents($fileName);
        } catch (Exception $exception) {
            echo "exception->getMessage()";
            echo $exception->getMessage() . PHP_EOL;
            echo "exception->getFile()";
            echo $exception->getFile() . PHP_EOL;
            echo "exception->getLine()";
            echo $exception->getLine() . PHP_EOL;
        }
    }

    public function getFileContent()
    {
        echo $this->fileContent;
    }
}

$file = new Files();
$file->readFiles("test.txt");
$file->getFileContent();