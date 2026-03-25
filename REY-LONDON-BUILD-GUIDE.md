# Rey London WordPress Theme — Build Guide

**For:** Web Developer
**Project:** PharmoDigital Pharmacy Templates
**Source designs:** `drewskibro/rey-london-updated-copy`
**Architecture reference:** `CLAUDE-rey-london.md` (page specs, section orders, ACF series)

---

## What You're Building

You're converting static HTML/CSS files into a WordPress theme powered by Advanced Custom Fields (ACF). Every piece of visible content — every heading, image, button label, phone number, link — must be editable from the WordPress admin. The hardcoded value from the HTML becomes the default fallback, not the final content.

### The Golden Rule

**If the client can see it, the client must be able to change it.**

---

## How the ACF System Works

Two layers of fields:

1. **Global fields (Options pages)** — Site-wide settings: pharmacy name, phone numbers, logos, addresses, hours, GPhC numbers, social links, navigation. Live under WP Admin > Pharmacy Settings. Accessed via `rl_option('field_name', 'default value')`.

2. **Page fields** — Content specific to individual pages: hero headlines, FAQ questions, treatment cards. Edited on each page's edit screen. Accessed via `rl_field('field_name', 'default value')`.

**Fallback chain:** page field → options field → hardcoded default. The theme works out of the box with zero configuration.

---

## Client Details

- **Theme folder:** `rey-london-theme/`
- **Helper prefix:** `rl_` (e.g. `rl_option()`, `rl_field()`, `rl_phone()`)
- **Field key prefix:** `field_rl_[context]_[name]`
- **Group key prefix:** `group_rl_[context]`
- **Pharmacy name:** Rey London Pharmacy
- **Locations:** 2 — Pond Pharmacy (020 8467 3158) + Chislehurst Pharmacy (020 8295 0017)
- **Navigation:** Two-tier mega-menu (nav bar + mega-menu dropdowns)
- **Fonts:** Inter (body), Playfair Display (headings)
- **Palette:** Cool blue monochrome (`#0a2f8a` primary, `#061d54` dark sections, `#5a7fc4` light accent)

---

## Theme Folder Structure

```
rey-london-theme/
├── style.css                         # Theme metadata only
├── functions.php                     # Setup, enqueuing, helpers
├── header.php                        # Mega-menu navigation
├── footer.php                        # 4-column footer
├── index.php                         # Blog listing fallback
├── single.php                        # Single blog post
├── archive.php                       # Archive/category listing
├── page.php                          # Default page template
├── 404.php
│
├── inc/
│   ├── acf-options.php               # ACF options pages
│   └── acf-fields.php                # ALL ACF field definitions
│
├── page-templates/
│   ├── page-home.php
│   ├── page-weight-loss.php
│   ├── page-travel-health.php
│   ├── page-thailand.php
│   ├── page-yellow-fever.php
│   ├── page-hepatitis.php
│   ├── page-hpv.php
│   ├── page-vitamin-b12.php
│   ├── page-hair-loss.php
│   ├── page-prescription-services.php
│   ├── page-health-hub.php
│   ├── page-meet-the-team.php
│   └── page-contact.php
│
├── template-parts/                   # Reusable section components
│   ├── section-hero.php
│   ├── section-stats.php
│   ├── section-testimonials.php
│   ├── section-how-it-works.php
│   ├── section-locations.php
│   ├── section-faq.php
│   ├── section-final-cta.php
│   ├── article-card.php
│   └── featured-article-card.php
│
└── assets/
    ├── css/
    │   ├── globals.css               # Base styles, variables, shared components
    │   ├── rey-london-nav.css        # Navigation styles
    │   ├── blog.css                  # Health Hub + single post
    │   └── [page-name].css           # One per page template
    ├── js/
    │   ├── rey-london-nav.js         # Navigation + search overlay
    │   ├── blog.js                   # Category filtering, TOC, FAQ
    │   └── [page-name].js            # One per page if needed
    └── images/
        └── logo.svg
```

---

## High-Level Build Order

### Phase 1: Foundation

