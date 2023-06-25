<?php

namespace App\GraphQL\Queries;

final class Article
{
    /**
     * @param  null  $_
     * @param  array{}  $args
     */
    public function __invoke($_, array $args)
    {
        // TODO implement the resolver
    }
    public function paginate($root, array $args){
   return \App\User::query()->paginate(
    $args['count'],
    ['*'],
    'page',
    $args['page']
   );
    }
}
