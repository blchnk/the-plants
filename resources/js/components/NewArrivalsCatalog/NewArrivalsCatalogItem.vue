<template>
    <div class="new-arrivals__item-wrapper">
        <div class="new-arrivals__item product-item">
            <a class="new-arrivals__link" @mouseover="mouseOver" @mouseleave="mouseLeave">
                <img class="new-arrivals__img" :src="require('/images/products/' + product_data.image).default" alt="">

                <transition name="product-fade">
                    <div class="product-item__overflow overflow" v-if="active">
                        <button class="green-btn add-to-cart-btn" @click="addToCart()">Добавить в корзину</button>
                    </div>
                </transition>
            </a>

            <div class="product-item__title-and-price-wrapper">
                <a href="" class="product-item__tittle">{{ product_data.name }}</a>
                <div class="product-item__price">{{ product_data.price }} ₽</div>
            </div>
        </div>
    </div>
</template>

<script>
import {mapActions} from 'vuex'
import {mapGetters} from 'vuex';

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
    data(){
        return{
            active: false
        }
    },
    methods:{
        ...mapActions(['SET_CART']),
        mouseOver: function (){
            this.active = true;
        },
        mouseLeave: function (){
            this.active = false
        },
        addToCart: function (){
            this.SET_CART(this.product_data)
        }
    },
    computed: {},
    mounted() {
        this.$set(this.product_data, 'quantity', '1');
    }
}
</script>

<style lang="scss">

.new-arrivals__item-wrapper{
    flex: 0 1 25%;
    padding: 20px 15px;
}

.new-arrivals__item{

}

.new-arrivals__img{
    width: 100%;
    height: auto;
}

.new-arrivals__link{
    display: block;
    position: relative;
}

.product-item__title-and-price-wrapper{
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.product-item__tittle{
    margin-top: 10px;
}

.product-item__price{
    opacity: 80%;
    margin-top: 8px;
}

.product-item__overflow{
    position: absolute;
    top: 0;
    height: 100%;
    width: 100%;
    background-color: rgba(0, 0, 0, 0.3);
}

.product-fade-enter-active, .product-fade-leave-active {
    transition: all .2s linear;
}

.product-fade-enter, .product-fade-leave-to {
    opacity: 0;
}

.buy-now-btn{
    position: absolute;
}

.add-to-cart-btn{
    position: absolute;
    top: 50%; left: 50%;
    -webkit-transform: translate(-50%,-50%);
    -ms-transform: translate(-50%,-50%);
    transform: translate(-50%,-50%);
    transition: background-color linear 0.1s;

    &:hover{
        background-color: #009d7b;
    }
}

@media(max-width: 1024px) {
    .new-arrivals__item-wrapper{
        padding: 20px 10px;
    }
};

@media(max-width: 768px) {
    .new-arrivals__item-wrapper{
        flex: 0 1 50%;
    }
};

@media(max-width:425px) {
    .live-plants__item-wrapper{
        flex: 0 1 100%;
    }
}

</style>
