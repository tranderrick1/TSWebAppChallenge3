<html>
<head>
    <title>Challenge 4</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="main.scss">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>

</head>
<body>

    <br><br>
    <p class="searchHelper">Planetary Search</p>
    <h4 class="center">Search up details about planets here!</h4> 
    <br>

    <form action="search.php" method="get">
    <div class="input-group mb-3" style="width:500px;margin:0 auto;">
        
        <input name="q" type="text" class="form-control" aria-describedby="button-addon2">
        <div class="input-group-append">
            <button class="btn btn-info" type="submit" id="button-addon2">Search</button>
        </div>
        
    </div>
    </form>
    <div class="hero">
        <?php
            // Vulnerable to command injection  
            $search = $_GET["q"];
            $result = exec("type .\\assets\\details\\" . $search);
            if ($result) { 
                echo(" 
                    <div class='card' style='padding:.5rem;'>
                        <img src='.\\assets\\img\\" . $search . ".jpg' class='planetImage' alt='Image not available'>
                        <div style='padding:1rem;'>
                            <h2 style='color:black;'>" . ucfirst($search) . "</h2>    
                            <h4>" . $result . "</h4> 
                        </div>
                    </div>
                    ");
            }
            else {
                echo("
                    <h3> Planet not found! </h2>
                    ");
            }
        ?>
    </div>
    
</body>

</html>