# Digster extensions

[Digster](https://github.com/frozzare/digster) extensions for Papi.

# Installation

```
$ composer require wp-papi/papi-digster-extensions
```

# Example

### Get field

Papi function: `papi_get_field`

```twig
<p>Hello {{ get_field(event, 'name') }}!</p>
```

### Get option

Papi function: `papi_get_option`

```twig
<p>{{ get_option('site') }}</p>
```

# License

MIT © [Fredrik Forsmo](https://github.com/frozzare)
