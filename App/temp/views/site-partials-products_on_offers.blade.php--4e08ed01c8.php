<?php

use Latte\Runtime as LR;

/** source: site/partials/products_on_offers.blade.php */
final class Template_4e08ed01c8 extends Latte\Runtime\Template
{
	public const Source = 'site/partials/products_on_offers.blade.php';


	public function main(array $ʟ_args): void
	{
		extract($ʟ_args);
		unset($ʟ_args);

		echo '<div class="my-12">
    <div class="container">
        <h2 class="my-8 text-center font-normal text-black text-2xl capitalize">Products on offers</h2>

        <div class="grid grid-flow-row grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-y-8 gap-x-4">
';
		$this->createTemplate('./product_card.blade.php', $this->params, 'include')->renderToContentType('html') /* line 6 */;
		$this->createTemplate('./product_card.blade.php', $this->params, 'include')->renderToContentType('html') /* line 7 */;
		$this->createTemplate('./product_card.blade.php', $this->params, 'include')->renderToContentType('html') /* line 8 */;
		$this->createTemplate('./product_card.blade.php', $this->params, 'include')->renderToContentType('html') /* line 9 */;
		$this->createTemplate('./product_card.blade.php', $this->params, 'include')->renderToContentType('html') /* line 10 */;
		$this->createTemplate('./product_card.blade.php', $this->params, 'include')->renderToContentType('html') /* line 11 */;
		$this->createTemplate('./product_card.blade.php', $this->params, 'include')->renderToContentType('html') /* line 12 */;
		$this->createTemplate('./product_card.blade.php', $this->params, 'include')->renderToContentType('html') /* line 13 */;
		$this->createTemplate('./product_card.blade.php', $this->params, 'include')->renderToContentType('html') /* line 14 */;
		$this->createTemplate('./product_card.blade.php', $this->params, 'include')->renderToContentType('html') /* line 15 */;
		$this->createTemplate('./product_card.blade.php', $this->params, 'include')->renderToContentType('html') /* line 16 */;
		$this->createTemplate('./product_card.blade.php', $this->params, 'include')->renderToContentType('html') /* line 17 */;
		$this->createTemplate('./product_card.blade.php', $this->params, 'include')->renderToContentType('html') /* line 18 */;
		echo '        </div>
    </div>
</div>
';
	}
}
