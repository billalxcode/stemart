/**
 *
 * You can write your JS code here, DO NOT touch the default style file
 * because it will make it harder for you to update.
 * 
 */

"use strict";
$(document).on("submit", "form", function (event) {
    let btn = $(this).find("button[type='submit']")
    if (btn.length >= 1) {
        if (!btn.hasClass("without-loading")) {
            btn.attr('disabled', true)
            btn.html(
                '<i class="fa fa-spin fa-spinner"></i> Wait ...'
            )
            btn.submit()
        }
        
    }
})