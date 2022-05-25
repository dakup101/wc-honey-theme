<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php bloginfo( 'name' ); ?></title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <?php wp_head() ?>
</head>
<body>
<header class="site-header">
    <div class="container">

        <div class="site-header__content">
            <div class="site-header__content--left">
                <a href="<?php echo get_home_url(); ?>" class="site-header__content--logo me-4">
                    <svg class="site-header__content--logo--img" width="117" height="83" viewBox="0 0 117 83" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M13.0932 38.5254C12.0652 25.1622 18.0273 12.5699 28.1524 6.81347C41.3614 -0.69048 59.9671 4.44921 69.4241 20.3309C71.6856 18.7889 76.3113 16.1163 82.4276 15.8593C83.4555 15.8079 97.1271 15.4995 103.706 26.7041C106.79 31.9979 106.892 37.446 106.738 40.2215C111.775 41.6092 115.527 45.6695 116.041 50.1924C116.761 56.4629 111.364 63.3501 103.346 63.7098C102.472 65.3031 98.7204 71.4194 91.165 73.8864C85.46 75.7367 80.5773 74.5032 78.6756 73.8864C78.1102 74.606 73.7415 80.0026 66.4945 79.9513C60.5325 79.8999 56.6777 76.1993 55.8554 75.3255C54.7246 76.4563 47.8888 83.1379 37.7637 82.4697C24.6574 81.5446 18.2842 69.0551 17.9759 68.3869C9.23838 69.5177 1.68304 63.9154 0.243927 56.6171C-0.886804 50.8606 2.04282 44.693 6.36016 41.3522C8.93 39.3991 11.6026 38.7823 13.0932 38.5254Z" fill="white"/>
                        <path d="M51.0754 62.0651C51.1782 62.1679 51.1782 62.3735 51.1782 62.5791C51.1782 62.9903 51.0754 63.2986 50.8698 63.5556C49.8419 64.7892 48.7625 65.4573 47.5804 65.4573C46.5525 65.4573 45.7815 65.0461 45.1648 64.2752C44.548 63.5042 44.2396 62.3735 44.2396 60.9344C44.2396 60.5746 44.2396 60.2148 44.291 59.8551C43.6228 59.9579 42.8519 60.0606 42.0809 60.112C41.567 60.1634 41.1558 60.1634 41.0016 60.2148C40.796 61.2942 40.4876 62.5791 40.1279 64.0696C39.9223 64.9947 39.5111 65.4059 38.8943 65.4059C38.2262 65.4059 37.9178 65.0975 37.9178 64.4808C37.9178 64.3266 37.9178 64.1724 38.0206 63.9154C38.3804 62.4763 38.6374 61.2942 38.8429 60.3176L38.1234 60.369C37.7636 60.369 37.558 60.3176 37.4038 60.2148C37.2496 60.112 37.1468 59.9065 37.1468 59.6495C37.1468 59.2897 37.2496 59.0327 37.4552 58.8785C37.6608 58.7243 37.9692 58.6215 38.4318 58.6215L39.2541 58.5701C39.5111 57.131 39.6653 56.0003 39.6653 55.2293C39.6653 54.7668 39.6139 54.407 39.4597 54.2528C39.3055 54.0986 39.0999 53.9958 38.8943 53.9958C38.1748 53.9958 37.3524 54.6126 36.4273 55.7947C36.2731 55.9489 36.1189 56.0517 35.9647 56.0517C35.8105 56.0517 35.7077 56.0003 35.6049 55.8461C35.5021 55.6919 35.4507 55.5377 35.4507 55.3321C35.4507 55.0237 35.6049 54.664 35.8619 54.3042C36.3245 53.6874 36.8899 53.1735 37.6094 52.7623C38.2776 52.3511 38.9971 52.1455 39.7167 52.1455C40.3848 52.1455 40.8988 52.3511 41.2586 52.8137C41.6184 53.2763 41.824 53.9958 41.824 54.9724C41.824 55.8461 41.7212 56.9768 41.4642 58.4673L43.0061 58.3645C43.6742 58.3132 44.2396 58.2618 44.7022 58.2104C44.9078 57.0796 45.1648 56.0003 45.5759 55.0238C45.9357 54.0472 46.4497 53.2249 47.015 52.6081C47.5804 51.9913 48.1972 51.683 48.9167 51.683C49.4307 51.683 49.8419 51.8885 50.1503 52.2997C50.4586 52.7109 50.6128 53.2249 50.6128 53.893C50.6128 56.4629 49.3279 58.2618 46.7067 59.2383C46.6553 59.6495 46.6553 60.0606 46.6553 60.5232C46.6553 61.6026 46.8095 62.3735 47.0664 62.8361C47.3234 63.2987 47.7346 63.5042 48.1972 63.5042C48.6084 63.5042 49.0195 63.4014 49.3793 63.1959C49.7391 62.9903 50.1503 62.5791 50.5614 62.0651C50.6642 61.9109 50.8184 61.8595 50.9726 61.8595C50.9212 61.9109 51.024 61.9623 51.0754 62.0651ZM47.9402 53.6874C47.6832 54.0986 47.4262 54.664 47.2206 55.3835C47.015 56.1031 46.8095 56.874 46.6553 57.7478C47.4776 57.388 48.0944 56.9254 48.5056 56.3087C48.9167 55.6919 49.0709 54.8696 49.0709 53.893C49.0709 53.636 49.0195 53.4818 48.9681 53.3277C48.8653 53.1735 48.7625 53.1221 48.6597 53.1221C48.4542 53.0707 48.1972 53.2763 47.9402 53.6874Z" fill="#F7B500"/>
                        <path d="M60.1727 60.7802C60.2241 60.9344 60.2755 61.0886 60.2755 61.2942C60.2755 61.8081 60.1213 62.0651 59.8129 62.1679C59.1961 62.3735 58.528 62.5277 57.757 62.5277C57.5514 63.4014 57.1916 64.0696 56.5749 64.635C56.0095 65.1489 55.3414 65.4059 54.6218 65.4059C54.005 65.4059 53.4911 65.2517 53.0285 64.9434C52.5659 64.635 52.2575 64.2238 52.0519 63.7612C51.8464 63.2473 51.6922 62.7333 51.6922 62.1679C51.6922 61.397 51.8464 60.6774 52.1547 60.0606C52.4631 59.4439 52.8743 58.9813 53.3883 58.6215C53.9022 58.2618 54.519 58.1076 55.1358 58.1076C55.9067 58.1076 56.5749 58.3646 57.0374 58.9299C57.5 59.4953 57.8084 60.1634 57.8598 60.9344C58.3224 60.883 58.9391 60.7802 59.6073 60.626C59.7101 60.626 59.7615 60.5746 59.8129 60.5746C60.0185 60.5746 60.1213 60.6774 60.1727 60.7802ZM55.6497 63.4014C55.9067 63.1445 56.0609 62.7333 56.1637 62.2193C55.8553 62.0137 55.5983 61.7053 55.4441 61.3456C55.2899 60.9858 55.1872 60.626 55.1872 60.2148C55.1872 60.0606 55.1872 59.9065 55.2386 59.7009H55.1358C54.7246 59.7009 54.3648 59.9065 54.1078 60.3176C53.8508 60.7288 53.6966 61.2942 53.6966 62.0137C53.6966 62.5791 53.7994 63.0417 54.005 63.2987C54.2106 63.607 54.4676 63.7612 54.776 63.7612C55.1358 63.7612 55.3927 63.6584 55.6497 63.4014Z" fill="#F7B500"/>
                        <path d="M59.2474 64.7892C59.0932 64.378 58.9904 63.7098 58.9904 62.7847C58.9904 61.4484 59.196 60.1634 59.5558 58.9299C59.6586 58.6215 59.8128 58.4159 60.0184 58.2618C60.224 58.1076 60.5324 58.0562 60.8921 58.0562C61.0977 58.0562 61.2519 58.1076 61.3033 58.159C61.4061 58.2104 61.4061 58.3132 61.4061 58.4673C61.4061 58.6215 61.3033 58.9813 61.1491 59.5981C61.0463 60.0092 60.9435 60.369 60.8921 60.6774C60.8407 60.9858 60.7893 61.3456 60.7379 61.8081C61.0977 60.9344 61.4575 60.2148 61.8687 59.6495C62.2798 59.0841 62.691 58.6729 63.1022 58.4673C63.5134 58.2104 63.8732 58.1076 64.2329 58.1076C64.9011 58.1076 65.2609 58.4673 65.2609 59.1355C65.2609 59.5467 65.1581 60.2662 64.9011 61.3456C64.6955 62.2707 64.5927 62.8361 64.5927 63.1445C64.5927 63.5556 64.7469 63.7612 65.0553 63.7612C65.2609 63.7612 65.5179 63.6584 65.7748 63.4014C66.0832 63.1445 66.443 62.7333 66.9056 62.1679C67.0084 62.0137 67.1626 61.9623 67.3167 61.9623C67.4709 61.9623 67.5737 62.0137 67.6251 62.1679C67.6765 62.3221 67.7279 62.4763 67.7279 62.6819C67.7279 63.0931 67.6251 63.4014 67.4195 63.6584C66.957 64.2238 66.4944 64.635 65.9804 64.9947C65.4665 65.3545 64.9011 65.5087 64.2329 65.5087C63.719 65.5087 63.3078 65.3545 63.0508 65.0461C62.7938 64.7378 62.6396 64.2752 62.6396 63.7098C62.6396 63.4014 62.691 62.8875 62.8452 62.1679C62.9994 61.4998 63.0508 61.0886 63.0508 60.8316C63.0508 60.6774 62.9994 60.5746 62.8966 60.5746C62.7424 60.5746 62.5882 60.7288 62.3312 61.0886C62.0743 61.4484 61.8173 61.9109 61.6117 62.4763C61.3547 63.0417 61.1491 63.6584 60.9949 64.2752C60.8921 64.7378 60.7379 65.0975 60.5837 65.2517C60.4296 65.4059 60.1726 65.5087 59.8642 65.5087C59.6586 65.4059 59.4016 65.2003 59.2474 64.7892Z" fill="#F7B500"/>
                        <path d="M73.8956 62.0651C73.9984 62.1679 73.9984 62.3735 73.9984 62.5791C73.9984 62.9903 73.8956 63.2986 73.6901 63.5556C73.3303 64.0182 72.7649 64.4294 72.0454 64.8406C71.3258 65.2517 70.6062 65.4059 69.7839 65.4059C68.7046 65.4059 67.8308 65.0975 67.2654 64.5322C66.6487 63.9668 66.3403 63.1445 66.3403 62.1165C66.3403 61.397 66.4945 60.7288 66.8029 60.112C67.1113 59.4953 67.5224 59.0327 68.0364 58.6215C68.5504 58.2618 69.1671 58.0562 69.8353 58.0562C70.452 58.0562 70.9146 58.2104 71.2744 58.5701C71.6342 58.9299 71.8398 59.3925 71.8398 60.0093C71.8398 60.7288 71.5828 61.3456 71.0688 61.8595C70.5548 62.3735 69.6811 62.7847 68.4476 63.0931C68.7046 63.5556 69.2185 63.8126 69.9381 63.8126C70.4007 63.8126 70.9146 63.6584 71.5314 63.2986C72.1481 62.9389 72.6621 62.5277 73.0733 62.0137C73.1761 61.8595 73.3303 61.8081 73.4845 61.8081C73.6901 61.9109 73.8442 61.9623 73.8956 62.0651ZM68.7046 60.3176C68.4476 60.7802 68.2934 61.2942 68.2934 61.9109V61.9623C68.9101 61.8081 69.3727 61.6026 69.7325 61.2942C70.0923 60.9858 70.2465 60.6774 70.2465 60.2662C70.2465 60.0606 70.1951 59.9065 70.0923 59.8037C69.9895 59.7009 69.8353 59.6495 69.6297 59.6495C69.2699 59.6495 68.9615 59.8551 68.7046 60.3176Z" fill="#F7B500"/>
                        <path d="M78.6755 58.2104C78.7782 58.2618 78.8296 58.3645 78.8296 58.5187C78.8296 58.7757 78.6755 59.6495 78.4185 61.1914C78.1615 62.6305 78.0587 63.5042 78.0073 63.7612C77.6475 66.4339 77.0821 68.5411 76.414 70.083C75.7458 71.6249 74.8207 72.3959 73.7414 72.3959C73.2274 72.3959 72.7648 72.2417 72.4564 71.8819C72.148 71.5735 71.9425 71.111 71.9425 70.597C71.9425 70.1344 72.0453 69.6205 72.2508 69.1065C72.4564 68.5925 72.8676 68.0272 73.4844 67.359C74.1011 66.6908 74.9235 65.9713 76.0542 65.0975L76.1056 64.7378C76.157 64.378 76.2598 63.8126 76.3626 63.0931C76.157 63.8126 75.8486 64.4294 75.4888 64.7892C75.1291 65.2003 74.7179 65.3545 74.3067 65.3545C73.8441 65.3545 73.4844 65.1489 73.176 64.6864C72.8676 64.2238 72.7134 63.7098 72.7134 63.0931C72.7134 62.3221 72.7648 61.6026 72.8676 60.9344C72.9704 60.2662 73.1246 59.5981 73.3816 58.8785C73.4844 58.5701 73.6386 58.3645 73.7928 58.2104C73.9469 58.0562 74.2553 58.0048 74.6665 58.0048C74.8721 58.0048 75.0777 58.0562 75.1291 58.1076C75.2319 58.159 75.2833 58.3131 75.2833 58.4159C75.2833 58.5187 75.2319 58.7757 75.1291 59.2383C75.0263 59.5981 74.9235 59.9579 74.8721 60.2662C74.7693 60.6774 74.7179 61.0886 74.6665 61.4998C74.6151 61.9109 74.5637 62.2193 74.5637 62.4763C74.5637 62.8875 74.6665 63.0417 74.8721 63.0417C75.0263 63.0417 75.2319 62.8875 75.4374 62.5791C75.6944 62.2707 75.9 61.8081 76.157 61.1914C76.414 60.5746 76.671 59.8037 76.928 58.8785C77.0308 58.5701 77.1335 58.3645 77.2877 58.2104C77.4419 58.0562 77.6989 58.0048 78.0587 58.0048C78.4185 58.1076 78.5727 58.159 78.6755 58.2104ZM74.7693 70.0316C75.0777 69.4149 75.386 68.4383 75.7458 67.0506C74.9235 67.7188 74.3581 68.3355 73.9983 68.9009C73.6386 69.4663 73.4844 69.9288 73.4844 70.34C73.4844 70.4942 73.5358 70.6484 73.5872 70.7512C73.6386 70.854 73.7414 70.9054 73.8955 70.9054C74.1525 70.9054 74.4609 70.597 74.7693 70.0316Z" fill="#F7B500"/>
                        <path d="M44.2397 16.5275C41.6698 20.2281 35.091 19.3029 31.5446 16.8359C27.9982 14.3688 29.8485 9.22912 32.4184 5.52854C34.9882 1.82797 41.1045 -0.433495 44.6508 2.03356C48.1972 4.50061 46.8095 12.8269 44.2397 16.5275Z" fill="#FF9853"/>
                        <path d="M44.2397 16.5275C41.6698 20.2281 35.091 19.3029 31.5446 16.8359C27.9982 14.3688 29.8485 9.22912 32.4184 5.52854C34.9882 1.82797 41.1045 -0.433495 44.6508 2.03356C48.1972 4.50061 46.8095 12.8269 44.2397 16.5275Z" stroke="#752F00" stroke-width="2" stroke-miterlimit="10"/>
                        <path d="M71.8911 16.5275C74.461 20.2281 81.0398 19.3029 84.5862 16.8359C88.1325 14.3688 86.2823 9.22912 83.7124 5.52854C81.1426 1.82797 75.0263 -0.433495 71.48 2.03356C67.9336 4.50061 69.3213 12.8269 71.8911 16.5275Z" fill="#FF9853"/>
                        <path d="M71.8911 16.5275C74.461 20.2281 81.0398 19.3029 84.5862 16.8359C88.1325 14.3688 86.2823 9.22912 83.7124 5.52854C81.1426 1.82797 75.0263 -0.433495 71.48 2.03356C67.9336 4.50061 69.3213 12.8269 71.8911 16.5275Z" stroke="#752F00" stroke-width="2" stroke-miterlimit="10"/>
                        <path d="M42.4439 15.2076C44.92 13.0806 45.5177 9.71558 43.7791 7.6917C42.0405 5.66783 38.6238 5.75147 36.1478 7.87853C33.6718 10.0056 33.074 13.3706 34.8126 15.3945C36.5513 17.4183 39.9679 17.3347 42.4439 15.2076Z" fill="#EDC3A4"/>
                        <path d="M82.4404 15.3794C84.1791 13.3555 83.5813 9.99052 81.1053 7.86347C78.6293 5.73641 75.2126 5.65277 73.474 7.67664C71.7354 9.70052 72.3331 13.0655 74.8091 15.1926C77.2852 17.3196 80.7018 17.4033 82.4404 15.3794Z" fill="#EDC3A4"/>
                        <path d="M85.0488 30.2504C85.0488 38.8851 73.4845 46.2349 57.7057 46.2349C41.9268 46.2349 30.8765 40.7354 30.8765 28.6057C30.8765 20.6392 42.2866 3.47266 58.014 3.47266C73.7415 3.47266 85.0488 18.1208 85.0488 30.2504Z" fill="#FF9853"/>
                        <path d="M85.0488 30.2504C85.0488 38.8851 73.4845 46.2349 57.7057 46.2349C41.9268 46.2349 30.8765 40.7354 30.8765 28.6057C30.8765 20.6392 42.2866 3.47266 58.014 3.47266C73.7415 3.47266 85.0488 18.1208 85.0488 30.2504Z" stroke="#752F00" stroke-width="2" stroke-miterlimit="10"/>
                        <path d="M67.9336 31.7923C67.9336 27.6806 63.5135 18.9945 58.1168 18.9945C52.6687 18.9945 48.3 27.6806 48.3 31.7923C48.3 35.9041 52.5659 37.703 58.014 37.703C63.4107 37.7544 67.9336 35.9041 67.9336 31.7923Z" fill="#EDC3A4"/>
                        <path d="M70.5035 24.3398C71.6673 24.3398 72.6107 23.5804 72.6107 22.6437C72.6107 21.707 71.6673 20.9476 70.5035 20.9476C69.3396 20.9476 68.3962 21.707 68.3962 22.6437C68.3962 23.5804 69.3396 24.3398 70.5035 24.3398Z" fill="#313131"/>
                        <path d="M45.0621 24.3398C46.226 24.3398 47.1694 23.5804 47.1694 22.6437C47.1694 21.707 46.226 20.9476 45.0621 20.9476C43.8983 20.9476 42.9549 21.707 42.9549 22.6437C42.9549 23.5804 43.8983 24.3398 45.0621 24.3398Z" fill="#313131"/>
                        <path d="M61.0978 23.5689C61.0978 24.2884 59.6587 25.8303 57.9626 25.8303C56.2151 25.8303 54.8274 24.237 54.8274 23.5689C54.8274 22.8493 56.2665 22.2839 57.9626 22.2839C59.7101 22.2839 61.0978 22.8493 61.0978 23.5689Z" fill="#313131"/>
                        <path d="M57.9626 24.6996C57.7056 24.6996 57.5 24.9052 57.5 25.1622V29.2739C57.5 29.5309 57.7056 29.7365 57.9626 29.7365C58.2196 29.7365 58.4252 29.5309 58.4252 29.2739V25.1622C58.4252 24.9052 58.2196 24.6996 57.9626 24.6996Z" fill="#313131"/>
                        <path d="M41.8754 29.0683C43.2663 29.0683 44.3939 28.5161 44.3939 27.8348C44.3939 27.1535 43.2663 26.6013 41.8754 26.6013C40.4845 26.6013 39.357 27.1535 39.357 27.8348C39.357 28.5161 40.4845 29.0683 41.8754 29.0683Z" fill="#EDC3A4"/>
                        <path d="M73.536 29.0683C74.9269 29.0683 76.0544 28.5161 76.0544 27.8348C76.0544 27.1535 74.9269 26.6013 73.536 26.6013C72.1451 26.6013 71.0175 27.1535 71.0175 27.8348C71.0175 28.5161 72.1451 29.0683 73.536 29.0683Z" fill="#EDC3A4"/>
                        <path d="M38.2039 48.8054C42.4901 48.7828 45.9521 46.3483 45.9363 43.3678C45.9206 40.3873 42.4332 37.9895 38.147 38.0121C33.8607 38.0347 30.3988 40.4692 30.4145 43.4497C30.4302 46.4302 33.9176 48.828 38.2039 48.8054Z" fill="#FF9853" stroke="#752F00" stroke-width="2" stroke-miterlimit="10"/>
                        <path d="M35.0397 43.0483C34.8855 43.2539 33.9089 44.5388 34.3201 45.9779C34.8855 48.1366 37.7637 48.3936 37.9693 48.4449C39.1514 48.5477 41.4643 48.2908 42.1838 46.4919C42.6464 45.3097 42.2352 43.8706 41.2073 42.7913" stroke="#752F00" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M75.7242 48.6512C80.0105 48.6286 83.4724 46.1941 83.4567 43.2136C83.441 40.2331 79.9536 37.8353 75.6673 37.8579C71.3811 37.8805 67.9191 40.315 67.9348 43.2955C67.9506 46.276 71.438 48.6738 75.7242 48.6512Z" fill="#FF9853" stroke="#752F00" stroke-width="2" stroke-miterlimit="10"/>
                        <path d="M72.5594 42.8941C72.4052 43.0997 71.4287 44.3846 71.8398 45.8237C72.4052 47.9824 75.2834 48.2394 75.489 48.2908C76.6711 48.3936 78.984 48.1366 79.7036 46.3377C80.1661 45.1555 79.7549 43.7164 78.727 42.6371" stroke="#752F00" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>

                </a>
                <nav class="site-header__content--nav site-navigation site-navigation__desktop">
