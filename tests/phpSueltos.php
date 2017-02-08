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
            <?php
            var_dump($_POST);
            ?>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h2 class="bg-info">Equilibrio</h2>
                    <p>Returns the equilibrium values in an array</p>
                    <?php
                    echo '<p class="text-danger">$array1 = array(-7, 1, 5, 6, 2, -4, 5, 4, 0);</p>';
                    echo '<p class="text-primary">
                    function equilibrio($array1) {<br>
                    for ($i = 0;<br>
                    $i < count($array1);<br>
                    $i++) {<br>
                    $leftsum = 0;<br>
                    $rightsum = 0;<br>
                    for ($j = 0;<br>
                    $j < $i;<br>
                    $j++) {<br>
                    $leftsum += $array1[$j];<br>
                    }
                    for ($j = $i + 1;<br>
                    $j < count($array1);<br>
                    $j++) {<br>
                    $rightsum += $array1[$j];<br>
                    }
                    if ($leftsum == $rightsum)<br>
                    return $i;<br>
                    }
                    return -1;<br>
                    }

                    $array1 = array(-7, 1, 5, 6, 2, -4, 5, 4, 0);
                    $salida = equilibrio($array1);
                    print_r($salida);</p><br>';

                    function equilibrio($array1) {

                        for ($i = 0; $i < count($array1); $i++) {
                            $leftsum = 0;
                            $rightsum = 0;
                            for ($j = 0; $j < $i; $j++) {
                                $leftsum += $array1[$j];
                            }
                            for ($j = $i + 1; $j < count($array1); $j++) {
                                $rightsum += $array1[$j];
                            }
                            if ($leftsum == $rightsum)
                                return $i;
                        }
                        return -1;
                    }

                    $array1 = array(-7, 1, 5, 6, 2, -4, 5, 4, 0);
                    $salida = equilibrio($array1);
                    print_r($salida);
                    echo '<hr><p class="text-danger">ANOTHER WAY</p>
                    function equilibrio1($array1) {<br>
                        $rightsum = array_sum($array1);<br>
                        $leftsum = 0;<br>
                        for ($i = 0; $i < count($array1); $i++) {<br>
                            $rightsum -= $array1[$i];<br>
                            if ($rightsum == $leftsum) {<br>
                                return $i;<br>
                            } 
                            $leftsum += $array1[$i];<br>
                        }<br>
                        return -1;<br>
                    }
                    $salida = equilibrio1($array1);<br>
                    print_r($salida);</p><hr>';

                    function equilibrio1($array1) {
                        $rightsum = array_sum($array1);
                        $leftsum = 0;
                        for ($i = 0; $i < count($array1); $i++) {
                            $rightsum -= $array1[$i];
                            if ($rightsum == $leftsum) {
                                return $i;
                            }
                            $leftsum += $array1[$i];
                        }
                        return -1;
                    }

                    $salida = equilibrio1($array1);
                    print_r($salida);
                    ?>

                </div>
                <div class="col-md-4">
                    <h2 class="bg-info">Element closest to zero</h2>
                    <p>Returns the element on the array</p>

                    <?php
                    echo '<p class="text-danger">$a = array(7, -10, 13, 8, 4, -7.2, -12, -3.7, 3.5, -9.6, 6.5, -1.7, -6.2, 7);</p>';
                    echo '<p class="text-primary">
function cmp($a, $b) {<br>
    if (abs($a) == abs($b)) {<br>
        return 0;<br>
    }
    return (abs($a) < abs($b)) ? -1 : 1;<br>
}

$a = array(7, -10, 13, 8, 4, -7.2, -12, -3.7, 3.5, -9.6, 6.5, -1.7, -6.2, 7);<br>

usort($a, "cmp");<br>

