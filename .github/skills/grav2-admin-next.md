# Skill: Grav Admin Next Compatibility

## Purpose

Ensure compatibility with Grav Admin Next and Admin2.

## Rules

* avoid legacy admin DOM assumptions
* avoid tightly coupled jQuery logic
* preserve blueprint-driven UI
* ensure responsive layouts
* prefer reusable components

## Validate

* forms
* tabs
* blueprint fields
* custom admin pages
* JS integrations
* asset loading

## Avoid

* inline DOM manipulation tied to old Admin selectors
* legacy admin CSS assumptions
* hardcoded admin routes

## Prefer

* event-driven integrations
* blueprint-first configuration
* modular admin JS
