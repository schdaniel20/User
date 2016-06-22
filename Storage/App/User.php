<?php
/**
 * Created by PhpStorm.
 * User: schmithd
 * Date: 21.06.2016
 * Time: 11:46
 */

namespace App;

use Cylex\Storage\Store\UserInterface;

class User
{
    protected $ui;

    public function __construct(UserInterface $ui)
    {
        $this->ui = $ui;
    }

    public function addUser(array $values) : bool {
        return $this->ui->addUser($values);
    }

    /**
     * @param int $id
     * @return bool
     */
    public function deleteUser(int $id) : bool {
        return $this->ui->deleteUser($id);
    }

    /**
     * @param int $id
     * @param array $values
     * @return bool
     */
    public function updateUser(int $id, array $values) : bool {
        return $this->ui->updateUser($id, $values);
    }

    /**
     * @param int $id
     * @return array
     */
    public function search(int $id) : array {
        return $this->ui->search($id);
    }
}