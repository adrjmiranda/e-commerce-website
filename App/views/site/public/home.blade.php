{extends '../layouts/master.blade.php'}

{block title}Home{/block}

{block scripts}
<script src="{$base_url}/assets/js/main_banner_slide.bundle.js" defer></script>
<script src="{$base_url}/assets/js/main_banner_magictime.bundle.js" defer></script>
{/block}

{block content}

{include '../partials/main_banner.blade.php'}

{include '../partials/featured_departments.blade.php'}

{/block}
