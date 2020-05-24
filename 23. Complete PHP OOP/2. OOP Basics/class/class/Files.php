<?php

class Files
{
    function displayContent($filename): bool
    {
        $result = true;
        try {
            echo "Read the content of the file" . "</br>";
            $content = file_get_contents($filename);
            echo "Displaying the content of the file:$content" . "</br>";
            echo $content . "</br>";

        } catch (Exception $exception) {
            $result = false;
        }
        return $result;
    }
}

$file = new Files();

$file->displayContent("test.txt");