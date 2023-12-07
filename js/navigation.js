const themeBtnEl = document.querySelector( '.switch-theme' );
const body = document.querySelector( 'body' );

document.addEventListener( 'DOMContentLoaded', function() {
    AOS.init();

    themeBtnEl.addEventListener( 'click', () => {
      body.classList.toggle('active');
      themeBtnEl.classList.toggle('active');
      const theme = body.classList.contains('active') ? 'active' : '';
      sessionStorage.setItem('theme', theme);
    });

    const actualPosition = document.querySelector( '.text--with-btn .actual-position' );
    const buttonSticky = document.querySelector( '.text--with-btn .button--sticky' );
    const innerHeight = window.innerHeight - 130;

    if (actualPosition && buttonSticky) {
      buttonSticky.classList.add('button--active');

      window.addEventListener('scroll', ()=> {
        if (actualPosition.getBoundingClientRect().y < innerHeight) {
          buttonSticky.classList.remove('button--active')
        } else {
          buttonSticky.classList.add('button--active')
        }
      })
    }

var textarea = document.querySelector('.textarea');
  // Set the initial height
  textarea.addEventListener('input', function() {
    autoExpand(textarea);
  });

  autoExpand(textarea)

  function autoExpand(textarea) {
    // Reset the height to 0 to properly calculate scrollHeight
    textarea.style.height = '0px';

    // Set the minimum height
    var minHeight = 60;

    // Calculate the new height based on content
    var newHeight = Math.max(minHeight, textarea.scrollHeight);

    // Apply the new height
    textarea.style.height = newHeight + 10 + 'px';
  }
})

