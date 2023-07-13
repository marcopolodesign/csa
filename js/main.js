let pageName = document.querySelector('[data-barba=container]');
let preLoad = document.querySelectorAll('.pre-load > div:not(:last-child)');
let header = document.querySelector('header')
let preloaderCaption = document.querySelector('.pre-load div > span');
let loadingCaption = document.querySelector('.pre-load div p');
let menuTl;
let menu;



const runScripts = () => {
  setTimeout(() => {
    moreAnchors();
  }, 3000);


  const animatePosts = () => {

    let posts = document.querySelectorAll('.reusable-content > div');

    const observer = new IntersectionObserver(
      (entries) => {
        entries.forEach((entry) => {
          if (entry.intersectionRatio >= 0.13) {
            entry.target.classList.add('in-view');
          } else {
            entry.target.classList.remove('in-view');
          }
        });
      },
      {
        threshold: [0, 0.2, 1],
      }
    );

    posts.forEach((post) => {
      observer.observe(post);
    });
  }

  const animateNumber = (targetElements, duration = 1000) => {
    const frameDuration = 1000 / 60; // Assuming 60 frames per second
  
    targetElements.forEach((targetElement) => {
      const startNumber = 0;
      const targetNumber = parseFloat(targetElement.innerHTML);
      const difference = Math.abs(targetNumber - startNumber);
      const animationDuration = Math.min(duration, Math.max(500, difference * (duration / 100))); // Adjust the min and max duration as needed
  
      const totalFrames = Math.round(animationDuration / frameDuration);
      const increment = (targetNumber - startNumber) / totalFrames;
  
      let currentNumber = startNumber;
      let frame = 0;
  
      const animate = () => {
        currentNumber += increment;
        targetElement.innerHTML = Math.round(currentNumber);
  
        frame++;
        if (frame < totalFrames) {
          requestAnimationFrame(animate);
        }
      };
  
      // Intersection Observer configuration
      const observerConfig = {
        root: null, // Use the viewport as the root
        threshold: 0.2, // Trigger animation when at least 20% of the element is visible
      };
  
      const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            observer.unobserve(entry.target);
            animate();
          }
        });
      }, observerConfig);
  
      // Start observing the target element
      observer.observe(targetElement);
    });
  };
  
  
  const targetElements = Array.from(document.querySelectorAll('.animate-number'));
  const duration = 3000;

  animateNumber(targetElements, duration);

  if (!/Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent)) {
    animatePosts();
  }
  
}

runScripts();

const moreAnchors = () => {
  let anchors = Array.prototype.slice.call(document.querySelectorAll('.anchors, a'));
  let cursor = document.querySelector('.cursor');
  cursor.classList.remove('dn');
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
  
    anchor.addEventListener('mouseleave', () => {
      removeHoverCursor();
    });
  });

  let distanceFromTop = 0;
  
  const moveCursor = (x, y) => {
    cursor.style.top = y + 'px';
    cursor.style.left = x + 'px';
  
    // Calculate the distance between cursor and top of the screen
    distanceFromTop = y - window.pageYOffset;
    
  };
  
  document.addEventListener('mousemove', (event) => {
    moveCursor(event.pageX, event.pageY);
    xLocation = event.pageX;
    yLocation = event.pageY;
  });
  
  document.addEventListener('scroll', (event) => {
    moveCursor(xLocation, distanceFromTop + window.pageYOffset);
  });

};

const expertise = (expertise) => {
  if (!/Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent)) {
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

    let headerColor = pageName.getAttribute('data-header-color');

    header.classList.add(headerColor);
}
  
menuScroll();

const faqQuestions = () => {

  const faq = document.querySelectorAll('.faq-item');  
  faq.forEach(q => {
    let isExpanded = q.getAttribute('area-expanded');
    q.addEventListener('click', (e)=> {
      let answer = q.querySelector('.faq-answer');
      let answerContent = answer.querySelector('p');
      let arrow = q.querySelector('svg');

      let height = answer.querySelector('p').clientHeight ;   

      let faq = gsap.timeline({
        defaults: {
          easing: Expo.EaseOut,
          duration: 0.2,
        },
      })

      if (!isExpanded) {
        faq
        // .to(arrow, {transform: 'rotate(-90deg)'})
        .to (answer, { opacity: 0})  
        .to (answerContent, {marginTop: '0px', marginBottom: "0px"}, 0)
        .to (answer, {maxHeight: "0", opacity: 0}, 0.05)
      

          isExpanded = true;  
      } else {
        faq
        // .to(arrow, {transform: 'rotate(0deg)'})
        .to (answer, {maxHeight: height})
        .to (answer, { opacity: 1}, 0)
        .to (answerContent, {marginTop: '10px', marginBottom: "10px"}, 0)
        isExpanded = false;  
      }          
      q.setAttribute('area-expanded', !isExpanded);

    })
  })
}

faqQuestions();

