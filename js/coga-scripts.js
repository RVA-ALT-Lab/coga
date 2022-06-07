window.onload = function() {
  aud_monitoring();
  aud_peers();
  aud_marriage();
  aud_neighborhood();
}
function aud_monitoring(){
  if(document.getElementById('high-monitor')){
    const highM = document.getElementById('high-monitor');
    const lowM = document.getElementById('low-monitor');

    highM.addEventListener("click", showHighData);
    lowM.addEventListener("click", showLowData);


    function showHighData(){
      let genes = document.getElementById('genes');
      let env = document.getElementById('env');
      let details = document.getElementById('data-details');
      let holder = document.getElementById('parent-data-holder');
      genes.style.width = '20%';
      genes.style.opacity = '100%';
      env.style.width = '60%';
      env.style.opacity = '100%';

      details.innerHTML = "<p>When parents pay close attention to their children’s whereabouts and activities, environment becomes a bigger factor in whether or not they are smoking or drinking.</p>";
      lowM.classList.remove('active');
      lowM.classList.add('inactive');
      highM.classList.add('active');
      highM.classList.remove('inactive');
      holder.classList.add('show');
    }

    function showLowData(){
      let genes = document.getElementById('genes');
      let env = document.getElementById('env');
      let details = document.getElementById('data-details')
      genes.style.width = '70%';
      genes.style.opacity = '100%';
      env.style.width = '20%';
      env.style.opacity = '100%';
      details.innerHTML = "<p>When parents don’t monitor their children closely, children’s genes are far more important in influencing whether or not they are smoking or drinking.</p>";
       highM.classList.remove('active');
       highM.classList.add('inactive');
       lowM.classList.add('active');
       lowM.classList.remove('inactive');
    }
  }
}

function aud_peers(){
  if(document.getElementById('js-peers')){
    const highM = document.getElementById('high-peer');
    const lowM = document.getElementById('low-peer');

    highM.addEventListener("click", showHighData);
    lowM.addEventListener("click", showLowData);


    function showHighData(){
      let genes = document.getElementById('peer-genes');
      let env = document.getElementById('peer-env');
      let details = document.getElementById('peer-data-details');
      let holder = document.getElementById('peer-data-holder');
      genes.style.width = '60%';
      genes.style.opacity = '100%';
      env.style.width = '40%';
      env.style.opacity = '100%';

      details.innerHTML = "<p>When alcohol use among friends is high, genetic influences play the biggest role in why some adolescents are drinking more.</p>";
      lowM.classList.remove('active');
      lowM.classList.add('inactive');
      highM.classList.add('active');
      highM.classList.remove('inactive');
      holder.classList.add('show');
    }

    function showLowData(){
      let genes = document.getElementById('peer-genes');
      let env = document.getElementById('peer-env');
      let details = document.getElementById('peer-data-details')
      genes.style.width = '20%';
      genes.style.opacity = '100%';
      env.style.width = '80%';
      env.style.opacity = '100%';
      details.innerHTML = "<p>When alcohol use among friends is low, the environment is far more important in influencing risk.</p>";
       highM.classList.remove('active');
       highM.classList.add('inactive');
       lowM.classList.add('active');
       lowM.classList.remove('inactive');
    }
  }
}


function aud_marriage(){
  if(document.getElementById('js-marriage')){
    const highM = document.getElementById('high-marriage');
    const lowM = document.getElementById('low-marriage');

    highM.addEventListener("click", showHighData);
    lowM.addEventListener("click", showLowData);


    function showHighData(){
      let genes = document.getElementById('marriage-genes');
      let env = document.getElementById('marriage-env');
      let details = document.getElementById('marriage-data-details');
      let holder = document.getElementById('marriage-data-holder');
      genes.style.width = '59%';
      genes.style.opacity = '100%';
      env.style.width = '41%';
      env.style.opacity = '100%';

      details.innerHTML = "<p>Marriage appears to be a protective factor for many adults, reducing the impact of a genetic predisposition toward heavy alcohol consumption.</p>";
      lowM.classList.remove('active');
      lowM.classList.add('inactive');
      highM.classList.add('active');
      highM.classList.remove('inactive');
      holder.classList.add('show');
    }

    function showLowData(){
      let genes = document.getElementById('marriage-genes');
      let env = document.getElementById('marriage-env');
      let details = document.getElementById('marriage-data-details')
      genes.style.width = '77%';
      genes.style.opacity = '100%';
      env.style.width = '23%';
      env.style.opacity = '100%';
      details.innerHTML = "<p>Among unmarried individuals, where there may be less social monitoring and support, genetic predispositions become more important in influencing how much people drink.</p>";
       highM.classList.remove('active');
       highM.classList.add('inactive');
       lowM.classList.add('active');
       lowM.classList.remove('inactive');
    }
  }
}

