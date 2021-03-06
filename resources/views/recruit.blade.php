@extends('meta.head')
@extends('meta.footer')


<main id="recruit">

<div class="title">Recruit</div>

<div class="recruit_item_title">採用情報</div>

<div class="frame">
    <div class="tabs">
    <input id="all" type="radio" name="tab_item" checked>
    <label class="tab_item" for="all">募集要項</label>
    <input id="programming" type="radio" name="tab_item">
    <label class="tab_item" for="programming">待遇</label>
    <input id="design" type="radio" name="tab_item">
    <div class="tab_content" id="all_content">
        <p class="text">募集職種</p><hr>
        デザイナー・販売・営業・MD・VMD・パタンナー・エリアマネージャー・プレス、広報など、未経験だけど、『アパレル業界で働いて、キャリアを積んでいきたい！』とお考えの方を大募集です。
        <p>◆アパレル、ファッション、シューズ、ジュエリーなど、販売には多くの分野がございます。
        企業・業界の特性、特徴など面接ではなかなか聞けない、ネットで調べてもいまいちよくわからない。そんな方はぜひご相談ください。</p>
        <p>◆アパレル、ファッション、ジュエリー業界の給与事情やキャリア形成のご相談などもお教えいたします。</p>
        <p>＜主な業務内容＞</p>
            接客や、レジ業務、在庫管理など、お客様のサポートをお任せします！
            ノルマはないので自分のペースでお仕事できます。

        <p>〜1日の流れ〜</p>
        <p>▼出勤：朝礼、店内清掃</p>
        <p>▼接客：お客さんのサポート</p>
        <p>▼レジ：レジでお会計</p>
        <p>▼在庫管理：在庫を確認する</p>
        <p>▼閉店：片付け作業</p>

        <p>研修内容も充実しておりますので、安心して業務に入る事ができます!</p>

        </p>

        <p class="text">必要な経験／スキル</p><hr>
        <p>必要なスキルは特にありません。</p>


        <p class="text">あると望ましいスキル／スキル</p><hr>
        <p>・接客業務経験</p>
        <p>・レジ業務経験</p>
        <p>・人と話すのが得意な方</p>

    </div>
    <div class="tab_content" id="programming_content">
        <p class="text">募集職種</p><hr>
        販売staff
        <p class="text">給与</p><hr>
        <p>アルバイト：時給1050〜</p>
        <p>正社員：月230,000〜</p>


        <p class="text">諸手当</p><hr>
        時間外手当、通勤手当（月15万円まで支給）、住宅手当、従業員割、スーパースター制度 ※1による報奨金、黒帯制度 ※2による一時金など。

        <p class="text">昇給</p><hr>
        パフォーマンス評価の結果をもとに、昇給を決定します（年2回）。

        <p class="text">賞与</p><hr>
        会社業績と個人の評価結果に連動した比率で支給します（年2回）。

        <p class="text">評価制度</p><hr>
        <dl>
          <dt>パフォーマンス評価</dt>
          <dd>所属組織で設定したゴールに対する達成度や、個人の貢献度を評価します。日常的に上司との1対1の面接で進捗報告を行い、総合評価します。</dd>
        </dl>

        <p class="text">勤務地</p><hr>
        <dl>
          <dt>本社</dt>
          <dd>大阪府大阪市あいうえおかきくけこ</dd>
          <dt>事業所</dt>
          <dd>北海道、仙台、東京、千葉、大阪、名古屋、高知、福岡、北九州ほか</dd>
        </dl>

        <p class="text">就業時間</p><hr>
        <dl>
          <dt>フレックスタイム制</dt>
          <dd>部署により通常勤務(9:00〜17:45)、シフト勤務あり</dd>
        </dl>

        <p class="text">休日・休暇</p><hr>
        <dl>
          <dt>休日</dt>
          <dd>完全蹴球2日制、国民の祝日、年末年始</dd>
          <dt>休暇</dt>
          <dd>有給休暇、特別有給休暇、土曜日祝日振替特別休日</dd>
          <dt>その他</dt>
          <dd>育児勤務、介護勤務</dd>
        </dl>

        <p class="text">福利厚生</p><hr>
        <p>社会保険（健康保険、厚生年金、雇用保険、労災保険）、確定拠出年金制度、総合福祉団体定期保険、長期所得補償制度、財形貯蓄制度、株式累積投資制度、脳ドック・心臓ドック・乳がん検診費用補助、インターネット通信費利用補助、社内マッサージ室、社内クラブなど</p>

        <p class="text">応募と受け付け</p><hr>
        <p>キャリア採用は必要に応じて、随時行っております。</p>
        <p>この採用情報に掲載されている職種が現時点において募集中のものです。</p>
        <p>なお、応募の締め切りは設けておりません。充足され次第募集を打ち切ります。</p>


        <p class="text">選考プロセス</p><hr>
        オープンポジションの場合、下記選考ステップとは異なります。募集職種については各職種ページにてご確認ください。
        <dl>
          <dt>応募</dt>
          <dd>応募フォームに必要事項をご入力のうえご応募ください。</dd>
          <dt>書類選考</dt>
          <dd>選考結果は合否にかかわらず2週間以内に、応募フォームに入力されたメールアドレスにご連絡いたします。ゴールデンウイークや年末年始等を挟む場合は、さらに1週間程度を要する場合があります。</dd>
          <dt>面接、適性検査、技術試験</dt>
          <dd>書類選考に合格された方には、複数回の面接と適性検査を実施いたします。
              選考結果は合否にかかわらず2週間以内に、応募フォームに入力されたメールアドレスにご連絡いたします。
              面接などのスケジュールによって変わりますが、順調に進んだ場合、応募から1カ月～1カ月半程度で内定となります。なお、選考の内容や基準、結果の理由に関してのお問い合わせには、合否にかかわらず回答いたしかねます。</dd>
        </dl>
    </div>



    </div>

    <div class="container">
    <a href="#" class="btn-border">CHECK!!</a>
    </div>

</div>
