<?php
/**
 * Template Name: Legal & Policies
 * Template Post Type: page
 *
 * Combined page for Privacy Policy, Terms & Conditions, and Accessibility.
 *
 * @package Rey_London
 */

get_header();
?>

<div class="legal-page">

  <!-- ===================== HERO ===================== -->
  <section class="legal-hero">
    <div class="legal-hero-bg">
      <div class="legal-hero-orb legal-hero-orb-1"></div>
      <div class="legal-hero-orb legal-hero-orb-2"></div>
    </div>
    <div class="container legal-hero-inner">
      <span class="legal-eyebrow">Legal &amp; Compliance</span>
      <h1 class="legal-hero-title">Our Policies</h1>
      <p class="legal-hero-subtitle">Transparency matters. Here you'll find our privacy policy, terms of use, and accessibility commitment.</p>
      <p class="legal-hero-updated">Last updated: April 2026</p>
    </div>
  </section>

  <!-- ===================== TAB BAR ===================== -->
  <div class="legal-tabs-wrap">
    <div class="container">
      <nav class="legal-tabs" role="tablist">
        <button class="legal-tab legal-tab--active" id="tab-privacy" role="tab" aria-selected="true" aria-controls="panel-privacy">Privacy Policy</button>
        <button class="legal-tab" id="tab-terms" role="tab" aria-selected="false" aria-controls="panel-terms">Terms &amp; Conditions</button>
        <button class="legal-tab" id="tab-accessibility" role="tab" aria-selected="false" aria-controls="panel-accessibility">Accessibility</button>
      </nav>
    </div>
  </div>

  <!-- ===================== CONTENT PANELS ===================== -->
  <div class="legal-content">
    <div class="container">

      <!-- ==================== PRIVACY POLICY ==================== -->
      <div class="legal-panel legal-panel--active" id="panel-privacy" role="tabpanel" aria-labelledby="tab-privacy">

        <section class="legal-section">
          <h2>1. Who we are</h2>
          <p>Chislehurst Pharmacy Group operates two GPhC-registered community pharmacies in South East London:</p>
          <ul>
            <li><strong>Chislehurst Pharmacy &amp; Travel Clinic</strong> — 59 Chislehurst Rd, Chislehurst BR7 5NP (Tel: 020 8295 0017)</li>
            <li><strong>Pond Pharmacy</strong> — 59 High St, Chislehurst BR7 5AF (Tel: 020 8467 3158)</li>
          </ul>
          <p>We are the data controller for personal information collected through this website. Our contact email for data-related queries is <a href="mailto:support@chislehurstpharmacygroup.co.uk">support@chislehurstpharmacygroup.co.uk</a>.</p>
          <p>We are registered with the Information Commissioner's Office (ICO). Registration number: <strong>[[ICO_REG_NUMBER]]</strong>.</p>
        </section>

        <section class="legal-section">
          <h2>2. What data we collect</h2>
          <p>We collect personal information only where there is a clear reason to do so. The types of data we collect include:</p>

          <h3>Contact form</h3>
          <p>When you submit a message through our website contact form, we collect your name, email address, phone number (if provided), and the content of your message.</p>

          <h3>Newsletter</h3>
          <p>If you subscribe to our Health Hub newsletter, we collect your email address.</p>

          <h3>Appointment bookings</h3>
          <p>When you book an appointment through our online booking system, we collect your name, email address, phone number, and details of the service you are booking (e.g. type of consultation, preferred date and time).</p>

          <h3>Website analytics</h3>
          <p>We collect anonymised data about how visitors use our website, including pages visited, time spent on pages, and referral sources. This data does not identify you personally.</p>

          <h3>Information you give us in person</h3>
          <p>When you visit our pharmacies for consultations, vaccinations, or other clinical services, we may collect health information as required to provide safe and effective care. This information is handled under separate NHS and pharmacy regulations and is not covered by this website privacy policy.</p>
        </section>

        <section class="legal-section">
          <h2>3. How and why we use your data</h2>
          <p>We process personal data under the following lawful bases as defined by UK GDPR:</p>
          <ul>
            <li><strong>Consent</strong> — newsletter subscriptions and contact form submissions. You can withdraw consent at any time.</li>
            <li><strong>Contract</strong> — processing appointment bookings and delivering the services you have requested.</li>
            <li><strong>Legitimate interests</strong> — website analytics and service improvement, ensuring our website works correctly, and protecting against fraud or misuse.</li>
            <li><strong>Legal obligation</strong> — retaining certain records as required by pharmacy regulations and healthcare law.</li>
          </ul>
        </section>

        <section class="legal-section">
          <h2>4. Who we share your data with</h2>
          <p>We do not sell your personal data. We share it only with trusted third-party processors who help us run our services:</p>
          <ul>
            <li><strong>Brevo</strong> — processes newsletter subscriptions and sends marketing emails on our behalf. Data is stored within the EU.</li>
            <li><strong>Amelia</strong> — our appointment booking system, hosted on our own server infrastructure.</li>
            <li><strong>Google</strong> — provides website analytics (Google Analytics), embedded maps (Google Maps), and web fonts (Google Fonts).</li>
            <li><strong>Kinsta</strong> — our website hosting provider. Servers are located in Europe.</li>
          </ul>
          <p>All processors are contractually bound to handle your data securely and only for the purposes we specify.</p>
        </section>

        <section class="legal-section">
          <h2>5. How long we keep your data</h2>
          <ul>
            <li><strong>Contact form submissions</strong> — 2 years from the date of submission, then securely deleted.</li>
            <li><strong>Newsletter subscriptions</strong> — until you unsubscribe. You can do so at any time via the link in every email.</li>
            <li><strong>Appointment booking records</strong> — 8 years, in line with NHS Records Management Code of Practice for healthcare records.</li>
            <li><strong>Website analytics data</strong> — 26 months (Google Analytics default retention period).</li>
          </ul>
        </section>

        <section class="legal-section">
          <h2>6. Your rights</h2>
          <p>Under UK GDPR, you have the right to:</p>
          <ul>
            <li><strong>Access</strong> — request a copy of the personal data we hold about you.</li>
            <li><strong>Rectification</strong> — ask us to correct inaccurate or incomplete data.</li>
            <li><strong>Erasure</strong> — ask us to delete your data where there is no compelling reason to continue processing it.</li>
            <li><strong>Restriction</strong> — ask us to limit how we use your data.</li>
            <li><strong>Data portability</strong> — request your data in a structured, machine-readable format.</li>
            <li><strong>Object</strong> — object to processing based on legitimate interests or direct marketing.</li>
            <li><strong>Withdraw consent</strong> — where processing is based on consent, you can withdraw it at any time without affecting the lawfulness of prior processing.</li>
          </ul>
          <p>To exercise any of these rights, email us at <a href="mailto:support@chislehurstpharmacygroup.co.uk">support@chislehurstpharmacygroup.co.uk</a>. We will respond within one calendar month.</p>
        </section>

        <section class="legal-section">
          <h2>7. Cookies</h2>
          <p>Our website uses a limited number of cookies:</p>
          <ul>
            <li><strong>Essential cookies</strong> — required for the website to function (e.g. WordPress session cookies). These cannot be disabled.</li>
            <li><strong>Analytics cookies</strong> — Google Analytics cookies that help us understand how visitors use our site. These are anonymised.</li>
            <li><strong>Functional cookies</strong> — used by our booking system to maintain your session while you complete an appointment booking.</li>
          </ul>
          <p>We do not use advertising or tracking cookies.</p>
        </section>

        <section class="legal-section">
          <h2>8. Children's data</h2>
          <p>Our website is not directed at children under 13. We do not knowingly collect personal data from children. If you believe a child has submitted data through our website, please contact us and we will delete it promptly.</p>
        </section>

        <section class="legal-section">
          <h2>9. Changes to this policy</h2>
          <p>We may update this privacy policy from time to time. Any changes will be posted on this page with a revised "last updated" date. We encourage you to review this page periodically.</p>
        </section>

        <section class="legal-section">
          <h2>10. Contact and complaints</h2>
          <p>If you have questions about this privacy policy or wish to exercise your rights, contact us at:</p>
          <p><strong>Email:</strong> <a href="mailto:support@chislehurstpharmacygroup.co.uk">support@chislehurstpharmacygroup.co.uk</a></p>
          <p>If you are not satisfied with our response, you have the right to lodge a complaint with the Information Commissioner's Office (ICO):</p>
          <ul>
            <li>Website: <a href="https://ico.org.uk" target="_blank" rel="noopener">ico.org.uk</a></li>
            <li>Helpline: 0303 123 1113</li>
          </ul>
        </section>

      </div>

      <!-- ==================== TERMS & CONDITIONS ==================== -->
      <div class="legal-panel" id="panel-terms" role="tabpanel" aria-labelledby="tab-terms">

        <section class="legal-section">
          <h2>1. Acceptance of terms</h2>
          <p>By accessing and using the Chislehurst Pharmacy Group website, you agree to be bound by these terms and conditions. If you do not agree with any part of these terms, please do not use our website or services.</p>
        </section>

        <section class="legal-section">
          <h2>2. About our services</h2>
          <p>Chislehurst Pharmacy Group operates two GPhC-registered community pharmacies in South East London. We provide a range of NHS and private healthcare services including:</p>
          <ul>
            <li>NHS and private prescription dispensing</li>
            <li>Travel health consultations and vaccinations</li>
            <li>Private vaccinations (HPV, hepatitis, flu, and others)</li>
            <li>Weight loss consultations and GLP-1 medication services</li>
            <li>Vitamin B12 injections</li>
            <li>Hair loss treatment</li>
            <li>NHS Pharmacy First consultations</li>
            <li>Smoking cessation support</li>
          </ul>
          <p>All clinical services are delivered by GPhC-registered pharmacists. Our services are subject to clinical suitability — our pharmacists reserve the right to decline or modify a service if it is not clinically appropriate for you.</p>
        </section>

        <section class="legal-section">
          <h2>3. Booking and appointments</h2>
          <p>Appointments can be booked through our online booking system or by contacting either branch directly. When you book an appointment:</p>
          <ul>
            <li>You agree to provide accurate personal and health information.</li>
            <li>Appointment times are subject to availability and may be rescheduled if necessary.</li>
            <li>We ask that you give at least <strong>24 hours' notice</strong> if you need to cancel or reschedule.</li>
            <li>Repeated failure to attend booked appointments without notice may affect your ability to book future appointments online.</li>
          </ul>
        </section>

        <section class="legal-section">
          <h2>4. Payment</h2>
          <p>NHS services are provided free of charge where you are eligible. For private services:</p>
          <ul>
            <li>Prices are communicated before your appointment or during your consultation.</li>
            <li>Payment is due at the time of your appointment unless otherwise agreed.</li>
            <li>We accept debit and credit cards (Visa, Mastercard), Apple Pay, and Google Pay.</li>
            <li>Refunds for private services are considered on a case-by-case basis. Administered vaccinations and medications that have been dispensed cannot be refunded.</li>
          </ul>
        </section>

        <section class="legal-section">
          <h2>5. Your responsibilities</h2>
          <p>When using our services, you agree to:</p>
          <ul>
            <li>Provide accurate and complete information about your health, medications, allergies, and medical history.</li>
            <li>Inform us of any changes to your health that may affect treatment.</li>
            <li>Bring any required identification, prescriptions, or documentation to your appointment.</li>
            <li>Follow the advice and instructions provided by our pharmacists regarding your treatment.</li>
            <li>Treat our staff with courtesy and respect.</li>
          </ul>
        </section>

        <section class="legal-section">
          <h2>6. Clinical services disclaimer</h2>
          <p>Our pharmacist consultations are intended to complement, not replace, the care provided by your GP or hospital. Important points to note:</p>
          <ul>
            <li>Our pharmacists will assess your suitability for treatment during your consultation. Not all patients will be suitable for every service.</li>
            <li>If you are experiencing a medical emergency, call <strong>999</strong>. For urgent but non-emergency health concerns, call <strong>111</strong>.</li>
            <li>While our pharmacists are highly trained professionals, certain conditions require GP or specialist referral. We will always advise you if this is the case.</li>
          </ul>
        </section>

        <section class="legal-section">
          <h2>7. Website content</h2>
          <p>The information on our website is provided for general informational purposes only. While we make every effort to keep our content accurate and up to date:</p>
          <ul>
            <li>Website content does not constitute medical advice. Always consult a healthcare professional about your specific circumstances.</li>
            <li>We do not guarantee that all information is complete, accurate, or current at all times.</li>
            <li>Service availability, pricing, and opening hours are subject to change.</li>
          </ul>
        </section>

        <section class="legal-section">
          <h2>8. Intellectual property</h2>
          <p>All content on this website — including text, images, graphics, logos, and design — is the property of Chislehurst Pharmacy Group or its licensors and is protected by copyright law. You may not reproduce, distribute, or use any content without our prior written consent.</p>
        </section>

        <section class="legal-section">
          <h2>9. Limitation of liability</h2>
          <p>To the fullest extent permitted by law:</p>
          <ul>
            <li>We provide this website and its content on an "as is" basis.</li>
            <li>We are not liable for any indirect, incidental, or consequential loss arising from your use of this website.</li>
            <li>Our total liability for any claim arising from the use of this website shall not exceed the amount you have paid us for the relevant service, if any.</li>
            <li>Nothing in these terms excludes or limits our liability for death or personal injury caused by negligence, fraud, or any other liability that cannot be excluded by law.</li>
          </ul>
        </section>

        <section class="legal-section">
          <h2>10. Third-party links</h2>
          <p>Our website may contain links to external websites. We are not responsible for the content, privacy practices, or availability of these sites. Accessing third-party websites is at your own risk.</p>
        </section>

        <section class="legal-section">
          <h2>11. Changes to these terms</h2>
          <p>We may update these terms and conditions from time to time. Changes will be posted on this page with a revised date. Your continued use of our website after any changes constitutes acceptance of the updated terms.</p>
        </section>

        <section class="legal-section">
          <h2>12. Governing law</h2>
          <p>These terms are governed by and construed in accordance with the laws of England and Wales. Any disputes arising from these terms or your use of our website will be subject to the exclusive jurisdiction of the courts of England and Wales.</p>
        </section>

        <section class="legal-section">
          <h2>13. Contact</h2>
          <p>If you have questions about these terms, please contact us:</p>
          <p><strong>Email:</strong> <a href="mailto:support@chislehurstpharmacygroup.co.uk">support@chislehurstpharmacygroup.co.uk</a></p>
          <p><strong>Chislehurst Pharmacy:</strong> 020 8295 0017</p>
          <p><strong>Pond Pharmacy:</strong> 020 8467 3158</p>
        </section>

      </div>

      <!-- ==================== ACCESSIBILITY ==================== -->
      <div class="legal-panel" id="panel-accessibility" role="tabpanel" aria-labelledby="tab-accessibility">

        <section class="legal-section">
          <h2>Our commitment</h2>
          <p>Chislehurst Pharmacy Group is committed to making our website and services accessible to everyone, regardless of ability or technology. We believe that accessible healthcare starts with accessible information.</p>
          <p>We aim to conform to the <strong>Web Content Accessibility Guidelines (WCAG) 2.1 Level AA</strong> standard.</p>
        </section>

        <section class="legal-section">
          <h2>What we have done</h2>
          <p>We have taken the following steps to make our website as accessible as possible:</p>
          <ul>
            <li><strong>Semantic HTML</strong> — our pages use proper heading hierarchy, landmarks, and ARIA attributes to help screen readers navigate content logically.</li>
            <li><strong>Keyboard navigation</strong> — all interactive elements (links, buttons, forms) can be accessed and operated using a keyboard.</li>
            <li><strong>Alt text</strong> — all meaningful images include descriptive alternative text.</li>
            <li><strong>Colour contrast</strong> — text and interactive elements meet WCAG AA contrast ratios against their backgrounds.</li>
            <li><strong>Responsive design</strong> — our website adapts to different screen sizes and works well on mobile devices, tablets, and desktop computers.</li>
            <li><strong>Scalable text</strong> — text can be resized up to 200% without loss of content or functionality.</li>
            <li><strong>Clear language</strong> — we write in plain British English and avoid unnecessary jargon wherever possible.</li>
          </ul>
        </section>

        <section class="legal-section">
          <h2>Known limitations</h2>
          <p>We recognise that some parts of our website may not yet fully meet accessibility standards:</p>
          <ul>
            <li><strong>Embedded Google Maps</strong> — map embeds on our location pages are provided by Google and may not be fully accessible to all assistive technologies. Full addresses are always provided in text alongside the maps.</li>
            <li><strong>Booking system</strong> — our appointment booking tool (Amelia) is a third-party application. While it is largely accessible, some interactions may present challenges for screen reader users. You can always book by phone as an alternative.</li>
          </ul>
          <p>We are actively working to improve these areas and engage with our third-party providers to request accessibility improvements.</p>
        </section>

        <section class="legal-section">
          <h2>Need help?</h2>
          <p>If you experience any difficulty accessing our website or services, we want to hear from you. We will do our best to provide the information you need in an accessible format.</p>
          <p><strong>Email:</strong> <a href="mailto:support@chislehurstpharmacygroup.co.uk">support@chislehurstpharmacygroup.co.uk</a></p>
          <p><strong>Chislehurst Pharmacy:</strong> 020 8295 0017</p>
          <p><strong>Pond Pharmacy:</strong> 020 8467 3158</p>
        </section>

        <section class="legal-section">
          <h2>Accessibility at our pharmacies</h2>
          <p>Both of our branches are designed to be physically accessible:</p>
          <ul>
            <li>Ground-floor access with step-free entry</li>
            <li>Wide aisles suitable for wheelchair and pushchair access</li>
            <li>Hearing loop available — ask a member of staff</li>
            <li>Private consultation rooms for confidential discussions</li>
            <li>Our team is happy to assist anyone who needs additional support during their visit</li>
          </ul>
        </section>

        <section class="legal-section">
          <h2>Enforcement</h2>
          <p>If you are not satisfied with our response to an accessibility concern, you can contact the <strong>Equality Advisory Support Service (EASS)</strong>:</p>
          <ul>
            <li>Website: <a href="https://www.equalityadvisoryservice.com" target="_blank" rel="noopener">equalityadvisoryservice.com</a></li>
            <li>Telephone: 0808 800 0082</li>
          </ul>
        </section>

      </div>

    </div>
  </div>

</div>

<?php get_footer(); ?>
