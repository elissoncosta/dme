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
        <title>Cadastro de Ingresso</title>
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
                <div class="row align-items-center">                    
                    <div class="col-lg-7 px-5 pt-4">
                        <div class="col-lg-2">
                            <img src="./img/logo.png" class="logo img-fluid w-30" alt="">
                        </div>
                    </div>

                    <!-- Form -->
                    <div class="px-5 pt-4" >
                        <form class="row gy-3 align-items-center" style="box-shadow: none !important;">

                            <div class="col-md-6">
                                <label>Evento:</label>
                                <select class="form-select input-line-height" aria-label=".form-select-lg example">
                                    <option>1 - FESTA NO APÊ COM O LATINO</option>
                                    <option>2 - MISSA COM PADRE MARCELO ROSSI</option>
                                    <option>3 - STAND UP - Renato Aragão</option>
                                </select>
                            </div>

                            <div class="col-md-6">
                                <div class="col-lg-12">
                                    <label>Valor:</label>
                                    <input type="number" class="form-control my-2 p-2">
                                </div>
                            </div>

                            
                            <div class="col-md-6">
                                <label>Lote:</label>
                                <select class="form-select input-line-height" aria-label=".form-select-lg example">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                </select>
                            </div>

                            <div class="col-md-6">
                                <div class="col-lg-12">
                                    <label>Quantidade por Lote:</label>
                                    <input type="number" class="form-control my-2 p-2">
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <label>Tipo de Ingresso:</label>
                                <select class="form-select input-line-height" aria-label=".form-select-lg example">
                                    <option>Digital</option>
                                    <option>Pulceira</option>
                                    <option>Cartão</option>
                                </select>
                            </div>

                            
                            <div class="form-row">
                                <div class="10" style="margin-top: 30px;">
                                    <button type="button" class="btn1 mb-4">CADASTRAR</button>
                                </div>
                            </div>

                        </form>
                        <p></p>
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