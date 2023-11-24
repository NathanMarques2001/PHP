<?php

namespace Alura\Leilao\Tests\Model;

use Alura\Leilao\Model\Lance;
use Alura\Leilao\Model\Leilao;
use Alura\Leilao\Model\Usuario;
use PHPUnit\Framework\TestCase;

class LeilaoTest extends TestCase
{
    public function testLeilaoNaoDeveReceberMaisDe5LancesPorPessoa()
    {
        self::expectException(\DomainException::class);
        self::expectExceptionMessage('Usuário não pode propor mais de 5 lances por leilão');
        $leilao = new Leilao('Brasília Amarela');
        $ana = new Usuario('Ana');
        $joao = new Usuario('João');
        $maria = new Usuario('Maria');
        $jorge = new Usuario('Jorge');

        $leilao->recebeLance(new Lance($ana, 900));
        $leilao->recebeLance(new Lance($joao, 1000));
        $leilao->recebeLance(new Lance($ana, 1100));
        $leilao->recebeLance(new Lance($maria, 1200));
        $leilao->recebeLance(new Lance($ana, 1300));
        $leilao->recebeLance(new Lance($jorge, 1400));
        $leilao->recebeLance(new Lance($ana, 1500));
        $leilao->recebeLance(new Lance($joao, 1600));
        $leilao->recebeLance(new Lance($ana, 1700));
        $leilao->recebeLance(new Lance($maria, 1800));
        $leilao->recebeLance(new Lance($ana, 1900));

        self::assertCount(10, $leilao->getLances());
        self::assertEquals(1800, $leilao->getLances()[array_key_last($leilao->getLances())]->getValor());
    }

    public function testLeilaoNaoDeveReceberLancesRepetidos()
    {
        self::expectException(\DomainException::class);
        self::expectExceptionMessage('Usuário não pode propor 2 lances consecutivos');
        $leilao = new Leilao('Variante');
        $ana = new Usuario('Ana');

        $leilao->recebeLance(new Lance($ana, 1000));
        $leilao->recebeLance(new Lance($ana, 1500));

        self::assertCount(1, $leilao->getLances());
        self::assertEquals(1000, $leilao->getLances()[0]->getValor());
    }

    /**
     * @dataProvider geraLances
     */
    public function testLeilaoDeveReceberLances(int $qtdLances, Leilao $leilao, array $valores)
    {
        self::assertCount($qtdLances, $leilao->getLances());
        foreach ($valores as $i => $valor) {
            self::assertEquals($valor, $leilao->getLances()[$i]->getValor());
        }
    }

    public static function geraLances()
    {
        $joao = new Usuario('João');
        $maria = new Usuario('Maria');

        $leilaoCom2Lances = new Leilao('Fiat 147 0km');
        $leilaoCom2Lances->recebeLance(new Lance($joao, 1000));
        $leilaoCom2Lances->recebeLance(new Lance($maria, 2000));

        $leilaoCom1Lance = new Leilao('Fusca 1972 0km');
        $leilaoCom1Lance->recebeLance(new Lance($joao, 5000));

        return [
            "leilao-2-lances" => [2, $leilaoCom2Lances, [1000, 2000]],
            "leilao-1-lance" => [1, $leilaoCom1Lance, [5000]]
        ];
    }
}