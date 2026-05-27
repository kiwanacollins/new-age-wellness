<?php

/**
 * CMS Page Content Seeder for New Age Wellness Solutions
 * Run via: php seed_cms_pages.php
 */

$pages = [
    1 => [ // About Us
        'meta_title'       => 'About Us | New Age Wellness Solutions Kenya',
        'meta_description' => 'New Age Wellness Solutions is Kenya\'s leading online wellness store. We bring you premium health supplements, herbal remedies, and natural wellness products. Learn our story.',
        'meta_keywords'    => 'about new age wellness kenya, wellness store nairobi, health supplements kenya, natural health products kenya',
        'html_content'     => <<<HTML
<div class="static-container" style="max-width:860px;margin:0 auto;padding:40px 20px;font-family:inherit;color:#333;">
  <h1 style="font-size:2rem;font-weight:700;color:#2d5016;margin-bottom:16px;">About New Age Wellness Solutions</h1>
  <p style="font-size:1.1rem;line-height:1.8;margin-bottom:20px;">
    Welcome to <strong>New Age Wellness Solutions</strong> — Kenya's trusted destination for premium health and wellness products.
    We believe that good health is not a luxury; it is a right. Our mission is to make high-quality, natural wellness products
    accessible to every Kenyan household, delivered right to your door.
  </p>

  <h2 style="font-size:1.4rem;font-weight:600;color:#2d5016;margin-bottom:12px;">Our Story</h2>
  <p style="line-height:1.8;margin-bottom:20px;">
    Founded with a passion for holistic living, New Age Wellness Solutions was born out of a simple conviction:
    nature provides everything we need to thrive. We source the finest supplements, herbal extracts, vitamins,
    skincare, and superfoods from trusted manufacturers — both locally and internationally — and bring them to you
    through a seamless, secure online shopping experience.
  </p>

  <h2 style="font-size:1.4rem;font-weight:600;color:#2d5016;margin-bottom:12px;">What We Offer</h2>
  <ul style="line-height:2;padding-left:20px;margin-bottom:20px;">
    <li>Premium dietary supplements and multivitamins</li>
    <li>Herbal teas, tinctures, and plant-based remedies</li>
    <li>Natural skincare and beauty products</li>
    <li>Superfoods, protein powders, and sports nutrition</li>
    <li>Essential oils and aromatherapy products</li>
    <li>Weight management and detox solutions</li>
  </ul>

  <h2 style="font-size:1.4rem;font-weight:600;color:#2d5016;margin-bottom:12px;">Why Choose Us?</h2>
  <ul style="line-height:2;padding-left:20px;margin-bottom:20px;">
    <li><strong>Authenticity Guaranteed:</strong> All products are sourced from verified, reputable manufacturers.</li>
    <li><strong>Kenya-Wide Delivery:</strong> We deliver to Nairobi, Mombasa, Kisumu, Nakuru, Eldoret, and all counties across Kenya.</li>
    <li><strong>Secure Payments:</strong> Pay via M-Pesa, credit/debit card, or bank transfer — safely and conveniently.</li>
    <li><strong>Expert Guidance:</strong> Our team is always ready to help you find the right product for your wellness goals.</li>
    <li><strong>Competitive Pricing:</strong> We negotiate directly with suppliers to keep prices fair and accessible.</li>
  </ul>

  <h2 style="font-size:1.4rem;font-weight:600;color:#2d5016;margin-bottom:12px;">Our Commitment to Kenya</h2>
  <p style="line-height:1.8;margin-bottom:20px;">
    We are proud to be a Kenyan business serving Kenyan communities. We actively support local wellness initiatives and
    partner with Kenyan health professionals to promote a culture of preventive health care. When you shop with us,
    you invest in your health and support a proudly local enterprise.
  </p>

  <h2 style="font-size:1.4rem;font-weight:600;color:#2d5016;margin-bottom:12px;">Get In Touch</h2>
  <p style="line-height:1.8;">
    Have questions? Our friendly customer care team is available Monday–Saturday, 8 AM – 6 PM EAT.<br>
    📧 Email: <a href="mailto:info@newagewellnesssolutions.com" style="color:#2d5016;">info@newagewellnesssolutions.com</a><br>
    🌐 Website: <a href="https://newagewellnesssolutions.com" style="color:#2d5016;">newagewellnesssolutions.com</a>
  </p>
</div>
HTML,
    ],

    2 => [ // Return Policy
        'meta_title'       => 'Return Policy | New Age Wellness Solutions Kenya',
        'meta_description' => 'Learn about the New Age Wellness Solutions return policy. We offer hassle-free returns within 7 days for eligible products. Your satisfaction is our priority.',
        'meta_keywords'    => 'return policy kenya, wellness product returns, new age wellness returns, refund returns kenya',
        'html_content'     => <<<HTML
<div class="static-container" style="max-width:860px;margin:0 auto;padding:40px 20px;font-family:inherit;color:#333;">
  <h1 style="font-size:2rem;font-weight:700;color:#2d5016;margin-bottom:16px;">Return Policy</h1>
  <p style="line-height:1.8;margin-bottom:20px;">
    At <strong>New Age Wellness Solutions</strong>, your satisfaction matters to us. If you are not fully satisfied with your purchase,
    we are here to help. Please read our return policy carefully before initiating a return.
  </p>

  <h2 style="font-size:1.4rem;font-weight:600;color:#2d5016;margin-bottom:12px;">Eligibility for Returns</h2>
  <p style="line-height:1.8;margin-bottom:12px;">You may return an item within <strong>7 days</strong> of delivery, provided that:</p>
  <ul style="line-height:2;padding-left:20px;margin-bottom:20px;">
    <li>The product is unused and in its original, sealed packaging.</li>
    <li>The product has not been tampered with, opened, or partially consumed.</li>
    <li>The original receipt or order confirmation is available.</li>
    <li>The product is not listed under non-returnable items below.</li>
  </ul>

  <h2 style="font-size:1.4rem;font-weight:600;color:#2d5016;margin-bottom:12px;">Non-Returnable Items</h2>
  <p style="line-height:1.8;margin-bottom:12px;">For health and safety reasons, the following items cannot be returned:</p>
  <ul style="line-height:2;padding-left:20px;margin-bottom:20px;">
    <li>Opened or partially used supplements, vitamins, or herbal products</li>
    <li>Perishable or consumable goods</li>
    <li>Personal care and hygiene products once opened</li>
    <li>Products purchased on sale or with a special discount</li>
    <li>Items damaged due to customer misuse or negligence</li>
  </ul>

  <h2 style="font-size:1.4rem;font-weight:600;color:#2d5016;margin-bottom:12px;">How to Initiate a Return</h2>
  <ol style="line-height:2;padding-left:20px;margin-bottom:20px;">
    <li>Contact our customer care team at <a href="mailto:info@newagewellnesssolutions.com" style="color:#2d5016;">info@newagewellnesssolutions.com</a> within 7 days of receiving your order.</li>
    <li>Provide your order number, the item(s) you wish to return, and the reason for the return.</li>
    <li>Our team will review your request and respond within 1–2 business days.</li>
    <li>Upon approval, we will provide instructions on how to ship the item back to us.</li>
    <li>Return shipping costs are the responsibility of the customer unless the return is due to our error (wrong or defective item).</li>
  </ol>

  <h2 style="font-size:1.4rem;font-weight:600;color:#2d5016;margin-bottom:12px;">Damaged or Wrong Items</h2>
  <p style="line-height:1.8;margin-bottom:20px;">
    If you received a damaged, defective, or incorrect item, please contact us immediately with photos of the product and packaging.
    We will arrange a free replacement or full refund at no additional cost to you.
  </p>

  <h2 style="font-size:1.4rem;font-weight:600;color:#2d5016;margin-bottom:12px;">Contact Us</h2>
  <p style="line-height:1.8;">
    📧 <a href="mailto:info@newagewellnesssolutions.com" style="color:#2d5016;">info@newagewellnesssolutions.com</a><br>
    Hours: Monday–Saturday, 8 AM – 6 PM EAT
  </p>
</div>
HTML,
    ],

    3 => [ // Refund Policy
        'meta_title'       => 'Refund Policy | New Age Wellness Solutions Kenya',
        'meta_description' => 'Read the refund policy of New Age Wellness Solutions. We process refunds within 7–14 business days. Transparent, fair, and customer-friendly refund process.',
        'meta_keywords'    => 'refund policy kenya, wellness store refund, new age wellness refund, online shop refund kenya',
        'html_content'     => <<<HTML
<div class="static-container" style="max-width:860px;margin:0 auto;padding:40px 20px;font-family:inherit;color:#333;">
  <h1 style="font-size:2rem;font-weight:700;color:#2d5016;margin-bottom:16px;">Refund Policy</h1>
  <p style="line-height:1.8;margin-bottom:20px;">
    We want every customer to be completely satisfied with their purchase. If something is not right,
    <strong>New Age Wellness Solutions</strong> is committed to making it right through our clear and fair refund process.
  </p>

  <h2 style="font-size:1.4rem;font-weight:600;color:#2d5016;margin-bottom:12px;">When Are Refunds Issued?</h2>
  <p style="line-height:1.8;margin-bottom:12px;">You are eligible for a refund in the following situations:</p>
  <ul style="line-height:2;padding-left:20px;margin-bottom:20px;">
    <li>You received a defective or damaged product.</li>
    <li>You received the wrong product (not what you ordered).</li>
    <li>Your order was not delivered within the stated delivery window and was confirmed lost.</li>
    <li>Your return request was approved under our Return Policy.</li>
  </ul>

  <h2 style="font-size:1.4rem;font-weight:600;color:#2d5016;margin-bottom:12px;">Refund Process</h2>
  <ol style="line-height:2;padding-left:20px;margin-bottom:20px;">
    <li>Submit a refund request by emailing <a href="mailto:info@newagewellnesssolutions.com" style="color:#2d5016;">info@newagewellnesssolutions.com</a> with your order number and reason.</li>
    <li>Our team will review your request within <strong>1–2 business days</strong>.</li>
    <li>If approved, the refund will be processed to your original payment method within <strong>7–14 business days</strong>.</li>
    <li>For M-Pesa payments, refunds are sent directly to your M-Pesa number.</li>
    <li>For card payments, the refund will appear on your statement within your bank's processing time (usually 5–10 business days).</li>
  </ol>

  <h2 style="font-size:1.4rem;font-weight:600;color:#2d5016;margin-bottom:12px;">Partial Refunds</h2>
  <p style="line-height:1.8;margin-bottom:20px;">
    In some cases, only a partial refund may be granted — for example, if an item has been partially used,
    is missing original packaging, or shows signs of damage not caused by our handling.
  </p>

  <h2 style="font-size:1.4rem;font-weight:600;color:#2d5016;margin-bottom:12px;">Non-Refundable Situations</h2>
  <ul style="line-height:2;padding-left:20px;margin-bottom:20px;">
    <li>Change of mind after opening or using the product</li>
    <li>Products that do not qualify for return (see our Return Policy)</li>
    <li>Delivery delays caused by external factors (weather, public holidays, etc.)</li>
  </ul>

  <h2 style="font-size:1.4rem;font-weight:600;color:#2d5016;margin-bottom:12px;">Questions?</h2>
  <p style="line-height:1.8;">
    If you have any questions about our refund policy, please reach out:<br>
    📧 <a href="mailto:info@newagewellnesssolutions.com" style="color:#2d5016;">info@newagewellnesssolutions.com</a><br>
    Hours: Monday–Saturday, 8 AM – 6 PM EAT
  </p>
</div>
HTML,
    ],

    4 => [ // Terms & Conditions
        'meta_title'       => 'Terms & Conditions | New Age Wellness Solutions Kenya',
        'meta_description' => 'Read the terms and conditions governing the use of the New Age Wellness Solutions website and purchase of products in Kenya.',
        'meta_keywords'    => 'terms conditions kenya, wellness store terms, new age wellness legal, online shopping terms kenya',
        'html_content'     => <<<HTML
<div class="static-container" style="max-width:860px;margin:0 auto;padding:40px 20px;font-family:inherit;color:#333;">
  <h1 style="font-size:2rem;font-weight:700;color:#2d5016;margin-bottom:16px;">Terms &amp; Conditions</h1>
  <p style="line-height:1.8;margin-bottom:20px;">
    These Terms and Conditions ("Terms") govern your use of the <strong>New Age Wellness Solutions</strong> website
    (<a href="https://newagewellnesssolutions.com" style="color:#2d5016;">newagewellnesssolutions.com</a>) and the purchase of products through our platform.
    By accessing our website or placing an order, you agree to be bound by these Terms.
  </p>

  <h2 style="font-size:1.4rem;font-weight:600;color:#2d5016;margin-bottom:12px;">1. Use of Our Website</h2>
  <ul style="line-height:2;padding-left:20px;margin-bottom:20px;">
    <li>You must be at least 18 years old to make a purchase on our website.</li>
    <li>You agree not to use our website for any unlawful or prohibited purpose.</li>
    <li>You are responsible for maintaining the confidentiality of your account credentials.</li>
    <li>We reserve the right to suspend or terminate accounts that violate these Terms.</li>
  </ul>

  <h2 style="font-size:1.4rem;font-weight:600;color:#2d5016;margin-bottom:12px;">2. Product Information</h2>
  <p style="line-height:1.8;margin-bottom:20px;">
    We make every effort to ensure product descriptions, images, and pricing are accurate. However, errors may occasionally occur.
    We reserve the right to correct any inaccuracies and to cancel orders placed for incorrectly priced items,
    with full notification and refund to the affected customer.
  </p>

  <h2 style="font-size:1.4rem;font-weight:600;color:#2d5016;margin-bottom:12px;">3. Pricing &amp; Payment</h2>
  <ul style="line-height:2;padding-left:20px;margin-bottom:20px;">
    <li>All prices are listed in Kenyan Shillings (KES) and include applicable taxes.</li>
    <li>We accept M-Pesa, Visa, Mastercard, and other approved payment methods.</li>
    <li>Payment is required in full at the time of purchase.</li>
    <li>We use secure encryption to protect all payment transactions.</li>
  </ul>

  <h2 style="font-size:1.4rem;font-weight:600;color:#2d5016;margin-bottom:12px;">4. Delivery</h2>
  <p style="line-height:1.8;margin-bottom:20px;">
    Delivery timelines are estimates and may vary due to location, courier availability, or unforeseen circumstances.
    We are not liable for delays caused by third-party logistics providers or events beyond our control.
  </p>

  <h2 style="font-size:1.4rem;font-weight:600;color:#2d5016;margin-bottom:12px;">5. Health Disclaimer</h2>
  <p style="line-height:1.8;margin-bottom:20px;">
    Products sold on our website are not intended to diagnose, treat, cure, or prevent any disease.
    Always consult a qualified healthcare professional before starting any new supplement or wellness regimen,
    especially if you are pregnant, nursing, or taking prescription medications.
  </p>

  <h2 style="font-size:1.4rem;font-weight:600;color:#2d5016;margin-bottom:12px;">6. Intellectual Property</h2>
  <p style="line-height:1.8;margin-bottom:20px;">
    All content on this website — including text, images, logos, and product descriptions — is the property of
    New Age Wellness Solutions and is protected by Kenyan and international intellectual property laws.
    You may not reproduce or redistribute any content without prior written permission.
  </p>

  <h2 style="font-size:1.4rem;font-weight:600;color:#2d5016;margin-bottom:12px;">7. Limitation of Liability</h2>
  <p style="line-height:1.8;margin-bottom:20px;">
    To the fullest extent permitted by law, New Age Wellness Solutions shall not be liable for any indirect,
    incidental, or consequential damages arising from the use of our products or website.
  </p>

  <h2 style="font-size:1.4rem;font-weight:600;color:#2d5016;margin-bottom:12px;">8. Governing Law</h2>
  <p style="line-height:1.8;margin-bottom:20px;">
    These Terms shall be governed by and construed in accordance with the laws of the Republic of Kenya.
    Any disputes shall be subject to the exclusive jurisdiction of the courts of Kenya.
  </p>

  <h2 style="font-size:1.4rem;font-weight:600;color:#2d5016;margin-bottom:12px;">9. Changes to These Terms</h2>
  <p style="line-height:1.8;margin-bottom:20px;">
    We reserve the right to update these Terms at any time. Changes will be published on this page with an updated date.
    Continued use of our website constitutes acceptance of the revised Terms.
  </p>

  <p style="font-size:0.9rem;color:#666;"><em>Last updated: May 2026</em></p>
</div>
HTML,
    ],

    5 => [ // Terms of Use
        'meta_title'       => 'Terms of Use | New Age Wellness Solutions Kenya',
        'meta_description' => 'Terms of Use for the New Age Wellness Solutions website. Understand your rights and responsibilities when browsing and shopping on our platform.',
        'meta_keywords'    => 'terms of use kenya, website terms new age wellness, acceptable use policy kenya',
        'html_content'     => <<<HTML
<div class="static-container" style="max-width:860px;margin:0 auto;padding:40px 20px;font-family:inherit;color:#333;">
  <h1 style="font-size:2rem;font-weight:700;color:#2d5016;margin-bottom:16px;">Terms of Use</h1>
  <p style="line-height:1.8;margin-bottom:20px;">
    These Terms of Use outline the rules and guidelines for accessing and using the <strong>New Age Wellness Solutions</strong>
    website. By visiting <a href="https://newagewellnesssolutions.com" style="color:#2d5016;">newagewellnesssolutions.com</a>,
    you confirm that you have read, understood, and agree to these terms.
  </p>

  <h2 style="font-size:1.4rem;font-weight:600;color:#2d5016;margin-bottom:12px;">Acceptable Use</h2>
  <p style="line-height:1.8;margin-bottom:12px;">When using our website, you agree that you will <strong>not</strong>:</p>
  <ul style="line-height:2;padding-left:20px;margin-bottom:20px;">
    <li>Use the website for any fraudulent, misleading, or unlawful purpose.</li>
    <li>Attempt to gain unauthorised access to any part of our website or systems.</li>
    <li>Upload or transmit viruses, malware, or harmful code.</li>
    <li>Scrape, copy, or reproduce website content without written permission.</li>
    <li>Impersonate any person or entity or misrepresent your affiliation.</li>
    <li>Engage in any activity that could damage, disable, or impair the website.</li>
  </ul>

  <h2 style="font-size:1.4rem;font-weight:600;color:#2d5016;margin-bottom:12px;">User Accounts</h2>
  <p style="line-height:1.8;margin-bottom:20px;">
    If you create an account on our website, you are responsible for all activity under your account.
    Please keep your login credentials secure and notify us immediately if you suspect any unauthorised access.
    We reserve the right to terminate accounts that violate our policies.
  </p>

  <h2 style="font-size:1.4rem;font-weight:600;color:#2d5016;margin-bottom:12px;">Third-Party Links</h2>
  <p style="line-height:1.8;margin-bottom:20px;">
    Our website may contain links to third-party websites for your convenience. We do not control these websites
    and are not responsible for their content, privacy practices, or accuracy. Accessing third-party sites is at your own risk.
  </p>

  <h2 style="font-size:1.4rem;font-weight:600;color:#2d5016;margin-bottom:12px;">Cookies</h2>
  <p style="line-height:1.8;margin-bottom:20px;">
    We use cookies to enhance your browsing experience, remember preferences, and analyse website traffic.
    By continuing to use our website, you consent to our use of cookies in accordance with our Privacy Policy.
  </p>

  <h2 style="font-size:1.4rem;font-weight:600;color:#2d5016;margin-bottom:12px;">Availability</h2>
  <p style="line-height:1.8;margin-bottom:20px;">
    We strive to keep our website available at all times, but we do not guarantee uninterrupted access.
    We may perform maintenance or updates that temporarily affect availability and will minimise disruptions where possible.
  </p>

  <h2 style="font-size:1.4rem;font-weight:600;color:#2d5016;margin-bottom:12px;">Contact</h2>
  <p style="line-height:1.8;">
    For any queries related to these Terms of Use, contact us:<br>
    📧 <a href="mailto:info@newagewellnesssolutions.com" style="color:#2d5016;">info@newagewellnesssolutions.com</a>
  </p>
  <p style="font-size:0.9rem;color:#666;margin-top:20px;"><em>Last updated: May 2026</em></p>
</div>
HTML,
    ],

    6 => [ // Customer Service
        'meta_title'       => 'Customer Service | New Age Wellness Solutions Kenya',
        'meta_description' => 'Get help from the New Age Wellness Solutions customer service team. Track orders, manage returns, ask product questions, and get wellness guidance in Kenya.',
        'meta_keywords'    => 'customer service kenya, wellness support kenya, new age wellness help, contact wellness store kenya',
        'html_content'     => <<<HTML
<div class="static-container" style="max-width:860px;margin:0 auto;padding:40px 20px;font-family:inherit;color:#333;">
  <h1 style="font-size:2rem;font-weight:700;color:#2d5016;margin-bottom:16px;">Customer Service</h1>
  <p style="line-height:1.8;margin-bottom:20px;">
    At <strong>New Age Wellness Solutions</strong>, we are committed to providing you with a seamless shopping experience.
    Whether you have a question about a product, need help with your order, or want wellness advice — our team is here for you.
  </p>

  <h2 style="font-size:1.4rem;font-weight:600;color:#2d5016;margin-bottom:12px;">📞 Contact Us</h2>
  <ul style="line-height:2.2;padding-left:0;list-style:none;margin-bottom:24px;">
    <li>📧 <strong>Email:</strong> <a href="mailto:info@newagewellnesssolutions.com" style="color:#2d5016;">info@newagewellnesssolutions.com</a></li>
    <li>🕐 <strong>Hours:</strong> Monday – Saturday, 8:00 AM – 6:00 PM EAT</li>
    <li>🌐 <strong>Website:</strong> <a href="https://newagewellnesssolutions.com" style="color:#2d5016;">newagewellnesssolutions.com</a></li>
  </ul>

  <h2 style="font-size:1.4rem;font-weight:600;color:#2d5016;margin-bottom:12px;">🛒 Order Help</h2>
  <ul style="line-height:2;padding-left:20px;margin-bottom:20px;">
    <li><strong>Track your order:</strong> Log in to your account and visit "My Orders" to see real-time updates.</li>
    <li><strong>Modify an order:</strong> Changes can be made within 2 hours of placing the order. Contact us promptly.</li>
    <li><strong>Cancel an order:</strong> Cancellations are accepted before dispatch. Email us with your order number.</li>
  </ul>

  <h2 style="font-size:1.4rem;font-weight:600;color:#2d5016;margin-bottom:12px;">📦 Delivery Questions</h2>
  <ul style="line-height:2;padding-left:20px;margin-bottom:20px;">
    <li>Nairobi deliveries: 1–2 business days</li>
    <li>Other major towns (Mombasa, Kisumu, Nakuru, Eldoret): 2–4 business days</li>
    <li>Rest of Kenya: 3–7 business days</li>
    <li>If your delivery is delayed beyond the estimated window, contact us and we will investigate immediately.</li>
  </ul>

  <h2 style="font-size:1.4rem;font-weight:600;color:#2d5016;margin-bottom:12px;">🔄 Returns &amp; Refunds</h2>
  <p style="line-height:1.8;margin-bottom:20px;">
    Please refer to our <a href="/return-policy" style="color:#2d5016;">Return Policy</a> and
    <a href="/refund-policy" style="color:#2d5016;">Refund Policy</a> pages for detailed guidance.
    To start a return, email us with your order number and reason.
  </p>

  <h2 style="font-size:1.4rem;font-weight:600;color:#2d5016;margin-bottom:12px;">💊 Product Advice</h2>
  <p style="line-height:1.8;margin-bottom:20px;">
    Not sure which product is right for you? Our team includes wellness-informed staff who can help guide you
    toward the best options for your specific health goals — whether it's weight management, immunity, energy,
    skin health, or general wellbeing. Simply send us an email or use the chat feature on our website.
  </p>

  <h2 style="font-size:1.4rem;font-weight:600;color:#2d5016;margin-bottom:12px;">❓ Frequently Asked Questions</h2>
  <p style="line-height:1.8;margin-bottom:8px;"><strong>Q: How do I pay using M-Pesa?</strong><br>
  A: During checkout, select M-Pesa as your payment method. You will receive a payment prompt on your phone to complete the transaction.</p>
  <p style="line-height:1.8;margin-bottom:8px;"><strong>Q: Do you deliver outside Nairobi?</strong><br>
  A: Yes! We deliver to all 47 counties in Kenya through our courier partners.</p>
  <p style="line-height:1.8;margin-bottom:20px;"><strong>Q: Are your products genuine?</strong><br>
  A: Absolutely. We only stock products from verified, reputable manufacturers and authorised distributors.</p>
</div>
HTML,
    ],

    7 => [ // What's New
        'meta_title'       => "What's New | New Age Wellness Solutions Kenya",
        'meta_description' => "Discover the latest wellness products, new arrivals, and health trends at New Age Wellness Solutions Kenya. Stay updated on new supplements, superfoods, and natural remedies.",
        'meta_keywords'    => "new wellness products kenya, latest supplements kenya, new arrivals health products, new age wellness updates kenya",
        'html_content'     => <<<HTML
<div class="static-container" style="max-width:860px;margin:0 auto;padding:40px 20px;font-family:inherit;color:#333;">
  <h1 style="font-size:2rem;font-weight:700;color:#2d5016;margin-bottom:16px;">What's New at New Age Wellness Solutions</h1>
  <p style="line-height:1.8;margin-bottom:20px;">
    We are constantly expanding our range to bring you the best in health, wellness, and natural living.
    Here is a look at what is new at <strong>New Age Wellness Solutions</strong> — Kenya's premium wellness destination.
  </p>

  <h2 style="font-size:1.4rem;font-weight:600;color:#2d5016;margin-bottom:12px;">🌿 New Product Categories</h2>
  <ul style="line-height:2;padding-left:20px;margin-bottom:20px;">
    <li><strong>Adaptogens &amp; Stress Support:</strong> New range of ashwagandha, rhodiola, and reishi mushroom extracts to help your body adapt to stress naturally.</li>
    <li><strong>Gut Health &amp; Probiotics:</strong> Premium probiotic blends and digestive enzymes to support a healthy gut microbiome.</li>
    <li><strong>Plant-Based Protein:</strong> New pea protein, hemp protein, and vegan protein blends for active Kenyans.</li>
    <li><strong>Collagen &amp; Beauty from Within:</strong> Marine and bovine collagen powders for skin, hair, and joint health.</li>
    <li><strong>Kids Wellness:</strong> Child-friendly vitamins, immune boosters, and omega supplements for growing children.</li>
  </ul>

  <h2 style="font-size:1.4rem;font-weight:600;color:#2d5016;margin-bottom:12px;">🔥 Trending Wellness Topics in Kenya (2026)</h2>
  <ul style="line-height:2;padding-left:20px;margin-bottom:20px;">
    <li><strong>Immune Health:</strong> With increasing awareness around preventive health care, immunity supplements remain our most popular category.</li>
    <li><strong>Weight Management:</strong> Natural, sustainable weight management solutions without harsh stimulants.</li>
    <li><strong>Mental Wellness:</strong> Growing interest in natural mood support, sleep aids, and stress-relief supplements.</li>
    <li><strong>Natural Skincare:</strong> Kenyan consumers are moving away from chemical-heavy products toward natural, plant-based skincare.</li>
  </ul>

  <h2 style="font-size:1.4rem;font-weight:600;color:#2d5016;margin-bottom:12px;">📦 Stay Updated</h2>
  <p style="line-height:1.8;margin-bottom:20px;">
    Subscribe to our newsletter to be the first to hear about new arrivals, exclusive offers, and wellness tips
    tailored for the Kenyan lifestyle. Simply enter your email address in the subscription box in our website footer.
  </p>

  <h2 style="font-size:1.4rem;font-weight:600;color:#2d5016;margin-bottom:12px;">💡 Wellness Tips</h2>
  <ul style="line-height:2;padding-left:20px;margin-bottom:20px;">
    <li>Start your morning with a warm lemon and ginger drink to kickstart digestion and immunity.</li>
    <li>Add a daily multivitamin to fill nutritional gaps from your diet.</li>
    <li>Prioritise sleep — 7–9 hours per night is optimal for recovery and mental clarity.</li>
    <li>Stay hydrated — aim for at least 8 glasses of water daily, more if you are active.</li>
    <li>Consider magnesium glycinate in the evening for better sleep and muscle recovery.</li>
  </ul>

  <p style="line-height:1.8;">
    🌐 Browse our full catalogue at <a href="https://newagewellnesssolutions.com" style="color:#2d5016;">newagewellnesssolutions.com</a>
    and discover products that support your best life.
  </p>
</div>
HTML,
    ],

    8 => [ // Payment Policy
        'meta_title'       => 'Payment Policy | New Age Wellness Solutions Kenya',
        'meta_description' => 'Learn about accepted payment methods at New Age Wellness Solutions Kenya. We accept M-Pesa, Visa, Mastercard, and more. Secure and easy online payment.',
        'meta_keywords'    => 'payment policy kenya, mpesa online shop, buy wellness products mpesa, secure payment kenya wellness',
        'html_content'     => <<<HTML
<div class="static-container" style="max-width:860px;margin:0 auto;padding:40px 20px;font-family:inherit;color:#333;">
  <h1 style="font-size:2rem;font-weight:700;color:#2d5016;margin-bottom:16px;">Payment Policy</h1>
  <p style="line-height:1.8;margin-bottom:20px;">
    <strong>New Age Wellness Solutions</strong> is committed to making your shopping experience safe, seamless, and convenient.
    We offer multiple secure payment options suited to Kenyan customers.
  </p>

  <h2 style="font-size:1.4rem;font-weight:600;color:#2d5016;margin-bottom:12px;">Accepted Payment Methods</h2>
  <ul style="line-height:2;padding-left:20px;margin-bottom:20px;">
    <li><strong>M-Pesa (STK Push):</strong> Pay instantly using your Safaricom M-Pesa line. You will receive a payment prompt on your phone at checkout.</li>
    <li><strong>Visa &amp; Mastercard:</strong> Pay securely with your debit or credit card. All card transactions are encrypted using SSL technology.</li>
    <li><strong>Bank Transfer:</strong> Available for large orders. Contact us at <a href="mailto:info@newagewellnesssolutions.com" style="color:#2d5016;">info@newagewellnesssolutions.com</a> for bank details.</li>
  </ul>

  <h2 style="font-size:1.4rem;font-weight:600;color:#2d5016;margin-bottom:12px;">Payment Security</h2>
  <p style="line-height:1.8;margin-bottom:20px;">
    Your financial security is our top priority. All transactions on our platform are processed through secure,
    encrypted payment gateways. We do not store your card details on our servers.
    Look for the padlock icon in your browser address bar to confirm you are on a secure connection.
  </p>

  <h2 style="font-size:1.4rem;font-weight:600;color:#2d5016;margin-bottom:12px;">Currency</h2>
  <p style="line-height:1.8;margin-bottom:20px;">
    All prices on our website are displayed in <strong>Kenyan Shillings (KES)</strong>.
    If you are paying by international card, your bank may apply a foreign transaction fee — please check with your bank.
  </p>

  <h2 style="font-size:1.4rem;font-weight:600;color:#2d5016;margin-bottom:12px;">Payment Confirmation</h2>
  <p style="line-height:1.8;margin-bottom:20px;">
    After successful payment, you will receive an order confirmation email with your order details and expected delivery timeline.
    If you do not receive a confirmation within 30 minutes, please check your spam folder or contact us immediately.
  </p>

  <h2 style="font-size:1.4rem;font-weight:600;color:#2d5016;margin-bottom:12px;">Failed Payments</h2>
  <p style="line-height:1.8;margin-bottom:20px;">
    If your payment fails, your order will not be processed. Please try again with a different payment method or
    ensure your M-Pesa account has sufficient balance. If the issue persists, contact our support team for assistance.
  </p>

  <h2 style="font-size:1.4rem;font-weight:600;color:#2d5016;margin-bottom:12px;">Invoices &amp; Receipts</h2>
  <p style="line-height:1.8;margin-bottom:20px;">
    An electronic receipt is automatically sent to your registered email address after each successful transaction.
    You can also download invoices from your account dashboard under "My Orders."
  </p>

  <h2 style="font-size:1.4rem;font-weight:600;color:#2d5016;margin-bottom:12px;">Payment Support</h2>
  <p style="line-height:1.8;">
    📧 <a href="mailto:info@newagewellnesssolutions.com" style="color:#2d5016;">info@newagewellnesssolutions.com</a><br>
    Hours: Monday–Saturday, 8 AM – 6 PM EAT
  </p>
</div>
HTML,
    ],

    9 => [ // Shipping Policy
        'meta_title'       => 'Shipping Policy | New Age Wellness Solutions Kenya',
        'meta_description' => 'New Age Wellness Solutions delivers across all 47 counties in Kenya. Fast, reliable shipping to Nairobi, Mombasa, Kisumu, Nakuru, and beyond. Free shipping on qualifying orders.',
        'meta_keywords'    => 'shipping policy kenya, wellness delivery nairobi, online shop delivery kenya, free shipping wellness kenya',
        'html_content'     => <<<HTML
<div class="static-container" style="max-width:860px;margin:0 auto;padding:40px 20px;font-family:inherit;color:#333;">
  <h1 style="font-size:2rem;font-weight:700;color:#2d5016;margin-bottom:16px;">Shipping Policy</h1>
  <p style="line-height:1.8;margin-bottom:20px;">
    <strong>New Age Wellness Solutions</strong> delivers quality wellness products to every corner of Kenya.
    We partner with trusted courier services to ensure your order arrives safely and on time.
  </p>

  <h2 style="font-size:1.4rem;font-weight:600;color:#2d5016;margin-bottom:12px;">Delivery Areas</h2>
  <p style="line-height:1.8;margin-bottom:12px;">We deliver to all <strong>47 counties in Kenya</strong>, including:</p>
  <ul style="line-height:2;padding-left:20px;margin-bottom:20px;">
    <li><strong>Nairobi &amp; environs:</strong> Nairobi CBD, Westlands, Thika, Kiambu, Machakos, Kajiado</li>
    <li><strong>Coast:</strong> Mombasa, Kilifi, Malindi, Kwale, Diani</li>
    <li><strong>Western Kenya:</strong> Kisumu, Kakamega, Kisii, Homabay, Migori</li>
    <li><strong>Rift Valley:</strong> Nakuru, Eldoret, Kericho, Bomet, Narok</li>
    <li><strong>Central:</strong> Nyeri, Muranga, Embu, Nyandarua, Kirinyaga</li>
    <li><strong>North Eastern &amp; Remote Counties:</strong> We deliver here too — timelines may be longer.</li>
  </ul>

  <h2 style="font-size:1.4rem;font-weight:600;color:#2d5016;margin-bottom:12px;">Delivery Timelines</h2>
  <table style="width:100%;border-collapse:collapse;margin-bottom:20px;font-size:0.95rem;">
    <thead>
      <tr style="background:#2d5016;color:#fff;">
        <th style="padding:10px 14px;text-align:left;">Location</th>
        <th style="padding:10px 14px;text-align:left;">Estimated Delivery Time</th>
      </tr>
    </thead>
    <tbody>
      <tr style="background:#f9f9f9;">
        <td style="padding:10px 14px;border-bottom:1px solid #eee;">Nairobi</td>
        <td style="padding:10px 14px;border-bottom:1px solid #eee;">1–2 business days</td>
      </tr>
      <tr>
        <td style="padding:10px 14px;border-bottom:1px solid #eee;">Major Towns (Mombasa, Kisumu, Nakuru, Eldoret)</td>
        <td style="padding:10px 14px;border-bottom:1px solid #eee;">2–4 business days</td>
      </tr>
      <tr style="background:#f9f9f9;">
        <td style="padding:10px 14px;border-bottom:1px solid #eee;">Other Counties</td>
        <td style="padding:10px 14px;border-bottom:1px solid #eee;">3–7 business days</td>
      </tr>
      <tr>
        <td style="padding:10px 14px;">Remote &amp; North Eastern Counties</td>
        <td style="padding:10px 14px;">5–10 business days</td>
      </tr>
    </tbody>
  </table>

  <h2 style="font-size:1.4rem;font-weight:600;color:#2d5016;margin-bottom:12px;">Shipping Costs</h2>
  <p style="line-height:1.8;margin-bottom:20px;">
    Shipping fees are calculated at checkout based on your location and the weight of your order.
    We periodically offer <strong>free shipping promotions</strong> — subscribe to our newsletter to stay informed.
  </p>

  <h2 style="font-size:1.4rem;font-weight:600;color:#2d5016;margin-bottom:12px;">Order Processing</h2>
  <p style="line-height:1.8;margin-bottom:20px;">
    Orders placed before <strong>12:00 PM EAT</strong> on business days are processed and dispatched the same day.
    Orders placed after 12:00 PM or on weekends/public holidays are processed the next business day.
  </p>

  <h2 style="font-size:1.4rem;font-weight:600;color:#2d5016;margin-bottom:12px;">Tracking Your Order</h2>
  <p style="line-height:1.8;margin-bottom:20px;">
    Once your order is dispatched, you will receive a confirmation email with tracking details.
    You can also track your order by logging into your account at <a href="https://newagewellnesssolutions.com" style="color:#2d5016;">newagewellnesssolutions.com</a>.
  </p>

  <h2 style="font-size:1.4rem;font-weight:600;color:#2d5016;margin-bottom:12px;">Damaged or Lost Deliveries</h2>
  <p style="line-height:1.8;margin-bottom:20px;">
    If your parcel arrives damaged or does not arrive within the estimated window, please contact us immediately.
    We will investigate with the courier and arrange a replacement or refund where applicable.
  </p>

  <h2 style="font-size:1.4rem;font-weight:600;color:#2d5016;margin-bottom:12px;">Contact</h2>
  <p style="line-height:1.8;">
    📧 <a href="mailto:info@newagewellnesssolutions.com" style="color:#2d5016;">info@newagewellnesssolutions.com</a><br>
    Hours: Monday–Saturday, 8 AM – 6 PM EAT
  </p>
</div>
HTML,
    ],

    10 => [ // Privacy Policy
        'meta_title'       => 'Privacy Policy | New Age Wellness Solutions Kenya',
        'meta_description' => 'Read the Privacy Policy of New Age Wellness Solutions Kenya. We are committed to protecting your personal data in accordance with Kenyan data protection laws.',
        'meta_keywords'    => 'privacy policy kenya, data protection wellness store, new age wellness privacy, personal data kenya ecommerce',
        'html_content'     => <<<HTML
<div class="static-container" style="max-width:860px;margin:0 auto;padding:40px 20px;font-family:inherit;color:#333;">
  <h1 style="font-size:2rem;font-weight:700;color:#2d5016;margin-bottom:16px;">Privacy Policy</h1>
  <p style="line-height:1.8;margin-bottom:20px;">
    <strong>New Age Wellness Solutions</strong> ("we", "our", "us") is committed to protecting your privacy and handling
    your personal information with transparency and care. This Privacy Policy explains how we collect, use, store, and
    protect your data when you use our website <a href="https://newagewellnesssolutions.com" style="color:#2d5016;">newagewellnesssolutions.com</a>.
  </p>
  <p style="line-height:1.8;margin-bottom:20px;">
    This policy is compliant with the <strong>Kenya Data Protection Act, 2019</strong>.
  </p>

  <h2 style="font-size:1.4rem;font-weight:600;color:#2d5016;margin-bottom:12px;">1. Information We Collect</h2>
  <p style="line-height:1.8;margin-bottom:12px;">We may collect the following types of personal information:</p>
  <ul style="line-height:2;padding-left:20px;margin-bottom:20px;">
    <li><strong>Identity Data:</strong> Full name, date of birth (where required)</li>
    <li><strong>Contact Data:</strong> Email address, phone number, physical delivery address</li>
    <li><strong>Transaction Data:</strong> Details of products purchased, payment method, order history</li>
    <li><strong>Technical Data:</strong> IP address, browser type, device type, cookies, and usage data</li>
    <li><strong>Marketing Preferences:</strong> Your choices regarding receiving communications from us</li>
  </ul>

  <h2 style="font-size:1.4rem;font-weight:600;color:#2d5016;margin-bottom:12px;">2. How We Use Your Information</h2>
  <ul style="line-height:2;padding-left:20px;margin-bottom:20px;">
    <li>To process and fulfil your orders</li>
    <li>To communicate with you about your orders and account</li>
    <li>To send promotional emails and newsletters (only with your consent)</li>
    <li>To improve our website, products, and services</li>
    <li>To comply with legal obligations under Kenyan law</li>
    <li>To detect and prevent fraud or unauthorised access</li>
  </ul>

  <h2 style="font-size:1.4rem;font-weight:600;color:#2d5016;margin-bottom:12px;">3. Sharing Your Information</h2>
  <p style="line-height:1.8;margin-bottom:20px;">
    We do not sell, rent, or trade your personal information. We may share your data only with:
  </p>
  <ul style="line-height:2;padding-left:20px;margin-bottom:20px;">
    <li><strong>Delivery partners</strong> (name and address only, for order fulfilment)</li>
    <li><strong>Payment processors</strong> (to securely process your transactions)</li>
    <li><strong>Legal authorities</strong> (when required by law or court order)</li>
  </ul>

  <h2 style="font-size:1.4rem;font-weight:600;color:#2d5016;margin-bottom:12px;">4. Data Retention</h2>
  <p style="line-height:1.8;margin-bottom:20px;">
    We retain your personal data for as long as necessary to fulfil the purposes outlined in this policy,
    or as required by Kenyan law. You may request deletion of your account and data at any time.
  </p>

  <h2 style="font-size:1.4rem;font-weight:600;color:#2d5016;margin-bottom:12px;">5. Your Rights</h2>
  <p style="line-height:1.8;margin-bottom:12px;">Under the Kenya Data Protection Act, 2019, you have the right to:</p>
  <ul style="line-height:2;padding-left:20px;margin-bottom:20px;">
    <li>Access the personal data we hold about you</li>
    <li>Correct inaccurate or incomplete data</li>
    <li>Request deletion of your data ("right to be forgotten")</li>
    <li>Withdraw consent for marketing communications at any time</li>
    <li>Lodge a complaint with the Office of the Data Protection Commissioner (ODPC) of Kenya</li>
  </ul>

  <h2 style="font-size:1.4rem;font-weight:600;color:#2d5016;margin-bottom:12px;">6. Cookies</h2>
  <p style="line-height:1.8;margin-bottom:20px;">
    We use cookies to improve your browsing experience. Essential cookies are required for the website to function.
    You may disable non-essential cookies through your browser settings, though this may affect website functionality.
  </p>

  <h2 style="font-size:1.4rem;font-weight:600;color:#2d5016;margin-bottom:12px;">7. Security</h2>
  <p style="line-height:1.8;margin-bottom:20px;">
    We implement appropriate technical and organisational measures to protect your personal data from unauthorised access,
    loss, or disclosure. All data transmissions are encrypted using SSL/TLS technology.
  </p>

  <h2 style="font-size:1.4rem;font-weight:600;color:#2d5016;margin-bottom:12px;">8. Changes to This Policy</h2>
  <p style="line-height:1.8;margin-bottom:20px;">
    We may update this Privacy Policy from time to time. Changes will be posted on this page with an updated date.
    We encourage you to review this page periodically.
  </p>

  <h2 style="font-size:1.4rem;font-weight:600;color:#2d5016;margin-bottom:12px;">9. Contact Us</h2>
  <p style="line-height:1.8;">
    For any privacy-related queries or to exercise your data rights, contact our Data Protection Officer:<br>
    📧 <a href="mailto:info@newagewellnesssolutions.com" style="color:#2d5016;">info@newagewellnesssolutions.com</a><br>
    🌐 <a href="https://newagewellnesssolutions.com" style="color:#2d5016;">newagewellnesssolutions.com</a>
  </p>
  <p style="font-size:0.9rem;color:#666;margin-top:20px;"><em>Last updated: May 2026</em></p>
</div>
HTML,
    ],
];

// Output as SQL for review
foreach ($pages as $id => $data) {
    $html = addslashes($data['html_content']);
    $metaTitle = addslashes($data['meta_title']);
    $metaDesc = addslashes($data['meta_description']);
    $metaKw = addslashes($data['meta_keywords']);
    echo "UPDATE cms_page_translations SET html_content='{$html}', meta_title='{$metaTitle}', meta_description='{$metaDesc}', meta_keywords='{$metaKw}' WHERE cms_page_id={$id} AND locale='en';\n\n";
}
