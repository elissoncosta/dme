<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400&display=swap" rel="stylesheet">
        <title>Cadastro de Eventos</title>
        <style>
        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        body{
            background: rgb(255, 77, 77);
        }
        .row{
            background: #ffffff;
            border-radius: 30px;
            box-shadow: 6px 6px 22px rgb(0, 0, 0);
        }
        .img1{
            border-top-left-radius: 30px;
            border-bottom-left-radius: 30px;
        }
        .logo{
            margin-left: 55px;
        }
        .btn1{
            border: none;
            outline: none;
            height: 50px;
            width: 100%;
            background-color: rgb(255, 77, 77);
            color: #ffffff;
            border-radius: 4px;
            font-weight: bold;
        }
        .btn1:hover{
            background-color: #ffffff;
            border: 1px solid rgb(255, 77, 77);
            color: rgb(255, 77, 77);

        }
        h4, p{
            color: rgb(255, 77, 77);
            font-family: 'Roboto', sans-serif;
            font-weight: 400;
        }
        a{
            color: rgb(255, 77, 77);
            font-family: 'Roboto', sans-serif;
            font-weight: 400;
        }
        
        </style>
    </head>
    <body>

        <section class="form my-4 mx-5">
        <div class="container">
            <div class="row g-0 align-items-center">
                <div class="col-lg-7 px-5 pt-4">
                    <div class="col-lg-2">
                        <img src="./img/logo.png" class="logo img-fluid w-30" alt="">
                    </div>
                    <div class="col-lg-2">
                        hop
                    </div>
                    <form action="">
                        <div class="form-row">
                            <div class="col-lg-7">
                            <input type="text" placeholder="NOME DO EVENTO" class="form-control my-3 p-2">
                            </div>
                        </div>

                        <div class="radio">
                            <label class="radio-inline">
                                <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                                Evento Presencial
                            </label>
                        </div>
                        <div class="radio">
                            <label class="radio-inline">
                                <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                                Evento Online
                            </label>
                        </div>
                        
                        <label>Tipo de Evento:</label>
                        <select class="form-control">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>

                        <label>Sexo::</label>
                        <select class="form-control">
                            <option>Masculino</option>
                            <option>Fêminino</option>
                            <option>Ambos</option>
                        </select>

                        <label>faixa etária:</label>
                        <select class="form-control">
                            <option>LIVRE (L)</option>
                            <option>Não recomendado para menores de 10 (dez) anos</option>
                            <option>Não recomendado para menores de 12 (doze) anos</option>
                            <option>Não recomendado para menores de 14 (quatorze) anos</option>
                            <option>Não recomendado para menores de 16 (dezesseis) anos</option>
                            <option>Não recomendado para menores de 18 (dezoito) anos</option>
                        </select>

                        <div class="form-row">
                            <div class="col-lg-7">
                            <input type="text" placeholder="A expectativa de participantes" class="form-control my-3 p-3">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-7">
                            <input type="text" placeholder="NOME" class="form-control my-3 p-3">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-7">
                            <input type="text" placeholder="NOME" class="form-control my-3 p-3">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-7">
                            <input type="text" placeholder="NOME" class="form-control my-3 p-3">
                            </div>
                        </div>
                        
                        <div class="form-row">
                            <div class="col-lg-7">
                            <input type="text" placeholder="EMAIL" class="form-control my-3 p-3">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-7">
                            <input type="text" onfocus="(this.type='date')" id="date" placeholder="DATA EVENTO INICIO" class="form-control my-3 p-3">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-7">
                            <input type="text" onfocus="(this.type='date')" id="date" placeholder="DATA EVENTO TERMINO" class="form-control my-3 p-3">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-7">
                            <input type="text" placeholder="CPF" class="form-control my-3 p-3">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-7">
                            <button type="button" class="btn1 mb-4">cadastrar</button>
                            </div>
                        </div>
                        
                        <p>Já possui uma conta? <a href="login.php"> Faça seu Login</a></p>
                    </form>
                </div>
            </div>
        </div>
        </section>




        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>

        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.min.js" integrity="sha384-PsUw7Xwds7x08Ew3exXhqzbhuEYmA2xnwc8BuD6SEr+UmEHlX8/MCltYEodzWA4u" crossorigin="anonymous"></script>
        -->
    </body>
</html>