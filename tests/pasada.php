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
        <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
        <link rel="stylesheet" href="../public/css/demo.css">
        <link rel="stylesheet" href="../public/css/font-awesome.css">
        <link rel="stylesheet" href="../public/css/sky-forms-ie8.css">
        <link rel="stylesheet" href="../public/css/sky-forms-blue.css">
        <link rel="stylesheet" href="../public/css/sky-forms.css">
    </head>
    <body class="bg-blue" id="cuerpito">
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
        <div class="body">		
            <form action="phpSueltos.php" method="post" enctype="multipart/form-data" id="sky-form" class="sky-form">
                <header>Algebra of Sets</header>
                <fieldset>
                    <div class="row">
                        <section class="col col-6">
                            <label class="select">
                                <select name="form_option" id="form_option">
                                    <option value="none" selected disabled>Options</option>
                                    <option value="String">String</option>
                                    <option value="Array">Array</option>
                                    <option value="Absolute">Absolute</option>
                                    <option value="DataTable">Data Table</option>
                                    <option value="Numeric">Numeric</option>
                                </select>
                                <i></i>
                            </label>
                        </section>
                        <section class="col col-6">
                            <label class="select">
                                <select name="form_filter" id="form_filter">
                                    <option value="0" selected disabled>Filter</option>
                                    <option value="Maximo">Max</option>
                                    <option value="Minimo">Min</option>
                                    <option value="Similarity">Similarity</option>
                                    <option value="Cross">Cross</option>
                                </select>
                                <i></i>
                            </label>
                        </section>
                    </div>
                </fieldset>
                <fieldset>					
                    <div class="row">
                        <section class="col col-6">
                            <label class="input">
                                <i class="icon-append fa fa-user"></i>
                                <input type="text" id="form_dato1" name="form_dato1" placeholder="String or Array or Table Name" >
                            </label>
                        </section>
                        <section class="col col-6">
                            <label class="input">
                                <i class="icon-append fa fa-briefcase"></i>
                                <input type="text" id="form_dato2" name="form_dato2" placeholder="String or Array or Table Name" >
                            </label>
                        </section>
                    </div>
                </fieldset>


                <footer>
                    <button id="haga" type="submit" class="button">Send request</button>
                    <div class="progress"></div>
                </footer>				
                <div class="message">
                    <i class="fa fa-check"></i>
                    <p>Thanks for your data!<br><a href="phpSueltos.php">We'll give you results very soon.<br></a></p>
                </div>
            </form>			
        </div>        

        <hr>
        <script src="https://use.fontawesome.com/3b0b538fb9.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>        
        <script src="../public/js/jquery.form.min.js"></script>  
        <script src="../public/js/jquery.maskedinput.min.js"></script>  
        <script src="../public/js/jquery.modal.js"></script>  
        <script src="../public/js/jquery.validate.min.js"></script>  
        <!--[if lt IE 10]>
                <script src="../public/js/jquery.placeholder.min.js"></script>
        <![endif]-->		
        <!--[if lt IE 9]>
                <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
                <script src="../public/js/sky-forms-ie8.js"></script>
        <![endif]-->        
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <script src="../public/js/pasada.js"></script>      
    </body>
</html>
