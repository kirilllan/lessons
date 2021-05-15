<?php


namespace App;


class Account
{
  private $balance;
  private $id;

  public function __construct($balance, $id){
    $this->balance = $balance;
    $this->id = $id;
  }

  /**
   * @return int
   */
  public function setBalance(int $balance): void
  {
    $this->balance = $balance;
  }
  public function getBalance(): int{
    return $this->balance;
  }
  public function getId(): int
  {
    return $this->id;
  }

  public function deposit(int $amount)
  {
    if ($amount < 0) {
      return 'Input a positive value please';
    } else {
      $current = $this->getBalance();
      $newBalance = $current + $amount;
      $this->setBalance($newBalance);
      return strval($amount) . ' deposited.';
    }
  }

  /**
   * Subtract amount from balance
   * @param int $amount
   * @return string
   */
  public function withdraw(int $amount): string
  {
    if ($amount < 0) {
      return 'INput a positive value please';
    } elseif ($amount > $this->getBalance()) {
      return 'Not enough balance';
    } else {
      $current = $this->getBalance();
      $newBalance = $current - $amount;
      $this->setBalance($newBalance);
      return  strval($amount) . ' withdrawn.';
    }
  }

}