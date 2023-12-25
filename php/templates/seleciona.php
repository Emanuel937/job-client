<!--DOCTYPE html-->
<html>
    <head>
       <?php require("../componetes/src.php"); ?>
      <link rel="stylesheet" href="../../asset/style/empresa.css">
    </head>
    <body>
        <main>
            <hr>
           <div class="row">
               <div class="col-md-8">
                <h1>Aqui estao todos serviços da sitefix que voce pode vender:</h1>
                <div>
                    <form class="flex">
                    <!-- servicos disponives -->
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                          <h5 class="card-title">Serviço nome</h5>
                          <h6 class="card-subtitle mb-2 text-muted">code service</h6>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <div class="row">
                            <a href="#" class=" col-md-5">1000,00€</a>
                            <a href="#" class=" col-md-4">cm 10%</a>
                            <input class="col-md-3" type="checkbox" name="value">
                          </div>
                        </div>
                      </div>
                      <div class="card" style="width: 18rem;">
                        <div class="card-body">
                          <h5 class="card-title">Card title</h5>
                          <h6 class="card-subtitle mb-2 text-muted">code service</h6>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <div class="row">
                            <a href="#" class=" col-md-5">1000,00€</a>
                            <a href="#" class=" col-md-4">cm 10%</a>
                            <input class="col-md-3" type="checkbox" name="value">
                          </div>
                        </div>
                      </div>
                      <div class="card" style="width: 18rem;">
                        <div class="card-body">
                          <h5 class="card-title">Card title</h5>
                          <h6 class="card-subtitle mb-2 text-muted">code service</h6>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <div class="row">
                            <a href="#" class=" col-md-5">1000,00€</a>
                            <a href="#" class=" col-md-4">cm 10%</a>
                            <input class="col-md-3" type="checkbox" name="value">
                          </div>
                        </div>
                      </div>
                    </form>
                      <!-- serviços disponiveis -->
                </div>
                </div>
               <div class="col-md-4">
                <div class="row">
                    <div class="col-md-3">
                        <img src="../../asset/img/af.png" alt="logo agencia" width="10" class="img_agencia">
                    </div>
                    <div class="col-md-9">
                        <h2 class="text-center">AGENCIA WEB SITEFIX</h2>
                        <p class="text-center">Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.</p>
                    </div>
                </div>
                <!-- information sobre comissao -->
                <hr>
                 <p><span class="font-weight-bold text-info ">cm significa</span>: comission </p>
                <h6>Total services : (50)</h6>
                <h6>Total cm en €:200,00€ </h6>
                <button class="btn border bg-primary text-white">Generar code promo</button>
              </div>
           </div>  
        </main>
    </body>
    <?php require("../componetes/footer.php"); ?>
</html>