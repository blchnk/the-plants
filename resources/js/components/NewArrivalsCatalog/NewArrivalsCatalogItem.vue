<template>
    <div class="new-arrivals__item-wrapper">
        <div class="card">
            <img class="card-img-top" :src="require('/images/products/' + product_data.image).default" alt="">
            <div class="card-body d-flex justify-content-between">
                <a href="" class="card-name stretched-link card-link">{{ product_data.name }}</a>
                <div class="card-price">{{ product_data.price }} ₽</div>
            </div>
        </div>
    </div>
</template>

<script>

export default {
    name: "NewArrivalsCatalogItem",
    props: {
        product_data: {
            type: Object,
            default() {
                return {}
            }
        }
    },
    data() {
        return {}
    }
}
</script>

<style lang="scss">

@media(max-width: 1024px) {
    .card-body{
        flex-wrap: wrap;
        padding: 0.5rem 1rem;
        flex-direction: column;
    }
    .card-price, .card-name{
        font-size: 16px;
    }
};

</style>