foreach ($a as $key => $value) {<br>
    echo "$key: $value\n";<br>
}
echo "RESULTADO " . $a[0];<br>';

                    function cmp($a, $b) {
                        if (abs($a) == abs($b)) {
                            return 0;
                        }
                        return (abs($a) < abs($b)) ? -1 : 1;
                    }

                    $a = array(7, -10, 13, 8, 4, -7.2, -12, -3.7, 3.5, -9.6, 6.5, -1.7, -6.2, 7);

                    usort($a, "cmp");

                    foreach ($a as $key => $value) {
                        echo "$key: $value\n";
                    }
                    echo "<hr><p>RESULTADO " . $a[0] . "</p>";
                    ?>

                </div>
                <div class="col-md-4">
                    <h2 class="bg-info">Compare strings or elements</h2>
                    <p>The result will be a integer, an element value, a percent, or a new object.
                        <strong class="bg-info">BASED ON ALGEBRA OF SETS </strong>Union of sets means adding two sets. Let us consider two sets A and B, then the union 
                    of sets is represented by A U B, which means all the elements, which either belong to A or B.
                    </p><img src="../img/union.png"><br>
                    <p>Let us consider ‘U’ as a universal set and let ‘A’ be any subset of set ‘U’. 
                        So ‘A’ represents a complement set, which has all the elements of set ‘U’, 
                        which are not in set ‘A’.
                        It can be mathematically represented as, A’ = U – A. 
                        We can say that complement of set ‘A’ in ‘U'. </p><img src="../img/Complement.png"><br>
                    <p>Intersection represents “AND” operation, which means the element exist in both 
                        the sets, will belong to the intersection sets. It means that in order to 
                        form the new set with the intersection sets ( A and B ), the new set will 
                        have to coincide in both or more sets.</p><img src="../img/Intersection.png"><br>
                    <p>The Cartesian product of sets A and B is defined as the Set of all the points (a, b), 
                        where a belongs to A and b belongs to B and the Cartesian product is denoted by A X B. 
                        The set so produced is also called the product set or the cross product. 
                        A Cartesian product of sets is a construction to build a new set from the number of 
                        given sets</p><img src="../img/Cartesian.gif"><br>
                    <p>Diferencia. La diferencia entre dos conjuntos A y B es el conjunto A \ B que 
                        contiene todos los elementos de A que no pertenecen a B.</p><img src="../img/DifferenceA.png"><br>
                    <p>Diferencia simétrica. La diferencia simétrica entre dos conjuntos A y B es el 
                        conjunto que contiene los elementos de A y B que no son comunes</p><img src="../img/SymmetricDifference.png"><br>
                    <?php

                    function distancia($arr1, $arr2) {
                        $dis = 0;
                        $arr3 = [];
                        for ($i = 0; $i < count($arr1); $i++) {
                            for ($j = 0; $j < count($arr2); $j++) {
                                if ($arr1[$i] === $arr2[$j] or $arr1[$i] == NULL) {
                                    $arr3[$dis] = $arr1[$i];
                                    $arr1[$i] = NULL;
                                    $arr2[$j] = NULL;
                                    $dis++;
                                    break;
                                }
                            }
                        }

                        for ($j = 0; $j < count($arr2); $j++) {
                            for ($i = 0; $i < count($arr1); $i++) {
                                if ($arr1[$i] == NULL or $arr2[$j] == NULL) {
                                    
                                } else {
                                    if ($arr2[$j] === $arr1[$i]) {
                                        $arr3[$dis] = $arr2[$j];
                                        $arr1[$i] = NULL;
                                        $arr2[$j] = NULL;
                                        $dis++;
                                        break;
                                    }
                                }
                            }
                        }
                        return $dis;
                    }

                    $str1 = "boat";
                    $str2 = "goat";
                    $arr1 = str_split($str1);
                    $arr2 = str_split($str2);
//var_dump($arr3, $arr2, $arr1); 
                    $val = distancia($arr1, $arr2);
                    echo 'Resultado ' . ++$val;
                    ?>
                    <?php

                    function similarity($str1, $str2) {
                        $len1 = strlen($str1);
                        $len2 = strlen($str2);

                        $max = max($len1, $len2);
                        $similarity = $i = $j = 0;

                        while (($i < $len1) && isset($str2[$j])) {
                            if ($str1[$i] == $str2[$j]) {
                                $similarity++;
                                $i++;
                                $j++;
                            } elseif ($len1 < $len2) {
                                $len1++;
                                $j++;
                            } elseif ($len1 > $len2) {
                                $i++;
                                $len1--;
                            } else {
                                $i++;
                                $j++;
                            }
                        }

                        return round($similarity / $max, 2);
                    }

                    $str1 = 'boat';
                    $str2 = 'goat';

                    echo 'Similarity: ' . (similarity($str1, $str2) * 100) . '%';
                    ?>                    
                </div>
            </div>

        </div>



        <hr>
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    </body>
</html>
