<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>PHP - ARRAYS</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </head>
    <body>
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">ParaPHP</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <form class="navbar-form navbar-right">
                        <div class="form-group">
                            <input type="text" placeholder="Email" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="password" placeholder="Password" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-success">Sign in</button>
                    </form>
                </div><!--/.navbar-collapse -->
            </div>
        </nav>

        <!-- Main jumbotron for a primary marketing message or call to action -->
        <div class="jumbotron">
            <div class="container">
                <h1>PHP Help!</h1>
                <p>This is my little application to keep updated the array functions with PHP. It includes a database.</p>
                <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p>
            </div>
        </div>
        <div class="container">
            <!-- Example row of columns -->
            <div class="row">
                <div class="col-md-4">
                    <h2>array_change_key_case</h2>
                    <p>Returns an array with its keys lower or uppercased, or FALSE if array is not an array</p>
                    <?php
                    echo '<p class="text-danger">$input_array = array("FirSt" => 1, "SecOnd" => 4);</p>';
                    $input_array = array("FirSt" => 1, "SecOnd" => 4);
                    echo '<hr><p class="text-primary">$salida = array_change_key_case($input_array, CASE_UPPER);</p><br>';
                    $salida = array_change_key_case($input_array, CASE_UPPER);
                    print_r($salida);
                    echo '<br><hr>';
                    echo '<p class="text-primary">$salida = array_change_key_case($input_array, CASE_LOWER);</p> <br>';
                    $salida = array_change_key_case($input_array, CASE_LOWER);
                    print_r($salida);
                    echo '<br><br><hr>';
                    ?>
                    <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
                </div>
                <div class="col-md-4">
                    <h2>array_chunk</h2>
                    <p>Chunks an array into arrays with size elements. The last chunk may contain less than size elements. </p>
                    <p>When set to TRUE keys will be preserved. Default is FALSE which will reindex the chunk numerically.</p>
                    <?php
                    echo '<p class="text-danger">$input_array = array("a", "b", "c", "d", "e");</p>';
                    $input_array = array('a', 'b', 'c', 'd', 'e');
                    echo '<hr><p class="text-primary">$salida = array_chunk($input_array, 2);</p><br>';
                    $salida = array_chunk($input_array, 2);
                    print_r($salida);
                    echo '<br><hr>';
                    $salida = array_chunk($input_array, 2, true);
                    echo '<p class="text-primary">array_chunk($input_array, 2, true);</p> <br>';
                    print_r($salida);
                    echo '<br><br><hr>';
                    ?>
                    <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
                </div>
                <div class="col-md-4">
                    <h2>array_column</h2>
                    <p>array_column() returns the values from a single column of the input, identified by the column_key. Optionally, an index_key may be provided to index the values in the returned array by the values from the index_key column of the input array..</p>
                    <?php
