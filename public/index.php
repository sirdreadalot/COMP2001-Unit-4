
<?php include_once 'header.php' ?>

    <body> class=’bginfo’ </body>
    <div> class=’container-fluid col-md-10 offset-md-1’ </div>
    <div> class=’row’</div>
    <div> class=’card mt-3 px-2 py-2’ </div>

<h1 title="Stationery Application">
   <paragraph> “Welcome to this fictional stationery
    application page created for ISAD251 example. To continue please accept our terms and conditions ”.
   </paragraph>
</h1>
<form action="agreement.php">
    <div>
        <input type="radio" id="true" name="agreeBtn" value="agree">
        <label for="true">Agree</label><br>

        <input type="radio" id="false" name="disagreeBtn" value="disagree">
        <label for="false">Agree</label><br>
    </div>
</form>

    <body> class=’bginfo’</body>
    <div> class=’container-fluid col-md-10 offset-md-1’</div>
    <div> class=’row’ </div>
    <div> class=’card mt-3 px-2 py-2’</div>

<?php include_once 'footer.php' ?>

