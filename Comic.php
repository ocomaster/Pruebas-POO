<?php
require 'Book.php';

class Comic extends Book{

    public function __construct(
         $author,
        $title,
        $price,
        $stock,
        $id,
        private array $ilustrators,
        private int $vol
    )
    {
       parent::__construct($author,$title,$price, $stock, $id);
    }

    public function getinfo(){

        $result = "Volumen: $this->vol  <br>";

        $ul = "<ul> ---Ilustradores---";
        foreach($this->ilustrators as $ilustrator){
            $ul .= "<li> $ilustrator </li>";
        }
        $ul .= "</ul>";

        echo parent::getinfo();
        echo $result .= $ul;

     

    }


}

$comic1 = new Comic(
    'Alan Moore',
    'Batman: the killing joke',
    120.00,
    5,
    2,
    ['Ilustrador 1', 'Ilustrador 2'],
    1
);

echo $comic1->getinfo();