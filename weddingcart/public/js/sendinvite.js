jQuery(document).ready(function($) {


var contacts = new Bloodhound({
    queryTokenizer: Bloodhound.tokenizers.whitespace,
    datumTokenizer: function (datum) {
        return Bloodhound.tokenizers.whitespace(datum.name);
    },
    remote: {
        url: 'getcontacts?name=%QUERY%',
        wildcard: '%QUERY%'
        //transform: function(response) { return response.data.contacts; }
    }
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
    highlight: true
   },
   {
       name: 'contacts',
       displayKey: 'name',
       source: contacts
   }
);

});