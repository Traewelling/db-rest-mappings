<?php

namespace DRM\Hydrator;

use ReflectionClass;
use ReflectionException;
use ReflectionNamedType;

class DbRestHydrator
{
    /**
     * @throws ReflectionException
     */
    public function hydrate(array $data, string $class) {
        $reflection = new ReflectionClass($class);
        $dto        = new $class();
        $parameters = $reflection->getProperties();

        foreach ($parameters as $parameter) {
            $name = $parameter->getName();
            $type = $parameter->getType();

            if ($type instanceof ReflectionNamedType && !$type->isBuiltin()) {
                // Handle nested custom types
                $nestedClass = $type->getName();
                $dto->$name = $this->hydrate($data[$name], $nestedClass);
            } else {
                // Handle scalar types
                $dto->$name = $data[$name];
            }
        }

        return $dto;
    }
}
