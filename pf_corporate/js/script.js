// =====================================================
//  vegas
// =====================================================

$(".hero").vegas({
    slides: [
        { src: "images/index-main.png" }
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

$(document).ready(function() {
    $("#contact_form").validate({
        
    //エラーの位置調整
    errorPlacement: function(error, element){
        if (element.is(':radio, :checkbox')) {
        error.appendTo(element.parent());
        } else {
        error.insertAfter(element);
        }
    },

    });
});