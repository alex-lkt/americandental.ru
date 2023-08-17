import SimpleTest from './SimpleTest.js';

const questions = [
{
  question: 'Сколько зубов вы хотите восстановить?',
  answers: [
  '1',
  '2-4',      
  '5-10',
  'Более 10',
  'Всю челюсть',
  'Обе челюсти'
  ]
},
{
  question: 'Какие зубы необходимо восстановить?',
  answers: [
  'Одна челюсть',
  'Две челюсти',
  'Отдельные зубы'
  ]
},
{
  question: 'Каким способом?',
  answers: [
  'Отложенная имплантация зубов 3-6 месяцев',
  'Одномоментная имплантация',
  'All on 4',
  'All on 6',
  'Скуловая имплантация',
  'Гибридная имплантация All on 4 / Скуловая имплантация',
  'Quadro Zygoma - 4 скуловых имплантата'
  ]

},
{
  question: 'Когда планируете начать лечение?',
  answers: [
  'Как можно быстрее',
  'В ближайшие 2 недели',
  'В ближайшие месяцы',
  'Через полгода и позже'
  ]
}
];

const beenOpened = localStorage.getItem('simpleTestOpened');
let simpleTestTimeout = false;
if(beenOpened !== 'true') {
  const simpleTestTimeout = setTimeout(() => {
    localStorage.setItem('simpleTestOpened', 'true');
    $.fancybox.open({
      src  : '#simple-test-annoying',
      type : 'inline',
      "touch": false,
      afterClose: () => {
            // ставим таймер, чтобы через 20 сек еще раз открылся
            /*
            setTimeout(() => {
                $.fancybox.open({
                    src  : '#simple-test-annoying',
                    type : 'inline',
                    "touch": false
                  }); 
                }, 20000);*/
              }
            }); 
  }, 10000);
}
document.addEventListener('DOMContentLoaded', () => {
  const simpleTestButton = document.querySelectorAll('.js-simple-test-starter');
  simpleTestButton.forEach((item) => {
   item.addEventListener('click', () => {
    clearTimeout(simpleTestTimeout);
    $.fancybox.close();
    simpleTest.startTesting();
    $.fancybox.open({
      src  : '#simple-test',
      type : 'inline',
      "touch": false
    });   

  });
 });

//  const simpleTestButton1 = document.querySelectorAll('.btn-page');
//   simpleTestButton1.forEach((item) => {
//    item.addEventListener('click', () => {
//     //clearTimeout(simpleTestTimeout);
//     $.fancybox.close();
//     //simpleTest.startTesting();
//     ym(56550514,'reachGoal','bespl_consultazia');
//     $.fancybox.open({ // FancyBox 3
//       src: '#vf-popup', 
//       type : 'inline',
//       "touch":false
//     });   

//   });
//  });


  const simpleTest = new SimpleTest({
    questions: questions,
    container: '.simple-test',
    onFinish: (result) => {


      ym(56550514,'reachGoal','QIUZ_DONE');

      const resText = result.reduce((res, item) => {
        res += item.question + '\n' + item.answer + '\n\n';
        return res;
      }, '');
      document.querySelector('.vf-popup__hdr').textContent = 'Получить индивидуальное предложение со скидкой';
      document.querySelector('#vf-popup__message').value = resText;
      $.fancybox.close();
      ym(56550514,'reachGoal','kviz_proyden');
      $.fancybox.open({ // FancyBox 3
        src: '#vf-popup', 
        type : 'inline',
        "touch":false
      });
    }
  });

  simpleTest.init();





  
});
