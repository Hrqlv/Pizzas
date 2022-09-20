<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login/Cadastro</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/cf6fa412bd.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
        <div class="buttonsForm">
            <div class="btnColor"></div>
            <button id="btnSignin">Login</button>
            <button id="btnSignup">Cadastro</button>
        </div>

        <form id="signin">
            <input type="text" placeholder="Email" required />
            <i class="fas fa-envelope iEmail"></i>
            <input type="password" placeholder="Password" required />
            <i class="fas fa-lock iPassword"></i>
            <div class="divCheck">
                <input type="checkbox" />
                <span>Lembrar Senha</span>
            </div>
            <button type="submit">Logar</button>
        </form>

        <form id="signup">
            <input type="text" placeholder="Email" required />
            <i class="fas fa-envelope iEmail"></i>
            <input type="password" placeholder="Senha" required />
            <i class="fas fa-lock iPassword"></i>
            <input type="password" placeholder="Confirme a senha" required />
            <i class="fas fa-lock iPassword2"></i>
            <div class="divCheck">
                <input type="checkbox" required />
                <span>Confio nos termos de uso</span>
            </div>
            <button type="submit">Cadastrar</button>
        </form>
    </div>

    <script src="lc.js"></script>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins&family=Roboto:wght@100;300;400;500;700;900&family=Source+Sans+Pro:wght@200;300;400;600;700;900&display=swap');

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'poppins', sans-serif;
}

body {
    width: 100vw;
    height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: #E8C07D;
}
.container {
    background-color: goldenrod;
    padding: 6px;
    width: 350px;
    height: 450px;
    display: flex;
    flex-direction: column;
    align-items: center;
    position: relative;
    overflow: hidden;
    border-radius: 10px;
    box-shadow: 0 0 20px 0 black;
}

form {
    position: absolute;
    margin-top: 80px;
    transition: .5s;
    width: 300px;
    height: 400px;
}

.buttonsForm {
    margin-top: 40px;
    position: relative;
    border-radius: 30px;
    box-shadow: 0 0 7px 0 yellow;
}

.buttonsForm button {
    cursor: pointer;
    background: transparent;
    border: none;
    position: relative;
    padding: 10px 29px;
    color: white;
}

.btnColor {
    position: absolute;
    width: 108px;
    height: 100%;
    background: linear-gradient(to right, red, orange);
    border-radius: 30px;
    transition: .3s;
}

input[type="text"],
input[type="password"] {
    border: none;
    margin-top: 40px;
    border-radius: 60px;
    padding: 8px 0 8px 35px;
    outline: none;
    width: 100%;
    box-shadow: 0 0 20px 0 yellow;
}

button[type="submit"] {
    background: red;
    color: white;
    border-radius: 30px;
    width: 100%;
    border: none;
    outline: none;
    padding: 8px 0 8px 15px;
    font-size: 15px;
    margin-top: 40px;
    cursor: pointer;
    box-shadow: 0 0 20px 0 yellow;
}

.divCheck {
    margin: 10px 0 0 5px;
    width: 80%;
    font-size: 13px;
}

#signin {
    left: 25px;
}

#signup {
    left: 450px; 
}

i {
    position: absolute;
    left: 0;
    padding: 10px 10px;
}

.iEmail {
    top: 40px;
}

.iPassword {
    top: 114px;
}

.iPassword2 {
    top: 190px;
}
</style>
</body>

</html>