# CLAUDE-rey-london.md — Rey London Client-Specific Documentation

> **Read `CLAUDE.md` first** for the shared PharmoDigital architecture (ACF patterns, helper function rules, deployment pipeline, CSS conventions). This file covers only Rey London-specific details.

---

## Client Details

- **Theme folder:** `rey-london-theme/`
- **Helper prefix:** `rl_option()`, `rl_field()`
- **Field key prefix:** `field_rl_[context]_[name]`
- **Group key prefix:** `group_rl_[context]`
- **Default pharmacy name:** Rey London Pharmacy
- **Phone (Pond):** 020 8467 3158
- **Phone (Chislehurst):** 020 8295 0017
- **Navigation:** Mega-menu (two-tier: nav bar + mega-menu dropdowns)
- **Locations:** 2 — Pond Pharmacy (High St, Chislehurst) + Chislehurst Pharmacy (Chislehurst Rd)

---

## Source HTML/CSS Reference

The static HTML/CSS designs live in the `rey-london-updated-copy` repository. These are the source-of-truth designs that the WordPress theme implements.

---

## Design System

### Colour Palette — Cool Blue Monochrome

Rey London uses a **cool blue monochrome** palette — distinct from Easy Pharmacy's warm cream/terracotta and Denton's blue + green.

```css
/* Core colours */
--primary-blue: #0a2f8a;       /* Main brand blue — CTAs, gradients */
--secondary-blue: #e9f2f9;     /* Light background blue */
--accent-blue: #0f307d;        /* Darker blue variant */
--dark-blue: #061d54;          /* Darkest blue — dark section backgrounds */
--light-blue: #5a7fc4;         /* Lighter accent — gradient endpoints */
--white: #FFFFFF;
--text-dark: #1A1A1A;          /* Primary text */
--text-gray: #6B7280;          /* Secondary text */
--border-light: #E5E7EB;
--dark-bg: #061d54;            /* Dark section background */
--light-bg: #F5F6FA;
```

### Main Gradient

```css
--gradient: linear-gradient(77deg, #0a2f8a -17.11%, #0f307d 30.47%, #5a7fc4 78.04%);
```

### Additional Colours (In CSS, Not Variables)

| Token | Value | Usage |
|-------|-------|-------|
| Body background | `#f8fafc` | Page background |
| Gold | `#facc15` | Star ratings |
| Gradient mid | `#7ba3d9` | Gradient accent |
| Gradient light | `#a8c5e8` | Lighter gradient |
| Footer bg | `#0f172a` | Dark slate footer |

### Shadows — Blue-Tinted

Unlike Easy Pharmacy's terracotta shadows, Rey London uses blue-tinted or neutral shadows:
```css
box-shadow: 0 25px 60px rgba(10, 47, 138, 0.15);   /* Card shadows */
box-shadow: 0 10px 25px -3px rgba(10, 47, 138, 0.3); /* CTA shadows */
```

---

## Typography

| Role | Font | Difference from Easy Pharmacy |
|------|------|-------------------------------|
| Body | `'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif` | EP uses DM Sans |
| Display/Headings | `'Playfair Display', serif` | Same |
| Accent | None | EP uses Syne |

Font weights used: 300, 400, 500, 600, 700, 800, 900.

---

## Navigation — Mega-Menu (Two-Tier)

Same pattern as Easy Pharmacy but with different menu items and two locations.

### Menu Structure

1. **Services** — mega dropdown (3-column + featured card)
   - NHS Services: Prescriptions, Consultations, Vaccinations
   - Private Services: Vitamin B12, Travel Clinic, Health Checks
   - Specialist Care: Weight Loss, Hair Loss, Erectile Dysfunction, HPV Vaccine
   - Featured: "Free Delivery Service" card

2. **Travel Health** — mega dropdown (4-column)
   - Travel Vaccinations: Hepatitis A, B, Typhoid, Cholera
   - Yellow Fever: Vaccine, Certificate, Country Requirements
   - Rabies: Pre-Exposure, Post-Exposure, High-Risk Areas
   - Malaria Prevention: Tablets, Consultation, Prevention Tips

3. **Locations** — simple dropdown
   - Pond Pharmacy, Chislehurst Pharmacy, Get Directions

4. **About** — simple dropdown
   - Our Team, Testimonials, Certifications, Health Hub

5. **Contact** — direct link

### Header Actions

