<template>

</template>

<script>

export default {
    name: "App"
}
</script>

<style lang="scss">

@font-face {
    font-family: 'PT_Serif';
    src: url('../assets/fonts/PT_Serif/PTSerif-Regular.otf');
    src: url('../assets/fonts/PT_Serif/PTSerif-Regular.eot?#iefix') format('embedded-opentype');
    font-style: normal;
    font-weight: 400;
}

@font-face {
    font-family: 'PT_Serif';
    src: url('../assets/fonts/PT_Serif/PTSerif-Bold.ttf');
    font-style: normal;
    font-weight: 700;
}

@font-face {
    font-family: 'Wremena';
    src: url('../assets/fonts/Wremena/Wremena-Regular.otf') format('otf');
    font-style: normal;
    font-weight: 400;
}

@font-face {
    font-family: 'Wremena';
    src: url('../assets/fonts/Wremena/Wremena-Bold.otf') format('otf');
    font-style: normal;
    font-weight: 700;
}

//*********************//

*{
    margin: 0;
    padding: 0;
    font-family: "PT_Serif", serif;
    font-size: 18px;
    font-weight: 400;
    font-style: normal;
    color: #2d2a24;
    box-sizing: border-box;
}

.container{
    max-width: 1440px;
    margin: 0 auto;
    box-sizing: content-box;
}

.container_inner{
    max-width: 1345px;
    margin: 0 auto;
    padding: 0 50px;
    box-sizing: content-box;
}

::selection {
    color: #ffffff; /* Цвет текста */
    background: #00ab84; /* Цвет фона */
}

h1{
    font-family: "Wremena", serif;
    font-weight: 400;
    font-size: 70px;
}

h2{
    font-family: "Wremena", serif;
    font-size: 48px;
}

h3{
    font-family: "Wremena", serif;
    font-size: 36px;
}

h4{
    font-family: "Wremena", serif;
    font-size: 24px;
}

ul{
    padding-inline-start: 0;
    margin-block-start: 0;
    margin-block-end: 0;
}

li{
    list-style-type: none;
}

a{
    text-decoration: none;
    cursor: pointer;
    color: black;
}

button{
    border: none;
    background-color: inherit;
}

img{
    display: block;
}

input[type="text"] {
    font-family: inherit;
    font-size: inherit;
    line-height: inherit;
    margin: 0;
}

//*********************//

.underline-animation{
    position: relative;
}
.underline-animation:hover:before{
    transform: scaleX(1);
}
.underline-animation:before{
    content: "";
    position: absolute;
    display: block;
    width: 100%;
    height: 1px;
    bottom: 0;
    left: 0;
    background-color: #000;
    transform: scaleX(0);
    transform-origin: top left;
    transition: transform 0.3s ease;
}

.green-btn{
    padding: 16px 20px;
    background-color: #00AA83;
    color: white;
    cursor: pointer;

    transition: background-color linear 0.1s;

    &:hover {
        background-color: #009d7b;
    }
}

//*********************//

.chapter__title{
    margin-bottom: 5px;
}

</style>
