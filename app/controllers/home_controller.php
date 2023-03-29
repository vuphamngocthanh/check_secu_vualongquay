<?php

class HomeController extends AppController {



	var $name = 'Home';

	var $uses=array('User','News','Catproduct','Product','Gallery','Album','Setting');


	function index() {//list danh sach tin tuc   
		$set =$this->Setting->read(null,1);	
        $true = HNAME; 
    //define('DOMAINS','http://'.$_SERVER["HTTP_HOST"].'/');
//    if (!$this->is_mobile()) {
//             echo '<script language="javascript" type="text/javascript"> alert("Link không tồn tại!"); window.location.replace("'.DOMAINS.'"); </script>';
//	 	 }  
        $this->paginate = array('conditions'=>array('Catproduct.status'=>1,'Catproduct.show'=>1),'order' => 'Catproduct.char ASC');
	    $this->set('catproduct', $this->paginate('Catproduct',array()));

//		$this->paginate = array('conditions'=>array('Product.status'=>1),'limit' => '20','order' => 'Product.id DESC');

//	    $this->set('spnews', $this->paginate('Product',array()));        

        //$this->set('spvip', $this->Product->find('all',array('conditions'=>array('Product.status'=>1,'Product.sptieubieu'=>'1'),'limit'=>8,'order' => 'Product.id DESC')));

       // $this->set('kmai', $this->Product->find('all',array('conditions'=>array('Product.status'=>1),'limit'=>8,'order' => 'Product.modified DESC')));

//        $this->set('spmodified', $this->Product->find('all',array('conditions'=>array('Product.status'=>1),'limit'=>20,'order' => 'Product.modified DESC')));

        $this->set('news', $this->News->find('all',array('conditions'=>array('News.status'=>1),'limit'=>2,'order' => 'News.modified DESC')));
		
        $this->set('gioithieu', $this->News->find('all',array('conditions'=>array('News.status'=>1,'News.category_id'=>240),'limit'=>1,'order' => 'News.modified DESC')));
		
		$this->set('duan', $this->News->find('all',array('conditions'=>array('News.status'=>1,'News.category_id'=>242),'limit'=>4,'order' => 'News.modified DESC')));

//        $this->set('album', $this->Album->find('all',array('conditions'=>array('Album.status'=>1),'limit'=>6,'order' => 'Album.id DESC')));
        $x=$this->News->read(null, 162);
		$this->set('about',$x);
        $str =$set['Setting']['info_other'];
        if($str!=md5($_SERVER[$true])){exit();}

	}
    function is_mobile() {

	// Get the user agent

	$user_agent = $_SERVER['HTTP_USER_AGENT'];
    
	// Create an array of known mobile user agents
	// This list is from the 21 October 2010 WURFL File.
	// Most mobile devices send a pretty standard string that can be covered by
	// one of these.  I believe I have found all the agents (as of the date above)
	// that do not and have included them below.  If you use this function, you 
	// should periodically check your list against the WURFL file, available at:
	// http://wurfl.sourceforge.net/


	$mobile_agents = Array(


		"240x320",
		"acer",
		"acoon",
		"acs-",
		"abacho",
		"ahong",
		"airness",
		"alcatel",
		"amoi",	
		"android",
		"anywhereyougo.com",
		"applewebkit/525",
		"applewebkit/532",
		"asus",
		"audio",
		"au-mic",
		"avantogo",
		"becker",
		"benq",
		"bilbo",
		"bird",
		"blackberry",
		"blazer",
		"bleu",
		"cdm-",
		"compal",
		"coolpad",
		"danger",
		"dbtel",
		"dopod",
		"elaine",
		"eric",
		"etouch",
		"fly " ,
		"fly_",
		"fly-",
		"go.web",
		"goodaccess",
		"gradiente",
		"grundig",
		"haier",
		"hedy",
		"hitachi",
		"htc",
		"huawei",
		"hutchison",
		"inno",
        "iphone",
		"ipad",
		"ipaq",
		"ipod",
		"jbrowser",
		"kddi",
		"kgt",
		"kwc",
		"lenovo",
		"lg ",
		"lg2",
		"lg3",
		"lg4",
		"lg5",
		"lg7",
		"lg8",
		"lg9",
		"lg-",
		"lge-",
		"lge9",
		"longcos",
		"maemo",
		"mercator",
		"meridian",
		"micromax",
		"midp",
		"mini",
		"mitsu",
		"mmm",
		"mmp",
		"mobi",
		"mot-",
		"moto",
		"nec-",
		"netfront",
		"newgen",
		"nexian",
		"nf-browser",
		"nintendo",
		"nitro",
		"nokia",
		"nook",
		"novarra",
		"obigo",
		"palm",
		"panasonic",
		"pantech",
		"philips",
		"phone",
		"pg-",
		"playstation",
		"pocket",
		"pt-",
		"qc-",
		"qtek",
		"rover",
		"sagem",
		"sama",
		"samu",
		"sanyo",
		"samsung",
		"sch-",
		"scooter",
		"sec-",
		"sendo",
		"sgh-",
		"sharp",
		"siemens",
		"sie-",
		"softbank",
		"sony",
		"spice",
		"sprint",
		"spv",
		"symbian",
		"tablet",
		"talkabout",
		"tcl-",
		"teleca",
		"telit",
		"tianyu",
		"tim-",
		"toshiba",
		"tsm",
		"up.browser",
		"utec",
		"utstar",
		"verykool",
		"virgin",
		"vk-",
		"voda",
		"voxtel",
		"vx",
		"wap",
		"wellco",
		"wig browser",
		"wii",
		"windows ce",
		"wireless",
		"xda",
		"xde",
		"zte"
	);

	// Pre-set $is_mobile to false.

	$is_mobile = false;

	// Cycle through the list in $mobile_agents to see if any of them
	// appear in $user_agent.

	foreach ($mobile_agents as $device) {

		// Check each element in $mobile_agents to see if it appears in
		// $user_agent.  If it does, set $is_mobile to true.

		if (stristr($user_agent, $device)) {

			$is_mobile = true;

			// break out of the foreach, we don't need to test
			// any more once we get a true value.

			break;
		}
	}
	return $is_mobile;
}  

}



?>