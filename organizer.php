<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Organizer</title>
    <link rel="stylesheet" href="styl6.css">
</head>
<body>
    <section class="the-whole-banner">
    <section class="banner">
            <h2>Mój organizer</h2>
        </section>

        <section class="banner">
            <form action="" method="post">
                <label for="podpis">Wpis wydarzenia: </label><input type="text" id="podpis" name="podpis">
                <button name="zapisz">ZAPISZ</button>
            </form>

                <?php 
                $conn = mysqli_connect('localhost','root', '', 'egzamin6');

                if(isset($_POST['podpis'])){
                $podpis = $_POST['podpis'];
                $query = "UPDATE `zadania` SET `wpis`= '$podpis' WHERE dataZadania = '2020-08-27'";
                mysqli_query($conn, $query);
                }

                mysqli_close($conn);
                ?> 


        </section>

        <section id="banner-right-side">
            <img src="logo2.png" alt="Mój organizer">
        </section>
    </section>

    <section id="main">
        <?php 
        $conn = mysqli_connect('localhost','root', '', 'egzamin6');

        $query2= mysqli_query($conn,'SELECT dataZadania, miesiac, wpis FROM `zadania` WHERE miesiac LIKE "lipiec"');

        while($row2 = mysqli_fetch_assoc($query2)){
            echo "<section class='main'>$row2[dataZadania] $row2[miesiac] $row2[wpis]</section>";
        };
        
        

        mysqli_close($conn);
        ?>
    </section>

    <section id="footer">
    <?php 
        $conn = mysqli_connect('localhost','root', '', 'egzamin6');

        mysqli_close($conn);
    ?>
        <p>Stronę wykonał: kozak</p>
    </section>
</body>
</html>