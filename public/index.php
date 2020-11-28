
<?php include_once 'header.php' ?>

    <body class="bg-info" >
        <div class="container-fluid col-md-10 offset-md-1"> </div>
        <div class="row"></div>
        <div class="card mt-3 px-2 py-2"> </div>

<h1 title="Stationery Application"></h1>
   <p> “Welcome to this fictional stationery
    application page created for ISAD251 example. To continue please accept our terms and conditions ”.
   </p>
<form action="agreement.php" method="get">
    <div>
        <input type="radio" id="true" name="buttons" value="agree">
        <label for="true">Agree</label><br>

        <input type="radio" id="false" name="buttons" value="disagree">
        <label for="false">Disagree</label><br>
    </div>
</form>


<?php include_once 'footer.php' ?>

