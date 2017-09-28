// external js: isotope.pkgd.js


// init Isotope
var $grid = $('.grid').isotope({
  itemSelector: '.element-item',
  layoutMode: 'fitRows',
  getSortData: {
    name: '.name',
    symbol: '.symbol',
    number: '.number parseInt',
    category: '[data-category]',
    weight: function( itemElem ) {
      var weight = $( itemElem ).find('.weight').text();
      return parseFloat( weight.replace( /[\(\)]/g, '') );
    }
  }
});

// filter functions
var filterFns = {
  // show if number is greater than 50
  numberGreaterThan50: function() {
    var number = $(this).find('.number').text();
    return parseInt( number, 10 ) > 50;
  },
  // show if name ends with -ium
  ium: function() {
    var name = $(this).find('.name').text();
    return name.match( /ium$/ );
  }
};

// bind filter button click
$('#filters').on( 'click', 'button', function() {
  var filterValue = $( this ).attr('data-filter');
  // use filterFn if matches value
  filterValue = filterFns[ filterValue ] || filterValue;
  $grid.isotope({ filter: filterValue });
});

// bind sort button click
$('#sorts').on( 'click', 'button', function() {
  var sortByValue = $(this).attr('data-sort-by');
  $grid.isotope({ sortBy: sortByValue });
});

// change is-checked class on buttons
$('.button-group').each( function( i, buttonGroup ) {
  var $buttonGroup = $( buttonGroup );
  $buttonGroup.on( 'click', 'button', function() {
    $buttonGroup.find('.is-checked').removeClass('is-checked');
    $( this ).addClass('is-checked');
  });
});

    //carousel controls
    //on blog section hover -> fade out non-selected boards 
   
    $(document).on('mouseover', '.blpage, .flickity-prev-next-button', function () {
for(let i2 = 0; i2 < 10; i2++) {
if ($("#carousel-cell"+i2).hasClass("is-selected")) {
   console.log(i2);
  $('#board' + i2).fadeIn();
  $('.caro-date' + i2).slideDown(300);
}else{
    $('#board'+i2).fadeOut();
  $('.caro-date' + i2).slideUp(600);
}
}
});
// next clicked
//on next/prev click or dot click -> fade out non-selected boards
$(document).on('click', '.flickity-prev-next-button, .dot', function () {
for(let i2 = 0; i2 < 10; i2++) {
if ($("#carousel-cell"+i2).hasClass("is-selected")) {
   console.log('carousel-cell $i2 is selected');
  $('#board' + i2).fadeIn();
  $('.caro-date' + i2).slideDown(300);
}else{
    $('#board'+i2).fadeOut();
    $('.caro-date' + i2).slideUp(600);
}
}

});