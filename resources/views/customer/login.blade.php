


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
        <div class="container" id="container">
            <!--Both Containers are special sign up and sign in-->
            <div class="form-container sign-up-container">
                <form action="register" method="POST">
                  @csrf
                    <h1>Create Account</h1>
                    <input type="text" placeholder="Name" name="name" />
                    <span style="color: red">@error('name'){{$message}} @enderror</span>

                    <input type="email" placeholder="Email" name="email"/>
                    <span style="color: red">@error('email'){{$message}} @enderror</span>

                    <input type="password" placeholder="Password" name="password" />
                    <span style="color: red">@error('password'){{$message}} @enderror</span>

                    <button>Sign Up</button>
                </form>
            </div>
            <div class="form-container sign-in-container">
                <form action="/login" method="POST">
                  @csrf
                    <h1>Sign in</h1>
                    <input type="email" placeholder="Email" name="email" />
                    <span style="color: red">@error('email'){{$message}} @enderror</span>

                    <input type="password" placeholder="Password" name="password" />
                    <span style="color: red">@error('password'){{$message}} @enderror</span>
                    <button>Sign In</button>
                </form>
            </div>
            <!--These two panels hold the content -->
            <!--Eah button has an ID-->
            <div class="overlay-container">
                <div class="overlay">
                    <div class="overlay-panel overlay-left">
                        <h1>Welcome Back!</h1>
                        <p style="color: white";>To keep connected with us please login with your personal info</p>
                        <button class="ghost" id="signIn">Sign In</button>
                    </div>
                    <div class="overlay-panel overlay-right">
                        <h1 style="color: white"; >Hello, Welcome on VETA Tailor!</h1>
                        <p>Enter your personal details and start journey with us</p>
                        <button class="ghost" id="signUp">Register</button>
                    </div>
                </div>
            </div>
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
{{View::make('customer/footer')}}

</body>
</html>
