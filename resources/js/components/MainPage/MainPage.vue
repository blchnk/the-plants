<template>
    <div class="main-page-template">
        <div class="container">
            <div class="intro">
                <Header></Header>
                <div class="intro__main-content main-content">
                    <div class="main-content__text-block">
                        <h1 class="main-content__title">Цветочный магазин</h1>
                        <p class="main-content__text" >Принесите немного уюта в свой дом вместе с нашими <br> пышными растениями.</p>
                        <a href="" class="buy-now-link">
                            <button class="button green-btn buy-now-btn">Купить сейчас</button>
                        </a>
                    </div>
                    <div class="main-content__img-wrapper">
                        <img class="intro__img" src="/images/main/intro.png" alt="">
                    </div>
                </div>
            </div>
        </div>

        <main>
            <NewArrivalsCatalog></NewArrivalsCatalog>
            <Collections></Collections>
            <div class="about-baby-plants">
                <a class="about-baby-plants__img-link" href="#">
                    <img class="about-baby-plants__img" src="/images/main/PLNTS-HOME-Learn-About-Babyplnts-Banner.png" alt="">
                </a>
            </div>
        </main>

        <Footer></Footer>

        <Help></Help>
    </div>
</template>

<script>
import Header from "../Header/Header";
import NewArrivalsCatalog from "../NewArrivalsCatalog/NewArrivalsCatalog";
import Collections from "../Collections/Collections";
import Footer from "../Footer/Footer";
import Help from "../Help/Help";

export default {
    name: "MainPage",
    data() {
        return {}
    },
    components: {
        Header,
        NewArrivalsCatalog,
        Collections,
        Footer,
        Help
    },
    computed: {}
}
</script>

<style lang="scss">

.intro {
    background-color: #FBF2EB;
    padding-bottom: 80px;
}

.intro__main-content {
    display: flex;
    justify-content: space-between;
    margin-top: 100px;
    padding: 0 40px;
}

.intro__img{
    width: 700px;
    max-width: 100%;
    height: auto;
}

.main-content__text-block {
    display: flex;
    flex-direction: column;
    justify-content: center;
    padding-right: 10px;
}

.main-content__text{
    font-size: 20px;
    opacity: 70%;
}

.buy-now-btn {
    margin-top: 25px;
}

.about-baby-plants {
    margin-top: 40px;
}

.about-baby-plants__img{
    max-width: 100%;
}

@media (max-width: 1024px) {
    .intro__main-content {
        flex-direction: column;
    }

    .main-content__text-block {
        padding-bottom: 30px;
    }
}

</style>
