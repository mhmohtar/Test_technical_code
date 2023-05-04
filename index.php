<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Technical Test</title>
</head>
<body>
    <div class="container">
        <div class="card p-5">
            <form action="segitiga.php">
                <div class="row">
                    <div class="col-lg-3">
                        <input type="text" placeholder="input angka" name="bilangan">
                    </div>
                    <div class="col-lg-2">
                        <button type="submit">Generate Segitiga</button>
                    </div>
                </div>
            </form>

            <form action="ganjil.php">
                <div class="row">
                    <div class="col-lg-3">
                        <input type="text" placeholder="Input angka" name="bilangan2">
                    </div>
                    <div class="col-lg-3">
                        <button type="">Generate Bilangan Ganjil</button>
                    </div>
                </div>
            </form>

            <form action="prima.php">
                <div class="row">
                    <div class="col-lg-3">
                        <input type="text" placeholder="input angka" name="bilangan3">
                    </div>
                    <div class="col-lg-3">
                        <button>Bilangan Bilangan Prima</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>