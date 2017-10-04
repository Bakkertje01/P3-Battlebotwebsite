<?php
include 'include/session.php';
include 'include/db_connection.php'
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
                        Titel van pagina
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
                            <!--Content body hier!
                            <p> Complete breedte. Zet hier de content in die de pagina moet weergeven.</p>
                                <img src="foscam.serverict.nl" width='' onload='setTimeout(function() {src = src.substring(0, (src.lastIndexOf("t=")+2))+(new Date()).getTime()}, 1000)' onerror='setTimeout(function() {src = src.substring(0, (src.lastIndexOf("t=")+2))+(new Date()).getTime()}, 5000)' alt='' />
                            <img alt="" src="http://foscam.serverict.nl/videostream.cgi?user=guest&pwd=">
                            <a href="http://foscam.serverict.nl/decoder_control.cgi?command=nn&onestep=5&user=guest&pwd=" target="control">[up]</a>
                            <a href="http://foscam.serverict.nl/decoder_control.cgi?command=2&onestep=5&user=guest&pwd=" target="control">[Down]</a>
                            <a href="http://foscam.serverict.nl/decoder_control.cgi?command=4&onestep=5&user=guest&pwd=" target="control">[Right]</a>
                            <a href="http://foscam.serverict.nl/decoder_control.cgi?command=6&onestep=5&user=guest&pwd=" target="control">[Left]</a>
                            <iframe name="control" height="1" width="1"></iframe>
                            -->
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
                            <!--Content body hier!
                            <p>Halve breedte. Zet hier de content in die de pagina moet weergeven.</p>


                            <img alt="" src="http://webcam.serverict.nl/videostream.cgi">
-->
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