- Search button (opens full-screen search overlay)
- Account button
- "Book Now" CTA (primary gradient)

### Full-Screen Search (Unique to Rey London)

The search overlay includes a hardcoded 24-page index with keyword scoring, real-time filtering, result highlighting, and category icons (Services, Travel Health, NHS Services, Health Hub, About, Locations). This will need converting to a WordPress search or retained as client-side search.

---

## CSS Prefix Convention

| Page | Prefix | CSS File |
|------|--------|----------|
| Homepage | `hp-` (animations), generic | `styles.css` |
| Weight Loss | `wl-` | `weight-loss.css` |
| Travel Health | `th-` | `travel-health.css` |
| Thailand | `th-` | `thailand.css` |
| Hair Loss | `hl-` | `hair-loss.css` |
| Prescriptions | `rx-` | `prescription-services.css` |
| Yellow Fever | `yf-` | `yellow-fever-vaccine-london.css` |
| Hepatitis | `hep-` | `hepatitis-vaccine-london.css` |
| HPV | `hpv-` | `hpv-vaccine-london.css` |
| Vitamin B12 | `b12-` | `vitamin-b12.css` |
| Health Hub | `hh-` | `health-hub.css` |
| Blog Posts | `bp-` | `health-hub/blog-post.css` |
| Meet the Team | `mt-` | `meet-the-team.css` |
| Contact | `ct-` | `contact.css` |

---

## ACF Field Group Organisation

| Series | Scope | Content |
|--------|-------|---------|
| **A1–A7** | Global options | Branding, contact (2 locations), compliance, social |
| **A8–A9** | Navigation | Mega-menu items & dropdowns |
| **B1–B13** | Homepage | One group per section |
| **C1–C3** | Blog posts | Reading time, TOC toggle, FAQs |
| **D1–D11** | Weight Loss | Hero through final CTA |
| **E1–E13** | Travel Health | Hero through final CTA |
| **F1–F12** | Thailand | Hero through final CTA |
| **G1–G15** | Yellow Fever | Hero through final CTA |
| **H1–H14** | Hepatitis | Hero through final CTA |
| **I1–I14** | HPV | Hero through final CTA |
| **J1–J11** | Vitamin B12 | Hero through final CTA |
| **K1–K17** | Hair Loss | Hero through final CTA |
| **L1–L15** | Prescriptions | Hero through final CTA |
| **M1–M7** | Meet the Team | Hero through final CTA |
| **N1–N8** | Contact | Hero through final CTA |
| **O1–O7** | Health Hub listing | Hero through CTA |

---

## Page Templates & Section Orders

### Top Banner (Shared)

All pages: blue gradient bar with "Free delivery on orders over £20 across London | Walk-ins welcome at both locations".

### Home Page (13 sections)

1. **Hero** — Title ("Healthcare that puts you first"), 5 service card grid (Prescriptions, Weight Loss, Health Checks, Travel Clinic, B12), trust badge logos (MHRA, PCI, ICO, GPC)
2. **Health Hub** — "Expert Advice" label, 3 article cards, "View all articles" CTA
3. **Destinations** — Dark bg, "Search Vaccines by Destination", 4 stat cards, 10 destination cards grid
4. **Locations** — 2 pharmacy cards (Pond + Chislehurst) with address, phone, hours, buttons
5. **Services** — 6 benefit cards grid with images
6. **Testimonials** — Dark bg, 6 cards with ratings, trust indicators (4.9/5, 400+ reviews, 10K+ patients)
7. **How It Works** — 4 step cards (Visit/Call, Consultation, Medication, Ongoing Support)
8. **Team** — Pharmacist hero (Sumeet Banker) with profile card, 4 stat cards, certifications
9. **Products** — 6 product cards with badges (Popular/New/Trending), prices, "Shop Now"
10. **CTA + Newsletter** — 3 trust badges, heading, 2 CTAs, checklist, email signup form
11. **Footer** — 4-col: brand + 2 location contacts + social, Services, Quick Links, Support
12. **Footer Bottom** — Copyright, GPhC reg, cert badges, payment methods (Visa, MC, Apple Pay, Google Pay)

### Weight Loss Page (9 sections)