function aud_neighborhood(){
  if(document.getElementById('js-neighborhood')){
    const highM = document.getElementById('high-neighborhood');
    const lowM = document.getElementById('low-neighborhood');

    highM.addEventListener("click", showHighData);
    lowM.addEventListener("click", showLowData);


    function showHighData(){
      let genes = document.getElementById('neighborhood-genes');
      let env = document.getElementById('neighborhood-env');
      let details = document.getElementById('neighborhood-data-details');
      let holder = document.getElementById('neighborhood-data-holder');
      genes.style.width = '64%';
      genes.style.opacity = '100%';
      env.style.width = '36%';
      env.style.opacity = '100%';

      details.innerHTML = "<p>Genetic influences play a bigger role in alcohol use in young adults when there is more neighborhood instability, presumably reflecting less community monitoring.</p>";
      lowM.classList.remove('active');
      lowM.classList.add('inactive');
      highM.classList.add('active');
      highM.classList.remove('inactive');
      holder.classList.add('show');
    }

    function showLowData(){
      let genes = document.getElementById('neighborhood-genes');
      let env = document.getElementById('neighborhood-env');
      let details = document.getElementById('neighborhood-data-details')
      genes.style.width = '17%';
      genes.style.opacity = '100%';
      env.style.width = '83%';
      env.style.opacity = '100%';
      details.innerHTML = "<p>Environmental influences become more important in neighborhoods with more stability.</p>";
       highM.classList.remove('active');
       highM.classList.add('inactive');
       lowM.classList.add('active');
       lowM.classList.remove('inactive');
    }
  }
}

const currentPath = window.location.pathname;

