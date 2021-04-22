<?php
	require_once('models/Post.php');
	require_once('models/Category.php');
	require_once('models/User.php');
	class HomeController{
		var $post_model;
		var $category_model;
		var $user_model;
		function __construct(){
			$this->post_model=new Post();
			$this->category_model=new Category();
			$this->user_model=new User();
		}
		function index(){
			$threePosts=$this->post_model->get3Posts();
			$sixPosts=$this->post_model->get6Posts();
			$onePosts=$this->post_model->get1Posts();
			$tttPosts=$this->post_model->get66Posts();
			$ttPosts=$this->post_model->get67Posts();
			$ttttPosts=$this->post_model->get68Posts();
			$trPosts=$this->post_model->get69Posts();
			$truPosts=$this->post_model->get70Posts();
			$trunPosts=$this->post_model->get71Posts();
			$trungPosts=$this->post_model->get72Posts();
			$trunggPosts=$this->post_model->get73Posts();
			$trungggPosts=$this->post_model->get74Posts();
			$trePosts=$this->post_model->get75Posts();
			$oneUsers=$this->user_model->get1Users();
			$threeCategorys=$this->category_model->get3Categoris();
			require_once('views/home/index.php');

		}
		function homCategory(){
			$threeCategorys=$this->category_model->get3Categoris();
			$tCategorys=$this->category_model->get1Categoris();
			$trCategorys=$this->category_model->get2Categoris();
			$truCategorys=$this->category_model->get4Categoris();
			$trunCategorys=$this->category_model->get5Categoris();
			$trungCategorys=$this->category_model->get6Categoris();
			$trunggCategorys=$this->category_model->get7Categoris();
			$oneUsers=$this->user_model->get1Users();
			$trunggggCategorys=$this->category_model->get9Categoris();
			$trungggCategorys=$this->category_model->get8Categoris();
			require_once('views/home/list_1.php');
	
		}
		function listPost(){
			$oneUsers=$this->user_model->get1Users();
			$tttPosts=$this->post_model->get66Posts();
			$ttttPosts=$this->post_model->get68Posts();
			$trPosts=$this->post_model->get69Posts();
			$ttPosts=$this->post_model->get67Posts();
			$tttPosts=$this->post_model->get66Posts();
			$trePosts=$this->post_model->get75Posts();
			require_once('views/home/list_2.php');
	
		}
		function conTact(){
			$oneUsers=$this->user_model->get1Users();
			$trePosts=$this->post_model->get75Posts();
			$tttPosts=$this->post_model->get66Posts();
			require_once('views/home/list_4.php');
	
		}
		function postImg(){
			$tttPosts=$this->post_model->get66Posts();
			$trtPosts=$this->post_model->get90Posts();
			$trPosts=$this->post_model->get69Posts();
			$ttPosts=$this->post_model->get67Posts();
			$ttttPosts=$this->post_model->get68Posts();
			$oneUsers=$this->user_model->get1Users();
			require_once('views/home/list_3.php');
	
		}
	}
 ?>