1. **Hero** — "Medical Weight Loss · London" badge, title, CTAs, 4 trust items, stacked images
2. **Social Proof Bar** — 5 metrics (10K+ patients, 10-20% weight lost, 4.9/5, 2 clinics, same-day)
3. **Why Diets Fail** — "The Science Behind Weight Loss" pill, 4 stat cards, problem/solution dual cards
4. **Treatments** — 3 product cards (Mounjaro "Most Effective", Wegovy "NICE Approved", Saxenda) with prices
5. **Benefits** — 6 cards with images (joints, blood sugar, energy, BP, food relationship, lasting results)
6. **How It Works** — 4 steps (Consultation, Same-Day Rx, Monthly Check-Ins, Reach Goal)
7. **Testimonials** — Premium styled with orbs
8. **FAQs** — 9 accordion items
9. **Final CTA + Newsletter**

### Travel Health Page (11 sections)

1. **Hero** — "Official Yellow Fever Centre" badge, title, CTAs, trust strip (4 items), image with GPhC badge
2. **Stats** — Dark bg, 4 cards (Yellow Fever Centre, 1K+ travellers, 15+ years, 4.9★)
3. **Why Choose Us** — 3 numbered cards (Expert Consultations, Same-Day, Every Vaccine In Stock)
4. **Popular Destinations** — 8 cards with vaccine counts (Thailand 5, India 7, Kenya 6, Vietnam 5, Tanzania 6, Morocco 4, Dubai 3, Indonesia 5)
5. **Comprehensive Services** — 6 cards (Vaccinations, Malaria, Health Kits, Certificates, Pre-Travel Advice, Post-Travel Follow-Up)
6. **Available Vaccines** — 12 vaccine cards grid (Yellow Fever featured, plus 11 others)
7. **How It Works** — 3 steps
8. **Trust/About**
9. **Locations**
10. **FAQs**
11. **Final CTA + Newsletter**

### Thailand Page (12 sections)

1. **Hero** — "Thailand Travel Health" badge, title, CTAs, 3 trust badges, image
2. **Essential Vaccinations** — 3 categories: Routine (3), Recommended (4), Required (1)
3. **Lifestyle Banner** — Full-width image with overlay caption
4. **Health Risks** — Dark bg, 5 risk cards
5. **Antimalarial Medication**
6. **Booking Process** — Dark bg
7. **Clinic Locations**
8. **Pricing** — Dark bg
9. **Timing** — 6-8 week preparation timeline
10. **Why Choose Us** — Dark bg
11. **FAQs**
12. **Final CTA** — Dark bg

### Yellow Fever Page (15 sections)

1. **Hero** — "NaTHNaC Registered" eyebrow, title, trust strip (4 items: NaTHNaC, ICVP, GPhC, Valid for Life), CTAs, image
2. **Quick Info** — 4 fact cards (Lifetime, Official ICVP, 20 Min, 2 Locations)
3. **Understanding YF** — 2-col layout, 4 stat boxes (200K cases, 30-60K deaths, 50%+ mortality, 99% protection)
4. **Why You Need It** — 3 numbered cards (Legal, Prevention, Lifetime)
5. **Lifestyle Banner** — Full-width, "40+ Countries Require Certification"
6. **Risk Areas** — Dark bg, Africa (47 countries) + South America (13)
7. **Eligibility**
8. **How It Works**
9. **Certificate** — Dark bg, ICVP info
10. **Safety**
11. **Pricing**
12. **Why Us** — Dark bg
13. **Locations**
14. **FAQs**
15. **Footer CTA**

### Hepatitis Page (14 sections)

1. **Hero** — "GPhC Registered" eyebrow, title, trust strip (4 green items), CTAs, image
2. **Quick Info** — 4 fact cards (25+ Years, Essential, A/B/A+B, Flexible)
3. **Understanding Hep** — 2-col, 3 stat boxes (1.4M cases, 296M chronic, 820K deaths)
4. **Comparison Table** — Hep A vs B, 8 rows (transmission, regions, chronic, complications, recovery, schedule, duration, NHS)
5. **Eligibility** — Dark bg, 3 "who" cards (Travellers, Healthcare, Other)
6. **Pricing/Courses**
7. **How It Works**
8. **Risk Areas** — Dark bg
9. **Safety**
10. **NHS vs Private**
11. **Why Us** — Dark bg
12. **Locations**
13. **FAQs**
14. **Footer CTA**

### HPV Page (14 sections)

