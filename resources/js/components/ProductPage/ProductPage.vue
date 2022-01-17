<template>
    <div class="single-product-page-template">
        <Header></Header>

        <div class="container_inner">
            <div class="single-product-page__section">
                <div class="single-product-page__gallery gallery">
                    <img :src="require('/images/products/' + product.image).default" alt="" class="gallery">
                </div>

                <div class="single-product-page__details single-product">
                    <h2 class="single-product__name">{{ product.name }}</h2>
                    <p class="single-product__price">{{ product.price }}₽</p>
                    <button class="btn green-btn add-product-btn" @click="addToCart()">В корзину</button>
                </div>
            </div>
        </div>

        <Footer></Footer>
    </div>
</template>

<script>
import Header from "../Header/Header";
import Footer from "../Footer/Footer";
import {mapActions} from 'vuex'

export default {
    name: "ProductPage",
    components: {
        Header,
        Footer
    },
    data() {
        return{}
    },
    props: {
        product: {
            type: Object
        }
    },
    methods: {
        ...mapActions(['SET_CART']),
        addToCart: function (){
            console.log(this.product);
            this.SET_CART(this.product)
        }
    },
    mounted() {
        this.$set(this.product, 'quantity', '1');
    }
}
</script>

<style lang="scss">

.single-product-page__section{
    display: flex;
    margin-top: 50px;
}

.gallery{
    max-height: 708px;
    max-width: 508px;
    padding-right: 50px;
}

.single-product-page__details{
    //text-align: left;
    display: flex;
    flex-direction: column;
    //width: 100%;
    width: 510px;
}

.single-product__price{
    font-size: 26px;
}

.add-product-btn{
    margin: 20px 0;
}

</style>
