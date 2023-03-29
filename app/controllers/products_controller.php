<?php



class ProductsController extends AppController {



	var $name = 'Products';

	var $uses=array('Product','Catproduct');

	var $helpers = array('Html','Ajax','Javascript');

	var $components = array( 'RequestHandler' );

	function index() {

		//list danh sach tin tuc

		mysql_query("SET names utf8");

		$this->paginate = array('conditions'=>array('Product.status'=>1),'order'=>'Product.id DESC','limit'=>21);

	    $this->set('products', $this->paginate('Product',array()));	

        

	}

    function dssanpham($id=null) {

		//list danh sach tin tuc

		mysql_query("SET names utf8");

        $check=$this->Catproduct->find('list',array('conditions'=>array('Catproduct.parent_id'=>$id),'fields' => array('Catproduct.id')));		

        //var_dump($check); exit();

	    if($check!=null){

	       $this->paginate = array('conditions'=>array('Catproduct.status'=>1,'Catproduct.parent_id'=>$id),'order'=>'Catproduct.id ASC','limit'=>9);

	       $this->set('catproduct', $this->paginate('Catproduct',array()));	

            $this->set('cat',$this->Catproduct->read(null,$id));

            }else{

                $this->paginate = array('conditions'=>array('Product.status'=>1,'Product.catproduct_id'=>$id),'order'=>'Product.id DESC','limit'=>9);

        	      $this->set('products', $this->paginate('Product',array()));	

        		  $this->set('cat',$this->Catproduct->read(null,$id));

            }

            

	}

    function all($id=null) {

		//list danh sach tin tuc

		mysql_query("SET names utf8");

        $check=$this->Catproduct->find('list',array('conditions'=>array('Catproduct.parent_id'=>$id),'fields' => array('Catproduct.id')));		

        //var_dump($check); exit();

	    if($check!=null){

	       $this->paginate = array('conditions'=>array('Product.status'=>1,'Product.catproduct_id'=>$check),'order'=>'Product.id DESC','limit'=>18);

        	      $this->set('products', $this->paginate('Product',array()));

            $this->set('cat',$this->Catproduct->read(null,$id));

            }else{

                $this->paginate = array('conditions'=>array('Product.status'=>1,'Product.catproduct_id'=>$id),'order'=>'Product.id DESC','limit'=>18);

        	      $this->set('products', $this->paginate('Product',array()));	

        		  $this->set('cat',$this->Catproduct->read(null,$id));

            }

            

	}

    function khuyenmai() {

		//list danh sach tin tuc

		mysql_query("SET names utf8");

        

                $this->paginate = array('conditions'=>array('Product.status'=>1,'Product.spkuyenmai'=>1),'order'=>'Product.id DESC','limit'=>18);

        	      $this->set('products', $this->paginate('Product',array()));	

        		  $this->set('cat','Sản phẩm khuyến mãi');        

            

	}

    function vip() {

		//list danh sach tin tuc

		mysql_query("SET names utf8");

        

                $this->paginate = array('conditions'=>array('Product.status'=>1,'Product.sptieubieu'=>1),'order'=>'Product.id DESC','limit'=>18);

        	      $this->set('products', $this->paginate('Product',array()));	

        		  $this->set('cat','Sản phẩm trung & cao cấp');        

            

	}

	function vpp() {

		//list danh sach tin tuc

		mysql_query("SET names utf8");

        $dem=$this->Catproduct->find('list',array('conditions'=>array('Catproduct.parent_id'=>'21'),'fields' => array('Catproduct.id')));

		$this->paginate = array('conditions'=>array('Product.status'=>1,'Product.catproduct_id'=>$dem),'order'=>'Product.id DESC','limit'=>12);

	    $this->set('products', $this->paginate('Product',array()));	

        $this->set('newsproducts', $this->Product->find('all',array('conditions'=>array('Product.status'=>1,'Product.catproduct_id'=>$dem,'Product.sptieubieu'=>'1'),'limit'=>16,'order' => 'Product.id DESC')));

        

	}

