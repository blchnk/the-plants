<template>
    <div class="col">
        <div class="card">
            <img class="card-img-top" :src="require('/images/products/' + product.image).default" alt="">
            <div class="card-body d-flex justify-content-between">
                <a :href="'/products/' + product.id" class="card-name card-link stretched-link">{{ product.name }}</a>
                <p class="card-price">{{ product.price }}</p>
            </div>
        </div>
    </div>
</template>

<script>

export default {
    name: "SubcategoryCatalogItem",
    props: {
        product: {
            type: Object
        }
    }
}

</script>

<style lang="scss">

</style>
