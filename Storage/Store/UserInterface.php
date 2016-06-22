<?php
/**
 * Created by PhpStorm.
 * User: schmithd
 * Date: 21.06.2016
 * Time: 11:23
 */

namespace Cylex\Storage\Store;


interface UserInterface
{
    /**
     * @param array $values
     * @return bool
     */
    public function addUser(array $values) : bool;

    /**
     * @param int $id
     * @return bool
     */
    public function deleteUser(int $id) : bool;

    /**
     * @param int $id
     * @param array $values
     * @return bool
     */
    public function updateUser(int $id, array $values) : bool;

    /**
     * @param int $id
     * @return array
     */
    public function search(int $id) : array;
}