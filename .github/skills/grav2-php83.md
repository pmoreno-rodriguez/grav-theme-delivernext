# Skill: PHP 8.3 Compatibility

## Purpose

Upgrade Grav plugins/themes to PHP 8.3-safe code.

## Detect

* dynamic properties
* deprecated optional-before-required params
* unsafe null handling
* implicit type conversions
* old-style constructors
* deprecated interpolation syntax

## Prefer

* typed properties
* explicit return types
* constructor promotion
* null coalescing
* strict comparisons

## Never

* rewrite unrelated logic
* introduce breaking API changes unnecessarily
