<?php

use Latte\Runtime as LR;

/** source: site/partials/searchbar.blade.php */
final class Template_c07cbce0f9 extends Latte\Runtime\Template
{
	public const Source = 'site/partials/searchbar.blade.php';


	public function main(array $ʟ_args): void
	{
		extract($ʟ_args);
		unset($ʟ_args);

		echo '<div>
    <div class="container flex flex-col-reverse sm:flex-row gap-4 sm:gap-1 justify-between items-center py-8">
';
		$this->createTemplate('./logo.blade.php', $this->params, 'include')->renderToContentType('html') /* line 3 */;
		echo '
        <div class="searchbar_form">
            <form action="#">
                <select name="department">
                    <option value="all" selected>All departments</option>
                </select>
                <input type="search" name="search" placeholder="What do you need?">
                <button type="submit">
                    <i class="ri-search-2-line"></i>
                </button>
            </form>
        </div>

        <div class="searchbar_info">
            <a href="#" id="favorite-icon" class="text-red text-xl hidden md:inline">
                <i class="ri-heart-line"></i>
            </a>

            <button id="cart-icon" class="text-black text-5xl md:text-xl">
                <i class="ri-shopping-bag-4-line"></i>
            </button>

            <span id="price-icon" class="font-bold text-green-900 hidden md:inline">$150.00</span>
        </div>
    </div>
</div>
';
	}
}
