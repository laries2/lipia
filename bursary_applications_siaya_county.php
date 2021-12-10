<html>
<head>
    <title>Bursary Applications - Siaya County</title>
    <link rel="icon" href="images/logo.png">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="css/custom.css">
    <script src="bootstrap/js/jquery-3.4.0.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
</head>
<body>
<div class="logo">
    <img src="images/logo.png" alt="Logo" width="100" height="100">
</div>
<hr>
<div class="heading">
    <h3 class="text-center">Bursary Applications - Siaya County</h3>
</div>
<hr>
<div class="container">
    <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm-4">
            <form action="bursary_applications_report_siaya.php" method="post">
                <table class="table table-striped table-responsive-sm">
                    <tr>
                        <td class="text-right">
                            <label for=""><b>County : </b></label>
                        </td>
                        <td>
                            <select name="county" id="county" class="form-control" required>
                                <option value="Kisumu" disabled>Kisumu</option>
                                <option value="Siaya">Siaya</option>
                                <option value="Busia" disabled>Busia</option>
                                <option value="Kisii" disabled>Kisii</option>
                                <option value="Migori" disabled>Migori</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">&nbsp;</td>
                    </tr>
                    <tr>
                        <td colspan="2" class="text-center">
                            <button class="btn btn-primary" type="submit">View Report</button>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
        <div class="col-sm-4"></div>
    </div>
</div>
</body>
</html>