<?php
	class TransactionItem extends AppModel{
		public $belongsTo = array('Transaction');
		public function resetAutoincrement() {
			$this->query("ALTER TABLE transaction_items AUTO_INCREMENT = 1;");  
		}
	}