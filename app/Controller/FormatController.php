<?php
	class FormatController extends AppController{
		
		public function q1(){
			
			$this->setFlash('Question: Please change Pop Up to mouse over (soft click)');
			
 			$this->set('title',__('Question: Please change Pop Up to mouse over (soft click)'));
		}
		
		public function q1_detail(){

			$this->setFlash('Question: Please change Pop Up to mouse over (soft click)');
				
 			$this->set('title',__('Question: Please change Pop Up to mouse over (soft click)'));
		}

		public function q1_result(){

			$this->setFlash('Question: Please change Pop Up to mouse over (soft click)');
			$radio = $this->data['Type']['type'];
			$this->set('radio', $radio);
			
 			$this->set('title',__('Question: Please change Pop Up to mouse over (soft click)'));
		}
		
	}