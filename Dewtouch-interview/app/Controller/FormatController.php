<?php
	class FormatController extends AppController{
		
		public function q1(){
				$this->setFlash('Question: Please change Pop Up to mouse over (soft click)');
			if($this->request->is('post')){
				$id=$this->request->data('choice');               					
				$this->redirect(array('controller' => 'Format', 'action' => 'choice','?'=>['id'=>$id]));				
			}
				
			
// 			$this->set('title',__('Question: Please change Pop Up to mouse over (soft click)'));
		}
		
		public function q1_detail(){

			$this->setFlash('Question: Please change Pop Up to mouse over (soft click)');
// 			$this->set('title',__('Question: Please change Pop Up to mouse over (soft click)'));
		}
		public function choice(){	
									
		}
	}