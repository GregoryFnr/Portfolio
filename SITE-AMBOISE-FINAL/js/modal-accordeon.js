//Page Degustation des produits locaux

document.addEventListener('DOMContentLoaded', function() {
    // Get all the card links
    var cardLinks = document.querySelectorAll('.card-link');

    cardLinks.forEach(function(cardLink) {
        cardLink.addEventListener('click', function(event) {
            event.preventDefault();
            var modalId = cardLink.getAttribute('data-modal');
            var modal = document.getElementById(modalId);
            if (modal) {
                modal.style.display = 'block';
            }
        });
    });

    // Close the modal when clicking outside of the modal-content
    window.addEventListener('click', function(event) {
        var modals = document.querySelectorAll('.modal-produit');
        modals.forEach(function(modal) {
            if (event.target == modal) {
                modal.style.display = 'none';
            }
        });
    });
});

document.querySelectorAll('.bx-x').forEach(button => {
    button.addEventListener('click', function() {
        this.closest('.modal-produit').style.display = 'none';
    });
});

//Page Recettes locales 

var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  });
}

//hebergements

document.querySelectorAll('.h4-info').forEach(function(toggle) {
    toggle.addEventListener('click', function() {
        const containerInfo = this.nextElementSibling;
        containerInfo.classList.toggle('open');
    });
});