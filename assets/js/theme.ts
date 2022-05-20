console.log('--- Loaded ---')
let localhost = true;
const view = helper(localhost);
console.log('Current View:' + view)


// Global Scripts
window.addEventListener('DOMContentLoaded', () => {
    console.log('---- Rendered ---')
    // Event For Search Button
    const searchBtn =document.getElementById('searchBtn');
    import(/* webpackChunkName: "manageSeachInput" */ './manageSeachInput').then(
        module => {
            const action = module.default;
            action(searchBtn);
        }
    );
    //Remove classes form elements on clicked outside them

    switch (view) {
        case '/':
            import(/* webpackChunkName: "hero" */ './hero').then(
                module => {
                    const action = module.default;
                    action();
                }
            );
            break;
    }


});

//Load Scripts on Demand (depending on view)
function helper(isProd : boolean){
    let currentUrl = window.location.href;
    let baseUrl = window.location.origin;
    if (isProd) baseUrl+='/honey';
    return currentUrl.replace(baseUrl, '');
}