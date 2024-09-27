<?php

class BankAccount
{
    private $balance;
    private $accountNumber;
    private $accountHolder;

    public function __construct(
        $accountNumber,
        $accountHolder,
        $initialBalance = 0.0
    ) {
        $this->setAccountNumber($accountNumber);  
        $this->accountHolder = $accountHolder;
        $this->balance = $initialBalance;
    }

    public function getAccountNumber()
    {
        return $this->accountNumber;
    }

    public function setAccountNumber($accountNumber)
    {
        $this->accountNumber = $accountNumber;
    }

    public function getBalance()
    {
        return $this->balance;
    }

    public function deposit($amount)
    {
        if ($amount > 0) {
            $this->balance += $amount;
            echo "You have deposited € $amount. Your new balance is: € " . number_format($this->getBalance(), 2) . "<br>";
        } else {
            throw new InvalidArgumentException("Deposit must be a positive amount.");
        }
    }

    public function withdraw($amount)
    {
        if ($amount > 0) {
            if ($amount <= $this->getBalance()) {
                $this->balance -= $amount;
                echo "You have withdrawn € $amount. Your new balance is: € " . number_format($this->getBalance(), 2) . "<br>";
            } else {
                echo "You have insufficient funds to withdraw € $amount.<br>";
            }
        } else {
            throw new InvalidArgumentException("Withdrawal amount must be positive.");
        }
    }
}

$account = new BankAccount(accountNumber: "123456", accountHolder: "Ben Dover", initialBalance: 34.4);

echo "Your bank account number is: " . $account->getAccountNumber() . "<br>";
echo "Your current balance is: € " . number_format($account->getBalance(), 2) . "<br>";

$account->withdraw(43);
$account->deposit(85);
$account->withdraw(100);

$account->setAccountNumber("74832");
echo "Your bank account number has been updated to: " . $account->getAccountNumber() . "<br>";
?>
