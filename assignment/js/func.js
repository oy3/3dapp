Fancybox.bind("[data-fancybox]", {
    // Your custom options
  });


  function getActiveTab() {
    var tabs = document.querySelectorAll('.nav-link.active');
    for (var i = 0; i < tabs.length; i++) {
        if (tabs[i].parentNode.parentNode.id == 'myTab') {
            return tabs[i].id.split('-')[0];  // get the model name (before the "-tab" part)
        }
    }
    return null; // return null if no active tab is found
}