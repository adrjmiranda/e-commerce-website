<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="{$base_url}/favicon.ico" type="image/x-icon" />
    <title>{block title}{/block}</title>

    <!-- Scripts -->

    {block scripts}{/block}

    <!-- Remix Icon -->

    <script src="{$base_url}/assets/js/remixicon.bundle.js" defer></script>
    <script src="{$base_url}/assets/js/magictime.bundle.js" defer></script>
    <script src="{$base_url}/assets/js/navbar_toggle.bundle.js" defer></script>

    <!-- Styles -->

    <link rel="stylesheet" href="{$base_url}/assets/css/index.css" />
</head>

<body class="relative">
    {include '../partials/contactbar.blade.php'}
    {include '../partials/searchbar.blade.php'}
    {include '../partials/navbar.blade.php'}

    {block content} {/block}

    {include '../partials/footer.blade.php'}

    {include '../partials/cart.blade.php'}
</body>

</html>
