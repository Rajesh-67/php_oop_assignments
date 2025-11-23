<?php

interface I{
    public function method1();
    public function method2($param);
}

interface J {
    public function method3();
}

interface k{
    public function method4();
}

interface L extends I,J,K{
    public function method5();
}

class A implements L{
    public function method1(){
        echo "Method 1 from interface I\n";
    }
    public function method2($param){
        echo "Method 2 from interface I with param: $param\n";
    }
    public function method3(){
        echo "Method 3 from interface J\n";
    }
    public function method4(){
        echo "Method 4 from interface K\n";
    }
    public function method5(){
        echo "Method 5 from interface L\n";
    }
}

class B implements I,J,K{
    public function method1(){
        echo "Method 1 from interface I\n";
    }
    public function method2($param){
        echo "Method 2 from interface I with param: $param\n";
    }
    public function method3(){
        echo "Method 3 from interface J\n";
    }
    public function method4(){
        echo "Method 4 from interface K\n";
    }
}

/////////////////////////////////////////////////////// Test5.php ??????????????????????????????

