<?php 
class car{
    private $model;
    public function setModel($model){
        $this->model = $model;
    }
    public function hello(){
        return "beep! I am a <i>".$this->model."</i><br/>";
    }
    
}

class SportsCart extends car{
    
} 

$SportsCart1 = new SportsCart();
$SportsCart1->setModel("Honda");
echo $SportsCart1->hello();
?>