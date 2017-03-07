$(document).ready(function() {
    
    var projectTypes = ['yayindaki-projeler', 'tamamlanan-projeler', 'suresi-uzatilan-projeler', 'secilmis-projeler'];
    var defaultProjectType = 'secilmis-projeler';
    var orderTypes = ['eklenme-tarihine-gore', 'proje-ismine-gore', 'bitis-tarihine-gore'];
    var defaultOrderType = 'eklenme-tarihine-gore';
    if ($.inArray(window.location.hash.substring(1), projectTypes) != -1) {
        categorize(window.location.hash.substring(1));
    } else if (window.location.hash.substring(1) == 'tum-projeler') {
        categorize('tum-projeler');
    } else {
        categorize(defaultProjectType);
    }
    function categorize(type) {
        var selected = $('.dropdown.category a[href="#secilmis-projeler"]');
        var all = $('.dropdown.category a[href="#tum-projeler"]');
        var choice = $('.dropdown.category a[href="#' + type + '"]');
        $('.dropdown.category').append(selected);
        $('.dropdown.category').append(all);
        $('.dropdown.category').prepend(choice);
        var item;
        if ($.inArray(type, projectTypes) != -1) {
            $('.showcase .item').each(function(){
                item = $(this);
                if(!item.hasClass(type)) {
                    $('.showcase .container').append(item);
                }
            });
            $('.showcase .item').hide();
            $('.showcase .' + type).show();
        }
        else {
            $('.showcase .item').show();
        }
    }
    function reorder(type) {
        var choice = $('.dropdown.order a[href="#' + type + '"]');
        $('.dropdown.order').prepend(choice);
        var item;
        if ($.inArray(type, orderTypes) != -1) {
            //SIRALAMA FONKSIYONU
        }
    }
    
    $('.dropdown a').click(function() {
        if($(this).parent().hasClass('open')) {
            var id = $(this).attr('href').substring(1);
            var target = $(this).parent().data('type');
            if(target == 'category') {
                categorize(id);
            } else if (target == 'order') {
                reorder(id);
            }
            $(this).parent().removeClass('open');
        } else {
            $('.dropdown').removeClass('open');
            $(this).parent().addClass('open');
        }
    });
});