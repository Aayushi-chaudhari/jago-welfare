const accordionHeaders = document.querySelectorAll('.accordion-header');

// Add event listener to each accordion header
accordionHeaders.forEach(header => {
  header.addEventListener('click', function() {
    const accordionItem = this.parentNode;
    
    // Toggle the active class on the clicked accordion item
    accordionItem.classList.toggle('active');    
    
    // Collapse all other accordion items except the clicked one
    accordionHeaders.forEach(otherHeader => {
      if (otherHeader !== header) {
        otherHeader.parentNode.classList.remove('active');
      }
    });
  });
});

// Open the first accordion item by default
accordionHeaders[0].parentNode.classList.add('active');


// //////////////////////////////////////////////////////////////////////////////////////////////////////

const accordionHeader = document.querySelectorAll('.accordion-header-two');

// Add event listener to each accordion header
accordionHeader.forEach(header => {
  header.addEventListener('click', function() {
    const accordionItem = this.parentNode;
    
    // Toggle the active class on the clicked accordion item
    accordionItem.classList.toggle('active');
    
    // Collapse all other accordion items except the clicked one
    accordionHeader.forEach(otherHeader => {
      if (otherHeader !== header) {
        otherHeader.parentNode.classList.remove('active');
      }
    });
  });
});

// Open the first accordion item by default
accordionHeader[0].parentNode.classList.add('active');


