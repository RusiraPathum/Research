<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Attendance</title>
    <link rel="stylesheet" href="lib/bootstrap/css/bootstrap.css">
    <link href="lib/bootstrap/css/bootstrap-grid.min.css" rel="stylesheet">
    <link href="lib/bootstrap/css/bootstrap-reboot.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header class="container text-center">
        <h1 class="mt-5">Employer Attendance</h1>
    </header>

    <div class="container mt-5">
        <div class="row">
            <div class="col-2">
            </div>
            <div class="col-8">
                <div class="att-form p-4">
                    <div class="mb-3 form-group">
                        <label for="exampleInputEmail1" class="form-label">Date</label>
                        <input type="date" class="form-control" id="date" name="date">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1" class="form-label">Full Name</label>
                        <select class="form-select mb-3" aria-label="Default select example" id="name" name="name">
                            <option selected>Select Name</option>
                            <option>Malindu Athugala</option>
                            <option>Janith Sameera</option>
                            <option>Kalansooriya</option>
                        </select
                    </div>
                    <div class="mb-3 form-group">
                        <label for="exampleInputPassword1" id="name" class="form-label">In Time</label>
                        <input type="time" class="form-control" id="in_time" name="in_time">
                    </div>
                    <div class="mb-3 form-group">
                        <label for="exampleInputPassword1" class="form-label">Out Time</label>
                        <input type="time" class="form-control" id="out_time" name="out_time">
                    </div>
                    <div class="float-right">
                        <input  value="Submit" onclick="check()" type="button" name="submit" class="btn btn-primary">
                    </div>
                </div>
            </div>
            <div class="col-2">
            </div>
        </div>
    </div>



<script src="lib/jquery/jquery.min.js "></script>
<script src="lib/bootstrap/js/bootstrap.js "></script>
<script src="lib/bootstrap/js/bootstrap.bundle.min.js "></script>
<script src="js/test.js"></script>

</body>
</html>
