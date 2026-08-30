<?php

return [

    /*
    |--------------------------------------------------------------------
    | Careers
    |--------------------------------------------------------------------
    |
    | Wavesync is a small, project-based studio, not a company with a
    | fixed in-house headcount — so 'listings' below are illustrative of
    | the kind of collaborators brought on project-to-project, not live
    | job requisitions with a hiring deadline. Keep it that way: no
    | invented salaries, start dates, or req numbers. Applications route
    | through the real contact form, not a fake ATS.
    |
    */

    'listings' => [
        [
            'slug' => 'wordpress-developer',
            'title' => 'Freelance WordPress Developer',
            'type' => 'Contract',
            'location' => 'Remote',
            'summary' => 'Building and maintaining custom WordPress themes for client projects — brought on for specific engagements, not a fixed seat.',
            'responsibilities' => [
                'Build custom WordPress themes from approved designs',
                'Keep sites fast, secure, and easy for clients to actually edit',
                'Fix and maintain existing client WordPress sites as needed',
            ],
            'requirements' => [
                'Comfortable with PHP, WordPress theme/plugin development',
                'A portfolio of real WordPress builds, not just heavily modified themes',
                'Can work async across time zones with short, clear check-ins',
            ],
        ],
        [
            'slug' => 'seo-specialist',
            'title' => 'Part-Time SEO Specialist',
            'type' => 'Part-Time',
            'location' => 'Remote',
            'summary' => 'Technical SEO audits and on-page optimization for client projects, on an ongoing part-time basis.',
            'responsibilities' => [
                'Run technical SEO audits and prioritize fixes that actually move rankings',
                'Handle on-page optimization and content structure recommendations',
                'Report on what changed and why — no vanity metrics dressed up as results',
            ],
            'requirements' => [
                'Track record of real ranking/traffic improvements, not just checklists completed',
                'Comfortable with the usual toolset (Search Console, a rank tracker, an audit tool)',
                'Honest about timelines — no promises of page one in 30 days',
            ],
        ],
        [
            'slug' => 'ui-ux-designer',
            'title' => 'Contract UI/UX Designer',
            'type' => 'Contract',
            'location' => 'Remote',
            'summary' => 'Figma-based interface design for client web and product projects, engagement by engagement.',
            'responsibilities' => [
                'Wireframe and design interfaces for client websites and products',
                'Build and maintain reusable component libraries in Figma',
                'Walk through prototypes with real tasks in mind before handoff',
            ],
            'requirements' => [
                'Strong Figma skills and a portfolio of shipped (not just conceptual) work',
                'Understands what\'s actually feasible to build, not just what renders well in a static frame',
                'Can take written feedback and iterate without a live meeting every time',
            ],
        ],
        [
            'slug' => 'automation-specialist',
            'title' => 'Freelance Automation Specialist (n8n)',
            'type' => 'Contract',
            'location' => 'Remote',
            'summary' => 'Building client automation workflows in n8n — connecting CRMs, forms, and email tools into systems that actually run unattended.',
            'responsibilities' => [
                'Design and build n8n workflows from a mapped-out client process',
                'Add error handling and alerts so failures get caught, not discovered weeks later',
                'Document workflows clearly enough that they\'re not a black box',
            ],
            'requirements' => [
                'Hands-on experience building real (not tutorial-only) n8n workflows',
                'Comfortable working with APIs and webhooks across common business tools',
                'Can explain a workflow to a non-technical client in plain language',
            ],
        ],
    ],

];
