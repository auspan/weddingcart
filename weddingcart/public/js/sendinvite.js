jQuery(document).ready(function($) {


var contacts = new Bloodhound({
    queryTokenizer: Bloodhound.tokenizers.whitespace,
    datumTokenizer: function (datum) {
        return Bloodhound.tokenizers.whitespace(datum.name, datum.email);
    },
    prefetch: 'getcontacts'
    //remote: {
    //    url: 'getcontacts?name=%QUERY%',
    //    wildcard: '%QUERY%'
    //    //transform: function(response) { return response.data.contacts; }
    //}
});

//function customTokenizer(datum) {
//    var nameTokens = Bloodhound.tokenizers.whitespace(datum.name);
//    //var ownerTokens = Bloodhound.tokenizers.whitespace(datum.emai);
//    //var languageTokens = Bloodhound.tokenizers.whitespace(datum.language);
//    //return nameTokens.concat(ownerTokens).concat(languageTokens);
//    return nameTokens;
//}

$('#to-address').typeahead({
    hint: true,
    highlight: true,
    minLength: 2
   },
   {
       name: 'contacts',
       displayKey: 'name',
       source: contacts,
       templates: {
           empty: [
               '<div class="empty-message">Not Found</div>'
           ]
       }
   }
);

});