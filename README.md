# Mockery Module for Codeception

Integrates [Mockery](https://github.com/padraic/mockery) into Codeception tests.

### Example (`unit.suite.yml`)
 
     modules:
        enabled: [Mockery]

### Install

add into `composer.json`:

```
{
    "require-dev": {
        "codeception/codeception": "*",
        "codeception/mockery-module": "*"
    }
}
```

This will install Mockery itself + basic module that will invoke mockery verifications after each test.