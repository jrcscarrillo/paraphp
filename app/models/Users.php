<?php

use Phalcon\Mvc\Model as tabla;
use Phalcon\Validation as validar;

class Users extends tabla {

    /**
     *
     * @var integer
     * @Primary
     * @Column(type="integer", length=11, nullable=false)
     */
    public $id;

    /**
     *
     * @var string
     * @Column(type="string", length=32, nullable=false)
     */
    public $username;

    /**
     *
     * @var string
     * @Column(type="string", length=40, nullable=false)
     */
    public $password;

    /**
     *
     * @var string
     * @Column(type="string", length=120, nullable=false)
     */
    public $name;

    /**
     *
     * @var string
     * @Column(type="string", length=70, nullable=false)
     */
    public $email;

    /**
     *
     * @var string
     * @Column(type="string", nullable=false)
     */
    public $createdAt;

    /**
     *
     * @var string
     * @Column(type="string", length=1, nullable=false)
     */
    public $active;

    /**
     * Validations and business logic
     *
     * @return boolean
     */
    public function validation() {
        $validator = new validar();

        return $this->validate($validator);
    }

    /**
     * Initialize method for model.
     */
    public function initialize() {
        $this->setSchema("knoll");
        $this->hasMany('id', 'Yourcode', 'userId', ['alias' => 'Yourcode']);
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource() {
        return 'users';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Users[]|Users
     */
    public static function find($parameters = null) {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Users
     */
    public static function findFirst($parameters = null) {
        return parent::findFirst($parameters);
    }

    /**
     * 
     * @param type $parameters
     * @return grupo
     * use Phalcon\Mvc\Model as tabla;
     * use Phalcon\Validation as validar;
     * use \Phalcon\Mvc\Model\ResultsetSimple as grupo;
     * $parameters is an array with name, username, and email
     */
    public static function findEqualUsers($parameters) {
        $sql = "SELECT * FROM Users WHERE name = :vName OR username = :vUsername OR email = :vEmail";
        $di = \Phalcon\DI::getDefault();
        $db = $di['db'];
        $data = $db->query($sql);
        $data->setFetchMode(\Phalcon\Db::FETCH_OBJ);
        $results = $data->fetchAll();
        return $results;
    }

}
