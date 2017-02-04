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

            </div>
        </nav>        
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
        <?php
        /*
         * To change this license header, choose License Headers in Project Properties.
         * To change this template file, choose Tools | Templates
         * and open the template in the editor.
         */

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
        <hr>
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    </body>
</html>
