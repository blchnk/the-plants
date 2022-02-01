<template>
    <div class="single-product-page-template">
        <Header></Header>

        <div class="container_inner">
            <div class="product-profile-body row d-flex py-4">
                <div class="product-img-col col-lg-5 col-12">
                    <img :src="require('/images/products/' + product.image).default" alt=""
                         class="product-img img-fluid mx-auto">
                </div>
                <div class="product-details-col col-lg-5 col-12">
                    <h2 class="single-product__name mb-1">{{ product.name }}</h2>
                    <h4 class="single-product__price mb-2">{{ product.price }} ₽</h4>
                    <button class="button green-btn add-product-btn w-100" @click="addToCart()">В корзину</button>

                    <div class="row product-details mt-3">
                        <div class="col details-title-wrapper">
                            <p class="details-title">Детали</p>
                        </div>
                        <div class="col-9 details-text">
<!--                            <p>{{ product.description }}</p>-->
                            <p class="details-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi facilis ipsam mollitia praesentium rerum, sit tempore. Ab blanditiis dolorum error minima minus, nihil, nisi odio porro quae quaerat reprehenderit vero?</p>
                        </div>
                    </div>
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
        return {}
    },
    props: {
        product: {
            type: Object
        }
    },
    methods: {
        ...mapActions(['SET_CART']),
        addToCart: function () {
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

@media (max-width: 1024px) {
    .container_inner{
        max-width: 750px;
    }
    .product-details{
        border-top: gray 1px solid;
        border-bottom: gray 1px solid;
        padding: 30px 0;
    }
    .details-title{
        font-size: 24px;
        font-weight: bold;
    }
}

</style>
