// アコーディオン
$('.accordion-title').click(function() {
    $(this).next().toggleClass('is-open');
    $(this).toggleClass('is-active');
})

// ハンバーガーメニュー
$(function () {
    $('#js-hamburger').click(function () {
        // 押したボタンのattr属性の値に応じて変更
        if ($(this).hasClass('hamburger-active')) {
            $(this).removeClass('hamburger-active');
            $('#js-global-menu').removeClass('is-active')
            $('.back_color').removeClass('is-active')
        } else {
            $(this).addClass('hamburger-active');
            $('#js-global-menu').addClass('is-active')
            $('.back_color').addClass('is-active')
        }
    })
})