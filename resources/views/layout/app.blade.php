<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" value="{{ csrf_token() }}" />

    <title>Vue JS CRUD Operations in Laravel</title>

    <link href="{{ mix('css/app.css') }}" type="text/css" rel="stylesheet" />
      
    <link href="https://cdn2.civitatis.com/css/civVendorCommon-cc3f19bd52358c8cfd45b96d90a9b2530ac10c24.min.css" media="all" rel="stylesheet"/>
    <link href="https://cdn2.civitatis.com/css/civVendorActivityDetail-cc3f19bd52358c8cfd45b96d90a9b2530ac10c24.min.css" media="all" rel="stylesheet"/>

    <link href="https://cdn2.civitatis.com/css/civCommon-cc3f19bd52358c8cfd45b96d90a9b2530ac10c24.min.css" media="all" rel="stylesheet"/>
    <link href="https://cdn2.civitatis.com/css/civActivityDetail-cc3f19bd52358c8cfd45b96d90a9b2530ac10c24.min.css" media="all" rel="stylesheet"/>

    <link href="https://cdn2.civitatis.com/css/civVendorCommonLarge-cc3f19bd52358c8cfd45b96d90a9b2530ac10c24.min.css" media="screen and (max-width:47.875em) and (min-aspect-ratio:13/9), screen and (min-width:47.9375em)" rel="stylesheet"/>

    <link href="https://cdn2.civitatis.com/css/civCommonLarge-cc3f19bd52358c8cfd45b96d90a9b2530ac10c24.min.css" media="screen and (max-width:47.875em) and (min-aspect-ratio:13/9), screen and (min-width:47.9375em)" rel="stylesheet"/>
    <link href="https://cdn2.civitatis.com/css/civActivityDetailLarge-cc3f19bd52358c8cfd45b96d90a9b2530ac10c24.min.css" media="screen and (max-width:47.875em) and (min-aspect-ratio:13/9), screen and (min-width:47.9375em)" rel="stylesheet"/>

</head>

<body>
    <header class="o-page-header" id="main-page-header">
        <div class="--inner">
            <button type="button" role="button" aria-label="navegación" class="lines-button minus" id="hamburger-mobile">
                <span class="lines"></span>
            </button>

            <div class="o-page-header__logo">
                <a class="link-civitatis" href="https://www.civitatis.com/en/" title="Civitatis">
                    <img src="https://cdn2.civitatis.com/images/logos/civitatis.png" alt="civitatis">
                </a>
            </div>

            <div id="page-header__search" class="o-page-header__search"></div>

        </div>
    </header>
    <div id="app"></div>
    <script src="{{ mix('js/app.js') }}" type="text/javascript"></script>
</body>

</html>