$(function() {
    $('a.lightbox').lightBox({
        imageLoading: '/images/lightbox-ico-loading.gif',
        imageBtnClose: '/images/lightbox-btn-close.gif',
        imageBtnPrev: '/images/lightbox-btn-prev.gif',
        imageBtnNext: '/images/lightbox-btn-next.gif',
        imageBlank: '/images/lightbox-blank.gif',
        containerResizeSpeed: 350,
        txtImage: 'Imagem',
        txtOf: 'de'
    });
});
