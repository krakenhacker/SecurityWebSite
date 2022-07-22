
  // When the user scrolls down 80px from the top of the document, resize the navbar's padding and the logo's font size
  window.onscroll = function() {scrollFunction()};
  function OnClick(height){
    window.scrollTo(0, height);
  }
  function scrollFunction() {
    if (document.body.scrollTop > 40 || document.documentElement.scrollTop > 40) {
      document.getElementById("navbar").style.padding = "0.05rem 0.05rem";
      document.getElementById("navbar").style.fontSize = "0.85rem";
      document.getElementById("logo").style.paddingLeft = "0.75rem";
      document.getElementById("scrolltotop").style.display = "initial";
      document.getElementById("logoimg").style.width = "100px";
     
    } else {
        document.getElementById("logoimg").style.width = "195px";
       document.getElementById("scrolltotop").style.display = "none";
       document.getElementById("navbar").style.paddingLeft = "1rem";
       document.getElementById("navbar").style.paddingTop = "0.5rem";
       document.getElementById("navbar").style.paddingBottom = "0.5rem";
       document.getElementById("navbar").style.fontSize = "1rem";
    }

  }

  function changeClass(){
      document.getElementById('navtogglerjs').className = "navbar-toggler collapsed";
      document.getElementById('navtogglerjs').setAttribute("aria-expanded", "false");
      document.getElementById('navbarSupportedContent').className = "navbar-collapse collapse";
  }