    function thietbivp() {

		//list danh sach tin tuc

		mysql_query("SET names utf8");

        $dem=$this->Catproduct->find('list',array('conditions'=>array('Catproduct.parent_id'=>'22'),'fields' => array('Catproduct.id')));

		$this->paginate = array('conditions'=>array('Product.status'=>1,'Product.catproduct_id'=>$dem),'order'=>'Product.id DESC','limit'=>12);

	    $this->set('products', $this->paginate('Product',array()));	

        $this->set('newsproducts', $this->Product->find('all',array('conditions'=>array('Product.status'=>1,'Product.catproduct_id'=>$dem,'Product.sptieubieu'=>'1'),'limit'=>16,'order' => 'Product.id DESC')));

	}

    function thietbicntt() {

		//list danh sach tin tuc

		mysql_query("SET names utf8");

        $dem=$this->Catproduct->find('list',array('conditions'=>array('Catproduct.parent_id'=>'23'),'fields' => array('Catproduct.id')));

		$this->paginate = array('conditions'=>array('Product.status'=>1,'Product.catproduct_id'=>$dem),'order'=>'Product.id DESC','limit'=>12);

	    $this->set('products', $this->paginate('Product',array()));	

        $this->set('newsproducts', $this->Product->find('all',array('conditions'=>array('Product.status'=>1,'Product.catproduct_id'=>$dem,'Product.sptieubieu'=>'1'),'limit'=>16,'order' => 'Product.id DESC')));

	}

	function listproduct($id=null) {

		$name=str_replace( '.html', '', $id ); 
        //$ids=$this->Catproduct->find('all',array('conditions'=>array('Catproduct.alias'=>$name),'limit'=>1,'order' => 'Catproduct.id DESC'));
	    $id=$this->Catproduct->find('list',array('conditions'=>array('Catproduct.alias'=>$name),'fields' => array('Catproduct.id')));
        $id=array_values($id); 
        $id=$id[0];
        
        //$this->set('cat',$this->Catproduct->read(null,$id));
        $catt =$this->Catproduct->read(null,$id);
        $check = $this->Catproduct->find('list',array('conditions'=>array('Catproduct.lft >='=>$catt['Catproduct']['lft'],'Catproduct.rght <='=>$catt['Catproduct']['rght']),'fields'=>array('Catproduct.id')));
        //echo $check; die;//$check=$this->Catproduct->find('list',array('conditions'=>array('Catproduct.parent_id'=>$id),'fields' => array('Catproduct.id')));		
        //var_dump($check); exit();
	    if($check!=null)
        {
                $this->paginate = array('conditions'=>array('Product.status'=>1,'Product.catproduct_id'=>$check),'order'=>'Product.id DESC','limit'=>21);
                $this->set('products', $this->paginate('Product',array()));
                $this->set('cat',$this->Catproduct->read(null,$id));
            //}
        }else{
            $this->paginate = array('conditions'=>array('Product.status'=>1,'Product.catproduct_id'=>$id),'order'=>'Product.id DESC','limit'=>21);
    	      $this->set('products', $this->paginate('Product',array()));	
    		  $this->set('cat',$this->Catproduct->read(null,$id));
        }
	}

	function listsp1($id=null) {

		//list danh sach tin tuc

		mysql_query("SET names utf8");

		 $this->paginate = array('conditions'=>array('Product.status'=>1,'Product.catproduct_id'=>$id),'order'=>'Product.id DESC','limit'=>9);

	      $this->set('products', $this->paginate('Product',array()));	

		  $this->set('cat',$this->Catproduct->read(null,$id));	

	}

	function listsp12($id=null) {

		//list danh sach tin tuc

		mysql_query("SET names utf8");

		 $this->paginate = array('conditions'=>array('Product.status'=>1,'Product.catproduct_id'=>$id),'order'=>'Product.id DESC','limit'=>10);

	      $this->set('products', $this->paginate('Product',array()));	

		  $this->set('cat',$this->Catproduct->read(null,$id));	

	}

	function listsp2($id=null) {

		//list danh sach tin tuc

		mysql_query("SET names utf8");

		 $this->paginate = array('conditions'=>array('Product.status'=>1,'Product.catproduct_id'=>$id),'order'=>'Product.id DESC','limit'=>10);

	      $this->set('products', $this->paginate('Product',array()));	

		  $this->set('cat',$this->Catproduct->read(null,$id));	

	}

	



