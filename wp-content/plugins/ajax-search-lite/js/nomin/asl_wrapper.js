// INIT CODE

// Use the window to make sure it is in the main scope, I do not trust IE
window.ASL = window.ASL || {};

window.ASL.getScope = function() {
    /**
     * Explanation:
     * If the sript is scoped, the first argument is always passed in a localized jQuery
     * variable, while the actual parameter can be aspjQuery or jQuery (or anything) as well.
     */
    if (typeof jQuery !== "undefined") return jQuery;

    // The code should never reach this point, but sometimes magic happens (unloaded or undefined jQuery??)
    // .. I am almost positive at this point this is going to fail anyways, but worth a try.
    if (typeof window[ASL.js_scope] !== "undefined")
        return window[ASL.js_scope];
    else
        return eval(ASL.js_scope);
};

// Call this function if you need to initialize an instance that is printed after an AJAX call
// Calling without an argument initializes all instances found.
window.ASL.initialize = function(id) {
    // Yeah I could use $ or jQuery as the scope variable, but I like to avoid magical errors..
    var scope = window.ASL.getScope();
    var selector = ".asl_init_data";

    if ((typeof ASL_INSTANCES != "undefined") && Object.keys(ASL_INSTANCES).length > 0) {
        scope.each(ASL_INSTANCES, function(k, v){
            if ( typeof v == "undefined" ) return false;
            // Return if it is already initialized
            if ( scope("#ajaxsearchlite" + k).hasClass("hasASL") )
                return false;
            else
                scope("#ajaxsearchlite" + k).addClass("hasASL");

            return scope("#ajaxsearchlite" + k).ajaxsearchlite(v);
        });
    } else {
        if (typeof id !== 'undefined')
            selector = "div[id*=asl_init_id_" + id + "]";

        /**
         * Getting around inline script declarations with this solution.
         * So these new, invisible divs contains a JSON object with the parameters.
         * Parse all of them and do the declaration.
         */
        scope(selector).each(function (index, value) {
            var rid = scope(this).attr('id').match(/^asl_init_id_(.*)/)[1];
            var jsonData = scope(this).html();
            if (typeof jsonData === "undefined") return false;
            var args = JSON.parse(jsonData);

            return scope("#ajaxsearchlite" + rid).ajaxsearchlite(args);
        });
    }
};

window.ASL.ready = function() {
    var _this = this;
    var scope = _this.getScope();
    var t = null;

    scope(document).ready(function () {
        _this.initialize();
    });

    // DOM tree modification detection to re-initialize automatically if enabled
    if (typeof(ASL.detect_ajax) != "undefined" && ASL.detect_ajax == 1) {
        scope("body").bind("DOMSubtreeModified", function() {
            clearTimeout(t);
            t = setTimeout(function(){
                _this.initialize();
            }, 500);
        });
    }
};

// Make a reference clone, just in case if an ajax page loader decides to override
window._ASL = ASL;

// Call the ready method
window._ASL.ready();