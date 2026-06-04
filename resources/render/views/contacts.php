<?php \core\rendering\View::title(BASE_PAGE_NAME."Контакты"); ?>

<div class="container py-5">
    <h1 class="text-main fs-05">Контакты</h1>
    <span class="text-secondary fs-7">Свяжитесь с нами удобным способом</span>
    <div class="row mt-5">
        <div class="col-12 col-lg-6 mb-4">
            <h2>КГАУ «Молодёжный центр»</h2>
            <p><b>Директор:</b> Коробков Александр Евгеньевич</p>
            <p>📞 <a href="tel:+73852559468">+7 (3852) 559-468</a> (приёмная)</p>
            <p>📧 <a href="mailto:delo@altaikdm.ru">delo@altaikdm.ru</a></p>
            <p>🌐 <a href="https://altaikdm.ru" target="_blank">altaikdm.ru</a></p>
            <h4>Адрес</h4>
            <p>656019, Россия, Алтайский&nbsp;край, г.&nbsp;Барнаул, ул.&nbsp;Юрина, 204В</p>
            <h4>Остановка</h4>
            <p>«Дом пионеров»</p>
            <h4>Как добраться</h4>
            <ul>
                <li>Автобусы: № 24, 53, 57;</li>
                <li>Троллейбус: № 6, 7;</li>
                <li>Маршрутное такси: № 54, 144</li>
            </ul>
            <h4>Мы в соцсетях</h4>
            <div class="d-flex flex-row gap-2">
                <a class="btn btn-outline-primary rounded-5 p-2 pe-3" href="https://ok.ru/group/70000000669637">
                    <img class="contact" src="<?php echo \core\helpers\Resource::get("img/app/ok.svg") ?>">&nbsp;Одноклассники
                </a>
                <a class="btn btn-outline-primary rounded-5 p-2 pe-3" href=https://t.me/KDM_Altay">
                    <img class="contact" src="<?php echo \core\helpers\Resource::get("img/app/tg.ico") ?>">&nbsp;Telegram
                </a>
                <a class="btn btn-outline-primary rounded-5 p-2 pe-3" href="https://vk.com/altaikdm">
                    <img class="contact" src="<?php echo \core\helpers\Resource::get("img/app/vk.png") ?>">&nbsp;VK
                </a>
                <a class="btn btn-outline-primary rounded-5 p-2 pe-3" href="https://gog.su/Vwkm">
                    <img class="contact" src="<?php echo \core\helpers\Resource::get("img/app/max.png") ?>">&nbsp;Мах
                </a>
            </div>
        </div>
        <div class="col-12 col-lg-6">
            <iframe src="https://yandex.ru/map-widget/v1/?ll=83.685776%2C53.370925&z=17&pt=83.685776,53.370925,pm2blm&l=map"
                    width="100%"
                    height="350"
                    frameborder="0"
                    allowfullscreen="true"
                    style="border-radius: 24px; box-shadow: 0 8px 24px rgba(0,0,0,0.1);">
            </iframe>
        </div>
    </div>
</div>