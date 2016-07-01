<?php
/**
 * Author: Jiny
 * CreateTime: 2016/7/1 0001 下午 6:29
 * Description:
 */
class person{
    public $name;
    public $gender;
    public function say(){
        echo $this->name,"is",$this->gender;
    }
}

$student = new person();
$student->name = 'Tom';
$student->gender = 'male';
$student->say();
$teacher = new person();
$teacher->name = 'Kate';
$teacher->gender = 'female';
$teacher->say();

echo '<hr/>';
print_r((array)$student);
var_dump($student);echo '<hr/>';

$str = serialize($student);
echo $str;
file_put_contents('store.txt',$str);
echo '<hr/>';

$str = file_get_contents('store.txt');
$student = unserialize($str);
$student->say();
