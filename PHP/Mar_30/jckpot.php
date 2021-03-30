<html>
  <head>
    <title>jckpot</title>
  </head>
  <body>
    <?php 

    
class Jckpot{
  public $five0or1 = [];
  public $fiveStr = '';
  function play () {
    for ($i = 0; $i < 5; $i = $i + 1) {
      array_push($this->five0or1, rand(0,1));
    }
    $arr = implode(",", $this->five0or1);
        $winningChance= 1 / 2 ** 5;
        if (in_array(0, $this->five0or1) && in_array(1, $this->five0or1)) {
            $this->fiveStr = "Sequence: $arr , you lost. The chance of winning was $winningChance ";
        } else if (in_array(0, $this->five0or1) && !in_array(1, $this->five0or1)) {
            $this->fiveStr = "Sequence: $arr , you lost. But good job on getting all zeros; it is rare! The chance of winning was $winningChance ";
        } else if (!in_array(0, $this->five0or1) && in_array(1, $this->five0or1)) {
            $this->fiveStr = "Sequence: $arr , you Won! The chance of winning was $winningChance ";
        } else {
            $this->fiveStr = "Sequence: $arr ";
        }
        echo $this->fiveStr;
        $this->five0or1 = [];
        $this->fiveStr = '';
    }
};
$JckpotClassTest= new Jckpot();
echo $JckpotClassTest->play();  

?> 
  </body>
</html>