    function search() {

		/*$this->loadModel("Catproduct");

        $keyword= $_POST['name_search'];

 		if(isset($_POST['dm']))

        {

 		$list_cat=$_POST['dm'];

        }

        if(isset($_POST['hsx']))

        {

 		$hsx=$_POST['hsx'];

        }

        if(isset($_POST['gia']))

        {

 		$gia=$_POST['gia'];

        }

 		if(($list_cat!="")&&($hsx=="")&&($gia=="")){

 		     $po1=$this->Catproduct->find('list',array('conditions'=>array('Catproduct.status'=>1,'Catproduct.parent_id'=>$list_cat),'fields' => array('Catproduct.id')));

	         

	         if($po1!=null){

	 		$this->paginate = array('conditions'=>array('Product.status'=>1,'Product.title LIKE'=>'%'.$keyword.'%','Product.catproduct_id'=>$po1),'limit' => '21','order' => 'Product.id DESC');

	 	       $this->set('products', $this->paginate('Product',array()));

	            }else{

	             $this->paginate = array('conditions'=>array('Product.status'=>1,'Product.title LIKE'=>'%'.$keyword.'%','Product.catproduct_id'=>$list_cat),'limit' => '21','order' => 'Product.id DESC');

	 	       $this->set('products', $this->paginate('Product',array()));

	            }

	         } 



         if(($list_cat!="")&&($hsx!="")&&($gia=="")){

 		$po1=$this->Catproduct->find('list',array('conditions'=>array('Catproduct.status'=>1,'Catproduct.parent_id'=>$list_cat),'fields' => array('Catproduct.id')));

	         

	         if($po1!=null){

	 		$this->paginate = array('conditions'=>array('Product.status'=>1,'Product.title LIKE'=>'%'.$keyword.'%','Product.catproduct_id'=>$po1,'Product.manufacturer'=>$hsx),'limit' => '21','order' => 'Product.id DESC');

	 	       $this->set('products', $this->paginate('Product',array()));

	            }else{

	             $this->paginate = array('conditions'=>array('Product.status'=>1,'Product.title LIKE'=>'%'.$keyword.'%','Product.catproduct_id'=>$list_cat,'Product.manufacturer'=>$hsx),'limit' => '21','order' => 'Product.id DESC');

	 	       $this->set('products', $this->paginate('Product',array()));

	            }

	         } 

 	

         if(($list_cat!="")&&($hsx=="")&&($gia!="")){

 		$po1=$this->Catproduct->find('list',array('conditions'=>array('Catproduct.status'=>1,'Catproduct.parent_id'=>$list_cat),'fields' => array('Catproduct.id')));

	         

	         if($po1!=null){

	 		$this->paginate = array('conditions'=>array('Product.status'=>1,'Product.title LIKE'=>'%'.$keyword.'%','Product.catproduct_id'=>$po1,'Product.khoanggia'=>$gia),'limit' => '21','order' => 'Product.id DESC');

	 	       $this->set('products', $this->paginate('Product',array()));

	            }else{

	             $this->paginate = array('conditions'=>array('Product.status'=>1,'Product.title LIKE'=>'%'.$keyword.'%','Product.catproduct_id'=>$list_cat,'Product.khoanggia'=>$gia),'limit' => '21','order' => 'Product.id DESC');

	 	       $this->set('products', $this->paginate('Product',array()));

	            }

	         } 

 		 if(($list_cat!="")&&($hsx!="")&&($gia!="")){

 		$po1=$this->Catproduct->find('list',array('conditions'=>array('Catproduct.status'=>1,'Catproduct.parent_id'=>$list_cat),'fields' => array('Catproduct.id')));

	         

	         if($po1!=null){

	 		$this->paginate = array('conditions'=>array('Product.status'=>1,'Product.title LIKE'=>'%'.$keyword.'%','Product.catproduct_id'=>$po1,'Product.khoanggia'=>$gia,'Product.manufacturer'=>$hsx),'limit' => '21','order' => 'Product.id DESC');

	 	       $this->set('products', $this->paginate('Product',array()));

	            }else{

	             $this->paginate = array('conditions'=>array('Product.status'=>1,'Product.title LIKE'=>'%'.$keyword.'%','Product.catproduct_id'=>$list_cat,'Product.khoanggia'=>$gia,'Product.manufacturer'=>$hsx),'limit' => '21','order' => 'Product.id DESC');

	 	       $this->set('products', $this->paginate('Product',array()));

	            }

	         } 

           if(($list_cat=="")&&($hsx=="")&&($gia!="")){ 		

	             $this->paginate = array('conditions'=>array('Product.status'=>1,'Product.title LIKE'=>'%'.$keyword.'%','Product.khoanggia'=>$gia),'limit' => '21','order' => 'Product.id DESC');

	 	       $this->set('products', $this->paginate('Product',array()));

	    

 		 }

           if(($list_cat=="")&&($hsx!="")&&($gia=="")){

 		

	             $this->paginate = array('conditions'=>array('Product.status'=>1,'Product.title LIKE'=>'%'.$keyword.'%','Product.manufacturer'=>$hsx),'limit' => '21','order' => 'Product.id DESC');

	 	       $this->set('products', $this->paginate('Product',array()));

	    

 		 }

           if(($list_cat=="")&&($hsx!="")&&($gia!="")){

 		

	             $this->paginate = array('conditions'=>array('Product.status'=>1,'Product.title LIKE'=>'%'.$keyword.'%','Product.manufacturer'=>$hsx,'Product.khoanggia'=>$gia),'limit' => '21','order' => 'Product.id DESC');

	 	       $this->set('products', $this->paginate('Product',array()));

	    

 		 }

           if(($list_cat=="")&&($hsx=="")&&($gia=="")){

 		

	             $this->paginate = array('conditions'=>array('Product.status'=>1,'Product.title LIKE'=>'%'.$keyword.'%'),'limit' => '21','order' => 'Product.id DESC');

	 	       $this->set('products', $this->paginate('Product',array()));

	    

 		 }


	    $keyword="";

	 	   $list_cat="";

	 	  

	 	   if(isset($_POST['keyword']))

	 		$keyword=$_POST['keyword'];

	 		

	 		if(isset($_POST['system']))

	         

	 		$list_cat=$_POST['system'];

	 		if(($keyword!="")&&($list_cat=="")){

	 		//['Product.title LIKE']='%'.$keyword.'%';

	 		$this->paginate = array('conditions'=>array('Product.title LIKE'=>'%'.$keyword.'%'),'limit' => '21','order' => 'Product.id DESC');

	 	   $this->set('products', $this->paginate('Product',array()));

	         }

	 				

	 		 if(($keyword=="")&&($list_cat!="")){

	 		$po1=$this->Catproduct->find('list',array('conditions'=>array('Catproduct.parent_id'=>$list_cat),'fields' => array('Catproduct.id')));

	         

	         if($po1!=null){

	 		$this->paginate = array('conditions'=>array('Product.catproduct_id'=>$po1),'limit' => '21','order' => 'Product.id DESC');

	 	       $this->set('products', $this->paginate('Product',array()));

	            }else{

	             $this->paginate = array('conditions'=>array('Product.catproduct_id'=>$list_cat),'limit' => '21','order' => 'Product.id DESC');

	 	       $this->set('products', $this->paginate('Product',array()));

	            }

	         }

	        if(($keyword!="")&&($list_cat!="")){

	 		$po2=$this->Catproduct->find('list',array('conditions'=>array('Catproduct.parent_id'=>$list_cat),'fields' => array('Catproduct.id')));

	         if($po2!=null){

	 		$this->paginate = array('conditions'=>array('Product.title LIKE'=>'%'.$keyword.'%','Product.catproduct_id'=>$po2),'limit' => '21','order' => 'Product.id DESC');

	 	       $this->set('products', $this->paginate('Product',array()));

	            }else{

	             $this->paginate = array('conditions'=>array('Product.title LIKE'=>'%'.$keyword.'%','Product.catproduct_id'=>$list_cat),'limit' => '21','order' => 'Product.id DESC');

	 	       $this->set('products', $this->paginate('Product',array()));

	            }

	         }	       

	 */

    if(isset($_POST['name_search'])){

	$name_search = $_POST['name_search'];

    //var_dump($name_search); exit();

    }		

	$this->paginate = array('conditions'=>array('Product.status'=>1,'Product.title like'=>'%'.$name_search.'%'),'limit'=>20);		

    $this->set('products', $this->paginate('Product',array()));

	}
	function loc($id=null) {
		

	$this->paginate = array('conditions'=>array('Product.status'=>1,'Product.khoanggia '=>$id),'limit'=>20);		

    $this->set('products', $this->paginate('Product',array()));

	}

