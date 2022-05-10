<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php bloginfo( 'name' ); ?></title>
    <?php wp_head() ?>
</head>
<body>
<header class="site-header">
    <div class="container">
        <div class="site-header__content">
            <div class="site-header__content--left">
                <a href="<?php echo get_home_url(); ?>" class="site-header__content--logo">
                    <svg class="site-header__content--logo--img" width="170" height="59" viewBox="0 0 170 59" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect y="0.473694" width="170" height="57.8947" rx="28.9474" fill="#F7B500"/>
                        <path d="M47.6131 43C45.1891 43 43.1371 42.508 41.4571 41.524C39.7771 40.516 38.6731 39.016 38.1451 37.024C37.9291 36.208 37.7851 35.212 37.7131 34.036C37.6411 32.86 37.6051 31.36 37.6051 29.536C37.6051 25.96 37.9891 23.116 38.7571 21.004C39.5491 18.868 41.1091 17.8 43.4371 17.8C44.8771 17.8 46.0051 18.304 46.8211 19.312C47.6611 20.32 48.0811 21.568 48.0811 23.056C48.0811 24.64 47.9491 26.332 47.6851 28.132C47.4211 29.932 47.0491 32.116 46.5691 34.684C48.0571 34.204 49.6891 33.964 51.4651 33.964C53.3131 33.964 54.8491 34.3 56.0731 34.972C57.3211 35.644 57.9451 36.736 57.9451 38.248C57.9451 39.712 57.4651 40.792 56.5051 41.488C55.5451 42.184 54.3811 42.616 53.0131 42.784C51.6451 42.928 49.8451 43 47.6131 43ZM69.4983 43.036C67.3143 43.06 65.2863 42.52 63.4143 41.416C61.5663 40.312 60.0783 38.8 58.9503 36.88C57.8463 34.936 57.2703 32.788 57.2223 30.436C57.1983 28.18 57.7263 26.092 58.8063 24.172C59.8863 22.252 61.3743 20.728 63.2703 19.6C65.1663 18.448 67.2423 17.872 69.4983 17.872C71.7063 17.848 73.7463 18.4 75.6183 19.528C77.5143 20.656 79.0143 22.204 80.1183 24.172C81.2223 26.14 81.7743 28.312 81.7743 30.688C81.7743 32.92 81.2223 34.972 80.1183 36.844C79.0143 38.716 77.5143 40.204 75.6183 41.308C73.7463 42.412 71.7063 42.988 69.4983 43.036ZM69.6063 36.016C70.7103 36.016 71.6463 35.62 72.4143 34.828C73.2063 34.036 73.5903 33.004 73.5663 31.732C73.5663 30.436 73.1823 29.392 72.4143 28.6C71.6463 27.808 70.7103 27.412 69.6063 27.412C68.5023 27.412 67.5663 27.808 66.7983 28.6C66.0303 29.392 65.6463 30.436 65.6463 31.732C65.6463 33.004 66.0303 34.036 66.7983 34.828C67.5663 35.62 68.5023 36.016 69.6063 36.016ZM96.2339 42.964C93.4979 42.964 91.1579 42.484 89.2139 41.524C87.2699 40.564 85.7819 39.196 84.7499 37.42C83.7419 35.62 83.2379 33.496 83.2379 31.048C83.2379 28.12 83.8499 25.66 85.0739 23.668C86.3219 21.676 87.9299 20.2 89.8979 19.24C91.8659 18.28 93.9299 17.8 96.0899 17.8C98.0099 17.8 99.7019 18.088 101.166 18.664C102.63 19.24 103.758 19.996 104.55 20.932C105.342 21.868 105.738 22.852 105.738 23.884C105.738 25.372 105.354 26.44 104.586 27.088C103.818 27.712 102.87 28.024 101.742 28.024C101.214 28.024 100.746 27.976 100.338 27.88C99.9539 27.784 99.5459 27.652 99.1139 27.484C98.6339 27.316 98.2019 27.196 97.8179 27.124C97.4579 27.028 97.0019 26.98 96.4499 26.98C94.8659 26.98 93.6179 27.46 92.7059 28.42C91.7939 29.356 91.3379 30.688 91.3379 32.416C91.3379 33.88 91.7819 35.008 92.6699 35.8C93.5579 36.592 94.6619 36.988 95.9819 36.988C96.7259 36.988 97.3739 36.892 97.9259 36.7C98.4779 36.508 98.8979 36.292 99.1859 36.052C99.4739 35.812 99.6179 35.62 99.6179 35.476C97.8659 35.476 96.5339 35.272 95.6219 34.864C94.7099 34.456 94.2539 33.748 94.2539 32.74C94.2539 31.732 94.6019 30.952 95.2979 30.4C95.9939 29.824 97.1699 29.536 98.8259 29.536C100.53 29.536 101.862 29.74 102.822 30.148C103.782 30.532 104.466 31.144 104.874 31.984C105.282 32.8 105.486 33.892 105.486 35.26C105.486 36.652 105.066 37.936 104.226 39.112C103.41 40.288 102.282 41.224 100.842 41.92C99.4259 42.616 97.8899 42.964 96.2339 42.964ZM119.104 43.036C116.92 43.06 114.892 42.52 113.02 41.416C111.172 40.312 109.684 38.8 108.556 36.88C107.452 34.936 106.876 32.788 106.828 30.436C106.804 28.18 107.332 26.092 108.412 24.172C109.492 22.252 110.98 20.728 112.876 19.6C114.772 18.448 116.848 17.872 119.104 17.872C121.312 17.848 123.352 18.4 125.224 19.528C127.12 20.656 128.62 22.204 129.724 24.172C130.828 26.14 131.38 28.312 131.38 30.688C131.38 32.92 130.828 34.972 129.724 36.844C128.62 38.716 127.12 40.204 125.224 41.308C123.352 42.412 121.312 42.988 119.104 43.036ZM119.212 36.016C120.316 36.016 121.252 35.62 122.02 34.828C122.812 34.036 123.196 33.004 123.172 31.732C123.172 30.436 122.788 29.392 122.02 28.6C121.252 27.808 120.316 27.412 119.212 27.412C118.108 27.412 117.172 27.808 116.404 28.6C115.636 29.392 115.252 30.436 115.252 31.732C115.252 33.004 115.636 34.036 116.404 34.828C117.172 35.62 118.108 36.016 119.212 36.016Z" fill="white"/>
                    </svg>
                </a>
                <nav class="site-header__content--nav site-navigation site-navigation__desktop">
                    <a class="site-navigation__item has-children">
                        <span class="site-navigation__item--text">Catalog</span>
                        <svg class="site-navigation__item--caret" width="16" height="9" viewBox="0 0 16 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7.90123 4.5L12.4593 0.542713C13.2693 -0.180906 14.5825 -0.180906 15.3925 0.542712C16.2025 1.26633 16.2025 2.43955 15.3925 3.16317L9.46659 8.45729C8.65662 9.18091 7.34338 9.18091 6.53341 8.45729L0.607482 3.16317C-0.202494 2.43955 -0.202494 1.26633 0.607482 0.542714C1.41746 -0.180905 2.73069 -0.180905 3.54067 0.542713L7.90123 4.5Z" fill="#F7B500"/>
                        </svg>
                    </a>
                    <a class="site-navigation__item">
                        <span class="site-navigation__item--text">Shop</span>
                    </a>
                    <a class="site-navigation__item active">
                        <span class="site-navigation__item--text">Home</span>
                    </a>
                </nav>
            </div>
            <div class="site-header__content--right">
                <div class="page-overlay">
                    
                </div>
                <form class="site-btn site-btn__search dash-bordered"  id="searchBtn">
                    <input type="text" name="search" id="searchInput" class="site-btn__search--input" placeholder="Szukaj produkt...">
                    <svg class="site-btn__icon" width="41" height="42" viewBox="0 0 41 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M19.3162 28.6405C24.0892 28.6405 27.9586 24.6768 27.9586 19.7874C27.9586 14.8979 24.0892 10.9342 19.3162 10.9342C14.5431 10.9342 10.6738 14.8979 10.6738 19.7874C10.6738 24.6768 14.5431 28.6405 19.3162 28.6405Z" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M25.798 26.4272L32.9999 33.8049" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <div class="search-results">
                        <div class="search-results__item">
                            <div class="search-results__item--name">
                            Produkt 1
                            </div>
                            <div class="search-results__item--price">
                            12.29 zł
                            </div>
                        </div>
                        <div class="search-results__item">
                            <div class="search-results__item--name">
                            Produkt 1
                            </div>
                            <div class="search-results__item--price">
                            12.29 zł
                            </div>
                        </div>
                        <div class="search-results__footer">
                            <a class="search-results__footer--see-all" href="#">Zobacz wszystkie (10)</a>
                        </div>
                    </div>
                </form>
                <div class="user-buttons dash-bordered">
                    <a href="#" class="user-buttons__btn user-buttons__btn--profile" id="myProfile">
                        <div class="user-buttons__btn--notifier">
                            10
                        </div>
                        <svg class="user-buttons__btn--icon" width="49" height="46" viewBox="0 0 49 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M31.5542 24.3505C33.5109 22.8833 34.9391 20.8713 35.6401 18.5945C36.3412 16.3176 36.2802 13.8891 35.4656 11.6468C34.651 9.40453 33.1234 7.45998 31.0953 6.08369C29.0672 4.7074 26.6394 3.9678 24.1497 3.9678C21.66 3.9678 19.2323 4.7074 17.2041 6.08369C15.176 7.45998 13.6484 9.40453 12.8339 11.6468C12.0193 13.8891 11.9583 16.3176 12.6593 18.5945C13.3604 20.8713 14.7886 22.8833 16.7452 24.3505C13.3924 25.6308 10.467 27.7542 8.28076 30.4944C6.09455 33.2346 4.72954 36.4889 4.33125 39.9103C4.30242 40.1601 4.3255 40.4129 4.39916 40.6542C4.47282 40.8955 4.59563 41.1206 4.76058 41.3167C5.09369 41.7126 5.57821 41.9662 6.10753 42.0217C6.63686 42.0772 7.16763 41.93 7.58309 41.6126C7.99855 41.2951 8.26466 40.8333 8.32289 40.3288C8.76114 36.6104 10.6214 33.1763 13.5484 30.6825C16.4753 28.1887 20.2637 26.8101 24.1897 26.8101C28.1156 26.8101 31.904 28.1887 34.8309 30.6825C37.7579 33.1763 39.6182 36.6104 40.0564 40.3288C40.1107 40.7962 40.3447 41.2279 40.7132 41.5405C41.0818 41.8532 41.5588 42.0246 42.0522 42.0217H42.2718C42.7949 41.9644 43.2731 41.7122 43.6021 41.3203C43.9311 40.9284 44.0842 40.4284 44.0281 39.9293C43.6279 36.4982 42.2556 33.2356 40.0581 30.4911C37.8607 27.7467 34.921 25.624 31.5542 24.3505ZM24.1497 23C22.5708 23 21.0273 22.5538 19.7145 21.7177C18.4016 20.8816 17.3784 19.6933 16.7741 18.303C16.1699 16.9127 16.0118 15.3829 16.3199 13.9069C16.6279 12.431 17.3882 11.0752 18.5047 10.0111C19.6212 8.94705 21.0437 8.22239 22.5923 7.92881C24.1409 7.63522 25.746 7.7859 27.2048 8.36178C28.6636 8.93767 29.9104 9.91289 30.7876 11.1641C31.6648 12.4154 32.133 13.8864 32.133 15.3913C32.133 17.4093 31.2919 19.3446 29.7948 20.7715C28.2976 22.1984 26.267 23 24.1497 23Z" fill="#AA2800"/>
                        </svg>
                    </a>
                    <a href="#" class="user-buttons__btn user-buttons__btn--whishlist" id="myWishlist">
                        <div class="user-buttons__btn--notifier">
                            5
                        </div>
                        <svg class="user-buttons__btn--icon" width="48" height="46" viewBox="0 0 48 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M40.3351 9.68478C38.2195 7.66316 35.4151 6.42929 32.4284 6.20603C29.4417 5.98277 26.4697 6.78485 24.0493 8.46739C21.5099 6.66724 18.3492 5.85097 15.2036 6.18295C12.0581 6.51493 9.16134 7.9705 7.09673 10.2565C5.03212 12.5426 3.95301 15.4893 4.07671 18.5033C4.20041 21.5173 5.51772 24.3746 7.76338 26.5L20.1574 38.3315C21.1953 39.305 22.5931 39.8506 24.0493 39.8506C25.5054 39.8506 26.9033 39.305 27.9411 38.3315L40.3351 26.5C42.6654 24.2654 43.9734 21.2429 43.9734 18.0924C43.9734 14.9419 42.6654 11.9193 40.3351 9.68478V9.68478ZM37.521 23.875L25.127 35.6875C24.986 35.8232 24.8181 35.931 24.6331 36.0045C24.4481 36.078 24.2497 36.1159 24.0493 36.1159C23.8488 36.1159 23.6504 36.078 23.4654 36.0045C23.2804 35.931 23.1126 35.8232 22.9715 35.6875L10.5775 23.8179C9.01228 22.293 8.13582 20.2446 8.13582 18.1114C8.13582 15.9782 9.01228 13.9298 10.5775 12.4049C12.1725 10.904 14.3236 10.0625 16.5649 10.0625C18.8063 10.0625 20.9574 10.904 22.5524 12.4049C22.7379 12.5832 22.9587 12.7247 23.2019 12.8213C23.4451 12.9178 23.706 12.9675 23.9694 12.9675C24.2329 12.9675 24.4938 12.9178 24.737 12.8213C24.9802 12.7247 25.2009 12.5832 25.3865 12.4049C26.9814 10.904 29.1326 10.0625 31.3739 10.0625C33.6153 10.0625 35.7664 10.904 37.3614 12.4049C38.9481 13.9098 39.8533 15.9471 39.8832 18.0804C39.913 20.2137 39.0651 22.2732 37.521 23.8179V23.875Z" fill="white"/>
                        </svg>
                    </a>
                    <a href="#" class="user-buttons__btn user-buttons__btn--cart" id="myCart">
                        <div class="user-buttons__btn--notifier">
                            0
                        </div>
                        <svg class="user-buttons__btn--icon width="48" height="46" viewBox="0 0 48 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M16.7503 7.08643C19.3308 4.34566 23.3566 3.3023 27.0368 4.42047C30.717 5.53864 33.3679 8.61059 33.8103 12.2698L34.1065 12.2754C36.9857 12.385 40.2772 14.109 41.2094 18.958L42.7172 30.1273C43.2958 34.0065 42.5419 36.9995 40.7886 38.9892C39.0352 40.9789 36.1597 41.9487 32.0219 41.9487H16.0489C12.7803 42.3396 9.52342 41.1441 7.37317 38.7641C5.22291 36.3841 4.46476 33.1356 5.35356 30.1106L5.39715 29.9162C5.60455 29.2241 6.32155 28.7675 7.08937 28.8733C7.92698 28.9887 8.50788 29.7298 8.38684 30.5286C7.83888 32.7175 8.31906 35.0254 9.70184 36.849C11.4008 38.3847 13.6958 39.1729 16.0314 39.0226H32.0219C35.1954 39.0226 37.3871 38.3873 38.5267 37.0663C39.6664 35.7454 40.1223 33.5383 39.6664 30.5286L38.1761 19.4763C37.6501 16.8011 36.0195 15.129 33.8103 15.129H14.243C12.139 15.129 10.5084 16.8011 9.85964 19.5934L9.43884 22.0513C9.24558 22.8023 8.4757 23.2825 7.67674 23.1504C6.87777 23.0183 6.32238 22.3189 6.40556 21.5497L6.8439 19.0416C8.0011 13.9418 11.4201 12.2698 14.243 12.2698H30.6893C30.4485 10.7881 29.6809 9.43029 28.5152 8.42407C25.7452 6.06156 21.9476 5.78446 19.4679 8.42407C19.4679 8.42407 18.6108 9.19654 18.1529 10.8326C17.6532 12.6184 17.8198 12.6068 17.8198 12.6068C17.4556 12.882 17.5575 13.374 17.0966 13.273C16.5587 13.1553 14.405 13.554 14.243 13.0509C14.081 12.5479 15.1673 8.76768 16.7503 7.08643ZM30.0406 19.8442C30.2693 19.8947 30.4883 19.9793 30.6893 20.095C30.8686 20.2299 31.0278 20.3874 31.1627 20.5632C31.2388 20.6443 31.2929 20.7418 31.3205 20.8474C31.3739 20.947 31.4095 21.0544 31.4257 21.1651C31.4438 21.2759 31.4438 21.3887 31.4257 21.4995C31.4316 21.7189 31.3836 21.9365 31.2855 22.1349C31.1976 22.3504 31.0526 22.5405 30.8646 22.6867C30.5409 23.0017 30.0998 23.182 29.6373 23.1883C29.4033 23.1794 29.1723 23.1342 28.9535 23.0545C28.5879 22.8474 28.3137 22.5205 28.182 22.1349C28.0893 21.9353 28.0472 21.7176 28.0593 21.4995C28.0415 21.3887 28.0415 21.2759 28.0593 21.1651V20.8474L28.2346 20.5632C28.2845 20.4658 28.3564 20.3802 28.445 20.3124L28.708 20.095C28.8058 20.0317 28.9119 19.9811 29.0236 19.9445C29.1291 19.8961 29.2413 19.8623 29.3568 19.8442C29.5817 19.7943 29.8157 19.7943 30.0406 19.8442ZM18.8367 19.8609C18.9529 19.8764 19.0655 19.9103 19.1699 19.9612C19.2776 19.9946 19.3784 20.0455 19.4679 20.1117C19.573 20.1695 19.6677 20.2429 19.7485 20.3291C19.8371 20.3969 19.909 20.4825 19.9589 20.5799C20.027 20.6689 20.0857 20.7641 20.1342 20.8641L20.2394 21.1818C20.2489 21.2931 20.2489 21.405 20.2394 21.5162C20.2394 22.4397 19.4544 23.1883 18.4861 23.1883C18.0358 23.1734 17.6089 22.9937 17.2938 22.6867C17.1279 22.5292 16.9967 22.3415 16.9081 22.1349C16.8242 21.9327 16.7825 21.7169 16.7853 21.4995C16.7672 21.3887 16.7672 21.2759 16.7853 21.1651C16.8016 21.0544 16.8371 20.947 16.8905 20.8474C16.9255 20.7447 16.9789 20.6485 17.0483 20.5632C17.0982 20.4658 17.1701 20.3802 17.2587 20.3124C17.3355 20.2334 17.4241 20.1658 17.5217 20.1117C17.6112 20.0455 17.7121 19.9946 17.8198 19.9612C17.9242 19.9103 18.0368 19.8764 18.1529 19.8609C18.3779 19.811 18.6118 19.811 18.8367 19.8609Z" fill="white"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>
<main>