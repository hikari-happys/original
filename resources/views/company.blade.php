@extends('meta.head')

<main id="company">

	<div class="title">Company</div>

    <div class="company_item_title">アクセスマップ</div>
    <div class="frame">
        <div class="ggmap"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3282.0870842824875!2d135.50411711490483!3d34.65250359330639!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6000e76077e042ff%3A0xe5cbcf56def44557!2z6YCa5aSp6Zaj!5e0!3m2!1sja!2sjp!4v1595215265301!5m2!1sja!2sjp" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></div>
    </div>
    <div class="company_item_title">企業情報</div>

    <div class="frame">
        <div class="company">
            <table class="companytable">
                <tr class="companytable_row">
                    <th class="companytable_head">会社名</th>
                    <td class="companytable_data">{{$addresses->name}}</td>
                </tr>
                 <tr class="companytable_row">
                    <th class="companytable_head">住所</th>
                    <td class="companytable_data">{{$addresses->address}}</td>
                </tr>
                <tr class="companytable_row">
                    <th class="companytable_head">代表者名</th>
                    <td class="companytable_data">{{$addresses->ceo_name}}</td>
                </tr>
                <tr class="companytable_row">
                    <th class="companytable_head">営業時間</th>
                    <td class="companytable_data">{{$addresses->remarks}}</td>
                </tr>
                <tr class="companytable_row">
                    <th class="companytable_head">業務内容</th>
                    <td class="companytable_data">{{$addresses->content}}</td>
                </tr>
                <tr class="companytable_row">
                    <th class="companytable_head">従業員数</th>
                    <td class="companytable_data">{{$addresses->employee}}</td>
                </tr>
                <tr class="companytable_row">
                    <th class="companytable_head">店舗数</th>
                    <td class="companytable_data">{{$addresses->shop}}</td>
                </tr>
                <tr class="companytable_row">
                    <th class="companytable_head">主な出店先</th>
                    <td class="companytable_data">{{$addresses->branch}}</td>
                </tr>
            </table>
        </div>
    </div>

        <div class="company_item_title">代表挨拶</div>
        <div class="frame">
        <div class="ceo_box">
            <div class="ceo_text">
                <p class="ceo_title">私たちの手で未来を造る</p>
                <p>これからの社会には、〇〇のようなITシステムの必要性を感じ創業して以来15年、ＩＴ社会の成長とともに私たちも成長してまいりました。<br>
                    「お客様に最高の満足度を提供する」という経営理念の下、私たちが提供させていただいているシステムが、より皆様の身近な存在になるべく、<br>
                    システム内容の向上や最新技術の導入、また市場調査やマーケットの開拓などに、全社員の総力でもって取り組んでまいりました。<br>
                    私たちのシステムが、皆様一人ひとりの快適な未来へつながっていく、その強い想いを持ってこれからも日々あらゆる事業に邁進していく所存です。<br>
                    今後とも益々のご支援とご愛好を賜りますようお願い申し上げます。</p>
            </div>
            <p class="ceo_name">代表：へのへの　もへじ</p>
            <div class="ceo_pict"><img src="{!! asset('/img/ceo_img.jpg') !!}" alt=""></div>

        </div>
        </div>

        <div class="company_item_title">沿革</div>
        <div class="frame">
            <table>
              <tr>
                <th>1985年</th>
                <td>初代社長 山井幸雄が、ACSEEZを創業。</td>
              </tr>
              <tr>
                <th>1959年</th>
                <td>新規ブランドを立ち上げる</td>
              </tr>
              <tr>
                <th>1963年</th>
                <td>「スノーピーク」を商標登録</td>
              </tr>
              <tr>
                <th>1971年</th>
                <td>新代表として東山明が就任する。</td>
              </tr>
              <tr>
                <th>1980年</th>
                <td>有限会社 山井商店を設立。法人組織化。釣具ブランド「カープ」を商標登録し、フィッシング業界に参入。本格的アウトドアレジャーのメーカーとして事業領域を拡大。</td>
              </tr>
              <tr>
                <th>1997年</th>
                <td>現社長である山井太が入社。アウトドアをライフスタイルととらえ、スノーピークをオートキャンピングブランドとしてリニューアル開始。</td>
              </tr>
              <tr>
                <th>2000年</th>
                <td>北海道、北九州にも営業所を設立</td>
              </tr>
              <tr>
                <th>2005年</th>
                <td>ヨーロッパへ輸出開始し、韓国をはじめアジア市場へ本格参入。</td>
              </tr>
            </table>

    </div>

</main>
