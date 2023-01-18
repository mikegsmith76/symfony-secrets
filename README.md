# Symfony Secrets

This repository contains the vault classes used by Symfony's secrets mechanism.

I created this as a standalone repository to facilitate usage in a separate application independent of the full Symfony framework. Unfortunately the vault classes are part of the framework bundle and including this in a standalone application is not feasible.

I am in no way claiming credit for this work, and have left the original author attribution in place. The classes have been moved to a separate namespace to prevent collisions with other Symfony classes.

## Safely Managing Secrets

The authors of Symfony have done a great job of documenting how to use the secrets mechanism and whilst the code snippets are not applicable the advice about key management will of course remain the same.

https://symfony.com/doc/current/configuration/secrets.html

## Example Scripts

There are a few basic example scripts highlighting how to use these classes in a standalone manner.

### Generating Keys

``
php examples/generate-keys.php
``

### Save a Secret

``
php examples/save-secret.php --handle=SECRET_NAME --value=SECRET_VALUE
``

### Get Secret Value

``
php examples/reveal-secret.php --handle=SECRET_NAME
``

### List all Secrets

``
php examples/list-secrets.php
``

Optionally reveal all the values of secrets

``
php examples/list-secrets.php --reveal
``