1. **Hero** — "Cancer Prevention" eyebrow, title, trust strip (4 green items), CTAs, SVG shield visual with "9 Types" badge
2. **Quick Info** — 4 fact cards (9 HPV Types, 1-2 Doses, 15 Min, 2 Locations)
3. **What is HPV** — 2-col with SVG visual, "70% of sexually active people" stat
4. **Gardasil 9** — 2-col reverse, protection percentages (90% cervical, 90% anal, etc.), "nearly 100% effective" highlight
5. **Eligibility**
6. **Dosing**
7. **Protection**
8. **How It Works**
9. **Safety**
10. **Pricing**
11. **Why Us**
12. **Locations**
13. **FAQs**
14. **Footer CTA**

### Vitamin B12 Page (11 sections)

1. **Hero** — "Private Injection Service" badge, title, CTAs, trust strip (4 items), image with GPhC/Hydroxocobalamin badge
2. **Stats** — 4 cards (1 in 5, 100% absorption, 24-72h, 15 min)
3. **About B12** — 2-col, 3+ fact cards (Energy Production, Nerve Function & DNA, etc.), image with "6-8 wks" badge
4. **Symptoms** — 6 cards (Fatigue, Brain Fog, Pins & Needles, Breathlessness, Low Mood, Pale Skin), risk groups note
5. **Comparison** — Injection vs Oral, 2-col with "recommended" badge on injection
6. **Process**
7. **Benefits**
8. **Pricing/Booking**
9. **Locations**
10. **FAQs**
11. **Final CTA**

### Hair Loss Page (13 sections)

1. **Hero** — "Private & Discreet Service" badge with lock icon, title, CTAs, 4 green trust items, image with GPhC badge
2. **Quick Info** — 4 stat cards (90%, 3-6 months, 100% private, 50% men)
3. **Understanding Hair Loss** — 2-col, 3 fact cards (The Pattern, The Cause, The Good News), image with "50% of men" badge
4. **Treatment Options** — Dark bg, 2 cards (Finasteride + Minoxidil) with option pills, plus Combination Therapy card
5. **How Our Service Works** — 2-col, 3 numbered steps
6. **Realistic Expectations**
7. **Who Can Use**
8. **Safety + Lifestyle Banner**
9. **Pricing**
10. **Why Choose Rey London**
11. **Locations**
12. **FAQs**
13. **Footer CTA + Medical Disclaimer**

### Prescriptions Page (13 sections)

1. **Hero** — Badge, title, CTAs, trust strip (4 items), 2 floating stat cards (GPhC + 24-48hr Delivery)
2. **Stats Bar** — 5 metrics (Free, 10K+, 15+ years, 2 locations, 4.9/5)
3. **How It Works** — 3 steps
4. **Free Delivery** — Dark bg, 4 feature cards (Delivery, Tracking, Reminders, Discreet Packaging)
5. **Online Ordering** — 2-col, 5 benefit items
6. **Repeat Dispensing** — Dark bg, 4 benefit cards + EPS note
7. **What We Accept** — Dark bg, NHS vs Private 2-col (7 items each)
8. **GP Collection** — 2-col
9. **Trust/Why Choose Us**
10. **Locations**
11. **FAQs**
12. **Certifications Row** — MHRA, PCI, ICO, GPhC
13. **Final CTA + Newsletter**

### Health Hub — Blog Listing (7 sections)

1. **Hero** — Title, subtitle, category filter tabs
2. **Topics** — "What brings you here?" cards (weight-loss, travel-health, wellness)
3. **Featured Article** — Single large card
4. **Articles Grid** — Filterable by `data-category`, 3-col responsive
5. **Explore by Topic**
6. **Trust Section**
7. **CTA**

**Category badges:** `bp-badge--weight` (purple), `bp-badge--travel` (blue), `bp-badge--wellness` (green), `bp-badge--seasonal` (red)

### Single Blog Post Template (10 sections)

1. **Hero** — Breadcrumb (Home > Health Hub > Category), category badge, reading time, h1 title, author row (avatar, name, role, date)
2. **Featured Image** — Rounded card with shadow
3. **Clinically Reviewed Card** — Author + reviewer info (avatar, name, title, GPhC, verification link)
4. **Article Body** — Sticky TOC sidebar (collapsible, numbered, active state) + content (h2/h3 headings, callout cards, warning boxes, inline calculator for weight loss posts)
5. **FAQ Section** — Numbered accordion with expand/collapse
6. **Closer Card** — Pharmacist CTA with avatar, name, GPhC, action buttons, trust badges
7. **Compliance Pills** — Trust badge row
8. **Post Navigation** — Previous/next links
9. **Social Proof** — Google rating card + trust headline
10. **Related Posts** — 3-card grid

