<?php

use Latte\Runtime as LR;

/** source: site/partials/main_banner.blade.php */
final class Template_88f6229f06 extends Latte\Runtime\Template
{
	public const Source = 'site/partials/main_banner.blade.php';


	public function main(array $ʟ_args): void
	{
		extract($ʟ_args);
		unset($ʟ_args);

		echo '<div class="main_banner">
    <div class="swiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide bg-yellow">
                <div class="container main_banner_slide_content">
                    <div class="main_banner_slide_text">
                        <h2>New Summer Collection</h2>
                        <p>Discover the freshness and elegance of the season</p>
                    </div>
                    <div class="main_banner_img">
                        <img src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($base_url)) /* line 11 */;
		echo '/assets/img/shopping_1.png" alt="Shopping">
                    </div>
                </div>
                <div class="overlay"></div>
            </div>
            <div class="swiper-slide bg-red">
                <div class="container main_banner_slide_content">
                    <div class="main_banner_slide_text">
                        <h2>Autumn/Winter Trends</h2>
                        <p>Warm up your style with our exclusive pieces</p>
                    </div>
                    <div class="main_banner_img">
                        <img src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($base_url)) /* line 23 */;
		echo '/assets/img/shopping_2.png" alt="Shopping">
                    </div>
                </div>
                <div class="overlay"></div>
            </div>
            <div class="swiper-slide bg-blue">
                <div class="container main_banner_slide_content">
                    <div class="main_banner_slide_text">
                        <h2>Incredible Accessories</h2>
                        <p>Details that make a difference in your look</p>
                    </div>
                    <div class="main_banner_img">
                        <img src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($base_url)) /* line 35 */;
		echo '/assets/img/shopping_3.png" alt="Shopping">
                    </div>
                </div>
                <div class="overlay"></div>
            </div>
            <div class="swiper-slide bg-gray">
                <div class="container main_banner_slide_content">
                    <div class="main_banner_slide_text">
                        <h2>Special Promotion</h2>
                        <p>Unmissable discounts for you to rock</p>
                    </div>
                    <div class="main_banner_img">
                        <img src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($base_url)) /* line 47 */;
		echo '/assets/img/shopping_4.png" alt="Shopping">
                    </div>
                </div>
                <div class="overlay"></div>
            </div>
        </div>
        <div class="swiper-pagination"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
        <div class="swiper-scrollbar"></div>
    </div>
</div>
';
	}
}
