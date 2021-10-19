<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./css/styleCadastro.css">
    

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400&display=swap" rel="stylesheet">
    <title>InTi</title>
    
  </head>
  <body>

    <section class="form my-4 mx-5">
      <div class="container">
        <div class="row g-0 align-items-center">
          <div class="col-lg-5">
            <img src="./img/img1.jpg" class="img1 img-fluid " alt="">
          </div>
          <div class="col-lg-7 px-5 pt-4">
            <div class="col-lg-7">
              <img src="./img/logo.png" class="logo img-fluid w-75" alt="">
            </div>
            <form action="">
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
                  <input type="text" onfocus="(this.type='date')" id="date" placeholder="DATA NASCIMENTO" class="form-control my-3 p-3">
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