1. **Theme skeleton** — `style.css`, `functions.php`, `header.php`, `footer.php`, `index.php`, `page.php`, `404.php`

2. **functions.php** — Theme setup, enqueue Google Fonts (Inter, Playfair Display), Font Awesome 6.4.0, `globals.css` + `rey-london-nav.css` + `rey-london-nav.js` on every page, conditional page-specific CSS/JS, helper functions, include `acf-options.php` + `acf-fields.php`, disable Gutenberg on custom templates

3. **Helper functions:**
   - `rl_option($field, $default)` — ACF option field
   - `rl_field($field, $default)` — ACF page field
   - `rl_pharmacy_name()` — Pharmacy name
   - `rl_phone($location)` — Phone number (needs to handle 2 locations)
   - `rl_phone_link($location)` — Digits-only for `tel:` links
   - `rl_booking_url()` — Booking URL
   - `rl_logo_url()` — Logo (ACF → theme mod → SVG fallback)

4. **acf-options.php** — Register options pages: Branding, Contact & Locations, Registration & Compliance, Social Media, Navigation

5. **globals.css** — Copy from source HTML. Contains variables, base styles, shared components

6. **Navigation** — `rey-london-nav.css` + `rey-london-nav.js` + `header.php`. Two-tier mega-menu with search overlay. Must work before anything else looks right

7. **footer.php** — 4-column footer (brand + 2 location contacts + social, Services, Quick Links, Support) + certifications + copyright + payment badges

### Phase 2: Home Page

Build `page-home.php` loading 13 sections via `get_template_part()`. Register ACF fields for each section (B-series). This is the reference implementation — get it right and other pages follow the same logic.

### Phase 3: Service Pages (one at a time)

Build in this order:

| Order | Page | Template | CSS prefix | ACF series |
|-------|------|----------|------------|------------|
| 1 | Weight Loss | `page-weight-loss.php` | `wl-` | D |
| 2 | Travel Health | `page-travel-health.php` | `th-` | E |
| 3 | Thailand | `page-thailand.php` | `th-` | F |
| 4 | Hair Loss | `page-hair-loss.php` | `hl-` | K |
| 5 | Prescriptions | `page-prescription-services.php` | `rx-` | L |
| 6 | Meet the Team | `page-meet-the-team.php` | `mt-` | M |
| 7 | Contact | `page-contact.php` | `ct-` | N |

### Phase 4: Vaccination Pages

Build Yellow Fever first, then duplicate the pattern for Hepatitis, HPV, and Vitamin B12. They share a similar structure (hero → quick info → education → eligibility → pricing → locations → FAQ → CTA).

| Page | CSS prefix | ACF series |
|------|------------|------------|
| Yellow Fever | `yf-` | G |
| Hepatitis | `hep-` | H |
| HPV | `hpv-` | I |
| Vitamin B12 | `b12-` | J |

### Phase 5: Blog System

1. Health Hub listing (`page-health-hub.php` + `blog.css` + `blog.js`) — ACF series O
2. Single post (`single.php`) — with sticky TOC, clinically reviewed card, inline calculator, FAQ section, social proof, related posts — ACF series C
3. `archive.php` and `index.php` reuse the same grid layout

### Phase 6: Polish

404 page, responsive testing, cross-browser testing (Safari `backdrop-filter`), final ACF field audit.

---

## Options Pages (WP Admin > Pharmacy Settings)

| Sub-page | What the client edits |
|----------|----------------------|
| Branding | Pharmacy name, logo, tagline, Google rating |
| Contact & Locations | Phone numbers (×2), email, addresses (×2), hours (×2), map, parking |
| Registration & Compliance | GPhC number, company reg, superintendent pharmacist + GPhC |
| Social Media | Facebook, Instagram, Twitter, LinkedIn URLs |
| Navigation | Menu items: show/hide toggles, labels, page links, dropdown sub-links |

**Note:** Rey London has 2 locations. Contact & Locations needs paired fields or a repeater for both pharmacies.

---

## ACF Field Registration

### The Pattern

