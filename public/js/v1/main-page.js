$( document ).ready(function() {
    ymaps.ready(init);
    var myMap;

    function init() {
        myMap = new ymaps.Map("map", {
            center:[55.193885, 61.331901], // Москва
            zoom:16
        });
        myMap.geoObjects

            .add(new ymaps.Placemark([55.193885, 61.331901], {
            }, {
                preset: 'islands#dotIcon',
                iconColor: '#007bff'
            }));
        myMap.behaviors
        // Отключаем часть включенных по умолчанию поведений:
        //  - drag - перемещение карты при нажатой левой кнопки мыши;
        //  - magnifier.rightButton - увеличение области, выделенной правой кнопкой мыши.
            .disable('scrollZoom');
        //на мобильных устройствах... (проверяем по userAgent браузера)
        if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)){
            //... отключаем перетаскивание карты
            myMap.behaviors.disable('drag');
        }
    }
    AOS.init();
});

