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
        $this->setAccountNumber($accountNumber);  // Use setter for account number
        $this->accountHolder = $accountHolder;
        $this->balance = $initialBalance;
    }

    // Getter for account number
    public function getAccountNumber()
    {
        return $this->accountNumber;
    }

    // Setter for account number
    public function setAccountNumber($accountNumber)
    {
        $this->accountNumber = $accountNumber;
    }

    // Getter for balance
    public function getBalance()
    {
        return $this->balance;
    }

    // Method to deposit money
    public function deposit($amount)
    {
        if ($amount > 0) {
            $this->balance += $amount;
            echo "You have deposited € $amount. Your new balance is: € " . number_format($this->getBalance(), 2) . "<br>";
        } else {
            throw new InvalidArgumentException("Deposit must be a positive amount.");
        }
    }

    // Method to withdraw money
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

// Create a new bank account
$account = new BankAccount(accountNumber: "123456", accountHolder: "Ben Dover", initialBalance: 34.4);

// Use getter methods for output
echo "Your bank account number is: " . $account->getAccountNumber() . "<br>";
echo "Your current balance is: € " . number_format($account->getBalance(), 2) . "<br>";

// Perform operations using methods
$account->withdraw(43);
$account->deposit(85);
$account->withdraw(100);

// Change the account number using setter method
$account->setAccountNumber("74832");
echo "Your bank account number has been updated to: " . $account->getAccountNumber() . "<br>";
?>
