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
            'tags' => ['Conversion-Focused Design', 'Mobile-First Development', 'SEO-Ready Structure', 'E-Commerce Integration', 'Performance Optimization', 'Ongoing Maintenance', 'Custom CMS Builds'],
            'who_its_for' => [
                'fits' => [
                    "You need a site that's actually built to convert, not just filled in from a template.",
                    "You're weighing a fully custom build against a faster, easily-editable CMS site.",
                    "Your current site loads slowly, looks dated, or doesn't make the next step obvious.",
                ],
                'not_fit' => "If you just need a one-page flyer site up by tomorrow with no strategy behind it, a template builder will get you there faster than we will.",
            ],
            'benefits' => [
                ['title' => 'More visitors turn into inquiries', 'desc' => 'Every layout decision gets checked against whether it moves a visitor toward contacting you, not just whether it looks good in a mockup.', 'list' => ['Clear calls to action on every page', 'Forms and contact paths that are easy to find', 'Copy written to move someone to the next step']],
                ['title' => 'Live faster, with fewer surprises', 'desc' => 'Built on WordPress or Laravel, whichever the project actually needs, so nothing gets over-engineered or under-built.', 'list' => ['The right platform picked upfront', 'Tested across devices before launch', 'No mid-project platform switch']],
                ['title' => "Looks as good as the business behind it", 'desc' => "A site that loads fast and looks current does more to build trust than any amount of copy explaining why you're worth hiring.", 'list' => ['Fast load times out of the box', 'Consistent design across every page', 'Mobile-first from the first wireframe']],
                ['title' => "Won't need a rebuild in a year", 'desc' => 'Built to be extended, not replaced, as the business adds pages, products, or features.', 'list' => ['Clean, documented code underneath', 'Room to add pages without a redesign', 'Ongoing maintenance available after launch']],
            ],
            'menu_highlights' => ['UX/UI Design', 'Laravel Development', 'WordPress Development'],
            'img' => 'https://ik.imagekit.io/eoweeomen/mdabdulmottalib/portfolio/Biscayne-bay-prep.jpg',
            'href' => '/services/web-design-development',
            'portfolio_categories' => ['Web Design'],
            'why_wavesync' => [
                ['title' => 'Built to convert, not just look good', 'desc' => "Every layout decision is checked against whether it moves a visitor toward contacting you, not just whether it looks good in a mockup."],
                ['title' => 'Two real platforms, not one default', 'desc' => "Laravel when a project needs real application logic, WordPress when it needs easy self-editing — recommended honestly based on what the project actually needs."],
                ['title' => '450+ sites shipped', 'desc' => "Patterns get recognized fast after this many builds: what converts, what loads slowly, what breaks six months later."],
            ],

            'deliverables' => [
                ['icon' => 'fi-rr-sitemap', 'title' => 'Website Strategy', 'desc' => 'Before any design work starts, we map out your sitemap, information architecture, and the path a visitor needs to take to become an inquiry — so the site has a plan behind it, not just a look.'],
                ['icon' => 'fi-rr-objects-column', 'title' => 'UX/UI Design', 'desc' => 'Wireframes and visual design that prioritize clarity over decoration: page layouts, navigation, and interface details built around how people actually read and click, not just what looks good in a still image.'],
                ['icon' => 'fi-rr-devices', 'title' => 'Responsive Design', 'desc' => 'Every page is designed and tested across phone, tablet, and desktop — not just shrunk down after the fact, but laid out to work properly at each size.'],
                ['icon' => 'fi-rr-browser', 'title' => 'Landing Page Design', 'desc' => 'Focused, single-purpose pages built around one goal — a signup, a call, a purchase — for campaigns, launches, or ads that need their own destination.'],
                ['icon' => 'fi-rr-code-branch', 'title' => 'Laravel Development', 'desc' => 'Custom builds on Laravel when a page builder isn\'t enough — logins, dashboards, booking systems, or anything that needs real application logic behind it.'],
                ['icon' => 'fi-rr-refresh', 'title' => 'WordPress Development', 'desc' => 'Content-driven sites built on WordPress when easy self-editing and a faster build make more sense than a fully custom application.'],
                ['icon' => 'fi-rr-layout-fluid', 'title' => 'SaaS Interfaces', 'desc' => 'Web application interfaces and dashboards for software products, built with the same attention to usability as a marketing site, not an afterthought.'],
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
            'tags' => ['Logo & Visual Identity', 'Brand Positioning', 'Marketing Collateral', 'Packaging Design', 'Brand Voice & Messaging'],
            'who_its_for' => [
                'fits' => [
                    'Your business looks different depending on which channel someone finds you through.',
                    "You're launching and need a visual identity, marketing collateral, and product design under one system.",
                    'You want brand guidelines that hold up as your team grows, not a one-off logo file.',
                ],
                'not_fit' => "If you only need a quick logo with nothing built around it, this is more system than you're looking for — Brand Identity alone is the better fit.",
            ],
            'benefits' => [
                ['title' => 'Picked over the next tab', 'desc' => 'A consistent, professional identity is often the deciding factor between two similar options — this is designed to be that factor.', 'list' => ['Cohesive look across every touchpoint', 'A professional first impression', 'On-brand marketing assets']],
                ['title' => 'One system, not one-off pieces', 'desc' => 'Guidelines and templates mean new materials get made faster, without starting from scratch or waiting on us for every asset.', 'list' => ['Reusable templates and guidelines', 'Faster turnaround on new pieces', 'Consistent output from any team member']],
                ['title' => 'Trusted before a word is read', 'desc' => "People judge a business by how it looks before they judge what it says — this makes that first judgment work in your favor.", 'list' => ['A polished visual identity', 'A consistent brand voice', 'Materials that match your website']],
                ['title' => 'Built to grow with the business', 'desc' => "The system is built to expand — new products, new channels, new applications — without breaking what's already working.", 'list' => ['A scalable color and type system', 'Documented usage rules', 'Ready for packaging, merch, or new products']],
            ],
            'menu_highlights' => ['Brand Guidelines', 'Print Materials', 'Graphic Design'],
            'img' => 'https://ik.imagekit.io/eoweeomen/mdabdulmottalib/portfolio/BBPA.jpg',
            'href' => '/services/branding-identity',
            'portfolio_categories' => ['Branding & Marketing'],
            'why_wavesync' => [
                ['title' => 'Identity systems, not just logos', 'desc' => 'Guidelines, templates, and applications get built out from day one, not a logo file and a good luck.'],
                ['title' => 'Consistency across every surface', 'desc' => "The same system holds up from a business card to a billboard, because it's built as one system, not one-off pieces."],
                ['title' => '150+ brands built', 'desc' => 'Real client work across industries, not a portfolio of concept pieces.'],
            ],

            'deliverables' => [
                ['icon' => 'fi-rr-palette', 'title' => 'Brand Identity Design', 'desc' => 'Logo, color palette, and typography system — the core visual language your business uses everywhere, designed to work as well on a favicon as it does on a sign.'],
                ['icon' => 'fi-rr-book-alt', 'title' => 'Brand Guidelines', 'desc' => 'A documented rulebook for how the identity gets used — logo spacing, approved colors, type pairing — so it stays consistent no matter who\'s applying it.'],
                ['icon' => 'fi-rr-print', 'title' => 'Print Materials', 'desc' => 'Business cards, letterheads, email signatures, presentation templates — the everyday materials that should look like they came from the same business as your website.'],
                ['icon' => 'fi-rr-chess', 'title' => 'Brand Strategy', 'desc' => 'Before any visuals, we define how you want to be perceived and how that\'s different from everyone else offering something similar — so design decisions have a reason behind them.'],
                ['icon' => 'fi-rr-picture', 'title' => 'Graphic Design', 'desc' => 'Social media templates, ad creative, one-off marketing pieces — designed to stay consistent with the wider identity instead of looking like they came from a different business each time.'],
                ['icon' => 'fi-rr-rocket-lunch', 'title' => 'Startup Branding', 'desc' => 'A full identity built from zero for a new business — logo, guidelines, and starter assets — sized to what a launch actually needs, not a Fortune 500 rebrand.'],
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
            'tags' => ['Keyword Strategy', 'Content Optimization', 'Local SEO', 'Conversion Rate Optimization', 'Email Sequences', 'Analytics & Reporting', 'Competitor Analysis', 'Landing Page Design'],
            'who_its_for' => [
                'fits' => [
                    "Your best work is invisible because nobody's finding you in search or AI tools.",
                    'You want SEO, paid, and outreach working as one coordinated plan instead of separate vendors.',
                    "You're prepared for a compounding effort, not a 30-day ranking promise.",
                ],
                'not_fit' => "If you're looking for a guaranteed page-one ranking by a fixed date, that's not something anyone can honestly promise — including us.",
            ],
            'benefits' => [
                ['title' => 'Found by people already looking', 'desc' => 'Technical SEO and targeted campaigns put the business in front of people who are already searching for what it offers.', 'list' => ['Higher visibility in search and AI tools', 'Traffic from people actively looking', 'Campaigns aimed at your actual buyers']],
                ['title' => "A pipeline that runs on its own", 'desc' => 'SEO, paid, and outreach work as one coordinated system instead of three disconnected efforts competing for the same budget.', 'list' => ['Compounding organic visibility', 'Paid campaigns tracked to real conversions', "Outreach that doesn't rely on manual follow-up"]],
                ['title' => 'Reporting you can actually trust', 'desc' => "No vanity metrics dressed up as results — rankings and traffic get reported as they actually move.", 'list' => ['Honest, straightforward reporting', 'No inflated promises', "A clear view of what's actually working"]],
                ['title' => 'Visibility that keeps compounding', 'desc' => 'Technical fixes and content structure keep paying off long after the initial work is done, instead of resetting every time a campaign ends.', 'list' => ['Rankings that build over time', 'Content that keeps working after publishing', 'A foundation for future campaigns']],
            ],
            'menu_highlights' => ['Technical SEO', 'Social Media Marketing', 'AEO', 'GEO'],
            'img' => 'https://ik.imagekit.io/eoweeomen/mdabdulmottalib/portfolio/SEO-Digital-Marketing.jpg',
            'href' => '/services/seo-digital-marketing',
            'portfolio_categories' => [],
            'why_wavesync' => [
                ['title' => 'Technical grounding, not guesswork', 'desc' => 'Site speed, crawlability, and structured data get fixed first, before any content strategy is layered on top.'],
                ['title' => 'Honest timelines', 'desc' => 'No promises of "page one in 30 days" — SEO is a compounding effort, and that gets said upfront, not after you\'ve paid.'],
                ['title' => "Built for where search is going", 'desc' => "AEO/GEO/LLMO work happens alongside traditional SEO, so you're found by AI tools too, not just Google."],
            ],

            'deliverables' => [
                ['icon' => 'fi-rr-search-alt', 'title' => 'Technical SEO', 'desc' => 'Site speed, crawlability, mobile usability, and the behind-the-scenes fixes that determine whether search engines can find and properly understand your site in the first place.'],
                ['icon' => 'fi-rr-earth-americas', 'title' => 'GEO', 'desc' => 'Generative Engine Optimization — structuring your content so AI tools like ChatGPT and Perplexity can accurately understand and cite your business when someone asks them a relevant question.'],
                ['icon' => 'fi-rr-comment-question', 'title' => 'AEO', 'desc' => 'Answer Engine Optimization — formatting content to directly answer the specific questions your customers are searching, increasing the odds of showing up in featured snippets and AI Overviews.'],
                ['icon' => 'fi-rr-brackets-curly', 'title' => 'Schema Markup', 'desc' => 'Structured data added to your site so search engines can display richer results — star ratings, FAQs, business info — directly in the search results, not just a plain blue link.'],
                ['icon' => 'fi-rr-megaphone', 'title' => 'Social Media Marketing', 'desc' => 'Facebook and Instagram campaigns and audience targeting to put your business in front of the right people, even before they start actively searching.'],
                ['icon' => 'fi-rr-bullseye-arrow', 'title' => 'Google Ads', 'desc' => 'Search campaigns targeting people actively looking for what you offer, with budgets and targeting managed to avoid wasted spend.'],
                ['icon' => 'fi-rr-paper-plane', 'title' => 'Cold Email', 'desc' => 'Outreach sequences to prospects who haven\'t found you yet — written to sound like a person, not a template, and tracked so we know what\'s actually working.'],
                ['icon' => 'fi-rr-filter', 'title' => 'Funnel Design', 'desc' => 'The path from first click to conversion — landing pages, follow-up sequences, and calls to action — designed as one connected system instead of disconnected pieces.'],
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
            'icon' => 'fi-rr-user-robot',
            'title' => 'Automation & Integration',
            'desc' => 'We automate the work that slows your business down — connecting your tools into custom workflows, automating lead follow-up and outreach, and adding AI agents or live chat only where they genuinely help. Not every automation needs AI behind it; the goal is systems that run without someone doing the work by hand, not AI for its own sake.',
            'tags' => ['Process Mapping', 'Tool Integrations', 'Chatbot Deployment', 'Data Pipeline Automation', 'CRM Automation', 'API Connections'],
            'who_its_for' => [
                'fits' => [
                    'Your team is doing repetitive, pattern-based work by hand — follow-ups, data entry, lead routing.',
                    "You want automation connected to tools you already use, not a forced platform migration.",
                    "You're open to AI where it genuinely helps, not chasing \"AI\" as a checkbox.",
                ],
                'not_fit' => "If the process changes shape every time depending on judgment calls a person needs to make, that's not a good automation candidate yet.",
            ],
            'benefits' => [
                ['title' => 'Hours back every week', 'desc' => 'Repetitive, pattern-based tasks get automated so your team spends time on the work that actually needs a person.', 'list' => ['Follow-ups and data entry handled automatically', 'Leads routed the moment they arrive', 'Fewer manual, repeatable tasks']],
                ['title' => 'Connected to what you already use', 'desc' => 'Workflows integrate with your existing tools instead of forcing a migration to a new platform.', 'list' => ['No forced platform switch', 'Your CRM, email, and calendar connected', 'Automations that fit how you already work']],
                ['title' => "Failures get caught, not discovered later", 'desc' => 'Workflows are built with error handling and alerts, so a broken step gets noticed immediately, not weeks later.', 'list' => ["Alerts when something breaks", 'Documented, not a black box', 'Monitored after launch, not abandoned']],
                ['title' => 'Automated only where it actually helps', 'desc' => "Not every task gets AI thrown at it — the goal is systems that work, not automation for its own sake.", 'list' => ['AI used where it genuinely helps', 'No automation for its own sake', 'Scoped to real, repeatable tasks']],
            ],
            'menu_highlights' => ['Custom LLM Agents', 'Workflow Automation', 'n8n Workflows'],
            'img' => 'https://ik.imagekit.io/eoweeomen/WavesyncAgency/ai-automation.png',
            'href' => '/services/ai-automation-integration',
            'portfolio_categories' => [],
            'why_wavesync' => [
                ['title' => 'Real tools, not a black box', 'desc' => 'n8n, Openclaw, and Hermes are named and explained, not hidden behind vague "AI automation" language.'],
                ['title' => 'Automated only where it helps', 'desc' => "Not every workflow needs AI behind it — the goal is systems that work, not automation for its own sake."],
                ['title' => 'Connected to what you already use', 'desc' => 'Workflows are built to integrate with your existing tools, not force a migration to a new platform.'],
            ],

            'deliverables' => [
                ['icon' => 'fi-rr-diagram-project', 'title' => 'n8n Workflows', 'desc' => 'Custom automations connecting your website, CRM, email, and other tools — built on a flexible platform rather than locking you into one rigid all-in-one system.'],
                ['icon' => 'fi-rr-paper-plane-top', 'title' => 'Cold Email AI', 'desc' => 'AI-assisted outreach that personalizes messages at scale and adjusts follow-ups based on how a prospect responds, instead of sending the exact same sequence to everyone.'],
                ['icon' => 'fi-rr-funnel-dollar', 'title' => 'Lead Generation', 'desc' => 'Automated systems that qualify and route new leads the moment they come in, instead of sitting in an inbox until someone has time to look.'],
                ['icon' => 'fi-rr-headset', 'title' => 'AI Live Support', 'desc' => 'Chat-based support that handles common, repetitive questions instantly, any time of day, and hands off to a person when a conversation actually needs one.'],
                ['icon' => 'fi-rr-brain-circuit', 'title' => 'Custom LLM Agents', 'desc' => 'AI agents built around your specific business and data — not a generic chatbot — for tasks like qualifying leads, answering product questions, or triaging support.'],
                ['icon' => 'fi-rr-settings-sliders', 'title' => 'Workflow Automation', 'desc' => 'Repetitive, manual processes — data entry, status updates, follow-up reminders — rebuilt as automated workflows that run without someone doing it by hand.'],
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

    /*
    |--------------------------------------------------------------------
    | Mega menu categories
    |--------------------------------------------------------------------
    |
    | Purely display metadata for the desktop Services mega menu — groups
    | the 'highlights' below into the same four columns the menu has
    | always shown. Not linked to a page of their own (see the mega menu
    | comment in site-header.blade.php); each highlight underneath is.
    |
    */

    'categories' => [
        'web-design' => ['label' => 'Web Design', 'icon' => 'fi-rr-browser'],
        'branding-identity' => ['label' => 'Branding Identity', 'icon' => 'fi-rr-palette'],
        'digital-marketing' => ['label' => 'Digital Marketing', 'icon' => 'fi-rr-search'],
        'automation-integration' => ['label' => 'Automation & Integration', 'icon' => 'fi-rr-user-robot'],
    ],

    /*
    |--------------------------------------------------------------------
    | Individual highlight pages
    |--------------------------------------------------------------------
    |
    | Each of these is its own real /services/{slug} page (same deep-dive
    | template as 'services' above), not an anchor on a shared category
    | page. 'category' matches a key in 'categories' above, for mega menu
    | grouping only.
    |
    */

    'highlights' => [
        [
            'slug' => 'ux-ui-design',
            'category' => 'web-design',
            'icon' => 'fi-rr-pencil-ruler',
            'title' => 'UX/UI Design',
            'desc' => 'Wireframes and interface design built around how people actually decide, click, and scroll — not just what looks good in a still image.',
            'tags' => ['Usability Testing', 'Accessibility Standards', 'Responsive Layouts', 'Component Libraries', 'User Research'],
            'who_its_for' => [
                'fits' => [
                    'You have a product or site that needs real interface design, not just a visual skin.',
                    'Your team hands off to developers and specs keep getting lost in translation.',
                    'You want testing before a decision ships, not after launch.',
                ],
                'not_fit' => 'If you just need a quick logo or a single graphic, this is a bigger engagement than that.',
            ],
            'benefits' => [
                ['title' => 'Interfaces people actually want to use', 'desc' => 'Screens are built around how people really read, click, and decide — not just what looks good in a still frame.', 'list' => ['Fewer confused clicks and drop-offs', 'A clear next step on every screen', 'Tested with real tasks in mind']],
                ['title' => 'Nothing lost between design and build', 'desc' => 'Specs, redlines, and a documented component library mean what gets built matches what got designed.', 'list' => ['A clean handoff to development', 'Documented components and states', 'Fewer back-and-forth revisions post-handoff']],
                ['title' => 'A product that looks as good as it works', 'desc' => 'Consistent visual design signals quality before a user has evaluated a single feature.', 'list' => ['A consistent visual language', 'A professional first impression', 'Interfaces that build user trust']],
                ['title' => 'A system that scales with new features', 'desc' => 'Reusable components mean new screens stay consistent as the product grows, instead of getting redesigned from scratch each time.', 'list' => ['A reusable component library', 'Consistent new features by default', 'Less design debt over time']],
            ],
            'img' => 'https://ik.imagekit.io/eoweeomen/mdabdulmottalib/portfolio/Biscayne-bay-prep.jpg',
            'href' => '/services/ux-ui-design',
            'portfolio_categories' => ['Web Design'],
            'why_wavesync' => [
                ['title' => 'Figma-native workflow', 'desc' => 'Design work happens in Figma, the industry standard, so files are easy to hand off, review, and iterate on with your team.'],
                ['title' => 'Designs built to actually ship', 'desc' => "Every screen is checked against what's realistically buildable, not just what looks good in a static frame — so it doesn't need redesigning mid-development."],
                ['title' => 'Tested before it ships', 'desc' => "Prototypes get walked through with real tasks in mind, catching friction while it's still cheap to fix."],
            ],
            'deliverables' => [
                ['icon' => 'fi-rr-grid', 'title' => 'Wireframing', 'desc' => 'Low-fidelity layouts mapping every screen before any visual design starts, so structure gets tested before color and type do.'],
                ['icon' => 'fi-rr-sitemap', 'title' => 'User Flow Mapping', 'desc' => 'The exact path a visitor takes from landing to converting, charted out so nothing forces an extra click that loses them.'],
                ['icon' => 'fi-rr-layout-fluid', 'title' => 'Interface Design', 'desc' => 'The actual screens — typography, spacing, color, component states — built to a standard that holds up at any size.'],
                ['icon' => 'fi-rr-cursor-finger', 'title' => 'Interactive Prototyping', 'desc' => 'Clickable prototypes for testing and stakeholder sign-off before a single line of production code gets written.'],
                ['icon' => 'fi-rr-swatchbook', 'title' => 'Design Systems', 'desc' => 'A reusable library of components — buttons, cards, states — so new screens get built consistently instead of redesigned from scratch each time.'],
                ['icon' => 'fi-rr-hands-holding', 'title' => 'Developer Handoff', 'desc' => 'Specs, redlines, and exported assets prepared so what gets built matches what got designed, not lost in translation.'],
            ],
            'why_it_matters' => 'Most visitors decide whether to trust a site within seconds, based entirely on how it looks and how obvious the next step is — not on what it says.',
            'approach_statement' => "We design for the decision, not the demo — every screen exists to move someone one step closer to picking up the phone.",
            'process_steps' => [
                ['title' => 'Discover', 'desc' => "We look at who's using the product, what they're trying to do, and where they currently get stuck or give up."],
                ['title' => 'Map', 'desc' => 'User flows and wireframes come first, so the structure is right before a single pixel gets styled.'],
                ['title' => 'Design', 'desc' => 'Full interface design — typography, components, states — built as a system, not a one-off set of screens.'],
                ['title' => 'Test', 'desc' => 'Prototypes get walked through before build, catching friction while it\'s still cheap to fix.'],
            ],
            'faqs' => [
                ['question' => 'Do you design in Figma?', 'answer' => 'Yes — Figma is our standard, which also makes handoff to development straightforward and keeps files easy to share with your team.'],
                ['question' => 'Can you redesign specific screens without touching the rest of the product?', 'answer' => "Often, yes — we'll assess whether the existing design system can absorb a partial redesign or whether it needs a wider pass first."],
                ['question' => 'Do you also build what you design?', 'answer' => 'Yes — Laravel and WordPress development are part of Wavesync, so design and build stay under one roof instead of getting lost in handoff.'],
                ['question' => 'What do you need from me to start?', 'answer' => "Access to any existing designs or product, and a clear sense of who your users are and what they're trying to accomplish."],
            ],
        ],
        [
            'slug' => 'laravel-development-service',
            'category' => 'web-design',
            'icon' => 'fi-rr-laptop-code',
            'title' => 'Laravel Development',
            'desc' => "Custom web applications built on Laravel when a page builder isn't enough — logins, dashboards, booking systems, and the application logic behind them.",
            'tags' => ['Custom Web Apps', 'Laravel', 'RESTful APIs', 'Queue & Job Processing', 'Role-Based Permissions'],
            'who_its_for' => [
                'fits' => [
                    'The project needs actual logins, dashboards, bookings, or custom workflows — not a page builder.',
                    'You want automated tests written for the logic that has to be correct.',
                    "You've outgrown what WordPress or a no-code tool can reasonably do.",
                ],
                'not_fit' => 'If a content-driven site with no real application logic is all you need, WordPress Development will get you there for less.',
            ],
            'benefits' => [
                ['title' => 'An application that does what it should', 'desc' => 'Logins, dashboards, and workflows built around what the business actually needs, not a generic template forced to fit.', 'list' => ['Custom logic built around real workflows', 'Dashboards that show what actually matters', 'No forced page-builder workarounds']],
                ['title' => 'Fewer bugs reaching production', 'desc' => 'Automated tests are written for the logic that actually needs to be correct, as part of the build, not bolted on after.', 'list' => ['Test coverage for critical logic', 'Fewer regressions after updates', 'Issues caught before launch']],
                ['title' => "A codebase your next developer won't dread", 'desc' => 'Clean architecture and documentation mean the project is maintainable by anyone, not just the person who built it.', 'list' => ['A documented, structured codebase', 'Easy handoff to another developer', 'No undocumented workarounds']],
                ['title' => 'Built to handle real growth', 'desc' => 'The application architecture is planned to hold up as usage, data, and features grow, not just for the initial launch.', 'list' => ['Database and architecture planned for scale', 'Room to add features without a rebuild', 'Queue and job processing for heavier workloads']],
            ],
            'img' => 'https://ik.imagekit.io/eoweeomen/mdabdulmottalib/portfolio/Biscayne-bay-prep.jpg',
            'href' => '/services/laravel-development-service',
            'portfolio_categories' => ['Web Design'],
            'why_wavesync' => [
                ['title' => 'Real application logic, not a workaround', 'desc' => 'Laravel gets used specifically when a project needs actual logins, dashboards, or custom logic — not by default.'],
                ['title' => 'Tests included, not bolted on', 'desc' => "Automated tests get written for the logic that actually needs to be correct, as part of the build."],
                ['title' => 'Honest fit assessment', 'desc' => "If a project doesn't actually need custom development, that gets said upfront rather than recommending the more expensive option anyway."],
            ],
            // 'category' controls which of the three orbit rings a tool
            // lands on (see the "Technology We Use" section in
            // service-page.blade.php): 'language' -> outer/largest ring,
            // 'infra' -> middle ring, 'collab' -> inner/smallest ring.
            'tech_stack' => [
                ['name' => 'Laravel', 'category' => 'language', 'icon_url' => 'https://cdn.simpleicons.org/laravel', 'desc' => 'The framework behind the real application logic — logins, dashboards, custom workflows.'],
                ['name' => 'PHP', 'category' => 'language', 'icon_url' => 'https://cdn.simpleicons.org/php', 'desc' => 'The language every request runs through, chosen for its maturity and universal hosting support.'],
                ['name' => 'React', 'category' => 'language', 'icon_url' => 'https://cdn.simpleicons.org/react', 'desc' => 'For interactive, component-based interfaces layered on top of Laravel.'],
                ['name' => 'Tailwind CSS', 'category' => 'language', 'icon_url' => 'https://cdn.simpleicons.org/tailwindcss', 'desc' => 'The utility-first CSS framework behind fast, consistent styling.'],
                ['name' => 'Inertia.js', 'category' => 'language', 'icon_url' => 'https://cdn.simpleicons.org/inertia', 'desc' => "The bridge that lets Laravel and React work together as one app, no separate API needed."],
                ['name' => 'Next.js', 'category' => 'language', 'icon_url' => 'https://cdn.simpleicons.org/nextdotjs', 'desc' => "For fully decoupled frontends, when a project calls for its own dedicated app layer."],
                ['name' => 'Livewire', 'category' => 'language', 'icon_url' => 'https://cdn.simpleicons.org/livewire'],
                ['name' => 'Redux', 'category' => 'language', 'icon_url' => 'https://cdn.simpleicons.org/redux'],
                ['name' => 'Node.js', 'category' => 'language', 'icon_url' => 'https://cdn.simpleicons.org/nodedotjs'],
                ['name' => 'Vite', 'category' => 'language', 'icon_url' => 'https://cdn.simpleicons.org/vite'],
                ['name' => 'Composer', 'category' => 'language', 'icon_url' => 'https://cdn.simpleicons.org/composer'],

                // Better Auth's real brand color is pure white (#FFFFFF) —
                // invisible on the light badge every other icon uses, same
                // problem as Acrobat Pro elsewhere on this page. Same fix:
                // its own dark badge instead of a washed-out glyph.
                ['name' => 'Better Auth', 'category' => 'infra', 'icon_url' => 'https://cdn.simpleicons.org/betterauth', 'icon_bg' => '#000000', 'icon_mono' => true],
                ['name' => 'Supabase', 'category' => 'infra', 'icon_url' => 'https://cdn.simpleicons.org/supabase'],
                ['name' => 'PostgreSQL', 'category' => 'infra', 'icon_url' => 'https://cdn.simpleicons.org/postgresql'],
                ['name' => 'MongoDB', 'category' => 'infra', 'icon_url' => 'https://cdn.simpleicons.org/mongodb'],
                ['name' => 'MySQL', 'category' => 'infra', 'icon_url' => 'https://cdn.simpleicons.org/mysql'],
                ['name' => 'Redis', 'category' => 'infra', 'icon_url' => 'https://cdn.simpleicons.org/redis'],
                ['name' => 'GitHub', 'category' => 'infra', 'icon_url' => 'https://cdn.simpleicons.org/github'],
                ['name' => 'GitLab', 'category' => 'infra', 'icon_url' => 'https://cdn.simpleicons.org/gitlab'],
                ['name' => 'Vercel', 'category' => 'infra', 'icon_url' => 'https://cdn.simpleicons.org/vercel'],
                ['name' => 'Lovable', 'category' => 'infra', 'icon_url' => 'https://api.iconify.design/devicon/lovable.svg'],
                ['name' => 'v0', 'category' => 'infra', 'icon_url' => 'https://cdn.simpleicons.org/v0'],
                ['name' => 'Claude', 'category' => 'infra', 'icon_url' => 'https://cdn.simpleicons.org/claude'],
                ['name' => 'OpenAI', 'category' => 'infra', 'icon_url' => 'https://api.iconify.design/logos/openai-icon.svg'],

                ['name' => 'Figma', 'category' => 'collab', 'icon_url' => 'https://cdn.simpleicons.org/figma'],
                ['name' => 'Slack', 'category' => 'collab', 'icon_url' => 'https://api.iconify.design/logos/slack-icon.svg'],
                ['name' => 'Asana', 'category' => 'collab', 'icon_url' => 'https://cdn.simpleicons.org/asana'],
                ['name' => 'Miro', 'category' => 'collab', 'icon_url' => 'https://cdn.simpleicons.org/miro'],
                ['name' => 'Notion', 'category' => 'collab', 'icon_url' => 'https://cdn.simpleicons.org/notion'],
                ['name' => 'ClickUp', 'category' => 'collab', 'icon_url' => 'https://cdn.simpleicons.org/clickup'],
            ],
            'deliverables' => [
                ['icon' => 'fi-rr-diagram-cells', 'title' => 'Application Architecture', 'desc' => 'Database structure and application logic planned before development starts, so the system holds up as it grows.'],
                ['icon' => 'fi-rr-dashboard', 'title' => 'Custom Dashboards', 'desc' => 'Admin panels and user dashboards built around the specific data and actions your business actually needs, not a generic CRUD screen.'],
                ['icon' => 'fi-rr-puzzle', 'title' => 'API Integration', 'desc' => 'Connecting third-party services and internal systems so data moves automatically instead of getting copied by hand.'],
                ['icon' => 'fi-rr-lock', 'title' => 'Authentication & Access Control', 'desc' => "Logins, roles, and permissions built correctly the first time, since this is the part that's expensive to get wrong."],
                ['icon' => 'fi-rr-database', 'title' => 'Database Design', 'desc' => "Schema designed for how the data actually gets used and how the application will grow, not just what's convenient to build first."],
                ['icon' => 'fi-rr-test-tube', 'title' => 'Automated Testing', 'desc' => "Test coverage written for the logic that actually needs to be correct, so changes later don't quietly break what already works."],
            ],
            'why_it_matters' => "A page builder can only take a project so far — once a site needs real logic behind it (logins, bookings, custom data), the wrong foundation turns into a rebuild later.",
            'approach_statement' => "We reach for Laravel when a business genuinely needs a web application, not a website — and we say so honestly when it doesn't.",
            'process_steps' => [
                ['title' => 'Discover', 'desc' => 'We map exactly what the application needs to do, including the edge cases that usually get missed in a first pass.'],
                ['title' => 'Design', 'desc' => 'Database schema and application architecture get planned before any code is written.'],
                ['title' => 'Build', 'desc' => 'Laravel development with tests as we go, not bolted on at the end.'],
                ['title' => 'Launch', 'desc' => 'Deployment, monitoring, and a handoff that leaves you able to actually maintain the system.'],
            ],
            'faqs' => [
                ['question' => 'When do I need Laravel instead of WordPress?', 'answer' => 'When the site needs real application logic — logins, dashboards, bookings, custom workflows — rather than content management.'],
                ['question' => 'Can you take over an existing Laravel project?', 'answer' => "Yes, after an honest audit of the current codebase so we know what we're actually inheriting."],
                ['question' => 'Do you write automated tests?', 'answer' => "Yes, for the logic that actually needs to be correct — not for coverage numbers on their own."],
                ['question' => 'Do you offer ongoing support after launch?', 'answer' => 'Yes — a shipped application still needs someone accountable for it as it\'s used in the real world.'],
            ],
        ],
        [
            'slug' => 'wordpress-development-service',
            'category' => 'web-design',
            'icon' => 'fi-rr-globe',
            'title' => 'WordPress Development',
            'desc' => 'Content-driven sites built on WordPress when easy self-editing and a faster build make more sense than a fully custom application.',
            'tags' => ['WordPress', 'Custom Themes', 'Content Management', 'Page Speed', 'Multisite Setup'],
            'who_its_for' => [
                'fits' => [
                    'You want a site your own team can update without calling a developer for every text change.',
                    'Your current WordPress site feels slow or bloated from stacked plugins.',
                    'Content management matters more than custom application logic.',
                ],
                'not_fit' => 'If the project needs real logins, dashboards, or custom business logic, Laravel Development is the better fit.',
            ],
            'benefits' => [
                ['title' => 'Your team can actually update it', 'desc' => "The CMS setup is built around what your team needs to change day to day, so nobody's afraid to touch the site.", 'list' => ['Editable without calling a developer', 'Content structure built for your team', "No fear of breaking something"]],
                ['title' => 'Fast, without the plugin bloat', 'desc' => 'A custom theme avoids the stacked plugins and bloated templates that cause most "slow WordPress" complaints.', 'list' => ['A custom theme, not a modified template', 'Faster load times out of the box', 'Fewer plugins doing overlapping jobs']],
                ['title' => "A site that doesn't look like a template", 'desc' => "Built specifically for your brand, not a heavily customized theme carrying code you'll never use.", 'list' => ['Design built for your brand specifically', 'No generic theme fingerprints', 'Consistent with your other brand materials']],
                ['title' => 'Secure and maintainable long-term', 'desc' => "Core, theme, and plugin updates kept current, with backups configured so the site isn't one abandoned plugin away from a problem.", 'list' => ['Regular updates and backups', 'Locked-down login access', 'Documented for future maintenance']],
            ],
            'img' => 'https://ik.imagekit.io/eoweeomen/mdabdulmottalib/portfolio/Biscayne-bay-prep.jpg',
            'href' => '/services/wordpress-development-service',
            'portfolio_categories' => ['Web Design'],
            'why_wavesync' => [
                ['title' => 'Custom themes, not modified templates', 'desc' => "Built specifically for your site, not a heavily-customized theme carrying code you'll never use."],
                ['title' => 'Editable without a developer', 'desc' => "The CMS setup is built around what your team actually needs to update, so you're not stuck calling for every text change."],
                ['title' => 'Speed taken seriously', 'desc' => "Most \"slow WordPress\" complaints come from bloated themes and stacked plugins — both get avoided from the start."],
            ],
            // Rank Math and a generic "Schema" markup tool were both asked
            // for but have no real icon anywhere (Simple Icons, devicon,
            // Iconify) as of writing — skipped rather than guessed/faked.
            'tech_stack' => [
                ['name' => 'WordPress', 'category' => 'language', 'icon_url' => 'https://cdn.simpleicons.org/wordpress', 'desc' => 'The CMS behind sites your team can actually edit, without calling a developer for every change.'],
                ['name' => 'PHP', 'category' => 'language', 'icon_url' => 'https://cdn.simpleicons.org/php', 'desc' => 'The language every request runs through, chosen for its maturity and universal hosting support.'],
                ['name' => 'jQuery', 'category' => 'language', 'icon_url' => 'https://cdn.simpleicons.org/jquery'],
                ['name' => 'Gutenberg', 'category' => 'language', 'icon_url' => 'https://cdn.simpleicons.org/gutenberg'],
                ['name' => 'Elementor', 'category' => 'language', 'icon_url' => 'https://cdn.simpleicons.org/elementor', 'desc' => 'The page builder behind sites your team can update without touching code.'],
                ['name' => 'WooCommerce', 'category' => 'language', 'icon_url' => 'https://cdn.simpleicons.org/woocommerce', 'desc' => 'For WordPress sites that need to sell — products, cart, and checkout, built in.'],
                ['name' => 'WPForms', 'category' => 'language', 'icon_url' => 'https://api.iconify.design/fa6-brands/wpforms.svg'],

                ['name' => 'MySQL', 'category' => 'infra', 'icon_url' => 'https://cdn.simpleicons.org/mysql', 'desc' => 'The database holding content and structured data behind the scenes.'],
                ['name' => 'Yoast SEO', 'category' => 'infra', 'icon_url' => 'https://cdn.simpleicons.org/yoast'],
                ['name' => 'WP Rocket', 'category' => 'infra', 'icon_url' => 'https://cdn.simpleicons.org/wprocket'],
                ['name' => 'Cloudflare', 'category' => 'infra', 'icon_url' => 'https://cdn.simpleicons.org/cloudflare'],
                ['name' => 'phpMyAdmin', 'category' => 'infra', 'icon_url' => 'https://cdn.simpleicons.org/phpmyadmin'],
                ['name' => 'cPanel', 'category' => 'infra', 'icon_url' => 'https://cdn.simpleicons.org/cpanel'],
                ['name' => 'Mailchimp', 'category' => 'infra', 'icon_url' => 'https://cdn.simpleicons.org/mailchimp'],
                ['name' => 'Google Analytics', 'category' => 'infra', 'icon_url' => 'https://cdn.simpleicons.org/googleanalytics'],
                ['name' => 'Stripe', 'category' => 'infra', 'icon_url' => 'https://cdn.simpleicons.org/stripe'],
                ['name' => 'PayPal', 'category' => 'infra', 'icon_url' => 'https://cdn.simpleicons.org/paypal'],
                ['name' => 'Redis', 'category' => 'infra', 'icon_url' => 'https://cdn.simpleicons.org/redis'],
                ['name' => 'Composer', 'category' => 'infra', 'icon_url' => 'https://cdn.simpleicons.org/composer'],
                ['name' => 'Node.js', 'category' => 'infra', 'icon_url' => 'https://cdn.simpleicons.org/nodedotjs'],
                ['name' => 'GitHub', 'category' => 'infra', 'icon_url' => 'https://cdn.simpleicons.org/github'],

                ['name' => 'Figma', 'category' => 'collab', 'icon_url' => 'https://cdn.simpleicons.org/figma'],
                ['name' => 'Slack', 'category' => 'collab', 'icon_url' => 'https://api.iconify.design/logos/slack-icon.svg'],
                ['name' => 'Asana', 'category' => 'collab', 'icon_url' => 'https://cdn.simpleicons.org/asana'],
                ['name' => 'Miro', 'category' => 'collab', 'icon_url' => 'https://cdn.simpleicons.org/miro'],
                ['name' => 'Notion', 'category' => 'collab', 'icon_url' => 'https://cdn.simpleicons.org/notion'],
                ['name' => 'ClickUp', 'category' => 'collab', 'icon_url' => 'https://cdn.simpleicons.org/clickup'],
            ],
            'deliverables' => [
                ['icon' => 'fi-rr-palette', 'title' => 'Custom Theme Development', 'desc' => "A theme built specifically for your site, not a heavily modified template carrying code you'll never use."],
                ['icon' => 'fi-rr-file', 'title' => 'Content Management Setup', 'desc' => "An editing experience built around what your team actually needs to update, so nobody's afraid to touch the site."],
                ['icon' => 'fi-rr-tachometer-fastest', 'title' => 'Performance Optimization', 'desc' => 'Load-time and image handling tuned properly, since a slow WordPress site is usually a setup problem, not a platform problem.'],
                ['icon' => 'fi-rr-puzzle-alt', 'title' => 'Plugin Development', 'desc' => 'Custom functionality built as a lightweight plugin when no existing plugin does the specific thing you need.'],
                ['icon' => 'fi-rr-shield-check', 'title' => 'Security Hardening', 'desc' => "Core, theme, and plugin updates kept current, login access locked down, and backups configured so the site isn't one abandoned plugin away from a problem."],
                ['icon' => 'fi-rr-arrows-repeat', 'title' => 'Site Migration', 'desc' => 'Moving an existing WordPress site to new hosting or a new theme without losing content, SEO rankings, or uptime along the way.'],
            ],
            'why_it_matters' => "WordPress runs a large share of the web for a reason, but most of its reputation for being slow or messy comes from bloated themes and stacked plugins, not the platform itself.",
            'approach_statement' => "We build WordPress sites the way we'd want to inherit one — clean, fast, and editable without a developer on call.",
            'process_steps' => [
                ['title' => 'Discover', 'desc' => 'We confirm WordPress is actually the right fit before recommending it, and figure out what your team needs to be able to edit.'],
                ['title' => 'Design', 'desc' => 'Visual design happens first, same as any other build — WordPress is the delivery mechanism, not the starting point.'],
                ['title' => 'Build', 'desc' => 'A custom theme built for your site specifically, tested across devices before it ever reaches a client review.'],
                ['title' => 'Launch', 'desc' => 'Speed and security checks before go-live, plus a walkthrough of how to actually use the CMS.'],
            ],
            'faqs' => [
                ['question' => 'Will I be able to update the site myself?', 'answer' => "Yes — that's the point of choosing WordPress, and we set the editing experience up around what you'll actually be changing."],
                ['question' => 'Do you use page builders like Elementor?', 'answer' => "Sometimes, when it genuinely speeds up editing without hurting performance — we don't default to one on principle either way."],
                ['question' => 'Can you fix a slow existing WordPress site?', 'answer' => 'Often, yes — most slowdowns come from theme bloat or unmanaged plugins, both fixable without a full rebuild.'],
                ['question' => 'Do you handle hosting too?', 'answer' => 'We can advise and set it up, though ongoing hosting is typically managed by the client or their existing provider.'],
            ],
        ],
        [
            'slug' => 'brand-identity',
            'category' => 'branding-identity',
            'icon' => 'fi-rr-object-union',
            'title' => 'Brand Identity',
            'desc' => 'Logo, color palette, and typography system — the core visual language a business uses everywhere, designed to work as well on a favicon as it does on a sign.',
            'tags' => ['Color Systems', 'Typography', 'Visual Identity', 'Mockup Presentation', 'Brand Strategy'],
            'who_its_for' => [
                'fits' => [
                    'You need a logo, color system, and typography that hold up at every size.',
                    "You're starting a business (or rebranding) and want strategy behind the visuals, not just a mark.",
                    'You want documented guidelines so the identity stays consistent as other people apply it.',
                ],
                'not_fit' => 'If you already have a solid identity and just need ongoing marketing pieces, Graphic Design is the better fit.',
            ],
            'benefits' => [
                ['title' => 'A mark that actually gets recognized', 'desc' => "Built to hold up at every size, from a favicon to a storefront sign, so it's recognizable everywhere it appears.", 'list' => ['Legible at any size', 'Consistent across every application', 'A mark people actually remember']],
                ['title' => 'Applied consistently, without you managing it', 'desc' => 'Documented guidelines mean anyone applying the identity later — a printer, a new hire, a freelancer — gets it right.', 'list' => ['Documented usage rules', 'Consistent results from any vendor', 'No off-brand surprises']],
                ['title' => 'Looks like it belongs at your price point', 'desc' => 'A considered identity signals the business is established and worth the investment, before a single word is read.', 'list' => ['A professional first impression', 'Signals credibility and stability', 'Matches the quality of the work behind it']],
                ['title' => "Ready for what comes next", 'desc' => 'Built with room for packaging, merch, or new product lines, without needing a redesign to accommodate them.', 'list' => ['Room to extend into new formats', 'No redesign needed for new products', 'A system, not just a logo file']],
            ],
            'img' => 'https://ik.imagekit.io/eoweeomen/mdabdulmottalib/portfolio/BBPA.jpg',
            'href' => '/services/brand-identity',
            'portfolio_categories' => ['Branding & Marketing'],
            'why_wavesync' => [
                ['title' => 'Strategy before visuals', 'desc' => 'How you want to be perceived gets defined before a single logo concept, so design decisions have a reason behind them.'],
                ['title' => 'Built to hold up everywhere', 'desc' => "The mark is tested at favicon size and billboard size before it's considered finished."],
                ['title' => 'A usable system, not just files', 'desc' => 'Guidelines and templates ship alongside the logo, so the identity stays consistent no matter who applies it later.'],
            ],
            'tech_stack' => [
                ['name' => 'Figma', 'icon_url' => 'https://cdn.simpleicons.org/figma', 'desc' => 'Where every design happens — easy to hand off, review, and iterate on with your team.'],
                ['name' => 'Photoshop', 'icon_url' => 'https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/photoshop/photoshop-plain.svg', 'desc' => 'For photo editing, image compositing, and pixel-level retouching.'],
                ['name' => 'Illustrator', 'icon_url' => 'https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/illustrator/illustrator-plain.svg', 'desc' => "For vector work — logos, icons, anything that needs to scale without losing quality."],
                ['name' => 'InDesign', 'icon_url' => 'https://api.iconify.design/logos/adobe-indesign.svg', 'desc' => 'For multi-page layouts — brochures, guideline documents, anything print-length.'],
                ['name' => 'Canva', 'icon_url' => 'https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/canva/canva-original.svg', 'desc' => "For quick, on-brand social and marketing pieces that don't need a full design file."],
                ['name' => 'Acrobat Pro', 'icon_url' => 'https://api.iconify.design/cib/adobe-acrobat-reader.svg', 'desc' => 'For preparing and marking up print-ready PDFs.', 'icon_bg' => '#EC1C24', 'icon_mono' => true],
            ],
            'deliverables' => [
                ['icon' => 'fi-rr-pen-nib', 'title' => 'Logo Design', 'desc' => 'A mark built to hold up at every size, from a browser tab to a storefront, not just the large hero version.'],
                ['icon' => 'fi-rr-swatchbook', 'title' => 'Color & Type System', 'desc' => 'A defined palette and typography pairing chosen for what the business needs to communicate, not just what looks nice in isolation.'],
                ['icon' => 'fi-rr-book-alt', 'title' => 'Brand Guidelines', 'desc' => "The rulebook for how the identity gets used — spacing, approved colors, type pairing — so it stays consistent no matter who's applying it."],
                ['icon' => 'fi-rr-layers', 'title' => 'Identity Applications', 'desc' => 'The everyday places the identity shows up — business cards, email signatures, social profiles — built from the same system.'],
                ['icon' => 'fi-rr-objects-column', 'title' => 'Logo Variations & Iconography', 'desc' => "Secondary marks, favicon versions, and app icons built alongside the primary logo, so the identity holds up in every size and context it'll actually appear in."],
                ['icon' => 'fi-rr-folder', 'title' => 'Brand Asset Library', 'desc' => "Every file organized and exported in the formats you'll actually need — print-ready, web-ready, source files — so nothing's a scramble to track down later."],
            ],
            'why_it_matters' => "An inconsistent logo, color, or type across a website and social channels quietly signals a business isn't quite put-together, even when the work itself is excellent.",
            'approach_statement' => "A brand isn't the logo — it's the pattern people recognize before they've read a word, and it has to hold together everywhere it shows up.",
            'process_steps' => [
                ['title' => 'Discover', 'desc' => 'We start with the business and its customers, not a mood board — what does this brand need to signal, and to whom?'],
                ['title' => 'Explore', 'desc' => "Visual directions get explored and narrowed to the one that actually fits, not just the one that's trending."],
                ['title' => 'Build', 'desc' => "The full system gets built out — guidelines, assets, applications — so it's usable the day it ships."],
                ['title' => 'Launch', 'desc' => 'A usable brand kit handed off, with support available as new applications come up later.'],
            ],
            'faqs' => [
                ['question' => 'I already have a logo — can you build a system around it?', 'answer' => "Yes, if it's solid groundwork we'll build the wider identity around it rather than starting from zero."],
                ['question' => 'How long does a brand identity project take?', 'answer' => 'It depends on scope — a logo and basic guidelines move faster than a full system with applications and templates.'],
                ['question' => 'Do you design packaging too?', 'answer' => 'Yes, packaging and product design work can be scoped alongside the core identity.'],
                ['question' => 'What files do I actually get at the end?', 'answer' => "Source files, guidelines, and export-ready assets in the formats you'll actually need — print and digital."],
            ],
        ],
        [
            'slug' => 'graphic-design-service',
            'category' => 'branding-identity',
            'icon' => 'fi-rr-picture',
            'title' => 'Graphic Design',
            'desc' => 'Social templates, ad creative, and one-off marketing pieces designed to stay consistent with the wider brand instead of looking like they came from a different business each time.',
            'tags' => ['Packaging Design', 'Infographics', 'Signage & Displays', 'Merchandise Design', 'Brand Photography Direction'],
            'who_its_for' => [
                'fits' => [
                    'You already have a brand system and need ongoing social, print, or presentation pieces built inside it.',
                    'You want format-aware design, not the same graphic resized for every channel.',
                    'Consistency across pieces matters more than one-off creative experiments.',
                ],
                'not_fit' => "If you don't have a brand system yet to design inside, Brand Identity comes first.",
            ],
            'benefits' => [
                ['title' => 'Every piece looks like the same business', 'desc' => 'Built inside your existing brand system, so a social post and a printed flyer never read as two different companies.', 'list' => ['Consistent look across formats', 'No off-brand pieces slipping through', 'Recognizable at a glance']],
                ['title' => "Built for how it'll actually be used", 'desc' => 'Social, print, and presentation pieces are designed for their actual format, not resized after the fact from a different piece.', 'list' => ['Format-aware from the start', 'No awkward resized graphics', 'Print-ready and web-ready as needed']],
                ['title' => "Marketing that doesn't undercut the brand", 'desc' => 'Consistent design across every piece reinforces the brand instead of quietly working against it.', 'list' => ['Every asset checked against brand guidelines', 'Consistent quality across pieces', 'No mismatched one-offs']],
                ['title' => 'A reusable library, not one-off files', 'desc' => 'Templates mean new social posts and marketing pieces can be produced faster without redesigning from scratch each time.', 'list' => ['Reusable templates for common formats', 'Faster turnaround on new pieces', 'An organized, exportable file library']],
            ],
            'img' => 'https://ik.imagekit.io/eoweeomen/mdabdulmottalib/portfolio/BBPA.jpg',
            'href' => '/services/graphic-design-service',
            'portfolio_categories' => ['Branding & Marketing'],
            'why_wavesync' => [
                ['title' => 'Built on your existing brand system', 'desc' => 'Every piece gets checked against your identity guidelines, not designed in isolation.'],
                ['title' => 'Format-aware from the start', 'desc' => "Social, print, and presentation work is designed for how it'll actually be used, not resized after the fact."],
                ['title' => 'Consistent output, not one-off pieces', 'desc' => 'A social post and a printed flyer read as the same business, every time.'],
            ],
            'tech_stack' => [
                ['name' => 'Figma', 'icon_url' => 'https://cdn.simpleicons.org/figma', 'desc' => 'Where every design happens — easy to hand off, review, and iterate on with your team.'],
                ['name' => 'Photoshop', 'icon_url' => 'https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/photoshop/photoshop-plain.svg', 'desc' => 'For photo editing, image compositing, and pixel-level retouching.'],
                ['name' => 'Illustrator', 'icon_url' => 'https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/illustrator/illustrator-plain.svg', 'desc' => "For vector work — logos, icons, anything that needs to scale without losing quality."],
                ['name' => 'InDesign', 'icon_url' => 'https://api.iconify.design/logos/adobe-indesign.svg', 'desc' => 'For multi-page layouts — brochures, guideline documents, anything print-length.'],
                ['name' => 'Canva', 'icon_url' => 'https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/canva/canva-original.svg', 'desc' => "For quick, on-brand social and marketing pieces that don't need a full design file."],
                ['name' => 'Acrobat Pro', 'icon_url' => 'https://api.iconify.design/cib/adobe-acrobat-reader.svg', 'desc' => 'For preparing and marking up print-ready PDFs.', 'icon_bg' => '#EC1C24', 'icon_mono' => true],
            ],
            'deliverables' => [
                ['icon' => 'fi-rr-grid-alt', 'title' => 'Social Media Templates', 'desc' => "A reusable set of templates so every post looks like it belongs to the same brand, without redesigning from scratch each time."],
                ['icon' => 'fi-rr-picture', 'title' => 'Ad Creative', 'desc' => "Static and short-form ad visuals built around what actually stops a scroll, tied to the campaign's real goal."],
                ['icon' => 'fi-rr-print', 'title' => 'Print Materials', 'desc' => 'Business cards, flyers, and signage that hold up in physical form, not just on a screen.'],
                ['icon' => 'fi-rr-presentation', 'title' => 'Presentation Design', 'desc' => 'Pitch decks and internal presentations designed to look like they came from the same business as the website.'],
                ['icon' => 'fi-rr-file', 'title' => 'Marketing Collateral', 'desc' => 'One-pagers, sales sheets, and brochures built to support a sales conversation, not just sit in a folder unread.'],
                ['icon' => 'fi-rr-envelope', 'title' => 'Email & Newsletter Design', 'desc' => 'Templates for newsletters and campaign emails that stay on-brand and render properly across inboxes, not just in a browser preview.'],
            ],
            'why_it_matters' => "Every piece of marketing a business puts out either reinforces the brand or quietly works against it — inconsistent design adds up to a business that doesn't look sure of itself.",
            'approach_statement' => 'Every asset gets checked against the same brand system, so a social post and a printed flyer never look like they came from two different companies.',
            'process_steps' => [
                ['title' => 'Discover', 'desc' => 'We confirm what the piece needs to actually accomplish before opening a design file.'],
                ['title' => 'Design', 'desc' => 'Work happens against the existing brand system, adapted for the specific format — social, print, or presentation.'],
                ['title' => 'Review', 'desc' => 'Revisions happen against clear feedback, not open-ended guessing.'],
                ['title' => 'Deliver', 'desc' => "Final files handed off export-ready for however they'll actually be used."],
            ],
            'faqs' => [
                ['question' => 'Can you work within our existing brand guidelines?', 'answer' => 'Yes — if guidelines already exist, we design inside them rather than working around them.'],
                ['question' => 'Do you offer ongoing design as a retainer?', 'answer' => 'For clients with a steady volume of social or ad creative, yes — ask about ongoing arrangements.'],
                ['question' => "What's the difference between this and the Brand Identity service?", 'answer' => 'Brand Identity builds the system itself; Graphic Design applies that system to ongoing marketing pieces.'],
                ['question' => 'Can you design for print and digital in the same project?', 'answer' => 'Yes — most brand work ends up needing both at some point.'],
            ],
        ],
        [
            'slug' => 'digital-product-design',
            'category' => 'branding-identity',
            'icon' => 'fi-rr-apps',
            'title' => 'Digital Product Design',
            'desc' => 'Interfaces and design systems for software products — app screens, dashboards, and onboarding flows — held to the same design standard as a marketing site.',
            'tags' => ['Interaction Design', 'Micro-interactions', 'Usability Testing', 'Accessibility', 'Cross-Platform Consistency'],
            'who_its_for' => [
                'fits' => [
                    "You're designing a software product's screens, not a marketing site.",
                    'You need a reusable design system so new features stay visually consistent.',
                    'You want real users walked through flows before (and after) design changes.',
                ],
                'not_fit' => 'If this is a marketing website rather than a software product with logins and flows, Web Design is the better fit.',
            ],
            'benefits' => [
                ['title' => 'Users get to their first result faster', 'desc' => 'Onboarding and core flows are designed specifically to get someone to a meaningful result quickly, not just through a tour.', 'list' => ['A faster time to first value', 'Fewer users dropping off early', 'A clear next step at every screen']],
                ['title' => 'Consistent as the product grows', 'desc' => 'A reusable design system means new features stay visually consistent instead of feeling bolted on.', 'list' => ['Reusable components and patterns', 'Consistent new features by default', 'Less design debt over time']],
                ['title' => 'Decisions based on real behavior', 'desc' => 'Real users are walked through key flows before and after changes, so decisions are based on how people actually behave.', 'list' => ['User testing before and after changes', 'Decisions backed by real behavior', 'Edge cases designed for, not discovered later']],
                ['title' => 'An interface that earns trust fast', 'desc' => "A product has a few screens to earn trust before people decide whether to stick around and evaluate the actual features.", 'list' => ['A confidence-building first impression', 'Fewer early-drop-off screens', "Interface quality that matches the product's value"]],
            ],
            'img' => 'https://ik.imagekit.io/eoweeomen/mdabdulmottalib/portfolio/BBPA.jpg',
            'href' => '/services/digital-product-design',
            'portfolio_categories' => ['Branding & Marketing'],
            'why_wavesync' => [
                ['title' => 'Interfaces designed around real tasks', 'desc' => 'Screens get built for what users are actually trying to accomplish, not a visual refresh of an existing layout.'],
                ['title' => 'Systems, not static screens', 'desc' => 'Reusable components mean new features stay visually consistent as the product grows.'],
                ['title' => 'Same standard as a marketing site', 'desc' => 'Product interfaces get the same care as a homepage, not treated as an internal afterthought.'],
            ],
            'deliverables' => [
                ['icon' => 'fi-rr-browser', 'title' => 'Product UI Design', 'desc' => 'App and dashboard screens designed around real user tasks, not just a visual refresh of an existing layout.'],
                ['icon' => 'fi-rr-swatchbook', 'title' => 'Design Systems', 'desc' => 'Reusable components and patterns so the product stays visually consistent as new screens get added.'],
                ['icon' => 'fi-rr-sign-in-alt', 'title' => 'Onboarding Flows', 'desc' => 'The first few minutes of using a product, designed specifically to get someone to their first real result quickly.'],
                ['icon' => 'fi-rr-table-layout', 'title' => 'SaaS Interface Design', 'desc' => 'Web application interfaces for software products, treated with the same care as a marketing site rather than an afterthought.'],
                ['icon' => 'fi-rr-users', 'title' => 'User Research & Testing', 'desc' => 'Real users walked through key flows before and after design changes, so decisions are based on how people actually behave, not assumptions.'],
                ['icon' => 'fi-rr-box', 'title' => 'Empty States & Edge Cases', 'desc' => 'The screens most products forget — no data yet, errors, permission limits — designed with the same care as the primary flow.'],
            ],
            'why_it_matters' => "Software products are often judged by their interface before anyone evaluates whether the underlying feature is any good — a confusing screen loses users before the product gets a fair chance.",
            'approach_statement' => 'A product interface has to earn trust in the first few screens, or nobody sticks around long enough to find out if the product is actually good.',
            'process_steps' => [
                ['title' => 'Discover', 'desc' => 'We learn what users are trying to accomplish and where the current product creates friction.'],
                ['title' => 'Map', 'desc' => 'Key flows get mapped and wireframed before visual design starts.'],
                ['title' => 'Design', 'desc' => 'Full interface design, built as a system so new features stay consistent as the product grows.'],
                ['title' => 'Test', 'desc' => 'Flows get walked through with real tasks in mind before handoff to development.'],
            ],
            'faqs' => [
                ['question' => 'Do you design for existing products or only new ones?', 'answer' => 'Both — redesigning specific flows in an existing product is common work, not just greenfield builds.'],
                ['question' => "Can you build the product too, not just design it?", 'answer' => 'Yes, through the Laravel Development service, if the project calls for full development alongside design.'],
                ['question' => 'Do you provide a design system file, not just static screens?', 'answer' => 'Yes — components and patterns are delivered as a reusable system, typically in Figma.'],
                ['question' => 'How do you handle products with a lot of edge cases?', 'answer' => 'We map them early, during the discovery phase, rather than discovering them mid-build.'],
            ],
        ],
        [
            'slug' => 'social-media-marketing-service',
            'category' => 'digital-marketing',
            'icon' => 'fi-rr-megaphone',
            'title' => 'Social Media Marketing',
            'desc' => 'Facebook and Instagram campaigns and audience targeting that put a business in front of the right people, even before they start actively searching.',
            'tags' => ['Retargeting Campaigns', 'Influencer Partnerships', 'Content Calendars', 'Community Management', 'Budget Optimization'],
            'who_its_for' => [
                'fits' => [
                    "You want to reach people before they're actively searching, not just after.",
                    'You need creative and audience targeting built together, not handed between separate teams.',
                    'You care about leads and conversions in reporting, not just reach and likes.',
                ],
                'not_fit' => 'If your buyers only ever find you through search, budget is probably better spent on SEO first.',
            ],
            'benefits' => [
                ['title' => "Reaches people before they're searching", 'desc' => "Targeted campaigns put the business in front of the right audience before they've started actively looking.", 'list' => ['An audience built around who actually buys', 'Visibility before intent forms', 'Awareness that feeds future search demand']],
                ['title' => 'Budget spent on what converts', 'desc' => 'Creative and targeting are tested against each other, so spend shifts toward what the audience actually responds to.', 'list' => ['A/B tested creative and targeting', 'Budget shifted toward what works', 'Less spend wasted on the wrong audience']],
                ['title' => 'Reporting beyond likes and reach', 'desc' => "Leads and conversions get reported alongside engagement numbers, not instead of them.", 'list' => ['Conversion-focused reporting', 'No vanity metrics standing in for results', 'A clear view of real ROI']],
                ['title' => 'Campaigns that improve over time', 'desc' => 'Ongoing management means campaigns get adjusted based on real performance data, not left on autopilot after launch.', 'list' => ['Active, ongoing optimization', 'Creative refreshed before it fatigues', 'Targeting refined as data comes in']],
            ],
            'img' => 'https://ik.imagekit.io/eoweeomen/mdabdulmottalib/portfolio/SEO-Digital-Marketing.jpg',
            'href' => '/services/social-media-marketing-service',
            'portfolio_categories' => [],
            'why_wavesync' => [
                ['title' => 'Targeting built around who buys', 'desc' => 'Audiences get defined by who actually buys, not broad demographic guesses.'],
                ['title' => 'Creative and targeting, one plan', 'desc' => "Content and audience strategy are built together, not handed off between separate teams that don't talk."],
                ['title' => 'Reporting without vanity metrics', 'desc' => "Reach and likes get reported alongside what actually matters — leads and conversions — not instead of it."],
            ],
            'deliverables' => [
                ['icon' => 'fi-rr-chess', 'title' => 'Campaign Strategy', 'desc' => 'Goals, audience, and budget planned before a single ad goes live, so spend has a clear job to do.'],
                ['icon' => 'fi-rr-bullseye', 'title' => 'Audience Targeting', 'desc' => "Targeting built around who actually buys, not just who's cheapest to reach."],
                ['icon' => 'fi-rr-picture', 'title' => 'Ad Creative & Copy', 'desc' => 'Visuals and copy built specifically for the platform and placement, not a resized version of a print ad.'],
                ['icon' => 'fi-rr-chart-line-up', 'title' => 'Performance Reporting', 'desc' => "Straightforward reporting on what's actually working, without vanity metrics dressed up as results."],
                ['icon' => 'fi-rr-megaphone', 'title' => 'Meta & Instagram Ads Management', 'desc' => 'Day-to-day campaign management — bid adjustments, budget shifts, creative rotation — instead of a set-and-forget launch.'],
                ['icon' => 'fi-rr-split', 'title' => 'A/B Testing', 'desc' => "Creative and targeting variations tested against each other, so decisions are based on what the audience actually responds to, not a guess."],
            ],
            'why_it_matters' => "Search only reaches people already looking — social reaches people before they've started, which matters for any business that isn't already a known name.",
            'approach_statement' => "We optimize for the action that actually matters to the business, not for cheap clicks that never turn into anything.",
            'process_steps' => [
                ['title' => 'Discover', 'desc' => 'We confirm who the audience actually is and what a genuinely good outcome looks like for this budget.'],
                ['title' => 'Design', 'desc' => "Creative and targeting get built together, since one doesn't work without the other."],
                ['title' => 'Launch', 'desc' => 'Campaigns go live with tracking in place from day one, not added after the fact.'],
                ['title' => 'Optimize', 'desc' => 'Ongoing adjustments based on what the data actually shows, not a fixed schedule.'],
            ],
            'faqs' => [
                ['question' => 'What\'s a realistic budget to start with?', 'answer' => "It depends on the market and goal — we'll give an honest recommendation rather than a one-size number."],
                ['question' => 'Do you write the ad copy too?', 'answer' => 'Yes, copy and creative are handled together so they\'re built for the same audience and goal.'],
                ['question' => 'How do you measure success?', 'answer' => 'Against the specific goal set at the start — leads, sales, or awareness — not a generic engagement number.'],
                ['question' => 'Can you manage ads alongside organic SEO?', 'answer' => 'Yes — paid and organic usually work better as one coordinated plan than two competing budgets.'],
            ],
        ],
        [
            'slug' => 'search-engine-optimization',
            'category' => 'digital-marketing',
            'icon' => 'fi-rr-chart-line-up',
            'title' => 'Search Engine Optimization',
            'desc' => 'Technical SEO, content structure, and schema markup that help search engines find, understand, and rank a site — for the searches that actually turn into business.',
            'tags' => ['Backlink Analysis', 'Local SEO', 'Mobile Optimization', 'Content Gap Analysis', 'Competitor Benchmarking'],
            'who_its_for' => [
                'fits' => [
                    "Most of your buyers start with a search, and you're not showing up in it.",
                    'You want technical fixes handled before content strategy gets layered on top.',
                    "You're comfortable with a compounding timeline, not a guaranteed ranking date.",
                ],
                'not_fit' => "If you need a guaranteed ranking by a specific date, that's not something anyone can honestly deliver.",
            ],
            'benefits' => [
                ['title' => "Shows up where buyers are already looking", 'desc' => 'Technical fixes and content structure help search engines find, understand, and rank the pages that actually matter.', 'list' => ['Improved visibility for relevant searches', 'Technical issues found and fixed', 'Content aligned with real search intent']],
                ['title' => 'Rankings you can actually verify', 'desc' => "No promises of a specific ranking by a specific date — movement gets tracked and reported as it actually happens.", 'list' => ['Real rank tracking, not projections', 'Honest timelines, no guaranteed dates', "A clear report on what's moving"]],
                ['title' => 'Richer results in the search page itself', 'desc' => "Schema markup helps search engines display ratings, FAQs, and business info directly in results, not just a plain blue link.", 'list' => ['Structured data for richer listings', 'Better click-through from search results', 'Business info surfaced directly in search']],
                ['title' => 'Value that compounds after the work is done', 'desc' => 'Technical SEO and content structure keep paying off well after the initial engagement ends.', 'list' => ['Rankings that build over time', 'No reliance on ongoing ad spend', 'A foundation future content can build on']],
            ],
            'img' => 'https://ik.imagekit.io/eoweeomen/mdabdulmottalib/portfolio/SEO-Digital-Marketing.jpg',
            'href' => '/services/search-engine-optimization',
            'portfolio_categories' => [],
            'why_wavesync' => [
                ['title' => 'Technical fixes first', 'desc' => 'Crawlability, speed, and structured data get audited and fixed before any content strategy is layered on top.'],
                ['title' => 'No fake ranking guarantees', 'desc' => 'No promises of a specific ranking by a specific date — that\'s not how search actually works, and it doesn\'t get pretended otherwise.'],
                ['title' => 'Tracked against real movement', 'desc' => 'Rankings and traffic get reported as they actually move, not projected numbers dressed up as results.'],
            ],
            'deliverables' => [
                ['icon' => 'fi-rr-search-alt', 'title' => 'Technical SEO Audit', 'desc' => 'Site speed, crawlability, and mobile usability checked and fixed, since these determine whether search engines can properly read a site at all.'],
                ['icon' => 'fi-rr-file', 'title' => 'On-Page Optimization', 'desc' => "Content and page structure aligned with what people are actually searching for, not keyword-stuffed for its own sake."],
                ['icon' => 'fi-rr-brackets-curly', 'title' => 'Schema Markup', 'desc' => 'Structured data added so search engines can display richer results — star ratings, FAQs, business info — instead of a plain blue link.'],
                ['icon' => 'fi-rr-arrow-trend-up', 'title' => 'Ongoing Rank Tracking', 'desc' => "Regular tracking of what's actually moving, so the strategy adjusts to real search behavior instead of a fixed plan."],
                ['icon' => 'fi-rr-key', 'title' => 'Keyword & Content Strategy', 'desc' => 'The specific searches worth targeting, prioritized by what a business can realistically rank for and what those searches are actually worth.'],
                ['icon' => 'fi-rr-tachometer-fastest', 'title' => 'Site Speed Optimization', 'desc' => 'Load-time fixes handled as their own project, since a slow site holds back both rankings and conversions regardless of how good the content is.'],
            ],
            'why_it_matters' => "Most buying decisions start with a search, not a direct visit — a business that doesn't show up there is relying entirely on people who already know it exists.",
            'approach_statement' => "Rankings aren't the goal — they're the byproduct. We optimize for the searches that actually turn into inquiries, not vanity keywords.",
            'process_steps' => [
                ['title' => 'Discover', 'desc' => "We audit current visibility — where a site ranks, what's working, and where competitors are pulling ahead."],
                ['title' => 'Plan', 'desc' => 'Technical fixes and content priorities get mapped based on what will actually move the needle.'],
                ['title' => 'Implement', 'desc' => 'Technical SEO and content changes go live, tracked from the start.'],
                ['title' => 'Adjust', 'desc' => 'Rankings and traffic get monitored, with the plan adjusted as algorithms and behavior shift.'],
            ],
            'faqs' => [
                ['question' => 'How long does SEO take to show results?', 'answer' => "It varies by market and competition, but it's a compounding effort — expect movement over months, not days."],
                ['question' => 'Do I need a new website for SEO to work?', 'answer' => "Not necessarily — we assess the current site first and only recommend changes that are actually needed."],
                ['question' => "What's the difference between this and AEO/GEO/LLMO?", 'answer' => 'This covers traditional search engines; AEO/GEO/LLMO covers being found and cited by AI tools specifically.'],
                ['question' => 'Do you guarantee a ranking position?', 'answer' => "No — anyone who guarantees a specific rank isn't being straight with you. We set realistic expectations upfront instead."],
            ],
        ],
        [
            'slug' => 'aeo-geo-llmo',
            'category' => 'digital-marketing',
            'icon' => 'fi-rr-brain-circuit',
            'title' => 'AEO / GEO / LLMO',
            'desc' => "Structuring content so AI tools like ChatGPT, Perplexity, and Google's AI Overviews can accurately find, understand, and cite a business.",
            'tags' => ['Answer Engine Optimization', 'Generative Engine Optimization', 'LLM Optimization', 'Structured Content', 'AI Search'],
            'who_its_for' => [
                'fits' => [
                    'Your buyers are starting to ask ChatGPT or Perplexity instead of typing a search.',
                    'You already have solid technical SEO and want to extend it to AI answer engines.',
                    'You want honest reporting on AI visibility, not vague "AI optimization" promises.',
                ],
                'not_fit' => "If your technical SEO foundation isn't solid yet, that needs fixing first — this builds on top of it, not instead of it.",
            ],
            'benefits' => [
                ['title' => 'Found when someone asks an AI instead', 'desc' => 'Content structured so tools like ChatGPT and Perplexity can accurately find, understand, and cite the business.', 'list' => ['Visibility in AI-generated answers', 'Content structured for AI comprehension', 'Correctly represented, not misquoted']],
                ['title' => 'A newer channel, without the guesswork', 'desc' => "What actually works for AI visibility gets tested and tracked, not guessed at based on buzzwords.", 'list' => ['Real AI visibility testing', 'No vague "AI optimization" promises', "A clear view of what's actually cited"]],
                ['title' => 'Works alongside SEO, not against it', 'desc' => 'This builds on solid technical SEO instead of competing with it for the same content and budget.', 'list' => ['Complements existing SEO work', 'No duplicated or conflicting effort', 'One coordinated content strategy']],
                ['title' => 'Ahead of where search is heading', 'desc' => "As more buying research moves into AI tools, being structured for them now is a head start most competitors don't have yet.", 'list' => ['Early positioning in a growing channel', "Content ready for how search is changing", 'A head start over competitors who wait']],
            ],
            'img' => 'https://ik.imagekit.io/eoweeomen/mdabdulmottalib/portfolio/SEO-Digital-Marketing.jpg',
            'href' => '/services/aeo-geo-llmo',
            'portfolio_categories' => [],
            'why_wavesync' => [
                ['title' => 'A newer discipline, explained honestly', 'desc' => "What AEO/GEO/LLMO actually means gets explained plainly, not wrapped in buzzwords to sound more advanced than it is."],
                ['title' => 'Works alongside SEO, not instead of it', 'desc' => "This gets added on top of solid technical SEO, not sold as a replacement for it."],
                ['title' => 'Measured the only way it can be', 'desc' => "Visibility in AI answers gets tracked through real testing and monitoring, not vague promises of \"AI optimization.\""],
            ],
            'deliverables' => [
                ['icon' => 'fi-rr-comment-question', 'title' => 'Answer-Formatted Content', 'desc' => 'Content restructured to directly answer the specific questions customers are asking, increasing the odds of featured snippets and AI Overviews.'],
                ['icon' => 'fi-rr-database', 'title' => 'Structured Data for AI', 'desc' => 'Schema and clear content structure that helps generative engines accurately parse what a business actually does.'],
                ['icon' => 'fi-rr-comment-quote', 'title' => 'Citation-Ready Content', 'desc' => "Content written in a way large language models can confidently quote and attribute, not vague marketing copy that's hard to cite."],
                ['icon' => 'fi-rr-chart-network', 'title' => 'AI Visibility Tracking', 'desc' => 'Checking how a business actually appears when asked about in tools like ChatGPT and Perplexity, not just guessing.'],
                ['icon' => 'fi-rr-search-alt', 'title' => 'AI Search Audit', 'desc' => "A check of how a business currently shows up (or doesn't) across ChatGPT, Perplexity, and Google's AI Overviews, before any changes get made."],
                ['icon' => 'fi-rr-book-alt', 'title' => 'FAQ & Knowledge Structuring', 'desc' => 'Content organized around the direct questions customers actually ask, in a format AI tools can parse and quote cleanly.'],
            ],
            'why_it_matters' => "A growing share of people now ask an AI tool instead of typing a search query — a business that's invisible to those tools is missing a channel that traditional SEO alone doesn't cover.",
            'approach_statement' => 'Traditional SEO gets you ranked. This gets you correctly understood and cited by the tools people are increasingly asking instead of searching.',
            'process_steps' => [
                ['title' => 'Discover', 'desc' => 'We check how a business currently shows up (or doesn\'t) across major AI tools.'],
                ['title' => 'Structure', 'desc' => 'Content gets restructured around clear, directly answerable questions and honest, well-organized facts.'],
                ['title' => 'Implement', 'desc' => 'Schema and structured data get added so AI tools can parse the business accurately.'],
                ['title' => 'Monitor', 'desc' => 'Ongoing checks on how citations and AI answers change over time.'],
            ],
            'faqs' => [
                ['question' => 'What is AEO/GEO/LLMO exactly?', 'answer' => 'Answer, Generative, and Large Language Model Optimization — three closely related disciplines focused on being found and cited by AI tools rather than traditional search results alone.'],
                ['question' => 'Is this a replacement for regular SEO?', 'answer' => 'No — it works alongside traditional SEO, not instead of it.'],
                ['question' => 'Can you guarantee my business gets mentioned by ChatGPT?', 'answer' => 'No — nobody can guarantee that. We can meaningfully improve the odds through structure and clarity, honestly.'],
                ['question' => 'How is this measured?', 'answer' => "By checking actual AI tool responses to relevant queries over time, since there's no traditional analytics dashboard for this yet."],
            ],
        ],
        [
            'slug' => 'n8n',
            'category' => 'automation-integration',
            'icon' => 'fi-rr-diagram-project',
            'title' => 'n8n Workflow Automation',
            'desc' => "Custom automations built on n8n, an open-source workflow platform, connecting a business's tools together instead of locking it into one rigid all-in-one system.",
            'tags' => ['n8n', 'Workflow Automation', 'Tool Integration', 'API Connections', 'Self-Hosted Automation'],
            'who_its_for' => [
                'fits' => [
                    'You want automations running on infrastructure you control, not locked into one vendor.',
                    'Your process is repetitive and well-defined enough to map into clear triggers and actions.',
                    "You need error handling and alerts, not a workflow that fails silently.",
                ],
                'not_fit' => "If a task changes shape every time depending on judgment calls, it's not ready to automate yet.",
            ],
            'benefits' => [
                ['title' => 'Automations that fit your actual process', 'desc' => 'Workflows are mapped from how your team actually works, not forced into a generic template.', 'list' => ['Built around your real workflow', 'No forcing a process to fit a template', 'Flexible enough to change as you do']],
                ['title' => 'Nothing locked into one vendor', 'desc' => 'Self-hosted on infrastructure you control, so a pricing change or shutdown at some other company can\'t take your automations with it.', 'list' => ['Self-hosted, not vendor-locked', 'Infrastructure you control', 'No surprise pricing changes down the line']],
                ['title' => "Failures don't fail silently", 'desc' => 'Error handling and alerts mean a broken step gets noticed immediately instead of quietly dropping data for weeks.', 'list' => ['Built-in error handling', 'Alerts when something breaks', 'No silent data loss']],
                ['title' => 'Maintained as your tools change', 'desc' => "Workflows get revisited as your tools or process change, so an automation doesn't quietly stop working after an API update.", 'list' => ['Ongoing workflow maintenance', 'Adjusted as tools and APIs change', "Documented so it's not a black box"]],
            ],
            'img' => 'https://ik.imagekit.io/eoweeomen/WavesyncAgency/ai-automation.png',
            'href' => '/services/n8n',
            'portfolio_categories' => [],
            'why_wavesync' => [
                ['title' => 'Self-hosted, not locked in', 'desc' => "Workflows run on infrastructure you control, not a third-party platform that can change pricing or shut down access."],
                ['title' => 'Built around your real process', 'desc' => "Workflows get mapped from how your team actually works, not a generic template that gets forced to fit."],
                ['title' => 'Failures get caught', 'desc' => "Workflows are set up with error handling and alerts, so a broken step gets noticed, not discovered weeks later."],
            ],
            'deliverables' => [
                ['icon' => 'fi-rr-diagram-project', 'title' => 'Workflow Design', 'desc' => 'The actual automation logic mapped out — triggers, conditions, and actions — before anything gets built.'],
                ['icon' => 'fi-rr-puzzle', 'title' => 'Tool Integrations', 'desc' => 'Your CRM, email platform, calendar, and web forms connected so data moves automatically between them.'],
                ['icon' => 'fi-rr-shield-exclamation', 'title' => 'Error Handling & Monitoring', 'desc' => 'Workflows built to fail safely and alert someone when they do, not silently break.'],
                ['icon' => 'fi-rr-hands-holding', 'title' => 'Documentation & Handoff', 'desc' => "Clear documentation of what each workflow does, so it's not a black box only we understand."],
                ['icon' => 'fi-rr-database', 'title' => 'Self-Hosted Setup', 'desc' => 'n8n hosted on infrastructure you control, not a third-party account that can change terms or pricing later.'],
                ['icon' => 'fi-rr-wrench-simple', 'title' => 'Ongoing Workflow Maintenance', 'desc' => "Workflows revisited as your tools or process change, so an automation doesn't quietly stop working after an API update."],
            ],
            'why_it_matters' => 'n8n is a genuinely flexible, self-hostable automation platform — the value is in how well the workflow is designed, not just that an automation exists.',
            'approach_statement' => "If a task follows a pattern, it doesn't need a person doing it by hand — n8n lets us build that without locking a business into one vendor's ecosystem.",
            'process_steps' => [
                ['title' => 'Discover', 'desc' => "We map the current manual process — what's repetitive, and where it actually breaks down."],
                ['title' => 'Design', 'desc' => 'The workflow gets designed around the real process, not a generic template.'],
                ['title' => 'Build', 'desc' => 'The automation gets built in n8n and connected to the tools involved.'],
                ['title' => 'Test', 'desc' => 'Workflows get tested against real scenarios before going live, then monitored after.'],
            ],
            'faqs' => [
                ['question' => 'What is n8n and why do you use it?', 'answer' => 'n8n is an open-source workflow automation platform — it lets us build custom automations without locking a business into a single rigid platform like Zapier.'],
                ['question' => "Can it connect to tools that don't have an official integration?", 'answer' => 'Often, yes — if a tool has an API or webhook support, n8n can usually connect to it.'],
                ['question' => 'Do I need to host n8n myself?', 'answer' => 'No — we can host it or help set up self-hosting, depending on what fits the business.'],
                ['question' => 'What happens if a workflow fails?', 'answer' => 'Workflows are built with error handling and alerts, so failures get caught instead of silently dropping data.'],
            ],
        ],
        [
            'slug' => 'openclaw',
            'category' => 'automation-integration',
            'icon' => 'fi-rr-terminal',
            'title' => 'Openclaw AI Agents',
            'desc' => "Open-source AI agents built on Openclaw that take real action on a business's behalf — browser automation, email, calendar, and file operations — connected through the messaging apps already in use.",
            'tags' => ['Openclaw', 'AI Agents', 'Custom Agent Workflows', 'Task Automation', 'Multi-Step Task Chains'],
            'who_its_for' => [
                'fits' => [
                    'You have repetitive browser or messaging-based tasks worth automating end to end.',
                    'You want an agent connected to tools you already use, with access scoped deliberately.',
                    "You're comfortable monitoring early runs before trusting it unsupervised.",
                ],
                'not_fit' => "If the task involves open-ended decisions a person should still be making, this isn't the right use for an agent yet.",
            ],
            'benefits' => [
                ['title' => 'Real tasks handled, not a novelty demo', 'desc' => "The agent is set up around specific, repeatable work, not deployed as a general-purpose experiment nobody quite trusts.", 'list' => ['Configured for real, recurring tasks', 'Not a generic out-of-the-box assistant', 'Set up around tools you already use']],
                ['title' => "Access scoped to what's actually needed", 'desc' => 'The agent gets exactly the permissions a task requires, reviewed upfront, not broad unrestricted control over your systems.', 'list' => ['Deliberately scoped permissions', 'Reviewed before going live', 'No blanket access to your systems']],
                ['title' => 'Fits into how your team already works', 'desc' => 'Connected through WhatsApp, Telegram, or Slack, so it fits into existing communication instead of becoming another tool to check.', 'list' => ['Works through tools you already use', 'No new app to learn', 'Fits your existing workflow']],
                ['title' => 'Trusted gradually, not blindly', 'desc' => "Early runs are watched closely for mistakes before the agent is trusted to run unsupervised on anything that matters.", 'list' => ['Monitored closely at first', "Handed off only once it's reliable", 'No unsupervised access from day one']],
            ],
            'img' => 'https://ik.imagekit.io/eoweeomen/WavesyncAgency/ai-automation.png',
            'href' => '/services/openclaw',
            'portfolio_categories' => [],
            'why_wavesync' => [
                ['title' => 'Scoped access, not blanket permissions', 'desc' => "Agents get access to exactly what a task requires, not broad, unrestricted control over your systems."],
                ['title' => 'Self-hosted, on your infrastructure', 'desc' => "Automation runs where you control it, not routed through a third party's servers."],
                ['title' => 'Set up for real tasks', 'desc' => "Agents get configured around specific, repeatable work, not deployed as a general-purpose experiment."],
            ],
            'deliverables' => [
                ['icon' => 'fi-rr-settings-sliders', 'title' => 'Agent Setup', 'desc' => "An Openclaw agent configured for a business's specific tools and tasks, not a generic out-of-the-box assistant."],
                ['icon' => 'fi-rr-browser', 'title' => 'Browser Automation', 'desc' => 'Repetitive web-based tasks — data entry, lookups, form submissions — automated instead of done by hand.'],
                ['icon' => 'fi-rr-messages', 'title' => 'Messaging Integration', 'desc' => 'The agent connected through WhatsApp, Telegram, or Slack, so it fits into how a team already communicates.'],
                ['icon' => 'fi-rr-diagram-project', 'title' => 'Action Workflows', 'desc' => 'Multi-step tasks — combining browser actions, emails, and file operations — automated end to end.'],
                ['icon' => 'fi-rr-key', 'title' => 'Access Scoping & Permissions', 'desc' => "What the agent can and can't touch defined explicitly upfront, reviewed before it's given access to anything real."],
                ['icon' => 'fi-rr-clipboard-list-check', 'title' => 'Task Monitoring & Handoff', 'desc' => "Early runs watched closely for mistakes before the agent is trusted to run unsupervised."],
            ],
            'why_it_matters' => "Openclaw is a genuinely capable, self-hosted AI agent — the difference between it being useful and being a novelty is in how carefully it's set up for a business's actual tasks.",
            'approach_statement' => "An AI agent is only as useful as the tasks it's actually pointed at — we set it up for the repetitive work that's genuinely worth automating.",
            'process_steps' => [
                ['title' => 'Discover', 'desc' => "We identify the repetitive browser and messaging tasks that are actually worth automating."],
                ['title' => 'Design', 'desc' => "The agent's workflows and permissions get scoped carefully before it's given access to anything."],
                ['title' => 'Build', 'desc' => 'The agent is configured and connected to the tools and messaging apps it needs.'],
                ['title' => 'Monitor', 'desc' => "Early usage gets watched closely, then handed off once it's reliably doing what it should."],
            ],
            'faqs' => [
                ['question' => 'What is Openclaw?', 'answer' => 'An open-source AI agent that runs on your infrastructure and connects through messaging apps to take real action — browser automation, email, file operations — on your behalf.'],
                ['question' => 'Is it safe to give an AI agent this much access?', 'answer' => 'Access is scoped deliberately and reviewed early on, rather than handed over all at once.'],
                ['question' => 'Does it run on your servers or ours?', 'answer' => "It's self-hosted, so it runs on infrastructure you control."],
                ['question' => 'What kind of tasks is this actually good for?', 'answer' => "Repetitive, well-defined browser and messaging tasks — not open-ended decision-making a person should still own."],
            ],
        ],
        [
            'slug' => 'hermes',
            'category' => 'automation-integration',
            'icon' => 'fi-rr-messages',
            'title' => 'Hermes AI Agents',
            'desc' => 'Multi-agent workflows built on Hermes for extended, autonomous work — research, analysis, and scheduling — with memory that carries across tasks instead of starting from zero each time.',
            'tags' => ['Hermes', 'AI Agents', 'Multi-Agent Workflows', 'Autonomous Tasks', 'Process Automation'],
            'who_its_for' => [
                'fits' => [
                    'You have a recurring, research-heavy, or multi-step task worth building persistent memory around.',
                    "A single chatbot interaction isn't enough — you need context carried across runs.",
                    "You want performance reviewed as the agent accumulates experience, not left unattended.",
                ],
                'not_fit' => "If it's a simple one-off action, a basic workflow (or n8n) is a better fit than a memory-carrying agent.",
            ],
            'benefits' => [
                ['title' => 'Gets better at the task over time', 'desc' => 'Persistent memory means the agent gets better at a specific, recurring task instead of relearning it from zero every run.', 'list' => ['Performance that compounds with use', 'Context carried across runs', 'No relearning the same task each time']],
                ['title' => "Handles the research you don't have time for", 'desc' => "Agents take on research, synthesis, and reporting tasks that would otherwise eat someone's whole afternoon.", 'list' => ['Research and analysis automated', 'Reports delivered where your team works', 'Recurring tasks handled on a schedule']],
                ['title' => 'Multiple agents, one coordinated outcome', 'desc' => 'Different agents handle different parts of a task and hand off between each other, instead of one agent trying to do everything.', 'list' => ['Multi-agent coordination for complex tasks', 'Each part handled by the right agent', 'One coherent outcome, not fragmented output']],
                ['title' => 'Reviewed as it learns, not left unattended', 'desc' => 'What the agent remembers and how it performs gets checked and adjusted, not left to accumulate unreviewed.', 'list' => ['Regular performance review', 'Memory and workflows adjusted over time', 'Nothing left running unchecked']],
            ],
            'img' => 'https://ik.imagekit.io/eoweeomen/WavesyncAgency/ai-automation.png',
            'href' => '/services/hermes',
            'portfolio_categories' => [],
            'why_wavesync' => [
                ['title' => 'Memory that compounds', 'desc' => "Context carries forward between interactions instead of starting from zero every time."],
                ['title' => 'Built for real workflows', 'desc' => "Set up around the specific information your team actually needs recalled, not a generic chatbot memory."],
                ['title' => 'Reviewed as it learns', 'desc' => "What gets remembered is checked, not left to accumulate unreviewed."],
            ],
            'deliverables' => [
                ['icon' => 'fi-rr-diagram-project', 'title' => 'Agent Workflow Design', 'desc' => 'Multi-step, multi-agent workflows scoped around a specific, recurring business task.'],
                ['icon' => 'fi-rr-chart-network', 'title' => 'Research & Analysis Automation', 'desc' => "Agents set up to handle research, synthesis, and reporting tasks that would otherwise eat someone's whole afternoon."],
                ['icon' => 'fi-rr-calendar-clock', 'title' => 'Scheduling & Coordination', 'desc' => 'Recurring tasks automated on a schedule, with results delivered where the team already works.'],
                ['icon' => 'fi-rr-memory', 'title' => 'Memory & Context Setup', 'desc' => 'Persistent memory configured so the agent gets better at a specific task over time instead of relearning it each run.'],
                ['icon' => 'fi-rr-users', 'title' => 'Multi-Agent Coordination', 'desc' => 'Multiple agents handling different parts of a task and handing off between each other, instead of one agent trying to do everything.'],
                ['icon' => 'fi-rr-refresh', 'title' => 'Ongoing Review & Refinement', 'desc' => "Performance checked as the agent accumulates experience, with memory and workflows adjusted based on what's actually working."],
            ],
            'why_it_matters' => 'Hermes is built for extended, multi-step autonomous work — the payoff compounds as it accumulates context on a specific task, which is different from a one-off chatbot interaction.',
            'approach_statement' => "The value isn't the agent — it's what it remembers after the tenth time it's done the task, not just the first.",
            'process_steps' => [
                ['title' => 'Discover', 'desc' => 'We identify a recurring task substantial enough to be worth building persistent agent memory around.'],
                ['title' => 'Design', 'desc' => 'The workflow and memory structure get planned around that specific task.'],
                ['title' => 'Build', 'desc' => 'The agent workflow is built and connected to the tools and data it needs.'],
                ['title' => 'Refine', 'desc' => 'Performance is reviewed as the agent accumulates experience, and adjusted from there.'],
            ],
            'faqs' => [
                ['question' => 'What is Hermes?', 'answer' => 'A framework for building AI agents that handle extended, multi-step autonomous work — research, analysis, scheduling — with persistent memory across tasks.'],
                ['question' => 'How is this different from a regular chatbot?', 'answer' => 'A chatbot answers one question at a time; Hermes agents carry context and improve at a specific task across many runs.'],
                ['question' => 'What tasks make sense to automate this way?', 'answer' => 'Recurring, research-heavy, or multi-step tasks — not simple one-off actions better handled by a basic script.'],
                ['question' => 'Can this replace a team member?', 'answer' => "Not entirely — it's built to handle the substantial, repeatable parts of a role, freeing a person for judgment calls the agent shouldn't make alone."],
            ],
        ],
    ],

];
