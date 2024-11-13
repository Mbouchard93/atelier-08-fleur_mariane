<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>De merveilleux peintres</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <header class='header-main'>
       <h1>Les fleures</h1> 
    </header>

    <main>
    <?php
    include "db_conn.php";
    $conn = ouvreConnexion();

    $query = "SELECT * FROM `informations`;";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<section>
                    <header>
                        <div class='nom-fleur'> 
                            <h2>" . $row["nom"]. "</h2>
                            <h3> ".$row["nom_scientifique"] ." </h3>
                        </div>
                        <div >
                            <p>" . $row["couleur"] . "</p>
                            <p>" . $row["region_origine"] . "</p>
                        </div>
                    </header>
                    <figure>
                        <img src='" . $row["fleur_image_url"] . "' alt='" . $row["nom"] ."' />
                        <figcaption>" . $row["symbolique"] . "</figcaption>
                    </figure>
                  </section>";
        }  
    }
    ?>
    </main>
    <footer>
        <p>Mariane bouchard</p>
        <p>PMI</p>
        <p>2024</p>
    </footer>
</body>
</html>
