document.addEventListener('DOMContentLoaded', () => {
    const simpleTestButton = document.querySelectorAll('.js-simple-test-starter');
    simpleTestButton.forEach((item) => {
        item.addEventListener('click', () => {
            //$.fancybox.close();
            $.fancybox.open({
                src: '#vf-popup', 
                type : 'inline',
                "touch":false
            });   

        });
    });


  
});