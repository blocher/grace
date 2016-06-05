!function (t) {
    parseInt(bizlight_misc_links.WP_version) < 4 && (t(".preview-notice").prepend('<span style="font-weight:bold;">' + bizlight_misc_links.old_version_message + "</span>"),
        jQuery("#customize-info .btn-upgrade, .misc_links").click(function (t) {
            t.stopPropagation()
        })), t(".preview-notice").prepend('<span id="bizlight_upgrade"><a target="_blank" class="button btn-upgrade" href="' + bizlight_misc_links.upgrade_link + '">' + bizlight_misc_links.upgrade_text + "</a></span>"), jQuery("#customize-info .btn-upgrade, .misc_links").click(function (t) {
        t.stopPropagation()
    })
}(jQuery);