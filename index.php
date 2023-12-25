<!--DOCTYPE html-->
<html>
    <head>
      <?php require("./php/componetes/src.php");?>
      <link rel="stylesheet" href="./asset/style/index.css">
   </head>
    <body>
       <!-- the header come here -->
       <?php require("./php/componetes/header.php");?>
        <main>
            <div class="row text-center">
                <div class="col-md-6">
                    <h1 > Seja benvido na FIXPROMO</h1>
                    <h2 class="text-center"> Ganhe <span class="badge badge-danger">10€ </span> com a Sitefix </h2>
                    <p class="text-center pclass">LEtiam quis Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi varius dui id ipsum luctus Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi varius dui id ipsum luctus blandit. Etiam quis ligula vel sem maximus molestie ac et enim. In ac justo viverra, porttitor risus et, vulputate urna. Aenean </p>
                    <div class=" row mt-4 ml-5">
                        <div class=" col-md-6 border p-3 mr-4">
                             <p><i class="fa-solid fa-signal"></i></p>
                            <p class="font-weight-bold text-primary">+ 2000</p>
                            <button class=" btn"> empresa inscrita </button>
                        </div>
                        <div class=" col-md-5 border p-3">
                            <i class="fa-regular fa-user"></i>
                            <p class="font-weight-bold text-primary">+ 40.000$</p>
                            <button class="btn"> Ganhado pelo utilisadores </button>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <img src="./asset/img/search.png">
                </div>
            </div>
            <h3> Etapas  à Seguir:</h3>
            <selection class="row text-center" id="etapes">
                 <div class="card col-md-3 ml-4 mr-4" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Escolher os produtos</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="card-link">Card link</a>
                        <a href="#" class="card-link">Another link</a>
                      </div>
                    </div>
                    <!-- second etapes -->
                    <div class="card col-md-3  mr-4" style="width: 18rem;">
                      <div class="card-body">
                        <h5 class="card-title">Registar teus dados</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="card-link">Card link</a>
                        <a href="#" class="card-link">Another link</a>
                      </div>
                    </div>
                    <div class="card col-md-3  mr-2" style="width: 18rem;">
                      <div class="card-body">
                        <h5 class="card-title">Receber o codigo promotional</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="card-link">Card link</a>
                        <a href="#" class="card-link">Another link</a>
                      </div>
                    </div>
            </selection>
            <button class="btn text-white bg-primary" style="background-color:2D2A32" type="button"><a href="./php/templates/empresa.php" class="text-white"> começar</a> </button>
        </main>
        <?php require("./php/componetes/footer.php"); ?>
    </body>
</html>