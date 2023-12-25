
<php?>
<!--DOCTYPE html-->
<html>
    <head>
        <?php require("../componetes/src.php");?>
        <link rel="stylesheet" href="../../../style/empresa.css">
    </head>
    <body>
        <header>
            <div class="row ">
                <div class="col-md-8">
                    <a href="./index.html"><img src="logo come here" alt="sitefix afiliation logotype">
                    </a>
                    </div>
                <div class=" row col-md-4 text-center">
                    <button class=" col-md-5 mr-2 btn"> se inscrever </button>
                    <button class=" col-md-5 btn"> se conectar</button>
                </div>
            </div>
        </header>
        <main>
            <hr>
            <article>
                <h1>Encontra serviços para vender:</h1>
                <div class="row">
                    <p class="col-md-6 left text-gray ">Prestaçao de serviço:</p>
                    <p class="col-md-2 text-gray">Comiçao:</p>
                    <p class="col-md-2 text-gray">Paris:</p>
                    <p class="col-md-2"></p>
                </div>
                <form class="row">
                    <input class="form-control col-md-6" placeholder="Escreva o nome da prestaçao">
                    <select class="form-control col-md-2" placeholder="comiçao">
                        <option>5%</option>
                        <option>10%</option>
                        <option>15%</option>
                        <option>20%</option>
                        <option>25%</option>
                        <option>30%</option>
                        <option>35%</option>
                    </select>
                    <input class="form-control col-md-2" placeholder="pais">
                    <button class="btn bg-primary text-white ml-3"><i class="fa-solid fa-magnifying-glass"></i></button>
                </form>
            </article>
            <hr>
            <section>
                <article class="row">
                   <div class="col-md-3">
                        <img src="" alt="le logo ou imagem da empresa ou individuol">
                   </div> 
                   <div class="col-md-4">
                        <h5 class="text-center"> Prestaçao de serviço </h5>
                        <p class="text-center"> description of the entreprise </p>
                        <div class="row">
                            <div class="col-md-5">
                                <p class="categories"> <i class="fa-solid fa-suitcase-rolling"></i> categories</p>
                            </div>
                            <div class="col-md-4">
                                <h6> <i class="fa-solid fa-map-pin text-danger"></i> Paris</h6>
                            </div>
                            <div class="col-md-3">
                                <h6>Sitefix</h6>
                            </div>
                        </div>
                   </div>
                   <div class="col-md-2">
                        <h6 class="text-center">N° de serviços</h6>
                        <p class="text-center"> 10</p>
                        <p class="text-center"><i class="fa-regular text-info fa-circle-check"></i></p>
                   </div>
                   <div class="col-md-2">
                    <p> Opçao:</p>
                    <a href="./seleciona.php"><button class="btn bg-primary text-white"> obter <i class="fa-solid fa-location-arrow"></i></button></a><br>
                    <a href="./seleciona.php"><button class="btn bg-info text-white mt-4" title="ver todo serviços da empresa ...."> <i class="fa-solid fa-plus"></i> Todo</i></button></a>
              
                </div>
                </article>
                <hr>
                <article class="row">
                    <div class="col-md-3">
                         <img src="" alt="le logo ou imagem da empresa ou individuol">
                    </div> 
                    <div class="col-md-4">
                         <h5 class="text-center"> Prestaçao de serviço </h5>
                         <p class="text-center"> description of the entreprise </p>
                         <div class="row">
                             <div class="col-md-5">
                                 <p class="categories"> <i class="fa-solid fa-suitcase-rolling"></i> categories</p>
                             </div>
                             <div class="col-md-4">
                                 <h6> <i class="fa-solid fa-map-pin text-danger"></i> Paris</h6>
                             </div>
                             <div class="col-md-3">
                                 <h6>Sitefix</h6>
                             </div>
                         </div>
                    </div>
                    <div class="col-md-2">
                         <h6 class="text-center">N° de serviços</h6>
                         <p class="text-center"> 10</p>
                         <p class="text-center"><i class="fa-regular text-info fa-circle-check"></i></p>
                    </div>
                    <div class="col-md-2">
                     <p> Opçao:</p>
                     <a href="./seleciona.php"><button class="btn bg-primary text-white"> obter <i class="fa-solid fa-location-arrow"></i></button></a><br>
                     <a href="./seleciona.php"><button class="btn bg-info text-white mt-4" title="ver todo serviços da empresa ...."> <i class="fa-solid fa-plus"></i> Todo</i></button></a>
                 </div>
                 </article>
            </section>
        </main>
        <?php require("../componetes/src.php"); ?>
    </body>
</html>
