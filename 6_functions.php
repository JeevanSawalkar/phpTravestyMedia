<?php
# FUNCTION - Block of code that can be repeadly called

/*
    Camel Case - myFunction()
    Lower Case - my_function()
    Pascal Case - MyFunction()
*/

    // Create Simple Function
    function simpleFunction() {
        echo 'Hello World';
    }
    // Run Simple Function
    simpleFunction();
    echo '<br>';


    // Function With Param
    function sayHello($name = 'default_word' ) {
        echo "Hello $name<br>";
    }
    sayHello('Joe');
    sayHello('Karol');
    sayHello();


    // Jak nie podamy parametru to wyrzuci error
    // sayHello();
    // chyba, ze ustawimy w definicji funkcji parametr defaultowy, czyli:
    //    function sayHello($name = "world") {
    //        echo "Hello $name<br>";
    //    }
    // wtedy sayHello(); zadziała. Możemy oczywicie nadpsiac defaultowy parmaetr robiac sayHello("nadpisujacy parametr");


    echo '<br>';
    echo '<br>';
    echo '<br>';

    // Return value
    function addNumbers($num1, $num2) {
        echo $num1 + $num2;   // same answer
        echo '<br>';

        return $num1 + $num2;
    }
    echo addNumbers(2,3);  // same answer
    echo '<br>';
    echo '<hr>';

    // Passing arguments by reference
    $myNum = 10;

    // Normalnie argumenty funckji są przekazywane przez value
    function addFive($num) {
        // NOT changing the original value , and only using it. 
        $num += 5;
    }

    // Jak chcemy żeby był przekazywane przez reference, to musimy zrobić to &$num
    // UWAGA! to jest rzadko używane!
    function addTen(&$num) {
        // changing the original value
        $num += 10;
    }

    addFive($myNum);
    echo "value  of  myNum is : $myNum<br>"; // wyświetli 10 a nie 15, bo jest przekazywane 'by value" wiec nie zmieni tej orginalnej wartości

    addTen($myNum);
    echo "value  of  myNum is : $myNum<br>" // Tu wyświetli 20, bo jest przekazne "by reference" i zmieni orginalną wartość


?>