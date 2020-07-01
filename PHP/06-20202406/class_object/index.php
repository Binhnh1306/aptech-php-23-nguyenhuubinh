<?php
//tao ra khuon mau ten la xeCo su dung tu khoa class
class xeCo
{
    //properties
    public $name;
    //method
    function set_name($name)
    {
        $this->name = $name;
    }
    function get_name()
    {
       return $this->name;
    }
}
$ab = new xeCo();
$si =new xeCo();
echo 14 . "<br>";
$ab->set_name('Air Black' . "<br>");
echo $ab->get_name();
$si ->set_name('Sirius' );
echo $si-> get_name();
?>