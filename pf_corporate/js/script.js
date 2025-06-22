// =====================================================
//  vegas
// =====================================================

$(".hero").vegas({
    slides: [
        { src: "images/index-main.png" },
        { src: "images/index-main2.jpg" }
    ]
});

// =====================================================
//  hamburger
// =====================================================

const hamburger = document.getElementById('hamburger');
const navMenu = document.getElementById('header-wrapper');

// ハンバーガークリック時にメニューを開閉 & アイコン切り替え
hamburger.addEventListener('click', () => {
    navMenu.classList.toggle('active');
    hamburger.classList.toggle('is-active'); // ← これがバツアイコン切り替え
});

// メニューのリンクがクリックされたらメニューとアイコンを閉じる/戻す
const menuItems = document.querySelectorAll('.header-menu-item a');

menuItems.forEach(item => {
    item.addEventListener('click', () => {
        navMenu.classList.remove('active');
        hamburger.classList.remove('is-active'); // ← これで三本線に戻す
    });
});

// =====================================================
//  問い合わせフォーム
// =====================================================

$("#contact_form").validate({

//エラーの位置調整
errorPlacement: function(error, element){

    if(element.attr('name')=='contact_means'){
    error.insertAfter('.checkbox-group')
    }
    else if(element.attr('name')=='privacy'){
    error.insertAfter('.radio-group')
    }
    else{
    error.insertAfter(element)
    }

}

});

// =====================================================
//  movement
// =====================================================

// ====== スムーススクロール ======

// 1. すべてのhref="#"のaタグを取得
const smoothScrollTrigger = document.querySelectorAll('a[href^="#"]');

// 2. 1のaタグにそれぞれクリックイベントを設定
for (let i = 0; i < smoothScrollTrigger.length; i++) {
    smoothScrollTrigger[i].addEventListener('click', (e) => {

        // 3. ターゲットの位置を取得
        e.preventDefault();
        let href = smoothScrollTrigger[i].getAttribute('href'); // 各a要素のリンク先を取得
        let targetElement = document.getElementById(href.replace('#', '')); // リンク先の要素（コンテンツ）を取得

        const rect = targetElement.getBoundingClientRect().top; // ブラウザからの高さを取得
        const offset = window.pageYOffset; // 現在のスクロール量を取得
        const gap = 60; // 固定ヘッダー分の高さ
        const target = rect + offset - gap; //最終的な位置を割り出す

        // 4. スムースにスクロール
        window.scrollTo({
            top: target,
            behavior: 'smooth',
        });

    });

}

// ====== スクロールすると要素がふわっと出てくる ======

const targets = document.getElementsByClassName('fade');
for (let i = targets.length; i--;) {
    let observer = new IntersectionObserver((entries, observer) => {
        for (let j = entries.length; j--;) {
            if (entries[j].isIntersecting) {
                entries[j].target.classList.add('active');
            } else {
                entries[j].target.classList.remove('active');
            }
        }
    });
    observer.observe(targets[i]);
}