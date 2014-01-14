# bfs-php

A very simple [breadth-first search](http://en.wikipedia.org/wiki/Breadth-first_search) implementation written in PHP. Nothing fancy: does what it says on the tin :)

Requires PHP 5.4+

## Docs

    bool bfs(array $graph, mixed $start_node, mixed $end_node)

Return ```true``` if there's a connected path from ```$start_node``` to ```$end_node```. ```false``` otherwise.

    array bfs_path(array $graph, mixed $start_node, mixed $end_node)

Return a path as an array if there's a connected path from ```$start_node``` to ```$end_node```. ```false``` otherwise.

## Examples

    $graph = [
        'A' => ['B', 'C'],
        'B' => ['A', 'D'],
        'D' => ['B'],
        'C' => ['A',],
    ];

    bfs($graph, 'A', 'D'); // true
    bfs($graph, 'A', 'G'); // false
    print_r(bfs_path($graph, 'A', 'D')); // ['A', 'B', 'D']


## Tests

Firstly, download all the deps (just unittest)

    > php composer.phar update

Run tests!

    > vendor/bin/phpunit tests/unit.php

## License

MIT