```php
// In the template:
$headline = rl_field('hero_title', 'Default Headline Text');

// In acf-fields.php:
array(
    'key'           => 'field_rl_home_hero_title',
    'label'         => 'Hero Title',
    'name'          => 'hero_title',
    'type'          => 'text',
    'default_value' => 'Default Headline Text',
)
```

### Field Types

| Content | ACF type | Return format |
|---------|----------|---------------|
| Short text (headings, labels, buttons) | `text` | String |
| Longer text (descriptions, bios) | `textarea` | String |
| Rich text (blog content) | `wysiwyg` | HTML string |
| Images | `image` | **ID** (never URL) |
| Internal page links | `page_link` | URL string |
| External links | `url` | URL string |
| Yes/No toggles | `true_false` | Integer (1 or 0) |
| Lists of similar items | `repeater` | Array |

### Naming Convention

| Identifier | Pattern | Example |
|-----------|---------|---------|
| Field key | `field_rl_[context]_[name]` | `field_rl_home_hero_title` |
| Field name (used in code) | `[section]_[name]` | `hero_title` |
| Label (client sees this) | Human-readable | `Hero Title` |

### ACF Series Organisation

| Series | Scope |
|--------|-------|
| A1–A7 | Global options |
| A8–A9 | Navigation |
| B1–B13 | Homepage |
| C1–C3 | Blog posts |
| D | Weight Loss |
| E | Travel Health |
| F | Thailand |
| G | Yellow Fever |
| H | Hepatitis |
| I | HPV |
| J | Vitamin B12 |
| K | Hair Loss |
| L | Prescriptions |
| M | Meet the Team |
| N | Contact |
| O | Health Hub listing |

### Location Rules

Every field group needs a location rule:

```php
// For page templates:
'location' => array(array(array(
    'param'    => 'page_template',
    'operator' => '==',
    'value'    => 'page-templates/page-weight-loss.php',
))),

// For options pages:
'location' => array(array(array(
    'param'    => 'options_page',
    'operator' => '==',
    'value'    => 'acf-options-branding',
))),
```

**Common mistake:** Forgetting the location rule. The page looks fine (defaults display) but the client can't edit anything because the fields don't show in the admin.

---

## CSS Prefix Convention

| Page | Prefix |
|------|--------|
| Homepage | `hp-` |
| Weight Loss | `wl-` |
| Travel Health | `th-` |
| Thailand | `th-` |
| Hair Loss | `hl-` |
| Prescriptions | `rx-` |
| Yellow Fever | `yf-` |
| Hepatitis | `hep-` |
| HPV | `hpv-` |
| Vitamin B12 | `b12-` |
| Health Hub | `hh-` |
| Blog Posts | `bp-` |
| Meet the Team | `mt-` |
| Contact | `ct-` |

Each page gets its own CSS file. Prefixes prevent class name collisions between pages.

---

## Three Critical Rules

### 1. Helper Functions Use Strict Null Checks

```php
function rl_option($field_name, $default = '') {
    if (function_exists('get_field')) {
        $value = get_field($field_name, 'option');
        if ($value === null || $value === '') {
            return $default;
        }
        return $value;
    }
    return $default;
}
```

**Never** change these to use `empty()`, `!$value`, or `?:`. ACF `true_false` fields return `0` for "No" — loose checks treat that as falsy and always return the default.

### 2. Images Are Always Type 'image', Return Format 'id'

```php
array(
    'type'          => 'image',
    'return_format' => 'id',
    'preview_size'  => 'medium',
)
```

Never use `type => 'url'`. That gives the client a plain text input instead of the Media Library picker.

### 3. CSS Cache-Busting Uses CSS filemtime

```php
// RIGHT:
define('THEME_VERSION', filemtime(get_theme_file_path('assets/css/globals.css')));

// WRONG:
define('THEME_VERSION', filemtime(__FILE__));
```

---

## Known Gotchas

### Mega-Menu Pointer Events

The dropdown wrapper must have `pointer-events: none` even when visible. Only the inner content and hover bridge get `pointer-events: auto`. Without this, invisible dropdown bounding boxes block clicks on hero CTAs and page content.

