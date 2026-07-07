# Skill: Grav 2 Theme Migration

## Purpose

Use this skill when migrating Grav 1.7 themes to Grav 2.x.

## Responsibilities

* audit Twig templates
* detect deprecated syntax
* modernize YAML blueprints
* validate PHP 8.3 compatibility
* preserve frontend rendering
* ensure Admin Next compatibility

## Migration Workflow

1. Scan theme structure
2. Detect deprecated Twig constructs
3. Validate blueprint compatibility
4. Add compatibility flags
5. Validate asset handling
6. Check modular templates
7. Validate inheritance
8. Validate collections
9. Verify admin integration

## Required Compatibility Block

```yaml
compatibility:
  grav:
    - '1.7'
    - '2.0'
```

## Twig Modernization

### Replace

```twig
{% spaceless %}
```

### With

```twig
{% apply spaceless %}
```

Use null coalescing:

```twig
{{ header.title ?? page.title }}
```

## PHP 8.3 Checks

Look for:

* dynamic properties
* deprecated implicit nullable params
* deprecated string interpolation
* unsafe array access

## Expected Output

For every migration:

* explain issue
* explain Grav 2 impact
* provide before/after code
* keep changes minimal
