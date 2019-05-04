<?php
class StudentInfo {
    private $stu_id; 
    private $class_id;
    private $stu_name;
    private $stu_sex;
    private $stu_age;
    private $stu_phone;
    private $stu_password;
    private $stu_email;
    private $stu_job;
    private $stu_address;

    public function get_stu_id(){
        return $this->$stu_id;
    }
    public function get_class_id(){
        return $this->$class_id;
    }
    public function get_stu_name(){
        return $this->$stu_name;
    }
    public function get_stu_sex(){
        return $this->$stu_sex;
    }
    public function get_stu_phone(){
        return $this->$stu_phone;
    }
    public function get_stu_password(){
        return $this->$stu_password;
    }
    public function get_stu_email(){
        return $this->$stu_email;
    }
    public function get_stu_job(){
        return $this->$stu_job;
    }
    public function get_stu_address(){
        return $this->$stu_address;
    }
    public function get_stu_age(){
        return $this->$stu_age;
    }

    /**
     * set方法 用以set对应属性
     * @param $_param_name
     * @return $this 返回this对象，用于链式调用
     */
    public function set_stu_address($_stu_address){
        $this->$stu_address = $_stu_address;
        return $this;
    }
    public function set_stu_age($_stu_age){
        $this->$stu_age = $_stu_age;
        return $this;
    }    
    public function set_stu_id($_stu_id){
        $this->$stu_id = $_stu_id;
        return $this;
    }    
    public function set_stu_name($_stu_name){
        $this->$stu_name = $_stu_name;
        return $this;
    }    
    public function set_stu_password($_stu_password){
        $this->$stu_password = $_stu_password;
        return $this;
    }    
    public function set_stu_phone($_stu_phone){
        $this->$stu_phone = $_stu_phone;
        return $this;
    }    
    public function set_stu_email($_stu_email){
        $this->$stu_email = $_stu_email;
        return $this;
    }    
    public function set_stu_sex($_stu_sex){
        $this->$stu_sex = $_stu_sex;
        return $this;
    }    
    public function set_stu_job($_stu_job){
        $this->$stu_job = $_stu_job;
        return $this;
    }    
    public function set_class_id($_class_id){
        $this->$class_id = $_class_id;
        return $this;
    }
}
?>