### Meet the Team Page (7 sections)

1. **Hero** — Eyebrow with icon, title with gradient text, subtitle, trust badges
2. **Lead Pharmacist** — Photo card with floating "15+ years" stat, bio, specialism cards linking to services
3. **Trust Bar**
4. **Qualifications** — Cards + GPhC registration badge
5. **Team Grid** — Featured lead card (larger, badged) + member cards
6. **Values** — Why patients choose the team
7. **Final CTA**

### Contact Page (8 sections)

1. **Hero** — 2-col grid: left (eyebrow, title, subtitle, trust badges, CTAs), right (info cards for locations, hours, contact)
2. **Quick Options** — 4 service cards (Prescriptions, Travel, Health Checks, Hair Loss)
3. **Locations** — Detailed cards with hours, services, map links
4. **Map** — Embedded map
5. **Contact Form** — Grid layout with form fields
6. **Opening Hours** — Detailed hours display
7. **FAQs**
8. **Footer CTA**

---

## JavaScript Features (script.js)

| Feature | Description |
|---------|-------------|
| Mobile nav toggle | Hamburger → slide-out drawer with accordion sections |
| Desktop dropdowns | Hover-triggered with 120ms debounced close timer |
| Search overlay | Full-screen modal with 24-page index, scoring, highlighting |
| Scroll animations | IntersectionObserver, `hp-reveal` classes, staggered children |
| Treatment card tilt | Perspective transform on mousemove |
| Magnetic button | "View all services" button follows cursor |
| Newsletter form | Email validation with success feedback |
| Smooth scrolling | Anchor links with offset for fixed header |
| Header scroll effects | Shadow + backdrop blur on scroll > 50px |

---

## Key Differences from Easy Pharmacy

| Aspect | Rey London | Easy Pharmacy |
|--------|-----------|---------------|
| Palette | Cool blue monochrome (`#0a2f8a`) | Warm cream + terracotta (`#C47A65`) |
| Body font | Inter | DM Sans |
| Accent font | None | Syne |
| Locations | 2 (Pond + Chislehurst) | 1 (Ashford) |
| Dark section bg | Navy `#061d54` | Purple gradient `#6B4FA0 → #8B6BBF` |
| Hero style | Blue gradient + service cards | Warm cream bg + terracotta CTAs |
| Products section | Yes (6 cards with prices) | No |
| Destinations section | Yes (10 cards) | No |
| Blog calculator | Yes (inline in weight loss posts) | No |
| Full-screen search | Yes (client-side 24-page index) | No |
| Reviewer Profile page | No | Yes |
| Switch Provider page | No | Yes |
| Trust badge logos | MHRA, PCI, ICO, GPC images | Text-based glassmorphic pills |
| Footer contacts | 2 location cards | 1 location |
| Payment badges | Visa, MC, Apple Pay, Google Pay | Not present |

---

## Shared Patterns (Identical to Easy Pharmacy)

These patterns from the shared `CLAUDE.md` apply without modification:

- ACF fallback chain: page field → options field → hardcoded default
- Helper function strict null checks (never use `empty()` or `?:`)
- Image fields: always `type => 'image'`, `return_format => 'id'`
- Template part location rules
- Footer 4-column grid structure
- FAQ accordion pattern
- CSS cache-busting via `filemtime()` on CSS file
- Responsive breakpoints (640px, 768px, 1024px)
- Glassmorphism `backdrop-filter` with `-webkit-` prefix
- `pointer-events: none` on decorative overlays
- Font Awesome 6.4.0 via CDN
- Deployment: GitHub Actions → SCP → Kinsta

---

## Pages Unique to Rey London (Not in Easy Pharmacy)

- **Prescriptions** (`rx-` prefix) — full prescription services page with NHS/Private comparison, repeat dispensing, GP collection
- **Products section** on homepage — 6 product cards with prices (e-commerce teaser)
- **Destinations section** on homepage — 10 destination cards linking to travel pages
- **Inline blog calculator** — weight loss calculator embedded in blog post content

## Pages in Easy Pharmacy But NOT in Rey London

- **Switch Provider** — provider switching benefits page
- **Reviewer Profile** — standalone pharmacist E-E-A-T page
- **Book Appointment** — dedicated booking page (Rey London uses direct CTAs instead)
