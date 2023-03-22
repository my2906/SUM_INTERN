  <?php 
        $n=59;
        $m=74754; 
        
    function tong($n,$m)
    {
       
        //var_dump($m1);
        $lenN= strlen($n);
        $lenM= strlen($m);
        $length= $lenN-$lenM;
        while($length != 0)
        {
            if($length>0) //chuoi n dai hon
            {
                $m = '0'. $m;
                $length--;
                echo "$m";
            }
            else //chuoi n nho hon
            {
                $n = '0'. $n;
                $length++;
            }

        }
      //  echo "<hr> $n - $m ";return;
       
        
        //var_dump($lenN);
        $remember=0;  
        $kq="";
        $n1= str_split($n);
        $m1=str_split($m);
       $length = strlen($n);
      echo "$n  <br>$m <br>";
        {
            for($i=strlen($n)-1;$i>=0;$i--)
            {
                $temp =$n1[$i]+$m1[$i] + $remember;
                if ($temp>9){
                    $remember=1;
                    $kq = ($temp-10).$kq ;
                }
                else {
                    $remember=0;
                    $kq =$temp .$kq;
                }

                echo "<br> i= $i, kq= $kq ";
            }
            if ($remember>0) $kq .=$remember;
            echo"kết quả vừa hiện thực được là: ".($kq);

        }
    }
    tong($n,$m);
 ?>
