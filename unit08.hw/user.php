<?php 
	class user{
		var $name;
		var $email;
		var $password;
		var $avatar;

		function ttUser(){
			echo "Hiển thị thông tin!!!";
        	echo "<br>Tên: $this->name";
        	echo "<br>Email: $this->email";
        	echo "<br>Password: $this->password";
        	echo "<br>Avatar: $this->avatar";
        }
   	}
	$users = new user();

	$users->name='Trần Thanh Trung';
	$users->email='tranthanhtrung04072001@gmail.com';
	$users->password='1234567';
	$users->avatar='anh1.jpg';

	$users->ttUser();

 ?>