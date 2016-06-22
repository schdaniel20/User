<?php
/**
 * Created by PhpStorm.
 * User: schmithd
 * Date: 21.06.2016
 * Time: 11:23
 */

namespace Cylex\Storage\Store;


class Memory implements UserInterface
{
    protected $users = [];
    /**
     * @param array $values
     * @return bool
     */
    public function addUser(array $values) : bool {
        $this->users[] = $values;
        return true;
    }

    /**
     * @param int $id
     * @return bool
     */
    public function deleteUser(int $id) : bool {
        unset($this->users[$id]);
        return true;
    }

    /**
     * @param int $id
     * @param array $values
     * @return bool
     */
    public function updateUser(int $id, array $values) : bool {
        $this->users[$id] = $values;
    }

    /**
     * @param int $id
     * @return array
     */
    public function search(int $id) : array {
        return $this->users[$id] ?? [];
    }

}