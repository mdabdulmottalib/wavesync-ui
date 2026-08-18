<?php

return [

    /*
    |--------------------------------------------------------------------
    | Service offerings
    |--------------------------------------------------------------------
    |
    | Shared by the homepage Services section and the individual
    | /services/{slug} pages — edit here, not in the views.
    |
    | 'portfolio_categories' lists which config('portfolio.case_studies')
    | 'category' values count as relevant work for this service, used to
    | populate that service's page. Leave empty rather than listing a
    | loosely-related project — the service page shows an honest "coming
    | soon" state instead of stretching a match.
    |
    | 'process_steps' and 'faqs' are what make the /services/{slug} page a
    | genuine deep-dive rather than a filtered rehash of the homepage — they
    | render in place of (not alongside) the homepage's generic process
    | copy and general FAQ.
    |
    */

    'services' => [
        [
            'slug' => 'web-design-development',
            'icon' => 'fi-rr-browser',
            'title' => 'Web Design',
            'desc' => "Get a website that looks great and actually brings in customers — responsive, fast, and built around how people decide who to trust and who to call. From landing pages to full custom builds on WordPress or Laravel, every page is designed to turn a visit into an inquiry.",
            'tags' => ['Website Strategy', 'UX/UI Design', 'UX Plan', 'Responsive Design', 'Landing Page Design', 'Custom Web Development', 'SaaS'],
            'menu_highlights' => ['UX/UI Design', 'Laravel Development', 'WordPress Development'],
            'img' => 'https://ik.imagekit.io/eoweeomen/mdabdulmottalib/portfolio/Biscayne-bay-prep.jpg',
            'href' => '#contact',
            'portfolio_categories' => ['Web Design'],

            'deliverables' => [
                ['title' => 'Website Strategy', 'desc' => 'Before any design work starts, we map out your sitemap, information architecture, and the path a visitor needs to take to become an inquiry — so the site has a plan behind it, not just a look.'],
                ['title' => 'UX/UI Design', 'desc' => 'Wireframes and visual design that prioritize clarity over decoration: page layouts, navigation, and interface details built around how people actually read and click, not just what looks good in a still image.'],
                ['title' => 'Responsive Design', 'desc' => 'Every page is designed and tested across phone, tablet, and desktop — not just shrunk down after the fact, but laid out to work properly at each size.'],
                ['title' => 'Landing Page Design', 'desc' => 'Focused, single-purpose pages built around one goal — a signup, a call, a purchase — for campaigns, launches, or ads that need their own destination.'],
                ['title' => 'Laravel Development', 'desc' => 'Custom builds on Laravel when a page builder isn\'t enough — logins, dashboards, booking systems, or anything that needs real application logic behind it.'],
                ['title' => 'WordPress Development', 'desc' => 'Content-driven sites built on WordPress when easy self-editing and a faster build make more sense than a fully custom application.'],
                ['title' => 'SaaS Interfaces', 'desc' => 'Web application interfaces and dashboards for software products, built with the same attention to usability as a marketing site, not an afterthought.'],
            ],

            'why_it_matters' => "A website is often the only chance you get to make a first impression — most visitors decide whether to stay or leave within seconds, long before they read a word of your copy. If a site loads slowly, looks dated, or doesn't make the next step obvious, it doesn't matter how good the business behind it is.",

            'approach_statement' => "We don't design for the demo — we design for the decision. Every layout, every button, every line of copy exists to move a visitor one step closer to picking up the phone.",

            'process_steps' => [
                ['title' => 'Discover', 'desc' => 'We look at your current site (if you have one), who you\'re trying to reach, and where visitors are dropping off before they ever reach out.'],
                ['title' => 'Design', 'desc' => 'Wireframes and visual design come next, built around the path a visitor actually takes from landing to contacting you — not just what looks good in a mockup.'],
                ['title' => 'Build', 'desc' => 'We build on WordPress for content-driven sites or custom Laravel for anything that needs more than a page builder can offer, testing across devices as we go.'],
                ['title' => 'Launch', 'desc' => 'After launch we check load times, mobile behavior, and where visitors are actually clicking — and keep refining from there.'],
            ],

            'faqs' => [
                ['question' => 'Do you build on WordPress or from scratch?', 'answer' => 'Both — WordPress when a content-driven site with easy self-editing makes sense, and custom Laravel builds when the project needs functionality a page builder can\'t handle, like logins, dashboards, or a real web application.'],
                ['question' => 'Will my new site work on mobile?', 'answer' => 'Yes — every site we build is designed and tested across phone, tablet, and desktop screens before launch, not adjusted afterward.'],
                ['question' => 'Can you redesign my existing site instead of starting over?', 'answer' => 'Often, yes. We\'ll look at what\'s already working before deciding whether a redesign or a rebuild makes more sense for your goals and budget.'],
                ['question' => 'Do you also write the content for the site?', 'answer' => 'We can help structure and refine your content so it supports the design, though your input on the specifics of your business is part of getting it right.'],
            ],
        ],
        [
            'slug' => 'branding-identity',
            'icon' => 'fi-rr-palette',
            'title' => 'Branding Identity',
            'desc' => "Getting picked over the next tab usually comes down to how put-together you look — we build the visual identity, marketing collateral, and product design that make a business look like the obvious choice, from brand guidelines and social content to full product systems mapped around real user journeys.",
            'tags' => ['Brand Identity Design', 'Corporate Identity Design', 'Brand Strategy', 'Graphic Design', 'Startup Branding'],
            'menu_highlights' => ['Brand Guidelines', 'Print Materials', 'Graphic Design'],
            'img' => 'https://ik.imagekit.io/eoweeomen/mdabdulmottalib/portfolio/BBPA.jpg',
            'href' => '#contact',
            'portfolio_categories' => ['Branding & Marketing'],

            'deliverables' => [
                ['title' => 'Brand Identity Design', 'desc' => 'Logo, color palette, and typography system — the core visual language your business uses everywhere, designed to work as well on a favicon as it does on a sign.'],
                ['title' => 'Brand Guidelines', 'desc' => 'A documented rulebook for how the identity gets used — logo spacing, approved colors, type pairing — so it stays consistent no matter who\'s applying it.'],
                ['title' => 'Print Materials', 'desc' => 'Business cards, letterheads, email signatures, presentation templates — the everyday materials that should look like they came from the same business as your website.'],
                ['title' => 'Brand Strategy', 'desc' => 'Before any visuals, we define how you want to be perceived and how that\'s different from everyone else offering something similar — so design decisions have a reason behind them.'],
                ['title' => 'Graphic Design', 'desc' => 'Social media templates, ad creative, one-off marketing pieces — designed to stay consistent with the wider identity instead of looking like they came from a different business each time.'],
                ['title' => 'Startup Branding', 'desc' => 'A full identity built from zero for a new business — logo, guidelines, and starter assets — sized to what a launch actually needs, not a Fortune 500 rebrand.'],
            ],

            'why_it_matters' => "People judge a business by how it looks before they judge it by what it says. Inconsistent colors, a dated logo, or mismatched materials across your website and social channels quietly signal that a business isn't quite put-together — even when the work itself is excellent.",

            'approach_statement' => "A brand isn't a logo — it's the pattern people recognize before they've read a word. We build identities that hold together everywhere they show up, not just on the homepage.",

            'process_steps' => [
                ['title' => 'Discover', 'desc' => 'We start by understanding your business, your customers, and how you want to be perceived compared to everyone else in your space.'],
                ['title' => 'Design', 'desc' => 'We explore visual directions — logo, color, typography — and narrow in on the identity that actually fits your business, not just what\'s trending.'],
                ['title' => 'Build', 'desc' => 'We build out the full system: guidelines, templates, and assets so the identity stays consistent wherever it shows up, from your website to a business card.'],
                ['title' => 'Launch', 'desc' => 'We hand off a usable brand kit and stay available as new applications — packaging, merch, ads — come up down the line.'],
            ],

            'faqs' => [
                ['question' => 'What\'s included in a brand identity package?', 'answer' => 'It depends on scope, but typically covers logo design, a color and type system, and brand guidelines — extending into social templates, packaging, or print collateral as needed.'],
                ['question' => 'I already have a logo — can you build a system around it?', 'answer' => 'Yes, if it\'s solid groundwork we can build the wider identity around it rather than starting from zero.'],
                ['question' => 'Do you design packaging as well as digital branding?', 'answer' => 'Yes — we\'ve designed product and packaging work alongside digital identity systems.'],
                ['question' => 'How long does a branding project take?', 'answer' => 'It depends on scope — a logo and basic guidelines move faster than a full identity system with packaging and templates. We\'ll give you a realistic timeline once we understand what you need.'],
            ],
        ],
        [
            'slug' => 'seo-digital-marketing',
            'icon' => 'fi-rr-search',
            'title' => 'SEO & Digital Marketing',
            'desc' => "None of this works if people can't find you — technical SEO, GEO/AEO for AI answer engines, and full-funnel paid and outreach campaigns that put your business in front of people already searching for what you offer, and keep the pipeline full while they do.",
            'tags' => ['Technical SEO', 'GEO', 'AEO', 'Schema Markup', 'Social Media Marketing', 'Google Ads', 'Cold Email', 'Funnel Design'],
            'menu_highlights' => ['Technical SEO', 'Social Media Marketing', 'AEO', 'GEO'],
            'img' => 'https://ik.imagekit.io/eoweeomen/mdabdulmottalib/portfolio/SEO-Digital-Marketing.jpg',
            'href' => '#contact',
            'portfolio_categories' => [],

            'deliverables' => [
                ['title' => 'Technical SEO', 'desc' => 'Site speed, crawlability, mobile usability, and the behind-the-scenes fixes that determine whether search engines can find and properly understand your site in the first place.'],
                ['title' => 'GEO', 'desc' => 'Generative Engine Optimization — structuring your content so AI tools like ChatGPT and Perplexity can accurately understand and cite your business when someone asks them a relevant question.'],
                ['title' => 'AEO', 'desc' => 'Answer Engine Optimization — formatting content to directly answer the specific questions your customers are searching, increasing the odds of showing up in featured snippets and AI Overviews.'],
                ['title' => 'Schema Markup', 'desc' => 'Structured data added to your site so search engines can display richer results — star ratings, FAQs, business info — directly in the search results, not just a plain blue link.'],
                ['title' => 'Social Media Marketing', 'desc' => 'Facebook and Instagram campaigns and audience targeting to put your business in front of the right people, even before they start actively searching.'],
                ['title' => 'Google Ads', 'desc' => 'Search campaigns targeting people actively looking for what you offer, with budgets and targeting managed to avoid wasted spend.'],
                ['title' => 'Cold Email', 'desc' => 'Outreach sequences to prospects who haven\'t found you yet — written to sound like a person, not a template, and tracked so we know what\'s actually working.'],
                ['title' => 'Funnel Design', 'desc' => 'The path from first click to conversion — landing pages, follow-up sequences, and calls to action — designed as one connected system instead of disconnected pieces.'],
            ],

            'why_it_matters' => "The best website in the world doesn't help if nobody finds it. Most buying decisions start with a search, not a direct visit — if your business isn't showing up there, you're relying entirely on people who already know you exist.",

            'approach_statement' => "Rankings aren't the goal — they're the byproduct. We optimize for the searches that actually turn into inquiries, not vanity keywords that only look good in a report.",

            'process_steps' => [
                ['title' => 'Discover', 'desc' => 'We audit your current visibility — where you rank, what\'s working, and where competitors are pulling ahead — before touching anything.'],
                ['title' => 'Design', 'desc' => 'We map out a plan: which technical fixes, content, and campaigns will actually move the needle for your specific business and market.'],
                ['title' => 'Build', 'desc' => 'We implement the technical SEO fixes, schema markup, and campaigns — including GEO/AEO work so AI answer engines can find and cite you too.'],
                ['title' => 'Launch', 'desc' => 'We track what\'s ranking, what\'s converting, and keep adjusting the plan as search behavior and algorithms shift.'],
            ],

            'faqs' => [
                ['question' => 'How long does SEO take to show results?', 'answer' => 'It varies by market and competition, but SEO is a compounding effort — expect meaningful movement over months, not days. We\'ll set realistic expectations upfront rather than promise a specific timeline.'],
                ['question' => 'What\'s GEO/AEO?', 'answer' => 'Generative and Answer Engine Optimization — making sure your business can be found and cited by AI tools like ChatGPT, Perplexity, and Google\'s AI Overviews, not just traditional search results.'],
                ['question' => 'Do you manage paid ads too?', 'answer' => 'Yes — Google Ads and social media ads across Meta and Instagram, usually alongside organic SEO so paid and organic work toward the same goal instead of competing for budget.'],
                ['question' => 'Do I need a new website for SEO to work?', 'answer' => 'Not necessarily — we\'ll assess your current site first and only recommend changes that are actually needed to support the strategy.'],
            ],
        ],
        [
            'slug' => 'ai-automation-integration',
            'icon' => 'fi-rr-robot',
            'title' => 'Automation & Integration',
            'desc' => 'We automate the work that slows your business down — connecting your tools into custom workflows, automating lead follow-up and outreach, and adding AI agents or live chat only where they genuinely help. Not every automation needs AI behind it; the goal is systems that run without someone doing the work by hand, not AI for its own sake.',
            'tags' => ['n8n Workflows', 'Cold Email AI', 'Lead Generation', 'AI Live Support', 'Custom LLM Agents', 'Workflow Automation'],
            'menu_highlights' => ['Custom LLM Agents', 'Workflow Automation', 'n8n Workflows'],
            'img' => 'https://ik.imagekit.io/eoweeomen/WavesyncAgency/ai-automation.png',
            'href' => '#contact',
            'portfolio_categories' => [],

            'deliverables' => [
                ['title' => 'n8n Workflows', 'desc' => 'Custom automations connecting your website, CRM, email, and other tools — built on a flexible platform rather than locking you into one rigid all-in-one system.'],
                ['title' => 'Cold Email AI', 'desc' => 'AI-assisted outreach that personalizes messages at scale and adjusts follow-ups based on how a prospect responds, instead of sending the exact same sequence to everyone.'],
                ['title' => 'Lead Generation', 'desc' => 'Automated systems that qualify and route new leads the moment they come in, instead of sitting in an inbox until someone has time to look.'],
                ['title' => 'AI Live Support', 'desc' => 'Chat-based support that handles common, repetitive questions instantly, any time of day, and hands off to a person when a conversation actually needs one.'],
                ['title' => 'Custom LLM Agents', 'desc' => 'AI agents built around your specific business and data — not a generic chatbot — for tasks like qualifying leads, answering product questions, or triaging support.'],
                ['title' => 'Workflow Automation', 'desc' => 'Repetitive, manual processes — data entry, status updates, follow-up reminders — rebuilt as automated workflows that run without someone doing it by hand.'],
            ],

            'why_it_matters' => "Every hour spent on repetitive follow-ups, manual lead qualification, or copy-pasting information between tools is an hour not spent growing the business. Most of that work follows a predictable pattern — which means it can usually be automated.",

            'approach_statement' => "If a task follows a pattern, it doesn't need a person doing it by hand. We automate the repetitive parts of your business so your team can spend time on the parts that actually need a human.",

            'process_steps' => [
                ['title' => 'Discover', 'desc' => 'We map your current workflow — what\'s manual, what\'s repetitive, and where things actually break down or get missed.'],
                ['title' => 'Design', 'desc' => 'We design the automation or agent around your real process, not a generic template, so it fits how your business actually operates.'],
                ['title' => 'Build', 'desc' => 'We build the workflow in n8n, connect the tools involved, and build any custom LLM agents or chat support the process needs.'],
                ['title' => 'Launch', 'desc' => 'We test it against real scenarios before it goes live, then monitor and adjust as your process or tools change.'],
            ],

            'faqs' => [
                ['question' => 'What is n8n and why do you use it?', 'answer' => 'n8n is a workflow automation platform that connects different tools and services together — it lets us build custom automations without locking you into a single rigid platform.'],
                ['question' => 'Can automation replace my customer support entirely?', 'answer' => 'Not entirely — AI live support handles the repetitive, predictable questions well, freeing your team to focus on the conversations that actually need a human.'],
                ['question' => 'What tools can you integrate with?', 'answer' => 'Most modern CRMs, email platforms, calendars, and web forms — if it has an API or a Zapier/n8n integration, we can generally connect it.'],
                ['question' => 'Is this only for large businesses?', 'answer' => 'No — a lot of the highest-impact automations (lead follow-up, qualification, appointment booking) are just as valuable, if not more so, for smaller teams without dedicated staff for that work.'],
            ],
        ],
    ],

];
