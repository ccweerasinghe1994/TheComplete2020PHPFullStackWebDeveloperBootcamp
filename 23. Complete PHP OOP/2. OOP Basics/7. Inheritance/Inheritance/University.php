<?php

class University
{
    public string $universityName;
    public string $universityAddress;
    public string $universityId;

    /**
     * University constructor.
     * @param string $universityName
     * @param string $universityAddress
     * @param string $universityId
     */
    public function __construct(string $universityName, string $universityAddress, string $universityId)
    {
        $this->universityName = $universityName;
        $this->universityAddress = $universityAddress;
        $this->universityId = $universityId;
    }

    function printUniversityDetails()
    {
        echo "$this->universityName" . PHP_EOL;
        echo "$this->universityAddress" . PHP_EOL;
        echo "$this->universityId" . PHP_EOL;
    }

}