<?php

return [
    'name' =>"Samara Yanaf Foods",
    'phone_number_1'=>"95-199-4575",
    'work_time_en'=>"Mon-Sat 09:00-17:00",
    'work_time_ru'=>"Пн-сб 09:00-17:00",
    'work_time_uz'=>"Dush-Shan 09:00-17:00",
    'email_company'=>"info@company.com",
    'location_name_uz'=>"O'zbekiston Respublikasi, Toshkent vil, Toshkent Tuman, Qizg'aldoq hududi, Bobur ko'chasi,133B",
    'location_name_en'=>"Republic of Uzbekistan, Tashkent region, Tashkent District, Kyzgaldok area, Bobur street, 133B",
    'location_name_ru'=>"Республика Узбекистан, Ташкентская область, Ташкентский район, Кызгалдокский площадь, улица Бобура, 133Б",
    'experience'=>(new DateTime('1 Feb 2016'))->diff(new DateTime(date('d M Y'))),
    'languages'=>[
      'en'=>'English',
      'ru'=>"Russian",
      'uz'=>'Uzbek',
    ],
];
