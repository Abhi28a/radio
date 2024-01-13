function navigation(){
    var x = document.getElementById("navigation-bar");
    var y = document.getElementById("carousel");
    var z = document.getElementById("scroll-animation");
    var a = document.getElementById("about");
    var b = document.getElementById("iframe");
    var c = document.getElementById("watch-more-yt");
    var d = document.getElementById("contact");
    if(x.style.display === "block")
    {
        x.style.display="none";
        /*y.style.top="400px";
        z.style.top="400px";
        a.style.top="400px";
        b.style.top="400px";
        c.style.top="400px";
        d.style.top="400px";*/
    }
    else
    {
        x.style.display="block";
        /*y.style.top="15vh";
        z.style.top="15vh";
        a.style.top="18vh";
        b.style.top="25vh";
        c.style.top="30vh";
        d.style.top="30vh";*/
    }
}
function account() {
    document.getElementById("container").style.display='none';
    document.getElementById("container-signup").style.display='block';
}
function signin() {
    document.getElementById("container-signup").style.display='none';
    document.getElementById("container-signin").style.display='block';
}
function signup() {
    document.getElementById("container-signin").style.display='none';
    document.getElementById("container-signup").style.display='block';
}
function animateValue(obj, start, end, duration) {
    let startTimestamp = null;
    const step = (timestamp) => {
      if (!startTimestamp) startTimestamp = timestamp;
      const progress = Math.min((timestamp - startTimestamp) / duration, 1);
      obj.innerHTML = Math.floor(progress * (end - start) + start);
      if (progress < 1) {
        window.requestAnimationFrame(step);
      }
    };
    window.requestAnimationFrame(step);
  }
  
  const obj = document.getElementById("value-1");
  animateValue(obj, 0, 107, 2500);

function animateValueTwo(one, start, end, duration) {
    let startTimestamp = null;
    const step = (timestamp) => {
      if (!startTimestamp) startTimestamp = timestamp;
      const progress = Math.min((timestamp - startTimestamp) / duration, 1);
      one.innerHTML = Math.floor(progress * (end - start) + start);
      if (progress < 1) {
        window.requestAnimationFrame(step);
      }
    };
    window.requestAnimationFrame(step);
  }
  
  const one = document.getElementById("value-2");
  animateValueTwo(one, 0, 12, 2500);

function animateValueThree(two, start, end, duration) {
    let startTimestamp = null;
    const step = (timestamp) => {
      if (!startTimestamp) startTimestamp = timestamp;
      const progress = Math.min((timestamp - startTimestamp) / duration, 1);
      two.innerHTML = Math.floor(progress * (end - start) + start);
      if (progress < 1) {
        window.requestAnimationFrame(step);
      }
    };
    window.requestAnimationFrame(step);
  }
  
  const two = document.getElementById("value-3");
  animateValueThree(two, 0, 10, 2500);

function animateValueThree(three, start, end, duration) {
    let startTimestamp = null;
    const step = (timestamp) => {
      if (!startTimestamp) startTimestamp = timestamp;
      const progress = Math.min((timestamp - startTimestamp) / duration, 1);
      three.innerHTML = Math.floor(progress * (end - start) + start);
      if (progress < 1) {
        window.requestAnimationFrame(step);
      }
    };
    window.requestAnimationFrame(step);
  }
  
const three = document.getElementById("value-4");
animateValueThree(three, 0, 4, 2500);

var preVar;
  function preLoader() {
    preVar = setTimeout(myPreloader,4000)
  }
  function myPreloader() {
    document.getElementById("preloader").style.display='none';
    document.getElementById("container").style.display='block';
  }
function about() {
  document.getElementById("container-about").style.display='block';
}
function gallery() {
  document.getElementById("container-gallery").style.display='block';
}
function ourteam() {
  document.getElementById("container-ourteam").style.display='block';
}
function events() {
  document.getElementById("container-events").style.display='block';
}
function login() {
  document.getElementById("container-login").style.display='block';
}
function Reset() {
  document.getElementById("p-name").focus();
}
function updated() {
  document.getElementById("profile-updated-message").style.visibility='visible';
}
function showPassword() {
  var sp = document.getElementById("ps-password");
  if(sp.type === "password")
  {
    sp.type="text";
  }
  else
  {
    sp.type="password";
  }
}
function LiveVideo() {
  var m = document.getElementById("xxx");
  var n = document.getElementById("yyy");
  var o = document.getElementById("zzz");
  if (m.style.display === "none" && n.style.display === "none" && o.style.display === "none")
  {
    m.style.display = "block";
    n.style.display = "block";
    o.style.display = "block";
  }
  else
  {
    m.style.display = "none";
    n.style.display = "none";
    o.style.display = "none";
  }
}

var d = document.getElementById("live");
var e = document.getElementById("liveone");
function myTime() {
    const a = new Date();
    let minutes = a.getMinutes();
    var currentTimes = (60 * minutes) + a.getSeconds();
    d.currentTime = currentTimes;
    d.play();
}
function myTimeOne() {
  const a = new Date();
  let minutes = a.getMinutes();
  var currentTimes = (60 * minutes) + a.getSeconds();
  e.currentTime = currentTimes;
  e.play();
  p.innerHTML = "Pause";
}
function pause() {
    d.pause();
}
function play() {
    d.play();
}
function pauseOne() {
  e.pause();
}
function playOne() {
  e.play();
}
var p = document.getElementById("play-pause");

function changeOne() {
  if(p.innerHTML == "Play")
  {
    p.innerHTML = "Pause";
    e.play();
  }
  else
  {
    p.innerHTML = "Play";
    e.pause();
  }
}

function closeChat() {
  document.getElementById("chatbot-form").style.display = 'none';
}
function openChat() {
  document.getElementById("chatbot-form").style.display = 'block';
}

function displayPost() {
  document.getElementById("post-job").style.display='block';
}
function closePost() {
  document.getElementById("post-job").style.display='none';
}

/*var d = document.getElementById("live");
function myTime() {
  const a = new Date();
  let minutes = a.getMinutes();
  let hours = a.getHours();
  var currentTimes = ((hours*60)*60)+ (60 * minutes) + a.getSeconds();
  d.currentTime = currentTimes;
document.getElementById("live").innerHTML = currentTimes;
}*/