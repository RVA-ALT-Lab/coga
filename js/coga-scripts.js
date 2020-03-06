window.onload = function() {
  aud_monitoring();
}
function aud_monitoring(){
  console.log('monitored by a parent')
  if(document.getElementById('high-monitor')){
    const highM = document.getElementById('high-monitor');
    const lowM = document.getElementById('low-monitor');

    highM.addEventListener("click", showHighData);
    lowM.addEventListener("click", showLowData);


    function showHighData(){
      let genes = document.getElementById('genes');
      let env = document.getElementById('env');
      let details = document.getElementById('data-details');
      let holder = document.getElementById('data-holder');
      genes.style.width = '20%';
      genes.style.opacity = '100%';
      env.style.width = '60%';
      env.style.opacity = '100%';

      details.innerHTML = "<p>When parents pay close attention to their children’s whereabouts and activities, the environment is the most important factor influencing whether or not they are smoking or drinking.</p>";
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