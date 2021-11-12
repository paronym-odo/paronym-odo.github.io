// DOM操作にjQueryを利用しています。
$(function() {
    // HTTPヘッダ
    const headers = {
        'x-rapidapi-key': '594869d010msh2f211ec926048c9p14d9d8jsne1cf78bcd386', // ユーザー毎に発行されるAPIkey
        'x-rapidapi-host': 'google-news.p.rapidapi.com',
    };
    // 日本のニュースを日本語で取得
    const data = {
        lang: 'ja', 
        country: 'JP'
    };
    // その他設定
    // （このAPIは無料で使うとき1時間に3リクエストしか受け付けないらしい）
    // （トレーニングで使いづらかったら別でいいけど、無料のAPIは制限が多くて選定が面倒）
    const settings = {
        'async': true,
        'crossDomain': true,
        'url': 'https://google-news.p.rapidapi.com/v1/top_headlines',
        'data': data,
        'dataType': 'json',
        'method': 'GET',
        'headers': headers,
    };
    
    // データ取得
    $.ajax(settings)
    .done(function (response) {
        const news = response;
        $('#lesson1-result').html(JSON.stringify(news));
        generateNewsPanels(news); // レッスン2の結果も生成
    })
    .fail(function (response) {
        // APIでニュースが取得できなかったとき、代替ニュースデータを利用する(無料APIの限界)
        $('#lesson1-result').html(JSON.stringify(altanative_news));
        generateNewsPanels(altanative_news); // レッスン2の結果も生成
    })
    .always(function(response) {
        console.log(response);
    });
});