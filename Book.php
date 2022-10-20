<?php

class Book{

    //Propiedades


    //Metodos

    public function __construct(
       private string $author,
       private string $title,
       private float $price,
       private int $stock,
       private int $id 
           ) 
    {
    }

    public function getinfo(){
        $info = "<b>  $this->title </b> escrito por: $this->author <br/>
                       Precio: $this->price <br/>
                       existencia: $this->stock <br/>
        ";

        if($this->stock > 0){
            $info .= "Cantidas disponible: <span style='color:green'> $this->stock </span>";
        }else{
            $info .= "<span style='color:red'> No disponible </span>";
        }
        return $info;
    }

}

$book1 = new Book(
    'Brayan O',
    'El Comediante',
    199.90,
    20,
    1
);

//echo $book1->getinfo();
//echo "<br> <br>";

$book2 = new Book(
    'Camilo X',
    'Nueva Historia',
    300.00,
    0,
    2
);

//echo $book2->getinfo();



//var_dump($book1);
//echo $book1->title;
echo "<br/>";