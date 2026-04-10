# CLAUDE.md

## Project

This repository contains a custom WordPress + WooCommerce theme.

Theme name: `nice-hair`

Current implementation focus:

- custom WordPress theme
- manual markup
- native Gutenberg
- ACF Pro
- SCSS / SASS
- BEM naming
- Vite for theme assets
- WooCommerce as shop foundation

Important:

- at the current stage, do NOT move business logic into a mini-plugin unless explicitly requested
- current priority is transferring markup and integrating it into Gutenberg + ACF Pro

---

## High-level architecture

This project is NOT a free-form page builder.

It is a controlled CMS layer on top of custom frontend markup.

The client should be able to:

- edit text
- edit images
- edit links
- edit buttons
- edit FAQ content
- edit gallery content
- edit popup content
- create pages from predefined sections/patterns

The client should NOT be able to break layout easily.

---

## Site zones

Main zones:

1. Home
2. Salon
3. Shop
4. Blog

Rules:

- Home / Salon / Shop may have separate header/footer
- Blog uses Home header/footer

Do not change this architecture unless explicitly requested.

---

## Implementation priorities

When implementing a new section, prefer the simplest architecture that preserves layout control.

Decision order:

### Use Gutenberg Pattern when:

- the section is mostly layout-driven
- structure is mostly static
- the client mainly edits text, images, links, buttons
- the section should be reusable as a predefined content section
- layout must remain protected

### Use core Gutenberg blocks when:

- the section is simple enough to be composed safely from native blocks
- template locking / content-only mode is enough
- no strong custom field structure is needed

### Use ACF Block when:

- the section is data-driven
- the section has a strict structured schema
- repeaters / cards / FAQ / gallery / popup-style content is needed
- the editor experience must be tightly controlled
- native blocks/patterns become too fragile or awkward

Do NOT choose ACF Block by default just because ACF Pro is available.

Prefer:

- layout-first sections -> patterns
- data-first sections -> ACF blocks
- simple sections -> core blocks + locking

---

## ACF Pro usage rules

ACF Pro is available and should be used selectively.

Primary ACF candidates:

- FAQ
- gallery
- popup content
- repeater-based card sections
- structured CTA sections
- sections where client must edit structured content without changing layout

Avoid converting everything into ACF blocks.

When using ACF:

- prefer a clean, scalable structure
- use predictable field names
- keep field groups versionable
- use Local JSON
- keep rendering consistent with theme markup and styling

Preferred field naming style:

- `nh_title`
- `nh_text`
- `nh_image`
- `nh_link`
- `nh_link_text`
- `nh_link_url`
- `nh_items`

For repeater subfields, prefer names like:

- `item_title`
- `item_text`
- `item_image`

Avoid weak names like:

- `title2`
- `new_desc`
- `block_image_2`

---

## Theme conventions

Always follow these conventions:

- SCSS / SASS
- BEM naming
- Vite for theme assets
- frontend and editor styles may require separate handling
- keep editor UI as close to frontend as reasonably possible

Do not introduce naming styles or CSS architecture inconsistent with the current project.

---

## Gutenberg conventions

This project uses controlled Gutenberg logic.

When building Gutenberg integrations:

- protect layout where possible
- prefer predefined structure over open-ended editing
- use template locking / content-only where appropriate
- avoid giving the editor unnecessary layout freedom
- keep block markup valid and stable
- if Gutenberg shows invalid content, first inspect mismatch between block comment markup and rendered HTML

If working with patterns:

- ensure valid Gutenberg pattern syntax
- ensure block comment structure matches actual HTML
- do not break editor parsing

If working on editor styling:

- remember editor bundle and frontend bundle may behave differently
- do not assume frontend styles automatically solve editor styling
- verify editor-specific asset loading separately

---

## WooCommerce scope

WooCommerce is the base shop layer.

At the current phase:

- focus on theme integration, markup transfer, product presentation, and Gutenberg/ACF setup
- do NOT introduce additional complex business-logic architecture unless explicitly requested

---

## Workflow rules

Before making recommendations or code changes:

1. Inspect the current repository state first
2. Base all recommendations on the actual existing code
3. Do not invent files, methods, hooks, helpers, or architecture that do not exist
4. If something is uncertain, explicitly separate:
   - what is confirmed by code
   - what is an assumption
5. Keep changes focused only on the requested scope
6. Do not expand the task beyond what was asked

When responding with implementation guidance:

- first briefly explain the architectural choice
- then provide the code
- if replacing a file completely, say so explicitly
- if replacing only a fragment, clearly show what exactly should be replaced

Do not output vague suggestions when a concrete repo-based answer is possible.

---

## Code output rules

Always prefer practical, directly usable code.

When providing code:

- keep it production-oriented
- keep it consistent with project conventions
- avoid unnecessary abstractions
- avoid speculative rewrites
- avoid introducing unrelated refactors

When changing files:

- explicitly say whether the file should be replaced fully or partially
- do not hide important assumptions

The user prefers code in chat messages, not as downloadable files.

---

## Debugging rules

When debugging:

- do not guess first
- inspect current implementation first
- localize the actual failure point
- explain the cause briefly and concretely
- only then provide a fix

If multiple causes are possible, clearly distinguish:

1. confirmed cause(s)
2. possible cause(s)

For Vite / Gutenberg / editor issues:

- remember frontend and editor asset loading are separate concerns
- do not assume a frontend fix automatically resolves editor issues

---

## Design transfer rules

This project often involves transferring sections from a design into WordPress.

When analyzing a design section:

- determine whether it should be a pattern, core block setup, or ACF block
- prefer preserving the exact layout
- prefer protecting layout from editor breakage
- identify which parts are:
  - static/decorative
  - editable content
  - structured repeatable content
- if needed, recommend the simplest viable architecture

For visual parity tasks:

- compare frontend and editor separately
- pay attention to spacing, typography, ordering, responsive behavior, and decorative assets

---

## Communication style

Use concise, practical, implementation-focused responses.

Do:

- be direct
- be clear
- be explicit about file-level changes
- be explicit about confirmed vs assumed findings

Do not:

- invent repository details
- over-explain simple fixes
- propose broader architecture changes unless asked
- drift into unrelated improvements

---

## Current working preference

Current priority:

- transfer sections into WordPress theme
- configure them properly in Gutenberg + ACF Pro
- keep the CMS controlled
- preserve layout fidelity
- avoid unnecessary architecture expansion

Unless explicitly requested otherwise, optimize for:

- fast implementation
- controlled editing
- maintainable theme code
- minimal layout breakage risk
