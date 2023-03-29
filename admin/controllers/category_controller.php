<?php
class CategoryController extends AppController {

	var $name = 'Category';
	var $uses=array('Category');
	var $helpers = array('Html', 'Form', 'Javascript', 'TvFck');
	//list danh sach cac danh muc
	function index() {	
	   $this->account();
	  // $conditions=array('Category.status'=>1);	
	   $this->paginate = array('limit' => '25','order' => 'Category.id DESC');
	   $this->set('category', $this->paginate('Category',array()));
	   
	   $this->loadModel("Category");
       $list_cat = $this->Category->generatetreelist(null,null,null," _ ");
	   $this->set(compact('list_cat'));
	}
	function search($name_search=null){
		mysql_query("SET names utf8");
        if(isset($_POST['name_search'])){
		$title = $_POST['name_search'];
        }else{
        $title = "";
        }
		$this->paginate = array('conditions'=>array('Category.status'=>1,'Category.name LIKE'=>'%'.$title.'%'),'limit' => '15','order' => 'Category.id DESC');
	   $this->set('category', $this->paginate('Category',array()));
	}
	//them danh muc moi
	function add() {
		$this->account();      
		if (!empty($this->data)) {
			$this->Category->create();
			$data['Category'] = $this->data['Category'];
            $data['Category']['images'] = $_POST['userfile'];	
			if ($this->Category->save($data['Category']))
            {
				$this->Session->setFlash(__('Thêm mới danh mục thành công', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Thêm mơi danh mục thất bại. Vui long thử lại', true));
			}
		}
		$this->loadModel("Category");
        $categorylist = $this->Category->generatetreelist(null,null,null," _ ");
        $this->set(compact('categorylist'));
	}
	//Sua danh muc
	function edit($id = null) {
		$this->account();
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Không tồn tại danh mục này', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			$data['Category'] = $this->data['Category'];
            $data['Category']['images'] = $_POST['userfile'];	
			if ($this->Category->save($data['Category'])){
				$this->Session->setFlash(__('Sửa thành công', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Sủa không thành công. Vui long thử lại', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Category->read(null, $id);
		}
		$this->set('list_cat',$this->_find_list());
	}
	//dong danh muc
	function close($id=null) {
		$this->account();
		if (empty($id)) {
			$this->Session->setFlash(__('Khôn tồn tại danh mục này', true));
			$this->redirect(array('action'=>'index'));
		}
		$data['Category'] = $this->data['Category'];
		$data['Category']['id']=$id;
		$data['Category']['status']=0;		
		if ($this->Category->save($data['Category'])) {
			$this->Session->setFlash(__('Danh mục không được hiển thị', true));
			$this->redirect(array('action'=>'index'));
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
		$data['Category'] = $this->data['Category'];
		$data['Category']['id']=$id;
		$data['Category']['status']=1;
		if ($this->Category->save($data['Category'])) {
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
		if ($this->Category->delete($id)) {
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
				$category=($this->Category->find('all'));
				foreach($category as $category) {
					$category['Category']['status']=1;
					$this->Category->save($category['Category']);					
				}
				//vong lap active
				break;
				case 'notactive':	
				//vong lap huy
				$category=($this->Category->find('all'));
				foreach($category as $category) {
					$category['Category']['status']=0;
					$this->Category->save($category['Category']);					
				}
				break;
				case 'delete':
				$category=($this->Category->find('all'));
				foreach($category as $category) {
					$this->Category->delete($category['Category']['id']);					
				}
				if($this->Category->find('count')<1)
				$this->redirect(array('action' => 'index'));
				 else
				 {
					$this->Session->setFlash(__('Danh mục không close được', true));
					$this->redirect(array('action' => 'index'));
				 }
				//vong lap xoa
				break;
				
			}
		}
		else{
			
			switch ($select){
				case 'active':
				$category=($this->Category->find('all'));
				foreach($category as $category) {
					if(isset($_POST[$category['Category']['id']]))
					{
						$category['Category']['status']=1;
						$this->Category->save($category['Category']);
						$this->redirect(array('action'=>'index'));
					}
				}
				//vong lap active
				break;
				case 'notactive':	
				//vong lap huy
				$category=($this->Category->find('all'));
				foreach($category as $category) {
					if(isset($_POST[$category['Category']['id']]))
					{
						$category['Category']['status']=0;
						$this->Category->save($category['Category']);
						$this->redirect(array('action'=>'index'));
					}
				}
				break;
				case 'delete':
				$category=($this->Category->find('all'));
				foreach($category as $category) {
					if(isset($_POST[$category['Category']['id']]))
					{
					    $this->Category->delete($category['Category']['id']);
						$this->redirect(array('action'=>'index'));
					}
										
				}
				
				die;	
				//vong lap xoa
				break;
				
			}
			
		}
		$this->redirect(array('action' => 'index'));
		
	}
	//list danh sach cac danh muc
	function _find_list() {
		return $this->Category->generatetreelist(null, null, null, '__');
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
