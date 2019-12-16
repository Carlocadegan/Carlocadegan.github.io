new Vue({
    el: 'main',
    data: {
        datos: [],
        imagenes: [],
        detalleHeroe: []
    },
    methods: {

        mostrarDatos: function () {


            inicio = 'https://www.superheroapi.com/api.php';
            token = '590126311739622';
            id = '';
            this.datos = [];


            for (var i = 1; i < 7; i++) {

                console.log("CONTADOR :" + i);
                url = inicio + '/' + token + '/' + i + '/';
                axios.get(url).then(res => {


                    this.datos.push(res.data);
                    console.log(this.datos);
                }).catch(e => {

                });
            }

        },
        cargarModal: function (a) {
            this.detalleHeroe = a;
            var elems = document.querySelector('.modal');
            var instance = M.Modal.init(elems, Option);
            var Option = {
                startingTop: '100%',
            };
            instance.open();

            console.log(this.detalleHeroe);
        },
        cerrarModal: function () {
            var elems = document.querySelector('.modal');
            var instance = M.Modal.getInstance(elems);
            instance.close();
        }
    },
    created() {
        this.mostrarDatos();
    },
    mounted() {

        document.addEventListener('DOMContentLoaded', function () {
            var elems = document.querySelectorAll('.modal');
            var instance = M.Modal.init(elems);
        });  
    }
});

