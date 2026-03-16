<instructions>
## 🚨 MANDATORY: CHANGELOG TRACKING 🚨

You MUST maintain this file to track your work across messages. This is NON-NEGOTIABLE.

---

## INSTRUCTIONS

- **MAX 5 lines** per entry - be concise but informative
- **Include file paths** of key files modified or discovered
- **Note patterns/conventions** found in the codebase
- **Sort entries by date** in DESCENDING order (most recent first)
- If this file gets corrupted, messy, or unsorted -> re-create it. 
- CRITICAL: Updating this file at the END of EVERY response is MANDATORY.
- CRITICAL: Keep this file under 300 lines. You are allowed to summarize, change the format, delete entries, etc., in order to keep it under the limit.

</instructions>

<changelog>
### 2026-03-16 — Merged homepage CTA + Newsletter into integrated block (HPV-style)
- Replaced two separate sections (`.cta-section` "Need help?" + `.footer-newsletter` "Stay informed") with single `.hp-footer-cta-block`
- New block: glassmorphism badge pills (GPhC Registered / Two Locations / Same-Day Service), bold H2, subtitle, white + ghost CTA buttons, tick checks row, divider, newsletter 2-col row
- New CSS: `.hp-footer-cta-block`, `.hp-cta-badges`, `.hp-footer-cta-title`, `.hp-btn-cta-white`, `.hp-btn-cta-ghost`, `.hp-footer-cta-divider`, `.hp-footer-newsletter-row` with responsive breakpoints
- Removed old `.cta-section`, `.cta-content-full`, `.btn-cta-primary`, `.footer-newsletter` CSS; footer `.footer-main` padding-top reduced
- Files: `index.html`, `styles.css`
### 2026-03-16 — Created blog post template page (Mounjaro article)
- New `health-hub/mounjaro-weight-loss-south-east-london.html` — full editorial blog post with 12 sections: hero, featured image, clinically reviewed E-E-A-T block, article body with TOC sidebar, weight calculator, medical warnings, callout cards, 8 FAQ accordions, closer CTA card, compliance pills, post navigation, social proof, related posts grid
- New `health-hub/blog-post.css` (~1000 lines) — all `bp-` prefixed classes, same design system (CSS variables, blue gradient, glassmorphism, Playfair Display + Inter typography, pill badges, card shadows, responsive breakpoints)
- Exact homepage header + footer with `/#` cross-page prefixed links, mobile nav drawer, search overlay
- SEO: Article + FAQPage JSON-LD schema markup, meta description, semantic HTML hierarchy
- Interactive: sticky TOC with active-scroll highlighting, FAQ accordion, weight loss calculator (kg/stone/lbs), scroll reveal system
### 2026-03-16 — Built Mounjaro vs Wegovy blog post (was stub causing white screen)
- Root cause: `health-hub/mounjaro-vs-wegovy-clinical-trials.html` was only `\n<!` — third instance of stub-file white screen issue
- Full article: 8 sections (dual mechanism, STEP 1 vs SURMOUNT-1 data, side effects, UK cost/access, which suits who, switching, bottom line)
- 8 FAQ accordions with schema markup, clinically reviewed E-E-A-T block, closer CTA, social proof, related posts grid
- Uses shared `blog-post.css` — no new CSS needed; inline JS for TOC, FAQ accordion, scroll reveal
- Exact homepage header/footer with `/#` cross-page links, mobile nav drawer, search overlay
### 2026-03-16 — Audited blog post navigation menus
- Confirmed both `health-hub/mounjaro-weight-loss-south-east-london.html` and `health-hub/mounjaro-vs-wegovy-clinical-trials.html` use full homepage nav (5 dropdowns, mobile drawer, search overlay, header actions)
- Minor difference: blog posts trim a few low-traffic sub-links from Services/Travel Health/Locations/About dropdowns vs homepage's exhaustive list
- No changes made — awaiting user decision on exact vs trimmed nav sync
### 2026-03-16 — Created HPV Vaccine London service page
- New `hpv-vaccine-london.html` — full conversion-focused service page with 12 sections: hero, quick info cards, understanding HPV, Gardasil 9 explainer, eligibility (3-card grid), dosing schedule (3-col), cancer protection (6 cards), how it works (science + appointment steps), side effects/safety, pricing (3-tier), why choose REY, locations, 12-question FAQ, final CTA, medical disclaimer
- New `hpv-vaccine-london.css` (~700 lines) — all `hpv-` prefixed classes, same design system (CSS variables, blue gradient, glassmorphism, pill badges, card hover effects, scroll-reveal, responsive breakpoints)
- SEO: title tag, meta description, LocalBusiness + MedicalBusiness + FAQPage JSON-LD schema, targets "HPV vaccine London" / "Gardasil 9 London"
- Nav includes HPV Vaccine link in Services dropdown and mobile nav; exact homepage header + footer with `/#` cross-page links
- Interactive: IntersectionObserver scroll-reveal, FAQ accordion with numbered badges, pricing cards with featured highlight
### 2026-03-16 — Swapped Menopause → HPV Vaccine in Services dropdown across all pages
- Replaced Menopause (sun icon, `#menopause` href, "HRT & support" desc) with HPV Vaccine (shield+check icon, `hpv-vaccine-london.html` link, "Gardasil 9 protection" desc)
- Updated desktop Specialist Care dropdown + mobile nav sub-link in: `index.html`, `thailand.html`, `weight-loss.html`, `prescription-services-south-east-london.html`, `travel-health-south-east-london.html`, `vitamin-b12-injection-south-east-london.html`, `hair-loss-treatment-south-east-london.html`
### 2026-03-16 — Upgraded HPV Vaccine page CTA to integrated travel-health style
- Replaced old `.hpv-final-cta` (plain centred text + green check spans + separate footer newsletter) with `.hpv-footer-cta-block` — same pattern as travel health page
- New block: glassmorphism badge pills row, bold H2, subtitle, two ghost/white CTA buttons, tick checks row, divider, newsletter row — all on blue gradient
- New CSS: `.hpv-footer-cta-block`, `.hpv-cta-badges`, `.hpv-footer-cta-title`, `.hpv-footer-cta-divider`, `.hpv-footer-newsletter-row` with responsive breakpoints
- Removed standalone footer newsletter section from footer (no double newsletter now); footer `footer-main` padding-top set to 0
- Files: `hpv-vaccine-london.html`, `hpv-vaccine-london.css`
### 2026-03-16 — Fixed hero trust checkmark colour on Yellow Fever page
- Changed `.yf-hero-trust` SVG check icons from green `#10B981` to yellow `#F5A623` to match page's yellow accent design system
- Full page rewrite to apply the change (replace_in_file had failed on dense inline SVG)
- File: `yellow-fever-vaccine-london.html`
### 2026-03-16 — Synced Yellow Fever page nav with homepage
- Replaced trimmed nav on `yellow-fever-vaccine-london.html` with exact homepage header (all 5 dropdowns including Travel Health mega menu)
- Added missing: Travel Health dropdown, NHS Vaccinations, Health Checks, Erectile Dysfunction, Account button, Get Directions, Certifications
- Mobile nav now includes Travel Health accordion with all sub-links, matching homepage exactly
- All cross-page hrefs use `/#` prefix; direct page links (weight-loss.html, hpv-vaccine-london.html etc.) kept as-is
### 2026-03-16 — Added premium motion system to Yellow Fever page (matching weight-loss)
- Hero choreography: staggered fade-up for eyebrow → h1 → subtitle → trust → CTAs; hero image slides in from right
- Scroll-reveal upgraded: directional reveals (left/right for 2-col), scale entrance for lifestyle banners, stagger-children delay system
- Quick-info cards: staggered reveal with animated number counter (counts up on scroll into view)
- Stat boxes (200,000 / 30-60K / 50%+ / 99%): number counter animation on scroll
- All section titles, cards, FAQ items, pricing, locations, CTA auto-tagged for reveal; `prefers-reduced-motion` respected
- Files: `yellow-fever-vaccine-london.html`, `yellow-fever-vaccine-london.css`
### 2026-03-16 — Added premium motion system to homepage (matching weight-loss page)
- Hero choreography: staggered slide-up for title lines → subtitle → "View all" button → service grid → trust badges; service cards pop in one by one
- Scroll-reveal: IntersectionObserver system with `hp-reveal`/`hp-visible` classes, directional reveals (left/right for location cards), scale for pharmacist section
- Stagger containers: articles, destinations, locations, benefits, testimonials, steps, team stats, products grids all get child stagger delays
- Number counter animations: destinations stats (2/20+/Same/5★), testimonials trust (4.9/5, 400+, 10,000+), team stat cards (8/15+/2/10,000+)
- Removed old script.js observer for `.benefit-card`, `.step-card`, `.product-card` (now handled by hp-reveal); `prefers-reduced-motion` respected
- Files: `styles.css`, `index.html`, `script.js`
### 2026-03-16 — Rewrote Mounjaro blog post to fix failed nav link edit
- Full rewrite of `health-hub/mounjaro-weight-loss-south-east-london.html` — replace_in_file had failed on dense inline SVG nav markup
- Updated Hepatitis A & B link in Travel Health dropdown from `/#hepatitis-a` to `/hepatitis-vaccine-london.html`
- Also updated Yellow Fever link to `/yellow-fever-vaccine-london.html`, Our Team link to `/meet-the-team.html`
- Added Hepatitis A & B sub-link to mobile Travel Health accordion; footer Quick Links now links to meet-the-team.html
### 2026-03-16 — Header menu fixes: Call Now → Book Now + search overlay bug
- Swapped "Call Now" CTA button to "Book Now" with calendar SVG icon (was phone icon + `tel:` link, now `#book-appointment` href)
- Fixed search overlay not opening: `script.js` had duplicate `const searchInput` declaration (`.search-overlay-input` + `.search-input`) causing SyntaxError that killed the entire script
- Removed the redundant second `searchInput` block (`.search-input` doesn't exist in DOM anyway) — first declaration for `.search-overlay-input` now runs correctly
- Search overlay: CSS was already in `styles.css`, JS was already wired — only the crash prevented it from working
- Files: `index.html`, `script.js`
### 2026-03-16 — Fixed search overlay invisible on blue backgrounds
- Root cause: `.search-overlay` sat inside `<header>` which has `backdrop-filter: blur(20px)` — creates a new containing block that clips `position: fixed` descendants
- JS fix: moves `.search-overlay` element from `<header>` to `<body>` on page load so it's free from the stacking context
- CSS fix: replaced semi-transparent `rgba(10,47,138,0.95)` bg with fully opaque dark-blue gradient; raised z-index to 9999
- Boosted input/suggestion contrast: thicker borders, higher background opacity, `box-shadow` depth, `backdrop-filter` on suggestion links
- Files: `styles.css`, `script.js`
<!-- NEXT_ENTRY_HERE -->
### 2026-03-16 — Upgraded hepatitis page locations to match homepage design
- Replaced plain text `.hep-loc-card` (no images, SVG icons, pill CTA) with rich cards matching homepage `.location-card` pattern
- New cards: pharmacy photos (same Unsplash assets as homepage), styled detail rows with icon images, blue top-bar hover accent, "Get Directions" + "Call Now" action buttons
- Renamed "Chislehurst Pharmacy — Station" → "Chislehurst Pharmacy"; title now "Find your nearest Rey London pharmacy" with gradient-text span
- New CSS: `.hep-loc-image`, `.hep-loc-content`, `.hep-loc-row`, `.hep-loc-actions`, `.hep-loc-btn-primary`, `.hep-loc-btn-outline` with hover lifts and responsive breakpoints
- Files: `hepatitis-vaccine-london.html`, `hepatitis-vaccine-london.css`

### 2026-03-16 — Created Hepatitis A & B Vaccines London service page
- New `hepatitis-vaccine-london.html` — full 14-section page: hero, quick info, understanding hepatitis, A vs B comparison table, who should get vaccinated (3-card), 3-tier pricing (Hep A £50, Hep B £50, Combined Twinrix £75 featured), vaccination process (sticky photo + 3 steps), high-risk regions (2-col), side effects/safety, NHS vs Private comparison table, why choose REY (6 cards), locations (2 cards), 15-question FAQ, integrated CTA+newsletter footer, medical disclaimer
- New `hepatitis-vaccine-london.css` (~900 lines) — all `hep-` prefixed classes, GREEN accent (#10B981 emerald, #059669 deep) for CTAs/icons/badges, same design system as Yellow Fever (card shadows, typography, section padding, glassmorphism, scroll-reveal, responsive breakpoints)
- SEO: title tag, meta description, LocalBusiness + MedicalBusiness + FAQPage JSON-LD schema, targets "hepatitis vaccine London" / "hepatitis A B Chislehurst" / "Twinrix London"
- Nav includes Hepatitis A & B link in Travel Health dropdown and mobile nav; exact homepage header + footer with `/#` cross-page links
- Interactive: IntersectionObserver scroll-reveal, FAQ accordion (15 questions), staggered card animations, stat number counter

### 2026-03-16 — Removed £85 price badge from Yellow Fever hero
- Deleted `.yf-hero-float-badge` element from `yellow-fever-vaccine-london.html` hero visual column
- Badge showed "£85 / All-inclusive, certificate included" with a document-check icon on a white card
### 2026-03-16 — Created Yellow Fever Vaccine London service page
- New `yellow-fever-vaccine-london.html` — full 14-section page: hero, quick info, what is yellow fever (with 4 stat boxes), why you need it (3 numbered cards), risk areas (Africa/South America 2-col), who should get it (3 cards), vaccination process (sticky photo + 3 steps), ICVP certificate (2-col checklist card), side effects/safety (lifestyle banner + two-col), pricing (single featured £85 card), why choose REY (6 cards), locations (2 cards), 12 FAQ accordions, integrated CTA+newsletter footer
- New `yellow-fever-vaccine-london.css` (~700 lines) — all `yf-` prefixed classes, exact HPV design system match (same card shadows, button styles, section padding, hover animations, scroll-reveal, glassmorphism CTA block)
- Added Yellow Fever to Services desktop dropdown and mobile nav across the page; footer col 3 replaced with Yellow Fever on-page links + NaTHNaC mention in footer registration line
- SEO: title tag, meta description, LocalBusiness + MedicalBusiness + FAQPage JSON-LD schema, targets "yellow fever vaccine London" / "NaTHNaC registered centre Chislehurst"
- Interactive: IntersectionObserver scroll-reveal, FAQ accordion (12 questions), safety banner with hover zoom

### 2026-03-16 — Fixed broken "Call Us" button in HPV footer CTA
- `.btn-cta-secondary-ghost` class was missing from `hpv-vaccine-london.css` — button rendered as raw unstyled link
- Added `.btn-cta-primary` and `.btn-cta-secondary-ghost` styles scoped to `.hpv-footer-cta-top`
- White ghost button with border, hover lift, matches Book Appointment button design
- Mobile responsive: full-width buttons on small screens
- File: `hpv-vaccine-london.css`

### 2026-03-16 — Added lifestyle images to HPV Vaccine How It Works & Side Effects sections
- "How the HPV Vaccine Works": converted to sticky 2-col grid — pharmacist consultation photo (Unsplash) on left with glassmorphism badge overlay, all content on right
- "Side Effects & Safety": added full-width 380px lifestyle banner (smiling patient after vaccination) with parallax-style hover zoom + dark gradient overlay + glassmorphism caption chip
- New CSS: `.hpv-hiw-grid`, `.hpv-hiw-photo-wrap`, `.hpv-hiw-photo-badge`, `.hpv-safety-banner`, `.hpv-safety-banner-overlay`, `.hpv-safety-banner-caption`
- Responsive: banner collapses to 220px on mobile, photo switches to 16:9 on tablet, sticky photo col goes static
- Files: `hpv-vaccine-london.html`, `hpv-vaccine-london.css`
### 2026-03-16 — Created Thailand Travel Vaccinations landing page
### 2026-03-16 — Created Thailand Travel Vaccinations landing page
- New `thailand.html` with 9 sections: hero, vaccines grid, health risks, malaria, booking process, locations, pricing, timing, why us, FAQ, final CTA
- New `thailand.css` dedicated stylesheet (~900 lines) using identical design system (blue gradient, glassmorphism, pill badges, card patterns)
- Updated `.screen-graph.json` with new page route
- Page includes: simplified nav, hero with Thailand image, 3-tier vaccine grid, health risk cards, pricing packages, FAQ accordion, dual-clinic CTAs
- Fully responsive with mobile breakpoints matching existing homepage behavior

### 2026-03-16 — Added Travel Health mega menu dropdown
- New nav item "Travel Health" between Services and Locations in `index.html`
- 4-column mega dropdown: Travel Vaccinations, Yellow Fever, Rabies, Malaria Prevention
- New CSS: `.travel-health-dropdown`, `.dropdown-content-4col` in `styles.css`
- Each section has 3–4 sub-links with icons, names, and descriptions

### 2026-03-16 — Replaced testimonials with premium section
- Replaced basic `.success-stories` section with full-width `.testimonials-premium` blue gradient section
- 6 testimonial cards with glassmorphism styling, star ratings, avatars, and trust indicators (4.9/5, 400+ reviews, 10K+ patients)
- New CSS classes: `.testimonials-premium`, `.testimonial-card`, `.testimonials-trust`, etc.
- Responsive: 3 cols → 2 cols → 1 col; matches destinations-section design language

### 2026-03-16 — Added Travel Destination Guide section
- New `destinations-section` added between Health Hub and Locations in `index.html` (10 regional destinations with vaccine counts)
- ~200 lines of new CSS in `styles.css` for destination cards, stats row, pill badge, decorative orbs
- Design inspired by client reference but adapted to Rey London's blue gradient design system
- Responsive grid: 5 cols desktop → 3 cols tablet → 2 cols mobile
### 2026-03-16 — Synced weight-loss.html nav with homepage
- Replaced custom simplified nav in `weight-loss.html` with exact homepage nav from `index.html`
- All 5 dropdowns now match: Services, Travel Health, Locations, About, Contact
- Added search/account icon buttons and full header-actions block
- All anchor hrefs prefixed with `/#` for cross-page routing back to homepage sections
- Established pattern: all sub-pages must use identical nav to homepage

### 2026-03-16 — Created Medical Weight Loss landing page
- New `weight-loss.html` — full SEO page targeting Chislehurst & Pond End, London
- New `weight-loss.css` — all new styles use homepage CSS variables exclusively (zero deviation)
- Sections: hero with floating stats, proof bar, problem/solution, 3 treatments, 6 outcome benefits, 4-step journey, 6 testimonials, dual-location cards with SEO copy, why-us, 8-question FAQ, dual-CTA footer
- Copy: dimensionalized benefits (joints, blood sugar, energy, BP, food relationship, sustainability), outcome-focused throughout
- SEO: targets "weight loss Chislehurst", "Mounjaro Chislehurst", "Wegovy London", "GLP-1 South East London"
### 2026-03-16 — Weight loss page quality uplift (badge + problem/solution)
- Replaced cheap pulsating green dot hero badge with clean SVG shield icon matching Thailand page pattern
- Removed all red (#ef4444, #991b1b, #7f1d1d) from problem/solution section — now uses neutral slate grey
- Changed "The old way" tag to "Traditional approach" with muted slate styling, removed medically alarmist red
- Problem card background: #fff5f5 → #f8f9fb (neutral), X icons: #ef4444 → #94a3b8 (grey), text: dark slate
- Files: `weight-loss.html`, `weight-loss.css`
### 2026-03-16 — Fixed gradient-text readability on weight-loss light sections
- `.gradient-text` animation cycled into `#e9f2f9` which was invisible on the light problem-section background
- Added override in `weight-loss.css` using darker gradient range (`--primary-blue` → `--light-blue` → `#3a6bb5`)
- Pulsating animation preserved, text now readable at all phases of the cycle
- File: `weight-loss.css`
### 2026-03-16 — Fixed decorative line overlap on weight-loss journey section
- `.gradient-text::after` line at `bottom: -8px` was colliding with `.section-subtitle` below
- Added `padding-bottom: 16px` and `margin-bottom: 24px` to `.how-it-works .section-title.gradient-text` in `weight-loss.css`
- File: `weight-loss.css`
### 2026-03-16 — Added scroll-reveal animations & hero entrance to weight-loss page
- Staggered hero text entrance (badge → title → subtitle → CTAs → trust), visual slides in from right, stat cards pop-in then float
- IntersectionObserver-based scroll-reveal system: sections, cards, grids all fade/slide in on scroll
- Proof bar numbers animate with counting-up effect when scrolled into view
- Alternating left/right reveal for 2-col grids (problem/solution, locations); scale effect for pharmacist section
- `prefers-reduced-motion` respected; files: `weight-loss.html`, `weight-loss.css`
### 2026-03-16 — Removed hero floating stat cards from weight-loss page
- Deleted both `.wl-stat-float` elements (20% stat + 4.9/5 reviews) from `weight-loss.html`
- Removed all related CSS: pop-in animation, float animation, positioning, responsive overrides in `weight-loss.css`
- Removed JS setTimeout that added `wl-float-active` class after entrance animation
- Files: `weight-loss.html`, `weight-loss.css`
### 2026-03-16 — Added lifestyle image banners to Thailand page
- Two horizontal photo banners between vaccine→health risks and malaria→booking sections
- Parallax-style: Thailand floating market + long-tail boats on clear water
- Glassmorphism caption overlay with icon, matching design system (blue gradient, blur, rounded)
- Responsive: 320px desktop → 240px mobile; caption adapts sizing
- Files: `thailand.html`, `thailand.css`
### 2026-03-16 — Fixed "Why Choose" grid & replaced $ with £ on Thailand page
- Added 8th card "Family-Friendly Consultations" to fill out 4×2 grid in why-us section
- Replaced dollar-sign SVG icon with pound-sign SVG on "Competitive Pricing" card and pricing section pill
- Changed `.th-why-grid` from `auto-fit, minmax(280px)` to `repeat(4, 1fr)` for even layout
- Mobile breakpoint: 2-col grid at 768px instead of 1-col for why cards
- Files: `thailand.html`, `thailand.css`
### 2026-03-16 — Added mobile hamburger navigation drawer
- Hamburger button in header (hidden on desktop, shown ≤1024px) with animated 3-line → X transition
- Slide-out drawer from right (360px wide, `is-open` class pattern) with overlay + blur backdrop
- Accordion sub-menus for Services, Travel Health, Locations, About — collapse on open-other
- Drawer footer: blue gradient "020 8467 3158" CTA button; body scroll locked while open
- Files: `index.html`, `styles.css`, `script.js`
### 2026-03-16 — Fixed empty prescription-services.css — full page CSS written
- `prescription-services.css` only contained `/* ` — all `rx-` classes were unstyled, page rendered as raw HTML
- Wrote complete stylesheet (~800 lines): hero (gradient bg, floating stat cards), stats bar, step cards, feature cards, benefits list, repeat dispensing, accept cards, collection service, why-us cards, FAQ accordion, scroll-reveal, responsive breakpoints
- Design system: matches existing blue gradient/glassmorphism/pill patterns from thailand.css and styles.css
- File: `prescription-services.css`

### 2026-03-16 — Prescription page: upgraded repeat dispensing section + merged bottom CTAs
- Converted "What is NHS Repeat Dispensing" section from bland grey `.rx-section-mid` to premium dark blue `.rx-section-dark` with glassmorphism cards
- Added dark-variant CSS: `.rx-repeat-card-dark`, `.rx-eps-note-dark`, `.rx-dark-body` etc.
- Merged standalone `cta-section` and `footer-newsletter` into single `.rx-footer-cta-block` inside footer — eliminates two adjacent blue sections bleeding together
- New CSS: `.rx-footer-cta-block`, `.rx-footer-cta-divider`, `.rx-footer-newsletter-row` with responsive breakpoints
- Files: `prescription-services-south-east-london.html`, `prescription-services.css`

### 2026-03-16 — Linked all weight loss CTAs to weight-loss.html
- Updated 6 links in `index.html`: Services dropdown, mobile nav sub-link, hero service card, search suggestions, benefit CTA, and footer link
- All `href="#weight-loss"` references now point to `weight-loss.html`
### 2026-03-16 — Created Travel Health Clinic landing page
- New `travel-health-south-east-london.html` — full SEO page with 10 sections: hero, stats, why-choose, destinations, services, vaccines, process, trust/about, locations, FAQ, CTA
- New `travel-health.css` — dedicated stylesheet using homepage design system (blue gradient, glassmorphism, pill badges, card patterns)
- Design: identical nav/footer to homepage, same section patterns (destinations-section, how-it-works, locations-section, cta-section), same CSS variables
- SEO: title tag, meta description, LocalBusiness + FAQPage schema markup, targeted keywords for South East London travel health
- 8 popular destination cards (Thailand→Indonesia), 12 vaccine cards, 5 service cards, 8 FAQ accordions, dual location cards
### 2026-03-16 — Linked Travel Clinic hero card to travel health page
- Updated `href` on Travel Clinic `.service-card` in hero from `#travel-clinic` to `travel-health-south-east-london.html`
- File: `index.html`
### 2026-03-16 — Premium design uplift: travel health hero, stats & why-choose sections
- Hero badge: replaced cheap white box with dark blue glassmorphism badge (icon wrap + 2-line text, gradient bg, inset glow)
- Stats section: replaced bland light gradient with dark blue glassmorphism cards (matching destinations/services pattern) — bold stat numbers, translucent cards
- Why Choose: removed 4th card (Two Locations), restructured to 3-col grid with proper image cards, numbered badges, hover zoom, CTA pill buttons
- New CSS classes: `.th-hero-badge-premium`, `.th-stats-section-dark`, `.th-stat-card-dark`, `.th-why-grid-3`, `.th-why-card`
- Files: `travel-health-south-east-london.html`, `travel-health.css`
### 2026-03-16 — Fixed thailand.html bespoke header & footer — replaced with homepage versions
- thailand.html had a stripped-down nav (no mega dropdowns, no hamburger, no Travel Health/Locations/About menus)
- Footer was also bespoke (no newsletter, no social links, undersized link columns)
- Replaced both `<header>` and `<footer>` blocks with exact copies from `index.html`, all hrefs prefixed with `/#`
- Updated PATTERNS.md to explicitly call out footer as required match, not just header
- File: `thailand.html`
### 2026-03-16 — Fixed mega menu hover persistence
- Pure CSS `:hover` caused dropdown to close when mouse crossed the 12px gap between nav link and panel
- Added invisible `::before` bridge (14px tall) on `.mega-dropdown` and `.dropdown-menu` to cover the gap
- Added JS 120ms close-debounce on `mouseleave` for both the `nav-item` and the dropdown panel itself
- Added `.nav-item.active` CSS class triggers alongside `:hover` so JS-controlled state is respected
- Added global `document click` listener to close all open dropdowns when clicking outside
- Files: `script.js`, `styles.css`
### 2026-03-16 — Systematic B12 page proofing & fixes
- Replaced all `th-` (travel-health) class prefixes with `b12-` own classes across hero, trust strip, CTA, FAQ, steps sections
- Rewrote CSS with full `b12-hero-grid`, `b12-hero-pill`, `b12-hero-title`, `b12-hero-badge-premium` etc. (no more dependency on travel-health.css)
- Fixed compare section: added padding-top on winner header, replaced wrench icon with injection/B12 icon
- Rebuilt "How it Works" section with `b12-step-card/b12-step-image/b12-step-content` (was using homepage step-card classes)
- Added inline IntersectionObserver scroll-reveal JS + FAQ accordion JS; removed hardcoded `b12-revealed` so animations trigger on scroll
- Files: `vitamin-b12-injection-south-east-london.html`, `vitamin-b12.css`

### 2026-03-16 — Built Vitamin B12 injection landing page (was empty file causing white screen)
- Root cause: `vitamin-b12-injection-south-east-london.html` contained only `\n<!` — file was never built out
- New full page: hero, stats bar, about/what-is-B12, symptoms (6 cards), injection vs tablets compare, how-it-works (3 steps), 6 benefits, pricing (3 tiers), locations, 8-question FAQ, CTA, full footer
- New `vitamin-b12.css` (~500 lines): all `b12-` prefixed classes, same design system (blue gradient, glassmorphism, scroll-reveal, responsive)
- SEO: title tag, meta description, LocalBusiness + FAQPage schema markup targeting South East London B12 searches
- Files: `vitamin-b12-injection-south-east-london.html`, `vitamin-b12.css`
### 2026-03-16 — Replaced B12 footer with exact homepage footer + B12-specific column
- Swapped out bespoke B12 footer (plain text cert badges, minimal social icons, custom columns)
- Now uses exact homepage footer: full newsletter form, brand col with proper contact cards, 4-col link grid
- Column 3 replaced with B12-specific "B12 Information" on-page links (symptoms, injection vs tablets, pricing, FAQ)
- Column 4 is homepage "Support" column; Column 2 is homepage "Services" column — all `/#` cross-page prefixes applied
- Footer bottom now uses real SVG cert assets (MHRA, GPhC, ICO) and Visa/Mastercard/Apple Pay/Google Pay
### 2026-03-16 — Created Health Hub main page
- New `health-hub.html` — full editorial magazine-style page at /health-hub with 7 sections: hero, choose-your-topic, featured article, latest articles grid, explore-by-topic, trusted expertise, newsletter + CTA
- New `health-hub.css` (~620 lines) — all `hh-` prefixed classes, same design system (CSS variables, blue gradient, glassmorphism, Playfair Display editorial type, hover lifts, scroll-reveal)
- Hero: dark blue gradient, Playfair Display H1, filter tabs (All/Weight Loss/Travel Health/Wellness) with JS category filtering on article grid
- 3 large magazine topic journey cards with full-bleed imagery, gradient overlay, animated CTA pill on hover
- Featured article: 60/40 split card with large landscape image, category badge, pharmacist byline avatar, read time
- 6 article cards (16:9 images, category color-coded badges, Playfair headlines, bylines) — JS filter ties to hero tabs
- 8 explore-by-topic tiles on dark blue gradient section; trusted expertise 2-col section with pharmacist image + 4 trust markers
- Exact homepage header + footer (newsletter form, 4-col link grid, cert badges, payment methods, social links)
### 2026-03-16 — Fixed Health Hub category filter tabs
- Filter tabs in hero now smooth-scroll to content and filter topic cards, featured article, and article grid
- Added `data-category` attributes to topic cards and featured card so all sections respond to filter
- Fixed scroll-reveal conflict: filtered-in cards get `hh-revealed` class forced on so they don't stay invisible
- Hidden featured section entirely when its category doesn't match the active filter
- Files: `health-hub.html`, `health-hub.css`

### 2026-03-16 — Premium uplift: Health Hub featured article section
- Replaced flat white `background: var(--white)` with subtle radial-gradient bg that flows between adjacent topic/articles sections
- Replaced cheap translucent pill badge with dark-blue glassmorphism capsule: gold star icon circle + "Featured This Week" / "Editor's Pick" 2-line text
- Deepened card box-shadow for more depth; added decorative radial glow on content column
- Responsive: badge scales down at 1024px breakpoint
- Files: `health-hub.html`, `health-hub.css`

### 2026-03-16 — Created Meet the Team page
- New `meet-the-team.html` — full team page: hero, lead pharmacist profile (Dilip Modhvadia), trust bar, qualifications grid, full team grid (5 members), values section, lifestyle banner, final CTA
- New `meet-the-team.css` (~500 lines) — all `mt-` prefixed classes, same design system (blue gradient, glassmorphism, pill badges, card hover effects, scroll-reveal, responsive)
- Lead pharmacist: sticky 2-col grid with photo + glassmorphism badge, floating "15+ years" stat card, credentials pills, specialisms cards, quote, CTA buttons
- Team grid on dark blue gradient: 5 member cards (Dilip, Bhavna, Adrian, Sophie, James) with avatar, role, bio, tags, book CTA; qualifications 4-card grid + GPhC card, 6 values cards
- Updated About dropdown nav to link to `meet-the-team.html` instead of `/#team`; exact homepage header + footer with `/#` cross-page links

### 2026-03-16 — Added Health Hub to About nav dropdown
- Added Health Hub link (book icon, "Expert health guides & advice" desc) to desktop About dropdown in `index.html`
- Added Health Hub sub-link to mobile About accordion in `index.html`
- Removed completed `health-hub-link-nav` TODO task
<!-- NEXT_ENTRY_HERE -->
</changelog>
