export default function manageSeachInput(searchBtn : HTMLElement){

    let searchInput = document.getElementById('searchInput');
    let overlay = document.querySelector('.page-overlay') as HTMLElement;
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

}