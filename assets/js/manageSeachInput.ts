export default function manageSeachInput(searchBtn: HTMLElement) {

    let searchInput = document.getElementById('searchInput');
    let addCartPopup = document.querySelector('.added-to-cart-popup');
    let overlay = document.querySelector('.page-overlay');
    let searchResultsHtml = document.querySelector('.search-results');

    searchBtn.addEventListener('click', e => {
        console.log(searchBtn);
        if (e.target == e.currentTarget) {
            let btn = e.currentTarget as Element;
            searchBtn.classList.toggle('unfold');
            overlay.classList.add('active');
            searchInput.focus();
        }
    })

    searchInput.addEventListener('input', e => {
        if ((e.currentTarget as HTMLInputElement).value.length > 0) {
            searchBtn.classList.add('show-results');
            overlay.classList.add('active');
        } else {
            searchBtn.classList.remove('show-results');
            overlay.classList.remove('active');
        }


    })

    searchInput.addEventListener('keyup', (e)=>{
        searchResultsHtml.innerHTML = '<div class="lds-ellipsis"><div></div><div></div><div></div><div></div></div>'
        let data = e.currentTarget as HTMLInputElement;
        setTimeout(()=>{
            ajaxSearch(data.value)
        }, 1000)
    })

    searchInput.addEventListener('focusout', () => {
        searchBtn.classList.remove('show-results');
        overlay.classList.remove('active');
    })

    //After WC Ajax add to cart
    document.addEventListener('vanilla_added_to_cart', () => {
        overlay.classList.add('active');
        addCartPopup.classList.add('show');
        document.querySelector('.add_to_cart_button').innerHTML = "Kup jeszcze raz";
        let itemsInCart = parseInt(document.getElementById('inMyCart').innerHTML);
        itemsInCart++;
        document.getElementById('inMyCart').innerHTML = '' + itemsInCart;

    })
    // After WC Ajax adding to cart
    document.addEventListener('vanilla_adding_to_cart', () => {
        document.querySelector('.add_to_cart_button').innerHTML = "Dodaję produkt..."
    })
    //Overlay click
    window.addEventListener('click', e => {
        if (!searchBtn.contains(e.target as Node)) {
            searchBtn.classList.remove('unfold')
            addCartPopup.classList.remove('show')
            overlay.classList.remove('active')
        }
    })
    // Continue shopping
    document.querySelector('.continue-shopping').addEventListener('click', (e) => {
        e.preventDefault();
        (overlay as HTMLElement).click();
    })
    // Cart Button
    // Ajax Search
    function ajaxSearch(keyword) {
        let url = "http://localhost/honey/wp-admin/admin-ajax.php";
        const data = new FormData();
        data.append('action', 'data_fetch');
        data.append('search', keyword);
        fetch(url, {
            method: "POST",
            credentials: 'same-origin',
            body: data
        })
            .then((response) => response.text())
            .then((data) => {
                if (data) {
                    console.log(data)
                    ajaxSearchResults(JSON.parse(data), keyword)
                }
            })
            .catch((error) => {
                console.log(error);
            })
    }

    function ajaxSearchResults(result, keyword) {
        searchResultsHtml.innerHTML = '';
        for (let item of result) {
            let itemHtml = '' +
                '<a href="'+item['Link']+'" class="search-results__item">' +
                '<div class="search-results__item--name">' +
                item['Title'] +
                '</div>' +
                '<div class="search-results__item--price">' +
                item['Price'] +'zł' +
                '</div>' +
                '</a>';
            searchResultsHtml.innerHTML+=itemHtml;
        }
        searchResultsHtml.innerHTML+= '<a class="other-results" href="http://localhost/honey/sklep?s='+keyword+'">Inne Wyniki</a>';
    }
}