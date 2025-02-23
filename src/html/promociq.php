<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/faa657fc98.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Exo+2:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
          <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.1/css/all.css">
      <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.1/css/sharp-solid.css">
      <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.1/css/sharp-regular.css">
      <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.1/css/sharp-light.css">
      <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.1/css/duotone.css"/>
      <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.1/css/brands.css"/>
    <link rel="stylesheet" href="/styles/styles.css">
    <link rel="stylesheet" href="/styles/output.css">
    <link rel="stylesheet" href="/styles/tailwind.css">
    <script src="/src/js/preloader.js"></script>
    <script src="/src//js/carousel.js"></script>
    <script src="/src/js/favorites.js"></script>
    <script src="/src/js/cart.js"></script>
    <script src="/src/js/filters.js"></script>
    <link rel="icon" href="/images/logo_tab.png" type="icon">
    <title>Био Магазин - Green Goods</title>
</head>

<body>

    <div id='pre_loader'>
        <img id='loading_gif' alt='loading' src="https://zelen.bg/images/zelen.gif" />
    </div>

    <header>
        <div id="content">
            <a id="logo1" href="nachalo.html"><img id="logo" src="/images/3.png" alt="greengoods.bg"></a>
            <div id="adres">
                <div id="phone">
                    <a href="tel:0896677199"><i class="fa-solid fa-phone"></i> 0896 677 199</a>
                </div>
                <div id="location">
                    <a href="about.html"><i class="fa-solid fa-location-dot"></i> МАГАЗИНИ</a>
                </div>
            </div>
            <div id="search">
                <input type="text" class="form-control fast_search m-auto bg-transparent fast_search_advanced"
                    name="fast-search" placeholder="Търсене......">
                <button class="button search-btn" onclick="showHideSearch()">
                    <i class="fa fa-search"></i>
                </button>
            </div>
            <div id="right">
                <a href="avtor.html"><i class="fa-regular fa-user"></i></a>
                <div class="icon-wrapper">
                    <i class="fa-regular fa-heart"></i>
                    <span class="favorite-counter">0</span>
                </div>
                <div class="icon-wrapper">
                    <i class="fa-regular fa-cart-shopping"></i>
                    <span class="cart-counter">0</span>
                </div>
            </div>
        </div>
        <hr>
        <div id="navbar">
            <nav>
                <ul style="display: flex; list-style-type: none; justify-content: center; padding: 10px; margin: 0; background-color: white;">
                    <li style="margin: 0 55px; text-align: center;">
                        <a href="nachalo.html" style="text-decoration: none; color: #512d1e;">
                            <div style="display: flex; flex-direction: column; align-items: center;">
                                <i class="fa fa-trophy" style="font-size: 24px;"></i>
                                <span>Начало</span>
                            </div>
                        </a>
                    </li>
                    <li style="margin: 0 55px; text-align: center;">
                        <a href="zafirmata.html" style="text-decoration: none; color: #512d1e;">
                            <div style="display: flex; flex-direction: column; align-items: center;">
                                <i class="fa fa-briefcase" style="font-size: 24px;"></i>
                                <span>За фирмата</span>
                            </div>
                        </a>
                    </li>
                    <li style="margin: 0 55px; text-align: center;">
                        <a href="katalog.html" style="text-decoration: none; color: #512d1e;">
                            <div style="display: flex; flex-direction: column; align-items: center;">
                                <i class="fa fa-tree" style="font-size: 24px;"></i>
                                <span>Каталог</span>
                            </div>
                        </a>
                    </li>
                    <li style="margin: 0 55px; text-align: center;">
                        <a href="promociq.php" style="text-decoration: none; color: #512d1e;">
                            <div style="display: flex; flex-direction: column; align-items: center;">
                                <i class="fa fa-leaf" style="font-size: 24px;"></i>
                                <span>Промоция</span>
                            </div>
                        </a>
                    </li>
                    <li style="margin: 0 55px; text-align: center;">
                        <a href="kontakti.html" style="text-decoration: none; color: #512d1e;">
                            <div style="display: flex; flex-direction: column; align-items: center;">
                                <i class="fa fa-bread-slice" style="font-size: 24px;"></i>
                                <span>Контакти</span>
                            </div>
                        </a>
                    </li>
                    <li style="margin: 0 55px; text-align: center;">
                        <a href="avtor.html" style="text-decoration: none; color: #512d1e;">
                            <div style="display: flex; flex-direction: column; align-items: center;">
                                <i class="fa fa-address-book" style="font-size: 24px;"></i>
                                <span>Автор</span>
                            </div>
                        </a>
                    </li>
                </ul>
                <hr>
            </nav>
        </div>
    </header>

    <?php
