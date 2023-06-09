let pageName = document.querySelector('[data-barba=container]');
let preLoad = document.querySelectorAll('.pre-load > div:not(:last-child)');
let header = document.querySelector('header')


const runScripts = () => {
  setTimeout(() => {
    moreAnchors();
  }, 3000);
}

runScripts();

const moreAnchors = () => {
  let allAnchors = [];
  let cursor = document.querySelector('.cursor');
  let newAnchors = Array.prototype.slice.call(document.querySelectorAll('.anchors'));
  let newA = Array.prototype.slice.call(document.querySelectorAll('a'));
  anchors = allAnchors.concat(newAnchors);
  anchors = allAnchors.concat(newA);

  let xLocation;
  let yLocation;

  const hoverCursor = () => {
    cursor.classList.add('is-hover');
  };

  const removeHoverCursor = () => {
    cursor.classList.remove('is-hover');
    cursor.classList.remove('is-shop');
    cursor.classList.remove('add-cart');
  };

  anchors.forEach((anchor) => {
    anchor.addEventListener('mouseover', () => {
        hoverCursor();
    });
  });

  anchors.forEach((anchor) => {
    anchor.addEventListener('mouseleave', () => {
      removeHoverCursor();
    });
  });


  const moveCursor = (x, y) => {
    cursor.style.top = y + 'px';
    cursor.style.left = x + 'px';
  };

  document.addEventListener('mousemove', (event) => {
    moveCursor(event.pageX, event.pageY);
    xLocation = event.pageX;
    yLocation = event.pageY;

  });

  document.addEventListener('scroll', (event) => {
    console.log(xLocation, yLocation, 'scroll')
    moveCursor(xLocation, yLocation);
  });


};

const expertise = (expertise) => {
  expertise.forEach((e) => {
    e.addEventListener('mouseenter', () => {
      expertise.forEach((element) => {
        if (element !== e) {
          element.classList.add('not-active');
        }
      });
      e.classList.remove('not-active');
    });
  
    e.addEventListener('mouseleave', () => {
      expertise.forEach((element) => {
        element.classList.add('not-active');
      });
    });
  });
}



expertise(document.querySelectorAll('.expertise'));

const menuScroll = ()=> {
    let header = document.querySelector('header');
    let prevScroll = 0;
    document.addEventListener('scroll', () => {
      const currentScroll = window.pageYOffset;
  
      if (currentScroll < 100) {
        header.classList.remove('scrolled');
      } else if (currentScroll > 100 && prevScroll < currentScroll) {
        header.classList.add('scrolled');
      } else if (prevScroll - 15 > currentScroll) {
        // header.classList.remove('scrolled');
      }
  
      prevScroll = currentScroll;
    });
}
  
menuScroll();