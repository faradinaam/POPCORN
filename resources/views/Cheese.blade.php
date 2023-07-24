@extends('component.navbar')
@section('content')
    <div class="container">
        <!-- Judul -->
        <section class="judul mt-5 mb-5">
            <section class="home d-flex align-items-center">
                <div class="container">
                    <div class="P row align-items-center">
                        <div class="col-lg-5 col-md-6">
                            <div class="home-img text-center">
                                <img src="DOKUMENPOPCORN/Caramel__S.jpg" alt="Logo">
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-7">
                            <div class="home-text">
                                <h1 class="animate_animated animate_bounce">Product 1</h1>
                                <p class="animate_animated animate_fadeIn">Lorem ipsum dolor sit amet consectetur
                                    adipisicing elit. Ex beatae itaque in, officia hic aut possimus modi. Aspernatur fugit
                                    minus optio velit necessitatibus. Non modi numquam enim in ex provident ullam, molestias
                                    dolor distinctio dolorum perferendis quia sit alias quae excepturi et nihil repellat
                                    aperiam, similique impedit dicta. Fugiat, reiciendis!</p>

                                <div class="row tes">
                                    <div class="col-sm">
                                        <h5>Packaging</h5>
                                    </div>
                                    <div class="col-sm option text-align-right">
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected>Choose an option</option>
                                            <option value="1">100 gr</option>
                                            <option value="2">200 gr</option>
                                            <option value="3">400 gr</option>
                                        </select>
                                    </div>
                                </div>
                                <br>
                                <div>
                                    <a class="btn custom-btn"
                                        href="https://api.whatsapp.com/send/?phone=6281230610228&text&type=phone_number&app_absent=0">BUY
                                        NOW</a>
                                </div>
                            </div>
                        </div>
                        <div>

                        </div>
                    </div>
                </div>
            </section>

            {{-- <div class="row content-row mb-0">

                <div class="product-gallery large-4 col">

                    <div class="product-images relative mb-half has-hover woocommerce-product-gallery woocommerce-product-gallery--with-images woocommerce-product-gallery--columns-4 images"
                        data-columns="4" style="opacity: 1;">

                        <div class="badge-container is-larger absolute left top z-1">
                        </div>
                        <div class="image-tools absolute top show-on-hover right z-3">
                        </div>

                        <figure
                            class="woocommerce-product-gallery__wrapper product-gallery-slider slider slider-nav-small mb-half flickity-enabled"
                            data-flickity-options="{
                        &quot;cellAlign&quot;: &quot;center&quot;,
                        &quot;wrapAround&quot;: true,
                        &quot;autoPlay&quot;: false,
                        &quot;prevNextButtons&quot;:true,
                        &quot;adaptiveHeight&quot;: true,
                        &quot;imagesLoaded&quot;: true,
                        &quot;lazyLoad&quot;: 1,
                        &quot;dragThreshold&quot; : 15,
                        &quot;pageDots&quot;: false,
                        &quot;rightToLeft&quot;: false       }"
                            tabindex="0">
                            <div class="flickity-viewport" style="height: 319.984px; touch-action: pan-y;">
                                <div class="flickity-slider" style="left: 0px; transform: translateX(0%);">
                                    <div data-thumb="https://eurekasnack.com/wp-content/uploads/2020/10/Caramel-100x100.png"
                                        class="woocommerce-product-gallery__image slide first is-selected"
                                        style="position: absolute; left: 0%;"><a
                                            href="https://eurekasnack.com/wp-content/uploads/2020/10/Caramel.png"><img
                                                width="510" height="510"
                                                src="https://eurekasnack.com/wp-content/uploads/2020/10/Caramel-510x510.png"
                                                class="wp-post-image skip-lazy" alt="" loading="lazy"
                                                title="Caramel" data-caption=""
                                                data-src="https://eurekasnack.com/wp-content/uploads/2020/10/Caramel.png"
                                                data-large_image="https://eurekasnack.com/wp-content/uploads/2020/10/Caramel.png"
                                                data-large_image_width="1000" data-large_image_height="1000"
                                                srcset="https://eurekasnack.com/wp-content/uploads/2020/10/Caramel-510x510.png 510w, https://eurekasnack.com/wp-content/uploads/2020/10/Caramel-247x247.png 247w, https://eurekasnack.com/wp-content/uploads/2020/10/Caramel-100x100.png 100w, https://eurekasnack.com/wp-content/uploads/2020/10/Caramel-150x150.png 150w, https://eurekasnack.com/wp-content/uploads/2020/10/Caramel-300x300.png 300w, https://eurekasnack.com/wp-content/uploads/2020/10/Caramel-768x768.png 768w, https://eurekasnack.com/wp-content/uploads/2020/10/Caramel-146x146.png 146w, https://eurekasnack.com/wp-content/uploads/2020/10/Caramel-50x50.png 50w, https://eurekasnack.com/wp-content/uploads/2020/10/Caramel-75x75.png 75w, https://eurekasnack.com/wp-content/uploads/2020/10/Caramel-85x85.png 85w, https://eurekasnack.com/wp-content/uploads/2020/10/Caramel-80x80.png 80w, https://eurekasnack.com/wp-content/uploads/2020/10/Caramel.png 1000w"
                                                sizes="(max-width: 510px) 100vw, 510px"></a></div>
                                </div>
                            </div><button class="flickity-button flickity-prev-next-button previous" type="button"
                                disabled="" aria-label="Previous"><svg class="flickity-button-icon"
                                    viewBox="0 0 100 100">
                                    <path d="M 10,50 L 60,100 L 70,90 L 30,50  L 70,10 L 60,0 Z" class="arrow"></path>
                                </svg></button><button class="flickity-button flickity-prev-next-button next" type="button"
                                disabled="" aria-label="Next"><svg class="flickity-button-icon" viewBox="0 0 100 100">
                                    <path d="M 10,50 L 60,100 L 70,90 L 30,50  L 70,10 L 60,0 Z" class="arrow"
                                        transform="translate(100, 100) rotate(180) "></path>
                                </svg></button>
                        </figure>

                        <div class="image-tools absolute bottom left z-3">
                            <a href="#product-zoom"
                                class="zoom-button button is-outline circle icon tooltip hide-for-small tooltipstered">
                                <i class="icon-expand"></i> </a>
                        </div>
                    </div>

                </div>

                <div class="product-info summary col-fit col entry-summary product-summary">

                    <nav class="woocommerce-breadcrumb breadcrumbs uppercase"><a
                            href="https://eurekasnack.com/product-category/classic/">Classic</a></nav>
                    <h1 class="product-title product_title entry-title">
                        Caramel Popcorn</h1>

                    <div class="is-divider small"></div>
                    <ul class="next-prev-thumbs is-small show-for-medium">
                        <li class="prod-dropdown has-dropdown">
                            <a href="https://eurekasnack.com/product/tomato-popcorn/" rel="next"
                                class="button icon is-outline circle">
                                <i class="icon-angle-left"></i> </a>
                            <div class="nav-dropdown">
                                <a title="Tomato Popcorn" href="https://eurekasnack.com/product/tomato-popcorn/">
                                    <img width="100" height="100"
                                        src="https://eurekasnack.com/wp-content/uploads/2023/03/Tomato-NEW-2023-100x100.png"
                                        class="attachment-woocommerce_gallery_thumbnail size-woocommerce_gallery_thumbnail wp-post-image"
                                        alt="" loading="lazy"
                                        srcset="https://eurekasnack.com/wp-content/uploads/2023/03/Tomato-NEW-2023-100x100.png 100w, https://eurekasnack.com/wp-content/uploads/2023/03/Tomato-NEW-2023-300x300.png 300w, https://eurekasnack.com/wp-content/uploads/2023/03/Tomato-NEW-2023-150x150.png 150w, https://eurekasnack.com/wp-content/uploads/2023/03/Tomato-NEW-2023-768x768.png 768w, https://eurekasnack.com/wp-content/uploads/2023/03/Tomato-NEW-2023-247x247.png 247w, https://eurekasnack.com/wp-content/uploads/2023/03/Tomato-NEW-2023-510x510.png 510w, https://eurekasnack.com/wp-content/uploads/2023/03/Tomato-NEW-2023.png 1000w"
                                        sizes="(max-width: 100px) 100vw, 100px"></a>
                            </div>
                        </li>
                        <li class="prod-dropdown has-dropdown">
                            <a href="https://eurekasnack.com/product/sour-cream-onion-popcorn/" rel="next"
                                class="button icon is-outline circle">
                                <i class="icon-angle-right"></i> </a>
                            <div class="nav-dropdown">
                                <a title="Sour Cream &amp; Onion Popcorn"
                                    href="https://eurekasnack.com/product/sour-cream-onion-popcorn/">
                                    <img width="100" height="100"
                                        src="https://eurekasnack.com/wp-content/uploads/2020/10/sourcream-100x100.png"
                                        class="attachment-woocommerce_gallery_thumbnail size-woocommerce_gallery_thumbnail wp-post-image"
                                        alt="" loading="lazy"
                                        srcset="https://eurekasnack.com/wp-content/uploads/2020/10/sourcream-100x100.png 100w, https://eurekasnack.com/wp-content/uploads/2020/10/sourcream-247x247.png 247w, https://eurekasnack.com/wp-content/uploads/2020/10/sourcream-510x510.png 510w, https://eurekasnack.com/wp-content/uploads/2020/10/sourcream-150x150.png 150w, https://eurekasnack.com/wp-content/uploads/2020/10/sourcream-300x300.png 300w, https://eurekasnack.com/wp-content/uploads/2020/10/sourcream-768x768.png 768w, https://eurekasnack.com/wp-content/uploads/2020/10/sourcream-146x146.png 146w, https://eurekasnack.com/wp-content/uploads/2020/10/sourcream-50x50.png 50w, https://eurekasnack.com/wp-content/uploads/2020/10/sourcream-75x75.png 75w, https://eurekasnack.com/wp-content/uploads/2020/10/sourcream-85x85.png 85w, https://eurekasnack.com/wp-content/uploads/2020/10/sourcream-80x80.png 80w, https://eurekasnack.com/wp-content/uploads/2020/10/sourcream.png 1000w"
                                        sizes="(max-width: 100px) 100vw, 100px"></a>
                            </div>
                        </li>
                    </ul>
                    <div class="price-wrapper">
                        <p class="price product-page-price ">
                            <span class="woocommerce-Price-amount amount"><bdi><span
                                        class="woocommerce-Price-currencySymbol">RM</span>9.10</bdi></span> – <span
                                class="woocommerce-Price-amount amount"><bdi><span
                                        class="woocommerce-Price-currencySymbol">RM</span>13.90</bdi></span>
                        </p>
                    </div>
                    <div class="product-short-description">
                        <p>I’m that scrumptious sweetheart you’ll share with your friends. Be careful, they’ll want more, so
                            better bring extra.</p>
                    </div>
                    <div id="rp_wcdpd_pricing_table_variation_container"
                        class="rp_wcdpd_pricing_table_variation_container" style="display: none; opacity: 0.25;"></div>
                    <form class="variations_form cart" action="https://eurekasnack.com/product/caramel-popcorn/"
                        method="post" enctype="multipart/form-data" data-product_id="364"
                        data-product_variations="[{&quot;attributes&quot;:{&quot;attribute_packaging&quot;:&quot;Paper Can - 70g&quot;},&quot;availability_html&quot;:&quot;&quot;,&quot;backorders_allowed&quot;:false,&quot;dimensions&quot;:{&quot;length&quot;:&quot;&quot;,&quot;width&quot;:&quot;&quot;,&quot;height&quot;:&quot;&quot;},&quot;dimensions_html&quot;:&quot;N\/A&quot;,&quot;display_price&quot;:9.0999999999999996447286321199499070644378662109375,&quot;display_regular_price&quot;:9.0999999999999996447286321199499070644378662109375,&quot;image&quot;:{&quot;title&quot;:&quot;Caramel&quot;,&quot;caption&quot;:&quot;&quot;,&quot;url&quot;:&quot;https:\/\/eurekasnack.com\/wp-content\/uploads\/2023\/03\/Caramel.png&quot;,&quot;alt&quot;:&quot;&quot;,&quot;src&quot;:&quot;https:\/\/eurekasnack.com\/wp-content\/uploads\/2023\/03\/Caramel-510x510.png&quot;,&quot;srcset&quot;:&quot;https:\/\/eurekasnack.com\/wp-content\/uploads\/2023\/03\/Caramel-510x510.png 510w, https:\/\/eurekasnack.com\/wp-content\/uploads\/2023\/03\/Caramel-300x300.png 300w, https:\/\/eurekasnack.com\/wp-content\/uploads\/2023\/03\/Caramel-150x150.png 150w, https:\/\/eurekasnack.com\/wp-content\/uploads\/2023\/03\/Caramel-768x768.png 768w, https:\/\/eurekasnack.com\/wp-content\/uploads\/2023\/03\/Caramel-247x247.png 247w, https:\/\/eurekasnack.com\/wp-content\/uploads\/2023\/03\/Caramel-100x100.png 100w, https:\/\/eurekasnack.com\/wp-content\/uploads\/2023\/03\/Caramel.png 1000w&quot;,&quot;sizes&quot;:&quot;(max-width: 510px) 100vw, 510px&quot;,&quot;full_src&quot;:&quot;https:\/\/eurekasnack.com\/wp-content\/uploads\/2023\/03\/Caramel.png&quot;,&quot;full_src_w&quot;:1000,&quot;full_src_h&quot;:1000,&quot;gallery_thumbnail_src&quot;:&quot;https:\/\/eurekasnack.com\/wp-content\/uploads\/2023\/03\/Caramel-100x100.png&quot;,&quot;gallery_thumbnail_src_w&quot;:100,&quot;gallery_thumbnail_src_h&quot;:100,&quot;thumb_src&quot;:&quot;https:\/\/eurekasnack.com\/wp-content\/uploads\/2023\/03\/Caramel-247x247.png&quot;,&quot;thumb_src_w&quot;:247,&quot;thumb_src_h&quot;:247,&quot;src_w&quot;:510,&quot;src_h&quot;:510},&quot;image_id&quot;:28880,&quot;is_downloadable&quot;:false,&quot;is_in_stock&quot;:true,&quot;is_purchasable&quot;:true,&quot;is_sold_individually&quot;:&quot;no&quot;,&quot;is_virtual&quot;:false,&quot;max_qty&quot;:&quot;&quot;,&quot;min_qty&quot;:1,&quot;price_html&quot;:&quot;<span class=\&quot;price\&quot;><span class=\&quot;woocommerce-Price-amount amount\&quot;><bdi><span class=\&quot;woocommerce-Price-currencySymbol\&quot;>&amp;#82;&amp;#77;<\/span>9.10<\/bdi><\/span><\/span>&quot;,&quot;sku&quot;:&quot;&quot;,&quot;variation_description&quot;:&quot;&quot;,&quot;variation_id&quot;:2118,&quot;variation_is_active&quot;:true,&quot;variation_is_visible&quot;:true,&quot;weight&quot;:&quot;70&quot;,&quot;weight_html&quot;:&quot;70 g&quot;,&quot;custom_field&quot;:&quot;<div class=\&quot;woocommerce_custom_field\&quot;>Custom Field: <span><\/span><\/div>&quot;},{&quot;attributes&quot;:{&quot;attribute_packaging&quot;:&quot;Aluminium Pack - 140g&quot;},&quot;availability_html&quot;:&quot;&quot;,&quot;backorders_allowed&quot;:false,&quot;dimensions&quot;:{&quot;length&quot;:&quot;&quot;,&quot;width&quot;:&quot;&quot;,&quot;height&quot;:&quot;&quot;},&quot;dimensions_html&quot;:&quot;N\/A&quot;,&quot;display_price&quot;:13.9000000000000003552713678800500929355621337890625,&quot;display_regular_price&quot;:13.9000000000000003552713678800500929355621337890625,&quot;image&quot;:{&quot;title&quot;:&quot;caramel&quot;,&quot;caption&quot;:&quot;&quot;,&quot;url&quot;:&quot;https:\/\/eurekasnack.com\/wp-content\/uploads\/2020\/03\/caramel.png&quot;,&quot;alt&quot;:&quot;&quot;,&quot;src&quot;:&quot;https:\/\/eurekasnack.com\/wp-content\/uploads\/2020\/03\/caramel-510x510.png&quot;,&quot;srcset&quot;:&quot;https:\/\/eurekasnack.com\/wp-content\/uploads\/2020\/03\/caramel-510x510.png 510w, https:\/\/eurekasnack.com\/wp-content\/uploads\/2020\/03\/caramel-247x247.png 247w, https:\/\/eurekasnack.com\/wp-content\/uploads\/2020\/03\/caramel-100x100.png 100w, https:\/\/eurekasnack.com\/wp-content\/uploads\/2020\/03\/caramel-150x150.png 150w, https:\/\/eurekasnack.com\/wp-content\/uploads\/2020\/03\/caramel-300x300.png 300w, https:\/\/eurekasnack.com\/wp-content\/uploads\/2020\/03\/caramel-768x768.png 768w, https:\/\/eurekasnack.com\/wp-content\/uploads\/2020\/03\/caramel-146x146.png 146w, https:\/\/eurekasnack.com\/wp-content\/uploads\/2020\/03\/caramel-50x50.png 50w, https:\/\/eurekasnack.com\/wp-content\/uploads\/2020\/03\/caramel-75x75.png 75w, https:\/\/eurekasnack.com\/wp-content\/uploads\/2020\/03\/caramel-85x85.png 85w, https:\/\/eurekasnack.com\/wp-content\/uploads\/2020\/03\/caramel-80x80.png 80w, https:\/\/eurekasnack.com\/wp-content\/uploads\/2020\/03\/caramel.png 1000w&quot;,&quot;sizes&quot;:&quot;(max-width: 510px) 100vw, 510px&quot;,&quot;full_src&quot;:&quot;https:\/\/eurekasnack.com\/wp-content\/uploads\/2020\/03\/caramel.png&quot;,&quot;full_src_w&quot;:1000,&quot;full_src_h&quot;:1000,&quot;gallery_thumbnail_src&quot;:&quot;https:\/\/eurekasnack.com\/wp-content\/uploads\/2020\/03\/caramel-100x100.png&quot;,&quot;gallery_thumbnail_src_w&quot;:100,&quot;gallery_thumbnail_src_h&quot;:100,&quot;thumb_src&quot;:&quot;https:\/\/eurekasnack.com\/wp-content\/uploads\/2020\/03\/caramel-247x247.png&quot;,&quot;thumb_src_w&quot;:247,&quot;thumb_src_h&quot;:247,&quot;src_w&quot;:510,&quot;src_h&quot;:510},&quot;image_id&quot;:15364,&quot;is_downloadable&quot;:false,&quot;is_in_stock&quot;:true,&quot;is_purchasable&quot;:true,&quot;is_sold_individually&quot;:&quot;no&quot;,&quot;is_virtual&quot;:false,&quot;max_qty&quot;:&quot;&quot;,&quot;min_qty&quot;:1,&quot;price_html&quot;:&quot;<span class=\&quot;price\&quot;><span class=\&quot;woocommerce-Price-amount amount\&quot;><bdi><span class=\&quot;woocommerce-Price-currencySymbol\&quot;>&amp;#82;&amp;#77;<\/span>13.90<\/bdi><\/span><\/span>&quot;,&quot;sku&quot;:&quot;&quot;,&quot;variation_description&quot;:&quot;&quot;,&quot;variation_id&quot;:2119,&quot;variation_is_active&quot;:true,&quot;variation_is_visible&quot;:true,&quot;weight&quot;:&quot;140&quot;,&quot;weight_html&quot;:&quot;140 g&quot;,&quot;custom_field&quot;:&quot;<div class=\&quot;woocommerce_custom_field\&quot;>Custom Field: <span><\/span><\/div>&quot;}]"
                        current-image="">

                        <table class="variations" cellspacing="0">
                            <tbody>
                                <tr>
                                    <td class="label"><label for="packaging">Packaging</label></td>
                                    <td class="value">
                                        <select id="packaging" class="" name="attribute_packaging"
                                            data-attribute_name="attribute_packaging" data-show_option_none="yes">
                                            <option value="">Choose an option</option>
                                            <option value="Paper Can - 70g" class="attached enabled">Paper Can - 70g
                                            </option>
                                            <option value="Aluminium Pack - 140g" class="attached enabled">Aluminium Pack
                                                - 140g</option>
                                        </select><a class="reset_variations" href="#"
                                            style="visibility: hidden;">Clear</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        <div class="single_variation_wrap">
                            <div class="woocommerce-variation single_variation" style="display: none;"></div>
                            <div
                                class="woocommerce-variation-add-to-cart variations_button woocommerce-variation-add-to-cart-disabled">

                                <div class="quantity buttons_added">
                                    <input type="button" value="-" class="minus button is-form"> <label
                                        class="screen-reader-text" for="quantity_64be671a121f1">Caramel Popcorn
                                        quantity</label>
                                    <input type="number" id="quantity_64be671a121f1" class="input-text qty text"
                                        step="1" min="1" max="" name="quantity" value="1"
                                        title="Qty" size="4" placeholder="" inputmode="numeric">
                                    <input type="button" value="+" class="plus button is-form">
                                </div>

                                <button type="submit"
                                    class="single_add_to_cart_button button alt disabled wc-variation-selection-needed">Add
                                    to cart</button>


                                <script type="application/javascript">
                    /* <![CDATA[ */
                    window.pysWooProductData = window.pysWooProductData || [];
                                window.pysWooProductData[364] = {"facebook":{"params":{"content_type":"product","content_ids":["364"],"contents":[{"id":"364","quantity":1}],"content_name":"Caramel Popcorn","category_name":"Classic, Sweet","value":9.0999999999999996447286321199499070644378662109375,"currency":"MYR"}},"ga":{"params":{"event_category":"ecommerce","items":[{"id":"364","name":"Caramel Popcorn","category":"Classic\/Sweet","quantity":1,"price":9.0999999999999996447286321199499070644378662109375}],"non_interaction":false}}};
                                window.pysWooProductData[2118] = {"facebook":{"params":{"content_type":"product","content_ids":["2118"],"contents":[{"id":"2118","quantity":1}],"content_name":"Caramel Popcorn - Paper Can - 70g","category_name":"Classic, Sweet","value":9.0999999999999996447286321199499070644378662109375,"currency":"MYR"}},"ga":{"params":{"event_category":"ecommerce","items":[{"id":"2118","name":"Caramel Popcorn","category":"Classic\/Sweet","quantity":1,"price":9.0999999999999996447286321199499070644378662109375,"variant":"Paper Can - 70g"}],"non_interaction":false}}};
                                window.pysWooProductData[2119] = {"facebook":{"params":{"content_type":"product","content_ids":["2119"],"contents":[{"id":"2119","quantity":1}],"content_name":"Caramel Popcorn - Aluminium Pack - 140g","category_name":"Classic, Sweet","value":13.9000000000000003552713678800500929355621337890625,"currency":"MYR"}},"ga":{"params":{"event_category":"ecommerce","items":[{"id":"2119","name":"Caramel Popcorn","category":"Classic\/Sweet","quantity":1,"price":13.9000000000000003552713678800500929355621337890625,"variant":"Aluminium Pack - 140g"}],"non_interaction":false}}};
                                /* ]]> */
                </script>


                                <input type="hidden" name="add-to-cart" value="364">
                                <input type="hidden" name="product_id" value="364">
                                <input type="hidden" name="variation_id" class="variation_id" value="0">
                            </div>
                        </div>

                    </form>

                    <a href="/ourproducts/" target="_self" class="button primary is-normal lowercase">
                        <span>← Continue shopping</span>
                    </a>
                    <div class="social-icons share-icons share-row relative"><a
                            href="whatsapp://send?text=Caramel%20Popcorn - https://eurekasnack.com/product/caramel-popcorn/"
                            data-action="share/whatsapp/share"
                            class="icon button circle is-outline tooltip whatsapp show-for-medium tooltipstered"><i
                                class="icon-whatsapp"></i></a><a
                            href="https://www.facebook.com/sharer.php?u=https://eurekasnack.com/product/caramel-popcorn/"
                            data-label="Facebook"
                            onclick="window.open(this.href,this.title,'width=500,height=500,top=300px,left=300px');  return false;"
                            rel="noopener noreferrer nofollow" target="_blank"
                            class="icon button circle is-outline tooltip facebook tooltipstered"><i
                                class="icon-facebook"></i></a><a
                            href="https://twitter.com/share?url=https://eurekasnack.com/product/caramel-popcorn/"
                            onclick="window.open(this.href,this.title,'width=500,height=500,top=300px,left=300px');  return false;"
                            rel="noopener noreferrer nofollow" target="_blank"
                            class="icon button circle is-outline tooltip twitter tooltipstered"><i
                                class="icon-twitter"></i></a><a
                            href="mailto:enteryour@addresshere.com?subject=Caramel%20Popcorn&amp;body=Check%20this%20out:%20https://eurekasnack.com/product/caramel-popcorn/"
                            rel="nofollow" class="icon button circle is-outline tooltip email tooltipstered"><i
                                class="icon-envelop"></i></a><a
                            href="https://pinterest.com/pin/create/button/?url=https://eurekasnack.com/product/caramel-popcorn/&amp;media=https://eurekasnack.com/wp-content/uploads/2020/10/Caramel.png&amp;description=Caramel%20Popcorn"
                            onclick="window.open(this.href,this.title,'width=500,height=500,top=300px,left=300px');  return false;"
                            rel="noopener noreferrer nofollow" target="_blank"
                            class="icon button circle is-outline tooltip pinterest tooltipstered"><i
                                class="icon-pinterest"></i></a><a
                            href="https://www.linkedin.com/shareArticle?mini=true&amp;url=https://eurekasnack.com/product/caramel-popcorn/&amp;title=Caramel%20Popcorn"
                            onclick="window.open(this.href,this.title,'width=500,height=500,top=300px,left=300px');  return false;"
                            rel="noopener noreferrer nofollow" target="_blank"
                            class="icon button circle is-outline tooltip linkedin tooltipstered"><i
                                class="icon-linkedin"></i></a></div>
                </div>

                <div id="product-sidebar" class="mfp-hide">
                    <div class="sidebar-inner">
                        <div class="hide-for-off-canvas" style="width:100%">
                            <ul class="next-prev-thumbs is-small nav-right text-right">
                                <li class="prod-dropdown has-dropdown">
                                    <a href="https://eurekasnack.com/product/tomato-popcorn/" rel="next"
                                        class="button icon is-outline circle">
                                        <i class="icon-angle-left"></i> </a>
                                    <div class="nav-dropdown">
                                        <a title="Tomato Popcorn" href="https://eurekasnack.com/product/tomato-popcorn/">
                                            <img width="100" height="100"
                                                src="https://eurekasnack.com/wp-content/uploads/2023/03/Tomato-NEW-2023-100x100.png"
                                                class="attachment-woocommerce_gallery_thumbnail size-woocommerce_gallery_thumbnail wp-post-image"
                                                alt="" loading="lazy"
                                                srcset="https://eurekasnack.com/wp-content/uploads/2023/03/Tomato-NEW-2023-100x100.png 100w, https://eurekasnack.com/wp-content/uploads/2023/03/Tomato-NEW-2023-300x300.png 300w, https://eurekasnack.com/wp-content/uploads/2023/03/Tomato-NEW-2023-150x150.png 150w, https://eurekasnack.com/wp-content/uploads/2023/03/Tomato-NEW-2023-768x768.png 768w, https://eurekasnack.com/wp-content/uploads/2023/03/Tomato-NEW-2023-247x247.png 247w, https://eurekasnack.com/wp-content/uploads/2023/03/Tomato-NEW-2023-510x510.png 510w, https://eurekasnack.com/wp-content/uploads/2023/03/Tomato-NEW-2023.png 1000w"
                                                sizes="(max-width: 100px) 100vw, 100px"></a>
                                    </div>
                                </li>
                                <li class="prod-dropdown has-dropdown">
                                    <a href="https://eurekasnack.com/product/sour-cream-onion-popcorn/" rel="next"
                                        class="button icon is-outline circle">
                                        <i class="icon-angle-right"></i> </a>
                                    <div class="nav-dropdown">
                                        <a title="Sour Cream &amp; Onion Popcorn"
                                            href="https://eurekasnack.com/product/sour-cream-onion-popcorn/">
                                            <img width="100" height="100"
                                                src="https://eurekasnack.com/wp-content/uploads/2020/10/sourcream-100x100.png"
                                                class="attachment-woocommerce_gallery_thumbnail size-woocommerce_gallery_thumbnail wp-post-image"
                                                alt="" loading="lazy"
                                                srcset="https://eurekasnack.com/wp-content/uploads/2020/10/sourcream-100x100.png 100w, https://eurekasnack.com/wp-content/uploads/2020/10/sourcream-247x247.png 247w, https://eurekasnack.com/wp-content/uploads/2020/10/sourcream-510x510.png 510w, https://eurekasnack.com/wp-content/uploads/2020/10/sourcream-150x150.png 150w, https://eurekasnack.com/wp-content/uploads/2020/10/sourcream-300x300.png 300w, https://eurekasnack.com/wp-content/uploads/2020/10/sourcream-768x768.png 768w, https://eurekasnack.com/wp-content/uploads/2020/10/sourcream-146x146.png 146w, https://eurekasnack.com/wp-content/uploads/2020/10/sourcream-50x50.png 50w, https://eurekasnack.com/wp-content/uploads/2020/10/sourcream-75x75.png 75w, https://eurekasnack.com/wp-content/uploads/2020/10/sourcream-85x85.png 85w, https://eurekasnack.com/wp-content/uploads/2020/10/sourcream-80x80.png 80w, https://eurekasnack.com/wp-content/uploads/2020/10/sourcream.png 1000w"
                                                sizes="(max-width: 100px) 100vw, 100px"></a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div> --}}
    </div>
    @include('component.footer')
@endsection
