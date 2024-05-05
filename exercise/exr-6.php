<?php 
    // 1 Tính tổng các số chẵn từ 1 đến n (n>=2)
    // Cách 1
    // $tl = 0;
    // $n=10;
    // for($i =2; $i<=$n; $i++) {
    //     if($i%2==0){
    //         $tl += $i;
    //     }
    // }
    // Cách 2
    // for($i =2; $i<=$n; $i+=2) {
    //         $tl += $i;
    // }
    // echo "Tổng các số chẵn là ${tl}";
    
    // 2 Tính tổng nghịch đảo các số chia hết cho 3 từ 3 đến n (n>=3)
    // $t2=0;
    // $n=9;
    // for($i =2; $i<=$n; $i++) {
    //     if($i%3==0){
    //         $t2 += (1/$i);
    //     }
    // }
    // echo "Tổng các số nghịch đảo chia hết cho 3 là ${t2}";
    
    // 3 Tính tổng chuỗi
    // $t3=0;
    // $n=0;
    // for($i = 1; $i <= $n; $i++) {
    //     $t3 += ($i/($i+1));
    // }
    // echo "Tổng chuỗi này là ${t3}";
    
    // 4 giải phương trình bậc 2
    $a = 4;
    $b = 1;
    $c = 2;
    if($a !=0) {
        $delta = $b*$b - 4*$a*$c;
        if($delta < 0) {
            echo "Phương trình bậc 2 vô nghiệm";
        }elseif($delta == 0) {
            $x = -$b/2*$a;
            echo "Phương trình có nghiệm kép là x = {$x}";
        }else {
            $x1 = (-$b +sql($delta))/(2*$a);
            $x2 = (-$b -sql($delta))/(2*$a);
            echo "Phương trình có 2 nghiệm x1 ={$x1} và x2 ={$x2}";
        }
    }else {
        echo "Đây không phải là phương trình bậc 2";
    }
?>