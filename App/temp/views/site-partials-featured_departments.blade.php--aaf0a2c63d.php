<?php

use Latte\Runtime as LR;

/** source: site/partials/featured_departments.blade.php */
final class Template_aaf0a2c63d extends Latte\Runtime\Template
{
	public const Source = 'site/partials/featured_departments.blade.php';


	public function main(array $ʟ_args): void
	{
		extract($ʟ_args);
		unset($ʟ_args);

		echo '<div class="my-12">
    <div class="container grid grid-rows-1 grid-cols-1 md:grid-cols-3 md:gap-x-4 gap-y-6">
        <a href="#" class="relative hover:scale-[102%] transition-all">
            <img src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($base_url)) /* line 4 */;
		echo '/assets/img/mens_fashion.jpg" alt="Men\'s fashion"
                class="grayscale-[60%] hover:grayscale-0 transition-all rounded-sm shadow-md shadow-slate-500/50">
            <h3
                class="font-special-font text-white text-3xl rounded-sm absolute left-[50%] top-[50%] capitalize bg-black translate-y-[-50%] translate-x-[-50%] text-center px-4 py-2">
                Men\'s
                fashion</h3>
        </a>

        <a href="#" class="relative hover:scale-[102%] transition-all">
            <img src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($base_url)) /* line 13 */;
		echo '/assets/img/womens_fashion.jpg" alt="Women\'s fashion"
                class="grayscale-[60%] hover:grayscale-0 transition-all rounded-sm shadow-md shadow-slate-500/50">
            <h3
                class="font-special-font text-white text-3xl rounded-sm absolute left-[50%] top-[50%] capitalize bg-black translate-y-[-50%] translate-x-[-50%] text-center px-4 py-2">
                Women\'s
                fashion
            </h3>
        </a>

        <a href="#" class="relative hover:scale-[102%] transition-all">
            <img src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($base_url)) /* line 23 */;
		echo '/assets/img/kids_fashion.jpg" alt="Kid\'s fashion"
                class="grayscale-[60%] hover:grayscale-0 transition-all rounded-sm shadow-md shadow-slate-500/50">
            <h3
                class="font-special-font text-white text-3xl rounded-sm absolute left-[50%] top-[50%] capitalize bg-black translate-y-[-50%] translate-x-[-50%] text-center px-4 py-2">
                Kid\'s
                fashion
            </h3>
        </a>
    </div>
</div>
';
	}
}
