<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

// Os testes de DB enviam dados fake para o DB. Este trait que incluimos na classe apaga automaticamente os dados enviados ao final de cada testes. Isso mantém o banco limpo.
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_example()
    {
        $this->assertTrue(true);
    }
}
