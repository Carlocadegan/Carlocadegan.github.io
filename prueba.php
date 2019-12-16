<!DOCTYPE html>
<html>
    <head>
        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
        <link href="https://fonts.googleapis.com/css?family=Coming+Soon&display=swap" rel="stylesheet">

        
        

        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>  
    <style>

        .efecto {
            -webkit-transition: all 0.4s; /* Safari */
            transition: all 0.4s;
        }
        .efecto:hover {
            filter: drop-shadow(5px 5px 8px black);
        }
        body {
        font-family: 'Coming Soon', cursive;
        font-size:;
      }
       
    </style>
    <body style= background-image:url('https://img.chilango.com/2019/01/marvel-en-cdmx.jpg') fixed;>
        <main>
        <!-------nav------->
        <nav>
    <div class="nav-wrapper black">
    <a href="#" class="brand-logo">Evaluacion 3</a>
      <a href="#1" class="brand-logo right">Creadores<i class="material-icons right">fingerprint</i></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
      </ul>
    </div>
  </nav>
  <!---------nav----------------->
            <div class="container">
                <div class="row">
                    <div class="col s12">
                        <div class="card-panel grey darken-3">
                             <h1 class="white-text center">Super Heroes</h1>                                                      
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s12">

                            <div class="row">

                                <div v-for="a in datos">

                                    <div class="col s12 m4 efecto">
                                        <div class="card">
                                            <div class="card-image ">
                                                <img v-bind:src="a.image.url" class="img-thumbnail" width="150px">
                                                <span class="card-title scrollspy"><strong>{{a.name}}</strong></span>
                                            </div>
                                            <div class="card-content">
                                                <p><strong>Super Poderes</strong></p>
                                                <ol>
                                                    <li>Inteligencia: {{a.powerstats.intelligence}}</li>
                                                    <li>Fuerza: {{a.powerstats.strength}}</li>
                                                    <li>Velocidad: {{a.powerstats.speed}}</li>
                                                    <li>Poder: {{a.powerstats.power}}</li>
                                                </ol>
                                            </div>
                                            <div class="card-action center-align">
                                                <button @click='cargarModal(a)' class="btn-small waves-effect waves-light green white-text"> + Información</button> 
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <!-- Modal Structure -->
                                <div id="modal" class="modal">
                                    <div class="modal-content">
                                        <h4>{{detalleHeroe.name}}</h4>
                                        
                                        <ul class="collection">
                                            <li class="collection-item" v-for="(value, key) in detalleHeroe.powerstats">{{key}}: {{value}}</li>       
                                            <li class="collection-item" v-for="(value, key) in detalleHeroe.biography">{{key}}: {{value}}</li>   
                                            <li class="collection-item" v-for="(value, key) in detalleHeroe.appearance">{{key}}: {{value}}</li> 
                                            <li class="collection-item" v-for="(value, key) in detalleHeroe.weight">{{key}}: {{value}}</li>  
                                            <li class="collection-item" v-for="(value, key) in detalleHeroe.work">{{key}}: {{value}}</li>  
                                            <li class="collection-item" v-for="(value, key) in detalleHeroe.connections">{{key}}: {{value}}</li>  
                                        </ul>  
                                    </div>                                 
                                                   
                                        
<!--                                    <pre>{{$data}}</pre>-->


                                    <div class="modal-footer">
                                        <button @click='cerrarModal()' class="btn-small waves-effect waves-light black white-text"> Cerrar</button> 
                                    </div>
                                </div>
                            </div>


                        </div>



                    </div>
                </div>
            </div>
        </div>
    </main>



    <footer class="row scrollspy grey darken-4" id="1" >
        <div class="col s12 fondoFooter">
            <div class="container">
                <div class="row">

                    <div class="col s12 m12 l6">
                        <h4>Información</h4>
                        <p class="grey-text">Carlo Cadegan</p>
                        <p class="grey-text">Leonardo Santi</p>

                    </div>
                    <div class="col s12 m12 l6">
                        <h4>Redes Sociales</h4>
                        <ul> <a href="#home" class="white-text">KADEGANJHA<i class="material-icons left">linked_camera</i></a></ul>
                        <ul> <a href="#home" class="white-text">leomch2_14<i class="material-icons left ">linked_camera</i></a></ul>
                    </div>
                

                </div>
            </div>
        </div> 

        <div class="footer-copyright #212121 grey darken-4">

        </div>
    </footer>


    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <!-- development version, includes helpful console warnings -->
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script src="js/prueba.js" type="text/javascript"></script>
</body>
</html>