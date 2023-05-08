<?php
include 'function.php';

$numbers = '0123456789';
$up_letters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
$low_letters = 'abcdefghijklmnopqrstuvwxyz';
$symbols = '~!@#$%^&*()_-+={[}]|\:;".?/<>,';

if (!empty($_GET["pass_length"])) {
   $length = $_GET["pass_length"];

   $char = "";
   if (!empty($_GET["letters"])) {
      $char .= $up_letters . $low_letters;
   }
   ;
   if (!empty($_GET["numbers"])) {
      $char .= $numbers;
   }
   ;
   if (!empty($_GET["symbols"])) {
      $char .= $symbols;
   }
}

$password = generate_password($length, $char);
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Strong Password Generator</title>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
      integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
      integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
      crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"
      integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/"
      crossorigin="anonymous"></script>
   <!-- mystyle -->
   <link rel="stylesheet" href="style.css">
</head>

<body>

   <header>
      <nav class="nav justify-content-center align-items-center bg-primary bg-gradient">
         <a class="nav-link active text-white" href="/" aria-current="page">Home</a>
         <a class="nav-link text-white" href="#">About</a>
         <a class="nav-link text-white" href="#">Contacts</a>
      </nav>
   </header>

   <main class="bg-dark">

      <div class="container py-4">
         <h1 class="text-center text-white text-muted my-2">Strong Password Generator</h1>

         <h2 class="text-center text-white">
            Generate your password
         </h2>

         <div class="card my-5 d-flex">

            <div class="row row-cols-2">
               <div class="col">
                  <div class="card-body h-100 d-flex flex-column justify-content-between">
                     <div class="top">
                        <strong>Password Length:</strong>
                     </div>
                     <div class="bottom">
                        <button type="submit" form="p_len" class="btn btn-primary">Generate</button>
                        <button type="reset" form="p_len" class="btn btn-secondary">Reset</button>
                     </div>
                  </div>
               </div>
               <div class="col">
                  <div class="card-body d-flex flex-column justify-content-between">
                     <form id="p_len" action="" method="get">
                        <div class="mb-3">
                           <input type="number" name="pass_length" id="pass_length" min="3" class="form-control w-50">
                        </div>
                        <div class="mb-3">
                           <label for="formCheck">
                              Choose how to compose your password:
                           </label>
                        </div>
                        <div class="form-check">
                           <input class="form-check-input" type="checkbox" name="letters" value="letters" id="letters">
                           <label class="form-check-label" for="letters">
                              Letters
                           </label>
                        </div>
                        <div class="form-check">
                           <input class="form-check-input" type="checkbox" name="numbers" value="numbers" id="numbers">
                           <label class="form-check-label" for="numbers">
                              Numbers
                           </label>
                        </div>
                        <div class="form-check">
                           <input class="form-check-input" type="checkbox" name="symbols" value="symbols" id="symbols">
                           <label class="form-check-label" for="symbols">
                              Symbols
                           </label>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <h3 class="text-white text-center">
         Your Password:
         <?= $password ?>
      </h3>
   </main>
</body>

</html>