@extends('meta.head')
@extends('meta.footer')


<main id="top">
    <div class="fram">
	 <p class="big_title">ACSEEZ</p>
	<small class="caption">さまざまなジャンルに挑戦し続けるアパレルブランド</small>
    </div>
    <hr>



    <div class="jump_page">
        <img class="jump_img" src="{!! asset('/img/slid_01.jpg') !!}">
        <a href="https://www.gorge-shop.com/">GORGE</a>
    </div>
    <div class="jump_page">
        <img class="jump_img" src="{!! asset('/img/slid_03.jpg') !!}">
        <a href="https://www.rakuten.co.jp/idealblum/">iDeal blum</a>
    </div>


    <div class="frame">
        <div class="top_title">新しい価値を創り出す</div>
        <div class="box">
          <div class="text">
            <h3>旬も。品質も。価格も。</h3>
            <p>最新トレンドを、東京発の感性でアレンジ。<br>
                お客さまの声に寄り添って作られた服を、手に取りやすい価格で。</p>
          </div>
          <div class="pict"><img class="top_image" src="{!! asset('/img/top_01.jpg') !!}" alt=""></div>
        </div>

        <div class="box">
          <div class="text">
            <h3>新しい自分を、楽しもう。</h3>
            <p>気軽にトライしてみよう。<br>
                旬のデザインや、選んだことのないカラーに。<br>
                ルールなんてない。着こなしは、無限大。</p>
          </div>
          <div class="pict"><img src="{!! asset('/img/top_02.jpg') !!}" alt=""></div>
        </div>
        <div class="box">
          <div class="text">
            <h3>すべてのシーンへ。<br>
                すべてのひとへ。</h3>
            <p>カジュアルやクリーンなスタイルはもちろん、<br>
                スポーツウェアからラウンジウェアまで。<br>
                旬のデザインでありながら、２４時間３６５日、<br>
                心地よく過ごせる服を。</p>
          </div>
          <div class="pict"><img src="{!! asset('/img/top_03.jpg') !!}" alt=""></div>
        </div>
    </div>

    <div class="index_item_title">RECOMMEND</div>

    <div class="frame">
    <ul class="serviceflow_list">
        <li>
            <img class="flow_item" src="{!! asset('/img/recommend_01.jpg') !!}">
            <p class="flow_text">
                1位
            </p>
        </li>
        <li>
            <img class="flow_item" src="{!! asset('/img/recommend_02.jpg') !!}">
            <p class="flow_text">
                2位
            </p>
        </li>
        <li>
            <img class="flow_item" src="{!! asset('/img/recommend_03.jpg') !!}">
            <p class="flow_text">
                3位
            </p>
        </li>
    </ul>






    <div class="main">
            <!--スライドを表示させる画面-->
           <div class="slider">
                <!--  横に並べた複数のスライドを格納する用コンテナ  -->
               <ul class="slider__container">
                    <!--  各スライド -->
                   <img src="{!! asset('/img/recommend_01.jpg') !!}" alt="" class="slider__item slider__item1">
                   <img src="{!! asset('/img/recommend_02.jpg') !!}" alt="" class="slider__item slider__item1">
                   <img src="{!! asset('/img/recommend_03.jpg') !!}" alt="" class="slider__item slider__item1">
                   <img src="{!! asset('/img/recommend_04.jpg') !!}" alt="" class="slider__item slider__item1">
                   <img src="{!! asset('/img/recommend_05.jpg') !!}" alt="" class="slider__item slider__item1">
               </ul>
           </div>
       </div>

    </div>





</main>
