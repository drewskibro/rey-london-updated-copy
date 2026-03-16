# Debugging Records & Issue Tracking

*This file is the single source of truth for debugging sessions, issues, and troubleshooting history in this project.*

## Purpose

Records debugging sessions, error patterns, root causes, solutions, and recurring issues. This file enables systematic problem-solving, prevents re-solving the same bugs, and provides context for future debugging efforts. It supports Roo Code's Debug Mode by maintaining a persistent record of diagnostic work.

## When to Update This File

Update this file when:
- Encountering a new error, bug, or unexpected behavior
- Identifying a root cause during investigation
- Applying a fix or workaround (successful or not)
- Noticing a recurring issue pattern
- During systematic debugging sessions (e.g., in Debug Mode)
- Discovering performance issues, edge cases, or race conditions
- After verifying a fix works across relevant scenarios

**Do not** log transient one-liners or obvious typos. Focus on issues requiring investigation or likely to recur.

## Format

Each entry follows this structure:

```
### [YYYY-MM-DD HH:MM] — [Short Issue Title]

**Status:** Open | Investigating | Fixed | Recurring | Won't Fix
**Symptoms:** What went wrong. Error messages, stack traces, reproduction steps.
**Environment:** dependencies, affected files.
**Root Cause:** (if found) What caused it.
**Investigation Steps:**
- Step 1: What was tried, results.
- Step 2: etc.
**Solution:** What fixed it (code changes, config, workaround).
**Prevention:** How to avoid this in future (patterns, tests, docs).
**Related:** Links to DECISIONS.md entries, commits, or tickets.
```

Mark as **Recurring** if the issue returns.

If this file gets corrupted, re-create it. 
CRITICAL: Keep this file under 300 lines. You are allowed to summarize, change the format, delete entries, etc., in order to keep it under the limit.

---

## Current Issues

### 2026-03-16 — Health Hub filter tabs non-functional
**Status:** Fixed
**Symptoms:** Clicking category filter tabs in hero did nothing visible — articles grid was off-screen, no scroll, topic cards and featured article not filtered.
**Root Cause:** (1) JS only filtered `.hh-article-card` — topic cards and featured section had no `data-category` attrs. (2) No smooth-scroll after filter so user couldn't see changes. (3) Scroll-reveal `hh-reveal` class kept opacity:0 on cards brought back from `display:none`.
**Solution:** Added `data-category` to topic cards + featured card. JS now filters all three sections, forces `hh-revealed` on shown items, hides featured section when mismatched, and smooth-scrolls to topics section on filter click.
**Prevention:** When building filter/tab UIs, ensure all filterable sections have matching data attributes and that scroll position lets the user see results.

<!-- Newest debugging entries first. Closed issues move to "Resolved Issues" below. -->

### 2026-03-16 — B12 page broken hero, missing animations, non-functional FAQ

**Status:** Fixed
**Symptoms:** Hero section unstyled (flat layout, no grid, no glassmorphism badge), compare section winner card icon was a wrench, FAQ wouldn't open/close, scroll-reveal animations never triggered because `b12-revealed` was hardcoded and no IntersectionObserver existed.
**Root Cause:** Page HTML reused `th-` travel-health class prefixes which relied on travel-health.css (not loaded). Steps section used homepage `step-card` classes. No page-specific JS for scroll-reveal or FAQ accordion.
**Solution:** (1) Replaced all `th-` classes with `b12-` equivalents. (2) Wrote complete `b12-` CSS for hero grid, pill, title, badge, trust strip, btn, CTA, FAQ, steps. (3) Added inline `<script>` with IntersectionObserver for `b12-revealed` and FAQ accordion for `b12-faq-trigger`. (4) Fixed compare icon from wrench to B12/injection SVG. (5) Added `padding-top: 44px` on winner header for badge space.
**Prevention:** When creating new pages, never reuse another page's class prefixes — always create page-specific classes with matching CSS. Always add scroll-reveal JS if using opacity:0/transform reveal pattern.

## Resolved Issues

### 2026-03-16 — Prescription services page completely unstyled

**Status:** Fixed
**Symptoms:** Page renders as raw unstyled HTML — no layout, no colors, no spacing, no cards. Screenshot shows plain text with bullet icons.
**Root Cause:** `prescription-services.css` contained only `/* ` — an incomplete comment and zero actual CSS rules. All `rx-`-prefixed classes in the HTML had no corresponding styles.
**Solution:** Wrote complete `prescription-services.css` (~800 lines) covering: hero with gradient bg + floating stat cards, stats bar, step cards with images, feature cards (glassmorphism dark sections), benefits list, repeat dispensing grid, accept cards, collection service grid, why-us cards, FAQ accordion, scroll-reveal animations, and full responsive breakpoints.
**Prevention:** Always verify new page CSS files contain actual content after creation. Template from existing pages (thailand.css) when starting new landing pages.

### 2026-03-16 — Vitamin B12 page white screen on click

**Status:** Fixed
**Symptoms:** Clicking the B12 hero card or nav link loaded a white screen.
**Root Cause:** `vitamin-b12-injection-south-east-london.html` contained only `\n<!` — the file was never properly built out.
**Solution:** Wrote complete landing page + `vitamin-b12.css` from scratch matching the design system.
**Prevention:** Same as prescription-services pattern — always verify new HTML files contain full content, not just a partial stub.

<!-- Historical debugging records -->
