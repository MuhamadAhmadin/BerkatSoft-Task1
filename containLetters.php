<?php

function containLetters($firstWord, $secondWord)
{
    // lowercase
    $needle = strtolower($firstWord);
    $haystack = strtolower($secondWord);

    // split string
    $splitted = str_split($needle);
    $status = false;

    // check tiap huruf ada di haystack atau tidak
    foreach ($splitted as $huruf) {
        if (str_contains($haystack, $huruf)) {
            $status = true;
        } else {
            $status = false;
            break;
        }
    }
    return $status;

}

$res = null;
$firstWord = null;
$secondWord = null;
// Check if the form is submitted
if (isset($_POST['first_word']) && isset($_POST['second_word'])) {
    // Get the first word
    $firstWord = $_POST['first_word'];
    // Get the second word
    $secondWord = $_POST['second_word'];

    // Check if the first word contains the second word
    if (containLetters($firstWord, $secondWord)) {
        $res = "True";
    } else {
        $res = "False";
    }
}

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Muhamad Ahmadin - Task 1</title>
</head>

<body>
    <div class="container mt-2">
        <form action="" method="POST">
            <div class="row">
                <div class="col-md-12">
                    <h4>Contain Letters Function Checker</h4>
                    <hr>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>firstWord</label>
                        <input type="text" class="form-control" name="first_word" value="<?= $firstWord ?>" required>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>secondWord</label>
                        <input type="text" class="form-control" name="second_word" value="<?= $secondWord ?>" required>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary" id="btn-check">Check</button>
                </div>
            </div>
            <?php if($res != null): ?>
            <div class="row mt-2">
                <div class="col-md-12">
                    <div class="alert alert-primary" role="alert">
                        <?php echo $res; ?>
                    </div>
                </div>
            <?php endif; ?>
        </form>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>