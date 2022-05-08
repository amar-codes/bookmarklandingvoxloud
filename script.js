function openFeatureTab(evt, cityName) {
    let i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "flex";
    evt.currentTarget.className += " active";
}

document.getElementById("defaultOpen").click();

document.onkeydown = function (t) {
    if(t.which == 9){
        return false;
    }
}

window.addEventListener("load", function(){
  let faqItems = document.getElementsByClassName("faq-item");
  for (let i = 0; i < faqItems.length; i++){
    faqItems[i].addEventListener("click", function(){
      let faqItemContent = faqItems[i].children;
      faqItemContent[1].classList.toggle("activeFAQItem");

      faqItems[i].children[0].children[1].classList.toggle("activeArrowItem")
    })
  }
})


document.getElementById("submitContact").addEventListener("click", function(){
  let form = document.getElementById("newsletterForm");
  function handleForm(event) { event.preventDefault(); } 
  form.addEventListener('submit', handleForm);
  let newsletterEmail = document.getElementById("newsletterEmail");
  let emailError = document.getElementById("emailError");
  let errorIconEmail = document.getElementById("errorIconEmail");
  let filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  if (newsletterEmail.value == ""){
    emailError.style.display = "block";
    emailError.innerHTML = "Please enter your e-mail address"
    newsletterEmail.style.border = "2px solid hsl(0, 94%, 66%)"
    emailError.style.background = "hsl(0, 94%, 66%)";
    errorIconEmail.style.display = "block"
  } else if(!filter.test(newsletterEmail.value)){
    emailError.style.display = "block";
    emailError.innerHTML = "Whoops, make sure it's an email"
    newsletterEmail.style.border = "2px solid hsl(0, 94%, 66%)"
    emailError.style.background = "hsl(0, 94%, 66%)"
    errorIconEmail.style.display = "block"
  } else{
    emailError.style.display = "block";
    newsletterEmail.style.border = "2px solid green";
    emailError.style.background = "green";
    errorIconEmail.style.display = "none"
    $.ajax({
      type: "POST",
      url: window.location.href + 'wp-content/themes/voxloud/inc/newsletter.php',
      data: 'email=' + newsletterEmail.value,
      success: function(data){
        emailError.innerHTML = data;
      }
  });
  }
})

document.getElementById("menuMobileBtn").addEventListener("click", function(){
  let menuMobileBox = document.getElementById("menuMobileBox");
  menuMobileBox.style.display = "block";
  document.querySelector(".nav-logo").style.display = "none"
  document.querySelector("#menuMobileBtn").style.display = "none";
  menuMobileBox.classList.add("animate__animated");
  menuMobileBox.classList.add("animate__fadeInLeftBig");
  setTimeout(function() {
    menuMobileBox.classList.remove("animate__animated");
    menuMobileBox.classList.remove("animate__fadeInLeftBig");
  }, 1000);
})

document.getElementById("closeMenu").addEventListener("click", function(){
  let menuMobileBox = document.getElementById("menuMobileBox");
  
  document.querySelector(".nav-logo").style.display = "block"
  document.querySelector("#menuMobileBtn").style.display = "block";
  menuMobileBox.classList.add("animate__animated");
  menuMobileBox.classList.add("animate__fadeOutLeftBig");
  setTimeout(function() {
    menuMobileBox.classList.remove("animate__animated");
    menuMobileBox.classList.remove("animate__fadeOutLeftBig");
    menuMobileBox.style.display = "none";
  }, 800);
})