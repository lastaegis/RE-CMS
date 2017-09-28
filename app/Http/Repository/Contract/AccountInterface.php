<?php
/**
 * Created by PhpStorm.
 * User: ian-nano
 * Date: 9/16/17
 * Time: 19:35
 */

namespace App\Http\Repository\Contract;


use App\Http\Models\AccountModels;

interface AccountInterface
{
    /**
     * Used to find all account data
     * @return mixed
     */
    public function findAll();

    /**
     * Used to find account data by account id
     * @param $accountId
     * @return mixed
     */
    public function findById($accountId);

    /**
     * Used to find account data by account email
     * @param $accountEmail
     * @return mixed
     */
    public function findByEmail($accountEmail);

    /**
     * Used to update account data
     * @param AccountModels $accountModel
     * @param $accountId
     * @return mixed
     */
    public function update(AccountModels $accountModel, $accountId);
}