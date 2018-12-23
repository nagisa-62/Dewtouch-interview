<?php
class Member extends AppModel{
    public $hasMany = array('Transaction' => array(
        'conditions' => array('Transaction.valid' => 1)
    ));

    public function resetAutoincrement() {
        $this->query("ALTER TABLE members AUTO_INCREMENT = 1;");  
    }
}