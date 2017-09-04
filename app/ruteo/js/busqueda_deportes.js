 var performSearch = function(args) {
    var $dln = $('.dln-member');
    var $filtered = $dln.filter(function(i, el) {
        var data = $(el).data();
        var success = false;
        var state_filter = false;
        
        for(var d in data) {
            switch(d) {
                case 'name':
                case 'expertise':
                    success = isValidSearch(data[d], args.input) || success;
                    break;
                case 'state':
                    state_filter = isValidState(data[d], args.state);
                    break;
                default:
                    break;
            }
        }
        
        return success && state_filter; 
    }); 
    
    return $filtered;
};

var getArgs = function() {
    var input = $('#search').val();
    var select = $('#state option:selected').val();
    
    return {
        'input': input,
        'state': select
    };
};

var isValidSearch = function(term, search) {
    search = ('' + search).toLowerCase();
    return term.toString().toLowerCase().indexOf(search) > -1 || search.length <= 0;
};

var isValidState = function(state, state_filter) {
    state_filter = ('' + state_filter).toLowerCase();
    return state == state_filter || state_filter == 'none';
};

var toggleResults = function($result) {
    $('.dln-member').hide();
    $result.show();
};

var search = function() {
    var args = getArgs();
    var $result = performSearch(args);
    toggleResults($result);
};

$(function() {
    $('#search').on('keyup', search);
    $('#state').on('change', search);
});