if (currentPath === '/coga/aud/genes-in-aud/') {
    document.querySelector('#aud-page-menu li a[href="https://rampages.us/coga/aud/genes-in-aud/"]').style.cssText += 'border-bottom: 2px solid #ff462d; font-weight: 700;';
    document.querySelector('#aud-page-menu--flex li a[href="https://rampages.us/coga/aud/genes-in-aud/"]').style.cssText += 'border-bottom: 2px solid #ff462d; font-weight: 700;';
} else if (currentPath === '/coga/aud/alcohol-use-across-the-lifespan/'){
    document.querySelector('#aud-page-menu li a[href="https://rampages.us/coga/aud/alcohol-use-across-the-lifespan/"]').style.cssText += 'border-bottom: 2px solid #ff462d; font-weight: 700;';
    document.querySelector('#aud-page-menu--flex li a[href="https://rampages.us/coga/aud/alcohol-use-across-the-lifespan/"]').style.cssText += 'border-bottom: 2px solid #ff462d; font-weight: 700;';
} else if (currentPath === '/coga/aud/heritability/'){
    document.querySelector('#aud-page-menu li a[href="https://rampages.us/coga/aud/heritability/"]').style.cssText += 'border-bottom: 2px solid #ff462d; font-weight: 700;';
    document.querySelector('#aud-page-menu--flex li a[href="https://rampages.us/coga/aud/heritability/"]').style.cssText += 'border-bottom: 2px solid #ff462d; font-weight: 700;';
} else if (currentPath === '/coga/aud/gene-identification/'){
    document.querySelector('#aud-page-menu li a[href="https://rampages.us/coga/aud/gene-identification/"]').style.cssText += 'border-bottom: 2px solid #ff462d; font-weight: 700;';
    document.querySelector('#aud-page-menu--flex li a[href="https://rampages.us/coga/aud/gene-identification/"]').style.cssText += 'border-bottom: 2px solid #ff462d; font-weight: 700;';
} else if (currentPath === '/coga/aud/response-to-alcohol/'){
    document.querySelector('#aud-page-menu li a[href="https://rampages.us/coga/aud/response-to-alcohol/"]').style.cssText += 'border-bottom: 2px solid #ff462d; font-weight: 700;';
    document.querySelector('#aud-page-menu--flex li a[href="https://rampages.us/coga/aud/response-to-alcohol/"]').style.cssText += 'border-bottom: 2px solid #ff462d; font-weight: 700;';
} else if (currentPath === '/coga/aud/externalizing-alcohol-use-disorders/'){
    document.querySelector('#aud-page-menu li a[href="https://rampages.us/coga/aud/externalizing-alcohol-use-disorders/"]').style.cssText += 'border-bottom: 2px solid #ff462d; font-weight: 700;';
    document.querySelector('#aud-page-menu--flex li a[href="https://rampages.us/coga/aud/externalizing-alcohol-use-disorders/"]').style.cssText += 'border-bottom: 2px solid #ff462d; font-weight: 700;';
} else if (currentPath === '/coga/aud/internalizing-alcohol-use-disorders/'){
    document.querySelector('#aud-page-menu li a[href="https://rampages.us/coga/aud/internalizing-alcohol-use-disorders/"]').style.cssText += 'border-bottom: 2px solid #ff462d; font-weight: 700;';
    document.querySelector('#aud-page-menu--flex li a[href="https://rampages.us/coga/aud/internalizing-alcohol-use-disorders/"]').style.cssText += 'border-bottom: 2px solid #ff462d; font-weight: 700;';
} else if (currentPath === '/coga/aud/brain-function/'){
    document.querySelector('#aud-page-menu li a[href="https://rampages.us/coga/aud/brain-function/"]').style.cssText += 'border-bottom: 2px solid #ff462d; font-weight: 700;';
    document.querySelector('#aud-page-menu--flex li a[href="https://rampages.us/coga/aud/brain-function/"]').style.cssText += 'border-bottom: 2px solid #ff462d; font-weight: 700;';
} else if (currentPath === '/coga/aud/polygenic-risk-scores/'){
    document.querySelector('#aud-page-menu li a[href="https://rampages.us/coga/aud/polygenic-risk-scores/"]').style.cssText += 'border-bottom: 2px solid #ff462d; font-weight: 700;';
    document.querySelector('#aud-page-menu--flex li a[href="https://rampages.us/coga/aud/polygenic-risk-scores/"]').style.cssText += 'border-bottom: 2px solid #ff462d; font-weight: 700;';
}

//From https://css-tricks.com/snippets/jquery/smooth-scrolling/

// Select all links with hashes
jQuery('a[href*="#"]')
  // Remove links that don't actually link to anything
  .not('[href="#"]')
  .not('[href="#0"]')
  .click(function(event) {
    // On-page links
    if (
      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
      && 
      location.hostname == this.hostname
    ) {
      // Figure out element to scroll to
      var target = jQuery(this.hash);
      target = target.length ? target : jQuery('[name=' + this.hash.slice(1) + ']');
      // Does a scroll target exist?
      if (target.length) {
        // Only prevent default if animation is actually gonna happen
        event.preventDefault();
        jQuery('html, body').animate({
          scrollTop: target.offset().top
        }, 1000, function() {
          // Callback after animation
          // Must change focus!
          var jQuerytarget = jQuery(target);
          jQuerytarget.focus();
          if (jQuerytarget.is(":focus")) { // Checking if the target was focused
            return false;
          } else {
            jQuerytarget.attr('tabindex','-1'); // Adding tabindex for elements not focusable
            jQuerytarget.focus(); // Set focus again
          };
        });
      }
    }
  });
