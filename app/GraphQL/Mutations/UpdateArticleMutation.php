<?php

namespace App\graphql\Mutations;

use App\Models\Article;

use Rebing\GraphQL\Support\Facades\GraphQL;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Mutation;

class UpdateArticleMutation extends Mutation
{
    protected $attributes = [
        'name' => 'updateArticle'
    ];

    public function type(): Type
    {
        return GraphQL::type('Article');
    }

    public function args(): array
    {
        return [
            'id' => [
                'name' => 'id',
                'type' =>  Type::nonNull(Type::int()),
            ],
            'name' => [
                'name' => 'name',
                'type' =>  Type::nonNull(Type::string()),
            ],
            'is_completed' => [
                'name' => 'is_completed',
                'type' =>  Type::nonNull(Type::string()),
            ],
            'deadline_date' => [
                'name' => 'deadline_date',
                'type' =>  Type::nonNull(Type::string()),
            ],
            
        ];
    }

    public function resolve($root, $args)
    {
        $article = Article::findOrFail($args['id']);
        $article->fill($args);
        $article->save();

        return $article;
    }
}