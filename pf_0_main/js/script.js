// =====================================================
//  starry_sky
// =====================================================

// for(var i = 0; i < 1000; i++) {
//     //get random dimensions
//     var x = Math.random() * 120;
//     var y = Math.random() * 50;
//     var d = Math.random() * 4;
//     var s = Math.random() * 2 + 1.5;
//     //create new element and add to html
//     var star = document.createElement("div");
//     star.classList.add("star");
//     var sky = document.getElementById("starry_sky");
//     sky.appendChild(star);

//     star.style.width = d + "px";
//     star.style.height = d + "px";
//     star.style.top = y + "%";
//     star.style.left = x + "%";
//     star.style.animationDuration = s + "s";
// }

// =====================================================
//  hamburger
// =====================================================

const hamburger = document.getElementById('hamburger');
const navMenu = document.getElementById('HeaderWrap');

// ハンバーガークリック時にメニューを開閉 & アイコン切り替え
hamburger.addEventListener('click', () => {
    navMenu.classList.toggle('active');
    hamburger.classList.toggle('is-active'); // ← これがバツアイコン切り替え
});

// メニューのリンクがクリックされたらメニューとアイコンを閉じる/戻す
const menuItems = document.querySelectorAll('.MenuItem a');

menuItems.forEach(item => {
    item.addEventListener('click', () => {
        navMenu.classList.remove('active');
        hamburger.classList.remove('is-active'); // ← これで三本線に戻す
    });
});