$promotionProducts = [
    [
        'id' => '001',
        'name' => 'Био Лешников-какаов крем за мазане, без добавена захар, 250g',
        'brand' => 'Bett\'r',
        'oldPrice' => 15.00,
        'newPrice' => 12.00,
        'image' => '/images/product_bettr.webp',
        'isNew' => true,
        'available' => true
    ],
    [
        'id' => '002',
        'name' => 'Био Протеинова гранола с фъстъци и какао, 300g',
        'brand' => 'Bett\'r',
        'oldPrice' => 13.00,
        'newPrice' => 10.00,
        'image' => '/images/product_bettr2.webp',
        'isNew' => true,
        'available' => true
    ],
    [
        'id' => '006',
        'name' => 'Био Кокосово масло, екстра върджин, 300ml',
        'brand' => 'Dragon Superfoods',
        'oldPrice' => 13.00,
        'newPrice' => 10.00,
        'image' => '/images/product_dragon3.webp',
        'isNew' => true,
        'available' => true
    ],
    [
        'id' => '008',
        'name' => 'Био мини бисквитки Shareables Double Choc Walnut, 100g',
        'brand' => 'Kookie Cat',
        'oldPrice' => 13.00,
        'newPrice' => 10.00,
        'image' => '/images/product_kookie2.webp',
        'isNew' => true,
        'available' => true
    ],
    [
        'id' => '010',
        'name' => 'Био Фъстъчено масло с парченца фъстъци и какао, 250g',
        'brand' => 'Naughty Nuts',
        'oldPrice' => 15.00,
        'newPrice' => 12.00,
        'image' => '/images/product_nuts.webp',
        'isNew' => true,
        'available' => false
    ],
    [
        'id' => '011',
        'name' => 'Био чашки с масло от шам фъстък Солен шам фъстък, 12x39g',
        'brand' => 'Naughty Nuts',
        'oldPrice' => 65.00,
        'newPrice' => 50.00,
        'image' => '/images/product_nuts2.webp',
        'isNew' => true,
        'available' => true
    ]
];
?>

    <main class="catalog-section">
        <div class="catalog-header">
            <h1>ПРОМОЦИЯ</h1>
            <div class="catalog-controls">
                <div class="view-toggle">
                    <i class="fa fa-th-large"></i>
                </div>
                <select class="sort-select">
                    <option value="price">↑ Цена</option>
                    <option value="price">↓ Цена</option>
                    <!-- Add other sort options as needed -->
                </select>
            </div>
        </div>

        <div class="catalog-layout">
            <aside class="filter-sidebar">
                <h2>ФИЛТЪР</h2>
                <div class="price-filter">
                    <div class="price-slider">
                        <span>1 лв</span>
                        <input type="range" min="1" max="236" value="236">
                        <span>236 лв</span>
                    </div>
                </div>
                
                <div class="brand-filter">
                    <h3>Бранд</h3><br>
                    <hr><br>
                    <div class="checkbox-list">
                        <label><input type="checkbox"> Bett'r</label>
                        <label><input type="checkbox"> Dragon Superfoods</label>
                        <label><input type="checkbox"> Kookie Cat</label>
                        <label><input type="checkbox"> Naughty Nuts</label>
                        <!-- Add more brands as needed -->
                    </div>
                </div>
            </aside>

                    <!-- Replace the static product cards with this PHP code -->
                    <div class="products-grid">
                        <?php
                        foreach ($promotionProducts as $product) {
                            $discount = round((($product['oldPrice'] - $product['newPrice']) / $product['oldPrice']) * 100);
                            $stockStatus = $product['available'] ? 'in-stock' : 'out-of-stock';
                            $stockText = $product['available'] ? 'В наличност' : 'Изчерпан';
                            ?>
                            <div class="product-card">
                                <?php if ($product['isNew']) { ?>
                                    <div class="product-badge">NEW</div>
                                <?php } ?>
                                <div class="discount-badge">-<?php echo $discount; ?>%</div>
                                <button class="favorite-btn"><i class="fa-regular fa-heart"></i></button>
                                <img src="<?php echo $product['image']; ?>" alt="Product">
                                <h3><?php echo $product['id'] . ' - ' . $product['name'] . ', ' . $product['brand']; ?></h3>
                                <div class="rating">★★★★★</div>
                                <div class="price-container">
                                    <div class="new-price"><?php echo number_format($product['newPrice'], 2); ?> лв.</div>
                                    <div class="old-price"><?php echo number_format($product['oldPrice'], 2); ?> лв.</div>
                                </div>
                                <div class="stock-status <?php echo $stockStatus; ?>">
                                    <i class="fa-solid <?php echo $product['available'] ? 'fa-check' : 'fa-xmark'; ?>"></i>
                                    <span><?php echo $stockText; ?></span>
                                </div>
                                <div class="product-controls">
                                    <button class="quantity-btn">-</button>
                                    <input type="number" value="1" min="1">
                                    <button class="quantity-btn">+</button>
                                </div>
                                <div class="product-buttons">
                                    <button class="btn-primary">Бр.</button>
                                    <button class="btn-secondary">Кутия</button>
                                </div>
                                <button class="add-to-cart" <?php echo !$product['available'] ? 'disabled' : ''; ?>>
                                    ДОБАВИ
                                </button>
                            </div>
                        <?php } ?>
                    </div>
        </div>
    </main>

    <footer>
        <div id="footer">
            <ul style="display: flex; list-style-type: none; justify-content: center; padding: 10px; margin: 0;">
                <li style="margin: 0 55px; text-align: center;">
                    <div style="display: flex; flex-direction: column; align-items: center;">
                        <i class="fa-solid fa-truck-fast" style="font-size: 40px;"></i>
                        <span style="margin-top: 10px;">ДОСТАВКА В ЦЯЛАТА СТРАНА</span>
                    </div>
                </li>
                <li style="margin: 0 55px; text-align: center;">
                    <div style="display: flex; flex-direction: column; align-items: center;">
                        <i class="fa-regular fa-clock" style="font-size: 40px;"></i>
                        <span style="margin-top: 10px;">ЕКСПРЕСНА ДОСТАВКА</span>
                    </div>
                </li>
                <li style="margin: 0 55px; text-align: center;">
                    <div style="display: flex; flex-direction: column; align-items: center;">
                        <i class="fa-regular fa-credit-card" style="font-size: 40px;"></i>
                        <span style="margin-top: 10px;">ОНЛАЙН ПЛАЩАНЕ</span>
                    </div>
                </li>
                <li style="margin: 0 55px; text-align: center;">
                    <div style="display: flex; flex-direction: column; align-items: center;">
                        <i class="fa-regular fa-heart" style="font-size: 40px;"></i>
                        <span style="margin-top: 10px;">ЗА ВСИЧКИ ВСЕКИ ДЕН</span>
                    </div>
                </li>
            </ul>
        </div>
        <div id="footer2">
            <div class="footer-content">
                <div class="footer-section">
                    <h3>КОГА РАБОТИМ?</h3>
                    <ul>
                        <li><i class="fa-regular fa-clock"></i> Понеделник-Петък 08:00-17:00</li>
                        <li><i class="fa-regular fa-envelope"></i> <a href="mailto:shop@greengoods.bg">shop@greengoods.bg</a></li>
                        <li class="socials"><i class="fa-brands fa-facebook-messenger"></i><i class="fa-brands fa-instagram"></i><i class="fa-brands fa-facebook"></i></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h3>ЦЕНА ЗА ДОСТАВКА</h3>
                    <ul>
                        <li><b>За поръчки над 89 лв.</b></li>
                        <li>Безплатна доставка</li>
                        <li><b>За поръчки от 69 до 89 лв.</b></li>
                        <li>До офис на Еконт и Спиди: 2.99 лв.</li>
                        <li>До личен адрес: 3.99 лв.</li>
                        <li><b>За поръчки под 69 лв.</b></li>
                        <li>До офис на Еконт и Спиди: 4.99 лв.</li>
                        <li>До личен адрес: 5.99 лв.</li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h3>БИО МАГАЗИН GREEN GOODS</h3>
                    <ul>
                        <li>Доставка и плащане</li>
                        <li>Контакти</li>
                        <li>Магазини</li>
                        <li>Общи условия</li>
                        <li>Политика за поверителност</li>
                        <li>За нас</li>
                        <li>Политика за бисквитки</li>
                        <li>Декларация за обработване на личните данни</li>
                        <li>Блог</li>
                        <li>С Грижа за Планетата</li>
                        <li>Сертификати за качество</li>
                        <li>Работа в ЗЕЛЕН</li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h3>Абонирай се за нашия бюлетин и получавай подаръци и новини за актуалните ни промоции!</h3>
                    <form
                        action="https://formsubmit.co/3e976596c36b89a9a940082792e6205f"
                        method="post"
                    >
                        <div class="form-group">
                            <label>Имейл адрес *</label>
                            <input type="email" name="email" placeholder="Вашия адрес">
                        </div>
                        <div class="form-group">
                            <label>Име</label>
                            <input type="text" name="name" placeholder="Име">
                        </div>
                        <div class="form-group">
                            <label>Фамилия</label>
                            <input type="text" name="surname" placeholder="Фамилия">
                        </div>
                        <div class="checkbox-group">
                            <input type="checkbox" name="consent" id="consent">
                            <label for="consent">Съгласявам се с политиката за поверителност на онлайн магазин Green Goods.</label>
                        </div>
                        <button type="submit">АБОНИРАЙ МЕ</button>
                    </form>
                </div>
            </div>
        </div>
    </footer>
    <script>
        document.querySelectorAll('.product-card').forEach(card => {
    const title = card.querySelector('h3');
    const originalText = title.textContent;
    
    if (title.scrollHeight > title.clientHeight) {
        const showMoreBtn = document.createElement('button');
        showMoreBtn.className = 'show-more';
        showMoreBtn.textContent = 'Покажи';
        
        showMoreBtn.addEventListener('click', () => {
            title.classList.toggle('expanded');
            showMoreBtn.textContent = title.classList.contains('expanded') ? 'Скрий' : 'Покажи';
        });
        
        title.insertAdjacentElement('afterend', showMoreBtn);
    }
});
    </script>

    <script>
        // Handle quantity controls
        document.querySelectorAll('.product-controls').forEach(control => {
            const minusBtn = control.querySelector('.quantity-btn:first-child');
            const plusBtn = control.querySelector('.quantity-btn:last-child');
            const input = control.querySelector('input');

            minusBtn.addEventListener('click', () => {
                const currentValue = parseInt(input.value);
                if (currentValue > 1) {
                    input.value = currentValue - 1;
                }
            });

            plusBtn.addEventListener('click', () => {
                const currentValue = parseInt(input.value);
                input.value = currentValue + 1;
            });

            // Prevent manual input of negative numbers
            input.addEventListener('change', () => {
                if (input.value < 1) {
                    input.value = 1;
                }
            });
        });
    </script>
</body>