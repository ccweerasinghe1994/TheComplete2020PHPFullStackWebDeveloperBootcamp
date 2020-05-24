<?php


class Bank
{
    public string $name;
    public int $accountNumber;
    public float $balance;

    /**
     * Bank constructor.
     * @param string $name
     * @param int $accountNumber
     */
    public function __construct(string $name, int $accountNumber)
    {
        $this->name = $name;
        $this->accountNumber = $accountNumber;
    }


    /**
     * @return Bank
     */
    public function getBalance(): Bank
    {
        $balance = $this->balance;
        echo "balance:$balance";
        return $this;
    }

    /**
     * @param $amount
     * @return Bank
     */
    public function depositAmount($amount)
    {
        $this->balance += $amount;
        return $this;
    }

    /**
     * @param $amount
     * @return Bank
     */
    public function deducAmount($amount)
    {
        if ($this->balance < $amount) {
            echo "Your balance is Low" . PHP_EOL;
        } else {
            $this->balance -= $amount;
        }
        return $this;
    }
}

$user = new Bank("chamara", 12231);

$user->balance = 1000;

$user->depositAmount(2000)->getBalance();

$user->deducAmount(200)->getBalance();

$balace = $user->getBalance()->getBalance();

$user->deducAmount(3000)->getBalance();

