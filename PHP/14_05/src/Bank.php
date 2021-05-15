<?php


namespace App;


class Bank
{
  private $accounts;
  public function __construct(){
    $this->accounts = [];
  }
  public function addAccount(Account $account)
  {
    $this->accounts[] = $account;
  }
  public function getAccounts(): array
  {
    return $this->accounts;
  }
  /**
   * @param int $accountId
   * @return Account
   */
  public function getAccountById(int $accountId): Account
  {
    //TODO: update the logic so it will return the account with matching account id
    //return $this->accounts[0];
    $accounts = $this->getAccounts();
    foreach($accounts as $account) {
      if ($account->getId() == $accountId) {
        return $account;
      }
    }
    return;
  }
}