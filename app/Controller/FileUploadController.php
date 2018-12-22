<?php

class FileUploadController extends AppController {
	public function index() {
		$this->set('title', __('File Upload Answer'));
		if(!empty($this->request->data)) {
			$this->FileUpload->set($this->request->data);
			if ($this->FileUpload->validates(['fieldList' =>['file']])) {
				$uploaddir = './upload_csv/';
				$uploadfile = date("YmdHis") . "_" . $this->request->data['FileUpload']['file']['name'];
				$uploadpath = $uploaddir . $uploadfile;
				if(move_uploaded_file($this->request->data['FileUpload']['file']['tmp_name'], $uploadpath)) {
					if($this->FileUpload->save(['name'=>$uploadfile, 'email'=>'test@test.com'], ['validate' => false])) {
						$this->set('result',true);
						$this->set('message', 'Updated Successfully');
					} else {
						$this->set('result',false);
						$this->set('message', 'DB save error');
					}
				} else {
					$this->set('result',false);
					$this->set('message', 'File moving error');
				}
			} else {
				$this->set('result',false);
				$this->set('message', 'Validation error');
			}
		}

		$file_uploads = $this->FileUpload->find('all');
		$this->set(compact('file_uploads'));
	}
}