<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="./public/Style.css">
    <title>Document</title>
</head>
<header class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top position-sticky">  
        <div class="container">              
            <div class="logo">
               <a  href="http://awards-dwwm20232024.lopia.fr/" class="logo"> 
                    <img src="public\image\ressources\awardLogo.png" class="me-3"/>
                </a>
            </div>  
                <nav class="navfix"> 
                    <div class="collapse navbar-collapse" id="navbarText">
                        <ul class="navbar-nav mb-2 ">
                            <li class="nav-item me-3">
                                <a class="nav-link active" aria-current="page" href="#lesapprenants">Apprenants</a>
                            </li>
                            <li class="nav-item me-3">
                                <a class="nav-link" aria-current="page" href="#lesformateurs">Formateurs</a>
                            </li>             
                        </ul>
                    </div>          
                </nav>                    
                    <div class="" >
                    <span class="countdown">Temps restant : </span>
                    <label id="count"></label>
                    <script type="text/javascript">
                        var Affiche=document.getElementById("count");
                        function countdown() {
                            var date1 = new Date();
                            var date2 = new Date ("June 20, 2024 00:00:00");
                            var sec = (date2 - date1) / 1000;
                            var n = 24 * 3600;
                            if (sec > 0) {
                            j = Math.floor (sec / n);
                            h = Math.floor ((sec - (j * n)) / 3600);
                            mn = Math.floor ((sec - ((j * n + h * 3600))) / 60);
                            sec = Math.floor (sec - ((j * n + h * 3600 + mn * 60)));
                            Affiche.innerHTML = j +" j "+ h +" h "+ mn +" min "+ sec + " s";
                            window.status = "Temps restant : " + j +" j "+ h +" h "+ mn +" min "+ sec + " s ";
                            }
                            tRebour=setTimeout ("countdown();", 1000);
                        }
                        countdown();
                    </script>
                </div>
                </div>
            </div> 
        </div>
    </header>

<body>
    
    <?= $content; ?>

<body>