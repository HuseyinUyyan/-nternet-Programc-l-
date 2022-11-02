<?php
class internet
{

    
    public function __construct($hostname = "localhost", $username, $pass, $dbName)
    {
        $connection = "$hostname, $username, $pass, $dbName";
        return $connection;
    }


    /* public her yerden erişilebilir. */
    public $nickname = "Hüseyin";
    public $oyunname = "xjackdaniles";

    
    public function write()
    {
        function karesi($sayi)
        {
        return $sayi*$sayi;
        }
        $sonuc="5 Sayısının Karesi:".karesi(5);
        echo "<br>";
        echo $sonuc;
        
    }

    public function Total($inputnum){
        for ($i=0; $i < $inputnum; $i++) { 
            echo $i*$i;
            echo "<br>";
        }
    }
     
    
}
echo "<br>";

$nesne = new internet("hüseyinuyan.com", "xjackdaneiels", "159357", "husoo");


echo "<br>";

print_r($nesne);

echo $nesne->write();
echo "<br>";
$nesne->Total(5);
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

?>
