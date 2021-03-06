<?php


namespace App\GraphQL\Queries;


use App\Models\Wine;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Facades\GraphQL;
use Rebing\GraphQL\Support\Query;

class WinesQuery extends Query
{
    protected $attributes = [
        'name' => 'wines',
    ];

    public function type(): Type
    {
//        return Type::nonNull(Type::listOf(Type::nonNull(GraphQL::type('Wine'))));
        return Type::listOf(GraphQL::type('Wine'));
    }

    public function resolve($root, $args)
    {
        return Wine::all();
    }
}
