# Digster extensions

[![License](https://img.shields.io/packagist/l/wp-papi/papi-digster-extensions.svg)](https://packagist.org/packages/wp-papi/papi-digster-extensions)

[Digster](https://github.com/frozzare/wp-digster) extensions for Papi.

# Installation

```
$ composer require wp-papi/papi-digster-extensions
```

# Example

### Get field

```twig
<p>Hello {{ papi_get_field(event, 'name') }}!</p>
```

### Get option

```twig
<p>Copyright {{ papi_get_option('site') }}</p>
```

### Get slugs

```twig
{% for box in papi_get_slugs(1) %}
  <p>{{ box }}</p>
{% endfor %}
```

# License

MIT © [Fredrik Forsmo](https://github.com/frozzare)
