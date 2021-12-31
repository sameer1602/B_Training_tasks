<<<<<<< HEAD
<!-- <?php
class User{
    public function register()
    {
        echo'User Registered';
    }
    public function login($username,$password){
        echo $username.'is now logged in';
    }

public function __construct()
echo 'constructor called';

public function register(){


echo 'User Registered';
}

public function login($username,$password){
$this->auth_user($username,$password);
}
public function auth_user($username,$password){
    echo $username. ' is authenticated';
    }

public function __destruct(){
echo 'destructor called';
}
}
$User = new User;
$User->register();
// $User->login('brad','1234');
 
$User->login('brad','1234');


?> -->

<!-- <?php
class Post{
	private $name;

	public function __set($name, $value){
		echo 'Setting '.$name.' to <strong>'.$value.'</strong><br />';
		$this->name = $value;
	}

	public function __get($name){
		echo 'Getting '.$name.' <strong>'.$this->name.'</strong><br />';
	}

	public function __isset($name){
		echo 'Is '.$name.' set?<br />';
		return isset($this->name);
	}
}

$post = new Post;
$post->name = 'Testing';
echo $post->name;
var_dump(isset($post->name));

?> -->


<!-- <?php

class First{
	public $id = 23;
	protected $name = 'John Doe';

	public function saySomething($word){
		echo $word;
	}
}

class Second extends First{
	public function getName(){
		echo $this->name;
	}
}

$second = new Second;

echo $second->getName();

//echo $second->saySomething('Hello World');
?> -->
=======
<!-- <?php
class User{
    public function register()
    {
        echo'User Registered';
    }
    public function login($username,$password){
        echo $username.'is now logged in';
    }

public function __construct()
echo 'constructor called';

public function register(){


echo 'User Registered';
}

public function login($username,$password){
$this->auth_user($username,$password);
}
public function auth_user($username,$password){
    echo $username. ' is authenticated';
    }

public function __destruct(){
echo 'destructor called';
}
}
$User = new User;
$User->register();
// $User->login('brad','1234');
 
$User->login('brad','1234');


?> -->

<!-- <?php
class Post{
	private $name;

	public function __set($name, $value){
		echo 'Setting '.$name.' to <strong>'.$value.'</strong><br />';
		$this->name = $value;
	}

	public function __get($name){
		echo 'Getting '.$name.' <strong>'.$this->name.'</strong><br />';
	}

	public function __isset($name){
		echo 'Is '.$name.' set?<br />';
		return isset($this->name);
	}
}

$post = new Post;
$post->name = 'Testing';
echo $post->name;
var_dump(isset($post->name));

?> -->


<!-- <?php

class First{
	public $id = 23;
	protected $name = 'John Doe';

	public function saySomething($word){
		echo $word;
	}
}

class Second extends First{
	public function getName(){
		echo $this->name;
	}
}

$second = new Second;

echo $second->getName();

//echo $second->saySomething('Hello World');
?> -->
>>>>>>> c69f822ba61971dd887aece50ca77f7f319728e1
