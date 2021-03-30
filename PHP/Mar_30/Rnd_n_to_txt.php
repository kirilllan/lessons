<html>
  <head>
    <title>number_to_text_PHP</title>
  </head>
  <body>
    <?php 
    
function readNumber($num, $depth=0)
{
    $num = (int)$num;
    $retval ="";
    if ($num < 0) 
        return "negative " + readNumber(-$num, 0);
    if ($num > 99) 
    {
        if ($num > 999) 
            $retval .= readNumber($num/1000, $depth+3);
        $num %= 1000; 
        if ($num > 99) 
            $retval .= readNumber($num/100, 2)." sataa\n";
        $retval .=readNumber($num%100, 1); 
    }
    else 
    {
        $mod = floor($num / 10);
        if ($mod == 0) 
        {
            if ($num == 1) $retval.="yksi";
            else if ($num == 2) $retval.="kaksi";
            else if ($num == 3) $retval.="kolme";
            else if ($num == 4) $retval.="neljä";
            else if ($num == 5) $retval.="viisi";
            else if ($num == 6) $retval.="kuusi";
            else if ($num == 7) $retval.="seitsemän";
            else if ($num == 8) $retval.="kahdeksan";
            else if ($num == 9) $retval.="yhdeksän";
        }
        else if ($mod == 1) //
        {
            if ($num == 10) $retval.="kymmenen";
            else if ($num == 11) $retval.="yksitoista";
            else if ($num == 12) $retval.="kaksitoista";
            else if ($num == 13) $retval.="kolmetoista";
            else if ($num == 14) $retval.="neljätoista";
            else if ($num == 15) $retval.="viisitoista";
            else if ($num == 16) $retval.="kuusitoista";
            else if ($num == 17) $retval.="seitsemäntoista";
            else if ($num == 18) $retval.="kahdeksantoista";
            else if ($num == 19) $retval.="yhdeksäntoista";
        }
        else 
        {
            if ($mod == 2) $retval.="kaksikymmentä ";
            else if ($mod == 3) $retval.="kolmekymmentä ";
            else if ($mod == 4) $retval.="neljäkymmentä ";
            else if ($mod == 5) $retval.="viisikymmentä ";
            else if ($mod == 6) $retval.="kuusikymmentä ";
            else if ($mod == 7) $retval.="seitsemänkymmentä ";
            else if ($mod == 8) $retval.="kahdeksankymmentä ";
            else if ($mod == 9) $retval.="yhdeksänkymmentä ";
            if (($num % 10) != 0)
            {
                $retval = rtrim($retval); 
                $retval .= "-";
            }
            $retval.=readNumber($num % 10, 0);
        }
    }
    if ($num != 0)
    {
        if ($depth == 3)
            $retval.=" tuhatta\n";
        else if ($depth == 6)
            $retval.=" miljoonaa\n";
        if ($depth == 9)
            $retval.=" miljardia\n";
    }
    return $retval;
}
echo readNumber(58);
    
    
    
    
     ?> 
  </body>
</html>