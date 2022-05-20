export default function manageSeachInput(searchBtn : HTMLElement){

    let searchInput = document.getElementById('searchInput');
    let addCartPopup = document.querySelector('.added-to-cart-popup');
    let overlay = document.querySelector('.page-overlay');
    searchBtn.addEventListener('click', e => {
        if (e.target == e.currentTarget){
            e.preventDefault();
            let btn = e.currentTarget as Element;
            btn.classList.toggle('unfold');
            searchInput.focus();
        }
    })

    searchInput.addEventListener('input', e => {
        if ((e.currentTarget as HTMLInputElement).value.length>0){
            searchBtn.classList.add('show-results');
            overlay.classList.add('active');
        }
        else {
            searchBtn.classList.remove('show-results');
            overlay.classList.remove('active');
        }
    })

    searchInput.addEventListener('focusout', () => {
        searchBtn.classList.remove('show-results');
        overlay.classList.remove('active');
    })

    //After WC Ajax add to cart
    document.addEventListener('vanilla_added_to_cart', () => {
        overlay.classList.add('active');
        addCartPopup.classList.add('show');
        document.querySelector('.add_to_cart_button').innerHTML="Kup jeszcze raz";

    })
    // After WC Ajax adding to cart
    document.addEventListener('vanilla_adding_to_cart', () => {
        document.querySelector('.add_to_cart_button').innerHTML = "Dodaję produkt..."
    })
    //Overlay click
    window.addEventListener('click', e =>{
        if (!searchBtn.contains(e.target as Node) || !addCartPopup.contains(e.target as Node)){
            searchBtn.classList.remove('unfold')
            addCartPopup.classList.remove('show')
            overlay.classList.remove('active')
        }
    })
    // Continue shopping
    document.querySelector('.continue-shopping').addEventListener('click', (e) =>{
        e.preventDefault();
        (overlay as HTMLElement).click();
    })
}