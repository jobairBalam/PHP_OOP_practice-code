<?php

class MyClass {

    private $priv = 'priv_value';
    protected $prot = 'prot_value';
    public $pub = 'pub_value';
    public $MyClasspriv = 'second_pub_value';

}

$test = new MyClass();
echo '<pre>';
print_r((array) $test);


?>
