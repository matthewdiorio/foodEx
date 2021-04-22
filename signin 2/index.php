
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/w3.css">
    <link rel="stylesheet" href="../styles/styles.css">
    <link rel="stylesheet" href="../styles/signin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.1.1/css/all.css">
    <link rel="shortcut icon" href="../assets/logo/Favicon.png" type="image/x-icon">
    <title>Sign into FoodEx</title>
</head>

<body>
    <nav class="w3-bar ">
        <div class="nav-container">
            <div class="w3-row w3-stretch  w3-center w3-mobile">
                <a class="w3-bar-item w3-button  w3-center w3-mobile" href="./">
                    <img class="w3-image nav-logo" src="../assets/logo/FullLockup_forWhiteBG.png"
                        alt="FoodEx Logo Home icon"></a>
                <div class=" w3-bar-item nav-group w3-stretch nav-link-group w3-content w3-quarter">
                    <a class="nav-link  w3-bar-item w3-button w3-cell  w3-cell-bottom  w3-mobile" href="./about">Home</a>
                    <a class="nav-link  w3-bar-item w3-button w3-cell  w3-cell-bottom  w3-mobile" href="./about">About Us</a>
                    <a class="nav-link w3-bar-item w3-button w3-cell w3-cell-bottom w3-mobile" href="./banks">Banks</a>
                </div>
                <div class="w3-bar-item nav-btn-group w3-half">
                    <div class="w3-row ">
                        <div class="input-icons">
                            <input class="nav-input w3-input input-field" placeholder="&#x1F50E;" type="text">
                        </div>
                        <div class="w3-row-padding">
                            <a href="../../signin/" class="w3-bar-item">
                                <button class="w3-btn w3-round-xxlarge w3-mobile w3-light-blue w3-hover-red">Sign In</button></a>
                            <a href="../../signup/" class="w3-bar-item">
                                <button class="w3-btn w3-round-xxlarge w3-mobile w3-light-blue w3-hover-red">Sign Up</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    
    <section class="menu">
        <div class="w3-row w3-center">
            <div class="w3-auto ">
                <h2 class="w3-section">Are you a Patron or Bank?</h2>
                <a class="link" href="../dashboard/patron/"><div class="w3-half   w3-mobile w3-card user-box">
                    <img class="w3-image w3-margin" src="https://via.placeholder.com/500x250" alt="" srcset="">
                    <h3>Patron </h3>
                    <?php $_SESSION['type'] = "patron"?>
                </div>
            </a>
            <a class="link" href="../dashboard/bank/">
                <div class="w3-half w3-mobile w3-card user-box">
                    <img class="w3-image w3-margin" src="https://via.placeholder.com/500x250" alt="" srcset="">
                    <h3>Food Bank</h3>
                    <?php $_SESSION['type'] = "foodbank"?>

                </div>
            </div>
            </a>
        </div>
    </section>
    <footer>
        <div class="w3-margin-top w3-row w3-border  w3-bar">
            <div class="w3-auto ">
                <ul class="w3-ul w3-mobile ">
                    <li class="w3-mobile w3-auto w3-bar-item">
                        <a class="link" href="../">Home</a>
                    </li>
                    <li class="w3-mobile w3-auto w3-bar-item">
                        <a class="link" href="../about/">About</a>
                    </li>
                    <li class="w3-mobile w3-auto w3-bar-item">
                        <a class="link" href="../banks/">Banks</a>
                    </li>
                   
                    <li class="w3-mobile w3-auto w3-bar-item">
                        <a class="link" href="#">Terms & Conditions</a>
                    </li>
                    <li class="w3-mobile w3-auto w3-bar-item">
                        <a class="link" href="#">Privacy Policy</a>
                    </li>
                </ul>
            </div>
        </div>
    </footer>
</body>

</html>