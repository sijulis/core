<?php

class Doctrine_Id_SequenceGenerator extends Doctrine_Id_AbstractIdGenerator
{
    private $_sequenceName;
    
    public function __construct($sequenceName)
    {
        $this->_sequenceName = $sequenceName;
    }
    
    /**
     * Enter description here...
     *
     * @param Doctrine_Entity $entity
     * @override
     */
    public function generate(Doctrine_Entity $entity)
    {
        $conn = $this->_em->getConnection();
        $sql = $conn->getDatabasePlatform()->getSequenceNextValSql($this->_sequenceName);
        return $conn->fetchOne($sql);
    }
}

?>