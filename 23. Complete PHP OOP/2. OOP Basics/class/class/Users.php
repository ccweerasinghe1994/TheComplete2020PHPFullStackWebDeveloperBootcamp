<?php

class Users
{
    function fetchUsers($id): bool
    {
        $result = false;
        echo "Quaring the dataBase:$id";
        $result = true;
        echo "Showing the data";

        return $result;
    }

    function deleteUser($id)
    {
        echo "Deleting the record:$id";
    }
}

$user = new Users();
$user->fetchUsers(121);
$user->deleteUser(23);