


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>VETA Tailor</title>
    <link rel="stylesheet"
    href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
    integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay"
    crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
</head>
<style>
  


*
{
    box-sizing: border-box
}

body
{
    font-family: 'Raleway', sans-serif;
    background: #f6f5f7;
    display: flex;
    justify-content: center;
    flex-direction: column;
    align-items: center;
    height:100vh;
    margin:-20px 0 50px;
   
}

h1
{
    font-weight: bold;
    margin: 0;
}

h2
{
    text-align: center
}

p
{
    font-size: 14px;
    font-weight: 100;
    line-height: 20px;
    letter-spacing: 0.5pc;
    margin:20px 0 30px;
}

span
{
    font-size: 12px;
}

a{
color: black;
font-size: 14px;
text-decoration: none;
margin:15px 0
}

.container
{
    background: white;
    border-radius: 10px;
    box-shadow: 0 14px 20px rgba(0, 0, 0, 0.25),
    -30px 0px 40px rgba(0, 0, 0, 0.25);
    position: relative;
    overflow: hidden;
    width: 768px;
    max-width: 100%;
    min-height:480px
}

form {
	background-color: #FFFFFF;
	display: flex;
	align-items: center;
	justify-content: center;
	flex-direction: column;
	padding: 0 50px;
	height: 100%;
	text-align: center;
}

.social-container
{
    margin: 20px 0
}

.social-container a
{
    border: 1px solid white;
    border-radius: 50%;
    display:inline-flex;
    justify-content: center;
    margin: 0 5px;
    height: 40px;
    width: 40px;

}

input
{
    background: #eee;
    border: none;
    padding: 12px 15px;
    margin: 8px 0;
    width: 100%;

}

button
{
    border-radius: 20px;
    border :1px solid black;
    border-color:white;
    background: black;
    color:white;
    font-size: 12px;
    font-weight: bold;
    padding: 12px 45px;
    letter-spacing: 1px;
    text-transform: uppercase;
    transition: transform 80ms ease 

}

button:active
{
    transform: scale(0.95)
}

button:focus
{
outline: none
}


button.ghost
{
    background:black;
    border-color:white; 
}


.form-container
{
    position: absolute;
    top: 0;
    height: 100%;
    transition: all 0.6s ease-in-out;
}

.sign-in-container 
{
    left:0;
    width: 50%;
    z-index:2
}
.sign-up-container {
	left: 0;
	width: 50%;
	opacity: 0;
	z-index: 1;
}


.overlay-container
{
    position: absolute;
    top: 0;
    left: 50%;
    width: 50%;
    height: 100%;
    overflow: hidden;
    transition: transform  0.6s ease-in-out;
    z-index: 100;
}

.overlay
{
    margin-bottom: 30px;
    text-shadow: rgba(0,0,0,.8) 0 1px 0;
    border-radius: 4px;
    background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTROOa0s27epxjM21I8WcuiB85o5-S2x2Hglw&usqp=CAU');
    color:black;
    position: relative;
    left:-100%;
    height:100%;
    width:200%;
    transform: translateX(0);
    transition: transform  0.6s ease-in-out;
    background-repeat: no-repeat;
	background-size: cover;
}

.overlay-panel
{
    position: absolute;
    top: 0;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    padding :0 40px;
    height: 100%;
    width: 50%;
    text-align:center;
    transform:translateX(0);
    transition:transform  0.6s ease-in-out;

}

.overlay-right
{
    right:0;
    transform: translateX(0);
}

.overlay-left
{
    
    transform: translateX(-20%);
}


/*Animation*/

/*Move Sign in to the right*/
.container.right-panel-active .sign-in-container
{
    transform: translateX(100%)
}


/*Move overlay to the left*/
.container.container.right-panel-active .overlay-container
{
    transform: translateX(-100%)
}

/*Bring sign up over sign in*/
.container.right-panel-active .sign-up-container
{
    transform: translateX(100%);
    opacity: 1;
    z-index: 5;
}

/*Move overlay back to right*/
.container.container.right-panel-active .overlay
{
    transform: translateX(50%)
}

.container.container.right-panel-active .overlay-left
{
    transform: translateX(0)
}
.container.container.right-panel-active .overlay-right
{
    transform: translateX(20%)
}

</style>
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
</body>
</html>
