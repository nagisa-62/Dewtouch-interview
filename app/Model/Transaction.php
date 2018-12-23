<?php
class Transaction extends AppModel{
    public $belongsTo = array('Member');
    public $hasMany = array('TransactionItem' => array(
        'conditions' => array('TransactionItem.valid' => 1)
    ));
    public function resetAutoincrement() {
        $this->query("ALTER TABLE transactions AUTO_INCREMENT = 1;");  
    }
}