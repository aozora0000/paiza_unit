<?php
list($length, $line, $n) = explode(" ", trim(fgets(STDIN)));
for($y = 0; $y < $length; $y++) {
    for($x = 0; $x < $line; $x++) {
        $map[$y + 1][$x + 1] = join(",", array($x + 1, $y + 2));
    }
}
if($n != 0) {
    foreach(range(0, $n - 1) as $i) {
        list($x, $y, $to_y)  = explode(" ", trim(fgets(STDIN)));
        $map[$y][$x]         = join(",", array($x + 1, $to_y + 1));
        $map[$to_y][$x + 1]  = join(",", array($x,     $y    + 1));
    }
}


for($select = 1; $select <= $line; $select++) {
    $x = $select;
    $y = 1;
    while($y < $length) {
        list($x, $y) = explode(",", $map[$y][$x]);
        if(!isset($map[$y][$x])) {
            break;
        }
    }
    if((int)$x === 1) {
        printf("%d\n", $select);exit;
    }
}