	function view($id=null) {

		mysql_query("SET names utf8");

		if (!$id) {

			$this->Session->setFlash(__('Không tồn tại', true));

			$this->redirect(array('action' => 'index'));

		}
		$name=str_replace( '.html', '', $id ); 
        
	    $id=$this->Product->find('list',array('conditions'=>array('Product.alias'=>$name),'fields' => array('Product.id')));
        $id=array_values($id); 
        $id= $id[0];	
        // if(isset($_GET['vote']))

        // {

        //     $view=$this->Product->query("SELECT numvote, vote, alias FROM products WHERE id=$id limit 1");

        //      $view[0]['products']['numvote']++; 

        //      $dem =$view[0]['products']['numvote'];  

        //      $alias =$view[0]['products']['alias'];            

        //      $vote =$view[0]['products']['vote'] + $_GET['vote'];

        //     $this->Product->query("UPDATE products SET numvote=$dem , vote=$vote WHERE id=$id");    

        //     echo '<script language="javascript" type="text/javascript"> alert("Bình chọn thành công!"); window.location.replace("'.DOMAIN.'chi-tiet-san-pham/'.$id.'/'.$alias.'.html"); </script>';

        // }

		$this->set('views', $this->Product->read(null, $id));

		$this->set('news', $this->Catproduct->read(null, $id));

		$name=$this->Product->read(null, $id);       

  		$this->set('views',$name);		

        $this->paginate = array('conditions'=>array('Product.status'=>1,'Product.catproduct_id'=>$name['Product']['catproduct_id'],'Product.id <>'=>$name['Product']['id']),'order'=>'Product.id DESC','limit'=>8);

	    $this->set('sanphamkhac', $this->paginate('Product',array()));

        

        $product=$this->Product->read(null,$id);	

//	

	if(!isset($_SESSION['cachesp'])){  $_SESSION['cachesp']=array();};

	 		

	 if(isset($_SESSION['cachesp']))	 

	 {   

	 	 

	 	 $cachesp=$_SESSION['cachesp'];

	 	 if(!isset($cachesp[$id]))		

		 {			

		 		$cachesp[$id]['pid'] = $id;		

				$cachesp[$id]['name']=$product['Product']['title'];	

                $cachesp[$id]['alias']=$product['Product']['alias'];

				$cachesp[$id]['images']=$product['Product']['images'];					

				$cachesp[$id]['price'] = $product['Product']['price'];								

				$_SESSION['cachesp']=$cachesp;								

	         }

	 	}	

	}

	

//shopping	



function addshopingcart($id=null){

		$product=$this->Product->read(null,$id);	

//	

	if(!isset($_SESSION['shopingcart'])){  $_SESSION['shopingcart']=array();};

	 		

	 if(isset($_SESSION['shopingcart']))	 

	 {   

	 	 

	 	 $shopingcart=$_SESSION['shopingcart'];

	 	 if(isset($shopingcart[$id]))

		 {		 	

			 $shopingcart[$id]['sl']= $shopingcart[$id]['sl']+1;

			 $shopingcart[$id]['total']= $shopingcart[$id]['price']*$shopingcart[$id]['sl'];			

			 $_SESSION['shopingcart']=$shopingcart;			 

			echo '<script language="javascript"> alert("Thêm thành công"); window.location.replace("'.DOMAIN.'/products/viewshopingcart"); </script>';

		 }

	     else

		 {			

		 		$shopingcart[$id]['pid'] = $id;		

				$shopingcart[$id]['name']=$product['Product']['title'];	

				$shopingcart[$id]['images']=$product['Product']['images'];
                	
                $shopingcart[$id]['donvi']=$product['Product']['donvi'];

				$shopingcart[$id]['sl']=1;

				$shopingcart[$id]['price'] = $product['Product']['price'];				

				$shopingcart[$id]['total']= $product['Product']['price']*$shopingcart[$id]['sl'];

				$_SESSION['shopingcart']=$shopingcart;				

				echo '<script language="javascript" type="text/javascript"> alert("Thêm giỏ hàng thành công"); window.location.replace("'.DOMAIN.'products/viewshopingcart"); </script>';

	         }

	 	}	

	}



