<?php

namespace App\graphql\Mutations;

use App\Article;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Mutation;

class DeleteArticleMutation extends Mutation
{
    protected $attributes = [
        'name' => 'deleteArticle',
        'description' => 'Delete a Article'
    ];

    public function type(): Type
    {
        return Type::boolean();
    }


    public function args(): array
    {
        return [
            'id' => [
                'name' => 'id',
                'type' => Type::int(),
                'rules' => ['required']
            ]
        ];
    }

    public function resolve($root, $args)
    {
        $article = Article::findOrFail($args['id']);

        return  $article->delete() ? true : false;
    }
}
