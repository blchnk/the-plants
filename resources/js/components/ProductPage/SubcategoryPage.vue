<template>
    <div class="live-plants-template">
        <Header></Header>

        <div class="container_inner">
            <h2 class="page-title">{{ subcategory_name.name }}</h2>
        </div>

        <div class="container_main">
            <div class="filter-bar">
                <p class="filter-bar__subtitle">СОРТИРОВАТЬ ПО</p>
                <ul class="filter-tabs">
                    <li class="tabs-title">
                        <a href="#">Особенности</a>
                    </li>
                    <li class="tabs-title">
                        <a href="#">Разновидность</a>
                    </li>
                    <li class="tabs-title">
                        <a href="#">Размер</a>
                    </li>
                </ul>
                <button class="btn clear clear-all-filters">
                    Очистить все фильтры
                </button>
            </div>
        </div>

        <SubcategoryCatalog :products = this.products
                            :subcategory_name = this.subcategory_name>
        </SubcategoryCatalog>

        <Footer></Footer>

    </div>
</template>

<script>
import Header from "../Header/Header";
import Footer from "../Footer/Footer";
import SubcategoryCatalog from "./SubcategoryCatalog";

export default {
    name: "SubcategoryPage",
    components: {
        SubcategoryCatalog,
        Header,
        Footer
    },
    data(){
        return{}
    },
    props: {
        products: {
            type: Array
        },
        subcategory_name: {
            type: Array
        }
    }
}
</script>

<style lang="scss">

.page-title {
    padding: 40px 0 20px;
    color: #00ab84;
}

.filter-bar {
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    background-color: #f8f8f7;
    padding: 25px 50px;
    margin-bottom: 50px;
}

.filter-bar__subtitle {
    vertical-align: middle;
    float: left;
    font-size: 14px;
    padding-right: 40px;
    color: #999793;
}

.filter-tabs {
    display: flex;
}

.tabs-title {

    a {
        font-size: 24px;
        font-weight: bold;
        margin-right: 50px;
    }
}

.clear-all-filters {
    text-align: right;
    color: #00AA83;
    margin-left: auto;
    cursor: pointer;
}

</style>
