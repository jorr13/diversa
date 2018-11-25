<template>
    <nav class="pagination">

        <a v-if="pagination.prevPage" @click="$emit('prev')" class="button is-small pagination-previous">
            <i class="favi fa chevron-left" aria-hidden="true"></i>
        </a>
        <a class="button is-small pagination-previous" v-else disabled>
            <i class="favi fa chevron-left" aria-hidden="true"></i>
        </a>
        <span class="page-stats">{{pagination.from}} - {{pagination.to}} de {{pagination.total}}</span>
        <a v-if="pagination.nextPage" @click="$emit('next')" class="button is-small pagination-next">
            <i class="favi fa chevron-right" aria-hidden="true"></i>
        </a>
        <a class="button is-small pagination-next" v-else disabled>
            <i class="favi fa chevron-right" aria-hidden="true"></i>
        </a>
    </nav>
</template>

<script>
    export default {
        props: ['pagination'],
    }
</script>