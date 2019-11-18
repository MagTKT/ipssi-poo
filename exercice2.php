<?php

require_once('vendor/autoload.php');

$climate = new League\CLImate\CLImate;

class Document
{
    private $elementX;
    private $elementY;
    private $text;
    private $forme;
    private $image;


  //methode
    public function __construct(int $elementX, int $elementY , string $text, string $forme , string $image){

    $this->elementX = $elementX;
    $this->elementY = $elementY;
    $this->text = $text;
    $this->forme = $forme;
    $this->image = $image;
}
    public function getColor()
    {
        
    }

    public function getDoc()
    {
        $doc = "Mon document contient une élément en position $this->elementX  de haut sur $this->elementX de coté il contient le texte $this->text la forme $this->forme et une image $this->image ";
        return $doc;
    }
    public function getElementX():int
    {
        return $this->elementX;
    }
    public function getElementY():int
    {
        return $this->elementY;
    }   
    public function getText():string
    {
        return $this->text;
    }  
    public function getForme():string
    {
        return $this->forme;
    }  
    public function getImage():string
    {
        return $this->image;  
    }    
}
class ColorChoice {
    private $pink;
    private $black;
    public function __construct (int $pink, int $black)
    {
    $pinkValidate = 255 >= $ping;
    $blackValidate = 255 >= $black;
    
    $isColorInvalid =
        false === $pinkValidate || false === $blackvalidate;
    if (true === $isColorNone) {
        throw new Exceptions\NoneColor;
    }
    $this->pink = $pink;
    $this->black = $black;
    }
}

try{
    $doc1 = new Document(20, 20, "toto", "etoile", "jpg");
    $doc2= new Document(40, 40, "toto2", "nuage", "png");
    $doc3 = new Document(50, 50, "toto3", "carre", "gif");
    

}
catch (\Exception $exception) {
    $climate->out('erreur');
}



    $input = $climate->input("Quel document voulez vous voir ?: " );
    $index = $input->prompt();

    if ($index == 1){
        echo $doc1->getDoc();
    }
    if ($index == 2){
        echo $doc2->getDoc();
    }
    if ($index == 3){
        echo $doc3->getDoc();
    }
