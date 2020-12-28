<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Web Jam </title>
        <link rel="stylesheet" href="./Style/style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css">
        <link rel="stylesheet" href="./bootstrap-4.4.1-dist/css/bootstrap.css">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    </head>
    <body id="corpo" style="background-color: black;">
        <nav class="navbar navbar-expand-lg navbar-dark bg-black">
          <font class="navbar-brand ml-2 mr-2 mt-2 mb-2" id="logo" style="font-size: 30px; color: #2cfb00; cursor: default;" href=""> Jam </font>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" style="font-size: 20px;" id="nav" href="#rank">Ranking</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" style="font-size: 20px;" id="nav2" href="#winners">Winners</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" style="font-size: 20px;" id="nav3" href="#competitions">Competitions</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" style="font-size: 20px;" id="nav4" href="#Users">Users</a>
              </li>
              <li class="nav-item">
                <a class="nav-link mt-1" style="font-size: 20px;" id="nav5" <?php if(isset($_SESSION[]){echo "href='user.php'";} else{echo "href='#' data-target='#exampleModalCenter2' data-toggle='modal'";}) ?>><i class="fas fa-user"></i></a>
              </li>
              <li class="nav-item">
                <a class="nav-link mt-1" style="font-size: 20px;" id="nav6" href="#" data-target="#exampleModalCenter" data-toggle="modal"><i class="fas fa-cog"></i></a>
              </li>
            </ul>
          </div>
        </nav>
        <?php
            include_once('connect.php');

            $query = "SELECT * FROM Winners limit 1";
            $sql = mysqli_query($conn, $query) or die(mysql_error());
            $escrever = mysqli_fetch_assoc($sql);

            $winner = $escrever['winner'];
            $points = $escrever['points_winner'];

            echo "<div style='background-color: black;  border-bottom: 15px rgb(78, 78, 78) solid; border-top: 15px rgb(78, 78, 78) solid;' class='jumbotron jumbotron-fluid'>";
            echo "<h1 style='color: white;' class='ml-1'>Congratulation to the winner of the Web Jam Gold!</h1>";
            echo "<p style='color: white;' class='lead ml-1'> $name_winner Lima winning the Web Jam Gold with $points votes</p>";
            echo "<p><a href='#winners' class='btn btn-dark btn-lg ml-1 mt-2'>See the last winners</a></p>";
            echo "</div>";
        ?>

        <center>
        <div class="competitions" id="competitions"><br><br>
            <center>
            <h2 class="title" id="Competitions"> Tournaments </h2> 
            </center>
            <div class="container">
              <div class="box">
                <div class="content">
                  <h2> 01 </h2>
                  <h3> Web Jam Gold </h3>
                  <a href="registration.php?jam=gold">Register</a>
                </div>
              </div>
              <div class="box">
                <div class="content">
                  <h2> 02 </h2>
                  <h3> Web Jam Silver </h3>
                  <a href="registration.php?jam=gold">Register</a>
                </div>
              </div>
              <div class="box">
                <div class="content">
                  <h2> 03 </h2>
                  <h3> Web Jam Bronze </h3>
                  <a href="registration.php?jam=gold">Register</a>
                </div>
              </div>
            </div>
        </div>
        </center>
        <div style="color: white;" class="lista" id="winners"><br>
          <center>
          <h2 style="color: grey;"> biggest scorers </h2>
          </center>
          <ul>
            <?php
              $sql = mysqli_query($conn, "SELECT W.COUNT(id_user), U.username, U.date_birth,  FROM Winners
                                          INNER JOIN Users U on W.id_user = U.id_user") 
                                          or die(mysql_error());
              $x = 1;

              while($escrever = mysqli_fetch_array($sql)){
                if($x == 1){
                  echo "<li>";
                  echo "<span class='number'>$x</span>";
                  echo "<span class='name'>" . $escrever['username'] . "</span>";
                  echo "<span class='points'>" . $escrever['date_birth'] . "</span>";
                  echo "<span class='badge'><i class='fas fa-trophy'></i></span>";
                  echo "</li>";
                }
                else if($x == 2 || x == 3){
                  echo "<li>";
                  echo "<span class='number'>$x</span>";
                  echo "<span class='name'>" . $escrever['username'] . "</span>";
                  echo "<span class='points'>" . $escrever['date_birth'] . "</span>";
                  echo "<span class='badge'><i class='fas fa-medal'></i></span>";
                  echo "</li>";
                }
                else{
                  echo "<li>";
                  echo "<span class='number'>$x</span>";
                  echo "<span class='name'>" . $escrever['username'] . "</span>";
                  echo "<span class='points'>" . $escrever['date_birth'] . "</span>";
                  echo "<span class='badge'><i class='fas fa-shield-alt'></i></span>";
                  echo "</li>";
                }

                  $x++;
              }
            ?>
          </ul><br><br>
        </div><br><br>
        <div style="color: white;" class="lista" id="winners"><br>
          <center>
          <h2 style="color: grey;"> Last Winners </h2>
          </center>
          <ul>
            <?php
              $sql = mysqli_query($conn, "SELECT W.id_Winner, U.username, U.date_birth,  FROM Winners
                                          INNER JOIN Users U on W.id_user = U.id_user
                                          ORDER BY id_Winner DESC") 
                                          or die(mysql_error());
              $x = 1;

              while($escrever = mysqli_fetch_array($sql)){
                echo "<li>";
                echo "<span class='number'>$x</span>";
                echo "<span class='name'>" . $escrever['username'] . "</span>";
                echo "<span class='points'>" . $escrever['date_birth'] . "</span>";
                echo "<span class='badge'><i class='fas fa-trophy'></i></span>";
                echo "</li>";
                $x++;
              }
            ?>
          </ul><br><br>
        </div><br><br>
        <div style="color: white;" class="lista" id="Users"><br>
          <center>
          <h2 style="color: grey;"> Last Registers </h2>
          </center>
          <ul>
            <?php
              $sql = mysqli_query($conn, "SELECT * FROM Users") or die(mysql_error());

              $x = 1;

              while($escrever = mysqli_fetch_array($sql)){
                echo "<li>";
                echo "<span class='number'>$x</span>";
                echo "<span class='name'>" . $escrever['username'] . "</span>";
                echo "<span class='points'>" . $escrever['date_birth'] . "</span>";
                echo "<span class='badge'><i class='fas fa-trophy'></i></span>";
                echo "</li>";
                $x++;
              }
            ?>
          </ul><br><br>
        </div><br><br><br><br><br><br>
        <div id="rodape" style="color: rgb(165, 165, 165);">
          <center>
            © Web Jam | 2020
          </center><br><br>
        </div>
    </body>
</html>