//Developed by Ronaktal
//Today is open
//google maps api
      function initMap(l1,l2,name) {
        var myLatLng = {};
        myLatLng['lat'] = parseFloat(l1);
        myLatLng['lng'] = parseFloat(l2);

        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 4,
          center: myLatLng
        });

        var marker = new google.maps.Marker({
          position: myLatLng,
          map: map,
          title: name
        });
      }


//selectize the dropdown into google places autocapitalize
 $(document).ready(function () {


   $.typeahead({
    input: '.js-typeahead-country_v1',
    order: "asc",
    filter: false,
    maxItem: 10,
    delay: 1200,
    dynamic: true,
    display: ["name","formatted_address"],
    template: function (query, item) {
        return '<span class=""><span class="">{{name}}&nbsp;-&nbsp;<small style="color:#777">{{formatted_address}}</small></span></span>';
    },
    emptyTemplate: "no results for {{query}}",
    source: {
      results:{
      ajax: [{
                type: "GET",
                url: "google_api.php",
                data: {
                    query: "{{query}}"
                }
            }, "results"],
    }
  },
  callback: {
    onClickAfter: function (node, a, item, event) {
      initMap(item['geometry']['location']['lat'],item['geometry']['location']['lng'],item['name']);

      }
  }
});

});
