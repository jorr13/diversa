<template>
    <div>
        <!--posts start here-->
        <div class="posts-container columns is-mobile is-multiline">
            <div v-for="(post, index) in posts" :key="index" class="column is-one-quarter-desktop is-half-tablet   animate fadeIn">
                <div class="contenedor-papa-card post-item">
                    <div class="card-posts">
                        <div class="contenido-tarjeta">
                            <h2 class="title-posts">{{post.title.rendered}}</h2>
                            <p class="resumen-blog">{{post.excerpt.rendered}}</p>
                            <a :href=" post.link ">leer más</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <pagination :pagination="pagination" @prev="--postsData.page; getPosts();" @next="postsData.page++; getPosts();">
        </pagination>
    </div>

</template>

<script>
    export default {
        //To check these methods, check global.js
        endpoint: '/wp-json/wp/v2/posts/?_embed',
        per_page: 8,
        beforeUpdate: function () {
            setTimeout(()=>{
                var resPro = document.getElementsByClassName('resumen-blog');
                if(resPro){
                    var i,
                        resLength,
                        resExcer;
                    for(i = 0; i < resPro.length; i++){
                        resExcer = resPro[i].textContent;
                        if(resExcer.length > 80){
                            resLength = resExcer.slice(0, 80);
                            resPro[i].textContent = resLength + "...";
                        }else{}
                    }
                }
            },1000)
        },
    }
    

</script>

<style lang="scss" scoped>
    @for $i from 1 through 10 {
        .post-item:nth-of-type(#{$i}n) {
            animation-delay: #{$i * 0.5}s;
            animation-name: fadeInUp;
        }
    }

</style>
