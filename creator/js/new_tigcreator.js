$(document).ready(function() {
    const track = $('.carousel-track');
    const itemWidthWithMargin = 198 + 60 * 2; // アイテム幅 + 両側のマージン
    const totalItems = $('.carousel-item').length;
    let position = 0;
    let clickCount = 0;
  
    // 表示できるアイテム数を計算する関数
    function calculateVisibleItems() {
      const containerWidth = $('.carousel-container').width();
      return Math.floor(containerWidth / itemWidthWithMargin);
    }
  
    // 最大クリック回数の更新
    function updateMaxClicks() {
      visibleItems = calculateVisibleItems();
      maxClicks = Math.max(0, totalItems - visibleItems - 3); // 表示されていないアイテム数分、さらに3回減らす
    }
  
    let visibleItems = calculateVisibleItems();
    let maxClicks = Math.max(0, totalItems - visibleItems - 3); // 初期の最大クリック回数
    const moveDistance = itemWidthWithMargin;
  
    // ウィンドウのリサイズ時に表示アイテム数と最大クリック回数を再計算
    $(window).resize(function() {
      updateMaxClicks();
      position = 0;
      clickCount = 0; // リサイズ時にクリック回数と位置をリセット
      track.css('transform', `translateX(${position}px)`);
      updateButtonState(); // ボタンの状態を更新
    });
  
    // nextボタンをクリック
    $('.next').click(function() {
      if (clickCount < maxClicks) {
        position -= moveDistance;
        track.css('transform', `translateX(${position}px)`);
        clickCount++;
        updateButtonState(); // ボタンの状態を更新
      }
    });
  
    // prevボタンをクリック
    $('.prev').click(function() {
      if (clickCount > 0) {
        position += moveDistance;
        track.css('transform', `translateX(${position}px)`);
        clickCount--;
        updateButtonState(); // ボタンの状態を更新
      }
    });
  
    // ボタンの状態を更新する関数
    function updateButtonState() {
      // nextボタンの状態
      if (clickCount >= maxClicks) {
        $('.next').prop('disabled', true); // 次に進めない場合は次ボタンを無効化
      } else {
        $('.next').prop('disabled', false); // 次に進める場合は次ボタンを有効化
      }
  
      // prevボタンの状態
      if (clickCount <= 0) {
        $('.prev').prop('disabled', true); // 最初に戻れない場合は前に戻るボタンを無効化
      } else {
        $('.prev').prop('disabled', false); // 戻れる場合は前に戻るボタンを有効化
      }
    }
  
    // 初期のボタン状態を更新
    updateButtonState();
  });
  document.addEventListener("DOMContentLoaded", function() {
    function updateBannerText() {
      var bannerText = document.querySelector('.p_sub_banner_text');
      if (window.innerWidth <= 1000) {
        bannerText.innerHTML = ' 縦ショート動画<span>を</span><br>今すぐ有効活用<span>をするなら</span>';
      } else {
        bannerText.innerHTML = ' 縦ショート動画<span>を</span>今すぐ有効活用<span>をするなら</span>';
      }
    }

    window.addEventListener('resize', updateBannerText);
    updateBannerText(); // 初期ロード時に実行
  });
  document.addEventListener("DOMContentLoaded", function() {
    function updateBannerText() {
        var bannerText = document.querySelector('.p_feauter_02_subTitle');
        if (window.innerWidth <= 1000) {
            bannerText.innerHTML = 'ほんの３ステップで、<br>“買える”縦ショート動画に編集完了';
        } else {
            bannerText.innerHTML = 'ほんの３ステップで、“買える”縦ショート動画に編集完了';
        }
    }

    window.addEventListener('resize', updateBannerText);
    updateBannerText(); // 初期ロード時に実行
});

document.addEventListener("DOMContentLoaded", function() {
  function updateButtonText() {
      // .request-buttonと.contact-button内のテキストを更新
      var requestButtonText = document.querySelector('.request-button');
      var contactButtonText = document.querySelector('.contact-button');

      if (window.innerWidth <= 1000) {
          // 1000px以下の場合、<br>を削除
          requestButtonText.querySelector('.small-text').innerHTML = '縦動画の活用がわかる';
          requestButtonText.querySelector('.large-text').innerHTML = '資料請求してみる';
          
          contactButtonText.querySelector('.small-text').innerHTML = 'わずか2分';
          contactButtonText.querySelector('.large-text').innerHTML = 'お問い合わせをしてみる';
      } else {
          // 1000px以上の場合、<br>を追加
          requestButtonText.querySelector('.small-text').innerHTML = '縦動画の活用がわかる<br>';
          requestButtonText.querySelector('.large-text').innerHTML = '資料請求してみる';
          
          contactButtonText.querySelector('.small-text').innerHTML = 'わずか2分<br>';
          contactButtonText.querySelector('.large-text').innerHTML = 'お問い合わせをしてみる';
      }
  }

  window.addEventListener('resize', updateButtonText);
  updateButtonText(); // 初期ロード時に実行
});

  