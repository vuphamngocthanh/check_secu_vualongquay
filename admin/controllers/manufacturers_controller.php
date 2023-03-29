<?php
class ManufacturersController extends AppController {

	var $name = 'Manufacturers';	
	var $helpers = array('Html', 'Form', 'Javascript', 'TvFck');
	//list danh sach cac danh muc
	function index() {	
	   $this->account();	 
	  // $conditions=array('Catproduct.status'=>1);	
	   $this->paginate = array('limit' => '15','order' => 'Manufacturer.id ASC');
	   $this->set('Manufacturer', $this->paginate('Manufacturer',array()));
       $list_cat = $this->Manufacturer->generatetreelist(null,null,null," _ ");
	   $this->set(compact('list_cat'));
	}
	//tim kiem
	function search($id=null) {
		$data['Manufacturer']=$this->data['Manufacturer'];
		$catproduct=$data['Manufacturer']['parent_id'];
		$this->paginate = array('conditions'=>array('Manufacturer.id'=>$catproduct),'limit' => '15','order' => 'Manufacturer.id DESC');
	    $this->set('manufacturer', $this->paginate('Manufacturer',array()));
		
        $list_cat = $this->Manufacturer->generatetreelist(null,null,null," _ ");
	    $this->set(compact('list_cat'));
		
	}
	//them danh muc moi
	function add() {
		$this->account();
		if (!empty($this->data)) {
			$this->Manufacturer->create();
            $data['Manufacturer'] = $this->data['Manufacturer'];
			if ($this->Manufacturer->save($data['Manufacturer'])){
				$this->Session->setFlash(__('Thêm mới danh mục thành công', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Thêm mơi danh mục thất bại. Vui long thử lại', true));
			}
		}
		$this->loadModel("Manufacturer");
        $list_cat = $this->Manufacturer->generatetreelist(null,null,null," _ ");
        $this->set(compact('list_cat'));
	}
	//Sua danh muc
	function edit($id = null) {
		$this->account();
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Không tồn tại danh mục này', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			$data['Manufacturer'] = $this->data['Manufacturer'];
			if ($this->Manufacturer->save($data['Manufacturer'])){
				$this->Session->setFlash(__('Sửa thành công', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Sủa không thành công. Vui long thử lại', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Manufacturer->read(null, $id);
		}
		$this->set('list_cat',$this->_find_list());
        $this->set('edit',$this->Manufacturer->findById($id));
	}
	//dong danh muc
	function close($id=null) {
		$this->account();
		if (empty($id)) {
			$this->Session->setFlash(__('Khôn tồn tại danh mục này', true));
			$this->redirect(array('action'=>'index'));
		}
		$data['Manufacturer'] = $this->data['Manufacturer'];
		$data['Manufacturer']['id']=$id;
		$data['Manufacturer']['status']=0;		
		if ($this->Manufacturer->save($data['Manufacturer'])) {
			$this->Session->setFlash(__('Danh mục không được hiển thị', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Danh mục không close được', true));
		$this->redirect(array('action' => 'index'));

	}
    function closes($id=null) {
		$this->account();
		if (empty($id)) {
			$this->Session->setFlash(__('Khôn tồn tại danh mục này', true));
			$this->redirect(array('action'=>'index'));
		}
		$data['Manufacturer'] = $this->data['Manufacturer'];
		$data['Manufacturer']['id']=$id;
		$data['Manufacturer']['status']=0;		
		if ($this->Catproduct->save($data['Catproduct'])) {
			$this->Session->setFlash(__('Danh mục không được hiển thị', true));
			echo "<script>history.go(-1);</script>";
		}
		$this->Session->setFlash(__('Danh mục không close được', true));
		$this->redirect(array('action' => 'index'));

	}
	// kich hoat
	function active($id=null) {
		$this->account();
		if (empty($id)) {
			$this->Session->setFlash(__('Khôn tồn tại danh mục này', true));
			$this->redirect(array('action'=>'index'));
		}
		$data['Manufacturer'] = $this->data['Manufacturer'];
		$data['Manufacturer']['id']=$id;
		$data['Manufacturer']['status']=1;
		if ($this->Manufacturer->save($data['Manufacturer'])) {
			$this->Session->setFlash(__('Danh mục kích hoạt thành công', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Danh mục không kich hoạt được', true));
		$this->redirect(array('action' => 'index'));

	}

	//Xoa danh muc
	function delete($id = null) {	
		$this->account();	
		if (empty($id)) {
			$this->Session->setFlash(__('Khôn tồn tại danh mục này', true));
			//$this->redirect(array('action'=>'index'));
		}
		if ($this->Manufacturer->delete($id)) {
			$this->Session->setFlash(__('Xóa danh mục thành công', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Danh mục không xóa được', true));
		$this->redirect(array('action' => 'index'));
	}
	//list danh sach cac danh muc
	function _find_list() {
		return $this->Manufacturer->generatetreelist(null, null, null, '__');
	}
	//check ton tai tai khoan
	function account(){
		if(!$this->Session->read("id") || !$this->Session->read("name")){
			$this->redirect('/');
		}
	}
	function beforeFilter(){
		$this->layout='admin';
	}

}
?>
