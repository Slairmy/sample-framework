<?php

namespace Hyf\SampleFramework\DI;

use Psr\Container\ContainerInterface;
use ReflectionClass;

class SimpleContainer implements ContainerInterface
{
    public function get (string $id)
    {
        $parameter = [];
        $reflectionClass = new ReflectionClass($id);

        if ($constructor = $reflectionClass->getConstructor()) {
            foreach ($constructor->getParameters() as  $constructorParameter) {
                $parameter[] = $this->get($constructorParameter->getType()->getName());
            }
        }
        return new $id(...$parameter);
    }

    public function has (string $id): bool
    {
        return true;
    }

}