	function deleteshopingcart($id=null){



			if(isset($_SESSION['shopingcart']))

		 {   

			 $shopingcart=$_SESSION['shopingcart'];			 

			  if(isset($shopingcart[$id]))

			  unset($shopingcart[$id]);

              $idd = "files";

    		  if(isset($shopingcart[$idd]))

    		  unset($shopingcart[$idd]);

			  $_SESSION['shopingcart']=$shopingcart;              			  

              $sl=count($_SESSION['shopingcart']);

              if($sl==0){unset($_SESSION['shopingcart']);echo '<script language="javascript" type="text/javascript"> alert("San pham trong gio hang da bi xoa het!"); window.location.replace("'.DOMAIN.'home"); </script>';}

              $this->redirect('viewshopingcart');

		 }



		



	}

    function cache(){

 			 

    		  unset($_SESSION['cachesp']);			

    $this->redirect(array('action' => 'index'));

	}

	



	function order($id=null){



		mysql_query("SET names utf8");



		if (!$id) {



			$this->Session->setFlash(__('Không tồn tại', true));



			$this->redirect(array('action' => 'index'));



		}



		$this->set('buy', $this->News->read(null, $id));



		}



	



function viewshopingcart(){



        //unset($_SESSION['shopingcart']);

        //var_dump($_SESSION['shopingcart']); exit();

        if(isset($_SESSION['shopingcart']))

		 {

		  $shopingcart=$_SESSION['shopingcart'];	

		  $idd = "files";

		  if(isset($shopingcart[$idd])){

		  unset($shopingcart[$idd]);

		  $_SESSION['shopingcart']=$shopingcart; 

          }

          $shopingcart=$_SESSION['shopingcart'];		 

		 $this->set(compact('shopingcart'));

		 }

		 else

		 {

			 echo '<script language="javascript"> alert("Chua co san pham nao trong gio hang"); window.location.replace("'.DOMAIN.'home"); </script>';

		 }



	}







