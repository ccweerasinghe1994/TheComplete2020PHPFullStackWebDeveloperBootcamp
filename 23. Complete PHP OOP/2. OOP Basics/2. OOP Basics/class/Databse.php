<?php

class Database
{
    public $databaseConnection;
    public $records;

    public function openConnection(): bool
    {
        return true;
    }

    public function fetchUsers($id, $tableName)
    {
        return true;
    }
}
