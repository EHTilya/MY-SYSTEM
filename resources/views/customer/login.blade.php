


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>VETA Tailor</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/login.css">
</head>

<body>
    <br>
    <br>
    <div></div>
        <div class="container" id="container">
            <!--Both Containers are special sign up and sign in-->
            <div class="form-container sign-up-container">
                <form action="register" method="POST">
                  @csrf
                    <h1>Tengeneza Akaunti</h1>
                    <input type="text" placeholder="Name" name="name" required/>

                    <input type="email" placeholder="Email" name="email" required/>
                    <span style="color: red">@error('email'){{$message}} @enderror</span>

                    <input type="password" placeholder="Password" name="password" required/>

                    <button>Register</button>
                </form>
            </div>
            <div class="form-container sign-in-container">
                <form action="/login" method="POST">
                  @csrf
                    <h1>Sign in</h1>
                    <input type="email" placeholder="Email" name="email" required/>

                    <input type="password" placeholder="Password" name="password" required/>
                    <span style="color: red">@error('password'){{$message}} @enderror</span>

                    <button>Sign In</button>
                </form>
            </div>
            <!--These two panels hold the content -->
            <!--Eah button has an ID-->
            <div class="overlay-container">
                <div class="overlay">
                    <div class="overlay-panel overlay-left">
                        <h1>Karibu Tena!</h1>
                        <p style="color: white";> Ili Tuweze kukupa Huduma Bora zaidi Ingia kwa Akaunti yako</p>
                        <button class="ghost" id="signIn">Sign In</button>
                    </div>
                    <div class="overlay-panel overlay-right">
                        <h1 style="color: white"; >Habari Yako, Karibu Sana  <strong>Oline Tailoring Management System!</strong></h1>
                        <p>Ingiza Taarifa zako ili uanze nasi safari ya Kukuhudumia /p>
                        <button class="ghost" id="signUp">Register</button>
                    </div>
                </div>
            </div>
            <br>
            <br>
        </div>
    
        <script src="./js/main.js"></script>
        <script>
          
const signupButton = document.getElementById('signUp')

const signInButton = document.getElementById('signIn')

const container = document.getElementById('container')

signupButton.addEventListener('click', ()=>
{
    container.classList.add('right-panel-active')
})
signInButton.addEventListener('click', ()=>
{
    container.classList.remove('right-panel-active')
})
</script>

</body>
</html>
