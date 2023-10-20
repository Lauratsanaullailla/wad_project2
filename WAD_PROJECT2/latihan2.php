<!doctype HTML>
<html>
    <head>
        <title> Latihan 2 PHP </title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    </head>
    <body style="background-color: #ffffff">
        <h1 class="h1" align="center">Calulate Your Number</h1>
    <form>
        <div class="container text-start">
        <label for="angka1">Number</label>
        <input type="number" class="form-control" name= "angka1" id="angka1" placeholder="Fill this coloum">
        <small id="angka" class="form-text text-muted">Fill as you want to calculated</small>     
        </div>
    
        <div class="container text-start">
        <label for="operator">Operation</label>
        <select class="form-control" name="operator" id="operator">
            <option>tambah</option>
            <option>kurang</option>
            <option>bagi</option>
            <option>kali</option>
        </select>
        </div>

        <div class="container text-start">
        <label for="angka2">Number</label>
        <input type="number" class="form-control" name="angka2" id="angka2" placeholder="Fill this coloum">
        <small id="angka2" class="form-text text-muted">Fill as you want to calculated</small>     
        </div>
        <div class="container text-start mt-3">
            <button type="button" class="btn btn-dark">Calculate</button>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $angka1 = $_POST["angka1"];
        $angka2 = $_POST["angka2"];
        $operator = $_POST["operator"];
        $hasil = 0;

        if (is_numeric($angka1) && is_numeric($angka2)) {
            switch ($operator) {
                case "tambah":
                    $hasil = $angka1 + $angka2;
                    break;
                case "kurang":
                    $hasil = $angka1 - $angka2;
                    break;
                case "kali":
                    $hasil = $angka1 * $angka2;
                    break;
                case "bagi":
                    if ($angka2 != 0) {
                        $hasil = $angka1 / $angka2;
                    } else {
                        echo "Division by zero is not permitted.";
                    }
                    break;
                default:
                    echo "Invalid operator.";
            }
            echo "Results" . $hasil;
        } else {
            echo "Enter a valid number.";
        }
    }
    ?>
        </div>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"></script>
    </body>
</hmtl>