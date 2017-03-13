<?php

class Modelos extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Primary
     * @Identity
     * @Column(type="integer", length=11, nullable=false)
     */
    public $id;

    /**
     *
     * @var string
     * @Column(type="string", length=45, nullable=false)
     */
    public $modelName;

    /**
     *
     * @var string
     * @Column(type="string", length=45, nullable=false)
     */
    public $actionName;

    /**
     *
     * @var integer
     * @Column(type="integer", length=1, nullable=false)
     */
    public $modelType;

    /**
     *
     * @var string
     * @Column(type="string", length=255, nullable=false)
     */
    public $modelDes;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("knoll");
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Modelos[]|Modelos
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Modelos
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'modelos';
    }

}
