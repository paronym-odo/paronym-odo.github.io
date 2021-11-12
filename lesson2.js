// DOM操作にjQueryを利用しています。
// デザインにBootstrapを利用しています。

// ニュースのパネルリストを生成
function generateNewsPanels(news) {
    // ニュースのパネル要素のhtmlを1つずつfor文を使って生成
    let html = '<div class="d-flex flex-wrap justify-content-evenly">';
    for (var i = 0; i < news.articles.length; i++) {
        const title = news.articles[i].title ?? '';
        const published = news.articles[i].published ?? '';
        const link = news.articles[i].link ?? '';
        html += '<a target="_blank" href="' + link + '" style="text-decoration:none;">'
            + '<div class="card mt-5 mx-2">'
                + '<p class="filter">'
                    + '<img class="card-image" src="' + getRandomDog() +  '" class="card-img-top" alt="dog">'
                + '</p>'
                + '<div class="card-body">'
                    + '<p class="card-title">' + title + '</p>'
                    + '<p class="card-text">' + published + '</p>'
                + '</div>'
            + '</div>'
        + '</a>';
    }
    html += '</div>';
    // DOM操作は基本的に重いので、一発で表示
    $('#lesson2-result').html(html);

    // 遅延をつけて、↑のhtml()でDOM操作が終わった後にホバーイベントを付与
    setTimeout(function() {
        $('.card').on({
            "mouseenter": function(){
                $(this).find('.card-image').addClass('hover');
            },
            "mouseleave": function(){
                $(this).find('.card-image').removeClass('hover');
            }
        });
    }, 100);
}

// ランダムで犬の画像を取得する
function getRandomDog() {
    // ニュースに使う画像リスト (適当にこのURLから取得: https://dog.ceo/dog-api)
    // URLからOGPを取得して表示してもいいが、並列で取得すると難易度が上がるので、一旦決まった画像を参照する
    const images = [
        'https://images.dog.ceo/breeds/redbone/n02090379_2733.jpg',
        'https://images.dog.ceo/breeds/spaniel-sussex/n02102480_6174.jpg',
        'https://images.dog.ceo/breeds/labradoodle/labradoodle-forrest.png',
        'https://images.dog.ceo/breeds/keeshond/n02112350_1312.jpg',
        'https://images.dog.ceo/breeds/deerhound-scottish/n02092002_1242.jpg',
        'https://images.dog.ceo/breeds/spaniel-blenheim/n02086646_3536.jpg',
        'https://images.dog.ceo/breeds/greyhound-italian/n02091032_652.jpg',
        'https://images.dog.ceo/breeds/terrier-bedlington/n02093647_721.jpg',
        'https://images.dog.ceo/breeds/schipperke/n02104365_10247.jpg',
        'https://images.dog.ceo/breeds/setter-irish/n02100877_648.jpg',
        'https://images.dog.ceo/breeds/weimaraner/n02092339_107.jpg',
        'https://images.dog.ceo/breeds/doberman/n02107142_15377.jpg'
    ];
    return images[Math.floor(Math.random() * images.length)];
}