```css
.mega-menu-has-dropdown:hover .mega-menu-dropdown {
    opacity: 1;
    visibility: visible;
    pointer-events: none;    /* Wrapper stays transparent */
}
.mega-menu-dropdown-inner {
    pointer-events: auto;    /* Only visible content captures clicks */
}
```

### Decorative Overlays Block Clicks

Any `position: absolute; inset: 0` overlay (hero gradients, decorative orbs) needs `pointer-events: none`.

### Safari Glassmorphism

Always include both:
```css
backdrop-filter: blur(12px);
-webkit-backdrop-filter: blur(12px);
```

### Two Locations

Rey London has 2 pharmacies. Anywhere the Denton theme had a single phone number, address, or map — Rey London needs both. The footer has 2 contact cards. The contact page, locations sections, and several service pages show both pharmacies.

### Search Overlay

The source HTML has a client-side search with a hardcoded 24-page index. This needs converting to either WordPress search or a maintained page index in the nav JS. Keep the same UI (full-screen overlay, real-time filtering, category icons).

### Blog Post Features Unique to Rey London

- **Sticky table of contents** — auto-generated from h2/h3 headings, collapsible, with active state highlighting
- **Inline calculator** — weight loss calculator embedded in blog post content
- **Clinically reviewed card** — author + reviewer info with GPhC verification
- **Social proof section** — Google rating card at bottom of posts

---

## Testing Checklist (Use After Every Page)

### Visual Match
- [ ] Matches source HTML at 1440px desktop
- [ ] Matches at 768px tablet
- [ ] Matches at 375px mobile
- [ ] Animations working (scroll reveals, floating orbs, pulse dots)
- [ ] Hover states match (cards, buttons)
- [ ] Navigation works (mega-menu dropdowns, mobile drawer, search overlay)

### ACF Coverage
- [ ] Open page in WP Admin — all field groups visible
- [ ] Change every text field — changes appear on frontend
- [ ] Upload different images — they display correctly
- [ ] Change every URL — navigates correctly
- [ ] Toggle show/hide fields — sections appear/disappear
- [ ] Add/remove/reorder repeater items — works correctly
- [ ] Delete all values — hardcoded defaults reappear

### Code Quality
- [ ] No hardcoded content without `rl_field()` or `rl_option()`
- [ ] No hardcoded phone numbers — use `rl_phone()`
- [ ] No hardcoded pharmacy name — use `rl_pharmacy_name()`
- [ ] All images use `type => 'image'` with `return_format => 'id'`
- [ ] CSS prefix matches page convention
- [ ] No class name collisions with other pages

---

## Colour Reference

```css
--primary-blue: #0a2f8a;       /* Brand blue — CTAs, gradients */
--secondary-blue: #e9f2f9;     /* Light background */
--accent-blue: #0f307d;        /* Darker variant */
--dark-blue: #061d54;          /* Dark section backgrounds */
--light-blue: #5a7fc4;         /* Gradient endpoint */
--text-dark: #1A1A1A;
--text-gray: #6B7280;
--border-light: #E5E7EB;

/* Main gradient */
--gradient: linear-gradient(77deg, #0a2f8a, #0f307d, #5a7fc4);

/* Star ratings */
color: #facc15;

/* Footer */
background: #0f172a;
```

---

## Page Section Orders

For the complete section-by-section breakdown of every page (what each section contains, how many cards/items, what content is editable), refer to `CLAUDE-rey-london.md` in the repo root. That document is the page specification — this document is the build process.

---

## The Non-Negotiables

1. **Every visible element gets an ACF field** — no exceptions
2. **Every field has a hardcoded default** — theme works out of the box
3. **Match the source HTML exactly** — pixel-perfect desktop, responsive all breakpoints
4. **Use the `rl_` prefix everywhere** — functions, field keys, group keys
5. **Test every field visually** — if you can't change it from admin and see it on frontend, it's not done
6. **Read `CLAUDE-rey-london.md` before every page build** — it has the section orders and specs
