<template>
    <div class="container_inner">
        <div class="cards-grid row row-cols-2 row-cols-lg-3 g-4">
            <SubcategoryCatalogItem v-for="product in products"
                                    :key="product.id"
                                    :product="product">
            </SubcategoryCatalogItem>
        </div>
    </div>
</template>

<script>
import SubcategoryCatalogItem from "./SubcategoryCatalogItem";

export default {
    name: "ProductCatalog",
    components: {
        SubcategoryCatalogItem
    },
    data() {
        return {}
    },
    props: {
        products: {
            type: Array
        }
    }
}
</script>

<style lang="scss">

//.live-plants {
//    margin-top: 26px;
//}
//
//.live-plants__body {
//    display: flex;
//    justify-content: left;
//    margin: 0 -15px;
//    flex-wrap: wrap;
//}
//
//@media(max-width: 1024px) {
//    .live-plants__body {
//        margin: 0 -10px;
//    }
//};

</style>
