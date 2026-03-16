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

<!-- Newest debugging entries first. Closed issues move to "Resolved Issues" below. -->

## Resolved Issues

### 2026-03-16 — Prescription services page completely unstyled

**Status:** Fixed
**Symptoms:** Page renders as raw unstyled HTML — no layout, no colors, no spacing, no cards. Screenshot shows plain text with bullet icons.
**Root Cause:** `prescription-services.css` contained only `/* ` — an incomplete comment and zero actual CSS rules. All `rx-`-prefixed classes in the HTML had no corresponding styles.
**Solution:** Wrote complete `prescription-services.css` (~800 lines) covering: hero with gradient bg + floating stat cards, stats bar, step cards with images, feature cards (glassmorphism dark sections), benefits list, repeat dispensing grid, accept cards, collection service grid, why-us cards, FAQ accordion, scroll-reveal animations, and full responsive breakpoints.
**Prevention:** Always verify new page CSS files contain actual content after creation. Template from existing pages (thailand.css) when starting new landing pages.

<!-- Historical debugging records -->
