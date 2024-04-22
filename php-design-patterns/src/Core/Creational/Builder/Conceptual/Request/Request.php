<?php

namespace Core\Creational\Builder\Conceptual\Request;

class Request {
    public ?string $url = '';
    public ?array $payload = [];
    public ?MethodsEnum $method = null;
 public function __construct(
      ?string $url,
      ?array $payload,
      ?MethodsEnum $method
 )
 {
     $this->url = $url;
     $this->payload = $payload;
     $this->method = $method;
 }
}