	function updateshopingcart($id=null){



		



		if(isset($_SESSION['shopingcart']))



		 {   



			 $shopingcart=$_SESSION['shopingcart'];			 



			  if(isset($shopingcart[$id]))



			  {



				  $shopingcart[$id]['sl']=$_POST['soluong'];			



				  $shopingcart[$id]['total']= $shopingcart[$id]['sl']*$shopingcart[$id]['price'];



			  }



			  $_SESSION['shopingcart']=$shopingcart;



			 



			  $this->redirect('viewshopingcart');



		 }



	}



	function buy(){


    
    
		if(isset($_SESSION['shopingcart']))



		 {  

        // if($_POST['bank']==0){
        //        echo '<script language="javascript"> alert("Bạn chưa lựa chọn hình thức vận chuyển"); window.location.replace("'.DOMAIN.'xem-gio-hang"); </script>';
         
        //     }else{
        //         $_SESSION['bank']=$_POST['bank'];
        //     }

		 	 $shopingcart=$_SESSION['shopingcart'];			 



			 $this->set(compact('shopingcart'));



		 }



		 else



		 {



			 echo '<script language="javascript"> alert("Không có sản phẩm nào trong giỏ hàng của bạn"); window.location.replace("'.DOMAIN.'"); </script>';



		 }



	}

  function category($id=null) {

		mysql_query("SET names utf8");

		if (!$id) {

			$this->Session->setFlash(__('Không tồn tại', true));

			$this->redirect(array('action' => 'index'));

		}

		$this->set('products',$this->Product->find('all',array('conditions'=>array('Product.status'=>1,'category_id'=>$id),'order'=>'Product.id DESC')));

	}

	

	function getproduct($id=null)

	{

		return  $this->Product->read(null, $id);

	}

}

?>

