<?php
class product_model{
    public $id;
    public $name;

    public function __construct($name,$id) {
        $this->id = $id;
        $this->name = $name;
    }

    public static function get($product_id){
        $list = [];
        $db = Db::getInstance();
        if($result = mysqli_query($db,"SELECT * FROM product where id = $product_id")) {
            if($row = mysqli_fetch_assoc($result)){
                $list = new product_model($row['name'],$row['id']);
            }
        }



        return $list;
    }
}


?>