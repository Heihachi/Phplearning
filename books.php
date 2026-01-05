<?php 
class Books{
    //Member values
    var $price;
    var $title;
    //Member functions
    function __construct( $par1, $par2 ){
        $this->title = $par1;
        $this->price = $par2;
    }
    function setPrice( $par ){
        $this->price = $par;
    }
    function getPrice(){
        return $this->price;
    }
    function setTitle( $par ){
        $this->title = $par;
    }
    function getTitle(){
        echo $this->title ." <br/>";
    }
    function getDetails()
    {
        echo "Title : $this->title, Price : $this->price <br/>";
    }
}
$physics = new Books(" High School Physics ", 10);
$maths = new Books(" Algebra ", 15);
$chemistry = new Books(" Advanced Chemistry ", 7);
$physics->getDetails();
$maths->getDetails();
$chemistry->getDetails();
echo "<p>physics price changed to 25</p>";
$physics->setPrice(25 );
echo "<p>maths title changed</p>";
$maths->setTitle( "Modern Algebra" );
$physics->getDetails();
$maths->getDetails();

$ttl=$physics->getPrice() + $chemistry->getPrice() + $maths->getPrice();
echo "Total Cost = \$$ttl";
?>