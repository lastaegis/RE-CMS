<?php
/**
 * Created by PhpStorm.
 * User: ian-nano
 * Date: 9/18/17
 * Time: 16:46
 */

namespace App\Http\Repository\Implement;


use App\Http\Models\AccountModels;
use App\Http\Repository\Contract\AccountInterface;

class AccountRepository implements AccountInterface
{
    protected $accountModels;
    public function __construct()
    {
        $this->accountModels = new AccountModels();
    }

    public function findAll()
    {
        // TODO: Implement findAll() method.
    }

    public function findById($accountId)
    {
        // TODO: Implement findById() method.
    }

    public function findByEmail($accountEmail)
    {
        // TODO: Implement findByEmail() method.
    }

    public function update(AccountModels $accountModel, $accountId)
    {
        // TODO: Implement update() method.
    }



}