// Array representing a possible record set returned from a database
                    $records = array(
                        array(
                            'id' => 2135,
                            'first_name' => 'John',
                            'last_name' => 'Doe',
                        ),
                        array(
                            'id' => 3245,
                            'first_name' => 'Sally',
                            'last_name' => 'Smith',
                        ),
                        array(
                            'id' => 5342,
                            'first_name' => 'Jane',
                            'last_name' => 'Jones',
                        ),
                        array(
                            'id' => 5623,
                            'first_name' => 'Peter',
                            'last_name' => 'Doe',
                        )
                    );

                    $first_names = array_column($records, 'first_name');
                    print_r($first_names);
                    ?>                    
                    <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <h2 class="bg-info">array_combine</h2>
                    <p>Creates an array by using the values from the keys array as keys and the values from the values array as the corresponding values. </p>
                    <p>Returns the combined array, FALSE if the number of elements for each array isn't equal..</p>
                    <?php
                    echo '<p class="text-danger">$a = array("green", "red", "yellow");</p>';
                    $a = array('green', 'red', 'yellow');
                    echo '<hr><p class="text-primary">$b = array("avocado", "apple", "banana");</p>';
                    $b = array('avocado', 'apple', 'banana');
                    echo '<hr>';
                    $salida = array_combine($a, $b);
                    echo '<p class="text-primary">$salida = array_combine($a, $b);</p> <br>';
                    print_r($salida);
                    echo '<br><br><hr>';
                    ?>
                    <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
                </div>
                <div class="col-md-4">
                    <h2 class="bg-info">array_count_values</h2>
                    <p>array_count_values() returns an array using the values of array as keys and their frequency in array as values.. </p>
                    <p>Returns an associative array of values from array as keys and their count as value.</p>
                    <?php
                    echo '<p class="text-danger">$array = array(1, "hello", 1, "world", "hello");</p>';
                    $array = array(1, "hello", 1, "world", "hello");
                    echo '<hr>';
                    $salida = array_count_values($array);
                    echo '<p class="text-primary">$salida = array_count_values($array)</p> <br>';
                    print_r($salida);
                    echo '<br><br><hr>';
                    ?>
                    <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>                    
                </div>
                <div class="col-md-4">
                    <h2 class="bg-info">array_diff_assoc</h2>
                    <p>Compares array1 against array2 and returns the difference. Unlike array_diff() the array keys are also used in the comparison. </p>
                    <p>Returns an array containing all the values from array1 that are not present in any of the other arrays.</p>
                    <?php
                    echo '<p class="text-danger">$array1 = array("a" => "green", "b" => "brown", "c" => "blue", "red");</p>';
                    echo '<p class="text-danger">$array2 = array("a" => "green", "yellow", "red");</p>';
                    $array1 = array("a" => "green", "b" => "brown", "c" => "blue", "red");
                    $array2 = array("a" => "green", "yellow", "red");
                    echo '<hr>';
                    $salida = array_diff_assoc($array1, $array2);
                    echo '<p class="text-primary">$salida = array_diff_assoc($array1, $array2);</p> <br>';
                    print_r($salida);
                    echo '<br><br><hr>';
                    ?>
                    <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>                    
                </div>                
            </div>
            <div class="row">
                <div class="col-md-4">
                    <h2 class="bg-success">array_diff_key</h2>
                    <p>Compares the keys from array1 against the keys from array2 and returns the difference. This function is like array_diff() except the comparison is done on the keys instead of the values. </p>
                    <p>Returns an array containing all the entries from array1 whose keys are not present in any of the other arrays.</p>
                    <?php
                    echo '<p class="text-danger">$array1 = array("blue"  => 1, "red"  => 2, "green"  => 3, "purple" => 4);</p>';
                    echo '<p class="text-danger">$array2 = array("green" => 5, "blue" => 6, "yellow" => 7, "cyan"   => 8);</p>';
                    $array1 = array('blue' => 1, 'red' => 2, 'green' => 3, 'purple' => 4);
                    $array2 = array('green' => 5, 'blue' => 6, 'yellow' => 7, 'cyan' => 8);
                    echo '<hr>';
                    $salida = array_diff_key($array1, $array2);
                    echo '<p class="text-primary">$salida = array_diff_key($array1, $array2);</p> <br>';
                    print_r($salida);
                    echo '<br><br><hr>';
                    ?>
                    <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>                    
                </div>                 
                <div class="col-md-4">
                    <h2 class="bg-success">array_diff_uassoc</h2>
                    <p>Compares array1 against array2 and returns the difference. Unlike array_diff() the array keys are used in the comparison. 
                        Unlike array_diff_assoc() a user supplied callback function is used for the indices comparison, not internal function.</p>
                    <p>Returns an array containing all the entries from array1 that are not present in any of the other arrays.</p>
                    <?php
                    echo '<p class="text-danger">$array1 = array("blue"  => 1, "red"  => 2, "green"  => 3, "purple" => 4, "yellow");</p>';
                    echo '<p class="text-danger">$array2 = array("green" => 5, "blue" => 1, "yellow" => 7, "cyan"   => 8);</p>';
                    $array1 = array('blue' => 1, 'red' => 2, 'green' => 3, 'purple' => 4, 'yellow');
                    $array2 = array('green' => 5, 'blue' => 1, 'yellow' => 7, 'cyan' => 8);
                    echo '<p class="text-info">function call_back($array1, $array2) {
                        if ($array1 === $array2) {
                            return 0;
                        }
                        return ($array1 > $array2) ? 1 : -1;
                    }</p>';
                    echo '<hr>';
                    $salida = array_diff_uassoc($array1, $array2, "call_back");
                    echo '<p class="text-primary">$salida = array_diff_uassoc($array1, $array2);</p> <br>';
                    print_r($salida);
                    echo '<br><br><hr>';

                    function call_back($array1, $array2) {
                        if ($array1 === $array2) {
                            return 0;
                        }
                        return ($array1 > $array2) ? 1 : -1;
                    }
                    ?>
                    <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>                    
                </div>                 
                <div class="col-md-4">
                    <h2 class="bg-success">array_diff_ukey</h2>
                    <p>Compares the keys from array1 against the keys from array2 and returns the difference. This function is like array_diff() except the comparison is done on the keys instead of the values.
                        Unlike array_diff_key() a user supplied callback function is used for the indices comparison, not internal function.
                        The comparison function must return an integer less than, equal to, or greater than zero if the first argument is considered 
                        to be respectively less than, equal to, or greater than the second. Note that before PHP 7.0.0 this integer had to be 
                        in the range from -2147483648 to 2147483647.</p>
                    <p>Returns an array containing all the entries from array1 that are not present in any of the other arrays.</p>
                    <?php
                    echo '<p class="text-danger">$array1 = array("blue"  => 1, "red"  => 2, "green"  => 3, "purple" => 4, "yellow");</p>';
                    echo '<p class="text-danger">$array2 = array("green" => 5, "blue" => 1, "yellow" => 7, "cyan"   => 8);</p>';
                    $array1 = array('blue' => 1, 'red' => 2, 'green' => 3, 'purple' => 4, 'yellow');
                    $array2 = array('green' => 5, 'blue' => 1, 'yellow' => 7, 'cyan' => 8);
                    echo '<p class="text-info">function call_back($array1, $array2) {
                            if ($key1 == $key2)
                                return 0;
                            else if ($key1 > $key2)
                                return 1;
                                else
                            return -1;
                    }</p>';
                    echo '<hr>';
                    $salida = array_diff_ukey($array1, $array2, "call_back1");
                    echo '<p class="text-primary">$salida = array_diff_ukey($array1, $array2, "call_back");</p> <br>';
                    print_r($salida);
                    echo '<br><br><hr>';

                    function call_back1($key1, $key2) {
                        if ($key1 == $key2)
                            return 0;
                        else if ($key1 > $key2)
                            return 1;
                        else
                            return -1;
                    }
                    ?>
                    <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>                    
                </div>                 
            </div>
        </div>
        
<hr>

</body>
</html>