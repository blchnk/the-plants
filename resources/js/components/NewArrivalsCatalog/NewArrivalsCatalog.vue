<template>
    <div class="container_inner">
        <div class="new-arrivals">
            <div class="chapter__title">
                <h2>Новые поступления</h2>
            </div>
            <div class="new-arrivals__body">
                <NewArrivalsCatalogItem v-for="product in PRODUCTS"
                                        :key="product.id"
                                        :product_data = product>
                </NewArrivalsCatalogItem>
            </div>
        </div>
    </div>
</template>

<script>
import NewArrivalsCatalogItem from "./NewArrivalsCatalogItem";
import {mapGetters} from 'vuex';

export default {
    name: "NewArrivalsCatalog",
    components: {
        NewArrivalsCatalogItem
    },
    data() {
        return {}
    },
    methods: {},
    computed: {
        ...mapGetters(['PRODUCTS'])
    }
}
</script>

<style lang="scss">

.new-arrivals{
    margin-top: 26px;
}

.new-arrivals__body{
    display: flex;
    justify-content: center;
    margin: 0 -15px;
}

@media(max-width: 1024px) {
    .new-arrivals__body{
        margin: 0 -10px;
    }
};

@media(max-width: 768px) {
    .new-arrivals__body{
        flex-wrap: wrap;
    }
};

</style>
