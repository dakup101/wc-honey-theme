import Swiper, {Navigation} from 'swiper';
import 'swiper/css';
import 'swiper/css/navigation'

export default function hero(){
    console.log('--- HERO loaded ---');
    const swiper = new Swiper('.swiper', {
        loop: true,
        modules: [Navigation],
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
          },

    });
}

