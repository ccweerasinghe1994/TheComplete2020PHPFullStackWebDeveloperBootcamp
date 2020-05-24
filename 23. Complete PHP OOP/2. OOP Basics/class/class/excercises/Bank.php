<?php

class Bank
{
    public string $name;
    public int $accountNumber;
    public float $balance;

    /**
     * @return float
     */
    public function getBalance(): float
    {
        return $this->balance;
    }

    /**
     * @param $amount
     * @return void
     */
    public function depositAmount($amount)
    {
        $this->balance += $amount;
    }

    /**
     * @param $amount
     * @return void
     */
    public function deducAmount($amount)
    {
        if ($this->balance < $amount) {
            echo "Your balance is Low". PHP_EOL;
        } else {
            $this->balance -= $amount;
        }
    }
}

$user = new Bank();
$user->name = "chamara";
$user->accountNumber = 12231;
$user->balance = 1000;

$user->depositAmount(2000);
echo "Balance:$user->balance" . PHP_EOL;
$user->deducAmount(200);
echo "Balance:$user->balance" . PHP_EOL;
$balace = $user->getBalance();
echo "Balance:$balace" . PHP_EOL;
$user->deducAmount(3000);
echo "Balance:$balace" . PHP_EOL;
