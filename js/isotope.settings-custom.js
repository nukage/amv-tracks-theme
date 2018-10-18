// Portfolio Isotope Filter
jQuery(document).ready( function($) {

$(window).resize(function () {
        $container
          .isotope('reLayout');
        return false;
       
        });

setTimeout(function() {
         $container
          .isotope('reLayout');
           // alert(jQuery);
            return false;
    }, 1000);

  var $container = $('.isotope-container');
  var $products = $($container).isotope({
        // options
       
         animationOptions: {
                    duration: 750,
                    easing: 'linear',
                    queue: false
                },
        itemSelector: '.product',
        layoutMode: 'masonry',
        // getSortData: {
        //     name: "a .caption"
        // }
       
        filter: '*'
    });


 



    // layout Isotope again after all images have loaded
    $products.imagesLoaded( function() {
        $products.isotope('layout');
    });



//   var $checkboxes = $('.filter-list input');
//     $checkboxes.change(function () {
//         var filters = [];
//         // Get the values of the checked checkboxes.
//         // Place the values in the filters array.
//         $checkboxes.filter(':checked').each(function () {
//             filters.push(this.value);
//         });
//         // Concatenate the values from the filters array into a single string.
//         var filterValue = filters.join('');
//         $container.isotope({ 
//             filter: filterValue,  
//             animationOptions: {
//                     duration: 750,
//                     easing: 'linear',
//                     queue: false
//                 } 
//             }, function noResultsCheck() {
//     var numItems = $('.product:not(.isotope-hidden)').length;
//         if (numItems == 0) {
//         $('#noresults').removeClass('invisible');
//     }
//     else{
//          $('#noresults').addClass('invisible');
//     }
// }
//             );
//         console.log(filterValue);
//     });



// Set up filters array with default values
    var filters = {};

    // When a button is pressed, run filterSelect
    $( ".filter-list input" ).on("click", filterSelect );

      $( "#clearfilters" ).on("click", filterSelect );

    // Set the URI hash to the current selected filters



    function filterSelect() {
        console.log('filterselect ');
        // Current hash value
        var hashFilter = getHashFilter();

        // Set filters to current values (important for first run)
        if (hashFilter['mputype'] != '*'){
        filters["mputype"] = hashFilter["mputype"].substr(1);
        }else{
            filters["mputype"] = '*';
        };
         if (hashFilter['videoformat'] != '*'){
        filters["videoformat"] = hashFilter["videoformat"].substr(1);
        } else{
            filters["videoformat"] = '*';
        };
         if (hashFilter['bodystyle'] != '*'){
        filters["bodystyle"] = hashFilter["bodystyle"].substr(1);
        } else{
            filters["bodystyle"] = '*';
        };
         if (hashFilter['numberofcameras'] != '*'){
        filters["numberofcameras"] = hashFilter["numberofcameras"].substr(1);
        } else{
            filters["numberofcameras"] = '*';
        };

        if ($(this).attr('id') == "clearfilters") {
          filters['mputype'] = '*';
          filters["videoformat"] = '*';
          filters['bodystyle'] = '*';
          filters["numberofcameras"] = '*';
          $('#noresults').addClass('invisible');
        }
        // data-filter attribute of clicked button
        var currentFilter = $(this).attr("value");
        console.log('currentFilter is ' + currentFilter);
        // Navigation group (mputype or videoformat) as object
        var $navGroup = $(this).parents("ul");
        // data-filter-group key for the current nav group
        var filterGroup = $navGroup.attr("data-group");
 console.log('the group is ' + filterGroup);
        // If the current data-filter attribute matches the current filter,
        console.log('currentFilter is ' + filters[filterGroup]);
        if ( currentFilter == filters["mputype"] || currentFilter == filters["videoformat"] ||  currentFilter == filters["bodystyle"]  || currentFilter == filters["numberofcameras"]) {
            // Reset group filter as the user has unselected the button
            filters[ filterGroup ] = "*";
        } else {
            // Set data-filter of current button as value with filterGroup as key
            filters[ filterGroup ] = $(this).attr("value");
        }

        // Create new hash
        var newHash = "mputype=" + encodeURIComponent( filters["mputype"] ) + "&videoformat=" + encodeURIComponent( filters["videoformat"] ) + "&bodystyle=" + encodeURIComponent( filters["bodystyle"] ) + "&numberofcameras=" + encodeURIComponent( filters["numberofcameras"] );
        // If sort value exists, add it to hash
      

        // Apply the new hash to the URI, triggering onHahschange()
        location.hash = newHash;
    } // filterSelect




    // Pass filter value to Isotope to repaint.
    function onHashChange() {
        var hashFilter = getHashFilter();
                // Concatenate mputype and videoformat for Isotope filtering
        var theFilter = hashFilter["mputype"] + hashFilter["videoformat"] + hashFilter["bodystyle"] + hashFilter["numberofcameras"];

       if ( hashFilter ) {
        console.log('theFilter is ' + decodeURIComponent(theFilter) + '. Hashfilter[mputype] is ' + hashFilter['mputype']);
            // Repaint Isotope container with current filters and sorts
            $container.isotope( {
                filter:  decodeURIComponent(theFilter),  
            animationOptions: {
                    duration: 750,
                    easing: 'linear',
                    queue: false
                } 
              } , function noResultsCheck() {
    var numItems = $('.product:not(.isotope-hidden)').length;
        if (numItems == 0) {
        $('#noresults').removeClass('invisible');
    }
    else{
         $('#noresults').addClass('invisible');
    }
}
              
             );
                       // Toggle checked status of filter buttons
            $( ".filter-list" ).find(".checked").removeClass("checked");

            $( ".filter-list" ).find("[value='" + hashFilter["mputype"].substr(1) + "'],[value='" + hashFilter["numberofcameras"].substr(1) + "'],[value='" + hashFilter["bodystyle"].substr(1) + "'],[value='" + hashFilter["videoformat"].substr(1) + "']").parent().addClass("checked");
        }
    } // onHashChange

    // Grab filter value from URL hash.
    // function getHashFilter() {
    //     var currentHash = location.hash.match( /filter=([^&]+)/i );
    //     var filterValue = currentHash && currentHash[1];
    //     // alert(filterValue);
    //     return filterValue;
    // }


        function getHashFilter() {
        // Get filters (matches) and sort order (sorts)
        var mputype = location.hash.match( /mputype=([^&]+)/i );
        var videoformat = location.hash.match( /videoformat=([^&]+)/i );
        var bodystyle = location.hash.match( /bodystyle=([^&]+)/i );
        var numberofcameras = location.hash.match( /numberofcameras=([^&]+)/i );
        var scroll = location.hash.match( /scroll=([^&]+)/i );  
        
        // Set up a hashFilter array
        var hashFilter = {};

           hashFilter["scroll"] = scroll ? scroll[1] : "*";
        if (hashFilter["scroll"] != "*" ){
                 $('html, body').animate({
        scrollTop: $("#scrollhere").offset().top
    }, 1000);
         }
     
        // Populate array with matches and sorts using ternary logic
        hashFilter["mputype"] = mputype ? mputype[1] : "*";
        if (hashFilter["mputype"] != "*" ){
            hashFilter["mputype"] = '.' + hashFilter["mputype"];
         }
        hashFilter["videoformat"] = videoformat ? videoformat[1] : "*";
         if (hashFilter["videoformat"] != "*" ){
            hashFilter["videoformat"] = '.' + hashFilter["videoformat"];
         }
         hashFilter["bodystyle"] = bodystyle ? bodystyle[1] : "*";
         if (hashFilter["bodystyle"] != "*" ){
            hashFilter["bodystyle"] = '.' + hashFilter["bodystyle"];
         }
          hashFilter["numberofcameras"] = numberofcameras ? numberofcameras[1] : "*";
         if (hashFilter["numberofcameras"] != "*" ){
            hashFilter["numberofcameras"] = '.' + hashFilter["numberofcameras"];
         }
        console.log(hashFilter); 
        return hashFilter;

    } // getHashFilter





    // Run onHashChange any time the URL hash changes
    window.onhashchange = onHashChange;


    onHashChange();
    
 



  // Add the .checked class to list items holding a checked checkbox.
    // $('.filter-list input:checkbox').click(function () {
    //     $('.filter-list li:has(input:checkbox:checked)').addClass('checked');
    //     $('.filter-list li:has(input:checkbox:not(:checked))').removeClass('checked');
    // });

    //Remove the checkbox and checked class from the mutually excusive items

  //       $('.filter-list #production:checkbox').click(function () {
  //           $('.filter-list #uplink').attr('checked', false); // Unchecks it
  //           $('.filter-list #uplink:checkbox').parent().removeClass('checked');
  //   }); 
  //        $('.filter-list #uplink:checkbox').click(function () {
  //           $('.filter-list #production').attr('checked', false); // Unchecks it
  //           $('.filter-list #production:checkbox').parent().removeClass('checked');
  //   }); 
  //        $('#clearfilters').on('click', function() {
  //           console.log('hey hey');

  // $('.filter-list input:checkbox:checked').removeAttr('checked');
  //         // Create new hash
  //       var newHash = "mputype=" + encodeURIComponent( filters["mputype"] ) + "&videoformat=" + encodeURIComponent( filters["videoformat"] );
  //       // If sort value exists, add it to hash
      

  //       // Apply the new hash to the URI, triggering onHahschange()
        
      
  //        $('#noresults').addClass('invisible');
  //           filters["mputype"] = "*";
  //           filters["videoformat"] = "*";
  //           filters["bodystyle"] = "*";
  //           filters["numberofcameras"] = "*";
  //           location.hash = newHash;
  //         }); 

 

    });



 