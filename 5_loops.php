<?php
    #LOOPS - Execute code set number of times
     /*
        For
        While
        Do..While
        Foreach
     */

     # For Loop
     # @params - initial value, condition, increment

    for($i = 0; $i <= 10; $i++) {
        echo'Number '.$i;
        echo '<br>';
    }



    # While Loop
    # @params - condition

    # notice that $i is outside while loop
    $i = 0;
    while($i < 10) {
        echo $i;
        echo '<br>';
        $i++;
    }

    # Do...While
    # @params - conditions

    $i = 0;
    do {
       echo $i;
       echo '<br>';
       $i++;
    }

    while($i < 10);

    echo '---------------For Each ------------------------------<br>';

    # Foreach - works only on arrays
    $people = array('Brad', 'Jose', 'Karol');

    foreach($people as $p) {
        echo $p;
        echo '<br>';
    }

    # foreach with associative array
    $people2 = array('Brad' => 'brad@op.pl', 'Jose' => 'jose@op.pl', 'Karol' => 'karol@op.pl');

    foreach($people2 as $p => $e) {
        echo $p.' => '.$e;
        echo '<br>';
    }

?>