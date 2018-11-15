<template>
    <div class="contenedor-padre-portafolio-home">
    <div class="contenedor-titulo-portafolio-home">
        <h3>Proyectos exitosos</h3>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eos, quasi eum distinctio ex</p>
    </div>

    <div class="contenedor-tarjetas-proyectos columns is-multiline">

        <div class="contenedor-proyecto-seleccionado column is-7" >
            <div v-for="(item, index) in lists.slice(0 , 4)" :key="index" class="contenedor-tarjeta-grande">
                <div class="contenedor-imagen-destacada">
                    <img :src=" item.datos_del_proyecto.foto_de_portada.url "  alt="">
                </div>
                <div class="contenedor-info-proyecto">
                    <h3>{{ item.title.rendered }}</h3>
                    <span><strong>Categoría: </strong>{{ item._embedded['wp:term']['0']['0'].name}}</span>
                    <p>{{ item.excerpt.rendered }}</p>
                    <a :href=" item.link ">Ver más</a>
                </div>

            </div>
        </div>

        <div class="contenedor-cuatro-imagen column is-4">
            <div class="contenedor-hijo-cuatro-imagen columns is-multiline">
                <div v-for="(item, index) in lists.slice(0 , 4)" :key="index" class="contenedor-imagen column  is-one-fifths-widescreen is-half-desktop ">
                    <div class="contenedor-imagen-peque" :id=" item.id " >
                        <img :src=" item._embedded['wp:featuredmedia']['0'].media_details.sizes.full.source_url " alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</template>

<script>
    var urlWp = 'http://diversa.test/wp-json/wp/v2/proyectos-api?_embed';
export default {

    data() { 
        return {
            lists: [],
        }
    },

    mounted() {
        this.getPostType();
        this.clickalert();
    },

    methods: {
        getPostType: function() {
            axios.get(urlWp).then(response => {
                console.log(response.data);
                this.lists = response.data;
            });
        },

    }
    
    
}

</script>