<?php

namespace DRM\Hydrator;

use Exception;
use ReflectionClass;
use ReflectionException;
use ReflectionNamedType;
use ReflectionProperty;

class DbRestHydrator
{
    /**
     * @throws ReflectionException
     */
    public function hydrate(?array $data, string $class) {
        if (!$data) {
            return null;
        }
        $reflection = new ReflectionClass($class);
        $dto        = new $class();
        $parameters = $reflection->getProperties();

        foreach ($parameters as $parameter) {
            $name = $parameter->getName();
            $type = $parameter->getType();

            if ($type instanceof ReflectionNamedType && !$type->isBuiltin()) {
                if ($this->isArrayOfType($parameter)) {
                    // Handle an array of objects
                    $elementType = $this->getArrayElementType($parameter);
                    $dto->$name = array_map(fn($item) => $this->hydrate($item, $elementType), $data[$name] ?? []);
                } else {
                    // Handle a single nested custom type
                    $nestedClass = $type->getName();
                    $dto->$name = $this->hydrate($data[$name], $nestedClass);
                }
            } else {
                // Handle scalar types
                $dto->$name = $data[$name] ?? null;
            }
        }

        return $dto;
    }

    private function isArrayOfType(ReflectionProperty $parameter): bool {
        $docComment = $parameter->getDocComment();
        return $docComment && preg_match('/@var\s+([^\s]+)\[\]\s+\$' . $parameter->getName() . '/', $docComment);
    }

    private function getArrayElementType(ReflectionProperty $parameter): string {
        $docComment = $parameter->getDocComment();
        if (preg_match('/@var\s+([^\s]+)\[\]\s+\$' . $parameter->getName() . '/', $docComment, $matches)) {
            return $matches[1];
        }
        throw new Exception("Array element type not defined for parameter: " . $parameter->getName());
    }
}
