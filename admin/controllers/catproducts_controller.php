<?php
class CatproductsController extends AppController {

	var $name = 'Catproducts';	
	var $uses=array('Catproduct');
	var $helpers = array('Html', 'Form', 'Javascript', 'TvFck');
	//list danh sach cac danh muc
	function index() {	
	   $this->account();	 
	   $this->paginate = array('conditions'=>array(),'limit' => '20','order' => 'Catproduct.id DESC');
	   $this->set('Catproduct', $this->paginate('Catproduct',array()));
	   
       $list_cat = $this->Catproduct->generatetreelist(null,null,null," _ ");
	   $this->set(compact('list_cat'));
	}
	//tim kiem
	function search($name_search=null){
		mysql_query("SET names utf8");
		if(isset($_POST['name_search'])){
		$title = $_POST['name_search'];
        }else{
        $title = "";
        }
		$this->paginate = array('conditions'=>array('Catproduct.status'=>1,'Catproduct.name LIKE'=>'%'.$title.'%'),'limit' => '15','order' => 'Catproduct.id DESC');
	   $this->set('listsearch', $this->paginate('Catproduct',array()));
	}
	//them danh muc moi
	function add() {
		$this->account();
		if (!empty($this->data)) {
			$this->Catproduct->create();
			$data['Catproduct'] = $this->data['Catproduct'];
            $data['Catproduct']['images'] = $_POST['userfile'];	
            $data['Catproduct']['img'] = $_POST['userfile1'];	
			if ($this->Catproduct->save($data['Catproduct'])){
				$this->Session->setFlash(__('Thêm mới danh mục thành công', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Thêm mơi danh mục thất bại. Vui long thử lại', true));
			}
		}
		$this->loadModel("Catproduct");
        $Catproductlist = $this->Catproduct->generatetreelist(null,null,null," _ ");
        $this->set(compact('Catproductlist'));
	}
	//Sua danh muc
	function edit($id = null) {
		$this->account();
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Không tồn tại danh mục này', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
		     $data['Catproduct'] = $this->data['Catproduct'];
            $data['Catproduct']['images'] = $_POST['userfile'];	
            $data['Catproduct']['img'] = $_POST['userfile1'];
			if ($this->Catproduct->save($data['Catproduct'])){
				$this->Session->setFlash(__('Sửa thành công', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Sủa không thành công. Vui long thử lại', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Catproduct->read(null, $id);
		}
		$this->set('list_cat',$this->_find_list());
	}
	
	
    function activeindex($id=null) {
        mysql_query("SET names utf8");
		$this->account();
        //$d=1;
        $this->Catproduct->id = $id; // This avoids the query performed by read()
        $this->Catproduct->saveField('show',1);
        $this->Session->setFlash(__('Danh mục không được hiển thị', true));
		$this->redirect(array('action'=>'index'));
	}
    function closeindex($id=null) {
		$this->account();
		mysql_query("SET names utf8");
        $this->Catproduct->id = $id; // This avoids the query performed by read()
        $this->Catproduct->saveField('show',0);

        $this->Session->setFlash(__('Danh mục không được hiển thị', true));
			$this->redirect(array('action'=>'index'));

	}
	// kich hoat
	function active($id=null) {
		$this->account();
		if (empty($id)) {
			$this->Session->setFlash(__('Khôn tồn tại danh mục này', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Catproduct->id = $id; // This avoids the query performed by read()
        $this->Catproduct->saveField('status',1);
		$this->Session->setFlash(__('Danh mục không active được', true));
		$this->redirect(array('action' => 'index'));

	}
   //dong danh muc
	function close($id=null) {
	   mysql_query("SET names utf8");
		$this->account();
		if (empty($id)) {
			$this->Session->setFlash(__('Khôn tồn tại danh mục này', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Catproduct->id = $id; // This avoids the query performed by read()
        $this->Catproduct->saveField('status',0);
		$this->Session->setFlash(__('Danh mục không close được', true));
		$this->redirect(array('action' => 'index'));

	}
	//Xoa danh muc
	function delete($id = null) {	
		$this->account();	
		if (empty($id)) {
			$this->Session->setFlash(__('Khôn tồn tại danh mục này', true));
			//$this->redirect(array('action'=>'index'));
		}
		if ($this->Catproduct->delete($id)) {
			$this->Session->setFlash(__('Xóa danh mục thành công', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Danh mục không xóa được', true));
		$this->redirect(array('action' => 'index'));
	}
	 function processing() {
		$this->account();
		if(isset($_POST['dropdown']))
			$select=$_POST['dropdown'];
			
		if(isset($_POST['checkall']))
				{
			
			switch ($select){
				case 'active':
				$catproduct=($this->Catproduct->find('all'));
				foreach($catproduct as $catproduct) {
					$catproduct['Catproduct']['status']=1;
					$this->Catproduct->save($catproduct['Catproduct']);					
				}
				//vong lap active
				break;
				case 'notactive':	
				//vong lap huy
				$catproduct=($this->Catproduct->find('all'));
				foreach($catproduct as $catproduct) {
					$catproduct['Catproduct']['status']=0;
					$this->Catproduct->save($catproduct['Catproduct']);					
				}
				break;
				case 'delete':
				$catproduct=($this->Catproduct->find('all'));
				foreach($catproduct as $catproduct) {
					$this->Catproduct->delete($catproduct['Catproduct']['id']);					
				}
				if($this->Catproduct->find('count')<1)
				$this->redirect(array('action' => 'index'));
				 else
				 {
					$this->Session->setFlash(__('Danh mục không close được', true));
					
				 }
                 $this->redirect(array('action' => 'index'));
				//vong lap xoa
				break;
				
			}
		}
		else{
			
			switch ($select){
				case 'active':
				$catproduct=($this->Catproduct->find('all'));
				foreach($catproduct as $catproduct) {
					if(isset($_POST[$catproduct['Catproduct']['id']]))
					{
						$catproduct['Catproduct']['status']=1;
						$this->Catproduct->save($catproduct['Catproduct']);						
					}
                    
				}$this->redirect(array('action'=>'index'));
				//vong lap active
				break;
				case 'notactive':	
				//vong lap huy
				$catproduct=($this->Catproduct->find('all'));
				foreach($catproduct as $catproduct) {
					if(isset($_POST[$catproduct['Catproduct']['id']]))
					{
						$catproduct['Catproduct']['status']=0;
						$this->Catproduct->save($catproduct['Catproduct']);						
					}
                    
				}$this->redirect(array('action'=>'index'));
				break;
				case 'delete':
				$catproduct=($this->Catproduct->find('all'));
				foreach($catproduct as $catproduct) {
					if(isset($_POST[$catproduct['Catproduct']['id']]))
					{
					    $this->Catproduct->delete($catproduct['Catproduct']['id']);						
					}										
				}
				$this->redirect(array('action'=>'index'));
				
				//vong lap xoa
				break;
				
			}
			
		}
		$this->redirect(array('action' => 'index'));
		
	}
	//list danh sach cac danh muc
	function _find_list() {
		return $this->Catproduct->generatetreelist(null, null, null, '__');
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
