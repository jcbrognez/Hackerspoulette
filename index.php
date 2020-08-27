<!DOCTYPE html>
<html lang="en-us">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- bootstrap css -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    <!-- css style -->
    <link rel="stylesheet" href="./assets/css/style.css">
    <!-- font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Bellota:wght@300;400;700&display=swap">

    <!-- country selector -->


    <title>Hackers Poulette</title>
</head>

<body>
    <header class="logo text-center bg-dark"><!-- style with css -->
        <img src="./assets/img/hackers-poulette-logo.png" alt="Logo de hackers poulette" class="img-fluid" style="max-height: 250px;">
    </header>

    <!-- Bootstrap container -->
    <main class="container form">

        <h1 class="text-center">Form :</h1>

        <form action="" method="POST" class="row justify-content-center" > <!-- add action to php (/action_page.php)-->
        
            <fieldset class="form-group col-2">
                <legend></legend><label>Gender :</label>
                <label>Mr <input type="radio" name="optradio" value="mr"></label>
                <label>Ms <input type="radio" name="optradio" value="ms"></label>
                
            </fieldset>

            <label class="form-group col-4 ">Firstname :
              <input type="text" name="firstname" id="firstname" class="form-control" placeholder="Firstname">
            </label>

            <label class="form-group col-4">Lastname :
              <input type="text" name="lastname" id="lastname" class="form-control" placeholder="Lastname">
            </label>

            <!-- Force next columns to break to new line -->
            <div class="w-100"></div>

            <label class="form-group col-4 offset-2">Email Address :
                <input type="email" class="form-control" id="email" name="email" placeholder="Email address">
            </label>

            <!-- avoided method
            <div class="form-group col-4">
                <select name="country" id="country" class="bfh-selectbox bfh-countries" data-country="US" data-flags="true" defaul="select a country"></select>
            </div> -->

            <label class="form-group col-4">Country :
                <select id="country" name="country" class="form-control"class="dropdown-menu">
                <option value="--select a country--">--select a country--</option>
        <option value="Åland Islands">Åland Islands</option>
        <option value="Albania">Albania</option>
        <option value="Algeria">Algeria</option>
        <option value="American Samoa">American Samoa</option>
        <option value="Andorra">Andorra</option>
        <option value="Angola">Angola</option>
        <option value="Anguilla">Anguilla</option>
        <option value="Antarctica">Antarctica</option>
        <option value="Antigua and Barbuda">Antigua and Barbuda</option>
        <option value="Argentina">Argentina</option>
        <option value="Wallis and Futuna">Wallis and Futuna</option>
        <option value="Western Sahara">Western Sahara</option>
        <option value="Yemen">Yemen</option>
        <option value="Zambia">Zambia</option>
        <option value="Zimbabwe">Zimbabwe</option>
                </select>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
            </label>

            <!-- Force next columns to break to new line -->
            <div class="w-100"></div>

            <div class="form-group col-4 offset-2">
                <label for="subject">Select a subject :</label>
                <select name="subject" id="subject">
                    <option value="subject1">Subject 1</option>
                    <option value="subject2">Subject 2</option>
                    <option value="other">Other</option>
                </select>
            </div>

            <label class="form-group col-4">Your message :
                <textarea name="message" id="message" style="width: 100%; max-width: 100%;" placeholder="Write your message" rows="3"></textarea>
            </label>

            <!-- Force next columns to break to new line -->
            <div class="w-100"></div>

            <button type="submit" class="btn btn-default">Submit Form</button>

        </form>

    </main>

    <footer></footer>

    <!-- Insert default values in text fields -->
    <script>
        function defaultValueInput() {
            document.getElementById("firstname").defaultValue = "Firstname";
            document.getElementById("lastname").defaultValue = "Lastname";
            // Add others ...
        }
        //defaultValueInput();
    </script>

    <!-- jQuery, Popper.js, Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>



</body>
</html>