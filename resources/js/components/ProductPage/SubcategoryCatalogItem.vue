<template>
    <div class="live-plants__item-wrapper">
        <div class="live-plants__item">
            <a :href="'/products/' + product.id" class="live-plants__img-link">
                <img class="live-plants__img" :src="require('/images/products/' + product.image).default" alt="">
            </a>

            <div class="live-plants__title-and-price-wrapper">
                <a href="#" class="live-plants__title-link">{{ product.name }}</a>
                <div class="live-plants__price">{{ product.price }}</div>
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

.live-plants__item-wrapper{
    flex: 1 1 33.3333%;
    padding: 20px 15px;
}

.live-plants__item{

}

.live-plants__img-link{
    display: block;
    position: relative;
}
.live-plants__img{
    width: 100%;
    height: auto;
}

.live-plants__title-and-price-wrapper{
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.live-plants__tittle-link{
    margin-top: 10px;
}

.live-plants__price{
    opacity: 80%;
    margin-top: 8px;
}

@media(max-width: 1024px) {
    .live-plants__item-wrapper{
        padding: 20px 10px;
        flex: 1 1 50%;
    }
};

</style>