barba.init({
  timeout: 3000,
  prevent: ({ el }) => el.classList.contains('barba-prevent'),
  transitions: [
    {
      leave({ current, next, trigger }) {
       
        header.classList.remove('scrolled');
        header.classList.add('loading');
        document.querySelector("header").classList.remove('menu-open')

        if (/Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent)) {
        // menuTL.reverse();
        
        setTimeout(() => {
          // menu.classList.add('o-0');
          // menu.classList.add('pointers-none');
        }, 1200);

      }
        return new Promise((resolve) => {

          // Set Pre Loader Defaults

          // randomPhrases();
        
          const loadEnter = gsap.timeline({
            defaults: {
              ease: "power4.inOut",
              duration: 0.8
            },
            onComplete() {
              current.container.remove();
              resolve();
            },
          }) 
          // Animate Pre Load
          loadEnter
          .call (()=> {
              // loadingCaption.innerHTML = originalCaption;
          })
          .set(loadingCaption, {opacity: 0})
          .set(preloaderCaption, {y: "120%"})
          .set(preLoad,{ y: "110%"})
          .to(preLoad,{ y: "0%", stagger: 0.05})
          .to(preloaderCaption, {y: "0%"},0.2)
          .to(loadingCaption, {opacity: 1}, 0.2)

        });
      },
      afterEnter({ current, next, trigger }) {
        return new Promise((resolve) => {
          window.scrollTo({
            top: 0,
          });
          runScripts();
          const loadLeave = gsap.timeline({
            onComplete() {
              resolve();
              header.classList.remove('loading');
              // header.classList.add('scrolled');

            },
            defaults: {
              duration: .8,
              ease: Expo.easeOut,
              delay: 2
            },
          });

          loadLeave
      
          .to(loadingCaption, {opacity: 0})
          .to(preloaderCaption, {y: "-130%"},0.4)    
          .call (()=> {
            // loadingCaption.innerHTML = "Loaded!"
        })
          .to(preLoad,{ y: "-110%", stagger: 0.05}, 0.4)
        });
      },
    },

  ],
  views: [ {
    namespace: 'home',
    afterEnter() {
      homePhrase()
    }
  }
  ],
  debug: true,
});


const randomPhrases = () => {

  let phrases = [
    'Our chief aim is to improve the lives of others and enable greatness in everyone and everything we touch.',
    'We are best in the world at using innovation and disruptive new models to build personal and lifestyle brands',
    'We are a purpose driven organization that looks to lead with compassion not judgment, humility not ego, and love not fear.'
  ]
  let n = Math.floor(Math.random() * (phrases.length))
  preloaderCaption.innerHTML = phrases[n];
}

const homePhrase = () => {

  let phrase = document.querySelector('h1.typeit span');
  let phraseStarter = phrase.innerHTML;

  var typewriter = new Typewriter(phrase, {
    loop: true
});

typewriter
    .typeString(phraseStarter)
    .pauseFor(3000)
    .deleteAll()
    .typeString('lasting prosperity')
    .pauseFor(3000)
    .deleteAll()
    .typeString('community prosperity')
    .pauseFor(3000)
    .deleteAll()
    .start();
}


const animatePreLoader = () => {

  // randomPhrases();
  const preloadTl = gsap.timeline({
    defaults: {
      ease: "power4.inOut",
      duration: 0.8
    }
  }) 

    let t;
    if (!/Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent)) { 
      t = '-130%';
    } else {
      t = "-190%";
    }

  preloadTl
  .call (()=> {
      // loadingCaption.innerHTML = "Loaded!"
  })
  .to(loadingCaption, {opacity: 0})
  .to(preloaderCaption, {y: t},0.4)
  .to(preLoad,{ y: "-110%", stagger: 0.05}, 0.4)


  preloadTl.paused(true);


    window.addEventListener('load', (event) => {
     preloadTl.play();
    })
}

animatePreLoader();


const contact = () => {
  let hrefs = document.querySelectorAll('a');
  hrefs.forEach((a) => {
    if (a.href.indexOf('#contact') > -1) {
      a.classList.add('barba-prevent');
      // console.log(a)
      a.addEventListener('click', (e) => {
        e.preventDefault();

        let timeline = gsap.timeline({
          defaults: {
            ease: Expo.easeOut,
            duration: 0.7,
          },
        });

        timeline
          .set(container, { pointerEvents: 'all', opacity: 1 })
          .set(contact, { x: '100%' })
          .set(bg, { opacity: 0 })
          .to(contact, { x: '0' }, 0)
          .to(bg, { opacity: 1 }, 0.4);
      });
    }
  });
  let close = document.querySelector('#close-contact');
  let bg = document.querySelector('.contact-bg');
  let contact = document.querySelector('.contact-content');
  let container = document.querySelector('.contact-form-container');

  close.addEventListener('click', () => {
    let timeline = gsap.timeline({
      defaults: {
        ease: Expo.easeOut,
        duration: 0.5,
      },
    });

    timeline
      .set(container, { pointerEvents: 'none' })
      .to(contact, { x: '100%' })
      .to(bg, { opacity: 0 }, 0);
  });
};

contact();
