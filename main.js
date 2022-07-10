jQuery(function () {

    // アコーディオン
    jQuery('.accordion-title').click(function() {
        jQuery(this).next().toggleClass('is-open');
        jQuery(this).toggleClass('is-active');
    })
    
    // ハンバーガーメニュー
    jQuery('#js-hamburger').click(function () {
        if (jQuery(this).hasClass('hamburger-active')) {
            jQuery(this).removeClass('hamburger-active');
            jQuery('#js-global-menu').removeClass('is-active')
            jQuery('.back_color').removeClass('is-active')
        } else {
            jQuery(this).addClass('hamburger-active');
            jQuery('#js-global-menu').addClass('is-active')
            jQuery('.back_color').addClass('is-active')
        }
    })

    // 料金表　スクロール
    new ScrollHint('.js-scrollable', {
        scrollHintIconAppendClass: 'scroll-hint-icon-white', // white-icon will appear
        applyToParents: true,
        i18n: {
        scrollable: 'スクロールできます'
        }
    });
})