<?php
/**
 * Created by PhpStorm.
 * User: Ernst-Jan
 * Date: 22-9-2017
 * Time: 09:52
 */
include_once "include/db_connection.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <?php
    include 'include/head.php';
    ?>

</head>

<body>
<?php
include 'include/navigation.php';
?>
<div id="wrapper">
    <div id="page-wrapper">
        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        Standen wedstrijd
                        <small>Hallo</small>
                    </h1>
                </div>
            </div>

            <!-- Body content-->
            <!-- BELANGRIJK: Zorg dat alle content in een row en vervolgens in een panel wordt gezet. Zodat de stijl op elke pagina gelijk is en altijd resposive is. Kijk voor voorbeeld in de index. -->


            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-warning">
                        <div class="panel-heading">
                            <h3 class="panel-title"><i class="fa fa-quote-right fa-fw"></i> Voorbeeld panel met hele breedte</h3>
                        </div>
                        <div class="panel-body">
                            <!--Content body hier! -->
                            <p> <h2>test</h2></p>


                            <div id="wrapper">
                                <div id='content'>


                                    <?php
                                    $DBname = "battlebot";
                                    $DBtable = "leden";
                                    mysqli_select_db($connection,$DBname);
                                    echo(!mysqli_select_db($connection,$DBname))?"COULD NOT SELECT DATABASE": NULL;
                                    $DBcommand = "SELECT * FROM $DBtable WHERE Battlebot_Battlebot_ID = 1";
                                    $DBresult = mysqli_query($connection,$DBcommand);
                                    echo($DBresult === false)?"COULD NOT EXECUTE STATEMENT 1": NULL;
                                    $TH = array("Naam","Achternaam","Groepsfunctie");
                                    $X = 0;
                                    $count = count($TH);
                                    echo "<table class='table table-hover table-striped table-bordered'>";
                                    echo "<tr class='info'>";
                                    while($X < $count ){
                                        echo "<th>".$TH[$X]."</th>";
                                        $X++;
                                    }
                                    echo "</tr>";
                                    while($row = mysqli_fetch_assoc($DBresult)){
                                        echo "<tr>";
                                        echo "<td>".$row["Naam"]."</td>";
                                        echo "<td>".$row["Achternaam"]."</td>";
                                        echo "<td>".$row["Groepsfunctie"]."</td>";
                                        echo "<tr>";
                                    }
                                    echo "</table>";
                                    echo "<br><br>";

                                    ?>


                                </div>


                            </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <div class="panel panel-warning">
                        <div class="panel-heading">
                            <h3 class="panel-title"><i class="fa fa-quote-right fa-fw"></i> Voorbeeld panel met halve breedte</h3>
                        </div>
                        <div class="panel-body">
                            <!--Content body hier! -->
                            <p>Halve breedte. Zet hier de content in die de pagina moet weergeven.</p>

                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="panel panel-warning">
                        <div class="panel-heading">
                            <h3 class="panel-title"><i class="fa fa-quote-right fa-fw"></i> Voorbeeld panel met halve breedte</h3>
                        </div>
                        <div class="panel-body">
                            <!--Content body hier! -->
                            <p>Halve breedte. Zet hier de content in die de pagina moet weergeven.</p>

                        </div>
                    </div>
                </div>
            </div>

            <!-- HIER EINDIGD DE CONTENT -->

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>


</body>

</html>
