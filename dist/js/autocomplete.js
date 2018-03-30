$( function() {
    $.widget( "custom.catcomplete", $.ui.autocomplete, {
      _create: function() {
        this._super();
        this.widget().menu( "option", "items", "> :not(.ui-autocomplete-category)" );
      },
      _renderMenu: function( ul, items ) {
        var that = this,
          currentCategory = "";
        $.each( items, function( index, item ) {
          var li;
          if ( item.category != currentCategory ) {
            ul.append( "<li class='ui-autocomplete-category'>" + item.category + "</li>" );
            currentCategory = item.category;
          }
          li = that._renderItemData( ul, item );
          if ( item.category ) {
            li.attr( "aria-label", item.category + " : " + item.label );
          }
        });
      }
    });
    var data = [
      { label: "Ultrasound Knee Right", category: "Ultrasound" },
      { label: "Ultrasound Knee Left", category: "Ultrasound" },
      { label: "MRI Knee Right", category: "MRI" },
      { label: "MRI Knee Left", category: "MRI" },
      { label: "CT Knee Right", category: "CT" },
      { label: "CT Knee Left", category: "CT" },
      { label: "Ultrasound Forearm/Elbow Left", category: "Ultrasound" },
      { label: "Ultrasound Forearm/Elbow Right", category: "Ultrasound" },
      { label: "MRI Forearm/Elbow Left", category: "MRI" },
      { label: "MRI Forearm/Elbow Right", category: "MRI" },
      { label: "CT Forearm/Elbow Left", category: "CT" },
      { label: "CT Forearm/Elbow Right", category: "CT" }
    ];
 
    $( "#search" ).catcomplete({
      delay: 0,
      source: data
    });
  } );