<?php

namespace Core\Creational\Builder\Conceptual\Request;

enum MethodsEnum: string
{
    case GET = 'GET';
    case POST = 'POST';
    case PUT = 'PUT';
    case DELETE = 'DELETE';
    case PATCH = 'PATCH';
    case OPTIONS = 'OPTIONS';
    case HEAD = 'HEAD';
    case TRACE = 'TRACE';
    case CONNECT = 'CONNECT';
}