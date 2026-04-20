/**
 * Amelia booking form — hide "Free" price labels.
 *
 * Amelia renders the catalog as a Vue SPA. The price pill's class varies
 * between plugin versions, so CSS selectors alone aren't reliable. This
 * script finds any leaf-level element inside an Amelia container whose
 * trimmed text is exactly "Free" and hides it. A MutationObserver keeps
 * the rule applied as the SPA re-renders (search, filter, step change).
 *
 * Remove this file (and its enqueue) once real prices are configured in
 * Amelia.
 */
(function () {
    var TARGET_TEXT = 'Free';
    var LEAF_TAGS = 'span, div, p, strong, em, small, b, i, li, td';

    function hideFreeIn(root) {
        if (!root || !root.querySelectorAll) return;
        var nodes = root.querySelectorAll(LEAF_TAGS);
        for (var i = 0; i < nodes.length; i++) {
            var el = nodes[i];
            if (el.children.length === 0 && el.textContent.trim() === TARGET_TEXT) {
                el.style.setProperty('display', 'none', 'important');
            }
        }
    }

    function findRoots() {
        // Common Amelia wrapper patterns — match anything likely to contain the booking form.
        return document.querySelectorAll(
            '[class*="amelia"], [id*="amelia"], .amelia-app, .amelia-frontend'
        );
    }

    function init() {
        var roots = findRoots();
        if (!roots.length) {
            // Fall back to whole document if wrapper isn't detectable yet.
            hideFreeIn(document.body);
            return;
        }
        roots.forEach(function (root) {
            hideFreeIn(root);
            if (root._rlFreeObs) return;
            var obs = new MutationObserver(function () { hideFreeIn(root); });
            obs.observe(root, { childList: true, subtree: true, characterData: true });
            root._rlFreeObs = obs;
        });
    }

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', init);
    } else {
        init();
    }
    // Amelia loads lazily — re-run a few times to catch late-initialising SPAs.
    setTimeout(init, 800);
    setTimeout(init, 2000);
    setTimeout(init, 4000);
})();
