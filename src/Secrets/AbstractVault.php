<?php

namespace MySof\Secrets;

/**
 * @author Nicolas Grekas <p@tchwork.com>
 */
abstract class AbstractVault
{
    protected $lastMessage;

    public function getLastMessage(): ?string
    {
        return $this->lastMessage;
    }

    abstract public function generateKeys(bool $override = false): bool;

    abstract public function seal(string $name, string $value): void;

    abstract public function reveal(string $name): ?string;

    abstract public function remove(string $name): bool;

    abstract public function list(bool $reveal = false): array;

    protected function validateName(string $name): void
    {
        if (!preg_match('/^\w++$/D', $name)) {
            throw new \LogicException(sprintf('Invalid secret name "%s": only "word" characters are allowed.', $name));
        }
    }

    protected function getPrettyPath(string $path)
    {
        return str_replace(getcwd().\DIRECTORY_SEPARATOR, '', $path);
    }
}
