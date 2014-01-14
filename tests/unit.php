<?php

require 'bfs.php';

class BFSTest extends PHPUnit_Framework_TestCase
{
    public function testBFS()
    {
        $Graph = [
            'A' => ['B', 'C'],
            'B' => ['A', 'D'],
            'D' => ['B'],
            'C' => ['A',],
        ];
        $this->assertTrue(bfs($Graph, 'A', 'D'));

        $this->assertFalse(bfs($Graph, 'A', 'F'));
    }

    public function testBFSPath()
    {
        $Graph = [
            'A' => ['B', 'C'],
            'B' => ['A', 'D'],
            'D' => ['B', 'E'],
            'C' => ['A', 'E'],
            'E' => ['C', 'B', 'D'],
        ];
        $this->assertEquals(bfs_path($Graph, 'A', 'D'), ['A', 'B', 'D']);
        $this->assertEquals(bfs_path($Graph, 'A', 'E'), ['A', 'C', 'E']);

        $this->assertFalse(bfs_path($Graph, 'A', 'F'));
    }
}
