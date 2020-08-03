/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});



//最初にどのスライドから表示するかを選択
var currentItemNum = 1;

var $slideContainer = $('.slider__container');

//クラスslider__itemの要素の個数を算出
var slideItemNum = $('.slider__item').length;

//スタイド１つあたりの横幅を算出
var slideItemWidth = $('.slider__item').innerWidth();

//スライド１つあたりの横幅とスライドの個数から
var slideContainerWidth = slideItemWidth * slideItemNum;

//スライドさせる速さ(animateメソッド用)
var DURATION = 1000;

//横に並べた複数のスライドを格納する用コンテナの横幅を設定
$slideContainer.attr('style', 'width:' + slideContainerWidth + 'px');

//スライドを自動的に変化させる関数
function autoSlide(){
    //現在のスライドの番号が全部のスライドの数より少ないとき
    if(currentItemNum < slideItemNum){
        //スライド用コンテナをanimateメソッドで変化させる
        $slideContainer.animate({left: '-='+slideItemWidth+'px'}, DURATION);//現在のCSSのleftのプロパティの値からスライド１つあたりの横幅分変化させる
        currentItemNum++;//現在のスライド番号を１増やす
    //現在のスライドの番号が全部のスライドの数と同じとき
    }else if(currentItemNum = slideItemNum){
        //現在のCSSのleftのプロパティの値を変更(徐々に変化させないのでanimateメソッドは使わない)
        $slideContainer.css('left', '+='+slideItemWidth*(slideItemNum-1)+'px');
        currentItemNum = 1;//現在のスライド番号を１に戻す
    }
}

//setInterval関数で適当な秒数ごとに実施
setInterval(autoSlide, 5000);