<!--                    <a class="site-navigation__item has-children">-->
<!--                        <span class="site-navigation__item--text">Kategorie</span>-->
<!--                        <svg class="site-navigation__item--caret" width="16" height="9" viewBox="0 0 16 9" fill="none" xmlns="http://www.w3.org/2000/svg">-->
<!--                            <path d="M7.90123 4.5L12.4593 0.542713C13.2693 -0.180906 14.5825 -0.180906 15.3925 0.542712C16.2025 1.26633 16.2025 2.43955 15.3925 3.16317L9.46659 8.45729C8.65662 9.18091 7.34338 9.18091 6.53341 8.45729L0.607482 3.16317C-0.202494 2.43955 -0.202494 1.26633 0.607482 0.542714C1.41746 -0.180905 2.73069 -0.180905 3.54067 0.542713L7.90123 4.5Z" fill="#F7B500"/>-->
<!--                        </svg>-->
<!--                    </a>-->
                    <a href="http://localhost/honey/sklep/" class="site-navigation__item">
                        <span class="site-navigation__item--text">Sklep</span>
                    </a>
                    <a href="<?php echo home_url().'/forum/honey-forum/' ?>" class="site-navigation__item">
                        <span class="site-naviagtion__item--text">Forum</span>
                    </a>
                    <a href="<?php echo home_url().'/o-nas/' ?>" class="site-navigation__item">
                        <span class="site-naviagtion__item--text">O nas</span>
                    </a>
                    <a href="<?php echo home_url().'/kontakt'; ?>" class="site-navigation__item">
                        <span class="site-navigation__item--text">Kontakt</span>
                    </a>
                    <a href="<?php echo home_url(); ?>" class="site-navigation__item">
                        <span class="site-navigation__item--text">Home</span>
                    </a>
                </nav>
            </div>
            <div class="site-header__content--right">
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
                    <a href="<?php echo home_url('/moje-konto') ?>" class="user-buttons__btn user-buttons__btn--profile" id="myProfile">
                        <?php
                        $changed_orders = wc_get_orders( array( 'status_changed' => 'changed' ) );
                        $changed_orders_amount = sizeof($changed_orders);
                        if ($changed_orders_amount !== 0) :
                        ?>
                        <div class="user-buttons__btn--notifier">
                            <?php echo $changed_orders_amount ?>
                        </div>
                        <?php endif; ?>
                        <svg class="user-buttons__btn--icon" width="49" height="46" viewBox="0 0 49 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M31.5542 24.3505C33.5109 22.8833 34.9391 20.8713 35.6401 18.5945C36.3412 16.3176 36.2802 13.8891 35.4656 11.6468C34.651 9.40453 33.1234 7.45998 31.0953 6.08369C29.0672 4.7074 26.6394 3.9678 24.1497 3.9678C21.66 3.9678 19.2323 4.7074 17.2041 6.08369C15.176 7.45998 13.6484 9.40453 12.8339 11.6468C12.0193 13.8891 11.9583 16.3176 12.6593 18.5945C13.3604 20.8713 14.7886 22.8833 16.7452 24.3505C13.3924 25.6308 10.467 27.7542 8.28076 30.4944C6.09455 33.2346 4.72954 36.4889 4.33125 39.9103C4.30242 40.1601 4.3255 40.4129 4.39916 40.6542C4.47282 40.8955 4.59563 41.1206 4.76058 41.3167C5.09369 41.7126 5.57821 41.9662 6.10753 42.0217C6.63686 42.0772 7.16763 41.93 7.58309 41.6126C7.99855 41.2951 8.26466 40.8333 8.32289 40.3288C8.76114 36.6104 10.6214 33.1763 13.5484 30.6825C16.4753 28.1887 20.2637 26.8101 24.1897 26.8101C28.1156 26.8101 31.904 28.1887 34.8309 30.6825C37.7579 33.1763 39.6182 36.6104 40.0564 40.3288C40.1107 40.7962 40.3447 41.2279 40.7132 41.5405C41.0818 41.8532 41.5588 42.0246 42.0522 42.0217H42.2718C42.7949 41.9644 43.2731 41.7122 43.6021 41.3203C43.9311 40.9284 44.0842 40.4284 44.0281 39.9293C43.6279 36.4982 42.2556 33.2356 40.0581 30.4911C37.8607 27.7467 34.921 25.624 31.5542 24.3505ZM24.1497 23C22.5708 23 21.0273 22.5538 19.7145 21.7177C18.4016 20.8816 17.3784 19.6933 16.7741 18.303C16.1699 16.9127 16.0118 15.3829 16.3199 13.9069C16.6279 12.431 17.3882 11.0752 18.5047 10.0111C19.6212 8.94705 21.0437 8.22239 22.5923 7.92881C24.1409 7.63522 25.746 7.7859 27.2048 8.36178C28.6636 8.93767 29.9104 9.91289 30.7876 11.1641C31.6648 12.4154 32.133 13.8864 32.133 15.3913C32.133 17.4093 31.2919 19.3446 29.7948 20.7715C28.2976 22.1984 26.267 23 24.1497 23Z" fill="#AA2800"/>
                        </svg>
                    </a>
                    <a href="<?php echo home_url().'/lista-zyczen' ?>" class="user-buttons__btn user-buttons__btn--whishlist" id="myWishlist">
                        <div class="user-buttons__btn--notifier">
                            <?php echo do_shortcode('[ti_wishlist_products_counter]') ?>
                        </div>
                        <svg class="user-buttons__btn--icon" width="48" height="46" viewBox="0 0 48 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M40.3351 9.68478C38.2195 7.66316 35.4151 6.42929 32.4284 6.20603C29.4417 5.98277 26.4697 6.78485 24.0493 8.46739C21.5099 6.66724 18.3492 5.85097 15.2036 6.18295C12.0581 6.51493 9.16134 7.9705 7.09673 10.2565C5.03212 12.5426 3.95301 15.4893 4.07671 18.5033C4.20041 21.5173 5.51772 24.3746 7.76338 26.5L20.1574 38.3315C21.1953 39.305 22.5931 39.8506 24.0493 39.8506C25.5054 39.8506 26.9033 39.305 27.9411 38.3315L40.3351 26.5C42.6654 24.2654 43.9734 21.2429 43.9734 18.0924C43.9734 14.9419 42.6654 11.9193 40.3351 9.68478V9.68478ZM37.521 23.875L25.127 35.6875C24.986 35.8232 24.8181 35.931 24.6331 36.0045C24.4481 36.078 24.2497 36.1159 24.0493 36.1159C23.8488 36.1159 23.6504 36.078 23.4654 36.0045C23.2804 35.931 23.1126 35.8232 22.9715 35.6875L10.5775 23.8179C9.01228 22.293 8.13582 20.2446 8.13582 18.1114C8.13582 15.9782 9.01228 13.9298 10.5775 12.4049C12.1725 10.904 14.3236 10.0625 16.5649 10.0625C18.8063 10.0625 20.9574 10.904 22.5524 12.4049C22.7379 12.5832 22.9587 12.7247 23.2019 12.8213C23.4451 12.9178 23.706 12.9675 23.9694 12.9675C24.2329 12.9675 24.4938 12.9178 24.737 12.8213C24.9802 12.7247 25.2009 12.5832 25.3865 12.4049C26.9814 10.904 29.1326 10.0625 31.3739 10.0625C33.6153 10.0625 35.7664 10.904 37.3614 12.4049C38.9481 13.9098 39.8533 15.9471 39.8832 18.0804C39.913 20.2137 39.0651 22.2732 37.521 23.8179V23.875Z" fill="white"/>
                        </svg>
                    </a>
                    <a href="<?php echo home_url('/koszyk') ?>" class="user-buttons__btn user-buttons__btn--cart" id="myCart">
                        <div class="user-buttons__btn--notifier" id="inMyCart"><?php echo WC()->cart->get_cart_contents_count(); ?></div>
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